@echo off
    composer install
    npm install
    cp .env.example .env
    php artisan migrate --seed
    php artisan key:generate
    php artisan serve
    npm run dev
pause