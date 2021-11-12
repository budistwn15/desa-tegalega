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
        default:
            echo "Maaf halaman tidak ditemukan";
            break;
    }
} else {
    include "dashboard.php";
}
