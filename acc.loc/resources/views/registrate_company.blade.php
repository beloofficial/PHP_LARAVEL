<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/radio2.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/radio3.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/radio4.css')}}">
<script>
	function show_removed_date(){
		document.getElementById("removed-date").style = "display:block; text-align: center;";
	}
	function hide_removed_date(){
		document.getElementById("removed-date").style = "display:none";
	}
</script>
<style>
  input {outline:none;}

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

.toggle_radio{
  position: relative;
  background: rgba(0,0,0,.8);
  margin: 4px auto;
  overflow: hidden;
  padding: 0 !important;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  border-radius: 50px;
  position: relative;
  height: 26px;
  width: 213px;
}
.toggle_radio > * {
  float: left;
}
.toggle_radio input[type=radio]{
  display: none;
  /*position: fixed;*/
}
.toggle_radio label{
  font: 90%/1.618 "Source Sans Pro";
  color: rgba(255,255,255,.9);
  z-index: 0;
  display: block;
  width: 100px;
  height: 20px;
  margin: 3px 3px;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  border-radius: 50px;
  cursor: pointer;
  z-index: 1;
  /*background: rgba(0,0,0,.1);*/
  text-align: center;
  /*margin: 0 2px;*/
  /*background: blue;*/ /*make it blue*/
}
.toggle_option_slider{
  /*display: none;*/
  /*background: red;*/
  width: 100px;
  height: 20px;
  position: absolute;
  top: 3px;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
  border-radius: 50px;
  -webkit-transition: all .4s ease;
  -moz-transition: all .4s ease;
  -o-transition: all .4s ease;
  -ms-transition: all .4s ease;
  transition: all .4s ease;
}

#first_toggle:checked ~ .toggle_option_slider{
  background: rgba(255,255,255,.3);
  left: 3px;
}
#second_toggle:checked ~ .toggle_option_slider{
  background: rgba(255,255,255,.3);
  left: 109px;
}
</style>
</head>
<body style="background-image: url({{asset('images/bg.jpg')}}); background-size: cover; background-repeat: no-repeat; ">
   <div class="container-fluid text-center">
	{!! Form::open(['url'=>route('registrate_company',['company'=>$company]),'method' => 'POST']) !!}
		<h1>Критерии</h1>
      <div class="toggle_radio">
        <input type="radio" class="toggle_option" id="first_toggle" name="criterion" value="ip" >
    <input type="radio" checked class="toggle_option" id="second_toggle" name="criterion" value="too">
    <label for="first_toggle"><p>ИП</p></label>
    <label for="second_toggle"><p>ТОО</p></label>
    <div class="toggle_option_slider">
      </div>
    </div>
   		<hr>

   		<h1>Налоговый режим</h1>
      <div class="toggle_radio1">
        <input type="radio" class="toggle_option1" id="first_toggle1" name="regime" value="general" >
        <input type="radio" checked class="toggle_option1" id="second_toggle1" name="regime" value="simple">
        <label for="first_toggle1" class="s1"><p>Общеустановленный</p></label>
        <label for="second_toggle1" class="s2"><p>Упрощенный</p></label>
        <div class="toggle_option_slider1">
        </div>
      </div>
   		<hr>

   		<h1>НДС</h1>

        <div class="toggle_radio3">
          <input type="radio" class="toggle_option3" id="first_toggle3" name="nds" value="yes" onclick="hide_removed_date()">
          <input type="radio" checked class="toggle_option3" id="second_toggle3" name="nds" value="no" onclick="hide_removed_date()">
          <input type="radio" class="toggle_option3" id="third_toggle3" name="nds" value="removed" onclick="show_removed_date()">
          <label for="first_toggle3"><p>Есть</p></label>
          <label for="second_toggle3"><p>Нет</p></label>
          <label for="third_toggle3"><p>Снято</p></label>
          <div class="toggle_option_slider3">
          </div>
        </div>
        <div>
            <p style="display: inline-block;"><input type="date" id = "removed-date" name="withdraw" value="2018-08-22" style="display: none;"></p> 
         </div>
        <hr>
        <h1>Вид деятельности</h1>
        <div class="toggle_radio4">
          <input type="radio" class="toggle_option4" id="first_toggle4" name="activity" value="1">
          <input type="radio" checked class="toggle_option4" id="second_toggle4" name="activity" value="2" >
          <input type="radio" class="toggle_option4" id="third_toggle4" name="activity" value="3" >
          <label for="first_toggle4"><p>Услуга</p></label>
          <label for="second_toggle4"><p>Производство</p></label>
          <label for="third_toggle4"><p>Торговля</p></label>
          <div class="toggle_option_slider4">
          </div>
        </div>

         
   		<hr>
   		<table align="center">
        <tr>
          <td class="w3-text-brown w3-border w3-white">Название компании</td>
          <td><input name="name_company" type="text" class="w3-input w3-border w3-animate-input w3-sand" style="width:70%"></td>
        </tr>
   			<tr>
   				<td class="w3-text-brown w3-border w3-white">БИН</td>
   				<td><input name="BIN" type="text" class="w3-input w3-border w3-animate-input w3-sand" style="width:70%"></td>
   			</tr>
   			<tr>	
   				<td class="w3-text-brown w3-border w3-white">Адрес</td>
   				<td><input name="address" type="text" class="w3-input w3-border w3-animate-input w3-sand" style="width:70%"></td>
   				
   			</tr>
   				
   			<tr>
   				<td class="w3-text-brown w3-border w3-white">Контакты</td>
   				<td><input name="contacts" type="text" class="w3-input w3-border w3-animate-input w3-sand" style="width:70%"></td>
   			</tr>
   			<tr>
   				<td class="w3-text-brown w3-border w3-white">Ответственный</td>
   				<td><input name="head" type="text" class="w3-input w3-border w3-animate-input w3-sand" style="width:70%"></td>
   			</tr>

   		</table>
   		<hr>
         <select id="accountant" name="accountant" class="custom-select" style="width:200px;">    
            @foreach($accs as $k=>$acc)
               <option value="{{$acc->login}}">{{$acc->login}}</option>
            @endforeach
         </select>   
        {!! Form::button('Добавить',['class'=>'w3-btn w3-brown','type'=>'submit']) !!}

      {!! Form::close() !!}
   </div>
</body>
</html>