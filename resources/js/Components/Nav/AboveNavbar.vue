<template>
  <div>
    <div class="cover hidden lg:block"></div>
    <div class="panda hidden lg:block"></div>
  </div>
</template>

<script>
export default {
  name: 'AboveNavbar',
}
</script>

<style scoped>
.cover {
  background: #fff url("/images/header-background.jpg") repeat-x center top;
  height: 199px;
  max-width: 100%;
}

.panda {
  background: url("/images/header-panda.svg") no-repeat 0 0;
  background-size: contain;
  width: 220px;
  height: 116px;
  position: absolute;
  top: 68px;
  left: 325px;
}
</style>
