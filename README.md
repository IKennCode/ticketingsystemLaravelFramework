# mini-two
Mini 2 project
Please follow the sequence bellow

## Database
- Create a schema named "one"

## Configure .env after cloning
- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=one
- DB_USERNAME=root
- DB_PASSWORD=<your db password>

## Run after cloning
- composer install
- npm i
- php artisan migrate:refresh --seed
- change the username of any record of the users table to admin
- password is "password"
- in your terminal, type the following command "npm run watch"

### UPDATES
- Changed users column name from position to job_title
- Adding of users is now available
- Logs generation when user creation is successful
- Removed bootstrap
- Installed tailwind css
- 

### FEATURES
- Creating of user accounts
- Generating of creation logs
  
