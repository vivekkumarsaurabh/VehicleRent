<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    

    header("location:../index.php");
    exit;
}else{
    $name=$_SESSION['name'];
}

?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="shortcut icon" href="images/car.png" type="image/x-icon">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>VehicleRent-Homepage</title>
<style>
    *{font-family: 'Oxygen', sans-serif;}
</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><span class="text-primary">Vehicle</span> <span class="text-success">Rent</span> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="addcars.php">Addcars</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="cars_request_booking.php">Car Request Booking <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booked_car.php">Car Confirm Booking </a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <h5 class="text-white my-2">
                  Hello,  <?php
                    echo $name;
                    ?>
                </h5>
                
  <button type="button" class="btn btn-outline-danger my-2 my-sm-0 mx-2"><a href="operations/logout.php" style="text-decoration:none; color:#fff">  Logout</a>
                  
                </button>
               
            </form>
        </div>
    </nav>



    <div class="container">
        <div class="container">
        <h5 class="float-left"> Booked Car</h5>
</div>
       
    <table class="table table-striped my-2">
  <thead>
    <tr>
    <th scope="col">Customer Name</th>
    <th scope="col">Customer Email</th>
    <th scope="col">Days</th>
    <th scope="col">Date</th>
      <th scope="col">Vehicle Model</th>
      <th scope="col">Vehicle Number</th>
     
      <th scope="col">price</th>
      <th scope="col">status</th>

      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php
  include "conn.php";
  $sql="SELECT * FROM `order_car` WHERE res=0";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result)){

    ?>
    <tr>
    <th><?php echo $row['c_name']; ?></th>
    <td><?php echo $row['c_email']; ?></td>
    <td><?php echo $row['days']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['car_model']; ?></td>
    <td><?php echo $row['car_number']; ?></td>
    <td><?php echo $row['price']; ?></td>

    <td><?php $status=$row['res'];
    if($status==0){
      ?>
      <p class="text-danger">
        Pending
    </p>

      <?php
    }
    
    
    ?></td>
    <?php $idcar= $row['id']; ?>
    <td>

    <button type="submit"  class='btn btn-outline-success my-2'><a class=""  style="text-decoration:none; color:#000" href="operations/confirm.php?id=<?php echo $row['id'];?>">Confirm</a></button> 

    </td>
  </tr>
  <?php
  }

?>
 
    
   
  </tbody>
</table>
    </div>




    




     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script><samp></samp>

</body>
</html>