test:
	vendor/bin/phpunit
	php artisan migrate:refresh --seed
