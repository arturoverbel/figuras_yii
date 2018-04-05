-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2018 at 02:12 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `figuras_yii`
--

-- --------------------------------------------------------

--
-- Table structure for table `figura`
--

CREATE TABLE `figura` (
  `id` int(11) NOT NULL,
  `numLados` int(11) NOT NULL,
  `discr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lado` int(11) DEFAULT NULL,
  `base` int(11) DEFAULT NULL,
  `altura` int(11) DEFAULT NULL,
  `hipotenusa` int(11) DEFAULT NULL,
  `radio` double DEFAULT NULL,
  `workspace` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `figura`
--

INSERT INTO `figura` (`id`, `numLados`, `discr`, `lado`, `base`, `altura`, `hipotenusa`, `radio`, `workspace`) VALUES
(2, 4, 'cuadrado', 3, NULL, NULL, NULL, NULL, 1),
(5, 6, 'hexagono', NULL, NULL, NULL, NULL, 5, 2),
(9, 6, 'hexagono', NULL, NULL, NULL, NULL, 34, 1),
(10, 4, 'cuadrado', 10, NULL, NULL, NULL, NULL, 6),
(11, 4, 'cuadrado', 78, NULL, NULL, NULL, NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `workspace`
--

CREATE TABLE `workspace` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `limiteFiguras` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `workspace`
--

INSERT INTO `workspace` (`id`, `nombre`, `limiteFiguras`) VALUES
(1, 'El primero', 5),
(2, 'El segundo', 4),
(3, 'Sin Hexagono', 2),
(6, 'Error', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `figura`
--
ALTER TABLE `figura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workspace` (`workspace`);

--
-- Indexes for table `workspace`
--
ALTER TABLE `workspace`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `figura`
--
ALTER TABLE `figura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `workspace`
--
ALTER TABLE `workspace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `figura`
--
ALTER TABLE `figura`
  ADD CONSTRAINT `figura_ibfk_1` FOREIGN KEY (`workspace`) REFERENCES `workspace` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
