@echo off
    composer install
    cp .env.example .env
    php artisan migrate
    php artisan key:generate
    php artisan serve
pause