<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<a href="{{route('logout')}}">Exit</a>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#" class="w3-bar-item w3-button"><b>Бухгалтерский</b> сайт</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="{{route('logout')}}" class="w3-bar-item w3-button">Выйти</a>
    </div>
  </div>
</div>

<!-- Header -->

    

<div class="w3-container" style="padding:40px 16px" id="team">
  <div class="w3-row-padding w3-grayscale" style="margin-top:2px">
	@foreach($reqs as $k=>$req) 
		
	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <div class="w3-container">
          <h5>Имя компании: {{$req->name}}</h5>
          <p class="w3-opacity">Почта: {{$req->mail}}</p>
          <p>Телефон: {{$req->phone}}</p>
          @if($req->check == "false")
				<a class="w3-button w3-light-grey w3-block"  href="{{route('registrate_company',['company'=>$req->name])}}">
					<h4 style="color:red">{{$req->check}}</h4>
				</a>
			@else
				<a class="w3-button w3-light-grey w3-block" href="{{route('registrate_company',['company'=>$req->name])}}">
					<h4 style="color:green">{{$req->check}}</h4>
				</a>
			@endif
        </div>
      </div>
			
		 </div>	
	
	@endforeach
	</div>
</div>




</body>
</html>