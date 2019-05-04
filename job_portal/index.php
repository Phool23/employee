<?php
include('include\header.php');
include('C:\xampp\htdocs\job_portal\include\main.php');


// call the Login() function if Login_btn is clicked
	if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);	
        $userobject->login($email,$password);	
	}
?>   
<html lang="en">

<!-- Mirrored from ideafoundation.co.in/job_portal/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2017 07:00:45 GMT -->
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

		<link href="css/form-elements.css" rel="stylesheet">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
               <div class="form-box">
					<div class="form-top">
						<div class="form-top-left">
	                       <h3>Login to our site</h3>
	                       <p>Enter email and password to log on:</p>
	                    </div>
						<div class="form-top-right">
							<i class="fa fa-key"></i>
						</div>
	                </div>
					<div class="form-bottom">
						<form role="form" action="" method="POST" class="loginform" id="loginform">
							<div class="form-group">
								<label class="sr-only" for="form-email-id">Email id</label>
				                <input type="text" name="email" placeholder="Email id..." class="form-email-id form-control" id="email">
				            </div>
				            <div class="form-group">
								<label class="sr-only" for="form-password">Password</label>
				                <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
				            </div>
				            <button type="submit" name="login" class="btn">Sign in!</button>
						</form>
						<!--<a href="forget_password.php" class="btn btn-danger">Forgotten password?</a>-->
			        </div>
				</div>
			<div>
		</div>
	</div>
	</body>
<?php include('include\footer.php');?>	
<!-- Mirrored from ideafoundation.co.in/job_portal/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2017 07:01:02 GMT -->
</html>
	<script>
		setTimeout(function(){ $(".alert-msg-header").hide(); },5000);
	</script>