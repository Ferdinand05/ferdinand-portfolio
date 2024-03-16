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
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim architecto dolor nostrum,
                        distinctio
                        tempore possimus quam ut ipsa reprehenderit vero dolore nesciunt, dolorem officia voluptatem.
                        Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Libero, dolorum.</p>
                </div>
                <div class="text-center md:text-left">
                    <button type="button"
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Download
                        CV</button>
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
