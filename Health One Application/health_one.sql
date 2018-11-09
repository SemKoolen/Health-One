-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2018 at 01:31 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_one`
--

-- --------------------------------------------------------

--
-- Table structure for table `artsen`
--

CREATE TABLE `artsen` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(30) NOT NULL,
  `tussenvoegsel` varchar(30) DEFAULT NULL,
  `achternaam` varchar(30) NOT NULL,
  `functie` varchar(20) NOT NULL,
  `straatnaam` varchar(30) NOT NULL,
  `huisnummer` varchar(10) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `plaats` varchar(30) NOT NULL,
  `telefoon_nummer` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artsen`
--

INSERT INTO `artsen` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `functie`, `straatnaam`, `huisnummer`, `postcode`, `plaats`, `telefoon_nummer`, `email`) VALUES
(1809001, 'Harry', '', 'Bannink', 'oncoloog', 'Baarnseweg', '7', '3500PP', 'Amerongen', '0644558877', 'h.bannink@big.nl'),
(1809002, 'Ties', NULL, 'Kruise', 'kno arts', 'Amsterdamse straatweg', '81', '3572LL', 'Utrecht', '0612121212', 't.kruise@big.nl'),
(1809003, 'Wilma', 'van', 'Tuyl', 'kinderarts', 'Damrak', '1', '1000AA', 'Amsterdam', '0204587458', 'w.v.tuyl@big.nl');

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `gebruikersnaam` varchar(30) NOT NULL,
  `wachtwoord` int(11) NOT NULL,
  `recht` enum('zorgverzekeringsmedewerker','arts','apotheker') NOT NULL DEFAULT 'zorgverzekeringsmedewerker'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `klanten`
--

CREATE TABLE `klanten` (
  `id` int(11) NOT NULL,
  `klantnummer` varchar(11) NOT NULL,
  `voornaam` varchar(30) NOT NULL,
  `tussenvoegsel` varchar(30) DEFAULT NULL,
  `achternaam` varchar(30) NOT NULL,
  `straatnaam` varchar(30) NOT NULL,
  `huisnummer` varchar(10) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `plaats` varchar(20) NOT NULL,
  `telefoon_nummer` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klanten`
--

INSERT INTO `klanten` (`id`, `klantnummer`, `voornaam`, `tussenvoegsel`, `achternaam`, `straatnaam`, `huisnummer`, `postcode`, `plaats`, `telefoon_nummer`, `email`) VALUES
(25001, 'ZK250012018', 'Kees', NULL, 'Verkerk', 'Markt', '1', '2500PT', 'Den Haag', '0701234567', 'k.verkerk@xs4all.nl'),
(25002, 'ZK250022015', 'Hilbert', 'van der', 'Duim', 'Markt', '2', '2500PT', 'Den Haag', '0702154871', 'h.v.d.duim@xs4all.nl'),
(25003, 'ZK250032000', 'Yvonne', 'van', 'Gennip', 'Markt', '3', '2500PT', 'Den Haag', '0709876549', 'y.v.gennip@xs4all.nl');

-- --------------------------------------------------------

--
-- Table structure for table `medicijnen`
--

CREATE TABLE `medicijnen` (
  `id` int(11) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `beschrijving` mediumtext NOT NULL,
  `bijwerkingen` mediumtext NOT NULL,
  `vergoed` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicijnen`
--

INSERT INTO `medicijnen` (`id`, `naam`, `beschrijving`, `bijwerkingen`, `vergoed`) VALUES
(1, 'diclofenac', 'pijnstiller, koortsverlagende werking, ontstekingsremmende werking. Goed bij acute pijn en chronische ziektes zoals reuma en jicht', 'pijn op de borst, kortademingheid, zwarte of zeer donkere ontlasting, ophoesten van bloed, blauwe plekken', 1),
(2, 'amoxicilline', 'breedspectrum antibioticum, actief tegen grampositieve en gramnegatieve bacteriën', 'braken, buikpijn, diarree, spijsverteringsstoornissen, huidirritaties, maagdarm-stoornissen', 1),
(3, 'omeprazol', 'remt de productie van overmatig maagzuur. Omeprazol behoort tot de klasse van protonremmers. Omeprazol wordt ingezet ter preventie en behandeling van maagzweren.', 'duizeligheid, verwarring, snelle en onregelmatige hartslag, schokkende spierbewegingen, zich schrikachtig voelen, spierkrampen, spierzwakte of slap gevoel.', 1),
(4, 'Xanax', 'eee', 'Kankjer', 2);

-- --------------------------------------------------------

--
-- Table structure for table `recepten`
--

CREATE TABLE `recepten` (
  `id` int(11) NOT NULL,
  `advies` text NOT NULL,
  `uitgeefdatum` varchar(10) NOT NULL,
  `ophaaldatum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artsen`
--
ALTER TABLE `artsen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gebruikersnaam` (`gebruikersnaam`);

--
-- Indexes for table `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `klantnummer` (`klantnummer`);

--
-- Indexes for table `medicijnen`
--
ALTER TABLE `medicijnen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `naam` (`naam`);

--
-- Indexes for table `recepten`
--
ALTER TABLE `recepten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artsen`
--
ALTER TABLE `artsen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1809004;
--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `klanten`
--
ALTER TABLE `klanten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25004;
--
-- AUTO_INCREMENT for table `medicijnen`
--
ALTER TABLE `medicijnen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `recepten`
--
ALTER TABLE `recepten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
