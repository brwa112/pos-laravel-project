@extends('layout.app')
@section('content')
<div class="mb-6 flex  items-center gap-x-4">
    <h1>کاڵاکان</h1>
    <form action="{{ route('sales') }}" method="get">
        @csrf
        <div class="flex">
            <div class="flex">
                <input type="search" name="search" class="w-full px-4 py-1 text-gray-800 rounded-l-none rounded-full bg-gray-100 focus:outline-none"
                    placeholder="گەڕان " x-model="search">
            </div>
            <div>
                <button type="submit" class="flex items-center bg-[#6A64F1] justify-center w-12 h-12 text-white rounded-l-lg"
                    :class="(search.length > 0) ? 'bg-purple-500' : 'bg-gray-500 cursor-not-allowed'"
                    :disabled="search.length == 0">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </form>
</div>


<!-- component -->


<div class="table w-full">
    <table class="w-full border">
        <thead>
            <tr class="bg-gray-50 border-b">
                <th class="p-2 border-r cursor-pointer text-lg font-bold  text-gray-500">
                    <div class="flex items-center justify-center">
                        ژمارەی وەصڵ
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
                        کۆی گشتی وەصڵ
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-lg font-bold  text-gray-500">
                    <div class="flex items-center justify-center">
                          بەرواری وەصڵ
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-lg font-bold  text-gray-500">
                    <div class="flex items-center justify-center">
                        کاڵای کڕاو
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
                    <td class="p-2 border-r">{{ $row->id }}</td>
                    <td class="p-2 border-r">{{ $row->casher }}</td>
                    <td class="p-2 border-r">{{ $row->total }} د.ع  </td>
                    <td class="p-2 border-r">{{ $row->created_at }} </td>
                    <td class="border-r">
                        <a href="{{ route('showSale',$row->id) }}" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{--
<script>
    let deleteData = ()=>{
        Swal.fire({
            title: 'دڵنیای لە سڕینەوەی',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'بەڵی',
            cancelButtonText: 'نەخێر'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'سڕایەوە!',
                'دەیتاکە بەسەرکەوتووی سڕایەوە',
                'success'
                )

                document.getElementById('deleteForm').submit();
            }
            })

    }
</script> --}}
@endsection

