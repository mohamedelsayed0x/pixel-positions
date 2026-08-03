# Pixel Positions

A modern job listing platform built with **Laravel 13**, following best practices in Laravel development. This project is based on the Laracasts "Pixel Positions" series and is being developed step by step throughout the course.

> 🚧 This project is currently under development.

---

## ✨ Current Progress

- Laravel 13 project setup
- Git version control
- SQLite database
- Pest testing configuration
- Vite asset bundling
- Tailwind CSS integration
- Custom application layout
- Reusable Blade components
- Asset management with Vite
- Theme customization

---

## 🛠️ Tech Stack

- Laravel 13
- PHP 8.4
- Blade
- Tailwind CSS
- Vite
- SQLite
- Pest
- Git

---

## 📂 Project Structure

```text
resources/
├── css/
├── images/
│   └── logo.svg
├── js/
│   └── app.js
└── views/
    └── components/
        ├── layout.blade.php
        ├── job-card.blade.php
        └── section-heading.blade.php
```

---

## 📦 Features Implemented

### Project Initialization

- Fresh Laravel installation
- SQLite database
- Git repository
- Pest testing

### Asset Management

- Assets stored inside `resources`
- Vite asset bundling
- Automatic asset versioning
- Cache busting support

```javascript
import.meta.glob(["../images/**"]);
```

---

### Layout Component

A reusable application layout was created to avoid repeating HTML structure across pages.

Features:

- Shared page layout
- Navigation
- Main content slot
- Clean Blade structure

---

### Tailwind CSS

Configured Tailwind CSS with:

- Blade template scanning
- JavaScript scanning
- Custom theme colors

Example:

```js
theme: {
    extend: {
        colors: {
            black: "#060606",
        },
    },
}
```

---

### Blade Components

Reusable UI components have been extracted.

Current components include:

- Layout
- Job Card
- Section Heading

These components help keep the views clean, reusable, and maintainable.

---

## 🚀 Installation

Clone the repository

```bash
git clone https://github.com/your-username/pixel-positions.git
```

Move into the project

```bash
cd pixel-positions
```

Install PHP dependencies

```bash
composer install
```

Install Node packages

```bash
npm install
```

Copy the environment file

```bash
cp .env.example .env
```

Generate the application key

```bash
php artisan key:generate
```

Run migrations

```bash
php artisan migrate
```

Start the development server

```bash
php artisan serve
```

Run Vite

```bash
npm run dev
```

---

## 📖 Learning Goals

This project is being built to practice:

- Laravel Fundamentals
- Blade Components
- Layout Components
- Tailwind CSS
- Vite
- Clean Project Structure
- Modern Laravel Development

---

## 📌 Status

This repository will continue to grow as more features are implemented throughout the Laracasts course.

Upcoming topics include:

- Authentication
- Authorization
- Job Listings
- Search
- Tags
- File Uploads
- Email Notifications
- Queues
- Testing
- Deployment

---

## 👨‍💻 Author

**Mohamed Elsayed**

Backend Developer | Laravel Developer
