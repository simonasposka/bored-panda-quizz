<template>
  <header class="w-100 bg-[#363946] lg:bg-white">
    <PandaHeader/>
    <MainNavigationBar/>
    <UnderNavbar/>
  </header>
</template>

<script>

import PandaHeader from './PandaHeader.vue';
import MainNavigationBar from './MainNavigationBar.vue';
import UnderNavbar from "./UnderNavbar.vue";

export default {
  name: 'Navbar',
  components: {PandaHeader, MainNavigationBar, UnderNavbar, },
}
</script>


