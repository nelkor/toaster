#!/bin/sh

cmd="/root/.composer/vendor/bin/composer"

for i in $@
  do
    cmd="$cmd $i"
done

$cmd

sh /root/www-data.sh
