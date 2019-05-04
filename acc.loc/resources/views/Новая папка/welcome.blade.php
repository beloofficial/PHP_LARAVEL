<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('/w3images/onepage_restaurant.jpg');
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-text-white">
  <div class="w3-display-middle w3-jumbo">
    <p>logo</p>
  </div>
  <div class="w3-display-topleft w3-container w3-xlarge">
    <p><button onclick="document.getElementById('acc1').style.display='block'" class="w3-button w3-black">Вход для главного бухгалтера</button></p>
    <p><button onclick="document.getElementById('acc2').style.display='block'" class="w3-button w3-black">Вход для бухгалтера</button></p>
    <p><button onclick="document.getElementById('acc3').style.display='block'" class="w3-button w3-black">Оставить заявку, как компания</button></p>
  </div>
  <div class="w3-display-bottomleft w3-container">
    <p class="w3-xlarge">monday - friday 10-23 | saturday 14-02</p>
    <p class="w3-large">42 village St, New York</p>
    <p>powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </div>
</div>

<!-- Menu Modal -->
<div id="acc1" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black ">
      <span onclick="document.getElementById('acc1').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Contact</h1>
    </div>
    <div class="w3-container">
      <p>Reserve a table, ask for today's special or just send us a message:</p>
      {!! Form::open(['url'=>route('login1'),'method' => 'POST']) !!}
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Login" required name="login"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Password" required name="password"></p>
        {!! Form::button('Login',['class'=>'w3-button','type'=>'submit']) !!}

      {!! Form::close() !!}
    </div>
  </div>
</div>

<!-- Contact Modal -->
<div id="acc2" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('acc2').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Contact</h1>
    </div>
    <div class="w3-container">
      <p>Reserve a table, ask for today's special or just send us a message:</p>
      {!! Form::open(['url'=>route('login2'),'method' => 'POST']) !!}
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Login" required name="login"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Password" required name="password"></p>
      {!! Form::button('Login',['class'=>'w3-button','type'=>'submit']) !!}
       {!! Form::close() !!}
    </div>
  </div>
</div>

<div id="acc3" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('acc3').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Contact</h1>
    </div>
    <div class="w3-container">
      <p>Reserve a table, ask for today's special or just send us a message:</p>
      {!! Form::open(['url'=>route('regist'),'method' => 'POST']) !!}
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Имя компании" required name="name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Электронная почта" required name="mail"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Номер рабочего телефона" required name="phone"></p>
      {!! Form::button('Login',['class'=>'w3-button','type'=>'submit']) !!}
       {!! Form::close() !!}
    </div>
  </div>
</div>

</body>
</html>

