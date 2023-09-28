<template>
  <div
    class="outlined-small-button flex rounded cursor-pointer border-2 px-2 py-1 text-white"
    @click="onClick"
  >
    <slot></slot>
  </div>
</template>

<script>
export default {
  name: 'SmallOutlinedButton',
  props: {
    isSmall: Boolean,
    default: false,
  },
  methods: {
    onClick() {
      this.$emit('click');
    }
  }
}
</script>

<style lang="scss" scoped>
.outlined-small-button {
  border-color: var(--lightGray);
}
</style>

