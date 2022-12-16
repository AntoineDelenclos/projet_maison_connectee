-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 16 déc. 2022 à 09:15
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `maison_connect`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `Id_adresse` int(11) NOT NULL AUTO_INCREMENT,
  `Ville` varchar(60) NOT NULL,
  `CP` int(11) NOT NULL,
  `Rue` varchar(60) NOT NULL,
  `Num_maison` int(11) NOT NULL,
  PRIMARY KEY (`Id_adresse`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adresse`
--

INSERT INTO `adresse` (`Id_adresse`, `Ville`, `CP`, `Rue`, `Num_maison`) VALUES
(1, 'Paris', 75000, 'Rivoli', 1),
(2, 'Tours', 37000, 'Portalis', 2),
(3, 'Nice', 6000, 'Clemenceau', 3),
(4, 'Evry', 91000, 'Pottier', 4),
(5, 'Orleans', 45000, 'Jaures', 5),
(6, 'Tours', 37100, 'Symphorien', 6);

-- --------------------------------------------------------

--
-- Structure de la table `appareil`
--

DROP TABLE IF EXISTS `appareil`;
CREATE TABLE IF NOT EXISTS `appareil` (
  `Id_appareil` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_appareil` varchar(50) NOT NULL,
  `Type_appareil` varchar(50) NOT NULL,
  `Libel_appareil` varchar(50) NOT NULL,
  `Id_appart` int(11) NOT NULL,
  `Lieu` varchar(30) NOT NULL,
  PRIMARY KEY (`Id_appareil`),
  KEY `Id_appart` (`Id_appart`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `appareil`
--

INSERT INTO `appareil` (`Id_appareil`, `Nom_appareil`, `Type_appareil`, `Libel_appareil`, `Id_appart`, `Lieu`) VALUES
(1, 'Four', 'Cuisson', 'Four ', 1, 'sous les plaques de cuisson'),
(2, 'Radiateur', 'Chauffant', 'Chauffage  elec', 2, 'Salon, sous la fenetre');

-- --------------------------------------------------------

--
-- Structure de la table `appartement`
--

DROP TABLE IF EXISTS `appartement`;
CREATE TABLE IF NOT EXISTS `appartement` (
  `Id_appart` int(11) NOT NULL AUTO_INCREMENT,
  `Num_appart` int(11) NOT NULL,
  `Deg_secu` varchar(50) NOT NULL,
  `Type_appart` varchar(50) NOT NULL,
  `Libel_piece` varchar(50) NOT NULL,
  `Id_adresse` int(11) NOT NULL,
  `Id_maison` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `Id_possession` int(11) NOT NULL,
  `Id_location` int(11) NOT NULL,
  PRIMARY KEY (`Id_appart`),
  KEY `Id_adresse` (`Id_adresse`),
  KEY `Id_maison` (`Id_maison`),
  KEY `Id_user` (`Id_user`),
  KEY `Id_possession` (`Id_possession`),
  KEY `Id_location` (`Id_location`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `appartement`
--

INSERT INTO `appartement` (`Id_appart`, `Num_appart`, `Deg_secu`, `Type_appart`, `Libel_piece`, `Id_adresse`, `Id_maison`, `Id_user`, `Id_possession`, `Id_location`) VALUES
(1, 1, 'Moyen', 'T3', 'Sdb,Chambre', 1, 1, 1, 1, 1),
(2, 2, 'Fort', 'T4', 'sdb,cuisine,chambre1,chambre2', 2, 2, 2, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `emission`
--

DROP TABLE IF EXISTS `emission`;
CREATE TABLE IF NOT EXISTS `emission` (
  `Id_ressource` int(11) NOT NULL,
  `Id_substance` int(11) NOT NULL,
  PRIMARY KEY (`Id_ressource`,`Id_substance`),
  KEY `Id_substance` (`Id_substance`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emission`
--

INSERT INTO `emission` (`Id_ressource`, `Id_substance`) VALUES
(1, 3),
(1, 4),
(2, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `Id_location` int(11) NOT NULL AUTO_INCREMENT,
  `Debut_location` date NOT NULL,
  `Fin_location` date NOT NULL,
  PRIMARY KEY (`Id_location`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`Id_location`, `Debut_location`, `Fin_location`) VALUES
(1, '2022-01-01', '2023-11-08'),
(2, '2022-07-01', '2024-04-05');

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

DROP TABLE IF EXISTS `maison`;
CREATE TABLE IF NOT EXISTS `maison` (
  `Id_maison` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_maison` varchar(60) NOT NULL,
  `Deg_iso` float NOT NULL,
  `Nb_appart` int(11) NOT NULL,
  `Eva_eco` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_maison`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`Id_maison`, `Nom_maison`, `Deg_iso`, `Nb_appart`, `Eva_eco`) VALUES
(1, 'MaisonParis', 6.1, 9, 'C'),
(2, 'MaisonTours', 7.2, 4, 'E');

-- --------------------------------------------------------

--
-- Structure de la table `possession`
--

DROP TABLE IF EXISTS `possession`;
CREATE TABLE IF NOT EXISTS `possession` (
  `Id_possession` int(11) NOT NULL AUTO_INCREMENT,
  `Debut_possession` date NOT NULL,
  `Fin_possession` date NOT NULL,
  PRIMARY KEY (`Id_possession`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `possession`
--

INSERT INTO `possession` (`Id_possession`, `Debut_possession`, `Fin_possession`) VALUES
(1, '2020-12-07', '2024-05-08'),
(2, '2021-01-11', '2023-10-12');

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

DROP TABLE IF EXISTS `ressource`;
CREATE TABLE IF NOT EXISTS `ressource` (
  `Id_ressource` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_ressource` varchar(60) NOT NULL,
  `Min_ressource` float NOT NULL,
  `Max_ressource` float NOT NULL,
  `Crit_ressource` float NOT NULL,
  `Ideal_ressource` float NOT NULL,
  PRIMARY KEY (`Id_ressource`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ressource`
--

INSERT INTO `ressource` (`Id_ressource`, `Nom_ressource`, `Min_ressource`, `Max_ressource`, `Crit_ressource`, `Ideal_ressource`) VALUES
(1, 'Eau', 1.5, 10, 20, 3.6),
(2, 'Electricite', 5.4, 19.6, 37, 15);

-- --------------------------------------------------------

--
-- Structure de la table `substance`
--

DROP TABLE IF EXISTS `substance`;
CREATE TABLE IF NOT EXISTS `substance` (
  `Id_substance` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_substance` varchar(60) NOT NULL,
  `Min_substance` float NOT NULL,
  `Max_substance` float NOT NULL,
  `Crit_subtance` float NOT NULL,
  `Ideal_subtance` float NOT NULL,
  PRIMARY KEY (`Id_substance`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `substance`
--

INSERT INTO `substance` (`Id_substance`, `Nom_substance`, `Min_substance`, `Max_substance`, `Crit_subtance`, `Ideal_subtance`) VALUES
(1, 'CO2', 1, 10, 15, 3),
(2, 'Dechets radioactifs', 2, 15.7, 25.3, 5.5),
(3, 'Metaux', 1.3, 15.9, 27, 1.5),
(4, 'Pesticides', 0.5, 15, 30.5, 1.5);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Id_user` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(60) NOT NULL,
  `Date_naissance` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `Genre` tinyint(1) NOT NULL,
  `Est_admin` tinyint(1) NOT NULL,
  `Etat_cpt` varchar(50) NOT NULL,
  `Mot_de_passe` varchar(100) NOT NULL,
  `Date_creation_cpt` date NOT NULL,
  PRIMARY KEY (`Id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id_user`, `Nom`, `Prenom`, `Date_naissance`, `Email`, `Tel`, `Genre`, `Est_admin`, `Etat_cpt`, `Mot_de_passe`, `Date_creation_cpt`) VALUES
(1, 'Lion', 'Martin', '1980-12-13', 'Martin@gmail.com', '0789654123', 1, 1, 'Actif', 'ML75', '2022-12-16'),
(2, 'Meunier', 'Lea', '1995-12-11', 'Lea@gmail.com', '0256987421', 0, 0, 'Actif', 'ML37', '2022-12-16');

-- --------------------------------------------------------

--
-- Structure de la table `utilisation`
--

DROP TABLE IF EXISTS `utilisation`;
CREATE TABLE IF NOT EXISTS `utilisation` (
  `Id_ressource` int(11) NOT NULL,
  `Id_appareil` int(11) NOT NULL,
  PRIMARY KEY (`Id_ressource`,`Id_appareil`),
  KEY `Id_appareil` (`Id_appareil`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisation`
--

INSERT INTO `utilisation` (`Id_ressource`, `Id_appareil`) VALUES
(2, 1),
(2, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
