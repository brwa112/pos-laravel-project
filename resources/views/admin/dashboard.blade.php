
@extends('layout.app')
@section('content')
    <div class="p-4 grid grid-cols-4 gap-5">
        <div class="h-60  bg-gray-200 flex flex-col justify-center items-center text-3xl text-center">
            <h1 class="mb-4">فرۆشی ئەمڕۆ</h1>
            <h1 class="font-bold">{{ $today->sum('total') }} د.ع</h1>
        </div>
        <div class="h-60  bg-gray-200 py-6 p-2">
            <h1 class="text-center font-bold mb-2">فرۆش بە پێی مانگ</h1>
                <form action="{{ route('dashboard') }}" method="get" class="flex flex-col gap-y-2 items-center  ">
                    @csrf
                    <div>
                        <label for=""> سەرەتا</label>
                        <input type="date" name="star" id="" class="rounded-md px-2">
                    </div>
                    <div>
                        <label for="">کۆتای</label>
                        <input type="date" name="end" id="" class="rounded-md px-2">
                    </div>
                    <button type="submit" class="flex items-center bg-[#6A64F1] justify-center w-12 h-6 text-white rounded-lg">گەڕان</button>
                </form>
            <h1 class="text-center mt-6 text-4xl font-bold">{{ $month->sum('total') }} د.ع</h1>
        </div>
        <div class="h-60  bg-gray-200 flex justify-center items-center text-3xl text-center">
             ڕێژەی کاڵا
            <br>
            {{ App\Models\Product::count() }}
        </div>
        <div class="h-60  bg-gray-200 flex justify-center items-center text-3xl text-center text-red-500">
             کاڵای بەسەرچو
            <br>
            {{ $expire }}
        </div>
        <div class="h-60  bg-gray-200 flex justify-center items-center text-3xl text-center">
            جۆرەکان
            <br>
            {{ App\Models\category::count() }}
        </div>
        <div class="h-60  bg-gray-200 flex justify-center items-center text-3xl text-center">
             کۆمپانیاکان
            <br>
            {{ App\Models\supplier::count() }}
        </div>
    </div>
@endsection
