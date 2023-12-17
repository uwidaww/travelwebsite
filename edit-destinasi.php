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

// Initialize the notification variable
$notification = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission and update the record in the database
    $destinationId = $_POST['id'];
    $destinationName = mysqli_real_escape_string($conn, $_POST['destinationName']);
    $provinsi = mysqli_real_escape_string($conn, $_POST['provinsi']);
    $kota = mysqli_real_escape_string($conn, $_POST['kota']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $destinationLink = mysqli_real_escape_string($conn, $_POST['destinationLink']);
    $photoUpload = mysqli_real_escape_string($conn, $_POST['photoUpload']);

    // Prepare and bind the update statement
    $updateQuery = "UPDATE destination SET destinationName=?, provinsi=?, kota=?, description=?, destinationLink=?, photoUpload=? WHERE id=?";
    $stmt = $conn->prepare($updateQuery);
    $stmt->bind_param("ssssssi", $destinationName, $provinsi, $kota, $description, $destinationLink, $photoUpload, $destinationId);

    if ($stmt->execute()) {
        // Set notification message
        $notification = 'Record updated successfully';
    } else {
        $notification = 'Error updating record: ' . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Fetch data for the specified destination ID
$destinationId = $_GET['id'];
$selectQuery = "SELECT * FROM destination WHERE id=?";
$stmt = $conn->prepare($selectQuery);
$stmt->bind_param("i", $destinationId);
$stmt->execute();
$result = $stmt->get_result();

// Check if the query was successful
if ($result && $row = $result->fetch_assoc()) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Head content here -->
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
        <link rel="stylesheet" href="css/upload.css">
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

    <div class="letak">
        <div class="kiri">
            <h2>Edit Destination</h2>
            <form action="" method="post" name="destination">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                <!-- Your form fields with PHP echo statements to populate values -->
                <label for="destinationName">Destination Name:</label>
                <input type="text" name="destinationName" id="destinationName" value="<?php echo $row['destinationName']; ?>" required>

                <label for="provinsi">Province:</label>
                <select id="provinsi" name="provinsi" required>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="DIY">DI Yogyakarta</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                    <option value="Jakarta">DKI Jakarta</option>
                    <option value="Banten">Banten</option>
                </select>

                <label for="kota">City:</label>
                <select id="kota" name="kota" required>
                    <!-- Jawa Timur -->
                    <option value="Batu"> Batu</option>
                    <option value="Blitar"> Blitar</option>
                    <option value="Kediri"> Kediri</option>
                    <option value="Madiun"> Madiun</option>
                    <option value="Malang">Malang</option>
                    <option value="Mojokerto"> Mojokerto</option>
                    <option value="Pasuruan"> Pasuruan</option>
                    <option value="Probolinggo"> Probolinggo</option>
                    <option value="Surabaya"> Surabaya</option>
                    <!-- Jawa Tengah -->
                    <option value="Magelang"> Magelang</option>
                    <option value="Pekalongan"> Pekalongan</option>
                    <option value="Salatiga"> Salatiga</option>
                    <option value="Semarang"> Semarang</option>
                    <option value="Surakarta"> Surakarta</option>
                    <option value="Tegal"> Tegal</option>
                    <!-- DI Yogyakarta -->
                    <option value="Daerah Istimewa Yogyakarta"> Yogyakarta</option>
                    <!-- jawa barat -->
                    <option value="Bandung"> Bandung</option>
                    <option value="Bogor"> Bogor</option>
                    <option value="Banjar"> Banjar</option>
                    <option value="Bekasi"> Bekasi</option>
                    <option value="Cimahi"> Cimahi</option>
                    <option value="Cirebon"> Cirebon</option>
                    <option value="Depok"> Depok</option>
                    <option value="Sukabumi"> Sukabumi</option>
                    <option value="Tasikmalaya"> Tasikmalaya</option>
                    <!-- DKI Jakarta -->
                    <option value="Jakarta Pusat"> Jakarta Pusat</option>
                    <option value="Jakarta Utara"> Jakarta Utara</option>
                    <option value="Jakarta Barat"> Jakarta Barat</option>
                    <option value="Jakarta Selatan"> Jakarta Selatan</option>
                    <option value="Jakarta Timur"> Jakarta Timur</option>
                    <!-- Banten -->
                    <option value="Tangerang"> Tangerang</option>
                    <option value="Cilegon"> Cilegon</option>
                </select>

                <label for="description">Edit Description:</label>
                <textarea id="description" name="description" required><?php echo $row['description']; ?></textarea>

                <label for="destinationLink">Destination Link:</label>
                <input type="text" id="destinationLink" name="destinationLink" value="<?php echo $row['destinationLink']; ?>" required>

                <h2 style="margin-top: 50px;">Change Destination Photos</h2>
                <label for="photoUpload">Edit image link</label>
                <label for="photoUpload" style="color: green;">*right click your image online, copy and paste here</label>
                <input type="text" name="photoUpload" id="photoUpload" value="<?php echo $row['photoUpload']; ?>" required>
                <button type="submit" name="destinasi" class="save-button">Save</button>
            </form>

            <!-- JavaScript for displaying notification -->
            <script>
                // Display notification if it is not empty
                var notification = "<?php echo $notification; ?>";
                if (notification !== "") {
                    alert(notification);
                }
            </script>
        </div>
        <div class="kanan">
            <label for="others"><h2>Others:</h2></label>
            <form action="add.php" method="post">
                <label for="tourGuideName">Tour Guide Name:</label>
                <input type="text" id="tourGuideName" name="tourGuideName">
                <label for="tourGuideDescription">Tour Guide Description:</label>
                <textarea id="tourGuideDescription" name="tourGuideDescription"></textarea>
                <button type="submit" class="save-button">Add Tour Guide</button>
            </form>
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
                <a href="book.php"> <i class="fas fa-angle-right"></i>Ticket</a>
            </div>
        </div>
    </section>
    <!-- footer section ends -->

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <!-- <script src="js/script.js"></script> -->
    <script>
        // Daftar kota untuk setiap provinsi
        const kotaOptions = {
            'Jawa Timur': ['Batu', 'Blitar', 'Kediri', 'Madiun', 'Malang', 'Mojokerto', 'Pasuruan', 'Probolinggo', 'Surabaya'],
            'Jawa Tengah': ['Magelang', 'Pekalongan', 'Salatiga', 'Semarang', 'Surakarta', 'Tegal'],
            'DIY': ['Yogyakarta'],
            'Jawa Barat': ['Bandung', 'Bogor', 'Banjar', 'Bekasi', 'Cimahi', 'Cirebon', 'Depok', 'Sukabumi', 'Tasikmalaya'],
            'Jakarta': ['Jakarta Pusat', 'Jakarta Utara', 'Jakarta Barat', 'Jakarta Selatan', 'Jakarta Timur'],
            'Banten': ['Tangerang', 'Cilegon']
            // Tambahkan provinsi dan kota baru sesuai kebutuhan
        };

        // Fungsi untuk mengisi ulang pilihan kota berdasarkan provinsi yang dipilih
        function updateKotaOptions() {
            const selectedProvinsi = document.getElementById('provinsi').value;
            const kotaSelect = document.getElementById('kota');

            // Kosongkan pilihan kota saat ini
            kotaSelect.innerHTML = '';

            // Tambahkan pilihan kota baru berdasarkan provinsi yang dipilih
            kotaOptions[selectedProvinsi].forEach(function (kota) {
                const option = document.createElement('option');
                option.value = kota;
                option.text = kota;
                kotaSelect.add(option);
            });
        }

        // Panggil fungsi pertama kali untuk menginisialisasi pilihan kota
        updateKotaOptions();

        // Tambahkan event listener untuk perubahan provinsi
        document.getElementById('provinsi').addEventListener('change', updateKotaOptions);
    </script>
    </body>
    </html>
    <?php
} else {
    // Handle the case where the query fails
    echo "Error: " . $stmt->error;
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();
?>
