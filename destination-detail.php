<!-- destination-detail.php -->

<?php
require_once('connection.php');

if (isset($_GET['id'])) {
    $destinationId = $_GET['id'];

    $query = "SELECT * FROM destination WHERE id = $destinationId";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $row['destinationName']; ?> - Destination Detail</title>
            <link rel="stylesheet" href="css/destination.css">
        </head>

        <body>
            <!-- header section starts -->
            <section class="header">
                <img src="images/logo.png">
                <nav class="navbar">
                    <a href="home.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="package.php">Destination</a>
                    <a href="settings.php">Settings</a>
                </nav>
                <div id="menu-btn" class="fas fa-bars"></div>
            </section>
            <!-- header section ends -->

            <div class="container">
                <div class="kiri">
                    <h1><?php echo $row['destinationName']; ?></h1>
                    <p><?php echo $row['kota']; ?>, <?php echo $row['provinsi']; ?></p>
                    <div class="gambardestinasi">
                        <div class="gambarbesar">
                            <img src="<?php echo $row['photoUpload']; ?>" alt="Destination Image">
                        </div>
                    </div>
                    <div class="description">
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>
                <div class="kanan">
                    <!-- Remove the ticket and booking section -->
                    <div class="komentar">
                        <h2>Review </h2>
                        <div class="bubblechat">
                            <!-- Include comments dynamically if available -->
                        </div>
                        <div id="inputkomen">
                            <textarea placeholder="Your review"></textarea>
                            <div>
                                <button type="submit" id="kirimkomen">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- footer section ends -->
        </body>

        </html>
<?php
    } else {
        echo 'Destination not found.';
    }
} else {
    echo 'Invalid destination ID.';
}
?>
