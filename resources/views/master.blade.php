<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.header')
    </head>
    <body>
        <div class="container flex-center full-height">
            <div id="app">
                @yield('header')
                @yield('content')
                @yield('footer')
            </div>
        </div>
        @include('partials.footer')
    </body>
</html>
