# Blog (Laravel)



<p align="center">
  <strong>Beautiful blog built with Laravel</strong> — posts, tags, comments, likes, saves, newsletter and author follow system. 🚀
</p>

---

## ✨ Overview

This repository contains a blog built with Laravel. It's designed to be simple to run locally and extendable for features like:

- Create, edit, delete and view blog posts (`app/Models/Posts.php`).
- Tagging system for posts (`app/Models/Tags.php`, `app/Models/tag_listings.php`).
- Comments with moderation policies (`app/Models/Comments.php`, `app/Policies/CommentsPolicy.php`).
- Likes and saved posts (`app/Models/PostLike.php`, `app/Models/Savepost.php`).
- Newsletter posts and subscription management (`app/Models/Newsletter.php`, `app/Models/NewsletterPost.php`).
- User follow system (`app/Models/UserFollower.php`).
- Authorization using Policies (`app/Policies`).

> Note: This README focuses on developer setup and features. Add a `DEMO` link and screenshots to showcase the live site if available.

---

## 🚀 Quick Start

1. Clone the repo

   ```bash
   git clone <your-repo-url> && cd blog
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Install Node dependencies and build assets:

   ```bash
   npm install
   npm run dev
   ```

4. Copy the environment file and set values (DB, Mail, etc.):

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Configure `.env` and run migrations + seeders:

   ```bash
   php artisan migrate --seed
   ```

6. Serve the app locally:

   ```bash
   php artisan serve
   # Visit http://127.0.0.1:8000
   ```

---

## 🧩 Features

- **Posts**: Rich content with markdown or HTML support.
- **Tags**: Categorize posts and filter by tag.
- **Comments**: Visitors can comment; policies control moderation.
- **Likes & Saves**: Users can like and save posts for later.
- **Newsletter**: Manage subscriptions and publish newsletters.
- **Followers**: Follow authors and view feed of followed authors.
- **Authorization**: Policies prevent unauthorized edits.

---

## 🛠 Tech Stack

- PHP 8.x + Laravel
- MySQL / SQLite (configurable in `.env`)
- Vite (assets) + Tailwind / CSS
---



