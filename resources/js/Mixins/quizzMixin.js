const quizzMixin = {
  props: {
    quizz: Object,
  },
  data() {
    return {
      currentQuestionIndex: 0,
      currentQuestion: null,
    }
  },
  computed: {
    questions() {
      return this.quizz.questions;
    },
    lastQuestionIndex() {
      return this.questions.length - 1;
    },
  },

  methods: {
    updateCurrentQuestion() {
      this.currentQuestion = this.questions[this.currentQuestionIndex];
    },
    hasMoreQuestions() {
      return this.currentQuestionIndex + 1 < this.lastQuestionIndex;
    },
  }
};

export default quizzMixin;
