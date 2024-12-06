-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_hrd.agama
CREATE TABLE IF NOT EXISTS `agama` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `agama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.agama: ~6 rows (approximately)
INSERT INTO `agama` (`id`, `agama`) VALUES
	(1, 'Islam'),
	(2, 'Protestan'),
	(3, 'Katolik'),
	(4, 'Hindu'),
	(5, 'Budha'),
	(6, 'Lainnya');

-- Dumping structure for table db_hrd.banklain
CREATE TABLE IF NOT EXISTS `banklain` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `banklain` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.banklain: ~0 rows (approximately)
INSERT INTO `banklain` (`id`, `banklain`) VALUES
	(1, 'BCA Syariah');

-- Dumping structure for table db_hrd.bentukmuka
CREATE TABLE IF NOT EXISTS `bentukmuka` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `bentukmuka` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.bentukmuka: ~0 rows (approximately)
INSERT INTO `bentukmuka` (`id`, `bentukmuka`) VALUES
	(1, 'Bulat');

-- Dumping structure for table db_hrd.biodata
CREATE TABLE IF NOT EXISTS `biodata` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nip` varchar(50) DEFAULT NULL,
  `noidentitas` varchar(50) DEFAULT NULL,
  `npwp` varchar(50) DEFAULT NULL,
  `gelardepan` varchar(50) DEFAULT NULL,
  `gelarbelakang` varchar(50) DEFAULT NULL,
  `namalengkap` varchar(50) DEFAULT NULL,
  `idjeniskelamin` bigint(20) DEFAULT NULL,
  `iddaftarjenispendidikan` bigint(20) DEFAULT NULL,
  `idstatuskontrak` bigint(20) DEFAULT NULL,
  `idunit` bigint(20) DEFAULT NULL,
  `iddepartment` bigint(20) DEFAULT NULL,
  `idjabatan` bigint(20) DEFAULT NULL,
  `idinchargejabatan` bigint(20) DEFAULT NULL,
  `tglmasukkerja` date DEFAULT NULL,
  `tglkontrak` date DEFAULT NULL,
  `idstatus` bigint(20) DEFAULT NULL,
  `tempatlahir` varchar(50) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `idgoldarah` bigint(20) DEFAULT NULL,
  `idagama` bigint(20) DEFAULT NULL,
  `idkewarganegaraan` bigint(20) DEFAULT NULL,
  `namajalan_ktp` varchar(50) DEFAULT NULL,
  `kelurahan_ktp` varchar(50) DEFAULT NULL,
  `kecamatan_ktp` varchar(50) DEFAULT NULL,
  `provinsi_ktp` varchar(50) DEFAULT NULL,
  `kodepos_ktp` varchar(50) DEFAULT NULL,
  `namajalan_domisili` varchar(50) DEFAULT NULL,
  `kelurahan_domisili` varchar(50) DEFAULT NULL,
  `kecamatan_domisili` varchar(50) DEFAULT NULL,
  `provinsi_domisili` varchar(50) DEFAULT NULL,
  `kodepos_domisili` varchar(50) DEFAULT NULL,
  `telprumah` varchar(50) DEFAULT NULL,
  `handphone1` varchar(50) DEFAULT NULL,
  `handphone2` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  `emailpribadi` varchar(50) DEFAULT NULL,
  `emailkantor` varchar(50) DEFAULT NULL,
  `idwarnakulit` bigint(20) DEFAULT NULL,
  `idbentukmuka` bigint(20) DEFAULT NULL,
  `idjenisrambut` bigint(20) DEFAULT NULL,
  `tinggibadan` int(11) DEFAULT NULL,
  `beratbadan` int(11) DEFAULT NULL,
  `idpria_kerja` bigint(20) DEFAULT NULL,
  `idpria_olahraga` bigint(20) DEFAULT NULL,
  `idpria_celana` bigint(20) DEFAULT NULL,
  `idwanita_blazer` bigint(20) DEFAULT NULL,
  `idwanita_blouse` bigint(20) DEFAULT NULL,
  `idwanita_rok` bigint(20) DEFAULT NULL,
  `idukuransepatu` bigint(20) DEFAULT NULL,
  `norekeningmandiri` varchar(50) DEFAULT NULL,
  `atasnamamandiri` varchar(50) DEFAULT NULL,
  `banklain` bigint(20) DEFAULT NULL,
  `norekeninglain` varchar(50) DEFAULT NULL,
  `atasnamalain` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.biodata: ~4 rows (approximately)
INSERT INTO `biodata` (`id`, `nip`, `noidentitas`, `npwp`, `gelardepan`, `gelarbelakang`, `namalengkap`, `idjeniskelamin`, `iddaftarjenispendidikan`, `idstatuskontrak`, `idunit`, `iddepartment`, `idjabatan`, `idinchargejabatan`, `tglmasukkerja`, `tglkontrak`, `idstatus`, `tempatlahir`, `tanggallahir`, `idgoldarah`, `idagama`, `idkewarganegaraan`, `namajalan_ktp`, `kelurahan_ktp`, `kecamatan_ktp`, `provinsi_ktp`, `kodepos_ktp`, `namajalan_domisili`, `kelurahan_domisili`, `kecamatan_domisili`, `provinsi_domisili`, `kodepos_domisili`, `telprumah`, `handphone1`, `handphone2`, `linkedin`, `emailpribadi`, `emailkantor`, `idwarnakulit`, `idbentukmuka`, `idjenisrambut`, `tinggibadan`, `beratbadan`, `idpria_kerja`, `idpria_olahraga`, `idpria_celana`, `idwanita_blazer`, `idwanita_blouse`, `idwanita_rok`, `idukuransepatu`, `norekeningmandiri`, `atasnamamandiri`, `banklain`, `norekeninglain`, `atasnamalain`) VALUES
	(1, '0', '0', '0', '0', '0', '0', 2, 9, 2, 1, 4, 1, 1, '2024-08-29', '2024-08-20', 1, '0', '2024-08-14', 1, 1, 1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, '0', '0', 1, '0', '0'),
	(2, '1', '1', '1', '1', '1', '1', 1, 9, 1, 1, 14, 1, 1, '2024-08-14', '2024-08-14', 1, '1', '2024-09-03', 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '1', '1', 1, '1', '1'),
	(3, '21', '11', '13', 'ce', 'we', 'sw', 1, 19, 1, 1, 15, 1, 2, '2024-08-14', '2024-08-14', 1, 'ws', '2024-08-14', 1, 4, 1, 'cd', 'sc', 'sc', 'se', '08', 'cs', 'cd', 'sc', 'sc', '21', '67', '12', '13', 'tes', 'es@gmail.com', '@a@gmail.com', 1, 1, 1, 3, 2, 1, 1, 1, 1, 1, 1, 1, '32', 'er', 1, '123', 'rs'),
	(4, 'c', 'c', 'c', 'c', 'c', 'c', 2, 18, 5, 1, 16, 2, 2, '2024-08-14', '2024-08-14', 1, 'c', '2024-08-14', 1, 5, 1, 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 1, 1, 1, 100, 50, 1, 1, 1, 1, 1, 1, 1, 'c', 'c', 1, 'c', 'c'),
	(5, '1270018000', '327604640303001', '17289019', 'Haji', 'S.Kom.', 'Rey', 1, 18, 1, 1, 16, 2, 2, '2024-08-14', '2024-08-14', 1, 'Bhedenk', '2024-08-14', 1, 1, 1, 'a', 'a', 'a', 'a', '0', 'a', 'a', 'a', 'a', '0', '0', '0', '0', 'a', 'a', 'a', 1, 1, 1, 5, 5, 1, 1, 1, 1, 1, 1, 1, '0', 'a', 1, '0', 'a');

-- Dumping structure for table db_hrd.daftardepartemen
CREATE TABLE IF NOT EXISTS `daftardepartemen` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `kodedepartemen` varchar(2) DEFAULT NULL,
  `namadepartemen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.daftardepartemen: ~13 rows (approximately)
INSERT INTO `daftardepartemen` (`id`, `kodedepartemen`, `namadepartemen`) VALUES
	(4, '06', 'Steering Commite'),
	(5, '02', 'Busines Development'),
	(6, '04', 'Finance & Accounting'),
	(7, '05', 'Human Resource Development'),
	(8, '03', 'Sales & Marketing'),
	(9, '01', 'Operations'),
	(10, '07', 'Front Office'),
	(11, '08', 'Housekeeping'),
	(12, '09', 'FB Service'),
	(13, '10', 'FB Product'),
	(14, '11', 'Engineering'),
	(15, '12', 'Ecommerce'),
	(16, '13', 'IT');

-- Dumping structure for table db_hrd.daftarfakultas
CREATE TABLE IF NOT EXISTS `daftarfakultas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fakultas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.daftarfakultas: ~2 rows (approximately)
INSERT INTO `daftarfakultas` (`id`, `fakultas`) VALUES
	(3, 'Teknik'),
	(4, 'Udara');

-- Dumping structure for table db_hrd.daftarjenispendidikan
CREATE TABLE IF NOT EXISTS `daftarjenispendidikan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pendidikan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.daftarjenispendidikan: ~11 rows (approximately)
INSERT INTO `daftarjenispendidikan` (`id`, `pendidikan`) VALUES
	(9, 'TK'),
	(10, 'SD'),
	(11, 'S3'),
	(12, 'SLTP'),
	(13, 'SLTA'),
	(14, 'D1'),
	(15, 'D2'),
	(16, 'D3'),
	(17, 'D4'),
	(18, 'S1'),
	(19, 'S2');

-- Dumping structure for table db_hrd.daftarjurusan
CREATE TABLE IF NOT EXISTS `daftarjurusan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `kodejurusan` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.daftarjurusan: ~1 rows (approximately)

-- Dumping structure for table db_hrd.goldarah
CREATE TABLE IF NOT EXISTS `goldarah` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `goldarah` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.goldarah: ~0 rows (approximately)
INSERT INTO `goldarah` (`id`, `goldarah`) VALUES
	(1, 'A');

-- Dumping structure for table db_hrd.harilibur
CREATE TABLE IF NOT EXISTS `harilibur` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `dari` date DEFAULT NULL,
  `sampai` date DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.harilibur: ~2 rows (approximately)
INSERT INTO `harilibur` (`id`, `dari`, `sampai`, `keterangan`) VALUES
	(2, '2024-08-06', '2024-08-07', 'Omar Rebahan'),
	(3, '2024-12-25', '2024-12-25', 'Natal'),
	(4, '2024-08-17', '2024-08-17', 'Libur Gegaragesgarik');

-- Dumping structure for table db_hrd.inchargejabatan
CREATE TABLE IF NOT EXISTS `inchargejabatan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `inchargejabatan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.inchargejabatan: ~2 rows (approximately)
INSERT INTO `inchargejabatan` (`id`, `inchargejabatan`) VALUES
	(1, 'VP, GM'),
	(2, 'IT');

-- Dumping structure for table db_hrd.jeniscuti
CREATE TABLE IF NOT EXISTS `jeniscuti` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `jeniscuti` varchar(50) NOT NULL,
  `jmlhari` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.jeniscuti: ~0 rows (approximately)
INSERT INTO `jeniscuti` (`id`, `jeniscuti`, `jmlhari`) VALUES
	(1, 'Omar Melahirkan', 21);

-- Dumping structure for table db_hrd.jeniskelamin
CREATE TABLE IF NOT EXISTS `jeniskelamin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `jeniskelamin` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.jeniskelamin: ~2 rows (approximately)
INSERT INTO `jeniskelamin` (`id`, `jeniskelamin`) VALUES
	(1, 'Laki-laki'),
	(2, 'Perempuan');

-- Dumping structure for table db_hrd.jenisrambut
CREATE TABLE IF NOT EXISTS `jenisrambut` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `jenisrambut` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.jenisrambut: ~0 rows (approximately)
INSERT INTO `jenisrambut` (`id`, `jenisrambut`) VALUES
	(1, 'Cepak');

-- Dumping structure for table db_hrd.kewarganegaraan
CREATE TABLE IF NOT EXISTS `kewarganegaraan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `kewarganegaraan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.kewarganegaraan: ~0 rows (approximately)
INSERT INTO `kewarganegaraan` (`id`, `kewarganegaraan`) VALUES
	(1, 'WNA');

-- Dumping structure for table db_hrd.kontrakpegawai
CREATE TABLE IF NOT EXISTS `kontrakpegawai` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ktp` varchar(16) NOT NULL,
  `nip` varchar(13) DEFAULT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `gelardepan` varchar(50) DEFAULT NULL,
  `gelarbelakang` varchar(50) DEFAULT NULL,
  `idjeniskelamin` bigint(20) DEFAULT NULL,
  `idpendidikan` bigint(20) DEFAULT NULL,
  `idagama` bigint(20) DEFAULT NULL,
  `namajalan_ktp` varchar(50) DEFAULT NULL,
  `kelurahan_ktp` varchar(50) DEFAULT NULL,
  `kecamatan_ktp` varchar(50) DEFAULT NULL,
  `namajalan_domisili` varchar(50) DEFAULT NULL,
  `kelurahan_domisili` varchar(50) DEFAULT NULL,
  `kecamatan_domisili` varchar(50) DEFAULT NULL,
  `nokontrak` varchar(50) DEFAULT NULL,
  `tglkontrak` date NOT NULL,
  `iddepartemen` bigint(20) NOT NULL,
  `idleveljabatan` bigint(20) NOT NULL,
  `idstatuskontrak` bigint(20) NOT NULL,
  `awalkontrak` date NOT NULL,
  `akhirkontrak` date NOT NULL,
  `idkodeunit` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.kontrakpegawai: ~6 rows (approximately)
INSERT INTO `kontrakpegawai` (`id`, `ktp`, `nip`, `namalengkap`, `gelardepan`, `gelarbelakang`, `idjeniskelamin`, `idpendidikan`, `idagama`, `namajalan_ktp`, `kelurahan_ktp`, `kecamatan_ktp`, `namajalan_domisili`, `kelurahan_domisili`, `kecamatan_domisili`, `nokontrak`, `tglkontrak`, `iddepartemen`, `idleveljabatan`, `idstatuskontrak`, `awalkontrak`, `akhirkontrak`, `idkodeunit`) VALUES
	(18, '0', '001.23.13.001', 'a', 'a', 'a', 1, 18, 1, 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2023-01-01', 16, 1, 1, '2023-01-01', '2024-08-15', '1'),
	(19, '0993274276472777', '001.24.10.002', 'Citra', 'dr.', 'Sp.KJ', 2, 19, 1, 'Bhedenk', 'Bhedenk', 'Bhedenk', 'Bhedenk', 'Bhedenk', 'Bhedenk', '1/SK/2', '2024-08-15', 13, 2, 3, '2024-08-15', '2024-08-15', '1'),
	(20, '1234567890123812', '001.24.13.003', 'Bella', 'Ir.', 'M.Kom.', 2, 19, 5, 'BSD', 'BSD', 'BSD', 'BSD', 'BSD', 'BSD', '3/SK/3', '2024-08-18', 16, 2, 5, '2024-08-18', '2024-08-30', '1'),
	(21, '1234567891234554', '001.24.05.004', 'Dewi', 'Ir.', 'Ph.D.', 2, 11, 1, 'Sunter', 'Sunter', 'Sunter', 'Sunter', 'Sunter', 'Sunter', '1/P/1', '2024-08-26', 7, 4, 5, '2024-08-26', '2024-08-26', '1'),
	(22, '123456789012321', '001.24.01.005', 'Reyhan', 'Prof.', 'S.Kom., M.Kom.', 1, 11, 1, 'Citra Raya', 'Cikupa', 'Cikupa', 'Citra Raya', 'Cikupa', 'Cikupa', '1/P/2', '2024-08-28', 9, 3, 5, '2024-08-28', '2025-01-01', '1'),
	(23, '1234567890123810', '001.24.04.006', 'Keshya', 'Prof.', 'S.Kom., M.Kom.', 2, 11, 2, 'Gading', 'Gading', 'Gading', 'Gading', 'Gading', 'Gading', '1/P/3', '2024-08-28', 6, 2, 5, '2024-08-28', '2032-01-28', '1');

-- Dumping structure for table db_hrd.leveljabatan
CREATE TABLE IF NOT EXISTS `leveljabatan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `namalevel` varchar(50) DEFAULT NULL,
  `leveljabatan` int(11) DEFAULT NULL,
  `uangsaku_7h` int(11) DEFAULT NULL,
  `uangsaku_29h` int(11) DEFAULT NULL,
  `uangsaku_30h` int(11) DEFAULT NULL,
  `uangsaku_unit` int(11) DEFAULT NULL,
  `uangmakan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.leveljabatan: ~9 rows (approximately)
INSERT INTO `leveljabatan` (`id`, `namalevel`, `leveljabatan`, `uangsaku_7h`, `uangsaku_29h`, `uangsaku_30h`, `uangsaku_unit`, `uangmakan`) VALUES
	(1, 'Director', 1, 500, 2000000, 3000000, 1500000, 2700000),
	(2, 'VP', 2, 100, 2000, 5000, 6000, 10000),
	(3, 'Snr GM/Asst VP', 3, NULL, NULL, NULL, NULL, NULL),
	(4, 'GM', 4, NULL, NULL, NULL, NULL, NULL),
	(5, 'MGR/HOD', 5, NULL, NULL, NULL, NULL, NULL),
	(6, 'Asst Mgr', 6, NULL, NULL, NULL, NULL, NULL),
	(7, 'SPV', 7, NULL, NULL, NULL, NULL, NULL),
	(8, 'Staff', 8, NULL, NULL, NULL, NULL, NULL),
	(9, 'R&F/Non Staff', 9, NULL, NULL, NULL, NULL, NULL);

-- Dumping structure for table db_hrd.orangtua_pasangan
CREATE TABLE IF NOT EXISTS `orangtua_pasangan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `namaayah` varchar(50) DEFAULT NULL,
  `pekerjaanayah` varchar(50) DEFAULT NULL,
  `idpendidikanayah` bigint(20) DEFAULT NULL,
  `namaibu` varchar(50) DEFAULT NULL,
  `pekerjaanibu` varchar(50) DEFAULT NULL,
  `idpendidikanibu` bigint(20) DEFAULT NULL,
  `namapasangan` varchar(50) DEFAULT NULL,
  `pekerjaanpasangan` varchar(50) DEFAULT NULL,
  `idpendidikanpasangan` bigint(20) DEFAULT NULL,
  `tempatlahirpasangan` varchar(50) DEFAULT NULL,
  `tgllahirpasangan` date DEFAULT NULL,
  `idgoldarahpasangan` bigint(20) DEFAULT NULL,
  `idagamapasangan` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.orangtua_pasangan: ~3 rows (approximately)
INSERT INTO `orangtua_pasangan` (`id`, `namaayah`, `pekerjaanayah`, `idpendidikanayah`, `namaibu`, `pekerjaanibu`, `idpendidikanibu`, `namapasangan`, `pekerjaanpasangan`, `idpendidikanpasangan`, `tempatlahirpasangan`, `tgllahirpasangan`, `idgoldarahpasangan`, `idagamapasangan`) VALUES
	(1, '1', '1', 10, '1', '1', 11, '1', '1', 9, '1', '2024-08-14', 1, 6),
	(2, 'es', 'sc', 17, 'ew', 'aw', 17, 'qc', 'zs', 17, 'bg', '2024-08-14', 1, 4),
	(3, 'c', 'c', 19, 'c', 'c', 11, 'c', 'c', 19, 'c', '2024-08-14', 1, 4),
	(4, 'a', 'a', 19, 'a', 'a', 18, 'a', 'a', 18, 'a', '2024-08-14', 1, 1);

-- Dumping structure for table db_hrd.pengajuancuti
CREATE TABLE IF NOT EXISTS `pengajuancuti` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggalpengajuan` date NOT NULL,
  `idjeniscuti` bigint(20) NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `harikerja` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `alamatcuti` tinytext NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `atasan` varchar(50) DEFAULT NULL,
  `hrd` varchar(50) DEFAULT NULL,
  `operasional` varchar(50) DEFAULT NULL,
  `direksi` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `alasanditolak` tinytext DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `approvebyatasan` tinyint(1) DEFAULT 0,
  `approvebyhrd` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.pengajuancuti: ~18 rows (approximately)
INSERT INTO `pengajuancuti` (`id`, `tanggalpengajuan`, `idjeniscuti`, `dari`, `sampai`, `harikerja`, `keterangan`, `alamatcuti`, `kontak`, `atasan`, `hrd`, `operasional`, `direksi`, `status`, `alasanditolak`, `nip`, `jam`, `approvebyatasan`, `approvebyhrd`) VALUES
	(1, '2024-08-15', 1, '2024-08-15', '2024-08-15', 1, 'Test', 'Test', '081280951616', '1', 'Ok', 'Ok', 'Ok', 'Ok', '-', NULL, NULL, 1, 1),
	(2, '2024-08-15', 1, '2024-08-15', '2024-08-31', 12, 'Siap', 'Jl. Melawai', '081280959320', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
	(3, '2024-08-15', 1, '2024-08-15', '2024-08-30', 0, 'Sip', 'Bhedenk', '081280591524', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
	(4, '2024-08-16', 1, '2024-08-17', '2024-08-29', 0, 'Approve', 'Sunter', '08129994444', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1),
	(5, '2024-08-23', 1, '2024-08-30', '2024-09-06', 0, 'Approved', 'Cikupa', '081280958182', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
	(6, '2024-08-15', 1, '2024-08-19', '2024-08-26', 0, 'Approved', 'Cikupkup', '08129998485', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
	(7, '2024-08-15', 1, '2024-08-19', '2024-09-02', 0, 'Approved', 'Cengkareng', '081280955672', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
	(8, '2024-08-15', 1, '2024-08-15', '2024-09-04', 0, 'Ok', 'Jl. Mangga', '08129994545', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
	(9, '2024-08-15', 1, '2024-08-23', '2024-08-26', 2, 'Ok', 'Kampus A', '081280951818', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
	(10, '2024-08-22', 1, '2024-08-22', '2024-08-25', 2, 'Ok', 'Kampus A', '081299955', 'VP', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
	(11, '2024-08-22', 1, '2024-08-22', '2024-08-30', 7, 'Ok', 'Cengkareng', '08129993124', '001.23.13.001', NULL, NULL, NULL, NULL, NULL, '001.23.13.001', NULL, 1, 1),
	(12, '2024-08-01', 1, '2024-08-01', '2024-08-30', 22, 'Ok', 'Jl. Mangga', '081280951719', '001.23.13.001', NULL, NULL, NULL, NULL, NULL, '001.23.13.001', NULL, 1, 1),
	(13, '2024-08-22', 1, '2024-08-22', '2024-08-31', 7, 'Approved', 'Cengkareng', '08129994444', '001.23.13.001', NULL, NULL, NULL, NULL, NULL, '001.24.13.003', NULL, 1, 1),
	(14, '2024-08-01', 1, '2024-08-08', '2024-08-23', 12, 'Remote Work', 'Sunter', '08129995712', '001.23.13.001', NULL, NULL, NULL, NULL, NULL, '001.24.13.003', '14:35:20', 1, 1),
	(15, '2024-08-31', 1, '2024-09-05', '2024-10-05', 22, 'WFH', 'Rumah Omar', '08129998183', '001.23.13.001', NULL, NULL, NULL, NULL, NULL, '001.24.13.003', '16:52:00', 1, 1),
	(16, '2024-09-07', 1, '2024-09-09', '2024-09-13', 5, 'WFH Part 2', 'Bhedenk', '08128099830', '001.23.13.001', NULL, NULL, NULL, NULL, NULL, '001.24.13.003', '16:52:44', 1, 1),
	(17, '2024-08-28', 1, '2024-08-28', '2024-08-31', 3, 'Ok', 'Cikupkup', '08129992121', '001.23.13.001', NULL, NULL, NULL, NULL, NULL, '001.24.13.003', '09:31:50', 1, 1),
	(18, '2024-08-28', 1, '2024-08-28', '2024-09-07', 8, 'Ok', 'Sunter', '08129992629', '001.23.13.001', NULL, NULL, NULL, NULL, NULL, '001.24.13.003', '11:34:13', 1, 1);

-- Dumping structure for table db_hrd.pengajuanpjs
CREATE TABLE IF NOT EXISTS `pengajuanpjs` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tanggalpengajuan` date DEFAULT NULL,
  `dari` date DEFAULT NULL,
  `sampai` date DEFAULT NULL,
  `extraoff` int(11) DEFAULT NULL,
  `kotatujuan` varchar(50) DEFAULT NULL,
  `idstatushoteltujuan` bigint(20) DEFAULT NULL,
  `keperluanbisnis` varchar(50) DEFAULT NULL,
  `tiket` varchar(50) DEFAULT NULL,
  `remarktiket` varchar(50) DEFAULT NULL,
  `akomodasi` varchar(50) DEFAULT NULL,
  `remarkakomodasi` varchar(50) DEFAULT NULL,
  `transport` varchar(50) DEFAULT NULL,
  `remarktransport` varchar(50) DEFAULT NULL,
  `meal` bigint(20) DEFAULT NULL,
  `remarkmeal` varchar(50) DEFAULT NULL,
  `uangsaku` int(11) DEFAULT NULL,
  `remarkuangsaku` varchar(50) DEFAULT NULL,
  `lainlain` varchar(50) DEFAULT NULL,
  `remarklainlain` varchar(50) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `hrdapproval` tinyint(1) DEFAULT 0,
  `opapproval` tinyint(1) DEFAULT 0,
  `financeapproval` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.pengajuanpjs: ~18 rows (approximately)
INSERT INTO `pengajuanpjs` (`id`, `tanggalpengajuan`, `dari`, `sampai`, `extraoff`, `kotatujuan`, `idstatushoteltujuan`, `keperluanbisnis`, `tiket`, `remarktiket`, `akomodasi`, `remarkakomodasi`, `transport`, `remarktransport`, `meal`, `remarkmeal`, `uangsaku`, `remarkuangsaku`, `lainlain`, `remarklainlain`, `total`, `hrdapproval`, `opapproval`, `financeapproval`) VALUES
	(1, '2024-08-01', '2024-08-15', '2024-08-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(2, '2024-08-01', '2024-08-15', '2024-08-17', NULL, 'Bandung', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(3, '2024-08-21', '2024-08-21', '2024-08-30', NULL, 'Bandung', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(4, '2024-08-21', '2024-08-30', '2024-08-31', NULL, 'Bandung', 2, '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(5, '2024-08-01', '2024-08-05', '2024-08-11', NULL, 'Jakarta', 1, '-', '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(6, '2024-08-15', '2024-08-15', '2024-08-17', NULL, 'Bhedenk', 2, '-', '-', '-', '-', '-', '-', '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(7, '2024-08-21', '2024-08-21', '2024-09-06', NULL, 'Tangerang', 1, '$request->remarkmeal', '$request->remarkmeal', '$request->remarkmeal', '$request->remarkmeal', '$request->remarkmeal', '$request->remarkmeal', '$request->remarkmeal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(8, '2024-08-05', '2024-08-05', '2024-08-30', 8, 'Bekasi', 1, '-', '-', '-', '-', '-', '-', '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(9, '2024-08-01', '2024-08-05', '2024-09-03', 10, '-', 2, '-', '-', '-', '-', '-', '-', '-', 2700000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(10, '2024-08-27', '2024-08-29', '2024-08-31', 1, 'Banten', 1, '1', '1', '-', '1', '0', '1', '0', NULL, '-', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(11, '2024-08-21', '2024-09-01', '2024-09-30', 9, 'Bandung', 1, '-', '-', '-', '-', '-', '-', '-', 2700000, '-', 3000000, '-', NULL, NULL, NULL, NULL, 0, 0),
	(12, '2024-08-21', '2024-08-22', '2024-08-31', 3, 'Banten', 2, 'wew', 'First Class', '-', '10000', '0', 'Pesawat', '0', NULL, '-', NULL, '-', '1', NULL, NULL, NULL, 0, 0),
	(13, '2024-08-21', '2024-08-21', '2024-08-30', 2, 'Banten', 2, 're', 'First Class', '1', '10000', '0', 'Pesawat', '0', NULL, '-', NULL, '-', '1', NULL, NULL, NULL, 0, 0),
	(14, '2024-08-01', '2024-08-01', '2024-08-30', 10, 'Bandung', 1, '-', '-', '-', '-', '-', '-', '-', 2700000, '-', 3000000, NULL, NULL, NULL, NULL, NULL, 0, 0),
	(15, '2024-08-01', '2024-08-01', '2024-08-11', 6, 'Depok', 2, '-', '-', '-', '-', '-', '-', '-', 2700000, '-', 2000000, '-', NULL, NULL, NULL, NULL, 0, 0),
	(16, '2024-08-01', '2024-08-02', '2024-08-29', 10, '-', 1, '-', '-', '-', '-', '-', '-', '-', 2700000, '-', 2000000, '-', NULL, '-', NULL, NULL, 0, 0),
	(17, '2024-08-01', '2024-08-01', '2024-08-05', 2, 'Bandung', 1, '-', '-', '-', '-', '-', '-', '-', 2700000, '-', 500, '-', NULL, '-', 2700500, NULL, 0, 0),
	(18, '2024-08-01', '2024-08-01', '2024-08-02', 0, 'Bandung', 2, '-', '-', '-', '-', '-', '-', '-', 2700000, '-', 500, '-', '-', '-', 2700500, NULL, 0, 0),
	(19, '2024-08-28', '2024-10-07', '2024-10-14', 2, 'Bandung', 1, 'Meeting', 'First Class', '-', 'Bus', '-', 'Bus', '-', 10000, '-', 2000, '-', '-', '-', 12000, 1, 1, 1),
	(20, '2024-08-28', '2024-08-28', '2024-09-18', 6, 'Bali', 2, 'Beli Kinderjoy', '-', '-', '-', '-', '-', '-', 10000, '-', 2000, '-', '-', '-', 12000, 1, 1, 1);

-- Dumping structure for table db_hrd.status
CREATE TABLE IF NOT EXISTS `status` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.status: ~0 rows (approximately)
INSERT INTO `status` (`id`, `status`) VALUES
	(1, 'HTS');

-- Dumping structure for table db_hrd.statushoteltujuan
CREATE TABLE IF NOT EXISTS `statushoteltujuan` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `statushoteltujuan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.statushoteltujuan: ~2 rows (approximately)
INSERT INTO `statushoteltujuan` (`id`, `statushoteltujuan`) VALUES
	(1, 'Sudah Beroperasi'),
	(2, 'Belum Beroperasi');

-- Dumping structure for table db_hrd.statuskontrak
CREATE TABLE IF NOT EXISTS `statuskontrak` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `statuskontrak` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.statuskontrak: ~4 rows (approximately)
INSERT INTO `statuskontrak` (`id`, `statuskontrak`) VALUES
	(1, 'Contract 1'),
	(2, 'Contract 2'),
	(3, 'Contract 3'),
	(4, 'Contract 4'),
	(5, 'Permanent');

-- Dumping structure for table db_hrd.stock
CREATE TABLE IF NOT EXISTS `stock` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `namabarang` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `modal` int(11) DEFAULT NULL,
  `hargajual` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.stock: ~2 rows (approximately)
INSERT INTO `stock` (`id`, `namabarang`, `stock`, `modal`, `hargajual`) VALUES
	(1, 'Ban Suzuki', 20, 7000, 10000),
	(2, 'Ban Honda', 15, 8000, 15000),
	(3, 'gir', 5, 8000, 15000);

-- Dumping structure for table db_hrd.trainee
CREATE TABLE IF NOT EXISTS `trainee` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `namapegawai` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.trainee: ~0 rows (approximately)

-- Dumping structure for table db_hrd.ukuranbaju
CREATE TABLE IF NOT EXISTS `ukuranbaju` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukuran` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.ukuranbaju: ~0 rows (approximately)
INSERT INTO `ukuranbaju` (`id`, `ukuran`) VALUES
	(1, 'XL');

-- Dumping structure for table db_hrd.ukuransepatu
CREATE TABLE IF NOT EXISTS `ukuransepatu` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ukuransepatu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.ukuransepatu: ~0 rows (approximately)
INSERT INTO `ukuransepatu` (`id`, `ukuransepatu`) VALUES
	(1, '40');

-- Dumping structure for table db_hrd.unit
CREATE TABLE IF NOT EXISTS `unit` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `unit` varchar(50) DEFAULT NULL,
  `kodeunit` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.unit: ~0 rows (approximately)
INSERT INTO `unit` (`id`, `unit`, `kodeunit`) VALUES
	(1, 'Corporate', '001');

-- Dumping structure for table db_hrd.unithotel
CREATE TABLE IF NOT EXISTS `unithotel` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `kode` varchar(50) DEFAULT NULL,
  `namaunit` varchar(50) NOT NULL,
  `hrleader` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.unithotel: ~1 rows (approximately)

-- Dumping structure for table db_hrd.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(13) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.user: ~6 rows (approximately)
INSERT INTO `user` (`id`, `username`, `password`) VALUES
	(2, '001.23.13.001', '$2y$10$7xB48DJLoaleUGgcTG17Se.iBtTHsPtTSsP1lFEyIowRxNF0VBJ36'),
	(3, '001.24.10.002', '$2y$10$YQT6vWc595bUXO8XlOyWAOHi8Sajj50DPFUhgBEPsbp4B11eoYzFy'),
	(4, '001.24.13.003', '$2y$10$wfWkusEYfA1nUcwydhZkm.pnuf7MozZRn7qdV0CQlw0c6aNgFmlMW'),
	(5, '001.24.05.004', '$2y$10$leBE1Lgjyvyf4.GB7DsKeO5x5Bg0bOA5YDwX55p2J5Z1ftxUbxWhC'),
	(6, '001.24.01.005', '$2y$10$Wq05QLNGsMxWp3xaCM9bgeIwSt5IVq1nnWPQQwLL6qg.UUe6KOQxK'),
	(7, '001.24.04.006', '$2y$10$ZEaDVwYdCkUKYXAFO5kJMOEx9RhIDUxu6NJm.Nit8DjdksUSpH0jO');

-- Dumping structure for table db_hrd.warnakulit
CREATE TABLE IF NOT EXISTS `warnakulit` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `warnakulit` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table db_hrd.warnakulit: ~0 rows (approximately)
INSERT INTO `warnakulit` (`id`, `warnakulit`) VALUES
	(1, 'Putih');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
