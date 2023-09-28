<template>
  <div
    class="outlined-button flex rounded cursor-pointer border-2 px-4 py-2"
    @click="onClick"
  >
    <slot></slot>
  </div>
</template>

<script>
export default {
  name: 'OutlinedButton',
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
.outlined-button {
  color: var(--gray);
  border-color: var(--lightGray);

  &:hover {
    color: white;
    background-color: var(--lightGrayOnHover);
    border-color: var(--lightGrayOnHover);
  }
}
</style>

