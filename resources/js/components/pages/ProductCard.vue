<template>
  <div>
    <div class="col-3 mb-2">
      <div class="card h-100" style="width: 18rem">
        <img class="w-100" :src="product.image" alt="Card image cap" />
        <div class="card-body">
          <h4 class="card-title">
            <!-- <a href="#"> Product Title</a> -->
            <router-link
              :to="{ name: 'product', params: { id: product.id } }"
              >{{ product.title }}</router-link
            >
          </h4>
          <strong>${{ product.price }}</strong>
          <p class="card-text">
            {{ product.description }}
          </p>
          <button class="btn btn-secondary" @click="addToCart()">Add to Cart</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions } from 'vuex'

export default {
  props: ["product"],
  methods: {
    ...mapActions(['addProductToCart']),
    addToCart() {
      this.addProductToCart({
        product: this.product,
        quantity: 1
      })
    }
  }
};
</script>

<style>
</style>