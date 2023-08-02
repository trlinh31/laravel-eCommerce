@extends('layouts.master')
@section('content')
    @php
        use Carbon\Carbon;
        date_default_timezone_set('UTC');
    @endphp
    <div class="grid grid-cols-[400px_1fr]">
        <div class="w-full h-[500px]">
            <img src={{ asset('image/' . $product->path) }} alt="/" class="object-cover w-full h-full">
        </div>
        <div class="pl-4">
            <h1 class="font-bold text-4xl text-blue-600 pb-6">{{ $product->name }}</h1>
            <div class="flex items-center">
                <h3 class="text-2xl pb-4 text-white mr-6">Giá: ${{ $product->price }}</h3>
                <h3 class="text-2xl pb-4 text-white">Số lượng: {{ $product->qty }}</h3>
            </div>
            <p class="text-white pb-6">{{ $product->description }}</p>
            @if ($product->qty > 0)
                <a href={{ route('cart.add', $product->id) }}
                    class="uppercase text-white px-8 py-2 bg-blue-600 rounded-lg font-bold">
                    Thêm vào giỏ
                </a>
            @else
                <button class="uppercase text-white px-8 py-2 bg-red-600 rounded-lg font-bold">Hết hàng</button>
            @endif
        </div>
    </div>
    <div class="mt-12">
        <h1 class="text-4xl text-white font-bold pb-4">Bình Luận</h1>
        <form action={{ route('shop.comment', $product->id) }} method="post">
            @csrf
            <div class="flex flex-col">
                <textarea name="message" id="" rows="3" class="resize-none outline-none p-1"></textarea>
                <button type="submit" class="w-[10%] bg-blue-600 text-white mt-4 py-2">Gửi</button>
            </div>
        </form>
        <ul class="mt-16">
            @if ($comments->count() > 0)
                @foreach ($comments as $comment)
                    @php
                        $created_at = Carbon::parse($comment->created_at)->tz('Asia/Ho_Chi_Minh');
                        $formatted_time = $created_at->format('d/m/Y H:i:s');
                    @endphp
                    <li class="text-white mb-4 bg-blue-600 p-4">
                        <h2 class="font-bold text-xl">
                            {{ $comment->name }}
                            <span class="pl-3 text-sm font-medium">{{ $formatted_time }}</span>
                        </h2>
                        <p class="text-gray-300">{{ $comment->messages }}</p>
                    </li>
                @endforeach
            @else
                <li class="text-white mb-4 bg-blue-600 p-4">Không có đánh giá nào</li>
            @endif
        </ul>
    </div>
@endsection
