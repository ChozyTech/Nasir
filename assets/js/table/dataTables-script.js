$(document).ready(function() {
    $(".tablemasteruserdetail").DataTable({
        dom: 'Bfrtip',
        buttons: [{
                text: '+ Add New',
                action: function(e, dt, node, config) {
                    location.href = "./masteruser/add";
                }
            },
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',

        ],
        "columnDefs": [{
                "targets": 0,
                "orderable": false,
            }
        ],
        "lengthChange": false
    });
});