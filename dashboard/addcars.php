<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    

    ?>
    <script type="text/javascript">
        window.location.href="../index.php";
        
    </script>
    
    <?php
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
    <title>Vehicle Rent-Homepage</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="addcars.php">Addcars <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cars_request_booking.php">Car Request Booking <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booked_car.php">Car Confirm Booking <span class="sr-only">(current)</span></a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <h5 class="text-white my-2">
                  Hello,  <?php
                    echo $name;
                    ?>
                </h5>
                
  <button type="button" class="btn btn-outline-danger my-2 my-sm-0 mx-2"><a href="operations/logout.php" style="text-decoration:none; color:#fff">Logout</a>
                  
                </button>
               
            </form>
        </div>
    </nav>

    <!--model-->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Add Cars- Fill the Vehicle Details </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    

                    <div class="container">
                        <form method="POST" action="operations/add_cars.php">
                            <div class="form-group">
                                <label for="model">Vehicle Model</label>
                                <input type="text" class="form-control" name="model" id="model" placeholder="Enter Vehicle Model">
                             
                            </div>

                            <div class="form-group">
                                <label for="vnumber">Vehicle Number</label>
                                <input type="text" class="form-control" name="vnumber" id="vnumber" placeholder="Enter Vehicle Number">
                             
                            </div>
                            <div class="form-group">
                                <label for="seat">Seating Capacity</label>
                                <input type="text" class="form-control" name="seat" id="seat" placeholder="Enter Seating Capacity per day">
                             
                            </div>


                            <div class="form-group">
                                <label for="rent">Rent</label>
                                <input type="text" class="form-control" name="rent" id="rent" placeholder="Enter Rent per day">
                             
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Add Vehicle</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                  

                  
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    
    


    <div class="container">
        <div class="container">
        <h5 class="float-left"> Cars Lists</h5>
        <button type="button" class="btn btn-outline-success my-4 my-sm-2 mx-2 float-right" data-toggle="modal"
                    data-target="#exampleModal2">
                  <span>
                    <b>+</b>
                  </span>  Add Cars
                </button>
        </div>
       
    <table class="table table-striped my-2">
  <thead>
    <tr>
      <th scope="col">Vehicle Model</th>
      <th scope="col">Vehicle Number</th>
      <th scope="col">Seeting Capacity</th>
      <th scope="col">Rent</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php
  include "conn.php";
  $sql="SELECT * FROM `vehicles`";
  $result=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_assoc($result)){

    ?>
    <tr>
    <th><?php echo $row['model']; ?></th>
    <td><?php echo $row['vnumber']; ?></td>
    <td><?php echo $row['seat']; ?></td>
    <td><?php echo $row['rent']; ?></td>
    <?php $idcar= $row['id']; ?>
    <td>
    <button type="submit"  class="btn btn-primary my-2" data-toggle="modal"
                    data-target="#exampleModal" >Edit</button> 
    <button type="submit"  class='btn btn-danger my-2'><a class="text-white"  href="operations/delete.php?id=<?php echo $row['id'];?>">Delete</a></button> 

    </td>
  </tr>
  <?php
  }

?>
 
    
   
  </tbody>
</table>
    </div>


    <!--model for  Update-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Update Car Detail </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                <?php
                // $ids=$_GET['id'];
               include "conn.php";

               $sql="SELECT * FROM `vehicles` WHERE id='$idcar'";
               $result=mysqli_query($conn,$sql);
               
             while($row=mysqli_fetch_assoc($result)){ 
                ?>



            



                
                    

                    <div class="container">
                        <form method="POST" action="operations/update_car.php">

                                <input type="hidden" class="form-control" name="id" id="model" value="<?php echo $row['id']; ?>" >
                             
                         
         
                            <div class="form-group">
                                <label for="model">Vehicle Model</label>
                                <input type="text" class="form-control" name="model" id="model" value="<?php echo $row['model']; ?>" >
                             
                            </div>

                            <div class="form-group">
                                <label for="vnumber">Vehicle Number</label>
                                <input type="text" class="form-control" name="vnumber" id="vnumber"  value="<?php echo $row['vnumber']; ?>">
                             
                            </div>
                            <div class="form-group">
                                <label for="seat">Seating Capacity</label>
                                <input type="text" class="form-control" name="seat" id="seat"  value="<?php echo $row['seat']; ?>">
                             
                            </div>


                            <div class="form-group">
                                <label for="rent">Rent</label>
                                <input type="text" class="form-control" name="rent" id="rent"  value="<?php echo $row['rent']; ?>">
                             
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Update Vehicle Vehicle</button>
                        </form>
                    </div>

                    <?php
             }


                    ?>

                    
                </div>
                <div class="modal-footer">
                  

                  
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
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