<template>
    <app-layout>
        <div class="py-12">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 overflow-auto">
                <div class="bg-white shadow-xl sm:rounded-lg py-6 my-6">

                    <div class="text-8xl title md:rounded-b-md mt-6 text-center mx-auto"
                         style="font-family: 'Raleway', sans-serif !important;"> The Well
                    </div>

                    <div class="flex flex-row my-3 ">
                        <input type="file" id="upload-btn" @change="selectImage" name="img" hidden>
                        <label class="bg-blue-400 hover:bg-blue-300 text-white font-bold py-2 px-4
                                    border-b-4 border-blue-700 hover:border-blue-500 rounded-full text-center ml-auto text-black" for="upload-btn">
                            +
                        </label>
                        <input v-model="post.content" type="text" id="textbar" :placeholder="photoname"
                               class="rounded-full border-gray-300 text-center ml-1 mr-1 w-1/3">
                        <button class="bg-green-400 hover:bg-green-300 text-white font-bold py-2 px-4
                                    border-b-4 border-green-700 hover:border-green-500 rounded-full text-center mr-auto text-black"
                                @click="submitPost">
                            Scream!
                        </button>
                    </div>

                    <div class="bg-red-200 text-red-800 p-6 rounded-md shadow-md my-3" v-if="errors">
                        <div v-for="error in errors">
                            <p v-for="message in error">
                                {{ message }}
                            </p>
                        </div>
                    </div>

                    <div class="overflow-auto mb-12" id="posts" style="max-height: 25rem;">
                        <post v-for="post in posts" :post="post" :key="post.id"></post>
                    </div>

                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import Label from "../Jetstream/Label";
const uploadbtn= document.getElementById('upload-btn');

import AppLayout from '@/Layouts/AppLayout'
import Welcome from '@/Jetstream/Welcome'
import Post from "../Post";
import Input from "../Jetstream/Input";
import Button from "../Jetstream/Button";

export default {
    components: {
        Label,
        Button,
        Input,
        Post,
        AppLayout,
        Welcome,
    },
    data() {
        return {
            photo: null,
            photoname: null,
            post: {
                content: null
            },
            posts: [],
            errors: null,
        }
    },
    methods: {
        getPosts() {
            axios.get('/posts')
                .then(rsp => {
                    this.posts = rsp.data.data;
                })
        },
        submitPost() {
            axios.post('/posts', this.post)
                .then((rsp) => {
                    this.post.content = null;
                    this.errors = null;
                    this.posts.push(rsp.data.data);
                })
                .catch((err) => {
                    this.errors = err.response.data.errors
                });
        },
        selectImage(event){
            this.photo= event.target.files[0];
            this.photoname= event.target.files[0].name;
            this.uploadImage();
        },

        uploadImage(){
            let data= new FormData();
            data.append('image', this.photo);
            axios.post('/upload', data).then(function (response) {
                console.log(response.data);
            });
        },
    },
    mounted() {
        this.getPosts();
    }
}
</script>
