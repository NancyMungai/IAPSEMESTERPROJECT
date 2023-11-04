<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Magazine News</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated-headline.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <header>
        <!-- Header Start -->
       <div class="header-area">
            <div class="main-header ">
                <div class="header-top ">
                   <div class="container-fluid">
                       <div class="col-xl-12">
                            <div class="row d-flex justify-content-lg-between align-items-center">
                                <div class="header-info-left">
                                    <li class="d-none d-lg-block">
                                        <div class="form-box f-right ">
                                            <input type="text" name="Search" placeholder="Search your interest...">
                                            <div class="search-icon">
                                                <i class="ti-search"></i>
                                            </div>
                                        </div>
                                     </li>
                                </div>
                                <div class="header-info-mid">
                                    <!-- logo -->
                                    <div class="logo">
                                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                </div>
                                <div class="header-info-right d-flex align-items-center">
                                   <ul>
                                       <li><a href="about.html">About</a></li>
                                       <li><a href="contact.html">Contact</a></li>
                                       <li><a href="login.blade.php">Log In  or  Sign Up</a></li>
                                   </ul>
                                   <!-- Social -->
                                   <div class="header-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                       </div>
                   </div>
                </div>
               <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <!-- logo 2 -->
                                <div class="logo2">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <!-- logo 3 -->
                                <div class="logo3 d-block d-sm-none">
                                    <a href="index.html"><img src="assets/img/logo/logo-mobile.png" alt=""></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu text-center d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="category.html">Lifestyle</a></li>
                                            <li><a href="category.html">Business</a></li>
                                            <li><a href="category.html">Fashion</a></li>
                                            <li><a href="category.html">Design</a></li>
                                            <li><a href="category.html">Health</a></li>
                                            <li><a href="category.html">Harmful</a></li>
                                            <li><a href="category.html">Technology</a></li>
                                            <li><a href="category.html">Travel</a></li>
                                            <li><a href="category.html">Food</a></li>
                                            <li><a href="category.html">Creative</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    @yield('content')


    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-padding">
            <div class="header-area">
                <div class="main-header ">
                    <div class="header-top d-lg-block d-none">
                       <div class="container">
                           <div class="col-xl-12">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="header-info-left d-flex justify-content-center">
                                        <!-- Social -->
                                        <div class="header-social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                    <div class="header-info-mid">
                                        <!-- logo -->
                                        <div class="logo">
                                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="header-info-right d-flex align-items-center">
                                       <ul>
                                           <li><a href="about.html">About</a></li>
                                           <li><a href="contact.html">Contact</a></li>
                                       </ul>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div>
                   <div class="header-bottom header-bottom2 ">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <!-- Main-menu -->
                                    <div class="main-menu text-center">
                                        <nav>
                                            <ul>
                                                <li><a href="category.html">Lifestyle</a></li>
                                                <li><a href="category.html">Business</a></li>
                                                <li><a href="category.html">Fashion</a></li>
                                                <li><a href="category.html">Design</a></li>
                                                <li><a href="category.html">Health</a></li>
                                                <li><a href="category.html">Harmful</a></li>
                                                <li><a href="category.html">Technology</a></li>
                                                <li><a href="category.html">Travel</a></li>
                                                <li><a href="category.html">Food</a></li>
                                                <li><a href="category.html">Creative</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
           </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="{{asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('./assets/js/popper.min.js')}}"></script>
    <script src="{{asset('./assets/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('./assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('./assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('./assets/js/slick.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('./assets/js/wow.min.js')}}"></script>
    <script src="{{asset('./assets/js/animated.headline.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Date Picker -->
    <script src="{{asset('./assets/js/gijgo.min.js')}}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{asset('./assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.sticky.js')}}"></script>
    <!-- Progress -->
    <script src="{{asset('./assets/js/jquery.barfiller.js')}}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{asset('./assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('./assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('./assets/js/hover-direction-snake.min.js')}}"></script>
    <!-- contact js -->
    <script src="{{asset('./assets/js/contact.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('./assets/js/mail-script.js')}}"></script>
    <script src="{{asset('./assets/js/jquery.ajaxchimp.min.js')}}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{asset('./assets/js/plugins.js')}}"></script>
    <script src="{{asset('./assets/js/main.js')}}"></script>

    </body>
</html>
