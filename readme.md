### Setup

```sh
$ make setup
```

### Run

```sh
$ make start
```

### From Scatch

```sh
$ composer create-project --prefer-dist laravel/laravel hexlet-laravel-blog
$ cd hexlet-laravel-blog
$ php aristan serve

touch database/database.sqlite
# update .env.example (DB_CONNECTION DB_DATABASE)

$ php artisan make:model Article --migration
# update migration (add name and body)
$ php artisan migrate
$ add .psysh # https://stackoverflow.com/questions/53773098/php-artisan-tinker-crashing-from-any-command
# for relaoding https://github.com/furey/tinx
$ php artisan tinker

$ php artisan make:controller ArticleController --resource
# add Route::resource('articles', 'ArticleController');
$ php artisan route:list
```
