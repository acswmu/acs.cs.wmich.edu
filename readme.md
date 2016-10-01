# ACS Site

This is the official site for the Academic Computing Society at WMU.

https://acs.cs.wmich.edu/

# Development Notes

## Setup

Requirements: PHP, [composer](https://getcomposer.org), [vagrant](https://vagrantup.com)

Run `make setup` to run common setup commands. This sets up the homestead VM and the .env config file.

After this, you may want to run `vagrant ssh`, and run the following inside the VM:

```bash
cd acs.cs.wmich.edu
php artisan migrate --seed
```

## Testing

Please write a test for each feature that you add. Tests are found in `/tests` and documentation is available [here](https://laravel.com/docs/master/testing).

Run tests inside of the Homestead VM with `make test` or `vendor/bin/phpunit`.
