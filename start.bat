@echo off 

title Pokretanje Laravel Projekta
color 0a
echo.
echo #################################################
echo #      BOGDAN FILIPOVIC IT 5/23 PWA PROJEKAT    #
echo #################################################
echo.

echo Proveravam Composer...
where composer >nul 2>&1
if %errorlevel% neq 0 (
    echo ERROR: Composer nije instaliran!
    echo Preuzmite sa: https://getcomposer.org/download/
    pause
    exit /b
)

echo Proveravam .env fajl...
if not exist ".env" (
    echo Kreiranje .env fajla...
    copy .env.example .env
    echo .env fajl kreiran iz .env.example
) else (
    echo .env fajl vec postoji
)

echo Instaliram PHP zavisnosti...
composer install --no-scripts --no-plugins --no-autoloader
composer dump-autoload

echo Generisanje aplikativnog kljuca...
php artisan key:generate

echo Instaliram frontend zavisnosti...
npm install

echo Pokrecem migracije...
php artisan migrate --seed

start cmd /k "php artisan serve"
start cmd /k "npm run dev"

pause