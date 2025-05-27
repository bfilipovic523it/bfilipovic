@echo off
title Pokretanje Laravel Projekta
color 0a
echo.
echo #############################################
echo #         POKRETANJE LARAVEL PROJEKTA       #
echo #############################################
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
composer install --no-interaction

echo Generisanje aplikativnog kljuca...
php artisan key:generate

echo Instaliram frontend zavisnosti...
npm install
npm run dev

echo Pokrecem migracije...
php artisan migrate --seed

echo Pokrecem servise...
start "" "http://localhost:8000/"
php artisan serve

echo.
echo #############################################
echo #    APLIKACIJA JE USPESNO POKRENUTA!      #
echo #                                           #
echo #   Server: http://localhost:8000/           #
echo #                                           #
echo #   Pritisnite bilo koji taster za izlaz... #
echo #############################################
echo.
pause