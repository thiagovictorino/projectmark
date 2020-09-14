## About Very Famous Blog

This project was built using [Laravel 8](https://laravel.com/docs/8.x) and [Jetstream](https://jetstream.laravel.com/1.x/introduction.html) 
presets with [VueJS](https://vuejs.org) and [Intertia](https://inertiajs.com)

## Installation

If You will run this project using a regular server, please, see [all Laravel 8 requirements](https://laravel.com/docs/8.x#server-requirements).

Fortunately, this project includes a pre-configured docker-compose.yml file where
includes all that You need, except the npm. So, You will need to have the npm installed locally 
if You want to develop something new.

Considering that You already have this project cloned, follow the instructions below.

### Creating the .env

This project includes a .env.example file where is ready to use, copy this file 
renaming to `.env` 

```sh
$ cp .env.example .env
```

### Using docker

To start the containers

```sh
$ cd docker/
$ docker-compose up -d
```  
This command will create a ngnix server running on port `8888`.

Installing composer packages
```sh
$ docker exec -it pm-app composer install
```

Generating key
```sh
$ docker exec -it pm-app php artisan key:generate
```

Running migrations
```sh
$ docker exec -it pm-app php artisan migrate
```

That is it! 

You can access the blog with the url [http://localhost:8888](http://localhost:8888)

The admin url is [http://localhost:8888/login](http://localhost:8888/login) or 
[http://localhost:8888/register](http://localhost:8888/register) to register a new user.  

### Running tests
Some tests were created and it is accessible using the command 
```sh
$ docker exec -it pm-app php artisan test
```

### Feeding the blog
To feed the blog using a predefined remote rest api, run:

```sh
$ docker exec -it pm-app php artisan pm:seed
```

### Accessing the Admin
A default user was created by migrations, the credentials are
```
user: admin@projectmark.com
pass: admin
```

### Scheduled jobs
There is a job scheduled to run every some minutes. Currently, it is not running
directly by docker. So to keep it working, it is necessary to use a local cron entry.  
