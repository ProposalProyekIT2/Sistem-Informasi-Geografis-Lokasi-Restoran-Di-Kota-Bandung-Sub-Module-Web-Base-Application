-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2017 at 06:06 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliner_bdg`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`) VALUES
(1, 'Pagi'),
(2, 'Siang'),
(3, 'Malam');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `place_id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`place_id`, `name`) VALUES
(8, 'place_Dusun Bambu_01482176854348.jpg'),
(8, 'place_Dusun Bambu_11482176854367.jpg'),
(8, 'place_Dusun Bambu_21482176854402.jpg'),
(8, 'place_Dusun Bambu_31482176854421.jpg'),
(19, 'place_Warung Oke_01485260435918.jpg'),
(20, 'place_Kantin Orange_01485260591187.jpg'),
(21, 'place_Coto Makassar KPAD 28_01485261136995.jpg'),
(21, 'place_Coto Makassar KPAD 28_11485261137072.jpg'),
(21, 'place_Coto Makassar KPAD 28_21485261137102.jpg'),
(23, 'place_Kupat Tahu Gempol_01485351378810.jpg'),
(24, 'place_CUANKI SERAYU BANDUNG_01485351574326.jpg'),
(24, 'place_CUANKI SERAYU BANDUNG_11485351574349.jpg'),
(25, 'place_Bubur Ayam Gibbas (Ujung Berung)_01485351939582.jpg'),
(25, 'place_Bubur Ayam Gibbas (Ujung Berung)_11485351939608.jpg'),
(25, 'place_Bubur Ayam Gibbas (Ujung Berung)_21485351939622.jpg'),
(26, 'place_Bebek Ali Borromeus_01485352199042.jpg'),
(26, 'place_Bebek Ali Borromeus_11485352199135.jpg'),
(27, 'place_NASI GORENG BISTIK SAPI AA_01485352413632.jpg'),
(28, 'place_Cirreng Cipaganti_01485352886178.jpg'),
(28, 'place_Cirreng Cipaganti_11485352886205.jpg'),
(29, 'place_Awug Cibeunying_01485353224485.jpg'),
(29, 'place_Awug Cibeunying_11485353224510.jpg'),
(29, 'place_Awug Cibeunying_21485353224523.jpg'),
(30, 'place_Kue Balok Kang Didin_01485354246812.jpg'),
(30, 'place_Kue Balok Kang Didin_11485354246836.jpg'),
(31, 'place_Bajigur dan Bandrek Hj. Siti Maemunah_01485354467709.jpg'),
(31, 'place_Bajigur dan Bandrek Hj. Siti Maemunah_11485354467811.jpg'),
(32, 'place_Nasi Kalong_01485354904878.jpg'),
(32, 'place_Nasi Kalong_11485354904931.jpg'),
(35, 'place_Nasi Kuning Pungkur_01485355713699.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1481648497),
('m130524_201442_init', 1481648502);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(25) NOT NULL DEFAULT '-',
  `website` varchar(100) NOT NULL DEFAULT '-',
  `description` text NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `last_update` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `name`, `image`, `address`, `phone`, `website`, `description`, `lat`, `lng`, `last_update`) VALUES
(8, 'Dusun Bambu', 'place_Dusun Bambu.jpg', 'Jl. Kolonel Masturi Km. 11, Situ Lembang, West Bandung, West Java.', '022-8278-2020', 'www.dusunbambu.com', 'Dusun Bambu Family Leisure Park is an ecotourism with 7E concepts that represent seven aspects of life: Ecology (nature), Education, Economic, Ethnology (culture), Ethics, Esthetics, and Entertainment. By this 7E, Dusun Bambu Family Leisure Park becomes a park in the mountain feet that provide education and recreation facilities.', -6.789375, 107.5787534, 1482176913909),
(11, 'Ayam Goreng Pa Nanang', 'place_Ayam Goreng Pa Nanang.jpg', 'Jl.Raya Lembang no 275 (Jalan menuju pasar, posisinya sebelah kanan seberang alfamart)', '', '', 'Makanan: ayam goreng, ayam bakar, dll', -6.8127004, 107.6185804, 1485259562963),
(12, 'Karnivor Resto', 'place_Karnivor Resto clear.jpg', 'Jalan L. L. R.E. Martadinata, Cihapit, Kota Bandung', '', '', 'Karnivor', -6.9079088, 107.6240575, 1485261840463),
(13, 'Baso Rudal Anggrek clear', 'place_Baso Rudal Anggrek clear.jpg', 'Jalan Anggrek, Cihapit, Kota Bandung', '', '', 'â–¶ jl. Anggrek (yg dekat ke jl. Supratman, dari Taman Superhero lurus terus) â–¶ makanan: mie baso dan yamien â–¶ kisaran harga: 10ribu-17ribuan â–¶ tempat: warung tenda â–¶ jam buka: dari siang jam 11an sampai', -6.9099209, 107.63179, 1485259716807),
(14, 'Warong Sombar clear', 'place_Warong Sombar clear.jpg', 'Jl. Ciumbuleuit no.155 (Seberang UNPAR)', '', '', 'Makanan: Makanan Khas Manado, ada nasi Cakalang, nasi Roa, Bubur Manado, Ayam Woku, pisang roa, dll.', -6.8745486, 107.6045062, 1485259792405),
(15, 'Sumpit Mie clear', 'place_Sumpit Mie clear.jpg', 'Jl. Dipatiukur no. 26b ( Sebelah Bank BRI)', '', '', 'Sumpit Mie Dipatiukur', -6.897025, 107.6158465, 1485259844071),
(16, 'Mie Yamin Sakum clear', 'place_Mie Yamin Sakum clear.jpg', 'Jl. Kelenteng no. 24 (sebrang Kelenteng)', '', '', 'Jl. Kelenteng no. 24 (sebrang Kelenteng)', -6.9179067, 107.5931523, 1485259900881),
(17, 'Sate Ayu Imam Bonjol clear', 'place_Sate Ayu Imam Bonjol clear.jpg', 'Jalan Imam Bonjol, Lebakgede, Kota Bandung', '', '', 'Sate Ayu Imam Bonjol, Jalan Imam Bonjol, Lebakgede, Kota Bandung, Jawa Barat, Indonesia', -6.89427, 107.6153483, 1485259951963),
(19, 'Warung Oke', 'place_Warung Oke.jpg', 'Jl. Sarimanah Raya No.38, Sarijadi, Sukasari, Kota Bandung, Jawa Barat 40151', '0878-2547-7571', '', 'Warung Oke', -6.877999, 107.576865, 1485260471696),
(20, 'Kantin Orange', 'place_Kantin Orange.png', 'Jl. Sariasih no. 54, Sarijadi, Sukasari, Kota Bandung, Jawa Barat 40151, Indonesia', '', '', 'Kantin Orange adalah Kanti yang berada di Politeknik Pos Indonesia.', -6.8731953, 107.575976, 1485260485588),
(21, 'Coto Makassar KPAD 28', 'place_Coto Makassar KPAD 28.jpg', 'Jalan Gatot Raya No 28 H, KPAD, Gegerkalong, Sukasari, Kota Bandung', '0852-444-876', '', 'Kuliner Makassar wajib buru ketika mampir ke kota ini: Es Pisang Ijo, Pallubutung, Konro dan Coto.', -6.863641, 107.587937, 1485355955744),
(23, 'Kupat Tahu Gempol', 'place_Kupat Tahu Gempol.jpg', 'Jl. Gempol Kulon No. 53', '', '', 'Kupat Tahu Gempol bisa ditemui di Pasar Gempol, Jl. Gempol Kulon No. 53, Bandung, tak jauh dari Jalan Dago dan Jalan Banda.buka di pagi hari dari jam 05.30 sampai jam 10.00 WIB.', -6.903082, 107.615502, 1485351320024),
(24, 'CUANKI SERAYU BANDUNG', 'place_CUANKI SERAYU BANDUNG.jpg', 'Jalan Serayu No. 2, Bandung', '', '', 'Cuanki Serayu buka setiap hari pukul mulai 10.00 â€“ 18.00 wib', -6.9089284, 107.6258357, 1485351452971),
(25, 'Bubur Ayam Gibbas (Kebon Jati)', 'place_Bubur Ayam Gibbas (Ujung Berung).jpg', 'Jl. Kb. Jati No.187, Kb. Jeruk, Andir, Kota Bandung', '0812-2226-6656', '', 'Bubur Gibas yang disajikan dengan cakueh namun tanpa kerupuk ini berlokasi di Jalan Kebon Jati, tepatnya di seberang RS Kebonjati, Bandung dan dekat dengan objek wisata taman Gembok Cinta bandung. Buka setiap hari dan mulai pukul 17.00 wib sampai habis.', -6.9164562, 107.5941402, 1485351959476),
(26, 'Bebek Ali Borromeus', 'place_Bebek Ali Borromeus.jpg', 'Jalan Dipatiukur No.1, Lebakgede, Coblong, Lebakgede, Coblong, Kota Bandung', '', '', 'Bebek Borromeus ini mulai berjualan pukul 17.00 , tapi menjelang pukul 20.00', -6.898165, 107.613315, 1485352208954),
(27, 'NASI GORENG BISTIK SAPI AA', 'place_NASI GORENG BISTIK SAPI AA.jpg', 'Jalan Astana Anyar 264, Bandung', '0822-1694-0333', '', 'Nasi bistik AA berjualan pukul 17.30 sampai tengah malam atau sampai habis.', -6.9317535, 107.6018706, 1485352258665),
(28, 'Cirreng Cipaganti', 'place_Cirreng Cipaganti.jpg', 'Jalan Lamping, Pasteur, Kota Bandung', '(022) 4202680', '', 'Jalan Cipaganti (dekat SPBU), depan kantor pos, Bandung. Buka Mulai Pukul 14.00 - 21.00 WIB', -6.8874366, 107.6020637, 1485352908219),
(29, 'Awug Cibeunying', 'place_Awug Cibeunying.jpg', 'Jl. Jend. A. Yani No.361, Kacapiring, Cibeunying Kidul, Kota Bandung', '0813-2078-9755', '', 'Jalan Jenderal Ahmad Yani (depan kampus STT, samping apotek Cibeunying), Bandung. Buka jam 12;00 - 20;00 WIB', -6.9114986, 107.6376939, 1485353038729),
(30, 'Kue Balok Kang Didin', 'place_Kue Balok Kang Didin.jpg', 'Jl. Abdul Rahman Saleh No.52, Husen Sastranegara, Cicendo, Kota Bandung', '0812-2034-9939', '', 'Harga: Rp 1.500-Rp 2.000 || Jam buka: 17.00 WIb â€“ 02.00 Wib', -6.9074359, 107.5824671, 1485354014858),
(31, 'Bajigur dan Bandrek Hj. Siti Maemunah', 'place_Bajigur dan Bandrek Hj. Siti Maemunah.jpg', 'Jl. Cilaki Bandung', '', '', 'Kedai ini buka mulai jam 5 sore hingga tengah malam', -6.904041, 107.624553, 1485354294519),
(32, 'Nasi Kalong', 'place_Nasi Kalong.jpg', 'Jalan Letnan Laut Raden Eddy Martadinata No.102, Cihapit, Bandung Wetan, Kota Bandung', '0818-0999-1500', '', 'Buka Mulai Pukul 19.00 - 01.00 WIB || Untuk masalah harga nasi kalong cukup terjangkau dengan kisaran Rp. 15.000 â€“ Rp. 30.000', -6.9092666, 107.6250117, 1485354950068),
(34, 'Cafe Madtari', 'place_Cafe Madtari.jpg', 'Jl. Ranggagading No. 10, Tamansari, Bandung Wetan, Tamansari, Bandung Wetan, Kota Bandung', '0812-2359-8045', '', 'Buka Mulai Pukul 07.00 - 03.00 WIB', -6.902737, 107.6107789, 1485355363079),
(35, 'Nasi Kuning Pungkur', 'place_Nasi Kuning Pungkur.jpg', 'Jalan Pungkur 216, Ciateul, Regol, Kota Bandung', '(0622) 26212171', '', 'Buka Mulai Pukul 20.00 - 03.00 WIB', -6.9325122, 107.6143483, 1485355589437);

-- --------------------------------------------------------

--
-- Table structure for table `place_category`
--

CREATE TABLE `place_category` (
  `place_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_category`
--

INSERT INTO `place_category` (`place_id`, `cat_id`) VALUES
(8, 1),
(11, 2),
(11, 3),
(13, 1),
(13, 2),
(14, 2),
(15, 2),
(15, 3),
(16, 1),
(16, 2),
(17, 2),
(17, 3),
(19, 3),
(20, 1),
(20, 2),
(12, 1),
(12, 2),
(12, 3),
(23, 1),
(24, 1),
(24, 2),
(25, 3),
(26, 3),
(27, 3),
(28, 2),
(28, 3),
(29, 2),
(29, 3),
(30, 3),
(31, 3),
(32, 3),
(34, 1),
(34, 2),
(34, 3),
(35, 3),
(21, 1),
(21, 2),
(21, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'User', 'user', 'user@mail.com', 'ee11cbb19052e40b07aac0ca060c23ee'),
(2, 'Ayu Anggara', 'ayuanggara24', 'ayuanggaraspentwo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD KEY `fk_table_images` (`place_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`),
  ADD UNIQUE KEY `unique_name` (`name`);

--
-- Indexes for table `place_category`
--
ALTER TABLE `place_category`
  ADD KEY `fk_place_category1` (`place_id`),
  ADD KEY `fk_place_category2` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_username` (`username`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_table_images` FOREIGN KEY (`place_id`) REFERENCES `place` (`place_id`) ON DELETE CASCADE;

--
-- Constraints for table `place_category`
--
ALTER TABLE `place_category`
  ADD CONSTRAINT `fk_place_category_1` FOREIGN KEY (`place_id`) REFERENCES `place` (`place_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_place_category_2` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
