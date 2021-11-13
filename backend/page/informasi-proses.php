<?php
if (isset($_POST['delete'])) {
    $id_informasi = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_informasi']))));
    $query = mysqli_query($koneksi, "DELETE FROM him_penduduk WHERE id_informasi='$id_informasi'");
    if ($query) {
        $_SESSION['successDelete'] = "Data berhasil dihapus";
        header("Location: index?page=informasi");
    } else {
        $_SESSION['failedDelete'] = "Data gagal dihapus";
        header("Location: index?page=informasi");
    }
}
