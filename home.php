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
   <title>Welcome to Travel Buddy!</title>
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

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
            <span>Embrace the beauty with</span>
               <h4>Travel Buddy</h4>
               <a href="package.php" class="btn">Discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>Find something new with us</span>
               <h4>Travel Buddy</h4>
               <a href="package.php" class="btn">Discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>Discover and travel made easy</span>
               <h4>Travel Buddy</h4>
               <a href="package.php" class="btn">Discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img id="aboutImage" src="images/about_image.jpg" alt="" style="border-radius: 50px;">
   </div>

   <div class="content">
      <h3>Get to know <span>our project!</span></h3>   
         <p style="text-align: justify;">
            Welcome to TravelBuddy, where the magic of exploration meets the ease of planning.
            Our mission is to assist you in creating memories that last a lifetime.<br>
            Immerse yourself in diverse cultures, breathtaking landscapes, and 
            unparalleled adventures with the assurance that every detail is expertly informed by TravelBuddy for your ultimate satisfaction.
         </p>
      <a href="about.php" class="btn">Read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h3 class="heading-title">Destinations</h3>
   <p>Choose your path to a limitless adventure with your travel companion - Travel Buddy</p>

   <div class="box-container">

   <?php
   $counter = 0;
   while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      if ($counter < 4) {
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
               <a href="a.php?id=<?php echo $row['id']; ?>" class="btn">See more</a>
         </div>
      </div>
   <?php
         $counter++;
      } else {
      // Break the loop once 4 items are displayed
      break;
      }
   }
   ?>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">See All Destinations</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>Holiday discount up to 35% off</h3>
      <p>Settle your ticket now and plan your holiday the right way</p>
      <a href="package.php" class="btn">Get it now!</a>
   </div>
</section>

<!-- home offer section ends -->

<section class="contact-us">
   <div class="content">
      <h3>Contact Us</h3>
      <p>Let us know your feedback and ideas so we can develop better</p>
      <div class="form">
         <form action="add.php" class="contact-form" name="contact-us" method="post">
            <input type="text" name="name" id="name" placeholder="Your Name">
            <input type="email" name="email" id="email" placeholder="Your Email">
            <textarea name="message" id="message" placeholder="Your Message"></textarea>
            <button type="submit" name="submit" class="btn">Submit</button>
         </form>

      </div>
   </div>
</section>

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
   </div>
</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>
</html>