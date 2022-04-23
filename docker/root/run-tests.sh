#!/bin/sh

composer require --working-dir=/hleb phphleb/tests
composer dump-autoload --working-dir=/hleb
sh /root/www-data.sh
/hleb/vendor/bin/phpunit /hleb/vendor/phphleb/tests/
sh /root/www-data.sh