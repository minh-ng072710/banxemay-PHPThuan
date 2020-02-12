-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2019 at 03:35 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webbanxemay`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietxemay`
--

CREATE TABLE `chitietxemay` (
  `id_xemay` int(100) NOT NULL,
  `id_hangxm` int(100) NOT NULL,
  `id_loaixm` int(100) NOT NULL,
  `tenxemay` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(100) NOT NULL,
  `gia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chitietxemay`
--

INSERT INTO `chitietxemay` (`id_xemay`, `id_hangxm`, `id_loaixm`, `tenxemay`, `thutu`, `gia`, `mota`, `hinhanh`) VALUES
(4, 4, 3, 'Nouvo LC', 2, '32.000.000', 'Yamaha Nouvo LC\r\nNÄƒm sáº£n xuáº¥t 2018\r\nMÃ u tráº¯ng xanh', 'yamaha-nouvo-lc.jpg'),
(5, 1, 1, 'Winner', 3, '43.000.000', 'Honda Winner\r\nNÄƒm sáº£n xuáº¥t 2018\r\nMÃ u Ä‘á» Ä‘en', 'winner 2018.jpg'),
(6, 4, 1, 'Exciter', 4, '48.000.000', 'Yamaha Exciter\r\nNÄƒm sáº£n xuáº¥t 2018\r\nMÃ u xanh Ä‘en', 'exciter 2018.png'),
(7, 4, 3, 'Grande', 5, '46.000.000', 'Yamaha Grande\r\nNÄƒm sáº£n xuáº¥t 2018\r\nMÃ u xanh ngá»c', 'grande.jpg'),
(8, 4, 2, 'Sirius', 6, '22.000.000', 'Yamaha Sirius\r\nNÄƒm sáº£n xuáº¥t 2018\r\nMÃ u tráº¯ng', 'sirius.jpg'),
(9, 3, 1, 'Star SR 170', 7, '49.900.000', 'SYM Star SR 170\r\nNÄƒm sáº£n xuáº¥t 2018\r\nMÃ u xanh Ä‘en', 'Star SR 170.jpg'),
(10, 6, 4, 'Kawasaki H2 SX SE', 8, '899.000.000', 'Kawasaki H2 SX SE\r\nNÄƒm sáº£n xuáº¥t 2019\r\nMÃ u xanh lÃ¡ cÃ¢y', 'H2 SX SE.jpg'),
(11, 1, 2, 'Future', 9, '32.000.000', 'Honda Future\r\nNÄƒm sáº£n xuáº¥t 2019\r\nMÃ u xanh ngá»c', 'Future.jpg'),
(12, 1, 2, 'Wave RSX FI 201', 10, '18.000.000', '', 'wave rsx 2011.jpg'),
(13, 3, 1, 'Husky Classic 125', 11, '35.000.000', '', 'Husky Classic 125.png'),
(14, 3, 3, 'Elite 50', 12, '25.000.000', '', 'Elite 50.jpg'),
(15, 3, 3, 'Shark mini 125 EFI', 13, '30.490.000', '', 'Shark mini 125 EFI.jpg'),
(16, 3, 3, 'Attila Elizabeth EFI', 14, '33.000.000', '', 'Attila Elizabeth EFI.png'),
(17, 3, 1, 'Star SR 170 (ABS)', 15, '49.900.000', '', 'Star SR 170 (ABS).jpg'),
(18, 3, 2, 'Elegant 50', 16, '15.000.000', '', 'Elegant 50.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hangxemay`
--

CREATE TABLE `hangxemay` (
  `id_hangxm` int(11) NOT NULL,
  `tenhangxm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hangxemay`
--

INSERT INTO `hangxemay` (`id_hangxm`, `tenhangxm`, `thutu`) VALUES
(1, 'Honda', 1),
(2, 'Suzuki', 2),
(3, 'SYM', 3),
(4, 'Yamaha', 4),
(5, 'Piagio', 5);

-- --------------------------------------------------------

--
-- Table structure for table `loaixemay`
--

CREATE TABLE `loaixemay` (
  `id_loaixm` int(100) NOT NULL,
  `loaixm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loaixemay`
--

INSERT INTO `loaixemay` (`id_loaixm`, `loaixm`, `thutu`) VALUES
(1, 'Xe cÃ´n', 1),
(2, 'Xe sá»‘', 2),
(3, 'Xe tay ga', 3),
(4, 'Xe nháº­p kháº©u', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietxemay`
--
ALTER TABLE `chitietxemay`
  ADD PRIMARY KEY (`id_xemay`);

--
-- Indexes for table `hangxemay`
--
ALTER TABLE `hangxemay`
  ADD PRIMARY KEY (`id_hangxm`);

--
-- Indexes for table `loaixemay`
--
ALTER TABLE `loaixemay`
  ADD PRIMARY KEY (`id_loaixm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietxemay`
--
ALTER TABLE `chitietxemay`
  MODIFY `id_xemay` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hangxemay`
--
ALTER TABLE `hangxemay`
  MODIFY `id_hangxm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loaixemay`
--
ALTER TABLE `loaixemay`
  MODIFY `id_loaixm` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
