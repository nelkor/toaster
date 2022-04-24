#!/bin/sh

cmd="php /hleb/console"

for i in $@
  do
    cmd="$cmd $i"
done

$cmd

sh /root/www-data.sh
