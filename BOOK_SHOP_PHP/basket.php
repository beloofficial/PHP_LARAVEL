<?php session_start();?>
<html>
<HEAD>

<title>BookShop basket</title>
<!--
<link href="style.css" type="text/css" rel="stylesheet" /> -->


<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="style.css" type="text/css" rel="stylesheet" />
<style>
	.img1{
		width: 10%;

	}
</style>
</HEAD>

<BODY>

<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a>
<?php 
		if(!empty(($_SESSION["cart_item"]))){
	?>
    	
    	<?php } ?> </p>
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr> 
<form method="post" action="save.php">
<?php  
	$total_quantity = 0;
	$total_price = 0;
	if(isset($_SESSION["cart_item"]))
	{

    foreach ($_SESSION["cart_item"] as $k=>$item){
        $item_price = $item["quantity"]*$item["price"];
  ?>
    <tr>
    <td><img  src="<?php echo $item["image"]; ?>" class="cart-item-image img1" /><?php echo $item["names"]; ?></td>
    <td><?php echo $item["code"]; ?></td>
    <td style="text-align:right;"><input id="quantity" style="text-align: right;" type="text" name="quantity-<?=$k?>" value="<?php echo $item['quantity']; ?>" ></td>
    <td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
    <td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
    <td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
    </tr>
    <?php
    $total_quantity += $item["quantity"];
    $total_price += ($item["price"]*$item["quantity"]);
  }}
  ?>
  

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>





	</tbody>
	</table>	

<p class="w3-right"><button class="fa fa-address-card-o w3-margin-right w3-button w3-xmedium" type="submit">_ SAVE</button>

</form>

<p  class="w3-right"><button class="fa fa-address-card-o w3-margin-right w3-button w3-xmedium"  onclick="location.href='checkout.php';">_ CHECKOUT</button>	
    	
<p class="w3-left"><button class="fa fa-reply  w3-margin-left w3-button " onclick="location.href='http://localhost/HW1/index.php?types=Fantasy';"> _ BACK</button>


	
    </body>
    </html>
  