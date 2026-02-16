# 📚 Sistem CRUD Data Mahasiswa
### PHP Native • MySQL • Upload Foto • Password Hashing

Project ini merupakan implementasi sistem **CRUD (Create, Read, Update, Delete)** menggunakan **PHP Native** dan **MySQL** tanpa framework.

Aplikasi memungkinkan pengelolaan data mahasiswa lengkap dengan fitur upload foto dan enkripsi password.

---

## 🚀 Fitur Utama

- ✅ Tambah Data Mahasiswa (Create)
- ✅ Tampilkan Data Mahasiswa (Read)
- ✅ Edit Data Mahasiswa (Update)
- ✅ Hapus Data Mahasiswa (Delete)
- ✅ Upload & Replace Foto
- ✅ Hapus Foto Otomatis Saat Delete
- ✅ Password disimpan menggunakan `password_hash()`
- ✅ Validasi ekstensi file gambar

---

## 🛠 Tech Stack

- **Backend** : PHP Native
- **Database** : MySQL
- **Frontend** : HTML5
- **Server** : Apache (XAMPP / LAMP)

---

## 🗄 Database Setup

### 1️⃣ Buat Database

```sql
CREATE DATABASE db_mahasiswa;
USE db_mahasiswa;
```

### 2️⃣ Buat Tabel Mahasiswa

```sql
CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nim VARCHAR(15) NOT NULL UNIQUE,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    foto VARCHAR(255) DEFAULT NULL
);
```

---

## 📂 Struktur Folder

```
mahasiswa/
│
├── koneksi.php
├── index.php
├── proses_simpan.php
├── list.php
├── edit.php
├── proses_edit.php
├── hapus.php
│
└── uploads/
```

⚠ Pastikan folder `uploads/` sudah dibuat dan memiliki permission yang sesuai.

---

## ⚙️ Cara Menjalankan

1. Jalankan **Apache & MySQL** di XAMPP
2. Import database di phpMyAdmin
3. Simpan folder project di:

```
htdocs/
```

4. Akses di browser:

```
http://localhost/mahasiswa/
```

---

## 🔐 Keamanan yang Diterapkan

- Password disimpan menggunakan:

```php
password_hash()
```

- Validasi ekstensi file gambar (jpg, jpeg, png, gif)
- Penghapusan file foto lama saat update
- Penghapusan file foto saat delete data
- `htmlspecialchars()` untuk mencegah XSS dasar

---

## 📈 Pengembangan Selanjutnya

- Menggunakan Prepared Statement (mysqli / PDO)
- Validasi form lebih lengkap
- Pagination pada list data
- Sistem login & session
- Implementasi MVC Pattern
- CSS Styling modern

---

## 🎯 Konsep yang Dipelajari

- Konsep Database Relasional
- Struktur Tabel & Constraints
- SQL: INSERT, SELECT, UPDATE, DELETE
- Upload File dengan PHP
- Password Hashing
- Manajemen File Server
- CRUD berbasis Web

---
