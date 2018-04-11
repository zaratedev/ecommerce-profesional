<template>
	<div class="col-sm-12 col-md-6 col-lg-4">
		<div class="card border-primary mb-3">
  		<div class="card-header bg-primary text-white">{{ product.title }}</div>
			<div class="card-body text-primary">
				<h5 class="card-title">{{ product.humanPrice }}</h5>
				<p class="card-text">{{ product.description }}</p>

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