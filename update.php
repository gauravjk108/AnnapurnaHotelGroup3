<?php
	include('connection.php');
	$id=$_GET['id'];
 
	$title=$_POST['title'];
	$price=$_POST['price'];
    
	$description=$_POST['description'];
	$feature1=$_POST['feature1'];
    
	$feature2=$_POST['feature2'];
	$feature3=$_POST['feature3'];
    $feature4=$_POST['feature4'];
 
	mysqli_query($conn,"update `room_details` set title='$title', price='$price',description='$description', feature1='$feature1',feature2='$feature2',feature3='$feature3',feature4='$feature4' where id='$id'");
	header('location:all-room.php');
?>