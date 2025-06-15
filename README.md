# Laravel Eloquent Project

Proyek belajar implementasi Laravel yang menggunakan **Eloquent ORM** sebagai pengelola database utama.

---

## 📚 Relasi Tabel

Dalam basis data relasional, relasi adalah hubungan antar dua tabel atau lebih. Tujuan utama dari relasi adalah untuk mengorganisir data agar lebih efisien dan menghindari duplikasi.
:   

### 🔗 Jenis Relasi:

- **One to One (1:1)**  
  Satu baris di tabel A hanya terkait dengan satu baris di tabel B.  
  _Contoh:_ Satu user punya satu profil.

- **One to Many (1:N)**  
  Satu baris di tabel A bisa punya banyak baris di tabel B.  
  _Contoh:_ Satu post punya banyak komentar.

- **Many to Many (N:M)**  
  Banyak baris di tabel A bisa berhubungan dengan banyak baris di tabel B.  
  _Contoh:_ Banyak user bisa punya banyak role.

  
| Jenis Relasi | Model A (Pemilik Relasi)        | Method                       | Model B (Terkait)            | Inverse (di Model B)         |
| ------------ | ------------------------------- | ---------------------------- | ---------------------------- | ---------------------------- |
| One to One   | User memiliki satu Phone        | `hasOne(Phone::class)`       | Phone dimiliki oleh User     | `belongsTo(User::class)`     |
| One to Many  | Post memiliki banyak Comment    | `hasMany(Comment::class)`    | Comment dimiliki oleh Post   | `belongsTo(Post::class)`     |
| Many to One  | Comment dimiliki oleh satu Post | `belongsTo(Post::class)`     | Post memiliki banyak Comment | `hasMany(Comment::class)`    |
| Many to Many | User memiliki banyak Role       | `belongsToMany(Role::class)` | Role dimiliki banyak User    | `belongsToMany(User::class)` |

---



# 📌 Dasar Relasi Database di Laravel

Dalam Laravel, relasi antar tabel database diatur melalui dua bagian penting:

- 📂 **File Migrasi** – mendefinisikan struktur tabel di database, termasuk *foreign key* sebagai penghubung antar tabel.
- 🧱 **Model Eloquent** – mendefinisikan hubungan antar data secara logika, agar kita bisa mengakses data terkait dengan sintaks Laravel yang sederhana.

Kedua folder ini **saling berkaitan**. Jika kita ingin relasi antar tabel bisa digunakan di kode program, maka **migrasi dan model harus dikonfigurasi bersamaan**.

---

## ⚙️ Cara Kerja Relasi Secara Umum

### Aturan Umum:

Jika tabel A memiliki relasi dengan tabel B, maka:

- **Migrasi:** Tambahkan *foreign key* di tabel yang membutuhkan referensi ke tabel lain.
- **Model:** Tambahkan method relasi seperti `hasOne`, `belongsTo`, `hasMany`, `belongsToMany`, dll, di masing-masing model sesuai kebutuhan relasi.

---

## 🛠️ Fitur Utama

- Laravel 9+
- Eloquent ORM

---

## 🚀 Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini secara lokal:

```bash
# Clone repository ini
git clone https://github.com/username/nama-project.git
cd nama-project
# Install dependensi menggunakan Composer
composer install

# Salin file environment dan generate app key
cp .env.example .env
php artisan key:generate

# Konfigurasi database pada file .env
# Contoh:
DB_DATABASE=nama_db
DB_USERNAME=root
DB_PASSWORD=

# Jalankan migrasi untuk membuat tabel
php artisan migrate
```