<?php
include "conn.php";
$id=$_GET['id'];

$sql="UPDATE `order_car` SET res=1 WHERE id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    ?>
<script>
    alert("Confirm Car");
    window.location.href="../booked_car.php";
    </script>

<?php

}



?>