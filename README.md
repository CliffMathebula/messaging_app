## Todo

<p align="center"><img src="app.png"/></p>

### Requirements

* PHP 8.1.2*
* npm v12.22.9
* NodeJs 8.5.1 
* 
* MySQL or Maria 

### Getting Started

First clone the application:

```bash
git clone https://github.com/CliffMathebula/messaging_app.git
```

Install PHP dependencies:

```bash
composer install
```

Install JavaScript dependencies (Optional):

> Run only if you would like to make changes to the front-end

```bash
npm install
```

Rename `.env.example` to `.env` then set the app key by running the following command:

```bash
php artisan key:generate --ansi
```

Create a new Database and configure it in the `.env` then run the `migrate` command:

```bash
php artisan migrate
```

Run the application!

```bash
php artisan serve
```

```bash
npm run watch
```

> Don't forget to configure the default email account in the `.env` file.

## License

This Todo application is a open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
