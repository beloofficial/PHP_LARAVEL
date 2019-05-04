<?php
require_once("index11.php");
$db_handle = new DBController();
?> 
           <!DOCTYPE html>
<html>
<title>Delete product</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('photo-1514933651103-005eec06c04b.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>

<body>


    <div id = "delete" class="w3-container w3-black">
      <h1>Delete product</h1>
    </div>
    <div class="w3-container">
      <p>Insert list:</p>
      <form action="action_delete.php"  method='POST'>
      <p><input class="w3-input w3-padding-16 w3-border" type="code "  placeholder="code" required name="code"></p>







        <p><button class="w3-btn w3-round-xlarge w3-button w3-border w3-hover-red w3-black" type="submit">Delete</button></p>
        <input class="w3-tbn w3-black w3-round-xlarge w3-border w3-hover-green" type="button" value="Back" OnClick="location.href='action_page.php'">

      </form>
    </div>


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
</html>


  
        
           