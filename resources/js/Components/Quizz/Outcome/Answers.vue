<template>
  <div>
    <AnswerList v-if="areAllAnswersTextOnly" :answers="answers" @select-answer="handleSelectedAnswer"/>
    <AnswerGrid v-else :answers="answers" @select-answer="handleSelectedAnswer"/>
  </div>
</template>

<script>
import AnswerList from '../../Answers/AnswerList.vue';
import AnswerGrid from '../../Answers/AnswerGrid.vue';

export default {
  name: 'Answers',
  components: {AnswerGrid, AnswerList},
  props: {
    answers: Array,
  },
  computed: {
    areAllAnswersTextOnly() {
      return this.answers.every(answer => answer.image === null);
    }
  },
  methods: {
    handleSelectedAnswer(answer) {
      this.$emit('select-answer', answer);
    }
  }
}
</script>
