
<template>
    <div>
        <h1 class="font-normal text-3xl text-grqy-darkest leading-none mb-8">
            Loaders and Animations
        </h1>

        <p class="mb-10 text-gray-500 leading-normal">
            This spinner uses AirBnb's
            <a href="http://airbnb.io/lottie/#/web" class="text-blue-500 font-bold">Lottie</a>
            library to render its animation. You may download the necessary
            assets below.
        </p>

        <div
            class="border border-grey-lighter rounded-lg flex items-center justify-center mb-8"
        >
            <div ref="lottie" class="w-64" style="height: 457px"></div>
        </div>

        <a href="/images/laracasts-spinner.zip" class="border border-gray-500 px-8 py-2 rounded-full text-black font-bold text-xs">spinner.zip</a>
    </div>
</template>

<script>
    import lottie from 'lottie-web';
    export default {
        name: 'LoadersAndAnimations',
        mounted() {
            lottie.loadAnimation({
                container: this.$refs.lottie,
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: '/animations/spinner.json'
            });
        }
    };
</script>
