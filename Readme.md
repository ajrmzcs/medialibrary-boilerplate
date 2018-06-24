# Media Library - Boilerplate

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

This is a laravel 5.6/Bootstrap 4 project with a basic [spatie/laravel-medialibrary](https://github.com/spatie/laravel-medialibrary) impplementation, to associate images to eloquent models.

![alt text](https://raw.githubusercontent.com/ajrmzcs/medialibrary-boilerplate/master/capture.PNG)

For installation requirements please refer to both [laravel](https://laravel.com/docs/5.6) and the [media library](https://docs.spatie.be/laravel-medialibrary/v6/introduction) documentation.

### Install steps:
* Clone this repository
* Create mysql database and set credentials in .env file
* run in terminal:
    ```bash
    composer install
    npm install
    npm run dev
    php artisan migrate
    ```
* You should see a table with basic crud action over a Post Model, in which only the minimum required methods have been implemented.
