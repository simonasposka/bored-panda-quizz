<template>
  <div>
    <QuizzResult v-if="isOutcomeDetermined"
                 :image-src="getImageSourceForItem(outcome)"
                 :image-alt="getImageAltTextForItem(outcome)"
                 :title="outcome.title"
                 :description="outcome.description"/>

    <div v-else>
      <ProgressBar :current="currentQuestionNumber" :max="lastQuestionNumber"/>
      <div class="shadow-md overflow-hidden rounded">
        <QuizzHeader
            :image-src="getImageSourceForItem(currentQuestion)"
            :image-alt="getImageAltTextForItem(currentQuestion)"
            :title="currentQuestion.text"/>

        <Answers :answers="answers" @select-answer="handleSelectedAnswer"/>
      </div>
    </div>
  </div>
</template>

<script>
import {parseOutcomeIdFromAnswer} from '../../Util/parser.js';
import {getOutcomeIdWithHighestScore, getNewOutcomeScore} from '../../Util/outcome.js';
import quizzMixin from '../../Mixins/quizzMixin.js';
import getImageSourceMixin from '../../Mixins/getImageSourceMixin.js';

import QuizzResult from './QuizzResult.vue';
import ProgressBar from '../ProgressBar.vue';
import QuestionCard from '../Cards/QuestionCard.vue';
import AnswerList from '../Answers/AnswerList.vue';
import AnswerGrid from '../Answers/AnswerGrid.vue';
import QuizzHeader from './QuizzHeader.vue';
import Answers from './Outcome/Answers.vue';

export default {
  name: 'OutcomeQuizz',
  mixins: [quizzMixin, getImageSourceMixin],
  components: {Answers, QuizzHeader, AnswerGrid, AnswerList, QuizzResult, ProgressBar, QuestionCard,},
  data() {
    return {
      outcomeIdToScoreMap: {},
      outcome: null,
    }
  },
  computed: {
    outcomes() {
      return this.quizz.outcomes;
    },
    isOutcomeDetermined() {
      return this.outcome !== null;
    },
  },
  methods: {
    handleSelectedAnswer(answer) {
      this.incrementOutcomeScore(answer);

      if (!this.hasMoreQuestions()) {
        this.determineOutcome();
        return;
      }

      this.moveToNextQuestion();
    },
    incrementOutcomeScore(answer) {
      const outcomeId = parseOutcomeIdFromAnswer(answer);

      if (outcomeId === null) {
        console.error('Could not parse outcome_id from answer.');
        return;
      }

      this.outcomeIdToScoreMap[outcomeId] = getNewOutcomeScore(outcomeId, this.outcomeIdToScoreMap);
    },
    determineOutcome() {
      const outcomeIdWithHighestScore = getOutcomeIdWithHighestScore(this.outcomeIdToScoreMap);

      this.outcome = this.outcomes.find(outcome => outcome.id === outcomeIdWithHighestScore);
    }
  }
}
</script>
