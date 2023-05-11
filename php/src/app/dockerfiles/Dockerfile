FROM composer:2.5.4 as composer

COPY ./composer.json composer.json

RUN set -ex \
	composer i --no-dev --no-scripts --no-suggest --no-interaction --prefer-dist --optimize-autoloader

COPY . /var/www/html

RUN composer dump-autoload --no-dev --optimize --classmap-authoritative
# Set container's working dir #

FROM php:8.1.16-fpm

RUN apt-get update && apt-get install -y \
    git curl zip unzip vim

WORKDIR /var/www/html

RUN rm -rf dockerfiles

# COPY --from=composer /var/www/html/vendor /var/www/html/vendor
