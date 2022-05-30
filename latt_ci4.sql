-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 07:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latt_ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `telepon` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `telepon`, `email`, `password`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'naufal', 'Naufal', 'Pasar Kembang', 'Surakarta', '2000-05-17', 'Laki-Laki', 2147483646, 'naufal@gmail.com', 'lalalili', 'default.jpg', '2022-05-25 18:36:10', '2022-05-25 18:36:10'),
(2, 'adi', 'Adi', 'Pasar Kembang', 'Surakarta', '2000-05-17', 'Laki-Laki', 2147483646, 'adi@gmail.com', 'lalalili', 'default.jpg', '2022-05-25 18:36:10', '2022-05-25 18:36:10'),
(3, 'saputro', 'Saputro', 'Pasar Kembang', 'Surakarta', '2000-05-17', 'Laki-Laki', 2147483646, 'saputro@gmail.com', 'lalalili', 'default.jpg', '2022-05-25 18:36:10', '2022-05-25 18:36:10'),
(19, '', 'asdsdfgdgf dfgdfg', 'jalan dr rajiman 219 jayengan serengan solo', '', '0000-00-00', 'Laki-Laki', 2147483647, 'novalxena27@gmail.com', '', 'default.jpg', '2022-05-30 12:06:20', '2022-05-30 12:06:20'),
(20, 'lalalili', 'Lala Lili', 'Ayam Bakar ayem tentrem sunarman', 'Solo', '2021-12-27', 'Perempuan', 2147483647, 'lalalili@gmail.com', '', '1653889672_d03aad7a44af76784c1e.jpg', '2022-05-30 12:47:52', '2022-05-30 12:47:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
