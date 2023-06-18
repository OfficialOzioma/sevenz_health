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
git clone git@github.com:OfficialOzioma/sevenz_health.git
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

[![Run in Postman](https://run.pstmn.io/button.svg)](https://documenter.getpostman.com/view/12234489/2s93si1pnL)

## For GraphQL API Routes

- Visit the application payground on your browser on the url `http://localhost:8000/graphiql`

## GraphQl Queries

 This are some of the graphql queries you can run on the playground

```bash
# this is the mutation
mutation {
    # this is the login mutation, it retunrns the bearers token
    login(email:"peopleoperations@kompletecare.com", password:"password")

    # This store Users Test in the database
    createUserTest(labTests_id: 3) {
        id
        labTests {
        name
        category
        }
    }
}

# This are more queries you can run
{
    # this returns all the available medical Test in the database

    labTests {
        id
        name
        category
    }

    # this returns the user with id of 1 with its medical tests
    
    user(id: 1) {
        name
        email
        username
        userTests {
            labTests {
                name
            }
        }
    }

    userTests {
        labTests {
            name
        } 
    }
}

```

## License

[MIT license](https://opensource.org/licenses/MIT).
