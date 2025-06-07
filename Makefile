# Makefile for managing Docker containers for Laravel application

.PHONY: build up down migrate

build:
	docker-compose build

up:
	docker-compose up --build -d

down:
	docker-compose down

restart:
	docker-compose restart

migrate:
	docker-compose exec app php artisan migrate

seed:
	docker-compose exec app php artisan db:seed

test:
	docker-compose exec app php artisan test

logs:
	docker-compose logs -f

bash:
	docker-compose exec app bash

artisan:
	docker-compose exec app php artisan

composer:
	docker-compose exec app composer

db:
	touch database/database.sqlite