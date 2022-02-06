<!doctype html>
<html class="no-js" lang="en">

<?php
    // check session if it is set or not
    include("./functions/session.php");
    // include function add to cart
    require("./functions/addToCart.php");
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

        <?php include("./components/navbar.php"); ?>

        <!-- Page Banner Section Start -->
        <div class="page-banner-section section" style="background-image: url(assets/images/banner/shop_banner.png)">
            <div class="container">
                <div class="row">
                    <div class="page-banner-content col">

                        <h1>Shop</h1>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="shop.php">Shop</a></li>
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

                    <!--show all products-->
                    <?php
                        include("../database.php");
                        // check if the user hit search button or not
                        if(isset($_GET["search"])){
                            // get the search value
                            $search = $_GET["search"];
                            // get the search query
                            $search_query = "SELECT * FROM item WHERE item_name LIKE '%$search%'";
                            global $search_query_result;
                            $search_query_result = $connection->query($search_query) or die(mysqli_error($connection));
                    ?>

                    <div class="row">
                        <h1>Result(s) for <span style="font-weight: bold; font-style: italic;">"<?php echo $search;?>"</span></h1><br>
                    </div>
                    
                    <?php
                            // show all the filtered product 
                            while($row = $search_query_result->fetch_assoc()) {
                                include("./components/product.php");
                            }
                        }
                        else{
                            require("./controller/getProducts.php");
                        }
                    ?>

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

    <!--Search bar function-->
    <script>
        // get search input using query
        const searchInput = document.querySelector("[data-search]");

        // get search result everytime when keyup
        searchInput.addEventListener("input", (e) => {
            const value = e.target.value.toLowerCase();

            
        });
    </script>

</body>

</html>