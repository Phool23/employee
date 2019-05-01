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
			$stmt->bindValue(':' .$key,$value);
		}
		$stmtExec = $stmt->execute();
		if($stmtExec){
			header('location:index.php');
		}
	}
	public function selectOne($id){

		$sql = "SELECT * FROM employee WHERE id = :id";
		$stmt = $this->connect()->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result;

	}
	public function update($fields,$id){
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


	$sql = "UPDATE employee SET " . $st . " WHERE id =" . $id;


	 $stmt = $this->connect()->prepare($sql);

	 foreach($fields as $key => $value){
	 	$stmt->bindValue(':'.$key,$value);
	 }
      $stmtExec = $stmt->execute();

      if($stmtExec){
      	header('location:index.php');
			}
      }		
}
?>