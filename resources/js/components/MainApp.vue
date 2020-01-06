<template>
<div id="main-app" class="bg-gray-200">
    <slot></slot>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Main component mounted')
        }
    }
</script>

<style>
    #main-app * {
        box-sizing: border-box;
    }
</style>
