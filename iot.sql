-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2020 at 09:24 AM
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
-- Database: `iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `lampu`
--

CREATE TABLE `lampu` (
  `id` int(2) NOT NULL,
  `nilai` int(2) NOT NULL,
  `waktu` varchar(225) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `sensor` int(2) NOT NULL,
  `flag` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampu`
--

INSERT INTO `lampu` (`id`, `nilai`, `waktu`, `tgl`, `jam`, `sensor`, `flag`) VALUES
(2, 1, '1601625286', '2020-10-02', '14:54:46', 0, 0),
(1, 1, '1601625289', '2020-10-02', '14:54:49', 0, 0),
(3, 0, '1601625290', '2020-10-02', '14:54:50', 0, 0),
(4, 0, '1601625291', '2020-10-02', '14:54:51', 0, 1),
(5, 0, '1601625292', '2020-10-02', '14:54:52', 0, 1),
(3, 1, '1601880544', '2020-10-05', '13:49:04', 1, 0),
(4, 1, '1601880544', '2020-10-05', '13:49:04', 1, 0),
(5, 1, '1601880544', '2020-10-05', '13:49:04', 1, 0),
(6, 1, '1601880544', '2020-10-05', '13:49:04', 1, 0),
(7, 1, '1601880544', '2020-10-05', '13:49:04', 1, 0),
(8, 1, '1601880544', '2020-10-05', '13:49:04', 1, 0),
(9, 1, '1601880544', '2020-10-05', '13:49:04', 1, 0),
(10, 1, '1601880544', '2020-10-05', '13:49:04', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lampu_control`
--

CREATE TABLE `lampu_control` (
  `id` int(2) NOT NULL,
  `nilai` int(2) NOT NULL,
  `waktu` varchar(225) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `sensor` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampu_control`
--

INSERT INTO `lampu_control` (`id`, `nilai`, `waktu`, `tgl`, `jam`, `sensor`) VALUES
(1, 1, '1601882641', '2020-10-05', '14:24:01', 1),
(2, 1, '1601882641', '2020-10-05', '14:24:01', 1),
(3, 1, '1601882641', '2020-10-05', '14:24:01', 1),
(4, 1, '1601882641', '2020-10-05', '14:24:01', 1),
(5, 1, '1601882641', '2020-10-05', '14:24:01', 1),
(6, 1, '1601882641', '2020-10-05', '14:24:01', 1),
(7, 1, '1601882641', '2020-10-05', '14:24:01', 1),
(8, 1, '1601882641', '2020-10-05', '14:24:01', 1),
(9, 1, '1601882641', '2020-10-05', '14:24:01', 1),
(10, 1, '1601882641', '2020-10-05', '14:24:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `temp` decimal(5,0) NOT NULL,
  `humid` decimal(5,0) NOT NULL,
  `waktu` varchar(225) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `cahaya` int(50) NOT NULL,
  `gerak` int(2) NOT NULL,
  `flag` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`temp`, `humid`, `waktu`, `tgl`, `jam`, `cahaya`, `gerak`, `flag`) VALUES
('30', '60', '1601457257', '2020-09-30', '16:14:17', 1024, 1, 0),
('30', '60', '1601457260', '2020-09-30', '16:14:20', 1024, 1, 0),
('30', '60', '1601457269', '2020-09-30', '16:14:29', 1024, 1, 0),
('30', '60', '1601457274', '2020-09-30', '16:14:34', 1024, 1, 0),
('30', '60', '1601457280', '2020-09-30', '16:14:40', 1024, 1, 0),
('30', '60', '1601457285', '2020-09-30', '16:14:45', 1024, 1, 0),
('99', '99', '1601457348', '2020-09-30', '16:15:48', 1024, 1, 0),
('30', '60', '1601457763', '2020-09-30', '16:22:43', 1024, 1, 0),
('30', '60', '1601457765', '2020-09-30', '16:22:45', 1024, 1, 0),
('69', '69', '1601880544', '2020-10-05', '13:49:04', 999, 0, 0),
('69', '69', '1601881741', '2020-10-05', '14:09:01', 999, 0, 0),
('69', '69', '1601881802', '2020-10-05', '14:10:02', 999, 0, 0),
('69', '69', '1601881862', '2020-10-05', '14:11:02', 999, 0, 0),
('69', '69', '1601881921', '2020-10-05', '14:12:01', 999, 0, 0),
('69', '69', '1601881981', '2020-10-05', '14:13:01', 999, 0, 0),
('69', '69', '1601882042', '2020-10-05', '14:14:02', 999, 0, 0),
('69', '69', '1601882101', '2020-10-05', '14:15:01', 999, 0, 0),
('69', '69', '1601882161', '2020-10-05', '14:16:01', 999, 0, 0),
('69', '69', '1601882222', '2020-10-05', '14:17:02', 999, 0, 0),
('69', '69', '1601882281', '2020-10-05', '14:18:01', 999, 0, 0),
('69', '69', '1601882341', '2020-10-05', '14:19:01', 999, 0, 0),
('69', '69', '1601882402', '2020-10-05', '14:20:02', 999, 0, 0),
('69', '69', '1601882461', '2020-10-05', '14:21:01', 999, 0, 0),
('69', '69', '1601882521', '2020-10-05', '14:22:01', 999, 0, 0),
('69', '69', '1601882582', '2020-10-05', '14:23:02', 999, 0, 0),
('69', '69', '1601882641', '2020-10-05', '14:24:01', 999, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sensor_control`
--

CREATE TABLE `sensor_control` (
  `id` int(5) NOT NULL,
  `temp` decimal(5,0) NOT NULL,
  `humid` decimal(5,0) NOT NULL,
  `waktu` varchar(225) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `cahaya` int(50) NOT NULL,
  `gerak` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensor_control`
--

INSERT INTO `sensor_control` (`id`, `temp`, `humid`, `waktu`, `tgl`, `jam`, `cahaya`, `gerak`) VALUES
(1, '69', '69', '1601882641', '2020-10-05', '14:24:01', 999, 0);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `unix` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`unix`) VALUES
('1601382434'),
('1601382476'),
('1601645815');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('Babang', 'dpn330@gmail.com', '$2y$10$gDAaZZozeMmbTP1P/5CpTeQhVWoU7G1RF2IsiOxjs4vc.sNcbYmMa'),
('Dony Prastiya', 'donyprastiya@gmail.com', '$2y$10$9e7BUpGkcqj5l9xsqqHkpO4XAkfkWimwenZiRvR45ni0MYE7tr0yy'),
('kocheng', 'kochengp@gmail.com', '$2y$10$u6CP1feJLhJyfj2/x2sB1eOcaCdkwCthjIdww3/GemBx6DpuXVtXu'),
('Mamang', 'dhiyasalam2@gmail.com', '$2y$10$jTjgZZu3BYDMZZ3XTzYwIO3s7puj1vINWBOMgOTkSzi4f5u/JzOd6'),
('Melo', 'melo@melo.melo', '$2y$10$u7F8ylWS6ZvyE0nfrteVYOGiW0AjonwEaAtt5o.WjRWMEmFKOAnp.'),
('Sasuke', 'sasuke@konoha.com', '$2y$10$Nx3rYc2K4MsYsz.2vBYmvOKoc9TJFGcfMh0pJPcxKsWPjhElRQrEi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lampu_control`
--
ALTER TABLE `lampu_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor_control`
--
ALTER TABLE `sensor_control`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
