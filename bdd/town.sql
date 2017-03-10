-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 10 Mars 2017 à 21:17
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `movie_journey_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `town`
--

CREATE TABLE `town` (
  `id` int(10) NOT NULL,
  `country` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `town`
--

INSERT INTO `town` (`id`, `country`, `name`, `latitude`, `longitude`) VALUES
(20, 'Etats-Unis', 'Hulett', 44.6831, -104.6),
(1, 'France', 'Paris', 48.8566, 2.35222),
(2, 'Jordanie', 'Pétra', 30.3292, 35.4436),
(3, 'Japon', 'Hashima', 32.6278, 129.738),
(4, 'Etats-Unis', 'New-York', 40.7144, -74.006),
(5, 'Angleterre', 'Londres', 51.5072, -0.1275),
(6, 'France', 'Carcassonne', 43.2131, 2.35203),
(7, 'France', 'Beynac-et-Cazenac', 44.8411, 1.14472),
(8, 'Etats-Unis', 'Winnetka', 42.1061, -87.7378),
(9, 'Etats-Unis', 'San Francisco', 37.8269, -122.423),
(10, 'Guatemala', 'Tikal', 17.2221, -89.6236),
(11, 'Tunisie', 'Matmata', 33.5457, 9.96707),
(12, 'Etats-Unis', 'Beverly Hills', 34.0731, -118.399),
(13, 'Italie', 'Rome', 41.8887, 12.4866),
(14, 'Etats-Unis', 'Las Vegas', 36.175, -115.136),
(15, 'Egypte', 'Gizeh', 29.9794, 31.1344),
(16, 'Pays de Galles', 'Gateholm', 51.7181, -5.23139),
(17, 'Nouvelle Zélande', 'Matamata', -37.8085, 175.771),
(18, 'Angleterre', 'Oxford', 51.7519, -1.25778),
(19, 'Etats-Unis', 'Kauai', 22.0833, -159.5);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `town`
--
ALTER TABLE `town`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
