#!/bin/sh

php artisan migrate:rollback
php artisan migrate
php artisan db:seed

read -s -n 1 any_key
exit 0
