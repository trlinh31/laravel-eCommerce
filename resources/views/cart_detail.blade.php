@extends('layouts.master')
@section('content')
    @if (Cart::count() > 0)
        <div class="text-white font-bold text-3xl pb-4">Số sản phẩm</div>
        <div class="grid grid-cols-[1fr_2fr_2fr_2fr_2fr_1fr] border py-4 gap-y-4">
            <div class="text-center text-white uppercase font-bold">STT</div>
            <div class="text-center text-white uppercase font-bold">Ảnh</div>
            <div class="text-center text-white uppercase font-bold">Tên Sản Phẩm</div>
            <div class="text-center text-white uppercase font-bold">Số Lượng</div>
            <div class="text-center text-white uppercase font-bold">Đơn Giá</div>
            <div class="text-center text-white uppercase font-bold"></div>
            <?php
            $index = 1;
            ?>
            @foreach (Cart::content() as $cart)
                <div class="flex items-center justify-center text-white">{{ $index }}</div>
                <div>
                    <img src={{ asset('image/' . $cart->options->image) }} alt=""
                        class="mx-auto h-[200px] object-cover">
                </div>
                <div class="flex items-center justify-center text-white">{{ $cart->name }}</div>
                <div class="flex items-center justify-center">
                    <form action={{ route('cart.update', $cart->rowId) }} method="post"
                        class="flex items-center justify-center">
                        @csrf
                        <input type="number" name="qty" id="qty" min="1" value="{{ $cart->qty }}"
                            class="outline-none w-[50px] pl-2 mr-1" onchange="this.form.submit()">
                        {{-- <button type="submit"><i class='text-white text-2xl bx bx-plus'></i></button> --}}
                    </form>
                </div>
                <div class="flex items-center justify-center text-white">${{ $cart->price }}</div>
                <div class="flex items-center justify-center text-white">
                    <a href={{ route('cart.remove', $cart->rowId) }}><i class='text-2xl bx bxs-trash'></i></a>
                </div>
                <?php
                $index++;
                ?>
            @endforeach
        </div>
        <div class="flex items-center justify-between mt-6">
            <a href={{ route('cart.delete') }} class="text-white font-bold text-3xl">Reset Cart</a>
            <h1 class="text-white font-bold text-3xl">
                TOTAL: ${{ Cart::total() }}
            </h1>
        </div>
    @else
        <h1 class="text-white text-center text-4xl py-4 font-bold">Giỏ hàng trống! <a href={{ route('shop.index') }}
                class="underline text-blue-600 uppercase">Mua sắm ngay</a></h1>
    @endif

@endsection
