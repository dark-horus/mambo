-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 19 Avril 2016 à 23:57
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mambo`
--

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE IF NOT EXISTS `etape` (
  `ID` int(10) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `etape_ID` text NOT NULL,
  `field` text NOT NULL,
  `value` text NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etape`
--

INSERT INTO `etape` (`ID`, `user_ID`, `etape_ID`, `field`, `value`, `Date`) VALUES
(66, 54, 'vin', '', '', '2016-04-17 15:30:00'),
(67, 54, 'vin', '', '', '2016-04-17 15:30:33'),
(68, 54, 'vin', '', '', '2016-04-17 15:30:47'),
(69, 54, 'vin', '', '', '2016-04-17 15:30:51'),
(70, 54, 'poule', '', '', '2016-04-17 15:35:22'),
(71, 54, 'vin', '', '', '2016-04-17 15:35:46'),
(72, 54, 'vache', '', '', '2016-04-17 15:40:09'),
(73, 54, 'vache', '', '', '2016-04-17 15:40:23'),
(74, 54, 'chat', '', '', '2016-04-17 15:40:47'),
(75, 54, 'chien', 'visage', '<img src="../default/page/img/interrogation2.png">', '2016-04-17 18:12:57'),
(76, 54, 'chien', 'visage', '<img src="../default/page/img/interrogation.png">', '2016-04-17 18:10:42'),
(77, 54, 'chien', 'points', '100 points', '2016-04-17 17:48:47'),
(78, 54, 'chien', 'points', '500 points', '2016-04-17 17:48:47'),
(79, 54, 'ordinateur', 'musique', 'ACDC - Ma meilleure amie', '2016-04-17 18:48:17'),
(80, 54, 'ordinateur', 'musique', 'Justin Bieber VS Kendji Girac - La bossa nueva', '2016-04-17 18:48:33'),
(81, 54, 'ordinateur', 'video', 'Best pr0nFood Eu', '2016-04-17 18:45:32'),
(82, 54, 'ordinateur', 'video', 'Le patin à roulettes pour les noobs', '2016-04-17 18:45:57'),
(83, 54, 'ordinateur', 'video', 'RabatDjin - Live Eurovision 2016', '2016-04-17 18:47:17'),
(84, 63, 'vin', '', '', '2016-04-19 13:14:25');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `img_avatar` text NOT NULL,
  `current_etape` text,
  `progression` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`iduser`, `password`, `img_avatar`, `current_etape`, `progression`) VALUES
(54, 's09TkFedkD', '', 'vin', 4),
(55, 'yZkT7NyH3R', '', NULL, 0),
(56, 'PcNMz76upG', '', NULL, 0),
(57, '6eZmLO0MRg', '', NULL, 0),
(58, '6I2GN1LmPo', '', NULL, 0),
(59, 'bkXwnivMHG', '', NULL, 0),
(60, 'T1fiTUXUvE', '', NULL, 0),
(61, 'vonopm2et7', '', NULL, 0),
(62, 'N7ziV3NQTk', '', NULL, 0),
(63, 'PiT58o6W6U', '', 'vin', 1),
(64, 'otqFED9ZeH', '', NULL, 0),
(65, 'xEduRafuxU', '', NULL, 0),
(66, '3Tulyp3FI8', '', NULL, 0),
(67, 'BWVwZoDspa', '', NULL, 0),
(68, '2SBgbGxwv5', '', NULL, 0),
(69, 'zmdYLYPclc', '', NULL, 0),
(70, 'Xs6WlShuVQ', '', NULL, 0),
(71, 'sVUZAFgDUJ', '', NULL, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `etape`
--
ALTER TABLE `etape`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `etape`
--
ALTER TABLE `etape`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `etape`
--
ALTER TABLE `etape`
  ADD CONSTRAINT `etape_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`iduser`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
