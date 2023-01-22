<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'conn.php';
   $name=$_POST['name'];
   $email=$_POST['email'];
   $category=$_POST['category'];
   $pass=$_POST['pass'];
 
if($category=="agency"){

    $existsql="SELECT * FROM `agency` WHERE email = '$email'";
    $result = mysqli_query($conn, $existsql);
    $numExitsRows = mysqli_num_rows($result);
    if($numExitsRows){
        ?>
        <script type="text/javascript">
            alert("Email is Allready Exist");
            window.location.href="index.php";;
            </script>
            <?php
            
    }
    else
    {

        $hash = password_hash($pass, PASSWORD_DEFAULT);
$sql=" INSERT INTO `agency` (`name`, `email`, `category`, `pass`) VALUES ('$name', '$email', '$category', '$hash') ";
$result=mysqli_query($conn,$sql);
  
    if($result){
        
    ?>
    <script type="text/javascript">
        alert("Sign Up Successfully")
        window.location.href="index.php";
        </script>
        <?php
        
    }
}

}
else{

    $existsql="SELECT * FROM `users` WHERE email='$email'";
    $result = mysqli_query($conn, $existsql);
    $numExitsRows = mysqli_num_rows($result);
    if( $numExitsRows){
   ?>
   <script type="text/javascript">
    alert("Email is already Exist");
    window.location.href="index.php";
    </script>
    <?php
    
    }
    else
    {
        $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql="INSERT INTO `users` (`name`,`email`,`category`,`pass`) VALUES ('$name','$email','$category','$hash')";
    $result=mysqli_query($conn,$sql);
   
    if($result){
        ?>

        <script type="text/javascript">
alert("SignUp Successfully");
window.location.href="index.php";
            </script>

            <?php


    }


}
}





}
?>