<?= $this->extend('layout/dashboard') ?>
<?= $this->section('content') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User Role</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Users <?= username($user_id) ?></h3>
                            <a href="#" class="btn btn-success float-right" data-toggle="modal" data-target="#modal-add">Add User</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped example1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($result as $r) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $r['name'] ?></td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" style="width: 20px; height:20px; margin-top:-2px;" type="checkbox" id="check<?= $r['id'] ?>" <?= (cek_ceklis($r['id'], $user_id) ? "checked" : "") ?> onclick="check(this,'<?= $r['id'] ?>','<?= $user_id ?>')">
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    function check(e, group_id, user_id) {
        $.ajax({
            url: "<?= base_url() ?>master/user_role_update",
            method: "POST",
            data: {
                group_id: group_id,
                user_id: user_id,
            },
        })
    }
</script>
<?= $this->endSection('content') ?>