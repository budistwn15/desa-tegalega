<?php
if (isset($_POST['delete'])) {
    $id_kontak = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_kontak']))));
    $query = mysqli_query($koneksi, "DELETE FROM him_kontak_kami WHERE id_kontak='$id_kontak'");
    if ($query) {
        $_SESSION['successDelete'] = "Data berhasil dihapus";
        header("Location: index?page=kontak-kami");
    } else {
        $_SESSION['failedDelete'] = "Data gagal dihapus";
        header("Location: index?page=kontak-kami");
    }
}
