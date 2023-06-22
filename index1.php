<?php
include 'connection.php';
$conn=connect();
session_start();
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Khandani Foodie</title>

     <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

     <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

     <!-- custom css file link  -->
     <link rel="stylesheet" href="css/style.css">

 </head>
 <body>

 <!-- header section starts      -->

 <header>

     <a href="index1.php" class="logo"><i class="fas fa-utensils"></i>Khandani Foodie</a>

     <nav class="navbar">
         <a class="active" href="#home">home</a>
         <a href="#dishes">Dishes</a>
         <a href="#about">About</a>
         <a href="#menu">Menu</a>
         <a href="#review">Review</a>
         <a href="#order">SignIN</a>
     </nav>

     <div class="icons">
         <i class="fas fa-bars" id="menu-bars"></i>
         <i class="fas fa-search" id="search-icon"></i>
         <a href="login.php" class="fas fa-heart"></a>
         <a href="login.php" class="fas fa-shopping-cart"></a>
     </div>

 </header>

 <!-- header section ends-->

 <!-- search form  -->

 <form action="" id="search-form">
     <input type="search" placeholder="search here..." name="" id="search-box">
     <label for="search-box" class="fas fa-search"></label>
     <i class="fas fa-times" id="close"></i>
 </form>

 <!-- home section starts  -->

 <section class="home" id="home">

     <div class="swiper-container home-slider">

         <div class="swiper-wrapper wrapper">

             <div class="swiper-slide slide">
                 <div class="content">
                     <span>our special dish</span>
                     <h3>spicy noodles</h3>
                     <p>Are you a spicy food lover? If yes, than this special dish only for you. So Why wait!!</p>
                     <a href="login.php" class="btn">order now</a>
                 </div>
                 <div class="image">
                     <img src="images/home-img-1.png" alt="">
                 </div>
             </div>

             <div class="swiper-slide slide">
                 <div class="content">
                     <span>our special dish</span>
                     <h3>fried chicken</h3>
                     <p>For extra crispy fried chicken! To bring more flavours in your fried chicken. Order Now </p>
                     <a href="login.php" class="btn">order now</a>
                 </div>
                 <div class="image">
                     <img src="images/home-img-2.png" alt="">
                 </div>
             </div>

             <div class="swiper-slide slide">
                 <div class="content">
                     <span>our special dish</span>
                     <h3>hot pizza</h3>
                     <p>If you like great pizza? then you've come to the right place! Hurry Up!!</p>
                     <a href="login.php" class="btn">order now</a>
                 </div>
                 <div class="image">
                     <img src="images/home-img-3.png" alt="">
                 </div>
             </div>

         </div>

         <div class="swiper-pagination"></div>

     </div>

 </section>

 <!-- home section ends -->

 <!-- dishes section starts  -->

 <section class="dishes" id="dishes">

     <h3 class="sub-heading"> our dishes </h3>
     <h1 class="heading"> popular dishes </h1>

     <div class="box-container">

       <?php
         $food = mysqli_query($conn,"SELECT * FROM food WHERE category = 'popular'");
         if (mysqli_num_rows($food)>0) {
           while ($f = mysqli_fetch_assoc($food)) {
             $fimage = $f['image'];
              ?>

         <div class="box">
             <a href="login.php" class="fas fa-heart"></a>
             <a href="login.php" class="fas fa-eye"></a>
             <img src="images/<?php echo $fimage; ?>" alt="">
             <h3><?php echo $f['food']; ?></h3>
             <div class="stars">
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star"></i>
                 <i class="fas fa-star-half-alt"></i>
             </div>
             <span>৳ <?php echo $f['price'] ?></span>
             <a href="login.php" class="btn">add to cart</a>
         </div>
       <?php     }
          }
         ?>


     </div>

 </section>

 <!-- dishes section ends -->

 <!-- about section starts  -->

 <section class="about" id="about">

     <h3 class="sub-heading"> about us </h3>
     <h1 class="heading"> why choose us? </h1>

     <div class="row">

         <div class="image">
             <img src="images/about-img.png" alt="">
         </div>

         <div class="content">
             <h3>best food in the country</h3>
             <p>Quality of Service, Food, Ambiance and Value of Money are the primary elements for choosing a restaurant</p>
             <p>Flexible Menu – Whether you’re looking to dine with three people or 20+ people,  we can mix and match food combinations without a hassle. No one has to fight over the last spring roll!.</p>
             <div class="icons-container">
                 <div class="icons">
                     <i class="fas fa-shipping-fast"></i>
                     <span>free delivery</span>
                 </div>
                 <div class="icons">
                     <i class="fas fa-dollar-sign"></i>
                     <span>easy payments</span>
                 </div>
                 <div class="icons">
                     <i class="fas fa-headset"></i>
                     <span>24/7 service</span>
                 </div>
             </div>
             <a href="login.php" class="btn">learn more</a>
         </div>

     </div>

 </section>

 <!-- about section ends -->

 <!-- menu section starts  -->

 <section class="menu" id="menu">

     <h3 class="sub-heading"> our menu </h3>
     <h1 class="heading"> today's speciality </h1>

     <div class="box-container">

       <?php $i=0;
         $food1 = mysqli_query($conn,"SELECT * FROM food WHERE category='special'");
         if (mysqli_num_rows($food1)>0) {
           while ($f1=mysqli_fetch_assoc($food1)) {
             $img1 = $f1['image']; ?>



         <div class="box">
             <div class="image">
                 <img src="image/<?php echo $img1; ?>" alt="">
                 <a href="login.php" class="fas fa-heart"></a>
             </div>
             <div class="content">
                 <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                 </div>
                 <h3><?php echo $f1['food']; ?></h3>
                 <p><?php echo $f1['about']; ?></p>
              <form method="post"> <input type="submit" name="cart<?php echo$i;  ?>" value="Add to Cart"> </form>

                 <?php
                 if (isset($_POST["cart$i"])) {
                   $_SESSION['fid'] = $f1['id'];
                   $_SESSION['food'] = $f1['food'];
                   $_SESSION['image'] = $f1['image'];
                   $_SESSION['price']=$f1['price'];
                   $_SESSION['category'] = $f1['category'];
                   echo "<script>window.location.replace('login.php')</script>";
                 }
                  ?>

                 <span class="price">৳ <?php echo $f1['price']; ?></span>
             </div>
         </div>
       <?php   $i++;}
        }
       ?>



     </div>

 </section>

 <!-- menu section ends -->

 <!-- review section starts  -->


<section class="review" id="review">
   <h3 class="sub-heading"> customer's review </h3>
      <h1 class="heading"> what they say </h1>
      <div class="swiper-container review-slider">

         <div class="swiper-wrapper">
   <?php
      $review = mysqli_query($conn,"SELECT * FROM review");

      if (mysqli_num_rows($review)>0) {
        while ($a = mysqli_fetch_assoc($review)) {?>




                     <div class="swiper-slide slide">
                         <i class="fas fa-quote-right"></i>
                         <div class="user">
                           <?php $img = $a['uimage']; ?>
                             <img src="image/<?php echo $img; ?>" alt="">
                             <div class="user-info">
                                 <h3><?php echo $a['review_by']; ?></h3>
                                 <div class="stars">
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star-half-alt"></i>
                                 </div>
                             </div>
                         </div>
                         <p><?php echo $a['review']; ?></p>
                     </div>





      <?php  }
      }
    ?>
  </div>
</div>



 </section>
 <!-- review section ends -->

 <!-- review section starts  -->

<section class="review" id="review">

     <h3 class="sub-heading"> Owner </h3>
     <h1 class="heading"> Owner's Message </h1>

     <div class="swiper-container review-slider">

         <div class="swiper-wrapper">

             <div class="swiper-slide slide">
                 <i class="fas fa-quote-right"></i>
                 <div class="user">
                     <img src="images/pic3.jpg" alt="">
                     <div class="user-info">
                         <h3>Al Adnan Sami</h3>
                         <div class="stars">
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star-half-alt"></i>
                         </div>
                     </div>
                 </div>
                 <p>মানুষের বেঁচে থাকার সব থেকে গুরুত্বপূর্ন জিনিস হচ্ছে খাবার। আমরা সেই খাবার কে  স্বাস্থ্যসম্মত ভাবে তৈরী করি, আমাদের কাছে পাবেন সব দেশের অথেন্টিক স্বাদের খাবার! আসুন ঘুরে যান! আমাদের খান্দানী ফুডিতে </p>
             </div>

             <div class="swiper-slide slide">
                 <i class="fas fa-quote-right"></i>
                 <div class="user">
                     <img src="images/pic2.jpg" alt="">
                     <div class="user-info">
                         <h3>Tahrim Kabir</h3>
                         <div class="stars">
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star-half-alt"></i>
                         </div>
                     </div>
                 </div>
                 <p>আমরা সব সময় চেষ্টা করি কিভাবে মানুষকে ভালো এবং স্বাস্থ্যসম্মত খাবার পরিবেশন করা যায়.</p>
             </div>

         </div>

     </div>
</section>

 <!-- Owner Says section ends -->

 <!-- order section starts  -->

 <section class="order" id="order">

     <h3 class="sub-heading"> order now </h3>
     <h1 class="heading"> free and fast </h1>

     <form action="login.php">
<!--
         <div class="inputBox">
             <div class="input">
                 <span>your name</span>
                 <input type="text" placeholder="enter your name">
             </div>
             <div class="input">
                 <span>your number</span>
                 <input type="number" placeholder="enter your number">
             </div>
         </div>
         <div class="inputBox">
             <div class="input">
                 <span>your order</span>
                 <input type="text" placeholder="enter food name">
             </div>
             <div class="input">
                 <span>additional food</span>
                 <input type="test" placeholder="extra with food">
             </div>
         </div>
         <div class="inputBox">
             <div class="input">
                 <span>how much</span>
                 <input type="number" placeholder="how many orders">
             </div>
             <div class="input">
                 <span>date and time</span>
                 <input type="datetime-local">
             </div>
         </div>
         <div class="inputBox">
             <div class="input">
                 <span>your address</span>
                 <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
             </div>
             <div class="input">
                 <span>your message</span>
                 <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
             </div>
         </div>
       -->
         <input type="submit" value="order now" class="btn">

     </form>

 </section>

 <!-- order section ends -->

 <!-- footer section starts  -->

 <section class="footer">

     <div class="box-container">

         <div class="box">
             <h3>Advisors</h3>
             <a href="https://www.facebook.com/tasniya.neela">Tasniya Ahmed Neela</a>
             <a href="https://www.facebook.com/uiftee">Iftekhar Alom Ifte</a>
             <a href="https://www.facebook.com/dipanita.iit">Dipanita Saha</a>
             <a href="https://www.facebook.com/sumon.auhid">Auhidur Rahman Sumon</a>
             <a href="https://www.facebook.com/cd.dipok">Dipok Chandra Das</a>
             <a href="https://www.facebook.com/falguni.roy">Falguni Roy</a>
         </div>

         <div class="box">
             <h3>quick links</h3>
             <a href="index.php">home</a>
             <a href="#dishes">dishes</a>
             <a href="#about">about</a>
             <a href="#menu">menu</a>
             <a href="#reivew">reivew</a>
             <a href="#order">order</a>
         </div>

         <div class="box">
             <h3>contact info</h3>
             <a href="tel:01625208031">01625208031</a>
             <a href="tel:01861691283">01861691283</a>
             <a href="mailto:aladnansami21@gmail.com">aladnansami21@gmail.com</a>
             <a href="mailto:tahrimkabir321@gmail.com">tahrimkabir321@gmail.com</a>
             <a href="#">Infront Of IIT Building ,NSTU</a>
         </div>

         <div class="box">
             <h3>follow us</h3>
             <a href="https://www.facebook.com/khandanifoode">facebook</a>
             <a href="https://www.youtube.com/channel/UCH-nHKlUenHYR6YODwCZ17w">Youtube</a>
             <a href="#">instagram</a>
             <a href="#">linkedin</a>
         </div>

     </div>

     <div class="credit"> copyright @ 2021 by <span>IIT Web Tecnology Lab</span> </div>

 </section>

 <!-- footer section ends -->

 <!-- loader part  -->
 <div class="loader-container">
     <img src="images/loader.gif" alt="">
 </div>





















 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

 <!-- custom js file link  -->
 <script src="js/script.js"></script>

 </body>
 </html>
