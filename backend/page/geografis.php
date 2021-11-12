<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Geografis</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Geografis</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <?php if (isset($_SESSION['edit'])) { ?>
                <div class="alert alert-success">
                    <?php echo $_SESSION['edit']; ?>
                    <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php unset($_SESSION['edit']);
            } ?>
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Input Geografis</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM him_geografis WHERE id_geografis = 1");
                        $data = mysqli_fetch_array($query);
                        $id = $data['id_geografis'];
                        $title = $data['title_geografis'];
                        $geografis = $data['geografis'];
                        ?>
                        <form action="index?page=geografis-proses" method="post">
                            <input type="hidden" name="id_geografis" value="<?= $id ?>">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control form-control-border" name="title_geografis" id="title_geografis" placeholder="Masukkan Judul" value="<?= $title ?>" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="geografis">Geografis</label>
                                <textarea id="geografis" name="geografis" class="form-control" style="height: 100px;">
                                <?= $geografis ?>
                            </textarea>
                            </div>
                            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>