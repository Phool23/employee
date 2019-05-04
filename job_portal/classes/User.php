<?php 
class User extends Db{
  //Different users login
 public function login($email,$password)
   {
    $sql = "SELECT * FROM userinfo WHERE email = :email AND password = :password";
    $result=$this->connect()->prepare($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $result->execute(array('email'     => $email,
                           'password'  => $password));
    $data=$result->fetch();
    if($data['email']!=$email and $data['password']!=$password){
     echo" invalid username or password";
   }
     else {
        $_SESSION['email'] = $data['email'];
        $_SESSION['usertype'] = $data['usertype'];
        $_SESSION['id'] = $data['id'];
        switch($_SESSION['usertype']){
          case 'Seeker':
          header("location: profile_seeker.php");
          break;
          case 'Employer':
          header("location: profile_employer.php");
          break;
     }
     }
 }
   //user registration
  public function register($email,$fields){

    $sql_e = "SELECT * FROM userinfo WHERE email=:email";
    $result_e=$this->connect()->prepare($sql_e);
    $result_e->setFetchMode(PDO::FETCH_ASSOC);
    $result_e->execute(array('email' => $email));
    $count = $result_e->rowCount();
    if($count > 0){
      echo "email already exist";
    }
    else{
    //INSERT INTO userinfo (fname,lname,contactno,email,password,usertype) VALUES(:fname,:lname,:contactno,:email,:password,:usertype)
    $implodecolumns = implode(',',array_keys($fields));
    $implodePlaceholder = implode(", :",array_keys($fields));
    $sql = "INSERT INTO userinfo($implodecolumns) VALUES(:".$implodePlaceholder.")";
    $stmt = $this->connect()->prepare($sql);
    foreach ($fields as $key => $value) {
      $stmt->bindvalue(':' .$key,$value);
    }
    $stmtExec = $stmt->execute();
     if($stmtExec){
      header("location: index.php");
     }
    }
  }
  //fetch data on profile page
    
    public function getUserdetails($id){
    
    $sql = "SELECT * FROM userinfo WHERE id = :id";
    $result = $this->connect()->prepare($sql);
    $result->execute(array('id'=> $id));
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $data = $result->fetch();
   // print_r($data);
    return $data;
  
  /*  while($data){
      $fname = $data['fname'];
      $lname = $data['lname'];
      $contactno = $data['contactno'];
      $email = $data['email'];
      $usertype = $data['usertype'];
    }*/

  }

  public function save($fields,$id){
    //$sql= "UPDATE employee SET name=:name,city=:city,designation=:designation";
        $st = "";
    $counter = 1;
    $total_fields = count($fields);
    foreach($fields as $key => $value){
      if($counter === $total_fields){
        $set = "$key = :".$key;
        $st = $st.$set;
      }
      else{
        $set = "$key = :".$key.", ";
        $st = $st.$set;
        $counter++;
      }
      }


  $sql = "UPDATE userinfo SET " . $st . " WHERE id =" . $id;


   $stmt = $this->connect()->prepare($sql);

   foreach($fields as $key => $value){
    $stmt->bindValue(':'.$key,$value);
   }
      $stmtExec = $stmt->execute();

      if($stmtExec){
        header('location:profile_seeker.php');
      }
      } 
    }
  ?>