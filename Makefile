seed:
	sh vendor/bin/sail artisan migrate:fresh
	sh vendor/bin/sail artisan db:seed
start:
	sh vendor/bin/sail up -d
	sh vendor/bin/sail artisan migrate:fresh
	sh vendor/bin/sail artisan db:seed
	yarn dev
stop:
	sh vendor/bin/sail down
run-tests:
	docker exec -it bored-panda-quizz-laravel.test-1 ./vendor/bin/phpunit tests
