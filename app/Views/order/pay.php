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
                                    Pay
                                </h3>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form action="<?= base_url() ?>order/finish" method="post" id="payment-form">
                                <div class="form-group">
                                    <label for="barang">Barang</label>
                                    <input type="text" class="form-control" placeholder="Nama Barang" name="barang" id="barang" value="<?= $order['barang'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="nilai">Nilai</label>
                                    <input type="number" class="form-control" placeholder="Nilai Barang" name="nilai" id="nilai" value="<?= $order['nilai'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jml">Jumlah Barang</label>
                                    <input type="number" class="form-control" placeholder="Jumlah Barang" name="jml" id="jml" value="<?= $order['jml'] ?>">
                                </div>
                                <!-- Don't Delete this element -->
                                <input type="hidden" name="type" id="result-type" value="">
                                <input type="hidden" name="data" id="result-data" value="">
                                <button type="button" class="btn btn-success" id="pay-button">Bayar</button>
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
            url: '<?= base_url('midtrans/token') ?>',
            type: "POST",
            data: {
                order_id: '<?= $order['order_id'] ?>',
                barang: '<?= $order['barang'] ?>',
                nilai: <?= $order['nilai'] ?>,
                jml: <?= $order['jml'] ?>
            },
            cache: false,

            success: function(data) {
                $('#pay-button').removeAttr('disabled');

                var resultType = document.getElementById('result-type');
                var resultData = document.getElementById('result-data');

                function changeResult(type, data) {
                    $("#result-type").val(type);
                    $("#result-data").val(JSON.stringify(data));
                }

                snap.pay(data, {
                    onSuccess: function(result) {
                        changeResult('success', result);
                        console.log(result.status_message);
                        console.log(result);
                        $("#payment-form").submit();

                    },
                    onPending: function(result) {
                        changeResult('pending', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();

                    },
                    onError: function(result) {
                        changeResult('error', result);
                        console.log(result.status_message);
                        $("#payment-form").submit();
                    }
                });
            }
        });
    })
</script>
<?= $this->endSection('content') ?>