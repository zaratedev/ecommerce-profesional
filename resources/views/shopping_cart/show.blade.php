@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
		<div class="card-body">
			<h2>Mi carrito</h2>
			<div class="row">
				<div class="col-12 col-md-6">
					<products-shopping-component></products-shopping-component>
				</div>
				<div class="col-12 col-md-6">
					<p>Paga tu total facilmente con cualquier de éstos metodos, a través de PayPal</p>
					<div>
						<a href="" class="btn btn-primary">Proceder al pago</a>
					</div>
					
				</div>
			</div>
			
			
		</div>
	</div>
</div>

@endsection