<template>
  <div class="primary-button flex justify-center px-4 py-2 text-white rounded cursor-pointer border-b-2"
       @click="onClick">
    <slot></slot>
  </div>
</template>

<script>
export default {
  name: 'PrimaryButton',
  methods: {
    onClick() {
      this.$emit('click');
    }
  }
}
</script>

<style lang="scss" scoped>
.primary-button {
  background: var(--orange);
  border-color: var(--darkOrange);

  &:hover {
    background-color: var(--orangeOnHover);
    border-color: var(--darkOrangeOnHover);
  }
}
</style>

