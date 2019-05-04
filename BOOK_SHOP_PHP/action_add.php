<?php
session_start();
require_once("index11.php");
$db_handle = new DBController();
?>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
    

    </head>
    <body>
    
      <div>
        <?php

            $types = $_POST["types"];
            $names = $_POST["names"];
            $price = $_POST["price"];
            $text = $_POST["text"];           
            $image = $_POST["image"];
            $code = $_POST["code"];




            $product_array1 = $db_handle->runQuery("SELECT * FROM product WHERE  code = '$code'   ");
            if (!empty($product_array1)) {
                foreach($product_array1 as $key=>$value){
            ?>
            <h3 ><?php echo " \n code:".$product_array1[$key]["code"]." already have, can u create another?"?>
            </h3>
            
            <?php }}else{
                ?>
                <h3 >
                    <?php 

                    $db_handle->runQuery1("INSERT INTO `product` (`types`, `names`, `price`, `text`, `image`, `code`)
                    VALUES ('$types','$names','$price','$text','$image','$code')");
                    ?>
                    
                </h3>
                <h3 >
                    
                    
                </h3>
           <?php } header("Location:http://localhost/HW1/action_page.php");?>
	
        </div>
    </body>
 </html>