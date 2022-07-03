<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Install

- composer install
- config .env
- php artisan key:generate
- php artisan migrate:fresh --seed
- composer require laravel/passport
- php artisan passport:client --personal
- php artisan test