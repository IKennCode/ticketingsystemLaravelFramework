# mini-two
Mini 2 project

## Run after cloning
- composer install
- npm i
- php artisan migrate:refresh --seed

## Configure .env after cloning
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=one
- DB_USERNAME=root
- DB_PASSWORD=<your db password>

## Database
- DB name: one

### UPDATES
- Changed users column name from position to job_title
- Adding of users is now available
- Logs generation when user creation is successful

### FEATURES
- Creating of user accounts
- Generating of creation logs
  
