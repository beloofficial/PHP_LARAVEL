<?php
session_start();
require_once("index11.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html>
  
<title>BookShop</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<style>

.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
.w3-myfont {
  font-family: "Comic Sans MS", cursive, sans-serif;
}
input[type=text] {
  width: 8%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #3CBC8D;
  color: white;
  border-radius: 8px;
  height: 1%;
}
img{
  width: 50%;
}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu  
 -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>BOOK SHOP</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
  <?php


//$names = $_REQUEST["names"];
$product_array = $db_handle->runQuery("SELECT DISTINCT types FROM product  ");
if (!empty($product_array)) { 
foreach($product_array as $key=>$value){
?>
    <a href="index.php?types=<?php echo $product_array[$key]["types"]; ?>"
     class="w3-bar-item w3-button"><?php echo $product_array[$key]["types"]; ?>	</a>


<?php
}
}
?>
  </div>
  
</nav>

<!-- Top menu on small screens 

-->

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->

  
  <?php

$types = $_REQUEST["types"];
$names = $_REQUEST["names"];
?>
  <header class="w3-container w3-xlarge">
    <p class="w3-left "><?php echo $types;?></p>


    <p class="w3-right">
      <p class="w3-right"><button class="fa fa-shopping-cart w3-margin-right w3-button "  onclick="location.href='basket.php';">basket</button>

    </p>
   
  </header>

  <!-- Image header 


  -->

  <!-- Product grid 

-->

  <?php


//$names = $_REQUEST["names"];
$product_array = $db_handle->runQuery("SELECT * FROM product WHERE types = '$types' && names = '$names' ");
if (!empty($product_array)) { 
foreach($product_array as $key=>$value){
?>
       <h3 class="w3-center w3-myfont "><?php echo $product_array[$key]["names"]; ?></h3>


  <img src="<?php echo $product_array[$key]["image"]; ?>" style="width:50% heigth:40%">

  <br>

  <form method="post" action="index.php?action=add&types=<?php echo $product_array[$key]["types"]?>&code=<?php echo $_GET["code"]; ?>">
    <input type="text" class="product-quantity" name="quantity" value="1" size="4" />
            <input type="submit" value="Add to Cart"  class="btn btn-primary" style="width: 33%;height: 10%">
    </form>
<hr>
    <br><b> <?php echo $product_array[$key]["text"]; ?></b></p>

    <br><b> Price : <?php echo $product_array[$key]["price"]; ?></b></p>




<?php
}
}
?>

  

             

    






</body>
</html>
