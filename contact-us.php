<!DOCTYPE html>
<html lang="en">

<head>
  <title>City Taxi | Contact Us</title>
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
  <?php $page_name = 'Contact Us' ?>
  <?php include('inc/page-banner.php') ?>
  <!-- banner and header page -->

  <!-- contact us form section -->
  <div class="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 d-lg-block">
          <div class="contact-details-box">
            <strong>AIRDRIE CITY TAXI</strong>
            <p>"At Airdrie City Taxi we provide a safe and friendly
              environment to the passenger"
            </p>
            <ul class="contact-short-details">
              <li><a aria-label="call us now" href="tel:403-351-2200"><i class="fa-solid fa-phone"></i> 403-351-2200</a></li>
              <li><a aria-label="send us mail" href="mail:info@www.airdriecitytaxi.ca"><i class="fa-regular fa-envelope"></i> info@www.airdriecitytaxi.ca</a></li>
              <li><a aria-label="our location" href="#"><i class="fa-solid fa-location-dot"></i> 2099 Windbury Cres SW Airdrie, AB</a></li>
            </ul>

            <img src="images/car4.jpg" alt="moving men">
          </div>
        </div>
        <div class="col-lg-8 p-0 ">
          <div class="bg-ternary contact-box-shadow h-100 d-flex flex-column justify-content-center wow zoomIn "
            data-wow-delay="0.6s">
            <div class="contact-box-wrap">
              <h1 class="text-black mb-4">Contact Us</h1>
              <p style="color: #000 !important;">Fill
                in the form below to send us a message or to ask about any queries you might have.
              </p>
              <form id="contactForm " action="php/contact-form.php" method="post">
                <div class="row g-3">
                  <div class="col-12 col-lg-6">
                    <input type="text" id="name" name="name" class="form-control border-2" required
                      placeholder="Your First Name" style="height: 55px;">
                    <small id="nameError" class="form-text text-danger"></small>
                  </div>

                  <div class="col-12 col-lg-6">
                    <input type="text" id="name" name="name" class="form-control border-2" required
                      placeholder="Your Last Name" style="height: 55px;">
                    <small id="nameError" class="form-text text-danger"></small>
                  </div>
                  <div class="col-12 col-lg-6">
                    <input type="tel" id="phone" name="phone" pattern="^\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$"
                      class="form-control border-2" required placeholder="Your Number" style="height: 55px;">
                  </div>
                  <div class="col-lg-6">
                    <input type="email" id="email" name="email" class="form-control border-2" required
                      placeholder="Your Email" style="height: 55px;">
                  </div>

                  <div class="col-12 col-lg-12">
                    <input type="text" id="subject" name="subject" class="form-control border-2" required
                      placeholder="Subject" style="height: 55px;">
                  </div>
                  <div class="col-12 contact-msg">
                    Message Us
                    <textarea id="message" class="form-control border-2" name="message" required
                      placeholder="Your Message" rows="5"></textarea>
                  </div>
                  <div class="g-recaptcha" data-sitekey="6LeoDP8nAAAAANsoS36iwUXtJCAhXSAkLU1XjciX">
                  </div>
                  <div class="welcome-part-button col-12 text-left">
                    <button class="about-btn mt-0" type="submit">Submit <i
                        class="fa-regular fa-paper-plane"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- good men location map -->
  <div class="container">
    <div class="map pb-4">
      <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2497.3478418880118!2d-114.03743832339534!3d51.24950457175593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53715e361db3a6c9%3A0x7bd2a94ea669ec27!2sWindbury%20Crescent%2C%20Airdrie%2C%20AB%2C%20Canada!5e0!3m2!1sen!2snp!4v1700468897242!5m2!1sen!2snp"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
      </iframe>
    </div>
  </div>

  <?php
  include('inc/footer.php');
  ?>
</body>

</html>