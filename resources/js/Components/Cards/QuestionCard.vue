<template>
  <div class="shadow-md overflow-hidden rounded">
    <QuestionHeader :question="question" />
    <AnswerList v-if="areAllAnswersTextOnly" :answers="answers" @select-answer="handleSelectedAnswer"/>
    <AnswerGrid v-else :answers="answers" @select-answer="handleSelectedAnswer"/>
  </div>
</template>

<script>
import AnswerGrid from '../Answers/AnswerGrid.vue';
import AnswerList from '../Answers/AnswerList.vue';
import ProgressBar from '../ProgressBar.vue';
import getImageSourceMixin from '../../Mixins/getImageSourceMixin.js';
import QuestionHeader from '../Quizz/QuizzHeader.vue';

export default {
  name: 'QuestionCard',
  components: {QuestionHeader, AnswerGrid, AnswerList, ProgressBar},
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
