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

  <div id="carousel-ex" class="carousel slide carousel-fade pt-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li class="active" data-target="#carousel-ex" data-slide-to="0"></li>
        <li data-target="#carousel-ex" data-slide-to="1"></li>
        <li data-target="#carousel-ex" data-slide-to="2"></li>
      </ol>


      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
          <div class="view" style="background-image: url('https://images.pexels.com/photos/1981043/pexels-photo-1981043.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
          background-repeat: no-repeat; background-size: cover;">
            <div class="mask rgba-black-strong d-flex 
            justify-content-center align-items-center">
              <div class="text-center white-text mx-5 wow fadeIn">

                <h1 class="mb-4">
                  <strong>Web Site</strong>
                </h1>
                
                <p>
                  <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, dolorem.</strong>
                </p>

                <p class="mb-4 d-none d-md-block">
                  <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, cumque eligendi modi tempore amet sequi!</strong>
                </p>
                
                <a href="#" class="btn btn-outline-white btn-lg">
                  Lorem ipsum dolor <i class="fa fa-binoculars ml-2"></i>
                </a>

              </div>  
            </div>
          </div>
        </div>

      
        <div class="carousel-item">
          <div class="view" style="background-image: url('https://images.pexels.com/photos/847402/pexels-photo-847402.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
          background-repeat: no-repeat; background-size: cover;">
            <div class="mask rgba-black-strong d-flex 
            justify-content-center align-items-center">
              <div class="text-center white-text mx-5 wow fadeIn">

                <h1 class="mb-4">
                  <strong>1000 Мелочей</strong>
                </h1>
                
                <p>
                  <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, dolorem.</strong>
                </p>

                <p class="mb-4 d-none d-md-block">
                  <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, cumque eligendi modi tempore amet sequi!</strong>
                </p>
                
                <a href="#" class="btn btn-outline-white btn-lg">
                  Lorem ipsum dolor <i class="fa fa-binoculars ml-2"></i>
                </a>

              </div>  
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="view" style="background-image: url('https://images.pexels.com/photos/994883/pexels-photo-994883.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
          background-repeat: no-repeat; background-size: cover;">
            <div class="mask rgba-black-strong d-flex 
            justify-content-center align-items-center">
              <div class="text-center white-text mx-5 wow fadeIn">

                <h1 class="mb-4">
                  <strong>1000 Мелочей</strong>
                </h1>
                
                <p>
                  <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, dolorem.</strong>
                </p>

                <p class="mb-4 d-none d-md-block">
                  <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, cumque eligendi modi tempore amet sequi!</strong>
                </p>
                
                <a href="#" class="btn btn-outline-white btn-lg">
                  Lorem ipsum dolor <i class="fa fa-binoculars ml-2"></i>
                </a>

              </div>  
            </div>
          </div>
        </div>
      </div>

      <a href="#carousel-ex" class="carousel-control-prev" role="button"
        data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </a>
      
      <a href="#carousel-ex" class="carousel-control-next" role="button"
        data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </a>
  </div>

  <main>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark
       mdb-color lighten-3 mt-3 mb-5">
        <span class="navbar-brand">Категории:</span>
        
        <button class="navbar-toggler" type="button" 
          data-toggle="collapse" data-target="#nextNav"
          aria-controls="nextNav" aria-expanded="false" 
          aria-label = "Toggle navigation">

          <span class="navbar-toggler-icon"></span>
        
        </button>

        <div class="collapse navbar-collapse" id="nextNav">
          <!--Категорий-->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a href="#" class="nav-link">Все</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Товар-1</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Товар-2</a>
            </li>
          </ul>

          <form class="form-inline">
            <div class="md-form my-0">
              <input type="text" class="form-control mr-sm-2" placeholder="Search"
              aria-label>
            </div>
          </form>

        </div>

      </nav>

      <section class="text-center mb-4">
        <div class="row wow fadeIn">

          <!-- Товар -->
          <div class="col-lg-3 col-md-6 mb-4">
            
            <div class="card">

              <div class="view overlay">
                <!--Картинка товара-->
                <img class="card-img-top" 
                src="https://www.smashinn.com/f/13642/136425387/lacoste-colorblock-print-jersey-tennis-t-shirt.jpg" alt="Lacoste">
                <a href="#">
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <div class="card-body text-center">
                <!--Название товара-->
                <a href="#" class="grey-text">
                  <h5>T-shirt</h5>
                </a>

                <h5>
                  <strong>
                    <a href="#" class="dark-grey-text">Lacoste t-shirt</a>
                  </strong>
                </h5>
                <!-- Цена Товара -->
                <h4 class="font-weight-bold blue-text">
                  <strong>3900 KZT</strong>
                </h4>
              </div>
            </div>
          </div>
          <!--Конец товара-->
        </div>
      </section>
      
      <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">

          <li class="page-item disabled">
            <a href="" class="page-link" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>

          <li class="page-item active">
            <a href="" class="page-link" aria-label="Previous">
              <span aria-hidden="true">1</span>
            </a>
          </li>

          <li class="page-item ">
            <a href="" class="page-link" aria-label="Previous">
              <span aria-hidden="true">2</span>
            </a>
          </li>


          <li class="page-item ">
            <a href="" class="page-link" aria-label="Previous">
              <span aria-hidden="true">3</span>
            </a>
          </li>

          <li class="page-item ">
            <a href="" class="page-link" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>

        </ul> 

      </nav>
    </div>
  </main>
  
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
    
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
