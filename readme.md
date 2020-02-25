### Requirements

* PHP ^7.1.3
* Packages: php7.3-mbstring php7.1-curl php7.1-dom php7.1-xml php7.1-zip php7.1-sqlite3 (or higher)
* Composer
* Node.js & npm
* SQLite for local
* [heroku cli](https://devcenter.heroku.com/articles/heroku-cli#download-and-install)

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
