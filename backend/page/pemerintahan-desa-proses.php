<?php


if (isset($_POST['simpan'])) {
    $nama_lengkap = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_lengkap']))));
    $jabatan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jabatan']))));

    // photo
    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $photo = $_FILES['photo']['name'];
    $x = explode('.', $photo);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['photo']['size'];
    $file_tmp = $_FILES['photo']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, '../assets/img/pemdes/' . $photo);
            $query = mysqli_query($koneksi, "INSERT INTO him_pemerintahan_desa VALUES(NULL, '$nama_lengkap','$jabatan','$photo')");
            if ($query) {
                $_SESSION['success'] = "Data Berhasil Disimpan";
                header("Location: index?page=pemerintahan-desa");
            } else {
                $_SESSION['failed'] = "Gagal Mengupload Gambar";
                header("Location: index?page=pemerintahan-desa");
            }
        } else {
            $_SESSION['size'] = "Ukuran File Terlalu Besar";
            header("Location: index?page=pemerintahan-desa");
        }
    } else {
        $_SESSION['ekstensi'] = "Ekstensi File Yang Di Upload Tidak di Perbolehkan";
        header("Location: index?page=pemerintahan-desa");
    }
} else if (isset($_POST['delete'])) {
    $id = $_POST['id_pemerintahan_desa'];
    $query = mysqli_query($koneksi, "DELETE FROM him_pemerintahan_desa WHERE id_pemerintahan_desa ='$id'");

    if ($query) {
        $_SESSION['successDelete'] = "Data Berhasil Dihapus";
        header("Location: index?page=pemerintahan-desa");
    } else {
        $_SESSION['failedDelete'] = "Data Gagal Dihapus";
        header("Location: index?page=pemerintahan-desa");
    }
} else if (isset($_POST['edit'])) {
    $id = $_POST['id_pemerintahan_desa'];
    $nama_lengkap = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_lengkap']))));
    $jabatan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jabatan']))));

    // photo
    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $photo = $_FILES['photo']['name'];
    $x = explode('.', $photo);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['photo']['size'];
    $file_tmp = $_FILES['photo']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, '../assets/img/pemdes/' . $photo);
            $query = mysqli_query($koneksi, "UPDATE him_pemerintahan_desa SET nama_lengkap='$nama_lengkap', jabatan='$jabatan', photo='$photo' WHERE id_pemerintahan_desa='$id'");
            if ($query) {
                $_SESSION['successEdit'] = "Data Berhasil Diubah";
                header("Location: index?page=pemerintahan-desa");
            } else {
                $_SESSION['failed'] = "Gagal Mengupload Gambar";
                header("Location: index?page=pemerintahan-desa");
            }
        } else {
            $_SESSION['size'] = "Ukuran File Terlalu Besar";
            header("Location: index?page=pemerintahan-desa");
        }
    } else {
        $query = mysqli_query($koneksi, "UPDATE him_pemerintahan_desa SET nama_lengkap='$nama_lengkap', jabatan='$jabatan' WHERE id_pemerintahan_desa='$id'");
        if ($query) {
            $_SESSION['successEdit'] = "Data Berhasil Diubah";
            header("Location: index?page=pemerintahan-desa");
        } else {
            $_SESSION['failed'] = "Gagal Mengupload Gambar";
            header("Location: index?page=pemerintahan-desa");
        }
    }
}
