# PetitionManager
Laravel-Angular web application for managing organization feedback.

Installation:

configure config/database.php to server specifications and make sure you have a database to write to (tested with MySQL).

within the root directory,

```
php artisan migrate
db:seed --class="PetitionTableSeeder"
db:seed --class="SignatureTableSeeder"
php -S localhost:8080 -t public/
```

In addition, create a .env file in the root directory with the contents to your specifications:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
Then enter the commands
```
php artisan key:generate
```
and then

```
php -S localhost:8080 -t public/
```
to start hosting the server.

Access the home page from localhost:8080/petitions to see all active petitions. These link to the petition main page where the public may sign to show support.

TODO: differentiate behavior between private and public petitions.
TODO: Make User console to create and manage petitions.
TODO: Hide the flashing right before angular call finishes.
TODO: etc.
