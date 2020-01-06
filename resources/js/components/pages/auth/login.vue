<template>
  <form action="">
    <div class="flex flex-col mb-4">
      <label class="mb-1 text-gray-500 font-semibold" for="username">Username</label>
      <input class="px-2 py-2 appearance-none text-lg text-gray-800 bg-transparent border-b border-gray-500" type="text" id="username">
    </div>
    <div class="flex flex-col mb-4">
      <label class="mb-1 text-gray-500 font-semibold" for="password">Password</label>
      <input class="px-2 py-2 appearance-none text-lg text-gray-800 bg-transparent border-b border-gray-500" type="password" id="password">
    </div>
    <div class="flex flex-col mb-4">
      <label for="remember" class="flex items-center">
        <input class="" type="checkbox" id="remember">
        <span class="ml-2 text-sm">Remember me</span>
      </label>
    </div>
    <div class="flex items-center mb-4">
      <button class="px-4 py-2 bg-orange-600 rounded-full font-semibold">LOG IN</button>
      <a class="ml-4 text-gray-500 underline" href="/admin/auth/register">I am not a member yet</a>
    </div>
  </form>
</template>

<script>
  export default {
  }
</script>

<style lang="scss" scoped>
  label {
    @apply text-gray-800;
  }

  #form button {
    @apply bg-indigo-800 text-gray-200;
    &:hover {
      @apply bg-indigo-900 text-white;
    }
  }

  #form a {
    @apply text-indigo-700;
    &:hover {
      @apply text-indigo-900;
    }
  }
</style>