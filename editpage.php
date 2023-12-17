<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'travel-buddy';

// Create connection
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle delete operation
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_button'])) {
    $destinationId = $_POST['delete_button'];

    // Prepare and bind the delete statement
    $deleteQuery = "DELETE FROM destination WHERE id=?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param("i", $destinationId);

    if ($stmt->execute()) {
        // Record deleted successfully, you can set a notification if needed
        $notification = 'Record deleted successfully';
    } else {
        // Handle the case where deletion fails
        $notification = 'Error deleting record: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content here -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings Page</title>
    <link rel="icon" type="image/x-icon" href="images/logo2.ico">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/editpg.css">
</head>
<body>

<!-- header section starts  -->
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

<div class="isi">
    <a href="upload-destinasi.php" class="add-button" value="Add"> ADD</a>
    <div class="body-content">
        <?php
        // Fetch data from the destination table
        $query = "SELECT * FROM destination";
        $result = $conn->query($query);

        // Check if the query was successful
        if ($result) {
            // Fetch data and display it
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="destination-box">
                    <img src="<?php echo $row['photoUpload']; ?>" alt="Destination Image">
                    <div class="text-container">
                        <div class="destination-name">
                            <p><?php echo $row['destinationName']; ?></p>
                        </div>
                        <p><strong>Provinsi:</strong> <?php echo $row['provinsi']; ?></p>
                        <p><strong>Kota:</strong> <?php echo $row['kota']; ?></p><br>
                        <p><strong>Description:</strong> <?php echo $row['description']; ?></p>
                    </div>
                    <div style="justify-content: center;">
                    <a href="edit-destinasi.php?id=<?php echo $row['id']; ?>" class="edit-button" value="Edit">Edit</a>

                        <!-- Add the delete form with a button -->
                        <form method="post" style="display: inline-block;">
                            <input type="hidden" name="delete_button" value="<?php echo $row['id']; ?>">
                            <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                        </form>
                    </div>
                </div>
                <?php
            }

            // Free result set
            $result->free();
        } else {
            // Handle the case where the query fails
            echo "Error: " . $conn->error;
        }
        ?>
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

</body>
</html>
