#!/bin/sh
set -e

# Cacheia config/rotas/views para produção (a app não usa banco de dados,
# então não há migration para rodar aqui — ver Dockerfile/render.yaml).
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Servidor embutido do PHP com vários processos (sem isso ele atende uma
# requisição por vez, e as 7 imagens de cada pergunta do Teste de Estilo
# ficavam numa fila). O docker/router.php entrega os arquivos estáticos com
# cabeçalhos de cache e manda o resto para o Laravel.
cd public
export PHP_CLI_SERVER_WORKERS="${PHP_CLI_SERVER_WORKERS:-4}"
exec php -S 0.0.0.0:"${PORT:-8080}" ../docker/router.php
