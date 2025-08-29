

---

# 🛏️ Mattress Shop E-Commerce

*A Laravel-based e-commerce platform for selling mattresses online*

[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=flat-square\&logo=laravel\&logoColor=white)](https://laravel.com/)
[![MySQL](https://img.shields.io/badge/MySQL-8.x-4479A1?style=flat-square\&logo=mysql\&logoColor=white)](https://www.mysql.com/)
[![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.x-38B2AC?style=flat-square\&logo=tailwind-css\&logoColor=white)](https://tailwindcss.com/)
[![License](https://img.shields.io/badge/license-Private-lightgrey?style=flat-square)](#license)

👉 **Live Demo**: [alief.online](https://alief.online)

---

## 📋 Table of Contents

* [✨ Features](#-features)
* [🔑 Admin Credentials](#-admin-credentials)
* [⚙️ Installation](#️-installation)
* [🗄 Database Setup](#-database-setup)
* [🚀 Running the Application](#-running-the-application)
* [🌱 Seeding the Database](#-seeding-the-database)
* [🛠 Technologies Used](#-technologies-used)
* [📂 Folder Structure](#-folder-structure)
* [📜 License](#-license)

---

## ✨ Features

* 🛠 **Admin Panel** to manage:

  * Mattresses (add, edit, delete)
  * Companies
  * Orders
* 🛒 **Product Catalog** with images, description, price, and stock quantity
* 🌱 **Database Seeding** for quick setup
* 📱 **Responsive Front-End** (Laravel + Vite + Tailwind CSS)

---

## 🔑 Admin Credentials

Use the following account to log in as an administrator:

```
Name: Seller  
Email: seller@gmail.com  
Password: seller123  
```

---

## ⚙️ Installation

1. **Clone the repository**

   ```bash
   git clone
   cd mattress_shop
   ```

2. **Install dependencies**

   ```bash
   composer install
   npm install
   ```

3. **Build front-end assets**

   ```bash
   npm run build
   ```

4. **Configure environment**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

---

## 🗄 Database Setup

1. Create a MySQL database (e.g., `mattress_shop`).

2. Update your `.env` file:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=mattress_shop
   DB_USERNAME=your_db_user
   DB_PASSWORD=your_db_password
   ```

3. Run migrations:

   ```bash
   php artisan migrate
   ```

---

## 🌱 Seeding the Database

This project comes with seeders to pre-populate the database:

* **MoreCompanySeeder** → adds initial companies
* **MattressSeeder** → adds mattresses linked to companies
* **UserSeeder** → adds the default admin account

Run all seeders:

```bash
php artisan db:seed
```

---

## 🚀 Running the Application

Start the Laravel development server:

```bash
php artisan serve
```

Then visit: **[http://localhost:8000](http://localhost:8000)**

---

## 🛠 Technologies Used

* **Backend**: Laravel 10
* **Frontend**: Vite, Tailwind CSS, Blade Templates
* **Database**: MySQL
* **Others**: Composer, Node.js, NPM

---







Would you like me to **add a screenshots/demo section with placeholders** so you can later drop images of your app?
