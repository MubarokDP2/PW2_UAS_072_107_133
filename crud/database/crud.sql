-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2023 at 04:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `author` varchar(128) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `type`, `description`) VALUES
(2, 'Pride and Prejudice', 'Jane Austen', 'Romantis', 'Sebuah klasik romance yang menggambarkan kisah cinta antara Elizabeth Bennet dan Mr. Darcy.\r\n\r\n'),
(3, 'The Notebook', 'Nicholas Sparks', 'Romantis', 'Sebuah kisah cinta yang manis dan melankolis antara Noah dan Allie.'),
(4, 'Me Before You', 'Jojo Moyes', 'Romantis', 'Sebuah novel tentang hubungan antara seorang wanita muda dan pria yang mengalami cedera serius.'),
(5, 'The Hating Game', 'Sally Thorne ', 'Romantis', 'Sebuah novel romantis komedi yang menggambarkan hubungan antara dua rekan kerja yang saling benci.'),
(6, 'The Book Thief', 'Markus Zusak', 'Fiksi Sejarah', 'Buku ini berlatar belakang Jerman Nazi dan mengisahkan kisah seorang gadis kecil bernama Liesel Meminger, yang mencuri buku-buku untuk mengatasi kesulitan hidupnya. Kisah ini diceritakan oleh Maut, yang memandang kehidupan manusia selama Perang Dunia II. \"The Book Thief\" mengeksplorasi kekuatan kata-kata dan kebaikan di tengah-tengah kejahatan perang.'),
(7, 'All the Light We Cannot See', 'Anthony Doerr', 'Fiksi Sejarah', 'Berlatar belakang Perang Dunia II, novel ini mengikuti kisah dua anak muda yang hidup di sisi berlawanan dalam konflik tersebut. Marie-Laure LeBlanc, seorang gadis buta Prancis, dan Werner Pfennig, seorang anak yatim Jerman yang mengalami transformasi melalui kejamnya perang. Cerita ini mengeksplorasi tema keajaiban dan penderitaan di tengah kegelapan perang.\r\n'),
(9, 'Rich Dad Poor Dad', 'Robert T. Kiyosaki', 'Bisnis dan Keuangan', 'Buku ini adalah panduan keuangan pribadi yang sangat populer. Dalam \"Rich Dad Poor Dad,\" Kiyosaki membandingkan dua pendekatan yang berbeda terhadap keuangan yang dia pelajari dari \"ayah kaya\" dan \"ayah miskin\"-nya. Buku ini menyoroti pentingnya pendidikan keuangan, investasi cerdas, dan pemahaman terhadap aset dan kewajiban.'),
(11, 'Thinking, Fast and Slow', 'Daniel Kahneman', 'Bisnis dan Keuangan', 'Kahneman, seorang psikolog pemenang Nobel, menyajikan risetnya tentang dua sistem pemikiran manusia. Buku ini membahas perbedaan antara pemikiran cepat (sistem 1) dan pemikiran lambat (sistem 2) serta dampaknya pada pengambilan keputusan, termasuk keputusan keuangan. \"Thinking, Fast and Slow\" memberikan wawasan mendalam tentang psikologi di balik pengambilan keputusan'),
(12, 'The Lean Startup', 'Eric Ries', 'Bisnis dan Keuangan', 'Eric Ries membawa konsep \"lean manufacturing\" ke dalam dunia bisnis dan startup. Dalam buku ini, Ries menjelaskan metode lean startup, di mana perusahaan mengadopsi sikap eksperimental untuk menciptakan dan mengelola startup mereka. \"The Lean Startup\" menyoroti pentingnya inovasi berkelanjutan, pembelajaran cepat dari pasar, dan penyesuaian strategi bisnis untuk mencapai kesuksesan..'),
(19, 'coba', 'A', 'Fiksi Sejarah', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `reg_date`) VALUES
(10, 'putra', 'putraharifin@gmail.com', '$2y$10$VNBwdyg/bNZ6.8bxJ5DbN.ddcj2HrRheQMXV4dUVGo.tWTub0vpam', '2023-12-22 09:16:47'),
(11, 'harifin', 'harifin@gmail.com', '$2y$10$KER7YuuBAd2KyhP8mXZmP.9wMfjeijp7lJC26wttn7N7IletN2en6', '2023-12-22 10:04:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
