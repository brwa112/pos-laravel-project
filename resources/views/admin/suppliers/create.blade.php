@extends('layout.app')
@section('content')
    <!-- component -->
<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
      <form action="{{ route('supplier.store') }}" method="POST">
        @csrf
        <div class="mb-5">
          <label for="barcode" class="mb-3 block text-base font-bold text-[#07074D]">
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
          <label for="phoneNumber" class="mb-3 block text-base font-bold text-[#07074D]">
            ژمارە مۆبایل
          </label>
          <input
            type="text"
            name="phoneNumber"
            id="phoneNumber"
            placeholder="ژمارە مۆبایل"
            value="{{ old('phoneNumber') }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
            @error('phoneNumber')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
          <label for="address" class="mb-3 block text-base font-bold text-[#07074D]">
            ناونیشان
          </label>
          <input
            type="text"
            name="address"
            id="address"
            placeholder=" ناونیشان"
            value="{{ old('address') }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
            @error('address')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
          <button class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
            زیادکردن
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
