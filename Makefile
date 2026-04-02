.PHONY:	install	brain-games

install:
	composer install

./bin/brain-games:
	php bin/brain-games

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

./bin/brain-even:
	php bin/brain-even

./bin/brain-calc:
	php bin/brain-calc

./bin/brain-gcd:
	php bin/brain-gcd

./bin/brain-progression:
	php bin/brain-progression

./bin/brain-prime:
	php bin/brain-prime
