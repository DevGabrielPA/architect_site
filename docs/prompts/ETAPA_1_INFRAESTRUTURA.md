# Prompt para o Claude Code: Etapa 1, infraestrutura do banco de dados

Cole o texto abaixo no Claude Code (VS Code), com o repositório aberto.

---

Vamos preparar o site para ter banco de dados. Antes de tudo, leia `docs/arquitetura/DECISOES_CONTAS_E_BANCO.md`: ele tem as decisões já tomadas (principalmente D1, D2, D7 e D9 e a seção 3, Regras de segurança). Esta é só a **Etapa 1 (infraestrutura)**. **Não** instale Breeze, Socialite nem crie contas, perfis de convidado ou o marketplace ainda.

## Contexto que você precisa saber

- Laravel 12, PHP 8.2, Docker no Render (plano gratuito), servidor embutido do PHP (`docker/entrypoint.sh` + `docker/router.php`).
- Hoje o site **não usa banco em produção**. O banco será **Postgres no Neon (plano gratuito)**, acessado pela variável `DB_URL` (string de conexão com `sslmode=require`). No desenvolvimento local continua **SQLite**, e os testes usam SQLite em memória (`phpunit.xml`).
- **Regra D9:** visitas comuns não podem tocar no banco. O Neon grátis cobra processamento enquanto o banco está acordado. Por isso **mantenha `SESSION_DRIVER=cookie` e `CACHE_STORE=file` no `render.yaml`**; não troque para `database`.
- O webhook da Stripe (`app/Http/Controllers/StripeWebhookController.php`) hoje evita processar o mesmo evento duas vezes com `Cache::has/put($dedupeKey)`. Como o cache é em arquivo e o plano gratuito apaga arquivos, isso falha e pode gerar e-mail duplicado.

## O que fazer

1. **Docker** (`Dockerfile`): instalar `libpq-dev` e a extensão `pdo_pgsql`, mantendo `pdo_sqlite`.

2. **Migrations no deploy** (`docker/entrypoint.sh`): depois dos comandos de cache, rodar `php artisan migrate --force` **somente se `DB_URL` estiver definida**. Se não estiver, o site sobe normalmente, como hoje. Atualize o comentário que diz que "a app não usa banco de dados".

3. **render.yaml**: adicionar `DB_CONNECTION=pgsql`, `DB_SSLMODE=require` e `DB_URL` com `sync: false` (segredo, preenchido no painel). Não mexer em sessão e cache.

4. **.env.example**: deixar claro que localmente se usa SQLite e mostrar, comentado, como seria o `DB_URL` do Postgres (sem nenhuma credencial real).

5. **Tabela `payments`** (migration + model `App\Models\Payment`), com os campos:
   - `id`
   - `stripe_checkout_session_id` (string, **único**)
   - `stripe_event_id` (string, nullable)
   - `stripe_payment_intent_id` (string, nullable)
   - `status` (string)
   - `amount` (inteiro, em centavos)
   - `currency` (string, 3 letras)
   - `buyer_email` (string, nullable)
   - `locale` (string, nullable)
   - `winning_style` (string, nullable)
   - `result_email_sent_at` (timestamp, nullable)
   - `paid_at` (timestamp, nullable)
   - `timestamps`

   **Nunca** guarde dados de cartão. Os campos de dono (`guest_profile_id`, `user_id`, `quiz_result_id`) ficam para as etapas 2 e 3; não crie agora.

6. **Webhook idempotente pelo banco**, substituindo o `Cache::has/put`:
   - dentro de uma transação, buscar ou criar o `Payment` pelo `stripe_checkout_session_id`, com `lockForUpdate` para não haver corrida quando a Stripe reenviar o mesmo evento ao mesmo tempo;
   - se `result_email_sent_at` já estiver preenchido, responder 200 sem enviar nada;
   - caso contrário, enviar o e-mail como hoje e então preencher `result_email_sent_at`;
   - se o banco estiver fora do ar, responder 500 e registrar no log, para a Stripe tentar de novo mais tarde;
   - manter a verificação de assinatura, o `quiz_token` nos metadados e todo o fluxo atual do quiz funcionando igual.

7. **Testes** (`tests/Feature`), rodando em SQLite em memória:
   - a migration de `payments` roda;
   - o webhook com assinatura válida cria o pagamento e envia o e-mail uma vez (`Mail::fake()`);
   - o mesmo evento entregue duas vezes **não** envia o segundo e-mail;
   - assinatura inválida retorna 400;
   - uma página comum (ex.: `/`) responde sem nenhuma consulta ao banco (use `DB::listen` ou `DB::enableQueryLog` para provar a regra D9).

   Para assinar o evento no teste, gere o cabeçalho `Stripe-Signature` com o mesmo segredo configurado no teste (`t=timestamp,v1=hmac_sha256("{t}.{payload}", segredo)`).

## Como trabalhar

- **Antes de codar, me mostre o plano**: lista de arquivos que vai criar ou alterar e o porquê de cada um. Espere meu ok.
- Estou aprendendo o projeto: em cada arquivo novo, deixe comentários curtos em português explicando o que o código faz, no mesmo estilo dos comentários que já existem.
- Faça commits pequenos e separados: Docker/entrypoint, render.yaml/.env.example, tabela payments, webhook, testes.
- Rode `php artisan test` no final e me mostre o resultado.
- No fim, me dê um resumo do que preciso configurar no Render e do que testar depois do deploy.
