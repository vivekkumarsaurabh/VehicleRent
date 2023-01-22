<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "conn.php";
    $ids=$_POST['id'];
    $model=$_POST['model'];
    $vnumber=$_POST['vnumber'];
    $seat=$_POST['seat'];
    $rent=$_POST['rent'];

    $sql="UPDATE `vehicles` SET `model` ='$model', `vnumber` ='$vnumber', `seat` ='$seat', `rent` ='$rent' WHERE id='$ids'";

    $result=mysqli_query($conn,$sql);
    if($result){
        ?>

<script type="text/javascript">
    alert("Update Successfully");
    window.location.href="../addcars.php";
    </script>
<?php

    }
}


?>
