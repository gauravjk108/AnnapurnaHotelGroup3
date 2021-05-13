<!DOCTYPE html>
<html lang="en">
<?php 
    require_once('connection.php');
    if(isset($_GET['del'])){
        $del = $_GET['del'];
        $q = "DELETE FROM enquiryinfo WHERE enquiryinfo.id = $del";
        $run = mysqli_query($conn, $q);
    }
?>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Room Details | Annapurna Hotel</title>
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
                    <li><a href="#">Rooms</a></li>
                    <li class="dropdown"><a class="active" href="#"><span>Form Information</span><i class="bi bi-chevron-down"></i></a>
                        <ul>
                          <li><a href="booking-info.php">Bookings</a></li>
                          <li><a href="contact-details.php">Contact Details</a></li>
                          <li><a class="active" href="enquiry-details.php">Enquiry Details</a></li>
                          <li><a href="feedback-manager.php">Feedbacks</a></li>
                        </ul>
                      </li>

        </div>
    </header><!-- End Header -->   
    <main>
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
              <h2>Enquiry Details</h2>
              <p>Following people want to host an event with you.</p>
              </div>
          </div>
          <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                
                                <div class="card">
                                    <div class="container" data-aos="fade-up">
                                        <table class="table">
                                            <thead style="color: #daa520;">
                                                <th><center>Planned Date</center></th>
                                                <th><center>Event Name</center></th>
                                                <th><center>Email</center></th>
                                                <th><center>Phone no.</center></th>
                                                <th><center>Event Duration</center></th>
                                                <th><center>Expected guests</center></th>
                                                <th><center>Preffered Locatoin</center></th>
                                                <th><center>Event description</center></th>
                                                <th><center>Delete</center></th>
                                            </thead>
                                            <tbody>
                                                 <?php
                                                    $q = "SELECT * FROM enquiryinfo ORDER BY enquiryinfo.id ASC";
                                                    $run = mysqli_query($conn, $q);
                                                    if(mysqli_num_rows($run) > 0){
                                                        while($row = mysqli_fetch_array($run)){
                                                    
                                                ?> 
                                                <tr>
                                                    <td><center><?php echo $row['checkin']; ?></center></td>
                                                    <td><center><?php echo $row['event']; ?> </center></td>
                                                    <td><center><?php echo $row['email']; ?> </center></td>
                                                    <td><center><?php echo $row['phonenumber']; ?> </center></td>
                                                    <td><center><?php echo $row['duration']; ?></center></td>
                                                    <td><center><?php echo $row['capacity']; ?> </center></td>
                                                    <td><center><?php echo $row['site']; ?> </center></td>
                                                    <td><center><?php echo $row['description']; ?> </center></td>
                                                    <td><center><a href="enquiry-details.php?del=<?php echo $row['id']; ?>"><i class="ri-delete-bin-line"></i></a></center></td>
                                                    </tr>
                                                <?php 
                                                         }
                                                    }
                                                ?> 
                                                
                                            </tbody>
                                        </table>
            
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xs-12">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
    </main>
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