<!-- Header Section Start -->
<div class="header-section section">

    <!-- Header Top Start -->
    <div class="header-top header-top-one bg-theme-two">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">

                <div class="col mt-10 mb-10 d-none d-md-flex">
                    <!-- Header Top Left Start -->
                    <div class="header-top-left">
                        <p>Welcome to Phuong Thao Baby care</p>
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
                        <?php
                            if(isset($_SESSION['login_user'])){
                                echo "<a href='./functions/logout.php' class='btn btn-theme-two'>Logout</a>";
                            }
                            else{
                                echo "<p><a href='../login_register.php'>Register</a><a href='login-register.php'>Login</a></p>";
                            }
                        ?>
                        <!--Check if session is set to process logout-->
                        

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
                        <a href="/store/ui/shop.php">
                            <img src="assets/images/logo_main.png" alt="Jadusona" width="150" height="150">
                        </a>
                    </div><!-- Logo End -->
                </div>

                <div class="col order-2 order-lg-3">
                    <!-- Header Advance Search Start -->
                    <div class="header-shop-links">

                        <div class="header-search">
                            <button class="search-toggle"><img src="assets/images/icons/search.png" alt="Search Toggle"><img class="toggle-close" src="assets/images/icons/close.png" alt="Search Toggle"></button>
                            <div class="header-search-wrap">
                                <form action="shop.php">
                                    <input type="search" placeholder="Type and hit enter" id="search-bar" data-search name="search">
                                    <button><img src="assets/images/icons/search.png" alt="Search"></button>
                                </form>
                            </div>
                        </div>

                        

                        <div class="header-mini-cart">
                            <a href="cart.php"><img src="assets/images/icons/cart.png" alt="Cart"> <span>02($250)</span><span></a>
                        </div>

                    </div><!-- Header Advance Search End -->
                </div>

                <div class="col order-3 order-lg-2">
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <li><a href="shop.php">HOME</a>
                                    <ul>

                                    </ul>
                                </li>
                                <li class="active"><a href="shop.php">SHOP</a>
                                    <ul>
                                        
                                    </ul>
                                </li>
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