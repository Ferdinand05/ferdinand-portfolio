<x-app-layout title="Home">

    {{-- hero --}}
    <div class="  h-screen md:px-16 px-8 relative">

        <div class=" pt-24 md:pt-44">
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
    <section>
        <x-container>
            <div class=" space-y-5">
                <div class=" text-center md:text-left">
                    <h1 class="text-2xl font-semibold md:text-3xl ">About</h1>
                    <p class=" font-light md:text-xl">Get to know me</p>
                </div>
                <div class="text-center md:text-left">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim architecto dolor nostrum,
                        distinctio
                        tempore possimus quam ut ipsa reprehenderit vero dolore nesciunt, dolorem officia voluptatem.
                        Lorem
                        ipsum dolor sit amet consectetur adipisicing elit. Libero, dolorum.</p>
                </div>
            </div>
        </x-container>
    </section>


    {{-- skillss --}}
    <section class="bg-gray-100">

        <x-container>
            <div class=" space-y-5">
                <div class=" text-center md:text-left">
                    <h1 class="text-2xl font-semibold md:text-3xl ">Skills</h1>
                    <p class=" font-light md:text-xl">Some skills that i have</p>
                </div>
                <div class=" grid grid-cols-2 gap-7">
                    <div class="flex items-center">
                        <img src="assets/img/skill/html.png" class=" w-28" alt="">
                        <span class="font-semibold text-lg">HTML</span>
                    </div>

                </div>
            </div>
        </x-container>
    </section>



</x-app-layout>
