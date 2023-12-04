<x-layout title="Contact Us" description="contact-us description" keywords="contact-us keywords">
    @include('partials.header')


    <main class="relative">
        <div class="absolute h-[400px] top-0 left-0 right-0 w-full bg-white dark:bg-slate-800 bg-opacity-25 dark:bg-opacity-40"></div>
        <div class="container relative pt-6 sm:pt-10 pb-16 lg:pt-20 lg:pb-24">
            <div class="p-5 mx-auto bg-white/50 rounded-xl sm:rounded-3xl lg:rounded-[40px] shadow-lg sm:p-10 lg:p-16 dark:bg-neutral-900/50 backdrop-blur-3xl">
                <header class="text-center max-w-2xl mx-auto - mb-14 sm:mb-16 lg:mb-28 ">
                    <h2 class="flex items-center text-3xl leading-[115%] md:text-5xl md:leading-[115%] font-semibold text-neutral-900 dark:text-neutral-100 justify-center">Contact US</h2>
                    <p class="block text-sm mt-2 text-neutral-700 sm:text-base dark:text-neutral-200">
                        Send us a message and we will respond to you.
                    </p>
                </header>
                <div class="max-w-screen-sm mx-auto py-2.5">
                    <form class="grid grid-cols-1 gap-6" action="" method="POST">
                        @csrf
                        <label class="block">
                            <span class="text-neutral-800 font-medium text-base dark:text-neutral-300">Full Name</span>
                            <input type="text" class="block w-full border-neutral-200 focus:border-blue-300 focus:ring focus:ring-blue-200/50 bg-white dark:border-neutral-500 dark:focus:ring-blue-500/30 dark:bg-neutral-900 rounded-full text-sm font-normal h-11 px-4 py-3 mt-1" placeholder="Name">
                            <span class="nc-Label text-red-500 font-medium text-sm"></span>
                        </label>
                        <label class="block">
                            <span class="text-neutral-800 font-medium dark:text-neutral-300">E-mail</span>
                            <input type="email" class="block w-full border-neutral-200 focus:border-blue-300 focus:ring focus:ring-blue-200/50 bg-white dark:border-neutral-500 dark:focus:ring-blue-500/30 dark:bg-neutral-900 rounded-full text-sm font-normal h-11 px-4 py-3 mt-1" placeholder="E-mail">
                            <span class="text-red-500 font-medium text-sm"></span>
                        </label>
                        <label class="block">
                            <span class="text-neutral-800 font-medium dark:text-neutral-300">The Message</span>
                            <textarea class="block w-full text-sm rounded-xl border-neutral-200 focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50 bg-white dark:border-neutral-700 dark:focus:ring-blue-6000 dark:focus:ring-opacity-25 dark:bg-neutral-900 mt-1" rows="7"></textarea>
                            <span class="text-red-500 font-medium text-sm"></span>
                        </label>
                        <button class="flex-shrink-0 relative h-auto inline-flex items-center justify-center rounded-full transition-colors border-transparent bg-blue-700 hover:bg-blue-6000 text-blue-50 text-sm sm:text-base font-medium py-3 px-4 sm:py-3.5 sm:px-6" type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </main>




    @include('partials.footer')
</x-layout>
