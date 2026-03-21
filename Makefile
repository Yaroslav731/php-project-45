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
