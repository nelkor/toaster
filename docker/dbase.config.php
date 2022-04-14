<?php

const HLEB_TYPE_DB = 'mariadb';

const HLEB_PARAMETERS_FOR_DB = [
    'mariadb' => [
        'mysql:host=db',
        'port=3306',
        'dbname=hleb',
        'charset=utf8',
        'user' => 'hleb',
        'pass' => 'toaster',
    ],
];
