<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Manajemen User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Manajemen User</li>
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
                            <h3 class="card-title mt-2">Data Manajemen User</h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-pemerintahan">
                                Tambah Data
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="berita" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM him_user WHERE NOT email='budi.setiawan112001@gmail.com'");
                                $no = 1;
                                foreach ($query as $data) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama_lengkap'] ?></td>
                                        <td><?= $data['email'] ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-warning" data-target="#edit<?= $data['id_user'] ?>" data-toggle="modal">Edit</a>
                                                <a href="#" class="btn btn-danger" data-target="#delete<?= $data['id_user'] ?>" data-toggle="modal">Hapus</a>
                                            </div>
                                        </td>

                                    </tr>
                                    <!-- modal Edit -->
                                    <div class="modal fade" id="edit<?= $data['id_user'] ?>">
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
                                                    $id = $data['id_user'];
                                                    $queryEdit = mysqli_query($koneksi, "SELECT * FROM him_user WHERE id_user='$id'");
                                                    $dataEdit = mysqli_fetch_array($queryEdit);
                                                    ?>
                                                    <form action="index?page=user-proses" method="post">
                                                        <input type="hidden" name="id_user" value="<?= $id ?>">
                                                        <div class="form-group">
                                                            <label for="nama_lengkap">Nama Lengkap <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-border" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" autofocus value="<?= $dataEdit['nama_lengkap'] ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Email <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control form-control-border" name="email" id="email" placeholder="Masukkan Email" autofocus value="<?= $dataEdit['email'] ?>" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password">Password <span class="text-danger">*</span></label>
                                                            <input type="password" class="form-control form-control-border" name="password" id="password" placeholder="Masukkan Password" value="<?= $dataEdit['password'] ?>" autofocus required>
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
                                    <div class="modal fade" id="delete<?= $data['id_user'] ?>">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Apakah anda yakin ingin menghapus data? </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="index?page=user-proses" method="post">
                                                    <input type="hidden" name="id_user" value="<?= $data['id_user'] ?>">
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
                <h4 class="modal-title">Tambah Data Users</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="index?page=user-proses" method="post">
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-border" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-border" name="email" id="email" placeholder="Masukkan Email" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control form-control-border" name="password" id="password" placeholder="Masukkan Password" autofocus required>
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