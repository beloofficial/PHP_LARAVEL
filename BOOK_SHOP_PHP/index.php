<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
session_start();
require_once("index11.php");
$db_handle = new DBController();
// это типа когда нажимаешь на add to cart
if(!empty($_GET["action"])) {
  echo "string";
  switch($_GET["action"]) {
    case "add":

      if(!empty($_POST["quantity"])) {
        $productByCode = $db_handle->runQuery("SELECT * FROM product WHERE code='" . $_GET["code"] . "'");
        $itemArray = array($productByCode[0]["code"]=>array('names'=>$productByCode[0]["names"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
        
        if(!empty($_SESSION["cart_item"])) {
          $check = false;
          foreach($_SESSION["cart_item"] as $k => $v) {
                if($productByCode[0]["code"] == $v['code'])
                    $check = true;
               
          }
          if($check) {
           
            foreach($_SESSION["cart_item"] as $k => $v) {
                if($productByCode[0]["code"] == $v['code']) {
                  if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                  }

                  $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                }
            }
          } else {
            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
          }
        } else {
          $_SESSION["cart_item"] = $itemArray;
        }
        $types = $_GET['types'];
      header("Location:http://localhost/HW1/index.php?types=$types");

      }

    break;
    case "remove":


      if(!empty($_SESSION["cart_item"])) {

        foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET['code'] == $v['code'])
            unset($_SESSION["cart_item"][$k]);
            
        }
       header("Location:http://localhost/HW1/basket.php");
      }
    break;
    case "empty":
      unset($_SESSION["cart_item"]);
      header("Location:http://localhost/HW1/index.php?types=Fantasy");
    break;	
  }
  }
  ?>




  
<title>BookShop</title>
<!--
<link href="style.css" type="text/css" rel="stylesheet" /> -->


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
<script>
  function myFunc(){
    $.ajax({
      type: 'GET',
      url: 'index.php?action=add',
      data: 'name=Andrew&nickname=Aramis',
      success: function(data){
        alert(123);
      }
    });

  }
</script>
<style>
{
 
}
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
input[type=text] {
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: #3CBC8D;
  color: white;
  border-radius: 8px;
  height: 5.5%;
}
img{
  width: 100px;
  height: 300px;
}
.search{
  width: 50%;
}
</style>
<body class="w3-content" style="max-width:1200px">

<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>BOOK SHOP</b></h3>

  </div>
 
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
  
<?php
if(isset($_GET["types"]) and $_GET["types"] == "All"){?>

  <a style="text-decoration: underline;color: red" href="index.php?types=All"
     class="w3-bar-item w3-button">All </a>
<?php } else{ ?>

  <a href="index.php?types=All"
     class="w3-bar-item w3-button">All </a>
<?php 
    }
 ?>
  <?php
//types column
$product_array = $db_handle->runQuery("SELECT DISTINCT types FROM product  ");
if (!empty($product_array)) { 
foreach($product_array as $key=>$value){
  if(isset($_GET["types"]) and $_GET["types"] == $product_array[$key]["types"]){
?>

    
    <a style="text-decoration: underline;color: red" href="index.php?types=<?php echo $product_array[$key]["types"]; ?>"
     class="w3-bar-item w3-button"><?php echo $product_array[$key]["types"];  ?>	</a>

<?php
}
else
{
?>
  <a href="index.php?types=<?php echo $product_array[$key]["types"]; ?>"
     class="w3-bar-item w3-button"><?php echo $product_array[$key]["types"];  ?>  </a>
<?php
}}}
?>
</div>
</nav>

<!-- Top menu on small screens -->

<!-- Overlay effect when opening sidebar on small screens -->

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->

  
  <?php

    
    if(isset($_REQUEST["types"]))
      $types = $_REQUEST["types"];
    else
      $types = "Welcome to our site";
    $names = "";

    ?>

  <header class="w3-container w3-xlarge">
    <p class="w3-right">
      
      <button class="fa fa-shopping-cart w3-button "  onclick="location.href='basket.php';">basket</button>
      <?php 
        $total_quantity = 0;
        if(isset($_SESSION["cart_item"])){
          foreach ($_SESSION["cart_item"] as $item){
            $total_quantity += $item["quantity"];}} ?>
        <span class="w3-badge" style="background-color: #17a2b8;"><?= $total_quantity ?></span>
     </p>

  </header>

  <!-- Kamshat apay таблица продуктов-->
 



<!-- Kamshat apay продуктылардын шыгуы-->


<div id="product-grid">
 <form method="post" action="search.php">
        <input type="text" name="search"  placeholder="search" class="search">
        <input type="submit" name="submit" value="submit" class="submit">
    </form>
	<h2 style="text-align: center;background-color: #17a2b8;color:white;padding: 8px 0px;"><?= $types ?></h2>
  <?php
  if($types == "Welcome to our site"){?>
    <img style="width: 100%;height: 80%" src="21.jpg">
  
<?php
}
?>
	<?php
  if($types == "All")
    $product_array = $db_handle->runQuery("SELECT * FROM product ORDER BY id ASC");
  else
	   $product_array = $db_handle->runQuery("SELECT * FROM product where types = '$types' ORDER BY id ASC");
	if (!empty($product_array)) { 
		foreach($product_array as $key=>$value){
	?>


<div class="w3-col l3 s7">

<div class="w3-display-container"> 

		<div class="product-item">

      <form method="POST" action="index3.php?types=<?=$product_array[$key]["types"]; ?>&names=<?=$product_array[$key]["names"]?>&code=<?php echo $product_array[$key]["code"]; ?>" >
    <button class="w3-button" > 
      <img src="<?php echo $product_array[$key]["image"]; ?>" class="w3-grayscale-min" style="width:100%"> 
    </button>
    </form>			
    <div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["names"]; ?></div>
			<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
      <form method="post" action="index.php?action=add&types=<?php echo $product_array[$key]["types"]?>&code=<?php echo $product_array[$key]["code"]; ?>">
          
			    <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="4" />
            <input  type="submit" value="Add to Cart" class="btn btn-primary btnAddAction" style="width: 70%;height: 5.5%;background-color: #17a2b8;" onclick="myFunc()"></div>
			   </div>
			</form>
      </div>
</div>
		</div>

	<?php
		}

	}
	?>
</div>




  <!-- Product grid  seredina add to cart
  <span class="w3-tag w3-display-topleft">Sale</span>-->


<!--продуктылардын шыгуы но кнопка add to cart в середине картины но не работает а жаль-->





<!-- login Modal -->
<div id="login" class="w3-modal">
    <div class="w3-modal-content w3-animate-zoom">
      <div class="w3-container w3-black">
        <span onclick="document.getElementById('login').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
        <h1>Log in</h1>
      </div>
      <div class="w3-container">

        <p>If you already registred you can log in:</p>

        <form action="index4.php" target="_blank" method='POST'>
          <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Login" required name="Login"></p>
          <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Password" required name="Password"></p>
          <p><button class="w3-button w3-border w3-border-black" type="submit">Log in</button></p>
        </form>
      </div>
    </div>
  </div>


  <!-- футер раздражает сфиксируй пжлуйста-->


</div>
</body>
<!-- корзинадан если там 1 шт зат то удаляеться ,если несколько то нет ////
add to cart басылганда баска страницага кетпи корзинага салына берсе \\\\
таблица корзины на главном желательно не нужна->
</html>




$data = [
        'header' => "qweqweqw",
        'que' =>$que,
  

];



