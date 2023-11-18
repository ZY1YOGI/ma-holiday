<div class="nc-Header nc-will-change-top sticky top-0 w-full left-0 right-0 z-40 transition-all duration-300 border border-b" :class="!hasScrolled && '-top-10'" x-data="{
    hasScrolled: true,
    reactOnScroll() {
        if (window.scrollY > 150) {
            this.hasScrolled = false;
        } else {
            this.hasScrolled = true;
        }
    }
}" x-init="reactOnScroll()" @scroll.window="reactOnScroll()">
    <div>
        <div class="nc-MainNav nc-MainNav1 relative z-10 onTop">
            <div class="container py-5 relative flex justify-between items-center space-x-4 xl:space-x-8">
                <div class="flex justify-start flex-grow items-center space-x-4 sm:space-x-10 2xl:space-x-14">
                    <a class="ttnc-logo inline-block text-primary-6000" href="/ncmaz/"><svg width="59" height="41" viewBox="0 0 59 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33.5224 9.69455C34.547 8.66632 35.1818 7.24829 35.1818 5.68181C35.1818 2.54402 32.6378 0 29.5 0C27.516 0 25.7721 1.01857 24.7559 2.55971C24.4868 2.83004 1.8706 30.7044 1.65941 31.0255C0.633591 32.0525 0 33.4705 0 35.037C0 38.1748 2.54281 40.7188 5.6806 40.7188C7.66464 40.7188 9.40853 39.7002 10.4247 38.1591C10.695 37.8888 33.3112 10.0144 33.5224 9.69455Z" fill="currentColor"></path>
                            <path d="M46.6081 22.9203C47.6363 21.8921 48.2723 20.4728 48.2723 18.904C48.2723 15.7662 45.7283 13.2221 42.5905 13.2221C40.6065 13.2221 38.8614 14.2419 37.8452 15.7831C37.5737 16.0558 25.6948 30.6972 25.4824 31.0206C24.4541 32.0489 23.8193 33.4681 23.8193 35.037C23.8193 38.1748 26.3621 40.7188 29.4999 40.7188C31.484 40.7188 33.2291 39.699 34.2452 38.1579C34.5168 37.8851 46.3957 23.2437 46.6081 22.9203Z" fill="currentColor"></path>
                            <path d="M59.0001 5.68181C59.0001 8.81959 56.4573 11.3636 53.3195 11.3636C50.1817 11.3636 47.6377 8.81959 47.6377 5.68181C47.6377 2.54402 50.1817 0 53.3195 0C56.4573 0 59.0001 2.54402 59.0001 5.68181Z" fill="currentColor"></path>
                            <path d="M11.3624 5.68181C11.3624 8.81959 8.81838 11.3636 5.6806 11.3636C2.54281 11.3636 0 8.81959 0 5.68181C0 2.54402 2.54281 0 5.6806 0C8.81838 0 11.3624 2.54402 11.3624 5.68181Z" fill="currentColor"></path>
                        </svg>
                    </a>
                    <ul class="nc-Navigation hidden lg:flex lg:flex-wrap lg:items-center lg:space-x-1 relative">
                        <li class="menu-item menu-dropdown relative">
                            <a aria-current="page" class="inline-flex items-center text-sm xl:text-base dark:text-neutral-300 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200 !font-semibold !text-neutral-900 bg-neutral-100 dark:bg-neutral-800 dark:!text-neutral-100ner noreferrer" id="headlessui-popover-button-1" aria-expanded="false" href="/ncmaz/">Home</a>
                        </li>
                        <li class="menu-item menu-megamenu menu-megamenu--large">
                            <a class="inline-flex items-center text-sm xl:text-base font-normal text-neutral-700 dark:text-neutral-300 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200" rel="noopener noreferrer" id="headlessui-popover-button-3" aria-expanded="false" href="/ncmaz#">Five cols</a>
                        </li>
                        <li class="menu-item menu-megamenu menu-megamenu--small relative">
                            <a class="inline-flex items-center text-sm xl:text-base font-normal text-neutral-700 dark:text-neutral-300 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200" rel="noopener noreferrer" id="headlessui-popover-button-5" aria-expanded="false" href="/ncmaz#">Fewer cols</a>
                        </li>
                        <li class="menu-item menu-dropdown relative">
                            <a class="inline-flex items-center text-sm xl:text-base font-normal text-neutral-700 dark:text-neutral-300 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200" rel="noopener noreferrer" id="headlessui-popover-button-7" aria-expanded="false" href="/ncmaz#">Templates</a>
                        </li>
                        <li class="menu-item menu-dropdown relative">
                            <a class="inline-flex items-center text-sm xl:text-base font-normal text-neutral-700 dark:text-neutral-300 py-2 px-4 xl:px-5 rounded-full hover:text-neutral-900 hover:bg-neutral-100 dark:hover:bg-neutral-800 dark:hover:text-neutral-200" rel="noopener noreferrer" id="headlessui-popover-button-9" aria-expanded="false" href="/ncmaz#">Other pages</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-shrink-0 flex items-center justify-end text-neutral-700 dark:text-neutral-100 space-x-1">
                    <div class="hidden items-center xl:flex space-x-1">
                        <button class="text-2xl md:text-3xl w-12 h-12 rounded-full text-neutral-700 dark:text-neutral-300 hover:bg-neutral-100 dark:hover:bg-neutral-800 focus:outline-none flex items-center justify-center">
                            <span class="sr-only">Enable dark mode</span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </button>
                        <div class="relative">
                            <button class="text-2xl md:text-[28px] w-12 h-12 rounded-full text-neutral-700 dark:text-neutral-300 hover:bg-neutral-100 dark:hover:bg-neutral-800 focus:outline-none flex items-center justify-center" id="headlessui-popover-button-11" type="button" aria-expanded="false">
                                <i class="las la-search"></i>
                            </button>
                        </div>
                        <div class="AvatarDropdown">
                            <div class="relative">
                                <button class="inline-flex items-center focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75" id="headlessui-popover-button-320" type="button" aria-expanded="false">
                                    <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-8 h-8 sm:w-9 sm:h-9 ring-1 ring-white dark:ring-neutral-900">
                                        <img class="absolute inset-0 w-full h-full object-cover" src="/images/avatars/2.jpg" alt="John Doe" /><span class="wil-avatar__name">Jdsd</span>
                                    </div>
                                </button>
                            </div>
                        </div>
                        <div class="px-1"></div>
                        <a class="nc-Button relative h-auto inline-flex items-center justify-center rounded-full transition-colors text-sm sm:text-base font-medium px-4 py-3 sm:px-6 ttnc-ButtonPrimary disabled:bg-opacity-70 bg-primary-6000 hover:bg-primary-700 text-neutral-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-6000 dark:focus:ring-offset-0" rel="noopener noreferrer" href="/ncmaz/login">Sign up</a>
                    </div>
                    <div class="flex items-center xl:hidden">
                        <a class="nc-Button relative h-auto inline-flex items-center justify-center rounded-full transition-colors text-sm sm:text-base font-medium px-4 py-3 sm:px-6 ttnc-ButtonPrimary disabled:bg-opacity-70 bg-primary-6000 hover:bg-primary-700 text-neutral-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-6000 dark:focus:ring-offset-0" rel="noopener noreferrer" href="/ncmaz/login">Sign up</a>

                        <div class="px-1"></div>

                        <button class="p-2.5 rounded-lg text-neutral-700 dark:text-neutral-300 focus:outline-none flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
