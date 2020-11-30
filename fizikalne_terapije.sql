-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 12:00 AM
-- Server version: 8.0.18
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fizikalne_terapije`
--

-- --------------------------------------------------------

--
-- Table structure for table `fizikalne_terapije`
--

CREATE TABLE `fizikalne_terapije` (
  `fizioterapijeID` int(11) NOT NULL,
  `nazivFizioTerapije` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipID` int(11) NOT NULL,
  `fizioterapeutID` int(11) NOT NULL,
  `cena` double NOT NULL,
  `opis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fizikalne_terapije`
--

INSERT INTO `fizikalne_terapije` (`fizioterapijeID`, `nazivFizioTerapije`, `tipID`, `fizioterapeutID`, `cena`, `opis`) VALUES
(1, 'Elektroterapija', 1, 1, 2500, 'Koristi nekoliko modaliteta električne struje putem modernih terapeutskih uređaja'),
(2, 'Ultrazvučna terapija', 1, 4, 3000, ' Podrazumeva korišćenje zvuka u cilju lečenja'),
(3, 'Laseroterapija', 1, 1, 1500, 'Terapija emitovanja laserskih zraka na bolna mesta'),
(4, 'Sportka medicina', 5, 2, 2300, 'Čuvanje zdravlja ljudi koji se rekreativno ili profesionalno bave sportom');

-- --------------------------------------------------------

--
-- Table structure for table `fizioterapeut`
--

CREATE TABLE `fizioterapeut` (
  `fizioterapeutID` int(11) NOT NULL,
  `imePrezime` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fizioterapeut`
--

INSERT INTO `fizioterapeut` (`fizioterapeutID`, `imePrezime`) VALUES
(1, 'Marija Jevtić'),
(2, 'Marko Ignjatović'),
(3, 'Ana Jevremović'),
(4, 'Uroš Bošnjak'),
(5, 'Milica Višnjić');

-- --------------------------------------------------------

--
-- Table structure for table `tip`
--

CREATE TABLE `tip` (
  `tipID` int(11) NOT NULL,
  `nazivTipa` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tip`
--

INSERT INTO `tip` (`tipID`, `nazivTipa`) VALUES
(1, 'Fizikalna terapija aparatima'),
(2, 'Kineziterapija'),
(3, 'Manuelna terapija'),
(4, 'Pregled lekara specijaliste'),
(5, 'Vežbe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fizikalne_terapije`
--
ALTER TABLE `fizikalne_terapije`
  ADD PRIMARY KEY (`fizioterapijeID`),
  ADD KEY `fizikalne_terapije1` (`tipID`),
  ADD KEY `fizikalne_terapije2` (`fizioterapeutID`);

--
-- Indexes for table `fizioterapeut`
--
ALTER TABLE `fizioterapeut`
  ADD PRIMARY KEY (`fizioterapeutID`);

--
-- Indexes for table `tip`
--
ALTER TABLE `tip`
  ADD PRIMARY KEY (`tipID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fizikalne_terapije`
--
ALTER TABLE `fizikalne_terapije`
  MODIFY `fizioterapijeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fizioterapeut`
--
ALTER TABLE `fizioterapeut`
  MODIFY `fizioterapeutID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tip`
--
ALTER TABLE `tip`
  MODIFY `tipID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fizikalne_terapije`
--
ALTER TABLE `fizikalne_terapije`
  ADD CONSTRAINT `fizikalne_terapije1` FOREIGN KEY (`tipID`) REFERENCES `tip` (`tipID`),
  ADD CONSTRAINT `fizikalne_terapije2` FOREIGN KEY (`fizioterapeutID`) REFERENCES `fizioterapeut` (`fizioterapeutID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
