<?php
if (isset($_POST['tambah'])) {
    $nama_lengkap = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_lengkap']))));
    $email = htmlentities(htmlspecialchars(strip_tags(trim($_POST['email']))));
    $password = $_POST['password'];
    $password = sha1($password);
    $created_at = date("Y-m-d H:i:s");
    $updated_at = $created_at;

    $data_user = mysqli_query($koneksi, "SELECT * FROM him_user WHERE email='$email'");

    if (mysqli_num_rows($data_user) > 0) {
        $_SESSION['failedAdd'] = "Email sudah ada";
        header("Location: indeX?page=user");
    } else {
        $query = mysqli_query($koneksi, "INSERT INTO him_user VALUES(null,'$nama_lengkap','$email','$password','$created_at','$updated_at')");
        if ($query) {
            $_SESSION['successAdd'] = "Data Berhasil Disimpan";
            header("Location: index?page=user");
        } else {
            $_SESSION['failedAdd'] = "Data Gagal Disimpan";
            header("Location: index?page=user");
        }
    }
} else if (isset($_POST['delete'])) {
    $id = $_POST['id_user'];
    $query = mysqli_query($koneksi, "DELETE FROM him_user WHERE id_user ='$id'");

    if ($query) {
        $_SESSION['successDelete'] = "Data Berhasil Dihapus";
        header("Location: index?page=user");
    } else {
        $_SESSION['failedDelete'] = "Data Gagal Dihapus";
        header("Location: index?page=user");
    }
}else if($_POST['edit']){
    $id = $_POTS['id'];
    $nama_lengkap = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_lengkap']))));
    $email = htmlentities(htmlspecialchars(strip_tags(trim($_POST['email']))));
    $password = $_POST['password'];
    $password = sha1($password);
    $updated_at = date("Y-m-d H:i:s");

    $data_user = mysqli_query($koneksi, "SELECT * FROM him_user WHERE email='$email'");

    if (mysqli_num_rows($data_user) > 0) {
        $_SESSION['failedAdd'] = "Email sudah ada";
        header("Location: indeX?page=user");
    } else {
        $query = mysqli_query($koneksi, "UPDATE him_user SET nama_lengkap='$nama_lengkap', email='$email',password='$password'");
        if ($query) {
            $_SESSION['successAdd'] = "Data Berhasil diubah";
            header("Location: index?page=user");
        } else {
            $_SESSION['failedAdd'] = "Data Gagal diubah";
            header("Location: index?page=user");
        }
    }
}
