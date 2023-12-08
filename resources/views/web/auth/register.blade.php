<x-layout title="Register" description="Register description" keywords="Register keywords">
    @include('web.partials.header')
    <main class="bg-gray-50 dark:bg-gray-900 max-lg:py-32">
        <div class="flex flex-col items-center justify-center px-3 py-8 mx-auto md:h-screen lg:py-0">
            <a class="relative mb-6" title="Marsa Alam Holiday" href="{{ route('home') }}">
                <h1 class="font-bold text-lg ml-2 md:text-3xl dark:text-white aos-init aos-animate" data-aos="fade-right" title="{{ config('app.name') }}">{{ config('app.name') }}</h1><svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute w-12 -right-7 -top-2 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500">
                    <path d="M55.6314 14.8267L53.9335 14.1257C42.962 9.5956 30.7319 16.95 29.5892 28.7648L26.1439 19.705C24.5236 15.4442 27.6062 10.8624 32.1634 10.7577L37.6586 10.6315L22.2533 10.9722L19.6858 3.82297L19.4929 5.7026C19.1857 8.69612 16.6641 10.9722 13.6549 10.9722L0.97935 10.9722C11.9699 -1.56775 30.7393 -3.58629 44.1449 6.33002L55.6314 14.8267Z" fill="#2079FF"></path>
                </svg>
            </a>
            <div class="w-full bg-white/50 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700 backdrop-blur-3xl">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Register to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="username" value="{{ old('name') }}" required autocomplete="new-username">
                            <span class="text-red-500 pt-1.5 pl-1.5 inline-block">{{ $errors->first('name') }}</span>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-mail</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@email.com" value="{{ old('email') }}" required autocomplete="new-email">
                            <span class="text-red-500 pt-1.5 pl-1.5 inline-block">{{ $errors->first('email') }}</span>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autocomplete="new-password">
                            <span class="text-red-500 pt-1.5 pl-1.5 inline-block">{{ $errors->first('password') }}</span>
                        </div>
                        <div>
                            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmation Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autocomplete="new-password">
                            <span class="text-red-500 pt-1.5 pl-1.5 inline-block">{{ $errors->first('password_confirmation') }}</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input name="remember" id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <a href="{{ route('forgot-password') }}" class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Forgot password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign in</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Alordy account ? <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </main>
    @include('web.partials.footer')
</x-layout>
