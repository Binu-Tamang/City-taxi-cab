<!DOCTYPE html>
<html lang="en">

<head>
    <title>City Taxi | Area We Serve</title>
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
</head>

<body>
    <!-- header parts start -->
    <?php include('inc/header.php') ?>
    <!-- header part ends -->

    <!-- banner and headre page  -->
    <?php

    $page_name = $_GET['title'] ?? "Area";

    ?>
    <?php include('inc/page-banner.php') ?>
    <!-- banner and header page -->

    <!-- area we serve details -->
    <section class="area-details">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="area-details-left">

                        <h2 class="main-banner-header">
                            <?php echo $page_name ?>
                        </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates voluptas mollitia
                            eveniet possimus, modi architecto, fuga consequuntur ut atque accusantium suscipit
                            laudantium illum quibusdam quidem numquam officia similique voluptatibus magni? <br> Lorem
                            Lorem fuga consequuntur ut atque accusantium suscipit
                            laudantium illum quibusdam quidem numquam officia similique voluptatibus magni? <br>At
                            Airdrie City Taxi we provide a safe and friendly environment to the passenger. Regardless of
                            the fact whether you are want to catch a flight in time or want to attend an important event
                            or meeting, our licensed Airdrie taxi service is the most affordable choice for you. By
                            hiring our services you get a lot of benefits, for instance, we do not let your time get
                            wasted in parking lots or on the roadside waiting for your taxi to arrive. We reach you in
                            the shortest time possible i.e. usually within 10 minutes. </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="area-details-left">
                        <div class="container">
                            <div class="map pb-4 my-5">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2497.3478418880118!2d-114.03743832339534!3d51.24950457175593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53715e361db3a6c9%3A0x7bd2a94ea669ec27!2sWindbury%20Crescent%2C%20Airdrie%2C%20AB%2C%20Canada!5e0!3m2!1sen!2snp!4v1700468897242!5m2!1sen!2snp"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us booked now -->
    <section class="about-us-book serve-details-book">
        <div class="container">
            <h3>Book Your Cab Today</h3>
            <p>Book your ride online for convenience and ease, or speak with one of our friendly Customer Care
                Specialists to assist you in securing reliable transportation.</p>
            <strong class="mt-2 mb-0 justify-content-center">
                <a href="#" class="btn btn-primary py-2 mr-1">Make A Reservation</a>
            </strong>
        </div>

    </section>
    <?php

    include('inc/footer.php');
    ?>
</body>

</html>