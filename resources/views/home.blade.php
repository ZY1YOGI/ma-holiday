<x-layout title="Home" description="Home description" keywords="Home keywords">
    @include('partials.header')










    <div class="nc-PageHome relative">

        <div class="relative overflow-hidden">
            <div class="nc-BgGlassmorphism absolute inset-x-0 top-0 min-h-0 pl-10 py-32 flex flex-col overflow-hidden z-0" data-nc-id="BgGlassmorphism">
                <span class="bg-[#ef233c] w-80 h-80 rounded-full mix-blend-multiply filter blur-3xl opacity-20 lg:w-96 lg:h-9w-96"></span><span class="bg-[#04868b] w-80 h-80 ml-10 -mt-10 rounded-full mix-blend-multiply filter blur-3xl opacity-20 lg:w-96 lg:h-9w-96 nc-animation-delay-2000"></span>
            </div>

            <div class="container relative">













                <div x-init x-data="{ slide: 1 }" style="overflow: hidden !important;">


                    <div class="nc-SectionLargeSlider relative pt-10 pb-16 md:py-16 lg:pb-28 lg:pt-24" x-show="slide === 1" x-transition x-transition:enter.duration.400ms>
                        <div class="nc-Section-Heading relative flex flex-col sm:flex-row sm:items-end justify-between mb-12 md:mb-16 text-neutral-900 dark:text-neutral-50">
                            <div class="max-w-2xl">
                                <h2 class="text-3xl md:text-4xl font-semibold">
                                    Nextjs Is Bad
                                </h2>
                                <span class="mt-2 md:mt-3 font-normal block text-base sm:text-xl text-neutral-500 dark:text-neutral-400">Discover the most outstanding articles in all topics of life.
                                </span>
                            </div>
                        </div>


                        <div class="nc-CardLarge1 relative flex flex-col-reverse md:flex-row justify-end">


                            <div class="md:absolute z-10 md:left-0 md:top-1/2 md:transform md:-translate-y-1/2 w-full -mt-8 md:mt-0 px-3 sm:px-6 md:px-0 md:w-3/5 lg:w-1/2 xl:w-2/5">
                                <div class="p-4 sm:p-8 xl:py-14 md:px-10 bg-white bg-opacity-40 backdrop-filter backdrop-blur-lg shadow-lg rounded-3xl space-y-3 sm:space-y-5 !border-opacity-0 -- nc-dark-box-bg">
                                    <div class="nc-CategoryBadgeList flex flex-wrap space-x-2" data-nc-id="CategoryBadgeList">
                                        <a class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-yellow-800 bg-yellow-100 hover:bg-yellow-800" href="/ncmaz/archive/the-demo-archive-slug">Industrial</a>
                                        <a class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-red-800 bg-red-100 hover:bg-red-800" href="/ncmaz/archive/the-demo-archive-slug">Industrial</a>
                                    </div>
                                    <h2 class="nc-card-title text-xl sm:text-2xl font-semibold">
                                        <a class="line-clamp-2" title="Lenovo’s smarter devices stoke professional passions" href="/ncmaz/single/this-is-single-slug">The Done</a>
                                    </h2>
                                    <a class="nc-CardAuthor2 relative inline-flex items-center-id="CardAuthor2" href="/ncmaz/author/the-demo-author-slug">
                                        <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full h-10 w-10 text-base mr-3">
                                            <img class="absolute inset-0 w-full h-full object-cover" src="/images/avatars/3.jpg" alt="Foulcher Nathanil" /><span class="wil-avatar__name">F</span>
                                        </div>
                                        <div>
                                            <h2 class="text-sm text-neutral-700 hover:text-black dark:text-neutral-300 dark:hover:text-white font-medium">
                                                Foulcher Nathanil
                                            </h2>
                                            <span class="flex items-center mt-1 text-xs text-neutral-500 dark:text-neutral-400"><span>May 20, 2021</span></span>
                                        </div>
                                    </a>
                                    <div class="flex items-center justify-between mt-auto">
                                        <div class="nc-PostCardLikeAndComment flex items-center space-x-2" data-nc-id="PostCardLikeAndComment">
                                            <button class="nc-PostCardLikeAction relative min-w-[68px] flex items-center rounded-full leading-none group transition-colors px-3 h-8 text-xs focus:outline-none text-rose-600 bg-rose-50 dark:bg-rose-100" title="Liked" data-nc-id="PostCardLikeAction">
                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11.995 7.23319C10.5455 5.60999 8.12832 5.17335 6.31215 6.65972C4.49599 8.14609 4.2403 10.6312 5.66654 12.3892L11.995 18.25L18.3235 12.3892C19.7498 10.6312 19.5253 8.13046 17.6779 6.65972C15.8305 5.18899 13.4446 5.60999 11.995 7.23319Z" clip-rule="evenodd"></path>
                                                </svg><span class="ml-1 text-rose-600">3.4k</span></button><a class="nc-PostCardCommentBtn relative items-center min-w-[68px] rounded-full text-neutral-6000 bg-neutral-50 transition-colors dark:text-neutral-200 dark:bg-neutral-800 hover:bg-teal-50 dark:hover:bg-teal-100 hover:text-teal-600 dark:hover:text-teal-500 hidden sm:flex px-3 h-8 text-xs focus:outline-none" title="Comments" data-nc-id="PostCardCommentBtn" href="/ncmaz/single/this-is-single-slug#comments"><svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.75 6.75C4.75 5.64543 5.64543 4.75 6.75 4.75H17.25C18.3546 4.75 19.25 5.64543 19.25 6.75V14.25C19.25 15.3546 18.3546 16.25 17.25 16.25H14.625L12 19.25L9.375 16.25H6.75C5.64543 16.25 4.75 15.3546 4.75 14.25V6.75Z"></path>
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.5 11C9.5 11.2761 9.27614 11.5 9 11.5C8.72386 11.5 8.5 11.2761 8.5 11C8.5 10.7239 8.72386 10.5 9 10.5C9.27614 10.5 9.5 10.7239 9.5 11Z"></path>
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M12.5 11C12.5 11.2761 12.2761 11.5 12 11.5C11.7239 11.5 11.5 11.2761 11.5 11C11.5 10.7239 11.7239 10.5 12 10.5C12.2761 10.5 12.5 10.7239 12.5 11Z"></path>
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M15.5 11C15.5 11.2761 15.2761 11.5 15 11.5C14.7239 11.5 14.5 11.2761 14.5 11C14.5 10.7239 14.7239 10.5 15 10.5C15.2761 10.5 15.5 10.7239 15.5 11Z"></path>
                                                </svg><span class="ml-1 text-neutral-900 dark:text-neutral-200">99</span></a>
                                        </div>
                                        <div class="nc-PostCardSaveAction flex items-center space-x-2 text-xs text-neutral-700 dark:text-neutral-300" data-nc-id="PostCardSaveAction">
                                            <span>2 min read</span><button class="nc-NcBookmark relative rounded-full flex items-center justify-center focus:outline-none h-8 w-8 bg-neutral-50 bg-opacity-20 hover:bg-opacity-50 dark:bg-neutral-800 dark:bg-opacity-30 dark:hover:bg-opacity-50" data-nc-id="NcBookmark" data-nc-bookmark-post-id="DEMO_POSTS_1" title="Save to reading list">
                                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6.75 6.75C6.75 5.64543 7.64543 4.75 8.75 4.75H15.25C16.3546 4.75 17.25 5.64543 17.25 6.75V19.25L12 14.75L6.75 19.25V6.75Z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <div class="p-4 sm:pt-8 sm:px-10">
                                    <div class="nc-NextPrev relative flex items-center text-neutral-900 dark:text-neutral-300" data-nc-id="NextPrev" data-glide-el="controls">
                                        <button class="w-11 h-11 text-xl mr-[6px] bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 rounded-full flex items-center justify-center hover:border-neutral-300 focus:outline-none slide-prev" title="Prev" data-glide-dir="<" @click="slide = 3">
                                            <i class="las la-angle-left"></i>
                                        </button>
                                        <button class="w-11 h-11 text-xl bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 rounded-full flex items-center justify-center hover:border-neutral-300 focus:outline-none slide-next" title="Next" data-glide-dir=">" @click="slide = 2">
                                            <i class="las la-angle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full md:w-4/5 lg:w-2/3">
                                <a href="/ncmaz/single/this-is-single-slug">
                                    <div class="nc-NcImage aspect-w-16 aspect-h-12 sm:aspect-h-9 md:aspect-h-14 lg:aspect-h-10 2xl:aspect-h-9 relative" data-nc-id="NcImage">
                                        <img src="https://images.unsplash.com/photo-1440778303588-435521a205bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80" class="absolute inset-0 object-cover rounded-3xl" alt="Lenovo’s smarter devices stoke professional passions " />
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="nc-SectionLargeSlider relative pt-10 pb-16 md:py-16 lg:pb-28 lg:pt-24" x-show="slide === 2" x-transition x-transition:enter.duration.400ms style="display: none;">
                        <div class="nc-Section-Heading relative flex flex-col sm:flex-row sm:items-end justify-between mb-12 md:mb-16 text-neutral-900 dark:text-neutral-50">
                            <div class="max-w-2xl">
                                <h2 class="text-3xl md:text-4xl font-semibold">
                                    Laravel Troll
                                </h2>
                                <span class="mt-2 md:mt-3 font-normal block text-base sm:text-xl text-neutral-500 dark:text-neutral-400">Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet</span>
                            </div>
                        </div>


                        <div class="nc-CardLarge1 relative flex flex-col-reverse md:flex-row justify-end">


                            <div class="md:absolute z-10 md:left-0 md:top-1/2 md:transform md:-translate-y-1/2 w-full -mt-8 md:mt-0 px-3 sm:px-6 md:px-0 md:w-3/5 lg:w-1/2 xl:w-2/5">
                                <div class="p-4 sm:p-8 xl:py-14 md:px-10 bg-white bg-opacity-40 backdrop-filter backdrop-blur-lg shadow-lg rounded-3xl space-y-3 sm:space-y-5 !border-opacity-0 -- nc-dark-box-bg">
                                    <div class="nc-CategoryBadgeList flex flex-wrap space-x-2" data-nc-id="CategoryBadgeList">
                                        <a class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-blue-800 bg-blue-100 hover:bg-blue-800" href="/ncmaz/archive/the-demo-archive-slug">py</a>
                                        <a class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-yellow-800 bg-yellow-100 hover:bg-yellow-800" href="/ncmaz/archive/the-demo-archive-slug">Industrial</a>
                                        <a class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-red-800 bg-red-100 hover:bg-red-800" href="/ncmaz/archive/the-demo-archive-slug">php</a>
                                    </div>
                                    <h2 class="nc-card-title text-xl sm:text-2xl font-semibold">
                                        <a class="line-clamp-2" title="Lenovo’s smarter devices stoke professional passions" href="/ncmaz/single/this-is-single-slug">Laravel The Bast</a>
                                    </h2>
                                    <a class="nc-CardAuthor2 relative inline-flex items-center" data-nc-id="CardAuthor2" href="/ncmaz/author/the-demo-author-slug">
                                        <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full h-10 w-10 text-base mr-3">
                                            <img class="absolute inset-0 w-full h-full object-cover" src="/images/avatars/2.jpg" alt="Foulcher Nathanil" /><span class="wil-avatar__name">F</span>
                                        </div>
                                        <div>
                                            <h2 class="text-sm text-neutral-700 hover:text-black dark:text-neutral-300 dark:hover:text-white font-medium">
                                                Youssef Amjad
                                            </h2>
                                            <span class="flex items-center mt-1 text-xs text-neutral-500 dark:text-neutral-400"><span>May 12, 2025</span></span>
                                        </div>
                                    </a>
                                    <div class="flex items-center justify-between mt-auto">
                                        <div class="nc-PostCardLikeAndComment flex items-center space-x-2" data-nc-id="PostCardLikeAndComment">
                                            <button class="nc-PostCardLikeAction relative min-w-[68px] flex items-center rounded-full leading-none group transition-colors px-3 h-8 text-xs focus:outline-none text-rose-600 bg-rose-50 dark:bg-rose-100" title="Liked" data-nc-id="PostCardLikeAction">
                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11.995 7.23319C10.5455 5.60999 8.12832 5.17335 6.31215 6.65972C4.49599 8.14609 4.2403 10.6312 5.66654 12.3892L11.995 18.25L18.3235 12.3892C19.7498 10.6312 19.5253 8.13046 17.6779 6.65972C15.8305 5.18899 13.4446 5.60999 11.995 7.23319Z" clip-rule="evenodd"></path>
                                                </svg><span class="ml-1 text-rose-600">5.9k</span></button><a class="nc-PostCardCommentBtn relative items-center min-w-[68px] rounded-full text-neutral-6000 bg-neutral-50 transition-colors dark:text-neutral-200 dark:bg-neutral-800 hover:bg-teal-50 dark:hover:bg-teal-100 hover:text-teal-600 dark:hover:text-teal-500 hidden sm:flex px-3 h-8 text-xs focus:outline-none" title="Comments" data-nc-id="PostCardCommentBtn" href="/ncmaz/single/this-is-single-slug#comments"><svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.75 6.75C4.75 5.64543 5.64543 4.75 6.75 4.75H17.25C18.3546 4.75 19.25 5.64543 19.25 6.75V14.25C19.25 15.3546 18.3546 16.25 17.25 16.25H14.625L12 19.25L9.375 16.25H6.75C5.64543 16.25 4.75 15.3546 4.75 14.25V6.75Z"></path>
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.5 11C9.5 11.2761 9.27614 11.5 9 11.5C8.72386 11.5 8.5 11.2761 8.5 11C8.5 10.7239 8.72386 10.5 9 10.5C9.27614 10.5 9.5 10.7239 9.5 11Z"></path>
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M12.5 11C12.5 11.2761 12.2761 11.5 12 11.5C11.7239 11.5 11.5 11.2761 11.5 11C11.5 10.7239 11.7239 10.5 12 10.5C12.2761 10.5 12.5 10.7239 12.5 11Z"></path>
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M15.5 11C15.5 11.2761 15.2761 11.5 15 11.5C14.7239 11.5 14.5 11.2761 14.5 11C14.5 10.7239 14.7239 10.5 15 10.5C15.2761 10.5 15.5 10.7239 15.5 11Z"></path>
                                                </svg><span class="ml-1 text-neutral-900 dark:text-neutral-200">19</span></a>
                                        </div>
                                        <div class="nc-PostCardSaveAction flex items-center space-x-2 text-xs text-neutral-700 dark:text-neutral-300" data-nc-id="PostCardSaveAction">
                                            <span>2 min read</span><button class="nc-NcBookmark relative rounded-full flex items-center justify-center focus:outline-none h-8 w-8 bg-neutral-50 bg-opacity-20 hover:bg-opacity-50 dark:bg-neutral-800 dark:bg-opacity-30 dark:hover:bg-opacity-50" data-nc-id="NcBookmark" data-nc-bookmark-post-id="DEMO_POSTS_1" title="Save to reading list">
                                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6.75 6.75C6.75 5.64543 7.64543 4.75 8.75 4.75H15.25C16.3546 4.75 17.25 5.64543 17.25 6.75V19.25L12 14.75L6.75 19.25V6.75Z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <div class="p-4 sm:pt-8 sm:px-10">
                                    <div class="nc-NextPrev relative flex items-center text-neutral-900 dark:text-neutral-300" data-nc-id="NextPrev" data-glide-el="controls">
                                        <button class="w-11 h-11 text-xl mr-[6px] bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 rounded-full flex items-center justify-center hover:border-neutral-300 focus:outline-none slide-prev" title="Prev" data-glide-dir="<" @click="slide = 3">
                                            <i class="las la-angle-left"></i>
                                        </button>
                                        <button class="w-11 h-11 text-xl bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 rounded-full flex items-center justify-center hover:border-neutral-300 focus:outline-none slide-next" title="Next" data-glide-dir=">" @click="slide = 1">
                                            <i class="las la-angle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full md:w-4/5 lg:w-2/3">
                                <a href="/ncmaz/single/this-is-single-slug">
                                    <div class="nc-NcImage aspect-w-16 aspect-h-12 sm:aspect-h-9 md:aspect-h-14 lg:aspect-h-10 2xl:aspect-h-9 relative" data-nc-id="NcImage">
                                        <img src="https://images.unsplash.com/photo-1504992963429-56f2d62fbff0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8ODN8fHRlY2hub2xvZ3l8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="absolute inset-0 object-cover rounded-3xl" alt="Lenovo’s smarter devices stoke professional passions " />
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="nc-SectionLargeSlider relative pt-10 pb-16 md:py-16 lg:pb-28 lg:pt-24" x-show="slide === 3" x-transition x-transition:enter.duration.400ms style="display: none;">
                        <div class="nc-Section-Heading relative flex flex-col sm:flex-row sm:items-end justify-between mb-12 md:mb-16 text-neutral-900 dark:text-neutral-50">
                            <div class="max-w-2xl">
                                <h2 class="text-3xl md:text-4xl font-semibold">
                                    Django Python
                                </h2>
                                <span class="mt-2 md:mt-3 font-normal block text-base sm:text-xl text-neutral-500 dark:text-neutral-400">Microsoft announces a five-year commitment to create bigger opportunities</span>
                            </div>
                        </div>


                        <div class="nc-CardLarge1 relative flex flex-col-reverse md:flex-row justify-end">


                            <div class="md:absolute z-10 md:left-0 md:top-1/2 md:transform md:-translate-y-1/2 w-full -mt-8 md:mt-0 px-3 sm:px-6 md:px-0 md:w-3/5 lg:w-1/2 xl:w-2/5">
                                <div class="p-4 sm:p-8 xl:py-14 md:px-10 bg-white bg-opacity-40 backdrop-filter backdrop-blur-lg shadow-lg rounded-3xl space-y-3 sm:space-y-5 !border-opacity-0 -- nc-dark-box-bg">
                                    <div class="nc-CategoryBadgeList flex flex-wrap space-x-2" data-nc-id="CategoryBadgeList">
                                        <a class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-red-800 bg-red-100 hover:bg-red-800" href="/ncmaz/archive/the-demo-archive-slug">laravel</a>
                                        <a class="transition-colors hover:text-white duration-300 nc-Badge relative inline-flex px-2.5 py-1 rounded-full font-medium text-xs text-blue-800 bg-blue-100 hover:bg-blue-800" href="/ncmaz/archive/the-demo-archive-slug">py</a>
                                    </div>
                                    <h2 class="nc-card-title text-xl sm:text-2xl font-semibold">
                                        <a class="line-clamp-2" title="Lenovo’s smarter devices stoke professional passions" href="/ncmaz/single/this-is-single-slug">demoLo</a>
                                    </h2>
                                    <a class="nc-CardAuthor2 inline-flex items-center relative" data-nc-id="CardAuthor2" href="/ncmaz/author/the-demo-author-slug">
                                        <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full h-10 w-10 text-base mr-3">
                                            <img class="absolute inset-0 w-full h-full object-cover" src="/images/avatars/7.jpg" alt="Foulcher Nathanil" /><span class="wil-avatar__name">F</span>
                                        </div>
                                        <div>
                                            <h2 class="text-sm text-neutral-700 hover:text-black dark:text-neutral-300 dark:hover:text-white font-medium">
                                                Foulcher Nathanil
                                            </h2>
                                            <span class="flex items-center mt-1 text-xs text-neutral-500 dark:text-neutral-400"><span>May 20, 2021</span></span>
                                        </div>
                                    </a>
                                    <div class="flex items-center justify-between mt-auto">
                                        <div class="nc-PostCardLikeAndComment flex items-center space-x-2" data-nc-id="PostCardLikeAndComment">
                                            <button class="nc-PostCardLikeAction relative min-w-[68px] flex items-center rounded-full leading-none group transition-colors px-3 h-8 text-xs focus:outline-none text-rose-600 bg-rose-50 dark:bg-rose-100" title="Liked" data-nc-id="PostCardLikeAction">
                                                <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11.995 7.23319C10.5455 5.60999 8.12832 5.17335 6.31215 6.65972C4.49599 8.14609 4.2403 10.6312 5.66654 12.3892L11.995 18.25L18.3235 12.3892C19.7498 10.6312 19.5253 8.13046 17.6779 6.65972C15.8305 5.18899 13.4446 5.60999 11.995 7.23319Z" clip-rule="evenodd"></path>
                                                </svg><span class="ml-1 text-rose-600">6.1k</span></button><a class="nc-PostCardCommentBtn relative items-center min-w-[68px] rounded-full text-neutral-6000 bg-neutral-50 transition-colors dark:text-neutral-200 dark:bg-neutral-800 hover:bg-teal-50 dark:hover:bg-teal-100 hover:text-teal-600 dark:hover:text-teal-500 hidden sm:flex px-3 h-8 text-xs focus:outline-none" title="Comments" data-nc-id="PostCardCommentBtn" href="/ncmaz/single/this-is-single-slug#comments"><svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4.75 6.75C4.75 5.64543 5.64543 4.75 6.75 4.75H17.25C18.3546 4.75 19.25 5.64543 19.25 6.75V14.25C19.25 15.3546 18.3546 16.25 17.25 16.25H14.625L12 19.25L9.375 16.25H6.75C5.64543 16.25 4.75 15.3546 4.75 14.25V6.75Z"></path>
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M9.5 11C9.5 11.2761 9.27614 11.5 9 11.5C8.72386 11.5 8.5 11.2761 8.5 11C8.5 10.7239 8.72386 10.5 9 10.5C9.27614 10.5 9.5 10.7239 9.5 11Z"></path>
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M12.5 11C12.5 11.2761 12.2761 11.5 12 11.5C11.7239 11.5 11.5 11.2761 11.5 11C11.5 10.7239 11.7239 10.5 12 10.5C12.2761 10.5 12.5 10.7239 12.5 11Z"></path>
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="M15.5 11C15.5 11.2761 15.2761 11.5 15 11.5C14.7239 11.5 14.5 11.2761 14.5 11C14.5 10.7239 14.7239 10.5 15 10.5C15.2761 10.5 15.5 10.7239 15.5 11Z"></path>
                                                </svg><span class="ml-1 text-neutral-900 dark:text-neutral-200">36</span></a>
                                        </div>
                                        <div class="nc-PostCardSaveAction flex items-center space-x-2 text-xs text-neutral-700 dark:text-neutral-300" data-nc-id="PostCardSaveAction">
                                            <span>2 min read</span><button class="nc-NcBookmark relative rounded-full flex items-center justify-center focus:outline-none h-8 w-8 bg-neutral-50 bg-opacity-20 hover:bg-opacity-50 dark:bg-neutral-800 dark:bg-opacity-30 dark:hover:bg-opacity-50" data-nc-id="NcBookmark" data-nc-bookmark-post-id="DEMO_POSTS_1" title="Save to reading list">
                                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6.75 6.75C6.75 5.64543 7.64543 4.75 8.75 4.75H15.25C16.3546 4.75 17.25 5.64543 17.25 6.75V19.25L12 14.75L6.75 19.25V6.75Z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>


                                <div class="p-4 sm:pt-8 sm:px-10">
                                    <div class="nc-NextPrev relative flex items-center text-neutral-900 dark:text-neutral-300" data-nc-id="NextPrev" data-glide-el="controls">
                                        <button class="w-11 h-11 text-xl mr-[6px] bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 rounded-full flex items-center justify-center hover:border-neutral-300 focus:outline-none slide-prev" title="Prev" data-glide-dir="<" @click="slide = 2">
                                            <i class="las la-angle-left"></i>
                                        </button>
                                        <button class="w-11 h-11 text-xl bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 rounded-full flex items-center justify-center hover:border-neutral-300 focus:outline-none slide-next" title="Next" data-glide-dir=">" @click="slide = 1">
                                            <i class="las la-angle-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="w-full md:w-4/5 lg:w-2/3">
                                <a href="/ncmaz/single/this-is-single-slug">
                                    <div class="nc-NcImage aspect-w-16 aspect-h-12 sm:aspect-h-9 md:aspect-h-14 lg:aspect-h-10 2xl:aspect-h-9 relative" data-nc-id="NcImage">
                                        <img src="https://images.unsplash.com/photo-1418854982207-12f710b74003?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" class="absolute inset-0 object-cover rounded-3xl" alt="Lenovo’s smarter devices stoke professional passions " />
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>


                </div>
















                <div class="relative py-16">
                    <div class="nc-BackgroundSection absolute inset-y-0 w-screen xl:max-w-[1340px] 2xl:max-w-screen-2xl left-1/2 transform -translate-x-1/2 xl:rounded-[40px] z-0 bg-neutral-100 dark:bg-black dark:bg-opacity-20" data-nc-id="BackgroundSection"></div>
                    <div class="nc-SectionSliderNewAuthors">
                        <div class="sliderNewAuthors_PageHomem9KXaBECDblp2AlRFoEVx_ glide--ltr glide--slider glide--swipeable">
                            <div class="nc-Section-Heading relative flex flex-col sm:flex-row sm:items-end justify-between mb-12 md:mb-16 text-neutral-900 dark:text-neutral-50">
                                <div class="text-center w-full max-w-2xl mx-auto">
                                    <h2 class="text-3xl md:text-4xl font-semibold">
                                        Newest authors
                                    </h2>
                                    <span class="mt-2 md:mt-3 font-normal block text-base sm:text-xl text-neutral-500 dark:text-neutral-400">Say hello to future creator potentials</span>
                                </div>
                            </div>
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides" style=" transition: transform 0ms cubic-bezier(0.165, 0.84, 0.44, 1) 0s;width: 2624px;transform: translate3d(0px, 0px, 0px);">
                                    <li class="glide__slide pb-12 md:pb-16 glide__slide--active" style="width: 230.4px; margin-right: 16px">
                                        <a class="nc-CardAuthorBox2 flex flex-col overflow-hidden [ nc-box-has-hover ] [ nc-dark-box-bg-has-hover ]" data-nc-id="CardAuthorBox2" href="/ncmaz/author/the-demo-author-slug">
                                            <div class="relative flex-shrink-0">
                                                <div>
                                                    <div class="nc-NcImage flex aspect-w-7 aspect-h-5 sm:aspect-h-6 w-full h-0" data-nc-id="NcImage">
                                                        <img src="https://images.pexels.com/photos/912410/pexels-photo-912410.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full" alt="nc-imgs" />
                                                    </div>
                                                </div>
                                                <div class="absolute top-3 inset-x-3 flex">
                                                    <div class="py-1 px-4 bg-neutral-100 dark:bg-neutral-800 rounded-full flex items-center justify-center leading-none text-xs font-medium">
                                                        40
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-yellow-600 ml-3">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-mt-8 m-8 text-center">
                                                <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-16 h-16 text-2xl ring-2 ring-white">
                                                    <img class="absolute inset-0 w-full h-full object-cover" src="/images//avatars/1.jpg" alt="Truelock Alric" /><span class="wil-avatar__name">T</span>
                                                </div>
                                                <div class="mt-3">
                                                    <h2 class="text-base font-medium">
                                                        <span class="line-clamp-1">Truelock Alric</span>
                                                    </h2>
                                                    <span class="block mt-1 text-sm text-neutral-500 dark:text-neutral-400">@Author Job</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide pb-12 md:pb-16" style="
                            width: 230.4px;
                            margin-left: 16px;
                            margin-right: 16px;
                          ">
                                        <a class="nc-CardAuthorBox2 flex flex-col overflow-hidden [ nc-box-has-hover ] [ nc-dark-box-bg-has-hover ]" data-nc-id="CardAuthorBox2" href="/ncmaz/author/the-demo-author-slug">
                                            <div class="relative flex-shrink-0">
                                                <div>
                                                    <div class="nc-NcImage flex aspect-w-7 aspect-h-5 sm:aspect-h-6 w-full h-0" data-nc-id="NcImage">
                                                        <img src="https://images.pexels.com/photos/7354542/pexels-photo-7354542.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full" alt="nc-imgs" />
                                                    </div>
                                                </div>
                                                <div class="absolute top-3 inset-x-3 flex">
                                                    <div class="py-1 px-4 bg-neutral-100 dark:bg-neutral-800 rounded-full flex items-center justify-center leading-none text-xs font-medium">
                                                        113
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-yellow-600 ml-3">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-mt-8 m-8 text-center">
                                                <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-16 h-16 text-2xl ring-2 ring-white">
                                                    <img class="absolute inset-0 w-full h-full object-cover" src="/images//avatars/2.jpg" alt="Birrell Chariot" /><span class="wil-avatar__name">B</span>
                                                </div>
                                                <div class="mt-3">
                                                    <h2 class="text-base font-medium">
                                                        <span class="line-clamp-1">Birrell Chariot</span>
                                                    </h2>
                                                    <span class="block mt-1 text-sm text-neutral-500 dark:text-neutral-400">@Author Job</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide pb-12 md:pb-16" style="
                            width: 230.4px;
                            margin-left: 16px;
                            margin-right: 16px;
                          ">
                                        <a class="nc-CardAuthorBox2 flex flex-col overflow-hidden [ nc-box-has-hover ] [ nc-darkbg-has-hover ]" data-nc-id="CardAuthorBox2" href="/ncmaz/author/the-demo-author-slug">
                                            <div class="relative flex-shrink-0">
                                                <div>
                                                    <div class="nc-NcImage flex aspect-w-7 aspect-h-5 sm:aspect-h-6 w-full h-0" data-nc-id="NcImage">
                                                        <img src="https://images.pexels.com/photos/3651577/pexels-photo-3651577.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full" alt="nc-imgs" />
                                                    </div>
                                                </div>
                                                <div class="absolute top-3 inset-x-3 flex">
                                                    <div class="py-1 px-4 bg-neutral-100 dark:bg-neutral-800 rounded-full flex items-center justify-center leading-none text-xs font-medium">
                                                        43
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-yellow-600 ml-3">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-mt-8 m-8 text-center">
                                                <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-16 h-16 text-2xl ring-2 ring-white">
                                                    <img class="absolute inset-0 w-full h-full object-cover" src="/images//avatars/3.jpg" alt="Foulcher Nathanil" /><span class="wil-avatar__name">F</span>
                                                </div>
                                                <div class="mt-3">
                                                    <h2 class="text-base font-medium">
                                                        <span class="line-clamp-1">Foulcher Nathanil</span>
                                                    </h2>
                                                    <span class="block mt-1 text-sm text-neutral-500 dark:text-neutral-400">@Author Job</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide pb-12 md:pb-16" style="width: 230.4px;margin-left: 16px;margin-right: 16px;">
                                        <a class="nc-CardAuthorBox2 flex flex-col overflow-hidden [ nc-box-has-hover ] [ nc-dark-box-bg-has-hover ]" data-nc-id="CardAuthorBox2" href="/ncmaz/author/the-demo-author-slug">
                                            <div class="relative flex-shrink-0">
                                                <div>
                                                    <div class="nc-NcImage flex aspect-w-7 aspect-h-5 sm:aspect-h-6 w-full h-0" data-nc-id="NcImage">
                                                        <img src="https://images.pexels.com/photos/4064835/pexels-photo-4064835.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full" alt="nc-imgs" />
                                                    </div>
                                                </div>
                                                <div class="absolute top-3 inset-x-3 flex">
                                                    <div class="py-1 px-4 bg-neutral-100 dark:bg-neutral-800 rounded-full flex items-center justify-center leading-none text-xs font-medium">
                                                        36
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-yellow-600 ml-3">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-mt-8 m-8 text-center">
                                                <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-16 h-16 text-2xl ring-2 ring-white">
                                                    <img class="absolute inset-0 w-full h-full object-cover" src="/images//avatars/4.jpg" alt="Falconar Agnes" /><span class="wil-avatar__name">F</span>
                                                </div>
                                                <div class="mt-3">
                                                    <h2 class="text-base font-medium">
                                                        <span class="line-clamp-1">Falconar Agnes</span>
                                                    </h2>
                                                    <span class="block mt-1 text-sm text-neutral-500 dark:text-neutral-400">@Author Job</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide pb-12 md:pb-16" style="
                            width: 230.4px;
                            margin-left: 16px;
                            margin-right: 16px;
                          ">
                                        <a class="nc-CardAuthorBox2 flex flex-col overflow-hidden [ nc-box-has-hover ] [ nc-dark-box-bg-has-hover ]" data-nc-id="CardAuthorBox2" href="/ncmaz/author/the-demo-author-slug">
                                            <div class="relative flex-shrink-0">
                                                <div>
                                                    <div class="nc-NcImage flex aspect-w-7 aspect-h-5 sm:aspect-h-6 w-full h-0" data-nc-id="NcImage">
                                                        <img src="https://images.pexels.com/photos/3330118/pexels-photo-3330118.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;h=750&amp;w=1260" class="object-cover w-full h-full" alt="nc-imgs" />
                                                    </div>
                                                </div>
                                                <div class="absolute top-3 inset-x-3 flex">
                                                    <div class="py-1 px-4 bg-neutral-100 dark:bg-neutral-800 rounded-full flex items-center justify-center leading-none text-xs font-medium">
                                                        38
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-yellow-600 ml-3">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-mt-8 m-8 text-center">
                                                <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-16 h-16 text-2xl ring-2 ring-white">
                                                    <img class="absolute inset-0 w-full h-full object-cover" src="/images//avatars/12.jpg" alt="Tousy Vita" /><span class="wil-avatar__name">T</span>
                                                </div>
                                                <div class="mt-3">
                                                    <h2 class="text-base font-medium">
                                                        <span class="line-clamp-1">Tousy Vita</span>
                                                    </h2>
                                                    <span class="block mt-1 text-sm text-neutral-500 dark:text-neutral-400">@Author Job</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide pb-12 md:pb-16" style="
                            width: 230.4px;
                            margin-left: 16px;
                            margin-right: 16px;
                          ">
                                        <a class="nc-CardAuthorBox2 flex flex-col overflow-hidden [ nc-box-has-hover ] [ nc-dark-box-bg-has-hover ]" data-nc-id="CardAuthorBox2" href="/ncmaz/author/the-demo-author-slug">
                                            <div class="relative flex-shrink-0">
                                                <div>
                                                    <div class="nc-NcImage flex aspect-w-7 aspect-h-5 sm:aspect-h-6 w-full h-0" data-nc-id="NcImage">
                                                        <div class="object-cover w-full h-full flex items-center justify-center bg-neutral-200 dark:bg-neutral-6000 text-neutral-100 dark:text-neutral-500">
                                                            <div class="h-2/4 max-w-[50%]">
                                                                <svg class="w-full h-full" viewBox="0 0 197 193" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M145.828 48.9822C134.953 48.9822 126.105 57.8301 126.105 68.7051C126.105 79.5801 134.953 88.428 145.828 88.428C156.703 88.428 165.551 79.5805 165.551 68.7051C165.551 57.8293 156.704 48.9822 145.828 48.9822ZM145.828 80.7741C139.173 80.7741 133.759 75.3602 133.759 68.7051C133.759 62.0501 139.173 56.6361 145.828 56.6361C152.483 56.6361 157.897 62.0501 157.897 68.7051C157.897 75.3594 152.483 80.7741 145.828 80.7741Z" fill="currentColor"></path>
                                                                    <path d="M145.963 171.49C145.867 171.256 145.748 171.034 145.611 170.828C145.473 170.617 145.312 170.422 145.136 170.246C144.96 170.07 144.765 169.909 144.554 169.771C144.348 169.634 144.126 169.515 143.892 169.419C143.663 169.324 143.422 169.247 143.177 169.201C142.683 169.102 142.178 169.102 141.684 169.201C141.439 169.247 141.198 169.324 140.969 169.419C140.735 169.515 140.513 169.634 140.306 169.771C140.096 169.909 139.901 170.07 139.725 170.246C139.549 170.422 139.388 170.617 139.25 170.828C139.112 171.034 138.994 171.256 138.898 171.49C138.802 171.719 138.726 171.96 138.68 172.205C138.63 172.45 138.603 172.703 138.603 172.952C138.603 173.2 138.63 173.453 138.68 173.698C138.726 173.943 138.802 174.184 138.898 174.413C138.994 174.647 139.112 174.869 139.25 175.075C139.388 175.286 139.549 175.481 139.725 175.657C139.812 175.745 139.905 175.829 140.001 175.908C140.099 175.987 140.201 176.063 140.306 176.132C140.513 176.269 140.735 176.388 140.969 176.484C141.198 176.579 141.439 176.656 141.684 176.702C141.929 176.752 142.182 176.778 142.43 176.778C142.679 176.778 142.932 176.752 143.177 176.702C143.422 176.656 143.663 176.579 143.892 176.484C144.126 176.388 144.348 176.269 144.554 176.132C144.66 176.062 144.762 175.987 144.859 175.908C144.956 175.829 145.048 175.745 145.136 175.657C145.312 175.481 145.473 175.286 145.611 175.075C145.748 174.869 145.867 174.647 145.963 174.413C146.058 174.184 146.135 173.943 146.185 173.698C146.234 173.453 146.257 173.2 146.257 172.952C146.257 172.703 146.234 172.45 146.185 172.205C146.135 171.96 146.058 171.719 145.963 171.49Z" fill="currentColor"></path>
                                                                    <path d="M85.7341 20.0459C85.6384 19.8163 85.5198 19.5943 85.382 19.3838C85.2442 19.1772 85.0835 18.9782 84.9075 18.8021C84.7314 18.6261 84.5363 18.4653 84.3258 18.3276C84.1191 18.1898 83.8972 18.0712 83.6637 17.9755C83.4341 17.8798 83.193 17.8071 82.9481 17.7574C82.4544 17.6579 81.9492 17.6579 81.4556 17.7574C81.2106 17.8071 80.9695 17.8798 80.7361 17.9755C80.5065 18.0712 80.2845 18.1898 80.0779 18.3276C79.8674 18.4653 79.6722 18.6261 79.4962 18.8021C79.3201 18.9782 79.1594 19.1772 79.0178 19.3838C78.88 19.5943 78.7652 19.8163 78.6696 20.0459C78.5739 20.2755 78.4973 20.5166 78.4514 20.7615C78.4017 21.0103 78.3749 21.259 78.3749 21.5116C78.3749 21.7603 78.4017 22.0091 78.4514 22.2579C78.4973 22.5028 78.5739 22.7439 78.6696 22.9735C78.7652 23.2031 78.88 23.4251 79.0178 23.6356C79.1594 23.8422 79.3201 24.0412 79.4962 24.2172C79.6722 24.3933 79.8674 24.554 80.0779 24.6918C80.2845 24.8296 80.5065 24.9482 80.7361 25.0439C80.9695 25.1395 81.2106 25.2123 81.4556 25.262C81.7005 25.3118 81.9531 25.3385 82.2018 25.3385C82.4506 25.3385 82.7032 25.3118 82.9481 25.262C83.193 25.2123 83.4341 25.1395 83.6637 25.0439C83.8972 24.9482 84.1191 24.8296 84.3258 24.6918C84.5363 24.554 84.7314 24.3933 84.9075 24.2172C85.0835 24.0412 85.2442 23.8422 85.382 23.6356C85.5198 23.4251 85.6384 23.2031 85.7341 22.9735C85.8298 22.7439 85.9063 22.5028 85.9522 22.2579C86.002 22.0091 86.0288 21.7603 86.0288 21.5116C86.0288 21.259 86.002 21.0103 85.9522 20.7615C85.9063 20.5166 85.8298 20.2755 85.7341 20.0459Z" fill="currentColor"></path>
                                                                    <path d="M175.008 17.6988C172.714 7.99787 163.987 0.755371 153.594 0.755371H33.522C15.2866 0.754988 0.450684 15.5909 0.450684 33.8263V153.899C0.450684 165.824 9.98628 175.557 21.8326 175.891C24.1272 185.592 32.8542 192.835 43.2467 192.835H174.382C186.517 192.835 196.39 182.962 196.39 170.826V141.949V39.6911C196.39 27.7663 186.855 18.0329 175.008 17.6988ZM188.736 170.827C188.736 178.742 182.297 185.182 174.382 185.182H43.2467C37.1197 185.182 31.8799 181.322 29.8236 175.908C29.2232 174.327 28.8918 172.615 28.8918 170.827V168.254V150.524L72.7964 76.0808C74.1332 73.8144 76.517 72.4911 79.1323 72.5332C81.7633 72.5783 84.0851 73.9844 85.3434 76.2955L104.247 111.007L131.725 161.462C132.419 162.737 133.733 163.459 135.089 163.459C135.708 163.459 136.335 163.309 136.916 162.993C138.772 161.982 139.458 159.657 138.447 157.801L129.53 141.428C133.445 141.608 137.296 140.341 140.362 137.797L157.572 123.52C160.332 121.23 164.408 121.331 167.051 123.755L167.95 124.578L175.604 131.594L188.736 143.632V170.827ZM188.736 133.249L175.603 121.21L167.95 115.382C162.963 113.297 157.033 114.022 152.685 117.629L135.475 131.906C133.582 133.476 131.111 134.111 128.695 133.646C126.28 133.183 124.22 131.677 123.043 129.517L110.969 107.345L104.226 94.9648V94.9644L92.0655 72.6342C89.4716 67.8716 84.6856 64.9727 79.2632 64.8801C73.8423 64.7951 68.9588 67.521 66.2037 72.1922L28.8914 135.457V39.6911C28.8914 31.7758 35.331 25.3362 43.2463 25.3362H66.8937C69.0074 25.3362 70.7207 23.6229 70.7207 21.5093C70.7207 19.3957 69.0074 17.6823 66.8937 17.6823H43.2463C31.1106 17.6823 21.2375 27.5555 21.2375 39.6911V149.479V168.198C13.8924 167.575 8.10458 161.402 8.10458 153.899V33.8263C8.10458 19.8109 19.507 8.40888 33.522 8.40888H153.594C159.721 8.40888 164.961 12.2684 167.017 17.6827H97.5093C95.3957 17.6827 93.6824 19.396 93.6824 21.5097C93.6824 23.6233 95.3957 25.3366 97.5093 25.3366H167.949L175.603 25.3925C182.949 26.0147 188.736 32.1876 188.736 39.6911V133.249Z" fill="currentColor"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="absolute top-3 inset-x-3 flex">
                                                    <div class="py-1 px-4 bg-neutral-100 dark:bg-neutral-800 rounded-full flex items-center justify-center leading-none text-xs font-medium">
                                                        31
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-yellow-600 ml-3">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-mt-8 m-8 text-center">
                                                <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-16 h-16 text-2xl ring-2 ring-white">
                                                    <img class="absolute inset-0 w-full h-full object-cover" src="/images//avatars/6.jpg" alt="Friar Donna" /><span class="wil-avatar__name">F</span>
                                                </div>
                                                <div class="mt-3">
                                                    <h2 class="text-base font-medium">
                                                        <span class="line-clamp-1">Friar Donna</span>
                                                    </h2>
                                                    <span class="block mt-1 text-sm text-neutral-500 dark:text-neutral-400">@Author Job</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide pb-12 md:pb-16" style="
                            width: 230.4px;
                            margin-left: 16px;
                            margin-right: 16px;
                          ">
                                        <a class="nc-CardAuthorBox2 flex flex-col overflow-hidden [ nc-box-has-hover ] [ nc-dark-box-bg-has-hover ]" data-nc-id="CardAuthorBox2" href="/ncmaz/author/the-demo-author-slug">
                                            <div class="relative flex-shrink-0">
                                                <div>
                                                    <div class="nc-NcImage flex aspect-w-7 aspect-h-5 sm:aspect-h-6 w-full h-0" data-nc-id="NcImage">
                                                        <div class="object-cover w-full h-full flex items-center justify-center bg-neutral-200 dark:bg-neutral-6000 text-neutral-100 dark:text-neutral-500">
                                                            <div class="h-2/4 max-w-[50%]">
                                                                <svg class="w-full h-full" viewBox="0 0 197 193" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M145.828 48.9822C134.953 48.9822 126.105 57.8301 126.105 68.7051C126.105 79.5801 134.953 88.428 145.828 88.428C156.703 88.428 165.551 79.5805 165.551 68.7051C165.551 57.8293 156.704 48.9822 145.828 48.9822ZM145.828 80.7741C139.173 80.7741 133.759 75.3602 133.759 68.7051C133.759 62.0501 139.173 56.6361 145.828 56.6361C152.483 56.6361 157.897 62.0501 157.897 68.7051C157.897 75.3594 152.483 80.7741 145.828 80.7741Z" fill="currentColor"></path>
                                                                    <path d="M145.963 171.49C145.867 171.256 145.748 171.034 145.611 170.828C145.473 170.617 145.312 170.422 145.136 170.246C144.96 170.07 144.765 169.909 144.554 169.771C144.348 169.634 144.126 169.515 143.892 169.419C143.663 169.324 143.422 169.247 143.177 169.201C142.683 169.102 142.178 169.102 141.684 169.201C141.439 169.247 141.198 169.324 140.969 169.419C140.735 169.515 140.513 169.634 140.306 169.771C140.096 169.909 139.901 170.07 139.725 170.246C139.549 170.422 139.388 170.617 139.25 170.828C139.112 171.034 138.994 171.256 138.898 171.49C138.802 171.719 138.726 171.96 138.68 172.205C138.63 172.45 138.603 172.703 138.603 172.952C138.603 173.2 138.63 173.453 138.68 173.698C138.726 173.943 138.802 174.184 138.898 174.413C138.994 174.647 139.112 174.869 139.25 175.075C139.388 175.286 139.549 175.481 139.725 175.657C139.812 175.745 139.905 175.829 140.001 175.908C140.099 175.987 140.201 176.063 140.306 176.132C140.513 176.269 140.735 176.388 140.969 176.484C141.198 176.579 141.439 176.656 141.684 176.702C141.929 176.752 142.182 176.778 142.43 176.778C142.679 176.778 142.932 176.752 143.177 176.702C143.422 176.656 143.663 176.579 143.892 176.484C144.126 176.388 144.348 176.269 144.554 176.132C144.66 176.062 144.762 175.987 144.859 175.908C144.956 175.829 145.048 175.745 145.136 175.657C145.312 175.481 145.473 175.286 145.611 175.075C145.748 174.869 145.867 174.647 145.963 174.413C146.058 174.184 146.135 173.943 146.185 173.698C146.234 173.453 146.257 173.2 146.257 172.952C146.257 172.703 146.234 172.45 146.185 172.205C146.135 171.96 146.058 171.719 145.963 171.49Z" fill="currentColor"></path>
                                                                    <path d="M85.7341 20.0459C85.6384 19.8163 85.5198 19.5943 85.382 19.3838C85.2442 19.1772 85.0835 18.9782 84.9075 18.8021C84.7314 18.6261 84.5363 18.4653 84.3258 18.3276C84.1191 18.1898 83.8972 18.0712 83.6637 17.9755C83.4341 17.8798 83.193 17.8071 82.9481 17.7574C82.4544 17.6579 81.9492 17.6579 81.4556 17.7574C81.2106 17.8071 80.9695 17.8798 80.7361 17.9755C80.5065 18.0712 80.2845 18.1898 80.0779 18.3276C79.8674 18.4653 79.6722 18.6261 79.4962 18.8021C79.3201 18.9782 79.1594 19.1772 79.0178 19.3838C78.88 19.5943 78.7652 19.8163 78.6696 20.0459C78.5739 20.2755 78.4973 20.5166 78.4514 20.7615C78.4017 21.0103 78.3749 21.259 78.3749 21.5116C78.3749 21.7603 78.4017 22.0091 78.4514 22.2579C78.4973 22.5028 78.5739 22.7439 78.6696 22.9735C78.7652 23.2031 78.88 23.4251 79.0178 23.6356C79.1594 23.8422 79.3201 24.0412 79.4962 24.2172C79.6722 24.3933 79.8674 24.554 80.0779 24.6918C80.2845 24.8296 80.5065 24.9482 80.7361 25.0439C80.9695 25.1395 81.2106 25.2123 81.4556 25.262C81.7005 25.3118 81.9531 25.3385 82.2018 25.3385C82.4506 25.3385 82.7032 25.3118 82.9481 25.262C83.193 25.2123 83.4341 25.1395 83.6637 25.0439C83.8972 24.9482 84.1191 24.8296 84.3258 24.6918C84.5363 24.554 84.7314 24.3933 84.9075 24.2172C85.0835 24.0412 85.2442 23.8422 85.382 23.6356C85.5198 23.4251 85.6384 23.2031 85.7341 22.9735C85.8298 22.7439 85.9063 22.5028 85.9522 22.2579C86.002 22.0091 86.0288 21.7603 86.0288 21.5116C86.0288 21.259 86.002 21.0103 85.9522 20.7615C85.9063 20.5166 85.8298 20.2755 85.7341 20.0459Z" fill="currentColor"></path>
                                                                    <path d="M175.008 17.6988C172.714 7.99787 163.987 0.755371 153.594 0.755371H33.522C15.2866 0.754988 0.450684 15.5909 0.450684 33.8263V153.899C0.450684 165.824 9.98628 175.557 21.8326 175.891C24.1272 185.592 32.8542 192.835 43.2467 192.835H174.382C186.517 192.835 196.39 182.962 196.39 170.826V141.949V39.6911C196.39 27.7663 186.855 18.0329 175.008 17.6988ZM188.736 170.827C188.736 178.742 182.297 185.182 174.382 185.182H43.2467C37.1197 185.182 31.8799 181.322 29.8236 175.908C29.2232 174.327 28.8918 172.615 28.8918 170.827V168.254V150.524L72.7964 76.0808C74.1332 73.8144 76.517 72.4911 79.1323 72.5332C81.7633 72.5783 84.0851 73.9844 85.3434 76.2955L104.247 111.007L131.725 161.462C132.419 162.737 133.733 163.459 135.089 163.459C135.708 163.459 136.335 163.309 136.916 162.993C138.772 161.982 139.458 159.657 138.447 157.801L129.53 141.428C133.445 141.608 137.296 140.341 140.362 137.797L157.572 123.52C160.332 121.23 164.408 121.331 167.051 123.755L167.95 124.578L175.604 131.594L188.736 143.632V170.827ZM188.736 133.249L175.603 121.21L167.95 115.382C162.963 113.297 157.033 114.022 152.685 117.629L135.475 131.906C133.582 133.476 131.111 134.111 128.695 133.646C126.28 133.183 124.22 131.677 123.043 129.517L110.969 107.345L104.226 94.9648V94.9644L92.0655 72.6342C89.4716 67.8716 84.6856 64.9727 79.2632 64.8801C73.8423 64.7951 68.9588 67.521 66.2037 72.1922L28.8914 135.457V39.6911C28.8914 31.7758 35.331 25.3362 43.2463 25.3362H66.8937C69.0074 25.3362 70.7207 23.6229 70.7207 21.5093C70.7207 19.3957 69.0074 17.6823 66.8937 17.6823H43.2463C31.1106 17.6823 21.2375 27.5555 21.2375 39.6911V149.479V168.198C13.8924 167.575 8.10458 161.402 8.10458 153.899V33.8263C8.10458 19.8109 19.507 8.40888 33.522 8.40888H153.594C159.721 8.40888 164.961 12.2684 167.017 17.6827H97.5093C95.3957 17.6827 93.6824 19.396 93.6824 21.5097C93.6824 23.6233 95.3957 25.3366 97.5093 25.3366H167.949L175.603 25.3925C182.949 26.0147 188.736 32.1876 188.736 39.6911V133.249Z" fill="currentColor"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="absolute top-3 inset-x-3 flex">
                                                    <div class="py-1 px-4 bg-neutral-100 dark:bg-neutral-800 rounded-full flex items-center justify-center leading-none text-xs font-medium">
                                                        102
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-yellow-600 ml-3">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-mt-8 m-8 text-center">
                                                <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-16 h-16 text-2xl ring-2 ring-white">
                                                    <img class="absolute inset-0 w-full h-full object-cover" src="/images//avatars/7.jpg" alt="Royal Sergei" /><span class="wil-avatar__name">R</span>
                                                </div>
                                                <div class="mt-3">
                                                    <h2 class="text-base font-medium">
                                                        <span class="line-clamp-1">Royal Sergei</span>
                                                    </h2>
                                                    <span class="block mt-1 text-sm text-neutral-500 dark:text-neutral-400">@Author Job</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide pb-12 md:pb-16" style="
                            width: 230.4px;
                            margin-left: 16px;
                            margin-right: 16px;
                          ">
                                        <a class="nc-CardAuthorBox2 flex flex-col overflow-hidden [ nc-box-has-hover ] [ nc-dark-box-bg-has-hover ]" data-nc-id="CardAuthorBox2" href="/ncmaz/author/the-demo-author-slug">
                                            <div class="relative flex-shrink-0">
                                                <div>
                                                    <div class="nc-NcImage flex aspect-w-7 aspect-h-5 sm:aspect-h-6 w-full h-0" data-nc-id="NcImage">
                                                        <div class="object-cover w-full h-full flex items-center justify-center bg-neutral-200 dark:bg-neutral-6000 text-neutral-100 dark:text-neutral-500">
                                                            <div class="h-2/4 max-w-[50%]">
                                                                <svg class="w-full h-full" viewBox="0 0 197 193" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M145.828 48.9822C134.953 48.9822 126.105 57.8301 126.105 68.7051C126.105 79.5801 134.953 88.428 145.828 88.428C156.703 88.428 165.551 79.5805 165.551 68.7051C165.551 57.8293 156.704 48.9822 145.828 48.9822ZM145.828 80.7741C139.173 80.7741 133.759 75.3602 133.759 68.7051C133.759 62.0501 139.173 56.6361 145.828 56.6361C152.483 56.6361 157.897 62.0501 157.897 68.7051C157.897 75.3594 152.483 80.7741 145.828 80.7741Z" fill="currentColor"></path>
                                                                    <path d="M145.963 171.49C145.867 171.256 145.748 171.034 145.611 170.828C145.473 170.617 145.312 170.422 145.136 170.246C144.96 170.07 144.765 169.909 144.554 169.771C144.348 169.634 144.126 169.515 143.892 169.419C143.663 169.324 143.422 169.247 143.177 169.201C142.683 169.102 142.178 169.102 141.684 169.201C141.439 169.247 141.198 169.324 140.969 169.419C140.735 169.515 140.513 169.634 140.306 169.771C140.096 169.909 139.901 170.07 139.725 170.246C139.549 170.422 139.388 170.617 139.25 170.828C139.112 171.034 138.994 171.256 138.898 171.49C138.802 171.719 138.726 171.96 138.68 172.205C138.63 172.45 138.603 172.703 138.603 172.952C138.603 173.2 138.63 173.453 138.68 173.698C138.726 173.943 138.802 174.184 138.898 174.413C138.994 174.647 139.112 174.869 139.25 175.075C139.388 175.286 139.549 175.481 139.725 175.657C139.812 175.745 139.905 175.829 140.001 175.908C140.099 175.987 140.201 176.063 140.306 176.132C140.513 176.269 140.735 176.388 140.969 176.484C141.198 176.579 141.439 176.656 141.684 176.702C141.929 176.752 142.182 176.778 142.43 176.778C142.679 176.778 142.932 176.752 143.177 176.702C143.422 176.656 143.663 176.579 143.892 176.484C144.126 176.388 144.348 176.269 144.554 176.132C144.66 176.062 144.762 175.987 144.859 175.908C144.956 175.829 145.048 175.745 145.136 175.657C145.312 175.481 145.473 175.286 145.611 175.075C145.748 174.869 145.867 174.647 145.963 174.413C146.058 174.184 146.135 173.943 146.185 173.698C146.234 173.453 146.257 173.2 146.257 172.952C146.257 172.703 146.234 172.45 146.185 172.205C146.135 171.96 146.058 171.719 145.963 171.49Z" fill="currentColor"></path>
                                                                    <path d="M85.7341 20.0459C85.6384 19.8163 85.5198 19.5943 85.382 19.3838C85.2442 19.1772 85.0835 18.9782 84.9075 18.8021C84.7314 18.6261 84.5363 18.4653 84.3258 18.3276C84.1191 18.1898 83.8972 18.0712 83.6637 17.9755C83.4341 17.8798 83.193 17.8071 82.9481 17.7574C82.4544 17.6579 81.9492 17.6579 81.4556 17.7574C81.2106 17.8071 80.9695 17.8798 80.7361 17.9755C80.5065 18.0712 80.2845 18.1898 80.0779 18.3276C79.8674 18.4653 79.6722 18.6261 79.4962 18.8021C79.3201 18.9782 79.1594 19.1772 79.0178 19.3838C78.88 19.5943 78.7652 19.8163 78.6696 20.0459C78.5739 20.2755 78.4973 20.5166 78.4514 20.7615C78.4017 21.0103 78.3749 21.259 78.3749 21.5116C78.3749 21.7603 78.4017 22.0091 78.4514 22.2579C78.4973 22.5028 78.5739 22.7439 78.6696 22.9735C78.7652 23.2031 78.88 23.4251 79.0178 23.6356C79.1594 23.8422 79.3201 24.0412 79.4962 24.2172C79.6722 24.3933 79.8674 24.554 80.0779 24.6918C80.2845 24.8296 80.5065 24.9482 80.7361 25.0439C80.9695 25.1395 81.2106 25.2123 81.4556 25.262C81.7005 25.3118 81.9531 25.3385 82.2018 25.3385C82.4506 25.3385 82.7032 25.3118 82.9481 25.262C83.193 25.2123 83.4341 25.1395 83.6637 25.0439C83.8972 24.9482 84.1191 24.8296 84.3258 24.6918C84.5363 24.554 84.7314 24.3933 84.9075 24.2172C85.0835 24.0412 85.2442 23.8422 85.382 23.6356C85.5198 23.4251 85.6384 23.2031 85.7341 22.9735C85.8298 22.7439 85.9063 22.5028 85.9522 22.2579C86.002 22.0091 86.0288 21.7603 86.0288 21.5116C86.0288 21.259 86.002 21.0103 85.9522 20.7615C85.9063 20.5166 85.8298 20.2755 85.7341 20.0459Z" fill="currentColor"></path>
                                                                    <path d="M175.008 17.6988C172.714 7.99787 163.987 0.755371 153.594 0.755371H33.522C15.2866 0.754988 0.450684 15.5909 0.450684 33.8263V153.899C0.450684 165.824 9.98628 175.557 21.8326 175.891C24.1272 185.592 32.8542 192.835 43.2467 192.835H174.382C186.517 192.835 196.39 182.962 196.39 170.826V141.949V39.6911C196.39 27.7663 186.855 18.0329 175.008 17.6988ZM188.736 170.827C188.736 178.742 182.297 185.182 174.382 185.182H43.2467C37.1197 185.182 31.8799 181.322 29.8236 175.908C29.2232 174.327 28.8918 172.615 28.8918 170.827V168.254V150.524L72.7964 76.0808C74.1332 73.8144 76.517 72.4911 79.1323 72.5332C81.7633 72.5783 84.0851 73.9844 85.3434 76.2955L104.247 111.007L131.725 161.462C132.419 162.737 133.733 163.459 135.089 163.459C135.708 163.459 136.335 163.309 136.916 162.993C138.772 161.982 139.458 159.657 138.447 157.801L129.53 141.428C133.445 141.608 137.296 140.341 140.362 137.797L157.572 123.52C160.332 121.23 164.408 121.331 167.051 123.755L167.95 124.578L175.604 131.594L188.736 143.632V170.827ZM188.736 133.249L175.603 121.21L167.95 115.382C162.963 113.297 157.033 114.022 152.685 117.629L135.475 131.906C133.582 133.476 131.111 134.111 128.695 133.646C126.28 133.183 124.22 131.677 123.043 129.517L110.969 107.345L104.226 94.9648V94.9644L92.0655 72.6342C89.4716 67.8716 84.6856 64.9727 79.2632 64.8801C73.8423 64.7951 68.9588 67.521 66.2037 72.1922L28.8914 135.457V39.6911C28.8914 31.7758 35.331 25.3362 43.2463 25.3362H66.8937C69.0074 25.3362 70.7207 23.6229 70.7207 21.5093C70.7207 19.3957 69.0074 17.6823 66.8937 17.6823H43.2463C31.1106 17.6823 21.2375 27.5555 21.2375 39.6911V149.479V168.198C13.8924 167.575 8.10458 161.402 8.10458 153.899V33.8263C8.10458 19.8109 19.507 8.40888 33.522 8.40888H153.594C159.721 8.40888 164.961 12.2684 167.017 17.6827H97.5093C95.3957 17.6827 93.6824 19.396 93.6824 21.5097C93.6824 23.6233 95.3957 25.3366 97.5093 25.3366H167.949L175.603 25.3925C182.949 26.0147 188.736 32.1876 188.736 39.6911V133.249Z" fill="currentColor"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="absolute top-3 inset-x-3 flex">
                                                    <div class="py-1 px-4 bg-neutral-100 dark:bg-neutral-800 rounded-full flex items-center justify-center leading-none text-xs font-medium">
                                                        35
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-yellow-600 ml-3">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-mt-8 m-8 text-center">
                                                <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-16 h-16 text-2xl ring-2 ring-white">
                                                    <img class="absolute inset-0 w-full h-full object-cover" src="/images//avatars/8.jpg" alt="Sleite Claudetta" /><span class="wil-avatar__name">S</span>
                                                </div>
                                                <div class="mt-3">
                                                    <h2 class="text-base font-medium">
                                                        <span class="line-clamp-1">Sleite Claudetta</span>
                                                    </h2>
                                                    <span class="block mt-1 text-sm text-neutral-500 dark:text-neutral-400">@Author Job</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide pb-12 md:pb-16" style="
                            width: 230.4px;
                            margin-left: 16px;
                            margin-right: 16px;
                          ">
                                        <a class="nc-CardAuthorBox2 flex flex-col overflow-hidden [ nc-box-has-hover ] [ nc-dark-box-bg-has-hover ]" data-nc-id="CardAuthorBox2" href="/ncmaz/author/the-demo-author-slug">
                                            <div class="relative flex-shrink-0">
                                                <div>
                                                    <div class="nc-NcImage flex aspect-w-7 aspect-h-5 sm:aspect-h-6 w-full h-0" data-nc-id="NcImage">
                                                        <div class="object-cover w-full h-full flex items-center justify-center bg-neutral-200 dark:bg-neutral-6000 text-neutral-100 dark:text-neutral-500">
                                                            <div class="h-2/4 max-w-[50%]">
                                                                <svg class="w-full h-full" viewBox="0 0 197 193" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M145.828 48.9822C134.953 48.9822 126.105 57.8301 126.105 68.7051C126.105 79.5801 134.953 88.428 145.828 88.428C156.703 88.428 165.551 79.5805 165.551 68.7051C165.551 57.8293 156.704 48.9822 145.828 48.9822ZM145.828 80.7741C139.173 80.7741 133.759 75.3602 133.759 68.7051C133.759 62.0501 139.173 56.6361 145.828 56.6361C152.483 56.6361 157.897 62.0501 157.897 68.7051C157.897 75.3594 152.483 80.7741 145.828 80.7741Z" fill="currentColor"></path>
                                                                    <path d="M145.963 171.49C145.867 171.256 145.748 171.034 145.611 170.828C145.473 170.617 145.312 170.422 145.136 170.246C144.96 170.07 144.765 169.909 144.554 169.771C144.348 169.634 144.126 169.515 143.892 169.419C143.663 169.324 143.422 169.247 143.177 169.201C142.683 169.102 142.178 169.102 141.684 169.201C141.439 169.247 141.198 169.324 140.969 169.419C140.735 169.515 140.513 169.634 140.306 169.771C140.096 169.909 139.901 170.07 139.725 170.246C139.549 170.422 139.388 170.617 139.25 170.828C139.112 171.034 138.994 171.256 138.898 171.49C138.802 171.719 138.726 171.96 138.68 172.205C138.63 172.45 138.603 172.703 138.603 172.952C138.603 173.2 138.63 173.453 138.68 173.698C138.726 173.943 138.802 174.184 138.898 174.413C138.994 174.647 139.112 174.869 139.25 175.075C139.388 175.286 139.549 175.481 139.725 175.657C139.812 175.745 139.905 175.829 140.001 175.908C140.099 175.987 140.201 176.063 140.306 176.132C140.513 176.269 140.735 176.388 140.969 176.484C141.198 176.579 141.439 176.656 141.684 176.702C141.929 176.752 142.182 176.778 142.43 176.778C142.679 176.778 142.932 176.752 143.177 176.702C143.422 176.656 143.663 176.579 143.892 176.484C144.126 176.388 144.348 176.269 144.554 176.132C144.66 176.062 144.762 175.987 144.859 175.908C144.956 175.829 145.048 175.745 145.136 175.657C145.312 175.481 145.473 175.286 145.611 175.075C145.748 174.869 145.867 174.647 145.963 174.413C146.058 174.184 146.135 173.943 146.185 173.698C146.234 173.453 146.257 173.2 146.257 172.952C146.257 172.703 146.234 172.45 146.185 172.205C146.135 171.96 146.058 171.719 145.963 171.49Z" fill="currentColor"></path>
                                                                    <path d="M85.7341 20.0459C85.6384 19.8163 85.5198 19.5943 85.382 19.3838C85.2442 19.1772 85.0835 18.9782 84.9075 18.8021C84.7314 18.6261 84.5363 18.4653 84.3258 18.3276C84.1191 18.1898 83.8972 18.0712 83.6637 17.9755C83.4341 17.8798 83.193 17.8071 82.9481 17.7574C82.4544 17.6579 81.9492 17.6579 81.4556 17.7574C81.2106 17.8071 80.9695 17.8798 80.7361 17.9755C80.5065 18.0712 80.2845 18.1898 80.0779 18.3276C79.8674 18.4653 79.6722 18.6261 79.4962 18.8021C79.3201 18.9782 79.1594 19.1772 79.0178 19.3838C78.88 19.5943 78.7652 19.8163 78.6696 20.0459C78.5739 20.2755 78.4973 20.5166 78.4514 20.7615C78.4017 21.0103 78.3749 21.259 78.3749 21.5116C78.3749 21.7603 78.4017 22.0091 78.4514 22.2579C78.4973 22.5028 78.5739 22.7439 78.6696 22.9735C78.7652 23.2031 78.88 23.4251 79.0178 23.6356C79.1594 23.8422 79.3201 24.0412 79.4962 24.2172C79.6722 24.3933 79.8674 24.554 80.0779 24.6918C80.2845 24.8296 80.5065 24.9482 80.7361 25.0439C80.9695 25.1395 81.2106 25.2123 81.4556 25.262C81.7005 25.3118 81.9531 25.3385 82.2018 25.3385C82.4506 25.3385 82.7032 25.3118 82.9481 25.262C83.193 25.2123 83.4341 25.1395 83.6637 25.0439C83.8972 24.9482 84.1191 24.8296 84.3258 24.6918C84.5363 24.554 84.7314 24.3933 84.9075 24.2172C85.0835 24.0412 85.2442 23.8422 85.382 23.6356C85.5198 23.4251 85.6384 23.2031 85.7341 22.9735C85.8298 22.7439 85.9063 22.5028 85.9522 22.2579C86.002 22.0091 86.0288 21.7603 86.0288 21.5116C86.0288 21.259 86.002 21.0103 85.9522 20.7615C85.9063 20.5166 85.8298 20.2755 85.7341 20.0459Z" fill="currentColor"></path>
                                                                    <path d="M175.008 17.6988C172.714 7.99787 163.987 0.755371 153.594 0.755371H33.522C15.2866 0.754988 0.450684 15.5909 0.450684 33.8263V153.899C0.450684 165.824 9.98628 175.557 21.8326 175.891C24.1272 185.592 32.8542 192.835 43.2467 192.835H174.382C186.517 192.835 196.39 182.962 196.39 170.826V141.949V39.6911C196.39 27.7663 186.855 18.0329 175.008 17.6988ZM188.736 170.827C188.736 178.742 182.297 185.182 174.382 185.182H43.2467C37.1197 185.182 31.8799 181.322 29.8236 175.908C29.2232 174.327 28.8918 172.615 28.8918 170.827V168.254V150.524L72.7964 76.0808C74.1332 73.8144 76.517 72.4911 79.1323 72.5332C81.7633 72.5783 84.0851 73.9844 85.3434 76.2955L104.247 111.007L131.725 161.462C132.419 162.737 133.733 163.459 135.089 163.459C135.708 163.459 136.335 163.309 136.916 162.993C138.772 161.982 139.458 159.657 138.447 157.801L129.53 141.428C133.445 141.608 137.296 140.341 140.362 137.797L157.572 123.52C160.332 121.23 164.408 121.331 167.051 123.755L167.95 124.578L175.604 131.594L188.736 143.632V170.827ZM188.736 133.249L175.603 121.21L167.95 115.382C162.963 113.297 157.033 114.022 152.685 117.629L135.475 131.906C133.582 133.476 131.111 134.111 128.695 133.646C126.28 133.183 124.22 131.677 123.043 129.517L110.969 107.345L104.226 94.9648V94.9644L92.0655 72.6342C89.4716 67.8716 84.6856 64.9727 79.2632 64.8801C73.8423 64.7951 68.9588 67.521 66.2037 72.1922L28.8914 135.457V39.6911C28.8914 31.7758 35.331 25.3362 43.2463 25.3362H66.8937C69.0074 25.3362 70.7207 23.6229 70.7207 21.5093C70.7207 19.3957 69.0074 17.6823 66.8937 17.6823H43.2463C31.1106 17.6823 21.2375 27.5555 21.2375 39.6911V149.479V168.198C13.8924 167.575 8.10458 161.402 8.10458 153.899V33.8263C8.10458 19.8109 19.507 8.40888 33.522 8.40888H153.594C159.721 8.40888 164.961 12.2684 167.017 17.6827H97.5093C95.3957 17.6827 93.6824 19.396 93.6824 21.5097C93.6824 23.6233 95.3957 25.3366 97.5093 25.3366H167.949L175.603 25.3925C182.949 26.0147 188.736 32.1876 188.736 39.6911V133.249Z" fill="currentColor"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="absolute top-3 inset-x-3 flex">
                                                    <div class="py-1 px-4 bg-neutral-100 dark:bg-neutral-800 rounded-full flex items-center justify-center leading-none text-xs font-medium">
                                                        21
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-yellow-600 ml-3">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-mt-8 m-8 text-center">
                                                <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-16 h-16 text-2xl ring-2 ring-white">
                                                    <img class="absolute inset-0 w-full h-full object-cover" src="/images//avatars/9.jpg" alt="Pillifant Vern" /><span class="wil-avatar__name">P</span>
                                                </div>
                                                <div class="mt-3">
                                                    <h2 class="text-base font-medium">
                                                        <span class="line-clamp-1">Pillifant Vern</span>
                                                    </h2>
                                                    <span class="block mt-1 text-sm text-neutral-500 dark:text-neutral-400">@Author Job</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide pb-12 md:pb-16" style="width: 230.4px; margin-left: 16px">
                                        <a class="nc-CardAuthorBox2 flex flex-col overflow-hidden [ nc-box-has-hover ] [ nc-dark-box-bg-has-hover ]" data-nc-id="CardAuthorBox2" href="/ncmaz/author/the-demo-author-slug">
                                            <div class="relative flex-shrink-0">
                                                <div>
                                                    <div class="nc-NcImage flex aspect-w-7 aspect-h-5 sm:aspect-h-6 w-full h-0" data-nc-id="NcImage">
                                                        <div class="object-cover w-full h-full flex items-center justify-center bg-neutral-200 dark:bg-neutral-6000 text-neutral-100 dark:text-neutral-500">
                                                            <div class="h-2/4 max-w-[50%]">
                                                                <svg class="w-full h-full" viewBox="0 0 197 193" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M145.828 48.9822C134.953 48.9822 126.105 57.8301 126.105 68.7051C126.105 79.5801 134.953 88.428 145.828 88.428C156.703 88.428 165.551 79.5805 165.551 68.7051C165.551 57.8293 156.704 48.9822 145.828 48.9822ZM145.828 80.7741C139.173 80.7741 133.759 75.3602 133.759 68.7051C133.759 62.0501 139.173 56.6361 145.828 56.6361C152.483 56.6361 157.897 62.0501 157.897 68.7051C157.897 75.3594 152.483 80.7741 145.828 80.7741Z" fill="currentColor"></path>
                                                                    <path d="M145.963 171.49C145.867 171.256 145.748 171.034 145.611 170.828C145.473 170.617 145.312 170.422 145.136 170.246C144.96 170.07 144.765 169.909 144.554 169.771C144.348 169.634 144.126 169.515 143.892 169.419C143.663 169.324 143.422 169.247 143.177 169.201C142.683 169.102 142.178 169.102 141.684 169.201C141.439 169.247 141.198 169.324 140.969 169.419C140.735 169.515 140.513 169.634 140.306 169.771C140.096 169.909 139.901 170.07 139.725 170.246C139.549 170.422 139.388 170.617 139.25 170.828C139.112 171.034 138.994 171.256 138.898 171.49C138.802 171.719 138.726 171.96 138.68 172.205C138.63 172.45 138.603 172.703 138.603 172.952C138.603 173.2 138.63 173.453 138.68 173.698C138.726 173.943 138.802 174.184 138.898 174.413C138.994 174.647 139.112 174.869 139.25 175.075C139.388 175.286 139.549 175.481 139.725 175.657C139.812 175.745 139.905 175.829 140.001 175.908C140.099 175.987 140.201 176.063 140.306 176.132C140.513 176.269 140.735 176.388 140.969 176.484C141.198 176.579 141.439 176.656 141.684 176.702C141.929 176.752 142.182 176.778 142.43 176.778C142.679 176.778 142.932 176.752 143.177 176.702C143.422 176.656 143.663 176.579 143.892 176.484C144.126 176.388 144.348 176.269 144.554 176.132C144.66 176.062 144.762 175.987 144.859 175.908C144.956 175.829 145.048 175.745 145.136 175.657C145.312 175.481 145.473 175.286 145.611 175.075C145.748 174.869 145.867 174.647 145.963 174.413C146.058 174.184 146.135 173.943 146.185 173.698C146.234 173.453 146.257 173.2 146.257 172.952C146.257 172.703 146.234 172.45 146.185 172.205C146.135 171.96 146.058 171.719 145.963 171.49Z" fill="currentColor"></path>
                                                                    <path d="M85.7341 20.0459C85.6384 19.8163 85.5198 19.5943 85.382 19.3838C85.2442 19.1772 85.0835 18.9782 84.9075 18.8021C84.7314 18.6261 84.5363 18.4653 84.3258 18.3276C84.1191 18.1898 83.8972 18.0712 83.6637 17.9755C83.4341 17.8798 83.193 17.8071 82.9481 17.7574C82.4544 17.6579 81.9492 17.6579 81.4556 17.7574C81.2106 17.8071 80.9695 17.8798 80.7361 17.9755C80.5065 18.0712 80.2845 18.1898 80.0779 18.3276C79.8674 18.4653 79.6722 18.6261 79.4962 18.8021C79.3201 18.9782 79.1594 19.1772 79.0178 19.3838C78.88 19.5943 78.7652 19.8163 78.6696 20.0459C78.5739 20.2755 78.4973 20.5166 78.4514 20.7615C78.4017 21.0103 78.3749 21.259 78.3749 21.5116C78.3749 21.7603 78.4017 22.0091 78.4514 22.2579C78.4973 22.5028 78.5739 22.7439 78.6696 22.9735C78.7652 23.2031 78.88 23.4251 79.0178 23.6356C79.1594 23.8422 79.3201 24.0412 79.4962 24.2172C79.6722 24.3933 79.8674 24.554 80.0779 24.6918C80.2845 24.8296 80.5065 24.9482 80.7361 25.0439C80.9695 25.1395 81.2106 25.2123 81.4556 25.262C81.7005 25.3118 81.9531 25.3385 82.2018 25.3385C82.4506 25.3385 82.7032 25.3118 82.9481 25.262C83.193 25.2123 83.4341 25.1395 83.6637 25.0439C83.8972 24.9482 84.1191 24.8296 84.3258 24.6918C84.5363 24.554 84.7314 24.3933 84.9075 24.2172C85.0835 24.0412 85.2442 23.8422 85.382 23.6356C85.5198 23.4251 85.6384 23.2031 85.7341 22.9735C85.8298 22.7439 85.9063 22.5028 85.9522 22.2579C86.002 22.0091 86.0288 21.7603 86.0288 21.5116C86.0288 21.259 86.002 21.0103 85.9522 20.7615C85.9063 20.5166 85.8298 20.2755 85.7341 20.0459Z" fill="currentColor"></path>
                                                                    <path d="M175.008 17.6988C172.714 7.99787 163.987 0.755371 153.594 0.755371H33.522C15.2866 0.754988 0.450684 15.5909 0.450684 33.8263V153.899C0.450684 165.824 9.98628 175.557 21.8326 175.891C24.1272 185.592 32.8542 192.835 43.2467 192.835H174.382C186.517 192.835 196.39 182.962 196.39 170.826V141.949V39.6911C196.39 27.7663 186.855 18.0329 175.008 17.6988ZM188.736 170.827C188.736 178.742 182.297 185.182 174.382 185.182H43.2467C37.1197 185.182 31.8799 181.322 29.8236 175.908C29.2232 174.327 28.8918 172.615 28.8918 170.827V168.254V150.524L72.7964 76.0808C74.1332 73.8144 76.517 72.4911 79.1323 72.5332C81.7633 72.5783 84.0851 73.9844 85.3434 76.2955L104.247 111.007L131.725 161.462C132.419 162.737 133.733 163.459 135.089 163.459C135.708 163.459 136.335 163.309 136.916 162.993C138.772 161.982 139.458 159.657 138.447 157.801L129.53 141.428C133.445 141.608 137.296 140.341 140.362 137.797L157.572 123.52C160.332 121.23 164.408 121.331 167.051 123.755L167.95 124.578L175.604 131.594L188.736 143.632V170.827ZM188.736 133.249L175.603 121.21L167.95 115.382C162.963 113.297 157.033 114.022 152.685 117.629L135.475 131.906C133.582 133.476 131.111 134.111 128.695 133.646C126.28 133.183 124.22 131.677 123.043 129.517L110.969 107.345L104.226 94.9648V94.9644L92.0655 72.6342C89.4716 67.8716 84.6856 64.9727 79.2632 64.8801C73.8423 64.7951 68.9588 67.521 66.2037 72.1922L28.8914 135.457V39.6911C28.8914 31.7758 35.331 25.3362 43.2463 25.3362H66.8937C69.0074 25.3362 70.7207 23.6229 70.7207 21.5093C70.7207 19.3957 69.0074 17.6823 66.8937 17.6823H43.2463C31.1106 17.6823 21.2375 27.5555 21.2375 39.6911V149.479V168.198C13.8924 167.575 8.10458 161.402 8.10458 153.899V33.8263C8.10458 19.8109 19.507 8.40888 33.522 8.40888H153.594C159.721 8.40888 164.961 12.2684 167.017 17.6827H97.5093C95.3957 17.6827 93.6824 19.396 93.6824 21.5097C93.6824 23.6233 95.3957 25.3366 97.5093 25.3366H167.949L175.603 25.3925C182.949 26.0147 188.736 32.1876 188.736 39.6911V133.249Z" fill="currentColor"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="absolute top-3 inset-x-3 flex">
                                                    <div class="py-1 px-4 bg-neutral-100 dark:bg-neutral-800 rounded-full flex items-center justify-center leading-none text-xs font-medium">
                                                        111
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-yellow-600 ml-3">
                                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="-mt-8 m-8 text-center">
                                                <div class="wil-avatar relative flex-shrink-0 inline-flex items-center justify-center overflow-hidden text-neutral-100 uppercase font-semibold shadow-inner rounded-full w-16 h-16 text-2xl ring-2 ring-white">
                                                    <img class="absolute inset-0 w-full h-full object-cover" src="/images//avatars/11.jpg" alt="Fones Mimi" /><span class="wil-avatar__name">F</span>
                                                </div>
                                                <div class="mt-3">
                                                    <h2 class="text-base font-medium">
                                                        <span class="line-clamp-1">Fones Mimi</span>
                                                    </h2>
                                                    <span class="block mt-1 text-sm text-neutral-500 dark:text-neutral-400">@Author Job</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="nc-NextPrev relative flex items-center text-neutral-900 dark:text-neutral-300 justify-center" data-nc-id="NextPrev" data-glide-el="controls">
                                <button class="w-12 h-12 mr-[6px] bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 rounded-full flex items-center justify-center hover:border-neutral-300 focus:outline-none" title="Prev" data-glide-dir="<">
                                    <i class="las la-angle-left"></i></button><button class="w-12 h-12 bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-6000 dark:hover:border-neutral-500 rounded-full flex items-center justify-center hover:border-neutral-300 focus:outline-none" title="Next" data-glide-dir=">">
                                    <i class="las la-angle-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>










{{--
    <script>
        Alpine.data('slide', () => ({
            id: 0,

            next(id) {
                this.id = id
            }
        }))
    </script> --}}

    @include('partials.footer')
</x-layout>
