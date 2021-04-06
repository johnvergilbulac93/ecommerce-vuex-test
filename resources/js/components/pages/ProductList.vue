<template>
  <div class="d-flex align-content-stretch flex-wrap">
    <ProductCard
      v-for="product in products"
      :key="product.id"
      :product="product"
    />
    
  </div>
</template>

<script>
import { mapState, mapActions } from 'vuex'
import ProductCard from "./ProductCard";

export default {
  name: "Product-Card",
  components: { ProductCard },
  computed: {
    ...mapState(['products'])
    // products() {
    //   return this.$store.state.products;
    // }
  },
  mounted() {
    // this.$store.dispatch("getProducts");
    this.getProducts()
  },
  methods:{
    ...mapActions(['getProducts'])
  }
};
</script>

<style>
</style>