
 <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="services.php">Our Services</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Events and Gallery</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="enquiry.php">Enquire a event</a></li>
              <li><a href="display.php">Gallery</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>More</span><i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="review.php">Reviews</a></li>
              <li><a href="feedback.php">Offer Feedback</a></li>
            </ul>
          </li>
          <li><a href="login.php"><span>Admin</span></a>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <?php
$servername="localhost";
$username= "root";
$password= "";
$database= "registration";
$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "select * from image";
$reult= mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($reult)){

    echo $row['id'];
   $Filename= $row['Filename'];
   echo "<img style='300px;width:300px;' src='image/$Filename'>";
}





?>

<link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
        <a class="carousel-control-prev" type="button" data-bs-target="#gallery" data-bs-slide="prev"> <img src="/assets/img/icon-chevron-left-512.png" style="height: 50px;width: 50px;" alt="Left"/></a> 
    <a class="carousel-control-next" type="button" data-bs-target="#gallery" data-bs-slide="next"> <img src="/assets/img/icon-chevron-right-512.png" style="height: 50px; width: 50px; "alt="Right"/></a> 
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
