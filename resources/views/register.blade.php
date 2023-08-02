@extends('layouts.master')
@section('content')
    <div class="max-w-[400px] mx-auto bg-white shadow-md shadow-gray-600 p-4 rounded-lg">
        <form action={{ route('account.register') }} method="post">
            @csrf
            <div class="flex flex-col">
                <h1 class="text-center font-bold text-3xl pb-5">REGISTER</h1>
                <label for="username">Username <span class="text-red-600">*</span></label>
                <input type="text" class="outline-none border-b my-4" id="username" name="username">
                <p class="text-sm text-red-600 mb-4">{{ $errors->error->first('username') }}</p>
                <label for="email">Email <span class="text-red-600">*</span></label>
                <input type="email" class="outline-none border-b my-4" id="email" name="email">
                <p class="text-sm text-red-600 mb-4">{{ $errors->error->first('email') }}</p>
                <label for="password">Password <span class="text-red-600">*</span></label>
                <input type="password" class="outline-none border-b my-4" id="password" name="password">
                <p class="text-sm text-red-600 mb-4">{{ $errors->error->first('password') }}</p>
                <label for="confirmed">Confirm Password <span class="text-red-600">*</span></label>
                <input type="password" class="outline-none border-b my-4" id="confirmed" name="confirmed">
                <p class="text-sm text-red-600 mb-4">{{ $errors->error->first('confirmed') }}</p>
                <div class="text-right text-gray-600">
                    Already have an account?
                    <a href={{ route('account.login') }} class="text-blue-600">Login</a>
                </div>
                <button type="submit" class="w-full py-2 bg-blue-600 text-white mt-4">Register</button>
            </div>
        </form>
    </div>
@endsection
