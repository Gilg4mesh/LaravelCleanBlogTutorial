# Laravel Clean Blog Tutorial
## Setup Laravel with Voyager admin
1. composer create-project --prefer-dist laravel/laravel blog
2. set up connection configs in the .env file
3. php artisan make:auth
4. php artisan migrate
5. composer require tcg/voyager
6. php artisan voyager:install --with-dummy

Then you can login to your admin panel from `http://yourdomain.com/admin` using `email: admin@admin.com   password: password`.