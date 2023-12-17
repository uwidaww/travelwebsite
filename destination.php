<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Buddy</title>
    <link rel="stylesheet" href="css/destination.css">
    
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

<!-- section start -->
    <div class="container">
        <div class="kiri">
            <h1>Wisata Gunung Bromo</h1>
            <p>Malang Regency, East Java</p>
            <div class="gambardestinasi">
                <div class="gambarbesar">
                    <img src="images/gunungbromo1.jpg" alt="bromo1"> 
                </div>
                <div class="gambarkecil">
                    <img src="images/gambarbromo3.jpg" alt="bromo3">
                    <img src="images/gambarbromo2.jpg" alt="bromo2">
                    
                </div>
            </div>
            <a href="https://www.youtube.com" style="font-style: italic;">youtube.com</a>
            <h3 id="namaakun">Supardi Nasir</h3>
            <button type="button" id="follow">Follow</button>
            <div class="description">
                <p>
                    Gunung Bromo merupakan salah satu gunung dari lima gunung yang terdapat di komplek Pegunungan Tengger di laut pasir. Daya tarik gunung ini adalah merupakan gunung yang masih aktif dan dapat dengan mudah didaki/dikunjungi. Obyek wisata Gunung Bromo ini merupakan fenomena dan atraksi alami yang merupakan salah satu daya tarik pengunjung. Kekhasan gejala alam yang tidak ditemukan di tempat lain adalah adanya kawah di tengah kawah (creater in the creater) dengan hamparan laut pasir yang mengelilinginya.
                </p>
                <p>
                    Bila kita sampai di puncak maka tampak kawah Bromo yang menganga lebar dengan kepulan asap yang keluar dari dasarnya yang menandakan gunung ini masih aktif. Dari puncak inilah pengunjung dapat menikmati/menyaksikan kawah Bromo dengan kepulan-kepulan asapnya yang relatif tipis, serta ke arah belakang dapat menyaksikan keindahan panorama hamparan laut pasir dengan siluet alamnya yang mempesonakan.
                </p>
                <p>
                    Daya tarik lainnya, adalah bahwa gunung ini merupakan tempat bagi berlangsungnya acara puncak upacara ritual masyarakat Tengger (Kasada) yakni berupa pelemparan hasil bumi sebagai persembahan ke kawah Gunung Bromo. Upacara inilah yang menarik wisatawan untuk menyaksikan acara yang hanya berlangsung satu tahun sekali, pada tanggal 14 bulan ke sepuluh, Kalender Jawa melakukan upacara adat/keagamaan umat Hindu Tengger atau disebut juga Upacara Kesodo, upacara ini berpusat di sekeliling kawah Gunungapi Bromo.
                </p>
            </div>
        </div>
        <div class="kanan">
            <form action="">
                <h2>Set the number of tickets</h2>
                <div class="quantitybutton">
                    <button id="tombolquantitybuttonkiri" tabindex="-1"> -
                    </button>
                    <input id="inputangka" data-unify="QuantityEditor" role="spinbutton" type="text" value="1">
                    <button id="tombolquantitybuttonkanan" tabindex="+1"> +
                    </button>
                </div>
                <p>Subtotal :</p>
                <button type="submit" id="booking">Booking</button>
                <button type="submit" id="buynow">Buy Now</button>
            </form>
            <div class="komentar">
                <h2>Review </h2>
                <div class="bubblechat">
                    <div class="komen1">
                        <p style="font-weight: bold;">Yanti</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum magna nec velit dignissim dictum. Morbi nec arcu pretium risus malesuada porttitor vel eget ligula. Vestibulum placerat a elit ac tincidunt. Sed hendrerit felis et mi euismod ornare. Suspendisse ornare commodo nisi. Integer consequat fringilla nisl ac tristique. Curabitur pulvinar a neque ut blandit. Vivamus at turpis ut sem ultrices vestibulum eu at urna. Vestibulum consectetur, eros vitae laoreet dignissim, ante purus hendrerit eros, vulputate dapibus erat velit et lacus. Nullam ac dapibus lectus. Mauris vestibulum neque eu consectetur semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non dapibus sapien, eget auctor lectus. Suspendisse ut bibendum est. Cras eget felis mauris. Curabitur gravida non massa eget facilisis.</p>
                    </div>
                    <div class="komen2">
                        <p style="font-weight: bold;">Yanto</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum magna nec velit dignissim dictum. Morbi nec arcu pretium risus malesuada porttitor vel eget ligula. Vestibulum placerat a elit ac tincidunt. Sed hendrerit felis et mi euismod ornare. Suspendisse ornare commodo nisi. Integer consequat fringilla nisl ac tristique. Curabitur pulvinar a neque ut blandit. Vivamus at turpis ut sem ultrices vestibulum eu at urna. Vestibulum consectetur, eros vitae laoreet dignissim, ante purus hendrerit eros, vulputate dapibus erat velit et lacus. Nullam ac dapibus lectus. Mauris vestibulum neque eu consectetur semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec non dapibus sapien, eget auctor lectus. Suspendisse ut bibendum est. Cras eget felis mauris. Curabitur gravida non massa eget facilisis.</p>
                    </div>
                </div>
                <div id="inputkomen">
                    <textarea placeholder="Your review">
                    </textarea>    
                    <div>
                        <button type="submit" id="kirimkomen">Kirim</button>
                    </div>            
                </div>
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
    
</body>
</html>