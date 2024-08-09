-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2024 at 10:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `materi_kursus`
--

CREATE TABLE `materi_kursus` (
  `id` int NOT NULL,
  `nama` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jenis_kursus` varchar(500) NOT NULL,
  `link` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `materi_kursus`
--

INSERT INTO `materi_kursus` (`id`, `nama`, `deskripsi`, `jenis_kursus`, `link`) VALUES
(5, 'MATEMATIKA', 'Kursus ini dirancang untuk membangun fondasi matematika yang kuat dengan fokus pada konsep dasar seperti operasi aritmatika, pecahan, desimal, persentase, dan operasi dasar aljabar. Peserta akan belajar cara memecahkan masalah sederhana dan memahami hubungan antara berbagai konsep matematika dasar. Kursus ini cocok untuk siswa yang ingin memperkuat keterampilan matematika mereka sebelum melanjutkan ke kursus yang lebih lanjut.', 'MATEMATIKA', 'https://buku.kemdikbud.go.id/katalog/Matematika-untuk-SDMI-Kelas-IV'),
(6, 'SEJARAH', 'Pelajaran Sejarah bertujuan untuk memberikan pemahaman mendalam tentang peristiwa-peristiwa sejarah yang membentuk dunia dan negara kita saat ini. Melalui analisis peristiwa sejarah, kita akan mengeksplorasi perkembangan sosial, politik, ekonomi, dan budaya dari masa lalu dan bagaimana hal tersebut memengaruhi kehidupan kita saat ini.', 'SEJARAH', 'https://buku.kemdikbud.go.id/katalog/Matematika-untuk-SDMI-Kelas-IV');

-- --------------------------------------------------------

--
-- Table structure for table `nama_kursus`
--

CREATE TABLE `nama_kursus` (
  `id` int NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deskripsi` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `durasi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nama_kursus`
--

INSERT INTO `nama_kursus` (`id`, `nama`, `alamat`, `deskripsi`, `durasi`) VALUES
(6, 'MATEMATIKA', 'BANJARMASIN', 'Kursus ini dirancang untuk membangun fondasi matematika yang kuat dengan fokus pada konsep dasar seperti operasi aritmatika, pecahan, desimal, persentase, dan operasi dasar aljabar. Peserta akan belajar cara memecahkan masalah sederhana dan memahami hubungan antara berbagai konsep matematika dasar. Kursus ini cocok untuk siswa yang ingin memperkuat keterampilan matematika mereka sebelum melanjutkan ke kursus yang lebih lanjut.', '2024-08-24'),
(7, 'SEJARAH', 'BANJARMASIN', 'Pelajaran Sejarah bertujuan untuk memberikan pemahaman mendalam tentang peristiwa-peristiwa sejarah yang membentuk dunia dan negara kita saat ini. Melalui analisis peristiwa sejarah, kita akan mengeksplorasi perkembangan sosial, politik, ekonomi, dan budaya dari masa lalu dan bagaimana hal tersebut memengaruhi kehidupan kita saat ini.', '2024-08-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi_kursus`
--
ALTER TABLE `materi_kursus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nama_kursus`
--
ALTER TABLE `nama_kursus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materi_kursus`
--
ALTER TABLE `materi_kursus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nama_kursus`
--
ALTER TABLE `nama_kursus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
