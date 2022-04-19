<?php

if (count(scandir('/hleb')) == 2) {
    exec('composer create-project phphleb/hleb /hleb');
    copy('/hleb/default.start.hleb.php', '/hleb/start.hleb.php');
    rename('/root/dbase.config.php', '/hleb/database/dbase.config.php');
    rename('/root/.php-cs-fixer.php', '/hleb/.php-cs-fixer.php');
    exec('/root/.composer/vendor/bin/php-cs-fixer fix /hleb');
    exec('sh /root/www-data.sh');
} else {
    unlink('/root/dbase.config.php');
    unlink('/root/.php-cs-fixer.php');
}
