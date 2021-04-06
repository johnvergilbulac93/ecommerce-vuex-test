<template>
  <div>
    <AppHeader />
    <div class="container-fluid">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import AppHeader from "./Header";
export default {
  name: "Home",
  components: { AppHeader }
};
</script>

