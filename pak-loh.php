<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Restaurant Website </title>


    <?php
    include('include/header.php')
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <style>
        .slide {
            flex-shrink: 0; /* Prevent images from shrinking */
        }

        .slide img {
            width: 210px; /* Use 100% width for images inside each slide */
            height: auto;
            animation: scroll 20s linear infinite;
        }

        .slide-track1 {
            width: 100%;
            display: flex;
            gap: 1em;
            overflow: hidden;
        }

        .slider1 {
            padding: 0 1em;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translatex(-1000%)
            }
        }
    </style>
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
                <div class="col-md-12">
                    <div class="overlay">
                    </div>
                    <!-- Slider -->
                    <div class="responsive">
                        <div>
                            <img src="assets/images/restaurant/3.jpg" alt=""/>
                        </div>
                        <div>
                            <img src="assets/images/restaurant/1.jpg" alt=""/>
                        </div>
                        <div>
                            <img src="assets/images/restaurant/2.jpg" alt=""/>
                        </div>
                    </div>
                    <!-- control arrows -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-lg-2">
                    <img class="img-fluid" src="assets/images/logo/logo.jpg" alt="">
                </div>
                <div class="col-12 col-lg-10">
                    <p>Pak Loh Chiu Chow, a pioneer in ChiuChow cuisine, has been serving loyal customers for over 55
                        years since the establishment of their first restaurant in Causeway Bay in 1967. Proving
                        exquisite dining ambience, freshness and friendly service. Compared to the majority of Chinese
                        food, Chiu Chow style is a healthier option as many of the dishes are poached, steamed, and
                        cooked with less oil. From the time of its first opening, Pak Loh Chiu Chow now has a number of
                        branches situated in Hong Kong.
                    </p>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Hysan</h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-lg-4">
                    <a href="assets/images/restaurant/pak/6.jpg" class="image-link">
                        <img src="assets/images/restaurant/pak/6.jpg" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <!--<a href="contact-us.php" class="btn btn-primary">Contact Us</a>-->
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-lg-8 order-1 order-lg-0">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                   <!-- <a href="event.php" class="btn btn-primary">Reservation</a>-->
                </div>
                <div class="col-12 col-lg-4 order-0 order-lg-1">
                    <a href="assets/images/restaurant/pak/7.jpg" class="image-link">
                        <img src="assets/images/restaurant/pak/7.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-lg-4">
                    <a href="assets/images/restaurant/pak/8.jpg" class="image-link">
                        <img src="assets/images/restaurant/pak/8.jpg" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <!--<a href="event.php" class="btn btn-primary">Reservation</a>-->
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center mt-3">
                <div class="col-3">
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Times Square</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <a href="assets/images/restaurant/pak/1.jpg" class="image-link">
                        <img src="assets/images/restaurant/pak/1.jpg" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <!--<a href="contact-us.php" class="btn btn-primary">Contact Us</a>-->
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-lg-8 order-1 order-lg-0">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <!--<a href="event.php" class="btn btn-primary">Reservation</a>-->
                </div>
                <div class="col-12 col-lg-4 order-0 order-lg-1">
                    <a href="assets/images/restaurant/pak/2.jpg" class="image-link">
                        <img src="assets/images/restaurant/pak/2.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <a href="assets/images/restaurant/pak/3.jpg" class="image-link">
                        <img src="assets/images/restaurant/pak/3.jpg" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <!--<a href="event.php" class="btn btn-primary">Reservation</a>-->
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center mt-3">
                <div class="col-3">
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Elements</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <a href="assets/images/restaurant/pak/4.jpg" class="image-link">
                        <img src="assets/images/restaurant/pak/4.jpg" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                   <!-- <a href="contact-us.php" class="btn btn-primary">Contact Us</a>-->
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-lg-8 order-1 order-lg-0">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                   <!-- <a href="event.php" class="btn btn-primary">Reservation</a>-->
                </div>
                <div class="col-12 col-lg-4 order-0 order-lg-1">
                    <a href="assets/images/restaurant/pak/5.jpg" class="image-link">
                        <img src="assets/images/restaurant/pak/5.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-lg-4">
                    <a href="assets/images/restaurant/pak/4.jpg" class="image-link">
                        <img src="assets/images/restaurant/pak/9.jpg" alt="" class="img-fluid">
                    </a>
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <!-- <a href="contact-us.php" class="btn btn-primary">Contact Us</a>-->
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center mt-3">
                <div class="col-3">
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Awards</h3>
                </div>
            </div>
            <div class="slider1">
                <div class="slide-track1">
                    <div class="slide">
                        <img src="assets/images/restaurant/awards/1.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/images/restaurant/awards/2.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/images/restaurant/awards/3.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/images/restaurant/awards/4.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/images/restaurant/awards/5.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/images/restaurant/awards/6.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/images/restaurant/awards/7.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/images/restaurant/awards/1.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/images/restaurant/awards/2.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="assets/images/restaurant/awards/3.png" alt="">
                    </div>
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
    $(document).ready(function() {
        $('.image-link').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from magnific popup
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                verticalFit: true
            },
            zoom: {
                enabled: true,
                duration: 300 // don't forget to change the duration also in CSS
            }
        });
    });

    $('.responsive').slick({
        dots: false,
        prevArrow: $('.prev'),
        nextArrow: $('.next'),
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }
        ]
    });

</script>
</body>

</html>