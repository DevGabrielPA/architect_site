# Decisões de arquitetura: banco de dados, contas e perfil de convidado

Status: aprovado em 19/10/2026; D1, D2 e D9 revisados em 20/10/2026 (custo). Este documento orienta o trabalho no Claude Code; quando uma decisão mudar, atualize aqui primeiro.

## 1. Contexto (como o site é hoje)

- Laravel + Blade, 5 idiomas (en sem prefixo; /pt, /fr, /es, /it), hospedado no Render (plano gratuito, Docker, `php -S` em `docker/entrypoint.sh`).
- **Não usa banco em produção.** Portfólio em `config/portfolio.php`; quiz guarda respostas num token criptografado na URL (`quiz_mint_unpaid_token` / `quiz_mint_paid_token` em `app/helpers.php`); pagamento é conferido direto na Stripe (`StyleQuizController::verifyAndMintIfPaid` e `StripeWebhookController`).
- E-mail pelo Resend. Sessão em cookie (`SESSION_DRIVER=cookie`), cache em arquivo (`CACHE_STORE=file`).
- Problema conhecido: o webhook evita processar o mesmo pagamento duas vezes com `Cache::put($dedupeKey, ...)`. Como o cache é em arquivo e o serviço gratuito hiberna, esse registro se perde e a Stripe pode gerar e-mail duplicado.

## 2. Decisões

| # | Decisão | Motivo |
|---|---|---|
| D1 | **Postgres no plano gratuito do Neon** em produção, na mesma região do site no Render; SQLite no desenvolvimento local. Migrar para o Postgres do Render (US$ 6/mês) só se backup gerenciado ou desempenho passarem a justificar: basta copiar os dados e trocar `DB_URL`. | Volume de dados pequeno (contas, quiz, favoritos). Neon grátis: 1 GB, 100 CU-horas/mês, não expira; desliga após 5 min parado. Limites: histórico de restauração de 6 h e pequena espera ao acordar. Supabase grátis descartado (pausa após 7 dias sem uso). |
| D2 | **Site continua no plano gratuito do Render por enquanto** (custo total US$ 0). Passar o web service para o pago (~US$ 7/mês) no lançamento do marketplace. Workspace continua Hobby. | O banco não depende disso; o pago serve para acabar com a hibernação de 15 min (primeira visita espera ~1 min), que prejudica visitas vindas de anúncio e Google. |
| D9 | **Visitas comuns não acessam o banco.** Sessão continua em cookie e cache em arquivo; o banco só é usado quando a pessoa faz algo que precisa ser salvo (quiz, pagamento, favorito, login). O perfil de convidado é criado só nessa primeira ação. | No Neon grátis o processamento é cobrado enquanto o banco está acordado; acessar o banco em toda página gastaria as 100 CU-horas. |
| D3 | **Contas para o site todo**, não só para o marketplace: e-mail e senha (Laravel Breeze) + "Entrar com Google" (Laravel Socialite). | Base para quiz salvo, favoritos e funções futuras. |
| D4 | **Nenhum link de acesso à conta é enviado por e-mail** (sem link mágico, sem "crie sua senha" por e-mail). O e-mail do resultado é recibo + link de compartilhar o resultado. | Um link de conta repassado junto com o resultado exporia a conta. Além disso, pouca gente abre e-mail espontaneamente; a conta é criada dentro do site. |
| D5 | **Login nunca é exigido antes do pagamento nem para ver um resultado já pago.** | Cada passo extra antes de pagar derruba conversão; o resultado foi comprado. |
| D6 | **Perfil de convidado no servidor** para quem não fez login, identificado por cookie assinado e de longa duração. Guarda: resultado(s) do quiz, estilo, favoritos e pagamentos. No login/cadastro, tudo é transferido para a conta. | Os dados não se espalham entre e-mail, navegador e servidor; o marketplace já personaliza sem conta. |
| D7 | **Pagamento da Stripe vinculado ao perfil de convidado**: o checkout envia `guest_id` (e `user_id`, se logado) nos metadados; o webhook grava o pagamento nesse perfil. O token criptografado do quiz continua existindo para não quebrar links já enviados. | O pagamento acompanha a pessoa até a conta. |
| D8 | **Marketplace construído direto no banco** (tabela `products`), sem fase intermediária em arquivo. | O custo de código é praticamente o mesmo, e evita migração futura. |

## 3. Regras de segurança

1. **Nunca guardar dados de cartão.** Do pagamento, guardar só: `stripe_checkout_session_id`, `stripe_payment_intent_id`, status, valor, moeda, e-mail do comprador, data. O cartão fica na Stripe.
2. **Vincular por e-mail só com e-mail verificado.** Pagamentos feitos como convidado só vão para uma conta pelo e-mail se ele estiver verificado (Google já vem verificado; cadastro com senha exige verificação do Breeze). Sem isso, alguém poderia criar conta com o e-mail de outra pessoa e "herdar" o resultado dela. A transferência pelo cookie de convidado (mesmo navegador) não depende disso.
3. **Webhook idempotente no banco**: índice único em `stripe_checkout_session_id` e campo `result_email_sent_at`. Substitui o `Cache::put` de deduplicação e corrige o e-mail duplicado.
4. **Link de compartilhar o resultado** é só leitura, não identifica a conta e pode ser desativado pelo dono.
5. Cookie do convidado: assinado/criptografado pelo Laravel, `HttpOnly`, `Secure`, `SameSite=Lax`.
6. Convidados sem atividade há muito tempo são apagados por rotina agendada (prazo a definir, ex.: 12 meses) e isso consta na política de privacidade (LGPD).

## 4. Modelo de dados (rascunho)

```
users            id, name, email, email_verified_at, password (nullable p/ Google),
                 google_id (nullable), preferred_style (nullable), timestamps

guest_profiles   id (uuid), user_id (nullable, preenchido na transferência),
                 last_seen_at, timestamps

quiz_results     id, guest_profile_id (nullable), user_id (nullable),
                 answers (json), winning_style, locale,
                 share_token (único), share_enabled (bool), timestamps

payments         id, guest_profile_id (nullable), user_id (nullable),
                 quiz_result_id (nullable), stripe_checkout_session_id (único),
                 stripe_payment_intent_id, status, amount, currency,
                 buyer_email, paid_at, timestamps

products         campos da seção 4 de docs/marketplace/ESPECIFICACAO_MARKETPLACE_LV.md

favorites        id, product_id, guest_profile_id (nullable), user_id (nullable),
                 timestamps; único por (product_id, dono)

product_clicks   id, product_id, guest_profile_id (nullable), user_id (nullable),
                 created_at   (rota /go/{id})
```

Regra geral: cada registro pertence a **um convidado ou a um usuário**. Na transferência, `user_id` é preenchido e o convidado é marcado como transferido.

## 5. Fluxos

**Quiz + pagamento sem conta**
1. Primeira visita cria o perfil de convidado (cookie).
2. Ao enviar o quiz, salva `quiz_results` ligado ao convidado (e continua gerando o token, para compatibilidade).
3. Checkout envia `guest_id`, `quiz_result_id` e `quiz_token` nos metadados.
4. Webhook: cria `payments` (idempotente), marca o resultado como pago, envia o e-mail (recibo + link de compartilhar).
5. Página do resultado pago mostra o convite para criar conta (seção 6).

**Cadastro ou login**
- Transfere para a conta tudo o que está no perfil de convidado do navegador atual.
- Se o e-mail estiver verificado, também vincula pagamentos/resultados feitos com esse `buyer_email` em outros aparelhos.

**Marketplace**
- Usa o estilo do resultado mais recente (convidado ou conta) para pré-filtrar.
- Favoritos e cliques gravados no convidado ou na conta.

## 6. Convites para criar conta (dentro do site)

| Momento | Convite |
|---|---|
| Página do resultado, logo após pagar | "Salve seu resultado na sua conta e acesse de qualquer aparelho." Google em destaque; e-mail pré-preenchido com o da Stripe. |
| 1º favorito | Aviso discreto: "Salvo neste aparelho. Crie uma conta para não perder." |
| 3º favorito | Convite mais visível. |
| Topo do marketplace | "Peças do seu estilo X. Crie sua conta para manter a seleção." |
| Página de favoritos | "Você tem N peças salvas só neste navegador." |
| Cabeçalho | Botão "Entrar". |

Não fazer: bloquear resultado pago atrás de login, pop-up de tela cheia, consentimento pré-marcado.

## 7. Ordem de implementação

1. **Infraestrutura**: banco no Neon; `pdo_pgsql` no `Dockerfile`; `php artisan migrate --force` no `docker/entrypoint.sh` (atualizar o comentário que diz que a app não usa banco); variáveis de banco no `render.yaml`; webhook idempotente pela tabela `payments`. Sessão e cache continuam como estão (D9). Prompt: `docs/prompts/ETAPA_1_INFRAESTRUTURA.md`.
2. **Contas**: Breeze + Socialite (Google), verificação de e-mail, `guest_profiles` e transferência no login.
3. **Quiz no banco**: `quiz_results`, pagamento ligado ao convidado/conta, link de compartilhar, convites da seção 6.
4. **Marketplace**: `products`, `favorites`, `product_clicks`, página `/marketplace`.
5. **Painel** de cadastro de produtos (acesso restrito a administradores).

Cada etapa vai ao ar sozinha, sem tirar o site do ar.

## 8. Em aberto

- Prazo de retenção de convidados inativos.
- Moeda do quiz (hoje USD) e dos produtos (BRL/EUR).
- Quem administra o painel e como identificar administradores.
- Rotina de backup diário do Neon (ex.: `pg_dump` agendado), já que o plano grátis só guarda 6 h de histórico.
