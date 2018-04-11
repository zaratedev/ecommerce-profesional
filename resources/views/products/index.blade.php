@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>{{ $productsCount }}</h1>
		<products-component></products-component>
		<div class="actions text-center">
			{{ $products->links()}}
		</div>
	</div>
@endsection