<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Berita</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Berita Desa</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <?php if (isset($_SESSION['successAdd'])) { ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['successAdd']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['successAdd']);
                } else if (isset($_SESSION['failedAdd'])) { ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['failedAdd']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['failedAdd']);
                } else if (isset($_SESSION['size'])) { ?>
                    <div class="alert alert-warning">
                        <?php echo $_SESSION['size']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['size']);
                } else if (isset($_SESSION['ekstensi'])) { ?>
                    <div class="alert alert-warning">
                        <?php echo $_SESSION['ekstensi']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['ekstensi']);
                } ?>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title mt-2">Data Berita Desa</h3>

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="berita" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Berita</th>
                                        <th>Slug</th>
                                        <th>Penulis</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = mysqli_query($koneksi, "SELECT * FROM him_berita JOIN him_user ON him_user.id_user = him_berita.id_user ORDER BY tanggal DESC");
                                    foreach ($query as $data) {
                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['judul_berita'] ?></td>
                                            <td><?= $data['slug'] ?></td>
                                            <td><?= $data['nama_lengkap'] ?></td>
                                            <td><?= tgl_indo($data['tanggal']) ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-warning">Edit</a>
                                                    <a href="#" class="btn btn-danger">Hapus</a>
                                                </div>
                                            </td>
                                        <?php
                                    }
                                        ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Berita</th>
                                        <th>Slug</th>
                                        <th>Penulis</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->