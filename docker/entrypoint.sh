#!/bin/sh
set -e

# Cacheia config/rotas/views para produção.
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Banco Postgres (Neon): só é usado quando a pessoa faz algo que precisa ser
# salvo, como um pagamento — visitas comuns não tocam no banco (regra D9 em
# docs/arquitetura/DECISOES_CONTAS_E_BANCO.md). As migrations rodam a cada
# deploy, mas só se DB_URL estiver configurada; sem ela o site sobe como antes.
if [ -n "${DB_URL:-}" ]; then
    php artisan migrate --force
fi

# Servidor embutido do PHP com vários processos (sem isso ele atende uma
# requisição por vez, e as 7 imagens de cada pergunta do Teste de Estilo
# ficavam numa fila). O docker/router.php entrega os arquivos estáticos com
# cabeçalhos de cache e manda o resto para o Laravel.
cd public
export PHP_CLI_SERVER_WORKERS="${PHP_CLI_SERVER_WORKERS:-4}"
exec php -S 0.0.0.0:"${PORT:-8080}" ../docker/router.php
