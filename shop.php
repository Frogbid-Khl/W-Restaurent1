<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Restaurant Website </title>


    <?php
    include('include/header.php')
    ?>
</head>
<body id="bg">
<div class="page-wraper">

    <!-- Header -->
    <?php
    include('include/header2.php')
    ?>
    <!-- Header -->
    <div class="page-content bg-white">
        <!-- Banner  -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <img src="assets/images/shop/1.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Search Section -->
        <section class="content-inner-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="title mb-md-3 mb-lg-4 m-b20 d-none d-lg-block">Items</h5>
                        </div>
                        <ul id="masonry" class="row">
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <a href="product_details.php">
                                    <div class="dz-img-box style-7">
                                        <div class="dz-media">
                                            <img src="assets/images/shop/3.png" alt="/">
                                        </div>
                                        <div class="dz-content">
                                            <h5 class="title"><a href="product_details.php">Abalone</a></h5>
                                            <span class="price">HK$988</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <a href="product_details.php">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/shop/4.png" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product_details.php">Chiu Chow Chili Oil</a></h5>
                                        <span class="price">HK$36</span>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <a href="product_details.php">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/shop/4.png" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product_details.php">XO Sauce</a></h5>
                                        <span class="price">HK$78</span>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <a href="product_details.php">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/shop/5.png" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product_details.php">Tea</a></h5>
                                        <span class="price">$228</span>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <a href="product_details.php">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/shop/2.png" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product_details.php">Package</a></h5>
                                        <span class="price">$500</span>
                                    </div>
                                </div>
                                </a>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <a href="product_details.php">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/shop/1.png" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product_details.php">Dine-in Coupon</a></h5>
                                        <span class="price">$100</span>
                                    </div>
                                </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Search Section -->

    </div>


    <!--Footer-->
    <?php
    include('include/footer.php')
    ?>

    <!-- Footer -->
    <div class="scroltop-progress scroltop-primary">
        <svg width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>


</div>
<!-- JAVASCRIPT FILES ========================================= -->
<?php
include('include/js.php')
?>
</body>

</html>