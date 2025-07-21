# Laravel Eloquent Project

**Proyek ini adalah latihan implementasi Laravel dengan fokus pada penggunaan _Eloquent ORM_ sebagai pengelola utama database.**

---

## 📚 **Relasi Tabel**

Dalam basis data relasional, **relasi** adalah hubungan antara dua atau lebih tabel. Tujuan utamanya adalah mengorganisir data secara efisien dan mencegah duplikasi.

### 🔗 **Jenis Relasi Database di Laravel**

Relasi antar tabel adalah inti dari pengelolaan data di aplikasi Laravel. Dengan Eloquent ORM, Anda dapat mendefinisikan dan mengakses relasi ini secara efisien melalui model.

#### **Jenis Relasi Utama**

1. **One-to-Many (1:N)**
  - **Konsep:** Satu entitas induk memiliki banyak entitas anak, dan setiap anak hanya milik satu induk.
  - **Contoh:** Satu `User` memiliki banyak `Post`; satu `Category` memiliki banyak `Product`.
  - **Implementasi:**
    - Sisi "satu" (misal: `User`, `Category`): menggunakan `hasMany()`.
    - Sisi "banyak" (misal: `Post`, `Product`): menggunakan `belongsTo()`.

2. **Many-to-Many (N:M)**
  - **Konsep:** Kedua entitas dapat memiliki banyak hubungan satu sama lain, biasanya melalui tabel pivot.
  - **Contoh:** Satu `User` bisa mengikuti banyak `Course`, dan satu `Course` bisa diikuti banyak `User` (melalui tabel `enrollments`).
  - **Implementasi:** Kedua model menggunakan `belongsToMany()`.

3. **One-to-One (1:1)**
  - **Konsep:** Setiap entitas hanya berelasi dengan satu entitas lainnya.
  - **Contoh:** Satu `User` memiliki satu `UserProfileDetail`.
  - **Implementasi:**
    - Sisi "induk" (misal: `User`, `Employee`): menggunakan `hasOne()`.
    - Sisi "anak" (misal: `UserProfileDetail`, `Passport`): menggunakan `belongsTo()`.




#### **Peran Model Eloquent**

- **Representasi Tabel:** Setiap tabel biasanya memiliki satu model Eloquent (misal: `User` untuk tabel `users`).
- **Definisi Relasi:** Relasi didefinisikan sebagai method di dalam model, seperti `hasMany()`, `belongsTo()`, atau `belongsToMany()`.
- **Akses Data Mudah:** Setelah relasi didefinisikan, Anda dapat mengakses data terkait dengan sintaks sederhana, misal: `$user->posts` atau `$course->users`, tanpa perlu menulis query SQL JOIN secara manual.



| **Jenis Relasi** | **Model A (Pemilik Relasi)**      | **Method**                    | **Model B (Terkait)**         | **Inverse (di Model B)**      |
| ---------------- | --------------------------------- | ----------------------------- | ----------------------------- | ----------------------------- |
| One to One       | User memiliki satu Phone          | `hasOne(Phone::class)`        | Phone dimiliki oleh User      | `belongsTo(User::class)`      |
| One to Many      | Post memiliki banyak Comment      | `hasMany(Comment::class)`     | Comment dimiliki oleh Post    | `belongsTo(Post::class)`      |
| Many to One      | Comment dimiliki oleh satu Post   | `belongsTo(Post::class)`      | Post memiliki banyak Comment  | `hasMany(Comment::class)`     |
| Many to Many     | User memiliki banyak Role         | `belongsToMany(Role::class)`  | Role dimiliki banyak User     | `belongsToMany(User::class)`  |

---

# 📌 **Dasar Relasi Database di Laravel**

Di Laravel, relasi antar tabel diatur melalui dua komponen utama:

- 📂 **File Migrasi** – Mendefinisikan struktur tabel di database, termasuk _foreign key_ sebagai penghubung antar tabel.
- 🧱 **Model Eloquent** – Mendefinisikan hubungan antar data secara logika, sehingga kita dapat mengakses data terkait dengan sintaks Laravel yang sederhana.

Kedua folder ini **saling berkaitan**. Agar relasi antar tabel dapat digunakan di kode program, **migrasi dan model harus dikonfigurasi bersamaan**.

---

## ⚙️ **Cara Kerja Relasi Secara Umum**

### **Aturan Umum**

Jika tabel A memiliki relasi dengan tabel B, maka:

- **Migrasi:** Tambahkan _foreign key_ di tabel yang membutuhkan referensi ke tabel lain.
- **Model:** Tambahkan method relasi seperti `hasOne`, `belongsTo`, `hasMany`, `belongsToMany`, dan lain-lain di masing-masing model sesuai kebutuhan relasi.


## 🛠️ **Fitur Utama**

- **Laravel 9+**
- **Eloquent ORM**

---

## 🚀 **Instalasi**

Ikuti langkah-langkah berikut untuk menjalankan proyek ini secara lokal:

```bash
git clone https://github.com/username/nama-project.git
```
```bash
cd nama-project
```
```bash
composer install
```
```bash
cp .env.example .env
```
```bash
php artisan key:generate
```
```bash
# Edit file .env dan sesuaikan konfigurasi database
# Contoh:
# DB_DATABASE=nama_db
# DB_USERNAME=root
# DB_PASSWORD=
```
```bash
php artisan migrate
```

