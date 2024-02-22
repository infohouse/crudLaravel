FROM php:8.1 as php

RUN apt-get update -y
RUN apt-get install -y unzip libpq-dev libcurl4-gnutls-dev
RUN docker-php-ext-install pdo pdo_mysql bcmath

WORKDIR /app
copy . .

COPY --from=composer:2.3.5 /usr/bin/composer /usr/bin/composer

RUN composer install
RUN cp .env.example .env

ENV PORT=8000
ENTRYPOINT [ "php", "artisan", "serve","--host=0.0.0.0" ]

EXPOSE 8000
