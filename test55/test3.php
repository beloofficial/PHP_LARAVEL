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
$subjects = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
if(!isset($_SESSION['enter']) or $_SESSION['enter']== false){
		header("Location:http://localhost/test55/tests.php");
}
	if($_SESSION['enter']){
		for ($i=1; $i <=29 ; $i++) { 
			if($_POST[$i] == '1')
				$subjects[$i] +=2;
			elseif ($_POST[$i] == '2') {
				$subjects[$i] +=1;
			}
			elseif ($_POST[$i] == '3') {
				$subjects[$i] +=0;
			}
			elseif ($_POST[$i] == '4') {
				$subjects[$i] -=1;
			}
			elseif ($_POST[$i] == '5') {
				$subjects[$i] -=2;
			}

			if($_POST[$i+29] == '1')
				$subjects[$i] +=2;
			elseif ($_POST[$i+29] == '2') {
				$subjects[$i] +=1;
			}
			elseif ($_POST[$i+29] == '3') {
				$subjects[$i] +=0;
			}
			elseif ($_POST[$i+29] == '4') {
				$subjects[$i] -=1;
			}
			elseif ($_POST[$i+29] == '5') {
				$subjects[$i] -=2;
			}

			if($_POST[$i+29+29] == '1')
				$subjects[$i] +=2;
			elseif ($_POST[$i+29+29] == '2') {
				$subjects[$i] +=1;
			}
			elseif ($_POST[$i+29+29] == '3') {
				$subjects[$i] +=0;
			}
			elseif ($_POST[$i+29+29] == '4') {
				$subjects[$i] -=1;
			}
			elseif ($_POST[$i+29+29] == '5') {
				$subjects[$i] -=2;
			}

			if($_POST[$i+29+29+29] == '1')
				$subjects[$i] +=2;
			elseif ($_POST[$i+29+29+29] == '2') {
				$subjects[$i] +=1;
			}
			elseif ($_POST[$i+29+29+29] == '3') {
				$subjects[$i] +=0;
			}
			elseif ($_POST[$i+29+29+29] == '4') {
				$subjects[$i] -=1;
			}
			elseif ($_POST[$i+29+29+29] == '5') {
				$subjects[$i] -=2;
			}

			if($_POST[$i+29+29+29+29] == '1')
				$subjects[$i] +=2;
			elseif ($_POST[$i+29+29+29+29] == '2') {
				$subjects[$i] +=1;
			}
			elseif ($_POST[$i+29+29+29+29] == '3') {
				$subjects[$i] +=0;
			}
			elseif ($_POST[$i+29+29+29+29] == '4') {
				$subjects[$i] -=1;
			}
			elseif ($_POST[$i+29+29+29+29] == '5') {
				$subjects[$i] -=2;
			}
			if($_POST[$i+29+29+29+29+29] == '1')
				$subjects[$i] +=2;
			elseif ($_POST[$i+29+29+29+29+29] == '2') {
				$subjects[$i] +=1;
			}
			elseif ($_POST[$i+29+29+29+29+29] == '3') {
				$subjects[$i] +=0;
			}
			elseif ($_POST[$i+29+29+29+29+29] == '4') {
				$subjects[$i] -=1;
			}
			elseif ($_POST[$i+29+29+29+29+29] == '5') {
				$subjects[$i] -=2;
			}

		}
		$f1 = $subjects[1];
		$f2 = $subjects[2];
		$f3 = $subjects[3];
		$f4 = $subjects[4];
		$f5 = $subjects[5];
		$f6 = $subjects[6];
		$f7 = $subjects[7];
		$f8 = $subjects[8];
		$f9 = $subjects[9];
		$f10 = $subjects[10];
		$f11 = $subjects[11];
		$f12 = $subjects[12];
		$f13 = $subjects[13];
		$f14 = $subjects[14];
		$f15 = $subjects[15];
		$f16 = $subjects[16];
		$f17 = $subjects[17];
		$f18 = $subjects[18];
		$f19 = $subjects[19];
		$f20 = $subjects[20];
		$f21 = $subjects[21];
		$f22 = $subjects[22];
		$f23 = $subjects[23];
		$f24 = $subjects[24];
		$f25 = $subjects[25];
		$f26 = $subjects[26];
		$f27 = $subjects[27];
		$f28 = $subjects[28];
		$f29 = $subjects[29];
		$phone = $_SESSION['phone'];
		$query = "UPDATE `users` SET `1`='$f1',`2`='$f2',`3`='$f3',`4`='$f4',`5`='$f5',`6`='$f6',`7`='$f7',`8`='$f8',`9`='$f9',`10`='$f10',`11`='$f11',`12`='$f12',`13`='$f13',`14`='$f14',`15`='$f15',`16`='$f16',`17`='$f17',`18`='$f18',`19`='$f19',`20`='$f20',`21`='$f21',`22`='$f22',`23`='$f23',`24`='$f24',`25`='$f25',`26`='$f26',`27`='$f27',`28`='$f28',`29`='$f29' WHERE `phone` = '$phone' ";
		echo $query;
		mysqli_query($conn,$query);
	}
	header("Location:http://localhost/test55/tests.php");
?>