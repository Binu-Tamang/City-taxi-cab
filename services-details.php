<!DOCTYPE html>
<html lang="en">

<head>
    <title>City Taxi | Services</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet" />
    <link media="all" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        type="text/css" />
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
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
    <?php

    $page_name = $_GET['title'] ?? "Services";

    ?>
    <?php include('inc/page-banner.php') ?>
    <!-- banner and header page -->

    <!-- details of services page -->
    <section class="details-service-page">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-4 gy-3 d-lg-block order-2 order-lg-1">
                    <div class="services-details-menu">
                        <strong>Service Menu</strong>
                        <ul class="services-menu-list">
                            <li><a aria-label="about the services we provided"
                                    href="services-details.php?title=Taxi Services"><i class="fa-solid fa-taxi"></i>
                                    Taxi Services</a>
                            </li>
                            <li><a aria-label="about the services we provided"
                                    href="services-details.php?title=Airport Transportation"><i
                                        class="fa-solid fa-plane-departure"></i> Airport Transportation</a>
                            </li>
                            <li><a aria-label="about the services we provided"
                                    href="services-details.php?title=Executive Travel"><i
                                        class="fa-solid fa-plane-departure"></i> Executive Travel</a></li>
                            <li><a aria-label="about the services we provided"
                                    href="services-details.php?title=Appointment Pick and Drop"><i
                                        class="fa-solid fa-calendar-days"></i> Appointment Pick and Drop</a>
                            </li>
                            <li><a aria-label="about the services we provided"
                                    href="services-details.php?title=School Run"><i class="fa-solid fa-school"></i>
                                    School Run</a>
                            </li>
                            <li><a aria-label="about the services we provided"
                                    href="services-details.php?title=Corporate Accounts"><i
                                        class="fa-solid fa-file-invoice"></i> Corporate Accounts</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 order-1 order-lg-2">
                    <div class="img-details-services">
                        <img src="images/two-user.jpg" alt="two peoples">
                        <h2 class="topic-h">
                            <?php echo $page_name ?>
                        </h2>
                        <p>At Airdrie City Taxi we provide a safe and friendly environment to the passenger. Regardless
                            of the fact whether you are want to catch a flight in time or want to attend an important
                            event or meeting, our licensed Airdrie taxi service is the most affordable choice for you.
                            By hiring our services you get a lot of benefits, for instance, we do not let your time get
                            wasted in parking lots or on the roadside waiting for your taxi to arrive. We reach you in
                            the shortest time possible i.e. usually within 10 minutes.</p>
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