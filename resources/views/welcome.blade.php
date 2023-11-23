@extends('layout')
@section('content')

	<!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Artful Alchemy</p>
								<h1>A Kaleidoscope of Creativity</h1>
								<div class="hero-btns">
									<a href="/shop" class="boxed-btn">Art Collection</a>
									<a href="/contact" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Diverse selection</p>
								<h1>A Palette for Every Wall</h1>
								<div class="hero-btns">
									<a href="/shop" class="boxed-btn">Visit Shop</a>
									<a href="/contact" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">New Collection</p>
								<h1>Elevate Your Space with Inspired Art</h1>
								<div class="hero-btns">
									<a href="/shop" class="boxed-btn">Visit Shop</a>
									<a href="/contact" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>Elevate your space with our curated collection at Artful Alchemy. From classic paintings to contemporary sculptures, we offer a diverse array of art that sparks inspiration. Explore and find the perfect piece
                            to express your unique style</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
						</div>
						<h3>Chronicles of Chroma</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Silhouette Sonata</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Ephemeral Bonds</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="/cart" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>3in1</strong> <br> Offer
                                </span>
                            </div>
                        </div>
                    	<img src="assets/img/a.jpg" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4>THREE FOR THE PRICE OF ONE</h4>
                    <div class="text">Triple the beauty, triple the savings! Enjoy three stunning paintings for the price of one. Elevate your space with this limited-time offer and surround yourself with captivating art. Don't miss out on this exclusive opportunity at Artful Alchemy.</div>
                    <!--Countdown Timer-->
                    <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2020/2/01"><div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
                	<a href="/cart" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Keni Wambui <span>Curator-in-Chief</span></h3>
								<p class="testimonial-body">
									" Meet one of the creative souls behind Artful Alchemy, Keni. A visionary curator with a passion for diverse expression, she selects each piece to weave a unique tapestry of art. Join us in exploring the world Keni has crafted, where tradition meets innovation and imagination knows no bounds"
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar2.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Marie Wanjiru <span>Art Visionary</span></h3>
								<p class="testimonial-body">
									" Meet Marie, our Art Visionary at Artful Alchemy. With an intuitive eye for the extraordinary, Marie curates our collection with an unwavering dedication to diversity and innovation. Her passion for connecting art and emotion is evident in every piece carefully selected for our gallery. Step into the world Marie has crafted, where each stroke and sculpture tells a unique story, inviting you to explore the boundless realms of creativity"
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar3.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Jacob Sikim <span>Gallery Maestro</span></h3>
								<p class="testimonial-body">
									" Meet our Gallery Maestro. With a keen eye for artistic harmony, she orchestrates a symphony of diverse pieces that dance together in perfect rhythm. Under her guiding baton, Artful Alchemy becomes a sanctuary where every stroke and sculpture plays a vital note in the visual melody. Step into the gallery and experience the masterful curation of our Gallery Maestro."
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->

	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">

					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since Year 2004</p>
						<h2>We are <span class="orange-text">Artful Alchemy</span></h2>
						<p>Where art transforms into something extraordinary.</p>
						<p>Immerse yourself in a captivating world of handcrafted art, where creativity knows no bounds.
                            Our vibrant collection spans paintings, sculptures, jewelry, pottery, and more, each piece a
                             testament to the transformative power of art. Discover the artist within and unleash your creativity
                             through our enriching art classes and workshops. Step into Artful Alchemy and experience the magic of art.</p>
						<a href="/about" class="boxed-btn mt-4">know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->

	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>This Months sale is on! <br> with big <span class="orange-text">Discounts...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="/shop" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section>
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Our</span> News</h3>
						<p>Dive into the latest artful revelations! Our News Section is a vibrant canvas showcasing the pulse of creativity at Artful Alchemy. Discover featured artists, unveil upcoming exhibitions, and stay connected with the dynamic world of art. Explore the stories behind the masterpieces and be the first to witness the unfolding chapters in our artistic journey</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="/singleNews"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="/singleNews">Timeless Elegance Unveiled: Journey into the Classics at Artful Alchemy</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Mansa</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">Embark on a journey through time with our latest addition to the gallery—classic masterpieces that transcend eras. Immerse yourself in the elegance of classical art, where every stroke tells a timeless tale. Explore the news section for a glimpse into the heritage of artistic excellence at Artful Alchemy</p>
							<a href="/singleNews" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="/singleNews"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="/singleNews">Abstract Realms Unveiled: A Kaleidoscope of Artistic Expression</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> Jacob</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">In this captivating showcase, abstract art takes center stage, pushing the boundaries of form, color, and emotion. Each piece is a unique journey, a visual symphony of shapes and shades that sparks curiosity
                                 and invites interpretation.</p>
							<a href="/singleNews" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="/singleNews"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="/singleNews">Shadows and Light: The Charcoal Chronicles Unfold at Artful Alchemy.</a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> River .M.</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
							</p>
							<p class="excerpt">"Shadows and Light" brings forth the raw and evocative power of charcoal, where every stroke tells a story and every smudge reveals a depth of emotion. From bold contrasts to delicate shades, each piece is a testament to the
                                 versatility and expressiveness of this timeless medium.</p>
							<a href="/singleNews" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="/news" class="boxed-btn">More News</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->
	@endsection
