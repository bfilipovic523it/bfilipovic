@echo off
    copy .env.example .env
    composer install
    php artisan key:generate
    php artisan migrate --seed
    npm install
    start /B npm run dev
    php artisan serve
pause