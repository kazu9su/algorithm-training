ifneq ("$(wildcard composer.phar)", "")
	COMPOSER := php composer.phar
else
	COMPOSER := composer
endif

all: update

update:
		$(COMPOSER) update

update-source:
		$(COMPOSER) update --prefer-source

install:
		$(COMPOSER) install

validate:
		$(COMPOSER) validate

test:
		./vendor/bin/phpunit tests
