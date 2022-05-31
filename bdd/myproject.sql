-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 28 mai 2022 à 18:56
-- Version du serveur : 8.0.28
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Login` varchar(20) NOT NULL,
  `Pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Id`, `Login`, `Pwd`) VALUES
(7, 'azaz', 'azaz'),
(8, 'kkk', 'kkk'),
(9, 'vvvv', 'vvvvv'),
(10, 'vvvv', 'azazazaz'),
(11, 'vvvv', 'azazazaz'),
(12, 'azazaz', 'azazaz'),
(13, 'test', 'test'),
(15, 'sofiane', 'ssss'),
(16, 'chatoune', 'chatoune');

-- --------------------------------------------------------

--
-- Structure de la table `info_client`
--

DROP TABLE IF EXISTS `info_client`;
CREATE TABLE IF NOT EXISTS `info_client` (
  `Id_info` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Portable` varchar(20) NOT NULL,
  `Adresse` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Sexe` varchar(20) NOT NULL,
  `Nationalite` varchar(20) NOT NULL,
  `Centre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `VIP` varchar(20) NOT NULL,
  PRIMARY KEY (`Id_info`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `info_client`
--

INSERT INTO `info_client` (`Id_info`, `Nom`, `Prenom`, `Email`, `Portable`, `Adresse`, `Sexe`, `Nationalite`, `Centre`, `VIP`) VALUES
(7, 'test', 'test', 'test@test.test', '121212', 'test', 'masculin', 'Allemagne', 'sport', 'oui'),
(9, 'sofiane', 'sofiane', 'sofiane@sofiane.fr', '111', 'appartement 128', 'masculin', 'Allemagne', 'sport', 'non'),
(10, 'chatoune', 'flash', 'flash@chatoune.chatoune', '121212', '05 chemin de la borde', 'masculin', 'France', 'musique', 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `mylist`
--

DROP TABLE IF EXISTS `mylist`;
CREATE TABLE IF NOT EXISTS `mylist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tache` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `heure` varchar(20) NOT NULL,
  `personne_chargee` varchar(20) NOT NULL,
  `etat` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `mylist`
--

INSERT INTO `mylist` (`id`, `tache`, `date`, `heure`, `personne_chargee`, `etat`) VALUES
(8, 'finaliser le rapport', ' samedi 28 mai 2022', '23h', 'Fares', 'En cours'),
(9, 'finaliser le code', ' samedi 28 mai 2022', '20h', 'Amrane', 'En cours'),
(10, 'stylisé la page d\'acceuil', ' samedi 26 mai 2022', '20h', 'Fares', 'Faite'),
(11, 'finaliser le style de l\'after_log', ' samedi 28 mai 2022', '17h', 'Amrane', 'En cours'),
(12, 'faire marcher le code pour modifier les infos client', ' samedi 28 mai 2022', '20h', 'Amrane', 'En cours'),
(13, 'regarder la finale UCL', ' samedi 28 mai 2022', '21h', 'Amrane', 'En cours'),
(14, 'corriger les bugs de la BDD', ' samedi 28 mai 2022', '17h', 'Amrane', 'Faite');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `info_client`
--
ALTER TABLE `info_client`
  ADD CONSTRAINT `info_client_ibfk_1` FOREIGN KEY (`Id_info`) REFERENCES `client` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
