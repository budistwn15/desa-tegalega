<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Profile <?= $_SESSION['nama'] ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php if (isset($_SESSION['successEdit'])) { ?>
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
                } else if (isset($_SESSION['errorPassword'])) { ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['errorPassword']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['errorPassword']);
                } else if (isset($_SESSION['notPassword'])) { ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['notPassword']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['notPassword']);
                } else if (isset($_SESSION['successPassword'])) { ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['successPassword']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['successPassword']);
                } else if (isset($_SESSION['failedPassword'])) { ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['failedPassword']; ?>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php unset($_SESSION['failedPassword']);
                } ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Profile</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="index?page=profile-proses" method="POST" enctype="multipart/form-data">
                            <?php
                            $id_user = $_SESSION['id'];
                            $query = mysqli_query($koneksi, "SELECT nama_lengkap, email FROM him_user WHERE id_user='$id_user'");
                            $data = mysqli_fetch_array($query);
                            ?>
                            <input type="hidden" name="id_user" value="<?= $id_user ?>">
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control form-control-border" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" value="<?= $data['nama_lengkap'] ?>" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control form-control-border" name="email" id="email" placeholder="Masukkan Nama Lengkap" value="<?= $data['email'] ?>" autofocus>
                            </div>
                            <input type="submit" value="Edit Profile" name="edit" class="btn btn-primary">
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card card-primary my-4">
                    <div class="card-header">
                        <h3 class="card-title">Ganti Password</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="index?page=profile-proses" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id_user" value="<?= $id_user ?>">
                            <div class="form-group">
                                <label for="password_lama">Password Lama</label>
                                <input type="password" class="form-control form-control-border" name="password_lama" id="password_lama" placeholder="Masukkan Nama Lengkap" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password_baru">Password Baru</label>
                                <input type="password" class="form-control form-control-border" name="password_baru" id="password_baru" placeholder="Masukkan Nama Lengkap" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="konfirmasi_password_baru">Konfirmasi Password Baru</label>
                                <input type="password" class="form-control form-control-border" name="konfirmasi_password_baru" id="konfirmasi_password_baru" placeholder="Masukkan Nama Lengkap" autofocus>
                            </div>
                            <input type="submit" value="Edit Password" name="edit_password" class="btn btn-primary">
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>