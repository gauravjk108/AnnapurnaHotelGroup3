<?php


$name = $_POST['name'];
$review = $_POST['review'];
$rating = $_POST['rating'];
$conn = new mysqli('localhost','root','','registration');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT Into userreview(name,review,rating) VALUES (?,?,?) ");
    $stmt->bind_param("ssi", $name, $review,$rating);
    $stmt->execute();
    echo "Review Recorded";
    $stmt->close();
    $conn->close();
}
