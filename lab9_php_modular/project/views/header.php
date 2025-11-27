<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Modular</title>
    <link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body>
    <div class="container">
        <header>
            <h1>Aplikasi Web Modular</h1>
        </header>
        <nav>
            <a href="index.php?page=dashboard">Dashboard</a>
            <a href="index.php?page=user/list">Daftar User</a>
            <a href="index.php?page=user/add">Tambah User</a>
            <a href="index.php?page=auth/login">Login</a>
        </nav>
        <div class="content">
            ```

### 2.2. `views/footer.php`

[cite_start]Buat file `views/footer.php` untuk menutup struktur HTML[cite: 35, 36, 38, 39, 40, 41]:

```php
            </div> 
        <footer>
            <p>&copy; 2025, Project Modular Web</p>
        </footer>
    </div>
</body>
</html>