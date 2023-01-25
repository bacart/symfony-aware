.DEFAULT_GOAL := help

help: ## List available make commands
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

cu: ## Run composer update
	composer update

cui: ## Run composer update --ignore-platform-reqs
	composer update --ignore-platform-reqs

ci: ## Run composer install
	composer install

cii: ## Run composer install --ignore-platform-reqs
	composer install --ignore-platform-reqs

cs: ## Run php-cs-fixer fix
	php ./vendor/bin/php-cs-fixer fix --verbose

pst: ## Run phpstan analyse
	php ./vendor/bin/phpstan analyse --memory-limit=-1 --level=8 ./src

ch: ## Run all checks
	make cs && make pst
