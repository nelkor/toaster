FROM php:8.1-fpm

WORKDIR /root

COPY ./init.php /root/init.php
COPY ./dbase.config.php /root/dbase.config.php
COPY ./.php-cs-fixer.php /root/.php-cs-fixer.php
COPY ./change-entrypoint.php /root/change-entrypoint.php
COPY ./add-hlogin.sh /root/add-hlogin.sh

RUN apt update \
  && apt install unzip \
  && apt install -y zlib1g-dev \
  && apt install -y libpng-dev \
  && curl -sS https://getcomposer.org/installer -o composer-setup.php \
  && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
  && composer global require "friendsofphp/php-cs-fixer" \
  && echo "export PATH=\$PATH:/root/.composer/vendor/bin" > /root/.bashrc \
  && echo "PS1='\w\$ '" >> /root/.bashrc \
  && echo "alias c='php /hleb/console'" >> /root/.bashrc \
  && echo "alias ll='ls -lah'" >> /root/.bashrc \
  && echo "alias fix='php-cs-fixer fix /hleb'" >> /root/.bashrc \
  && chmod +x /root/add-hlogin.sh \
  && pecl install xdebug \
  && docker-php-ext-enable xdebug \
  && docker-php-ext-install pdo_mysql \
  && docker-php-ext-install gd \
  && php /root/change-entrypoint.php
