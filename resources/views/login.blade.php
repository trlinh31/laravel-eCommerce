@extends('layouts.master')
@section('content')
    <div class="max-w-[500px] mx-auto bg-white shadow-md shadow-gray-600 p-4 rounded-lg">
        <form action={{ route('account.login') }} method="post">
            @csrf
            <div class="flex flex-col">
                <h1 class="text-center font-bold text-3xl pb-5">LOGIN</h1>
                <label for="email">Email <span class="text-red-600">*</span></label>
                <input type="email" class="outline-none border-b my-4" id="email" name="email">
                <label for="password">Password <span class="text-red-600">*</span></label>
                <input type="password" class="outline-none border-b my-4" id="password" name="password">
                <div class="flex items-center justify-between">
                    <div>
                        <input type="checkbox" class="outline-none mr-2" id="remember" name="remember">
                        <label for="remember" class="text-gray-400">Remember Me</label>
                    </div>
                    <div class="text-gray-600">
                        Don't have an account?
                        <a href={{ route('account.register') }} class="text-blue-600">Register</a>
                    </div>
                </div>
                <button type="submit" class="w-full py-2 bg-blue-600 text-white mt-4">Login</button>
            </div>
        </form>
    </div>
@endsection
