<?php
include "config/koneksi.php";

$id = $_GET['id'];

$q = mysqli_query($conn, "SELECT * FROM data_barang WHERE id_barang = $id");
$data = mysqli_fetch_assoc($q);
?>

<h2>Edit Barang</h2>

<form method="POST">
    Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
    Kategori: <input type="text" name="kategori" value="<?= $data['kategori'] ?>"><br>
    Harga Jual: <input type="number" name="harga_jual" value="<?= $data['harga_jual'] ?>"><br>
    Harga Beli: <input type="number" name="harga_beli" value="<?= $data['harga_beli'] ?>"><br>
    Stok: <input type="number" name="stok" value="<?= $data['stok'] ?>"><br><br>
    <button type="submit" name="update">Update</button>
</form>

<?php

if (isset($_POST['update'])) {

    mysqli_query($conn, "UPDATE data_barang SET 
        nama='$_POST[nama]',
        kategori='$_POST[kategori]',
        harga_jual='$_POST[harga_jual]',
        harga_beli='$_POST[harga_beli]',
        stok='$_POST[stok]' 
        WHERE id_barang = $id");

    header("Location: index.php?page=user/list");
}
?>
