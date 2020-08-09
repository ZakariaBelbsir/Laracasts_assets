<template>
    <div>
        <h1 class="font-normal text-3xl mb-8 text-gray-800">Full Logo</h1>
        <div class="mb-4">
            <picture style="height: 382px;" class="rounded-lg block shadow flex items-center justify-center mb-6">
                <img src="/images/logo.svg" alt="logo">
            </picture>
           <div class="flex justify-between items-center">
               <p>Original logo on <strong>white</strong> background</p>
               <a href="/images/logo.svg" class="border border-gray-400 hover:bg-blue-600 hover:text-white rounded-full px-8 py-2 text-xs text-black font-bold">logo.svg</a>
           </div>
        </div>
        <div class="mb-8">
            <picture style="height: 382px;" class="rounded-lg block shadow flex items-center justify-center mb-6 bg-blue-500">
                <img src="/images/negative-logo.svg" alt="logo">
            </picture>
            <div class="flex justify-between items-center">
                    <p>Negative logo with accent on <strong>dark</strong> background</p>
                <a href="/images/negative-logo.svg" class="border border-gray-400 hover:bg-blue-600 hover:text-white rounded-full px-8 py-2 text-xs text-black font-bold">negative-logo.svg</a>
            </div>
        </div>
        <div>
            <picture style="height: 382px;" class="rounded-lg block shadow flex items-center justify-center mb-6 bg-black">
                <img src="/images/pure-negative-logo.svg" alt="logo">
            </picture>
            <div class="flex justify-between items-center">
                <p>Pure negative logo on <strong>dark</strong> background</p>
                <a href="/images/pure-negative-logo.svg" class="border border-gray-400 hover:bg-blue-600 hover:text-white rounded-full px-8 py-2 text-xs text-black font-bold">pure-negative-logo.svg</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Logo"
    }
</script>

<style scoped>

</style>
