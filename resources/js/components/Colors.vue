<template>
    <div>
        <h1 class="font-normal text-3xl text-gray-800 mb-4">
            Colors
        </h1>
        <div class="mb-8">
            <p class="font-thin mb-8">Primary - Blue, White, Dark Grey</p>
            <div class="flex">
                <div class="text-center mr-6">
                    <div class="w-18 h-18 rounded-full bg-blue-600 mb-4"></div>
                    <p class="text-xs">#328AF1</p>
                </div>
                <div class="text-center mr-6">
                    <div class="w-18 h-18 shadow rounded-full bg-white mb-4"></div>
                    <p class="text-xs">#FFF</p>
                </div>
                <div class="text-center">
                    <div class="w-18 h-18 rounded-full bg-black mb-4"></div>
                    <p class="text-xs">#222222</p>
                </div>
            </div>
        </div>
        <div class="mb-8">
            <p class="font-thin mb-8">Secondary - Category Colors & Accents</p>
            <div class="flex">
                <div class="mr-8 flex flex-col items-center">
                    <div class="w-18 h-18 shadow rounded-full bg-gradient-pink mb-3"></div>
                    <div class="flex justify-between mb-2">
                        <div class="flex flex-col items-center">
                            <div class="w-5 h-5 shadow mr-4 rounded-full bg-red-500"></div>
                            <p class="text-xs mr-4">#EC454F</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-5 h-5 shadow rounded-full bg-pink-600"></div>
                            <p class="text-xs ml-3">#F44881</p>
                        </div>
                    </div>
                    <p class="text-xs uppercase text-gray-400 font-normal">laravel</p>
                </div>
                <div class="mr-8 flex flex-col items-center">
                    <div class="w-18 h-18 shadow rounded-full bg-gradient-blue mb-3"></div>
                    <div class="flex justify-between mb-2">
                        <div class="flex flex-col items-center">
                            <div class="w-5 h-5 shadow mr-4 rounded-full bg-blue-700"></div>
                            <p class="text-xs mr-4">#637BFF</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-5 h-5 shadow rounded-full bg-blue-400"></div>
                            <p class="text-xs ml-3">#21C8F6</p>
                        </div>
                    </div>
                    <p class="text-xs uppercase text-gray-400 font-normal">php</p>
                </div>
                <div class="mr-8 flex flex-col items-center">
                    <div class="w-18 h-18 shadow rounded-full bg-gradient-teal mb-3"></div>
                    <div class="flex justify-between mb-2">
                        <div class="flex flex-col items-center">
                            <div class="w-5 h-5 shadow mr-4 rounded-full bg-teal-500"></div>
                            <p class="text-xs mr-4">#1AAB8B</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-5 h-5 shadow rounded-full bg-teal-300"></div>
                            <p class="text-xs ml-3">#6EDCC4</p>
                        </div>
                    </div>
                    <p class="text-xs uppercase text-gray-400 font-normal">testing</p>
                </div>
                <div class="mr-8 flex flex-col items-center">
                    <div class="w-18 h-18 shadow rounded-full bg-gradient-yellow mb-3"></div>
                    <div class="flex justify-between mb-2">
                        <div class="flex flex-col items-center">
                            <div class="w-5 h-5 shadow mr-4 rounded-full bg-yellow-600"></div>
                            <p class="text-xs mr-4">#F19A1A</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-5 h-5 shadow rounded-full bg-yellow-400"></div>
                            <p class="text-xs ml-3">#FFC73C</p>
                        </div>
                    </div>
                    <p class="text-xs uppercase text-gray-400 font-normal">javascript</p>
                </div>
                <div class="mr-8 flex flex-col items-center">
                    <div class="w-18 h-18 shadow rounded-full bg-gradient-purple mb-3"></div>
                    <div class="flex justify-between mb-2">
                        <div class="flex flex-col items-center">
                            <div class="w-5 h-5 shadow mr-4 rounded-full bg-purple-600"></div>
                            <p class="text-xs mr-4">#8B60ED</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="w-5 h-5 shadow rounded-full bg-purple-300"></div>
                            <p class="text-xs ml-3">#B372BD</p>
                        </div>
                    </div>
                    <p class="text-xs uppercase text-gray-400 font-normal">Tooling</p>
                </div>
            </div>
        </div>
        <div>
            <p class="font-thin mb-8">Icons</p>
            <div class="flex flex-col justify-center">
                <div class="w-18 h-18 rounded-full mb-4 bg-gray-500"></div>
                <p class="text-xs">#78909C</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Colors"
    }
</script>

<style scoped>

</style>
