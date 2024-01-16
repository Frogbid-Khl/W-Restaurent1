<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Restaurant Website </title>


    <?php
    include('include/header.php')
    ?>
    <style>
        .slide img {
            width: 200px;
            height: auto;
            animation: scroll 20s linear infinite;
        }

        .slide-track1 {
            width: 100%;
            display: flex;
            gap: 2em;
            overflow: hidden;
        }

        .slider1 {
            padding: 0 2em;
        }

        @keyframes scroll {
            0% {transform: translateX(0);}
            100% {transform: translatex(-1000%)}
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
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Pak Loh Chiu Chow (Times Square)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <img src="assets/images/restaurant/pak/1.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <a href="contact-us.php" class="btn btn-primary">Contact Us</a>
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
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
                <div class="col-12 col-lg-4 order-0 order-lg-1">
                    <img src="assets/images/restaurant/pak/2.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <img src="assets/images/restaurant/pak/3.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Pak Loh Chiu Chow (Elements)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <img src="assets/images/restaurant/pak/4.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <a href="contact-us.php" class="btn btn-primary">Contact Us</a>
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
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
                <div class="col-12 col-lg-4 order-0 order-lg-1">
                    <img src="assets/images/restaurant/pak/5.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Pak Loh Chiu Chow (Hysan)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <img src="assets/images/restaurant/pak/6.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <a href="contact-us.php" class="btn btn-primary">Contact Us</a>
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
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
                <div class="col-12 col-lg-4 order-0 order-lg-1">
                    <img src="assets/images/restaurant/pak/7.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <img src="assets/images/restaurant/pak/8.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Moon Lok Chiu Chow (Mira)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <img src="assets/images/restaurant/moon/6.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <a href="contact-us.php" class="btn btn-primary">Contact Us</a>
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
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
                <div class="col-12 col-lg-4 order-0 order-lg-1">
                    <img src="assets/images/restaurant/moon/7.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <img src="assets/images/restaurant/moon/8.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Moon Lok Chiu Chow (Citygate)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <img src="assets/images/restaurant/moon/4.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <a href="contact-us.php" class="btn btn-primary">Contact Us</a>
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
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
                <div class="col-12 col-lg-4 order-0 order-lg-1">
                    <img src="assets/images/restaurant/moon/5.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Moon Lok Chiu Chow (Shenzhen)</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <img src="assets/images/restaurant/moon/1.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <a href="contact-us.php" class="btn btn-primary">Contact Us</a>
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
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
                <div class="col-12 col-lg-4 order-0 order-lg-1">
                    <img src="assets/images/restaurant/moon/2.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-4">
                    <img src="assets/images/restaurant/moon/3.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-lg-8">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.</p>
                    <a href="event.php" class="btn btn-primary">Reservation</a>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-12">
                    <h3>Moon Lok Chiu Chow (Shenzhen)</h3>
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