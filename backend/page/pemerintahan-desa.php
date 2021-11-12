<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Pemerintahan Desa</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Pemerintahan Desa</li>
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
                <?php if (isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['success']);
                } else if (isset($_SESSION['failedDelete'])) { ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['failedDelete']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['failedDelete']);
                } else if (isset($_SESSION['failed'])) { ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['failed']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['failed']);
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
                } else if (isset($_SESSION['successEdit'])) { ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['successEdit']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['successEdit']);
                } ?>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title mt-2">Data Pemerintah Desa</h3>
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
                                    <th>Nama Lengkap</th>
                                    <th>Jabatan</th>
                                    <th>Photo Profile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM him_pemerintahan_desa");
                                $no = 1;
                                foreach ($query as $data) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama_lengkap'] ?></td>
                                        <td><?= $data['jabatan'] ?></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#photo<?= $data['id_pemerintahan_desa'] ?>">
                                                <img src="../assets/img/pemdes/<?= $data['photo'] ?>" alt="<?= $data['nama_lengkap'] ?>" class="img-fluid img-thumbnail" width="80">
                                            </a>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-warning" data-target="#edit<?= $data['id_pemerintahan_desa'] ?>" data-toggle="modal">Edit</a>
                                                <a href="#" class="btn btn-danger" data-target="#delete<?= $data['id_pemerintahan_desa'] ?>" data-toggle="modal">Hapus</a>
                                            </div>
                                        </td>

                                    </tr>
                                    <!-- modal picture -->
                                    <div class="modal fade" id="photo<?= $data['id_pemerintahan_desa'] ?>">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="../assets/img/pemdes/<?= $data['photo'] ?>" alt="<?= $data['nama_lengkap'] ?>" class="img-fluid img-thumbnail">
                                                </div>

                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- modal Edit -->
                                    <div class="modal fade" id="edit<?= $data['id_pemerintahan_desa'] ?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data <?= $data['nama_lengkap'] ?> </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php
                                                    $id = $data['id_pemerintahan_desa'];
                                                    $queryEdit = mysqli_query($koneksi, "SELECT * FROM him_pemerintahan_desa WHERE id_pemerintahan_desa='$id'");
                                                    $dataEdit = mysqli_fetch_array($queryEdit);
                                                    ?>
                                                    <form action="index?page=pemerintahan-desa-proses" method="post" enctype="multipart/form-data">
                                                        <input type="hidden" name="id_pemerintahan_desa" value="<?= $id ?>">
                                                        <div class="form-group">
                                                            <label for="nama_lengkap">Nama Lengkap <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-border" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" value="<?= $dataEdit['nama_lengkap'] ?>" autofocus required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jabatan">Jabatan <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-border" name="jabatan" id="jabatan" placeholder="Masukkan Jabatan" value="<?= $dataEdit['jabatan'] ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="photo">Photo Profile</label>
                                                            <br>
                                                            <img src="../assets/img/pemdes/<?= $dataEdit['photo'] ?>" alt="<?= $dataEdit['nama_lengkap'] ?>" class="img-fluid my-2" width="100">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="photo" name="photo">
                                                                <label class="custom-file-label" for="photo">Choose file</label>
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
                                        <!-- modal Delete -->
                                        <div class="modal fade" id="delete<?= $data['id_pemerintahan_desa'] ?>">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Apakah anda yakin ingin menghapus data? </h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="index?page=pemerintahan-desa-proses" method="post">
                                                        <input type="hidden" name="id_pemerintahan_desa" value="<?= $data['id_pemerintahan_desa'] ?>">
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
                                    <th>Nama Lengkap</th>
                                    <th>Jabatan</th>
                                    <th>Photo Profile</th>
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
                <h4 class="modal-title">Tambah Data Pemerintahan Desa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="index?page=pemerintahan-desa-proses" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-border" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-border" name="jabatan" id="jabatan" placeholder="Masukkan Jabatan" required>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo Profile <span class="text-danger">*</span></label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="photo" name="photo" required>
                            <label class="custom-file-label" for="photo">Choose file</label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>