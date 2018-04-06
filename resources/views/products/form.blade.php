{!! Form::open(['url' => '/productos', 'class' => 'app-form']) !!}
    <div class="col-sm-12">
    	{!! Form::label('title', 'Título del producto') !!}
    	{!! Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Escribe un título']) !!}
    </div>
    <div class="col-sm-12">
    	{!! Form::label('description', 'Descripción del producto') !!}
    	{!! Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Escribe una descripción']) !!}
    </div>
    <div class="col-sm-12">
    	{!! Form::label('price', 'Precio del producto') !!}
    	{!! Form::text('price',0, ['class' => 'form-control', 'placeholder' => 'Escribe un precio']) !!}
    </div>
    <div class="col-sm-12 mt-3">
    	{!! Form::submit('Guardar', ['class' => 'btn btn-success float-right']) !!}
    </div>
{!! Form::close() !!}