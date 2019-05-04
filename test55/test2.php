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
	if($_SESSION['enter']){
		//first
		if($_POST['4'] == '1')
			$first +=1;
		else if($_POST['4'] == '2')
			$first -=1;
		if($_POST['7'] == '1')
			$first +=1;
		else if($_POST['7'] == '2')
			$first -=1;
		if($_POST['11'] == '1')
			$first +=1;
		else if($_POST['11'] == '2')
			$first -=1;
		if($_POST['18'] == '1')
			$first +=2;
		else if($_POST['4'] == '2')
			$first -=2;
		if($_POST['25'] == '1')
			$first +=2;
		else if($_POST['25'] == '2')
			$first -=2;
		if($_POST['28'] == '1')
			$first +=1;
		else if($_POST['28'] == '2')
			$first -=1;
		//second
		if($_POST['2'] == '1')
			$second +=1;
		else if($_POST['2'] == '2')
			$second -=1;
		if($_POST['9'] == '1')
			$second +=2;
		else if($_POST['9'] == '2')
			$second -=2;
		if($_POST['13'] == '1')
			$second +=1;
		else if($_POST['13'] == '2')
			$second -=1;
		if($_POST['16'] == '1')
			$second +=2;
		else if($_POST['16'] == '2')
			$second -=2;
		if($_POST['21'] == '1')
			$second +=1;
		else if($_POST['21'] == '2')
			$second -=1;
		if($_POST['26'] == '1')
			$second +=1;
		else if($_POST['26'] == '2')
			$second -=1;
		//third
		if($_POST['5'] == '1')
			$third +=1;
		else if($_POST['5'] == '2')
			$third -=1;
		if($_POST['8'] == '1')
			$third +=1;
		else if($_POST['8'] == '2')
			$third -=1;
		if($_POST['14'] == '1')
			$third +=2;
		else if($_POST['14'] == '2')
			$third -=2;
		if($_POST['19'] == '1')
			$third +=2;
		else if($_POST['19'] == '2')
			$third -=2;
		if($_POST['22'] == '1')
			$third +=1;
		else if($_POST['22'] == '2')
			$third -=1;
		if($_POST['29'] == '1')
			$third +=1;
		else if($_POST['29'] == '2')
			$third -=1;
		//fourth
		if($_POST['3'] == '1')
			$fourth +=1;
		else if($_POST['3'] == '2')
			$fourth -=1;
		if($_POST['10'] == '1')
			$fourth +=2;
		else if($_POST['10'] == '2')
			$fourth -=2;
		if($_POST['12'] == '1')
			$fourth +=1;
		else if($_POST['12'] == '2')
			$fourth -=1;
		if($_POST['17'] == '1')
			$fourth +=2;
		else if($_POST['17'] == '2')
			$fourth -=2;
		if($_POST['24'] == '1')
			$fourth +=1;
		else if($_POST['24'] == '2')
			$fourth -=1;
		if($_POST['30'] == '1')
			$fourth +=1;
		else if($_POST['30'] == '2')
			$fourth -=1;
		//fivth
		if($_POST['1'] == '1')
			$fivth +=1;
		else if($_POST['1'] == '2')
			$fivth -=1;
		if($_POST['6'] == '1')
			$fivth +=1;
		else if($_POST['6'] == '2')
			$fivth -=1;
		if($_POST['15'] == '1')
			$fivth +=2;
		else if($_POST['15'] == '2')
			$fivth -=2;
		if($_POST['20'] == '1')
			$fivth +=1;
		else if($_POST['20'] == '2')
			$fivth -=1;
		if($_POST['23'] == '1')
			$fivth +=2;
		else if($_POST['23'] == '2')
			$fivth -=2;
		if($_POST['27'] == '1')
			$fivth +=1;
		else if($_POST['27'] == '2')
			$fivth -=1;
		echo $first;
		echo $second;
		echo $third;
		echo $fourth;
		echo $fivth;
		$phone = $_SESSION['phone'];
		$query = "UPDATE `users` SET `first`='$first',`second`='$second',`third`='$third',`fourth`='$fourth',`fivth`='$fivth' WHERE `phone` = '$phone' ";
		mysqli_query($conn,$query);
	}
	header("Location:http://localhost/test55/tests.php");
?>