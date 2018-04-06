@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="card">
			<div class="card-header">
				Editar producto - {{ $product->title }}
			</div>
		  <div class="card-body">
		  	@include('products.form')
		  </div>
		</div>
	</div>
@endsection