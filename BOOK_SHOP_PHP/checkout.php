<!DOCTYPE html>
<html>
<title>Sending order</title>
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


    <div class="w3-container w3-black">
      <h1>Order list </h1>
    </div>
    <div class="w3-container">
      <p>Information about customer:</p>
      <form action="sendMail.php" target="_blank"  method='POST'>

    </div>
    <div class="w3-container">
      <p>Please note: in order to receive goods by mail, the name and surname must match the identification data. And contain only letters.</p>

        <p><input class="w3-input w3-padding-16 w3-border" type="text" pattern = "(?=.*[a-z])(?=.*[A-Z]).{2,}"  placeholder="Name" required name="Name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" pattern = "(?=.*[a-z])(?=.*[A-Z]).{2,}"  placeholder="Surname" required name="Surname"></p>

        <p><input class="w3-input w3-padding-16 w3-border" type="email" placeholder="Mail" required name="Mail"></p>
        <p>The phone number must be 11 digits.</p>
        <p><input class="w3-input w3-padding-16 w3-border" type="number " pattern = "(?=.*\d).{11,}" placeholder="phone_number" required name="phone_number"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text"   placeholder="address" required name="address"></p>
        <p>The post code must be 6 digits.</p>

        <p><input class="w3-input w3-padding-16 w3-border" type="number " pattern = "(?=.*\d).{6,}" placeholder="post code" required name="code"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text"   placeholder="comment" required name="comment"></p>
        
        <p  class="w3-right"><button class="w3-button  w3-border w3-border-black w3-margin-right" type="submit">Send</button></p>


       
    </div>
</div>






      </form>
    </div>
</body>
</html>