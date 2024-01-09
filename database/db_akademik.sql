-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_akademik
CREATE DATABASE IF NOT EXISTS `db_akademik` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_akademik`;

-- Dumping structure for view db_akademik.calon_mhs
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `calon_mhs` (
	`nis` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_general_ci',
	`nama` VARCHAR(30) NOT NULL COLLATE 'utf8mb4_general_ci',
	`jk` VARCHAR(10) NOT NULL COLLATE 'utf8mb4_general_ci',
	`telepon` VARCHAR(20) NOT NULL COLLATE 'utf8mb4_general_ci',
	`alamat` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`foto` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

-- Dumping structure for table db_akademik.dosen
CREATE TABLE IF NOT EXISTS `dosen` (
  `nidn` char(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jabatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_akademik.dosen: ~2 rows (approximately)
INSERT INTO `dosen` (`nidn`, `nama`, `alamat`, `jabatan`) VALUES
	('00112', 'Yamagaki Thatsuyama', 'Osaka', 'Dosen'),
	('00113', 'Kim Jong Kwuok', 'Korea Utara', 'Mahasiswa');

-- Dumping structure for table db_akademik.jadwal
CREATE TABLE IF NOT EXISTS `jadwal` (
  `hari` varchar(50) NOT NULL,
  `jam` varchar(50) NOT NULL,
  `matakuliah` varchar(50) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_akademik.jadwal: ~11 rows (approximately)
INSERT INTO `jadwal` (`hari`, `jam`, `matakuliah`, `nama_dosen`) VALUES
	('Senin', '08.40 - 10.20', 'Rekayasa_Perangkat_Lunak_I', 'Rina Yulius, S.Pd., M.Eng'),
	('Senin ', '10.20 - 12.00', 'Struktur_Data', 'Nur Zahrati Janah, S.Kom, M.SC.'),
	('Selasa ', '09.30 - 11.10', 'Dasar_Pemograman_Web', 'Yeni Rokhayati, S.Si., M.SC'),
	('Selasa ', '12.00 - 17.00', 'Prak_Dasar_Pemograman_Web', 'Yeni Rokhayati, S.Si., M.SC'),
	('Rabu', '09.30 - 12.00', 'Pengantar_Basis_Data', 'Sartikha, S.Tr., M.Eng'),
	('Rabu', '12.50 - 16.10', 'Prak_Pengantar_Basis_Data', 'Dodi Prima Resda, S.Pd., M.Kom'),
	('Kamis', '08.40 - 10.20', 'Statistika', 'Siskha Handayani, Msi'),
	('Kamis', '09.30 - 12.00', 'Sistem_Operasi', 'Agus Fatulloh, S.T.M.T.'),
	('Kamis', '12.50 - 16.10', 'Prak_Sistem_Operasi', 'Hajrul Khaira'),
	('Jumat', '09.30 - 12.00', 'Pemrograman_Berorientasi_Objek', 'Mira Chandra Kirana, S.T., M.T'),
	('Jumat', '13.40- 17.10', 'Prak_Pemrograman_Berorientasi_Objek', 'Festy Winda Sari, S.TI');

-- Dumping structure for table db_akademik.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` char(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_akademik.mahasiswa: ~1 rows (approximately)
INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `jurusan`) VALUES
	('3312001118', 'Muhammad Fauzan', 'Tanjung Piayu', 'Informatika');

-- Dumping structure for table db_akademik.pegawai
CREATE TABLE IF NOT EXISTS `pegawai` (
  `nik` char(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bagian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_akademik.pegawai: ~4 rows (approximately)
INSERT INTO `pegawai` (`nik`, `nama`, `bagian`) VALUES
	('217101', 'Alex Pjok', 'Direktur Utama'),
	('217102', 'Steve Ajiz', 'Donatur'),
	('217103', 'Kim Jong Kwuok', 'Donatur'),
	('217104', 'David Theoparli S', 'Supervisor');

-- Dumping structure for table db_akademik.user
CREATE TABLE IF NOT EXISTS `user` (
  `username` char(10) NOT NULL,
  `password` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_akademik.user: ~2 rows (approximately)
INSERT INTO `user` (`username`, `password`) VALUES
	('admin', 'admin'),
	('Fauzan', 'fauzan');

-- Dumping structure for view db_akademik.calon_mhs
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `calon_mhs`;
;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
