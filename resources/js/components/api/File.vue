<template>
    <div>
        <p>test</p>
        <google-signin-btn @click="signin"></google-signin-btn>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.$gapi.isSignedIn()
            .then(result => {
                this.signedIn = result;
                console.log(result ? 'Signed in' : 'Signed out')
            })
        },
        data() {
            return {
                signedIn: false,
                user: {}
            }
        },
        methods: {
            signin(){
                if(!this.signedIn)
                    this.$gapi.signIn()
                        .then(user => {
                            console.log('Signed in as %s', user.name)
                        })
                        .catch(err => {
                            console.error('Not signed in: %s', err.error)
                        })
            }
        }
    }
</script>
