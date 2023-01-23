<?php

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'conn.php';

    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $category =$_POST['category'];


    if($category=='agency'){

        $existsql="SELECT * FROM `agency` WHERE email='$email' AND category='agency'";
        $result = mysqli_query($conn, $existsql);
        $numExitsRows = mysqli_num_rows($result);
      
        
    if($numExitsRows){

        while($row=mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $email=$row['email'];
            $category=$row['category'];
            $password=$row['pass'];
        }
        if(password_verify($pass,$password)){
                        
            $_SESSION['loggedin'] = true;
            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            $_SESSION['category']=$category;
            
           
            ?>
            <script type="text/javascript">
                alert("Successfully Login");
                window.location.href="dashboard/addcars.php";
                </script>
    
            <?php
            // echo"logged In";

            
         
            
        }
    
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert("Please Enter Valid Email");
            window.location.href="index.php";

            </script>

        <?php
    }

   
    }else    
    {
        $existsql1="SELECT * FROM `users` WHERE email='$email' AND category='individual'";
        $result1 = mysqli_query($conn, $existsql1);
        $numExitsRows1 = mysqli_num_rows($result1); 
      
        
    if($numExitsRows1){
      
        while($row=mysqli_fetch_assoc($result1)){
            $name = $row['name'];
            $email=$row['email'];
            $category=$row['category'];
            $password = $row['pass'];
        }
        if(password_verify($pass,$password)){
           
              
            
            $_SESSION['loggedin'] = true;
            $_SESSION['name']=$name;
            $_SESSION['email']=$email;
            $_SESSION['category']=$category;

          
            ?>
            <script type="text/javascript">
                alert("Successfully Login");
                window.location.href="index.php";
                </script>
    
            <?php
            
            
        }
    



    }else{
        ?>
        <script type="text/javascript">
            alert("Please Enter Valid Email");
                  window.location.href="index.php";
            </script>

        <?php
    }

   
   




    }
 




}




?>