FROM php:8.2-cli

WORKDIR /app

COPY . .

RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN composer install

RUN php artisan key:generate

RUN chmod -R 777 storage bootstrap/cache

EXPOSE 10000

CMD php -S 0.0.0.0:10000 -t public