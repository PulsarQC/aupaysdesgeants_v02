#!/bin/bash
cd "$0/../public"
port=8000
while [ -n "`netstat -atn | grep \".$port \"`" ]
do
((port=port+1))
done
php -S 0.0.0.0:$port
