@echo off
    composer install
    npm install
    cp .env.example .env
    php artisan migrate
    php artisan key:generate
    php artisan serve
    npm run dev
pause