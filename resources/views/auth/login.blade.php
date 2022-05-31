@extends('layouts.app')

@section('content')

<!-- hero section -->
<section class="bg-gray-200">
    <div class="flex justify-center">
        <div class="px-20 py-2 lg:w-1/2">
            <div class="w-full  text-center">
                <h1 class="mb-2 text-3xl font-medium text-gray-900 text-capitalize">
                    OneCollab Messenger
                </h1>
            </div>
        </div>
</section>

<section class="px-10 py-10 bg-gray-200">
    <div class="p-10 mx-auto bg-white rounded-lg shadow md:w-3/4 lg:w-1/2">
        <h3 class="text-2xl font-bold text-center">Sign In</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="block pr-1 mt-2">
                <input id="email" type="email" class="w-full p-3 border border-gray-300 rounded-full
                    shadow focus:outline-none focus:ring-2 focus:ring-purple-600 @error('email') is-invalid @enderror" placeholder="Enter your Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>
                        <p class="mt-1 ml-4 text-sm text-red-400">Email field is required!</p>
                    </strong>
                </span>
                @enderror

            </div>

            <div class="block pr-1 mt-2">
                <input id="password" type="password" class=" @error('password') is-invalid @enderror w-full p-3 border border-gray-300 rounded-full shadow focus:outline-none focus:ring-2 focus:ring-purple-600" placeholder="Enter you name" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="flex justify-center mt-2">
                <div class="flex-col">
                    <button type="submit" class="px-8 py-2 text-white bg-blue-400 rounded-xl">
                        {{ __('Login') }}
                    </button>
                    <!--
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif -->
                </div>
            </div>


        </form>
    </div>
</section>

@endsection