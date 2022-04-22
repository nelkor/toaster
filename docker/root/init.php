<?php

if (count(scandir('/hleb')) == 2) {
    exec('composer create-project phphleb/hleb /hleb');
    copy('/hleb/default.start.hleb.php', '/hleb/start.hleb.php');
    setDbEnvParams('MYSQL_DATABASE_PORT');
    setDbEnvParams('MYSQL_DATABASE');
    setDbEnvParams('MYSQL_USER');
    setDbEnvParams('MYSQL_PASSWORD');
    rename('/root/dbase.config.php', '/hleb/database/dbase.config.php');
    rename('/root/.php-cs-fixer.php', '/hleb/.php-cs-fixer.php');
    exec('/root/.composer/vendor/bin/php-cs-fixer fix /hleb');
    exec('sh /root/www-data.sh');
} else {
    unlink('/root/dbase.config.php');
    unlink('/root/.php-cs-fixer.php');
}

function setDbEnvParams($envName) {
    file_put_contents('/root/dbase.config.php', str_replace($envName, getenv($envName), file_get_contents('/root/dbase.config.php')));
}
