<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "tegalega";

$koneksi = mysqli_connect($host, $user, $pass, $name);

date_default_timezone_set("Asia/Jakarta");

function textToSlug($text = '')
{
    $text = trim($text);
    if (empty($text)) return '';
    $text = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $text);
    $text = strtolower(trim($text));
    $text = str_replace(' ', '-', $text);
    $text = $text_ori = preg_replace('/\-{2,}/', '-', $text);
    return $text;
}

function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    return $pecahkan[2] . ' ' . $bulan[(int)$pecahkan[1]] . ' ' . $pecahkan[0];
}
