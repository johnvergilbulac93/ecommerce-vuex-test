<template>
  <div
    class="dropdown-menu p-2"
    style="min-width: 320px; right: 0; left: auto"
    aria-labelledby="navbarDropdown"
  >
    <div v-for="(item, i) in cart" :key="i">
      <div class="px-2 d-flex justify-content-between">
        <div>
          <strong>{{ item.product.title }}</strong>
          <br />
          {{ item.quantity }} x ${{ item.product.price }}
        </div>
        <div>
          <a href="#" class="badge badge-secondary" @click.prevent="removeItemFromCart(item.product)">remove</a>
        </div>
      </div>
      <hr />
    </div>
    <div class="d-flex justify-content-between">
      <span>Total: ${{ cartTotalPrice }}</span>
      <a href="#" @click.prevent="clearCartItems()">Clear Cart</a>
    </div>
  </div>
</template>

<script>
import {mapState, mapGetters, mapActions } from 'vuex'

export default {
  computed: {
    ...mapState(['cart']),

    ...mapGetters(['cartTotalPrice'])
    // cart() {
    //   return this.$store.state.cart;
    // },
    // cartTotalPrice() {
    //   return this.$store.getters.cartTotalPrice;
    // }
  },
  mounted(){
    this.getCartItems()
    // this.$store.dispatch('getCartItems');
  },
  methods:{
    ...mapActions(['removeItemFromCart','clearCartItems','getCartItems'])
    // removeItemFromCart(product){
    //   this.$store.dispatch('removeItemFromCart', product);
    // },
    // clearCart(){
    //   this.$store.dispatch('clearCartItems');
    // }
  }

};
</script>

<style>
</style>