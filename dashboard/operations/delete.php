<?php
include "conn.php";

$ids=$_GET['id'];

$sql="DELETE FROM `vehicles` WHERE id='$ids'";

$result = mysqli_query($conn,$sql);
if($result){
    ?>
    <script type="text/javascript">
     alert("Are You Sure Delete this Detail");
     window.location.href="../../addcars.php";
    </script>
    <?php

}



?>