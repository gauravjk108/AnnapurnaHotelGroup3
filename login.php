<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$guestnum = $_POST['guestnum'];

$conn = new mysqli('localhost','root','','registration');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT Into bookingdata(firstname,lastname,phonenumber,email,checkin,checkout,guestnum) VALUES (?,?,?,?,?,?,?) ");
    $stmt->bind_param("ssssssi", $firstname, $lastname, $phonenumber, $email, $checkin, $checkout, $guestnum);
    $stmt->execute();
    echo "Reservation Successful";
    $stmt->close();
    $conn->close();
}

?>