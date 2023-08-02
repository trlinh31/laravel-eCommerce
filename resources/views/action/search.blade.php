@extends('layouts.master')
@section('content')
    <div class="flex items-center justify-between">
        @include('layouts.search')

        @include('layouts.filter')
    </div>
    <div class="mt-8">
        <h1 class="text-white font-bold text-4xl">For All</h1>
        @if ($results->isNotEmpty())
            <div class="grid grid-cols-4 gap-x-4 gap-y-6">
                @foreach ($results as $result)
                    <div class="text-center">
                        <img src={{ asset('image/' . $result->path) }} alt="/" class="object-cover w-full h-[400px]">
                        <a href="./product/{{ $result->id }}" class="text-white">{{ $result->name }}</a>
                        <p class="text-gray-300 text-sm">${{ $result->price }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <div>
                <h2 class="text-center text-white text-4xl pt-8 uppercase font-bold">No products found</h2>
            </div>
        @endif
    </div>
@endsection
