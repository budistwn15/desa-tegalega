<?php
ob_start();
include "../lib/koneksi.php";
if (isset($_POST['edit'])) {
    session_start();
    $id_geografis = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_geografis']))));
    $title_geografis = htmlentities(htmlspecialchars(strip_tags(trim($_POST['title_geografis']))));
    $geografis = $_POST['geografis'];
    $updated_at = date("Y-m-d H:i:s");
    $query = mysqli_query($koneksi, "UPDATE him_geografis SET title_geografis='$title_geografis', geografis='$geografis', updated_at='$updated_at' WHERE id_geografis='$id_geografis'");
    if ($query) {
        $_SESSION["edit"] = "Data berhasil diubah";
        header("Location: index?page=geografis");
    } else {
        echo "Gagal";
    }
}
