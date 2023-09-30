const quizzMixin = {
  props: {
    quizz: Object,
  },
  data() {
    return {
      currentQuestionIndex: 0,
    }
  },
  computed: {
    questions() {
      return this.quizz.questions;
    },
    lastQuestionIndex() {
      return this.questions.length - 1;
    },
    answers() {
      return this.currentQuestion.answers;
    },
    currentQuestionNumber() {
      return this.currentQuestionIndex + 1;
    },
    lastQuestionNumber() {
      return this.lastQuestionIndex + 1;
    },
    currentQuestion() {
      return this.questions[this.currentQuestionIndex];
    }
  },

  methods: {
    moveToNextQuestion() {
      this.currentQuestionIndex += 1;
    },
    hasMoreQuestions() {
      return this.currentQuestionIndex + 1 <= this.lastQuestionIndex;
    },
  }
};

export default quizzMixin;
