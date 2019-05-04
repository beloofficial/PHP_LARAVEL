<?php
session_start();
foreach ($_SESSION["cart_item"] as $k=>$item) {
	$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity-$k"];
}

header("Location:http://localhost/HW1/basket.php");
?>