<?php
//Initialising variables and using POST method to post data into the PHP database.

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


//Connecting to the database

$conn = new mysqli('localhost','root','','registration');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT Into contactinfo(name,email,subject,message) VALUES (?,?,?,?) ");
    $stmt->bind_param("ssss", $name,$email,$subject,$message);
    $stmt->execute();
    echo "Contact saved";
    $stmt->close();
    $conn->close();
}

?>