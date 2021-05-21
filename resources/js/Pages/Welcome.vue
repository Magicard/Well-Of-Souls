<template>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap" rel="stylesheet">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="mx-auto w-8/12 font-black content-center">
            <div class="flex flex-row flex-auto ">
                <div class="text-8xl title md:rounded-b-md mb-12 text-center mx-auto"
                     style="font-family: 'Raleway', sans-serif !important;"> Well Of Screams</div>
            </div>
            <div class="flex flex-row mb-5 w-1/4 mx-auto">
                <inertia-link :href="route('login')"
                    class="bg-blue-400 hover:bg-blue-300 text-white font-bold py-2 px-4 border-b-4
                    border-blue-700 hover:border-blue-500 rounded-full flex-auto text-center">
                    Log In
                </inertia-link>
            </div>
            <div class="flex flex-row mb-5 w-1/4 mx-auto">
                <inertia-link v-if="canRegister" :href="route('register')"
                    class="bg-green-400 hover:bg-green-300 text-white font-bold py-2 px-4
                    border-b-4 border-green-700 hover:border-green-500 rounded-full flex-auto text-center">
                    Register
                </inertia-link>
            </div>
        </div>
    </div>
</template>

<style scoped>
html, body {

}
</style>

<script>
    export default {
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    }
</script>
