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
						<p>Favorite Art Finds Its Place – Carting Creativity</p>
						<h1>Your Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
    <div class="cart-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="cart-table-wrap">
                        <table class="cart-table">
                            <thead class="cart-table-head">
                                <tr class="table-head-row">
                                    <th class="product-remove"></th>
                                    <th class="product-image">Product Image</th>
                                    <th class="product-name">Name</th>
                                    <th class="product-price">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cartItems as $Item)
                                <tr class="table-body-row">
                                    <td class="product-remove">
                                        <form action="{{ route('remove_from_cart', ['id' => $Item->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"><i class="far fa-window-close"></i></button>
                                        </form>
                                    </td>
                                    <td class="product-image"><img src="{{ $Item->photo }}" alt="{{ $Item->product_name }}"></td>
                                    <td class="product-name">{{ $Item->product_name }}</td>
                                    <td class="product-price">{{ $Item->product_price }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
	{{-- <div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th> --}}
									{{-- <th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th> --}}
								{{-- </tr>
							</thead>
							<tbody>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="assets/img/products/product-img-1.jpg" alt=""></td>
									<td class="product-name">Chronicles of Chroma</td>
									<td class="product-price">KSH 85,000</td> --}}
									{{-- <td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td> --}}
								{{-- </tr>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="assets/img/products/product-img-2.jpg" alt=""></td>
									<td class="product-name">Silhouette Sonata</td>
									<td class="product-price">KSH 70,000</td> --}}
									{{-- <td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td> --}}
								{{-- </tr>
								<tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="assets/img/products/product-img-3.jpg" alt=""></td>
									<td class="product-name">Ephemeral Bonds</td>
									<td class="product-price">KSH 35,000</td> --}}
									{{-- <td class="product-quantity"><input type="number" placeholder="0"></td>
									{{-- <td class="product-total">1</td> --}}
								{{-- </tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody> --}}
								{{-- <tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td>KSH 190,000</td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>1,000</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>KSH 191,000</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="/cart" class="boxed-btn">Update Cart</a>
							<a href="/checkout" class="boxed-btn black">Check Out</a>
						</div>
					</div>

					<div class="coupon-section">
						<h3>Apply Coupon</h3>
						<div class="coupon-form-wrap">
							<form action="index.html">
								<p><input type="text" placeholder="Coupon"></p>
								<p><input type="submit" value="Apply"></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

	<!-- end cart -->


@endsection
