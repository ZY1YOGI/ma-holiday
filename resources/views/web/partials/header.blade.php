<header class="top-0 w-full left-0 right-0 z-50 transition-all duration-500 relative border_gradient border-b-8" x-data={}>
    <div class="container py-3 relative flex justify-between items-center space-x-4 lg:space-x-8">
        <div class="flex justify-start flex-grow items-center lg:space-x-4 2xl:space-x-14">
            <a class="relative z-50" title="Marsa Alam Holiday" href="{{ route('home') }}">
                <h1 class="font-bold text-lg ml-2 md:text-2xl dark:text-white aos-init aos-animate" data-aos="fade-right" title="{{ config('app.name') }}">{{ config('app.name') }}</h1><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute w-12 -right-7 -top-2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500">
                    <path d="M55.6314 14.8267L53.9335 14.1257C42.962 9.5956 30.7319 16.95 29.5892 28.7648L26.1439 19.705C24.5236 15.4442 27.6062 10.8624 32.1634 10.7577L37.6586 10.6315L22.2533 10.9722L19.6858 3.82297L19.4929 5.7026C19.1857 8.69612 16.6641 10.9722 13.6549 10.9722L0.97935 10.9722C11.9699 -1.56775 30.7393 -3.58629 44.1449 6.33002L55.6314 14.8267Z" fill="#2079FF"></path>
                </svg>
            </a>
            <ul x-ref="nav" class="flex lg:flex-wrap items-center lg:space-x-1 max-lg:fixed max-lg:top-full max-lg:inset-0 max-lg:h-screen max-lg:flex-col max-lg:justify-center max-lg:space-y-3 max-lg:m-0 max-lg:bg-white transition-all duration-500 dark:bg-body-dark">
                <li class="menu-item menu-dropdown relative">
                    <a class="inline-flex items-center text-xl font-medium text-neutral-700 dark:text-neutral-100 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200 nav-link-active" href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a class="inline-flex items-center text-xl font-medium text-neutral-700 dark:text-neutral-100 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200" href="#">Categories</a>
                </li>
                <li>
                    <a class="inline-flex items-center text-xl font-medium text-neutral-700 dark:text-neutral-100 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200" href="#">Trips</a>
                </li>
                <li>
                    <a class="inline-flex items-center text-xl font-medium text-neutral-700 dark:text-neutral-100 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200" href="{{ route('about-us') }}">About-us</a>
                </li>
                <li>
                    <a class="inline-flex items-center text-xl font-medium text-neutral-700 dark:text-neutral-100 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200" href="{{ route('contact-us') }}">Contact-us</a>
                </li>
            </ul>
        </div>
        <div class="flex-shrink-0 flex items-center justify-end text-neutral-700 dark:text-neutral-100 space-x-1 z-50">
            <div class="flex items-center space-x-1">
                @auth
                    <div class="relative" x-init x-data="{ open: false }">
                        <button @click="open = !open" class="inline-flex items-center" type="button">
                            <div class="relative items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-12 h-12 ring-1 ring-white dark:ring-neutral-900">
                                <x-image src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&color=FFFFFF&background=09090b" :alt="auth()->user()->name" class="absolute w-full h-full object-cover" />
                            </div>
                        </button>
                        <div x-show="open" class="absolute z-10 w-[230px] mt-3 right-0 sm:px-0 shadow-lg" style="display: none;" x-transition>
                            <div class="relative grid grid-cols-1 gap-6 bg-white dark:bg-body-dark py-7 px-6 rounded-3xl">
                                <div class="flex items-center space-x-3">
                                    <div class="wil-avatar relative inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-12 h-12 ring-1 ring-white dark:ring-neutral-900">
                                        <x-image src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}&color=FFFFFF&background=09090b" :alt="auth()->user()->name" class="absolute w-full h-full object-cover" />
                                    </div>
                                    <div class="flex-grow">
                                        <h4 class="font-xs font-semibold">{{ auth()->user()->name }}</h4>
                                        <p class="text-xs mt-0.5">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                                <div class="w-full border-b border-neutral-200 dark:border-neutral-700"></div>
                                <a href="/" class="flex p-3 items-center transition duration-150 -my-5 ease-in-out rounded-lg hover:bg-neutral-100 dark:hover:bg-neutral-700">
                                    Account
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
                                <a href="{{ route('logout') }}" class="flex items-center p-2 -m-3 transition duration-150 ease-in-out rounded-lg hover:bg-neutral-100 dark:hover:bg-neutral-700">
                                    Logout
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="px-1"></div>
                @else
                    <a href="{{ route('login') }}" class="bg-gray-700 relative h-auto inline-flex items-center justify-center rounded-full transition-colors text-sm sm:text-base font-medium px-4 py-3 sm:px-6 disabled:bg-opacity-70 bg-primary-6000 hover:bg-primary-700 text-neutral-50">
                        Login
                    </a>
                @endauth
            </div>
            <div class="flex items-center lg:hidden">
                <button @click="$refs.nav.classList.toggle('max-lg:top-full')" class="p-2.5 rounded-lg text-neutral-700 dark:text-neutral-300 focus:outline-none flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>

    </div>
</header>
