# 🏭 Outokumpu Gemba Walk Management App

A mobile-first Laravel 10 web application that lets Outokumpu teams **plan, run, and review “Gemba Walks”**—in-person shop-floor inspections used to spot and eliminate the eight types of manufacturing waste.  
The system captures findings on the line, assigns follow-up actions, and produces ready-to-share Excel/PDF reports for the daily meeting.

---

## ✨ Key Features

| Module | What you can do |
|--------|-----------------|
| **Gemba Walks** | Create, schedule, and edit walks; log inspection members; attach observations and photos |
| **Action Lists** | File improvement actions per waste category, set due dates/status, add evidence photos, bulk **import/export** via Excel |
| **Dashboards** | Upcoming-walk widget, action-ageing charts, manager workload view |
| **Role-based access** | `admin`, `manager`, `worker` roles and granular permissions (Spatie) |
| **Reporting** | One-click Excel download or template; printable PDF |
| **Heroku-ready** | Procfile + Vite build script for zero-config push deploys |

---

## 🏗️ Tech Stack

| Layer      | Tech |
|------------|------|
| **Backend**| PHP 8.1, **Laravel 10** |
| **Frontend**| Blade + Vite, **Bootstrap 5.3** (plus Bulma helpers), Axios |
| **Auth & ACL**| Laravel Breeze, Sanctum, Spatie roles/permissions |
| **Data / Reports**| MySQL 8, Maatwebsite Excel |
| **Hosting**| Optimised for Heroku (Apache + PHP buildpack) |

---

## 🚀 Getting Started

### Prerequisites

* PHP ≥ 8.1 & Composer  
* Node ≥ 18 & npm  
* MySQL or MariaDB  
* (Optional) **Heroku CLI** for deployment

### Installation

```bash
git clone https://github.com/PatBaruch/Outokumpu-project.git
cd Outokumpu-project

# PHP dependencies
composer install

# JS/CSS dependencies
npm install

# Environment
cp .env.example .env
php artisan key:generate
# ➜ fill in DB_* values in .env

# Database
php artisan migrate --seed   # seeds roles & demo data

# Dev servers
npm run dev        # Vite hot-reload
php artisan serve  # http://localhost:8000
```

#### Default logins (after seeding)

| Role   | Email                    | Password |
|--------|--------------------------|----------|
| Admin  | admin@example.com        | password |
| Manager| manager@example.com      | password |
| Worker | worker@example.com       | password |

---

## 🗺️ Project Structure

```
app/
├── Http/Controllers/      ← GembaController, ActionListController…
├── Models/                ← Gemba, ActionList, …
database/
├── migrations/            ← create_gembas_table.php, …
├── seeders/               ← RoleSeeder, TestDataSeeder
resources/
├── views/                 ← Blade templates (mobile-first)
├── js/app.js              ← Axios + Bootstrap init
└── sass/app.scss          ← Bulma + custom styles
routes/web.php             ← Web routes & middleware
vite.config.js             ← Vite entry points
Procfile                   ← Heroku start command
```

---

## ⚙️ Running Tests

```bash
php artisan test
```

---

## 📄 License

This project is released under the **MIT License** (see `LICENSE`).

---

## 📧 Contact

For questions or support, contact me via email **Patryk Baruch**  
`baru0001@hz.nl`

## Contributors

| GitHub |
|--------|-----------------|
| [PatBaruch](https://github.com/PatBaruch) |
| [rayansamman](https://github.com/rayansamman) |
| [alisiia02](https://github.com/alisiia02) |
| [brui0155](https://github.com/brui0155) |
| [sergepopov1](https://github.com/sergepopov1) |
| [ionitaBogdan](https://github.com/ionitaBogdan) |


