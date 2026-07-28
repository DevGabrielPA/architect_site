#!/bin/sh
set -e

# Cacheia config/rotas/views para produção (a app não usa banco de dados,
# então não há migration para rodar aqui — ver Dockerfile/render.yaml).
php artisan config:cache
php artisan route:cache
php artisan view:cache

exec php artisan serve --host=0.0.0.0 --port="${PORT:-8080}"
