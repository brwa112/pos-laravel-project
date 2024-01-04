@extends('layout.app')
@section('content')
<div class="p-4">
    <form action="{{ route('cart.store') }}" method="post" class="mb-4">
        @csrf
        <div class="flex">
            <div class="flex gap-x-2 ">
                <input type="text" name="barcode" required class="w-full px-4 py-1 text-gray-800 rounded-l-none rounded-full bg-gray-100 focus:outline-none"
                    placeholder=" باڕکۆدی کاڵا">
                    <label for="" class="flex items-center">دانە</label>
                <input type="number" name="quantity" class="w-20 px-4 py-1 text-gray-800 bg-gray-100 focus:outline-none"
                    placeholder=" دانە" value="1">
            </div>
            <div>
                <button type="submit" class="flex items-center bg-[#6A64F1] justify-center w-20 h-12 text-white rounded-l-lg"
                    :class="(search.length > 0) ? 'bg-purple-500' : 'bg-gray-500 cursor-not-allowed'"
                    :disabled="search.length == 0">
                    زیادکردن
                </button>
            </div>
        </div>
        @if (session()->has('msg'))
            <p class="text-red-600">{{ session()->get('msg') }}</p>
        @endif
    </form>
    <div class="table w-full">
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-50 border-b">
                    <th class="p-2 border-r cursor-pointer text-lg font-bold  text-gray-500">
                        <div class="flex items-center justify-center">
                            باڕکۆد
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-lg font-bold  text-gray-500">
                        <div class="flex items-center justify-center">
                            ناو
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-lg font-bold  text-gray-500">
                        <div class="flex items-center justify-center">
                            نرخ
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-lg font-bold  text-gray-500">
                        <div class="flex items-center justify-center">
                            دانە
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-lg font-bold  text-gray-500">
                        <div class="flex items-center justify-center">
                            کۆی گشتی کڕین
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                    <th class="p-2 border-r cursor-pointer text-lg font-bold  text-gray-500">
                        <div class="flex items-center justify-center">
                            Action
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                            </svg>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr class="bg-gray-100 text-center border-b  text-gray-600">
                        <td class="p-2 border-r">{{ $row->barcode }}</td>
                        <td class="p-2 border-r">{{ $row->name }}</td>
                        <td class="p-2 border-r">{{ $row->sell_price }}</td>
                        <td class="p-2 border-r">{{ $row->quantity }}</td>
                        <td class="p-2 border-r">{{ $row->sell_price*$row->quantity }}</td>
                        <td class="border-r">
                            {{-- <a href="{{ route('product.edit',$row->id) }}" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</a> --}}
                            <form action="{{ route('cart.destroy',[$row->id]) }}" method="post" class="inline">
                                @csrf
                                @method('DELETE')
                                <button  class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex">
            <h1 class="bg-gray-100 text-center border w-[218px] p-2  text-gray-600 font-bold text-xl">کۆی گشتی : {{ $total }}</h1>
            <form action="{{ route('pos.store') }}" method="post">
                @csrf
                <input type="text" name="total" hidden value="{{ $total }}">
                <button class="bg-green-500 text-center border w-[259px] p-2  text-white font-bold text-xl">واصڵکردن</button>
            </form>
        </div>
    </div>
</div>
@endsection
