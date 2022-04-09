#!/bin/sh

rm -rf /hleb
composer create-project phphleb/hleb /hleb
cp /hleb/default.start.hleb.php /hleb/start.hleb.php
chown -R www-data:www-data /hleb

# Эта часть скопирована из /usr/local/bin/docker-php-entrypoint

set -e

if [ "${1#-}" != "$1" ]; then
        set -- php-fpm "$@"
fi

exec "$@"
