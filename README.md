# Library

A list of books was displayed on the main page of the library. The name of the book, the names of the authors and the name of the publisher were placed on each line of the list. The listing used ajax pagination. Wrote a RESTful API for publishing sites that allows you to add, edit, and remove author, publisher, book, and library listings.

Additional done:
1. Authorization for API.
2. Database structure => db.drawio
3. Create interactive API documentation => Library.postman_collection.json.

# Installations

composer install

cp .env.example .env
nano .env

set database name, username and password

php artisan key:generate

php artisan migrate --seed

// if you have already migrated and want to migrate again

php artisan migrate:fresh --seed

php artisan serve

# Admin login password to access
  
username => admin

password => secretpass



