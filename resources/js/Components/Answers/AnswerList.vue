<template>
  <div class="flex flex-col px-5">
    <div v-for="answer in answers" :key="answer.id"
         class="border rounded-lg px-3 mb-5 cursor-pointer hover:bg-gray-300"
         :class="[getBackgroundColor(answer)]"
         @click="onAnswerClick(answer)">
      <p class="py-2 font-medium text-lg">{{ answer.text }}</p>
    </div>
  </div>
</template>
<script>
import getImageSourceMixin from '../../Mixins/getImageSourceMixin.js';

export default {
  name: 'AnswerList',
  props: {
    answers: Array,
    correctAnswerId: {
      type: Number,
      default: null,
    },
    isShowingCorrectAnswer: {
      type: Boolean,
      default: false,
    },
  },
  methods: {
    onAnswerClick(answer) {
      this.$emit('select-answer', answer);
    },
    getBackgroundColor(answer) {
      if (!this.isShowingCorrectAnswer) {
        return null;
      }

      const correctAnswerId = this.correctAnswerId;

      if (correctAnswerId === null) {
        return null;
      }

      if (answer.id === correctAnswerId) {
        return 'bg-green-400 hover:bg-green-400';
      }

      return 'bg-red-400 hover:bg-red-400';
    }
  },
  mixins: [getImageSourceMixin],
}
</script>
