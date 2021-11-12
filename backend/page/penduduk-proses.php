<?php
if (isset($_POST['tambah'])) {
    $nik = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nik']))));
    $nama_lengkap = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_lengkap']))));
    $tempat_lahir = htmlentities(htmlspecialchars(strip_tags(trim($_POST['tempat_lahir']))));
    $tanggal_lahir = date("Y-m-d", strtotime($_POST['tanggal_lahir']));
    $umur = htmlentities(htmlspecialchars(strip_tags(trim($_POST['umur']))));
    $jk = htmlentities(htmlspecialchars(strip_tags(trim($_POST['jk']))));
    $rt = htmlentities(htmlspecialchars(strip_tags(trim($_POST['rt']))));
    $rw = htmlentities(htmlspecialchars(strip_tags(trim($_POST['rw']))));
    $dusun = htmlentities(htmlspecialchars(strip_tags(trim($_POST['dusun']))));
    $agama = htmlentities(htmlspecialchars(strip_tags(trim($_POST['agama']))));
    $pekerjaan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['pekerjaan']))));
    $pendidikan = htmlentities(htmlspecialchars(strip_tags(trim($_POST['pendidikan']))));
    $created_at = date("Y-m-d H:i:s");
    $updated_at = $created_at;


    $query = mysqli_query($koneksi, "INSERT INTO him_penduduk VALUES('$nik','$nama_lengkap','$tempat_lahir','$tanggal_lahir','$umur','$jk','$rt','$rw','$dusun','$agama','$pekerjaan','$pendidikan','$created_at','$updated_at')");
    if ($query) {
        $_SESSION['successAdd'] = "Data berhasil ditambah";
        header("Location: index?page=penduduk");
    } else {
        $_SESSION['failedAdd'] = "Data gagal ditambah";
        header("Location: index?page=penduduk");
    }
}
