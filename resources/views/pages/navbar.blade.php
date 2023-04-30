<nav class="relative px-4 py-4 flex justify-between items-center bg-white " dir="rtl">
    <a class="text-3xl font-bold leading-none" href="{{url('/')}}">
        <h1 class="font-bold navbar-brand font-bold"  width="10%"><span class=" text-blue-500" >One </span > Store</h1>

    </a>
    <div class="lg:hidden flex">

        <button class="navbar-burger flex items-center text-blue-600 p-3">


            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Mobile menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>

    </div>
    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
        <li><a href="{{url('cart/')}}" class="text-xl text-blue-500 font-bold w-2 list-none" ><i class="fa-solid fa-cart-shopping"></i>
                  ({{ $cartCount}})السلة
            </a>
        </li>


        <li><a class="text-sm text-blue-500 font-bold mx-3" href="#servecies">من نحن</a></li>

        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">خدماتنا</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">حساباتنا</a></li>
        <li class="text-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
            </svg>
        </li>
        <li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">الرئيسية</a></li>


    </ul>

    <div class="hidden sm:flex sm:items-center sm:ml-6  bg-blue-300">
        <x-dropdown align="left" width="48" >
            <x-slot name="trigger" class="m-56">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                    <div>@auth{{ Auth::user()->name }}@endauth</div>

                    <div class="ml-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif
</nav>
<div class="navbar-menu relative z-50 hidden">

    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">

        <div class="flex items-center mb-8">
            <a class="mr-auto text-3xl font-bold leading-none" href="#">
                <img src="images/icons8-tooth-cracked-50.png" alt="">
            </a>

            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-lime-50 hover:text-blue-400 rounded" href="#">الرئيسية</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-lime-50 hover:text-blue-600 rounded" href="#servecies">من نحن</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-lime-50 hover:text-blue-600 rounded" href="#">خدماتنا</a>
                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-lime-50 hover:text-blue-600 rounded" href="#">حساباتنا</a>
                </li>
                <li class="list-none"><a href="{{url('cart/')}}" class="text-xl text-blue-500 font-bold w-2 mx-3 list-none" href="#servecies"><i class="fa-solid fa-cart-shopping list-none"></i>
                        ({{ $cartCount}})السلة
                    </a>

                </li>
                <li class="mb-1">
                    <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-lime-50 hover:text-blue-600 rounded" href="#">المزيد</a>
                </li>

            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6">
                <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="{{ route('login') }}">Sign in</a>
                <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" href="{{ route('register') }}">Sign Up</a>
            </div>
            <p class="my-4 text-xs text-center text-gray-400">
                <span>Copyright © 2023</span>
            </p>
        </div>

    </nav>
</div>
