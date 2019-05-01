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
							<li  class="active"><a href="profile_employer.php">My Profile</a></li>
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
			<form role="form" action="" method="POST" class="form-horizontal" id="employer-form" enctype="multipart/form-data" >
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
							<div class="form-bottom">
								<div class="form-group">
									<label class="col-sm-2" >First Name</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="firstname" value="Ghazala"/>
									</div>		
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Last Name</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="lastname" value="Afroz"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Contact no</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="contactno" value="8969207440"/> 
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Email</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="email" value="afrozghazala1@gmail.com" readonly/>
									</div>		
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Usertype</label>
									<div class="col-sm-9">
										<input class="form-control" type="text" name="usertype" value="Employer" readonly/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Company name</label>
									<div class="col-sm-9">
										<input type="text" name="userinfo[companyname]" class="form-control" id="form-company-name" value="idea foundation"/>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Upload logo</label>
									<div class="col-sm-9">
										<input name="logo_upload" type="file" value="browse" class="form-email form-control" id="form-upload-logo" value="163051770316-famous-purple-logos.png">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Address</label>
									<div class="col-sm-9">
										<textarea name="userinfo[address]" rows="5" cols="76" class="form-control">Gaya</textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Website</label>
									<div class="col-sm-9">
										<input type="text" name="userinfo[website]" class="form-control" value="www.ideafoundation.com">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2" >Description</label>
									<div class="col-sm-9">
										<textarea name="userinfo[description]" class="form-control"  rows="5" cols="76">This company perfect of it person</textarea>
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


		<footer id="footer" class="midnight-blue">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<br><br>
						&copy; 2017 <a target="_blank" href="ideafoundation.co.in" title="">IDEAFoundation</a>. All Rights Reserved.
					</div>
					<div class="col-sm-6">
						<ul class="pull-right">
							<br><br>
							<a href="cms_detail681a.html?id=1">&nbsp &nbsp About Us</a>
							<a href="cms_detail0b30.html?id=2">&nbsp &nbsp History</a>
							<a href="cms_detaild708.html?id=3">&nbsp &nbsp Shreya Ghoshal</a>
							&nbsp &nbsp
							<a href="contact_us.html">Contact Us</a>
						</ul>
					</div>
				</div>
			</div>
		</footer><!--/#footer-->
	</body>

</html>