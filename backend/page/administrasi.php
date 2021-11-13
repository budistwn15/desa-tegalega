<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Layanan Administrasi</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Layanan Administrasi</li>
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
                            <h3 class="card-title mt-2">Data Layanan Administrasi</h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-pemerintahan">
                                Tambah Data
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="pemerintah-desa" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Administrasi</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM him_administrasi");
                                $no = 1;
                                foreach ($query as $data) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['judul_administrasi'] ?></td>
                                        <td>
                                            <a href="../assets/file/administrasi/<?= $data['file'] ?>" target="_blank">
                                                <?= $data['file'] ?>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-warning" data-target="#edit<?= $data['id_administrasi'] ?>" data-toggle="modal">Edit</a>
                                                <a href="#" class="btn btn-danger" data-target="#delete<?= $data['id_administrasi'] ?>" data-toggle="modal">Hapus</a>
                                            </div>
                                        </td>

                                    </tr>
                                    <!-- modal Edit -->
                                    <div class="modal fade" id="edit<?= $data['id_administrasi'] ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data <?= $data['judul_administrasi'] ?> </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php
                                                    $id = $data['id_administrasi'];
                                                    $queryEdit = mysqli_query($koneksi, "SELECT * FROM him_administrasi WHERE id_administrasi='$id'");
                                                    $dataEdit = mysqli_fetch_array($queryEdit);
                                                    ?>
                                                    <form action="index?page=administrasi-proses" method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="id_administrasi" value="<?= $id ?>">
                                                        <div class="form-group">
                                                            <label for="judul_administrasi">Judul Administrasi <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-border" name="judul_administrasi" id="judul_administrasi" placeholder="Masukkan Judul Administrasi" value="<?= $dataEdit['judul_administrasi'] ?>" autofocus required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="isi_administrasi">Isi Administrasi <span class="text-danger">*</span></label>
                                                            <textarea id="administrasi" name="isi_administrasi" class="form-control" style="height: 100px;" required>
                                                            <?= $dataEdit['isi_administrasi'] ?>
                                                            </textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="file">File <span class="text-danger">*</span></label>
                                                            <a href="../assets/file/administrasi/<?= $dataEdit['file'] ?>" target="_blank">
                                                                <?= $dataEdit['file'] ?>
                                                            </a>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="file" name="file">
                                                                <label class="custom-file-label" for="file">Choose file</label>
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
                                    <div class="modal fade" id="delete<?= $data['id_administrasi'] ?>">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Apakah anda yakin ingin menghapus data? </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="index?page=administrasi-proses" method="post">
                                                    <input type="hidden" name="id_administrasi" value="<?= $data['id_administrasi'] ?>">
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                    </div>

                <?php
                                }
                ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Judul Administrasi</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                </table>
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

<div class="modal fade" id="modal-pemerintahan">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Administrasi</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="index?page=administrasi-proses" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="judul_administrasi">Judul Administrasi <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-border" name="judul_administrasi" id="judul_administrasi" placeholder="Masukkan Judul Administrasi" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="isi_administrasi">Isi Administrasi <span class="text-danger">*</span></label>
                        <textarea id="administrasi" name="isi_administrasi" class="form-control" style="height: 100px;" required>
                            </textarea>
                    </div>
                    <div class="form-group">
                        <label for="file">File <span class="text-danger">*</span></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file" name="file" required>
                            <label class="custom-file-label" for="file">Choose file</label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" name="tambah" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>