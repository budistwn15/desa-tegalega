<?php
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemerintah Desa Tegalega | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">
</head>


<body class="hold-transition sidebar-mini layout-fixed">
    <?php
    session_start();
    if ($_SESSION['email'] == "") {
        $_SESSION['restricted'] = "Silahkan untuk login terlebih dahulu";
        header("Location:login");
    }
    include "../lib/koneksi.php";
    ?>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../assets/img/logo/Himtika.png" alt="HIMTIKA" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <span class="brand-text font-weight-light text-center">Desa Tegalega</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a href="#" class="d-block">Budi Setiawan</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="index.php" class="nav-link active">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Manajemen
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="index?page=sejarah" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sejarah Desa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index?page=geografis" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Geografis Desa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index?page=pemerintahan-desa" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pemerintahan Desa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index?page=penduduk" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Penduduk</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Statistik
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Berita
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="index?page=buat-berita" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Buat Berita</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index?page=berita" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lihat Berita</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-camera"></i>
                                <p>
                                    Galeri
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="index?page=buat-galeri" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Buat Galeri</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index?page=galeri" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lihat Galeri</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">Layanan</li>
                        <li class="nav-item">
                            <a href="pages/calendar.html" class="nav-link">
                                <i class="nav-icon far fa-file-alt"></i>
                                <p>
                                    Administrasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon fas fa-info"></i>
                                <p>
                                    Informasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">Lainnya</li>
                        <li class="nav-item">
                            <a href="iframe.html" class="nav-link">
                                <i class="nav-icon fas fa-gavel"></i>
                                <p>Produk Hukum</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                                <i class="nav-icon fas fa-address-book"></i>
                                <p>Kontak Kami</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
                                <i class="nav-icon fas fa-id-badge"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" data-toggle="modal" data-target="#logout" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php
            include "menu.php";
            ?>
        </div>

        <!-- modal Logout -->
        <div class="modal fade" id="logout">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Apakah anda yakin ingin keluar? </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2021 <a href="http://himtika.cs.unsika.ac.id/">HIMTIKA</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../assets/plugins/moment/moment.min.js"></script>
    <script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/plugins/jszip/jszip.min.js"></script>
    <script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../assets/js/demo.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#sejarah').summernote()
            $('#geografis').summernote()
            $('#isi_berita').summernote()
        })
    </script>
    <script>
        $(function() {
            $("#pemerintah-desa").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#pemerintah-desa_wrapper .col-md-6:eq(0)');

            $("#penduduk").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#penduduk_wrapper .col-md-6:eq(0)');

            $('#berita').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            $('#galeri').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <!-- DonutChart Jenis Kelamin -->
    <script>
        var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')
        var pieData = {
            labels: [
                'Laki-Laki',
                'Perempuan',
            ],
            datasets: [{
                data: [
                    <?php
                    $jumlah_laki = mysqli_query($koneksi, "select * from him_penduduk where jk='L'");
                    echo mysqli_num_rows($jumlah_laki); ?>,
                    <?php $jumlah_perempuan = mysqli_query($koneksi, "select * from him_penduduk where jk='P'");
                    echo mysqli_num_rows($jumlah_perempuan); ?>
                ],
                backgroundColor: ['#f56954', '#00a65a', '#f39c12']
            }]
        }
        var pieOptions = {
            legend: {
                display: true
            },
            maintainAspectRatio: false,
            responsive: true,
        }
        var pieChart = new Chart(pieChartCanvas, {
            type: 'doughnut',
            data: pieData,
            options: pieOptions
        })
    </script>
    <script>
        $(function() {
            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */

            //-------------
            //- DONUT CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pekerjaanChartCanvas = $('#pekerjaanChart').get(0).getContext('2d')
            var pekerjaanData = {
                labels: [
                    <?php
                    $pekerjaan = mysqli_query($koneksi, "SELECT pekerjaan FROM him_penduduk");
                    foreach ($pekerjaan as $data_pekerjaan) {
                        echo '"' . $data_pekerjaan['pekerjaan'] . '",';
                    }
                    ?>
                ],
                datasets: [{
                    data: [
                        <?php
                        $jumlah_pekerjaan = mysqli_query($koneksi, "SELECT COUNT(pekerjaan) AS total FROM him_penduduk GROUP BY pekerjaan");
                        foreach ($jumlah_pekerjaan as $jumlah) {
                            echo $jumlah['total'] . ",";
                        }
                        ?>
                    ],
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                }]
            }
            var pekerjaanOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            new Chart(pekerjaanChartCanvas, {
                type: 'doughnut',
                data: pekerjaanData,
                options: pekerjaanOptions
            })

            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pendudukChartCanvas = $('#pendudukChart').get(0).getContext('2d')
            var pendudukData = {
                labels: [
                    'Laki-Laki',
                    'Perempuan'
                ],
                datasets: [{
                    data: [
                        <?php
                        $jumlah_laki = mysqli_query($koneksi, "select * from him_penduduk where jk='L'");
                        echo mysqli_num_rows($jumlah_laki);
                        ?>,
                        <?php
                        $jumlah_perempuan = mysqli_query($koneksi, "select * from him_penduduk where jk='P'");
                        echo mysqli_num_rows($jumlah_perempuan);
                        ?>,
                    ],
                    backgroundColor: ['#f56954', '#00a65a'],
                }]
            }
            var pendudukOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            new Chart(pendudukChartCanvas, {
                type: 'pie',
                data: pendudukData,
                options: pendudukOptions
            })

            //-------------
            //- BAR CHART -
            //-------------
            var pendidikanChartCanvas = $('#pendidikanChart').get(0).getContext('2d')

            var pendidikanData = {
                labels: [
                    <?php
                    $pendidikan = mysqli_query($koneksi, "SELECT pendidikan FROM him_penduduk");
                    foreach ($pendidikan as $data_pendidikan) {
                        echo '"' . $data_pendidikan['pendidikan'] . '",';
                    }
                    ?>
                ],
                datasets: [{
                    label: 'Data',
                    data: [
                        <?php
                        $jumlah_pendidikan = mysqli_query($koneksi, "SELECT COUNT(pendidikan) AS total FROM him_penduduk GROUP BY pendidikan");
                        foreach ($jumlah_pendidikan as $jumlah) {
                            echo $jumlah['total'] . ",";
                        }
                        ?>
                    ],
                    backgroundColor: ['#f56954', '#00a65a'],
                }]
            }
            var pendidikanOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }

            new Chart(pendidikanChartCanvas, {
                type: 'bar',
                data: pendidikanData,
                options: pendidikanOptions
            })

            // line
            var lineChartCanvas = $('#lineChart').get(0).getContext('2d')

            var lineData = {
                labels: [
                    <?php
                    $agama = mysqli_query($koneksi, "SELECT agama FROM him_penduduk");
                    foreach ($agama as $data_agama) {
                        echo '"' . $data_agama['agama'] . '",';
                    }
                    ?>
                ],
                datasets: [{
                    label: 'Data',
                    data: [
                        <?php
                        $jumlah_agama = mysqli_query($koneksi, "SELECT COUNT(agama) AS total FROM him_penduduk GROUP BY agama");
                        foreach ($jumlah_agama as $jumlah) {
                            echo $jumlah['total'] . ",";
                        }
                        ?>
                    ],
                    backgroundColor: ['#f56954', '#00a65a'],
                }]
            }
            var lineOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }

            new Chart(lineChartCanvas, {
                type: 'bar',
                data: lineData,
                options: lineOptions
            })
        })
    </script>
</body>

</html>