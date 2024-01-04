@extends('layout.app')
@section('content')
<form action="{{ route('category.update',$category) }}" method="post" class="mb-8 mt-4">
    @csrf
    @method('PUT')
    <div class="flex gap-x-4 items-center font-bold">
        <div class="">
            <input type="text" name="name" id="" class="px-2 p-1 outline-none bg-gray-300" placeholder="ناوی جۆر" value="{{ $category->name }}">
        </div>
        <button class="bg-blue-600 w-32 text-center p-2 text-white rounded-sm">زیادکردنی جۆر</button>
    </div>
    @error('name')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror
</form>
@endsection
