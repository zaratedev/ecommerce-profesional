<template>
	<section>
		<material-transition-group tag="div" class="row">
			<products-card-component v-for="(product, index) in products" :data-index="index" :product="product" :key="product.id"></products-card-component>
		</material-transition-group>
	</section>
</template>

<script>
	import ProductCardComponent from './ProductCardComponent.vue'
	

	export default {
		data() {
			return {
				products: [],
			}
		},
		components: {
			'products-card-component': ProductCardComponent
		},
		created() {
			this.fetchProducts();
		},
		methods: {
			fetchProducts() {
				axios.get('/productos').then( (response) => {
					this.products = response.data.data;
				});
			}
			
		}
	}
</script>