<?php
if (isset($_POST['tambah'])) {
    $judul_galeri = htmlentities(htmlspecialchars(strip_tags(trim($_POST['judul_galeri']))));
    $created_at = date("Y-m-d H:i:s");
    $updated_at = $created_at;

    // photo
    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $photo = $_FILES['photo']['name'];
    $x = explode('.', $photo);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['photo']['size'];
    $file_tmp = $_FILES['photo']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 10044070) {
            move_uploaded_file($file_tmp, '../assets/img/galeri/' . $photo);
            $query = mysqli_query($koneksi, "INSERT INTO him_galeri VALUES(NULL, '$judul_galeri','$photo','$created_at','$updated_at')");
            if ($query) {
                $_SESSION['successAdd'] = "Data Berhasil Disimpan";
                header("Location: index?page=galeri");
            } else {
                $_SESSION['failedAdd'] = "Gagal Mengupload Gambar";
                header("Location: index?page=galeri");
            }
        } else {
            $_SESSION['size'] = "Ukuran File Terlalu Besar";
            header("Location: index?page=galeri");
        }
    } else {
        $_SESSION['ekstensi'] = "Ekstensi File Yang Di Upload Tidak di Perbolehkan";
        header("Location: index?page=galeri");
    }
} else if (isset($_POST['delete'])) {
    $id = $_POST['id_galeri'];
    $query = mysqli_query($koneksi, "DELETE FROM him_galeri WHERE id_galeri ='$id'");

    if ($query) {
        $_SESSION['successDelete'] = "Data Berhasil Dihapus";
        header("Location: index?page=galeri");
    } else {
        $_SESSION['failedDelete'] = "Data Gagal Dihapus";
        header("Location: index?page=galeri");
    }
} else if (isset($_POST['edit'])) {
    $id_galeri = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_galeri']))));
    $judul_galeri = htmlentities(htmlspecialchars(strip_tags(trim($_POST['judul_galeri']))));
    $updated_at = date("Y-m-d H:i:s");

    // photo
    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $photo = $_FILES['photo']['name'];
    $x = explode('.', $photo);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['photo']['size'];
    $file_tmp = $_FILES['photo']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 5044070) {
            move_uploaded_file($file_tmp, '../assets/img/galeri/' . $photo);
            $query = mysqli_query($koneksi, "UPDATE him_galeri SET judul_galeri = '$judul_galeri', photo='$photo', updated_at='$updated_at' WHERE id_galeri='$id_galeri'");
            if ($query) {
                $_SESSION['successEdit'] = "Data Berhasil Dirubah";
                header("Location: index?page=galeri");
            } else {
                $_SESSION['failedEdit'] = "Gagal Mengupload Gambar";
                header("Location: index?page=galeri");
            }
        } else {
            $_SESSION['size'] = "Ukuran File Terlalu Besar";
            header("Location: index?page=galeri");
        }
    } else {
        $query = mysqli_query($koneksi, "UPDATE him_galeri SET judul_galeri = '$judul_galeri',updated_at='$updated_at' WHERE id_galeri='$id_galeri'");
        if ($query) {
            $_SESSION['successEdit'] = "Data Berhasil Dirubah";
            header("Location: index?page=galeri");
        } else {
            $_SESSION['failedEdit'] = "Data Gagal Diubah";
            header("Location: index?page=galeri");
        }
    }
}
