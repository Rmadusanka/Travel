<?php 
    $conn=mysqli_connect("localhost","root","","travel");
    if(!$conn){
        echo "connection failed".mysqli_connect_error();
    }
?>