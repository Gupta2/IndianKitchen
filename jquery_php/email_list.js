$(document).ready(function() {
	$("#submit").click(
		function() {
			var emailAddress1 = $("#email_address1").val();
			var emailAddress2 = $("#email_address2").val();
			var isValid = true;
            alert("1");
			// validate the first email address
			if (emailAddress1 == "") { 
				$("#email_address1_error").text("This field is required.");
				isValid = false;
			} else {
				$("#email_address1_error").text("");
			} 
			alert("2");
			// validate the second email address
			if (emailAddress2 == "") { 
				$("#email_address2_error").text("This field is required.");
				isValid = false; 
			} else if (emailAddress1 !== emailAddress2) { 
				$("#email_address2_error").text("Email address should be same.");
                $("#emailAddress2").focus();
				isValid = false;
			} else {
				$("#email_address2_error").text("");
			}
			alert("3");
			// validate the first name entry  
			if ($("#first_name").val() == "") {
				$("#first_name_error").text("This field is required.");
				isValid = false;
			} 
			else {
				$("#first_name_error").text("");
			}
			alert("4");
            
            // validate the Subject entry  
			if ($("#Subject").val() == "") {
				$("#Subject_error").text("This field is required.");
				isValid = false;
			} 
			else {
				$("#Subject_error").text("");
			}
            
            alert("5");
            
            // validate the Date entry  
			if ($("#Date").val() == "") {
				$("#Date_error").text("This field is required.");
				isValid = false;
			} 
			else {
				$("#Date_error").text("");
			}
            alert("6");
            
            // validate the Phone entry  
			if ($("#Phone").val() == "") {
				$("#Phone_error").text("This field is required.");
				isValid = false;
			} 
			else {
				$("#Phone_error").text("");
			}
            
            alert("7");
           // validate the Comment entry  
			if ($("#Comments").val() == "") {
				$("#Comments_error").text("This field is required.");
				isValid = false;
			} 
			else {
				$("#Comments_error").text("");
			}
             
            
            
            
            alert("8");
			// submit the form if all entries are valid
			if (isValid) {
                alert("hhh");
				$("#contact_form").submit(); 
			}
            else{ alert("ggh");  }
            alert("9");
		} // end function
	);	// end click
	$("#first_name").focus();
}); // end ready
