<template>
  <div class="mb-3">
    <div class="flex justify-between mb-1">
      <span class="text-base font-medium text-[#d74b1f]"></span>
      <span class="text-sm font-medium text-[#d74b1f]">{{ current }} / {{ max }}</span>
    </div>
    <div class="w-full bg-gray-200 rounded-full h-4">
      <div class="bg-[#d74b1f] h-4 rounded-full" :style="{ 'width': `${calculatePercentage()}%` }"></div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ProgressBar',
  props: {
    current: Number,
    max: Number,
  },
  methods: {
    calculatePercentage() {
      return (this.current / this.max) * 100;
    }
  }
}
</script>
