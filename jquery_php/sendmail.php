<html>
<head>
 <title>Indian Ethnic dress Gallery-Contact Us</title>
    
   <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/footer-distributed-with-address-and-phones.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="contact.css">
   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	
    <script src="jquery.validate.min.js"></script>
	<script src="additional-methods.min.js"></script>
   	<script src="email_list2.js"></script>
 

</head>
<body>



<header id="sticky-header">
        <h1>Indian Ethnic Dress Gallery</h1>

        <div id="navbar">
            <a href="../index.html">Home</a>
            <a href="../product/index.html">Wedding dress</a>
            <a href="../product/index_Saari.html">Sarees</a>
            <a href="../product/index_Casual.html">Casual dress</a>
            <a href="../product/index_Dresses.html">Dresses</a>
            <a class="active" href="jquery_php/index.html">Contact</a>
            <a href ="../faq.html">FAQ</a>
        </div>

    </header>

<main>
  
  <h2>Contact Form</h2>
    
<?php
  if (isset($_POST['email_address1'])) { //if "email" variable is filled out, send email
  
  //Set admin email for email to be sent to (use you own MATC email address)
    $admin_email = "guptag@gmatc.matc.edu"; 

  //Set PHP variable equal to information completed on the HTML form
    $email = $_REQUEST['email_address1']; //Request email that user typed on HTML form
    $phone = $_REQUEST['phone']; //Request phone that user typed on HTML form
    $subject = $_REQUEST['subject']; //Request subject that user typed on HTML form
    $name = $_REQUEST['name']; //Request subject that user typed on HTML form
    $start_date = $_REQUEST['start_date']; //Request subject that user typed on HTML form
    $comments = $_REQUEST['comments']; //Request subject that user typed on HTML form
            
  //Start building the email body combining multiple values from HTML form    
    $body  = "From: " . $name . "\n"; 
    $body .= "Email: " . $email . "\n"; //Continue the email body
    $body .= "Phone: " . $phone . "\n"; //Continue the email body
    $body .= "Date: " . $start_date . "\n"; //Continue the email body
    $body .= "Subject: " . $subject . "\n"; //Continue the email body
    $body .= "Comments: " . $comments . "\n"; //Continue the email body
    
   
  
  //Create the email headers for the from and CC fields of the email     
    $headers = "From: " . $name . " <" . $email . "> \r\n"; //Create email "from"
      $headers .= "CC: " . $name . " <" . $email . ">"; //Send CC to visitor
  
    
  //Actually send the email from the web server using the PHP mail function
  mail($admin_email, $subject, $body, $headers); 
    
  //Display email confirmation response on the screen
  echo "Thank you for contacting us! Following details has been recieved.\n"; 
    }
  
  //if "email" variable is not filled out, display an error
  else  { 
     echo "There has been an error!";
  
        }
?>

<fieldset>
        	<legend>Contact Information</legend>
            
            <label for="name">Name:</label>
	        <input type="text" id="name" name="name" value="<?php echo $_REQUEST['name'] ?>" disabled><br>
            
	        
	        <label for="email_address1">Email Address:</label>
	        <input type="email" id="email_address1" name="email_address1" value="<?php echo $_REQUEST['email_address1'] ?>" disabled><br>
	        
	                   
            <label for="Phone">Phone:</label>
	        <input type="text" id="phone" name="phone" value="<?php echo $_REQUEST['phone'] ?>" disabled><br>
	        
            
            <label for="Date">Date:</label>
	        <input type="text" id="start_date" name="start_date" value="<?php echo $_REQUEST['start_date'] ?>" disabled><br>
			
            <label for="Subject">Subject:</label>
	        <input type="text" id="subject" name="subject" value="<?php echo $_REQUEST['subject'] ?>" disabled><br>
	        
            
            <label for="Comments">Comments:</label>
    <textarea id="comments" name="comments" disabled><?php echo $_REQUEST['comments'] ?> </textarea><br>
	        
	    
		</fieldset>
    </main>

<footer class="footer-distributed">

        <div class="footer-left">

            <h3>Company<span>logo</span></h3>

            <p class="footer-links">
                <a href="../index.html">Home</a> ·
                <a href="index.html">Pricing</a> ·
                <a href="index.html">About</a> ·
                <a href="../faq.html">Faq</a> ·
                <a href="index.html">Contact</a>
            </p>

            <p class="footer-company-name">Garima Gupta &copy; 2018</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>21 Revolution Street</span> Delhi, India</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+1 555 123456</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">support@company.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>

            </div>

        </div>

    </footer>

</div>

</body>
</html>
