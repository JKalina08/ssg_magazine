FROM php:7.4-apache

RUN apt-get update && apt-get install -y git libzip-dev unzip \
    && docker-php-ext-install zip \
    && a2enmod rewrite headers

WORKDIR /var/www/html
COPY . /var/www/html/www

