<template>
  <div class="shadow-md overflow-hidden rounded">
    <img :src="imageSrc" :alt="imageAlt" class="w-full">
    <h2 class="text-center text-3xl font-medium p-4">{{ title }}</h2>
    <p v-if="showDescription" class="px-4 pb-4 text-gray-800">{{ description }}</p>
    <PrimaryButton class="w-1/3 mx-auto mb-5" @click="handlePlayOtherQuizzes">Play Other Quizzes</PrimaryButton>
  </div>
</template>

<script>
import PrimaryButton from '../Buttons/PrimaryButton.vue';

export default {
  name: 'QuizzResult',
  components: {PrimaryButton},
  props: {
    imageSrc: String,
    imageAlt: String,
    title: String,
    description: {
      type: String,
      default: null,
    }
  },
  computed: {
    showDescription() {
      return this.description !== null;
    }
  },
  methods: {
    handlePlayOtherQuizzes() {
      window.location.href = '/';
    }
  }
}
</script>
