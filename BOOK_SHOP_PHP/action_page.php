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
            $login = "";
            $password = "";
            if(isset($_POST["Login"])){
              $login = $_POST["Login"];
              $password = $_POST["Password"];
            }            
            $product_array1 = $db_handle->runQuery("SELECT * FROM admins WHERE  login = '$login' and password = '$password'  ");
            if (!empty($product_array1) or $_SESSION['login']) {
                $_SESSION['login'] = true;
            ?>

<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
  .myButton {
  -moz-box-shadow:inset 0px 0px 0px 0px #bbdaf7;
  -webkit-box-shadow:inset 0px 0px 0px 0px #bbdaf7;
  box-shadow:inset 0px 0px 0px 0px #bbdaf7;
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
  background:-moz-linear-gradient(top, #79bbff 5%, #378de5 100%);
  background:-webkit-linear-gradient(top, #79bbff 5%, #378de5 100%);
  background:-o-linear-gradient(top, #79bbff 5%, #378de5 100%);
  background:-ms-linear-gradient(top, #79bbff 5%, #378de5 100%);
  background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5',GradientType=0);
  background-color:#79bbff;
  -moz-border-radius:12px;
  -webkit-border-radius:12px;
  border-radius:12px;
  border:3px solid #84bbf3;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Courier New;
  font-size:26px;
  font-weight:bold;
  padding:8px 44px;
  text-decoration:none;
  text-shadow:-1px 3px 50px #528ecc;
}
.myButton:hover {
  background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff));
  background:-moz-linear-gradient(top, #378de5 5%, #79bbff 100%);
  background:-webkit-linear-gradient(top, #378de5 5%, #79bbff 100%);
  background:-o-linear-gradient(top, #378de5 5%, #79bbff 100%);
  background:-ms-linear-gradient(top, #378de5 5%, #79bbff 100%);
  background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff',GradientType=0);
  background-color:#378de5;
}
.myButton:active {
  position:relative;
  top:1px;
}

</style>

 <header>
  </div>
  <div class="w3-display-topleft w3-container w3-xlarge" style="padding-left: 30%;padding-top: 10px">
    <input class="myButton" type="button" value="Add" OnClick="location.href='add.php'">
    <input class="myButton" type="button" value="Delete" OnClick="location.href='delete.php'">
    <input class="myButton" type="button" value="Exit" Onclick="location.href = 'admin.php'">
  </div>
</div>
</header>
<body>

                    <table  class="w3-table-all w3-hoverable " style="margin-top: 100px">
                    <tr>
                      <th>Type</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Code</th>
                    </tr>

<?php
            
            $product_array1 = $db_handle->runQuery("SELECT * FROM product");
            if (!empty($product_array1)) {
                foreach($product_array1 as $key=>$value){
            ?>
                    <tr>
                    <td> <?php echo $product_array1[$key]["types"] ?></td>
                    <td> <?php echo $product_array1[$key]["names"] ?></td>
                    <td> <?php echo $product_array1[$key]["price"] ?></td>
                    <td> <?php echo $product_array1[$key]["code"] ?></td>
                   


                    </tr>
                  <?php }}?>
                   
                  </table>
                    
</body>


   
            <?php }else{
                ?>
                <h3 ><?php echo "YOU not regisrate..."?></h3>
           <?php } ?>
  
        </div>
    </body>
 </html>