<?php 
class Employee extends Db{
	//Select all data from database
	public function select()
	{
       $sql = "SELECT * FROM employee";
       $result = $this->connect()->query($sql);
       if($result->rowCount() >0){
       	while($row = $result->fetch()){
       		$data[] = $row;
       	}
         
         return $data;

       }
	}
	public function insert($fields){
		//INSERT INTO employee (name,city,designation) VALUES(:name,:city,:designation)
		$implodecolumns = implode(',',array_keys($fields));
		$implodePlaceholder = implode(", :",array_keys($fields));
		$sql = "INSERT INTO employee($implodecolumns) VALUES(:".$implodePlaceholder.")";
		$stmt = $this->connect()->prepare($sql);
		foreach ($fields as $key => $value) {
			$stmt->bindvalue(':' .$key,$value);
		}
		$stmtExec = $stmt->execute();
		if($stmtExec){
			header('location:index.php');
		}
	}
}
?>