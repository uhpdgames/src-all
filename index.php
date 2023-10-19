<?php
session_start();
if(isset($_SESSION['msg'])){
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
}
if(isset($_SESSION['userdata'])){
    $user = $_SESSION['userdata'][0];
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to DevRef - Refer & Earn Money</title>
    <link rel="icon" href="images/icon.png" type="image/png">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <link rel="stylesheet" href="./assets/css/all.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/media.css">
    <link rel="stylesheet" href="./assets/css/cart.css">
    <link rel="stylesheet" href="./assets/css/animate.css">


    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.css">

    <link rel="stylesheet" href="./assets/css/aff.css">

    <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>


</head>
<body>
<nav class="navbar navbar-light bg-light shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
       C-K-D
    </a>
    <div>
     <?php
     if(isset($_SESSION['userdata'])){
         ?>
    <a href="includes/process.php?logout" class="btn btn-sm btn-danger">Logout</a>

         <?php
     }else{
         ?>
<a href="?login" class="btn btn-sm btn-primary">Login</a>
    <a href="?signup" class="btn btn-sm btn-primary">Signup</a>
         <?php
     }
     ?>
    

</div>
   

  </div>
  
</nav>

<div class="container">
<?php

include('includes/product.php');die;

if(isset($_GET['signup']) && !isset($_SESSION['userdata'])){
    include('includes/register.php');
}else if(isset($_GET['login']) && !isset($_SESSION['userdata'])){
    include('includes/login.php');
}else if(isset($_SESSION['userdata'])){
    include('includes/home.php');
}else if($_GET['welcome']){
    include('includes/welcome.php');
}else{
    include('includes/login.php');
}
?>


</div>




</body>
</html>