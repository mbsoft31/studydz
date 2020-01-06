<template>
  <div class="flex min-h-screen">
    <div id="right-side" class="relative w-3/5 bg-cover">
      <div class="absolute inset-0 bg-indigo-900 opacity-75"></div>
      <div class="py-4 px-6 absolute inset-0">
        <header class="text-gray-200">
          <fi icon="drafting-compass" size="3x"></fi>
          <span class="inline-block ml-2 font-semibold text-3xl">StudyDZ</span>
        </header>
        <main class="my-16 p-32 text-gray-200">
          <h2 class="mb-16 font-semibold text-3xl text-center">Discover the most resourcefull educational platform in Algeria</h2>
          <p class="text-sm text-center font-semibold"></p>
        </main>
      </div>
    </div>
    <div class="w-2/5 py-4 px-6 bg-gray-200">

      <header class="flex justify-end">
        <button @click="component='register'" :class="(component=='register')?'active':''" class="px-3 py-2 text-xs text-gray-900 font-semibold border rounded-l-full border-gray-900 hover:bg-indigo-900 hover:text-gray-200">SIGN UP</button>
        <button @click="component='login'" :class="(component=='login')?'active':''" class="px-3 py-2 text-xs text-gray-900 font-semibold border rounded-r-full border-gray-900 hover:bg-indigo-900 hover:text-gray-200">LOG IN</button>
      </header>

      <main id="form" class="mt-16 p-4">
        <h2 class="mb-4 text-3xl font-normal text-center text-gray-200" v-html="(component=='login')?'Login into your account':'Sign up for free'"></h2>
        <login v-if="component == 'login'"></login>
        <register v-else></register>
      </main>

    </div>
  </div>
</template>

<script>
  export default {
    props: ['action'],
    mounted() {
      this.component = this.action
    },
    data() {
      return {
        component: 'register'
      }
    }
  }
</script>

<style lang="scss" scoped>
  .active {
    @apply bg-indigo-900 text-gray-200;
  }
  #right-side {
    background-image: url("/images/img1.jpg");
  }
</style>