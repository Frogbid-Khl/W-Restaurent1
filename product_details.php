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
            width: 160px;
            height: 120px;
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
                    <div class="col-lg-6 col-md-6">
                        <div class="detail-media m-b30">
                            <img src="assets/images/shop/1.png" alt="/" class="big-image">
                            <div class="thumbnail-container d-flex align-items-center justify-content-center" id="thumbnailContainer">
                                <img src="assets/images/shop/1.png" alt="/" class="thumbnail" onclick="showImage('assets/images/shop/1.png')">
                                <img src="assets/images/shop/2.png" alt="/" class="thumbnail" onclick="showImage('assets/images/shop/2.png')">
                                <img src="assets/images/shop/3.png" alt="/" class="thumbnail" onclick="showImage('assets/images/shop/3.png')">
                                <!-- Add more thumbnail images as needed -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
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
                                    <li><a href="#" class="btn btn-outline-secondary btn-hover-1"><span><i class="fa-brands fa-whatsapp"></i> Share</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Detail Section -->
        <div class="content-inner pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav nav-tabs tabs-style-1">
                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" href="#web-design-1">
                                    <i class="icon-globe"></i>
                                    <span class="d-none d-md-inline-block m-l10">Description</span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" href="#graphic-design-1">
                                    <i class="icon-image"></i>
                                    <span class="d-none d-md-inline-block m-l10">Additional Information</span>
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="web-design-1" class="tab-pane active">
                                <p class="m-b10">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't hidden in the middle of text.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                <ul class="list-check primary">
                                    <li>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and </li>
                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </li>
                                </ul>
                            </div>
                            <div id="graphic-design-1" class="tab-pane">
                                <table class="table-bordered check-tbl">
                                    <tr>
                                        <td>Cheese Burger</td>
                                        <td>Small, Medium & Large</td>
                                    </tr>
                                    <tr>
                                        <td>Toppings</td>
                                        <td>Onion, Tomato, Olives</td>
                                    </tr>
                                    <tr>
                                        <td>Rating</td>
                                        <td>
											<span class="rating-bx">
												<i class="fas fa-star text-secondary"></i>
												<i class="fas fa-star text-secondary"></i>
												<i class="fas fa-star text-secondary"></i>
												<i class="fas fa-star text-secondary"></i>
												<i class="far fa-star text-secondary"></i>
											</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shipping Charges</td>
                                        <td>Free Shipping</td>
                                    </tr>
                                    <tr>
                                        <td>Add More</td>
                                        <td>Coke, Cheese, Choco lava</td>
                                    </tr>
                                    <tr>
                                        <td>Delivery Time</td>
                                        <td>30 mins</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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