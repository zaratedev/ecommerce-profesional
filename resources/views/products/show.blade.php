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
				  	<add-product-btn :product='{!! json_encode($product) !!}'></add-product-btn>
				  	@include('products.delete')
				  </div>
				</div>
			</div>

            <div class="yotpo bottomLine"
              {{-- data-appkey="7pyIqWrAgCwBCLmHDkC58cLgMolH3jK6h7JaRsgI" --}}
              data-domain="{{ url('/') }}"
              data-product-id="{{ $product->id }}"
              data-product-models="Products model information"
              data-name="{{ $product->title }}"
              data-url="{{ url('/productos/'.$product->id) }}"
              data-image-url="The product image url. Url escaped"
              data-description="{{ $product->description }}"
              data-bread-crumbs="Product categories">
            </div>

			<div class="yotpo yotpo-main-widget"
				data-product-id="{{ $product->id }}"
				data-price="{{ $product->price }}"
				data-currency="USD"
				data-name="{{ $product->title }}"
				data-url="{{ url('/productos/'.$product->id) }}"
				data-image-url=""
				data-description="{{ $product->description }}">
			</div>

		</div>
	</div>
@endsection
