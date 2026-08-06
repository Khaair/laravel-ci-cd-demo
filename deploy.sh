#!/bin/bash

set -e

TAG=${1:-latest}
IMAGE="khaair/laravel-ci-cd-demo:$TAG"

echo "Deploying image: $IMAGE"

docker pull $IMAGE

docker compose down

docker compose up -d

docker compose exec -T app php artisan migrate --force

docker compose exec -T app php artisan optimize

echo "Deployment finished."