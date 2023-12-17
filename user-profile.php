<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Buddy - Profile</title>
    <link rel="icon" type="image/x-icon" href="images/logo2.ico">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/profileuser.css">
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

<div class="container-profile">
    <div class="body">

    <div class="left_body">
    <h1>My Profile</h1>
    <p>Manage your profile information to control, protect and secure your account</p>
    <!-- <p class="bintang">*</p>Select a picture -->
    
    <form onsubmit="fun();">    
        <label for="upload" class="upload-label">Upload Photo</label>
        <input type="file" id="upload" class="upload" accept="image/*">
        <div class="image-container"></div>

        <input type="text" name="username" id="username" placeholder="Username"><br>
        <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number"><br>
        <input type="text" name="email" id="email" placeholder="Email"><br>
        <input type="password" name="password" id="password" placeholder="Password"><br>
        
        <div class="button-container">
        <button id="saveButton" type="button">Save</button>
        </div>

    </form>

    </div>
    
    <div class="right_body">
    <form>
        <div class="right_image-container"></div>
        <input type="text" name="username" id="username" placeholder="Username"><br>
        <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Phone Number"><br>
        <input type="text" name="email" id="email" placeholder="Email"><br>
        <input type="password" name="password" id="password" placeholder="Password"><br>
    </form>
    </div>

</div>

</div>

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
<script src="js/ProfileUser.js"></script>

</body>
</html>