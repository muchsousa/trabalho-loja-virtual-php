FROM php:7.1.7-apache

RUN apt-get update -yqq && \
    apt-get install nano zlib1g-dev libpq-dev -yqq --no-install-recommends

RUN docker-php-ext-install pdo_mysql mysqli zip mbstring
RUN docker-php-ext-install exif

RUN a2dissite * && a2enmod rewrite

COPY virtualhost.conf /etc/apache2/sites-available/

RUN a2ensite virtualhost.conf
