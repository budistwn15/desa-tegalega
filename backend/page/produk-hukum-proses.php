<?php
if (isset($_POST['tambah'])) {
    $tanggal_rilis = date("Y-m-d", strtotime($_POST['tanggal_rilis']));
    $kategori = htmlentities(htmlspecialchars(strip_tags(trim($_POST['kategori']))));
    $judul = htmlentities(htmlspecialchars(strip_tags(trim($_POST['judul']))));
    $keterangan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['keterangan']))));
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
            move_uploaded_file($file_tmp, '../assets/file/produk-hukum/' . $file);
            $query = mysqli_query($koneksi, "INSERT INTO him_produk_hukum VALUES(NULL, '$tanggal_rilis','$kategori','$judul','$file','$keterangan','$created_at','$updated_at')");
            if ($query) {
                $_SESSION['successAdd'] = "Data Berhasil Disimpan";
                header("Location: index?page=produk-hukum");
            } else {
                $_SESSION['failedAdd'] = "Gagal Mengupload File";
                header("Location: index?page=produk-hukum");
            }
        } else {
            $_SESSION['size'] = "Ukuran File Terlalu Besar";
            header("Location: index?page=produk-hukum");
        }
    } else {
        $_SESSION['ekstensi'] = "Ekstensi File Yang Di Upload Tidak di Perbolehkan";
        header("Location: index?page=produk-hukum");
    }
} else if (isset($_POST['delete'])) {
    $id = $_POST['id_produk'];
    $query = mysqli_query($koneksi, "DELETE FROM him_produk_hukum WHERE id_produk ='$id'");

    if ($query) {
        $_SESSION['successDelete'] = "Data Berhasil Dihapus";
        header("Location: index?page=produk-hukum");
    } else {
        $_SESSION['failedDelete'] = "Data Gagal Dihapus";
        header("Location: index?page=produk-hukum");
    }
} else if (isset($_POST['edit'])) {
    $id_produk = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_produk']))));
    $tanggal_rilis = date("Y-m-d", strtotime($_POST['tanggal_rilis']));
    $kategori = htmlentities(htmlspecialchars(strip_tags(trim($_POST['kategori']))));
    $judul = htmlentities(htmlspecialchars(strip_tags(trim($_POST['judul']))));
    $keterangan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['keterangan']))));
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
            move_uploaded_file($file_tmp, '../assets/file/produk-hukum/' . $file);
            $query = mysqli_query($koneksi, "UPDATE him_produk_hukum SET tanggal_rilis = '$tanggal_rilis', kategori='$kategori', judul='$judul' , file='$file',keterangan='$keterangan', updated_at='$updated_at' WHERE id_produk='$id_produk'");
            if ($query) {
                $_SESSION['successEdit'] = "Data Berhasil Dirubah";
                header("Location: index?page=produk-hukum");
            } else {
                $_SESSION['failedEdit'] = "Gagal Mengupload File";
                header("Location: index?page=produk-hukum");
            }
        } else {
            $_SESSION['size'] = "Ukuran File Terlalu Besar";
            header("Location: index?page=produk-hukum");
        }
    } else {
        $query = mysqli_query($koneksi, "UPDATE him_produk_hukum SET tanggal_rilis = '$tanggal_rilis', kategori='$kategori', judul='$judul' ,keterangan='$keterangan', updated_at='$updated_at' WHERE id_produk='$id_produk'");
        if ($query) {
            $_SESSION['successEdit'] = "Data Berhasil Dirubah";
            header("Location: index?page=produk-hukum");
        } else {
            $_SESSION['failedEdit'] = "Data Gagal Diubah";
            header("Location: index?page=produk-hukum");
        }
    }
}
