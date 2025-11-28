# LAPORAN PRAKTIKUM – MODULARISASI PHP (CRUD Data Barang)

### Nama : Alfarizki Aprilia Putri

### NIM : (312410455)

### Kelas : (TI.24.A5)

## Mata Kuliah : Pemrograman Web

**Modularisasi PHP – CRUD Data Barang**

Project ini dibuat untuk memenuhi tugas Praktikum Pemrograman Web.
Aplikasi ini menerapkan modularisasi, CRUD, dan upload gambar menggunakan PHP Native dan MySQL.

**🚀 Fitur Aplikasi**

- Login & Logout menggunakan session

- Modularisasi folder (kode lebih rapi)

- CRUD`Data Barang:

- Tambah Barang

- Edit Barang

- Hapus Barang

- Menampilkan daftar barang

- Upload gambar barang

- Dashboard menampilkan total data barang & user

  **📂 Struktur Folder**
 ```
project/
│── index.php
│── config/
│   └── database.php
│── modules/
│   ├── user/
│   │   ├── list.php
│   │   ├── add.php
│   │   ├── edit.php
│   │   └── delete.php
│   └── auth/
│       ├── login.php
│       └── logout.php
│── uploads/
│── views/
│   ├── header.php
│   └── footer.php
└── assets/
    └── css/style.css
```
**🛢️ Struktur Database**

### **Tabel: data_barang**
| Kolom        | Tipe Data |
|--------------|-----------|
| id_barang    | INT (Auto Increment) |
| kategori     | VARCHAR |
| nama         | VARCHAR |
| gambar       | VARCHAR |
| harga_beli   | INT |
| harga_jual   | INT |
| stok         | INT |


### **Tabel: user**
| Kolom     | Tipe Data |
|-----------|-----------|
| id        | INT (Auto Increment) |
| username  | VARCHAR |
| password  | VARCHAR |





