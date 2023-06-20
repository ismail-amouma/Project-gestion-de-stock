-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 26, 2023 at 10:59 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etudiants`
--

-- --------------------------------------------------------

--
-- Table structure for table `dse`
--

DROP TABLE IF EXISTS `dse`;
CREATE TABLE IF NOT EXISTS `dse` (
  `ID_Prouduit` text NOT NULL,
  `Prod_Code` text NOT NULL,
  `Prod_Designation` text NOT NULL,
  `Prod_prix_A` text NOT NULL,
  `Prod_Marge` text NOT NULL,
  `Prod_Quantite_St` text NOT NULL,
  `Prod_Seuil` text NOT NULL,
  `ID_fornisseur` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dse`
--

INSERT INTO `dse` (`ID_Prouduit`, `Prod_Code`, `Prod_Designation`, `Prod_prix_A`, `Prod_Marge`, `Prod_Quantite_St`, `Prod_Seuil`, `ID_fornisseur`) VALUES
('43', '544', 'Agadir', '43 DH', '34 DH', '54', '45', '876'),
('87', '654', 'Marakech', '76 DH', '10 DH', '12', '33', '543'),
('321', '87', 'Salle', '76 DH', '6 DH', '765', '43', '987'),
('54', '987', 'Tangier', '76 DH', '8 DH', '765', '22', '156'),
('21', '765', 'Kenitra', '5 DH', '2 DH', '87', '52', '37'),
('65', '76', 'Agadir', '45 DH', '5 DH', '765', '1', '876');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
