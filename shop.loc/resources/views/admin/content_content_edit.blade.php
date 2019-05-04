<div class="wrapper container-fluid">
{!! Form::open(['url' => route('contentEdit',array('content'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
    	{!! Form::hidden('id', $data['id']) !!}
	     {!! Form::label('name', 'Название:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Введите название продукта']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('types', 'Тип:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('types', $data['types'], ['class' => 'form-control','placeholder'=>'Введите тип продукта']) !!}
		 </div>
    </div>

    <div class="form-group">
	     {!! Form::label('price', 'Цена:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('price', $data['price'], ['class' => 'form-control','placeholder'=>'Введите цену']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('code', 'Код:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::text('code', $data['code'], ['class' => 'form-control','placeholder'=>'Введите код продукта']) !!}
		 </div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('text', 'Текст:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::textarea('text', $data['text'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите описание аниме']) !!}
		 </div>
    </div>
    
    <div class="form-group">
    	{!! Form::label('old_image', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
    	<div class="col-xs-offset-2 col-xs-10">
			{!! Html::image('assets/img/products/'.$data['image'],'',['class'=>'img-responsive','width'=>'150px']) !!}
			{!! Form::hidden('old_image', $data['image']) !!}
    	</div>
    </div>
    
    <div class="form-group">
	     {!! Form::label('image', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
	     <div class="col-xs-8">
		 	{!! Form::file('image', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
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