<?php
$showAlert= false;
$showError= false;
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
 
 include 'partials/_dbconnect.php';

 $username =$_POST["username"];
 $password =$_POST["password"];
 $cpassword =$_POST["cpassword"];
 $exists=false;
 if(($password == $cpassword) && $exists==false)
 {
     $sql="INSERT INTO `customers` (`username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp()); ";
     $result =mysqli_query($conn, $sql);
     if($result)
     {
         $showAlert =true;
     }
     else
     {
         $showError= "Passwords do not match";
     }
}


 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>SignUp</title>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    <?php
    if($showAlert){
    echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your Account is now created and you can Login
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>';
    }

    if($showError){
    echo'
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong>'.$showError.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>';
    
}
    ?>
    <div class="container">

    <h1 class="text-center">SignUp to Our Website</h1>
    <form action="/loginsystem/signup.php" method="post">
     <div class="form-group col-md-6" >
     <label for="username">Username</label>
     <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
     
    </div>
      <div class="form-group col-md-6">              
     <label for="password">Password</label>
     <input type="password" class="form-control" id="password" name="password">
     </div>
     <div class="form-group col-md-6">
      <label for="cpassword">Confirm Password</label>
     <input type="password" class="form-control" id="cpassword" name="cpassword">
     <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
     </div>
     
     <button type="submit" class="btn btn-primary col-md-6">SignUp</button>
     </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </body>
</html>
</body>
</html>