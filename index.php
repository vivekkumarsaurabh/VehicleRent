<?php
 session_start();

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
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
               


            </ul>
            <form class="form-inline my-2 my-lg-0">
        <?php
        // include "conn.php";
        // session_start();
        if(!isset($_SESSION['loggedin']) ||!isset($_SESSION['name'])){
           
        ?>
       <button type="button" class="btn btn-outline-success my-2 my-sm-0 mx-2" data-toggle="modal"
                    data-target="#exampleModal1">
                   Login

     </button>
     <button type="button" class="btn btn-outline-success my-2 my-sm-0 mx-2" data-toggle="modal"
                    data-target="#exampleModal2">
                    Registration
                </button>
         
      <?php
        }else{
            $name=$_SESSION['name'];
            ?>
           
            <h4 class="text-white">
                <?php echo $name;  ?>
            </h4>
            <button type="button" class="btn btn-outline-danger my-2 my-sm-0 mx-2"><a href="logout_index.php" style="text-decoration:none; color:#fff">Logout</a></button>


                

            <?php
        }
        ?>

              
            </form>
        </div>
    </nav>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">LogIn - start your Journey with VehicleRent</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                                    placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="category">Who Are You ?</label>
                                <select class="" id="category" name="category" class="form-control">

                                    <option value="individual" selected>Individual</option>
                                    <option value="agency">Agency</option>

                                </select>

                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="pass" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                           
                            <button type="submit" class="btn btn-primary">LogIn</button>
                        </form>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#exampleModal2" data-dismiss="modal">SignUp</button>


                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> SignUp </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    

                    <div class="container">
                        <form method="POST" action="signup.php">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp"
                                    placeholder="Enter Your Name">
                             
                            </div>

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                                    placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="category">Who Are You ?</label>
                                <select class="" id="category" name="category" class="form-control">

                                    <option value="individual" selected>Individual</option>
                                    <option value="agency">Agency</option>

                                </select>

                            </div>


                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="pass" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                           
                            <button type="submit" class="btn btn-primary">SignUp</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#exampleModal1" id="" data-dismiss="modal">Log In</button>

                  
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="images/3cars-transformed.jpeg" height="500px" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Enjoy Your Journey</h5>
                <p>With Best Average Vehicles enjoy your full journey </p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/2car-transformed (1).jpeg" height="500px"  alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Offering Cancellation Vehicles</h5>
                <p>Enjoy your Full time experience with best believes</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="images/1car-transformed.jpeg" height="500px"  alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Greatful And Trushfull</h5>
                <p>Your Drive have allways Successfull...</p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>



    <div class="container">
        <h4 class="text-center text-success my-4"> <i class="fa fa-car" style="font-size:34px;"></i><span class="text-primary">Start Journey</span>  with Your Vehicle</h4>
        <div class="row mb-2">
        <?php
                include "conn.php";
                $sql="SELECT * FROM `vehicles`";
                $result=mysqli_query($conn,$sql);
                
                while($row=mysqli_fetch_assoc($result)){

               ?>

            <div class="col-md-4">
         
         

                <div class="card d-flex justify-content-around box-shadow h-md-200" style="background-color: #9bbfeb; color: #fff; ">
                 
       
                    <div class="card-body d-flex flex-column align-items-start">
                    
                        <h4 class="mb-1">
                           <?php echo $row['model']; ?>
                        </h4>
                     

                           
                            <h6 class="mb-1">
                               Vehicle Number :  <?php echo $row['vnumber'];   ?>
                            </h6>
                            <h6 class="mb-1">Seeting Capacity : <?php echo $row['seat'];   ?></h6>
                       
                     
                   
                        <h6 class="mb-2">₹ <?php echo $row['rent'];   ?>/day</h6>

                        <?php
                        include "conn.php";
                      
                        if(!isset($_SESSION['loggedin']) ||!isset($_SESSION['name'])){
                            ?>
                           

                            <button type="button" class="btn btn-success my-2 my-sm-0 mx-2" data-toggle="modal"
                    data-target="#exampleModal1">
                   Rent Car

     </button>
                            <?php

                        }else{
                            $name=$_SESSION['name'];
                            $email=$_SESSION['email'];
                            ?>
                             <form action="rent_car.php" method="POST">
                            <input type="hidden" name="name" value="<?php echo $name ?>">
                            <input type="hidden" name="email" value="<?php echo $email ?>">
                            <input type="hidden"  name="car_model" value="<?php echo $row['model'];?>">
                            <input type="hidden"  name="car_number" value="<?php echo $row['vnumber'];?>">
                         
                            
                            <div class="form-group" >
                            <label for="days">Choose days</label>
                            <select style="padding-right:20px; border:2px solid white; padding:5px 20px; cursor:pointer; color:#fff; background-color: #9bbfeb;" name="days" id="days">
                            <?php                          
                          
                              for( $i=1; $i<=31; $i++){
                                ?>
                                <option value="<?php echo "$i";  ?>"  class=""><?php echo "$i"; ?> </option>
                                <?php
                              
                              }

                            ?>
                            </select>

                            </div>
                          
                          
                            <input type="hidden"  name="price" value="<?php echo $row['rent'];?>">
                            <div class="form-group">

                            <label for="date">Choose start date</label>
                            <input type="date" id="date" name="date" min="2018-01-01" max="2200-12-01" style="padding:5px 20px; border: 2px solid white; cursor:pointer; color:#fff; background-color: #9bbfeb; ">

                            </div>

                             <button type="submit" class="btn btn-success"> Rent Car</button>

                           </form>


                         <?php


                        }
                           ?>
                      
                    </div>
                  <center>
                    <img class="mr-4" data-src="holder.js/200x250?theme=thumb" alt="car image" style="width: 150px; height: 150px;" src="images/car.png" data-holder-rendered="true">

                  </center>
                   
           
                </div>
           
           
            </div>
            <?php
            }
            ?>
              
            
        </div>

    </div>


<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid">

    <footer class="text-center text-lg-start bg-dark" style="background-color: ;">
      <div class="container d-flex justify-content-center py-5">
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" >
            <i class="fa fa-facebook"></i>
        </button>
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" >
            <i class="fa fa-linkedin"></i>
        </button>
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" >
            <i class="fa fa-instagram"></i>
        </button>
        <button type="button" class="btn btn-primary btn-lg btn-floating mx-2" >
            <i class="fa fa-twitter"></i>
        </button>
      </div>
  
      <!-- Copyright -->
      <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright: Vivek Kumar Saurabh
       
      </div>
      <!-- Copyright -->
    </footer>
    
  </div>
  <!-- End of .container -->
    <!-- Footer -->
  

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
        crossorigin="anonymous"></script>
</body>

</html>