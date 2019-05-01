<?php
include('C:\xampp\htdocs\job_portal\include\main.php');

$id = isset($_GET['id']);
 if(isset($id)){
   $uid = $id;
  $row = $userclass->getSeeker($uid);
 } 
if (isset($_POST['submit'])) {
	$fname = $_POST["fname"];
    $lname =  $_POST["lname"];
    $contactno = $_POST["contactno"];
    $email = $_POST["email"];
    $usertype = $_POST["usertype"];
    $currentlocation = $_POST["currentlocation"];
    $position = $_POST["position"];
    $other =  $_POST["other"];
    $address = $_POST["address"];
    $self =  $_POST["self"];
    $cv_upload = $_POST["cv_upload"];

    
    $fields =[
    'fname' => $fname,
    'lname' => $lname,
    'contactno' => $contactno,
    'email' => $email,
    'usertype' => $usertype,
    'currentlocation'=>$currentlocation,
    'position'=>$position,
    'other'=>$other,
    'address'=>$address,
    'self'=>$self,
    'cv_upload'=>$cv_upload];
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
			<!--jquery validation-->
			<script src="jquery_validation/jquery.min.js"></script>
			<script src="jquery_validation/bootstrap.min.js"></script>
			<script src="jquery_validation/jquery.js"></script>
			<script src="jquery_validation/jquery.validate.min.js"></script>
			<!--<script src="jquery_validation/modal.js"></script>-->
</head>
<body>	
	  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">

		<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">JOB PORTAL</a>
        </div>
            <!-- Brand and toggle get grouped for better mobile display -->
           <!--  <div class="navbar-header pull-right">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            				
            </div> -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

				<ul class="nav navbar-nav">
					<li class="">
						<a href="create_job.php">Create Job</a> 	
					</li>
					<li class="">						
						<a href="my_job.php">My Jobs</a>
					</li>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown active">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> 
							<img src="images/9647528245c-dpu9m.jpg" alt="Invalid path image" width="25" height="25">
							Ghazala Afroz<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li  class="active"><a href="profile_seeker.php">My Profile</a></li>
							<li  class=""><a href="change_password.php">Change Password</a></li>
							<li  class=""><a href="logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
		<link href="css/form-elements.css" rel="stylesheet">
		<div class="container">
			<form role="form" action="" method="post" class="form-horizontal" id="employer-form" >
				<div class="row">
					<div class="col-sm-3">
						<div class="user-profileleft">
							<div class="userIMG">
								<img src="images/9647528245c-dpu9m.jpg"/>
							</div>
							<input name="imageToupload" type="file"   placeholder="..." class="form-" id="form-upload-photo">
						</div>
					</div>
					<div class="col-sm-9">
						<div class="form-box">
							<div class="form-top">
								<div class="form-top-left">
									<h3>Ghazala's Profile</h3>
								</div>
								<div class="form-top-right">
									<i class="fa fa-key"></i>
								</div>
							</div>
							<input type="hidden" name="id" id="id" value="<?php echo $row['id'] ;?>">
							<div class="form-bottom">
								<div class="form-group">
									<label for="fname" class="col-sm-2" >First Name</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="fname" id="fname" value="<?php echo $row['fname']; ?>">
									</div>		
								</div>
								<div class="form-group">
									<label for="lname" class="col-sm-2" >Last Name</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="lname" id="lname"value="<?php echo $row['lname']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="contactno" class="col-sm-2" >Contact no</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="contactno" id="contactno" value="<?php echo $row['contactno']; ?>"> 
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Email</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="email" id="email" value="<?php echo $row['email']; ?>">
									</div>		
								</div>
								<div class="form-group">
								    <label class="col-sm-2">Current Location</label>
								    <div class="col-sm-9">
								        <select name="currentlocation" class="form-control " placeholder="If you city  is  not mentioned Please select others...">
									      <option value="" disabled selected>Select City...</option>
									      <option value="Ahmedabad">Ahmedabad</option>
									      <option value="Bangalore">Bangalore</option>
									      <option value="Chennai">Chennai</option>
									      <option value="Delhi">Delhi</option>
									      <option value="Faridabad">Faridabad</option>
									      <option value="Jaipur">Jaipur</option>
									      <option value="Kolkata">Kolkata</option>
									      <option value="Lucknow">Lucknow</option>
									      <option value="Mumbai">Mumbai</option>
									      <option value="Patna">Patna</option>
									      <option value="Srinagar">Srinagar</option>
									      <option value="Ranchi">Ranchi</option>
									      <option value="Raipur">Raipur</option>
									      <option value="Chandigarh">Chandigarhr</option>
									      <option value="Bhubaneswar">Bhubaneswar</option>
									      <option value="Dehradun">Dehradun</option>
									      <option value="others">Others</option>
								       </select>
							        </div>
							    </div>
							    <div class="form-group">
								    <label class="col-sm-2">Position for which you are applying</label>
								    <div class="col-sm-9">
								        <select name="Position" class="form-control" >
									      <option value="" disabled selected>Select Position...</option>
									      <option value="Area Manager - Customer Development">Area Manager - Customer Development</option>
									      <option value="HR Executive">HR Executive</option>
									      <option value="Business Analyst">Business Analyst</option>
									      <option value="Content Writer">Content Writer</option>
									      <option value="Digital Marketing Executive">Digital Marketing Executive</option>
									      <option value="Graphic Designer">Graphic Designer</option>
									      <option value="others">Others</option>
								       </select>
							        </div>
							    </div>
							    <div class="form-group">
									<label class="col-sm-2" >If any other please specify</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="other" value="<?php echo $row['other']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Usertype</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="usertype" value="<?php echo $row['usertype']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Work Experience</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="experience" value="<?php echo $row['experience']; ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Address</label>
									<div class="col-sm-9">
										<textarea name="address" rows="5" cols="76" class="form-control" value="<?php echo $row['address']; ?>"></textarea>
									</div>
								</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Upload Cv</label>
									<div class="col-sm-9">
										<input name="cv_upload" type="file" value="browse" class="form-email form-control" id="form-upload-cv">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2" ></label>
									<div class="col-sm-9">
										<button type="submit" name="submit" class="btn btn-block">Save</button>
									</div>
								</div>
							</div>
						</div>   
					</div>
				</div>
			</form>
		</div>
		<?php include('include\footer.php');?>
	</body>
</html>