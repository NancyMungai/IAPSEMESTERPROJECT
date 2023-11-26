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
	<!-- <div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	end breadcrumb section

	products
	<!-- <div class="product-section mt-150 mb-150">
		<div class="container">
        
			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".paintings">Paintings</li>
                            <li data-filter=".jewellry">AfricanJewellry</li>
                            <li data-filter=".africa">Africa Collection</li>
                        </ul>
                    </div>
                </div>
            </div> -->


			<div class="row product-lists">
				@forelse($products as $product)
				<div class="col-lg-4 col-md-6 text-center strawberry">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{$product->photo}}" alt=""></a>
						</div>
						<h3>{{$product->product_name}}</h3>
						<p class="product-price"><span></span>Ksh {{$product->product_price}} </p>
						<form action="{{route('add_to_cart')}}" method = POST>
							@csrf
						<input type= "hidden"  , name= "product-name" , value = "{{$product->product_name}}" >
						<button type="submit" class="bg-red-600 hover:bg-red-700 text-white text-xl font-bold py-4 px-6 rounded shadow-lg flex items-center justify-center">
							<i class="fas fa-shopping-cart mr-2"></i> 
							Add to Cart
						</button>
						</form>
					</div>
				</div>
				@empty
				<p>No products</p>
				@endforelse
			</div>


			

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	end products -->


@endsection
