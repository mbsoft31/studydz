<template>
    <div>
        <p class="cursor-pointer" @click="signin">test</p>
    </div>
</template>

<script>
    export default {
        mounted() {
        },
        data() {
            return {
                signedIn: false,
                api: null,
                user: null
            }
        },
        methods: {
            signin() {
                if (!this.signedIn)
                    this.$getGapiClient()
                        .then(gapi => {
                            this.signedIn = true
                            this.api = gapi;
                            console.log("Google signed in")
                        })
            }
        }
    }
</script>
