FranApp

It's a little User administrator app, made with
php, laravel framework, composer, vue and using JWT for
authentication.

It was served by Laragon.

## Table of Contents

1. [Setup Instructions](#setup-instructions)
2. [Environment Setup](#environment-setup)
3. [Database Configuration](#database-configuration)
4. [Running Tests](#running-tests)
5. [Contributing](#contributing)
6. [License](#license)

## Setup Instructions

Follow these steps to set up the project locally:

1. **Clone the Repository**

   ```bash
   git clone https://github.com/FrannyRC96/Laravel-AuthFranRey
   cd Laravel-AuthFranRey

2 **Install Dependencies**
(Make sure you have installed composer already)
composer install
npm install

## Environment Setup

1 **Setup Environment Variables**

execute:
copy the .env.example file to .env

then execute:
cp .env.example .env

2 **Generate the Application key**

execute:
php artisan key:generate

Note:
	Make sure you have PHP 8.2 or higher version installed
	Make sure you have installed Node.js (14 or later) and npm is installed to.
	Ensure you have a compatible database server installed.


## DataBase configuration

1 **Create a database**
in a SQL editor put the following command.

CREATE DATABASE Usuarios

2 **Update the .env file**
Put the following instrucctions
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=Usuarios
DB_USERNAME=root
DB_PASSWORD=

(If your DB host is different just replace, that will depend your app
for use a virtualhost or local host (meaning Laragon, Xampp or any other))

3 **Run migrations**
use the following command
php artisan migrate

4 **Crate the Is_Admin column**
Now we need to create Is_admin column 
in the table "users" this is necesary
	4.1 **Create the migration**
	php artisan make:migration add_is_admin_to_users_table --table=users
	4.2 **Edit migration File**
	Add the following code in database/migrations in 
	the generated migration file:

		public function up()
		{
  		  	Schema::table('users', function (Blueprint $table) {
        			$table->boolean('is_admin')->default(0);
    			});
		}

	4.3 **Add the Down function** (OPTIONAL)
	in case you need, add the down function to
	delete the column:
		public function down()
		{
    			Schema::table('users', function (Blueprint $table) {
        			$table->dropColumn('is_admin');
    			});
		}
	4.5 **Run migration**
	then run the migration with the next command:
	php artisan migrate

## Running Tests

1 **Run Unit Test**
execute:
php artisan test

2 **Run Feature Tests**
execute: 
php artisan test --testsuite=Feature

## Contributing

If you would like to contribute to this project, please follow these steps:

Fork the repository.
Create a new branch (git checkout -b feature/YourFeature).
Commit your changes (git commit -am 'Add new feature').
Push to the branch (git push origin feature/YourFeature).
Create a new Pull Request.

## License
This project is licensed under the MIT License.
it's free and was made by #FranRey
