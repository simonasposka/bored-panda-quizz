<template>
  <div>
    <QuizzScoreResult v-if="isFinished" :score="score" :questions-count="lastQuestionNumber"/>

    <div v-else>
      <ProgressBar :current="currentQuestionNumber" :max="lastQuestionNumber"/>

      <div class="shadow-md overflow-hidden rounded">
        <QuizzHeader :image-src="getImageSourceForItem(currentQuestion)"
                     :image-alt="getImageAltTextForItem(currentQuestion)"
                     :title="currentQuestion.text"/>

        <AnswerList :answers="answers"
                    :correct-answer-id="correctAnswerId"
                    :is-showing-correct-answer="isShowingCorrectAnswer"
                    @select-answer="handleSelectedAnswer"/>
      </div>
    </div>
  </div>
</template>

<script>
import {delay} from '../../Util/async.js';
import {parseCorrectAnswerFromQuestion} from '../../Util/parser.js';
import getImageSourceMixin from '../../Mixins/getImageSourceMixin.js';
import quizzMixin from '../../Mixins/quizzMixin.js';

import ProgressBar from '../ProgressBar.vue';
import QuestionCard from '../Cards/QuestionCard.vue';
import QuizzHeader from './QuizzHeader.vue';
import AnswerList from '../Answers/AnswerList.vue';
import QuizzResult from './QuizzResult.vue';
import QuizzScoreResult from './QuizzScoreResult.vue';

export default {
  name: 'PickCorrectQuizz',
  mixins: [quizzMixin, getImageSourceMixin],
  components: {QuizzScoreResult, QuizzResult, AnswerList, QuizzHeader, ProgressBar, QuestionCard,},
  data() {
    return {
      score: 0,
      isShowingCorrectAnswer: false,
      isFinished: false,
    }
  },
  computed: {
    correctAnswerId() {
      const correctAnswer = parseCorrectAnswerFromQuestion(this.currentQuestion);

      if (correctAnswer === null) {
        console.error('Could not determine correct answer');
        return null;
      }

      return correctAnswer['answer_id'];
    },
  },
  methods: {
    async handleSelectedAnswer(answer) {
      if (this.isShowingCorrectAnswer) return;

      this.isShowingCorrectAnswer = true;

      if (answer.id === this.correctAnswerId) {
        this.score += 1;
      }

      await delay(1000);

      if (!this.hasMoreQuestions()) {
        this.isFinished = true;
      }

      this.moveToNextQuestion();
      this.isShowingCorrectAnswer = false;
    },
  }
}
</script>
