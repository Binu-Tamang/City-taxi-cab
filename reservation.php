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

    <section class="getareserve text-center p-0 p-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="reserve-wrap">
                        <h1 class="p-0">Book A Reservation<i class="fa-solid fa-clipboard"></i>
                        </h1>
                        <p>Fill the remaining field below to get a quote. We will
                            respond ASAP to all of your inquiries.</p>
                        <div class="reserve-form">
                            <form id="reserveform">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <label>Name: <span>*</span></label>
                                        <input type="text" id="name" name="name" class="form-control" required
                                            placeholder="Your Name">
                                        <small id="nameError" class="form-text text-danger"></small>
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <label>Phone: <span>*</span></label>
                                        <input type="tel" id="phone" name="phone"
                                            pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$" class="form-control"
                                            required placeholder="Your Number">
                                    </div>

                                    <div class="col-12 col-lg-6">
                                        <label for="vechicles">Type Of Vechicles</label>
                                        <select name="type-car" class="form-control" required>
                                            <option selected disabled>-- Type Of Vechicles --</option>
                                            <option value="One"> BMW X5</option>
                                            <option value="two">Mercedes-Benz E-Class</option>
                                            <option value="three">Audi A6</option>
                                            <option value="four">Mercedes-Benz A-Class</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <label for="trip">Trip Type</label>
                                        <select name="trip-type" class="form-control" required>
                                            <option selected disabled>-- Per Hour --</option>
                                            <option value="One"> Per Day</option>
                                            <option value="two">Airport Transport</option>
                                            <option value="three">Other</option>
                                        </select>
                                    </div>
                                    <div class="formfield col-md-6 col-sm-6 col-xs-12">
                                        <label>Pick-up Date: <span>*</span></label>
                                        <input name="pickupdate" type="text" value="" placeholder="Pick Up Date"
                                            class="form-control" id="checkin1" required="required"
                                            data-error="Please specify date">
                                    </div>

                                    <div class="formfield formfieldselectmul col-md-6 col-sm-6 col-xs-12">
                                        <label>Pickup Time: <span>*</span></label>
                                        <div class="select-choose">
                                            <select name="pickuptimehh" required>
                                                <option selected disabled>HH</option>
                                                <option>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                                <option>05</option>
                                                <option>06</option>
                                                <option>07</option>
                                                <option>08</option>
                                                <option>09</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select>
                                            <select name="pickuptimemm" required>
                                                <option selected disabled>MM</option>
                                                <option>00</option>
                                                <option>10</option>
                                                <option>20</option>
                                                <option>30</option>
                                                <option>40</option>
                                                <option>50</option>
                                            </select>
                                            <select name="pickuptimeam">
                                                <option selected>AM</option>
                                                <option>PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row formrow">
                                    <div class="col-2-div">
                                        <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                            <label>Pick Up Location: <span>*</span></label>
                                            <textarea name="pickup" id="pickup" cols="30" rows="2" class="form-control"
                                                required placeholder="PickUp Location"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row formrow">
                                    <div class="col-2-div">
                                        <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                            <label>Drop Up Location: <span>*</span></label>
                                            <textarea name="destination" id="destination" cols="30" rows="2"
                                                class="form-control" required placeholder="Destination"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row formrow">
                                    <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                        <label for="message">Message:<span>*</span></label>
                                        <textarea id="form_message" name="message" class="form-control" required
                                            rows="4" data-error="A Message is required"></textarea>
                                    </div>
                                </div>

                                <div class="row formrow form-submit-clear">
                                    <div class="col-md-12">
                                        <div class="welcome-part-button">
                                            <button>Submit Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- airdire city Taxi location map -->
                    <div class="container">
                        
                        <div class="map pb-4">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2497.3478418880118!2d-114.03743832339534!3d51.24950457175593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53715e361db3a6c9%3A0x7bd2a94ea669ec27!2sWindbury%20Crescent%2C%20Airdrie%2C%20AB%2C%20Canada!5e0!3m2!1sen!2snp!4v1700468897242!5m2!1sen!2snp"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </iframe>
                        </div>
                    </div>
                    <P></P>
                </div>
            </div>
        </div>


    </section>
    <?php
    include('inc/footer.php');
    ?>
</body>

</html>