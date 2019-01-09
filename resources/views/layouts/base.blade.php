<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @guest
            <meta name="apit" content="{{ '' }}">
        @else
            <meta name="apit" content="{{ Auth::user()->api_token }}">
        @endguest

        <title>{{ config('app.name', 'FamilyBook') }}</title>

        @yield('meta')

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <link href="{{ asset('css/base.css') }}" rel="stylesheet" type="text/css">

        @yield('css')

        @yield('top-js')

    </head>
    <body>
        <div id="app">
            @yield('body')
        </div>

        @yield('js')

    </body>
</html>
