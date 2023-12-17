<?php

require_once('connection.php');
$query = "SELECT * FROM destination";
// echo $query; // Mencetak query untuk diinspeksi
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Find your next journey with Travel Buddy</title>
   <link rel="icon" type="image/x-icon" href="images/logo2.ico">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <!-- <a href="home.php" class="logo">travel.</a> -->
   <img src = "images/logo.png">

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Destination</a>
      <!-- <a href="book.php">Ticket</a> -->
      <a href ="settings.php">Settings</a>
   </nav>
   <!-- <button class="btn" style="margin-left: 20px;">Sign In</button> -->
   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!--<div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
   <h1>packages</h1>
</div> -->

<section class="packages">

   <!-- <h3 class="heading-title">Find Your Favorite Destinations</h3> -->
   <h3 class="heading-title">Destinations</h3>
   <p>Find your best holiday places from our partners and friends</p>

   <div class="box-container">

   <?php
   $counter = 0;
      while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
         $textPanjang = $row['description'];
         $jumlahKarakterTampil = 100;
         $teksDitampilkan = substr($textPanjang, 0, $jumlahKarakterTampil);
   ?>
      <div class="box">
         <div class="image">
               <img src="<?php echo $row['photoUpload']; ?>" alt="">
         </div>
         <div class="content">
               <h3><?php echo $row['destinationName']; ?></h3>
               <p>
                  <?php echo $row['kota'] ?>, <?php echo $row['provinsi'] ?><br><br>
                  <?php echo $teksDitampilkan . " ..."; ?>
               </p>
               <!-- index.php or package.php -->

<a href="a.php?id=<?php echo $row['id']; ?>" class="btn">See more</a>

         </div>
      </div>
   <?php
      }
   ?>

   </div>

   <!--<div class="load-more"><span class="btn">load more</span>-->

</section>

<!-- packages section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <img src="images/logo.png">
            <p>
               Discover Indonesia with Travel Buddy – your companion in exploring.<br>
               Create lasting memories, one adventure at a time.
            </p>
      </div>

      <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i>Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i>About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i>Destination</a>
         <a href="settings.php"> <i class="fas fa-angle-right"></i>Settings</a>
      </div>

      <!-- <div class="box">
         <h3>Other Pages</h3>
         <a href="#"> <i class="fas fa-angle-right"></i>Customer Support</a>
         <a href="#"> <i class="fas fa-angle-right"></i>Privacy Policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i>Terms and COnditions</a>
         <a href="#"> <i class="fas fa-angle-right"></i>Tour Guide</a>
      </div> -->

   </div>
</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>