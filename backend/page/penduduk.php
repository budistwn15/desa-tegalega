<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Penduduk</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Penduduk</li>
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
                            <h3 class="card-title mt-2">Data Penduduk Desa</h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-penduduk">
                                Tambah Data
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="penduduk" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th rowspan="2" class="align-middle">NIK</th>
                                        <th rowspan="2" class="align-middle">Nama Lengkap</th>
                                        <th rowspan="2" class="align-middle">Tempat, Tanggal Lahir</th>
                                        <th rowspan="2" class="align-middle">Umur</th>
                                        <th rowspan="2" class="align-middle">JK</th>
                                        <th colspan="3" class="text-center">Alamat</th>
                                        <th rowspan="2" class="align-middle">Agama</th>
                                        <th rowspan="2" class="align-middle">Pekerjaan</th>
                                        <th rowspan="2" class="align-middle">Pendidikan</th>
                                        <th rowspan="2" class="align-middle">Action</th>
                                    </tr>
                                    <tr>
                                        <th>RT</th>
                                        <th>RW</th>
                                        <th>Dusun</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = mysqli_query($koneksi, "SELECT * FROM him_penduduk");
                                    foreach ($query as $data) {
                                    ?>
                                        <tr>
                                            <td><?= $data['nik'] ?></td>
                                            <td><?= $data['nama_lengkap'] ?></td>
                                            <td><?= $data['tempat_lahir'] . ", " . $data['tanggal_lahir'] ?></td>
                                            <td><?= $data['umur'] ?> tahun</td>
                                            <td>
                                                <?php
                                                if ($data['jk'] == "L") {
                                                    echo "Laki-Laki";
                                                } else {
                                                    echo "Perempuan";
                                                }
                                                ?>
                                            </td>
                                            <td><?= $data['rt'] ?></td>
                                            <td><?= $data['rw'] ?></td>
                                            <td><?= $data['dusun'] ?></td>
                                            <td><?= $data['agama'] ?></td>
                                            <td><?= $data['pekerjaan'] ?></td>
                                            <td><?= $data['pendidikan'] ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $data['nik'] ?>">Edit</a>
                                                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $data['nik'] ?>">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Modal edit -->
                                        <div class="modal fade" id="edit<?= $data['nik'] ?>">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Data Penduduk</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php
                                                        $nik = $data['nik'];
                                                        $queryEdit = mysqli_query($koneksi, "SELECT * FROM him_penduduk WHERE nik='$nik'");
                                                        $dataEdit = mysqli_fetch_array($queryEdit);
                                                        ?>
                                                        <form action="index?page=penduduk-proses" method="POST">
                                                            <div class="form-group">
                                                                <label for="nik">NIK (Nomor Induk Kependudukan) <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control form-control-border" name="nik" id="nik" placeholder="Masukkan NIK" max="16" value="<?= $nik ?>" autofocus required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="nama_lengkap">Nama Lengkap <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control form-control-border" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" value="<?= $dataEdit['nama_lengkap'] ?>" required>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="tempat_lahir">Tempat Lahir <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control form-control-border" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" value="<?= $dataEdit['tempat_lahir'] ?>" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span></label>
                                                                        <input type="date" class="form-control form-control-border" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="<?= $dataEdit['tanggal_lahir'] ?>" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="umur">Umur <span class="text-danger">*</span></label>
                                                                <input type="number" class="form-control form-control-border" name="umur" id="umur" placeholder="Masukkan Umur" value="<?= $dataEdit['umur'] ?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="jk">Jenis Kelamin <span class="text-danger">*</span></label>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="jk" value="L" <?= $dataEdit['jk'] == 'L' ? "checked" : '' ?>>
                                                                    <label class="form-check-label">Laki-Laki</label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="jk" value="P" <?= $dataEdit['jk'] == 'P' ? "checked" : '' ?>>
                                                                    <label class="form-check-label">Perempuan</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="rt">RT <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control form-control-border" name="rt" id="rt" value="<?= $dataEdit['rt'] ?>" placeholder="Masukkan RT" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="rw">RW <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control form-control-border" name="rw" id="rw" value="<?= $dataEdit['rw'] ?>" placeholder="Masukkan RW" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="dusun">Dusun <span class="text-danger">*</span></label>
                                                                        <input type="text" class="form-control form-control-border" value="<?= $dataEdit['dusun'] ?>" name="dusun" id="dusun" placeholder="Masukkan Dusun" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="agama">Agama <span class="text-danger">*</span></label>
                                                                <select class="custom-select form-control-border border-width-2" id="agama" name="agama">
                                                                    <option>Pilih Agama</option>
                                                                    <option value="Islam" <?= $dataEdit['agama'] == 'Islam' ? "selected" : '' ?>>Islam</option>
                                                                    <option value="Katolik" <?= $dataEdit['agama'] == 'Katolik' ? "selected" : '' ?>>Katolik</option>
                                                                    <option value="Protestan" <?= $dataEdit['agama'] == 'Protestan' ? "selected" : '' ?>>Protestan</option>
                                                                    <option value="Budha" <?= $dataEdit['agama'] == 'Budha' ? "selected" : '' ?>>Budha</option>
                                                                    <option value="Hindu" <?= $dataEdit['agama'] == 'Hindu' ? "selected" : '' ?>>Hindu</option>
                                                                    <option value="Lainnya" <?= $dataEdit['agama'] == 'Lainnya' ? "selected" : '' ?>>Lainnya</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pekerjaan">Pekerjaan <span class="text-danger">*</span></label>
                                                                <select class="custom-select form-control-border border-width-2" id="pekerjaan" name="pekerjaan">
                                                                    <option>Pilih Data Pekerjaan</option>
                                                                    <option value="Belum Bekerja" <?= $dataEdit['pekerjaan'] == 'Belum Bekerja' ? "selected" : '' ?>>Belum Bekerja</option>
                                                                    <option value="Mengurus Rumah Tangga" <?= $dataEdit['pekerjaan'] == 'Mengurus Rumah Tangga' ? "selected" : '' ?>>Mengurus Rumah Tangga</option>
                                                                    <option value="Pelajar/Mahasiswa" <?= $dataEdit['pekerjaan'] == 'Pelajar / Mahasiswa' ? "selected" : '' ?>>Pelajar/Mahasiswa</option>
                                                                    <option value="Pensiunan" <?= $dataEdit['pekerjaan'] == 'Pensiunan' ? "selected" : '' ?>>Pensiunan</option>
                                                                    <option value="PNS" <?= $dataEdit['pekerjaan'] == 'PNS' ? "selected" : '' ?>>PNS</option>
                                                                    <option value="TNI" <?= $dataEdit['pekerjaan'] == 'TNI' ? "selected" : '' ?>>TNI</option>
                                                                    <option value="Polri" <?= $dataEdit['pekerjaan'] == 'Polri' ? "selected" : '' ?>>Polri</option>
                                                                    <option value="Pedagang" <?= $dataEdit['pekerjaan'] == 'Pedagang' ? "selected" : '' ?>>Pedagang</option>
                                                                    <option value="Petani" <?= $dataEdit['pekerjaan'] == 'Petani' ? "selected" : '' ?>>Petani</option>
                                                                    <option value="Peternak" <?= $dataEdit['pekerjaan'] == 'Peternak' ? "selected" : '' ?>>Peternak</option>
                                                                    <option value="Transportasi" <?= $dataEdit['pekerjaan'] == 'Transportasi' ? "selected" : '' ?>>Transportasi</option>
                                                                    <option value="Karyawan Swasta" <?= $dataEdit['pekerjaan'] == 'Karyawan Swasta' ? "selected" : '' ?>>Karyawan Swasta</option>
                                                                    <option value="Karyawan BUMN" <?= $dataEdit['pekerjaan'] == 'Karyawan BUMN' ? "selected" : '' ?>>Karyawan BUMN</option>
                                                                    <option value="Karyawan BUMD" <?= $dataEdit['pekerjaan'] == 'Karyawan BUMD' ? "selected" : '' ?>>Karyawan BUMD</option>
                                                                    <option value="Honorer" <?= $dataEdit['pekerjaan'] == 'Honorer' ? "selected" : '' ?>>Honorer</option>
                                                                    <option value="Buruh" <?= $dataEdit['pekerjaan'] == 'Buruh' ? "selected" : '' ?>>Buruh</option>
                                                                    <option value="Buruh Tani" <?= $dataEdit['pekerjaan'] == 'Buruh Tani' ? "selected" : '' ?>>Buruh Tani</option>
                                                                    <option value="Asisten Rumah Tangga" <?= $dataEdit['pekerjaan'] == 'Asisten Rumah Tangga' ? "selected" : '' ?>>Asisten Rumah Tangga</option>
                                                                    <option value="Tukang Batu" <?= $dataEdit['pekerjaan'] == 'Tukang Batu' ? "selected" : '' ?>>Tukang Batu</option>
                                                                    <option value="Tukang Kayu" <?= $dataEdit['pekerjaan'] == 'Tukang Kayu' ? "selected" : '' ?>>Tukang Kayu</option>
                                                                    <option value="Tukang Las" <?= $dataEdit['pekerjaan'] == 'Tukang Las' ? "selected" : '' ?>>Tukang Las</option>
                                                                    <option value="Tukang Jahit" <?= $dataEdit['pekerjaan'] == 'Tukang Jahit' ? "selected" : '' ?>>Tukang Jahit</option>
                                                                    <option value="Penata Rias" <?= $dataEdit['pekerjaan'] == 'Penata Rias' ? "selected" : '' ?>>Penata Rias</option>
                                                                    <option value="Mekanik" <?= $dataEdit['pekerjaan'] == 'Mekanik' ? "selected" : '' ?>>Mekanik</option>
                                                                    <option value="Seniman" <?= $dataEdit['pekerjaan'] == 'Seniman' ? "selected" : '' ?>>Seniman</option>
                                                                    <option value="Perancang Busana" <?= $dataEdit['pekerjaan'] == 'Perancang Busana' ? "selected" : '' ?>>Perancang Busana</option>
                                                                    <option value="Guru" <?= $dataEdit['pekerjaan'] == 'Guru' ? "selected" : '' ?>>Guru</option>
                                                                    <option value="Bidan" <?= $dataEdit['pekerjaan'] == 'Bidan' ? "selected" : '' ?>>Bidan</option>
                                                                    <option value="Perawat" <?= $dataEdit['pekerjaan'] == 'Perawat' ? "selected" : '' ?>>Perawat</option>
                                                                    <option value="Pelaut" <?= $dataEdit['pekerjaan'] == 'Pelaut' ? "selected" : '' ?>>Pelaut</option>
                                                                    <option value="Sopir" <?= $dataEdit['pekerjaan'] == 'Sopir' ? "selected" : '' ?>>Sopir</option>
                                                                    <option value="Pedagang" <?= $dataEdit['pekerjaan'] == 'Pedagang' ? "selected" : '' ?>>Pedagang</option>
                                                                    <option value="Perangkat Desa" <?= $dataEdit['pekerjaan'] == 'Perangkat Desa' ? "selected" : '' ?>>Perangkat Desa</option>
                                                                    <option value="Wiraswasta" <?= $dataEdit['pekerjaan'] == 'Wiraswasta' ? "selected" : '' ?>>Wiraswasta</option>
                                                                    <option value="Lainnya" <?= $dataEdit['pekerjaan'] == 'Lainnya' ? "selected" : '' ?>>Lainnya</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pendidikan">Pendidikan <span class="text-danger">*</span></label>
                                                                <select class="custom-select form-control-border border-width-2" id="pendidikan" name="pendidikan">
                                                                    <option>Pilih Data Pendidikan</option>
                                                                    <option value="Tidak Tamat / Belum Sekolah" <?= $dataEdit['pendidikan'] == 'Tidak Tamat / Belum Sekolah' ? "selected" : '' ?>>Tidak Tamat / Belum Sekolah</option>
                                                                    <option value="Tamat SD" <?= $dataEdit['pendidikan'] == 'Tamat SD' ? "selected" : '' ?>>Tamat SD</option>
                                                                    <option value="Tamat SMP" <?= $dataEdit['pendidikan'] == 'Tamat SMP' ? "selected" : '' ?>>Tamat SMP</option>
                                                                    <option value="Tamat SMU / SMK" <?= $dataEdit['pendidikan'] == 'Tamat SMU / SMK' ? "selected" : '' ?>>Tamat SMU / SMK</option>
                                                                    <option value="Tamat Akademi / DI / DII / DIII" <?= $dataEdit['pendidikan'] == 'Tamat Akademi / DI / DII / DIII' ? "selected" : '' ?>>Tamat Akademi / DI / DII / DIII</option>
                                                                    <option value="Tamat Strata I" <?= $dataEdit['pendidikan'] == 'Tamat Strata I' ? "selected" : '' ?>>Tamat Strata I</option>
                                                                    <option value="Tamat Strata II" <?= $dataEdit['pendidikan'] == 'Tamat Strata II' ? "selected" : '' ?>>Tamat Strata II</option>
                                                                    <option value="Tamat Strata III" <?= $dataEdit['pendidikan'] == 'Tamat Strata III' ? "selected" : '' ?>>Tamat Strata III</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <input type="submit" class="btn btn-primary" value="Edit" name="edit">
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- modal Delete -->
                                        <div class="modal fade" id="delete<?= $data['nik'] ?>">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Apakah anda yakin ingin menghapus data? </h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="index?page=penduduk-proses" method="post">
                                                        <input type="hidden" name="nik" value="<?= $data['nik'] ?>">
                                                        <div class="modal-footer justify-content-center">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>

                                        <!-- /.modal-dialog -->
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th rowspan="2" class="align-middle">NIK</th>
                                        <th rowspan="2" class="align-middle">Nama Lengkap</th>
                                        <th rowspan="2" class="align-middle">Tempat, Tanggal Lahir</th>
                                        <th rowspan="2" class="align-middle">Umur</th>
                                        <th rowspan="2" class="align-middle">JK</th>
                                        <th colspan="3" class="text-center">Alamat</th>
                                        <th rowspan="2" class="align-middle">Agama</th>
                                        <th rowspan="2" class="align-middle">Pekerjaan</th>
                                        <th rowspan="2" class="align-middle">Pendidikan</th>
                                        <th rowspan="2" class="align-middle">Action</th>
                                    </tr>
                                    <tr>
                                        <th>RT</th>
                                        <th>RW</th>
                                        <th>Dusun</th>
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

<div class="modal fade" id="modal-penduduk">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Penduduk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="index?page=penduduk-proses" method="POST">
                    <div class="form-group">
                        <label for="nik">NIK (Nomor Induk Kependudukan) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-border" name="nik" id="nik" placeholder="Masukkan NIK" max="16" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-border" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-border" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span></label>
                                <input type="date" class="form-control form-control-border" name="tanggal_lahir" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur <span class="text-danger">*</span></label>
                        <input type="number" class="form-control form-control-border" name="umur" id="umur" placeholder="Masukkan Umur" required>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin <span class="text-danger">*</span></label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="L">
                            <label class="form-check-label">Laki-Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="P">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="rt">RT <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-border" name="rt" id="rt" placeholder="Masukkan RT" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="rw">RW <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-border" name="rw" id="rw" placeholder="Masukkan RW" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="dusun">Dusun <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-border" name="dusun" id="dusun" placeholder="Masukkan Dusun" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama <span class="text-danger">*</span></label>
                        <select class="custom-select form-control-border border-width-2" id="agama" name="agama">
                            <option>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan <span class="text-danger">*</span></label>
                        <select class="custom-select form-control-border border-width-2" id="pekerjaan" name="pekerjaan">
                            <option>Pilih Data Pekerjaan</option>
                            <option value="Belum Bekerja">Belum Bekerja</option>
                            <option value="Mengurus Rumah Tangga">Mengurus Rumah Tangga</option>
                            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="PNS">PNS</option>
                            <option value="TNI">TNI</option>
                            <option value="Polri">Polri</option>
                            <option value="Pedagang">Pedagang</option>
                            <option value="Petani">Petani</option>
                            <option value="Peternak">Peternak</option>
                            <option value="Transportasi">Transportasi</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Karyawan BUMN">Karyawan BUMN</option>
                            <option value="Karyawan BUMD">Karyawan BUMD</option>
                            <option value="Honorer">Honorer</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Buruh Tani">Buruh Tani</option>
                            <option value="Asisten Rumah Tangga">Asisten Rumah Tangga</option>
                            <option value="Tukang Batu">Tukang Batu</option>
                            <option value="Tukang Kayu">Tukang Kayu</option>
                            <option value="Tukang Las">Tukang Las</option>
                            <option value="Tukang Jahit">Tukang Jahit</option>
                            <option value="Penata Rias">Penata Rias</option>
                            <option value="Mekanik">Mekanik</option>
                            <option value="Seniman">Seniman</option>
                            <option value="Perancang Busana">Perancang Busana</option>
                            <option value="Guru">Guru</option>
                            <option value="Bidan">Bidan</option>
                            <option value="Perawat">Perawat</option>
                            <option value="Pelaut">Pelaut</option>
                            <option value="Sopir">Sopir</option>
                            <option value="Pedagang">Pedagang</option>
                            <option value="Perangkat Desa">Perangkat Desa</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan <span class="text-danger">*</span></label>
                        <select class="custom-select form-control-border border-width-2" id="pendidikan" name="pendidikan">
                            <option>Pilih Data Pendidikan</option>
                            <option value="Tidak Tamat / Belum Sekolah">Tidak Tamat / Belum Sekolah</option>
                            <option value="Tamat SD">Tamat SD</option>
                            <option value="Tamat SMP">Tamat SMP</option>
                            <option value="Tamat SMU / SMK">Tamat SMU / SMK</option>
                            <option value="Tamat Akademi / DI / DII / DIII">Tamat Akademi / DI / DII / DIII</option>
                            <option value="Tamat Strata I">Tamat Strata I</option>
                            <option value="Tamat Strata II">Tamat Strata II</option>
                            <option value="Tamat Strata II">Tamat Strata II</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Tambah Data" name="tambah">
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>