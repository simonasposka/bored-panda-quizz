<template>
  <div>
    <img :src="imageSrc" :alt="imageAlt" class="w-full">
    <h2 class="text-center text-3xl font-medium p-4">{{ title }}</h2>
  </div>
</template>

<script>
export default {
  name: 'QuizzHeader',
  props: {
    imageSrc: String,
    imageAlt: String,
    title: String,
    question: Object,
  },
}
</script>
