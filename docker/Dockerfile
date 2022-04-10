FROM php:8.1-fpm

WORKDIR /root

COPY ./init.php /root/init.php
COPY ./change-entrypoint.php /root/change-entrypoint.php

RUN apt update \
  && apt install unzip \
  && curl -sS https://getcomposer.org/installer -o composer-setup.php \
  && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
  && php /root/change-entrypoint.php
