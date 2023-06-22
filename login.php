<?php
include 'connection.php';
$conn = connect();
session_start();



/*$check=mysqli_query($conn,"SELECT fid,cart_by FROM cart WHERE fid='$fid' AND cart_by='$user'");

if (mysqli_num_rows($check)==0) {
    $cart =mysqli_query($conn,"INSERT INTO cart(fid,category,food,price,cart_by,image) VALUES('$fid','$cat','$food','$price','$user','$img')");
    //header("Location: cart.php");
    if ($cart) {
      echo "Successfully added  to cart ";
    }
}
else {
  echo "<div style='height:5vh;width:5vw;box-shadow: 1px -13px 338px 15px rgba(135,126,123,0.65);float:left;'>";
  echo "Cart added once!";
  echo "</div>";
}*/


 if (isset($_POST["signin"])) {
   $email = $_POST["vemail"];
   $_SESSION["vemail"] = $email;


   $pass = $_POST["vpass"];
   $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$pass'");
   $count = mysqli_num_rows($sql);
   if ($count==1) {
     if (isset($_SESSION['food'])) {
       $fid = $_SESSION['fid'];
       $food = $_SESSION['food'];
       $price = $_SESSION['price'];
       $cat = $_SESSION['category'];
       $img = $_SESSION['image'];
       $user = $_SESSION["vemail"];
       $check=mysqli_query($conn,"SELECT fid,cart_by FROM cart WHERE fid='$fid' AND cart_by='$user'");

       if (mysqli_num_rows($check)==0) {
           $cart =mysqli_query($conn,"INSERT INTO cart(fid,category,food,price,cart_by,image) VALUES('$fid','$cat','$food','$price','$user','$img')");
           //header("Location: cart.php");
           if ($cart) {
             echo "<script>window.location.replace('cart.php')</script>";
             exit();
           }
       }
       else {
         echo "<script>window.location.replace('customer.php')</script>";
         exit();
     }


   }
   else {
      echo "<script>window.location.replace('customer.php')</script>";
     exit();
   }
 }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="Login1.css">

    <title></title>
  </head>
  <body>
    <div class="image">
        <img src="images/home-img-3.png" alt="">
         <img src="images/home-img-2.png" alt="">
    </div>
    <form class="box" method="post">
        <h1>Sign in</h1>
      <input type="text" name="vemail" placeholder="Email Address">
      <input type="password" name="vpass" placeholder="Password">
      <input type="submit" name="signin" value="SIGNIN">
        <a href="signup.php">Don't you have any account?Please,<br> signup here.</a>


      </form>

  </body>
</html>
