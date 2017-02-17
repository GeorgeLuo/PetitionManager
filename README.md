# PetitionManager
Laravel-Angular web application for managing organization feedback.

Installation:

Install Composer (https://getcomposer.org/download/) and Laravel (5.4) as well as MySQL (XAMPP used).
configure config/database.php to server specifications and make sure you have a database to write to.

within the root directory,

```
php artisan migrate
db:seed --class="PetitionTableSeeder"
db:seed --class="SignatureTableSeeder"
php -S localhost:8080 -t public/
```

Access the home page from localhost:8080/petitions to see all active petitions. These link to the petition main page where the public may sign to show support.

TODO: differentiate behavior between private and public petitions.

TODO: Make User console to create and manage petitions.

TODO: Hide the flashing right before angular call finishes.

TODO: etc.
