<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Buddy - Admin</title>
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
    <a href="book.php">Ticket</a>
    <a href ="settings.php">Settings</a>
</nav>
<!-- <button class="btn" style="margin-left: 20px;">Sign In</button> -->
<div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<section class="settings">
    <div class="container">
        <div class="grid-container">
            <a class="grid-item">
                <img src="images/admin.png" alt="Admin">
                <p>as an admin</p>
            </a>

            <a class="grid-item">
                <img src="images/user.png" alt="User">
                <p>as a user</p>
            </a>

            <a class="grid-item-logout" href="index.php">
                <img src="images/log-out.png" alt="Log-out">
                <p>Log Out</p>
            </a>
        </div>
    </div>
    <p>*If you change your role as <span>admin</span>, you can help us to add more destination.</p>
    <p>**Click <span>customer</span> if you want to change your profile and search your destinations further.</p>
</section>

<!-- footer section starts  -->

<!-- isi mulai di sini -->

<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>