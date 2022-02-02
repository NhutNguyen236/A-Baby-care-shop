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

                    <h4 class="title"><a href="single-product.html"><?php echo $row['item_name'];?></a></h4>

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
                    <span class="price">$<?php echo $row['cost'];?></span>
                </div>

            </div>

        </div>
    </div>

</div>