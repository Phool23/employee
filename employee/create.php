<?php
function __autoload($class){
  require_once "classes/$class.php";
}

if(isset($_POST['submit'])){
 $name =  $_POST['name'];
 $city =  $_POST['city'];
 $designation =  $_POST['designation'];

 $fields =[
  'name'=>$name,
  'city'=>$city,
  'designation'=>$designation];

  $employee = new Employee();

  $employee->insert($fields);
}
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Employees</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<!Nav bar>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div  class="container mt-4">
	<div class="row">
		<div class="col-lg-12">
			<div class="jumbotron">
				<h4 class="mb-4"> Add Employees</h4>
				<form action="" method="post">
     <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name">
     </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city" placeholder="Enter your City">
  </div>
   <div class="form-group">
    <label for="designation">Designation</label>
    <input type="text" class="form-control" name="designation" placeholder="Enter your Designation">
  </div>
  <input type="submit" name="submit" class="btn btn-primary">
</form>
</body>
</html>