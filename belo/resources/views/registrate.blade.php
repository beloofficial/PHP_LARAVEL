<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ТЕСТ</title>
   <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/iofrm-theme4.css')}}">

<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Вы ввели правильный пароль';
    document.getElementById('submit').disabled = false;
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Ваши пароли не одинаковы';
    document.getElementById('submit').disabled = true;
  }
}
</script>
</head>
<body>
    <div class="form-body" class="container-fluid">
        
        <div class="row">
             <div class="img-holder" style="width: 50%;">
                <div class="bg" style="background: url({{asset('assets/images/BELO_2.png')}}); background-position: center; background-size: cover;width: 100%"></div>
               
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Впервые в BELO?</h3>
                        <h3>Моментальная регистрация</h3>
                        <p>Используйте нашу социальную сеть на полную мощь!)</p>
                        <div class="page-links">
                            <a href="{{route('signIn')}}">Вход</a><a href="{{route('sign_up')}}" class="active">Регистрация</a>
                            <a href="{{route('guest')}}">Войти как гость</a>
                        </div>
                        {!!Form::open(['url'=>route('sign_up'),'id'=>'autorization','method'=>'POST'])!!}
                            <input class="form-control" type="text" name="surname" placeholder="Фамилия" required>
                            <input class="form-control" type="text" name="name" placeholder="Имя" required>
                            <input class="form-control" type="text" name="login" placeholder="Логин" required>
                            <input class="form-control" type="text" name="email" placeholder="Почта" required>
                            <input class="form-control" id="password" type="password" name="password" placeholder="Пароль" required onkeyup='check();'>
                            <input class="form-control" id="confirm_password" type="password" name="confirm_password" placeholder="Подвердите пароль" required onkeyup='check();'>
                            <span id='message'></span>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn" ">Регистрация</button>
                            </div>
                        {!!Form::close()!!}
                        <p style="font-size: 15px;">Авторские права Belo 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>