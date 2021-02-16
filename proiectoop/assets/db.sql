-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2021 at 11:19 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--
DROP DATABASE IF EXISTS `biblioteca`;
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Table structure for table `carti`
--

CREATE TABLE IF NOT EXISTS `carti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titlu` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `editura` varchar(255) NOT NULL,
  `tip_carte` varchar(255) NOT NULL,
  `an` char(4) NOT NULL,
  `pagini` int(4) NOT NULL,
  `pret` decimal(10,2) NOT NULL,
  `poza` varchar(200) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carti`
--

INSERT INTO `carti` (`id`, `titlu`, `autor`, `editura`, `tip_carte`, `an`, `pagini`, `pret`, `poza`, `ts`) VALUES
(1, 'Ion', 'Liviu Rebreanu', 'All', 'Selecteaza tipul cartii', '1920', 245, '50.00', 'ac205605a960d7e01a0d3d62e15fd7157e15917c.jpg', '2020-02-07 08:11:18'),
(2, ' Carturesti Dictionarul explicativ al limbii romane (DEX)', 'ACADEMIA ROMANA, INSTITUTUL DE LINGVISTICA IORGU IORDAN', 'Univers Enciclopedic', 'dictionar', '2009', 0, '1248.00', 'f3bbc9a5f4b59b7badf06a0f2bd4257b49e4f5f1.jpg', '2020-02-27 16:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(55) NOT NULL,
  `prenume` varchar(55) NOT NULL,
  `email` varchar(40) NOT NULL,
  `parola` varchar(255) NOT NULL,
  `dataadaugare` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nume`, `prenume`, `email`, `parola`, `dataadaugare`) VALUES
(1, 'Popescu', 'Adam', 'adam.popescu@admin.com', '$2y$10$0Vm4Gv8xH2hmn3LvyN1NveSVFAvtEm8sXtGkI36oPQlD3SDoWkfhW', '2020-02-14 08:39:55'),
(2, 'adiaconitei', '123456', '', '', '2020-02-19 10:00:38'),
(4, 'adiaconitei', 'adrian', 'aa@aaa.com', '$2y$10$WFsiiD4/lZugBdeJo0s1QebTMVzM.MstaO1P.SrcgcYpfQYK4OZ4W', '2020-02-19 10:07:27'),
(5, '<script>alert(\"hello\")</script>', 'bbbb', 'aa2@aaa.com', '$2y$10$zE34rejFs9jq6wQXzexmeun83aBkGUXwvimAyFr5nKUUV0eKequBG', '2020-02-20 16:41:14'),
(6, 'ion', 'ion', 'ion@ion.ro', '$2y$10$NrzOdH.UAS3QfiTvKkeBeu4q0alYFDJ6Meg9Vhz0aY8FAZmeIJBny', '2020-02-27 17:29:12'),
(7, 'ion', 'ion', 'ion2@ion.ro', '$2y$10$UNKDb.vxCOngtmTqcOpf6ueLKQPDBAgWyZ5K6DpKGFxb1d4JiXnfS', '2020-02-27 17:31:03'),
(8, 'ion', 'ion', 'ion3@ion.ro', '$2y$10$IK9El1IQ7z7n.el3L8gqReqmm3KjPeb86z8TLzj6At6yBcVgt.QXC', '2020-02-27 17:32:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
