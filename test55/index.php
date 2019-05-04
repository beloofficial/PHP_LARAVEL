<?php
session_start();
unset($_SESSION['enter']);
session_destroy ();
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
</head>
<body>
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo" style="background: url(images/logo.jpg); background-size: cover;">
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
                        <h3>Вход в личный кабинет.</h3>
                        <p>Зайдите в свой личный кабинет чтобы пройти тест.</p>
                        <div class="page-links">
                            <a href="login4.php" class="active">Логин</a><a href="register4.php">Регистрация</a>
                        </div>
                        <form method="post" action="tests.php">
                            <input class="form-control" type="text" name="phone" placeholder="Номер" required>
                            <input class="form-control" type="password" name="password" placeholder="Пароль" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Зайти</button>
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