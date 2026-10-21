# Progresso: banco de dados, contas e marketplace

Última atualização: 21/10/2026, 16:20. Leia junto com `docs/arquitetura/DECISOES_CONTAS_E_BANCO.md`.

> **Para o Claude Code:** antes de começar qualquer etapa, confira aqui o que já foi feito e em qual computador. Não refaça uma etapa marcada como feita.

## Onde está cada coisa

| O quê | Onde |
|---|---|
| Decisões de arquitetura | `docs/arquitetura/DECISOES_CONTAS_E_BANCO.md` |
| Prompt da etapa 1 | `docs/prompts/ETAPA_1_INFRAESTRUTURA.md` |
| Especificação e wireframe do marketplace (etapa 4) | `docs/marketplace/` |
| Este arquivo (estado atual) | `docs/PROGRESSO.md` |

## Etapa 1 (infraestrutura): FEITA no PC de mesa, AINDA SEM PUSH

5 commits existem **só no PC de mesa** (pasta `C:/Users/gabri/Downloads/arquitetura_site`), em cima do `3da1602`:

| Commit | O que mudou |
|---|---|
| `58e719e` | Dockerfile instala `libpq-dev` e `pdo_pgsql`; `entrypoint.sh` roda `migrate --force` só se `DB_URL` existir |
| `ef2002c` | `render.yaml` com `DB_CONNECTION`, `DB_SSLMODE` e `DB_URL`; `.env.example` com sessão/cache/fila em cookie/file/sync |
| `a6386b7` | Migration `payments` + model `Payment` (sem dados de cartão) |
| `1a1797d` | Webhook da Stripe sem duplicar e-mail: `insertOrIgnore` + `lockForUpdate` + `result_email_sent_at`; erro de banco ou e-mail responde 500 |
| `11d37fc` | Testes `StripeWebhookTest` e `NoDatabaseOnPageViewTest` |

`php artisan test`: 10 passaram (56 verificações). O SQLite dos testes ignora `lockForUpdate`; a proteção contra duas entregas simultâneas só é real no Postgres.

**Não refazer a etapa 1 no notebook.** Primeiro, no PC de mesa: `git pull --rebase` (para pegar os commits de `docs/`) e `git push origin main:etapa-1`. Depois o notebook faz `git fetch` e trabalha a partir da branch `etapa-1`.

## Configuração já feita nos painéis

- **Neon:** projeto `lv-arquitetura` (conta da Larissa), plano grátis, AWS US West 2 (Oregon), Postgres 18, branch `production`, histórico de 6 h.
- **Render:** serviço `lv-arquitetura` em Oregon (US West). Variável `DB_URL` criada.
- **Stripe (ativação da conta para pagamentos reais, em andamento):**
  - forma de pagamento: Checkout pré-construído (o código já usa `StripeCheckoutSession::create` com `price_data`; não é preciso cadastrar produto no painel);
  - categoria: Produtos digitais;
  - descrição no extrato: `LV ARQUITETURA` (ou `LV-ARCHITECTURE.COM`);
  - natureza jurídica: conferir no Cartão CNPJ (Simples Nacional é regime tributário, não natureza jurídica).

## Pendente (nesta ordem)

1. Render → Environment: criar `DB_CONNECTION=pgsql` e `DB_SSLMODE=require` (se ainda não criou).
2. Neon → Computes: limitar o máximo a 0.25 CU (ou 0.5).
3. No `.env` de cada computador: `SESSION_DRIVER=cookie`, `CACHE_STORE=file`, `QUEUE_CONNECTION=sync`.
4. PC de mesa: enviar a etapa 1 para a branch `etapa-1` (sem deploy) e revisar o código.
5. Depois de aprovado: push em `main` (faz o deploy) e testes:
   - log do deploy mostra o `migrate` criando `payments`;
   - navegar no site sem acordar o banco no Neon;
   - compra de teste: e-mail chega uma vez e aparece uma linha em `payments`;
   - "Resend" do evento no painel da Stripe: resposta 200 e nenhum segundo e-mail.
6. Stripe em produção: concluir a verificação da conta, criar o webhook de produção (`https://lv-architecture.com/stripe/webhook`, eventos `checkout.session.completed` e `checkout.session.async_payment_succeeded`) e trocar no Render `STRIPE_SECRET`, `STRIPE_KEY` e `STRIPE_WEBHOOK_SECRET` juntas pelas chaves `live`. Fazer uma compra real de teste e estornar.
7. Página de **política de reembolso** nos 5 idiomas (a Stripe costuma exigir). Regra a definir com a Larissa.

## Notebook: ajustes de header guardados

No notebook há dois stashes com ajustes locais do header (`.logo-text`, menu compacto, hambúrguer em 1240px): `stash@{0}` e `stash@{1}`. Os commits do remoto já mexeram no header. Conferir primeiro se o header atual resolve; se não, aplicar só o que faltar.

## Próximas etapas

2. Contas (Breeze + Google, perfil de convidado), que exige criar o OAuth no Google Cloud Console.
3. Quiz no banco. 4. Marketplace. 5. Painel de produtos.

Decisões com a Larissa: site pago (US$ 7/mês) no lançamento do marketplace, política de privacidade e de reembolso, moedas, quem administra o painel.
