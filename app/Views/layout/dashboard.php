<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. Andalan Prima Indonesia</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.5.0/css/select.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/assets/dist/css/adminlte.min.css">
    <style>
        @keyframes pulse {
            0% {
                transform: scale(0.9);
            }

            100% {
                transform: scale(0.5);
            }
        }

        .pulse {
            width: 15px;
            height: 15px;
            background-color: red;
            border-radius: 10px;
            animation: 1s pulse infinite;
        }

        .table-striped tbody tr:nth-of-type(odd).selected,
        .example1 tr.selected {
            /* background-color: blue; */
            color: #fff;
            font-weight: bold;
            background: #007bff;
        }

        table.table-bordered.dataTable th,
        table.table-bordered.dataTable td {
            padding: 5px;
            padding-left: 10px;
            font-size: 20px;
        }

        table.dataTable thead>tr>th.sorting_asc,
        table.dataTable thead>tr>th.sorting_desc,
        table.dataTable thead>tr>th.sorting,
        table.dataTable thead>tr>td.sorting_asc,
        table.dataTable thead>tr>td.sorting_desc,
        table.dataTable thead>tr>td.sorting {
            font-size: 12px;
        }

        table.table-bordered.dataTable th,
        table.table-bordered.dataTable td {
            font-size: 12px;
        }

        .btn,
        .dataTables_info {
            font-size: 14px;
        }

        ::selection {
            background-color: red;
            color: #fff;
        }

        .form-control {
            font-size: 14px;
            /* padding: 3px 10px; */
            /* height: max-content; */
        }

        .select2-selection__rendered,
        div.dataTables_wrapper div.dataTables_filter label {
            font-size: 14px;
        }

        div.dt-button-collection .dt-button {
            min-width: 100px;
            font-size: 14px;
        }

        .form-control .select2 .select2-hidden-accessible option {
            font-size: 14px;
        }

        .custom-control-label:hover {
            cursor: pointer;
        }

        .red {
            color: red;
        }

        .nilai {
            text-align: right;
        }

        .animasi-warning {
            border: 2px solid red;
            border-radius: 10px;
            animation: 0.5s animasi-warning infinite;
        }

        @keyframes animasi-warning {
            0% {
                box-shadow: 0px 0px 2px red;
            }

            100% {
                box-shadow: 0px 0px 20px red;
            }
        }

        .small-box h3 {
            font-size: 1.17em;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <!-- Flashdata -->
    <div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('success'); ?>"></div>
    <div class="flash-data-warning" data-flashdata="<?= session()->getFlashdata('failed'); ?>"></div>
    <!-- Site wrapper -->
    <div class="wrapper">

        <?= $this->include('layout/navbar') ?>
        <?= $this->include('layout/sidebar') ?>

        <?= $this->renderSection('content') ?>

        <?= $this->include('layout/sidebar2') ?>

        <?= $this->include('layout/footer') ?>

    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="<?= base_url() ?>/public/assets/plugins/jquery/jquery.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/plugins/datatables-select/js/dataTables.select.min.js"></script>
    <!-- Select2 -->
    <script src="<?= base_url() ?>/public/assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="<?= base_url() ?>/public/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?= base_url() ?>/public/assets/plugins/moment/moment.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url() ?>/public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/public/assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>/public/assets/dist/js/demo.js"></script>
    <script src="<?= base_url() ?>/public/assets/js/dashboard.js"></script>
</body>

</html>