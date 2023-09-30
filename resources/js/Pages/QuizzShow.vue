<template>
  <div class="px-5">
    <div class="flex justify-center mt-10">
      <div class="max-w-2xl">
        <h1 class="text-4xl my-5 font-medium">{{ quizz.title }}</h1>
        <p class="max-w-4xl pb-4 text-gray-800">{{ quizz.description }}</p>
      </div>
    </div>

    <div v-if="hasQuizzStarted" class="mb-12 mx-auto flex flex-col max-w-2xl">
      <OutcomeQuizz v-if="isOutcomeQuizz" :quizz="quizz"/>
      <PickCorrectQuizz v-else-if="isPickCorrectQuizz" :quizz="quizz"/>
    </div>

    <div v-else class="mx-auto mb-12 shadow-md overflow-hidden rounded flex flex-col max-w-2xl">
      <QuizzHeader
          :image-src="getImageSourceForItem(quizz)"
          :image-alt="getImageAltTextForItem(quizz)"
          :title="quizz.title"/>
      <PrimaryButton class="w-1/3 mx-auto mb-5" @click="startQuizz">Start Quiz</PrimaryButton>
    </div>

  </div>
</template>

<script>
import getImageSourceMixin from '../Mixins/getImageSourceMixin.js';
import PrimaryButton from '../Components/Buttons/PrimaryButton.vue';
import OutcomeQuizz from '../Components/Quizz/OutcomeQuizz.vue';
import PickCorrectQuizz from '../Components/Quizz/PickCorrectQuizz.vue';
import QuizzHeader from '../Components/Quizz/QuizzHeader.vue';

export default {
  name: 'QuizzShow',
  components: {QuizzHeader, OutcomeQuizz, PickCorrectQuizz, PrimaryButton},
  mixins: [getImageSourceMixin],
  props: {
    quizz: Object,
  },
  data() {
    return {
      hasQuizzStarted: false,
    };
  },
  computed: {
    isOutcomeQuizz() {
      return this.quizz.type === 'OUTCOME';
    },

    isPickCorrectQuizz() {
      return this.quizz.type === 'PICK_CORRECT';
    },
  },
  methods: {
    startQuizz() {
      this.hasQuizzStarted = true;
    },
  },
}
</script>
