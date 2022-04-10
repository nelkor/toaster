<?php

$entrypoint_path = '/usr/local/bin/docker-php-entrypoint';

$lines = explode(PHP_EOL, file_get_contents($entrypoint_path));

array_splice($lines, 1, 0, 'php /root/init.php');

file_put_contents($entrypoint_path, implode(PHP_EOL, $lines));
