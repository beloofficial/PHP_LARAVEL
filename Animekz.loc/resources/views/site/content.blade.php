<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets\css\content-style-main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets\css\input_comment.css')}}">

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
	<div class="body-main">
		<div class="left-main">
			<div class="shadow">
				@if(Session::has('error') and session('error')=='no')
					<div class="success">{{session('name')}}</div>
						<div class="form">

							{!!Form::open(['url'=>route('auth'),'id'=>'autorization','method'=>'POST'])!!}
								{!!Form::button('Exit',['class'=>'myButton','type'=>'          mit','style'=>'margin-left:90%'])!!}
							{!!Form::close()!!}
						</div>
					
				
				@else
					@if(session('error')=='error')
						<div style="margin-top: 3px;margin-left: 15%;">Неправильный логин или пароль!!!</div>
						<div style="margin-top: 3px;margin-left: 27%;">Попробуйте еще раз!!!</div>
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
		      					<label>Email</label>
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
	      					<label>Email</label>
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
			<div class="container">
				<div style="color:white" class="name">
						<span>{{$title}}</span>	
				</div>
				
				<div class="mini-content">
					<div class="image">
						{!! Html::image('assets/img/'.$content->images) !!}
						<div class="tooltip">Выход новых серий
  							<span class="tooltiptext">Среда-Четверг</span>
						</div>
					</div>
					<div class="text">
						<div class="voice"><span>Озвучка: {{$content->voice}}</span></div>
						<div class="release"><span>Выпуск:</span> {{$content->release}} </div>
						<div class="genre"><span>Жанр:</span> Детектив, Приключения, Cёнэн</div>
						<div class="description">{!!$content->text!!}</div>
					</div>
				</div>
				<br>

			</div>
			<br>
			<div class="container-info">
					<span>Обновлено: </span>{{$content->updated_at}}  |
					<span>Серии: </span>86 из 90+ |
					<span>Просмотров: </span>{{$content->votes}} |
			</div>
			<div class="video">
				<input class="inp" type="button" value="first" style="text-decoration: none;" href="#" 
				onclick="disp(document.getElementsByClassName('form1')[0])">
			
				<video class="form1" style="display: none;" controls>  
					<source src="{{URL::asset('assets\video\1.mp4')}}" type="video/mp4">  
				</video>
				

				<input class="inp" type="button" value="second" style="text-decoration: none;" href="#" 
				onclick="disp(document.getElementsByClassName('form2')[0])">	
				<video class="form2" style="display: none;" controls>  
					<source src="{{URL::asset('assets\video\2.mp4')}}" type="video/mp4">  
				</video>

				<input class="inp" type="button" value="third" style="text-decoration: none;" href="#" 
				onclick="disp(document.getElementsByClassName('form3')[0])">	
				<video class="form3" style="display: none;" controls>  
					<source src="{{URL::asset('assets\video\2.mp4')}}" type="video/mp4">  
				</video>
			</div>
			<div class="comments">
				<div class="input-comment">
					{!!Form::open(['url'=>route('commentAdd',['id'=>$content->id]),'method'=>'POST',])!!}
						<div class="form-style-6">
							<textarea name="text" placeholder="Type your Message" required></textarea>
							<input type="submit">
						</div>
					{!!Form::close()!!}
				</div>
				<div class="show comments">
					@foreach($comments as $k=>$comment)
					<div class="comment">
						<div class="comment-header">
							<span class="comment-user">
								
								<span class="comment-icon"><img src="{{asset('assets\img\background\icon.jpg')}}"></span> | 
								<span class="comment-name">{{$comment->name}}</span>
								<span class="comment-date">{{$comment->created_at}}</span>
								</span>
							
						</div>
						<div class="comment-text">{{$comment->text}}</div>
					</div>
					<br>
					@endforeach
				</div>
			</div>
		</div>

	</div>

</body>
</html>