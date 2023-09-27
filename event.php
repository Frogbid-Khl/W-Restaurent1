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
    <!-- Banner  -->
    <div class="dz-bnr-inr style-1 text-center bg-parallax" style="background-image:url('assets/images/banner/bnr1.jpg'); background-size:cover; background-position:center;">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Events</h1>
                <!-- Breadcrumb Row -->
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Event</li>
                    </ul>
                </nav>
                <!-- Breadcrumb Row End -->
            </div>
        </div>
    </div>
    <!-- Banner End -->
    <!-- Search Section-->
    <section class="content-inner-1 section-wrapper-1 bg-parallax"
             style="background-image:url('assets/images/background/pic1.png'); background-attachment: fixed;">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title text-white wow flipInX" data-wow-delay="0.2s">Reservation</h2>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-user"></i>
                            </div>
                            <input name="dzName" required type="text" class="form-control" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <input name="dzPhoneNumber" required type="text" class="form-control dz-number"
                                   placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-email-1"></i>
                            </div>
                            <input name="dzEmail" required type="text" class="form-control"
                                   placeholder="Your Email">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-two-people"></i>
                            </div>
                            <select class="form-select default-select">
                                <option>Number Of People</option>
                                <option>Member 1</option>
                                <option>Member 2</option>
                                <option>Member 3</option>
                                <option>Member 4</option>
                                <option>Member 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-calendar-date"></i>
                            </div>
                            <input required type="text" class="form-control" id="datePickerOnly" placeholder="Date">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-clock"></i>
                            </div>
                            <input required type="text" class="form-control" id="timePickerOnly" placeholder="Time">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 text-center">
                        <button type="submit" name="submit" value="submit" class="btn btn-lg btn-white btn-hover-1">
                            <span>Book a Table</span></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- Search Section-->

        <!-- Map Iframe -->
        <div class="map-iframe style-1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d236161.13768968167!2d113.97459101369066!3d22.352957629908833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403e2eda332980f%3A0xf08ab3badbeac97c!2sHong%20Kong!5e0!3m2!1sen!2sbd!4v1695730944830!5m2!1sen!2sbd"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Map Iframe -->

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