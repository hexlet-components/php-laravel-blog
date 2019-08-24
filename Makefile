start:
	npx nf start

setup:
	composer install
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
