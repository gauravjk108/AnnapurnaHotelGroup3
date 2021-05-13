<?php
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
    echo "Feedback saved";
    $stmt->close();
    $conn->close();
}

?>