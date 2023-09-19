## installation steps follow below
https://backpackforlaravel.com/docs/6.x/installation

## sample to create crud for user table
php artisan backpack:9crud user

## using generator to generate migration and model
## or can use the default laravel command to do the same. 
composer require --dev laracasts/generators

php artisan make:migration:schema create_customers_table --model=0 --schema="name:string:unique,slug:string:unique"
php artisan migrate
## using backpack curd command to create customer crud
php artisan backpack:crud customer #use singular, not plural

## update migration table after add in new columns
php artisan make:migration add_email_dob_in_customerss_table --table=customers

## create model factory for customer
php artisan make:factory CustomerFactory

## create transaction table
php artisan make:migration:schema create_transactions_table --model=0 --schema="trx_type:string:unique,trx_amt:number"
update the full details of the transaction migrations.
php artisan migrate

## using backpack curd command to create transaction crud
php artisan backpack:crud transaction #use singular, not plural

## create transasction seeder
php artisan make:seeder TransactionTableSeeder
## run transaction seeder
php artisan db:seed --class=TransactionTableSeeder

## deploy in apache
https://www.howtoforge.com/tutorial/install-laravel-on-ubuntu-for-apache/

##

