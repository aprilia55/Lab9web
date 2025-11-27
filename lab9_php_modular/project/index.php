<?php
// index.php

// 1. Definisikan Base Direktori untuk Views dan Modules menggunakan __DIR__
// __DIR__ adalah direktori tempat file index.php berada
define('BASE_DIR', __DIR__ . '/');
define('VIEW_DIR', BASE_DIR . 'views/');
define('MODULE_DIR', BASE_DIR . 'modules/');

// 2. Ambil parameter 'page' dari URL
$page = $_GET['page'] ?? 'dashboard'; 

// Sanitasi input (disarankan)
$page = preg_replace('/[^a-zA-Z0-9_\/]/', '', $page);

// 3. Tentukan file konten yang akan dimuat
// Path file modul akan menjadi: modules/{$page}.php
$module_file = MODULE_DIR . $page . '.php';

// 4. Periksa apakah file modul ada
if (file_exists($module_file)) {
    $content_file = $module_file;
} else {
    // Jika file tidak ditemukan (seperti modules/user/list.php)
    http_response_code(404);
    $content_file = MODULE_DIR . '404.php'; 
}

// 5. Modularisasi: Muat Header, Konten, dan Footer

// Muat Header
// GUNAKAN require_once dan konstanta yang sudah didefinisikan
require_once(VIEW_DIR . 'header.php');

// Muat Konten Halaman
require_once($content_file);

// Muat Footer
require_once(VIEW_DIR . 'footer.php');
?>