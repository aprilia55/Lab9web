<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Modularisasi</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<nav>
    <a href="index.php?page=dashboard">Dashboard</a>
    <a href="index.php?page=user/list">Data Barang</a>

    <?php if (isset($_SESSION['login'])) { ?>
        <a href="index.php?page=logout">Logout</a>
    <?php } else { ?>
        <a href="index.php?page=login">Login</a>
    <?php } ?>
</nav>

<div class="container">
