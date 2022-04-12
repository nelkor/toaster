<?php

if (count(scandir('/hleb')) == 2) {
    exec('composer create-project phphleb/hleb /hleb');
    copy('/hleb/default.start.hleb.php', '/hleb/start.hleb.php');
    exec('/root/.composer/vendor/bin/php-cs-fixer fix /hleb');
    exec('chown -R www-data:www-data /hleb');
}
