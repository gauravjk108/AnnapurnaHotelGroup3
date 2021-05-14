<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Reviews | Annapurna Hotel</title>
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
                    <li class="dropdown"><a class="active" href="#"><span>More</span><i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="active" href="review.php">Reviews</a></li>
                            <li><a href="feedback.php">Offer Feedback</a></li>
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
                <h2>How was you experience at our hotel?</h2>
                <p>Please write a short review for other customers.</p>
            </div>
        </div><!-- End Breadcrumbs -->
        <section id="review" class="contact">

            <div class="container" data-aos="fade-up">

                <form action="reviewform.php" method="post" role="form" class="php-email-form">
                    <div class="row mt-5">
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="review" rows="5"
                                placeholder="Write your review here....." required></textarea>
                        </div>
                        <div class="rating">
                            <input type="radio" name="rating" value="5" id="5">
                            <label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4">
                            <label for="4">☆</label> <input type="radio" name="rating" value="3" id="3">
                            <label for="3">☆</label>
                            <input type="radio" name="rating" value="2" id="2">
                            <label for="2">☆</label>
                            <input type="radio" name="rating" value="1" id="1">
                            <label for="1">☆</label>
                        </div>

                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Review left!</div>
                        </div>
                        <div class="text-center mt-3"><button type="submit">Leave review</button></div>
                </form>

            </div>
        </section>
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-up">
            <div class="container">
                <h2>Customer Reviews</h2>
                <p>Here is what our previous customer have to say about it.</p>
            </div>
        </div><!-- End Breadcrumbs -->
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-3">

                </div>
            </div>
        </div>
        <section id="userreviews" class="contact">
            <div id="ratings" class="row" class="carousel slide" data-bs-ride="carousel">
                <!-- Carousel indicators -->

                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="row mt-5">
                    
                    <?php
    require_once('connection.php');
    $q = "SELECT * FROM userreview ORDER BY userreview.id DESC";
    $run = mysqli_query($conn, $q);
    $count = 0;
    if(mysqli_num_rows($run) > 0){
        while($row = mysqli_fetch_array($run)){
  ?>
    <div class="col-lg-1">
    </div>
        <div class="col-lg-5">
        <h2><?php echo $row['name']; ?></h2>
        <i class="star-ratings-css" title="<?php echo $row['rating']; ?>"></i>
                <p><?php echo $row['review']; ?></p>
                </div>
                       


                        <?php
        }
    }
  ?>
                       
                        
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
                        <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="services.php">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="feedback.php">Offer Feedback</a></li>
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
                        <form action="" method="post">
                            <input type="email" name="email" /><input type="submit" value="Subscribe" />
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
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>