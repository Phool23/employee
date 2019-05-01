<?php 
class User extends Db{
  //Different users login
 public function login($email,$password)
   {
    $sql = "SELECT * FROM userinfo WHERE email = :email AND password = :password";
    $result=$this->connect()->prepare($sql);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $result->execute(array('email'     => $email,
                           'password'  => $password,));
    $data=$result->fetch();
    if($data['email']!=$email and $data['password']!=$password){
     echo" invalid username or password";
   }
     elseif ($data['email'] == $email and $data['password']==$password) {
        $_SESSION['email'] = $data['email'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['usertype'] = $data['usertype'];
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
  public function register($fields){
    //INSERT INTO userinfo (fname,lname,contactno,email,password,usertype) VALUES(:fname,:lname,:contactno,:email,:password,:usertype)
    $implodecolumns = implode(',',array_keys($fields));
    $implodePlaceholder = implode(", :",array_keys($fields));
    $sql = "INSERT INTO userinfo($implodecolumns) VALUES(:".$implodePlaceholder.")";
    $stmt = $this->connect()->prepare($sql);
    foreach ($fields as $key => $value) {
      $stmt->bindvalue(':' .$key,$value);
    }
    $stmtExec = $stmt->execute();
     return $stmtExec;
    }
  
  //fetch data on profile page
    
    public function getSeeker($id){
    
    $sql = "SELECT * FROM userinfo WHERE id = :id";
    $stmt = $this->connect()->prepare($sql);
    $stmt->bindvalue(":id",$id);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    while($row){
      $fname = $row['fname'];
      $lname = $row['lname'];
      $contactno = $row['contactno'];
      $email = $row['email'];
      $usertype = $row['usertype'];
    }
  }
    }
  ?>