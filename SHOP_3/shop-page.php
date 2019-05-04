<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <style>
    html,
    body,
    header,
    .carousel{
      height: 60vh;
    }
    @media(max-width: 740px){
      html,
      body,
      header,
      .carousel{
        height: 100vh;
      }
    }
    @media(min-width: 800px) and (max-width: 850px){
      html,
      body,
      header,
      .carousel{
        height: 100vh;
      }
    }
  </style>
</head>

<body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">
      <a href="#" class="navbar-brand waves-effect">
        <strong class="blue-text">1000Melochey</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
      aria-controls="navbarContent" aria-expanded="false" aria-label = "Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a href="#" class="nav-link waves-effect">Главная</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link waves-effect">Товары</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link waves-effect">Контакты</a>
          </li>
        </ul>
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a href="#" class="nav-link waves-effect">
              <!-- Число товаров в корзине -->
              <span class="badge red z-depth-1 mr-1">
                1
              </span>
              <i class="fa fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block">Cart</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link border border-light rounded waves-effect">      
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">
      <div class="row wow fadeInUpBig">
        <div class="col-md-6 mb-4 ">
          <img src="https://www.smashinn.com/f/13642/136425387/lacoste-colorblock-print-jersey-tennis-t-shirt.jpg" alt="" class="img-fluid">
        </div>
        <div class="p-5 col-md-6">
          <p class="lead">
            <span class="mr-1">
              3900 KZT
            </span>
          </p>
          <p class="lead font-weight-bold">
            Описание
          </p>
          <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo voluptate sed architecto, odio aspernatur totam iusto dolor molestiae eius, officia alias sit placeat corporis, quibusdam numquam delectus corrupti doloremque libero.</p>
          </div>
          <form class="d-flex justify-content-left">
            <input type="number" value = "1" aria-label="Search" class="form-control" style="width: 100px;">
            <button class="btn btn-primary btn-md my-0 p" type="submit">
              Добавить в корзину <i class="fa fa-shopping-cart ml-1"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </main>



  <footer class="page-footer text-center font-small mt-4 wow fadeIn" >  
    <div class="pt-4 py-3">
      Online Shop
    </div>
    <div class="footer-copyright py-3">
      BELO & Aidynjs
    </div>
  </footer>


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.js"></script>
  <script>
    new WOW().init();
  </script>
</body>

</html>
