<?= $this->extend('layout/dashboard') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="col-md-6">
                                <h3 class="card-title">
                                    Order Add
                                </h3>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url() ?>order/store" method="post">
                                <div class="form-group">
                                    <label for="barang">Barang</label>
                                    <input type="text" class="form-control" placeholder="Nama Barang" name="barang" id="barang">
                                </div>
                                <div class="form-group">
                                    <label for="nilai">Nilai</label>
                                    <input type="number" class="form-control" placeholder="Nilai Barang" name="nilai" id="nilai">
                                </div>
                                <div class="form-group">
                                    <label for="jml">Jumlah Barang</label>
                                    <input type="text" class="form-control" placeholder="Jumlah Barang" name="jml" id="jml">
                                </div>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
                        </div><!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection('content') ?>