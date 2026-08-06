#!/bin/bash
set -e

docker compose -f docker-compose.prod.yml pull

docker compose -f docker-compose.prod.yml down

docker compose -f docker-compose.prod.yml up -d

docker compose -f docker-compose.prod.yml exec -T app php artisan migrate --force

docker compose -f docker-compose.prod.yml exec -T app php artisan optimize