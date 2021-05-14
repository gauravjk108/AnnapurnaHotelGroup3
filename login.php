<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Gateway | Annapurna Hotel</title>
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
  <main id="main">
  <table class="align-middle" width="100%" height="600px">
      <tbody>
      <tr>
          <td class="col-lg-3" height="25%"></td>
          <td class="col-lg-6"></td>
          <td class="col-lg-3"></td>
      </tr>
      <tr>
          <td class="col-lg-3" height="50%"></td>
          <td class="col-lg-6">
            <div class="breadcrumbs" data-aos="fade-in" style="height: 100px;">
              <div class="container">
                <h2>Admin Login</h2>
                <div class="text-center text-md-start" >
                   <a href="index.php" style="color: white;"> <i class="bx bx-chevron-left"></i>Back to home</a>
                </div>
              </div>
            </div><!-- End Breadcrumbs -->
            
           
</main>
 <section id="login" class="contact">
 <?php
ob_start();
session_start();
require_once('connection.php');

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn,strtolower($_POST['username']));
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    
    if($username == "admin" && $password == "admin"){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        header('Location: all-room.php');
    }
    else{
        $error = "Wrong Username or Password";
    }
}

?>
             <div class="container">
      <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
              <form  action="" method="post" class = "php-email-form">
                
                <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
               
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <div class="checkbox">
                  <label>
                    <?php
                      if(isset($error)){
                          echo "$error";
                      }
                      ?>
                  </label>
                </div>
                <input type="submit" name="submit" value="Sign In" class="login-btn form-control">
              </form>
          </div>
          <div class="col-md-4"></div>
      </div>
    </div> <!-- /container -->
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
  </footer>
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