<div class="wrapper container-fluid">
{!! Form::open(['url' => route('contentEdit',array('content'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    	{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('name', 'Name:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Введите название страницы']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('voice', 'Voice:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('voice', $data['voice'], ['class' => 'form-control','placeholder'=>'Введите псевдоним страницы']) !!}
		 </div>
    </div>

    <div class="form-group">
	     {!! Form::label('release', 'Release:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('release', $data['release'], ['class' => 'form-control','placeholder'=>'Введите псевдоним страницы']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('author', 'Author:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('author', $data['author'], ['class' => 'form-control','placeholder'=>'Введите псевдоним страницы']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('text', 'Text:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('text', $data['text'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите описание аниме']) !!}
		 </div>
    </div>
    
    <div class="form-group">
    	{!! Form::label('old_images', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10">
			{!! Html::image('assets/img/'.$data['images'],'',['class'=>'img-responsive','width'=>'150px']) !!}
			{!! Form::hidden('old_images', $data['images']) !!}
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
	CKEDITOR.replace( 'editor' );
</script>
</div>