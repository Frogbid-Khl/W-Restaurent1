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
        <div class="dz-bnr-inr style-1 text-center bg-parallax" style="background-image:url('assets/images/banner/bnr2.jpg'); background-size:cover; background-position:center;">
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <h1>E-Shop</h1>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Search Section -->
        <section class="content-inner-1">
            <div class="container">
                <div class="row search-wraper text-center">
                    <div class="col-lg-8 m-auto">
                        <form>
                            <div class="input-group">
                                <input required="required" type="text" class="form-control" placeholder="Type here">
                                <div class="input-group-addon">
                                    <button name="submit" value="submit" type="submit" class="btn btn-primary btn-hover-2">
                                        <span>Search</span><i class="icon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="title mb-md-3 mb-lg-4 m-b20 d-none d-lg-block">Items</h5>
                            <strong class="filter-item-show m-b20">Search: 51,740 items</strong>
                            <a href="javascript:void(0);" class="btn btn-primary panel-btn">Filter</a>
                        </div>
                        <ul id="masonry" class="row">
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic1.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Burger</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$4.56</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic2.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Chicken Burger</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$17.56</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic3.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Pineapple Pizza</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$24.50</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic4.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Pineapple Soup</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$11.02</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic5.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Momos</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$4.56</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic6.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Pancake</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$12.20</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic3.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Pineapple Pizza</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$10.50</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic1.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Spicy Burger</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$4.56</span>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-xl-4 col-md-6 m-b30">
                                <div class="dz-img-box style-7">
                                    <div class="dz-media">
                                        <img src="assets/images/gallery/grid4/pic2.jpg" alt="/">
                                    </div>
                                    <div class="dz-content">
                                        <h5 class="title"><a href="product-detail.html">Cheese Burger</a></h5>
                                        <p>It is a long established fact that a reader will be distracted.</p>
                                        <span class="price">$17.56</span>
                                    </div>
                                </div>
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