<header class="header">
    <nav class="header-container">
        <div class="flex space-x-8">
            <a href="{{ route('home') }}">
                <x-image :src="asset('images/logo.svg')" alt="logo" width="100" height="100" data-aos="fade-down" data-aos-delay="250" />
            </a>
            <ul class="navigation">
                <li><a class='nav-link active' href="{{ route('home') }}">Home</a></li>
                <li><a class='nav-link' href="{{ route('home') }}">Articles</a></li>
                <li><a class='nav-link' href="{{ route('home') }}">Infographic</a></li>
                <li><a class='nav-link' href="{{ route('home') }}">Our services</a></li>
                <li><a class='nav-link' href="{{ route('home') }}">About-us</a></li>
            </ul>
        </div>


        <div class="flex items-center justify-between space-x-3.5">
            <button>
                <x-bi-search class="h-6 w-6" />
            </button>
            <div class="relative" x-init x-data="{ open: false }">
                <button @click="open = !open" class="" type="button" aria-expanded="false">
                    <img class="object-cover w-10 h-10 rounded-full" src="https://www.palquest.org/sites/default/files/media/Mahmoud_Darwish.jpg" alt="John Doe" />
                </button>
                <div x-show="open" class="absolute z-10 w-screen max-w-[260px] px-4 mt-3.5 right-0 sm:px-0 opacity-100 translate-y-0" style="display: none;" x-transition>
                    <div class="overflow-hidden rounded-3xl shadow-lg ring-1 ring-black ring-opacity-5">
                        <div class="relative grid grid-cols-1 gap-6 bg-white dark:bg-neutral-800 py-7 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-12 h-12 ring-1 ring-white dark:ring-neutral-900">
                                    <img sizes="100px" src="https://www.palquest.org/sites/default/files/media/Mahmoud_Darwish.jpg" class="absolute inset-0 w-full object-cover h-fullhn Doe">
                                    <span class="wil-avatar__name">Mahmoud</span>
                                </div>
                                <div class="flex-grow">
                                    <h4 class="font-semibold">Mahmoud</h4>
                                    <p class="text-xs mt-0.5">Fa Arab, Fa</p>
                                </div>
                            </div>
                            <div class="w-full border-b border-neutral-200 dark:border-neutral-700"></div>
                            <a class="flex items-center p-2 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-neutral-100" href="/author/demo-slug">
                                <x-heroicon-o-user class="h-6 w-6 text-gray-500" />
                                <div class="ml-4">
                                    <p class="text-sm font-medium ">My Account</p>
                                </div>
                            </a>
                            <a class="flex items-center p-2 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-neutral-100" href="/dashboard/posts">
                                <x-heroicon-o-clipboard-document-list class="h-6 w-6 text-gray-500" />
                                <div class="ml-4">
                                    <p class="text-sm font-medium ">My Posts</p>
                                </div>
                            </a>
                            <a class="flex items-center p-2 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-neutral-100" href="/author/demo-slug">
                                <x-iconsax-two-heart class="h-6 w-6 text-gray-500" />
                                <div class="ml-4">
                                    <p class="text-sm font-medium ">Wishlist</p>
                                </div>
                            </a>
                            <div class="w-full border-b border-neutral-200 dark:border-neutral-700"></div>
                            <div class="flex items-center justify-between p-2 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-neutral-100">
                                <div class="flex items-center">
                                    <div class="flex items-center justify-center flex-shrink-0 text-neutral-500 dark:text-neutral-300"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.0001 7.88989L10.9301 9.74989C10.6901 10.1599 10.8901 10.4999 11.3601 10.4999H12.6301C13.1101 10.4999 13.3001 10.8399 13.0601 11.2499L12.0001 13.1099" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M8.30011 18.0399V16.8799C6.00011 15.4899 4.11011 12.7799 4.11011 9.89993C4.11011 4.94993 8.66011 1.06993 13.8001 2.18993C16.0601 2.68993 18.0401 4.18993 19.0701 6.25993C21.1601 10.4599 18.9601 14.9199 15.7301 16.8699V18.0299C15.7301 18.3199 15.8401 18.9899 14.7701 18.9899H9.26011C8.16011 18.9999 8.30011 18.5699 8.30011 18.0399Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M8.5 22C10.79 21.35 13.21 21.35 15.5 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-sm font-medium ">Dark theme</p>
                                    </div>
                                </div>
                                <div class="inline-flex"><span class="sr-only">Enable dark mode</span>
                                    <button class="text-2xl md:text-3xl w-12 h-12 rounded-full text-neutral-700 dark:text-neutral-300 hover:bg-neutral-100 dark:hover:bg-neutral-800 focus:outline-none flex items-center justify-center">
                                        <span class="sr-only">Enable dark mode</span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-7 h-7">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <a class="flex items-center p-2 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-neutral-100" href="/">
                                <div class="flex items-center justify-center flex-shrink-0 text-neutral-500 dark:text-neutral-300"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.97 22C17.4928 22 21.97 17.5228 21.97 12C21.97 6.47715 17.4928 2 11.97 2C6.44715 2 1.97 6.47715 1.97 12C1.97 17.5228 6.44715 22 11.97 22Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M12 16.5C14.4853 16.5 16.5 14.4853 16.5 12C16.5 9.51472 14.4853 7.5 12 7.5C9.51472 7.5 7.5 9.51472 7.5 12C7.5 14.4853 9.51472 16.5 12 16.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M4.89999 4.92993L8.43999 8.45993" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M4.89999 19.07L8.43999 15.54" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M19.05 19.07L15.51 15.54" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M19.05 4.92993L15.51 8.45993" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <p class="text-sm font-medium ">Help</p>
                                </div>
                            </a>
                            <a class="flex items-center p-2 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-neutral-100" href="/">
                                <x-iconsax-two-logout class="h-6 w-6 text-gray-500" />
                                <div class="ml-4">
                                    <p class="text-sm font-medium ">Log out</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <a class="bg-indigo-600 rounded-full px-5 py-3 text-white" href="/login">
                Sign up
            </a>
        </div>
    </nav>
</header>
