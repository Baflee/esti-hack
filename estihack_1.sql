-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2020 at 12:58 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estihack`
--

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

DROP TABLE IF EXISTS `campus`;
CREATE TABLE IF NOT EXISTS `campus` (
  `ID_campus` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(60) NOT NULL,
  PRIMARY KEY (`ID_campus`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`ID_campus`, `Nom`) VALUES
(1, 'Paris'),
(2, 'Saint-Denis'),
(3, 'Melun'),
(4, 'Bourges'),
(5, 'Lyon'),
(6, 'Metz'),
(7, 'Tarbes');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `ID_classes` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(15) NOT NULL,
  PRIMARY KEY (`ID_classes`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`ID_classes`, `Nom`) VALUES
(1, 'E1A'),
(2, 'E1B'),
(3, 'E2A'),
(4, 'E2B'),
(5, 'E3DAD'),
(6, 'E3CCSN'),
(7, 'E4DAD'),
(8, 'E4CCSN'),
(9, 'E4MBA'),
(10, 'E5CCSN'),
(11, 'E5DB'),
(12, 'E5DWM');

-- --------------------------------------------------------

--
-- Table structure for table `groupes`
--

DROP TABLE IF EXISTS `groupes`;
CREATE TABLE IF NOT EXISTS `groupes` (
  `ID_groupes` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Avatar` text NOT NULL,
  `Points` int(10) NOT NULL,
  PRIMARY KEY (`ID_groupes`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groupes`
--

INSERT INTO `groupes` (`ID_groupes`, `Nom`, `Description`, `Avatar`, `Points`) VALUES
(1, 'Aucun', '', '', 1000),
(2, 'AREA', 'Best du best', '', 300),
(18, 'JDR Programme', 'Jeux de R&ocirc;le et Programmation !', 'aa', 2000),
(17, 'Tardifamily', 'OOF ROBLOX.COM', 't', 300),
(16, 'Zoubida', 'd', 'd', 0),
(19, 'Star Wars', 'PIN PIN PIN PINNNNNNNNNNNNNN PIN PIN PIN PINN', 't', 350);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `ID_profiles` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `Email` text NOT NULL,
  `Motdepasse` text NOT NULL,
  `Code_classe` int(11) NOT NULL,
  `Code_campus` int(11) NOT NULL,
  `Code_groupe` int(11) NOT NULL,
  PRIMARY KEY (`ID_profiles`),
  KEY `fk_code_classe` (`Code_classe`),
  KEY `fk_code_campus` (`Code_campus`),
  KEY `fk_code_groupe` (`Code_groupe`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`ID_profiles`, `Nom`, `Prenom`, `Description`, `Email`, `Motdepasse`, `Code_classe`, `Code_campus`, `Code_groupe`) VALUES
(3, 'test', 'test', '', 'test@estiam.com', '$2y$10$i5pz4VVs6wRvC4CKUQLYT.hj0/i/UuGmRlxyvC5oYInLNYCBknEkC', 1, 1, 19),
(2, 'KETTANI', 'Rayane', 'Test', 'Rayan.kettani@estiam.com', '$2y$10$6gmJ2PEx/KdCe1e3MiwlGeflhCb.nhyzUN8uQ7OJ2tRyMHHOEkqMm', 1, 1, 2),
(4, 'OZDEMIR', 'Eray', 'Descriptino Standard a changer.', 'eray.ozdemir@estiam.com', '$2y$10$t8MG7UzbmqCPJkFszVve8eyXPwWgEKVNljQ3jpb4pO97CkePZoKuS', 1, 1, 1),
(5, 'TARDIF', 'Alexis', 'Description standard a changé.', 'Alexis.tardif@estiam.com', '$2y$10$yoq4aP1LIDB1OcogsjFR/e4tW158cKdOZ7N2KUyzplazTUO7u0ixK', 1, 1, 17),
(6, 'ar', 'ar', 'Description standard a changé.', 'ar@estiam.com', '$2y$10$L4XLXIPvOjTw/h9L66aYM.x5/mAd4qcbd9A457XM/SVY.qaX1h/kS', 1, 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `validation`
--

DROP TABLE IF EXISTS `validation`;
CREATE TABLE IF NOT EXISTS `validation` (
  `ID_validation` int(11) NOT NULL AUTO_INCREMENT,
  `Code_groupe` int(11) NOT NULL,
  `Code_epreuves` int(11) NOT NULL,
  PRIMARY KEY (`ID_validation`),
  KEY `fk_code_groupe_va` (`Code_groupe`),
  KEY `fk_code_epreuves_va` (`Code_epreuves`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `validation`
--

INSERT INTO `validation` (`ID_validation`, `Code_groupe`, `Code_epreuves`) VALUES
(38, 2, 3),
(37, 2, 2),
(36, 2, 1),
(39, 17, 4),
(35, 2, 4),
(40, 17, 7),
(41, 19, 4),
(42, 19, 5),
(43, 19, 6),
(44, 19, 7),
(45, 19, 8);

-- --------------------------------------------------------

--
-- Table structure for table `épreuves`
--

DROP TABLE IF EXISTS `épreuves`;
CREATE TABLE IF NOT EXISTS `épreuves` (
  `ID_epreuves` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(40) NOT NULL,
  `Description` text NOT NULL,
  `Fichier1` text NOT NULL,
  `Fichier2` text NOT NULL,
  `Fichier3` text NOT NULL,
  `Fichier4` text NOT NULL,
  `Difficulté` varchar(30) NOT NULL,
  `Points` int(4) NOT NULL,
  `Flag` text NOT NULL,
  PRIMARY KEY (`ID_epreuves`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `épreuves`
--

INSERT INTO `épreuves` (`ID_epreuves`, `Titre`, `Description`, `Fichier1`, `Fichier2`, `Fichier3`, `Fichier4`, `Difficulté`, `Points`, `Flag`) VALUES
(4, 'Shadow in London', 'Durant un cours où Guillaume Noël expliquait aux élèves de E1 à quoi correspondait les fichiers passwd et shadow, quelques malins en ont profité afin de récupérer ces fichiers directement sur l\'ordinateur du professeur.\r\nIls ont aussi récupéré une wordlist par la même occasion.<br>\r\nEssayez de voir ce que vous pouvez en faire.', 'little_rockyou.txt', 'shadow', 'passwd', '', 'Facile', 50, 'ESTIAM{Linux_is_not_a_penguin}'),
(5, 'Le Spitz Allemand', 'Anne-Francine nous a envoyé une photo de son chien adoré mais au vu du nom, il semblerait que quelque chose s\'y cache.', 'password.jpg', '', '', '', 'Facile', 50, 'ESTIAM{99-227-111-122-105-110-104-111}'),
(6, 'Poupée Russe', 'Cette photo envoyée par Sarah Denguir semble étrangement volumineuse.\r\nEst-ce que cette image aurait en réalité une toute autre nature ?', 'fleur.jpg', '', '', '', 'Facile', 50, 'ESTIAM{Matri0chka}'),
(7, 'How many languages do you speak ?', 'En voulant récupérer un document sur la clé USB de Irène Gu, un fichier a attiré notre attention. Cependant lorsque nous l\'avons ouvert il n\'y avait rien d\'autre qu\'une suite de 1 et de 0. Ou bien est-ce justement ce qu\'elle veut nous faire croire ?\r\n', 'Mot_de_passe.txt', '', '', '', 'Modérée', 100, 'ESTIAM{P0lygl0tte}'),
(8, 'MITM', 'En envoyant un fichier à l\'un de ses clients, Florian Dadoun ne s\'est pas assuré que la connexion soit encryptée.\r\nUn des élèves a ainsi réussi à intercépter le fichier : il nous reste donc plus qu\'à récupérer le fichier et le tour est joué !', 'intercepted.pcapng', '', '', '', 'Modérée', 100, 'ESTIAM{sensitive_d4t4}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
