{!! Form::open(['route' => [$product->url(), $product->id], 'method' => $product->method(),  'class' => 'app-form']) !!}
    <div class="col-sm-12">
    	{!! Form::label('title', 'Título del producto') !!}
    	{!! Form::text('title', $product->title, ['class' => 'form-control', 'placeholder' => 'Escribe un título']) !!}
    </div>
    <div class="col-sm-12">
    	{!! Form::label('description', 'Descripción del producto') !!}
    	{!! Form::textarea('description', $product->description, ['class' => 'form-control', 'placeholder' => 'Escribe una descripción']) !!}
    </div>
    <div class="col-sm-12">
    	{!! Form::label('price', 'Precio del producto') !!}
    	{!! Form::number('price', $product->price, ['class' => 'form-control', 'placeholder' => 'Escribe un precio']) !!}
    </div>
    <div class="col-sm-12 mt-3">
    	{!! Form::submit('Guardar', ['class' => 'btn btn-success float-right']) !!}
    </div>
{!! Form::close() !!}