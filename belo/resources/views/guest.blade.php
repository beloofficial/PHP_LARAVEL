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
 td {
  padding: 15px;
}
</style>

<body>
	
	<div class="content" style="display: flex;">
		<div class="left" style="width: 17%">

			<a href=""><img class="icon"  src="{{asset('assets/images/wall2.jpg')}}"></a>
			<br>
			<h1 class="login">Guest</h1>
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
					<a class="head_link" href="{{route('guest')}}">Home</a>
					<a class="head_link" href="{{route('signIn')}}">Sign In</a>
					<a class="head_link" href="{{route('sign_up')}}">Sign up</a>
					</div>
				</header>

				<img class="back" src="{{asset('assets/images/back.jpg')}}">

			</div>

			 <div id="Pizza" class="w3-container menu w3-padding-32">
      				<table style="margin: 0% 19%">
				      	@foreach($users as $k=>$user)
				      			
				      			<tr class="w3-white" style="width: 100vh;display: inline-block; border: 1px solid black;">
				      				
					      		  <div>
					      		  	
				      				<td><a href="{{route('user_guest',['login'=>$user->login])}}"><img class="post_icon" src="{{asset('assets/images/'.$user->icon)}}" ></a></td>
				      				<td><a href="{{route('user_guest',['login'=>$user->login])}}"><h2>{{$user->login}}</h2></a></td>
				      				<td><a href="{{route('user_guest',['login'=>$user->login])}}"><h3>{{$user->name}} {{$user->surname}}</h3></a></td>
					      		
				      			</div>
					      		</tr>					
				      		
				      	@endforeach
      </table>
      	
      		</div>

 </div>
</div>
<!-- About Container -->

	</div>



<script>
</script>	
</body>
</html>