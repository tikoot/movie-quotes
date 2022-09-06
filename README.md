# Movie Quotes App

## Tabe Of Contents

* [Introduction](#introduction)
* [Prerequisites](#prerequisites)
* [Tech Stack](#tech-stack)
* [Getting Started](#getting-started)
* [Development](#development)
* [Resources](#resources)

## Introduction

This is a movie quotes app which shows quote and associated image from movie randomly. App also gives opportunity users to add movie or quote , update and delete them.

## Prerequisites

* PHP
* MYSQL
* Composer
* Node
* Tailwind

## Tech Stack

* laravel - back-end framework
* Spatie Translatable - Package for translation

## Getting Started

1\. First of all you need to clone repository from github:
```sh
git clone https://github.com/RedberryInternship/tiko-otarashvili-movie-quotes.git
```
2\. Next step requires you to run *composer install* in order to install all the dependencies.
```sh
composer install
```
3\. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:
```sh
npm install
```

and also:
```sh
npm run dev
```

4\. Now we need to set our env file. Go to the root of your project and execute this command.
```sh
cp .env.example .env
```
And now you should provide **.env** file all the necessary environment variables:

#
**MYSQL:**
>DB_CONNECTION=mysql

>DB_HOST=127.0.0.1

>DB_PORT=3306

>DB_DATABASE=***

>DB_USERNAME=***

>DB_PASSWORD=***


after setting up **.env** file, execute:
```sh
php artisan config:cache
```
in order to cache environment variables.

4\. Now execute in the root of you project following:
```sh
php artisan key:generate
```
Which generates auth key.

#
**Tailwind:**

5\.Add configured colors under the colors key in the theme section of your tailwind.config.js file:
```sh
theme: {
extend: {
colors: {
'gray': '#404040',
'dark-gray': '#d4d4d4'
},
},
},
```

Add the @import and @layer directives to your ./resources/css/app.css file.
```sh
@import url('http://fonts.cdnfonts.com/css/sansation');
@layer base {
html {
font-family: Sansation, sans-serif;
}
}
```


### Development

You can run Laravel's built-in development server by executing:

```sh
php artisan serve
```

when working on JS you may run:

```sh
npm run dev
```

### Resources

database diagram

https://drawsql.app/teams/tiko/diagrams/quotes-app/embed