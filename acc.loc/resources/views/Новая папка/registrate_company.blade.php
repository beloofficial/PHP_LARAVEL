<!DOCTYPE html>
<html>
<head>
	<title></title>
<script>
	function show_removed_date(){
		document.getElementById("removed-date").style = "display:block";
	}
	function hide_removed_date(){
		document.getElementById("removed-date").style = "display:none";
	}
</script>
</head>
<body>
	{!! Form::open(['url'=>route('registrate_company',['company'=>$company]),'method' => 'POST']) !!}
		<h2>Критерии</h2>
        <p><input name="criterion" type="radio" value="ip" checked>ИП</p>
   		<p><input name="criterion" type="radio" value="too">ТОО</p>
   		<hr>

   		<h2>Налоговый режим</h2>
        <p><input name="regime" type="radio" value="general" checked>общеустановленный</p>
   		<p><input name="regime" type="radio" value="simple">Упрощенный</p>
   		<hr>

   		<h2>НДС</h2>
        <p><input name="nds" type="radio" value="yes" checked onclick="hide_removed_date()">Есть</p>
   		<p><input name="nds" type="radio" value="no" onclick="hide_removed_date()">Нет</p>
   		<p><input name="nds" type="radio" value="removed" onclick="show_removed_date()">Снято</p>
   		<input type="date" id = "removed-date" name="withdraw" value="2018-08-22" style="display: none;">
   		<hr>
   		<table>
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
</body>
</html>