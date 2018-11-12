$(document).ready(function() {
	$("#kodekriteria").blur(function(){
		var kode = $("#kodekriteria").val();
		$.ajax({
			url: window.location.origin+'/masterkriteria/checkexists', 
			type: "POST",
			data: {kodekriteria: kode} ,
			success: function (response) {
				if (response == 'Failed'){
					toastr.error("Kriteria is exists", "Messages Info:", {
					closeButton: !0
				});
					$("#kodekriteria").val("");
					$("#kodekriteria").focus();
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}); 
});