<template>
    <div class="flex w-1/2 bg-gray-100 mx-auto my-1 border-t-2 border-b-2 justify-between">
        <div>
            <div class="title flex flex-row ml-2.5 w-100 overfi" style="font-family: 'Raleway', sans-serif !important;">
                <inertia-link :href="route('user', post.user.id )">{{ post.user.name }}</inertia-link>
            </div>
            <div class="ml-2">
                <div class="truncate max-w-full">{{ post.content }}</div>
            </div>
        </div>
        <div class="">
            <a @click="patpat" class="cursor-pointer hover:bg-purple-500 hover:text-white p-1 rounded-full flex transition-all items-center flex-row ease-in-out duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
            </svg>

                <span class="leading-none text-xs">{{ post.pats.length }}</span>

            </a>
        </div>

    </div>
</template>

<script>
export default {
    name: "Post",
    data() {

    },
    props: {
        post: {}
    },
    methods: {
        patpat() {
            axios.post('/pat', {
                target_type: 'post',
                target_id: this.post.id
            })
        }
    }
}
</script>
