
compose:
	docker-compose up

compose-test:
	docker-compose run --rm web make test

compose-bash:
	docker-compose run --rm web bash

compose-setup: compose-build
	docker-compose run --rm web make setup

compose-build:
	docker-compose build

compose-db:
	docker-compose exec db psql -U postgres

compose-down:
	docker-compose down -v --remove-orphans
