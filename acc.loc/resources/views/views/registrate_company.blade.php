<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script>
	function show_removed_date(){
		document.getElementById("removed-date").style = "display:block; text-align: center;";
	}
	function hide_removed_date(){
		document.getElementById("removed-date").style = "display:none";
	}
</script>
</head>
<body>
   <div class="container-fluid text-center">
	{!! Form::open(['url'=>route('registrate_company',['company'=>$company]),'method' => 'POST']) !!}
		<h2>Критерии</h2>
        <p><input class="form-check-input" name="criterion" type="radio" value="ip" checked>ИП</p>
   		<p><input class="form-check-input" name="criterion" type="radio" value="too">ТОО</p>
   		<hr>

   		<h2>Налоговый режим</h2>
        <p><input class="form-check-input" name="regime" type="radio" value="general" checked>Общеустановленный</p>
   		<p><input class="form-check-input" name="regime" type="radio" value="simple">Упрощенный</p>
   		<hr>

   		<h2>НДС</h2>
        <p><input class="form-check-input" name="nds" type="radio" value="yes" checked onclick="hide_removed_date()">Есть</p>
   		<p><input class="form-check-input" name="nds" type="radio" value="no" onclick="hide_removed_date()">Нет</p>
   		<p><input class="form-check-input" name="nds" type="radio" value="removed" onclick="show_removed_date()">Снято</p>
         <div>
            <p style="display: inline-block;"><input type="date" id = "removed-date" name="withdraw" value="2018-08-22" style="display: none;"></p>   
         </div>
   		<hr>
   		<table align="center">
   			<tr>
   				<td>БИН</td>
   				<td><input name="BIN" type="text"></td>
   			</tr>
   			<tr>	
   				<td>Адрес</td>
   				<td><input name="address" type="text"></td>
   				
   			</tr>
   			<tr>
   				<td>Вид деятельности</td>
   				<td><input name="activity" type="text"></td>
   			</tr>
   				
   			<tr>
   				<td>Контакты</td>
   				<td><input name="contacts" type="text"></td>
   			</tr>
   			<tr>
   				<td>Ответственный</td>
   				<td><input name="head" type="text"></td>
   			</tr>

   		</table>
   		<hr>
         <select id="accountant" name="accountant">    
            @foreach($accs as $k=>$acc)
               <option value="{{$acc->login}}">{{$acc->login}}</option>
            @endforeach
         </select>   
        {!! Form::button('Добавить',['class'=>'w3-button','type'=>'submit']) !!}

      {!! Form::close() !!}
   </div>
</body>
</html>