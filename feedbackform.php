<title>Thank you | Annapurna Hotel</title>
<link href="assets/img/favicon.png" rel="icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/js/main.js"></script>
<?php

$output=<<<XYZ
<body>
    <main id="main" class="container">
        <div class="breadcrumbs row" data-aos="fade-in">
            <div class="col-lg-3"></div>
            <div class="container col-lg-6">
                <h2><i class="ri-check-line"></i>Thank you for your feedback.</h2>
                <p><a href="index.php" style="color:white;">Return Home</a></p>
                    <div class="copyright text-center">
                        &copy; Copyright <strong><span>Annapurna Hotel Pvt. Ltd.</span></strong>. All Rights Reserved
                    </div>
                </div>
            <div class="col-lg-3"></div>
        </div>
    </main>
</body>
XYZ;
//Initialising variables and using POST method to post data into the PHP database.
$subject = $_POST['subject'];
$issue = $_POST['issue'];
$feedback = $_POST['feedback'];



//Connecting to the database

$conn = new mysqli('localhost','root','','registration');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT Into feedbackinfo(subject,issue,feedback) VALUES (?,?,?) ");
    $stmt->bind_param("sss", $subject,$issue,$feedback);
    $stmt->execute();
    echo $output;
    $stmt->close();
    $conn->close();
}

?>