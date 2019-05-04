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
     
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
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
		
		position: fixed;
		height: 100vh;
		box-shadow: 1px 0px 20px rgba(0, 0, 0, 1);
		


	}
	.right{
		margin-left: 17%;
		float: right;
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
		box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.5);
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
			font-size: 18px;

			;
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
	.post_add_comment{
		margin-left: 4%;
	    display: block;
	    width: 80%;
	    height: 34px;
	    padding: 6px 12px;
	    font-size: 14px;
	    line-height: 1.42857143;
	    color: #555;
	    background-color: #fff;
	    background-image: none;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
	    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	}
	.find{
		float: left;
		margin-left: 5%;
	}
	.delete{
		margin-right: 1%;
		float: right;
	}
 td {
  padding: 15px;
}
</style>

<body>
	
	<div class="content" style="display: flex;">
		<div class="left" style="width: 17%">

			<a href=""><img class="icon"  src="{{asset('assets/images/'.$icon)}}"></a>
			<div class="col-xs-8">
				 	
				 </div>
			<br>

			<h1 class="login">{{$login}}</h1>
			<div id="app">
  				
			</div>
			<p>
			
			</p>

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
						<input type="text" name="search" class="search" placeholder="Write a login:">
						<input class="btn btn-warning" type="submit" name="search_btn" class="search_btn" placeholder="Search" value="Search">
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

			
<div class="w3-container   w3-large" id="menu" style="margin-left: 8%;margin-right: 8%">
  <div class="w3-content">
    <div class="w3-row w3-center  w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col s3 tablink w3-padding-large w3-hover-red">My Posts</div>
      </a>
      
      <a href="javascript:void(0)" onclick="openMenu(event, 'subscription');">
        <div class="w3-col s3 tablink w3-padding-large w3-hover-red">Подписки</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'subscriber');">
        <div class="w3-col s3 tablink w3-padding-large w3-hover-red">Подписчики</div>
      </a>

       <a href="javascript:void(0)" onclick="openMenu(event, 'new_post');">
        <div class="w3-col s3 tablink w3-padding-large w3-hover-red">Add new post</div>
      </a>
    </div>

    <div id="Pizza" class="w3-container menu w3-padding-32">
      @foreach($my_posts as $k=>$my_post)
    	<div class="post w3-white" style="display: flex;" >
      		<div class="post_left" style="width: 15%">
      			<img class="post_icon" src="{{asset('assets/images/wall2.jpg')}}" >
      		</div>
      		<div class="post_right" style="width: 85%">
      			<h3 class="post_login">{{$login}}</h3>
      			{!!Form::open(['url'=>route('delete',['id'=>$my_post->id]),'class'=>'form-horizontal','method'=>'POST'])!!}
                            {{method_field('DELETE')}}
                            {!!Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit','style'=>"float:right;"])!!}
                {!!Form::close()!!}
      			<p class="post_date">10-10-2019</p>
      			<hr>
      			<span class="post_text" >{!!$my_post->text!!}</span>
      			<br>
      			<img class="post_img"  src="{{asset('assets/img/'.$my_post->img)}}">
      			<br>
      			
      			<br>
      			
      		</div>
      	</div>
      	<br>
      	@endforeach
      	
      		</div>
      	</div>
    </div>

    <div id="subscription" class="w3-container menu w3-padding-32 ">
    	<table style="margin: 0% 16%">
      	@foreach($friends as $k=>$friend)
      		@if($friend->type == 0)
      			
      			<tr class="w3-white" style="width: 100vh;display: inline-block; border: 1px solid black;">
      				
	      		  <div>
      				<td><a href="{{route('another_user_sub',['login'=>$friend->friend_login])}}"><img class="post_icon" src="{{asset('assets/images/'.$users[$k]->icon)}}" ></a></td>
      				<td><a href="{{route('another_user_sub',['login'=>$friend->friend_login])}}"><h2>{{$friend->friend_login}}</h2></a></td>
      				<td><a href="{{route('another_user_sub',['login'=>$friend->friend_login])}}"><h3>{{$users[$k]->name}} {{$users[$k]->surname}}</h3></a></td>
	      		
      			</div>
	      		</tr>
				
	      		
      		@endif
      	@endforeach
      </table>
    </div>

    <div id="subscriber" class="w3-container menu w3-padding-32">

    	@if(isset($new_users1))
    						@foreach($new_users1 as $k=>$new_user)
                            <div class=" alert-success" style="padding: 1% 5%;font-size: 16px;">
                            	{{$new_user->name}}
                               	{{$new_user->surname}}
                               	подписался(ась) на вас.
                            </div>
                            @endforeach
            @endif
          
      <table style="margin: 0% 16%">
      	@foreach($friends as $k=>$friend)
      		@if($friend->type == 1 or $friend->type == 2)
      			
      			<tr class="w3-white" style="width: 100vh;display: inline-block; border: 1px solid black;">
      				
	      		<div>   				
      				<td><a href="{{route('another_user_sub',['login'=>$friend->friend_login])}}"><img class="post_icon" src="{{asset('assets/images/'.$users[$k]->icon)}}" ></a></td>
      				<td><a href="{{route('another_user_sub',['login'=>$friend->friend_login])}}"><h2>{{$friend->friend_login}}</h2></a></td>
      				<td><a href="{{route('another_user_sub',['login'=>$friend->friend_login])}}"><h3>{{$users[$k]->name}} {{$users[$k]->surname}}</h3></a></td>
	      		</div>

	      		</tr>
	      		
      		@endif
      	@endforeach
      </table>
    </div>


    <div id="new_post" class="w3-container menu w3-padding-32 w3-white">
     	{!! Form::open(['url' => route('add_post'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
     		<div class="form-group">
	     		{!! Form::label('text', 'Текст:',['class'=>'col-xs-2 control-label']) !!}
	     		<div class="col-xs-8">
		 			{!! Form::textarea('text', old('text'), ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
		 		</div>
    		</div>
    
		    <div class="form-group">
			     {!! Form::label('images', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
			     <div class="col-xs-8">
				 	{!! Form::file('images', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
				 </div>
		    </div>
    
		    <div class="form-group">
				<div class="col-xs-offset-2 col-xs-10">
			    	{!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
			    </div>
			  </div>
		{!! Form::close() !!}
		
      <hr>
    </div>
    <br>

  </div>
</div>
<!-- About Container -->

	</div>



<script>

var myObject = new Vue({
  el: '#app',
  data: {message: 'Hello Vue!'}
})

function myFunction() {
    myObject.message = "John Doe";
}


	CKEDITOR.replace('editor');
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>	
</body>
</html>