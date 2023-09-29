<template>
    <div class="flex flex-col px-5">
      <div v-for="answer in answers" :key="answer.id" class="border rounded-lg px-3 mb-5 cursor-pointer hover:bg-gray-300" @click="onAnswerClick(answer)">
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
  },
  methods: {
    onAnswerClick(answer) {
      this.$emit('select-answer', answer);
    },
  },
  mixins: [getImageSourceMixin],
}
</script>
