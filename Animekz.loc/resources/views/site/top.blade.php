<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{asset('assets\css\style-def-top.css')}}">
	<link rel="stylesheet" href="{{asset('assets\css\top.css')}}">
	<title></title>
</head>
<header>
		<div id="menuHrefs">
			<a href="/">Главная</a>
			<a href="{{route('main')}}">Аниме</a>
			<a href="{{route('top')}}">Слайдшоу</a>
			
		</div>
</header>
<body>
	<div class="tagname">
		<span>Random 3 ANIME KZ</span>
	</div>
	<div class="parent">  
  		<div class="left">
  			
  			<div class="container">
				<div class="name"><span>{{$anime3->name}}</span></div>
				<div class="mini-content">
					<div class="image">{!! Html::image('assets/img/'.$anime3->images) !!}</div>
					<div class="text">
						<div class="voice"><span>Озвучка: {{$anime3->voice}}</span></div>
						<div class="release"><span>Выпуск:</span> {{$anime3->release}} </div>
						<div class="genre"><span>Жанр:</span> Детектив, Приключения, Cёнэн</div>
						<div class="description">{!!substr($anime3->text,0,1500)!!}.....</div>
					</div>
				</div>
				<div class="ending">
					<span>{{$anime3->created_at}}</span> |
					<span>Серии: 10 из 16(25)</span> |
					<span>Просмотров: 210</span>
				</div>
			</div>
  		</div>
  		<div  class="right">
  			
  			<div class="A">
  				
  		<div id="slider"> 
			<div class="slides">

				<div class="slider">
					<div class="images"> 
						<img style="width: 100%" src="{{asset('assets/img/titan/ataka1-1.png')}}"> 
					</div> 
				</div> 

				<div class="slider">
					<div class="images"> 
						<img style="width: 100%" src="{{asset('assets/img/titan/ataka2-1.jpg')}}"> 
					</div> 
				</div> 

				<div class="slider">	 
					<div class="images"> 
						<img style="width: 100%" src="{{asset('assets/img/titan/ataka3-1.jpg')}}"> 
					</div> 
				</div> 

				<div class="slider">
					<div class="images"> 
						<img style="width: 100%" src="{{asset('assets/img/titan/ataka4-1.jpg')}}"> 
					</div> 
				</div> 
			</div> 
		</div>

  			</div>
  			
  			<div  class="A">
  					<div id="slider"> 
						<div class="slides">

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka1-2.png')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka2-2.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">	 
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka3-2.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka4-2.jpg')}}"> 
								</div> 
							</div> 
						</div> 
					</div>		
				</div>

				<div  class="A">
  					<div id="slider"> 
						<div class="slides">

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka1-3.png')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka2-3.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">	 
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka3-3.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka4-3.jpg')}}"> 
								</div> 
							</div> 
						</div> 
					</div>		
				</div> 

				<div  class="A">
  					<div id="slider"> 
						<div class="slides">

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka1-4.png')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka2-4.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">	 
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka3-4.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka4-4.jpg')}}"> 
								</div> 
							</div> 
						</div> 
					</div>		
				</div> 
		</div>
	</div>

	<br>
	<div class="parent">  
  		<div class="left">
  			
  			<div class="container">
				<div class="name"><span>{{$anime2->name}}</span></div>
				<div class="mini-content">
					<div class="image">{!! Html::image('assets/img/'.$anime2->images) !!}</div>
					<div class="text">
						<div class="voice"><span>Озвучка: {{$anime2->voice}}</span></div>
						<div class="release"><span>Выпуск:</span> {{$anime2->release}} </div>
						<div class="genre"><span>Жанр:</span> Детектив, Приключения, Cёнэн</div>
						<div class="description">{!!substr($anime3->text,0,1500)!!}.....</div>
					</div>
				</div>
				<div class="ending">
					<span>{{$anime2->created_at}}</span> |
					<span>Серии: 10 из 16(25)</span> |
					<span>Просмотров: 210</span>
				</div>
			</div>
  		</div>
  		<div  class="right">
  			
  			<div class="A">
  				
  		<div id="slider"> 
			<div class="slides">

				<div class="slider">
					<div class="images"> 
						<img style="width: 100%" src="{{asset('assets/img/sao/sao1-1.jpg')}}"> 
					</div> 
				</div> 

				<div class="slider">
					<div class="images"> 
						<img style="width: 100%" src="{{asset('assets/img/sao/sao2-1.jpg')}}"> 
					</div> 
				</div> 

				<div class="slider">	 
					<div class="images"> 
						<img style="width: 100%" src="{{asset('assets/img/sao/sao3-1.jpg')}}"> 
					</div> 
				</div> 

				<div class="slider">
					<div class="images"> 
						<img style="width: 100%" src="{{asset('assets/img/sao/sao4-1.jpg')}}"> 
					</div> 
				</div> 
			</div> 
		</div>

  			</div>
  			
  			<div  class="A">
  					<div id="slider"> 
						<div class="slides">

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/sao/sao1-2.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/sao/sao2-2.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">	 
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/sao/sao3-2.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/sao/sao4-2.jpg')}}"> 
								</div> 
							</div> 
						</div> 
					</div>		
				</div>

				<div  class="A">
  					<div id="slider"> 
						<div class="slides">

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/sao/sao1-3.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/sao/sao2-3.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">	 
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/sao/sao3-3.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/sao/sao4-3.jpg')}}"> 
								</div> 
							</div> 
						</div> 
					</div>		
				</div> 

				<div  class="A">
  					<div id="slider"> 
						<div class="slides">

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/sao/sao1-4.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/sao/sao2-4.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">	 
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/sao/sao3-4.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/sao/sao4-4.jpg')}}"> 
								</div> 
							</div> 
						</div> 
					</div>		
				</div> 
		</div>
	</div>


	<br>
	<div class="parent">  
  		<div class="left">
  			<div class="container">
				<div class="name"><span>{{$anime1->name}}</span></div>
				<div class="mini-content">
					<div class="image">{!! Html::image('assets/img/'.$anime1->images) !!}</div>
					<div class="text">
						<div class="voice"><span>Озвучка: {{$anime1->voice}}</span></div>
						<div class="release"><span>Выпуск:</span> {{$anime1->release}} </div>
						<div class="genre"><span>Жанр:</span> Детектив, Приключения, Cёнэн</div>
						<div class="description">{!!substr($anime3->text,0,1500)!!}.....</div>
					</div>
				</div>
				<div class="ending">
					<span>{{$anime1->created_at}}</span> |
					<span>Серии: 10 из 16(25)</span> |
					<span>Просмотров: 210</span>
				</div>
			</div>
  		</div>
  		<div  class="right">
  			
  			<div class="A">
  				
  		<div id="slider"> 
			<div class="slides">

				<div class="slider">
					<div class="images"> 
						<img style="width: 100%" src="{{asset('assets/img/titan/ataka1-1.png')}}"> 
					</div> 
				</div> 

				<div class="slider">
					<div class="images"> 
						<img style="width: 100%" src="{{asset('assets/img/titan/ataka2-1.jpg')}}"> 
					</div> 
				</div> 

				<div class="slider">	 
					<div class="images"> 
						<img style="width: 100%" src="{{asset('assets/img/titan/ataka3-1.jpg')}}"> 
					</div> 
				</div> 

				<div class="slider">
					<div class="images"> 
						<img style="width: 100%" src="{{asset('assets/img/titan/ataka4-1.jpg')}}"> 
					</div> 
				</div> 
			</div> 
		</div>

  			</div>
  			
  			<div  class="A">
  					<div id="slider"> 
						<div class="slides">

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka1-2.png')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka2-2.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">	 
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka3-2.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka4-2.jpg')}}"> 
								</div> 
							</div> 
						</div> 
					</div>		
				</div>

				<div  class="A">
  					<div id="slider"> 
						<div class="slides">

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka1-3.png')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka2-3.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">	 
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka3-3.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka4-3.jpg')}}"> 
								</div> 
							</div> 
						</div> 
					</div>		
				</div> 

				<div  class="A">
  					<div id="slider"> 
						<div class="slides">

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka1-4.png')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka2-4.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">	 
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka3-4.jpg')}}"> 
								</div> 
							</div> 

							<div class="slider">
								<div class="images"> 
									<img style="width: 100%" src="{{asset('assets/img/titan/ataka4-4.jpg')}}"> 
								</div> 
							</div> 
						</div> 
					</div>		
				</div> 
		</div>
	</div>
</body>
</html>