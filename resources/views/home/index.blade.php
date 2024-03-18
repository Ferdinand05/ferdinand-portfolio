<x-app-layout title="Home">

    {{-- hero --}}
    <div class="  h-screen md:px-16 px-8 relative border border-b">

        <div class=" pt-28 md:pt-44">
            <h1
                class=" font-bold text-6xl md:text-9xl bg-clip-text text-transparent text-clip bg-gradient-to-r from-black to-gray-200">
                Ferdinand</h1>
            <h4 class=" font-light text-3xl md:text-5xl">Web Developer</h4>
        </div>

        <div class=" absolute bottom-0 right-0">
            <img src="assets/img/hero.png" class="w-96 md:w-[484px] opacity-60" alt="">
        </div>

    </div>

    {{-- about --}}
    <section id="about">
        <x-container>
            <div class=" space-y-5">
                <div class=" text-center md:text-left">
                    <h1 class="text-2xl font-bold md:text-3xl ">About</h1>
                    <p class=" font-light md:text-xl">Get to know me</p>
                </div>
                <div class="text-center md:text-left">
                    <p> I am a person who is interested in technology, especially in the field of Web development. now I
                        am a student at Bina Sarana Informatika University majoring in Information Systems. I am 22
                        years old and I live in Larangan, Tangerang. I am a person who likes to face challenges and work
                        in teams but does not rule out the possibility that I can work independently. I am always eager
                        to learn more, especially in the field of technology.

                    </p>
                </div>
                <div class=" space-y-3 md:space-y-4">
                    <h1 class="text-center md:text-left  text-xl font-light">Connect with me</h1>
                    {{-- icons --}}
                    <div class="flex justify-center gap-5 md:justify-start md:gap-7">
                        <div>
                            <a href="" class="text-gray-600 hover:text-gray-900 duration-150 ">
                                <svg class=" w-6 h-6 md:w-8 md:h-8 hover:scale-105 duration-150" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="" class=" text-gray-600 hover:text-gray-900 duration-150 ">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="md:w-8 md:h-8  w-6 h-6 hover:scale-105 duration-150" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="" class="text-gray-600 hover:text-gray-900 duration-150 ">
                                <svg class="w-6 h-6 md:w-8 md:h-8  duration-150 hover:scale-105"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
                                </svg>
                            </a>
                        </div>

                    </div>
                    <div class="text-center md:text-left">
                        <button type="button"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Download
                            CV</button>
                    </div>
                </div>

            </div>
        </x-container>
    </section>


    {{-- skillss --}}
    <section id="skills">

        <x-container>
            <div class=" space-y-7">
                <div class=" text-center md:text-left">
                    <h1 class="text-2xl font-bold md:text-3xl ">Skills</h1>
                    <p class=" font-light md:text-xl">Some skills that i have</p>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-10">
                    <div data-tooltip-target="tooltip-html"
                        class="flex   place-content-center hover:scale-125 transition-all duration-300 ">
                        <img src="assets/img/skill/html.png" class=" w-28 md:w-36" alt="">
                        <div id="tooltip-html" role="tooltip"
                            class="absolute z-10 invisible inline-block px-2 py-1 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                            HTML
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>

                    <div data-tooltip-target="tooltip-css"
                        class="flex   place-content-center hover:scale-125 transition-all duration-300 ">
                        <img src="assets/img/skill/css.png" class=" w-28 md:w-36" alt="">
                        <div id="tooltip-css" role="tooltip"
                            class="absolute z-10 invisible inline-block px-2 py-1 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                            CSS
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <div data-tooltip-target="tooltip-js"
                        class="flex   place-content-center hover:scale-125 transition-all duration-300 ">
                        <img src="assets/img/skill/javascript.png" class=" w-28 md:w-36" alt="">
                        <div id="tooltip-js" role="tooltip"
                            class="absolute z-10 invisible inline-block px-2 py-1 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                            Javascript
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <div data-tooltip-target="tooltip-php"
                        class="flex place-content-center hover:scale-125 transition-all duration-300 ">
                        <img src="assets/img/skill/php.png" class=" w-28 md:w-36" alt="">
                        <div id="tooltip-php" role="tooltip"
                            class="absolute z-10 invisible inline-block px-2 py-1 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                            PHP
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <div data-tooltip-target="tooltip-bootstrap"
                        class="flex   place-content-center hover:scale-125 transition-all duration-300 ">
                        <img src="assets/img/skill/bootstrap.png" class=" w-28 md:w-36" alt="">
                        <div id="tooltip-bootstrap" role="tooltip"
                            class="absolute z-10 invisible inline-block px-2 py-1 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                            Bootstrap
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <div data-tooltip-target="tooltip-tailwind"
                        class="flex   place-content-center hover:scale-125 transition-all duration-300 ">
                        <img src="assets/img/skill/tailwindcss.webp" class="  w-28 md:w-36" alt="">
                        <div id="tooltip-tailwind" role="tooltip"
                            class="absolute z-10 invisible inline-block px-2 py-1 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                            TailwindCSS
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <div data-tooltip-target="tooltip-mysql"
                        class="flex  place-content-center hover:scale-125 transition-all duration-300 ">
                        <img src="assets/img/skill/mysql.png" class=" self-center w-28 md:w-36" alt="">
                        <div id="tooltip-mysql" role="tooltip"
                            class="absolute z-10 invisible inline-block px-2 py-1 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                            Database MYSQL
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <div data-tooltip-target="tooltip-ci"
                        class="flex   place-content-center hover:scale-125 transition-all duration-300 ">
                        <img src="assets/img/skill/codeigniter.png" class=" w-28 md:w-32" alt="">
                        <div id="tooltip-ci" role="tooltip"
                            class="absolute z-10 invisible inline-block px-2 py-1 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                            Codeigniter 4
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <div data-tooltip-target="tooltip-laravel"
                        class="flex  place-content-center hover:scale-125 transition-all duration-300 ">
                        <img src="assets/img/skill/laravel.png" class="" alt="">
                        <div id="tooltip-laravel" role="tooltip"
                            class="absolute z-10 invisible inline-block px-2 py-1 text-sm font-medium text-gray-900 bg-gray-100 border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                            Laravel
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>


                </div>
            </div>
        </x-container>
    </section>


    <section id="project">
        <x-container>
            <div class=" text-center md:text-left mb-10">
                <h1 class="text-2xl font-bold md:text-3xl ">Projects</h1>
                <p class=" font-light md:text-xl">Some of the projects I created</p>
            </div>

            {{-- project --}}
            <div class=" grid  md:grid-cols-2 gap-12 place-content-center ">

                <div
                    class="  max-w-sm md:max-w-lg hover:scale-105 duration-150 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="assets/img/1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        {{-- badge --}}
                        <div class=" flex pb-3">
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Laravel</span>
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">TailwindCSS</span>

                        </div>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="  max-w-sm md:max-w-lg hover:scale-105 duration-150 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="assets/img/1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        {{-- badge --}}
                        <div class=" flex pb-3">
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Laravel</span>
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">TailwindCSS</span>

                        </div>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="  max-w-sm md:max-w-lg hover:scale-105 duration-150 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="assets/img/1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        {{-- badge --}}
                        <div class=" flex pb-3">
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Laravel</span>
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">TailwindCSS</span>

                        </div>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div
                    class="  max-w-sm md:max-w-lg hover:scale-105 duration-150 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="assets/img/1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy
                                technology acquisitions 2021</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        {{-- badge --}}
                        <div class=" flex pb-3">
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">Laravel</span>
                            <span
                                class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">TailwindCSS</span>

                        </div>
                        <a href="#"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>


            </div>

        </x-container>
    </section>






</x-app-layout>
