@extends('layout.app')
@section('content')
    <!-- component -->
<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
      <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="mb-5">
          <label for="name" class="mb-3 block text-base font-bold text-[#07074D]">
            ناو
        </label>
          <input
            type="text"
            name="name"
            id="name"
            placeholder="ناو"
            value="{{ old('name') }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
            @error('name')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
          <label for="email" class="mb-3 block text-base font-bold text-[#07074D]">
            ئیمایڵ
          </label>
          <input
            type="text"
            name="email"
            id="email"
            placeholder="ئیمایڵ"
            value="{{ old('email') }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
            @error('email')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
          <label for="buy_price" class="mb-3 block text-base font-bold text-[#07074D]">
            ژمارەی نهێنی
          </label>
          <input
            type="text"
            name="password"
            id="password"
            placeholder="ژمارەی نهێنی"
            value="{{ old('password') }}"

            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
            @error('password')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
          <label for="password_confirmation" class="mb-3 block text-base font-bold text-[#07074D]">
             دلنیاکردنوەوەی وشەی نهێنی
          </label>
          <input
            type="text"
            name="password_confirmation"
            id="password_confirmation"
            placeholder="دلنیاکردنوەوەی وشەی نهێنی"
            value="{{ old('password_confirmation') }}"

            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
            @error('password_confirmation')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
          <button class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
            زیدکردنی بەکارهێنەر
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
