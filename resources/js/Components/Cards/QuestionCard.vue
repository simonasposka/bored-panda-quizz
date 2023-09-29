<template>
  <div class="shadow-md overflow-hidden rounded">
    <img :src="getImageSourceForItem(question)" :alt="getImageAltTextForItem(question)" class="w-full">
    <h2 class="text-center text-3xl font-medium p-4">{{ question.text }}</h2>

    <AnswerList v-if="areAllAnswersTextOnly" :answers="answers" @select-answer="handleSelectedAnswer"/>
    <AnswerGrid v-else :answers="answers" @select-answer="handleSelectedAnswer"/>
  </div>
</template>

<script>
import AnswerGrid from '../Answers/AnswerGrid.vue';
import AnswerList from '../Answers/AnswerList.vue';
import ProgressBar from '../ProgressBar.vue';
import getImageSourceMixin from '../../Mixins/getImageSourceMixin.js';

export default {
  name: 'QuestionCard',
  components: {AnswerGrid, AnswerList, ProgressBar},
  props: {
    question: Object,
  },
  computed: {
    answers() {
      return this.question.answers;
    },
    areAllAnswersTextOnly() {
      return this.answers.every(answer => answer.image === null);
    }
  },
  methods: {
    handleSelectedAnswer(answer) {
      this.$emit('select-answer', answer);
    },
  },
  mixins: [getImageSourceMixin],
}
</script>
