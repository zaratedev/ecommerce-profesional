@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			@foreach( $products as $product)
				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="card">
						<div class="card-body">
						    <h5 class="card-title">{{ $product->title}}</h5>
						    <h6 class="card-subtitle mb-2 text-muted">{{ $product->price}}</h6>
						    <p class="card-text">{{ $product->description }}</p>
					  	</div>
					</div>
				</div>
			@endforeach
		</div>

		<div class="actions text-center">
			{{ $products->links() }}
		</div>
		
	</div>
@endsection