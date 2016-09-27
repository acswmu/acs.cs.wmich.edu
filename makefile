test:
	vendor/bin/phpunit; php artisan migrate:refresh --seed

setup:
	composer install && vendor/bin/homestead make && vagrant up
