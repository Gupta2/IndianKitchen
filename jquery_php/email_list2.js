$(document).ready(function() {
	$("#first_name").focus();
    
    // put today's date in the start_date text box
	var today = new Date();
	var month = today.getMonth() + 1; // Add 1 since months start at 0
	var day = today.getDate();
	var year = today.getFullYear();
	var dateText = ((month < 10) ? "0" + month : month) + "/"; // Pad month
	dateText += ((day < 10) ? "0" + day: day) + "/"; // Pad date
	dateText += year;
	$("#start_date").val(dateText);
			
	$("#contact_form").validate({
		rules: {
			
            name: {
				required: true
			},        
            email_address1: {
				required: true,
				email: true
			},
			email_address2: {
				required: true,
				equalTo: "#email_address1"
			},
			phone: {
				required: true,
				phoneUS: true
			},
			start_date: {
				required: true,
				date: true
			},
            subject: {
				required: true
			},
            comments: {
				required: true
			}
		}
	}); // end validate
}); // end ready
