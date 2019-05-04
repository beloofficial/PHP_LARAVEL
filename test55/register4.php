<?php
session_start();
$_SESSION['enter'] = false;
require_once("data.php");
$db_handle = new DBController();
            if(isset($_POST["phone"]))
            {
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $class = $_POST['class'];
                $phone = $_POST["phone"];
                $password = $_POST["password"];
                $product_array1 = $db_handle->runQuery("SELECT * FROM users WHERE  phone = '$phone'");
                if (empty($product_array1)) {
                    $db_handle->runQuery1("INSERT INTO `users` (`name`, `surname`, `class`, `phone`, `password`)
                    VALUES ('$name','$surname','$class','$phone','$password')");
                    header("Location:http://localhost/test55/login4.php");
                }
            }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ТЕСТ</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme4.css">

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
        <div class="website-logo">
            <a href="index.html">
                <div class="logo"  style="background: url(images/logo.jpg); background-size: cover;">
                    <img class="logo-size" src="images/logo.jpg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg" style="background: url(images/bg.jpg); background-position: center; background-size: cover;"></div>
                <div class="info-holder">
                    <img src="" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Регистрация на тест.</h3>
                        <p>Зарегистрируйтесь на сайт чтобы пройти тест.</p>
                        <div class="page-links">
                            <a href="login4.php">Вход</a><a href="register4.php" class="active">Регистрация</a>
                        </div>
                        <form method="post" action="register4.php">
                            <input class="form-control" type="text" name="surname" placeholder="Фамилия" required>
                            <input class="form-control" type="text" name="name" placeholder="Имя" required>
                            <input class="form-control" type="text" name="class" placeholder="Класс" required>
                            <input class="form-control"  type="number" name="phone" placeholder="Номер телефона" required>
                            <input class="form-control" id="password" type="password" name="password" placeholder="Пароль" required onkeyup='check();'>
                            <input class="form-control" id="confirm_password" type="password" name="confirm_password" placeholder="Подвердите пароль" required onkeyup='check();'>
                            <span id='message'></span>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn" ">Регистрация</button>
                            </div>
                        </form>
                        <p style="font-size: 15px;">Авторские права УПЦ Маман-Специалист 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>