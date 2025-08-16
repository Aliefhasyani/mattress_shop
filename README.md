Please visit this project here : https://mediumpurple-shark-871727.hostingersite.com/public/

Mattress Shop E-Commerce Application

A Laravel-based e-commerce platform designed specifically for selling mattresses online. Includes admin functionality for managing products, companies, and orders.

Table of Contents

Features

Admin Credentials

Installation

Database Setup

Running the Application

Seeding the Database

Technologies Used

Folder Structure

License

Features

Admin panel to manage:

Mattresses (add, edit, delete)

Companies

Orders

Product catalog with images, description, price, and stock quantity

Database seeding for initial setup

Responsive front-end using Laravel + Vite

Admin Credentials

Use the following credentials to log in as an administrator:

Name:Seller

Email: seller@gmail.com

Password:seller123

Installation

Clone this repository:

git clone <repository-url>
cd mattress_shop


Install PHP dependencies:

composer install


Install Node dependencies:

npm install


Build front-end assets:

npm run build


Copy the .env.example to .env and configure your database and other settings:

cp .env.example .env
php artisan key:generate

Database Setup

Create a MySQL database (e.g., mattress_shop)

Update .env with your database credentials:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mattress_shop
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password


Run migrations:

php artisan migrate


Seed the database (adds companies, mattresses, and admin account):

php artisan db:seed

Running the Application

Start Laravel’s development server:

php artisan serve


Visit http://localhost:8000 in your browser.

Seeding the Database

This project includes seeders to populate the database with initial data:

MoreCompany → adds initial companies

MattressSeeder → adds mattresses associated with companies

Admin account is included in the user seeder

Run all seeders with:

php artisan db:seed

Technologies Used

Backend: Laravel 10

Frontend: Vite, Tailwind CSS, Blade Templates

Database: MySQL

Others: Composer, Node.js, NPM

Folder Structure (Key Directories)

app/Models → Eloquent models

database/migrations → Database migrations

database/seeders → Seeders for initial data

resources/views → Blade templates (frontend)

public/ → Compiled front-end assets

routes/web.php → Web routes

License

This project is for educational and personal use. All rights reserved by Mohammad Alief Hasyani.
