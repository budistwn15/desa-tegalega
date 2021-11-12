<?php
if (isset($_POST['login'])) {
    session_start();
    include "../lib/koneksi.php";
    $email = htmlentities(htmlspecialchars(strip_tags(trim($_POST['email']))));
    $password = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password']))));

    $password = sha1($password);

    $query = mysqli_query($koneksi, "SELECT * FROM him_user WHERE email='$email' AND password='$password'");

    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) > 0) {
        $_SESSION['id'] = $data['id_user'];
        $_SESSION['nama'] = $data['nama_lengkap'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['successLogin'] = "Selamat datang di halaman Admin Pemerintah Desa Tegalega";
        header("Location: index");
    } else {
        $_SESSION['failedLogin'] = "Email dan Password Tidak Cocok";
        header("Location: login");
    }
}
