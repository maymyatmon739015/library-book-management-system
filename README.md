# 📚 Library Management System

This is a **Library Management System** built with **Laravel**, **Docker**, and **Laravel Sail**.  
It provides API endpoints for:  
- 📖 Book Management (CRUD)  
- 👥 Member Management (CRUD)  
- 📦 Borrowing Process  
- 🔑 User Authentication & Authorization  

---

## 🚀 Requirements

Make sure you have the following installed on your machine:

- [Docker](https://www.docker.com/get-started)  
- [Docker Compose](https://docs.docker.com/compose/install/) (usually bundled with Docker Desktop)  
- [Git](https://git-scm.com/downloads)  
- PHP (optional, for running Artisan commands locally outside Docker)  

---

## 🛠 Installation & Setup

### 1️⃣ Clone the repository

```bash
git clone https://github.com/your-username/your-repo.git
cd your-repo
```

### 2️⃣ Install PHP dependencies

```bash
composer install
```

If you don’t have Composer installed locally, you can run this inside the Sail container later.

### 3️⃣ Start Docker containers with Laravel Sail

```bash
./vendor/bin/sail up -d
```

This will start the Laravel app, database, and other containers in detached mode.

### 4️⃣ Configure environment

Copy the example environment file:

```bash
cp .env.example .env
```

Generate the Laravel application key:

```bash
./vendor/bin/sail artisan key:generate
```

### 5️⃣ Run database migrations and seed data

```bash
./vendor/bin/sail artisan migrate --seed
```

This sets up the database tables and seed sample data.

---

## ⚙️ How to Run the Project

Once Docker containers are running and the database is set up:

- Open your browser and visit:

```
http://localhost
```

- You should see the API is up and running (you can test endpoints with tools like Postman).

---

## 🧪 Running Tests

Run the automated test suite inside the Sail container:

```bash
./vendor/bin/sail artisan test
```

---

## 📦 Common Docker Sail Commands

| Command                              | Description                              |
|------------------------------------|----------------------------------------|
| `./vendor/bin/sail up -d`           | Start containers in detached mode      |
| `./vendor/bin/sail down`            | Stop and remove containers              |
| `./vendor/bin/sail artisan migrate`| Run database migrations                 |
| `./vendor/bin/sail artisan migrate --seed` | Run migrations and seed the database   |
| `./vendor/bin/sail artisan test`   | Run automated tests                     |
| `./vendor/bin/sail logs -f`         | View container logs in real-time       |
| `./vendor/bin/sail composer install`| Install PHP dependencies               |

---

## 📂 Project Structure Overview

```
app/               # Laravel application code (Models, Controllers, etc.)
database/          # Migrations and seeders
resources/views/   # Blade templates (if any)
routes/            # API and web route definitions
tests/             # Automated tests
docker/            # Docker configuration files (if applicable)
docs/              # Documentation files (flowcharts, notes)
```

---
