<template>
  <div class="container mx-auto px-5 lg:px-0">
    <h1 class="text-4xl my-5 font-medium">{{ quizz.title }}</h1>
    <p class="max-w-4xl pb-4 text-gray-800">{{ quizz.description }}</p>

    <div v-if="hasQuizzStarted" class="my-12 mx-auto flex flex-col max-w-2xl">
      <ProgressBar :current="currentQuestionIndex + 1" :max="lastQuestionIndex + 1" />
      <QuestionCard :question="currentQuestion" @select-answer="handleSelectedAnswer" />
    </div>

    <div class="mx-auto my-12 shadow-md overflow-hidden rounded flex flex-col max-w-2xl" v-else>
      <img :src="getImageSourceForItem(quizz)" :alt="getImageAltTextForItem(quizz)">
      <h2 class="text-center text-3xl font-medium p-4">{{ quizz.title }}</h2>
      <PrimaryButton class="w-1/3 mx-auto mb-5" @click="startQuizz">Start Quiz</PrimaryButton>
    </div>

  </div>
</template>

<script>
import PrimaryButton from '../Components/Buttons/PrimaryButton.vue';
import QuestionCard from '../Components/Cards/QuestionCard.vue';
import getImageSourceMixin from '../mixins/getImageSourceMixin';
import ProgressBar from '../Components/ProgressBar.vue';

export default {
  name: 'ShowQuizz',
  components: {ProgressBar, QuestionCard, PrimaryButton},
  props: {
    quizz: Object,
  },
  data() {
    return {
      hasQuizzStarted: false,
      currentQuestionIndex: 0,
      currentQuestion: null,
    };
  },
  computed: {
    questions() {
      return this.quizz.questions;
    },
    lastQuestionIndex() {
      return this.questions.length - 1;
    }
  },
  methods: {
    startQuizz() {
      this.hasQuizzStarted = true;
      this.updateCurrentQuestion();
    },
    handleSelectedAnswer(answer) {
      if (!this.hasMoreQuestions()) {
        alert('You have finished the quiz!');
        return;
      }

      this.currentQuestionIndex += 1;
      this.updateCurrentQuestion();

      console.log(answer.id, answer.text);
    },
    updateCurrentQuestion() {
      this.currentQuestion = this.questions[this.currentQuestionIndex];
    },
    hasMoreQuestions() {
      return this.currentQuestionIndex + 1 < this.lastQuestionIndex;
    }
  },
  mixins: [getImageSourceMixin],
}
</script>
