FROM php:8.4-fpm

# Instalamos dependencias del sistema esenciales
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip

# Limpiar cache de apt para que la imagen no pese tanto
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalamos las extensiones de PHP necesarias
# Nota: Quitamos la configuración externa de GD para usar la interna por defecto
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Traemos Composer desde la imagen oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copiamos los archivos del proyecto
COPY . .

# Ajustamos permisos para Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]