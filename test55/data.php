<?php
header('content-type: text/html; charset=utf-8');
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "tester_prof";
	private $conn;
	

	function __construct() {
		$this->conn = $this->connectDB();
		
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
	function runQuery1($query) {
		mysqli_query("SET NAMES UTF8");
		mysqli_query("SET CHARACTER SET UTF8");
		$result = mysqli_query($this->conn,$query);
	}
	
}
?>
