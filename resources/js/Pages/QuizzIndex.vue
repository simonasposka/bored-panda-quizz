<template>
  <div class="container mx-auto px-5">
    <h1 class="text-4xl my-5 font-medium">Most Popular Quizzes</h1>

    <div class="grid my-5 gap-5 max-w-lg lg:max-w-7xl grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 mx-auto lg:mx-0">
      <div class="shadow-md overflow-hidden rounded flex flex-col" v-for="quizz in quizzes" :key="quizz.id">
        <a :href="`/quizzes/${quizz.slug}`">
          <img :src="getImageSourceForItem(quizz)" :alt="getImageAltTextForItem(quizz)" width="100%" height="100%">
        </a>

        <a :href="`/quizzes/${quizz.slug}`" class="hover:text-orange-700">
          <h2 class="text-3xl font-medium p-4">{{ quizz.title }}</h2>
        </a>
        <p class="px-4 pb-4 text-gray-800">{{ quizz.description }}</p>
      </div>
    </div>
  </div>
</template>


<script>

import getImageSourceMixin from '../Mixins/getImageSourceMixin.js';

export default {
  name: 'QuizzIndex',
  props: {
    quizzes: Array,
  },
  mixins: [getImageSourceMixin],
}
</script>

<style scoped>

</style>
