# Chirper React

This project is based on [bootcamp.laravel.com/blade](https://bootcamp.laravel.com/inertia/installation).

## Local installation

### Requirements

This is a Laravel 9 project. The requirements are the same as a
new [Laravel 9 project](https://laravel.com/docs/9.x/installation).

- [8.0+](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org)

Recommended:

- [Git](https://git-scm.com/downloads)

### Clone

See [GitHub cloning a repository](https://help.github.com/en/articles/cloning-a-repository) for details on how to create a
local copy of this project on your computer.

e.g.

```sh
git clone git@github.com:Pen-y-Fan/chirper.git
```

### Install

Install all the dependencies using composer:

```sh
cd chirper
composer install
```

### Create .env

Create an `.env` file from `.env.example`

```shell script
cp .env.example .env
```

### Generate APP_KEY

Generate an APP_KEY using the artisan command:

```shell script
php artisan key:generate
```

### Configure Laravel

Laravel is compatible with different database servers, MySQL is given as an example setup here, but there should be no
reason why this app wouldn't work on other Laravel supported SQL servers. I have not tested with other SQL servers.

This app uses migrations to generate the tables for the database. Tests will use factories for data. Configure the
Laravel **.env** file with the **database**, updating **username** and **password** as per you local setup.

```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=chirper
DB_USERNAME=YourDatabaseUserName (root)
DB_PASSWORD=YourDatabaseUserPassword
```

### Create the database

Any Laravel compatible database can be used, e.g. using MySQL:

```shell
mysql -u YourDatabaseUserName
```

```sql
CREATE DATABASE chirper CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
exit
```

### Migrate

Run the migration:

```shell
php artisan migrate
```

## Starting

The app can be started as per any [Laravel](https://laravel.com/docs/9.x/installation) local setup. e.g. use artisan:

```shell
php artisan serve
```

Launch the app from the advised url. e.g. <http://127.0.0.1:8000/chirps>

Register and start using the app.

For more information follow the [original tutorial](https://bootcamp.laravel.com/blade/installation).

## Laravel Breeze

The Laravel Breeze starter package has been installed which includes Alpine and Tailwind. This provides the
authentication for this package.

### Assets (optional)

The front end asset have been compiled using Vite. If any changes are made the assets will need to be re-compiled:

```shell
npm install
```

### Vite development server (optional)

To develop the package run the vite development server:

```shell
npm run dev
```

## Credits

- [Laravel Bootcamp](https://bootcamp.laravel.com/blade/installation) - blade version
- [Michael Pritchard \(AKA Pen-y-Fan\)](https://github.com/pen-y-fan).

## License

MIT License (MIT). Please see [License File](LICENSE.md) for more information.
