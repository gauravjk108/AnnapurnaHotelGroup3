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
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>Room Title:</label><input type="text" value="<?php echo $row['title']; ?>" name="title">
		<label>Price:</label><input type="text" value="<?php echo $row['price']; ?>" name="price">
        <label>Description:</label><input type="text" value="<?php echo $row['description']; ?>" name="description">
        <label>Feature1:</label><input type="text" value="<?php echo $row['feature1']; ?>" name="feature1">
        <label>Feature2:</label><input type="text" value="<?php echo $row['feature2']; ?>" name="feature2">
        <label>Feature3:</label><input type="text" value="<?php echo $row['feature3']; ?>" name="feature3">
        <label>Feature4:</label><input type="text" value="<?php echo $row['feature4']; ?>" name="feature4">
		<input type="submit" name="submit">
		
	</form>
</body>
</html>