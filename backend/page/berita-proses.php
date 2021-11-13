<?php
if (isset($_POST['tambah'])) {
    $judul_berita = htmlentities(htmlspecialchars(strip_tags(trim($_POST['judul_berita']))));
    $slug = textToSlug($judul_berita);
    $isi_berita = $_POST['isi_berita'];
    $penulis = $_SESSION['id'];
    $tanggal = date("Y-m-d");
    $created_at = date("Y-m-d H:i:s");
    $updated_at = $created_at;

    // photo
    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $thumbnail = $_FILES['thumbnail']['name'];
    $x = explode('.', $thumbnail);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['thumbnail']['size'];
    $file_tmp = $_FILES['thumbnail']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 5044070) {
            move_uploaded_file($file_tmp, '../assets/img/berita/' . $thumbnail);
            $query = mysqli_query($koneksi, "INSERT INTO him_berita VALUES(NULL, '$judul_berita','$slug','$isi_berita','$thumbnail','$penulis','$tanggal','$created_at','$updated_at')");
            if ($query) {
                $_SESSION['successAdd'] = "Data Berhasil Disimpan";
                header("Location: index?page=berita");
            } else {
                $_SESSION['failedAdd'] = "Gagal Mengupload Gambar";
                header("Location: index?page=berita");
            }
        } else {
            $_SESSION['size'] = "Ukuran File Terlalu Besar";
            header("Location: index?page=berita");
        }
    } else {
        $_SESSION['ekstensi'] = "Ekstensi File Yang Di Upload Tidak di Perbolehkan";
        header("Location: index?page=berita");
    }
} else if (isset($_POST['delete'])) {
    $id = $_POST['id_berita'];
    $query = mysqli_query($koneksi, "DELETE FROM him_berita WHERE id_berita ='$id'");

    if ($query) {
        $_SESSION['successDelete'] = "Data Berhasil Dihapus";
        header("Location: index?page=berita");
    } else {
        $_SESSION['failedDelete'] = "Data Gagal Dihapus";
        header("Location: index?page=berita");
    }
} else if (isset($_POST['edit'])) {
    $id_berita = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_berita']))));
    $judul_berita = htmlentities(htmlspecialchars(strip_tags(trim($_POST['judul_berita']))));
    $isi_berita = $_POST['isi_berita'];
    $updated_at = date("Y-m-d H:i:s");

    // photo
    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $thumbnail = $_FILES['thumbnail']['name'];
    $x = explode('.', $thumbnail);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['thumbnail']['size'];
    $file_tmp = $_FILES['thumbnail']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 5044070) {
            move_uploaded_file($file_tmp, '../assets/img/berita/' . $thumbnail);
            $query = mysqli_query($koneksi, "UPDATE him_berita SET judul_berita = '$judul_berita', isi_berita='$isi_berita', thumbnail='$thumbnail', updated_at='$updated_at' WHERE id_berita='$id_berita'");
            if ($query) {
                $_SESSION['successEdit'] = "Data Berhasil Dirubah";
                header("Location: index?page=berita");
            } else {
                $_SESSION['failedEdit'] = "Gagal Mengupload Gambar";
                header("Location: index?page=berita");
            }
        } else {
            $_SESSION['size'] = "Ukuran File Terlalu Besar";
            header("Location: index?page=berita");
        }
    } else {
        $query = mysqli_query($koneksi, "UPDATE him_berita SET judul_berita = '$judul_berita', isi_berita='$isi_berita',  updated_at='$updated_at' WHERE id_berita='$id_berita'");
        if ($query) {
            $_SESSION['successEdit'] = "Data Berhasil Dirubah";
            header("Location: index?page=berita");
        } else {
            $_SESSION['failedEdit'] = "Data Gagal Diubah";
            header("Location: index?page=berita");
        }
    }
}
