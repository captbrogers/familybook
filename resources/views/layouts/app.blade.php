@extends('layouts.base')

@section('css')
<!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('top-js')
<script src="{{ asset('js/app.js') }}" defer></script>

@endsection

@section('body')

            <vue-snotify></vue-snotify>

            @yield('content')

@endsection
