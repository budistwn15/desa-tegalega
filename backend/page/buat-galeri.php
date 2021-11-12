<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Tambah Galeri</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tambah Galeri</li>
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
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Galeri</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="index?page=galeri-proses" method="POST">
                            <div class="form-group">
                                <label for="judul_galeri">Judul Galeri</label>
                                <input type="text" class="form-control form-control-border" name="judul_galeri" id="judul_galeri" placeholder="Masukkan Judul Galeri" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="photo" name="photo">
                                    <label class="custom-file-label" for="photo">Choose file</label>
                                </div>
                            </div>
                            <input type="submit" value="Tambah Galeri" name="tambah" class="btn btn-primary">
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>