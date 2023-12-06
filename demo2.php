<!DOCTYPE html>
<html lang="en">

<head>
    <title>City Taxi | Reservation</title>
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
    <?php $page_name = 'Reservation' ?>
    <?php include('inc/page-banner.php') ?>
    <!-- banner and header page -->

    <!-- booking reservation-form-section -->
    <section class="booking-reserve">
        <div class="container">
            <h1 class="booking-h">Reservation Booking Form</h1>
            <strong>Fill the remaining field below to get a quote. We will respond ASAP to all of your
                inquiries.</strong>
            <div class="booking-wrap">
                <h3 class="booking-topic">Passenger Information :</h3>
                <div class="row">
                    <div class="formfield col-md-4 col-sm-6 col-xs-12">
                        <label>First Name: <span>*</span></label>
                        <input class="form-control" type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="formfield col-md-4 col-sm-6 col-xs-12">
                        <label>Last Name: <span>*</span></label>
                        <input class="form-control" type="text" name="lname" placeholder="Last Name" required>
                    </div>

                </div>
                <h3 class="booking-topic">Address :</h3>
                <div class="row formrow">
                    <div class="col-2-div">
                        <div class="formfield col-md-12 col-sm-12 col-xs-12">
                            <label>Pick Up Location: <span>*</span></label>
                            <textarea name="pickup" id="pickup" rows="1" class="form-control" required
                                placeholder="PickUp Location"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row formrow">
                    <div class="col-2-div">
                        <div class="formfield col-md-12 col-sm-12 col-xs-12">
                            <label>Drop Up Location: <span>*</span></label>
                            <textarea name="destination" id="destination"  rows="1" class="form-control"
                                required placeholder="Destination"></textarea>
                        </div>
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