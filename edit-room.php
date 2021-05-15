<?php
	include('connection.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `room_details` where id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Room | Annapurna Hotel</title>
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

            <h1 class="logo me-auto"><a href="index.php">Hotel Admin</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="all-room.php">All rooms</a></li>
                    <li class="dropdown"><a class="active" href="#"><span>Form Information</span><i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="booking-info.php">Bookings</a></li>
                            <li><a href="contact-details.php">Contact Details</a></li>
                            <li><a href="enquiry-details.php">Enquiry Details</a></li>
                            <li><a class="active" href="feedback-manager.php">Feedbacks</a></li>
                        </ul>
			    <li><a href="logout.php">Logout</a></li>
                    </li>

        </div>
    </header><!-- End Header -->
    <main>
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Edit Room Item</h2>
                <p>Make necessary changes.</p>
            </div>
        </div>
        <section class="contact">
            <div class="container" data-aos="fade-up">
                <form method="POST" action="update.php?id=<?php echo $id; ?>" role="form" class="php-email-form">
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-md-9 form-group mt-3">
                                    <p>Feature 1:</p>
                                    <input type="text" class="form-control" value="<?php echo $row['feature1']; ?>"
                                        name="feature1">
                                </div>
                                <div class="col-md-9 form-group mt-3">
                                    <p>Feature 2:</p>
                                    <input type="text" class="form-control" value="<?php echo $row['feature2']; ?>"
                                        name="feature2">
                                </div>
                                <div class="col-md-9 form-group mt-3">
                                    <p>Feature 3:</p>
                                    <input type="text" class="form-control" value="<?php echo $row['feature3']; ?>"
                                        name="feature3">
                                </div>
                                <div class="col-md-9 form-group mt-3">
                                    <p>Feature 4:</p>
                                    <input type="text" class="form-control" value="<?php echo $row['feature4']; ?>"
                                        name="feature4">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 mt-5 mt-lg-0">
                            <div class="row">
                                <div class="col-md-6 form-group mt-3">
                                    <p>Room Title:</p>
                                    <input type="text" class="form-control" value="<?php echo $row['title']; ?>"
                                        name="title">
                                </div>
                                <div class="col-md-6 form-group mt-3">
                                    <p>Price:</p>
                                    <input type="text" class="form-control" value="<?php echo $row['price']; ?>"
                                        name="price">
                                </div>
                                <div class="form-group mt-3">
                                    <p>Description:</p>
                                    <textarea class="form-control" rows="8" name="description"><?php echo $row['description']; ?>
                        </textarea>
                                </div>
                                <div class="text-center mt-3"><button type="submit" name="submit">Make Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <footer>
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

        <!-- Vendor JS Files -->
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

    </main>
</body>

</html>
