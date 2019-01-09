@extends('layouts.app')

@section('content')

<div class="flex justify-center bg-teal">
    <nav class="flex items-center justify-between flex-wrap p-6 w-3/4">
        <div class="flex items-center flex-no-shrink text-white mr-6">
            <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/>
            </svg>
            <span class="font-semibold text-xl tracking-tight">{{ config('app.name') }}</span>
        </div>

        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>

        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">Home</a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">Link 2</a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white">Link 3</a>
            </div>
            <div class="flex items-center">
                <svg class="feather feather-bell inline-block mr-4 text-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    <path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path>
</svg>
                <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 lg:mt-0">Settings</a>
            </div>
        </div>
    </nav>
</div>

<main-listener :keys="{{ json_encode($keys) }}"></main-listener>

<div class="flex justify-center">
    <div class="flex w-3/4 mt-3 mb-8">
        <div id="main-feed" class="w-2/3 p-3">
            <new-post-form :action-url="'{{ url('/posts/new') }}'"></new-post-form>

            @foreach ($posts as $post)
                <post :post="{{ $post }}"></post>
            @endforeach
        </div>
        <aside id="main-sidebar" class="w-1/3 p-3 bg-pink-lightest">
            <p>Welcome, {{ auth()->user()->first_name }}!</p>
            @if (auth()->user()->is_admin)
            @endif
        </aside>
    </div>
</div>

@endsection
