
# Laravel 8 Cars Full JSon API

## Requirements

	PHP = ^7.3|^8.0
    MySQL = ^7.0

## Installation

First clone this repository, install the dependencies, and setup your .env file.

```
git clone https://github.com/ngwa-harry/laravel-cars-api.git cars-api
cd cars-api
composer install
cp .env.example .env
```
### NB: Make sure you change the following in the .env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=
    DB_USERNAME=root
    DB_PASSWORD=

Then create the necessary database.

```
php artisan db
create database cars_db
```

And run the initial migrations

```
php artisan migrate
```
That's it. Now you can use the api, i.e.

```
http://127.0.0.1:8000/api/cars
```


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

