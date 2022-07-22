FROM php:7.0-apache
COPY . /var/www/php
RUN docker-php-ext-install mysqli