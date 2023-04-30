<!--====== Start Preloader Area ======-->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div><!--====== End Preloader Area ======-->
<!--====== Search From ======-->
<div class="modal fade" id="search-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form>
                <div class="form_group">
                    <input type="text" class="form_control" placeholder="Search here...">
                    <button class="search_btn"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
    </div>
</div><!--====== Search From ======-->

<!--====== Start Header ======-->
<header class="header-area-two header-area-three transparent-header">
    <div class="header-navigation">
        <div class="custom-container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-3">
                    <div class="brand-logo">
                        <a href="{{ route('home') }}"><img src="public/assets/images/logo_3.png" class="img-fluid" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7 col-5">
                    <div class="nav-menu">
                        <!-- Navbar Close Icon -->
                        <div class="navbar-close">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item">
                                    <a href="{{ route('home') }}" class="active">Home</a>
                                </li>
                                <li class="menu-item"><a href="{{ route('about') }}">About Us</a></li>
                                <li class="menu-item menu-item-has-children"><a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('web') }}">Web Development</a></li>
                                        <li><a href="{{ route('digital') }}">Digital Marketing</a></li>
                                        <li><a href="{{ route('data') }}">Data Warehousing</a></li>
                                        <li><a href="{{ route('soa') }}">SOA</a></li>
                                        <li><a href="{{ route('hadoop') }}">hadoop</a></li>
                                    </ul>
                                </li>
                                <!-- <li class="menu-item menu-item-has-children"><a href="#">Industries</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio_1.html">Banking & Financial Services</a></li>
                                        <li><a href="portfolio_2.html">Manufacturing & Industrials</a></li>
                                        <li><a href="portfolio_3.html">Technology, Telecom & Media</a></li>
                                        <li><a href="portfolio_details.html">Healthcare & Life Sciences</a></li>
                                        <li><a href="portfolio_details.html">Retail & Marketplace</a></li>
                                        <li><a href="portfolio_details.html">Public Sector</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="menu-item menu-item-has-children"><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="shop.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">Shop</a></li>
                                                <li><a href="shop_details.html">Shop Details</a></li>
                                                <li><a href="cart.html">Shop Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children"><a href="#">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog_standard.html">Blog Standard</a></li>
                                        <li><a href="blog_grid_2_column.html">Blog grid 2 columns</a></li>
                                        <li><a href="blog_grid_3_column.html">Blog grid 3 columns</a></li>
                                        <li><a href="blog_details.html">Blog details</a></li>
                                    </ul>
                                </li> -->
                                <!-- <li class="menu-item"><a href="{{ route('about') }}">Industries</a></li> -->
                                <li class="menu-item"><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li class="menu-item"><a href="{{ route('career') }}">Career</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-1 col-4">
                    <div class="header-right-nav">
                        <ul>
                            <li><a href="#" data-toggle="modal" data-target="#search-modal" class="icon search-btn"><i class="far fa-search"></i></a></li>
                            <li class="">
                                <div class="navbar-toggler float-right">
                                    <span></span><span></span><span></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!--====== End Header ======-->