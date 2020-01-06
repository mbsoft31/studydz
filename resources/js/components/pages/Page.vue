<template>

    <div id="page-detail">

        <div class="flex flex-col justify-center items-center h-64 w-full mb-4 bg-cover" style="background-image: url('/images/bg1.jpg')">
            <h1 class="text-3xl font-serif font-semibold text-gray-100" v-if="currentpage!=null">{{ currentpage.title }}</h1>
        </div>

        <div class="container mx-auto flex justify-around items-start mx-2 mb-8">
            page contents
        </div>

        <footer class="bg-indigo-800 h-64 text-white p-4">
            <div class="container mx-auto text-center">

                <span class="text-lg font-semibold">All right reserved &copy; MBsoft 2020</span>
                
            </div>
        </footer>

    </div>

</template>

<script>

    import data from '../../assets/utils/pages.js'

    export default {
        props: ['page', 'subpage'],
        mounted() {
            let fn = data.getdata
            let pages = data.pages
            var tmp;
            axios.get('/api/sections')
            .then((response) => {
                pages = response.data
                tmp = fn(this.page,this.subpage)
                console.log(tmp)
                this.parent = tmp.parent
                this.currentpage = tmp.currentpage
            })
        },
        data() {
            return {
                parent: {},
                currentpage: {},
            }
        }
    }
</script>

<style lang="scss" scoped>
    #page-detail {
        @apply mx-auto bg-white;
    }
    .card {
        @apply block w-1/4 mx-2 border rounded-lg shadow-md;
    }

    .card-header {
        @apply block px-4 py-2 rounded-t-lg text-white text-lg font-semibold text-center bg-blue-600;
    }

    .list-item {
        @apply px-4 py-2 border-b text-gray-900;
        &:hover {
            @apply bg-gray-200;
        }
    }
</style>
