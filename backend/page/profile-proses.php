<?php
if (isset($_POST['edit'])) {
    $id_user = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_user']))));
    $nama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_lengkap']))));
    $email = htmlentities(htmlspecialchars(strip_tags(trim($_POST['email']))));

    $query = mysqli_query($koneksi, "UPDATE him_user SET nama_lengkap='$nama', email='$email' WHERE id_user='$id_user'");
    if ($query) {
        unset($_SESSION['nama_lengkap']);
        unset($_SESSION['email']);

        $_SESSION['nama'] = $nama;
        $_SESSION['email'] = $email;
        $_SESSION['successEdit'] = "Profile Berhasil diedit";

        header("Location: index?page=profile");
    } else {
        $_SESSION['successFailed'] = "Profile gaga;l diedit";

        header("Location: index?page=profile");
    }
} else if (isset($_POST['edit_password'])) {
    $id_user = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_user']))));
    $password_lama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password_lama']))));
    $password_baru = htmlentities(htmlspecialchars(strip_tags(trim($_POST['password_baru']))));
    $konfirmasi_password_baru = htmlentities(htmlspecialchars(strip_tags(trim($_POST['konfirmasi_password_baru']))));

    $password_lama = sha1($password_lama);
    $password_baru = sha1($password_baru);
    $konfirmasi_password_baru = sha1($konfirmasi_password_baru);

    $data = mysqli_query($koneksi, "SELECT password FROM him_user WHERE id_user='$id_user'");
    $data_user = mysqli_fetch_array($data);
    if ($password_lama == $data_user['password']) {
        if ($password_baru == $konfirmasi_password_baru) {
            $query = mysqli_query($koneksi, "UPDATE him_user SET password='$password_baru' WHERE id_user='$id_user'");
            if ($query) {
                $_SESSION['successPassword'] = "Password berhasil diganti, silahkan untuk login kembali";
                header("Location:logout.php");
            } else {
                $_SESSION['failedPassword'] = "Password gagal diganti";
                header("Location:index?page=profile");
            }
        } else {
            $_SESSION['notPassword'] = "Password Konfirmasi Tidak Cocok";
            header("Location:index?page=profile");
        }
    } else {
        $_SESSION['errorPassword'] = "Password Lama Salah";
        header("Location:index?page=profile");
    }
}
