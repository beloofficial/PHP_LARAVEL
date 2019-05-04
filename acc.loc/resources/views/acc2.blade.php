<php

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
	.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: DodgerBlue;
}

/* Style the arrow inside the select element: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.4);
}
</style>
</head>
<body>


	<div>
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#" class="w3-bar-item w3-button"><b>Бухгалтерский</b> сайт</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="{{route('logout')}}" class="w3-bar-item w3-button">Выйти</a>
    </div>
  </div>
</div>
	<br>
	{!! Form::open(['url'=>route('login2'),'method' => 'POST']) !!}
		<select name="company_name" class="custom-select" style="width:200px;">
			@foreach($comp_names as $k=>$comp_name)
				<option value="{{$comp_name->name}}">{{$comp_name->name}}</option>	
			@endforeach
			
			}
		</select>
	{!! Form::button('Выбрать',['class'=>'w3-btn w3-brown','type'=>'submit']) !!}
	{!! Form::close() !!}
	
	
	<table class="table">
		<thead class="thead-light">
			<tr >
				<th colspan = "2" scope="col">Информация о компании</th>
			</tr>
		</thead>
		<thead class="thead-dark">
		<tr>
			<th scope="col">Имя</th>
			<th scope="col">{{$company->name_company}}</th>
		</tr>
	</thead>
	<thead class="thead-dark">
		<tr>
			<th>Критерии</th>
			@if($company->name == 'too')
				<th>TOO</th>
			@else
				<th>ИП</th>
			@endif
		</tr>
	</thead>
	<thead class="thead-dark">
		<tr>
			<th>Налоговый режим</th>
			@if($company->regime == 'simple')
				<th>Упрощенный</th>
			@else
				<th>Общеустановленный</th>
			@endif
		</tr>
	</thead>
	<thead class="thead-dark">
		<tr>
			<th>НДС</th>
			@if($company->nds == 'yes')
				<th>Да</th>
			@elseif($company->nds == 'no')
				<th>Нет</th>
			@else
				<th>Дата снятия: {{$company->withdraw}}</th>
			@endif
		</tr>
	</thead>
		<thead class="thead-dark">
		<tr>
			<th>БИН</th>
			<th>{{$company->BIN}}</th>
		</tr>
	</thead>
	<thead class="thead-dark">
		<tr>
			<th>Вид деятельности</th>
			@if($company->activity == '1')
				<th>Услуга</th>
			@elseif($company->activity == '2')
				<th>Производство</th>
			@else
				<th>Торговля</th>
			@endif
		</tr>
	</thead>
	<thead class="thead-dark">
		<tr>
			<th>Контакты</th>
			<th>{{$company->contacts}}</th>
		</tr>
	</thead>
	<thead class="thead-dark">
		<tr>
			<th>Ответсвтенный</th>
			<th>{{$company->head}}</th>
		</tr>
	</thead>
	</table>
	
	{!! $calendar->calendar() !!}
	{!! $calendar->script() !!}
	<br>
	<hr>
	<h2 class="w3-red">Красный - F200.00</h2>
	<h2 class="w3-blue">Синий   - F220.00</h2>
	<h2 class="w3-green">Зеленый - F910.00</h2>
	<h2 class="w3-black">Черный  - F200.00 c НДС</h2>
	
</body>
</html>
