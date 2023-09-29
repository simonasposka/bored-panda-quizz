<template>
  <div>
    <div v-if="isOutcomeDetermined">
      <Outcome :outcome="outcome" />
    </div>

    <div v-else>
      <ProgressBar :current="currentQuestionIndex + 1" :max="lastQuestionIndex + 1" />
      <QuestionCard :question="currentQuestion" @select-answer="handleSelectedAnswer"/>
    </div>
  </div>
</template>

<script>
import Outcome from './Outcome.vue';
import ProgressBar from '../ProgressBar.vue';
import QuestionCard from '../Cards/QuestionCard.vue';
import quizzMixin from '../../Mixins/quizzMixin.js';

export default {
  name: 'OutcomeQuizz',
  mixins: [quizzMixin],
  components: {Outcome, ProgressBar, QuestionCard,},
  data() {
    return {
      outcomeIdToScoreMap: {},
      outcome: null,
    }
  },
  created() {
    this.updateCurrentQuestion();
  },
  computed: {
    outcomes() {
      return this.quizz.outcomes;
    },
    isOutcomeDetermined() {
      return this.outcome !== null;
    }
  },
  methods: {
    handleSelectedAnswer(answer) {
      this.incrementOutcomeScore(answer);

      if (!this.hasMoreQuestions()) {
        this.calculateOutcome();
        return;
      }

      this.currentQuestionIndex += 1;
      this.updateCurrentQuestion();
    },
    incrementOutcomeScore(answer) {
      const outcomeId = answer.answer_outcomes[0].outcome_id;

      if (this.outcomeIdToScoreMap.hasOwnProperty(outcomeId)) {
        this.outcomeIdToScoreMap[outcomeId] += 1;
        return;
      }

      this.outcomeIdToScoreMap[outcomeId] = 0;
    },
    calculateOutcome() {
      const outcomeIds = Object.keys(this.outcomeIdToScoreMap);
      let outcomeIdWithHighestScore = null;
      let max = -1;

      outcomeIds.forEach(outcomeId => {
        const score = this.outcomeIdToScoreMap[outcomeId];

        if (score > max) {
          max = score;
          outcomeIdWithHighestScore = outcomeId;
        }
      });

      this.outcome = this.outcomes.find(outcome => outcome.id === parseInt(outcomeIdWithHighestScore));
    }
  }
}
</script>
