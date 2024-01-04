@extends('layout.app')
@section('content')
<h1>جۆرەکان</h1>
<form action="{{ route('category.store') }}" method="post" class="mb-8 mt-4">
    @csrf
    <div class="flex gap-x-4 items-center font-bold">
        <div class="flex">
            <div class="flex">
                <input type="search" name="name" class="w-full px-4 py-1 text-gray-800 rounded-l-none rounded-full bg-gray-100 focus:outline-none"
                    placeholder=" ناوی جۆر" x-model="search">
            </div>
            <div>
                <button type="submit" class="flex items-center bg-[#6A64F1] justify-center w-20 h-12 text-white rounded-l-lg"
                    :class="(search.length > 0) ? 'bg-purple-500' : 'bg-gray-500 cursor-not-allowed'"
                    :disabled="search.length == 0">
                    زیادکردن
                </button>
            </div>
        </div>
    </div>
    @error('name')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror
</form>
<!-- component -->
<div class="table w-full " >
    <table class="w-full border">
        <thead>
            <tr class="bg-gray-50 border-b">
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        ID
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>
                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                    <div class="flex items-center justify-center">
                        Name
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                        </svg>
                    </div>
                </th>

                <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
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
                <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                    <td class="p-2 border-r">{{ $row->id }}</td>
                    <td class="p-2 border-r">{{ $row->name }}</td>
                    <td class="border-r">
                        <a href="{{ route('category.edit',$row->id) }}" class="bg-blue-500 p-2 text-white hover:shadow-lg text-xs font-thin">Edit</a>
                        <form  action="{{ route('category.destroy',$row->id) }}" method="post" class="inline">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 p-2 text-white hover:shadow-lg text-xs font-thin">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- <script>
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
                    document.getElementsByClassName('deleteForm').submit();
                }
                })

        }
</script> --}}
@endsection
