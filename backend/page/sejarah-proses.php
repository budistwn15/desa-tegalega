<?php
ob_start();
include "../lib/koneksi.php";
if (isset($_POST['edit'])) {
    session_start();
    $id_sejarah = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id_sejarah']))));
    $title_sejarah = htmlentities(htmlspecialchars(strip_tags(trim($_POST['title_sejarah']))));
    $sejarah = $_POST['sejarah'];
    $updated_at = date("Y-m-d H:i:s");
    $query = mysqli_query($koneksi, "UPDATE him_sejarah SET title_sejarah='$title_sejarah', sejarah='$sejarah', updated_at='$updated_at' WHERE id_sejarah='$id_sejarah'");
    if ($query) {
        $_SESSION["edit"] = "Data berhasil diubah";
        header("Location: index?page=sejarah");
    } else {
        echo "Gagal";
    }
}
