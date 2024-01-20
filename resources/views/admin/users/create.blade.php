@extends('layout.app')
@section('content')
    <!-- component -->
<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="mx-auto w-full max-w-[550px]">
      <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="mb-5">
          <label for="barcode" class="mb-3 block text-base font-bold text-[#07074D]">
            بارکۆد
          </label>
          <input
            type="text"
            name="barcode"
            id="barcode"
            placeholder="باڕکۆد"
            value="{{ old('barcode') }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
            @error('barcode')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
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
          <label for="buy_price" class="mb-3 block text-base font-bold text-[#07074D]">
            نرخی کڕین
          </label>
          <input
            type="text"
            name="buy_price"
            id="buy_price"
            placeholder="نرخی كڕین"
            value="{{ old('buy_price') }}"

            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
            @error('buy_price')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
          <label for="selling_price" class="mb-3 block text-base font-bold text-[#07074D]">
            نرخی فرۆشتن
          </label>
          <input
            type="text"
            name="selling_price"
            id="selling_price"
            placeholder="نرخی فرۆشتن"
            value="{{ old('selling_price') }}"

            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
            @error('selling_price')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
          <label for="quantity" class="mb-3 block text-base font-bold text-[#07074D]">
            دانە
          </label>
          <input
            type="text"
            name="quantity"
            id="quantity"
            placeholder="دانە"
            value="{{ old('quantity') }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
            @error('quantity')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
          <label for="create_date" class="mb-3 block text-base font-bold text-[#07074D]">
            بەرواری دروسکردن
          </label>
          <input
            type="date"
            name="create_date"
            id="create_date"
            placeholder="بەرواری دروسکردن"
            value="{{ old('create_date') }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
            @error('create_date')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
          <label for="expire_date" class="mb-3 block font-bold text-base text-[#07074D]">
            بەرواری فرۆشتن
          </label>
          <input
            type="date"
            name="expire_date"
            id="expire_date"
            value="{{ old('expire_date') }}"
            placeholder=" بەرواری فرۆشتن"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"/>
            @error('expire_date')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-5">
            <select name="category_id" id="category" class="p-2 bg-gray-100 px-4 text-lg  w-full">
              <option value="">جۆرێک هەلبژێرە</option>
                @foreach ($category as $item)
                  <option class="p-2 mb-2" value="{{ $item->id}}">{{ $item->name }}</option>
                @endforeach
              </select>
              @error('category_id')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <select name="suppliers_id" id="category" class="p-2 bg-gray-100 px-4 text-lg  w-full">
              <option value=""> کۆمپانیا</option>
                @foreach ($companies as $item)
                  <option class="p-2 mb-2" value="{{ $item->id}}">{{ $item->name }}</option>
                @endforeach
              </select>
              @error('suppliers_id')
              <p class="text-red-600 text-sm">{{ $message }}</p>
            @enderror
        </div>
          <button class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection
