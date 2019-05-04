<?php
session_start();
require_once("index11.php");
$db_handle = new DBController();
?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
    

    </head>
    <h3 style="text-align:center;">Сheck for your order.</h3>
    <body>
    <div id="shopping-cart">


<table class="tbl-cart table" cellpadding="10" cellspacing="1">
  <thead class="thead-light">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="10%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
</tr> 
<thead class="thead-light">
<?php  
  $total_quantity = 0;
  $total_price = 0;
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
  ?>
    <tr>
    <td><?php echo $item["names"]; ?></td>
    <td><?php echo $item["code"]; ?></td>
    <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
    <td  style="text-align:right;"><?php echo "$ ".$item["price"]; ?></td>
    <td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
    </tr>
    <?php
    $total_quantity += $item["quantity"];
    $total_price += ($item["price"]*$item["quantity"]);
  }
  ?>

<tr>
<td colspan="2" align="right">Total price of products:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>


<?php
	$total_price2 = $total_price * 0.1;
	$total_price3 = $total_quantity * 5;
	$total_price4 = $total_price - $total_price2 + $total_price3;
	
?>

<!-- Shipping -->
		<tr>
		<td colspan="2" align="right">Shipping:</td>
		<td align="right" colspan="3"><strong><?php echo "$ ".number_format($total_price3, 2); ?></strong></td>
		<td></td>
		</tr>

	

<!-- Discount -->
<?php
	if ($total_quantity>=3){
?>
		<tr>
		<td colspan="2" align="right">Discount 10%:</td>
		<td align="right" colspan="3"><strong><?php echo "$ ".number_format($total_price2, 2); ?></strong></td>
		<td></td>
		</tr>
		<tr>
		<td colspan="2" align="right">TOTAL:</td>
		<td align="right" colspan="3"><strong><?php echo "$ ".number_format($total_price4, 2); ?></strong></td>
		<td></td>
		</tr>
	<?php
}
?>

	</tbody>
	</table>	</div>
      <div>
        <?php
            $names = $_POST["Name"];
            $ch = $db_handle->runQuery("SELECT * FROM orders WHERE names = '$names'  ");
           $names = $_POST["Name"];
            $surname = $_POST["Surname"];
            $mail = $_POST["Mail"];
            $phone_number = $_POST["phone_number"];

            $address = $_POST["address"];
            $code = $_POST["code"];
            $comment = $_POST["comment"];
            $totalprice = $total_price4;
            $date_today = date("m.d.y");
            if($ch == ""){

            



                    $db_handle->runQuery1("INSERT INTO `orders`(`names`, `surname`, `mail`, `phone_number`, `address`, `code`, `totalprice`, `data_`, `comment`)
                    VALUES ('$names','$surname','$mail','$phone_number','$address','$code','$totalprice','$date_today','$comment')");

                   $id_customer = $db_handle->runQuery("SELECT id FROM orders WHERE mail = '$mail'  ");
          
                   $id_customer = $id_customer[0]["id"];

                   foreach ($_SESSION["cart_item"] as $item){
                    
                   $item_price = $item["quantity"]*$item["price"];
                   $code11 = $item["code"];
                   $quantity11 = $item["quantity"];
                   $total_quantity += $item["quantity"];
                   $total_price = ($item["price"]*$item["quantity"]);
                 
                    

                   $db_handle->runQuery1("INSERT INTO `order_product`( `code`, `quantity`, `totalprice`, `id_customer`)
                    VALUES ('$code11','$quantity11',$total_price ','$id_customer')");
                   }}
                    ?>
                    
                <h3 >
                

                    <table class="w3-table w3-bordered">
                    <tr>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Mail</th>
                      <th>Phone number</th>
                      <th>Address</th>
                      <th>Code</th>
                      <th>Comment</th>
                     <th>Data</th>
                    

                    </tr>
                    <tr>
                    <td> <?php echo $names?></td>
                    <td> <?php echo $surname?></td>
                    <td> <?php echo $mail?></td>
                    <td> <?php echo $phone_number?></td>
                    <td> <?php echo $address?></td>
                    <td> <?php echo $code?></td>
                    <td> <?php echo $comment?></td>
                    <th><?php echo $date_today	?></th>
                 


                    </tr>
                   
                  </table>
                    
               
                </h3>

                

         
	
    </body>
 </html>