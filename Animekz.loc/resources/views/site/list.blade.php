<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets\css\style-main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets\css\style-def.css')}}">
	<script>
    	function disp(form) {
        	if (form.style.display == "none") {
            	form.style.display = "block";
       	 	} 
       	 	else {
            	form.style.display = "none";
        	}
    }
    function auth(autorization){
    		if (autorization.style.display == "none") {
    			registration.style.display = "none";
            	autorization.style.display = "block";

       	 	} 
       	 	else {
            	autorization.style.display = "none";
        	}
    }
    function reg(registration){
    		if (registration.style.display == "none") {
    			autorization.style.display = "none";
            	registration.style.display = "block";

       	 	} 
       	 	else {
            	registration.style.display = "none";
        	}
    }




    </script>
</head>
<header>
		<div id="menuHrefs">
			<a href="/">Главная</a>
			<a href="{{route('main')}}">Аниме</a>
			<a href="{{route('top')}}">Слайдшоу</a>
			
		</div>
</header>
<body>
	<div id="slider"> 
			<div class="slides">

		<!-- First slide --> 
				<div class="slider" >
					<div class="legend"></div> 
					<div class="content"> 
						<div class="content-txt"> 
							<h1> Boruto </h1> 
							<h2> Boruto originated from Shueisha's proposal to Kishimoto on making a sequel to Naruto. However, Kishimoto rejected this offer and proposed his former assistant Mikio Ikemoto to draw it; the writer of the Boruto film....</h2> 
						</div> 
					</div> 
					<div class="images"> 
						<img src="{{asset('assets\img\carousel\boruto1.png')}}"> 
						<div >
						</div>
					</div> 
				</div> 

				<div class="slider" >
					<div class="legend"></div> 
					<div class="content"> 
						<div class="content-txt"> 
							<h1> Black Clover </h1> 
							<h2> Asta and Yuno are orphans raised at the outskirt of the Clover Kingdom. In a world where people are born with magical power in which allows them to use magics, Asta was born without any of them. In contrast, Yuno was born a prodigy with above average magical power and the talent to control it</h2> 
						</div> 
					</div> 
					<div class="images"> 
						<img src="{{asset('assets\img\carousel\clover.png')}}"> 
					</div> 
				</div> 

				<div class="slider" >
					<div class="legend"></div> 
					<div class="content"> 
						<div class="content-txt"> 
							<h1> Free </h1> 
							<h2> Free! is a Japanese anime television series produced by Kyoto Animation and Animation Do. The anime is a sequel to the light novel, High Speed!  </h2> 
						</div> 
					</div> 
					<div class="images"> 
						<img src="{{asset('assets\img\carousel\freetv3.png')}}"> 
					</div> 
				</div> 

				<div class="slider" >
					<div class="legend"></div> 
					<div class="content"> 
						<div class="content-txt"> 
							<h1> Tokyo Ghoul </h1> 
							<h2> is a Japanese dark fantasy manga series written and illustrated by Sui Ishida. It was serialized in Shueisha's seinen manga magazine Weekly Young Jump between September 2011 and September 2014 </h2> 
						</div> 
					</div> 
					<div class="images"> 
						<img src="{{asset('assets\img\carousel\gul.png')}}"> 
					</div> 
				</div> 
			</div> 
		</div>
	





	<div class="body-main">
		<div class="left-main">
			<div class="shadow">
				@if(Session::has('error') and session('error')=='no')
						<div class="success">{{session('name')}}</div>
						<div class="form">

							{!!Form::open(['url'=>route('auth'),'id'=>'autorization','method'=>'POST'])!!}
								{!!Form::button('Exit',['class'=>'myButton','type'=>'submit','style'=>'margin-left:100%'])!!}
							{!!Form::close()!!}
						</div>
					
				
				@else
					@if (count($errors) > 0)
    					<div>
       						<ul>
	            				@foreach ($errors->all() as $error)
	                				<li><div class="warning-3">{{ $error }}</div></li>
	           					@endforeach
        					</ul>
    					</div>
					@endif
					@if(session('error')=='error')
						<div class="warning">
							<div>Неправильный логин или пароль!!!</div>
							<div class="warning-2">Попробуйте еще раз!!!</div>
						</div>
					@endif
					@if(Session::has('pass') and session('pass')=='no')
						<div class="errors">If you want watch ANIME, Sigh in!!!</div>
					@endif
					<div class="form">
						<a onclick="auth(document.getElementById('autorization'))" href="#">Авторизация</a>
						<a onclick="reg(document.getElementById('registration'))" href="#">Регистрация</a>
					</div>
			@endif
				
				{!!Form::open(['url'=>route('auth'),'id'=>'autorization','method'=>'POST','style'=>"display: none;"])!!}
						<div class="auth">
		    				<div class="group">      
		      					<input type="text" name="email" required>
		      					<span class="highlight"></span>
		      					<span class="bar"></span>
		      					<label>Login</label>
		   					</div>
		   					<div class="group">      
		      					<input type="text" name="password" required>
		      					<span class="highlight"></span>
		      					<span class="bar"></span>
		      					<label>Password</label>
		   					</div>
	      				
	    				 {!!Form::button('Sign in',['class'=>'myButton','type'=>'submit'])!!}
	    				 </div>
  					{!!Form::close()!!}
				
			

				{!!Form::open(['url'=>route('reg'),'id'=>'registration','method'=>'POST','style'=>"display: none;"])!!}
					
						<div class="reg">
	    				<div class="group">      
	      					<input type="text" name="email" required>
	      					<span class="highlight"></span>
	      					<span class="bar"></span>
	      					<label>Login</label>
	   					</div>
	   					<div class="group">      
	      					<input type="text" name="password" required>
	      					<span class="highlight"></span>
	      					<span class="bar"></span>
	      					<label>Password</label>
	   					</div>
	      				{!!Form::button('Sign up',['class'=>'myButton','type'=>'submit'])!!}
	    				 
	    				</div>
  					
  					{!!Form::close()!!}
			<br>
			<br>
				<a title = "Поиск аниме по жанру и году" class = "link_search" href="vk.com" alt="Поиск аниме по жанру и году"></a>
				<br/>
				<a title = "Аниме новинки Осень 2018" class = "link_osen_2018" href="vk.com" alt="Аниме новинки Осень 2018"></a>
				<br/>
				<a title = "Аниме новинки Лето 2018" class = "link_leto_2018" href="vk.com" alt="Аниме новинки Лето 2018"></a>
				<br>

			</div>
			<div class = "box">
				<h2>Информация
					<span title = "Полезная информация" style="font-size: 18px;"></span>
				</h2>
			</div>
			<div align="left" class="side_box">
				<ul class = "powerUL blue">
					<li>
						<a title = " Безграничные возможности нашего сайта :)" href="">Возможности</a>
					</li>
					<li>
						<a title = "Наши коварные планы" href="">Планы на будущее</a>
					</li>
					<li>
						<a title = " User Online" href="">Пользователи онлайн</a>
					</li>
					<li>
						<a title = " Какие правила нужно соблюдать!" href="">Правила</a>
					</li>
					<li>
						<a title = " Команда?" href="">Команда?</a>
					</li>
					<li>
						<a title = "" href=""> Аниме для Казахстана</a>
					</li>
					<li>
						<a title = "" href="">Поддержка сайта</a>
					</li>
				</ul>
			</div>	

		</div>
		<div class="center-main">
			@foreach($contents as $k=>$content)
			<div class="container">
				<div style="color:white" class="name">
					{!!Html::link(route('contentShow',['id'=>$content->id]),$content->name,['alt'=>$content->name,'style'=>'color:white'])!!}
					
					</div>
				
				<div class="mini-content">
					<div class="image">{!! Html::image('assets/img/'.$content->images) !!}</div>
					<div class="text">
						<div class="voice"><span>Озвучка: {{$content->voice}}</span></div>
						<div class="release"><span>Выпуск:</span> {{$content->release}} </div>
						<div class="genre"><span>Жанр:</span> Детектив, Приключения, Cёнэн</div>
						<div class="description">{!!$content->text!!}</div>
					</div>
				</div>
				<div class="ending">
					<span>{{$content->created_at}}</span> |
					<span>Серии: 10 из 16(25)</span> |
					<span>Просмотров: {{$content->votes}}</span>
				</div>
			</div>
			<br>
			@endforeach	
		</div>
		<div class="right-main">
			<div class="box"><h2>Самое популярное <span style="font-size:18px;" title="Самое популярное"></span></h2></div>
			<div class="right-top">
			@foreach($populars as $k=>$popular)
				<a href="{{route('contentShow',['id'=>$popular->id])}}">
					<div class="mini-img">{!! Html::image('assets/img/'.$popular->images) !!}</div>
				</a>
					<div class="mini-desc">
						<div class="mini-name">{{$popular->name}}</div>
					</div>
					<br>
			@endforeach
			</div>


		</div>
	</div>

</body>

<footer>
		<div class="logo">
				<h3 style="color:white">The best site about ANIME</h3>
		</div>
		<div class="follow">
			
			<div>
				<a style="background-image: url({{asset('assets/img/logos/vk.png')}});" title = "vk" class = "ha-icon vk" href="http://vk.com" rel = "nofollow">Vkontakte</a>
				<a style="background-image: url({{asset('assets/img/logos/instagram.png')}});" title = "instagram" class = "ha-icon instagram" href="http://instagram.com" rel = "nofollow">Instagram</a>
				<a style="background-image: url({{asset('assets/img/logos/facebook.png')}});" title = "facebook" class = "ha-icon facebook" href="http://facebook.com" rel = "nofollow">Facebook</a>
				<a style="background-image: url({{asset('assets/img/logos/twitter.png')}});" title = "twitter" class = "ha-icon twitter" href="http://twitter.com" rel = "nofollow">Twitter</a>
			</div>
		</div>
		<div class = "prava" >
			<h4 style="color:white;">2018 Все права защищены.</h4>
		</div>
</footer>

</html>