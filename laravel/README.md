IHSANN Farm Backend API – Laravel 12

Overview
This directory organizes specifications and starter scaffolding for migrating to a Laravel 12 backend.

What’s here
- routes/api.php — Drafted API routes matching the PRD
- app/Models — Eloquent-style model stubs
- app/Http/Controllers — Controller stubs per domain
- database/migrations — Migration stubs for entities

Requirements (to build a full Laravel app later)
- PHP 8.2+
- Composer 2+
- MySQL 8+

Quick start (after creating a full Laravel app at laravel/)
1) composer install
2) cp .env.example .env && php artisan key:generate
3) Configure DB in .env
4) php artisan migrate --seed
5) php artisan serve

Notes
- This repo currently contains structure and code stubs only. To run, initialize a Laravel 12 project (e.g. `composer create-project laravel/laravel:^12 ihsann-api`) and then copy these folders into it.

