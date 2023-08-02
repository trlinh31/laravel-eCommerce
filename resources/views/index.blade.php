@extends('layouts.master')
@section('content')
    <div class="grid grid-cols-4 gap-x-4 gap-y-6">
        @foreach ($products as $product)
            <div class="text-center">
                <img src={{ asset('image/' . $product->path) }} alt="/" class="object-cover w-full h-[400px]">
                <a href={{ route('shop.show', $product->id) }} class="text-white">{{ $product->name }}</a>
                <p class="text-gray-300 text-sm">${{ $product->price }}</p>
            </div>
        @endforeach
    </div>
    <div class="mt-8">
        {{ $products->links() }}
    </div>
@endsection
