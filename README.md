# AppointmentForm — Bro. Health

A Laravel 10 web application for booking and managing appointments for a health &
fitness service ("Bro. Health"). Members register, log in, and request appointments
or submit scheduling forms; an **admin** dashboard lets staff review, edit, and
delete every submission.

> Originally built as a group coursework project. The front end uses Bootstrap 5,
> and the back end is a standard Laravel 10 application backed by SQLite.

---

## Features

- **Authentication** — register, login, logout, password reset, and email
  verification (Laravel UI + Bootstrap scaffolding).
- **Role-based access control** — every user has a `role` (`0` = member,
  `1` = admin). The `isAdmin` middleware guards all `/admin` routes.
- **Appointment booking** — members pick a person, date, time, and details, and
  submit an appointment request.
- **Scheduling forms** — members submit a form (time slot, day, up to three
  classes, and comments).
- **Admin dashboard** — list, view, edit, and delete all submitted forms and
  appointments, with pagination.
- **Database views** — `ShowAllForms` and `AllAppointment` join user data with
  submissions for convenient read-only listings.

## Tech stack

| Layer      | Tools                                                        |
| ---------- | ------------------------------------------------------------ |
| Framework  | [Laravel 10](https://laravel.com) (PHP 8.1+)                 |
| Auth       | Laravel UI, Laravel Sanctum                                  |
| Front end  | Bootstrap 5, Sass, Axios, built with [Vite](https://vitejs.dev) |
| Database   | SQLite (default) — MySQL also supported                      |
| Testing    | PHPUnit 10                                                   |

## Requirements

- PHP **8.1+** with the `pdo_sqlite` extension
- [Composer](https://getcomposer.org)
- [Node.js](https://nodejs.org) 18+ and npm

## Getting started

```bash
# 1. Clone the repository
git clone https://github.com/LingSy12/AppointmentForm.git
cd AppointmentForm

# 2. Install PHP and JavaScript dependencies
composer install
npm install

# 3. Create your environment file
cp .env.example .env

# 4. Generate the application key
php artisan key:generate
```

### Configure the database (SQLite — recommended)

Create the SQLite database file and point `.env` at it:

```bash
# Create the empty database file
#   macOS / Linux:
touch database/database.sqlite
#   Windows (PowerShell):
#   New-Item database/database.sqlite -ItemType File
```

Then edit `.env` so the database section reads:

```dotenv
DB_CONNECTION=sqlite
# (remove or comment out DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD)
```

> Prefer MySQL? Leave the `DB_*` values from `.env.example` in place and create a
> matching database instead. Note that the view migrations use SQLite syntax and
> may need minor adjustments on MySQL.

### Run migrations and seed data

```bash
php artisan migrate
php artisan db:seed
```

By default `DatabaseSeeder` generates sample users, forms, and appointments via
factories. To create the **admin account**, run the dedicated seeder:

```bash
php artisan db:seed --class=UserTableSeeder
```

This creates an administrator you can log in with:

| Email               | Password   | Role  |
| ------------------- | ---------- | ----- |
| `admin@example.com` | `password` | admin |

> ⚠️ Change this password before deploying anywhere public.

### Build assets and serve

```bash
# Compile front-end assets (use `npm run dev` for hot reloading during development)
npm run build

# Start the development server
php artisan serve
```

The app is now available at <http://localhost:8000>.

## Usage

- Visiting `/` shows the **login** page. New users can register at `/register`.
- After logging in, members land on `/home` and can:
  - submit a scheduling form at `/form`,
  - book an appointment via the **Make Appointment** button (`/make-appointment/{userId}`),
  - read team bios at `/aboutme`.
- **Admins** (role `1`) additionally have access to the `/admin/*` routes for
  managing all submissions. Non-admins are redirected to `/home`.

### Route overview

| Method     | URI                              | Access | Description                     |
| ---------- | -------------------------------- | ------ | ------------------------------- |
| `GET`      | `/`                              | Public | Login page                      |
| `GET/POST` | `/register`, `/login`            | Public | Auth (Laravel UI)               |
| `GET`      | `/home`                          | Auth   | Member home                     |
| `GET/POST` | `/form`                          | Auth   | View / submit a scheduling form |
| `GET`      | `/make-appointment/{userId}`     | Auth   | Appointment booking page        |
| `POST`     | `/submit-appointment/{userId}`   | Auth   | Submit an appointment           |
| `GET`      | `/aboutme`                       | Auth   | Team / about page               |
| `GET`      | `/admin/showform`                | Admin  | List all submitted forms        |
| `GET`      | `/admin/readform/{id}`           | Admin  | View a single form              |
| `GET/PATCH`| `/admin/updateform/{id}`         | Admin  | Edit a form                     |
| `DELETE`   | `/admin/showform/{id}`           | Admin  | Delete a form                   |
| `GET`      | `/admin/AllAppointment/{userId}` | Admin  | List all appointments           |
| `DELETE`   | `/admin/AllAppointment/{userId}` | Admin  | Delete an appointment           |

## Data model

- **users** — `name`, `email`, `password`, `role` (`0` member / `1` admin)
- **forms** — `user_id`, `slot`, `day`, `class1`–`class3`, `comments`
- **appointments** — `user_id`, `selected_person`, `appointment_time`,
  `appointment_date`, `details`
- **ShowAllForms** / **AllAppointment** — SQL views joining the above with `users`

## Testing

```bash
php artisan test
```

## License

Released under the [MIT License](https://opensource.org/licenses/MIT), the same
license as the underlying Laravel framework.
