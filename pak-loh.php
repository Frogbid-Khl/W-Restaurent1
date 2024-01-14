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
    <section style="margin-top: 10rem">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12 heroSlider-fixed">
                    <div class="overlay">
                    </div>
                    <!-- Slider -->
                    <div class="slider responsive">
                        <div>
                            <img src="assets/images/restaurant/1.jpg" alt=""/>
                        </div>
                        <div>
                            <img src="assets/images/restaurant/2.jpg" alt=""/>
                        </div>
                        <div>
                            <img src="assets/images/restaurant/3.jpg" alt=""/>
                        </div>
                        <div>
                            <img src="assets/images/restaurant/1.jpg" alt=""/>
                        </div>
                        <div>
                            <img src="assets/images/restaurant/2.jpg" alt=""/>
                        </div>
                        <div>
                            <img src="assets/images/restaurant/3.jpg" alt=""/>
                        </div>
                    </div>
                    <!-- control arrows -->
                    <div class="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    </div>
                    <div class="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    </div>

                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h6 class="title wow flipInX text-dark fs-2 pt-5">Buick Management Limited introduction</h6>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-6 col-lg-4">
                    <img class="img-fluid" src="assets/images/logo/logo.jpg" alt="">
                </div>
                <div class="col-6 col-lg-4">
                    <img class="img-fluid" src="assets/images/logo/logo.1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <?php
    include('include/footer.php')
    ?>
</div>

<?php
include('include/js.php')
?>
<script>
    $('.responsive').slick({
        dots: true,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>
</body>

</html>