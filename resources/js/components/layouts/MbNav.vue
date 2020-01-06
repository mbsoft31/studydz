<template>
<div class="flex justify-between items-center py-4 bg-indigo-900">
  <div class="flex-shrink-0 ml-10 cursor-pointer">
    <fi icon="drafting-compass" size="2x" class="text-red-600"></fi>
    <span class="ml-1 text-3xl text-blue-200 font-semibold">StudyDZ</span>
  </div>
  <i class="fas fa-bars fa-2x visible md:invisible mr-10 md:mr-0 text-blue-200 cursor-pointer"></i>
  <ul class="hidden md:flex overflow-x-hidden mr-10 font-semibold">
    <li class="mr-6 p-1 border-b-2 border-red-600">
      <a class="text-blue-200 cursor-default" href="#">Home</a>
    </li>
    <li class="mr-6 p-1">
      <a class="text-white hover:text-blue-300" href="/admin/auth/login">login</a>
    </li>
    <li class="mr-6 p-1">
      <a class="text-white hover:text-blue-300" href="/admin/auth/register">signup</a>
    </li>
  </ul>
</div>
</template>

<script>
    export default {
        name: 'mb-nav',
        mounted() {
            axios.get('/api/sections')
            .then((response) => {
                let pages = response.data
                //console.log(pages.data)
                this.pages = pages.data
            })
        },
        data() {
            return {
                pages: []
            }
        }
    }
</script>
