## JCMS LARAVEL 11

JCMS (Just CMS) adalah sebuah Content Management System (CMS) sederhana yang dibangun menggunakan framework Laravel 11.

## Fitur

- CRUD (Create, Read, Update, Delete) User
- ROLE PERMISSION 
- BLOG
- FILE MANAGER
- SETTING CMS
- Logging with Laravel Telescope

## Instalation

Clone project from `git clone git@github.com:jarwonozt/jcms-laravel-11.git`

**Setup (required php composer in your device)**
```bash
cd jcms-laravel-11
composer install
npm install
npm run build
cp .env.example .env
php artisan key:generate
php artisan storage:link
php artisan migrate
```
```bash
php artisan db:seed
```
**Login**
email : `jarwonozt@gmail.com`
password: `cdaaptnia`

©jarwonozt
