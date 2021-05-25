<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 overflow-auto">
                <div class="bg-white shadow-xl sm:rounded-lg py-6 my-6">

                    <div class="text-8xl title md:rounded-b-md mt-6 text-center mx-auto"
                         style="font-family: 'Raleway', sans-serif !important;">{{ user.name }}'s Well

                        <a @click="patpat" class="cursor-pointer hover:bg-purple-500 hover:text-white p-1 rounded-full flex transition-all items-center flex-row ease-in-out duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>

                            <span class="leading-none text-xs">{{ user.pats.length }}</span>

                        </a>

                    </div>

                    <div class="overflow-auto mb-12" id="posts" style="max-height: 25rem;">
                        <post v-for="post in posts.data" :post="post" :key="post.id"></post>
                    </div>

                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import Welcome from '@/Jetstream/Welcome'
import Post from "../Post";
import Input from "../Jetstream/Input";

export default {
    components: {
        Input,
        Post,
        AppLayout,
        Welcome,
    },

    props: {
        user: {
            type: Object,
            required: true,
        },
        posts: {
            type: Array,
            required: false,
        }
    },

    data() {
        return {
        }
    },
    methods: {
        patpat() {
            axios.post('/pat', {
                target_type: 'user',
                target_id: this.user.id
            })
        }
    },
    mounted() {
    }
}
</script>
