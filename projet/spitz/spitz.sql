-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 03 juil. 2022 à 12:22
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spitz`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

DROP TABLE IF EXISTS `artiste`;
CREATE TABLE IF NOT EXISTS `artiste` (
  `idartiste` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idartiste`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`idartiste`, `Nom`, `Prenom`) VALUES
(1, 'Bigflo & Oli', NULL),
(2, 'Angele', NULL),
(3, 'Arcadian', NULL),
(4, 'Black M', NULL),
(5, 'Hatik', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `disque`
--

DROP TABLE IF EXISTS `disque`;
CREATE TABLE IF NOT EXISTS `disque` (
  `iddisque` int(11) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(50) DEFAULT NULL,
  `Annee` varchar(50) DEFAULT NULL,
  `Label` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`iddisque`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `disque`
--

INSERT INTO `disque` (`iddisque`, `Titre`, `Annee`, `Label`) VALUES
(1, 'La vie de Reve', '2018', 'Polydor'),
(2, 'Nonante-Cinq', '2021', 'Angele VL Records'),
(3, 'Marche ou Reve', '2019', 'Mercury Records'),
(4, 'Alpha', '2021', 'PIAS Group'),
(5, 'Noye :Vague a l Ame', '2021', 'Play two');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(25) NOT NULL,
  `mdp` char(32) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mdp`, `mail`) VALUES
(9, 'mickael', '0d9f25661cd6a2c54c4a5634f23005c0', 'mickael@mickael.com');

-- --------------------------------------------------------

--
-- Structure de la table `relation0`
--

DROP TABLE IF EXISTS `relation0`;
CREATE TABLE IF NOT EXISTS `relation0` (
  `idartiste` int(11) NOT NULL,
  `iddisque` int(11) NOT NULL,
  PRIMARY KEY (`idartiste`,`iddisque`),
  KEY `relation0_disque0_FK` (`iddisque`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `relation0`
--
ALTER TABLE `relation0`
  ADD CONSTRAINT `relation0_Artiste_FK` FOREIGN KEY (`idartiste`) REFERENCES `artiste` (`idartiste`),
  ADD CONSTRAINT `relation0_disque0_FK` FOREIGN KEY (`iddisque`) REFERENCES `disque` (`iddisque`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
