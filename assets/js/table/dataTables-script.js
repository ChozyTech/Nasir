$(document).ready(function() {
    $(".tablemasteruserdetail").DataTable({
        dom: 'Bfrtip',
        buttons: [{
                text: '+ Add New',
                action: function(e, dt, node, config) {
                    location.href = window.location.origin+'/masteruser/add';
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
	$(".tablemasterkriteriadetail").DataTable({
        dom: 'Bfrtip',
        buttons: [{
                text: '+ Add New',
                action: function(e, dt, node, config) {
                    location.href = window.location.origin+'/masterkriteria/add';
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
		$(".tabledatapkhdetail").DataTable({
        dom: 'Bfrtip',
        buttons: [{
                text: '+ Add New',
                action: function(e, dt, node, config) {
                    location.href = window.location.origin+'/data/add';
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
	$(".tabledatapeserta").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',

        ],
		"aaSorting": [],
        "lengthChange": false
    });
		$(".tablebobot").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',

        ],
		"aaSorting": [],
        "lengthChange": false
    });
	
	$(".tablekonversi").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',

        ],
		"aaSorting": [],
        "lengthChange": false
    });
	$(".tablenormalisasi").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',

        ],
		"aaSorting": [],
        "lengthChange": false
    });
	$(".tablesolusiideal").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',

        ],
		"aaSorting": [],
        "lengthChange": false
    });
	$(".tableYi").DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',

        ],
		"aaSorting": [],
        "lengthChange": false
    });
	$(".tableSPlus").DataTable({
        dom: 'Bfrtip',
        buttons: [
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
		"aaSorting": [],
        "lengthChange": false,
		"pageLength": 5
    });
	$(".tableSMin").DataTable({
        dom: 'Bfrtip',
        buttons: [
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
		"aaSorting": [],
        "lengthChange": false,
		"pageLength": 5
    });
	$(".tablehasil").DataTable({
        dom: 'Bfrtip',
        buttons: [
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
		"aaSorting": [],
        "lengthChange": false
    });
	
	$(".tabletop5").DataTable({
        dom: 'Bfrtip',
        buttons: [
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
		"aaSorting": [],
        "lengthChange": false,
		"pageLength": 5
    });
});