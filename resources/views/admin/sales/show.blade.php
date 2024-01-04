@extends('layout.app')
@section('content')
<div class="mb-6 flex text-2xl font-bold items-center justify-center gap-x-4 bg-[#6A64F1] text-white">
    <h1 class="p-2">  وەصڵی ژمارە : {{ $data->id }}</h1>
    <h1 class="p-2"> ناوی کاشێر : {{ $data->casher }}</h1>
    <h1 class=" p-2"> کۆی گشتی وەصڵ : {{ $data->total }} د.ع </h1>
</div>
<!-- component -->
<div class="table w-full">
    <table class="w-full border">
        <thead>
            <tr class="bg-gray-50 border-b">
                <th class="p-2 border-r cursor-pointer text-lg font-bold  text-gray-500">
                    <div class="flex items-center justify-center">
                        ID
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-lg font-bold  text-gray-500">
                    <div class="flex items-center justify-center">
                        بارکۆد
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-lg font-bold  text-gray-500">
                    <div class="flex items-center justify-center">
                         ناوی کاڵا
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
                        نرخ
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-lg font-bold  text-gray-500">
                    <div class="flex items-center justify-center">
                        کۆی نرخی دانە
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data->order as $row)
                <tr class="bg-gray-100 text-center border-b  text-gray-600">
                    <td class="p-2 border-r">{{ $row->id }}</td>
                    <td class="p-2 border-r">{{ $row->barcode }}</td>
                    <td class="p-2 border-r">{{ $row->name }}</td>
                    <td class="p-2 border-r">{{ $row->quantity }}</td>
                    <td class="p-2 border-r">{{ $row->sell_price }} د.ع </td>
                    <td class="p-2 border-r">{{ $row->sell_price*$row->quantity }} د.ع </td>
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

