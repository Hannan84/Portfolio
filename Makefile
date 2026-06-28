.PHONY: help install dev build test lint format clean

# Default target
help:
	@echo "Larafolio - Available Commands"
	@echo "=============================="
	@echo ""
	@echo "  make install     - Install all dependencies (Composer & NPM)"
	@echo "  make dev         - Start development server with hot reload"
	@echo "  make build       - Build production assets"
	@echo "  make test        - Run all tests (PHPUnit + Pest)"
	@echo "  make lint        - Run code style checks"
	@echo "  make format      - Auto-format code"
	@echo "  make clean       - Clean temporary files"
	@echo "  make fresh       - Fresh migration with seeders"
	@echo "  make optimize    - Optimize for production"
	@echo ""

# Install dependencies
install:
	@echo "Installing Composer dependencies..."
	composer install --no-interaction --prefer-dist
	@echo "Installing NPM dependencies..."
	npm ci
	@echo "Copying .env file..."
	@cp .env.example .env || true
	@echo "Generating application key..."
	php artisan key:generate || true
	@echo "Installation complete!"

# Start development
dev:
	npm run dev &
	php artisan serve

# Build for production
build:
	npm run build
	php artisan config:cache
	php artisan route:cache
	php artisan view:cache

# Run tests
test:
	php artisan test --coverage

# Run linters
lint:
	./vendor/bin/phpstan analyse
	./vendor/bin/php-cs-fixer fix --dry-run --diff
	npm run lint

# Format code
format:
	./vendor/bin/php-cs-fixer fix
	npm run format

# Clean temporary files
clean:
	@echo "Cleaning temporary files..."
	rm -rf bootstrap/cache/*
	rm -rf storage/framework/cache/*
	rm -rf storage/framework/sessions/*
	rm -rf storage/framework/views/*
	rm -rf storage/logs/*
	rm -rf vendor
	rm -rf node_modules
	@echo "Clean complete!"

# Fresh migration
fresh:
	php artisan migrate:fresh --seed

# Optimize for production
optimize:
	php artisan optimize
	npm run build

# Database commands
db-migrate:
	php artisan migrate

db-seed:
	php artisan db:seed

db-fresh:
	php artisan migrate:fresh --seed

# Cache commands
cache-clear:
	php artisan cache:clear
	php artisan config:clear
	php artisan route:clear
	php artisan view:clear

cache-warm:
	php artisan optimize

# Git utilities
git-status:
	git status

git-log:
	git log --oneline -10

git-push:
	git add .
	git commit -m "chore: automated commit"
	git push origin master