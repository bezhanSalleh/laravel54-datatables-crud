

## Installation


Clone the repo
```
https://github.com/bezhanSalleh/laravel54-datatables-demo.git
```

Move to the newly created folder and install all dependencies:
```
cd laravel54-datatables-demo
composer install
```

create a database and update your .env accordingly. Once done, build tables with the following command:
```
php artisan migrate --seed
```

Or
```
php artisan migrate
php artisan db:seed
```
Finally, generate the application key 
```
php artisan key:generate
```

### License

Please use and re-use however you want.

---