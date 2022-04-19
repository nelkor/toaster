FROM php:8.1-fpm

COPY ./root /root

WORKDIR /root

RUN apt update \
  && apt install unzip \
  && apt install -y zlib1g-dev \
  && apt install -y libpng-dev \
  && curl -sS https://getcomposer.org/installer -o composer-setup.php \
  && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
  && composer global require "friendsofphp/php-cs-fixer" \
  && chmod +x /root/*.sh \
  && pecl install xdebug \
  && docker-php-ext-enable xdebug \
  && docker-php-ext-install pdo_mysql \
  && docker-php-ext-install gd \
  && php /root/change-entrypoint.php
