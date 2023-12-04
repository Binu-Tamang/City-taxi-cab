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

    <!-- reservation form start -->
    <section class="reservation-form-section">
        <div class="page_body_wrap page_body_wrap_reserv">
            <div class="page_body page_body_reserv">
                <div class="reservbodywrap">
                    <h3>Book A Reservation In Three Easy Steps</h3>
                    <p>If you have any questions, please call<a href="tel:403 351 2200"> 403 351 2200</a></p>
                    <div class="formfield col-md-12 col-sm-12 col-xs-12">
                        <label>Type Of Service</label>
                        <select class="outtaHere">
                            <option value="airportdrop"> Airport Dropup - One Way</option>
                            <option value="airportpickup-oneway">Airport Pickup - One Way</option>
                            <option value="other">Taxi Services</option>
                            <option value="executive-travel">Executive Travel</option>
                        </select>
                    </div>
                    <span>Fields marked with ( * ) are mandatory information to submit the form.</span>


                    <!-- Airport Drop -->
                    <form class="cssform  reservtype airportdrop" action="php/reserv-form-airport-drop.php"
                        method="post" enctype="multipart/form-data" name="frm" id="frm"
                        onSubmit="return validate(this)">
                        <div class="row g-2 ">
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Passenger Information</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>First Name:*</label>
                                <input type="text" name="fname" placeholder="First Name" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Last Name:*</label>
                                <input type="text" name="lname" placeholder="Last Name" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Phone:*</label>
                                <input type="tel" name="phone" placeholder="Phone" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Email:*</label>
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Passengers:*</label>
                                <input type="number" name="nopassengers" placeholder="No." min="1"
                                    max="30" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Luggage:*</label>
                                <input type="number" name="luggage" placeholder="No." min="1" max="40"
                                    required>
                            </div>
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Pick up Location</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Pick-up Date:*</label>
                                <input name="pickupdate" type="text" value="" placeholder="Pick Up Date"
                                    class="form-control" id="checkin1" required="required"
                                    data-error="Please specify date">
                            </div>

                            <div class="formfield formfieldselectmul col-md-4 col-sm-6 col-xs-12">
                                <label>Pickup Time: *</label>
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
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Street Address: *</label>
                                <input type="text" name="streetaddressa" placeholder="Street Address" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>City:*</label>
                                <input type="text" name="citytowna" placeholder="City/Town" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Postal code:*</label>
                                <input type="text" name="postalcode" placeholder="" required>
                            </div>
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Drop-off location - Airport</h4>

                            <div class="formfield formfieldselectmul col-md-4 col-sm-6 col-xs-12">
                                <label>Flight Time:</label>
                                <select name="flighttimehh" required>
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
                                <select name="flighttimemm" required>
                                    <option selected disabled>MM</option>
                                    <option>00</option>
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                    <option>40</option>
                                    <option>50</option>
                                </select>
                                <select name="flighttimeam">
                                    <option selected>AM</option>
                                    <option>PM</option>
                                </select>
                            </div>

                            <div class="formfield col-md-6 col-sm-6 col-xs-12">
                                <label>Airport*</label>
                                <select name="airport" required>
                                    <option>Calgary International Airport</option>
                                    <option>Edmonton International Airport</option>
                                </select>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Airline*</label>
                                <select name="airline" class="airportifsel" required>
                                    <option disabled selected>-- Airline --</option>
                                    <option>Air Canada</option>
                                    <option>Air Transat</option>
                                    <option>Canadian North</option>
                                    <option>Air Canada Rouge</option>
                                    <option>Air Inuit</option>
                                    <option>Flair Airlines</option>
                                    <option>Air North</option>
                                    <option>Air Canada Express</option>
                                    <option>Flair Airlines</option>
                                    <option>Canada Jetlines</option>
                                    <option>Air Canada Jazz</option>
                                    <option value="airlineother">Other</option>
                                </select>
                            </div>
                            <div class="formfield airlineother airlineifot col-md-4 col-sm-6 col-xs-12">
                                <label>Airline Name(If Other)</label>
                                <input type="text" name="airlineother" placeholder="Airline Name">
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Flight No:*</label>
                                <input type="text" name="flightno" placeholder="Flight Number" required>
                            </div>

                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Departing To</label>
                                <input type="text" name="arrvfrodeparto" placeholder="Departing To">
                            </div>

                            <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                <h4 class="col-md-12 col-sm-12 col-xs-12">Method of Payment:</h4>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCheck" value="Check">
                                    <label class="form-check-label" for="payCheck">Check</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCard"
                                        value="Credit / Debit card">
                                    <label class="form-check-label" for="payCard">Credit / Debit card</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCash" value="Cash">
                                    <label class="form-check-label" for="payCash">Cash</label>
                                </div>

                            </div>
                            <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                <label>Remarks</label>
                                <textarea name="remarks"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 formfield formfield_submit">
                                <i class="fa fa-long-arrow-alt-right"></i>
                                <input type="submit" value="Send Message">
                            </div>
                        </div>
                    </form>

                    <!-- Airport PickUp -->
                    <form class="cssform  reservtype airportpickup-oneway"
                        action="php/reserv-form-airport-pickup-oneway.php" method="post" enctype="multipart/form-data"
                        name="frm" id="frm" onSubmit="return validate(this)">
                        <div class="row g-2 ">
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Passenger Information</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>First Name:*</label>
                                <input type="text" name="fname" placeholder="First Name" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Last Name:*</label>
                                <input type="text" name="lname" placeholder="Last Name" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Phone:*</label>
                                <input type="tel" name="phone" placeholder="Phone" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Email:*</label>
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Passengers:*</label>
                                <input type="number" name="nopassengers" placeholder="No." min="1"
                                    max="100" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Luggage:*</label>
                                <input type="number" name="luggage" placeholder="No." min="1" max="100"
                                    required>
                            </div>
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Pick up Location - Airport</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Pick-up Date:*</label>
                                <input name="pickupdate" type="text" value="" placeholder="Pick Up Date"
                                    class="form-control" id="checkin2" required="required"
                                    data-error="Please specify date">
                            </div>

                            <div class="formfield formfieldselectmul col-md-4 col-sm-6 col-xs-12">
                                <label>Flight Time:</label>
                                <select name="flighttimehh" required>
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
                                <select name="flighttimemm" required>
                                    <option selected disabled>MM</option>
                                    <option>00</option>
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                    <option>40</option>
                                    <option>50</option>
                                </select>
                                <select name="flighttimeam">
                                    <option selected>AM</option>
                                    <option>PM</option>
                                </select>
                            </div>

                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Airport*</label>
                                <select name="airport" required>
                                    <option>Westchester</option>
                                    <option>La Guardia</option>
                                    <option>JFK</option>
                                    <option>Bradley</option>
                                    <option>Newark</option>
                                    <option>Stewart</option>
                                </select>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Airline</label>
                                <select name="airline" class="airportifsel2" required>
                                    <option disabled selected>-- Airline --</option>
                                    <option>American</option>
                                    <option>Air Canada</option>
                                    <option>Air France</option>
                                    <option>Air India</option>
                                    <option>British Airways</option>
                                    <option>Delta</option>
                                    <option>Emirates</option>
                                    <option>Jet Blue</option>
                                    <option>Southwest</option>
                                    <option>Swiss Air</option>
                                    <option>United</option>
                                    <option value="airlineother">Other</option>
                                </select>
                            </div>
                            <div class="formfield airlineother airlineifot2 col-md-4 col-sm-6 col-xs-12">
                                <label>Airline Name(If Other)</label>
                                <input type="text" name="airlineother" placeholder="Airline Name">
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Flight No:*</label>
                                <input type="text" name="flightno" placeholder="Flight Number" required>
                            </div>

                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Arriving From</label>
                                <input type="text" name="arrvfrom" placeholder="Arriving From">
                            </div>
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Drop-off location</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Street Address: *</label>
                                <input type="text" name="streetaddressa2" placeholder="Street Address" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>City:*</label>
                                <input type="text" name="citytowna2" placeholder="City/Town" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Postal code:*</label>
                                <input type="text" name="postalcode" placeholder="" required>
                            </div>

                            <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                <h4 class="col-md-12 col-sm-12 col-xs-12">Method of Payment:</h4>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCheck" value="Check">
                                    <label class="form-check-label" for="payCheck">Check</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCard"
                                        value="Credit / Debit card">
                                    <label class="form-check-label" for="payCard">Credit / Debit card</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCash" value="Cash">
                                    <label class="form-check-label" for="payCash">Cash</label>
                                </div>

                            </div>
                            <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                <label>Remarks</label>
                                <textarea name="remarks"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 formfield formfield_submit">
                                <i class="fa fa-long-arrow-alt-right"></i>
                                <input type="submit" value="Send Message">
                            </div>
                        </div>
                    </form>

                    <!-- Airport PickUp Roundtrip -->
                    <form class="cssform  reservtype airportpickup-roundtrip"
                        action="php/reserv-form-airport-pickup-roundtrip.php" method="post"
                        enctype="multipart/form-data" name="frm" id="frm" onSubmit="return validate(this)">
                        <div class="row g-2 ">
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Passenger Information</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>First Name:*</label>
                                <input type="text" name="fname" placeholder="First Name" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Last Name:*</label>
                                <input type="text" name="lname" placeholder="Last Name" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Phone:*</label>
                                <input type="tel" name="phone" placeholder="Phone" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Email:*</label>
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Passengers:*</label>
                                <input type="number" name="nopassengers" placeholder="No." min="1" max="100" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Luggage:*</label>
                                <input type="number" name="luggage" placeholder="No." min="1" max="100" required>
                            </div>
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Pick up Location #1 - Airport</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Pick-up Date:*</label>
                                <input name="pickupdate1" type="text" value="" placeholder="Pick Up Date"
                                    class="form-control" id="checkin5" required="required"
                                    data-error="Please specify date">
                            </div>

                            <div class="formfield formfieldselectmul col-md-4 col-sm-6 col-xs-12">
                                <label>Flight Time:*</label>
                                <select name="flighttimehh2" required>
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
                                <select name="flighttimemm2" required>
                                    <option selected disabled>MM</option>
                                    <option>00</option>
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                    <option>40</option>
                                    <option>50</option>
                                </select>
                                <select name="flighttimeam2">
                                    <option selected>AM</option>
                                    <option>PM</option>
                                </select>
                            </div>

                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Airport*</label>
                                <select name="airport2" required>
                                    <option>Westchester</option>
                                    <option>La Guardia</option>
                                    <option>JFK</option>
                                    <option>Bradley</option>
                                    <option>Newark</option>
                                    <option>Stewart</option>
                                </select>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Airline</label>
                                <select name="airline2" class="airportifsel1" required>
                                    <option disabled selected>-- Airline --</option>
                                    <option>American</option>
                                    <option>Air Canada</option>
                                    <option>Air France</option>
                                    <option>Air India</option>
                                    <option>British Airways</option>
                                    <option>Delta</option>
                                    <option>Emirates</option>
                                    <option>Jet Blue</option>
                                    <option>Southwest</option>
                                    <option>Swiss Air</option>
                                    <option>United</option>
                                    <option value="airlineother">Other</option>
                                </select>
                            </div>
                            <div class="formfield airlineother airlineifot1 col-md-4 col-sm-6 col-xs-12">
                                <label>Airline Name(If Other)</label>
                                <input type="text" name="airlineother2" placeholder="Airline Name">
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Flight No:*</label>
                                <input type="text" name="flightno2" placeholder="Flight Number" required>
                            </div>

                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Arriving From</label>
                                <input type="text" name="arrvfrom2" placeholder="Arriving From">
                            </div>
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Drop-off location #1</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Street Address: *</label>
                                <input type="text" name="streetaddressa2" placeholder="Street Address" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>City:*</label>
                                <input type="text" name="citytowna2" placeholder="City/Town" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Postal code:*</label>
                                <input type="text" name="postalcode" placeholder="City/Town" required>
                            </div>
                            <h5 class="col-md-12 col-sm-12 col-xs-12 rndnotice"><i class="fa fa-exclamation-circle"></i>
                                Round Trip Section</h5>
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Pick up Location #2</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Pick-up Date:*</label>
                                <input name="pickupdate2" type="text" value="" placeholder="Pick Up Date"
                                    class="form-control" id="checkin6" required="required"
                                    data-error="Please specify date">
                            </div>

                            <div class="formfield formfieldselectmul col-md-4 col-sm-6 col-xs-12">
                                <label>Pickup Time: *</label>
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
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Street Address: *</label>
                                <input type="text" name="streetaddressa" placeholder="Street Address" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>City:*</label>
                                <input type="text" name="citytowna" placeholder="City/Town" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Postal code:*</label>
                                <input type="text" name="postalcode" placeholder="" required>
                            </div>
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Drop-off location #2 - Airport</h4>

                            <div class="formfield formfieldselectmul col-md-4 col-sm-6 col-xs-12">
                                <label>Flight Time:</label>
                                <select name="flighttimehh" required>
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
                                <select name="flighttimemm" required>
                                    <option selected disabled>MM</option>
                                    <option>00</option>
                                    <option>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                    <option>40</option>
                                    <option>50</option>
                                </select>
                                <select name="flighttimeam">
                                    <option selected>AM</option>
                                    <option>PM</option>
                                </select>
                            </div>

                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Airport*</label>
                                <select name="airport" required>
                                    <option>Westchester</option>
                                    <option>La Guardia</option>
                                    <option>JFK</option>
                                    <option>Bradley</option>
                                    <option>Newark</option>
                                    <option>Stewart</option>
                                </select>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Airline*</label>
                                <select name="airline" class="airportifsel" required>
                                    <option disabled selected>-- Airline --</option>
                                    <option>American</option>
                                    <option>Air Canada</option>
                                    <option>Air France</option>
                                    <option>Air India</option>
                                    <option>British Airways</option>
                                    <option>Delta</option>
                                    <option>Emirates</option>
                                    <option>Jet Blue</option>
                                    <option>Southwest</option>
                                    <option>Swiss Air</option>
                                    <option>United</option>
                                    <option value="airlineother">Other</option>
                                </select>
                            </div>
                            <div class="formfield airlineother airlineifot col-md-4 col-sm-6 col-xs-12">
                                <label>Airline Name(If Other)</label>
                                <input type="text" name="airlineother" placeholder="Airline Name">
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Flight No:*</label>
                                <input type="text" name="flightno" placeholder="Flight Number" required>
                            </div>

                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Departing To</label>
                                <input type="text" name="arrvfrodeparto" placeholder="Departing To">
                            </div>
                            <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                <h4 class="col-md-12 col-sm-12 col-xs-12">Method of Payment:</h4>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCheck" value="Check">
                                    <label class="form-check-label" for="payCheck">Check</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCard"
                                        value="Credit / Debit card">
                                    <label class="form-check-label" for="payCard">Credit / Debit card</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCash" value="Cash">
                                    <label class="form-check-label" for="payCash">Cash</label>
                                </div>

                            </div>
                            <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                <label>Remarks</label>
                                <textarea name="remarks"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 formfield formfield_submit">
                                <i class="fa fa-long-arrow-alt-right"></i>
                                <input type="submit" value="Send Message">
                            </div>
                        </div>
                    </form>

                    <!-- Taxi Services -->
                    <form class="cssform  reservtype other" action="php/reserv-form-others.php" method="post"
                        enctype="multipart/form-data" name="frm" id="frm" onSubmit="return validate(this)">
                        <div class="row g-2 ">
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Passenger Information</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>First Name:*</label>
                                <input type="text" name="fname" placeholder="First Name" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Last Name:*</label>
                                <input type="text" name="lname" placeholder="Last Name" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Phone:*</label>
                                <input type="tel" name="phone" placeholder="Phone" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Email:*</label>
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Passengers:*</label>
                                <input type="number" name="nopassengers" placeholder="No." min="1"
                                    max="100" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Luggage:*</label>
                                <input type="number" name="luggage" placeholder="No." min="1" max="100"
                                    required>
                            </div>

                            <h4 class="col-md-12 col-sm-12 col-xs-12">Pick up Location</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Pick-up Date:*</label>
                                <input name="pickupdate" type="text" value="" placeholder="Pick Up Date"
                                    class="form-control" id="checkin7" required="required"
                                    data-error="Please specify date">
                            </div>

                            <div class="formfield formfieldselectmul col-md-4 col-sm-6 col-xs-12">
                                <label>Pickup Time: *</label>
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
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Street Address: *</label>
                                <input type="text" name="streetaddressa" placeholder="Street Address" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>City:*</label>
                                <input type="text" name="citytowna" placeholder="City/Town" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Postal code:*</label>
                                <input type="text" name="postalcode" placeholder="" required>
                            </div>
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Drop-off location</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Street Address: *</label>
                                <input type="text" name="streetaddressa2" placeholder="Street Address" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>City:*</label>
                                <input type="text" name="citytowna2" placeholder="City/Town" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Postal code:*</label>
                                <input type="text" name="postalcode" placeholder="" required>
                            </div>
                            <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                <h4 class="col-md-12 col-sm-12 col-xs-12">Method of Payment:</h4>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCheck" value="Check">
                                    <label class="form-check-label" for="payCheck">Check</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCard"
                                        value="Credit / Debit card">
                                    <label class="form-check-label" for="payCard">Credit / Debit card</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCash" value="Cash">
                                    <label class="form-check-label" for="payCash">Cash</label>
                                </div>
                            </div>
                            <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                <label>Remarks</label>
                                <textarea name="remarks"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 formfield formfield_submit">
                                <i class="fa fa-long-arrow-alt-right"></i>
                                <input type="submit" value="Send Message">
                            </div>
                        </div>
                    </form>

                    <!-- Executive Travel -->
                    <form class="cssform  reservtype executive-travel" action="php/reserv-form-others.php" method="post"
                        enctype="multipart/form-data" name="frm" id="frm" onSubmit="return validate(this)">
                        <div class="row g-2 ">
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Passenger Information</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>First Name:*</label>
                                <input type="text" name="fname" placeholder="First Name" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Last Name:*</label>
                                <input type="text" name="lname" placeholder="Last Name" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Phone:*</label>
                                <input type="tel" name="phone" placeholder="Phone" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Email:*</label>
                                <input type="email" name="email" placeholder="Email Address" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Passengers:*</label>
                                <input type="number" name="nopassengers" placeholder="No." min="1"
                                    max="100" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Luggage:*</label>
                                <input type="number" name="luggage" placeholder="No." min="1" max="100"
                                    required>
                            </div>

                            <h4 class="col-md-12 col-sm-12 col-xs-12">Pick up Location</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Pick-up Date:*</label>
                                <input name="pickupdate" type="text" value="" placeholder="Pick Up Date"
                                    class="form-control" id="checkin7" required="required"
                                    data-error="Please specify date">
                            </div>

                            <div class="formfield formfieldselectmul col-md-4 col-sm-6 col-xs-12">
                                <label>Pickup Time: *</label>
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
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Street Address: *</label>
                                <input type="text" name="streetaddressa" placeholder="Street Address" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>City:*</label>
                                <input type="text" name="citytowna" placeholder="City/Town" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Postal code:*</label>
                                <input type="text" name="postalcode" placeholder="" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Car Type:*</label>
                                <select name="servtyp">
                                    <option selected disabled>--Not Selected--</option>
                                    <option>Mercedes-Benz E-Class</option>
                                    <option>BMW X5</option>
                                    <option>Audi A6</option>
                                    <option>Car 1</option>
                                    <option>Car 2</option>
                                    <option>Car 3</option>
                                </select>
                            </div>
                            <h4 class="col-md-12 col-sm-12 col-xs-12">Drop-off location</h4>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Street Address: *</label>
                                <input type="text" name="streetaddressa2" placeholder="Street Address" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>City:*</label>
                                <input type="text" name="citytowna2" placeholder="City/Town" required>
                            </div>
                            <div class="formfield col-md-4 col-sm-6 col-xs-12">
                                <label>Postal code:*</label>
                                <input type="text" name="postalcode" placeholder="" required>
                            </div>
                            <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                <h4 class="col-md-12 col-sm-12 col-xs-12">Method of Payment:</h4>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCheck" value="Check">
                                    <label class="form-check-label" for="payCheck">Check</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCard"
                                        value="Credit / Debit card">
                                    <label class="form-check-label" for="payCard">Credit / Debit card</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="pay" id="payCash" value="Cash">
                                    <label class="form-check-label" for="payCash">Cash</label>
                                </div>
                            </div>
                            <div class="formfield col-md-12 col-sm-12 col-xs-12">
                                <label>Remarks</label>
                                <textarea name="remarks"></textarea>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 formfield formfield_submit">
                                <i class="fa fa-long-arrow-alt-right"></i>
                                <input type="submit" value="Send Message">
                            </div>

                            
                        </div>
                    </form>
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