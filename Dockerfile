# Gunakan image PHP yang sesuai dengan versi Laravel
FROM php:8.2-fpm

# Instal ekstensi yang diperlukan
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    libonig-dev \
    libzip-dev \
    vim

# Instal ekstensi PHP
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

# Copy Composer dari image resmi
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy semua file Laravel ke dalam container
COPY . .

# Set permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Jalankan perintah agar siap digunakan
CMD php artisan serve --host=0.0.0.0 --port=8000