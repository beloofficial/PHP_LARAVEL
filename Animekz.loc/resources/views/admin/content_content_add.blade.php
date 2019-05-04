<div class="wrapper container-fluid">

	{!! Form::open(['url' => route('contentAdd'),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
 	
	
	<div class="form-group">
		
		{!! Form::label('name','Name',['class' => 'col-xs-2 control-label'])   !!}
		<div class="col-xs-8">
			{!! Form::text('name',old('name'),['class' => 'form-control','placeholder'=>'Введите название аниме'])!!}
		</div>
	
	</div>

	
	<div class="form-group">
	     {!! Form::label('voice', 'Voice:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('voice', old('voice'), ['class' => 'form-control','placeholder'=>'Введите озвучиков']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('release', 'Release:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('release', old('release'), ['class' => 'form-control','placeholder'=>'Введите дату релиза']) !!}
		 </div>
    </div>

    <div class="form-group">
	     {!! Form::label('author', 'Author:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('author', old('author'), ['class' => 'form-control','placeholder'=>'Введите автора']) !!}
		 </div>
    </div>

    


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
	
	<script>
		CKEDITOR.replace('editor');
	</script>
	
</div>
