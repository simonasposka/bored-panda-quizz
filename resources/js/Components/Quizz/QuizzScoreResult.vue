<template>
  <div class="shadow-md overflow-hidden rounded">
    <h2 class="text-center text-3xl font-medium p-4">Your score: {{ score }}  out of {{ questionsCount }}!</h2>
    <PrimaryButton class="w-1/3 mx-auto mb-5" @click="handlePlayOtherQuizzes">Play Other Quizzes</PrimaryButton>
  </div>
</template>

<script>
import PrimaryButton from '../Buttons/PrimaryButton.vue';

export default {
  name: 'QuizzScoreResult',
  components: {PrimaryButton},
  props: {
    score: Number,
    questionsCount: Number
  },
  methods: {
    handlePlayOtherQuizzes() {
      window.location.href = '/';
    }
  }
}
</script>
