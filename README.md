composer install --ignore-platform-reqs
composer update
composer fund
cp .env.example .env
php artisan key:generate