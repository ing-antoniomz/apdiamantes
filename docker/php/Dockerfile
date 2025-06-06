
# Etapa 1: Build de frontend
FROM node:20 AS nodebuild

WORKDIR /app

COPY package.json package-lock.json ./
RUN npm install

COPY . .
RUN npm run prod --demo3

# Etapa 2: PHP y Laravel
FROM php:8.2-fpm

# Instalar extensiones del sistema y PHP necesarias
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    zip \
    unzip \
    nano \
    git \
    curl \
    libzip-dev \
    npm \
    supervisor \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_pgsql zip gd \
    && pecl install redis && docker-php-ext-enable redis

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copiar el entrypoint y dar permisos de ejecución
#COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
#RUN chmod +x /usr/local/bin/entrypoint.sh

# Copiar archivo de configuración de Supervisor
COPY docker/php/supervisord.conf /etc/supervisord.conf

WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Crear carpeta para logs de supervisor
RUN mkdir -p /var/log/supervisor

# Establece la zona horaria del sistema
ENV TZ=America/Mexico_City
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Comando por defecto: iniciar Supervisor
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]

