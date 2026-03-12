Clinic Management System (Laravel)

Features
- Doctors management
- Patients management
- Appointment scheduling
- REST API
- Faker seeded test data

API endpoints

GET /api/doctors
GET /api/patients
GET /api/appointments
POST /api/appointments
## Technologies

- Laravel
- PHP
- Blade
- MySQL / SQLite
- Bootstrap

## Installation

Clone repository

git clone https://github.com/IT-developer04/clinic-system.git

Go to project folder

cd clinic-system

Install dependencies

composer install

Create env file

cp .env.example .env

Generate key

php artisan key:generate

Run migrations

php artisan migrate

Start server

php artisan serve
