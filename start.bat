@echo off
    copy .env.example .env
    php artisan migrate --seed
    php artisan key:generate
    php artisan serve
pause