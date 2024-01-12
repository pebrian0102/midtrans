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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Informasi
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <p>Selamat Datang di Web Report APP</p>
                        </div><!-- /.card-body -->
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                Bayar
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url() ?>/home/bayar2" method="post">
                                <input type="number" class="form-control" value="15000">
                                <!-- Don't Delete this element -->
                                <input type="hidden" name="result_type" id="result-type" value="">
                                <input type="hidden" name="result_data" id="result-data" value="">
                                <button type="submit" class="button bg-success" id="pay-button">Bayar</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-EzwfzLeQ7HTc85LB"></script>
<script>
    $('#pay-button').click(function(e) {
        e.preventDefault();
        $(this).attr("disabled", "disabled");
        $.ajax({
            url: '<?= base_url('home/token') ?>',
            type: "POST",
            cache: false,

            success: function(data) {
                $('#pay-button').removeAttr('disabled');

                var resultType = document.getElementById('result-type');
                var resultData = document.getElementById('result-data');


                snap.pay(data, {
                    onSuccess: function(result) {
                        console.log(result)
                        alert('success')

                    },
                    onPending: function(result) {
                        console.log(result)
                        alert('pending')
                    },
                    onError: function(result) {
                        console.log(result)
                        alert('error')
                    }
                });
            }
        });
    })
</script>
<?= $this->endSection('content') ?>