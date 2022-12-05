@extends('layout')
@section('content')
<form method="POST" action="/admin" enctype="multipart/form-data">
    {{-- enctype pozwala na wstawianie zdjec --}}
    @csrf
    <div class="mb-6">
        <label
            for="title"
            class="inline-block text-lg mb-2"
            >Title: </label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-1/2"
            name="title"
            value="{{old('title')}}"
        />
        @error('title')
            <p class="text-red-500 text-xs mt-1">
                {{$message}}
            </p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="value" class="inline-block text-lg mb-2"
            >Value: </label
        >
        <input
            type="number"
            step="0.01" id="totalAmt"
            class="border border-gray-200 rounded p-2 w-1/2"
            name="value"
            value="{{old('value')}}"
        />
        @error('value')
            <p class="text-red-500 text-xs mt-1">
                {{$message}}
            </p>
        @enderror
    </div>
    <div class="mb-6">
        <label
            for="tags"
            class="inline-block text-lg mb-2"
            >Tags: </label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-1/2"
            name="tags"
            value="{{old('tags')}}"
        />
        @error('tags')
            <p class="text-red-500 text-xs mt-1">
                {{$message}}
            </p>
        @enderror
    </div>

    <div class="mb-6">
        <label for="image" class="inline-block text-lg mb-2">
           Image: 
        </label>
        <input
            type="file"
            class="border form-control  border-gray-200 rounded p-2 w-1/2"
            name="images[]"
            multiple
        />
        @error('image')
        <p class="text-red-500 text-xs mt-1">
            {{$message}}
        </p>
    @enderror
    </div>

    <div class="mb-6">
        <label
            for="desc"
            class="inline-block text-lg mb-2"
        >
            Description: 
        </label>
        <textarea
            class="border border-gray-200 rounded p-2 w-1/2"
            name="desc"
            rows="10"
            
        >
        {{old('desc')}}
    </textarea>
        @error('desc')
            <p class="text-red-500 text-xs mt-1">
                {{$message}}
            </p>
        @enderror
    </div>

    <div class="mb-6">
        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Create 
        </button>

        <a href="/" class="text-black ml-4"> Back </a>
    </div>
</form>
@endsection