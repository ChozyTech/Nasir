$(document).ready(function() {
		$.ajax({ 
		type: 'GET', 
		url: window.location.origin+'/sessions/getsessions', 
		dataType: 'json',
		success: function (data) { 
			var messages = data.messages_alert;
			var alert_type = data.alert_type;
			if (messages != ""){ 
				if (alert_type == "Success"){
					ShowAlertSuccess(messages, "Messages Info:");
				}
				else if (alert_type == "Error"){
					ShowAlertError(messages, "Messages Info:");
				}
				ClearMessagesAlert();
			}
		}
	});
	
	function ClearMessagesAlert(){
		$.ajax({
        url: "./sessions/clearalert",
        type: "POST"
    });
	}
	
	function ShowAlertSuccess(messages, title){
		toastr.success(messages, title, {
					closeButton: !0
				});
	}
	
	function ShowAlertError(messages,title){
		toastr.error(messages,title, {
					closeButton: !0
				});
	}
});