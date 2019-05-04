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
                        <h3>Вход в личный кабинет.</h3>
                        <p>Используйте нашу социальную сеть на полную мощь!)</p>
                        <div class="page-links">
                            <a href="{{route('signIn')}}" class="active">Логин</a><a href="{{route('sign_up')}}">Регистрация</a>
                            <a href="{{route('guest')}}">Войти как гость</a>
                        </div>
                        @if(isset($error))
                            <div class="alert alert-danger">
                                Login or Password is incorrect!    
                            </div>
                        @endif
                        @if(session('registrate'))
                        
                            <div class="alert alert-success">
                                Success  
                            </div>
                        @endif
                        @if(session('login'))
                            <div class="alert alert-danger">
                                First, you must SIGN IN  
                            </div>
                        @endif
                       {!!Form::open(['url'=>route('signIn'),'id'=>'autorization','method'=>'POST'])!!}
                            <input class="form-control" type="text" name="login" placeholder="Логин" required>
                            <input class="form-control" type="password" name="password" placeholder="Пароль" required>
                            <div class="form-button">
                                <input class="ibtn" type="submit" name="SIGN IN">
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