<?php
session_start();

setlocale(LC_ALL, 'ru_RU.utf8');
Header("Content-Type: text/html;charset=UTF-8");
$host = "localhost";
$user = "root";           
$password = "";
$database = "tester_prof";
$conn = mysqli_connect($host,$user,$password,$database);
mysqli_query ($conn,"SET NAMES utf8");
$first = 0;
$second = 0;
$third = 0;
$fourth = 0;
$fivth = 0;
	if(!isset($_SESSION['enter']) or $_SESSION['enter']== false){
		header("Location:http://localhost/test55/tests.php");
	}
	if($_SESSION['enter'] and isset($_GET["text"])){
		$phone = $_SESSION['phone'];
		$text = $_GET["text"];
		$query = "UPDATE `users` SET `test_1`='$text' WHERE `phone` = '$phone' ";
		mysqli_query($conn,$query);

	}


	header("Location:http://localhost/test55/tests.php");
?>