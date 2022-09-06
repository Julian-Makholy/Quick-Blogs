<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


## About this Laravel project
A simple and easy to use blog website that has the followig features:
1- create a blog which consists of title , desc , date
2- show which enlarges a blog post
3- trash a blog which puts it in a trash bin page where you can permenantly delete posts
4- Edit a blog post
5- fully functional database storage system
6- Search for for a specific blog by its title!


## Useage guide

required programs are:   php v8, laravel, compser


Go to the folder application using cd command on your cmd or terminal
Run composer install on your cmd or terminal
Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
Run php artisan key:generate
Run php artisan migrate
Run php artisan serve
Go to http://localhost:8000/


## License

This is an open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

