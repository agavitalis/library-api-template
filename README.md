# <p align="center"><a href="#">A Library API With Rate Limiting</a></p>


## About

A simple library API illustrating how to implement rate limiting using the Laravel Trottle Middleware and Kinsta technologies:


## Application Requirements

To successfully run this app on your local machine, the following are needed:
- PHP 8.2, Composer and Laravel are installed and configured on your local machine. 
- An active free  Kinsta account.

## Application Endpoint Documentations

You can import the `docs.json` file to your postman collection to learn more on the payload and parameters needed by the applictions endpoints. You can also list the application routes using the commands below: 

```
$ php artisan route:list
```

## Running the application
- Open a new terminal window and execute the command below in the root directory of the application:
```
$ composer install
```

- Duplicate, rename and copy over the content `.env.example` file to `.env` and configure correectly the following database credentials

```
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
## Run migrations
- In the in the root directory of the application run the following commands:

```
$ php artisan migrate
```

## Start the application 
- In the in the root directory of the application run the following commands:

```
$ php artisan serve
```

## Test the application
Then, go to http://localhost:8000 and test it out.

## List the application routes 
- In the in the root directory of the application run the following commands to list the applicatio routes inorder to help you test quickly:

```
$ php artisan route:list
```



