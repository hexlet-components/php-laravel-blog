# php-laravel-blog

[![github action status](https://github.com/hexlet-components/php-laravel-blog/workflows/Master%20workflow/badge.svg)](https://github.com/hexlet-components/php-laravel-blog/actions)

### Requirements

  * PHP ^7.1.3
  * Extensions: mbstring, curl, dom, xml,zip, sqlite3
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

[![Hexlet Ltd. logo](https://raw.githubusercontent.com/Hexlet/hexletguides.github.io/master/images/hexlet_logo128.png)](https://ru.hexlet.io/pages/about?utm_source=github&utm_medium=link&utm_campaign=php-laravel-blog)

This repository is created and maintained by the team and the community of Hexlet, an educational project. [Read more about Hexlet (in Russian)](https://ru.hexlet.io/pages/about?utm_source=github&utm_medium=link&utm_campaign=php-laravel-blog).
