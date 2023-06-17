# SEVENZ HEALTH

A coding challenge for kompletecare backend developer position

## Technologies used

- PHP 8.1
- Laravel 10
- MySQL 8.0.27
- GraphQL

## Installation

- Clone the repository by running the code below on your terminal

```bash
git clone
```

- Change directory into the project folder

```bash
cd sevenz-health
```

- Install dependencies

```bash
composer install
```

- Create a `.env` file by copying the `.env.example` file

```bash
cp .env.example .env
```

- Generate application key

```bash
php artisan key:generate
```

- Create a database and update the `.env` file with your database credentials

- Migrate database

```bash
php artisan migrate
```

- Seed database

```bash
php artisan db:seed
```

- Start the application

```bash
php artisan serve
```

- Visit the application on your browser on the url `http://localhost:8000`

## For Restful API Routes

- Visit the application on your browser on the url `http://localhost:8000/api` on postman or any other API testing tool

below are the routes and link to postman documentation

```bash
POST /api/signin
GET /api/tests
POST /api/tests/store

```

[![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/1f0b3b3b3b3b3b3b3b3b)

## For GraphQL API Routes

- Visit the application payground on your browser on the url `http://localhost:8000/graphiql`

## Screenshots

![image](https://user-images.githubusercontent.com/24875416/139580544-4b0b9b9a-2b9a-4b0a-8b9a-5b0b9b9a2b9a.png)

![image](https://user-images.githubusercontent.com/24875416/139580557-4b0b9b9a-2b9a-4b0a-8b9a-5b0b9b9a2b9a.png)

## License

[MIT license](https://opensource.org/licenses/MIT).
