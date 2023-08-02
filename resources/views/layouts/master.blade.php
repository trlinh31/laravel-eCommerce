<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href={{ url('css/index.css') }}>
    <title>For Men | Linh Tran</title>
</head>

<body>
    <header class="bg-white">
        <div class="container max-w-[1200px] h-[64px] mx-auto">
            <div class="w-full h-full flex items-center justify-between">
                <a href={{ route('index') }} class="font-bold text-4xl">for<span class="text-blue-600">Men</span></a>
                <ul class="flex">
                    <li><a href={{ route('index') }} class="font-semibold mx-4 hover:text-blue-600">Trang chủ</a></li>
                    <li><a href={{ route('shop.index') }} class="font-semibold mx-4 hover:text-blue-600">Shop</a></li>
                    <li><a href={{ route('shop.women') }} class="font-semibold mx-4 hover:text-blue-600">Women</a></li>
                    <li><a href={{ route('shop.men') }} class="font-semibold mx-4 hover:text-blue-600">Men</a></li>
                </ul>
                <ul class="flex">
                    <li>
                        <a href={{ route('cart.index') }}>
                            <i class='mx-4 hover:text-blue-600 text-2xl cursor-pointer bx bx-cart-alt'></i>
                        </a>
                    </li>
                    <li>
                        @if (Auth::check())
                            <a href={{ route('account.logout') }} class="flex items-center mx-2 hover:text-blue-600">
                                <i class='text-2xl pr-1 bx bx-log-out'></i>
                                {{ Auth::user()->name }}
                            </a>
                        @else
                            <a href={{ route('account.login') }} class="flex items-center mx-2 hover:text-blue-600">
                                <i class='text-2xl pr-1 bx bx-user'></i>
                                Login
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container max-w-[1200px] mx-auto py-20">
        @yield('content')
    </div>
    <script>
        @if (Session::has('notification'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                positionClass: 'toast-top-right'
            }
            toastr.info("{{ session('notification') }}");
        @endif
        @if (Session::has('success'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                positionClass: 'toast-top-right'
            }
            toastr.success("{{ session('success') }}");
        @endif
        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true,
                positionClass: 'toast-top-right'
            }
            toastr.error("{{ session('error') }}");
        @endif
    </script>
</body>

</html>
