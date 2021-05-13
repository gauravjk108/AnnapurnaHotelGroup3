<?php


$checkin = $_POST['checkin'];
$duration = $_POST['duration'];
$capacity = $_POST['capacity'];
$event = $_POST['event'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$description = $_POST['description'];
$site = $_POST['site'];

$conn = new mysqli('localhost','root','','registration');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT Into enquiryinfo(checkin,duration,capacity,event,email,phonenumber,description,site) VALUES (?,?,?,?,?,?,?,?) ");
    $stmt->bind_param("siisssss", $checkin,$duration,$capacity,$event,$email,$phonenumber,$description,$site);
    $stmt->execute();
    echo "Enquiry Recorded";
    $stmt->close();
    $conn->close();
}
