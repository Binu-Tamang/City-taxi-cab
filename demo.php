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

    <section class="getaqoutes text-center p-0 p-md-5">
        <div class="quotes-wrap">
            <div class="container">
                <h1 class="good-men-h2 p-0">Book A Reservation In Three Easy Steps<i class="fa-solid fa-clipboard"></i>
                </h1>
                <p>Fill the remaining field below to get a quote. We will
                    respond ASAP to all of your inquiries.</p>
                <div class="quotes-form">
                    <form id="quotesform">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <label>First Name: <span>*</span></label>
                                <input type="text" id="name" name="name" class="form-control" required
                                    placeholder="Your First Name">
                                <small id="nameError" class="form-text text-danger"></small>
                            </div>

                            <div class="col-12 col-lg-6">
                                <label>Last Name: <span>*</span></label>
                                <input type="text" id="name" name="name" class="form-control" required
                                    placeholder="Your Last Name">
                                <small id="nameError" class="form-text text-danger"></small>
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Phone: <span>*</span></label>
                                <input type="tel" id="phone" name="phone"
                                    pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$" class="form-control" required
                                    placeholder="Your Number">
                            </div>
                            <div class="col-12 col-lg-6">
                                <label>Email: <span>*</span></label>
                                <input id="form_email" name="email" value="" class="form-control"
                                    placeholder="Email Address" required="required" data-error="Email is required."
                                    type="text">
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
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Pick-up Date: <span>*</span></label>
                                <input name="pickupdate" type="text" value="" placeholder="Pick Up Date"
                                    class="form-control" id="checkin1" required="required"
                                    data-error="Please specify date">
                            </div>

                            <div class="formfield formfieldselectmul col-md-4 col-sm-6 col-xs-12">
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
                                    <textarea name="pickup" id="pickup" cols="30" rows="3" class="form-control" required
                                        placeholder="PickUp Location"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row formrow">
                            <div class="col-2-div">
                                <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                    <label>Drop Up Location: <span>*</span></label>
                                    <textarea name="destination" id="destination" cols="30" rows="3"
                                        class="form-control" required placeholder="Destination"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row formrow">
                            <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                <label for="message">Message:<span>*</span></label>
                                <textarea id="form_message" name="message" class="form-control" required rows="4"
                                    data-error="A Message is required"></textarea>
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
    </section>
    <?php
    include('inc/footer.php');
    ?>
</body>

</html>