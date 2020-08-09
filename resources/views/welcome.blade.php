<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts assets</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body class="font-sans">
        <div id="app">
            <header class="py-8 px-8 mb-8" style="background: url('/images/splash.svg') 0px 5px no-repeat">
                <h1>
                    <img src="/images/logo.svg" alt="Laracasts">
                </h1>
            </header>
            <div class="container px-8 pb-10">
                <main class="flex items-start">
                    <aside class="w-64 pt-8 mb-10 lg:mb-0">
                        <section class="mb-10">
                            <h5 class="uppercase font-bold mb-6">The brand</h5>
                            <ul>
                                <li class="text-sm pb-4"><router-link to="/" exact>Logo</router-link></li>
                                <li class="text-sm pb-4"><router-link to="/logo-symbols">Logo symbols</router-link></li>
                                <li class="text-sm pb-4"><router-link to="/colors">Colors</router-link></li>
                                <li class="text-sm pb-4"><router-link to="/typography">Typography</router-link></li>
                            </ul>
                        </section>

                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-6">Doodles</h5>
                            <ul>
                                <li class="text-sm pb-4"><router-link to="/mascot">Mascot</router-link></li>
                                <li class="text-sm pb-4"><router-link to="/illustrations">Illustrations</router-link></li>
                                <li class="text-sm pb-4"><router-link to="/loaders-and-animations">Loaders & Animations</router-link></li>
                                <li class="text-sm pb-4"><router-link to="/wallpapers">Wallpapers</router-link></li>
                            </ul>
                        </section>


                    </aside>
                    <div class="primary flex-1">
                        <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
