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
                                border-b-4 border-green-700 hover:border-green-500 rounded-full text-center mx-auto flex-row text-black">
                                +
                        </button>
                    </div>

                    <div class="overflow-auto mb-6">
                        <post></post>
                        <post></post>
                        <post></post>
                        <post></post>
                        <post></post>
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

    export default {
        components: {
            Post,
            AppLayout,
            Welcome,
        },
    }
</script>
