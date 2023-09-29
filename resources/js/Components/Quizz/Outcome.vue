<template>
  <div class="shadow-md overflow-hidden rounded">
    <img :src="getImageSourceForItem(outcome)" :alt="getImageAltTextForItem(outcome)" class="w-full">
    <h2 class="text-center text-3xl font-medium p-4">{{ outcome.title }}</h2>
    <p class="px-4 pb-4 text-gray-800">{{ outcome.description }}</p>
  </div>
</template>

<script>
import getImageSourceMixin from '../../Mixins/getImageSourceMixin.js';

export default {
  name: 'Outcome',
  props: {
    outcome: Object
  },
  mixins: [getImageSourceMixin],

}
</script>
