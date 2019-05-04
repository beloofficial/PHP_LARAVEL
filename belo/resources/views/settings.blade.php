<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">

<link href="{{asset('assets2/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets2/css/style.css')}}" rel="stylesheet" type="text/css"> 

<script type="text/javascript" src="{{asset('assets2/js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets2/js/ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="{{asset('assets2/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets2/js/bootstrap-filestyle.min.js')}}"></script>
     

</head>

<style>
	*{
		padding: 0;
		margin: 0;
	}
	.content{
		height:500vh;
	}
	.left{
		
		box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.2);
		


	}
	.right{
		background-color: #ecf1f5;
	}
	.icon{
			margin-top: 20%;
			width: 180px;
			height: 180px;
			border-radius: 50%;
			margin-left: 12%;
	}
	.login{
			margin-top: 5%;
			text-align: center;
			color: grey;
	}
	.description{
		margin: 5% 10% 0% 10%;
		text-align: center;
		font-size: 18px;
	}
	header{
		min-height: 7vh;

		text-align: right;

		background-color: #4F5467;

		padding-top: 2vh;
		position: fixed;
		width: 83%;
	}
	.head_link{
		font-size: 16px;
		margin-right: 9%;
		text-decoration: none;
		color:white;
		font-family: Poppins, sans-serif;
	}
	.back{
		width: 100%;
		height: 210px;
	}

	.post{
		border-radius: 10px;
		box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.2);
	}
	.post_icon{
			margin-top: 12%;
			width: 12vh;
			height: 12vh;
			border-radius: 50%;
			margin-left: 12%;
	}
	.post_login{
			margin-top: 3%;
			margin-left: 5%;
			color: grey;
	}
	.post_date{
			color: grey;
			margin-left: 5%;
			font-size: 14px;
	}
	.post_img{
			margin-left: 5%;
			width: 80vh;
	}
	.post_text{
			font-size: 14px;
			margin-left: 4%;
			margin-right: 10%;
	}
	.post_likes{
		margin-left: 5%;
	}
	.post_more{
		margin-left: 5%;
		text-decoration: none;
		font-size: 15px;
		color: grey;
	}
	.post_more:hover{
		text-decoration: underline;
	}
	.post_comment{
		margin-left: 4%;
		text-decoration: none;
		font-size: 15px;
		color: black;
		margin-bottom: 1%;
	}
	
	.find{
		float: left;
		margin-left: 5%;
	}
	.set-but{
		float: right;
	}
</style>

<body>
	
	<div class="content" style="display: flex;">
		<div class="left" style="width: 17%">

			<a href=""><img class="icon"  src="{{asset('assets/images/'.$icon)}}"></a>
			<div class="col-xs-8">
				 	
				 </div>
			<br>
			<h1 class="login">{{$_SESSION['login']}}</h1>
			<p class="description">
				Добро пожаловать на наш сайт. Чувствуйте себя как дома!
			</p>
			
		</div>
		<div class="right" style="width: 83%">
			@if(session('find'))
                            <div class=" alert-danger" style="padding: 1% 5%;font-size: 16px;">
                                There is no user with such LOGIN.
                            </div>
            @endif

			<div class="head">
				<header> 
					
					<div class="find">
					{!! Form::open(['url' => route('another_user'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
						<input type="text" name="search" class="search">
						<input type="submit" name="search_btn" class="search_btn btn btn-warning" placeholder="Search" value="Search">
					{!! Form::close() !!}
					</div>
					<div>
					<a class="head_link" href="{{route('wall')}}">Wall</a>
					<a class="head_link" href="{{route('user')}}">My Profile</a>
					<a class="head_link" href="{{route('settings')}}">Settings</a>
					<a class="head_link" href="{{route('signIn')}}">Log Out</a>
					</div>
				</header>

				<img class="back" src="{{asset('assets/images/back.jpg')}}">

			</div>

			 <div id="Pizza" class="w3-container menu w3-padding-32">
			 	@if(isset($updated))
                            <div class="alert alert-danger">
                                Updated  
                            </div>
                        @endif
      			{!! Form::open(['url' => route('settings'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
      				<div class="form-group">
      					<label>Name</label>
      					<input type="text" name="type" value="1" style="display: none">
      					<input class="form-control" type="text" name="name" placeholder ="Name">
      					<input class="set-but btn btn-primary" type="submit" name="change1" value="change">

      				</div>
      			{!! Form::close() !!}
				{!! Form::open(['url' => route('settings'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
      				<div class="form-group">
      					<label>Surname</label>
      					<input type="text" name="type" value="2" style="display: none">
      					<input class="form-control" type="text" name="surname" placeholder="Surname">
      					<input class="set-but btn btn-primary" type="submit" name="change2" value="change">

      				</div>
      			{!! Form::close() !!}
      			{!! Form::open(['url' => route('settings'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
      				<div class="form-group">
      					<label>Email</label>
      					<input type="text" name="type" value="3" style="display: none">
      					<input class="form-control" type="email" name="email" placeholder="Email">
      					<input class="set-but btn btn-primary" type="submit" name="change3" value="change">

      				</div>
      			{!! Form::close() !!}
      			{!! Form::open(['url' => route('settings'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
      				<div class="form-group">
      					<label>Birthday</label>
      					<input type="text" name="type" value="4" style="display: none">
      					<input class="form-control" type="text" name="birthday" placeholder="21-08-1999">
      					<input class="set-but btn btn-primary" type="submit" name="change4" value="change">

      				</div>
      			{!! Form::close() !!}

      			{!! Form::open(['url' => route('settings'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
      			<div class="form-group">
      				<input type="text" name="type" value="5" style="display: none">
			     {!! Form::label('images', 'Изображение:') !!}
				 	{!! Form::file('images', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
				 	{!! Form::button('Change', ['class' => 'set-but btn btn-primary','type'=>'submit']) !!}
				
		    	</div>
				{!! Form::close() !!}
		
      <hr>
    </div>

      		</div>

 </div>
</div>
<!-- About Container -->

	</div>



<script>
</script>	
</body>
</html>