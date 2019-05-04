

<html>
<title>Insert product</title>
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


    <div id = "add" class="w3-container w3-black">
      <h1>Add product</h1>
    </div>
    <div class="w3-container">
      <p>Insert list:</p>
      <form action="action_add.php" target="_blank"  method='POST'>
      <p><input class="w3-input w3-padding-16 w3-border" type="text"   placeholder="types" required name="types"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text"   placeholder="names" required name="names"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number "  placeholder="price" required name="price"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text"   placeholder="text" required name="text"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text"  placeholder="image" required name="image"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="code "  placeholder="code" required name="code"></p>



        <p><button class="w3-button  w3-border w3-border-black" type="submit">Add</button></p>
        <input type="button" value="Back" OnClick="location.href='action_page.php'">

      </form>
    </div>
</body>
</html>
  