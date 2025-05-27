@echo off
    copy .env.example .env
    composer install
    php artisan migrate --seed
    php artisan key:generate
    php artisan serve
pause