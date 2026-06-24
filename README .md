<p align="center">
  <a href="#" target="_blank">
    <img src="public/logo/siska.png" width="160" alt="SISKA Logo">
  </a>
</p>

<h1 align="center">SISKA - Sistem Informasi Surat Kantor 📄</h1>

<p align="center">
  Aplikasi web berbasis Laravel untuk mengelola surat masuk, surat keluar, disposisi, dan approval surat secara digital.
</p>

---

## 📌 Tentang Aplikasi

**SISKA (Sistem Informasi Surat Kantor)** adalah aplikasi berbasis website yang digunakan untuk membantu proses administrasi surat di lingkungan kantor. Aplikasi ini mempermudah pencatatan surat masuk, surat keluar, disposisi, serta proses approval surat agar data surat lebih rapi, terorganisir, dan mudah dikelola.

Project ini dibangun menggunakan **Laravel** dengan tampilan antarmuka sederhana berbasis **Blade Template** dan **Tailwind CSS CDN**.

---
## MANUAL BOOK
https://drive.google.com/file/d/1QXow_r0GE6b6XDF4c9oRhPpF91HO9dUp/view?usp=sharing

## ✨ Fitur Utama

- **🔐 Login dan Logout**
  - Pengguna dapat masuk ke sistem menggunakan email dan password.
  - Sistem menggunakan autentikasi Laravel.

- **📊 Dashboard**
  - Menampilkan jumlah data surat masuk.
  - Menampilkan jumlah data surat keluar.
  - Menampilkan jumlah data disposisi.
  - Menampilkan ringkasan data administrasi surat.

- **📥 Manajemen Surat Masuk**
  - Menambahkan data surat masuk.
  - Mengedit data surat masuk.
  - Menghapus data surat masuk.
  - Menampilkan daftar surat masuk.
  - Upload file surat dalam format PDF.
  - Menampilkan status surat: `pending` atau `approved`.

- **📤 Manajemen Surat Keluar**
  - Menambahkan data surat keluar.
  - Mengedit data surat keluar.
  - Menghapus data surat keluar.
  - Menampilkan daftar surat keluar.

- **📌 Manajemen Disposisi**
  - Menambahkan data disposisi.
  - Mengedit data disposisi.
  - Menghapus data disposisi.
  - Menampilkan daftar disposisi berdasarkan ID surat masuk.
  - Menyimpan tujuan dan catatan disposisi.

- **✅ Approval Surat**
  - Admin dapat melihat daftar surat masuk yang masih berstatus `pending`.
  - Admin dapat melakukan approval surat.
  - Setelah disetujui, status surat berubah menjadi `approved`.

- **👤 Hak Akses Pengguna**
  - Terdapat role pengguna: `admin` dan `staff`.
  - Menu approval hanya ditampilkan untuk pengguna dengan role `admin`.

---

## 🛠️ Teknologi yang Digunakan

- **Laravel 12**
- **PHP 8.2**
- **Blade Template**
- **Tailwind CSS CDN**
- **MySQL / SQLite**
- **Composer**
- **Git & GitHub**

---

## 📁 Struktur Folder Project

```text
SISKA-Sistem-Informasi-Surat-Kantor-PKL/
│
├── app/
│   ├── Http/Controllers/
│   │   ├── ApprovalController.php
│   │   ├── AuthController.php
│   │   ├── DashboardController.php
│   │   ├── DisposisiController.php
│   │   ├── SuratKeluarController.php
│   │   └── SuratMasukController.php
│   └── Models/
│       ├── Disposisi.php
│       ├── SuratKeluar.php
│       ├── SuratMasuk.php
│       └── User.php
│
├── database/
│   ├── migrations/
│   └── seeders/
│
├── public/
│   ├── logo/
│   │   └── siska.png
│   └── surat/
│
├── resources/
│   └── views/
│       ├── approve/
│       ├── auth/
│       ├── dashboard/
│       ├── disposisi/
│       ├── layouts/
│       ├── surat_keluar/
│       └── surat_masuk/
│
├── routes/
│   └── web.php
│
├── .env.example
├── artisan
├── composer.json
├── composer.lock
├── package.json
└── README.md
```

---

## ⚡ Persyaratan Instalasi

Sebelum menjalankan aplikasi, pastikan perangkat sudah memiliki:

- PHP versi **8.2** atau lebih baru
- Composer
- MySQL / SQLite
- Git
- Web browser
- XAMPP, Laragon, atau server lokal lainnya

---

## 🚀 Cara Instalasi dan Menjalankan Aplikasi

### 1. Clone Repository

```bash
git clone https://github.com/pasek2003/SISKA-Sistem-Informasi-Surat-Kantor-PKL.git
```

Masuk ke folder project:

```bash
cd SISKA-Sistem-Informasi-Surat-Kantor-PKL
```

---

### 2. Install Dependency Laravel

```bash
composer install
```

---

### 3. Buat File `.env`

Untuk Windows PowerShell:

```bash
copy .env.example .env
```

Untuk Git Bash, Linux, atau Mac:

```bash
cp .env.example .env
```

---

### 4. Generate Application Key

```bash
php artisan key:generate
```

---

## 🗄️ Konfigurasi Database

Aplikasi dapat dijalankan menggunakan **SQLite** atau **MySQL**.

---

### Opsi A — Menggunakan SQLite

SQLite lebih mudah digunakan untuk testing lokal.

Pastikan file berikut ada:

```text
database/database.sqlite
```

Jika belum ada, buat file kosong bernama `database.sqlite` di dalam folder `database`.

Kemudian pastikan `.env` berisi:

```env
DB_CONNECTION=sqlite
```

Lalu jalankan migrasi:

```bash
php artisan migrate
```

Jika ingin menjalankan seeder:

```bash
php artisan db:seed
```

---

### Opsi B — Menggunakan MySQL

Buat database baru di MySQL, misalnya:

```text
siska_db
```

Kemudian ubah bagian database pada file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=siska_db
DB_USERNAME=root
DB_PASSWORD=
```

Setelah itu jalankan migrasi:

```bash
php artisan migrate
```

Jika ingin menjalankan seeder:

```bash
php artisan db:seed
```

---

## 🔗 Storage dan Upload File

Aplikasi menyediakan fitur upload file PDF pada surat masuk. File surat akan disimpan pada folder:

```text
public/surat
```

Format file yang didukung:

```text
PDF
```

Ukuran maksimal file berdasarkan validasi program:

```text
2 MB
```

---

## ▶️ Menjalankan Aplikasi

Jalankan server Laravel:

```bash
php artisan serve
```

Kemudian buka browser dan akses:

```text
http://127.0.0.1:8000
```

---

## 🔑 Akun Login

Jika menjalankan seeder bawaan Laravel pada project ini, akun awal yang tersedia adalah:

Setelah itu login menggunakan:

| Role | Email | Password |
|---|---|---|
| Admin | admin@gmail.com | admin |
| Staf | staff@gmail.com | staff |

---

## 🧭 Daftar Route Utama

| Halaman | URL |
|---|---|
| Login | `/` |
| Dashboard | `/dashboard` |
| Surat Masuk | `/surat-masuk` |
| Surat Keluar | `/surat-keluar` |
| Disposisi | `/disposisi` |
| Approval | `/approve` |
| Logout | `/logout` |

---

## 🧪 Cara Penggunaan Singkat

1. Jalankan aplikasi menggunakan `php artisan serve`.
2. Buka `http://127.0.0.1:8000`.
3. Login menggunakan akun yang tersedia.
4. Masuk ke halaman dashboard.
5. Pilih menu **Surat Masuk** untuk menambahkan data surat masuk dan upload file PDF.
6. Pilih menu **Surat Keluar** untuk menambahkan data surat keluar.
7. Pilih menu **Disposisi** untuk menambahkan tujuan dan catatan disposisi.
8. Login sebagai admin untuk membuka menu **Approval**.
9. Pada menu Approval, admin dapat menyetujui surat masuk yang masih berstatus pending.

---

## 📸 Screenshot

<img width="682" height="767" alt="image" src="https://github.com/user-attachments/assets/e33e1529-7aac-4637-a150-defaa2fbd507" />


## 📌 Status Project

Project ini dibuat untuk kebutuhan pembelajaran dan pengembangan sistem informasi administrasi surat kantor. Fitur utama yang tersedia meliputi login, dashboard, surat masuk, surat keluar, disposisi, dan approval surat.

---

## 👨‍💻 Pengembang

**Tun Pasek Sarwiko Dipranoto**  
Universitas Udayana
Informatika
---

## 📜 Lisensi

Project ini dibuat untuk kebutuhan pembelajaran, tugas, dan pengembangan sistem informasi surat kantor. Sudah Di Lakukan Penerbitan HKI : https://drive.google.com/file/d/1BIBQBiY8x8LYCpJEr8bCj_BpiLYOuqeG/view?usp=sharing
