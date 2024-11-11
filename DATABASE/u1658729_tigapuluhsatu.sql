-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2024 at 04:30 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1658729_tigapuluhsatu`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(13, '2023-07-20-081917', 'App\\Database\\Migrations\\TbProduk', 'default', 'App', 1690513521, 1),
(14, '2023-07-20-084755', 'App\\Database\\Migrations\\TbSlider', 'default', 'App', 1690513521, 1),
(15, '2023-07-20-085024', 'App\\Database\\Migrations\\TbProfil', 'default', 'App', 1690513521, 1),
(16, '2023-07-28-035902', 'App\\Database\\Migrations\\TbAktivitas', 'default', 'App', 1690517128, 2),
(17, '2023-07-13-223336', 'App\\Database\\Migrations\\News', 'default', 'App', 1730270544, 3),
(18, '2023-07-13-233407', 'App\\Database\\Migrations\\AlterNews', 'default', 'App', 1730270544, 3),
(19, '2023-07-14-063155', 'App\\Database\\Migrations\\Users', 'default', 'App', 1730270544, 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT 'Tirsa P',
  `content` text DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'draft',
  `created_at` datetime DEFAULT current_timestamp(),
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_aktivitas`
--

CREATE TABLE `tb_aktivitas` (
  `id_aktivitas` int(5) UNSIGNED NOT NULL,
  `nama_aktivitas_in` varchar(200) NOT NULL,
  `nama_aktivitas_en` varchar(200) NOT NULL,
  `foto_aktivitas` varchar(100) NOT NULL,
  `deskripsi_aktivitas_in` text DEFAULT NULL,
  `deskripsi_aktivitas_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_aktivitas`
--

INSERT INTO `tb_aktivitas` (`id_aktivitas`, `nama_aktivitas_in`, `nama_aktivitas_en`, `foto_aktivitas`, `deskripsi_aktivitas_in`, `deskripsi_aktivitas_en`) VALUES
(2, 'Ekspor Cengkeh', 'Clove Export', 'img_sq_3.jpg', 'Perusahaan kami aktif dalam kegiatan ekspor cengkeh, memastikan kualitas yang unggul, dan mengelola logistik secara efisien guna memenuhi permintaan pasar internasional dengan tepat waktu.', 'Our company is active in clove export activities, ensures superior quality, and manages logistics efficiently to meet international market demands in a timely manner.'),
(6, 'Ekspor Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum_Ekspor Lorem Ipsum_27122023140619.jpg', '<p>lorem</p>', '<p>lorem</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(5) UNSIGNED NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `foto_artikel` varchar(255) NOT NULL,
  `deskripsi_artikel` longtext NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `foto_artikel`, `deskripsi_artikel`, `created_at`) VALUES
(1, 'contohhhhhhhhhh', 'img_sq_4.jpg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '2024-06-06 04:29:36'),
(2, 'contoh 22343274t2785925y2923', 'img_sq_8.jpg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '2024-06-06 04:29:36'),
(3, 'contoh 3234738643785692814', 'img_sq_8.jpg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '2024-06-06 04:29:36'),
(4, 'contoh 42734698538759252', 'img_sq_8.jpg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '2024-06-06 04:29:36'),
(5, 'contoh 53275629836598', 'img_sq_8.jpg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '2024-06-06 04:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(5) UNSIGNED NOT NULL,
  `nama_produk_in` varchar(200) NOT NULL,
  `nama_produk_en` varchar(200) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk_in` text DEFAULT NULL,
  `deskripsi_produk_en` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `nama_produk_in`, `nama_produk_en`, `foto_produk`, `deskripsi_produk_in`, `deskripsi_produk_en`) VALUES
(2, 'Cengkih', 'Cloves', 'img_sq_3.jpg', 'Cengkih atau cengkeh adalah kuncup bunga kering beraroma dari keluarga pohon Myrtaceae. Cengkih adalah tanaman asli Indonesia, banyak digunakan sebagai bumbu masakan pedas di negara-negara Eropa, dan sebagai bahan utama rokok kretek khas Indonesia.', 'Cloves or cloves are the fragrant dried flower buds of the Myrtaceae tree family. Cloves are native to Indonesia, widely used as a spice for spicy dishes in European countries, and as the main ingredient for Indonesian clove cigarettes.'),
(3, 'Pala', 'Nutmeg', 'img_sq_8.jpg', 'Pala merupakan tumbuhan berupa pohon yang berasal dari kepulauan Banda, Maluku. Akibat nilainya yang tinggi sebagai rempah-rempah, buah dan biji pala telah menjadi komoditas perdagangan yang penting sejak masa Romawi.', 'Nutmeg is a plant in the form of a tree originating from the Banda Islands, Maluku. Due to its high value as a spice, nutmeg fruit and seeds have been important trade commodities since Roman times.'),
(4, 'Jintan putih', 'Cumin', 'img_sq_4.jpg', 'Jintan Putih merupakan tumbuhan berbunga dari famili Apiaceae yang berasal dari daerah Laut Tengah bagian timur sampai India bagian timur.', 'Cumin is a flowering plant from the Apiaceae family originating from the eastern Mediterranean region to eastern India.'),
(7, 'Selada hidroponik', 'hydroponic lettuce', 'hydroponic lettuce_Selada hidroponik_09082024095002.jpg', '<p>Selada hidroponik adalah selada yang ditanam menggunakan metode hidroponik, yaitu sistem pertanian yang tidak memerlukan tanah. Sebagai gantinya, tanaman dibudidayakan dalam larutan nutrisi yang kaya akan mineral dan elemen penting yang disuplai langsung ke akar tanaman. Metode hidroponik memungkinkan kontrol yang lebih baik atas lingkungan tumbuh tanaman dan dapat meningkatkan hasil serta kualitas produk</p>', '<p>Hydroponic lettuce is lettuce grown using the hydroponic method, which is an agricultural system that does not require soil. Instead, plants are cultivated in a nutrient solution rich in essential minerals and trace elements that is supplied directly to the plant roots. Hydroponic methods allow better control over the plant\'s growing environment and can increase yields and product quality</p>'),
(8, 'Seledri hidroponik', 'hydroponic celery', 'hydroponic celery_Seledri hidroponik_09082024112545.jpg', '<p>shdk</p>', '<p>ksjf</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(5) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `logo_perusahaan` varchar(100) NOT NULL,
  `deskripsi_perusahaan_in` text DEFAULT NULL,
  `deskripsi_perusahaan_en` text DEFAULT NULL,
  `deskripsi_kontak_in` text DEFAULT NULL,
  `deskripsi_kontak_en` text DEFAULT NULL,
  `link_maps` text DEFAULT NULL,
  `link_whatsapp` text DEFAULT NULL,
  `favicon_website` varchar(100) NOT NULL,
  `title_website` varchar(100) NOT NULL,
  `foto_utama` varchar(100) NOT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `teks_footer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `username`, `password`, `nama_perusahaan`, `logo_perusahaan`, `deskripsi_perusahaan_in`, `deskripsi_perusahaan_en`, `deskripsi_kontak_in`, `deskripsi_kontak_en`, `link_maps`, `link_whatsapp`, `favicon_website`, `title_website`, `foto_utama`, `alamat`, `no_hp`, `email`, `teks_footer`) VALUES
(1, 'user', 'user', 'We Can Do', 'Logo_We-Can-Do_07082024031240.png', '<p><strong>Visi</strong></p>\r\n<p>Membangun lingkungan masyarakat di Kabupaten Banyuwangi yang secara aktif ramah dan mendukung penyandang disabilitas, serta berkomitmen untuk menciptakan masyarakat Indonesia yang inklusif, di mana setiap individu, tanpa memandang keterbatasan fisik atau mental, memiliki kesempatan yang setara dalam berpartisipasi dan menikmati semua aspek kehidupan sosial, ekonomi, dan budaya.</p>\r\n<p><strong>Misi&nbsp;</strong></p>\r\n<ul>\r\n<li>Penguatan penyandang disabilitas</li>\r\n<li>Pemberdayaan penyandang disabilitas.</li>\r\n<li>Pembekalan ketrampilan sesuai kemampuan penyandang disabilitas .</li>\r\n<li>Menciptakan msyarakat yang inklusif.</li>\r\n<li>Pembekalan marketing</li>\r\n</ul>', '<p>a trusted company specializing in the trading of premium Indonesian spices. With a strong emphasis on quality and a vast array of exquisite flavors, we are the go-to destination for importers seeking to source high-quality Indonesian spices for big trading ventures. At Indonesia Spices (PT NAKAM Foods Indonesia), we pride ourselves on our extensive selection of Indonesian spices, including cinnamon, cloves, nutmeg, cardamom, and more. These aromatic treasures are sourced directly from trusted local farmers and growers who have been cultivating these spices for generations. Our commitment to authenticity and sustainability ensures that our products are of the highest quality, delivering the true essence of Indonesian cuisine. We understand the unique demands of big trading, and our dedicated team is well-versed in catering to the needs of importers.</p>', '<p>Dusun Krajan,Kedungrejo, Kec. Muncar, Kabupaten Banyuwangi, Jawa Timur</p>', '<p>Dusun Krajan, Kedungrejo, Muncar, Banyuwangi Regency, East Java</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d307.77994267215985!2d114.31946578970995!3d-8.435226387640903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1723428154018!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://wa.me/+6285236698472', 'Favicon_Koceng-Mera-Woodcraft_07082024014156.png', 'Kita bisa, Kita Setara, Kita Berkarya', '1722998149_dcd13a8dd1bc00c09b4b.jpg', '<p>Jl. Brawijaya</p>', '+62 85236698472', 'bersamakitabisa24@gmail.com', 'All Rights Reserved. Designed with love by ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id_slider` int(5) UNSIGNED NOT NULL,
  `file_foto_slider` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id_slider`, `file_foto_slider`) VALUES
(1, 'We-Can-Do_07082024094725.jpg'),
(7, 'We-Can-Do_07082024094426.png'),
(8, 'We-Can-Do_07082024094540.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  ADD PRIMARY KEY (`id_aktivitas`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_aktivitas`
--
ALTER TABLE `tb_aktivitas`
  MODIFY `id_aktivitas` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id_slider` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
