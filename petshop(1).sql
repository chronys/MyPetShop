-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 30 sep. 2025 à 11:37
-- Version du serveur : 8.4.3
-- Version de PHP : 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `petshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `formulaire_client`
--

CREATE TABLE `formulaire_client` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `formulaire_client`
--

INSERT INTO `formulaire_client` (`id`, `nom`, `prenom`, `email`, `message`) VALUES
(1, 'ipipo', 'poop', 'opop.l@opop', 'kjdlhvfrhcmizeohnc'),
(2, 'poopk', 'poo', 'opp.op@op', 'nùk^ninkklnioînonmjklj');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `prix_promo` float DEFAULT NULL,
  `stock` int NOT NULL,
  `est_meilleure_vente` tinyint(1) NOT NULL DEFAULT '0',
  `est_promo` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `image`, `categorie`, `prix`, `prix_promo`, `stock`, `est_meilleure_vente`, `est_promo`) VALUES
(1, 'Croquettes premium', './img/imgalimentation/A1.png', 'nourriture', 29.99, NULL, 201, 1, 0),
(2, 'Pâtée complète', './img/imgalimentation/A2.png', 'nourriture', 19.99, NULL, 41, 0, 0),
(3, 'Friandises naturelles', './img/imgalimentation/A3.png', 'nourriture', 9.99, 7.99, 125, 0, 0),
(4, 'Bâtonnets dentaires', './img/imgalimentation/A4.png', 'nourriture', 16.5, NULL, 96, 0, 0),
(5, 'Mousse à lécher', './img/imgalimentation/A5.png', 'nourriture', 4.99, NULL, 60, 0, 0),
(6, 'Compléments naturels', './img/imgalimentation/A6.png', 'nourriture', 25, NULL, 16, 0, 0),
(7, 'Collier réglable', './img/imgaccessoires/C1.png', 'accessoire', 29.99, 23.99, 386, 1, 0),
(8, 'Harnais confortable', './img/imgaccessoires/C2.png', 'accessoire', 19.99, NULL, 340, 0, 0),
(9, 'Laisse extensible', './img/imgaccessoires/C3.png', 'accessoire', 9.99, NULL, 141, 0, 0),
(10, 'Gamelles antidérapantes', './img/imgaccessoires/C5.png', 'accessoire', 4.99, NULL, 453, 1, 0),
(11, 'Tapis rafraîchissant ou chauffant', './img/imgaccessoires/C4.png', 'accessoire', 16.5, NULL, 488, 0, 0),
(12, 'Brosse douce ou gant de toilettage', './img/imgaccessoires/C6.png', 'accessoire', 25, NULL, 342, 0, 0),
(13, 'Kong à remplir', './img/imgjouets/J1.png', 'jouet', 6.99, NULL, 443, 1, 0),
(14, 'Balle souple', './img/imgjouets/J2.png', 'jouet', 9.99, NULL, 95, 0, 0),
(15, 'Jouet en corde (tug)', './img/imgjouets/J3.png', 'jouet', 15.99, NULL, 95, 0, 0),
(16, 'Jouet distributeur', './img/imgjouets/J6.png', 'jouet', 14.99, 11.99, 328, 0, 1),
(17, 'Peluches renforcées avec pouic', './img/imgjouets/J4.png', 'jouet', 24.5, 0.99, 485, 0, 1),
(18, 'Tapis de fouille (snuffle mat)', './img/imgjouets/J5.png', 'jouet', 24.99, NULL, 313, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `formulaire_client`
--
ALTER TABLE `formulaire_client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `formulaire_client`
--
ALTER TABLE `formulaire_client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
