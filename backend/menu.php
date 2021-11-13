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
        case 'administrasi':
            include "page/administrasi.php";
            break;
        case 'administrasi-proses':
            include "page/administrasi-proses.php";
            break;
        case 'informasi':
            include "page/informasi.php";
            break;
        case 'informasi-proses':
            include "page/informasi-proses.php";
            break;
        case 'produk-hukum':
            include "page/produk-hukum.php";
            break;
        case 'produk-hukum-proses':
            include "page/produk-hukum-proses.php";
            break;
        case 'kontak-kami':
            include "page/kontak-kami.php";
            break;
        case 'kontak-kami-proses':
            include "page/kontak-kami-proses.php";
            break;
        case 'profile':
            include "page/profile.php";
            break;
        case 'profile-proses':
            include "page/profile-proses.php";
            break;
        case 'user':
            include "page/user.php";
            break;
        case 'user-proses':
            include "page/user-proses.php";
            break;
        default:
            echo "Maaf halaman tidak ditemukan";
            break;
    }
} else {
    include "dashboard.php";
}
