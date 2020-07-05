-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : Dim 05 juil. 2020 à 15:15
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdfilms`
--
CREATE DATABASE IF NOT EXISTS `bdfilms` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bdfilms`;

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE `connexion` (
  `id` int(11) NOT NULL,
  `utilisateur` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`id`, `utilisateur`, `mdp`, `status`) VALUES
(11, 'admin@gmail.com', 'admin@gmail.com', 'admin'),
(13, 'membre@gmail.com', 'membre@gmail.com', 'user'),
(16, 'alcor@gmail.com', 'test', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `titre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `realisateur` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `duree` int(11) NOT NULL,
  `prix` float NOT NULL,
  `pochette` varchar(275) COLLATE utf8_unicode_ci NOT NULL,
  `lien` varchar(275) COLLATE utf8_unicode_ci NOT NULL,
  `new_release` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `realisateur`, `categorie`, `duree`, `prix`, `pochette`, `lien`, `new_release`) VALUES
(39, 'Home Alone', 'Chris Columbus', 'Famille', 98, 21.99, '471e1ee07143c651d79c83a195bb3d19', 'jEDaVHmw7r4', 0),
(40, 'Once upon a time in America', 'Sergio Leone', 'Action', 205, 35.99, 'b24f96df1297ad65e691e3b48eb3ad2a', 'LcpCRyNo8T8', 0),
(41, 'Grease', 'Randal Kleiser', 'Comedie', 124, 24.99, '7f44249e5d9df59df2727d5de1f00f89', 'yNhZNp9GXb8', 0),
(42, 'American Pie', 'Chris Weitz ', 'Comedie', 98, 21.99, '63d705e2b1d257cdf6cbabbaf86039dc', 'Sithad108Og', 0),
(44, 'Le parrain', 'Coppola', 'Action', 124, 21.99, '3044df4681916d14a43023d8fe26f537', '5DO-nDW43Ik', 0),
(45, 'Y tu mama tambien', 'Alfonso Cuaron', 'Drame', 106, 24.95, '1efeae81f7a5988725d08393261bf4a4', 'UW1LQbtRuAM', 0),
(46, 'Aarons blood', 'Tommy Stoval', 'Suspense', 80, 18.99, '01b433e0544929c3d1532cf7cebe284c', 'd3WnqQK3hvc', 0),
(47, 'Elvis Gratton', 'Pierre Falardeau', 'Quebecois', 89, 22.99, 'ee225eeaaceff8f58cea554f5ac80a3d', 'zDUQef38XII', 0),
(48, 'Star Wars', 'Georges Lucas', 'Science-fiction', 127, 35.99, '902d48b093b98c4bf2855eb222b776c8', 'XHk5kCIiGoM', 0),
(49, 'The Shining', 'Stanley Kubrick', 'Horreur', 144, 32.78, '5d20246cec1e0bfa642fcaa2e9977fc8', '5Cb3ik6zP2I', 0),
(50, 'Chucky', 'Don Mancini', 'Horreur', 87, 16.95, '00064f9842048cfd08167f1065e224f3', 'CKc-mP5xXQY', 0),
(51, 'Catch me if you can', 'Steven Spielberg', 'Suspense', 125, 24.99, 'c5a376c6af53a4e5bc2217fddd11a8b5', 'xas1UyTiVUw', 0),
(52, 'Kiwi Christmas', 'Tony Simpson', 'Noel', 89, 14.99, '5890607d180695df137eabcd8863e92c', '_J8Rm531oxs', 0),
(53, 'Elvis Gratton 2', 'Pierre Falardeau', 'Quebecois', 105, 21.99, '3b7b95ead2c6049bdaf15963568a3f11', 'U0FyLwmB2-w', 0),
(54, 'Jumanji', 'Jake Kesdan', 'Famille', 127, 27.99, '2ebcb510fe08766d6bcf10359a8128a8', 'rBxcF-r9Ibs', 1),
(55, 'Bad Boys', 'Adil El Arbi', 'Action', 123, 32.99, 'e31a578d3cfa23d66f8df37719aef9a7', 'jKCj3XuPG8M', 1),
(56, '14 jours 12 nuits', 'Jean-Philippe Duval', 'Quebecois', 97, 33.99, '34a36476728bb87ed8cc4d829ea5a55c', 'YarCNog3Ew8', 1),
(57, 'Sonic The HedgeHog', 'Jeff Fowler', 'Famille', 99, 32.99, '2e98b3439e2d0f2d2172acb57658547e', '4mW9FE5ILJs', 1),
(58, 'The Birds', 'Alfred HitchCock', 'Classique', 119, 34.99, 'bed0701185513dad09b1902ee26dcd47', 'lCxR7dlavwg', 0),
(59, 'Casablanca', 'Michael Curtis', 'Classique', 102, 42.99, '7976585002d0f9ec9b6162b8298d2360', 'BkL9l7qovsE', 0),
(60, 'Octopussy', 'John Glen', 'Classique', 131, 27.99, 'c0a4b4a4f7fbe098b053af61001119b9', 'q1hLWZzgZvU', 0),
(61, 'Gone with the wind', 'Victor Fleming', 'Classique', 238, 37.99, 'dd60c03b1de64f0b986c1e6215c2eec3', '0X94oZgJis4', 0);

-- --------------------------------------------------------

--
-- Structure de la table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `img` varchar(275) COLLATE utf8_unicode_ci NOT NULL,
  `titre` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `utilisateur` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `courriel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_inscription` date NOT NULL,
  `adresse` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `utilisateur`, `courriel`, `mdp`, `date_inscription`, `adresse`) VALUES
(16, 'admin', 'admin@gmail.com', 'admin@gmail.com', 'admin@gmail.com', '2020-07-03', '234, rue Pierre, Montreal, Quebec, H1G2H4'),
(17, 'Membre', 'membre@gmail.com', 'membre@gmail.com', 'membre@gmail.com', '2020-07-03', '123, rue Test, Montréal, Qc, H1G2H4'),
(20, 'Alexandre Cormier', 'alcor@gmail.com', 'alcor@gmail.com', 'test', '2020-07-04', '4322  rue Perras,Montréal,Qc,H1G2H4');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `connexion`
--
ALTER TABLE `connexion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
