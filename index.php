<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="images/logo2.ico">
    <title>Travel Buddy - Sign In</title>
    <link rel="stylesheet" href="css/login.css" />
</head>
<body>
    <main>
    <div class="box">
        <div class="inner-box">
        <div class="forms-wrap">
            <form action="login.php" autocomplete="off" class="sign-in-form" method="post">
                <div class="logo">
                    <img src="images/logo2.png" alt="TravelBuddy" />
                    <h4>TRAVELBUDDY</h4>
                </div>

                <div class="heading">
                    <h2>Welcome Back</h2>
                    <h6>Not registred yet?</h6>
                    <a href="#" class="toggle">Sign up</a>
                </div>

                <div class="actual-form">
                    <div class="input-wrap">
                    <input
                        name="name"
                        type="text"
                        minlength="4"
                        class="input-field"
                        autocomplete="off"
                        required
                    />
                    <label>Name</label>
                    </div>

                    <div class="input-wrap">
                    <input
                        name="password"
                        type="password"
                        minlength="4"
                        class="input-field"
                        autocomplete="off"
                        required
                    />
                    <label>Password</label>
                    </div>

                    <input type="submit" name="login" value="Sign In" class="sign-btn" />

                    <!-- <p class="text">
                    Forgotten your password or you login datails?
                    <a href="#">Get help</a> signing in
                    </p> -->
                </div>
            </form>

            <form action="add.php" autocomplete="off" class="sign-up-form" method="post">
            <div class="logo">
                <img src="images/logo2.png" alt="TravelBuddy" />
                <h4>TRAVELBUDDY</h4>
            </div>

            <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
            </div>

            <div class="actual-form">
                <div class="input-wrap">
                <input
                    name="name"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                />
                <label>Name</label>
                </div>

                <div class="input-wrap">
                <input
                    name="username"
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                />
                <label>Email</label>
                </div>

                <div class="input-wrap">
                <input
                    name="password"
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                />
                <label>Password</label>
                </div>

                <input type="submit" name="register" value="Sign Up" class="sign-btn" />

                <p class="text">
                By signing up, I agree to the
                <a href="add-on/user-agreement.php">User Agreement</a> and
                <a href="add-on/privacy-policy.php">Privacy Policy</a>
                </p>
            </div>
            </form>
        </div>

        <div class="carousel">
            <div class="images-wrapper">
            <img src="images/image1.png" class="image img-1 show" alt="" />
            <img src="images/image2.png" class="image img-2" alt="" />
            <img src="images/image3.png" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
            <div class="text-wrap">
                <div class="text-group">
                <h2>Embrace Indonesia's beauty</h2>
                <h2>Find your journey</h2>
                <h2>Travel made easy</h2>
                </div>
            </div>

            <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
            </div>
            </div>
        </div>
        </div>
    </div>
    </main>

    <!-- Javascript file -->

    <script src="js/login.js"></script>
</body>
</html>