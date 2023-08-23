## installation steps follow below
https://backpackforlaravel.com/docs/6.x/installation

## sample to create crud for user table
php artisan backpack:crud user

## using generator to generate migration and model
## or can use the default laravel command to do the same. 
composer require --dev laracasts/generators

php artisan make:migration:schema create_customers_table --model=0 --schema="name:string:unique,slug:string:unique"
php artisan migrate
## using backpack curd command to create customer crud
php artisan backpack:crud customer #use singular, not plural

## update migration table after add in new columns
php artisan make:migration add_email_dob_in_customerss_table --table=customers
