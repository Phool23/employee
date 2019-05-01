<?php
class Db{
  protected function connect(){
// Create connection

try {
    $conn = new PDO("mysql:host=localhost;dbname=job_portal", "root", "");
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
    return $conn;
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
  }
}
 ?>
 