<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 h-32">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <body>
                        <div class="text-8xl title md:rounded-b-md mt-6 text-center mx-auto"
                             style="font-family: 'Raleway', sans-serif !important;"> Screams
                        </div>
                        <div class="flex flex-row my-3">
                            <button class="bg-green-400 hover:bg-green-300 text-white font-bold py-2 px-4
                                    border-b-4 border-green-700 hover:border-green-500 rounded-full text-center ml-auto mr-1 flex-row text-black"
                                    @click="submitPost">
                                    New Scream
                            </button>
                            <button class="bg-blue-400 hover:bg-blue-300 text-white font-bold py-2 px-4
                                    border-b-4 border-blue-700 hover:border-blue-500 rounded-full text-center mr-auto ml-1 flex-row text-black"
                                    @click="getPosts">
                                    Refresh
                            </button>
                            <div class="flex flex-row">
                                <input v-model="post.content" type="text">
                            </div>

                        </div>

                        <div class="overflow-auto mb-12">
                            <post v-for="post in posts" :post="post" :key="post.id"></post>
                        </div>

                    </body>

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
        data(){
            return {
                post:{
                    content: null
                },
                posts: []
            }
        },
        methods: {
            getPosts(){
                axios.get('/posts').then(rsp=>{
                    this.posts= rsp.data.data;
                })
            },
            submitPost(){
                axios.post('/posts', this.post);
            }
        },
        mounted(){
            this.getPosts();
        }
    }
</script>
