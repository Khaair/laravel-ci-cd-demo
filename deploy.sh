#!/bin/bash

set -e

echo "Pulling latest images..."
docker compose -f docker-compose.prod.yml pull

echo "Stopping old containers..."
docker compose -f docker-compose.prod.yml down

echo "Starting containers..."
docker compose -f docker-compose.prod.yml up -d

echo "Waiting for MySQL to become healthy..."
until [ "$(docker inspect -f '{{.State.Health.Status}}' mysql)" = "healthy" ]; do
    echo "MySQL is not ready yet..."
    sleep 3
done

echo "MySQL is ready!"

echo "Running migrations..."
docker compose -f docker-compose.prod.yml exec -T app php artisan migrate --force

echo "Optimizing Laravel..."
docker compose -f docker-compose.prod.yml exec -T app php artisan optimize

echo "Deployment completed successfully!"