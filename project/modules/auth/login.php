<?php
require __DIR__ . '/../../config/database.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,
        "SELECT * FROM users WHERE username='$username' AND password='$password'"
    );

    if (mysqli_num_rows($query) > 0) {
        $_SESSION['login'] = true;

        echo "<script>
                alert('Login berhasil!');
                window.location='index.php?page=dashboard';
              </script>";
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?>

<!-- TUTUP container sebelum login -->
</div>

<div class="login-card">
    <h2>Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit" name="login">Login</button>
    </form>
</div>
