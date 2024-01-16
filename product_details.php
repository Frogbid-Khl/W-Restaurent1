<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Restaurant Website </title>


    <?php
    include('include/header.php')
    ?>
    <style>
        .gallery-container {
            max-width: 100%;
            margin: auto;
        }

        .detail-media {
            position: relative;
        }

        .big-image {
            width: 100%;
            height: auto;
        }

        .thumbnail-container {
            display: flex;
            overflow-x: auto;
            margin-top: 10px;
        }

        .thumbnail {
            width: 80px;
            height: 60px;
            margin-right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body id="bg">
<div class="page-wraper">

    <!-- Header -->
    <?php
    include('include/header2.php')
    ?>
    <!-- Header -->

    <div class="page-content bg-white">

        <!-- Product Detail Section -->
        <section class="content-inner-1 overflow-hidden">
            <div class="container">
                <div class="row product-detail gallery-container">
                    <div class="col-lg-4 col-md-5">
                        <div class="detail-media m-b30">
                            <img src="assets/images/shop/1.png" alt="/" class="big-image">
                            <div class="thumbnail-container" id="thumbnailContainer">
                                <img src="assets/images/shop/1.png" alt="/" class="thumbnail" onclick="showImage('assets/images/shop/1.png')">
                                <img src="assets/images/shop/2.png" alt="/" class="thumbnail" onclick="showImage('assets/images/shop/2.png')">
                                <img src="assets/images/shop/3.png" alt="/" class="thumbnail" onclick="showImage('assets/images/shop/3.png')">
                                <!-- Add more thumbnail images as needed -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="detail-info">
                            <div class="dz-head">
                                <h2 class="title">Double Patty Veg Burger</h2>
                            </div>
                            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                            <ul class="detail-list">
                                <li>Price <span class="text-primary m-t5">$20.00</span></li>
                                <li>Quantity
                                    <div class="btn-quantity style-1 m-t5">
                                        <input id="demo_vertical2" type="text" value="1" name="demo_vertical2">
                                    </div>
                                </li>
                            </ul>
                            <div class="d-lg-flex justify-content-between">
                                <ul class="modal-btn-group">
                                    <li><a href="shop-cart.html" class="btn btn-primary btn-hover-1"><span>Add To Cart <i class="flaticon-shopping-bag-1 m-l10"></i></span></a></li>
                                </ul>
                            </div>
                            <div class="d-lg-flex justify-content-between mt-5">
                                <ul class="modal-btn-group">
                                    <li><a href="#" class="btn btn-outline-secondary btn-hover-1"><span><i class="fa-brands fa-facebook"></i> Share</span></a></li>
                                    <li><a href="#" class="btn btn-outline-secondary btn-hover-1"><span><i class="fa-brands fa-instagram"></i> Share</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Detail Section -->

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

<script>
    function showImage(imagePath) {
        let bigImage = document.querySelector('.big-image');
        bigImage.src = imagePath;
        console.log(imagePath);
    }
</script>
</body>

</html>