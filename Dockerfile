FROM php:7.4-apache


COPY . /var/www/html


RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        libpq-dev \
    && docker-php-ext-install pdo_pgsql


EXPOSE 8080

