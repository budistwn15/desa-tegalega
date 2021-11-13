<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tegalega merupakan sebuah desa yang terletak di daerah kecamatan Ciampel, kabupaten Karawang, Provinsi Jawa Barat, Indonesia">
    <meta name="keywords" content="Desa Tegalega, Tegalega, Desa tegalega, Ciampel">
    <title>Berita Desa - Pemerintah Desa Tegalega</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <section class="navbar-nav">
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-4 shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="index">Tegalega</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Desa
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="sejarah">Sejarah</a></li>
                                <li><a class="dropdown-item" href="geografis">Geografis</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pemerintahan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="pemerintahan-desa">Pemerintahan Desa</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="statistik">Statistik</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Layanan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="administrasi">Administrasi</a></li>
                                <li><a class="dropdown-item" href="informasi">Informasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="produk-hukum">Produk Hukum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="berita">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galeri">Galeri</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section class="hero-statistik">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5 mt-5 text-white">
                    <h2 class="display-5">Statistik</h2>
                    <hr>
                    <p>Sistem kami memungkinkan dalam melakukan pendataan secara tepat, akurat dan akuntabel. Diolah oleh tim pendata Desa kami.</p>
                </div>
            </div>
    </section>

    <section class="wrapper p-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Data Kependudukan</h2>
                    <hr>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <h4 class="text-center">Gender</h4>
                    <div class="card py-5 mt-5 border-0 shadow-sm">
                        <canvas id="genderChart"></canvas>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center">Pendidikan</h4>
                    <div class="card py-5 mt-5 border-0 shadow-sm">
                        <canvas id="pendidikanChart"></canvas>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center mt-5">Agama</h4>
                    <div class="card py-5 mt-5 border-0 shadow-sm">
                        <canvas id="agamaChart"></canvas>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 class="text-center mt-5">Pekerjaan</h4>
                    <div class="card py-5 mt-5 border-0 shadow-sm">
                        <canvas id="pekerjaanChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="mt-3 text-center">Copyright 2021 - Pemerintah Desa Tegalega | Design By <a href="https://himtika.cs.unsika.ac.id/" class="text-decoration-none text-success">HIMTIKA</a></p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- ChartJS -->
    <script src="assets/js/Chart.js/Chart.min.js"></script>
    <script>
        var ctx = document.getElementById("pendidikanChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [
                    <?php
                    include "lib/koneksi.php";
                    $pendidikan = mysqli_query($koneksi, "SELECT pendidikan FROM him_penduduk");
                    foreach ($pendidikan as $data_pendidikan) {
                        echo '"' . $data_pendidikan['pendidikan'] . '",';
                    }
                    ?>
                ],
                datasets: [{
                    label: '',
                    data: [
                        <?php
                        $jumlah_pendidikan = mysqli_query($koneksi, "SELECT COUNT(pendidikan) AS total FROM him_penduduk GROUP BY pendidikan");
                        foreach ($jumlah_pendidikan as $jumlah) {
                            echo $jumlah['total'] . ",";
                        }
                        ?>
                    ],
                    backgroundColor: [
                        '#f56954',
                        '#00a65a',
                        '#f39c12'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
            }
        });
    </script>
    <script>
        var gender = document.getElementById("genderChart").getContext('2d');
        var genderChart = new Chart(gender, {
            type: 'pie',
            data: {
                labels: [
                    "Laki-Laki",
                    "Perempuan"
                ],
                datasets: [{
                    label: '',
                    data: [
                        <?php
                        $jumlah_laki = mysqli_query($koneksi, "select * from him_penduduk where jk='L'");
                        echo mysqli_num_rows($jumlah_laki); ?>,
                        <?php $jumlah_perempuan = mysqli_query($koneksi, "select * from him_penduduk where jk='P'");
                        echo mysqli_num_rows($jumlah_perempuan); ?>
                    ],
                    backgroundColor: [
                        '#f56954',
                        '#00a65a',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
            }
        });
    </script>
    <script>
        var agama = document.getElementById("agamaChart").getContext('2d');
        var agamaChart = new Chart(agama, {
            type: 'bar',
            data: {
                labels: [
                    <?php
                    $agama = mysqli_query($koneksi, "SELECT agama FROM him_penduduk");
                    foreach ($agama as $data_agama) {
                        echo '"' . $data_agama['agama'] . '",';
                    }
                    ?>
                ],
                datasets: [{
                    label: 'Data Agama',
                    data: [
                        <?php
                        $jumlah_agama = mysqli_query($koneksi, "SELECT COUNT(agama) AS total FROM him_penduduk GROUP BY agama");
                        foreach ($jumlah_agama as $jumlah) {
                            echo $jumlah['total'] . ",";
                        }
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
    <script>
        var pekerjaan = document.getElementById("pekerjaanChart").getContext('2d');
        var pekerjaanChart = new Chart(pekerjaan, {
            type: 'bar',
            data: {
                labels: [
                    <?php
                    $pekerjaan = mysqli_query($koneksi, "SELECT pekerjaan FROM him_penduduk");
                    foreach ($pekerjaan as $data_pekerjaan) {
                        echo '"' . $data_pekerjaan['pekerjaan'] . '",';
                    }
                    ?>
                ],
                datasets: [{
                    label: 'Data Agama',
                    data: [
                        <?php
                        $jumlah_pekerjaan = mysqli_query($koneksi, "SELECT COUNT(pekerjaan) AS total FROM him_penduduk GROUP BY pekerjaan");
                        foreach ($jumlah_pekerjaan as $jumlah) {
                            echo $jumlah['total'] . ",";
                        }
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>

</html>