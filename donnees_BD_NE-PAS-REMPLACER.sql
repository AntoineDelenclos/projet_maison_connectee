-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 14 jan. 2023 à 18:58
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maison_connect`
--



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



--
-- Déchargement des données de la table `location`
--

INSERT INTO `location` (`Id_location`, `Debut_location`, `Fin_location`) VALUES
(1, '2022-01-01', '2023-11-08'),
(2, '2022-07-01', '2024-04-05');



--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`Id_maison`, `Nom_maison`, `Deg_iso`, `Nb_appart`, `Eva_eco`) VALUES
(1, 'MaisonParis', 6.1, 9, 'C'),
(2, 'MaisonTours', 7.2, 4, 'E');



--
-- Déchargement des données de la table `possession`
--

INSERT INTO `possession` (`Id_possession`, `Debut_possession`, `Fin_possession`) VALUES
(1, '2020-12-07', '2024-05-08'),
(2, '2021-01-11', '2023-10-12');



--
-- Déchargement des données de la table `substance`
--

INSERT INTO `substance` (`Id_substance`, `Nom_substance`, `Min_substance`, `Max_substance`, `Crit_substance`, `Ideal_substance`) VALUES
(1, 'CO2', 1, 10, 15, 3),
(2, 'Dechets radioactifs', 2, 15.7, 25.3, 5.5),
(3, 'Metaux', 1.3, 15.9, 27, 1.5),
(4, 'Pesticides', 0.5, 15, 30.5, 1.5);



--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id_user`, `Nom`, `Prenom`, `Nom_utilisateur`, `Date_naissance`, `Email`, `Tel`, `Genre`, `Est_admin`, `Etat_cpt`, `Mot_de_passe`, `Date_creation_cpt`) VALUES
(1, 'Lion', 'Martin', 'LM', '1980-12-13', 'Martin@gmail.com', '0789654123', 1, 1, 'Actif', 'ML75', '2022-12-16'),
(2, 'Meunier', 'Lea', 'ML', '1995-12-11', 'Lea@gmail.com', '0256987421', 0, 0, 'Actif', 'ML37', '2022-12-16');



--
-- Déchargement des données de la table `appartement`
--

INSERT INTO `appartement` (`Id_appart`, `Num_appart`, `Deg_secu`, `Type_appart`, `Libel_piece`, `Id_adresse`, `Id_maison`, `Id_user`, `Id_possession`, `Id_location`) VALUES
(1, 1, 'Moyen', 'T3', 'Sdb,Chambre', 1, 1, 1, 1, 1),
(2, 2, 'Fort', 'T4', 'sdb,cuisine,chambre1,chambre2', 2, 2, 2, 1, 2);



--
-- Déchargement des données de la table `appareil`
--

INSERT INTO `appareil` (`Id_appareil`, `Nom_appareil`, `Type_appareil`, `Libel_appareil`, `Id_appart`) VALUES
(1, 'Four', 'Cuisson', 'Four encastrable Bosch HBG675BB1 Série 8', 1),
(2, 'Lampe', 'eclairage', 'Lampe à Poser Bois Kanuni', 2),
(3, 'Frigo', 'refroidir', 'Réfrigérateur combiné Samsung RB34T670ESA', 1),
(4, 'Plaques de cuisson', 'cuisson', 'Table induction Electrolux LIT60330C', 2),
(5, 'machine à laver', 'lavage', 'Lave linge hublot Whirlpool FFBP9469BVFR Freshcare', 1),
(6, 'machine à laver', 'lavage', 'Lave linge hublot Whirlpool', 2),
(7, 'chaudiere', 'chauffage', 'Hydromotrix Condensation Visio mixte Frisquet', 1),
(8, 'chaudiere', 'chauffage', 'Hydromotrix Condensation', 2),
(9, 'four', 'cuisson', 'Four encastrable Bosch', 2),
(10, 'lampe', 'eclairage', 'Lampe à Poser', 1),
(11, 'frigo', 'refroidir', 'Réfrigérateur combiné ', 2),
(12, 'Plaques de cuisson', 'cuisson', 'Table induction ', 1);



--
-- Déchargement des données de la table `ressource`
--

INSERT INTO `ressource` (`Id_ressource`, `Nom_ressource`, `Min_ressource`, `Max_ressource`, `Crit_ressource`, `Ideal_ressource`) VALUES
(1, 'Eau', 1.5, 10, 20, 3.6),
(2, 'Electricite', 5.4, 19.6, 37, 15),
(3, 'Gaz', 1, 5, 10, 2);



--
-- Déchargement des données de la table `consommation`
--

INSERT INTO `consommation` (`Id_conso`, `Conso_kWh`, `Duree_conso_en_h`, `Date_conso`, `Id_Ressource`, `Id_Appareil`) VALUES
(1, 1500, '2.00', '2023-01-03 00:00:00', 1, 1),
(2, 1600, '2.00', '2023-01-03 00:00:00', 2, 1),
(3, 1555, '3.00', '2023-01-04 00:00:00', 1, 2),
(4, 800, '0.50', '2023-01-04 00:00:00', 2, 2),
(5, 1980, '1.00', '2023-01-21 00:00:00', 1, 1),
(6, 6000, '4.00', '2023-01-21 00:00:00', 2, 1),
(7, 250, '4.00', '2022-12-19 00:00:00', 1, 1),
(8, 600, '3.00', '2022-12-20 00:00:00', 1, 1),
(9, 790, '5.00', '2023-01-27 00:00:00', 2, 1),
(10, 460, '7.00', '2023-01-28 00:00:00', 2, 2),
(11, 4680, '2.00', '2022-11-04 00:00:00', 2, 1),
(12, 670, '4.00', '2022-10-17 00:00:00', 1, 1),
(13, 2790, '1.50', '2022-07-11 00:00:00', 2, 1),
(14, 780, '2.50', '2022-08-29 00:00:00', 3, 1),
(15, 460, '4.20', '2022-02-08 00:00:00', 3, 2),
(16, 2340, '1.70', '2022-05-15 00:00:00', 3, 1),
(17, 789, '0.40', '2023-01-10 21:05:10', 1, 3),
(18, 1473, '1.70', '2023-01-10 21:05:10', 2, 4),
(19, 2578, '2.70', '2022-06-21 21:06:26', 1, 5),
(20, 1890, '2.00', '2022-04-04 21:06:26', 2, 5),
(21, 780, '1.00', '2022-05-02 21:07:24', 1, 6),
(22, 444, '1.00', '2022-05-02 21:07:24', 2, 6);



--
-- Déchargement des données de la table `emission`
--

INSERT INTO `emission` (`Id_ressource`, `Id_substance`) VALUES
(1, 3),
(1, 4),
(2, 1),
(2, 2);
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
