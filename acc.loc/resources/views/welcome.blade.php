<!DOCTYPE html>
<html>
<title>Вход</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}

</style>
<body style="background-image: url({{asset('images/bg.jpg')}}); background-size: cover; background-repeat: no-repeat;">

<div class="" style="margin-top: 20%;">
  <div class="container-fluid">
    <div class="w3-xlarge text-center justify-content-center align-items-center">
      <div style="margin: 15px;">
        <button onclick="document.getElementById('acc1').style.display='block'" class="w3-button w3-black">Вход для главного бухгалтера</button>
      </div>
      <div style="margin: 15px;">
        <button onclick="document.getElementById('acc2').style.display='block'" class="w3-button w3-black">Вход для бухгалтера</button>  
      </div>
      <div style="margin: 15px;">
        <button onclick="document.getElementById('acc3').style.display='block'" class="w3-button w3-black">Оставить заявку, как компания</button>
      </div>
    </div>  
  </div>
</div>

<!-- Menu Modal -->
<div id="acc1" class="w3-modal" style="display: none;">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black ">
      <span onclick="document.getElementById('acc1').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Вход</h1>
    </div>
    <div class="w3-container">
      {!! Form::open(['url'=>route('login1'),'method' => 'POST']) !!}
        <p><input class="w3-input w3-padding-16 w3-border" style="margin-top: 10px" type="text" placeholder="Логин" required name="login"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Пароль" required name="password"></p>
        {!! Form::button('Войти',['class'=>'w3-button w3-border w3-black','type'=>'submit']) !!}

      {!! Form::close() !!}
    </div>
  </div>
</div>

<!-- Contact Modal -->
<div id="acc2" class="w3-modal" style="display: none;">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('acc2').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Вход</h1>
    </div>
    <div class="w3-container">
      {!! Form::open(['url'=>route('login2'),'method' => 'POST']) !!}
        <p><input class="w3-input w3-padding-16 w3-border" style="margin-top: 10px" type="text" placeholder="Логин" required name="login"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="password" placeholder="Пароль" required name="password"></p>
      {!! Form::button('Войти',['class'=>'w3-button w3-border w3-black','type'=>'submit']) !!}
       {!! Form::close() !!}
    </div>
  </div>
</div>

<div id="acc3" class="w3-modal" style="display: none;">
  <div class="w3-modal-content w3-animate-zoom">
    <div class="w3-container w3-black">
      <span onclick="document.getElementById('acc3').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
      <h1>Заявка</h1>
    </div>
    <div class="w3-container">
      {!! Form::open(['url'=>route('regist'),'method' => 'POST']) !!}
        <p><input class="w3-input w3-padding-16 w3-border" style="margin-top: 10px" type="text" placeholder="Имя компании" required name="name"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Электронная почта" required name="mail"></p>
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Номер рабочего телефона" required name="phone"></p>
      {!! Form::button('Оставить данные',['class'=>'w3-button w3-border w3-black','type'=>'submit']) !!}
       {!! Form::close() !!}
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>

