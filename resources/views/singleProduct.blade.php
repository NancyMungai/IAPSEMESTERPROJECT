@extends('layout')
@section('content')

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->

	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1> Products</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->


    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="{{ asset($product->photo )}}" alt="{{ $product->product_name }}">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="single-product-content">
                        <h3>{{ $product->product_name }}</h3>
                        <p class="single-product-pricing"><span></span> KSH {{ $product->product_price }}</p>

                        <div class="single-product-form">
                            <form action="index.html">
                                {{-- <input type="number" placeholder="0"> --}}
                            </form>
                            <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                            {{-- <p><strong>Categories: </strong>Fruits, Organic</p> --}}
                        </div>
                        <h4>Share:</h4>
                        <ul class="product-share">
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single product -->

    <!-- more products -->
    <div class="more-products mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Related</span> Products</h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
<!-- Loop through a limited number of related products -->
<!-- Loop through a limited number of related products -->
@foreach ($Products as $product)
    <div class="col-lg-4 col-md-6 text-center">
        <div class="single-product-item">
            <div class="product-image">
                <a href="/singleProduct/{{$product->id }}"><img src="{{ asset($product->photo )}}" alt="{{$product->product_name}}"></a>
            </div>
            <h3>{{$product->product_name}}</h3>
            <p class="product-price"><span></span> {{$product->product_price}} </p>
            <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
        </div>
    </div>
@endforeach


            </div>
        </div>
    </div>
    <!-- end more products -->

@endsection
