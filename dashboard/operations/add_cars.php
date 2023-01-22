<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include "conn.php";
    $model=$_POST['model'];
    $vnumber=$_POST['vnumber'];
    $seat=$_POST['seat'];
    $rent=$_POST['rent'];

    $sql="INSERT INTO `vehicles` (`model`, `vnumber`, `seat`, `rent`) VALUES ('$model', '$vnumber', '$seat', '$rent') ";

    $result=mysqli_query($conn,$sql);
    if($result){
        ?>
        <script type="text/javascript">
            alert("Cars Detail Added");
            window.location.href="../addcars.php";
      </script>
        <?php
        
    }else{
        echo"Not Inserted";
    }
     
}



?>