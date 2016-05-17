-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 17 Mai 2016 à 11:47
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
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `login` char(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`login`, `password`) VALUES
('Magali', '8f42420e0ac5e579c0b2c1186d070b99');

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE IF NOT EXISTS `etape` (
  `ID` int(10) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `etape_ID` text NOT NULL,
  `field` text NOT NULL,
  `value` varchar(500) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `notif` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etape`
--

INSERT INTO `etape` (`ID`, `user_ID`, `etape_ID`, `field`, `value`, `Date`, `notif`) VALUES
(107, 111, 'Livre', 'livre', 'ah que coucou hihi', '2016-05-13 22:00:30', 0),
(120, 128, 'livre', 'histoire', 'haha', '2016-05-14 23:25:48', 0),
(121, 128, 'livre', 'histoire', 'Il prit son arc et tira sur la pomme', '2016-05-15 00:04:46', 0),
(122, 128, 'livre', 'histoire', 'Le visage contracté par le dégoût, il envoya son courrier puis se mit a surfer. Il pensa que c\\''était une idée excellente que de reprendre contact avec les plus importantes maisons d\\''édition d\\''Espagne. A toutes il envoya un nouveau message : ...\\" (Chapitre 26, page 168)', '2016-05-15 00:04:46', 0),
(123, 129, 'livre', 'histoire', 'test', '2016-05-16 09:43:51', 1),
(125, 131, 'livre', 'histoire', 'Je te fais un super test !', '2016-05-16 12:04:33', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `img_avatar` varchar(150) NOT NULL DEFAULT 'default.png',
  `current_etape` text,
  `progression` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`iduser`, `password`, `img_avatar`, `current_etape`, `progression`) VALUES
(111, 'sNczaXABId', 'sNczaXABId.png', 'Immeuble', 2),
(121, 'JKTcvGzGzS', 'JKTcvGzGzS.jpg', NULL, 0),
(128, '9PKjIBMxQF', '9PKjIBMxQF.jpg', 'livre', 1),
(129, '5X1vqhY2EN', 'default.png', 'livre', 1),
(131, 'SPkHmvGFqz', 'default.png', 'livre', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`login`);

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
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=132;
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
