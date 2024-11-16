/*
 Navicat Premium Data Transfer

 Source Server         : MySql
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : 31

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 16/11/2024 13:09:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `group` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namespace` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (13, '2023-07-20-081917', 'App\\Database\\Migrations\\TbProduk', 'default', 'App', 1690513521, 1);
INSERT INTO `migrations` VALUES (14, '2023-07-20-084755', 'App\\Database\\Migrations\\TbSlider', 'default', 'App', 1690513521, 1);
INSERT INTO `migrations` VALUES (15, '2023-07-20-085024', 'App\\Database\\Migrations\\TbProfil', 'default', 'App', 1690513521, 1);
INSERT INTO `migrations` VALUES (16, '2023-07-28-035902', 'App\\Database\\Migrations\\TbAktivitas', 'default', 'App', 1690517128, 2);
INSERT INTO `migrations` VALUES (17, '2023-07-13-223336', 'App\\Database\\Migrations\\News', 'default', 'App', 1730270544, 3);
INSERT INTO `migrations` VALUES (18, '2023-07-13-233407', 'App\\Database\\Migrations\\AlterNews', 'default', 'App', 1730270544, 3);
INSERT INTO `migrations` VALUES (19, '2023-07-14-063155', 'App\\Database\\Migrations\\Users', 'default', 'App', 1730270544, 3);

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Tirsa P',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'draft',
  `created_at` datetime NULL DEFAULT current_timestamp,
  `slug` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `slug`(`slug` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of news
-- ----------------------------

-- ----------------------------
-- Table structure for tb_aktivitas
-- ----------------------------
DROP TABLE IF EXISTS `tb_aktivitas`;
CREATE TABLE `tb_aktivitas`  (
  `id_aktivitas` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_aktivitas_in` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nama_aktivitas_en` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `foto_aktivitas` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `deskripsi_aktivitas_in` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `deskripsi_aktivitas_en` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `slug_in` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `slug_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `meta_title_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `meta_description_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `meta_title_en` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `meta_description_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_aktivitas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_aktivitas
-- ----------------------------
INSERT INTO `tb_aktivitas` VALUES (2, 'Ekspor Cengkeh', 'Clove Export', 'img_sq_3.jpg', '<p>Perusahaan kami aktif dalam kegiatan ekspor cengkeh, memastikan kualitas yang unggul, dan mengelola logistik secara efisien guna memenuhi permintaan pasar internasional dengan tepat waktu.</p>', '<p>Our company is active in clove export activities, ensures superior quality, and manages logistics efficiently to meet international market demands in a timely manner.</p>', 'ekspor-cengkeh', 'clove-export', 'Ekspor Cengkeh', 'Perusahaan kami aktif dalam kegiatan ekspor cengkeh, memastikan kualitas yang unggul, dan mengelola logistik secara efisien guna memenuhi permintaan pasar internasional dengan tepat waktu.', 'Clove Export', 'Our company is active in clove export activities, ensures superior quality, and manages logistics efficiently to meet international market demands in a timely manner.');
INSERT INTO `tb_aktivitas` VALUES (6, 'Ekspor Pala', 'Nutmeg Export', 'Lorem Ipsum_Ekspor Lorem Ipsum_27122023140619.jpg', '<p>Perusahaan kami aktif dalam kegiatan ekspor Pala, memastikan kualitas yang unggul, dan mengelola logistik secara efisien guna memenuhi permintaan pasar internasional dengan tepat waktu.</p>', '<p>Our company is active in Nutmeg&nbsp;export activities, ensures superior quality, and manages logistics efficiently to meet international market demands in a timely manner.</p>', 'ekspor-pala', 'nutmeg-export', 'Ekspor Pala', 'Perusahaan kami aktif dalam kegiatan ekspor Pala, memastikan kualitas yang unggul, dan mengelola logistik secara efisien guna memenuhi permintaan pasar internasional dengan tepat waktu.', 'Nutmeg Export', 'Our company is active in Nutmeg export activities, ensures superior quality, and manages logistics efficiently to meet international market demands in a timely manner.');

-- ----------------------------
-- Table structure for tb_artikel
-- ----------------------------
DROP TABLE IF EXISTS `tb_artikel`;
CREATE TABLE `tb_artikel`  (
  `id_artikel` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `judul_artikel` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `judul_artikel_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto_artikel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_artikel` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_artikel_en` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NULL DEFAULT current_timestamp,
  `slug_in` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `slug_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `meta_title_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `meta_description_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `meta_title_en` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `meta_description_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_artikel`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_artikel
-- ----------------------------
INSERT INTO `tb_artikel` VALUES (1, 'Kita Bisa', 'We Can Do ', '1731480313_5eb268eb306da6abe6d1.jpg', '<p>Situjuah, sebuah desa yang teduh di tengah perbukitan Sumatera Barat, memancarkan keindahan alamnya dan kearifan lokal yang kental. Terletak di Kabupaten Lima Puluh Kota, desa ini menawarkan pesona alam yang memikat dan warisan budaya yang menjadi bagian integral dari kehidupan masyarakat Minangkabau. Keindahan Alam Situjuah Desa ini dikelilingi oleh perbukitan yang hijau, sawah-sawah terasering yang indah, dan sungai-sungai yang mengalir dengan tenang.</p>', '<p>At We Can Do, we are dedicated to providing the best solutions for every challenge your business faces. With years of experience and a skilled professional team, we can handle various projects and deliver optimal results. Whatever your needs, we have the expertise to make it happen.</p>', '2024-06-06 04:29:36', 'kita-bisa', 'we-can-do-', 'Kita Bisa', 'Di We Can Do, kami berkomitmen untuk memberikan solusi terbaik bagi setiap tantangan yang dihadapi bisnis Anda. Dengan pengalaman bertahun-tahun dan tim profesional yang handal, kami dapat menangani berbagai proyek dengan hasil yang optimal. Apapun jenis ', 'We Can Do  ', 'At We Can Do, we are dedicated to providing the best solutions for every challenge your business faces. With years of experience and a skilled professional team, we can handle various projects and deliver optimal results. Whatever your needs, we have the ');
INSERT INTO `tb_artikel` VALUES (6, 'Bisakah Kita', 'Can We', 'Bisakah-Kita_13112024064126.jpg', '<p>\"Bisakah kita?\" adalah pertanyaan yang sering muncul dalam setiap perjalanan hidup, menggambarkan keraguan atau keinginan untuk mencapai sesuatu yang lebih besar. Kita sering bertanya-tanya apakah kita cukup mampu menghadapi tantangan, meraih impian, atau mengatasi hambatan yang ada.</p>\r\n<p>Jawabannya adalah,&nbsp;<em>ya, kita bisa</em>, asalkan kita memiliki keyakinan, tekad, dan kemauan untuk terus berusaha. Setiap langkah kecil yang kita ambil, meski penuh kesulitan, bisa membawa kita lebih dekat pada tujuan. Yang terpenting, kita harus percaya pada diri sendiri, terus belajar dari kegagalan, dan tidak mudah menyerah.</p>\r\n<p>Bahkan di saat terasa mustahil, kekuatan untuk mengatasi rintangan ada dalam diri kita. Pertanyaannya bukanlah \"bisakah kita?\" tetapi,&nbsp;<em>\"apakah kita mau berusaha?\"</em></p>', '<p>\"Can we?\" is a question that often arises in every journey of life, describing doubt or desire to achieve something greater. We often wonder if we are capable enough to face a challenge, achieve a dream, or overcome an obstacle.</p>\r\n<p>The answer is, yes, we can, as long as we have faith, determination, and the will to keep trying. Every small step we take, even when it is difficult, can bring us closer to our goal. Most importantly, we must believe in ourselves, continue to learn from our failures, and never give up easily.</p>\r\n<p>Even when it seems impossible, the power to overcome obstacles is within us. The question is not \"can we?\" but, \"are we willing to try?\"</p>', '2024-11-13 13:41:26', 'bisakah-kita', 'can-we', 'Bisakah Kita', '\"Bisakah kita?\" adalah pertanyaan yang sering muncul dalam setiap perjalanan hidup, menggambarkan keraguan atau keinginan untuk mencapai sesuatu yang lebih besar. Kita sering bertanya-tanya apakah kita cukup mampu menghadapi tantangan, meraih impian, atau', 'Can We', '\"Can we?\" is a question that often arises in every journey of life, describing doubt or desire to achieve something greater. We often wonder if we are capable enough to face a challenge, achieve a dream, or overcome an obstacle.  The answer is, yes, we ca');

-- ----------------------------
-- Table structure for tb_meta
-- ----------------------------
DROP TABLE IF EXISTS `tb_meta`;
CREATE TABLE `tb_meta`  (
  `id_seo` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_halaman` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `meta_title_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `meta_description_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `meta_title_en` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `meta_description_en` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_seo`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_meta
-- ----------------------------
INSERT INTO `tb_meta` VALUES (1, 'Beranda', 'Beranda | We.Can.Do', 'Temukan informasi lengkap tentang We.Can.Do dan layanan unggulan kami di halaman Beranda.', 'Home | We.Can.Do', 'Discover complete information about We.Can.Do and our top services on the Home page.');
INSERT INTO `tb_meta` VALUES (2, 'Tentang Kami', 'Tentang Kami | We.Can.Do', 'Pelajari lebih lanjut tentang sejarah, visi, misi, dan nilai-nilai We.Can.Do di halaman Tentang Kami', 'About Us | We.Can.Do', ' Learn more about the history, vision, mission, and values of We.Can.Do on the About Us page');
INSERT INTO `tb_meta` VALUES (3, 'Artikel', 'Artikel | We.Can.Do', ' Ikuti artikel dan berita terbaru dari We.Can.Do di halaman Blog kami.', 'Article | We.Can.Do', 'Follow the latest articles and news from We.Can.Do on our Blog page.');
INSERT INTO `tb_meta` VALUES (4, 'Produk', 'Produk | We.Can.Do', 'Jelajahi berbagai Produk  yang disediakan oleh We.Can.Do ', 'Products | We.Can.Do', 'Explore various products provided by We.Can.Do');
INSERT INTO `tb_meta` VALUES (5, 'Aktivitas', 'Aktivitas | We.Can.Do', 'Lihat daftar klien kami dan studi kasus tentang bagaimana kami telah membantu mereka mencapai kesuksesan', 'Activities | We.Can.Do', 'View our client list and case studies on how we have helped them achieve success.');
INSERT INTO `tb_meta` VALUES (6, 'Kontak', 'Kontak | We.Can.Do', 'Hubungi tim We.Can.Do untuk pertanyaan lebih lanjut atau permintaan layanan di halaman Kontak.', 'Contact | We.Can.Do', 'Contact the We.Can.Do team for further inquiries or service requests on the Contact page.');

-- ----------------------------
-- Table structure for tb_produk
-- ----------------------------
DROP TABLE IF EXISTS `tb_produk`;
CREATE TABLE `tb_produk`  (
  `id_produk` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_produk_in` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nama_produk_en` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `foto_produk` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `deskripsi_produk_in` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `deskripsi_produk_en` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `slug_in` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `slug_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `meta_title_id` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `meta_description_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `meta_title_en` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `meta_description_en` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_produk`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_produk
-- ----------------------------
INSERT INTO `tb_produk` VALUES (2, 'Cengkih', 'Cloves', 'img_sq_3.jpg', '<p>Cengkih atau cengkeh adalah kuncup bunga kering beraroma dari keluarga pohon Myrtaceae. Cengkih adalah tanaman asli Indonesia, banyak digunakan sebagai bumbu masakan pedas di negara-negara Eropa, dan sebagai bahan utama rokok kretek khas Indonesia.</p>', '<p>Cloves or cloves are the fragrant dried flower buds of the Myrtaceae tree family. Cloves are native to Indonesia, widely used as a spice for spicy dishes in European countries, and as the main ingredient for Indonesian clove cigarettes.</p>', 'cengkih', 'cloves', 'Cengkih', 'Cengkih atau cengkeh adalah kuncup bunga kering beraroma dari keluarga pohon Myrtaceae. Cengkih adalah tanaman asli Indonesia, banyak digunakan sebagai bumbu masakan pedas di negara-negara Eropa, dan sebagai bahan utama rokok kretek khas Indonesia.', 'Cloves', 'Cloves or cloves are the fragrant dried flower buds of the Myrtaceae tree family. Cloves are native to Indonesia, widely used as a spice for spicy dishes in European countries, and as the main ingredient for Indonesian clove cigarettes.');
INSERT INTO `tb_produk` VALUES (3, 'Pala', 'Nutmeg', 'img_sq_3.jpg', '<p>Pala merupakan tumbuhan berupa pohon yang berasal dari kepulauan Banda, Maluku. Akibat nilainya yang tinggi sebagai rempah-rempah, buah dan biji pala telah menjadi komoditas perdagangan yang penting sejak masa Romawi.</p>', '<p>Nutmeg is a plant in the form of a tree originating from the Banda Islands, Maluku. Due to its high value as a spice, nutmeg fruit and seeds have been important trade commodities since Roman times.</p>', 'pala', 'nutmeg', 'Pala', 'Pala merupakan tumbuhan berupa pohon yang berasal dari kepulauan Banda, Maluku. Akibat nilainya yang tinggi sebagai rempah-rempah, buah dan biji pala telah menjadi komoditas perdagangan yang penting sejak masa Romawi.', 'Nutmeg', 'Nutmeg is a plant in the form of a tree originating from the Banda Islands, Maluku. Due to its high value as a spice, nutmeg fruit and seeds have been important trade commodities since Roman times.');
INSERT INTO `tb_produk` VALUES (4, 'Jintan putih', 'Cumin', 'Cumin_Jintan-putih_13112024063333.jpg', '<p>Jintan Putih merupakan tumbuhan berbunga dari famili Apiaceae yang berasal dari daerah Laut Tengah bagian timur sampai India bagian timur.</p>', '<p>Cumin is a flowering plant from the Apiaceae family originating from the eastern Mediterranean region to eastern India.</p>', 'jintan-putih', 'cumin', 'Jintan putih', 'Jintan Putih merupakan tumbuhan berbunga dari famili Apiaceae yang berasal dari daerah Laut Tengah bagian timur sampai India bagian timur.', 'Cumin', 'Cumin is a flowering plant from the Apiaceae family originating from the eastern Mediterranean region to eastern India.');
INSERT INTO `tb_produk` VALUES (7, 'Selada hidroponik', 'hydroponic lettuce', 'hydroponic lettuce_Selada hidroponik_09082024095002.jpg', '<p>Selada hidroponik adalah selada yang ditanam menggunakan metode hidroponik, yaitu sistem pertanian yang tidak memerlukan tanah. Sebagai gantinya, tanaman dibudidayakan dalam larutan nutrisi yang kaya akan mineral dan elemen penting yang disuplai langsung ke akar tanaman. Metode hidroponik memungkinkan kontrol yang lebih baik atas lingkungan tumbuh tanaman dan dapat meningkatkan hasil serta kualitas produk</p>', '<p>Hydroponic lettuce is lettuce grown using the hydroponic method, which is an agricultural system that does not require soil. Instead, plants are cultivated in a nutrient solution rich in essential minerals and trace elements that is supplied directly to the plant roots. Hydroponic methods allow better control over the plant\'s growing environment and can increase yields and product quality</p>', 'selada-hidroponik', 'hydroponic-lettuce', 'Selada hidroponik', 'Selada hidroponik adalah selada yang ditanam menggunakan metode hidroponik, yaitu sistem pertanian yang tidak memerlukan tanah. Sebagai gantinya, tanaman dibudidayakan dalam larutan nutrisi yang kaya akan mineral dan elemen penting yang disuplai langsung ', 'hydroponic lettuce', 'Hydroponic lettuce is lettuce grown using the hydroponic method, which is an agricultural system that does not require soil. Instead, plants are cultivated in a nutrient solution rich in essential minerals and trace elements that is supplied directly to t');
INSERT INTO `tb_produk` VALUES (8, 'Seledri hidroponik', 'hydroponic celery', 'hydroponic celery_Seledri hidroponik_09082024112545.jpg', '<p>Seledri adalah sayuran daun dan tumbuhan obat yang biasa digunakan sebagai bumbu masakan. Beberapa negara termasuk Jepang, Cina, dan Korea mempergunakan bagian tangkai daun sebagai bahan makanan</p>', '<p>Celery is a leafy vegetable and medicinal plant commonly used as a cooking spice. Several countries including Japan, China, and Korea use the leaf stalks as a food ingredient.</p>', 'seledri-hidroponik', 'hydroponic-celery', 'Seledri hidroponik', 'Seledri adalah sayuran daun dan tumbuhan obat yang biasa digunakan sebagai bumbu masakan. Beberapa negara termasuk Jepang, Cina, dan Korea mempergunakan bagian tangkai daun sebagai bahan makanan', 'hydroponic celery', 'Celery is a leafy vegetable and medicinal plant commonly used as a cooking spice. Several countries including Japan, China, and Korea use the leaf stalks as a food ingredient.');

-- ----------------------------
-- Table structure for tb_profil
-- ----------------------------
DROP TABLE IF EXISTS `tb_profil`;
CREATE TABLE `tb_profil`  (
  `id_profil` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nama_perusahaan` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `logo_perusahaan` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `deskripsi_perusahaan_in` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `deskripsi_perusahaan_en` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `deskripsi_kontak_in` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `deskripsi_kontak_en` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `link_maps` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `link_whatsapp` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `favicon_website` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `title_website` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `foto_utama` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `alamat` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `no_hp` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `teks_footer` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_profil`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_profil
-- ----------------------------
INSERT INTO `tb_profil` VALUES (1, 'user', 'user', 'We Can Do', 'Logo_We-Can-Do_07082024031240.png', '<p>Kami adalah organisasi yang berkomitmen membangun masyarakat inklusif di Kabupaten Banyuwangi, di mana penyandang disabilitas memiliki kesempatan yang setara untuk berpartisipasi dalam segala aspek kehidupan. Fokus kami adalah memberdayakan penyandang disabilitas dengan menyediakan pelatihan keterampilan dan dukungan sosial, serta menciptakan lingkungan yang ramah dan mendukung mereka dalam kehidupan sosial, ekonomi, dan budaya.</p>', '<p>We are an organization committed to building an inclusive society in Banyuwangi Regency, where people with disabilities have equal opportunities to participate in all aspects of life. Our focus is to empower people with disabilities by providing skills training and social support, as well as creating a friendly and supportive environment for them in social, economic, and cultural life.</p>', '<p>Dusun Krajan,Kedungrejo, Kec. Muncar, Kabupaten Banyuwangi, Jawa Timur</p>', '<p>Dusun Krajan, Kedungrejo, Muncar, Banyuwangi Regency, East Java</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d307.77994267215985!2d114.31946578970995!3d-8.435226387640903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1723428154018!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://wa.me/+6285236698472', 'Favicon_Koceng-Mera-Woodcraft_07082024014156.png', 'Kita bisa, Kita Setara, Kita Berkarya', '1722998149_dcd13a8dd1bc00c09b4b.jpg', '<p>Jl. Brawijaya</p>', '+62 85236698472', 'bersamakitabisa24@gmail.com', 'All Rights Reserved. Designed with love by ');

-- ----------------------------
-- Table structure for tb_slider
-- ----------------------------
DROP TABLE IF EXISTS `tb_slider`;
CREATE TABLE `tb_slider`  (
  `id_slider` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `file_foto_slider` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_slider`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_slider
-- ----------------------------
INSERT INTO `tb_slider` VALUES (1, 'We-Can-Do_07082024094725.jpg');
INSERT INTO `tb_slider` VALUES (7, 'We-Can-Do_07082024094426.png');
INSERT INTO `tb_slider` VALUES (8, 'We-Can-Do_07082024094540.jpg');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
