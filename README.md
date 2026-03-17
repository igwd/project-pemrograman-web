# Project Pemrograman Web - Ticketing Laravel

Project ini merupakan contoh aplikasi sederhana berbasis Laravel yang digunakan untuk pembelajaran pada mata kuliah Pemrograman Web dengan studi kasus sistem ticketing.

## Deskripsi

Aplikasi ini bertujuan untuk memberikan pemahaman dasar mengenai:
- Struktur project Laravel
- Implementasi CRUD
- Pengelolaan data tiket
- Penggunaan Tailwind CSS

Project ini dapat digunakan sebagai referensi maupun latihan mandiri.

## Cara Menjalankan Project

Ikuti langkah-langkah berikut secara berurutan:

```bash
# 1. Clone repository
git clone https://github.com/igwd/project-pemrograman-web.git
cd project-pemrograman-web

# 2. Install dependency Laravel
composer install

# 3. Setup environment
cp .env.example .env

# 4. Generate application key
php artisan key:generate

# 5. Konfigurasi database (edit file .env terlebih dahulu)
# Contoh:
# DB_DATABASE=nama_database
# DB_USERNAME=root
# DB_PASSWORD=

# 6. Jalankan migrasi database
php artisan migrate

# 7. Install dependency frontend (Tailwind CSS)
npm install
npm run dev

# 8. Jalankan server
php artisan serve