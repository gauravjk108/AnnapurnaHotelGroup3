<?php
error_reporting(0);
?>
<?php
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];	
		$folder = "image/".$filename;
		
	$db = mysqli_connect("localhost", "root", "", "registration");

		// Get all the submitted data from the form
		$sql = "INSERT INTO image (filename) VALUES ('$filename')";

		// Execute query
		mysqli_query($db, $sql);
		
		// move the uploaded image into the folder: image
		if (move_uploaded_file($tempname, $folder)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
	}
}
$result = mysqli_query($db, "SELECT * FROM image");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rooms | Annapurna Hotel</title>
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
	<body>
	<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Hotel Annapurna</a></h1>
      <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    
                    <li><a class = "active" href="all-room.php">All rooms</a></li>
                    <li class="dropdown"><a class="" href="#"><span>Form Information</span><i class="bi bi-chevron-down"></i></a>
                        <ul>
                          <li><a href="booking-info.php">Bookings</a></li>
                          <li><a href="upload.php">Upload Images</a></li>
                          <li><a class="" href="contact-details.php">Contact Details</a></li>
                          <li><a href="enquiry-details.php">Enquiry Details</a></li>
                          <li><a href="feedback-manager.php">Feedbacks</a></li>
                          
                        </ul>
                        <li><a href="login.php">Logout</a></li>
                      </li>
    </div>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>

<div id="content">

<form method="POST" action="" enctype="multipart/form-data">
	<input type="file" name="uploadfile" value=""/>
		
	<div>
		<button type="submit" name="upload">UPLOAD</button>
		</div>
<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>Annapurna Hotel Pvt. Ltd.</h3>
        <p>
          Durbarmarg <br/>
          Kathmandu<br/>
          Nepal <br/><br/>
          <strong>Phone:</strong> +977 9800000000<br/>
          <strong>Email:</strong> contact-hotelannapurna@gmail.com<br/>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.2004549850008!2d85.31435691501542!3d27.711096482790403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb190162d2fb35%3A0x98eccd6cf32b17f9!2sHotel%20Annapurna!5e0!3m2!1sen!2snp!4v1617902697276!5m2!1sen!2snp" width="200" height="150" style=border:0 allowfullscreen="" loading="lazy" title="map"></iframe>
      </div>
      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p>If you want to stay up to date with exciting updates about our hotel. Please subscribe to the newsletter using your email address.</p>
        <form action="" method="post">
          <input type="email" name="email"/><input type="submit" value="Subscribe"/>
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
</form>
</div>

</body>
</html>
