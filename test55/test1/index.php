<?php
session_start();
if(!isset($_SESSION['enter']) or $_SESSION['enter'] == false)
{
    header("Location:http://localhost/test55/login4.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru"><head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /><title></title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jQuizler.js"></script>
<link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/jQuizler.css"/>
<script type="text/javascript">
var questions = [
{
type: "choose",
question: "<h3>Представьте, что вы на выставке. Что вас больше привлекает в экспонатах...</h3>",
answers: [
["цвет, совершенство форм", "3"],
["их внутреннее устройство", "2"],
],
correct: [1], letter: ["a"] // 1
},
{
type: "choose",
question: "<h3>Какие черты характера в человеке вам больше нравятся...</h3>",
answers: [
["дружелюбие, чуткость, отсутствие корысти", "0"],
["мужество, смелость, выносливость", "4"]
],
correct: [2], letter: ["b"] // 2
}
];
$("document").ready(function(){
$("#jQuizler").jQuizler(questions);
});
</script>
</head>
<style>
	.langs a{
		padding: 25px;
	}
</style>
<body>
<div id="jQuizler" class="main-quiz-holder">
<h3>Тест на тему: "Тест"</h3>
<p><img class="irc_mi" src="https://static6.depositphotos.com/1014550/624/i/450/depositphotos_6240474-stock-photo-test-word-on-keyboard.jpg" alt="Картинки по запросу картинки тест" onload="typeof google==='object'&&google.aft&&google.aft(this)" style="margin-top: 28px;" height="298" width="450" /></p>

<div class="langs" style="padding: 15px;">
	<a href="index.php" class="btn-link">Русский</a>
	<a href="index-kaz.php" class="btn-link">Казахский</a>
</div>
<button class="btn btn-large">Начать тест</button> <br />
</div>
</body></html>

