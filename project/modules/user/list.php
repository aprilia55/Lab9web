<?php
require __DIR__ . '/../../config/database.php';

// tes apakah koneksi berhasil
if (!$conn) {
    die("Koneksi database gagal!");
}

// cek apakah tabelnya ada
$query = mysqli_query($conn, "SHOW TABLES LIKE 'data_barang'");
if (mysqli_num_rows($query) == 0) {
    die("Tabel data_barang tidak ditemukan di database!");
}

// jalankan query utama
$query = mysqli_query($conn, "SELECT * FROM data_barang");
if (!$query) {
    die("Query gagal: " . mysqli_error($conn));
}
?>

<h2>Daftar Barang</h2>

<a class="btn" href="index.php?page=user/add">+ Tambah Barang</a>
<br><br>

<table>
    <tr>
        <th>ID</th>
        <th>Kategori</th>
        <th>Nama</th>
        <th>Gambar</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?= $row['id_barang'] ?></td>
            <td><?= $row['kategori'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><img src="uploads/<?= $row['gambar'] ?>" width="60"></td>
            <td><?= $row['harga_beli'] ?></td>
            <td><?= $row['harga_jual'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td>
                <a class="btn" href="index.php?page=user/edit&id=<?= $row['id_barang'] ?>">Edit</a>
                <a class="btn" style="background:#D32F2F"
                   href="index.php?page=user/delete&id=<?= $row['id_barang'] ?>"
                   onclick="return confirm('Hapus data ini?')">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>
