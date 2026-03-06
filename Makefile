.PHONY:	install	brain-games

install:
	composer install

./bin/brain-games:
	php bin/brain-games

validate:
	composer validate	
