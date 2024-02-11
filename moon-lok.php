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
        .slide img {
            width: 300px; /* Adjust the width to fit 5 images */
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
                            <img src="assets/images/restaurant/5.jpg" alt=""/>
                        </div>
                        <div>
                            <img src="assets/images/restaurant/6.jpg" alt=""/>
                        </div>
                        <div>
                            <img src="assets/images/restaurant/4.jpg" alt=""/>
                        </div>
                    </div>
                    <!-- control arrows -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-lg-3">
                    <img class="img-fluid" src="assets/images/logo/logo.1.jpg" alt="">
                </div>
                <div class="col-12 col-lg-9">
                    <p>Since opening its doors in 1967, Pak Loh Chiu Chow has withstood the test of time and continues
                        to serve its loyal customers authentic Chiu Chow food. Aside from the existing Pak Loh Chiu Chow
                        outlets under Buick Management Limited, they have since branched out to include Moon Lok Chiu
                        Chow and Moon Lok Chinese restaurants.
                    </p>
                    <p>

                        Moon Lok Chiu Chow holds the meaning of “Full of Happiness”, comprising two cuisine. The Daa
                        Laang cuisine is centred around street comforts and local delicacies served in casual setting.
                        The Hong Kong Style uses more refined hours to create complex and well-balanced gourmets.
                    </p>
                    <p>

                        We at Buick Management Limited are proud of our heritage and hope to continue to bring happiness
                        and delightful culinary experiences to all that visit our establishments.

                    </p>
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


        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Mira</h3>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-lg-4">
                    <a href="assets/images/restaurant/moon/6.jpg" class="image-link">
                        <img src="assets/images/restaurant/moon/6.jpg" alt="" class="img-fluid">
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
                    <a href="assets/images/restaurant/moon/7.jpg" class="image-link">
                        <img src="assets/images/restaurant/moon/7.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-lg-4">
                    <a href="assets/images/restaurant/moon/8.jpg" class="image-link">
                        <img src="assets/images/restaurant/moon/8.jpg" alt="" class="img-fluid">
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
                <div class="col-3 d-flex align-items-center justify-content-center">
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Citygate</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <a href="assets/images/restaurant/moon/4.jpg" class="image-link">
                        <img src="assets/images/restaurant/moon/4.jpg" alt="" class="img-fluid">
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
                </div>
                <div class="col-12 col-lg-4 order-0 order-lg-1">
                    <a href="assets/images/restaurant/moon/5.jpg" class="image-link">
                        <img src="assets/images/restaurant/moon/5.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center mt-3">
                <div class="col-3 d-flex align-items-center justify-content-center">
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Shenzhen</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <a href="assets/images/restaurant/moon/1.jpg" class="image-link">
                        <img src="assets/images/restaurant/moon/1.jpg" alt="" class="img-fluid">
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
                </div>
                <div class="col-12 col-lg-4 order-0 order-lg-1">
                    <a href="assets/images/restaurant/moon/2.jpg" class="image-link">
                        <img src="assets/images/restaurant/moon/2.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <a href="assets/images/restaurant/moon/3.jpg" class="image-link">
                        <img src="assets/images/restaurant/moon/3.jpg" alt="" class="img-fluid">
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
    $(document).ready(function () {
        $('.image-link').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            closeBtnInside: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from magnific popup
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
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
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true, // Add autoplay option
        autoplaySpeed: 3000, // Set autoplay speed to 3 seconds
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
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