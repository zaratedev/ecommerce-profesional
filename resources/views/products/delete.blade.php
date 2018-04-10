@auth
{!! Form::open(['route' => ['productos.destroy', $product->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("¿Estás seguro de eliminar este producto?")']) !!}

    <input type="submit" value="Eliminar producto" name="" class="btn btn-danger">

{!! Form::close() !!}
@endauth