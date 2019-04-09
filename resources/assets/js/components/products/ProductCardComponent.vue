<template>
	<div class="col-sm-12 col-md-6 col-lg-4">
		<div class="card border-primary mb-3">
  		<div class="card-header"><a :href="'/productos/'+product.id">{{ product.title }}</a></div>
			<div class="card-body text-primary">
				<h5 class="card-title">{{ product.humanPrice }}</h5>
				<p class="card-text">{{ product.description }}</p>
				<div class="yotpo bottomLine"
	              data-domain="Domain of the shop"
	              :data-product-id="product.id"
	              data-product-models="Products model information"
	              :data-name="product.title"
	              :data-url="'/productos/'+product.id"
	              data-image-url="The product image url. Url escaped"
	              :data-description="product.description"
	              data-bread-crumbs="Product categories">
            	</div>
			</div>

		</div>
	</div>
</template>

<script>

	export default {
		props: {
			product: {
				type: Object
			}
		}
	}
</script>
