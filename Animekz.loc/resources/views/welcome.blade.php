<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets\css\style2-madi.css')}}">
</head>
<body>
    <header>
        <div id="logo" onclick="slowScroll('#top')">
            <span>Anime.kz</span>
        </div>
        <div id="about">
            <a href="#" class="qwe" title="Возможности" onclick="slowScroll('#main')">Почему мы?!</a>
            <a href="#" class="qwe" charset= title="Преимущества" onclick="slowScroll('.box-3')">Администраторы</a>
            <a href="#" class="qwe" title="Контакты" onclick="slowScroll('#contacts')">Контакты</a>
            <a href="#" class="qwe" title="Ответы на вопросы" onclick="slowScroll('#faq')">FAQ</a>
        </div>
    </header>
    <div style="background-image: url({{asset('assets/img/img/129.jpg')}});" id="top">
        <h1>Добро пожаловать на наш сайт!</h1>
        <h3>Лучшее аниме со всего qazнета :)</h3>
        <a href="{{route('main')}}"><button class="button button2">Перейти на сайт!</button></a>
    </div>
    <div style="background-image: url({{asset('assets/img/img/125.jpg')}});" id="main">
        <div class="intro">
            <script>
  var i = 0; // Start point
  var images = [];
  var time = 1000;

  // Image List
  images[0] = "{{asset('assets/img/img/boruto1.png')}}"
  images[1] = "{{asset('assets/img/img/boruto2.png')}}"
  // Change Image
  function changeImg(){
    document.slide.src = images[i];

    if(i < images.length - 1){
      i++;
    } else {
      i = 0;
    }

    setTimeout("changeImg()", time);
  }

  window.onload = changeImg;

</script>

<img name="slide" width="400" height="400">
        </div>

        <div class="text">
            <span style="color: white; text-shadow: 1px 1px black;">Мы три пацана с запада Казахстана начали изучать Webку и создали такой мимимишный сайт, для твоего отдыха дорогой наш отаку,вы можете посмотреть все аниме со всего Инета!!!С уважением администрация сайта :)</span>
        </div>
    </div>

  
    <div class="container-1">
  <div class="box-1">
    <img src="{{asset('assets/img/img/amantay.jpg')}}">
    <p>Специалист по Back-end разработке.<br>
    Жизнененный девиз:<br>
      Жамандыққка жамандық әр кісінің ісі,<br>
      Жамандыққа жақсылық ер кісінің ісі.</p>
  </div>
  <div class="box-2">
    <img src="{{asset('assets/img/img/aslan.jpg')}}">
    <p>Специалист по Front-end разработке.<br>
      Жизненный девиз:<br>
    Өмір СS-GO емес,қайтадан тірілмейсін,<br>
  сондықтан дерзай.</p>
  </div>
  <div class="box-3">
    <img src="{{asset('assets/img/img/madi.jpg')}}">
    <p>Специалист по Big-Data.<br>
    Жизненный девиз:<br>
    Қамшының сабындай қысқа өмірде,<br>
  Недовольный болмай өтейік ағайын<span class=""></span></p>
  </div>
</div>

    <div style="background-image: url({{asset('assets/img/img/130.jpg')}});" id="contacts">
    <center><h5>Обратная связь</h5></center>
    <form id="form_input">
      <label for="name">Имя <span>*</span></label><br>
      <input type="text" placeholder="Введите имя" name="name" id="name"><br>
      <label for="email">Ваша почта <span>*</span></label><br>
            <input type="email" placeholder="Введите email" name="email" id="email"><br>
            <label for="message">Сообщение <span>*</span></label><br>
            <textarea placeholder="Введите ваше сообщение" name="message" id="message"></textarea><br>
            <div id="mess_send" class="btn">Отправить</div>
    </form>
  </div>

<div style="background-image: url({{asset('assets/img/img/134.png')}});" id="faq">
    <div>
      <span class="title">Реклама</span><br>
      <span class="heading">Как будет проходит оплата?</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
    </span>
      <span class="heading">Как будет проходит оплата?</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Как будет проходит оплата?</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
    </div>
    <div>
      <span class="title">Информация</span><br>
      <span class="heading">Что входит в услуги сервиса</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Что входит в услуги сервиса</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Что входит в услуги сервиса</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
    </div>
    <div>
      <span class="title">Гарантии</span><br>
      <span class="heading">Какие гарантии есть</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Какие гарантии есть</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
      <span class="heading">Какие гарантии есть</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium beatae asperiores debitis perspiciatis perferendis nemo tempore distinctio officia commodi et non tempora laudantium culpa nostrum, quidem, quasi ratione itaque nam.</p>
    </div>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    function slowScroll(id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }
    $(document).on("scroll", function () {
      if($(window).scrollTop() === 0)
        $("header").removeClass("fixed");
      else
        $("header").attr("class", "fixed");
    });
  </script>
</body>
</html>