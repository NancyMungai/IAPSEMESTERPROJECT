@extends('layout')
   
@section('content')
    
<div class="row">
    @foreach($products as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="img_thumbnail">
                <img src="{{ $product-> product_image }}" alt="">
                <div class="caption">
                    <h4>{{ $product->product_name }}</h4>
                    <p>{{ $product->product_category }}</p>
                    <p><strong>Price: </strong> {{ $product->product_price }}$</p>
                    <p class="btn-holder"><a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-success btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
            </div>
    @endforeach
</div>
    
@endsection