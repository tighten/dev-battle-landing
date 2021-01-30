## Installation

- [Fork this repository](https://help.github.com/articles/fork-a-repo/) (optional).
- Clone the repository locally.
- Install dependencies with `composer install`.
- Copy [`.env.example`](https://github.com/tightenco/confomo/blob/master/.env.example) to `.env` and modify its contents to reflect your local environment.
- Generate an application key with `php artisan key:generate`.
- Migrate the database with `php artisan migrate`.
- Install frontend dependencies with `npm install`.
- Build and watch frontend assets with `npm run dev`.
- Configure a web server, such as the built-in PHP web server, to serve the site using the `public` directory as the document root: `php -S localhost:8080 -t public`.
- Run tests with `vendor/bin/phpunit`.