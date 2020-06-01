LARAVEL EXAM

Version: Laravel 7x

Run API
1. Create Database cc_db
    create mysql database

2. Update env file 
    update the .env file database connection

3. php artisan key:generate
    generate app key

4. php artisan migrate
    migrate database tables 

5. php artisan db:seed 
    seed data from csv files to newly migrated tables
    CSV Directory: database/seeds/csvs/

6. php artisan run serve