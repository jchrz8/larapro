@extends('layout')
@section('content')
    <div class="flex flex-basic">
        <div class=" basis-2/3 mt-4">
            <img
            class="w-full h-2/3 mr-6 ml-4 md:block rounded"
            src="{{
                asset('images/no_image.jpg')
            }}"
            alt=""
            />
        </div>
        <div class=" basis-1/3 min-h-screen text-center row">
            
            <div class="mt-10">
                <h2 class="text-3xl font-semibold tracking-wider">
                {{$product->title}}
                </h2>
            </div>
            <div class="mt-8">
                <a class='fas fa-wallet '>{{$product->value}}</a> <a class="text-xl">zł</a>
            </div>
            <div class="mt-5 font-serif"> 
                {{$product->desc}}
            </div>
        </div>
    </div>
@endsection