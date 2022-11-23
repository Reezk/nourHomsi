@extends('layout')
@section('title','Create Computers')
@section('content')
<div class="w-full max-w-xs">
    <div class="flex justify-center pt-8">
        <h1>Create a New Computer</h1>
    </div>

    <div class="flex justify-center">
        <form action="{{route('computers.store')}}" method="post"
            class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div>
                <label for="computer-name" class="block text-gray-700 text-sm font-bold mb-2">Computer Name</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="computer-name" value="{{old('computer-name')}}" id="computer-name">
                @error('computer-name')
                <div style="color: red">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="computer-origin" class="block text-gray-700 text-sm font-bold mb-2">Computer Origin</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="computer-origin" value="{{old('computer-origin')}}" id="computer-origin">
                @error('computer-origin')
                <div style="color: red">{{$message}}</div>
                @enderror
            </div>
            <div>
                <label for="computer-" class="block text-gray-700 text-sm font-bold mb-2">Computer Price</label>
                <input
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    type="text" name="computer-price" value="{{old('computer-price')}}" id="computer-price">
                @error('computer-price')
                <div style="color: red">{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="appearance-none checked:bg-blue-500">submit</button>

        </form>
    </div>
</div>
@endsection