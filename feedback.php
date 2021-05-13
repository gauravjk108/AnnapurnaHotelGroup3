<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Leave a feedback | Annapurna Hotel</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">Hotel Annapurna</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Our Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li class="dropdown"><a href="#"><span>Events and Gallery</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="enquiry.php">Enquire a event</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="dropdown "><a class="active" href="#"><span>More</span><i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="review.php">Reviews</a></li>
                            <li><a class="active" href="feedback.php">Offer Feedback</a></li>
                        </ul>
                    </li>
                    <li><a href="login.php"><span>Admin</span></a>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="room.php" class="get-started-btn">Book a room</a>

        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>We value the experience of our customer.</h2>
                <p>Please tell us the ways we can improve our services. We hope to deliver our promise of excellence.
                </p>
            </div>
        </div><!-- End Breadcrumbs -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <form action="feedbackform.php" method="post" role="form" class="php-email-form">
                    <div class="row mt-5">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="name" placeholder="Subject">
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="issue" rows="5"
                                placeholder="Please ellaborate the issue" required></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="feedback" rows="5"
                                placeholder="Please let us know how to improve on the issue?" required></textarea>
                        </div>

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Thank you for your feedback!</div>
                        </div>
                        <div class="text-center mt-3"><button type="submit">Offer Feedback</button></div>
                </form>

            </div>
        </section>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Annapurna Hotel Pvt. Ltd.</h3>
                        <p>
                            Durbarmarg <br />
                            Kathmandu<br />
                            Nepal <br /><br />
                            <strong>Phone:</strong> +977 9800000000<br />
                            <strong>Email:</strong> contact-hotelannapurna@gmail.com<br />
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Offer Feedback</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Location</h4>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2004549850008!2d85.31435691501542!3d27.711096482790403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190162d2fb35%3A0x98eccd6cf32b17f9!2sHotel%20Annapurna!5e0!3m2!1sen!2snp!4v1617902697276!5m2!1sen!2snp"
                            width="200" height="150" style=border:0 allowfullscreen="" loading="lazy"
                            title="map"></iframe>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>If you want to stay up to date with exciting updates about our hotel. Please subscribe to the
                            newsletter using your email address.</p>
                        <form action="forms/newsletter.php" method="post">
                            <input type="email" name="email" />
                            <input type="submit" value="Subscribe" />
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Annapurna Hotel Pvt. Ltd.</span></strong>. All Rights Reserved
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>