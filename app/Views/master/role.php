<?= $this->extend('layout/dashboard') ?>
<?= $this->section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Role</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Groups</h3>
                            <a href="#" class="btn btn-success float-right" data-toggle="modal" data-target="#modal-add">Add Group</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped example1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Group</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($group as $r) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $r['name'] ?></td>
                                            <td>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#modal-group-edit<?= $r['id'] ?>">Edit</a>
                                                <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#modal-group-delete<?= $r['id'] ?>">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Permissions</h3>
                            <a href="#" class="btn btn-success float-right" data-toggle="modal" data-target="#modal-add-perm">Add Permissions</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped example1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Permissions</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($perm as $r) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $r['name'] ?></td>
                                            <td>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#modal-perm-edit<?= $r['id'] ?>">Edit</a>
                                                <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#modal-perm-delete<?= $r['id'] ?>">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Permissions & Groups</h3>
                            <a href="#" class="btn btn-success float-right" data-toggle="modal" data-target="#modal-add-role">Add Role</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped example1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Group</th>
                                        <th>Permissions</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($result as $r) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $r['nmgroup'] ?></td>
                                            <td><?= $r['nmperm'] ?></td>
                                            <td>
                                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#modal-role-edit<?= $r['idgroup'] ?><?= $r['idperm'] ?>">Edit</a>
                                                <a href="#" class="badge badge-danger" data-toggle="modal" data-target="#modal-role-delete<?= $r['idgroup'] ?><?= $r['idperm'] ?>">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal group -->
<div class="modal fade" id="modal-add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Group</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url() ?>master/group_store" method="POST">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Group Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Group Name" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php foreach ($group as $r) : ?>
    <div class="modal fade" id="modal-group-edit<?= $r['id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Group</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() ?>master/group_update" method="POST">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <div class="form-group">
                            <label for="name">Group Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Group Name" required value="<?= $r['name'] ?>">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php foreach ($group as $r) : ?>
    <div class="modal fade" id="modal-group-delete<?= $r['id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Group</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() ?>master/group_delete" method="POST">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <p>Apakah anda yakin ingin menghapus <?= $r['name'] ?>?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<!-- Modal perm -->
<div class="modal fade" id="modal-add-perm">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Permissions</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url() ?>master/perm_store" method="POST">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Permissions Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Permissions Name" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php foreach ($perm as $r) : ?>
    <div class="modal fade" id="modal-perm-edit<?= $r['id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Permissions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() ?>master/perm_update" method="POST">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <div class="form-group">
                            <label for="name">Permissions Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Permissions Name" required value="<?= $r['name'] ?>">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php foreach ($perm as $r) : ?>
    <div class="modal fade" id="modal-perm-delete<?= $r['id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Permissions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() ?>master/perm_delete" method="POST">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        <p>Apakah anda yakin ingin menghapus <?= $r['name'] ?>?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>


<!-- Modal role -->
<div class="modal fade" id="modal-add-role">
    <div class="modal-dialog">
        <div class="modal-content p-2">
            <div class="modal-header">
                <h4 class="modal-title">Add Group & Permissions</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url() ?>master/role_store" method="POST">
                <?= csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group d-flex flex-column">
                            <label for="group">Group</label>
                            <select name="group" id="group" class="form-control select2">
                                <option value="" disabled selected>-- Select --</option>
                                <?php foreach ($group as $g) : ?>
                                    <option value="<?= $g['id'] ?>"><?= $g['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group d-flex flex-column">
                            <label for="perm">Permissions</label>
                            <select name="perm" id="perm" class="form-control select2">
                                <option value="" disabled selected>-- Select --</option>
                                <?php foreach ($perm as $g) : ?>
                                    <option value="<?= $g['id'] ?>"><?= $g['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php foreach ($result as $r) : ?>
    <div class="modal fade" id="modal-role-edit<?= $r['idgroup'] ?><?= $r['idperm'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Role</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() ?>master/role_update" method="POST">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="oldgroup" value="<?= $r['idgroup'] ?>">
                        <input type="hidden" name="oldperm" value="<?= $r['idperm'] ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="group">Group</label>
                                    <select name="group" id="group" class="form-control select2">
                                        <option value="" disabled selected>-- Select --</option>
                                        <?php foreach ($group as $g) : ?>
                                            <option value="<?= $g['id'] ?>" <?= ($g['id'] == $r['idgroup']) ? 'selected' : '' ?>><?= $g['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="perm">Permissions</label>
                                    <select name="perm" id="perm" class="form-control select2">
                                        <option value="" disabled selected>-- Select --</option>
                                        <?php foreach ($perm as $g) : ?>
                                            <option value="<?= $g['id'] ?>" <?= ($g['id'] == $r['idperm']) ? 'selected' : '' ?>><?= $g['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php foreach ($result as $r) : ?>
    <div class="modal fade" id="modal-role-delete<?= $r['idgroup'] ?><?= $r['idperm'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Role</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url() ?>master/role_delete" method="POST">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" name="group" value="<?= $r['idgroup'] ?>">
                        <input type="hidden" name="perm" value="<?= $r['idperm'] ?>">
                        <p>Apakah anda yakin ingin menghapus <?= $r['nmgroup'] ?> & <?= $r['nmperm'] ?>?</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?= $this->endSection() ?>