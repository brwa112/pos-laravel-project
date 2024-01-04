@extends('layout.app')
@section('content')
    <!-- component -->
<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
      <form action="{{ route('supplier.update',$data->id) }}" method="POST">

        @csrf
        @method('PUT')
        <div class="mb-5">
          <label for="name" class="mb-3 block text-base font-bold text-[#07074D]">
            ناو
          </label>
          <input
          value="{{ $data->name }}"
            type="text"
            name="name"
            id="name"
            placeholder="ناو"
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
            value="{{ $data->phone_number }}"
            type="text"
            name="phoneNumber"
            id="phoneNumber"
            placeholder="ژمارە مۆبایل"
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
          value="{{ $data->address }}"
            type="text"
            name="address"
            id="address"
            placeholder=" ناونیشان"
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
