seed:
	sh vendor/bin/sail artisan migrate:fresh
	sh vendor/bin/sail artisan db:seed
start:
	sh vendor/bin/sail up -d
	sh vendor/bin/sail artisan migrate:fresh
	sh vendor/bin/sail artisan db:seed
stop:
	sh vendor/bin/sail down
