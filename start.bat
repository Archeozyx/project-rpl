@echo off

php artisan migrate:reset
php artisan migrate
php artisan storage:link
php artisan db:seed --class=PagesTableSeeder
php artisan db:seed
php artisan serve

pause