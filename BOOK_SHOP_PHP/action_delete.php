<?php
session_start();
require_once("index11.php");
$db_handle = new DBController();
?>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <head>
    <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
    

    </head>
    <body>
    
      <div>
        <?php
            $code = $_POST["code"];




            $product_array1 = $db_handle->runQuery("SELECT * FROM product WHERE  code = '$code'   ");
            if (!empty($product_array1)) {
                foreach($product_array1 as $key=>$value){
            ?>
            <h3 >

            <?php 
            $db_handle->runQuery1("DELETE FROM `product` WHERE code = '$code'  ");
            ?>
            <?php 
                    echo $code." of product removed from list."
                    ?>
                    
            </h3>
            
            <?php }}else{
                ?>
                
                <h3 >
                    <?php 
                    echo $code." of product did not create. And you can't remove it."
                    ?>
                    
                </h3>
           <?php } ?>

	       <input class="w3-button w3-black w3-round-xlarge w3-border w3-hover-green" type="button" value="Back" OnClick="location.href='action_page.php'">
        </div>
    </body>
 </html>