# php-laravel-blog

[![github action status](https://github.com/hexlet-components/php-laravel-blog/workflows/PHP%20CI/badge.svg)](../../actions)

### Requirements

  * PHP ^7.4 || ^8.1
  * Extensions: mbstring, curl, dom, xml,zip, sqlite3
  * Composer
  * Node.js & npm
  * SQLite for local
  * [heroku cli](https://devcenter.heroku.com/articles/heroku-cli#download-and-install)

### Setup

For Docker setup update `.env.example`
```
DB_CONNECTION=pgsql
DB_HOST=db
DB_DATABASE=postgres
DB_USERNAME=postgres
DB_PASSWORD=password
```

```bash
make setup
```

### Run

```bash
make start
```

### From Scratch

```bash
composer create-project --prefer-dist laravel/laravel hexlet-laravel-blog
cd hexlet-laravel-blog
make start # Open http://localhost:8000

touch database/database.sqlite
# update .env.example (DB_CONNECTION DB_DATABASE)

php artisan make:model Article --migration
# update migration (add name and body)
php artisan migrate
add .psysh # https://stackoverflow.com/questions/53773098/php-artisan-tinker-crashing-from-any-command
# for relaoding https://github.com/furey/tinx
php artisan tinker

php artisan make:controller ArticleController --resource
# add Route::resource('articles', 'ArticleController');
php artisan route:list
```

[![Hexlet Ltd. logo](https://raw.githubusercontent.com/Hexlet/assets/master/images/hexlet_logo128.png)](https://ru.hexlet.io/pages/about?utm_source=github&utm_medium=link&utm_campaign=php-laravel-blog)

This repository is created and maintained by the team and the community of Hexlet, an educational project. [Read more about Hexlet (in Russian)](https://ru.hexlet.io/pages/about?utm_source=github&utm_medium=link&utm_campaign=php-laravel-blog).

See most active contributers on [hexlet-friends](https://friends.hexlet.io/).
