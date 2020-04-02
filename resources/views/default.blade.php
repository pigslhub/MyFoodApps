<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MyFoodApp | Food Delivery Hub</title>
    <link type="text/css" href="{{asset('assets/ast/css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/ast/css/font-awesome.css')}}" rel="stylesheet">
    <link  type="text/css"href="{{asset('assets/ast/css/font/flaticon.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/ast/css/swiper.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/ast/css/ion.rangeSlider.min.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/ast/css/magnific-popup.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/ast/css/nice-select.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/ast/css/style.css')}}" rel="stylesheet">
    <link type="text/css" href="{{asset('assets/ast/css/responsive.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&amp;display=swap" rel="stylesheet">
    
</head>
<body>
    <!-- Navigation -->
    <div class="header">
        <header class="full-width">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mainNavCol">
                        <!-- logo -->
                        <div class="logo mainNavCol">
                            <a href="/">
                                <img src="{{asset('assets/ast/img/logo.png')}}" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <!-- logo -->
                        <div class="main-search mainNavCol">
                            <form class="main-search search-form full-width">
                                <div class="row">
                                    <!-- search -->
                                    <div class="col-lg-6 col-md-7">
                                        <div class="search-box padding-10">
                                            <input type="text" class="form-control" placeholder="Enter Area Code">
                                            <input type="submit" class="btn btn-danger"  value="Search" />
                                        </div>
                                    </div>
                                    <!-- search -->
                                </div>
                            </form>
                        </div>
                        <div class="right-side fw-700 mainNavCol">
                            <div class="gem-points">
                                <a href="#"> <i class="fas fa-university"></i>
                                    <span>Restaurents</span>
                                </a>
                            </div>

                            <div class="gem-points">
                                <a href="#"> <i  class="fas fa-concierge-bell"></i>
                                    <span >Foods</span>
                                </a>
                            </div>
                            <div class="gem-points">
                                <a href="{{route('user.index')}}"> <i  class="fas fa-user"></i>
                                    <span >Register As</span>
                                </a>
                            </div>
                           
                            
                           
                            <!-- user notification -->
                            <!-- user cart -->
                           
                            <!-- user cart -->
                        </div>
                    </div>
                    <div class="col-sm-12 mobile-search" style="padding:20px">
                        <form class="search-form full-width">
                                 <input type="text" class="form-control" placeholder="Enter Area Code">
                                 <input style="margin-top:10px" type="submit" class="btn btn-primary btn-block"  value="Search" />
                            </form>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <div class="main-sec"></div>
    <!-- Navigation -->
	 <!-- slider -->
    <section class="about-us-slider swiper-container p-relative">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide-item">
                <img src="{{asset('assets/ast/img/about/blog/1920x700/banner-1.jpg')}}" class="img-fluid full-width" alt="Banner">
                <div class="transform-center">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 align-self-center">
                                <div class="right-side-content">
                                    <h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
                                    <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
                                    <a href="https:///save/_embed/http://slidesigma.com/themes/html/munchbox/restaurant.html" class="btn-second btn-submit">Learn More.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay overlay-bg"></div>
            </div>
            <div class="swiper-slide slide-item">
                <img src="{{asset('assets/ast/img/about/blog/1920x700/banner-2.jpg')}}" class="img-fluid full-width" alt="Banner">
                <div class="transform-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 align-self-center">
                                <div class="right-side-content text-center">
                                    <h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
                                    <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
                                    <a href="https:///save/_embed/http://slidesigma.com/themes/html/munchbox/restaurant.html" class="btn-second btn-submit">Learn More.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay overlay-bg"></div>
            </div>
            <div class="swiper-slide slide-item">
                <img src="{{asset('assets/ast/img/about/blog/1920x700/banner-3.jpg')}}" class="img-fluid full-width" alt="Banner">
                <div class="transform-center">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 align-self-center">
                                <div class="right-side-content text-right">
                                    <h1 class="text-custom-white fw-600">Increase takeout sales by 50%</h1>
                                    <h3 class="text-custom-white fw-400">with the largest delivery platform in the U.S. and Canada</h3>
                                    <a href="https:///save/_embed/http://slidesigma.com/themes/html/munchbox/restaurant.html" class="btn-second btn-submit">Learn More.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overlay overlay-bg"></div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>
    <!-- slider -->
    <!-- Browse by category -->
    <section class="browse-cat u-line section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Browse by cuisine <span class="fs-14"><a href="https:///save/_embed/http://slidesigma.com/themes/html/munchbox/restaurant.html">See all restaurant</a></span></h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="category-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="https:///save/_embed/http://slidesigma.com/themes/html/munchbox/restaurant.html" class="categories">
                                    <div class="icon icon-parent text-custom-white bg-light-green"> <i class="fas fa-map-marker-alt"></i>
                                    </div> <span class="text-light-black cat-name">Brooklyn</span>
                                </a>
                            </div>
                            
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Browse by category -->
    <!-- your previous order -->
    <section class="recent-order section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Your previous orders <span class="fs-14"><a href="https:///save/_embed/http://slidesigma.com/themes/html/munchbox/order-details.html">See all past orders</a></span></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product-box mb-md-20">
                        <div class="product-img">
                            <a href="https:///save/_embed/http://slidesigma.com/themes/html/munchbox/restaurant.html">
                                <img src="themes/html/munchbox/assets/img/restaurants/255x104/order-1.jpg" class="img-fluid full-width" alt="product-img">
                            </a>
                        </div>
                        <div class="product-caption">
                            <h6 class="product-title"><a href="https:///save/_embed/http://slidesigma.com/themes/html/munchbox/restaurant.html" class="text-light-black "> Chilli Chicken Pizza</a></h6>
                            <p class="text-light-white">Big Bites, Brooklyn</p>
                            <div class="product-btn">
                                <a href="https:///save/_embed/http://slidesigma.com/themes/html/munchbox/order-details.html" class="btn-first white-btn full-width text-light-green fw-600">Track Order</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- your previous order -->
    <!-- Explore collection -->
    <section class="ex-collection section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Explore our collections</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="https:///save/_embed/http://slidesigma.com/themes/html/munchbox/restaurant.html">
                                        <img src="{{asset('assets/ast/img/restaurants/255x150/shop-23.jpg')}}" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="https:///save/_embed/http://slidesigma.com/themes/html/munchbox/restaurant.html" class="text-light-black "> Great Burger</a></h6>
                                        <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">3.1</span>
                                        </div>
                                    </div>
                                    <p class="text-light-white">American, Fast Food</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                         </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="section-header-left">
                        <h3 class="text-light-black header-title title">Offers By Restaurents</h3>
                    </div>
                </div>
            </div>
            <!-- advertisement banner-->
             <div class="row">
                
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product-box mb-xl-20">
                                <div class="product-img">
                                    <a href="https:///save/_embed/http://slidesigma.com/themes/html/munchbox/restaurant.html">
                                        <img src="{{asset('assets/ast/img/restaurants/255x150/shop-23.jpg')}}" class="img-fluid full-width" alt="product-img">
                                    </a>
                                    
                                </div>
                                <div class="product-caption">
                                    <div class="title-box">
                                        <h6 class="product-title"><a href="https:///save/_embed/http://slidesigma.com/themes/html/munchbox/restaurant.html" class="text-light-black "> Great Burger</a></h6>
                                        <div class="tags"> <span class="text-custom-white rectangle-tag bg-yellow">3.1</span>
                                        </div>
                                    </div>
                                    <p class="text-light-white">American, Fast Food</p>
                                    <div class="product-details">
                                        <div class="price-time"> <span class="text-light-black time">30-40 min</span>
                                            <span class="text-light-white price">$10 min</span>
                                        </div>
                                        <div class="rating"> <span>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                            <i class="fas fa-star text-yellow"></i>
                                         </span>
                                            <span class="text-light-white text-right">4225 ratings</span>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
         
        </div>
    </section>
    <!-- Explore collection -->
    <!-- footer -->
    <div class="footer-top section-padding bg-black">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-credit-card-1"></i></span>
                        <span class="text-custom-white">100% Payment<br>Secured</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-wallet-1"></i></span>
                        <span class="text-custom-white">Support lots<br> of Payments</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6 mb-sm-20">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-help"></i></span>
                        <span class="text-custom-white">24 hours / 7 days<br>Support</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-truck"></i></span>
                        <span class="text-custom-white">Free Delivery<br>with $50</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-guarantee"></i></span>
                        <span class="text-custom-white">Best Price<br>Guaranteed</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-6">
                    <div class="icon-box"> <span class="text-light-green"><i class="flaticon-app-file-symbol"></i></span>
                        <span class="text-custom-white">Mobile Apps<br>Ready</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="section-padding bg-light-theme pt-0 u-line bg-black">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-contact">
                        <h6 class="text-custom-white">Need Help</h6>
                        <ul>
                            <li class="fw-600"><span class="text-light-white">Call Us</span> <a href="tel:/" class="text-custom-white">+(347) 123 456 789</a>
                            </li>
                            <li class="fw-600"><span class="text-light-white">Email Us</span> <a href="mailto:/" class="text-custom-white">demo@domain.com</a>
                            </li>
                            <li class="fw-600"><span class="text-light-white">Join our twitter</span> <a href="#" class="text-custom-white">@munchbox</a>
                            </li>
                            <li class="fw-600"><span class="text-light-white">Join our instagram</span> <a href="#" class="text-custom-white">@munchbox</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-links">
                        <h6 class="text-custom-white">Download Apps</h6>
                        <div class="appimg">
                            <a href="#">
                                <img src="{{asset('assets/ast/img/playstore.jpg ')}}" class="img-fluid" alt="app logo">
                            </a>
                        </div>
                        <div class="appimg">
                            <a href="#">
                                <img src="{{asset('assets/ast/img/appstore.jpg ')}}" class="img-fluid" alt="app logo">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl col-lg-4 col-md-4 col-sm-6">
                    <div class="footer-contact">
                        <h6 class="text-custom-white">Newsletter</h6>
                        <form class="subscribe_form">
                            <div class="input-group">
                                <input type="text" class="form-control form-control-submit" name="email" placeholder="Enter your email">
                                <span class="input-group-btn">
                      <button class="btn btn-second btn-submit" type="button"><i class="fas fa-paper-plane"></i></button>
                 </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="ft-social-media">
                        <h6 class="text-center text-light-black">Follow us</h6>
                        <ul>
                            <li> <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li> <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li> <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li> <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                            <li> <a href="#"><i class="fab fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  
    <!-- footer -->
    <!-- modal boxes -->
    
    <!-- Place all Scripts Here -->
    <!-- jQuery -->
    <script defer src="{{asset('assets/ast/js/jquery.min.js')}}"></script>
    <!-- Popper -->
    <script defer src="{{asset('assets/ast/js/popper.min.js')}}"></script>
    <!-- Bootstrap -->
    <script defer src="{{asset('assets/ast/js/bootstrap.min.js')}}"></script>
    <!-- Range Slider -->
    <script defer src="{{asset('assets/ast/js/ion.rangeSlider.min.js')}}"></script>
    <!-- Swiper Slider -->
    <script defer src="{{asset('assets/ast/js/swiper.min.js')}}"></script>
    <!-- Nice Select -->
    <script defer src="{{asset('assets/ast/js/jquery.nice-select.min.js')}}"></script>
    <!-- magnific popup -->
    <script defer src="{{asset('assets/ast/js/jquery.magnific-popup.min.js')}}"></script>
   
    <!-- sticky sidebar -->
    <script defer src="{{asset('assets/ast/js/sticksy.js')}}"></script>
    <!-- Munch Box Js -->
    <script defer src="{{asset('assets/ast/js/munchbox.js')}}"></script>
    <!-- /Place all Scripts Here -->
</html>