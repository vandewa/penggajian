// Call the dataTables jQuery plugin
$(document).ready(function () {
    $('#dataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Akun Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Akun Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Akun Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Akun Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Akun Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "columns": [{
            "width": "15%"
        }, {
            "width": "20%"
        }, {
            "width": "30%"
        }, {
            "width": "15%"
        }, {
            "width": "20%"
        }, ]
    });
    $('#dataKaryawan').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "aaSorting": [
            [1, 'asc']
        ],
        "columns": [{
                "width": "10%"
            }, {
                "width": "10%"
            },
            null, {
                "width": "15%"
            }, {
                "width": "25%"
            },
            null,
            null, {
                "width": "10%"
            }, {
                "width": "5%"
            },
        ]
    });
    $('#dataTablePosition').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Posisi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Posisi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Posisi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Posisi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Posisi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "aaSorting": [
            [1, 'desc']
        ],
        "columns": [{
            "width": "35%"
        }, {
            "width": "20%"
        }, {
            "width": "20%"
        }, {
            "width": "15%"
        }, {
            "width": "10%"
        }, ]
    });

    $('#dataShowPemasukan').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Pemasukan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Pemasukan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Pemasukan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Pemasukan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Pemasukan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "aaSorting": [
            [1, 'desc']
        ],
        "columns": [{
            "width": "35%"
        }, {
            "width": "20%"
        }, {
            "width": "20%"
        }, {
            "width": "15%"
        }, {
            "width": "10%"
        }, ]
    });

    $('#dataShowPengeluaran').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Pengeluaran Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Pengeluaran Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Pengeluaran Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Pengeluaran Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Pengeluaran Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "aaSorting": [
            [1, 'desc']
        ],
        "columns": [{
            "width": "35%"
        }, {
            "width": "20%"
        }, {
            "width": "20%"
        }, {
            "width": "15%"
        }, {
            "width": "10%"
        }, ]
    });

    $('#dataTablePemasukan').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Pemasukan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Pemasukan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Pemasukan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Pemasukan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Pemasukan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "aaSorting": [
            [1, 'desc']
        ],
        "columns": [{
            "width": "35%"
        }, {
            "width": "20%"
        }, {
            "width": "20%"
        }, {
            "width": "15%"
        }, {
            "width": "10%"
        }, ]
    });
    $('#dataTablePengeluaran').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Pengeluaran Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Pengeluaran Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Pengeluaran Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Pengeluaran Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Pengeluaran Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "aaSorting": [
            [1, 'desc']
        ],
        "columns": [{
            "width": "35%"
        }, {
            "width": "20%"
        }, {
            "width": "20%"
        }, {
            "width": "15%"
        }, {
            "width": "10%"
        }, ]
    });
    $('#dataPositionPegawai').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Karyawan berdasarkan posisi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Karyawan berdasarkan posisi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Karyawan berdasarkan posisi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Karyawan berdasarkan posisi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Karyawan berdasarkan posisi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "columns": [{
            "width": "20%"
        }, {
            "width": "40%"
        }, {
            "width": "40%"
        }, ]
    });

    $('#dataTableAbsensi').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Absensi Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Absensi Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Absensi Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Absensi Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Absensi Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "pageLength": 50,
        "aaSorting": [
            [3, 'asc']
        ]
    });

    $('#dataTableAbsensiUser').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Absensi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Absensi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Absensi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Absensi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Absensi Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "pageLength": 50,
        "aaSorting": [
            [1, 'desc']
        ],
        "columns": [{
            "width": "25%"
        }, {
            "width": "25%"
        }, {
            "width": "25%"
        }, {
            "width": "25%"
        }, ]
    });

    $('#dataComplaint').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Komplain Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Komplain Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Komplain Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Komplain Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Komplain Karyawan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "pageLength": 50,
        "aaSorting": [
            [4, 'desc']
        ],
        "columns": [{
            "width": "8%"
        }, {
            "width": "18%"
        }, {
            "width": "12%"
        }, {
            "width": "40%"
        }, {
            "width": "12%"
        }, {
            "width": "10%"
        }, ]
    });
    $('#dataPenggajian').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Penggajian Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Penggajian Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Penggajian Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Penggajian Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Penggajian Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "pageLength": 50,
        "aaSorting": [
            [2, 'asc']
        ],
    });
    $('#dataPenggajianUser').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Penggajian Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'csv',
            filename: 'Data Penggajian Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'excel',
            filename: 'Data Penggajian Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Penggajian Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }, {
            extend: 'print',
            filename: 'Data Penggajian Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th:not(:last-child)'
            }

        }],
        "pageLength": 50,
        
    });

    $('#dataKeuangan').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'copy',
            filename: 'Data Keuangan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th'
            }

        }, {
            extend: 'csv',
            filename: 'Data Keuangan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th'
            }

        }, {
            extend: 'excel',
            filename: 'Data Keuangan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th'
            }

        }, {
            extend: 'pdf',
            filename: 'Data Keuangan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th'
            }

        }, {
            extend: 'print',
            filename: 'Data Keuangan Hadiyani & Partners Law Firm',
            exportOptions: {
                columns: 'th'
            }

        }],
        "pageLength": 50,
       
    });

    $('#tablePenambahan').DataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "aaSorting": [
            [0, 'desc']
        ],
        "columns": [null, null, null, {
            "width": "20%"
        }, ]
    });
    $('#tablePotongan').DataTable({
        "bPaginate": false,
        "bLengthChange": false,
        "bFilter": true,
        "bInfo": false,
        "bAutoWidth": true,
        "aaSorting": [
            [0, 'desc']
        ],
        "columns": [null, null, null, {
            "width": "20%"
        }, ]
    });

    table.buttons().container()
        .appendTo('#example_wrapper .col-md-6:eq(0)');
});
