<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="user-logged-in" content="{{ auth()->check() ? 'true' : 'false' }}">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.4.2/dist/cdn.min.js"></script>

</head>
 
<body>
    <div>
        <nav class="bg-green-900">
            <div class="max-w-9xl mx-auto px-6 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                    <div class="flex items-center mb-2 text-3xl font-semibold text-white dark:text-white">
                        <img src="/images/logo.png" alt="G2" class="h-11 w-auto" >
                        <span class="text-decoration">FilmFlix</span>
                    </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="{{ url('/') }}" class="hover:bg-gray-700 text-white px-3 py-2 rounded-md text-sm font-medium">Home</a>
                                <a href="{{ route('upcoming') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Up Coming</a>
                                <a href="{{ route('bioskop') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Bioskop</a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            @if (Route::has('login'))
                            @auth
                            <div x-data="{show: false}" x-on:click.away="show = false" class="ml-3 relative">
                                <div>
                                    <button x-on:click="show = !show" type="button" class="" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="/images/logouser.png" alt="">
                                    </button>
                                </div>
                                <div x-show="show" class="origin-top-right absolute right-0 mt-2 w-38 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                                    <a href="{{ url('/profile') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Profile</a>
 
                                    <a href="{{ url('/logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Logout</a>
                                </div>
                            </div>
                            @else
                            <a href="{{ route('login') }}" class="font-semibold text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
 
                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                            @endif
                            @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <main>
            <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                <div>@yield('contents')</div>
            </div>
        </main>
    </div>

    <footer>
        @include('components.footer')
    </footer>

    @yield('scripts')
</body>
 
</html>