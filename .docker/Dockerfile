FROM php:apache

RUN docker-php-ext-install pdo_mysql mysqli opcache \ 
    && docker-php-ext-enable mysqli

WORKDIR /var/www/html