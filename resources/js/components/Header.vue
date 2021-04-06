<template>
  <div class="mb-2">
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between"
    >
      <div class="container">
        <router-link to="/" class="navbar-brand">E-Commerce </router-link>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <router-link to="main" class="nav-link">Home</router-link> 
            </li>
            <!-- <li class="nav-item">
              <router-link :to="{ name: 'product' }" class="nav-link">Product</router-link> 
            </li> -->

          </ul>
        </div>
        <div class="dropdown open">
          <button
            class="btn btn-secondary dropdown-toggle"
            type="button"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            {{ cartItemCount }} Cart
          </button>
          <div @click="$event.stopPropagation()">
            <Minicart />
          </div>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import Minicart from "./pages/Minicart";
export default {
  name: "Header",
  components: { Minicart },
  computed: {
    ...mapGetters(['cartItemCount'])
  }
  // computed: mapGetters({
  //   cartItemCount: 'cartItemCount'
  // })
  // computed:{
  //   cartItemCount(){
  //     return this.$store.getters.cartItemCount;
  //   }
  // }
};
Minicart;
</script>

<style>
</style>