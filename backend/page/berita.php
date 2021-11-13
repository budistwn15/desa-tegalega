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
                } else if (isset($_SESSION['successDelete'])) { ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['successDelete']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['successDelete']);
                } else if (isset($_SESSION['failedDelete'])) { ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['failedDelete']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['failedDelete']);
                } else if (isset($_SESSION['successEdit'])) { ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['successEdit']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['successEdit']);
                } else if (isset($_SESSION['failedEdit'])) { ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['failedEdit']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['failedEdit']);
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
                                                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $data['id_berita'] ?>">Edit</a>
                                                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $data['id_berita'] ?>">Hapus</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- modal Edit -->
                                        <div class="modal fade" id="edit<?= $data['id_berita'] ?>">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Data <em><?= $data['judul_berita'] ?></em> </h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php
                                                        $id = $data['id_berita'];
                                                        $queryEdit = mysqli_query($koneksi, "SELECT * FROM him_berita WHERE id_berita='$id'");
                                                        $dataEdit = mysqli_fetch_array($queryEdit);
                                                        ?>
                                                        <form action="index?page=berita-proses" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" name="id_berita" value="<?= $id ?>">
                                                            <div class="form-group">
                                                                <label for="judul_berita">Judul Berita</label>
                                                                <input type="text" class="form-control form-control-border" name="judul_berita" id="judul_berita" placeholder="Masukkan Judul Berita" value="<?= $dataEdit['judul_berita'] ?>" autofocus>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="isi_berita">Isi Berita</label>
                                                                <textarea id="isi_berita" name="isi_berita" class="form-control" style="height: 100px;">
                                                                <?= $dataEdit['isi_berita'] ?>
                                                             </textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="thumbnail">Thumbnail</label>
                                                                <br>
                                                                <img src="../assets/img/berita/<?= $dataEdit['thumbnail'] ?>" alt="<?= $dataEdit['judul_berita'] ?>" class="img-fluid my-2" width="100">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                                                                    <label class="custom-file-label" for="thumbnail">Choose file</label>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                        </div>
                                        <!-- modal Delete -->
                                        <div class="modal fade" id="delete<?= $data['id_berita'] ?>">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Apakah anda yakin ingin menghapus data? </h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="index?page=berita-proses" method="post">
                                                        <input type="hidden" name="id_berita" value="<?= $data['id_berita'] ?>">
                                                        <div class="modal-footer justify-content-center">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
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