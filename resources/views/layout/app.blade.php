<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  @vite('resources/css/app.css')
</head>
<body>
    <div dir="rtl" class="">
        {{-- <div class="h-14 bg-gray-200 shadow-lg flex justify-between">
            <div class="basis-2/12 flex items-center justify-center text-3xl text-blue-600  border-b-2  border-white">
                <h1>سیستەمی مارکێت</h1>
            </div>
            <div class="flex items-center px-10 gap-x-4">
                <a href="{{ route('pos.index') }}" class="font-sans text-xl font-bold bg-[#6A64F1] text-white w-44 p-2 text-center rounded-md" id="pos">بەشی فرۆشتن</a>
                <h1 class="text-xl">بروا ڕەجەب</h1>
                <div class="h-10 w-10 bg-red-600 rounded-full flex items-center justify-center">
                </div>
            </div>
        </div> --}}
        <div class="flex h-screen">
            <div class="basis-2/12 bg-gray-200 shadow-lg text-2xl flex flex-col gap-y-2 font-bold relative">
                <div class="border-b-2 border-white h-14  mt-2 mb-2 flex items-center justify-center">
                    <h1 class="font-sans">brwa</h1>
                    {{-- <div class="h-10 w-10 rounded-full bg-blue-500 ">
                    </div> --}}
                </div>
                <img src="" alt="">
                <a href="{{ route('home') }}" class="border-b-2 {{in_array(Route::currentRouteName(), ['home'])?'bg-gradient-to-l from-[#6A64F1] to-transparent text-white':''}}  border-white flex px-8 p-2 items-center gap-x-3"> <i class="fa-solid fa-border-none"></i> پەڕەی سەرەکی</a>
                <a href="{{ route('pos.index') }}" class="{{in_array(Route::currentRouteName(), ['pos.index'])?'bg-gradient-to-l from-[#6A64F1] to-transparent text-white':''}} border-b-2 bg-gradient-to-l border-white flex px-8 p-2 items-center gap-x-3"><i class="fa-solid fa-cart-shopping"></i> بەشی فرۆشتن</a>
                <a href="{{ route('sales') }}" class="{{in_array(Route::currentRouteName(), ['sales'])?'bg-gradient-to-l from-[#6A64F1] to-transparent text-white':''}} border-b-2 bg-gradient-to-l border-white flex px-8 p-2 items-center gap-x-3">  <i class="fa-solid fa-file-invoice"></i> وەصڵی فرۆشتن</a>
                <a href="{{ route('product.index') }}" class="{{in_array(Route::currentRouteName(), ['product.index'])?'bg-gradient-to-l from-[#6A64F1] to-transparent text-white':''}} border-b-2 border-white flex px-8 p-2 items-center gap-x-3"> <i class="fa-solid fa-box"></i> کاڵاکان</a>
                <a href="{{ route('expire') }}" class="{{in_array(Route::currentRouteName(), ['expire'])?'bg-gradient-to-l from-[#6A64F1] to-transparent text-white':''}} border-b-2 border-white flex px-8 p-2 items-center gap-x-3">  <i class="fa-solid fa-list"></i> کاڵا بەسەرچوەکان</a>
                <a href="{{ route('category.index') }}" class="{{in_array(Route::currentRouteName(), ['category.index'])?'bg-gradient-to-l from-[#6A64F1] to-transparent text-white':''}} border-b-2 border-white flex px-8 p-2 items-center gap-x-3"> <i class="fa-solid fa-layer-group"></i> جۆرەکان</a>
                <a href="{{ route('supplier.index') }}" class="{{in_array(Route::currentRouteName(), ['supplier.index'])?'bg-gradient-to-l from-[#6A64F1] to-transparent text-white':''}} border-b-2 border-white flex px-8 p-2 items-center gap-x-3"> <i class="fa-solid fa-truck-field"></i> کۆمپانیاکان</a>
                <a href="{{ route('user.index') }}" class="{{in_array(Route::currentRouteName(), ['user.index'])?'bg-gradient-to-l from-[#6A64F1] to-transparent text-white':''}} border-b-2 border-white flex px-8 p-2 items-center gap-x-3"> <i class="fa-regular fa-user"></i> بەکارهەنەر</a>
                <form  id="logout-form" action="{{ route('logout') }}" method="POST" class="bottom-1 absolute px-8 p-2 ">
                    @csrf
                    <button>چونەدەرەوە</button>
                </form>
            </div>
            <div class="basis-10/12 p-4">
                @yield('content')
            </div>
        </div>
    </div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
</body>
</html>
