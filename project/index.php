<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

require 'views/header.php';

// ROUTING
switch ($page) {

    case 'dashboard':
        include 'views/dashboard.php';
        break;

    // ==== ROUTING USER (ISI CRUD BARANG) ====
    case 'user/list':
        include 'modules/user/list.php';
        break;

    case 'user/add':
        include 'modules/user/add.php';
        break;

    case 'user/edit':
        include 'modules/user/edit.php';
        break;

    case 'user/delete':
        include 'modules/user/delete.php';
        break;
    // =========================================

    case 'login':
        include 'modules/auth/login.php';
        break;

    case 'logout':
        include 'modules/auth/logout.php';
        break;

    default:
        echo "<h2>Halaman tidak ditemukan</h2>";
        break;
}

require 'views/footer.php';
?>
