$(document).ready(function () {
    $('.example1').DataTable({
        dom: 'Bfrtip',
        lengthMenu: [
            [50, 70, 100, -1],
            [50, 70, 100, 'All'],
        ],
        buttons: [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    {
                        extend: 'print',
                        text: 'Print all',
                        exportOptions: {
                            modifier: {
                                selected: null
                            },
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        text: 'Print selected',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'copy',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: ':visible'
                        }
                    },

                ]
            },
            'colvis',
            'pageLength'

        ],
        columnDefs: [{
            visible: false
        }],
        "autoWidth": false,
        select: true,
        "fixedHeader": true,
        "autoWidth": false,
        paging: true,
        scrollY: 400,
        scrollCollapse: true,
        scroller: true,
        "pageLength": 50,
        scrollX: true,
    });
});

$('.select2').select2({
    placeholder: "-- Pilih --",
    allowClear: true,
    maximumSelectionLength: 5
});

const flashDataSts = $('.flash-data-sts').data('flashdata');
const flashDataSuccess = $('.flash-data-success').data('flashdata');
const flashDataWarning = $('.flash-data-warning').data('flashdata');
const flashDataDanger = $('.flash-data-danger').data('flashdata');
var Toast = Swal.mixin({
    toast: false,
    position: 'center',
    showConfirmButton: true,
    timer: 6000
});
var Toast2 = Swal.mixin({
    position: 'center',
    showConfirmButton: true,
    timer: 3000
});
if (flashDataSuccess) {
    Toast.fire({
        icon: 'success',
        title: flashDataSuccess,
    })
}
if (flashDataWarning) {
    Toast.fire({
        icon: 'warning',
        title: flashDataWarning
    })
}
if (flashDataDanger) {
    Toast2.fire({
        icon: 'warning',
        title: flashDataDanger
    })
}
