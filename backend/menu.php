<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'dashboard':
            include "dashboard.php";
            break;
        case 'sejarah':
            include "page/sejarah.php";
            break;
        case 'sejarah-proses':
            include "page/sejarah-proses.php";
            break;
        case 'geografis':
            include "page/geografis.php";
            break;
        case 'geografis-proses':
            include "page/geografis-proses.php";
            break;
        case 'pemerintahan-desa':
            include "page/pemerintahan-desa.php";
            break;
        case 'pemerintahan-desa-proses':
            include "page/pemerintahan-desa-proses.php";
            break;
        case 'penduduk':
            include "page/penduduk.php";
            break;
        case 'penduduk-proses':
            include "page/penduduk-proses.php";
            break;
        case 'buat-berita':
            include "page/buat-berita.php";
            break;
        case 'berita':
            include "page/berita.php";
            break;
        case 'berita-proses':
            include "page/berita-proses.php";
            break;
        case 'buat-galeri':
            include "page/buat-galeri.php";
            break;
        case 'galeri':
            include "page/galeri.php";
            break;
        case 'galeri-proses':
            include "page/galeri-proses.php";
            break;
        default:
            echo "Maaf halaman tidak ditemukan";
            break;
    }
} else {
    include "dashboard.php";
}
