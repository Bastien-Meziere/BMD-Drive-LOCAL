-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 03 avr. 2020 à 13:17
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
-- Base de données :  `bmdrive`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_cat` int(3) NOT NULL,
  `lib_cat` varchar(200) NOT NULL,
  `img_cat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `lib_cat`, `img_cat`) VALUES
(1, 'Fruits et légumes', 'fruitslegumes.jpg'),
(2, 'Produits laitiers', 'produitslaitiers.jpg'),
(3, 'Viandes', 'viandes.jpeg'),
(4, 'Pains', 'boulangerie.jpg'),
(5, 'Boissons', 'boissons.png');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_cli` int(3) NOT NULL,
  `login_cli` varchar(150) NOT NULL,
  `mdp_cli` varchar(150) NOT NULL,
  `nom_cli` varchar(150) NOT NULL,
  `prenom_cli` varchar(200) NOT NULL,
  `rue_cli` varchar(255) NOT NULL,
  `cp_cli` int(5) NOT NULL,
  `ville_cli` varchar(100) NOT NULL,
  `tel_cli` text NOT NULL,
  `email_cli` varchar(150) NOT NULL,
  `desc_cli` varchar(255) NOT NULL,
  `img_cli` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_cli`, `login_cli`, `mdp_cli`, `nom_cli`, `prenom_cli`, `rue_cli`, `cp_cli`, `ville_cli`, `tel_cli`, `email_cli`, `desc_cli`, `img_cli`) VALUES
(1, 'Bastien', 'e10adc3949ba59abbe56e057f20f883e', 'Mézière', 'Bastien', '35 rue de la rose', 53000, 'Laval', '06 00 00 00 00', 'bastien@gmail.com', 'Je suis Bastien', '');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_com` int(3) NOT NULL,
  `date_com` date NOT NULL,
  `total_com` int(50) NOT NULL,
  `id_cli` int(3) NOT NULL,
  PRIMARY KEY (`id_com`),
  KEY `clients` (`id_cli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `id_fact` int(3) NOT NULL,
  `text_fact` varchar(255) NOT NULL,
  PRIMARY KEY (`id_fact`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `id_fourn` int(3) NOT NULL,
  `nom_fourn` varchar(100) NOT NULL,
  `cp_fourn` int(5) NOT NULL,
  `ville_fourn` varchar(100) NOT NULL,
  `adresse_fourn` varchar(255) NOT NULL,
  `tel_fourn` text NOT NULL,
  `email_fourn` varchar(100) NOT NULL,
  PRIMARY KEY (`id_fourn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id_fourn`, `nom_fourn`, `cp_fourn`, `ville_fourn`, `adresse_fourn`, `tel_fourn`, `email_fourn`) VALUES
(1, 'Dylan', 53000, 'Laval', '38 rue de la bague', '06 61 61 61 61', 'dylan@gmail.com'),
(2, 'Mathis', 72000, 'Le Mans', '06 rue de Mota', '07 00 00 00 00', 'mathis@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `lcommande`
--

DROP TABLE IF EXISTS `lcommande`;
CREATE TABLE IF NOT EXISTS `lcommande` (
  `id_com` int(3) NOT NULL,
  `id_prod` int(3) NOT NULL,
  `quantite_lcom` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_com`,`id_prod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_prod` int(3) NOT NULL,
  `lib_prod` varchar(200) NOT NULL,
  `img_prod` varchar(100) NOT NULL,
  `prix_prod` double(5,2) NOT NULL,
  `id_cat` int(3) NOT NULL,
  PRIMARY KEY (`id_prod`),
  KEY `categorie` (`id_cat`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `lib_prod`, `img_prod`, `prix_prod`, `id_cat`) VALUES
(1, 'Fraise', 'fraise.jpg', 2.00, 1),
(2, 'Haricots', 'haricot.jpg', 2.00, 1),
(3, 'Carottes', 'carotte.jpg', 1.00, 1),
(4, 'Lait', 'lait.jpg', 1.00, 2),
(5, 'Yaourt', 'yaourt.jpeg', 1.00, 2),
(6, 'Escalope de dinde', 'escalope.jpeg', 6.00, 3),
(7, 'Steak', 'steak.jpg', 7.00, 3),
(8, 'Baguette', 'baguette.jpg', 0.87, 4),
(9, 'Pain', 'pain.jpeg', 1.25, 4),
(10, 'Coca Cola', 'cola.jpg', 1.00, 5),
(11, 'Orangina', 'orangina.jpg', 1.00, 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
