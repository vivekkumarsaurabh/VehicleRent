<?php
include "conn.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
$name=$_POST['name'];
$email=$_POST['email'];
$days=$_POST['days'];
$date=$_POST['date'];
$price=$_POST['price'];
$totalrent=$days*$price;
$car_model=$_POST['car_model'];
$v_number=$_POST['car_number'];


$sql="INSERT INTO `order_car` (`c_name`, `c_email`, `days`, `date`, `car_model`, `car_number` , `price`, `res`) VALUES ('$name', '$email', '$days', '$date', '$car_model', '$v_number', '$totalrent', '0') ";

$result=mysqli_query($conn,$sql);
if($result){
    ?>
    <script type="text/javascript">
    alert("Order Booked");
    
    window.location.href="index.php";

        </script>
       

    <?php
    
    
     
}



}




?>