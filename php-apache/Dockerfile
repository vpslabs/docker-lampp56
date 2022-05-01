FROM php:5.6-apache

COPY php-apache/php.ini /usr/local/etc/php/php.ini

RUN docker-php-ext-install mysql mysqli pdo pdo_mysql
