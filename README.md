# Laravel Eloquent Project

Proyek belajar implementasi Laravel yang menggunakan Eloquent ORM sebagai pengelola database utama. 

## 🛠️ Fitur Utama

- Laravel 9+
- Eloquent ORM

---

## 🚀 Instalasi

```bash
# Clone repository ini (jika belum)
git clone https://github.com/username/nama-project.git
cd nama-project

# Install dependensi
composer install

# Salin file .env dan generate app key
cp .env.example .env
php artisan key:generate

# Konfigurasi database di file .env
DB_DATABASE=nama_db
DB_USERNAME=root
DB_PASSWORD=

# Jalankan migrasi
php artisan migrate
