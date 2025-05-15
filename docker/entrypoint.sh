#!/bin/bash

set -e

echo "Esperando a que la base de datos esté disponible..."

# Esperar a que PostgreSQL esté accesible
until pg_isready -h "${DB_HOST}" -p "${DB_PORT}" -U "${DB_USERNAME}"; do
  >&2 echo "PostgreSQL no está disponible aún — esperando..."
  sleep 2
done

php artisan package:discover --ansi

# Ejecutar comandos de Laravel
php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

php artisan migrate:fresh --seed --force

# Ejecutar el proceso principal (PHP-FPM por defecto)
exec "$@"
