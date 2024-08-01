-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2024 at 04:02 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `program_studi` varchar(100) NOT NULL,
  `ipk` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jurusan`, `program_studi`, `ipk`) VALUES
('2021001', 'Ahmad Surya', 'Jakarta', '2000-01-15', 'Teknologi Informasi', 'Sistem Informasi', 3.75),
('2021002', 'Budi Santoso', 'Bandung', '1999-05-22', 'Teknologi Informasi', 'Teknik Komputer', 3.6),
('2021003', 'Citra Dewi', 'Surabaya', '2000-03-18', 'Teknologi Informasi', 'Manajemen Konstruksi', 3.8),
('2021004', 'Dewi Lestari', 'Yogyakarta', '1999-11-30', 'Teknologi Informasi', 'Teknik Industri', 3.5),
('2021005', 'Eko Prasetyo', 'Semarang', '2000-07-07', 'Teknologi Informasi', 'Teknologi Pangan', 3.9),
('2021006', 'Fitri Handayani', 'Malang', '1998-12-25', 'Teknologi Informasi', 'Rekayasa Lingkungan', 3.7),
('2021007', 'Gita Permata', 'Makassar', '2000-06-10', 'Teknologi Informasi', 'Manajemen Industri', 3.65),
('2021008', 'Hadi Wijaya', 'Medan', '1999-09-14', 'Teknologi Informasi', 'Desain Interior', 3.85),
('2021010', 'Joko Saputra', 'Bali', '1998-10-12', 'Teknologi Informasi', 'Ilmu Komputer', 3.95),
('2231730060', 'Dimas Gilang Dwi Aji', 'Kediri', '2003-08-02', 'Teknologi Informasi', 'MI', 3.7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
