<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header class="py-6 bg-gradient-to-r from-blue-700 to-amber-900 h-20">
    <div class="container flex justify-between mx-auto text-white">
        <div>
            <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                My Bills
            </a>
        </div>
        <div>
            <a class="no-underline bg-gray-800 rounded-3xl px-2 hover:font-bold underline" href="/">Home</a>
            <a class="no-underline bg-gray-800 rounded-3xl px-2 hover:font-bold underline" href="/bills">Bills</a>
            <a class="no-underline bg-gray-800 rounded-3xl px-2 hover:font-bold underline" href="/about">About us</a>
            @guest
                <a class="no-underline bg-gray-800 rounded-3xl px-2 hover:font-bold underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="no-underline bg-gray-800 rounded-3xl px-2 hover:font-bold underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <span>{{ Auth::user()->name }}</span>
                <a href="{{ route('logout') }}"
                   class="no-underline bg-gray-800 rounded-3xl px-2 hover:font-bold underline"
                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            @endguest
        </div>
    </div>
</header>
    <main>
        @yield('content')
    </main>
<footer>
    @include('layouts.footer')
</footer>
</body>
</html>
