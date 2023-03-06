## installation
1) clone this repo `https://github.com/mrahmati6903/farzan-test-laravel.git`
2) edit project configurations constants from index.php file:
    - DB_HOST=`{your_db_host}`
    - DB_NAME=`{your_db_name}`
    - DB_USERNAME=`{your_db_username}`
    - DB_PASSWORD=`{your_db_password}`
3) create mysql schema and run starter sample queries from motorbikes.sql
4) to start project built in server run command `php -S 127.0.0.1:8000 index.php` in command line

## routes
- GET `/motorbike/create` motorbike create form
- POST `/motorbike/store` store new motorbike 
- GET `/motorbike/list` list of motorbikes with pagination
- GET `/motorbike/show` show motorbike by id