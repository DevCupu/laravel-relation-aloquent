# Laravel Eloquent Project

**Proyek ini adalah latihan implementasi Laravel dengan fokus pada penggunaan _Eloquent ORM_ sebagai pengelola utama database.**

---

## 📚 **Relasi Tabel**

Dalam basis data relasional, **relasi** adalah hubungan antara dua atau lebih tabel. Tujuan utamanya adalah mengorganisir data secara efisien dan mencegah duplikasi.

### 🔗 **Jenis Relasi**

- **One to One (1:1)**  
  Satu baris di tabel A hanya terkait dengan satu baris di tabel B.  
  _Contoh:_ **Satu user memiliki satu profil.**

- **One to Many (1:N)**  
  Satu baris di tabel A dapat memiliki banyak baris di tabel B.  
  _Contoh:_ **Satu post memiliki banyak komentar.**

- **Many to Many (N:M)**  
  Banyak baris di tabel A dapat berhubungan dengan banyak baris di tabel B.  
  _Contoh:_ **Banyak user dapat memiliki banyak role.**

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

