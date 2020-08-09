<template>
    <div>
    <h1 class="font-normal text-3xl mb-4 text-gray-800">Logo Symbol</h1>
    <div class="mb-4">
        <picture style="height: 382px;" class="rounded-lg block shadow flex items-center justify-center mb-6">
            <img src="/images/symbol-original.svg" alt="logo">
        </picture>
        <div class="flex justify-between items-center">
            <p>Original symbol on <strong>white</strong> background</p>
            <a href="/images/symbol-original.svg" class="border border-gray-400 hover:bg-blue-600 hover:text-white rounded-full px-8 py-2 text-xs text-black font-bold">symbol-original.svg</a>
        </div>
    </div>
    <div class="mb-8">
        <picture style="height: 382px;" class="rounded-lg block shadow flex items-center justify-center mb-6 bg-blue-500 w-full">
            <img src="/images/symbol-negative.svg" alt="logo">
        </picture>
        <div class="flex justify-between items-center">
            <p>Negative symbol with accent on <strong>dark</strong> background</p>
            <a href="/images/symbol-negative.svg" class="border border-gray-400 hover:bg-blue-600 hover:text-white rounded-full px-8 py-2 text-xs text-black font-bold">symbol-negative.svg</a>
        </div>
    </div>
    <div>
        <picture style="height: 382px;" class="rounded-lg block shadow flex items-center justify-center mb-6 bg-black">
            <img src="/images/symbol-pure-negative.svg" alt="logo">
        </picture>
        <div class="flex justify-between items-center">
            <p>Pure negative symbol on <strong>dark</strong> background</p>
            <a href="/images/symbol-pure-negative.svg" class="border border-gray-400 hover:bg-blue-600 hover:text-white rounded-full px-8 py-2 text-xs text-black font-bold">symbol-pure-negative.svg</a>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        name: "LogoSymbol"
    }
</script>

<style scoped>

</style>
