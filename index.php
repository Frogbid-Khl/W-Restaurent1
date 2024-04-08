<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Restaurant Website </title>
    <?php
    include ('include/header.php')
    ?>
</head>
<body id="bg">


<div class="page-wraper">

    <!-- Header -->
    <?php
    include ('include/header2.php')
    ?>
    <!-- Header -->

    <div class="contact-sidebar">
        <div class="contact-box1">
            <div class="logo-contact logo-header">
                <a href="index.php" class="anim-logo"><img src="assets/images/logo.png" alt="/"></a>
            </div>

            <div class="dz-title">
                <h4 class="m-b20">Contact Info</h4>
            </div>
            <div class="icon-bx-wraper left">
                <div class="icon-md m-r20">
                    <span class="icon-cell"><i class="las la-phone-volume"></i></span>
                </div>
                <div class="icon-content">
                    <h6 class="tilte">Call Now</h6>
                    <p class="m-b0">+91 123 456 7890,<br> +91 987 654 3210</p>
                </div>
            </div>
            <div class="icon-bx-wraper left">
                <div class="icon-md m-r20">
                    <span class="icon-cell"><i class="las la-envelope-open"></i></span>
                </div>
                <div class="icon-content">
                    <h6 class="tilte">Location</h6>
                    <p class="m-b0">15/B Miranda House, New York, US</p>
                </div>
            </div>
            <div class="icon-bx-wraper left">
                <div class="icon-md m-r20">
                    <span class="icon-cell"><i class="las la-map-marker"></i></span>
                </div>
                <div class="icon-content">
                    <h6 class="tilte">Email Now</h6>
                    <p class="m-b0">info@gmail.com, services@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-close"></div>

    <div class="page-content bg-white">
        <!-- Banner -->
        <!--Banner-->
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12">

                </div>
            </div>
        </div>
        <div class="container" style="padding: 0 !important; margin-top: 200px">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/slider/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/slider/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/slider/3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/slider/4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/slider/5.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-lg-6">
                    <img src="assets/images/main-slider/slider2/bg2.jpg" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6">
                    <img src="assets/images/main-slider/slider2/bg1.jpg" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- Banner  -->
        <div class="container" style="margin-top: 3rem;">
            <div class="container-fluid " style="padding: 50px">
                <div class="dz-bnr-inr-entry justify-content-center">
                    <h6 class="title wow flipInX fs-2 pt-5 text-center" style="color: #9e8467;">SHOP WITH US ONLINE</h6>
                    <ul class="dish-gallery gallery-grid-2">
                        <li style="width: 33.3%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <a href="#">
                                <div class="gallery-box-1 text-center">
                                    <img src="assets/images/gallery/new/2.jpg" alt="/">
                                    <div class="row">
                                        <div class="col-12" style="background-color: #2b515c;">
                                            <h3 class="category text-white" style="margin-top: 8px;">Tea</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!--<a class="btn btn-primary text-center mt-3" href="#">Shop Now</a>-->
                        </li>
                        <li style="width: 33.3%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <a href="#" style="text-align: center;">
                                <div class="gallery-box-1 text-center">
                                    <img src="assets/images/gallery/new/3.jpg" alt="/">
                                    <div class="row">
                                        <div class="col-12" style="background-color: #2b515c;">
                                            <h3 class="category text-white" style="margin-top: 8px;">Package</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li style="width: 33.3%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                            <a href="#">
                                <div class="gallery-box-1 text-center">
                                    <img src="assets/images/gallery/new/1.jpg" alt="/">
                                    <div class="row">
                                        <div class="col-12" style="background-color: #2b515c;">
                                            <h3 class="category text-white" style="margin-top: 8px;">XO Sauce</h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!--<a class="btn btn-primary text-center mt-3" href="#">Shop Now</a>-->
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <section>
            <div class="container  mt-3">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 m-b10">
                                <h4 class="m-b15">Signature Dish</h4>
                                <ul class="dish-gallery gallery-grid-2">
                                    <li>
                                        <a href="#" class="gallery-link">
                                            <div class="gallery-box-1">
                                                <img src="assets/images/gallery/grid5/pic1.jpg" alt="/">
                                                <div class="overlay-text">Poached Sliced Whelk with Ham</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="gallery-link">
                                            <div class="gallery-box-1">
                                                <img src="assets/images/gallery/grid5/pic5.jpg" alt="/">
                                                <div class="overlay-text">Pan-fried Baby Oysters Omelette </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="gallery-link">
                                            <div class="gallery-box-1">
                                                <img src="assets/images/gallery/grid5/pic7.jpg" alt="/">
                                                <div class="overlay-text">Sweetened Mashed Taro with Ginko</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="gallery-link">
                                            <div class="gallery-box-1">
                                                <img src="assets/images/gallery/grid5/pic4.jpg" alt="/">
                                                <div class="overlay-text">Fried Chicken with Crispy Loosestrife</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Chef Details end-->

        <!--Today's Special-->
        <section class="section-wrapper-5 content-inner overflow-hidden bg-parallax">
            <div class="container-fluid">
                <div class="section-head text-center">
                    <h2 class="title text-white wow flipInX" data-wow-delay="0.2s" data-wow-delay="2s" style="color: #000000 !important;">Seasonal Special</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="">
                            <div class="dz-media">
                                <img src="assets/images/gallery/grid3/pic1.jpg" alt="/">
                                <div class="overlay-text" style="font-size: 22px;">Crispy Noodle Rolls</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="">
                            <div class="dz-media">
                                <img src="assets/images/gallery/grid3/pic2.jpg" alt="/">
                                <div class="overlay-text" style="font-size: 22px;">Braised Pomelo Peel with Abalone - 6 Catty</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="">
                            <div class="dz-media">
                                <img src="assets/images/gallery/grid3/pic3.jpg" alt="/">
                                <div class="overlay-text" style="font-size: 22px;">Chiu Chow Mixed Sweet Dumpling Soup</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.10s">
                        <div class="">
                            <div class="dz-media">
                                <img src="assets/images/gallery/grid3/pic4.jpg" alt="/">
                                <div class="overlay-text" style="font-size: 22px;">Sauteed Prawn with Lily Bulbs and Preserved Olives</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!--Footer-->
    <?php
    include ('include/footer.php')
    ?>
    <!-- Footer -->

    <div class="scroltop-progress scroltop-primary">
        <svg width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>

</div>

<?php
include ('include/js.php')
?>



</body>

</html>