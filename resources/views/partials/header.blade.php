<header class="top-0 w-full left-0 right-0 z-40 transition-all duration-500 relative" :class="!hasScrolled && '-top-10'" x-data="{ hasScrolled: true, reactOnScroll() { window.scrollY > 80 ? this.hasScrolled = false : this.hasScrolled = true } }" x-init="reactOnScroll()" @scroll.window="reactOnScroll()">
    <div>
        <div class="relative z-10">
            <div class="container py-3 relative flex justify-between items-center space-x-4 xl:space-x-8">
                <div class="flex justify-start flex-grow items-center space-x-4 sm:space-x-10 2xl:space-x-14">
                    <a class="relative" title="Marsa Alam Holiday" href="/">
                        <h1 class="font-museomoderno sm:text-lg md:text-2xl dark:text-white aos-init aos-animate" data-aos="fade-right" title="MA-HOLIDAY">MA-HOLIDAY</h1><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute w-12 -right-7 -top-2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500">
                            <path d="M55.6314 14.8267L53.9335 14.1257C42.962 9.5956 30.7319 16.95 29.5892 28.7648L26.1439 19.705C24.5236 15.4442 27.6062 10.8624 32.1634 10.7577L37.6586 10.6315L22.2533 10.9722L19.6858 3.82297L19.4929 5.7026C19.1857 8.69612 16.6641 10.9722 13.6549 10.9722L0.97935 10.9722C11.9699 -1.56775 30.7393 -3.58629 44.1449 6.33002L55.6314 14.8267Z" fill="#2079FF"></path>
                        </svg>
                    </a>
                    <ul x-ref="nav" class="flex lg:flex-wrap items-center lg:space-x-1 max-md:-top-100 max-md:absolute max-md:inset-0 max-md:h-screen max-md:flex-col max-md:justify-center max-md:space-y-3 max-md:m-0 max-md:bg-white max-md:transition-all max-md:duration-500 dark:bg-neutral-900">
                        <li class="menu-item menu-dropdown relative">
                            <a class="inline-flex items-center text-xl font-normal text-neutral-700 dark:text-neutral-100 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200 nav-link-active" href="#">Home</a>
                        </li>
                        <li>
                            <a class="inline-flex items-center text-xl font-normal text-neutral-700 dark:text-neutral-100 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200" href="#articles">About-us</a>
                        </li>
                        <li>
                            <a class="inline-flex items-center text-xl font-normal text-neutral-700 dark:text-neutral-100 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200" href="#sard">Trips</a>
                        </li>
                        <li>
                            <a class="inline-flex items-center text-xl font-normal text-neutral-700 dark:text-neutral-100 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200" href="#infographic">Categories</a>
                        </li>
                        <li>
                            <a class="inline-flex items-center text-xl font-normal text-neutral-700 dark:text-neutral-100 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200" href="">contact-us</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-shrink-0 flex items-center justify-end text-neutral-700 dark:text-neutral-100 space-x-1 z-50">
                    <div class="flex items-center space-x-1">
                        <div class="relative">
                            <button class="text-2xl md:text-[28px] w-12 h-12 rounded-full text-neutral-700 dark:text-neutral-300 hover:bg-neutral-100 dark:hover:bg-neutral-800 focus:outline-none flex items-center justify-center" id="headlessui-popover-button-11" type="button" aria-expanded="false">
                                <i class="las la-search"></i>
                            </button>
                        </div>
                        <div class="AvatarDropdown" x-init x-data="{ open: false }">
                            <button @click="open = !open" class="inline-flex items-center focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75" type="button" aria-expanded="false">
                                <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-8 h-8 sm:w-9 sm:h-9 ring-1 ring-white dark:ring-neutral-900">
                                    <img class="absolute inset-0 w-full h-full object-cover" src="https://www.palquest.org/sites/default/files/media/Mahmoud_Darwish.jpg" alt="John Doe" /><span class="wil-avatar__name">Jdsd</span>
                                </div>
                            </button>
                            <div x-show="open" class="absolute z-10 w-screen max-w-[260px] px-4 mt-3.5 right-0 sm:px-0 opacity-100 translate-y-0" style="display: none;" x-transition>
                                <div class="overflow-hidden rounded-3xl shadow-lg ring-1 ring-black ring-opacity-5">
                                    <div class="relative grid grid-cols-1 gap-6 bg-white dark:bg-neutral-800 py-7 px-6">
                                        <div class="flex items-center space-x-3">
                                            <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-12 h-12 ring-1 ring-white dark:ring-neutral-900">
                                                <img sizes="100px" src="https://www.palquest.org/sites/default/files/media/Mahmoud_Darwish.jpg" class="absolute inset-0 object-cover" alt="John Doe">
                                                <span class="wil-avatar__name">محمود</span>
                                            </div>
                                            <div class="flex-grow">
                                                <h4 class="font-semibold">محمود</h4>
                                                <p class="text-xs mt-0.5">Mahmoud@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="w-full border-b border-neutral-200 dark:border-neutral-700"></div><a class="flex items-center p-2 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-neutral-100 dark:hover:bg-neutral-700 focus:outline-none focus-visible:ring focus-visible:ring-orange-500 focus-visible:ring-opacity-50" href="/author/demo-slug">
                                            <div class="flex items-center justify-center flex-shrink-0 text-neutral-500 dark:text-neutral-300">
                                                <x-heroicon-o-users />

                                            </div>
                                            <div class="ml-4">
                                                <a href="/" class="text-sm font-medium">Account</a>
                                            </div>
                                        </a>
                                        <div class="w-full border-b border-neutral-200 dark:border-neutral-700"></div>
                                        <button @click="localStorage.getItem('theme') === 'light' ? (document.documentElement.className = 'dark', localStorage.setItem('theme', 'dark')) : (document.documentElement.className = 'light', localStorage.setItem('theme', 'light'))" class="flex items-center justify-between p-2 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-neutral-100 dark:hover:bg-neutral-700 focus:outline-none focus-visible:ring focus-visible:ring-orange-500 focus-visible:ring-opacity-50">
                                            <div class="flex items-center">
                                                <span class="sr-only">Enable dark mode</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-7 h-7">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                                </svg>
                                                <div class="ml-3">
                                                    <p class="text-sm font-medium">Theme Dark / Light</p>
                                                </div>
                                            </div>
                                        </button>
                                        <a class="flex items-center p-2 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-neutral-100 dark:hover:bg-neutral-700 focus:outline-none focus-visible:ring focus-visible:ring-orange-500 focus-visible:ring-opacity-50" href="/">
                                            <div class="flex items-center justify-center flex-shrink-0 text-neutral-500 dark:text-neutral-300">
                                                <i class="las la-sign-out-alt text-2xl"></i>
                                            </div>
                                            <div class="ml-4">
                                                <p class="text-sm font-medium ">تسجيل الخروج</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="px-1"></div>
                        <a class="bg-gray-700 relative h-auto inline-flex items-center justify-center rounded-full transition-colors text-sm sm:text-base font-medium px-4 py-3 sm:px-6 disabled:bg-opacity-70 bg-primary-6000 hover:bg-primary-700 text-neutral-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-6000 dark:focus:ring-offset-0" rel="noopener noreferrer" href="#login">
                            اشتراك
                        </a>
                    </div>
                    <div class="flex items-center lg:hidden">
                        <button @click="$refs.nav.classList.toggle('max-md:-top-100')" class="p-2.5 rounded-lg text-neutral-700 dark:text-neutral-300 focus:outline-none flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
