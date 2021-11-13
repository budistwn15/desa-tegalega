<?php
if (isset($_POST['tambah'])) {
    $judul_administrasi = htmlentities(htmlspecialchars(strip_tags(trim($_POST['judul_administrasi']))));
    $isi_administrasi = $_POST['isi_administrasi'];
    $created_at = date("Y-m-d H:i:s");
    $updated_at = $created_at;

    // photo
    $ekstensi_diperbolehkan    = array('pdf', 'jpg', 'png');
    $file = $_FILES['file']['name'];
    $x = explode('.', $file);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 5044070) {
            move_uploaded_file($file_tmp, '../assets/file/administrasi/' . $file);
            $query = mysqli_query($koneksi, "INSERT INTO him_administrasi VALUES(NULL, '$judul_administrasi','$isi_administrasi','$file','$created_at','$updated_at')");
            if ($query) {
                $_SESSION['successAdd'] = "Data Berhasil Disimpan";
                header("Location: index?page=administrasi");
            } else {
                $_SESSION['failedAdd'] = "Gagal Mengupload File";
                header("Location: index?page=administrasi");
            }
        } else {
            $_SESSION['size'] = "Ukuran File Terlalu Besar";
            header("Location: index?page=administrasi");
        }
    } else {
        $_SESSION['ekstensi'] = "Ekstensi File Yang Di Upload Tidak di Perbolehkan";
        header("Location: index?page=administrasi");
    }
} else if (isset($_POST['delete'])) {
    $id = $_POST['id_administrasi'];
    $query = mysqli_query($koneksi, "DELETE FROM him_administrasi WHERE id_administrasi ='$id'");

    if ($query) {
        $_SESSION['successDelete'] = "Data Berhasil Dihapus";
        header("Location: index?page=administrasi");
    } else {
        $_SESSION['failedDelete'] = "Data Gagal Dihapus";
        header("Location: index?page=administrasi");
    }
} else if (isset($_POST['edit'])) {
    $id_administrasi = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_administrasi']))));
    $judul_administrasi = htmlentities(htmlspecialchars(strip_tags(trim($_POST['judul_administrasi']))));
    $isi_administrasi = $_POST['isi_administrasi'];
    $updated_at = date("Y-m-d H:i:s");

    // photo
    $ekstensi_diperbolehkan    = array('pdf', 'png', 'jpg');
    $file = $_FILES['file']['name'];
    $x = explode('.', $file);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 5044070) {
            move_uploaded_file($file_tmp, '../assets/file/administrasi/' . $file);
            $query = mysqli_query($koneksi, "UPDATE him_administrasi SET judul_administrasi = '$judul_administrasi', isi_administrasi='$isi_administrasi', file='$file', updated_at='$updated_at' WHERE id_administrasi='$id_administrasi'");
            if ($query) {
                $_SESSION['successEdit'] = "Data Berhasil Dirubah";
                header("Location: index?page=administrasi");
            } else {
                $_SESSION['failedEdit'] = "Gagal Mengupload File";
                header("Location: index?page=administrasi");
            }
        } else {
            $_SESSION['size'] = "Ukuran File Terlalu Besar";
            header("Location: index?page=administrasi");
        }
    } else {
        $query = mysqli_query($koneksi, "UPDATE him_administrasi SET judul_administrasi = '$judul_administrasi', isi_administrasi='$isi_administrasi',  updated_at='$updated_at' WHERE id_administrasi='$id_administrasi'");
        if ($query) {
            $_SESSION['successEdit'] = "Data Berhasil Dirubah";
            header("Location: index?page=administrasi");
        } else {
            $_SESSION['failedEdit'] = "Data Gagal Diubah";
            header("Location: index?page=administrasi");
        }
    }
}
