<template>
        <div class="flex w-1/2 bg-gray-100 mx-auto my-1 border-t-2 border-b-2">
            <div class="title flex flex-row ml-2.5 w-100 overfi" style="font-family: 'Raleway', sans-serif !important;">{{userName}}</div>
            <div class="flex md:flex-row ml-2 overflow-auto">
                <div>{{postContent}}</div>
            </div>
        </div>
</template>

<script>
export default {
    name: "Post",
    data(){
        return {
            userName: 'teo',
            postContent: 'aaaaaaAAAAAAHHHHHssssssssddsdsdsdaaaaaaAAAAAAHHHHHssssssssddsdsdsdaaaaaaAAAAAAHHHHHssssssssddsdsdsd',
            posts: []
        }
    }
}
</script>

<style scoped>

</style>
