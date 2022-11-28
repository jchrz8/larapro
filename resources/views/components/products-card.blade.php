@props(['product'])
<div class=" mt-4">

        <div class="mt-4 ">
            <h3 class="text-3xl w-80 mr-6 ">
                <a class="" href="/listings/{{$product->id}}">{{$product->title}}</a>
            </h3>
        </div>
        <div class="mt-4 flex">
            <img
            class="hidden w-80 h-80 mr-6 ml-4 md:block rounded"
            src="{{
                asset('images/no_image.jpg')
            }}"
            alt=""
            />
            <div class="row">
                
                <div class="mt-2 mb-4">
                    <a class='fas fa-wallet '>{{$product->value}} zł</a>
                </div>
                <div class="mt-2 mb-4">
                    <a >{{$product->desc}}</a>
                </div>
            </div>
        </div>
</div>