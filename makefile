test:
	vendor/bin/phpunit; php artisan migrate:refresh --seed

setup:
	composer install
	cp .env.example .env
	php artisan key:generate
	vendor/bin/homestead make
	vagrant up
