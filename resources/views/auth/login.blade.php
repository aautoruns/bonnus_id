<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Vendor --}}
    <script src="https://unpkg.com/typed.js@2.0.8/lib/typed.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.js" async></script>
    <link rel="stylesheet" as="style" onload href="https://cdn.jsdelivr.net/npm/flowbite/dist/flowbite.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    {{-- CSS --}}
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Contact -->
    <section class="flex flex-col lg:flex-row items-center">
        <div class="w-full flex items-center justify-center">
            <div class="w-full mx-10">
                <div class="flex items-center justify-center min-h-screen">
                    <div class="px-8 py-6 mt-4 text-left">
                        <h3 class="text-4xl font-bold text-start">Boneka Nusantara</h3>
                        <span class="text-base my-2">Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit.</span>
                        <form action="">
                            <div class="mt-4">
                                <div>
                                    <label class="block" for="email">Email
                                    </label>
                                    <input
                                        class="appearance-none border rounded w-full py-2 px-3 text-secondary leading-tight focus:outline-none focus:shadow-outline"
                                        id="email" type="email" placeholder="Email" />
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <label class="block">Password
                                    </label>
                                    <input
                                        class="appearance-none border rounded w-full py-2 px-3 text-secondary leading-tight focus:outline-none focus:shadow-outline"
                                        id="password" type="password" placeholder="Password" />
                                </div>
                                <div class="flex items-baseline justify-between my-5">
                                    <button class="px-6 py-2 mt-4 text-white bg-teal-800 rounded-lg hover:bg-teal-900">
                                        <a href="home/index">Login</a></button>
                                    <a href="#" class="text-sm text-prbg-primary hover:underline">Forgot
                                        password?</a>
                                </div>
                                <h6 class="text-base">Don't have an account yet? <a href="/register.html"
                                        class="underline font-semibold">Register</a></h6>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-full bg-cover h-screen hidden lg:block"
                style="background-image: url('https://source.unsplash.com/1000x1000?indonesia+culture');">
            </div>
        </div>
        </div>
        <!-- End Contact -->
</body>

</html>