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

    <section class="hero-berita">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5 mt-5 text-white">
                    <h2 class="display-5">Kabar Desa</h2>
                    <hr>
                    <p>Temukan informasi dan berita terkini terkait desa kami.</p>
                </div>
            </div>
    </section>

    <section class="wrapper p-5">
        <div class="container">
            <div class="row">
                <?php
                include "lib/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM him_berita ORDER BY id_berita DESC");
                if (mysqli_num_rows($query) > 0) {
                    foreach ($query as $data) {
                ?>
                        <div class="col-md-4 mb-3">
                            <div class="card  border-0 shadow-sm">
                                <img src="assets/img/berita/<?= $data['thumbnail'] ?>" alt="" class="card-img-top img-fluid">
                                <div class="card-body mt-4">
                                    <small><?= $data['tanggal'] ?></small>
                                    <a href="detail-berita?id=<?= $data['id_berita'] ?>" class="text-decoration-none text-dark">
                                        <h5><?= $data['judul_berita'] ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-warning">Tidak Ada Data</div>
                <?php
                }
                ?>

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
</body>

</html>