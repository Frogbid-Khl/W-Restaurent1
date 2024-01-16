<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title -->
    <title>Restaurant Website </title>
    <?php
    include('include/header.php')
    ?>
    <style>
        label {
            padding: 0;
            height: 48px !important;
            line-height: 24px;
            padding-bottom: 10px;
            font-size: 18px;
            border: none;
            border-radius: 0;
            color: #fff;
            font-weight: 400;
            background-color: transparent;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            filter: invert(1);
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
    <!-- Banner  -->
    <div class="dz-bnr-inr style-1 text-center bg-parallax" style="background-image:url('assets/images/event/1.jpg'); background-size:contain; background-position:center;">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1 class="m-lg-t80"></h1>
            </div>
        </div>
    </div>
    <!-- Banner End -->
    <!-- Search Section-->
    <section class="content-inner-1 section-wrapper-1 bg-parallax"
             style="background-image:url('assets/images/background/pic1.png'); background-attachment: fixed;">
        <div class="container">
            <div class="section-head text-center">
                <h2 class="title text-white wow flipInX" data-wow-delay="0.2s">Enquiry</h2>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-12 col-md-12 m-b30 wow fadeInUp d-flex align-items-center justify-content-center"
                         data-wow-delay="0.2s">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Mr.
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Ms.
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-user"></i>
                            </div>
                            <input name="dzName" required type="text" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-user"></i>
                            </div>
                            <input name="dzPhoneNumber" required type="text" class="form-control dz-number"
                                   placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-email-1"></i>
                            </div>
                            <input name="dzEmail" required type="email" class="form-control"
                                   placeholder="Your Email Address">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-phone-call"></i>
                            </div>
                            <input name="dzEmail" required type="text" class="form-control"
                                   placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <label class="form-check-label" for="flexCheckDefault">
                            Type of Events:
                        </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Corporate and Meeting
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Social and Celebration
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <label class="form-check-label" for="flexCheckDefault">
                            Type of Events:
                        </label>
                        <div class="form-check form-check-inline ms-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Lunch
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Afternoon
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Dinner
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <label class="form-check-label" for="flexCheckChecked">
                            Your preferred event date
                        </label>
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-calendar-date"></i>
                            </div>
                            <input name="dzEmail" required type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <label class="form-check-label" for="flexCheckChecked">
                            Alternative event date (in case the above isn't available)
                        </label>
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-calendar-date"></i>
                            </div>
                            <input name="dzEmail" required type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-two-people"></i>
                            </div>
                            <input name="dzEmail" required type="number" class="form-control"
                                   placeholder="Number of Guests">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-clock"></i>
                            </div>
                            <input name="dzEmail" required type="text" class="form-control"
                                   placeholder="If you'd like us to call you, what is the most suitable time?">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <label class="form-check-label" for="flexCheckDefault">
                            How would you like us to contact you?
                        </label>
                        <div class="form-check form-check-inline ms-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                E-Mail
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Phone
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                WhatsApp
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 m-b30 m-sm-b50 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="input-group input-line">
                            <div class="input-group-prepand">
                                <i class="flaticon-email-1"></i>
                            </div>
                            <input name="dzEmail" required type="text" class="form-control"
                                   placeholder="Your message / Special Requests">
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 text-center">
                        <button type="submit" name="submit" value="submit" class="btn btn-lg btn-white btn-hover-1">
                            <span>Submit</span></button>
                    </div>
                </div>
            </form>
            <div class="row mt-5">
                <div class="col-12">
                    <h3 class="text-white">Contact us for other enquiry</h3>
                </div>
                <div class="col-12">
                    <p class="text-white"><i class="fa-solid fa-envelope"></i> <a href="mailto:xxxxx@buick-hk.com">xxxxx@buick-hk.com</a></p>
                    <p class="text-white"><i class="fa-solid fa-phone"></i> <a href="callto:21563909">2156 3909</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Section-->

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