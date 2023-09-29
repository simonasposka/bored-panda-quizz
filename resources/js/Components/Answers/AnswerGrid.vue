<template>
  <div class="flex flex-wrap justify-center">
    <div v-for="answer in answers" :key="answer.id" class="flex flex-col mx-2 text-center">
      <div class="w-[200px] h-[200px] bg-cover bg-center cursor-pointer hover:brightness-75"
           :style="{ 'background-image': `url(${getImageSourceForItem(answer)})` }"
           @click="onAnswerClick(answer)">
      </div>
      <p class="py-2 font-medium text-lg">{{ answer.text }}</p>
    </div>
  </div>
</template>

<script>
import getImageSourceMixin from '../../Mixins/getImageSourceMixin.js';

export default {
  name: 'AnswerGrid',
  props: {
    answers: Array,
  },
  methods: {
    onAnswerClick(answer) {
      this.$emit('select-answer', answer);
    },
  },
  mixins: [getImageSourceMixin],
}
</script>
