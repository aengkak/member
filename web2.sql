-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2017 at 02:19 AM
-- Server version: 10.2.3-MariaDB-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_identitas` varchar(255) NOT NULL,
  `nama_member` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `password`, `no_identitas`, `nama_member`, `alamat`, `no_telp`, `no_hp`, `email`, `tgl_lahir`, `status`) VALUES
(2, 'b', '92eb5ffee6ae2fec3ad71c777531578f', '2', 'bb', 'b', '23', '23', 'admin@admin.comw', '2017-07-15', 1),
(3, 'a', '0cc175b9c0f1b6a831c399e269772661', '8888', 'a', 'a', '81', '81', 'a@a.com', '2017-08-01', 1),
(4, 'v', '9e3669d19b675bd57058fd4664205d2a', '14214', 'v', 'vo', '081', '082', 'v@v.com', '2017-07-15', 1),
(5, 'gg', '73c18c59a39b18382081ec00bb456d43', '123', 'gg', 'gg', '938', '8923', 'gg@gg.com', '2017-07-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id_partner` int(11) NOT NULL,
  `no_identitas` varchar(255) NOT NULL,
  `nama_partner` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id_partner`, `no_identitas`, `nama_partner`, `tgl_lahir`, `no_telp`, `member_id`) VALUES
(2, '199', 'j', '2017-07-15', '12356', 4),
(3, '8798', 'jj', '2017-07-15', '24325', 2),
(4, '34879987', 'dd', '2017-08-30', '2293', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'admin2', 'c84258e9c39059a89ab77d846ddab909');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id_partner`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `partner`
--
ALTER TABLE `partner`
  ADD CONSTRAINT `partner_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
