start:
	heroku local -f Procfile.dev

setup:
	composer install
	php artisan migrate
	npm install
	touch database/database.sqlite || true

serve:
	php artisan serve

watch:
	npm run watch

migrate:
	php artisan migrate

console:
	php artisan tinker

log:
	tail -f storage/logs/laravel.log

lint:
	composer exec phpcs --verbose

test:
	composer phpunit

deploy:
	git push heroku
