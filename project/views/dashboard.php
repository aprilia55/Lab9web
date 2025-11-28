<?php
require __DIR__ . '/../config/database.php';
?>

<!-- BOX BESAR DI ATAS -->
<div style="
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 3px 10px rgba(0,0,0,0.1);
    margin-bottom:25px;
">
    <h1 style="margin-top:0; color:#1E88E5;">Selamat Datang di Dashboard Toko Online</h1>
    <p style="line-height:1.8; color:#555; font-size:15px;">
        Ini adalah halaman utama untuk mengelola data barang pada aplikasi Toko Online.
        Gunakan menu di atas untuk menambah, mengedit, atau menghapus data barang.
    </p>
</div>

<!-- GRID CARD DI BAWAHNYA -->
<div style="
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
">

    <!-- CARD TOTAL BARANG -->
    <div style="
        background:white;
        padding:20px;
        border-radius:10px;
        box-shadow:0 3px 10px rgba(0,0,0,0.1);
        border-left:6px solid #1E88E5;
    ">
        <h3 style="margin:0; color:#1E88E5;">Total Barang</h3>
        <p style="font-size:28px; font-weight:bold; margin:10px 0;">
            <?= mysqli_num_rows(mysqli_query($conn, "SELECT * FROM data_barang")); ?>
        </p>
        <p style="margin:0; color:#666;">Jumlah barang yang terdaftar</p>
    </div>

    <!-- CARD STATUS LOGIN -->
    <div style="
        background:white;
        padding:20px;
        border-radius:10px;
        box-shadow:0 3px 10px rgba(0,0,0,0.1);
        border-left:6px solid #43A047;
    ">
        <h3 style="margin:0; color:#43A047;">Status Login</h3>
        <p style="font-size:28px; font-weight:bold; margin:10px 0;">
            <?= isset($_SESSION['login']) ? 'Aktif' : 'Tidak Aktif'; ?>
        </p>
        <p style="margin:0; color:#666;">User login saat ini</p>
    </div>

</div>
