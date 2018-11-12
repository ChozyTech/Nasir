$(document).ready(function() {
	$("#username").blur(function(){
		var user = $("#username").val();
		$.ajax({
			url: window.location.origin+'/masteruser/checkexists', 
			type: "POST",
			data: {username: user} ,
			success: function (response) {
				if (response == 'Failed'){
					toastr.error("User is exists", "Messages Info:", {
					closeButton: !0
				});
					$("#username").val("");
					$("#username").focus();
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
			   console.log(textStatus, errorThrown);
			}
		});
	}); 
});