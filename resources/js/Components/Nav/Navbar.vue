<template>
  <header class="w-100 bg-[#363946] lg:bg-white">
    <AboveNavbar/>
    <MainNavigationBar/>
    <UnderNavbar/>
  </header>
</template>

<script>

import AboveNavbar from './AboveNavbar.vue';
import MainNavigationBar from './MainNavigationBar.vue';
import UnderNavbar from "./UnderNavbar.vue";

export default {
  name: 'Navbar',
  components: {AboveNavbar, MainNavigationBar, UnderNavbar, },
}
</script>


