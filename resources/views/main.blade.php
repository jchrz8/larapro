Strona
@unless(count($products) == 0)
@foreach($products as $product)

<!-- Item 1 -->
<a href="/listings/{{$product->id}}">{{$product->title}}</a>
        

@endforeach 
@else
<p>No listings found</p>

@endunless