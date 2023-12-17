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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['destinationName']; ?> - Destination Detail</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/details.css">
    <style>

    </style>
    <title>Destination Page</title>
</head>
<body>
    <section class="header">

        <!-- <a href="home.php" class="logo">travel.</a> -->
        <img src="images/logo.png">
    
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Destination</a>
            <!-- <a href="book.php">Ticket</a> -->
            <a href="settings.php">Settings</a>
        </nav>
        <!-- <button class="btn" style="margin-left: 20px;">Sign In</button> -->
        <div id="menu-btn" class="fas fa-bars"></div>
    
    </section>

    <section class="details">
    <div class="container">
        <div class="destination-info">
                <img class="destination-image clickable" src="<?php echo $row['photoUpload']; ?>" alt="Destination Image">
                <div class="destination-details">
                    <h1 class="destination-name"><?php echo $row['destinationName']; ?></h1>
                    <h2 class="location-info"><?php echo $row['kota']; ?>, <?php echo $row['provinsi']; ?></h2>
                    <h2 class="description" style="font-weight: 200; padding: 20px;"><?php echo $row['description']; ?></h2>
                </div>
            </div>

        <div class="reviews">
            <div class="link">
                <h2 style="font-weight: 200; color:black;">Check more information about this destination</h2>
                <h2 class="desc-link"><a href="<?php echo $row['destinationLink']; ?>">Click here</a></h2>
            </div>
            <h1 style="text-align :center; font-size:large;">Review and Comments</h1>
            <div class="comments-section">
                <h2 style="text-align :center; font-size:large;">Add comment</h2>
                <form class="comment-form" id="commentForm">
                    <input type="text" id="username" placeholder="Nama Pengguna" required>
                    <textarea id="comment" placeholder="Tambahkan komentar Anda" required></textarea>
                    <button type="button" onclick="addComment()">Tambah Komentar</button>
                </form>
            </div>
            <div id="commentContainer"></div>
        </div>
    </div>

        <div class="overlay" id="overlay">
            <img class="full-screen-image" id="fullScreenImage" src="" alt="Full Screen Image">
        </div>
    </section>

    <script>
        const clickableImage = document.querySelector('.clickable');
        const overlay = document.getElementById('overlay');
        const fullScreenImage = document.getElementById('fullScreenImage');

        clickableImage.addEventListener('click', function () {
            fullScreenImage.src = clickableImage.src;
            overlay.style.display = 'flex';
        });

        overlay.addEventListener('click', function () {
            overlay.style.display = 'none';
        });

        function addComment() {
            const username = document.getElementById('username').value;
            const commentText = document.getElementById('comment').value;

            if (username && commentText) {
                const commentContainer = document.getElementById('commentContainer');
                const commentItem = document.createElement('div');
                commentItem.classList.add('comment-item');
                commentItem.innerHTML = `<p><strong>${username}</strong>: ${commentText}</p>`;
                commentContainer.appendChild(commentItem);

                document.getElementById('username').value = '';
                document.getElementById('comment').value = '';
            }
        }
    </script>
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