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
                    <p>Explore a whole new world</p>
                    <h1>Shop</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->
<!-- products -->
<div class="product-section mt-150 mb-150">
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
        </div>

        <div class="row product-lists">
            @foreach($Products as $product)
                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct/{{$product->id}}"><img src="{{$product->photo}}" alt="{{$product->product_name}}"></a>
                        </div>
                        <h3>{{$product->product_name}}</h3>
                        <p class="product-price"><span></span> Ksh {{$product->product_price}} </p>
                        {{-- <form id="addToCartForm_{{$product->id}}" data-product-id="{{$product->id}}">
                            @csrf
                            <input type="hidden" name="product-name" value="{{$product->product_name}}">
                            {{-- <button type="button" class="cart-btn add-to-cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</button> --}}
                            {{-- <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </form> --}}
                        <form method="post" action="{{ route('add_to_cart') }}">
                            @csrf
                            <input type="hidden" name="product-name" value="{{ $product->product_name }}">
                            <input type="hidden" name="product-id" value="{{ $product->id }}">
                            <button type="submit">Add to Cart</button>
                        

                    </div>
                </div>
            @endforeach

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

@endsection

{{--
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
                        <p>Fresh and Organic</p>
                        <h1>Shop</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- products -->
    <div class="product-section mt-150 mb-150">
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
            </div>

            <div class="row product-lists">
                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct/{{$product->id}}"><img src="{{$product->image}}" alt="{{$product->name}}"></a>
                        </div>
                        <h3>Togetherness</h3>
                        <p class="product-price"><span></span> Ksh 15,000 </p>
                        <form action="/add_to_cart" method = POST>
                            @csrf
                        <input type= "hidden"  , name= "product-name" , value = "product-name" >
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center berry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image2.jpg" alt=""></a>
                        </div>
                        <h3>Whispering Meadows</h3>
                        <p class="product-price"><span></span>Ksh 12,900 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center lemon">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image3.jpg" alt=""></a>
                        </div>
                        <h3>Mystic Veil</h3>
                        <p class="product-price"><span></span> Ksh 18,100 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image4.jpg" alt=""></a>
                        </div>
                        <h3>Tranquil Dusk</h3>
                        <p class="product-price"><span></span> Ksh 17,850 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image5.jpg" alt=""></a>
                        </div>
                        <h3>Enchance of Eternity</h3>
                        <p class="product-price"><span></span> Ksh 18,750 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
				</form>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image6.jpg" alt=""></a>
                        </div>
                        <h3>Whimsical Rhapsody</h3>
                        <p class="product-price"><span></span>Ksh 7,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                     </div>

                     <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image25.jpg" alt=""></a>
                        </div>
                        <h3> Prairie Mountain</h3>
                        <p class="product-price"><span></span>Ksh 22,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image26.jpg" alt=""></a>
                        </div>
                        <h3> Mystical Feelings</h3>
                        <p class="product-price"><span></span>Ksh 35,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image7.jpg" alt=""></a>
                        </div>
                        <h3>Infinite Whispers</h3>
                        <p class="product-price"><span></span>Ksh 17,800 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image8.jpg" alt=""></a>
                        </div>
                        <h3>Velvet Serenity</h3>
                        <p class="product-price"><span></span>Ksh 21,000 </p>
                        <a href="/cart#" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image9.jpg" alt=""></a>
                        </div>
                        <h3>Silent Embers</h3>
                        <p class="product-price"><span></span>Ksh 15,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image10.jpg" alt=""></a>
                        </div>
                        <h3>Galatic Mrelody</h3>
                        <p class="product-price"><span></span>Ksh 20,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image11.jpg" alt=""></a>
                        </div>
                        <h3>Spectral Whirlwind</h3>
                        <p class="product-price"><span></span>Ksh 27,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image12.jpg" alt=""></a>
                        </div>
                        <h3>Whispers of the sea</h3>
                        <p class="product-price"><span></span>Ksh 22,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image13.jpg" alt=""></a>
                        </div>
                        <h3>Fragile Cosmos</h3>
                        <p class="product-price"><span></span>Ksh 21,300 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image14.jpg" alt=""></a>
                        </div>
                        <h3>Stardust Symphony</h3>
                        <p class="product-price"><span></span>Ksh 9,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image15.jpg" alt=""></a>
                        </div>
                        <h3>Celestial Ballet</h3>
                        <p class="product-price"><span></span>Ksh 12,900 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image16.jpg" alt=""></a>
                        </div>
                        <h3>Gental Rain Rhapsody</h3>
                        <p class="product-price"><span></span>Ksh 16,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image17.jpg" alt=""></a>
                        </div>
                        <h3>Sunlit Valley Overtune</h3>
                        <p class="product-price"><span></span>Ksh 16,700 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image18.jpg" alt=""></a>
                        </div>
                        <h3>Harbor of Tranquility</h3>
                        <p class="product-price"><span></span>Ksh 25,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image19.jpg" alt=""></a>
                        </div>
                        <h3>Serene Lakeside</h3>
                        <p class="product-price"><span></span>Ksh 19,630 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image21.jpg" alt=""></a>
                        </div>
                        <h3>Hushed Tidal Melody</h3>
                        <p class="product-price"><span></span>Ksh 27,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image22.jpg" alt=""></a>
                        </div>
                        <h3>Aquamarine Mirage</h3>
                        <p class="product-price"><span></span>Ksh 30,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image23.jpg" alt=""></a>
                        </div>
                        <h3> Emerald Euphoria</h3>
                        <p class="product-price"><span></span>Ksh 27,900 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image24.jpg" alt=""></a>
                        </div>
                        <h3> Serendipitous Embrace</h3>
                        <p class="product-price"><span></span>Ksh 32,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image23.jpg" alt=""></a>
                        </div>
                        <h3> Emerald Euphoria</h3>
                        <p class="product-price"><span></span>Ksh 27,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image29.jpg" alt=""></a>
                        </div>
                        <h3> Swahili Sparkle</h3>
                        <p class="product-price"><span></span>Ksh 900 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image27.jpg" alt=""></a>
                        </div>
                        <h3> African Sunburst</h3>
                        <p class="product-price"><span></span>Ksh 7,800 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image28.jpg" alt=""></a>
                        </div>
                        <h3> Ethio Elegance</h3>
                        <p class="product-price"><span></span>Ksh 4,900 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image30.jpg" alt=""></a>
                        </div>
                        <h3> Bantu BeadWorks</h3>
                        <p class="product-price"><span></span>Ksh 1,500 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image31.jpg" alt=""></a>
                        </div>
                        <h3> Safari Shimmer</h3>
                        <p class="product-price"><span></span>Ksh 400 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image32.jpg" alt=""></a>
                        </div>
                        <h3> Maasai Mosaic</h3>
                        <p class="product-price"><span></span>Ksh 700 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image34.jpg" alt=""></a>
                        </div>
                        <h3> Necklace Nouveau</h3>
                        <p class="product-price"><span></span>Ksh 200 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image33.jpg" alt=""></a>
                        </div>
                        <h3> Nubians Night</h3>
                        <p class="product-price"><span></span>Ksh 450 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image35.jpg" alt=""></a>
                        </div>
                        <h3> Afro-Aura</h3>
                        <p class="product-price"><span></span>Ksh 300 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image36.jpg" alt=""></a>
                        </div>
                        <h3> Safari Savvy</h3>
                        <p class="product-price"><span></span>Ksh 350 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image37.jpg" alt=""></a>
                        </div>
                        <h3> Congo Crest</h3>
                        <p class="product-price"><span></span>Ksh 120 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image38.jpg" alt=""></a>
                        </div>
                        <h3> Ndebele Nectar</h3>
                        <p class="product-price"><span></span>Ksh 300 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image40.jpg" alt=""></a>
                        </div>
                        <h3> Kilimanjaro Drops</h3>
                        <p class="product-price"><span></span>Ksh 200 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image42.jpg" alt=""></a>
                        </div>
                        <h3> Maasai Mara Marvels</h3>
                        <p class="product-price"><span></span>Ksh 380 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image43.jpg" alt=""></a>
                        </div>
                        <h3> Kalahari Charms</h3>
                        <p class="product-price"><span></span>Ksh 100 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image44.jpg" alt=""></a>
                        </div>
                        <h3>Tanzania Twighlights</h3>
                        <p class="product-price"><span></span>Ksh 700 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image45.jpg" alt=""></a>
                        </div>
                        <h3> Malawi Marvels</h3>
                        <p class="product-price"><span></span>Ksh 300 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image46.jpg" alt=""></a>
                        </div>
                        <h3> Serengeti Studs</h3>
                        <p class="product-price"><span></span>Ksh 400 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image47.jpg" alt=""></a>
                        </div>
                        <h3> Moroccan Glamour</h3>
                        <p class="product-price"><span></span>Ksh 700 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image23.jpg" alt=""></a>
                        </div>
                        <h3> Emerald Euphoria</h3>
                        <p class="product-price"><span></span>Ksh 27,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image39.jpg" alt=""></a>
                        </div>
                        <h3> Zazibar Zest</h3>
                        <p class="product-price"><span></span>Ksh 100 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>

            <div class="col-lg-4 col-md-6 text-center strawberry">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="/singleProduct"><img src="assets/img/products/image20.jpg" alt=""></a>
                        </div>
                        <h3>Solitary Pine Symphony</h3>
                        <p class="product-price"><span></span>Ksh 23,000 </p>
                        <a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    </div>
                </div>


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
    <!-- end products -->

 --}}

