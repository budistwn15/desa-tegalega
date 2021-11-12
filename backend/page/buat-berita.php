<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Tambah Berita</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Tambah Berita</li>
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
                        <h3 class="card-title">Tambah Berita</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php
                        $now = date("Y-m-d");
                        ?>
                        <form action="index?page=berita-proses" method="POST">
                            <div class="form-group">
                                <label for="penulis">Penulis</label>
                                <input type="text" class="form-control form-control-border" name="penulis" id="penulis" value="" disabled>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="text" class="form-control form-control-border" name="tanggal" id="tanggal" value="<?= $now ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="judul_berita">Judul Berita</label>
                                <input type="text" class="form-control form-control-border" name="judul_berita" id="judul_berita" placeholder="Masukkan Judul Berita" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="isi_berita">Isi Berita</label>
                                <textarea id="isi_berita" name="isi_berita" class="form-control" style="height: 100px;">
                            </textarea>
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail">
                                    <label class="custom-file-label" for="thumbnail">Choose file</label>
                                </div>
                            </div>
                            <input type="submit" value="Tambah Berita" name="tambah" class="btn btn-primary">
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>