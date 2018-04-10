@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-sm-center">
			<div class="col-xs-12 col-sm-10 col-md-7 col-lg-6">
				<div class="card border-primary mb-3">
  				<div class="card-header bg-primary">{{ $product->title }}</div>
				  <div class="card-body text-primary">
				    <h5 class="card-title">{{ $product->price }}</h5>
				    <p class="card-text">{{ $product->description }}</p>

				  </div>
				  <div class="card-footer">
				  	<a href="#" class="btn btn-success">Agregar al carrito</a>
				  	@include('products.delete')
				  </div>
				</div>
			</div>
			
		</div>
	</div>
@endsection