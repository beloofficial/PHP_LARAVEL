<?php 
require_once("index11.php");
$db_handle = new DBController();

$search = $_POST['search'];

$docs = $db_handle->runQuery("SELECT `names`,`text` FROM product");

foreach ($docs as $key => $doc) {
	if(stripos($doc['names'], $search) !== FALSE or stripos($doc['text'], $search)!== FALSE){
		?>
		<div>
		<?php
		echo $doc['names'];
		echo $doc['text'];
		?>
		</div>
		<?php
	}
}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script>
	function MF(){

			$.ajax({
		  type: 'POST',
		  url: 'response.php?',
		  data: 'name=Andrew&nickname=Aramis',
		  success: function(data){
		    $('.results').html(data);
		  }
		});
}
</script>
<body>
	<div class="results">Ждем ответа</div>

	<button onclick="MF()">QWE</button>
</body>
</html>