FROM php:7.4-apache

RUN apt-get update && apt-get install -y git libzip-dev unzip \
    && docker-php-ext-install zip \
    && docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli \
    && a2enmod rewrite headers
    