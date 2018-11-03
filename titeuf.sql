-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 03 nov. 2018 à 16:10
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `comics`
--

-- --------------------------------------------------------

--
-- Structure de la table `titeuf`
--

DROP TABLE IF EXISTS `titeuf`;
CREATE TABLE IF NOT EXISTS `titeuf` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `seriesTitre` char(50) NOT NULL,
  `numero` int(255) DEFAULT NULL,
  `albumTitre` char(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `idDessinateur` varchar(50) NOT NULL,
  `idScenariste` varchar(50) NOT NULL,
  `idColoriste` varchar(255) NOT NULL,
  `prixVente` int(255) DEFAULT NULL,
  `editeur` varchar(255) NOT NULL,
  `editionOriginale` char(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `descriptif` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `depotLegal` date DEFAULT NULL,
  `dateSortie` date DEFAULT NULL,
  `dateImpression` date DEFAULT NULL,
  `commentaire` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `nbPages` int(255) NOT NULL,
  `matiere` char(255) NOT NULL,
  `aspect` char(255) NOT NULL,
  `certificat` char(255) NOT NULL,
  `numerote` char(255) NOT NULL,
  `signe` char(255) NOT NULL,
  `packaging` char(255) NOT NULL,
  `horsCommerce` char(255) NOT NULL,
  `hauteur` int(255) NOT NULL,
  `largeur` int(255) NOT NULL,
  `profondeur` int(255) NOT NULL,
  `cote` int(255) NOT NULL,
  `cotePerso` int(255) NOT NULL,
  `dateModifCote` date DEFAULT NULL,
  `origineCote` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `titeuf`
--

INSERT INTO `titeuf` (`id`, `seriesTitre`, `numero`, `albumTitre`, `categorie`, `idDessinateur`, `idScenariste`, `idColoriste`, `prixVente`, `editeur`, `editionOriginale`, `image`, `descriptif`, `reference`, `depotLegal`, `dateSortie`, `dateImpression`, `commentaire`, `image2`, `image3`, `image4`, `nbPages`, `matiere`, `aspect`, `certificat`, `numerote`, `signe`, `packaging`, `horsCommerce`, `hauteur`, `largeur`, `profondeur`, `cote`, `cotePerso`, `dateModifCote`, `origineCote`) VALUES
(24, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(23, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(22, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(20, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(21, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(19, 'Titeuf', 1, 'Dieu, le sexe et les bretelles', 'Livre', 'A', 'A', 'A', 8, 'B', 'true', '', 'Premieralbum', '', NULL, NULL, NULL, 'Edition estimée a 5000 ex', '', '', '', 48, 'Papier carton', '2', 'false', 'false', 'false', '', 'false', 280, 240, 8, 300, 300, NULL, 'Ebay'),
(25, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(26, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(27, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(28, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(29, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(30, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(31, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(32, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(33, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(34, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(35, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(36, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(37, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(38, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(39, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(40, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(41, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(42, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(43, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, ''),
(44, '', 0, '', '', '', '', '', 0, '', 'false', '', '', '', NULL, NULL, NULL, '', '', '', '', 0, '', '', 'false', 'false', 'false', '', 'false', 0, 0, 0, 0, 0, NULL, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
