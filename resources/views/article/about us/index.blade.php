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
    {{-- Favicon --}}
    <link rel="shortcut icon" href=".img/favicon.webp" type="image/x-icon">
    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
    {{-- CSS --}}
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Contact -->
    <section class="pt-20">
        <!-- Header Start -->
        <nav
            class="bg-white shadow rounded border dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
            <div class="lg:max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center">
                    <img src="./img/assets/bonnus_logo.png" class="h-8 mr-3" alt="Bonnus Logo">
                    <span class="self-center text-2xl font-bold whitespace-nowrap dark:text-white">Bonnus.ID</span>
                </a>
                <div class="flex md:order-2">
                    <button type="button"
                        class="text-white bg-teal-700 hover:bg-teal-800 focus:ring-4 focus:outline-none focus:ring-teal-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-teal-600 dark:hover:bg-teal-700 dark:focus:ring-teal-800">Mari
                        Belajar ✏️</button>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block font-bold py-2 pl-3 pr-4 md:text-teal-700 md:p-0 md:dark:text-teal-500"
                                aria-current="page">Beranda 🪆</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-teal-700 md:hover:bg-transparent md:hover:text-teal-700 md:p-0 md:dark:hover:text-teal-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang
                                Kami ❤️</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block hover:bg-teal-700 py-2 pl-3 pr-4 text-gray-900 rounded md:hover:bg-transparent md:hover:text-teal-700 md:p-0 md:dark:hover:text-teal-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Merchandise
                                🧸</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header End -->

        <main class="container mx-auto px-10">
            <article class="prose lg:prose-xl">
                <div class="pendahuluan">
                    <h2 class="text-3xl font-extrabold pt-10">Tentang Kami: Bonnus.id Boneka Nusantara</h2>
                    <p class="text-justify mt-3">Selamat datang di Bonnus.id, rumah bagi Boneka Nusantara! Kami adalah
                        sekelompok individu yang penuh semangat yang
                        bersatu untuk PKM Kewirausahaan (Program Kreativitas Mahasiswa Bidang Kewirausahaan) di Pimnas
                        2023.
                        Proyek kami adalah
                        hasil dari studi kami di Technopreneur STMIK Widya Pratama Pekalongan, serta partisipasi kami
                        dalam
                        STIMIK Expo 2023.</p>
                    <p class="text-justify mt-3">Boneka nusantara kami dirancang dengan teliti dengan estetika yang
                        menarik
                        dan ramah anak. Kami memahami bahwa anak-anak
                        tertarik pada warna-warna cerah dan desain yang bermain-main, oleh karena itu maskot kami
                        diciptakan
                        dengan perhatian
                        dan detail yang sangat tinggi. Setiap boneka mewakili daerah yang berbeda di Indonesia,
                        memungkinkan
                        anak-anak untuk
                        memulai perjalanan penemuan dan belajar tentang warisan dan keberagaman yang kaya dari negara
                        tercinta kami.</p>
                </div>
                <div class="ourteam">
                    <h2 class="text-3xl font-extrabold pt-10">Meet Our Team</h2>
                    <p class="text-justify my-3">Tim kami yang berdedikasi terdiri dari anggota-anggota berikut:</p>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                        <li>
                            <div class="bg-teal-800 text-white text-center shadow-lg rounded-lg p-4">
                                <h2 class="text-xl font-bold">Eka Saputri</h2>
                                <p class="font-base">20.240.0121</p>
                            </div>
                        </li>
                        <li>
                            <div class="bg-teal-800 text-white text-center shadow-lg rounded-lg p-4">
                                <h2 class="text-xl font-bold">Galih Azella Firdaus</h2>
                                <p class="font-base">21.240.0044</p>
                            </div>
                        </li>
                        <li>
                            <div class="bg-teal-800 text-white text-center shadow-lg rounded-lg p-4">
                                <h2 class="text-xl font-bold">Lintang Mawar Bani</h2>
                                <p class="font-base">21.240.0087</p>
                            </div>
                        </li>
                        <li>
                            <div class="bg-teal-800 text-white text-center shadow-lg rounded-lg p-4">
                                <h2 class="text-xl font-bold">Fatimah Azzahra</h2>
                                <p class="font-base">21.240.0066</p>
                            </div>
                        </li>
                        <li>
                            <div class="bg-teal-800 text-white text-center shadow-lg rounded-lg p-4">
                                <h2 class="text-xl font-bold">Muhammad Ikrom</h2>
                                <p class="font-base">21.240.0114</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="py-20 mt-20 lg:py-16 px-4 mx-auto max-w-screen-xl">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                        Hubungi Kami
                    </h2>
                    <p class="mb-5 font-base text-center text-md">Kami
                        akan senang mendengar dari Anda! Jika Anda memiliki pertanyaan, umpan balik, atau pertanyaan
                        tentang kerjasama,
                        jangan ragu untuk menghubungi kami.</p>
                    <form action="#" class="space-y-3">
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email kamu</label>
                            <input type="email" id="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-black-500 focus:border-black-500 block w-full p-2.5 dark:bg-gray dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-black-500 dark:focus:border-black-500 dark:shadow-sm-light"
                                placeholder="youremail@mail.com" required>
                        </div>
                        <div>
                            <label for="subject"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subjek</label>
                            <input type="text" id="subject"
                                class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-black-500 focus:border-black-500 dark:bg-gray dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-black-500 dark:focus:border-black-500 dark:shadow-sm-light"
                                placeholder="Let us know how we can help you" required>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Pesan kamu</label>
                            <textarea id="message" rows="6"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-black-500 focus:border-black-500 dark:bg-gray dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-black-500 dark:focus:border-black-500"
                                placeholder="Leave a comment..."></textarea>
                        </div>
                        <button type="submit"
                            class="px-5 text-sm flex justify-center items-center text-center py-3 rounded-lg bg-teal-700 text-white font-bold sm:w-fit hover:bg-black-800 focus:ring-4 focus:outline-none focus:ring-black-300 dark:bg-black-600 dark:hover:bg-black dark:focus:ring-black">Send
                            message</button>
                    </form>
                </div>
            </article>
        </main>

        <!-- Footer -->
        <footer aria-label="Site Footer" class="bg-gray-100 dark:bg-[#080E16] lg:grid lg:grid-cols-5 pt-20">
            <div class="relative block h-52 lg:col-span-2 lg:h-full">
                <img src="https://source.unsplash.com/900x500?indonesia+culture" alt="footer-cover"
                    class="absolute inset-0 object-cover w-full h-full" />
            </div>
            <div class="p-10 sm:px-6 lg:col-span-3 lg:px-8">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
                    <div>
                        <p>
                            <span class="text-xs tracking-wide uppercase">
                                Boneka Nusantara
                            </span>
                            <span class="block text-2xl font-semibold sm:text-3xl">Latarbelakang</span>
                        </p>
                        <ul class="mt-8 space-y-1 text-sm">
                            <li class="text-sm max-w-md text-justify font-normal">Kebudayaan indonesia yang sering
                                kali
                                atau bahkan lalai disampaikan oleh orang tua kepada anaknya menjadi masalah utama
                                kami dalam perencanaan produk ini.
                                <span class="block mt-5">Manfaat produk kami untuk mengedukasi anak-anak untuk mengenal
                                    daerah-daerah di Indonesia lewat boneka maskot yang
                                    desainnya menarik dan lucu
                                    di-mata anak-anak.</span>
                            </li>
                        </ul>
                        <div class="text-xs tracking-wide uppercase mt-5 mb-3">
                            Temukan kami juga di :
                        </div>
                        <ul class="flex flex-wrap">
                            <li>
                                <a aria-label="ini-deskripsi" href="https://github.com/" target=_blank>
                                    <div class="flex items-center">
                                        <div
                                            class="w-10 h-10 bg-secondary dark:bg-slate-800 hover:bg-[#181717] dark:hover:bg-[#181717] rounded-full grayscale hover:grayscale-0 mr-3 transition duration-200 ease-in-out">
                                            <svg role=img viewBox="0 0 24 24" xmlns=http://www.w3.org/2000/svg
                                                class="fill-white w-6 h-6 m-auto my-2">
                                                <title>GitHub</title>
                                                <path
                                                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a aria-label="ini-deskripsi" href="https://instagram.com/" target=_blank>
                                    <div class="flex items-center">
                                        <div
                                            class="w-10 h-10 bg-secondary dark:bg-slate-800 hover:bg-[#302683] dark:hover:bg-[#302683] rounded-full grayscale hover:grayscale-0 mr-3 transition duration-200 ease-in-out">
                                            <svg role=img viewBox="0 0 24 24" xmlns=http://www.w3.org/2000/svg
                                                class="fill-white w-6 h-6 m-auto my-2">
                                                <title>Instagram</title>
                                                <path
                                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a aria-label="ini-deskripsi" href="https://shopee.co.id/" target=_blank>
                                    <div class="flex items-center">
                                        <div
                                            class="w-10 h-10 bg-secondary dark:bg-slate-800 hover:bg-orange-500 dark:hover:bg-orange-500 rounded-full grayscale hover:grayscale-0 mr-3 transition duration-200 ease-in-out">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="fill-white w-5 h-5 m-auto my-2" viewBox="0 0 16 16">
                                                <title>Shopee</title>
                                                <path
                                                    d="M11.5 4v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5ZM8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1Zm0 6.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z" />
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="font-semibold text-teal-900 ">Group Members 🤼</p>
                            <nav aria-label="Footer Navigation - Services" class="mt-6">
                                <ul class="space-y-2 text-sm">
                                    <li>Eka Saputri (20.240.0121)</li>
                                    <li>Galih Azella Firdaus (21.240.0044)</li>
                                    <li>Lintang Mawar Bani (21.240.0087)</li>
                                    <li>Fatimah Azzahra (21.240.0066)</li>
                                    <li>Muhammad Ikrom (21.240.0114)</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <hr class="w-full my-5 lg:mt-10">
                <div class="flex items-end justify-end lg:justify-between">
                    <div class="flex flex-wrap gap-4 text-xs">
                        <p class="text-xs sm:mt-0 font-bold text-left capitalize">&copy; All rights and serve by
                            <a aria-label="ini-deskripsi" href="https://dolltural-web.vercel.app/"
                                class=hover:underline>Kelompok 1
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Akhir Footer -->

        <!-- Back to Top -->
        <a aria-label="ini-deskripsi" href=#home id=to-top
            class="hidden fixed bottom-5 right-5 rounded-full grayscale hover:grayscale-0 bg-charlie dark:bg-slate-800 hover:bg-white shadow-lg p-2 uppercase leading-normal transition duration-150 ease-in-out hover:shadow-lg focus:bg-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-white active:shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
            </svg>
        </a>
        <!-- End Back to Top -->
    </section>
    <!-- End Contact -->
    <!-- JS -->
    <script src="resource/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
            });
    </script>

    <!-- Typed -->
    <script>
        new Typed('#typed', {
                strings: ['Tari Daerah 💃', 'Pakaian Adat 👘', 'Rumah Adat 🏠', 'Lagu Daerah 🎶', 'Budaya Unik 🌌'],
                typeSpeed: 50,
                delaySpeed: 50,
                loop: true,
            });
    </script>
</body>

</html>