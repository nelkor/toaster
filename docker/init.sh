#!/bin/bash

composer create-project phphleb/hleb /hleb
cp /hleb/default.start.hleb.php /hleb/start.hleb.php
chown -R www-data:www-data /hleb
