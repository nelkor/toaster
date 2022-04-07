FROM php:8.1-fpm

WORKDIR /root

RUN apt update \
  && apt install unzip \
  && curl -sS https://getcomposer.org/installer -o composer-setup.php \
  && php composer-setup.php --install-dir=/usr/local/bin --filename=composer

COPY ./init.sh ./init.sh

RUN chmod +x ./init.sh
RUN echo "alias hleb='~/init.sh'" > ~/.bashrc
