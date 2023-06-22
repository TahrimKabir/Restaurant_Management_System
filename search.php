<?php
include 'connection.php';
$conn = connect();
session_start();


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  method="post">
      <input type="text" name="search" placeholder="Search here"   style="padding-left:15vw;padding-right:10vw; padding-top:2vh;padding-bottom:2vh; border-radius: 10px;"required>
    </form>
    <?php
    if(isset($_POST['search'])){


      $search =   $_POST['search'];
      $_SESSION['search'] = $search;
      $search = mysqli_real_escape_string($conn,$search);
      $q = mysqli_query($conn,"SELECT * FROM food WHERE food LIKE '%$search%' or category LIKE '%$search%' ");

      if (mysqli_num_rows($q)>0) {
        while ($a = mysqli_fetch_assoc($q)) {$image = $a['image'];?>

           <div class='menuform' style='width:200px;background:#CAE7CB;box-shadow: 1px -13px 338px 15px rgba(135,126,123,0.65);float:left;
           display:inline-block;margin:2vh 0.5vw;'>
           <img src='image/<?php echo $image;  ?>' height='200' width='200' style='padding:0,margin:1vh 1vw;'>
            <h3>Name : <?php echo $a['food']; ?></h3>
            <h3>Category : <?php echo $a['category']; ?></h3>
            <input type="submit" name="cart" value="ADD to Cart">

           </div>
    <?php
  }
      }

    }

     ?>

  </body>
</html>
<script>
function refreshPage(){
    window.location.replace('search.php')
}
</script>
