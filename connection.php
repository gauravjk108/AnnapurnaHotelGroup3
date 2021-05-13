<?php 
$conn = mysqli_connect('localhost', 'root', '','registration');

if(mysqli_connect_errno()){
    echo 'connection failed!'. mysqli_connect_errno();
}