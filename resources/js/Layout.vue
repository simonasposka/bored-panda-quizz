<template>
  <main class="font-roboto">
    <Navbar/>

    <slot></slot>
  </main>
</template>

<script>
import Navbar from './Components/Nav/Navbar.vue';

export default {
  name: 'layout',
  components: { Navbar },
}
</script>

