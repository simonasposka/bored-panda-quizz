<template>
  <div class="container flex mx-auto justify-between font-medium text-base py-2 px-5">
    <div class="flex">
      <div class="flex-col justify-center">
        <a href="/">
          <img class="hidden lg:inline-block h-[80px]" src="../../../assets/images/logo.png" alt="BoredPanda dark logo">
          <img class="lg:hidden h-[37px]" src="../../../assets/images/logo-light.png" alt="BoredPanda light logo">
        </a>
      </div>

      <div class="ml-8 hidden lg:flex lg:flex-col justify-center">
        <div class="flex">
          <a href="https://www.boredpanda.com/art/" class="mr-8 hover:text-orange-700">Art</a>
          <a href="https://www.boredpanda.com/animals/" class="mr-8 hover:text-orange-700">Animals</a>
          <a href="https://www.boredpanda.com/funny/" class="mr-8 hover:text-orange-700">Funny</a>
          <a href="/" class="mr-8 text-orange-700">Quizzes</a>
          <a href="https://www.boredpanda.com/">More</a>
        </div>
      </div>
    </div>

    <div class="flex flex-col justify-center">
      <div class="hidden lg:flex">
        <PrimaryButton @click="onAddPostClick" class="mr-4">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
               stroke="currentColor" class="w-6 h-6 mr-2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z"/>
          </svg>
          Add post
        </PrimaryButton>

        <OutlinedButton @click="onAddPostClick">Login / Register</OutlinedButton>
      </div>
      <SmallOutlinedButton class="lg:hidden text-sm" :is-small="true" @click="onAddPostClick">Login
      </SmallOutlinedButton>
    </div>
  </div>
</template>

<script>
import SmallOutlinedButton from "../Buttons/SmallOutlinedButton.vue";
import OutlinedButton from "../Buttons/OutlinedButton.vue";
import PrimaryButton from "../Buttons/PrimaryButton.vue";

export default {
  name: 'MainNavigationBar',
  components: {PrimaryButton, OutlinedButton, SmallOutlinedButton},
  methods: {
    onAddPostClick() {
      window.location.href = 'https://www.boredpanda.com/add-new-post/';
    },
  }
}
</script>
