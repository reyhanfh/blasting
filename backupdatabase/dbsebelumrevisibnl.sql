-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_hotel.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table db_hotel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.migrations: ~21 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_02_27_072055_create_usergroups_table', 1),
	(6, '2023_02_28_013532_create_hotelfacilitymodels_table', 1),
	(7, '2023_03_01_133354_create_refjenispetalokalmodels_table', 1),
	(8, '2023_03_01_155714_create_refregionmodels_table', 1),
	(9, '2023_03_01_172912_create_refkotamodels_table', 1),
	(10, '2023_03_02_005241_create_refpetalokalmodels_table', 1),
	(11, '2023_03_09_021528_create_accomodationtypemodels_table', 1),
	(12, '2023_03_09_045403_create_brandmodels_table', 1),
	(13, '2023_03_10_080828_create_hotelmodels_table', 1),
	(14, '2023_07_15_121131_create_roomtypemodels_table', 2),
	(15, '2023_07_16_024803_create_amenitiesmodels_table', 3),
	(16, '2023_07_16_035423_create_hotelroommodels_table', 4),
	(17, '2023_07_17_022453_create_roomamenitiesmodels_table', 5),
	(18, '2023_07_17_230954_create_roomgallerymodels_table', 6),
	(19, '2023_07_18_060234_create_hotelgalerymodels_table', 7),
	(20, '2023_08_11_000809_create_rateplanmodels_table', 8),
	(21, '2023_08_11_001138_create_rateplanhotelmodels_table', 8);

-- Dumping structure for table db_hotel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.password_resets: ~0 rows (approximately)

-- Dumping structure for table db_hotel.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table db_hotel.rateplanhotelmodels
CREATE TABLE IF NOT EXISTS `rateplanhotelmodels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.rateplanhotelmodels: ~0 rows (approximately)

-- Dumping structure for table db_hotel.tbl_acomodationtype
CREATE TABLE IF NOT EXISTS `tbl_acomodationtype` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `accomodationname` varchar(255) NOT NULL,
  `isactive` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_acomodationtype: ~2 rows (approximately)
INSERT INTO `tbl_acomodationtype` (`id`, `accomodationname`, `isactive`, `created_at`, `updated_at`) VALUES
	(1, 'Hotel', 1, '2023-07-14 20:40:32', '2023-07-14 20:40:32'),
	(2, 'Apartment', 1, '2023-07-14 20:40:32', '2023-07-14 20:40:32');

-- Dumping structure for table db_hotel.tbl_aminities
CREATE TABLE IF NOT EXISTS `tbl_aminities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_aminities: ~17 rows (approximately)
INSERT INTO `tbl_aminities` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(7, 'Shower', '2023-09-17 18:25:38', '2023-09-17 18:25:38'),
	(8, 'Bathtub', '2023-09-17 18:25:51', '2023-09-17 18:25:51'),
	(9, 'Air Conditioning', '2023-09-17 18:27:36', '2023-09-17 18:27:36'),
	(10, 'Mini-Bar', '2023-09-17 18:27:43', '2023-09-17 18:27:43'),
	(11, 'Wi-Fi', '2023-09-17 18:27:52', '2023-09-17 18:27:52'),
	(12, 'Safe', '2023-09-17 18:27:59', '2023-09-17 18:27:59'),
	(13, 'Wardrobe', '2023-09-17 18:28:07', '2023-09-17 18:28:07'),
	(14, 'Desk', '2023-09-17 18:28:14', '2023-09-17 18:28:14'),
	(15, 'Telephone', '2023-09-17 18:28:21', '2023-09-17 18:28:21'),
	(16, 'Hairdryer', '2023-09-17 18:28:35', '2023-09-17 18:28:35'),
	(17, 'Iron and Ironing Board', '2023-09-17 18:28:46', '2023-09-17 18:28:46'),
	(18, 'Coffee/Tea Maker', '2023-09-17 18:28:54', '2023-09-17 18:28:54'),
	(19, 'Towels and Toiletries', '2023-09-17 18:29:04', '2023-09-17 18:29:04'),
	(20, 'Refrigerator', '2023-09-17 18:29:17', '2023-09-17 18:29:17'),
	(21, 'Microwave', '2023-09-17 18:29:25', '2023-09-17 18:29:25'),
	(22, 'Sofa', '2023-09-17 18:29:31', '2023-09-17 18:29:31'),
	(23, 'Television', '2023-09-19 00:39:01', '2023-09-19 00:39:01');

-- Dumping structure for table db_hotel.tbl_avaibility
CREATE TABLE IF NOT EXISTS `tbl_avaibility` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idhotel` bigint(20) unsigned DEFAULT NULL,
  `idroom` bigint(20) unsigned DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `allotment` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tbl_avaibility_tbl_hotel` (`idhotel`),
  CONSTRAINT `FK_tbl_avaibility_tbl_hotel` FOREIGN KEY (`idhotel`) REFERENCES `tbl_hotel` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_avaibility: ~0 rows (approximately)

-- Dumping structure for table db_hotel.tbl_booking
CREATE TABLE IF NOT EXISTS `tbl_booking` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `idhotel` bigint(20) unsigned DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `negara` varchar(100) DEFAULT NULL,
  `zipcode` varchar(25) DEFAULT NULL,
  `idchannel` bigint(20) DEFAULT NULL,
  `paymentmethod` varchar(50) DEFAULT NULL,
  `paymentstatus` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_booking: ~2 rows (approximately)
INSERT INTO `tbl_booking` (`id`, `tanggal`, `idhotel`, `firstname`, `lastname`, `email`, `phone`, `address`, `kota`, `negara`, `zipcode`, `idchannel`, `paymentmethod`, `paymentstatus`, `created_at`, `updated_at`) VALUES
	(2, '2024-02-29', NULL, 'Asep', 'Dudung', 'ciheulang@gmail.com', '081224567', 'Jl. Cijengkol 56', 'Jakarta', 'Indonesia', '450234', 5, NULL, 1, '2024-02-20 00:18:18', '2024-02-20 00:58:01'),
	(3, '2024-02-29', NULL, 'Asep', 'Dudung', 'ciheulang@gmail.com', '081224567', 'Jl. Cijengkol 56', 'Jakarta', 'Indonesia', '450234', 5, NULL, 0, '2024-02-20 00:20:17', '2024-02-20 00:20:17');

-- Dumping structure for table db_hotel.tbl_bookingdetail
CREATE TABLE IF NOT EXISTS `tbl_bookingdetail` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idbooking` bigint(20) unsigned DEFAULT NULL,
  `idrateplan` bigint(20) unsigned DEFAULT NULL,
  `night` int(10) unsigned DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `jumlah` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tbl_bookingdetail_tbl_booking` (`idbooking`),
  KEY `FK_tbl_bookingdetail_tbl_rateplan` (`idrateplan`),
  CONSTRAINT `FK_tbl_bookingdetail_tbl_booking` FOREIGN KEY (`idbooking`) REFERENCES `tbl_booking` (`id`),
  CONSTRAINT `FK_tbl_bookingdetail_tbl_rateplan` FOREIGN KEY (`idrateplan`) REFERENCES `tbl_rateplan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_bookingdetail: ~1 rows (approximately)
INSERT INTO `tbl_bookingdetail` (`id`, `idbooking`, `idrateplan`, `night`, `rate`, `jumlah`, `created_at`, `updated_at`) VALUES
	(2, 3, 16, 1, 600000, 600000, '2024-02-20 00:20:17', '2024-02-20 00:20:17');

-- Dumping structure for table db_hotel.tbl_brand
CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `brandname` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_brand: ~2 rows (approximately)
INSERT INTO `tbl_brand` (`id`, `brandname`, `logo`, `aktif`, `created_at`, `updated_at`) VALUES
	(1, 'Horison', 'logo-bukit-damar-puith.png', 1, '2023-07-14 20:41:26', '2024-01-11 23:57:28'),
	(2, 'Horison Ultima', 'horison-hotel.png', 1, '2023-09-15 18:44:35', '2023-09-15 18:44:35');

-- Dumping structure for table db_hotel.tbl_cancelationpolicy
CREATE TABLE IF NOT EXISTS `tbl_cancelationpolicy` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_cancelationpolicy: ~0 rows (approximately)
INSERT INTO `tbl_cancelationpolicy` (`id`, `name`, `description`) VALUES
	(1, 'Non-Refundable', 'tidak ada penggantian');

-- Dumping structure for table db_hotel.tbl_channel
CREATE TABLE IF NOT EXISTS `tbl_channel` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `channel` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_channel: ~2 rows (approximately)
INSERT INTO `tbl_channel` (`id`, `channel`) VALUES
	(1, 'Website'),
	(2, 'Apps');

-- Dumping structure for table db_hotel.tbl_dorder
CREATE TABLE IF NOT EXISTS `tbl_dorder` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idhorder` bigint(20) unsigned NOT NULL,
  `idrateplan` bigint(20) unsigned NOT NULL,
  `idhotel` bigint(20) unsigned NOT NULL,
  `kodebooking` varchar(50) NOT NULL DEFAULT '',
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `status` enum('1','2','3','4') NOT NULL DEFAULT '1' COMMENT '1 waiting, 2 checkin 3 checkout 4 no show',
  `namatamu` varchar(50) NOT NULL DEFAULT '',
  `alamattamu` varchar(255) NOT NULL DEFAULT '',
  `telpontamu` varchar(16) NOT NULL DEFAULT '',
  `emailtamu` varchar(50) NOT NULL DEFAULT '',
  `idnegara` bigint(20) unsigned NOT NULL DEFAULT 0,
  `adult` tinyint(4) NOT NULL DEFAULT 0,
  `kid` tinyint(4) NOT NULL DEFAULT 0,
  `request` text NOT NULL,
  `baserate` int(11) NOT NULL DEFAULT 0,
  `discount` int(11) NOT NULL DEFAULT 0,
  `finalrate` int(11) NOT NULL DEFAULT 0,
  `promocode` varchar(50) DEFAULT NULL,
  `created-at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__tbl_horder` (`idhorder`),
  KEY `FK_tbl_dorder_tbl_rateplan` (`idrateplan`),
  KEY `FK_tbl_dorder_tbl_hotel` (`idhotel`),
  CONSTRAINT `FK__tbl_horder` FOREIGN KEY (`idhorder`) REFERENCES `tbl_horder` (`id`),
  CONSTRAINT `FK_tbl_dorder_tbl_hotel` FOREIGN KEY (`idhotel`) REFERENCES `tbl_hotel` (`id`),
  CONSTRAINT `FK_tbl_dorder_tbl_rateplan` FOREIGN KEY (`idrateplan`) REFERENCES `tbl_rateplan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_dorder: ~0 rows (approximately)

-- Dumping structure for table db_hotel.tbl_dorderroom
CREATE TABLE IF NOT EXISTS `tbl_dorderroom` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `iddorder` bigint(20) unsigned NOT NULL DEFAULT 0,
  `tanggal` date DEFAULT NULL,
  `idroom` bigint(20) unsigned NOT NULL,
  `idhotel` bigint(20) unsigned NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__tbl_hotel` (`idhotel`),
  KEY `FK_tbl_dorderroom_tbl_dorder` (`iddorder`),
  KEY `FK__tbl_roomtype` (`idroom`) USING BTREE,
  CONSTRAINT `FK__tbl_hotel` FOREIGN KEY (`idhotel`) REFERENCES `tbl_hotel` (`id`),
  CONSTRAINT `FK_tbl_dorderroom_tbl_dorder` FOREIGN KEY (`iddorder`) REFERENCES `tbl_dorder` (`id`),
  CONSTRAINT `FK_tbl_dorderroom_tbl_hotelroom` FOREIGN KEY (`idroom`) REFERENCES `tbl_hotelroom` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_dorderroom: ~0 rows (approximately)

-- Dumping structure for table db_hotel.tbl_horder
CREATE TABLE IF NOT EXISTS `tbl_horder` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kodetransaksi` varchar(50) NOT NULL,
  `iduser` bigint(20) unsigned DEFAULT NULL,
  `idchannel` bigint(20) unsigned DEFAULT NULL,
  `tgl_order` date DEFAULT NULL,
  `idpurpose` bigint(20) unsigned DEFAULT NULL,
  `idpayment` bigint(20) unsigned DEFAULT NULL,
  `paymentconfirmation` enum('Y','N') DEFAULT 'N',
  `status` enum('1','2','3') DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tbl_horder_users` (`iduser`),
  KEY `FK_tbl_horder_tbl_channel` (`idchannel`),
  KEY `FK_tbl_horder_tbl_purpose` (`idpurpose`),
  KEY `FK_tbl_horder_tbl_payment` (`idpayment`),
  CONSTRAINT `FK_tbl_horder_tbl_channel` FOREIGN KEY (`idchannel`) REFERENCES `tbl_channel` (`id`),
  CONSTRAINT `FK_tbl_horder_tbl_payment` FOREIGN KEY (`idpayment`) REFERENCES `tbl_payment` (`id`),
  CONSTRAINT `FK_tbl_horder_tbl_purpose` FOREIGN KEY (`idpurpose`) REFERENCES `tbl_purpose` (`id`),
  CONSTRAINT `FK_tbl_horder_users` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_horder: ~0 rows (approximately)

-- Dumping structure for table db_hotel.tbl_hotel
CREATE TABLE IF NOT EXISTS `tbl_hotel` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `accomodationtypeid` bigint(20) unsigned NOT NULL,
  `brandid` bigint(20) unsigned NOT NULL,
  `regionid` bigint(20) unsigned NOT NULL,
  `kotaid` bigint(20) unsigned NOT NULL,
  `hotelcode` varchar(4) NOT NULL,
  `hotelname` varchar(150) NOT NULL,
  `slug` varchar(160) NOT NULL,
  `star` enum('1','2','3','4','5') NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `zipcode` varchar(5) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `phone2` varchar(15) DEFAULT NULL,
  `nowa` varchar(15) DEFAULT NULL,
  `nofax` varchar(15) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `latt` double DEFAULT NULL,
  `long` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_hotel_accomodationtypeid_index` (`accomodationtypeid`),
  KEY `tbl_hotel_brandid_index` (`brandid`),
  KEY `tbl_hotel_regionid_index` (`regionid`),
  KEY `tbl_hotel_kotaid_index` (`kotaid`),
  CONSTRAINT `tbl_hotel_accomodationtypeid_foreign` FOREIGN KEY (`accomodationtypeid`) REFERENCES `tbl_acomodationtype` (`id`),
  CONSTRAINT `tbl_hotel_brandid_foreign` FOREIGN KEY (`brandid`) REFERENCES `tbl_brand` (`id`),
  CONSTRAINT `tbl_hotel_kotaid_foreign` FOREIGN KEY (`kotaid`) REFERENCES `tbl_kota` (`id`),
  CONSTRAINT `tbl_hotel_regionid_foreign` FOREIGN KEY (`regionid`) REFERENCES `tbl_region` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_hotel: ~2 rows (approximately)
INSERT INTO `tbl_hotel` (`id`, `accomodationtypeid`, `brandid`, `regionid`, `kotaid`, `hotelcode`, `hotelname`, `slug`, `star`, `address`, `zipcode`, `phone`, `phone2`, `nowa`, `nofax`, `logo`, `deskripsi`, `aktif`, `latt`, `long`, `created_at`, `updated_at`) VALUES
	(1, 1, 2, 2, 1, 'HUMJ', 'Horison Ultima Menteng Jakarta', 'Horison Ultima Menteng Jakarta', '3', 'Jl. Menteng Raya No.33, RT.1/RW.10, Kb. Sirih, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta , Menteng, Kebon Sirih, Jakarta, Indonesia', '8746', '-', '-', '-', '-', NULL, '<p><strong>Lokasi</strong></p><p>Horison Ultima Menteng Jakarta adalah hotel di lokasi yang baik, tepatnya berada di Kebon Sirih.</p><p>Dari BNI City Station, hotel ini hanya berjarak sekitar 2,55 km.</p><p>Selain letaknya yang strategis, Horison Ultima Menteng Jakarta juga merupakan hotel dekat Transmart Kalimalang berjarak sekitar 12,53 km dan Maxx Box Lippo Village berjarak sekitar 25,95 km..</p><p><strong>Tentang Horison Ultima Menteng Jakarta</strong></p><p>Horison Ultima Menteng Jakarta memiliki segala fasilitas penunjang bisnis untuk Anda dan kolega.</p><p>Horison Ultima Menteng Jakarta adalah tempat bermalam yang tepat bagi Anda yang berlibur bersama keluarga. Nikmati segala fasilitas hiburan untuk Anda dan keluarga.</p><p>Jika Anda berniat menginap dalam jangka waktu yang lama, Horison Ultima Menteng Jakarta adalah pilihan tepat. Berbagai fasilitas yang tersedia dan kualitas pelayanan yang baik akan membuat Anda merasa sedang berada di rumah sendiri.</p><p>Horison Ultima Menteng Jakarta adalah pilihan tepat bagi Anda yang ingin menghabiskan waktu dengan berbagai fasilitas mewah. Nikmati kualitas layanan terbaik dan pengalaman mengesankan selama menginap di hotel ini.</p><p>Menikmati perjalanan sendiri adalah hal yang menyenangkan. Untuk menginap, Horison Ultima Menteng Jakarta adalah pilihan pas bagi Anda yang membutuhkan waktu sendiri setelah puas berkeliling kota.</p><p>Resepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda.</p><p>Horison Ultima Menteng Jakarta adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu.</p><p>Horison Ultima Menteng Jakarta adalah pilihan cerdas bagi para wisatawan yang berkunjung ke Kebon Sirih.</p>', 1, NULL, NULL, '2023-09-15 20:41:38', '2023-09-15 20:41:38'),
	(4, 1, 1, 3, 2, 'HGFR', 'Horison Green Forest Bandung', 'Horison Green Forest Bandung', '3', 'Jl Sersan Bajuri No. 102, Sersan Bajuri, Bandung, Jawa Barat, Indonesia', '40154', '-', '-', '-', '-', NULL, '<p><span style="color: rgb(0, 0, 0);">Green Forest Resort berada di Kabupaten Bandung Barat, tepatnya di Jalan Sersan Bajuri No. 102, Bandung. Terletak di daerah pegunungan, membuat resor ini cocok bagi tamu yang menginginkan suasana alam selama bermalam. Selain suasananya yang tenang, akomodasi ini juga dekat dengan beberapa destinasi wisata yang populer.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">Seperti namanya, resor ini benar-benar didominasi alam yang serba hijau. Hamparan rumputnya hijau memenuhi tiap sudut akomodasi, penataan tanaman serta pohon pun menambah cantik halaman resor.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">Dengan suasana alam yang ditawarkan, Green Forest Bandung juga memiliki 76 unit hunian yang sangat nyaman. Dari keseluruhan unit, pihak hotel membaginya ke dalam beberapa tipe, yaitu Superior Room, Deluxe Room, Executive Room, dan Cottage.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">Konsep desain untuk unit Superior, Deluxe, dan Executive adalah modern dengan sentuhan kayu di beberapa bagian yang menambah kesan natural. Sementara itu, khusus unit Cottage, material bangunan didominasi oleh kayu alami dengan kualitas terbaik.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">Fasilitas dasar tiap unit sama, antara lain televisi dengan saluran lokal dan internasional, meja, coffee/tea maker, koneksi internet, sarapan, dan tentu saja pemandangan taman yang sangat cantik. Namun untuk Cottege, pemandangan yang disajikan adalah perbukitan hijau langsung dari balkon pribadi. Bahkan ketika matahari terbenam, pemandangan kota yang gemerlap dapat dinikmati dari sini.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">Salah satu keunikan sekaligus ikon Green Forest Resort adalah kapel cantik berbentuk prisma segitiga dengan dinding-dinding kaca. Latar belakang kapel ini adalah pemandangan alam yang menakjubkan sekaligus romantis. Karena itulah, lokasi ini kerap dijadikan pilihan untuk pernihakan.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">Selain kapel cantik yang kini banyak dijadikan sebagai spot untuk berfoto oleh masyarakat dan wisatawan, Green Forest memiliki beragam fasilitas menarik lainnya. Salah satunya adalah kolam renang yang mengusung konsep infinity pool. Sembari berendam di kolam ini, tamu bisa sepuasnya menikmati hijaunya lembah yang langsung membentang di depan mata.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">Resor ini juga merupakan akomodasi yang bersahabat bagi tamu yang datang bersama keluarga, terutama si kecil. Luasnya taman dan area bermain untuk anak akan membuatnya betah menghabiskan waktu di sini. Selain permainan statis seperti playground pada umumnya, ada pula fasilitas flying fox. Bagi tamu yang ingin melakukan aktivitas ini, terlebih dahulu perlu menghubungi petugas setempat.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">Selain itu, bagi tamu yang gemar mendaki, terdapat aktivitas mendaki yang bisa dilakukan. Untuk dapat mendaki, pengunjung harus terlebih dahulu melalui jembatan goyang yang terbuat dari kayu. Jembatan begoyang ini tepat berada di atas sungai yang nantinya mengubungkan resor dengan kawasan hutan tempat pendakian.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">Jika ingin sejenak menikmati suasana di luar resor, ada banyak objek wisata di sekiar Green Forest yang bisa dikunjungi. Salah satunya, Kampung Gajah Wonderland yang merupakan tempat wisata terpadu favorit keluarga. Areanya cukup luas dan asri dengan beberapa wahana seru, seperti sky rider, horse riding, mini buggy, dan lain-lain. Lokasinya hanya berjarak sekitar 800 meter dari resor.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">Bila tak ingin menikmati wahana dan sekadar mencari tempat-tempat yang apik, ada sebuah destinasi yang bisa tamu kunjungi. Vihara Vipassana Graha berada hanya sejauh 1,2 km dari penginapan Green Forest. Tempat ibadah umat Buddha ini memiliki arsitektur menarik dan akan memuaskan tamu yang gemar fotografi. Nuansa di sini akan membuat tamu seakan-akan berada di Negeri Gajah Putih, Thailand.</span></p><p><br></p><p><span style="color: rgb(0, 0, 0);">Tidak hanya suasananya yang tenang dan nyaman, setiap sudut Green Forest Resort Bandung juga unik dan fotogenik. Karena itu, bagi tamu yang menginginkan suasana liburan yang berbeda, menginap di resor bintang 3 ini adalah pilihan yang sempurna.</span></p>', 1, 2, 2, '2023-09-18 21:18:46', '2024-02-21 23:34:08');

-- Dumping structure for table db_hotel.tbl_hotelfacilities
CREATE TABLE IF NOT EXISTS `tbl_hotelfacilities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idhotel` bigint(20) unsigned NOT NULL,
  `idfacility` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tbl_hotelfacilities_tbl_hotel` (`idhotel`),
  KEY `FK_tbl_hotelfacilities_tbl_hotelfaicility` (`idfacility`),
  CONSTRAINT `FK_tbl_hotelfacilities_tbl_hotel` FOREIGN KEY (`idhotel`) REFERENCES `tbl_hotel` (`id`),
  CONSTRAINT `FK_tbl_hotelfacilities_tbl_hotelfaicility` FOREIGN KEY (`idfacility`) REFERENCES `tbl_hotelfaicility` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_hotelfacilities: ~13 rows (approximately)
INSERT INTO `tbl_hotelfacilities` (`id`, `idhotel`, `idfacility`, `created_at`, `updated_at`) VALUES
	(14, 4, 1, '2023-09-18 21:21:18', '2023-09-18 21:21:18'),
	(15, 4, 4, '2023-09-18 21:21:19', '2023-09-18 21:21:19'),
	(16, 4, 2, '2023-09-18 21:21:20', '2023-09-18 21:21:20'),
	(17, 4, 3, '2023-09-18 21:21:21', '2023-09-18 21:21:21'),
	(18, 4, 6, '2023-09-18 21:21:27', '2023-09-18 21:21:27'),
	(19, 4, 5, '2023-09-18 21:21:56', '2023-09-18 21:21:56'),
	(20, 4, 11, '2023-09-18 21:22:14', '2023-09-18 21:22:14'),
	(21, 4, 9, '2023-09-18 21:22:30', '2023-09-18 21:22:30'),
	(22, 1, 6, '2023-09-19 17:45:13', '2023-09-19 17:45:13'),
	(23, 1, 3, '2023-09-19 17:45:14', '2023-09-19 17:45:14'),
	(24, 1, 2, '2023-09-19 17:45:15', '2023-09-19 17:45:15'),
	(25, 1, 1, '2023-09-19 17:47:09', '2023-09-19 17:47:09'),
	(26, 1, 4, '2023-09-19 17:47:21', '2023-09-19 17:47:21');

-- Dumping structure for table db_hotel.tbl_hotelfaicility
CREATE TABLE IF NOT EXISTS `tbl_hotelfaicility` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `facilityName` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_hotelfaicility: ~13 rows (approximately)
INSERT INTO `tbl_hotelfaicility` (`id`, `facilityName`, `icon`, `aktif`, `created_at`, `updated_at`) VALUES
	(1, 'Restaurant', NULL, 1, '2023-07-14 20:40:27', '2023-07-14 20:40:27'),
	(2, 'AC', NULL, 1, '2023-07-14 20:40:27', '2023-07-14 20:40:27'),
	(3, 'Wifi Gratis', NULL, 1, '2023-07-14 20:40:27', '2023-09-15 20:12:04'),
	(4, 'Resepsionis 24 jam', NULL, 1, '2023-09-15 20:14:21', '2023-09-15 20:14:21'),
	(5, 'Layanan kamar', NULL, 1, '2023-09-15 20:14:40', '2023-09-15 20:14:40'),
	(6, 'Kolam renang', NULL, 1, '2023-09-15 20:15:03', '2023-09-15 20:15:03'),
	(7, 'Pusat kebugaran atau gym', NULL, 1, '2023-09-15 20:15:13', '2023-09-15 20:15:13'),
	(8, 'Spa atau layanan pijat', NULL, 1, '2023-09-15 20:15:24', '2023-09-15 20:15:24'),
	(9, 'Layanan laundry', NULL, 1, '2023-09-15 20:16:00', '2023-09-15 20:16:00'),
	(10, 'Ruang pertemuan atau fasilitas konferensi', NULL, 1, '2023-09-15 20:16:17', '2023-09-15 20:16:17'),
	(11, 'Layanan penitipan bagasi', NULL, 1, '2023-09-15 20:16:27', '2023-09-15 20:16:27'),
	(12, 'Area merokok dan non-merokok', NULL, 1, '2023-09-15 20:16:48', '2023-09-15 20:16:48'),
	(13, 'Layanan penyewaan mobil atau sepeda', NULL, 1, '2023-09-15 20:17:26', '2023-09-15 20:17:26');

-- Dumping structure for table db_hotel.tbl_hotelgallery
CREATE TABLE IF NOT EXISTS `tbl_hotelgallery` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idhotel` bigint(20) unsigned NOT NULL,
  `file` varchar(255) NOT NULL,
  `panjang` varchar(255) DEFAULT NULL,
  `lebar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_hotelgallery_idhotel_index` (`idhotel`),
  CONSTRAINT `tbl_hotelgallery_idhotel_foreign` FOREIGN KEY (`idhotel`) REFERENCES `tbl_hotel` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_hotelgallery: ~28 rows (approximately)
INSERT INTO `tbl_hotelgallery` (`id`, `idhotel`, `file`, `panjang`, `lebar`, `created_at`, `updated_at`) VALUES
	(7, 4, '65092740a70b6_1695098688gfrbswipingfool.jpg', NULL, NULL, '2023-09-18 21:44:48', '2023-09-18 21:44:48'),
	(8, 4, '650927aac2945_1695098794gfrbcommonspace.jpg', NULL, NULL, '2023-09-18 21:46:34', '2023-09-18 21:46:34'),
	(9, 4, '6509327d87e1c_1695101565gfrbcommonspace.jpg', NULL, NULL, '2023-09-18 22:32:45', '2023-09-18 22:32:45'),
	(10, 4, '650932be44a0e_1695101630gfrbcommonspace.jpg', NULL, NULL, '2023-09-18 22:33:50', '2023-09-18 22:33:50'),
	(11, 4, '650932f9d4652_1695101689functionalhall.jpg', NULL, NULL, '2023-09-18 22:34:49', '2023-09-18 22:34:49'),
	(12, 4, '6509333731384_1695101751functionalhall.jpg', NULL, NULL, '2023-09-18 22:35:51', '2023-09-18 22:35:51'),
	(13, 4, '6509335d5a2e6_1695101789functionalhall.jpg', NULL, NULL, '2023-09-18 22:36:29', '2023-09-18 22:36:29'),
	(14, 4, '6509338914fc8_1695101833functionalhall.jpg', NULL, NULL, '2023-09-18 22:37:13', '2023-09-18 22:37:13'),
	(15, 4, '650933b173d77_1695101873functionalhall.jpg', NULL, NULL, '2023-09-18 22:37:53', '2023-09-18 22:37:53'),
	(16, 4, '650934017ecf2_1695101953lobby.jpg', NULL, NULL, '2023-09-18 22:39:13', '2023-09-18 22:39:13'),
	(17, 4, '6509342c54ce3_1695101996restaurant.jpg', NULL, NULL, '2023-09-18 22:39:56', '2023-09-18 22:39:56'),
	(18, 4, '6509345261588_1695102034restaurant.jpg', NULL, NULL, '2023-09-18 22:40:34', '2023-09-18 22:40:34'),
	(19, 4, '650934762dc7c_1695102070restaurant.jpg', NULL, NULL, '2023-09-18 22:41:10', '2023-09-18 22:41:10'),
	(20, 1, '650a3e0648516_1695170054horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:34:14', '2023-09-19 17:34:14'),
	(21, 1, '650a3e3799d36_1695170103horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:35:03', '2023-09-19 17:35:03'),
	(22, 1, '650a3e64c9602_1695170148horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:35:48', '2023-09-19 17:35:48'),
	(23, 1, '650a3e8a0e5e5_1695170186horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:36:26', '2023-09-19 17:36:26'),
	(24, 1, '650a3eabd3a41_1695170219horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:36:59', '2023-09-19 17:36:59'),
	(25, 1, '650a3ed615b82_1695170262horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:37:42', '2023-09-19 17:37:42'),
	(26, 1, '650a3ef3e3c56_1695170291horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:38:11', '2023-09-19 17:38:11'),
	(27, 1, '650a3f145f2f6_1695170324horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:38:44', '2023-09-19 17:38:44'),
	(28, 1, '650a3f37b5592_1695170359horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:39:19', '2023-09-19 17:39:19'),
	(29, 1, '650a3f56d13eb_1695170390horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:39:50', '2023-09-19 17:39:50'),
	(30, 1, '650a3f798fdf2_1695170425horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:40:25', '2023-09-19 17:40:25'),
	(31, 1, '650a3fa27626b_1695170466horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:41:06', '2023-09-19 17:41:06'),
	(32, 1, '650a3fc6ce6a3_1695170502horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:41:42', '2023-09-19 17:41:42'),
	(33, 1, '650a3ff42eabc_1695170548horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:42:28', '2023-09-19 17:42:28'),
	(34, 1, '650a406618afe_1695170662horisonmenteng.jpg', NULL, NULL, '2023-09-19 17:44:22', '2023-09-19 17:44:22'),
	(36, 4, '65e3f54875088_1709438280Ayam Geprek  APTV Baru Wide.png', NULL, NULL, '2024-03-02 20:58:00', '2024-03-02 20:58:00');

-- Dumping structure for table db_hotel.tbl_hotelroom
CREATE TABLE IF NOT EXISTS `tbl_hotelroom` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idhotel` bigint(20) unsigned NOT NULL,
  `idroomtype` bigint(20) unsigned NOT NULL,
  `roomsize` varchar(12) NOT NULL,
  `bedtype` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1 single 2 double',
  `capacity` tinyint(4) NOT NULL DEFAULT 1,
  `baserate` int(11) NOT NULL DEFAULT 0,
  `allotment` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_hotelroom_idhotel_index` (`idhotel`),
  KEY `tbl_hotelroom_idroomtype_index` (`idroomtype`),
  CONSTRAINT `tbl_hotelroom_idhotel_foreign` FOREIGN KEY (`idhotel`) REFERENCES `tbl_hotel` (`id`),
  CONSTRAINT `tbl_hotelroom_idroomtype_foreign` FOREIGN KEY (`idroomtype`) REFERENCES `tbl_roomtype` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_hotelroom: ~4 rows (approximately)
INSERT INTO `tbl_hotelroom` (`id`, `idhotel`, `idroomtype`, `roomsize`, `bedtype`, `capacity`, `baserate`, `allotment`, `deskripsi`, `photo`, `aktif`, `created_at`, `updated_at`) VALUES
	(4, 1, 12, '24 sqm', '2', 2, 600000, 5, 'description room', '65e3f4fc72507_1709438204deluxedoublehum.jpg', 1, '2023-09-17 19:44:14', '2024-03-02 20:56:44'),
	(5, 4, 13, '18 m2', '1', 2, 600000, 5, 'description room', '65094fd23c3fe_1695109074SUPTWIN.jpg', 1, '2023-09-19 00:37:54', '2023-09-19 00:37:54'),
	(6, 4, 14, '22 m2', '1', 2, 800000, 5, 'description room', '6509515e6656c_1695109470DeluxeKing.jpg', 1, '2023-09-19 00:44:30', '2023-09-19 00:44:30'),
	(7, 1, 7, '24.0 sqm', '1', 2, 500000, 5, 'description room', '650a42724cf34_1695171186horisonmentengroom.jpg', 1, '2023-09-19 17:53:06', '2023-09-19 17:53:06');

-- Dumping structure for table db_hotel.tbl_jenispetalokal
CREATE TABLE IF NOT EXISTS `tbl_jenispetalokal` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jenislokasiName` varchar(255) NOT NULL,
  `jenislokasiPhoto` varchar(255) DEFAULT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_jenispetalokal: ~8 rows (approximately)
INSERT INTO `tbl_jenispetalokal` (`id`, `jenislokasiName`, `jenislokasiPhoto`, `aktif`, `created_at`, `updated_at`) VALUES
	(1, 'Perkantoran', NULL, 1, '2023-07-14 20:40:28', '2023-07-14 20:40:28'),
	(2, 'Pertokoan', NULL, 1, '2023-07-14 20:40:28', '2023-07-14 20:40:28'),
	(3, 'Rumah Sakit', NULL, 1, '2023-07-14 20:40:28', '2023-07-14 20:40:28'),
	(4, 'Kampus', NULL, 1, '2023-07-14 20:40:28', '2023-07-14 20:40:28'),
	(5, 'Stasiun', NULL, 1, NULL, NULL),
	(6, 'Tempat Wisata', NULL, 1, '2023-09-18 21:03:23', '2023-09-18 21:03:23'),
	(7, 'Tempat Ibadah', NULL, 1, '2023-09-18 21:09:33', '2023-09-18 21:09:33'),
	(8, 'Sekolah', NULL, 1, '2023-09-18 21:14:42', '2023-09-18 21:14:42');

-- Dumping structure for table db_hotel.tbl_kota
CREATE TABLE IF NOT EXISTS `tbl_kota` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kotaName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_kota: ~3 rows (approximately)
INSERT INTO `tbl_kota` (`id`, `kotaName`, `created_at`, `updated_at`) VALUES
	(1, 'Jakarta', '2023-07-14 20:40:29', '2023-07-14 20:40:29'),
	(2, 'Bandung', '2023-07-14 20:40:29', '2023-07-14 20:40:29'),
	(3, 'Bali', '2023-07-14 20:40:29', '2023-07-14 20:40:29');

-- Dumping structure for table db_hotel.tbl_ourpromo
CREATE TABLE IF NOT EXISTS `tbl_ourpromo` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_ourpromo: ~3 rows (approximately)
INSERT INTO `tbl_ourpromo` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 'promo1', 'promo1.jpg', '2023-09-24 06:27:40', '2023-09-24 06:27:41'),
	(2, 'promo2', 'promo2.jpg', '2023-09-24 06:39:13', '2023-09-24 06:39:14'),
	(3, 'promo3', 'promo3.jpg', '2023-09-24 06:39:25', '2023-09-24 06:39:26');

-- Dumping structure for table db_hotel.tbl_payment
CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `id` bigint(20) unsigned NOT NULL DEFAULT 0,
  `payment` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_payment: ~3 rows (approximately)
INSERT INTO `tbl_payment` (`id`, `payment`) VALUES
	(1, 'Bank Transfer'),
	(2, 'Credit Card'),
	(3, 'OVO');

-- Dumping structure for table db_hotel.tbl_petalokal
CREATE TABLE IF NOT EXISTS `tbl_petalokal` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `jenislokasiid` bigint(20) unsigned NOT NULL,
  `idkota` bigint(20) unsigned NOT NULL,
  `lokasiName` varchar(255) NOT NULL,
  `lokasiphoto` varchar(255) DEFAULT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_petalokal_jenislokasiid_index` (`jenislokasiid`),
  KEY `FK_tbl_petalokal_tbl_kota` (`idkota`),
  CONSTRAINT `FK_tbl_petalokal_tbl_kota` FOREIGN KEY (`idkota`) REFERENCES `tbl_kota` (`id`),
  CONSTRAINT `tbl_petalokal_jenislokasiid_foreign` FOREIGN KEY (`jenislokasiid`) REFERENCES `tbl_jenispetalokal` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_petalokal: ~10 rows (approximately)
INSERT INTO `tbl_petalokal` (`id`, `jenislokasiid`, `idkota`, `lokasiName`, `lokasiphoto`, `aktif`, `created_at`, `updated_at`) VALUES
	(5, 6, 1, 'Taman Impian Jaya Ancol', NULL, 1, '2023-09-18 21:07:47', '2023-09-18 21:07:47'),
	(6, 5, 1, 'Stasiun Gambir', NULL, 1, '2023-09-18 21:08:34', '2023-09-18 21:08:34'),
	(7, 2, 1, 'Menteng Huis', NULL, 1, '2023-09-18 21:08:52', '2023-09-18 21:08:52'),
	(8, 7, 1, 'Masjid Istiqlal', NULL, 1, '2023-09-18 21:09:49', '2023-09-18 21:09:49'),
	(9, 5, 1, 'Stasiun Gondangdia', NULL, 1, '2023-09-18 21:10:10', '2023-09-18 21:10:10'),
	(10, 4, 2, 'Institut Teknologi Bandung (ITB)', NULL, 1, '2023-09-18 21:12:32', '2023-09-18 21:12:32'),
	(11, 1, 2, 'Trans Studio Bandung', NULL, 1, '2023-09-18 21:12:50', '2023-09-18 21:12:50'),
	(12, 5, 2, 'Stasiun Bandung', NULL, 1, '2023-09-18 21:13:04', '2023-09-18 21:13:04'),
	(13, 6, 2, 'Jendela Alam', NULL, 1, '2023-09-18 21:14:00', '2023-09-18 21:14:00'),
	(14, 8, 2, 'Starland Preschool and Kindergarten', NULL, 1, '2023-09-18 21:16:15', '2023-09-18 21:16:15');

-- Dumping structure for table db_hotel.tbl_purpose
CREATE TABLE IF NOT EXISTS `tbl_purpose` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `purpose` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_purpose: ~5 rows (approximately)
INSERT INTO `tbl_purpose` (`id`, `purpose`) VALUES
	(1, 'Business'),
	(2, 'Leisure '),
	(3, 'Vacation '),
	(4, 'Personal '),
	(5, 'Other ');

-- Dumping structure for table db_hotel.tbl_rateallotment
CREATE TABLE IF NOT EXISTS `tbl_rateallotment` (
  `idrateallotment` int(11) NOT NULL AUTO_INCREMENT,
  `idrateplanhotel` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `idroomhotel` int(11) DEFAULT NULL,
  `allotment` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `updateby` int(11) DEFAULT NULL,
  `lastupdate` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `open` enum('Y','N') NOT NULL DEFAULT 'Y',
  PRIMARY KEY (`idrateallotment`),
  KEY `idrateplanhotel` (`idrateplanhotel`)
) ENGINE=InnoDB AUTO_INCREMENT=1109707 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table db_hotel.tbl_rateallotment: ~0 rows (approximately)

-- Dumping structure for table db_hotel.tbl_rateplan
CREATE TABLE IF NOT EXISTS `tbl_rateplan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `idhotel` bigint(20) unsigned NOT NULL,
  `idroom` bigint(20) unsigned NOT NULL,
  `description` text DEFAULT NULL,
  `idpolicy` bigint(20) unsigned NOT NULL DEFAULT 0,
  `baserate` double DEFAULT NULL,
  `variable` enum('1','2','3','4') DEFAULT NULL,
  `variableamount` double NOT NULL DEFAULT 0,
  `fixrate` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `rate` double unsigned NOT NULL DEFAULT 0,
  `MinLOS` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `MaxLOS` tinyint(3) unsigned NOT NULL DEFAULT 0,
  `promocode` varchar(50) DEFAULT NULL,
  `accessibility` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1 show to all, 2 limited to promocode',
  `breakfast` enum('Y','N') NOT NULL DEFAULT 'N',
  `avaibility` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1: public 2: exclusive',
  `Column 18` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tbl_rateplan_tbl_cancelationpolicy` (`idpolicy`),
  KEY `FK_tbl_rateplan_tbl_hotel` (`idhotel`),
  KEY `FK_tbl_rateplan_tbl_roomtype` (`idroom`) USING BTREE,
  CONSTRAINT `FK_tbl_rateplan_tbl_cancelationpolicy` FOREIGN KEY (`idpolicy`) REFERENCES `tbl_cancelationpolicy` (`id`),
  CONSTRAINT `FK_tbl_rateplan_tbl_hotel` FOREIGN KEY (`idhotel`) REFERENCES `tbl_hotel` (`id`),
  CONSTRAINT `FK_tbl_rateplan_tbl_hotelroom` FOREIGN KEY (`idroom`) REFERENCES `tbl_hotelroom` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_rateplan: ~8 rows (approximately)
INSERT INTO `tbl_rateplan` (`id`, `name`, `idhotel`, `idroom`, `description`, `idpolicy`, `baserate`, `variable`, `variableamount`, `fixrate`, `rate`, `MinLOS`, `MaxLOS`, `promocode`, `accessibility`, `breakfast`, `avaibility`, `Column 18`, `created_at`, `updated_at`) VALUES
	(16, 'Room Only', 1, 4, NULL, 1, 600000, '1', 0, 0, 600000, 1, 5, '', '1', 'N', '1', NULL, '2023-09-18 02:19:31', '2023-09-19 19:16:12'),
	(17, 'Breakfast', 1, 4, NULL, 1, 600000, '1', 0, 0, 600000, 1, 5, NULL, '1', 'N', '1', NULL, '2023-09-19 19:17:16', '2023-09-19 20:34:32'),
	(18, 'Room Only', 1, 7, NULL, 1, 500000, '1', 0, 0, 500000, 1, 5, '', '1', 'N', '1', NULL, '2023-09-19 19:53:28', '2023-09-19 19:53:28'),
	(19, 'Breakfast', 1, 7, NULL, 1, 500000, '1', 15, 0, 575000, 1, 5, '', '1', 'Y', '1', NULL, '2023-09-19 19:54:39', '2023-09-19 19:54:39'),
	(20, 'Room Only', 4, 5, NULL, 1, 600000, '1', 0, 0, 600000, 1, 5, NULL, '1', 'N', '1', NULL, '2023-09-19 20:49:27', '2023-09-19 20:49:27'),
	(21, 'Breakfast', 4, 5, NULL, 1, 600000, '1', 12, 0, 672000, 1, 5, NULL, '1', 'N', '1', NULL, '2023-09-19 20:49:58', '2023-09-19 20:49:58'),
	(22, 'Room Only', 4, 6, NULL, 1, 800000, '1', 0, 0, 800000, 1, 5, NULL, '1', 'N', '1', NULL, '2023-09-19 20:51:36', '2023-09-19 20:51:36'),
	(23, 'Breakfast', 4, 6, NULL, 1, 800000, '1', 12, 0, 896000, 1, 5, NULL, '1', 'N', '1', NULL, '2023-09-19 20:52:01', '2023-09-19 20:52:01');

-- Dumping structure for table db_hotel.tbl_rateplan1
CREATE TABLE IF NOT EXISTS `tbl_rateplan1` (
  `idrateplan` int(11) NOT NULL AUTO_INCREMENT,
  `idoperator` int(11) NOT NULL DEFAULT 1,
  `idrategroup` int(11) DEFAULT NULL,
  `code` char(12) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `promocode` varchar(50) DEFAULT NULL,
  `active` enum('Y','N') DEFAULT NULL,
  `default` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`idrateplan`),
  KEY `FK_tbl_rateplan_tbl_rategroup` (`idrategroup`),
  CONSTRAINT `FK_tbl_rateplan_tbl_rategroup` FOREIGN KEY (`idrategroup`) REFERENCES `tbl_rategroup` (`idrategroup`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table db_hotel.tbl_rateplan1: ~2 rows (approximately)
INSERT INTO `tbl_rateplan1` (`idrateplan`, `idoperator`, `idrategroup`, `code`, `name`, `promocode`, `active`, `default`) VALUES
	(1, 1, NULL, NULL, 'Break Fast', NULL, 'Y', 'N'),
	(2, 1, NULL, NULL, 'Room Only', NULL, NULL, 'N');

-- Dumping structure for table db_hotel.tbl_rateplanavaibility
CREATE TABLE IF NOT EXISTS `tbl_rateplanavaibility` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idrateplan` bigint(20) unsigned DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__tbl_rateplan` (`idrateplan`),
  CONSTRAINT `FK__tbl_rateplan` FOREIGN KEY (`idrateplan`) REFERENCES `tbl_rateplan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_rateplanavaibility: ~4 rows (approximately)
INSERT INTO `tbl_rateplanavaibility` (`id`, `idrateplan`, `from`, `to`, `created_at`, `updated_at`) VALUES
	(5, 20, '2023-09-25', '2023-12-31', '2023-09-24 23:24:05', '2023-09-24 23:24:05'),
	(6, 21, '2024-01-08', '2024-12-31', '2023-09-24 23:25:00', '2024-01-07 14:31:19'),
	(7, 16, '2023-09-25', '2023-12-31', '2023-09-24 23:25:21', '2023-09-24 23:25:21'),
	(8, 19, '2023-09-25', '2023-12-31', '2023-09-24 23:25:43', '2023-09-24 23:25:43');

-- Dumping structure for table db_hotel.tbl_rateplanhotel
CREATE TABLE IF NOT EXISTS `tbl_rateplanhotel` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idhotel` bigint(20) unsigned DEFAULT NULL,
  `idrateplan` bigint(20) unsigned DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tbl_rateplanhotel_tbl_hotel` (`idhotel`),
  KEY `FK_tbl_rateplanhotel_tbl_rateplan` (`idrateplan`),
  CONSTRAINT `FK_tbl_rateplanhotel_tbl_hotel` FOREIGN KEY (`idhotel`) REFERENCES `tbl_hotel` (`id`),
  CONSTRAINT `FK_tbl_rateplanhotel_tbl_rateplan` FOREIGN KEY (`idrateplan`) REFERENCES `tbl_rateplan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_rateplanhotel: ~0 rows (approximately)

-- Dumping structure for table db_hotel.tbl_rating
CREATE TABLE IF NOT EXISTS `tbl_rating` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idhotel` bigint(20) unsigned DEFAULT NULL,
  `iduser` bigint(20) unsigned DEFAULT NULL,
  `rating` bigint(20) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tbl_rating_tbl_hotel` (`idhotel`),
  CONSTRAINT `FK_tbl_rating_tbl_hotel` FOREIGN KEY (`idhotel`) REFERENCES `tbl_hotel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hotel.tbl_rating: ~0 rows (approximately)

-- Dumping structure for table db_hotel.tbl_region
CREATE TABLE IF NOT EXISTS `tbl_region` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `regionName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_region: ~6 rows (approximately)
INSERT INTO `tbl_region` (`id`, `regionName`, `created_at`, `updated_at`) VALUES
	(1, 'Sumatra', '2023-07-14 20:40:28', '2023-07-14 20:40:28'),
	(2, 'DKI Jakarta', '2023-07-14 20:40:29', '2023-07-14 20:40:29'),
	(3, 'Jawa Barat', '2023-07-14 20:40:29', '2023-07-14 20:40:29'),
	(4, 'Jawa Tengah', '2023-07-14 20:40:29', '2023-07-14 20:40:29'),
	(5, 'Jawa Timur', '2023-07-14 20:40:29', '2023-07-14 20:40:29'),
	(6, 'Indonesia Timur', '2023-07-14 20:40:29', '2023-07-14 20:40:29');

-- Dumping structure for table db_hotel.tbl_roomamenities
CREATE TABLE IF NOT EXISTS `tbl_roomamenities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idroom` bigint(20) unsigned NOT NULL,
  `idamenities` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tbl_roomamenities_idroom_index` (`idroom`),
  KEY `tbl_roomamenities_idamenities_index` (`idamenities`),
  CONSTRAINT `tbl_roomamenities_idamenities_foreign` FOREIGN KEY (`idamenities`) REFERENCES `tbl_aminities` (`id`),
  CONSTRAINT `tbl_roomamenities_idroom_foreign` FOREIGN KEY (`idroom`) REFERENCES `tbl_hotelroom` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_roomamenities: ~16 rows (approximately)
INSERT INTO `tbl_roomamenities` (`id`, `idroom`, `idamenities`, `created_at`, `updated_at`) VALUES
	(13, 4, 11, '2023-09-17 20:34:52', '2023-09-17 20:34:52'),
	(14, 4, 7, '2023-09-17 20:34:54', '2023-09-17 20:34:54'),
	(15, 5, 14, '2023-09-19 00:38:35', '2023-09-19 00:38:35'),
	(16, 5, 23, '2023-09-19 00:39:35', '2023-09-19 00:39:35'),
	(17, 5, 18, '2023-09-19 00:39:38', '2023-09-19 00:39:38'),
	(18, 5, 19, '2023-09-19 00:39:43', '2023-09-19 00:39:43'),
	(19, 6, 18, '2023-09-19 00:45:01', '2023-09-19 00:45:01'),
	(20, 6, 23, '2023-09-19 00:45:09', '2023-09-19 00:45:09'),
	(21, 6, 14, '2023-09-19 00:45:11', '2023-09-19 00:45:11'),
	(22, 6, 7, '2023-09-19 00:45:13', '2023-09-19 00:45:13'),
	(23, 6, 19, '2023-09-19 00:45:19', '2023-09-19 00:45:19'),
	(24, 7, 9, '2023-09-19 18:11:07', '2023-09-19 18:11:07'),
	(25, 7, 18, '2023-09-19 18:11:07', '2023-09-19 18:11:07'),
	(26, 7, 23, '2023-09-19 18:11:15', '2023-09-19 18:11:15'),
	(27, 7, 19, '2023-09-19 18:11:17', '2023-09-19 18:11:17'),
	(28, 7, 7, '2023-09-19 18:11:34', '2023-09-19 18:11:34');

-- Dumping structure for table db_hotel.tbl_roomgallery
CREATE TABLE IF NOT EXISTS `tbl_roomgallery` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idroom` bigint(20) unsigned NOT NULL DEFAULT 0,
  `file` varchar(255) NOT NULL,
  `panjang` varchar(255) DEFAULT NULL,
  `lebar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_roomgallery: ~20 rows (approximately)
INSERT INTO `tbl_roomgallery` (`id`, `idroom`, `file`, `panjang`, `lebar`, `created_at`, `updated_at`) VALUES
	(19, 4, '6507bacd70f4b_1695005389deluxedouble.jpg', NULL, NULL, '2023-09-17 19:49:49', '2023-09-17 19:49:49'),
	(22, 4, '6507c46acb0c0_1695007850doubledeluxe1.jpg', NULL, NULL, '2023-09-17 20:30:50', '2023-09-17 20:30:50'),
	(23, 4, '6507c4ea412dc_1695007978doubledeluxe2.jpg', NULL, NULL, '2023-09-17 20:32:58', '2023-09-17 20:32:58'),
	(24, 5, '65095050913fa_1695109200SUPTWIN.jpg', NULL, NULL, '2023-09-19 00:40:00', '2023-09-19 00:40:00'),
	(25, 5, '6509507b0b821_1695109243SUPTWIN.jpg', NULL, NULL, '2023-09-19 00:40:43', '2023-09-19 00:40:43'),
	(26, 5, '6509509f5b94a_1695109279SUPTWIN.jpg', NULL, NULL, '2023-09-19 00:41:19', '2023-09-19 00:41:19'),
	(27, 5, '650950c7d3817_1695109319SUPTWIN.jpg', NULL, NULL, '2023-09-19 00:41:59', '2023-09-19 00:41:59'),
	(28, 6, '6509519c065f2_1695109532DeluxeKing.jpg', NULL, NULL, '2023-09-19 00:45:32', '2023-09-19 00:45:32'),
	(29, 6, '650951c50a7b5_1695109573DeluxeKing.jpg', NULL, NULL, '2023-09-19 00:46:13', '2023-09-19 00:46:13'),
	(30, 6, '650951f2bdbe6_1695109618DeluxeKing.jpg', NULL, NULL, '2023-09-19 00:46:58', '2023-09-19 00:46:58'),
	(31, 6, '6509521d8fadb_1695109661DeluxeKing.jpg', NULL, NULL, '2023-09-19 00:47:41', '2023-09-19 00:47:41'),
	(32, 6, '6509524354d4c_1695109699DeluxeKing.jpg', NULL, NULL, '2023-09-19 00:48:19', '2023-09-19 00:48:19'),
	(33, 6, '65095263b61a1_1695109731DeluxeKing.jpg', NULL, NULL, '2023-09-19 00:48:51', '2023-09-19 00:48:51'),
	(34, 6, '650952848ff1c_1695109764DeluxeKing.jpg', NULL, NULL, '2023-09-19 00:49:24', '2023-09-19 00:49:24'),
	(35, 6, '650952a4e03f4_1695109796DeluxeKing.jpg', NULL, NULL, '2023-09-19 00:49:56', '2023-09-19 00:49:56'),
	(36, 6, '650952ce546a8_1695109838DeluxeKing.jpg', NULL, NULL, '2023-09-19 00:50:38', '2023-09-19 00:50:38'),
	(37, 6, '650952efe79ef_1695109871DeluxeKing.jpg', NULL, NULL, '2023-09-19 00:51:12', '2023-09-19 00:51:12'),
	(38, 7, '650a46da7a8d8_1695172314horisonmentengroom.jpg', NULL, NULL, '2023-09-19 18:11:54', '2023-09-19 18:11:54'),
	(39, 7, '650a47ee1b295_1695172590horisonmentengroom.jpg', NULL, NULL, '2023-09-19 18:16:30', '2023-09-19 18:16:30'),
	(40, 7, '650a4810bf135_1695172624horisonmentengroom.jpg', NULL, NULL, '2023-09-19 18:17:04', '2023-09-19 18:17:04'),
	(43, 4, '65e3f4ab43552_1709438123deluxedoublehum.jpg', NULL, NULL, '2024-03-02 20:55:23', '2024-03-02 20:55:23');

-- Dumping structure for table db_hotel.tbl_roomtype
CREATE TABLE IF NOT EXISTS `tbl_roomtype` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(5) NOT NULL,
  `name` varchar(35) NOT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_roomtype: ~18 rows (approximately)
INSERT INTO `tbl_roomtype` (`id`, `code`, `name`, `aktif`, `created_at`, `updated_at`) VALUES
	(5, 'STDR', 'Standard Room', 1, '2023-09-17 18:35:01', '2023-09-17 18:35:01'),
	(6, 'SUPR', 'Superior Room', 1, '2023-09-17 18:35:32', '2023-09-17 18:35:32'),
	(7, 'DLXR', 'Deluxe Twin', 1, '2023-09-17 18:36:26', '2023-09-19 17:49:19'),
	(8, 'FMYR', 'Family Room', 1, '2023-09-17 18:36:59', '2023-09-17 18:36:59'),
	(9, 'JNRR', 'Junior Suite', 1, '2023-09-17 18:37:27', '2023-09-17 18:37:27'),
	(10, 'SUTR', 'Suite Room', 1, '2023-09-17 18:37:51', '2023-09-17 18:37:51'),
	(11, 'PRSR', 'Presidential Suite', 1, '2023-09-17 18:38:13', '2023-09-17 18:38:13'),
	(12, 'DLDR', 'Deluxe Double', 1, '2023-09-17 18:41:34', '2023-09-19 17:49:33'),
	(13, 'SPTW', 'Superior Twin', 1, '2023-09-19 00:31:42', '2023-09-19 00:31:42'),
	(14, 'DLKG', 'Deluxe King', 1, '2023-09-19 00:32:04', '2023-09-19 00:32:04'),
	(15, 'GLPG', 'Glamping', 1, '2023-09-19 00:32:18', '2023-09-19 00:32:18'),
	(16, 'GRST', 'Grand Suite', 1, '2023-09-19 00:32:32', '2023-09-19 00:32:32'),
	(17, 'FMSP', 'Family Superior', 1, '2023-09-19 00:32:46', '2023-09-19 00:32:46'),
	(18, 'FMKC', 'Family Kids Cottage', 1, '2023-09-19 00:33:19', '2023-09-19 00:33:19'),
	(19, 'FAMS', 'Family Suite', 1, '2023-09-19 00:33:35', '2023-09-19 00:33:35'),
	(20, 'FAMR', 'Family Royal', 1, '2023-09-19 00:33:51', '2023-09-19 00:33:51'),
	(21, 'FAMG', 'Family Grande', 1, '2023-09-19 00:34:07', '2023-09-19 00:34:07'),
	(23, 'EXCT', 'Executive', 1, '2023-09-19 17:50:08', '2023-09-19 17:50:08');

-- Dumping structure for table db_hotel.tbl_usergroup
CREATE TABLE IF NOT EXISTS `tbl_usergroup` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `namaGroup` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.tbl_usergroup: ~0 rows (approximately)
INSERT INTO `tbl_usergroup` (`id`, `namaGroup`, `deskripsi`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', NULL, '2023-07-14 20:40:29', '2023-07-14 20:40:29');

-- Dumping structure for table db_hotel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idgroup` int(11) NOT NULL,
  `status` enum('active','suspend') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_hotel.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `password`, `idgroup`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@organisation.com', '$2y$10$c/XUlQ2q3rYadh1FFNxmKeixsW2t1jXfm0vJsvfkIvRnsN1QIGoM6', 1, 'active', '2023-07-14 20:40:31', '2023-07-14 20:40:31');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
