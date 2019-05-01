<?php
include('C:\xampp\htdocs\job_portal\classes\dbclass.php');

// call the register() function if register_btn is clicked
 if (isset($_POST['submit'])) {
 	
		register($con);
	
    }

 // call the Login() function if Login_btn is clicked
	if(isset($_POST['login'])){

		login($con);

	}
 
 function register($con){
 $fname=$_POST["fname"];
 $lname=$_POST["lname"];
 $contactno=$_POST["contactno"];
 $email=$_POST["email"];
 $password=md5($_POST["password"]);
 $usertype=$_POST["usertype"];
 $sql = "INSERT INTO userinfo(fname,lname,contactno,email,password,usertype)
VALUES (:fname,:lname,:contactno,:email,:password,:usertype)";
$result=$con->prepare($sql);
$exec= $result->execute(array(":fname"=> $fname,":lname"=> $lname,":contactno"=> $contactno,":email"=> $email,":password"=> $password,":usertype"=> $usertype));
if ($exec) {
echo "New Record Inserted Successfully";
}
else{
echo "Data not successfully Inserted";
}
}

function login($con){
	$sql = "SELECT * FROM userinfo WHERE email = :email AND password = :password";
	$result=$con->prepare($sql);
    $result->execute(
    	array(
    		'email' => $_POST["email"],
    		'password' =>($_POST["password"])
    	)
    );
    $count = $result->rowCount();
    if($count > 0){
        header('location:profile_seeker.php');
    }
    }
?>
