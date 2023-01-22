<?php
$server="localhost";
$username="id20187026_localhost";
$password="Vivek@123456";
$db="id20187026_vehiclerent";
$conn=mysqli_connect($server,$username,$password,$db);
if(!$conn){
    die("error" . mysqli_connect_error());
}


?>