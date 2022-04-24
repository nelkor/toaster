<?php

const DB_ENV_PARAMS = ['MYSQL_DATABASE', 'MYSQL_USER', 'MYSQL_PASSWORD'];

function installDbConfig() {
    $config = file_get_contents('/root/dbase.config.php');

    foreach (DB_ENV_PARAMS as $envName) {
        $config = str_replace($envName, getenv($envName), $config);
    }

    file_put_contents('/hleb/database/dbase.config.php', $config);
    unlink('/root/dbase.config.php');
}

if (count(scandir('/hleb')) == 2) {
    exec('composer create-project phphleb/hleb /hleb');
    copy('/hleb/default.start.hleb.php', '/hleb/start.hleb.php');
    installDbConfig();
    rename('/root/dbase.config.php', '/hleb/database/dbase.config.php');
    rename('/root/.php-cs-fixer.php', '/hleb/.php-cs-fixer.php');
    exec('/root/.composer/vendor/bin/php-cs-fixer fix /hleb');
    exec('sh /root/www-data.sh');
} else {
    unlink('/root/dbase.config.php');
    unlink('/root/.php-cs-fixer.php');
}
