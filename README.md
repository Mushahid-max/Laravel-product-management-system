# 🛍️ Laravel Product Management System

A complete **Product Management System** built with **Laravel 11**.  
This project allows users to **register, log in, and manage products** — including creating, updating, deleting, and viewing products with images.  

This system is simple, responsive, and ideal for learning Laravel CRUD operations with authentication.

---

## 🧭 Table of Contents
- [Features](#-features)
- [Tech Stack](#-tech-stack)
- [Project Structure](#-project-structure)
- [Setup Instructions](#-setup-instructions)
- [Screenshots](#-screenshots)
- [Author](#-author)
- [License](#-license)

---

## 🚀 Features

✅ User Authentication (Register, Login, Logout)  
✅ Add, Edit, Delete, and View Products  
✅ Product Image Upload with Preview  
✅ Product Listing with Pagination  
✅ Validation for Input Fields  
✅ Clean and Responsive UI  
✅ MySQL Database Integration  
✅ Built using MVC architecture  

---

## 🧰 Tech Stack

| Category | Technology |
|-----------|-------------|
| **Framework** | Laravel 11 |
| **Language** | PHP 8+ |
| **Database** | MySQL |
| **Frontend** | Blade Templates, Bootstrap / Tailwind CSS |
| **Server** | XAMPP / PHP Artisan |
| **Version Control** | Git & GitHub |

---

## 🗂️ Project Structure
CrudApp/
├── app/
│ ├── Http/
│ │ ├── Controllers/
│ │ │ ├── ProductController.php
│ │ │ └── AuthController.php
│ ├── Models/
│ │ └── Product.php
├── public/
│ ├── uploads/
│ └── css/
├── resources/
│ ├── views/
│ │ ├── products/
│ │ ├── auth/
│ │ └── layouts/
├── routes/
│ └── web.php
├── .env.example
├── composer.json
└── README.md

yaml
Copy code

---

## ⚙️ Setup Instructions

Follow these steps to run the project locally:

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/Mushahid-max/Laravel-product-management-system.git
2️⃣ Navigate to Project Folder
bash
Copy code
cd Laravel-product-management-system
3️⃣ Install Dependencies
bash
Copy code
composer install
4️⃣ Configure Environment File
bash
Copy code
cp .env.example .env
Update the database settings in .env:

env
Copy code
DB_DATABASE=product_management
DB_USERNAME=root
DB_PASSWORD=
5️⃣ Generate Application Key
bash
Copy code
php artisan key:generate
6️⃣ Run Database Migrations
bash
Copy code
php artisan migrate
7️⃣ Start Development Server
bash
Copy code
php artisan serve
Open in browser: http://localhost:8000

🙌 Author

👨‍💻 Mushahid Khan
🎓 B.Sc IT Student | Full Stack Developer
📧 Email: khanmushahid0204@gmail.com

🌐 GitHub: Mushahid-max
