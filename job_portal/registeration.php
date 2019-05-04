<?php
include('include\header.php');
include('C:\xampp\htdocs\job_portal\include\main.php');

if (isset($_POST['submit'])) {
	$fname = $_POST["fname"];
    $lname =  $_POST["lname"];
    $contactno = $_POST["contactno"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $usertype = $_POST["usertype"];
    $created_on = date("Y-m-d H:i:s");
    
    $fields =[
    'fname' => $fname,
    'lname' => $lname,
    'contactno' => $contactno,
    'email' => $email,
    'password' => $password,
    'usertype' => $usertype,
    'created_on'=> $created_on];
    
    $userobject->register($email,$fields);
	}
 ?>


<html lang="en">

<!-- Mirrored from ideafoundation.co.in/job_portal/registeration.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2017 07:01:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>JOB PORTAL</title>

			<!-- Bootstrap Core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">

			<!-- Custom CSS -->
			<link href="css/classified.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet">
			<link href="css/animate.min.css" rel="stylesheet">
			<link href="css/form-element.html" rel="stylesheet">
			<link href="css/dropdown.css" rel="stylesheet">
			<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
			<link rel="stylesheet" href="assets/css/form-elements.css">
			<link rel="stylesheet" href="assets/css/style.css">
			
</head>
<body>
	    
			<script>
		function isNumber(evt)
		{
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57))
			{
				alert("you enter only numeric value ");
				return false;
			}
			return true;
		}
	</script>
<!-- Top content -->
<link href="css/form-elements.css" rel="stylesheet">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
                <div class="form-box">
					<div class="form-top">
						<div class="form-top-left">
							<h3>Sign up now</h3>
							<p>Fill in the form below to get instant access:</p>
						</div>
						<div class="form-top-right">
							<i class="fa fa-pencil"></i>
						</div>
					</div>
					<div class="form-bottom">
					   <form role="form" action="" method="post" class="registration-form"  id="registration-form">
							<div class="form-group">
								<label class="sr-only" for="fname">First name</label>
								<input type="text" name="fname" placeholder="First name..." class="form-first-name form-control" id="fname">
							</div>
							<div class="form-group">
								<label class="sr-only" for="lname">Last name</label>
								<input type="text" name="lname" placeholder="Last name..." class="form-last-name form-control" id="lname">
							</div>
							<div class="form-group">
								<label class="sr-only" for="contactno">Contactno</label>
								<input type="text" name="contactno" placeholder="Contact no..." class="form-contact-no form-control" id="contactno" onkeypress="return isNumber(event)">
							</div>
							<div class="form-group">
								<label class="sr-only" for="email">Email</label>
								<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="email">
							</div>
							<div class="form-group">
								<label class="sr-only" for="form-password">Password</label>
								<input type="password" name="password" placeholder="Password..." 
								class="form-password form-control" id="form-password">
							</div>
							<div class="form-group">
								<label class="sr-only" for="password">Re Password</label>
								<input type="password" name="re_password" placeholder="Re Password..." 
								class="form-re-password form-control" id="password">
							</div>
							<div class="form-group">
								<label class="sr-only" for="usertype" name="usertype">Select-user-type</label>
								<select name="usertype" class="form-control " id="usertype" >
									<option value="" disabled selected>Select user type...</option>
									<option value="Employer">Employer</option>
									<option value="Seeker">Seeker</option>
								</select>
							</div>
							<button type="submit" name="submit" class="btn">Sign me up!</button>
						</form>
					</div>
				</div>
			</div>
        </div>	    
    </div> 
	</body>
<?php include('include\footer.php');?>
	
<!-- Mirrored from ideafoundation.co.in/job_portal/registeration.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2017 07:01:54 GMT -->
</html>
	<script>
		setTimeout(function(){ $(".alert-msg-header").hide(); },5000);
  $('#registration-form').validate({
    rules: {
      fname: "required",
      lname: "required",
      contactno:{
        required: true,
        minlength: 9,
        maxlength: 10,
        number: true
      },
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      },
      usertype:"required"
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      contactno: {
        required: "Please provide your contactno",
        minlength:"Your contactno must be at least 10 characters long"
      },
      email: "Please enter a valid email address",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      usertype: "Please select the user"
    },
    
    submitHandler: function(form) {
      form.submit();
    }
  });
</script>