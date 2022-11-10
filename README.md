# Denis Movie Quotes

#

## Table of Contents

* [Prerequisites](#prerequisites)
* [Getting Started](#getting-started)
* [Configuration](#configuration)
* [Development](#development)

#

## Prerequisites

* _PHP@8.1 and up_
* _composer@2.4 and up_
* _npm@6.14 and up_
* _MYSQL@8 and up_

#

## Getting Started

1. Clone the repository from GitHub:
    ```shell
      git clone https://github.com/RedberryInternship/denis-movie-quotes.git
      cd denis-movie-quotes
    ```
2. Install PHP dependencies:
    ```shell
      composer install
    ```
3. Install JS dependencies:
    ```shell
      npm install
    ```
4. Create the `.env` file and generate an Application Key:
    ```shell
      cp .env.example .env
      php artisan key:generate
    ```

#

## Configuration

1. Modify the default database configuration in your `.env` file:
   > DB_CONNECTION=mysql <br>
   DB_HOST=127.0.0.1 <br>
   DB_PORT=3306 <br>
   DB_DATABASE=movie_quotes <br>
   DB_USERNAME=<your_username> <br>
   DB_PASSWORD=<your_password> <br>

2. Run database migrations:

```shell
    php artisan migrate
```

3. Register an Admin User:

```shell
    php artisan register:admin
```

#

## Development

You need to start both Laravel and Vite servers:

```shell
    php artisan serve
```

```shell
    npm run dev
```

###

Reformat `.php` files after any changes using PHP Coding Standards Fixer:

```shell
    composer format-all
```

...or set up your IDE to reformat files automatically with rules defined inside `.php-cs-fixer.php`
