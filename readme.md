# Microservice Project

The microservice template features an application serving a web api and a worker listening to a queue.
It's based on the [Lumen Framework](https://lumen.laravel.com/), a lightweight subset of [Laravel](https://laravel.com).

## Objectives

**Must haves:**

- Exchange the database from a SQLite to MySQL
- [Upgrade the Lumen Framework](https://laravel.com/docs/5.6/upgrade#upgrade-5.6.0) to Version 5.6
- Provide infrastructure as code
  - Can be a AWS CloudFormation template or comparable format
  - Can be a draft
  - Application and Worker must be separate
  - Application must have publically accessible endpoint
  - Worker must be able to poll SQS
- In your own words describe your scaling policy
  - For the application
  - For the worker


**Nice to haves:**

- +1 if you describe your monitoring and alarming plan
- +1 if you describe how you would improve the worker queuelistener


## Provided structure

In addition to a default [Lumen](https://lumen.laravel.com/) installation the project features the following:

- `docker` dockerfiles and configuration files
  - `docker/app` application service configuration
  - `docker/worker` worker service configuration
  - Both services include configuration files within the `rootfs` folder
- `docker-compose.yml` configuration for the development environment
- `.env.example` example environment configuration file
- `composer.json` dependencies, installation and git hook helpers
- `phpunit.xml` testsuite and test environment configuration


## Installation / Getting started

Initialize this project as a git repository. Make the first commit wihout applying any changes to the code. Then, start your solution.

```
git init .
git add .
git commit -m "Your initial commit message of choice"
```

- Ensure you have php7+ installed on your system
- Ensure you have [docker](https://www.docker.com/) and [docker-compose](https://docs.docker.com/compose/) installed on your system
- [Install composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
- run `composer install` to install dependencies
- create a `.env` from the `.env.example`
- run `composer create-database` to initialize the database
- run `composer test` to verify a successful installation
- start the development environment with `docker-compose up -d`

**Once the environment is running you can hit the following endpoints:**

- 127.0.0.1/
- 127.0.0.1/status


## Project submission

Feel free to place this test on your Github, Gitlab, Bitbucket, etc account as a public repository.
Send the link back to Joblocal. We are looking forward to hearing from you. Good luck! :)
