<!doctype html>
<html class="no-js" lang="en">

<?php
// check session if it is set or not
include("./functions/session.php");
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Phương Thảo baby care shop</title>
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

        <?php
            include("./components/navbar.php");
        ?>

    </div><!-- Header Section End -->

    <!-- Page Banner Section Start -->
    <div class="page-banner-section section" style="background-image: url(assets/images/hero/hero-1.jpg)">
        <div class="container">
            <div class="row">
                <div class="page-banner-content col">

                    <h1>Checkout</h1>
                    <ul class="page-breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div><!-- Page Banner Section End -->

    <!-- Page Section Start -->
    <div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
        <div class="container">
            <div class="row">

                <div class="col-12">

                    <!-- Checkout Form s-->
                    <form action="#" class="checkout-form">
                       <div class="row row-50">

                           <div class="col-lg-7">

                               <!-- Billing Address -->
                               <div id="billing-form" class="mb-20">
                                   <h4 class="checkout-title">Billing Address</h4>

                                   <div class="row">

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>First Name*</label>
                                           <input type="text" placeholder="First Name">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Last Name*</label>
                                           <input type="text" placeholder="Last Name">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Email Address*</label>
                                           <input type="email" placeholder="Email Address">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Phone no*</label>
                                           <input type="text" placeholder="Phone number">
                                       </div>

                                       <div class="col-12 mb-5">
                                           <label>Company Name</label>
                                           <input type="text" placeholder="Company Name">
                                       </div>

                                       <div class="col-12 mb-5">
                                           <label>Address*</label>
                                           <input type="text" placeholder="Address line 1">
                                           <input type="text" placeholder="Address line 2">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Country*</label>
                                           <select class="nice-select">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                           </select>
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Town/City*</label>
                                           <input type="text" placeholder="Town/City">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>State*</label>
                                           <input type="text" placeholder="State">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Zip Code*</label>
                                           <input type="text" placeholder="Zip Code">
                                       </div>

                                   </div>

                               </div>

                               <!-- Shipping Address -->
                               <div id="shipping-form" class="mb-20">
                                   <h4 class="checkout-title">Shipping Address</h4>

                                   <div class="row">

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>First Name*</label>
                                           <input type="text" placeholder="First Name">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Last Name*</label>
                                           <input type="text" placeholder="Last Name">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Email Address*</label>
                                           <input type="email" placeholder="Email Address">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Phone no*</label>
                                           <input type="text" placeholder="Phone number">
                                       </div>

                                       <div class="col-12 mb-5">
                                           <label>Company Name</label>
                                           <input type="text" placeholder="Company Name">
                                       </div>

                                       <div class="col-12 mb-5">
                                           <label>Address*</label>
                                           <input type="text" placeholder="Address line 1">
                                           <input type="text" placeholder="Address line 2">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Country*</label>
                                           <select class="nice-select">
                                                <option>Bangladesh</option>
                                                <option>China</option>
                                                <option>country</option>
                                                <option>India</option>
                                                <option>Japan</option>
                                           </select>
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Town/City*</label>
                                           <input type="text" placeholder="Town/City">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>State*</label>
                                           <input type="text" placeholder="State">
                                       </div>

                                       <div class="col-md-6 col-12 mb-5">
                                           <label>Zip Code*</label>
                                           <input type="text" placeholder="Zip Code">
                                       </div>

                                   </div>

                               </div>

                           </div>
                           <?php
                                include("../database.php");
                                // check if the user hit search button or not
                                // get the search query
                                // $search_query = "SELECT * FROM cart INNER JOIN item on cart.id_item = item.item_id INNER JOIN customer on cart.customer_id = customer.customer_id";
                                // global $search_query_result;
                                include($_SERVER['DOCUMENT_ROOT'] . "/store/ui/controller/getCart.php");
                                $search_query_result = $result;
                                
                            ?>
                           <div class="col-lg-5">
                               <div class="row">

                                   <!-- Cart Total -->
                                   <div class="col-12 mb-40">

                                       <h4 class="checkout-title">Cart Total</h4>

                                       <div class="cart-table table-responsive mb-40">

                                       <table>
                                            <thead>
                                                <tr>
                                                    <th class="pro-thumbnail">STT</th>
                                                    <th class="pro-title">Product</th>
                                                    <th class="pro-price">Price</th>
                                                    
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($search_query_result as $dsnv) : ?>
                                                    <tr>
                                                        <td><?php echo $dsnv['id_cart'] ?></td>
                                                        <td><?php echo $dsnv['item_name'] ?></td>
                                                        <td><?php echo $dsnv['cost'] ?></td>
                                                        
                                                    </tr>


                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                         
                                       </div>
                                       <tr class="order-total col-12 mb-40">
                                       <strong><th>Total : </th></strong>
                                            <td>
                                                <strong><span class="amount" id="total"></span></strong>
                                            </td>
                                        </tr>               
                                   </div>

                                   <!-- Payment Method -->
                                   <div class="col-12 mb-40">

                                       <button class="place-order"><a href="checkout_done.php">Place Order</a></button>

                                   </div>

                               </div>
                           </div>

                       </div>
                    </form>

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
                    <p>You address will be here<br/> Lorem Ipsum text</p>
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

<script src="assets/js/totalPrice.js"></script>

</body>

</html>