#!/bin/sh
composer install
php -r "file_exists('.env') || copy('.env.example', '.env');"
php artisan key:generate --ansi
touch database/database.sqlite
php artisan migrate:fresh --seed
php artisan serve --host=0.0.0.0 --port=80