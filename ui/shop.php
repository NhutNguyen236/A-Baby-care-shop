<!doctype html>
<html class="no-js" lang="en">

<?php
// check session if it is set or not
include("./functions/session.php");
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jadusona - eCommerce Baby shop Bootstrap4 Template - THEME SHARED ON THEMELOCK.COM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="assets/css/icon-font.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Helper CSS -->
    <link rel="stylesheet" href="assets/css/helper.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div class="main-wrapper">

        <!-- Header Section Start -->
        <div class="header-section section">

            <!-- Header Top Start -->
            <div class="header-top header-top-one bg-theme-two">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-center">

                        <div class="col mt-10 mb-10 d-none d-md-flex">
                            <!-- Header Top Left Start -->
                            <div class="header-top-left">
                                <p>Welcome to Jadusona</p>
                                <p>Hotline: <a href="tel:0123456789">0123 456 789</a></p>
                            </div><!-- Header Top Left End -->
                        </div>

                        <div class="col mt-10 mb-10">
                            <!-- Header Language Currency Start -->
                            <ul class="header-lan-curr">

                                <li><a href="#">eng</a>
                                    <ul>
                                        <li><a href="#">english</a></li>
                                        <li><a href="#">spanish</a></li>
                                        <li><a href="#">france</a></li>
                                        <li><a href="#">russian</a></li>
                                        <li><a href="#">chinese</a></li>
                                    </ul>
                                </li>

                                <li><a href="#">$usd</a>
                                    <ul>
                                        <li><a href="#">pound</a></li>
                                        <li><a href="#">dollar</a></li>
                                        <li><a href="#">euro</a></li>
                                        <li><a href="#">yen</a></li>
                                    </ul>
                                </li>

                            </ul><!-- Header Language Currency End -->
                        </div>

                        <div class="col mt-10 mb-10">
                            <!-- Header Shop Links Start -->
                            <div class="header-top-right">

                                <p><a href="#">My Account</a></p>
                                <p><a href="login-register.html">Register</a><a href="login-register.html">Login</a></p>

                            </div><!-- Header Shop Links End -->
                        </div>

                    </div>
                </div>
            </div><!-- Header Top End -->

            <!-- Header Bottom Start -->
            <div class="header-bottom header-bottom-one header-sticky@">
                <div class="container-fluid">
                    <div class="row menu-center align-items-center justify-content-between">

                        <div class="col mt-15 mb-15">
                            <!-- Logo Start -->
                            <div class="header-logo">
                                <a href="index.html">
                                    <img src="assets/images/logo.png" alt="Jadusona">
                                </a>
                            </div><!-- Logo End -->
                        </div>

                        <div class="col order-2 order-lg-3">
                            <!-- Header Advance Search Start -->
                            <div class="header-shop-links">

                                <div class="header-search">
                                    <button class="search-toggle"><img src="assets/images/icons/search.png" alt="Search Toggle"><img class="toggle-close" src="assets/images/icons/close.png" alt="Search Toggle"></button>
                                    <div class="header-search-wrap">
                                        <form action="#">
                                            <input type="text" placeholder="Type and hit enter">
                                            <button><img src="assets/images/icons/search.png" alt="Search"></button>
                                        </form>
                                    </div>
                                </div>

                                <div class="header-wishlist">
                                    <a href="wishlist.html"><img src="assets/images/icons/wishlist.png" alt="Wishlist"> <span>02</span></a>
                                </div>

                                <div class="header-mini-cart">
                                    <a href="cart.html"><img src="assets/images/icons/cart.png" alt="Cart"> <span>02($250)</span></a>
                                </div>

                            </div><!-- Header Advance Search End -->
                        </div>

                        <div class="col order-3 order-lg-2">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">HOME</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-box.html">Home Box</a></li>
                                            </ul>
                                        </li>
                                        <li class="active"><a href="shop.html">SHOP</a>
                                            <ul class="sub-menu">
                                                <li class="active"><a href="shop.html">Shop</a></li>
                                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="single-product-left-sidebar.html">Single Product Left Sidebar</a></li>
                                                <li><a href="single-product-right-sidebar.html">Single Product Right Sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">PAGES</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="login-register.html">Login & Register</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="blog.html">BLOG</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Single Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">CONTACT</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="mobile-menu order-12 d-block d-lg-none col"></div>

                    </div>
                </div>
            </div><!-- Header BOttom End -->

        </div><!-- Header Section End -->

        <!-- Page Banner Section Start -->
        <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
            <div class="container">
                <div class="row">
                    <div class="page-banner-content col">

                        <h1>Shop</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.html">Shop</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div><!-- Page Banner Section End -->

        <!-- Page Section Start -->
        <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
            <div class="container">

                <div class="row">

                    <div class="col-12">
                        <div class="product-show">
                            <h4>Show:</h4>
                            <select class="nice-select">
                                <option>8</option>
                                <option>12</option>
                                <option>16</option>
                                <option>20</option>
                            </select>
                        </div>
                        <div class="product-short">
                            <h4>Short by:</h4>
                            <select class="nice-select">
                                <option>Name Ascending</option>
                                <option>Name Descending</option>
                                <option>Date Ascending</option>
                                <option>Date Descending</option>
                                <option>Price Ascending</option>
                                <option>Price Descending</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="assets/images/product/product-1.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>add to cart</button>
                                            <button>add to wishlist</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Tmart Baby Dress</a></h4>

                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">$25</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="assets/images/product/product-2.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>add to cart</button>
                                            <button>add to wishlist</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Jumpsuit Outfits</a></h4>

                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>

                                        <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">$09</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="assets/images/product/product-3.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>add to cart</button>
                                            <button>add to wishlist</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Smart Shirt</a></h4>

                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">$18</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="assets/images/product/product-4.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>add to cart</button>
                                            <button>add to wishlist</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Kids Shoe</a></h4>

                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">$15</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="assets/images/product/product-5.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>add to cart</button>
                                            <button>add to wishlist</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html"> Bowknot Bodysuit</a></h4>

                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>

                                        <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">$12</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="assets/images/product/product-6.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>add to cart</button>
                                            <button>add to wishlist</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Striped T-Shirt</a></h4>

                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">$12</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="assets/images/product/product-7.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>add to cart</button>
                                            <button>add to wishlist</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Kislen Jak Tops</a></h4>

                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>

                                        <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">$29</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-40">

                        <div class="product-item">
                            <div class="product-inner">

                                <div class="image">
                                    <img src="assets/images/product/product-8.jpg" alt="">

                                    <div class="image-overlay">
                                        <div class="action-buttons">
                                            <button>add to cart</button>
                                            <button>add to wishlist</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="content">

                                    <div class="content-left">

                                        <h4 class="title"><a href="single-product.html">Lattic Shirt</a></h4>

                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>

                                        <h5 class="size">Size: <span>S</span><span>M</span><span>L</span><span>XL</span></h5>
                                        <h5 class="color">Color: <span style="background-color: #ffb2b0"></span><span style="background-color: #0271bc"></span><span style="background-color: #efc87c"></span><span style="background-color: #00c183"></span></h5>

                                    </div>

                                    <div class="content-right">
                                        <span class="price">$08</span>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="col-12">
                        <ul class="page-pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div><!-- Page Section End -->

        <!-- Brand Section Start -->
        <div class="brand-section section mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
            <div class="container-fluid">
                <div class="row">
                    <div class="brand-slider">

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-1.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-2.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-3.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-4.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-5.png" alt="">
                        </div>

                        <div class="brand-item col">
                            <img src="assets/images/brands/brand-6.png" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- Brand Section End -->

        <!-- Footer Top Section Start -->
        <div class="footer-top-section section bg-theme-two-light pt-80 pt-lg-60 pt-md-60 pt-sm-60 pt-xs-40 pb-40 pb-lg-20 pb-md-20 pb-sm-20 pb-xs-0">
            <div class="container">
                <div class="row">

                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title">CONTACT US</h4>
                        <p>You address will be here<br /> Lorem Ipsum text</p>
                        <p><a href="tel:01234567890">01234 567 890</a><a href="tel:01234567891">01234 567 891</a></p>
                        <p><a href="mailto:info@example.com">info@example.com</a><a href="#">www.example.com</a></p>
                    </div>

                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title">PRODUCTS</h4>
                        <ul>
                            <li><a href="#">New Arrivals</a></li>
                            <li><a href="#">Best Seller</a></li>
                            <li><a href="#">Trendy Items</a></li>
                            <li><a href="#">Best Deals</a></li>
                            <li><a href="#">On Sale Products</a></li>
                            <li><a href="#">Featured Products</a></li>
                        </ul>
                    </div>

                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title">INFORMATION</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Payment Method</a></li>
                            <li><a href="#">Product Warranty</a></li>
                            <li><a href="#">Return Process</a></li>
                            <li><a href="#">Payment Security</a></li>
                        </ul>
                    </div>

                    <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                        <h4 class="title">NEWSLETTER</h4>
                        <p>Subscribe our newsletter and get all update of our product</p>

                        <form id="mc-form" class="mc-form footer-subscribe-form" novalidate="true">
                            <input id="mc-email" autocomplete="off" placeholder="Enter your email here" name="EMAIL" type="email">
                            <button id="mc-submit"><i class="fa fa-paper-plane-o"></i></button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->

                        <h5>FOLLOW US</h5>
                        <p class="footer-social"><a href="#">Facebook</a> - <a href="#">Twitter</a> - <a href="#">Google+</a></p>

                    </div>

                </div>
            </div>
        </div><!-- Footer Top Section End -->

        <!-- Footer Bottom Section Start -->
        <div class="footer-bottom-section section bg-theme-two pt-15 pb-15">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <p class="footer-copyright">Copyright &copy; All rights reserved</p>
                    </div>
                </div>
            </div>
        </div><!-- Footer Bottom Section End -->

    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>