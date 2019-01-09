@extends('layouts.auth')

@section('content')
<div class="flex flex-row w-screen h-screen justify-center items-center">
    <div class="flex w-3/5">
        <div class="flex w-2/5 items-center justify-center">

            <svg class="feather feather-book-open" xmlns="http://www.w3.org/2000/svg" height="256px" width="256px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1 stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" preserveAspectRatio="xMidYMid meet">
                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
            </svg>
        </div>
        <div class="flex flex-col py-4 px-6 w-3/5">
            <h1 class="w-full mb-4 text-center">Welcome to {{ config('app.name') }}</h1>
            <form action="{{ route('login') }}" method="POST" class="flex flex-col w-full">
                @csrf

                <input type="email" id="email" name="email" class="flex p-4 border w-full mb-4 self-center" placeholder="Email Address">
                <input type="password" id="password" name="password" class="flex p-4 border w-full mb-4 self-center" placeholder="Your Super Secret Password">
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <div class="flex items-center justify-between pl-2">
                    <label for="remember">
                        <input type="checkbox" id="remember" name="remember" class="mr-2">{{ __('Remember Me') }}
                    </label>
                    <button type="submit" class="button-3d button-3d-blue w-1/5 py-4 self-end">{{ __('Login') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
