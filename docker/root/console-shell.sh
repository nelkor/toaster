#!/bin/sh
cmd="php /hleb/console"

for i in $@
 do
  cmd="$cmd $i"
done

$cmd

/root/www-data.sh
