<!DOCTYPE html>
<html lang="en">

<head>
    <title>City Taxi | Car1</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- Fontawesome cdn -->
    <link media="all" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        type="text/css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />
    <!-- <link rel="stylesheet" href="css/flaticon.css" /> -->
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- FavIcon -->
    <link rel="icon" type="images/png" href="images/logo.png">
    <!-- FavIcon -->
</head>

<body>
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php $page_name = 'Our Fleets' ?>
    <?php include('inc/page-banner.php') ?>
    <!-- banner and header page -->

    <!-- describe of care starts here -->
    <section class="car-one">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="car-img">
                        <img src="images/working-user.jpg" alt="working user">
                        <div class="car-inside-img">
                            <img src="images/car1.jpg" alt="car">
                            <img class="inside-img" src="images/car-seats.jpg" alt="car seats">
                            <img src="images/two-user.jpg" alt="two peoples">
                        </div>
                    </div>
                    <div class="car-img-details">
                        <h2 class="topic-h">Service Offered In This Vehicle</h2>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo laborum consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla est pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id.</p>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="car-one-details">
                        <h2 class="topic-h">Mercedes-Benz A-Class</h2>
                        <p>
                            Lorem ipsum dolor sit do amet, consectetur, adipiscing
                            elit, sed
                        </p>

                        <ul class="fleets-icon-tags">
                            <li>
                                <span><i class="fa-solid fa-car-rear"></i></span> 4seats
                            </li>
                            <li>
                                <span><i class="fa-solid fa-map-location-dot"></i></span>
                                GPS Track
                            </li>
                            <li>
                                <span><i class="fa-solid fa-temperature-arrow-up"></i></span>
                                Air Condition
                            </li>
                            <li>
                                <span><i class="fa-solid fa-wifi"></i></span>
                                WiFi
                            </li>
                        </ul>

                        <div class="car-more-details">
                            <h3 class="topic-h">More Features</h3>
                            <p>Leather Seats, LED Lighting, Audio system, rain sensors, air conditioning, panoramic
                                roof...
                            </p>
                        </div>

                        <p class="mt-2 mb-0 justify-content-center">
                            <a href="#" class="btn btn-primary py-2 mr-1">Book Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php

    include('inc/footer.php');
    ?>
</body>

</html>