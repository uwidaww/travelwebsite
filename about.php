<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>More about Travel Buddy</title>
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

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about_image.jpg" alt="" style="border-radius: 50px;">
   </div>

   <div class="content">
      <h3>More about <span>Travel Buddy</span></h3>   
         <p style="text-align: justify;">
            Welcome to TravelBuddy, where the magic of exploration meets the ease of planning.
            Our mission is to assist you in creating memories that last a lifetime.<br>
            Immerse yourself in diverse cultures, breathtaking landscapes, and 
            unparalleled adventures with the assurance that every detail is expertly informed by TravelBuddy for your ultimate satisfaction.
         </p>
         <p>
            Founded on the belief that travel is not just a journey, but a transformative experience, TravelBuddy is your trusted companion in unlocking the world's wonders. Our dedicated team of passionate globetrotters and travel enthusiasts works tirelessly to curate exceptional experiences tailored to your preferences.
         </p>
         <p>
            At TravelBuddy, we understand that every traveler is unique, seeking distinct moments that resonate with their individual spirit. That's why we go beyond the ordinary, providing personalized itineraries that reflect your aspirations and desires. Our commitment to excellence ensures that each adventure you embark on is not merely a vacation but a personalized odyssey crafted just for you.
         </p>
         <p>
            Transparency and reliability are the cornerstones of our service. From the moment you dream of a destination to the time you return home with cherished memories, TravelBuddy is with you every step of the way. We pride ourselves on fostering a community of like-minded explorers who share a passion for discovery, cultural immersion, and creating meaningful connections around Indonesia.
         </p>
      <!-- <a href="about.php" class="btn">Read more</a> -->
   </div>

</section>

<!-- home about section ends -->

<!-- meet the team start -->

<section class="meet-team">

   <h3 class="heading-title">Meet the Team</h3>
   <p>Talented individuals behind Travel Buddy<br>Bringing unique skills and perspectives in creating of your travel companion</p>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/melia.png" alt="">
         </div>
         <div class="content">
            <h3>Melia Putri Isnandar</h3>
            <p>Project Manager, Database Engineer, and Programmer</p>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/fatimah.png" alt="">
         </div>
         <div class="content">
            <h3>Fatimah</h3>
            <p>Database Engineer and Programmer</p>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/widya.png" alt="">
         </div>
         <div class="content">
            <h3>Agustina Widya Atsuti</h3>
            <p>Network Engineer and Programmer</p>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/fafan.png" alt="">
         </div>
         <div class="content">
            <h3>Alvianto Fauzan P</h3>
            <p>Network Engineer and Programmer</p>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/elza.png" alt="">
         </div>
         <div class="content">
            <h3>Elza Aurelia Wibowo</h3>
            <p>Analyst and Programmer</p>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/raisa.png" alt="">
         </div>
         <div class="content">
            <h3>Raisa Dieta</h3>
            <p>Analyst and Programmer</p>
         </div>
      </div>

</section>

<!-- meet the team ends -->

<!-- contact us start -->

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

<!-- contact us ends -->

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

</body>
</html>