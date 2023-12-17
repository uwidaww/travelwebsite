-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 03:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel-buddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact-us`
--

CREATE TABLE `contact-us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact-us`
--

INSERT INTO `contact-us` (`id`, `name`, `email`, `message`) VALUES
(6, 'Melia', '22523220@students.uii.ac.id', 'halo guys'),
(7, 'Melia', '22523220@students.uii.ac.id', 'kalo udah liat ini di database'),
(8, 'Melia', 'putri.isnandar@gmail.com', 'coba dibikin buat input2an yang lain ya'),
(9, 'Melia', 'halo@gmail.com', 'bisa coba2 diganti-ganti'),
(10, 'Melia', '22523220@students.uii.ac.id', 'buat nambahinnya kalian bisa liat di file add.php'),
(11, 'Melia', 'agaashee@gmail.com', 'tinggal disesuaiin aja sama kebutuhan form nya'),
(12, 'Melia', 'agaashee@gmail.com', 'test'),
(13, 'melia lagi test', 'halohalo@gmail.com', 'lagi test yang ada di privacy policy'),
(14, 'melia lagi test', 'lagi@gmail.com', 'test lagi ya'),
(15, 'halo halo', '22523220@students.uii.ac.id', 'test1'),
(16, 'halo halo', 'agaashee@gmail.com', 'test'),
(17, 'halo halo', 'test@gmail.com', 'hai');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `destinationName` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `destinationLink` varchar(200) NOT NULL,
  `photoUpload` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `destinationName`, `provinsi`, `kota`, `description`, `destinationLink`, `photoUpload`) VALUES
(1, 'Gunung Bromo', 'Jawa Timur', 'Batu', 'Gunung Bromo, sebuah ikon alam di Indonesia, menyuguhkan pengalaman wisata yang menakjubkan. Terletak di Taman Nasional Bromo Tengger Semeru, gunung berapi ini menampilkan pemandangan luar biasa dengan kawah aktif yang memancarkan asap putih. Sunrise di Bukit Penanjakan merupakan momen yang sangat dicari, di mana langit berubah warna, menyinari lembah dan kawah Bromo dengan keindahan dramatis.\\r\\n\\r\\nPerjalanan menuju Gunung Bromo melibatkan petualangan menyusuri lautan pasir dan tangga menuju bibir kawah. Wisatawan juga dapat menyewa kuda atau naik jeep untuk menjelajahi daerah sekitarnya. Suasana mistis dan keindahan alam yang menakjubkan menjadikan Gunung Bromo destinasi favorit bagi pecinta alam dan fotografer. Dengan pemandangan pegunungan yang megah, asap gunung berapi, dan budaya Tengger yang unik, Gunung Bromo menciptakan pengalaman wisata tak terlupakan di tengah keindahan alam Indonesia.', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjT5NLxo_uCAxXc2DgGHdVgAmAQFnoECBIQAQ&url=https%3A%2F%2Fwww.google.com%2F&usg=AOvVaw1xDfJh-YduXzT4-Mrql0P3&opi=89978449', 'https://assets-a1.kompasiana.com/items/album/2023/06/12/wisata-gunung-bromo-traveloka-xperience-1-6486079208a8b56581621be2.jpg'),
(2, 'Candi Borobudur', 'Jawa Tengah', 'Magelang', '\r\nCandi Borobudur, sebuah keajaiban arsitektur yang menghiasi dataran tinggi Jawa Tengah, Indonesia, merupakan situs bersejarah yang memikat hati para pengunjung. Dibangun pada abad ke-9 menggunakan batu andesit, candi ini merupakan perpaduan harmonis antara seni, keagamaan, dan keindahan alam.\r\n\r\nStruktur monumentalnya terdiri dari sembilan teras bertingkat dengan 72 stupa berlapis, yang dihiasi dengan relief-detil menggambarkan kisah-kisah kehidupan Buddha. Candi Borobudur bukan hanya suatu situs bersejarah, namun juga suatu pusat kearifan spiritual yang mendalam.\r\n\r\nDengan melangkah ke atasnya, pengunjung akan disajikan panorama alam yang menakjubkan, melihat indahnya dataran Jawa Tengah, terutama saat matahari terbit atau terbenam. Sebagai Situs Warisan Dunia UNESCO, Candi Borobudur mendapatkan penghargaan tak hanya sebagai simbol budaya Indonesia tetapi juga sebagai destinasi wisata spiritual dan sejarah yang memikat dunia.', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjT5NLxo_uCAxXc2DgGHdVgAmAQFnoECBIQAQ&url=https%3A%2F%2Fwww.google.com%2F&usg=AOvVaw1xDfJh-YduXzT4-Mrql0P3&opi=89978449', 'https://res.klook.com/image/upload/c_fill,w_750,h_500/q_80/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/wmpt0f9odhlk3otzg2qo.jpg'),
(4, 'Kawah Putih Ciwidey', 'Jawa Timur', 'Batu', 'Kawah Putih Ciwidey, permata alam di ketinggian Jawa Barat, Indonesia, mempesona dengan kecantikan alam yang tak terlupakan. Diapit oleh hutan hijau, kawah vulkanik ini menampilkan danau berwarna putih kehijauan yang serba indah. Airnya yang tenang mencerminkan langit biru dan awan putih, menciptakan pemandangan alam yang menenangkan.\\r\\n\\r\\nKeunikan warna danau berasal dari kandungan belerang dan mineral lainnya. Jalur setapak yang melingkari kawah memungkinkan pengunjung menikmati panorama spektakuler dan merasakan kesegaran udara pegunungan. Kawah Putih Ciwidey tidak hanya menjadi daya tarik alam yang luar biasa, tetapi juga menyajikan pengalaman damai di tengah keindahan alam yang memukau.', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjT5NLxo_uCAxXc2DgGHdVgAmAQFnoECBIQAQ&url=https%3A%2F%2Fwww.google.com%2F&usg=AOvVaw1xDfJh-YduXzT4-Mrql0P3&opi=89978449', 'https://asset-2.tstatic.net/travel/foto/bank/images/kawah-putih-ciwidey-bandung.jpg'),
(5, 'Pantai Kartini', 'Jawa Tengah', 'Jepara', '\r\nPantai Kartini, sebuah oase pantai yang tenang dan indah di Kota Jepara, Jawa Tengah, mengundang pengunjung untuk merasakan keindahan alam dan sejarah. Dinamai sesuai dengan pahlawan nasional Raden Ajeng Kartini, pantai ini menawarkan pasir putih yang lembut, air laut yang jernih, dan pemandangan laut yang memukau.\r\n\r\nDikelilingi oleh kehidupan nelayan lokal dan perahu tradisional, Pantai Kartini bukan hanya destinasi liburan yang menenangkan, tetapi juga menghormati sejarah dan semangat perjuangan Kartini. Dengan suasana pantai yang damai, tempat ini menjadi tempat ideal untuk bersantai, menikmati matahari terbenam, dan mengenang keberanian perempuan Indonesia.', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjT5NLxo_uCAxXc2DgGHdVgAmAQFnoECBIQAQ&url=https%3A%2F%2Fwww.google.com%2F&usg=AOvVaw1xDfJh-YduXzT4-Mrql0P3&opi=89978449', 'https://camerawisata.com/wp-content/uploads/2018/03/Pantai-Kartini-5.png'),
(8, 'Gunung Bromo', 'Jawa Timur', 'Probolinggo', 'Gunung Bromo, sebuah ikon alam di Indonesia, menyuguhkan pengalaman wisata yang menakjubkan. Terletak di Taman Nasional Bromo Tengger Semeru, gunung berapi ini menampilkan pemandangan luar biasa dengan kawah aktif yang memancarkan asap putih. Sunrise di Bukit Penanjakan merupakan momen yang sangat dicari, di mana langit berubah warna, menyinari lembah dan kawah Bromo dengan keindahan dramatis.\r\n\r\nPerjalanan menuju Gunung Bromo melibatkan petualangan menyusuri lautan pasir dan tangga menuju bibir kawah. Wisatawan juga dapat menyewa kuda atau naik jeep untuk menjelajahi daerah sekitarnya. Suasana mistis dan keindahan alam yang menakjubkan menjadikan Gunung Bromo destinasi favorit bagi pecinta alam dan fotografer. Dengan pemandangan pegunungan yang megah, asap gunung berapi, dan budaya Tengger yang unik, Gunung Bromo menciptakan pengalaman wisata tak terlupakan di tengah keindahan alam Indonesia.', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjT5NLxo_uCAxXc2DgGHdVgAmAQFnoECBIQAQ&url=https%3A%2F%2Fwww.google.com%2F&usg=AOvVaw1xDfJh-YduXzT4-Mrql0P3&opi=89978449', 'https://assets-a1.kompasiana.com/items/album/2023/06/12/wisata-gunung-bromo-traveloka-xperience-1-6486079208a8b56581621be2.jpg'),
(9, 'Candi Borobudur', 'Jawa Tengah', 'Magelang', '\r\nCandi Borobudur, sebuah keajaiban arsitektur yang menghiasi dataran tinggi Jawa Tengah, Indonesia, merupakan situs bersejarah yang memikat hati para pengunjung. Dibangun pada abad ke-9 menggunakan batu andesit, candi ini merupakan perpaduan harmonis antara seni, keagamaan, dan keindahan alam.\r\n\r\nStruktur monumentalnya terdiri dari sembilan teras bertingkat dengan 72 stupa berlapis, yang dihiasi dengan relief-detil menggambarkan kisah-kisah kehidupan Buddha. Candi Borobudur bukan hanya suatu situs bersejarah, namun juga suatu pusat kearifan spiritual yang mendalam.\r\n\r\nDengan melangkah ke atasnya, pengunjung akan disajikan panorama alam yang menakjubkan, melihat indahnya dataran Jawa Tengah, terutama saat matahari terbit atau terbenam. Sebagai Situs Warisan Dunia UNESCO, Candi Borobudur mendapatkan penghargaan tak hanya sebagai simbol budaya Indonesia tetapi juga sebagai destinasi wisata spiritual dan sejarah yang memikat dunia.', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjT5NLxo_uCAxXc2DgGHdVgAmAQFnoECBIQAQ&url=https%3A%2F%2Fwww.google.com%2F&usg=AOvVaw1xDfJh-YduXzT4-Mrql0P3&opi=89978449', 'https://res.klook.com/image/upload/c_fill,w_750,h_500/q_80/w_80,x_15,y_15,g_south_west,l_Klook_water_br_trans_yhcmh3/activities/wmpt0f9odhlk3otzg2qo.jpg'),
(10, 'Kawah Putih Ciwidey', 'Jawa Barat', 'Bandung', 'Kawah Putih Ciwidey, permata alam di ketinggian Jawa Barat, Indonesia, mempesona dengan kecantikan alam yang tak terlupakan. Diapit oleh hutan hijau, kawah vulkanik ini menampilkan danau berwarna putih kehijauan yang serba indah. Airnya yang tenang mencerminkan langit biru dan awan putih, menciptakan pemandangan alam yang menenangkan.\r\n\r\nKeunikan warna danau berasal dari kandungan belerang dan mineral lainnya. Jalur setapak yang melingkari kawah memungkinkan pengunjung menikmati panorama spektakuler dan merasakan kesegaran udara pegunungan. Kawah Putih Ciwidey tidak hanya menjadi daya tarik alam yang luar biasa, tetapi juga menyajikan pengalaman damai di tengah keindahan alam yang memukau.', 'https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&ved=2ahUKEwjT5NLxo_uCAxXc2DgGHdVgAmAQFnoECBIQAQ&url=https%3A%2F%2Fwww.google.com%2F&usg=AOvVaw1xDfJh-YduXzT4-Mrql0P3&opi=89978449', 'https://asset-2.tstatic.net/travel/foto/bank/images/kawah-putih-ciwidey-bandung.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signed-user`
--

CREATE TABLE `signed-user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signed-user`
--

INSERT INTO `signed-user` (`id`, `name`, `username`, `password`) VALUES
(11, 'Melia', 'agaashee@gmail.com', '202cb962ac59075b964b07152d234b70'),
(12, 'Melia2', 'putri.meliaa04@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(13, 'aaa', 'melia@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'meliaputri', 'agaashee@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(15, 'melia123', 'putri.isnandar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(16, 'widya1', 'widya@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(17, 'asdf', 'asdf@gmail.com', 'asdf'),
(18, 'meliaa', 'melia@gmail.com', '12345'),
(19, 'widya', 'widya@gmail.com', '12345'),
(20, 'widya2', 'widya@gmail.com', '12345'),
(21, 'widya', 'widya@gmail.com', 'widya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact-us`
--
ALTER TABLE `contact-us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signed-user`
--
ALTER TABLE `signed-user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact-us`
--
ALTER TABLE `contact-us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `signed-user`
--
ALTER TABLE `signed-user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
