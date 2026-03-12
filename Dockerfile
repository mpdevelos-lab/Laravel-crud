FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql

RUN apt-get update && apt-get install -y unzip git curl

COPY . /var/www/html

WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php
RUN php composer.phar install

# Important: point Apache to Laravel public folder
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80