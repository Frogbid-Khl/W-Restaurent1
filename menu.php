<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Restaurant Website </title>


    <?php
    include('include/header.php')
    ?>
    <style>
        .gallery-section{
            position:relative;
            width:auto; /* Set your image width */
            height:300px; /* Set your image height */
        }
        .gallery-section img{
            position:absolute;
            width: 100%;
            height: 100%;
            top:0;
            left:0;
            z-index: 1;
            display: none;
        }

        .gallery-section img.active{
            z-index: 2;
            display: block !important;
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

        <!-- Our Menu-->
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-12">
                <img class="img-fluid" src="assets/images/menu/1.jpg" alt="">
            </div>
            <div class="col-2">
                <img class="img-fluid" src="assets/images/logo/logo.jpg" alt="">
            </div>
            <div class="col-2">
                <img class="img-fluid" src="assets/images/logo/logo.1.jpg" alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-lg-5">
                <div class="gallery-section">
                    <img src="assets/images/menu/2.jpg" class="active img-fluid" />
                    <img src="assets/images/menu/3.jpg" class="img-fluid"/>
                    <img src="assets/images/menu/4.jpg" class="img-fluid" />
                    <img src="assets/images/menu/5.jpg" class="img-fluid" />
                    <img src="assets/images/menu/6.jpg" class="img-fluid" />
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-8 text-center">
                        <h2>Dim Sum</h2>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center mt-3">
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Pak Loh (Times Square)</a>
                    </div>
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Moon Lok (Mira)</a>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center mt-3">
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Pak Loh (Elements)</a>
                    </div>
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Moon Lok (Citygate)</a>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center mt-3">
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Pak Loh (Hysan)</a>
                    </div>
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Moon Lok (Shen Zhen)</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-lg-7 order-1 order-lg-0">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-8 text-center">
                        <h2>A La Carte</h2>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center mt-3">
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Pak Loh (Times Square)</a>
                    </div>
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Moon Lok (Mira)</a>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center mt-3">
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Pak Loh (Elements)</a>
                    </div>
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Moon Lok (Citygate)</a>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center mt-3">
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Pak Loh (Hysan)</a>
                    </div>
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Moon Lok (Shen Zhen)</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 order-0 order-lg-1">
                <div class="gallery-section">
                    <img src="assets/images/menu/7.jpg" class="active img-fluid" />
                    <img src="assets/images/menu/8.jpg" class="img-fluid"/>
                    <img src="assets/images/menu/9.jpg" class="img-fluid" />
                    <img src="assets/images/menu/10.jpg" class="img-fluid" />
                    <img src="assets/images/menu/11.jpg" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-lg-5">
                <div class="gallery-section">
                    <img src="assets/images/menu/12.jpg" class="active img-fluid" />
                    <img src="assets/images/menu/13.jpg" class="img-fluid"/>
                    <img src="assets/images/menu/14.jpg" class="img-fluid" />
                    <img src="assets/images/menu/15.jpg" class="img-fluid" />
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-8 text-center">
                        <h2>Seasonal Dish</h2>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center mt-3">
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Pak Loh (Times Square)</a>
                    </div>
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Moon Lok (Mira)</a>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center mt-3">
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Pak Loh (Elements)</a>
                    </div>
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Moon Lok (Citygate)</a>
                    </div>
                </div>
                <div class="row d-flex align-items-center justify-content-center mt-3">
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Pak Loh (Hysan)</a>
                    </div>
                    <div class="col-6">
                        <a href="#" style="width: 100%" class="btn btn-primary">Moon Lok (Shen Zhen)</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Menu-->

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
    function swapImages($gallery) {
        var $active = $gallery.find('.active');
        var $next = ($gallery.find('.active').next().length > 0) ? $gallery.find('.active').next() : $gallery.find('img:first');
        $active.fadeOut(function(){
            $active.removeClass('active');
            $next.fadeIn().addClass('active');
        });
    }

    // Run swapImages() function for each gallery section every 5 seconds
    $('.gallery-section').each(function() {
        var $gallery = $(this);
        setInterval(function() {
            swapImages($gallery);
        }, 3000);
    });
</script>
</body>

</html>