
           
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
      <form action="action_delete.php" target="_blank"  method='POST'>
      <p><input class="w3-input w3-padding-16 w3-border" type="code "  placeholder="code" required name="code"></p>







        <p><button class="w3-button  w3-border w3-border-black" type="submit">Delete</button></p>
        <input type="button" value="Back" OnClick="location.href='action_page.php'">

      </form>
    </div>
</body>
</html>


  
        
           