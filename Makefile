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

test:
	composer run-script phpunit

deploy:
	git push heroku
