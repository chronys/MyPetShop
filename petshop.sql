-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 30 sep. 2025 à 11:29
-- Version du serveur : 8.0.30
-- Version de PHP : 8.1.10

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
(3, 'Eni', 'Ripsa', 'jaime.soigner@bonta.fr', 'Mort à brakmar !!'),
(4, 'Amory', 'Dylan', 'amorydylan@courriel.fr', 'Je veux être remboursé !'),
(5, 'Formel', 'Jean', 'jean-formel@legislation.fr', 'Bonjour,\r\n\r\nJe me permets de vous contacter concernant la commande n°[XXXX], reçue le [date]. Malheureusement, le produit ne correspond pas à ce qui était présenté sur votre site : [décrire le problème précis — produit défectueux, non conforme, mauvaise référence, etc.].\r\n\r\nConformément aux articles L.217-4 et suivants du Code de la consommation, je vous rappelle que le vendeur est tenu de livrer un bien conforme au contrat et répond des défauts de conformité. De plus, l’article L.221-18 prévoit un délai légal de rétractation de 14 jours à compter de la réception.\r\n\r\nJe vous demande donc de bien vouloir procéder soit à un remplacement du produit, soit à son remboursement intégral dans les plus brefs délais. À défaut de réponse sous 14 jours, je me verrai contraint(e) d’engager les démarches nécessaires auprès des services compétents.\r\n\r\nJe reste dans l’attente de votre retour.\r\n\r\nCordialement,\r\nFormel, Jean');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `image_produit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom_produit`, `categorie`, `prix`, `description`, `image_produit`) VALUES
(1, 'Collier réglable avec médaille', 'accessoires', 29.99, 'Pour identification et sécurité. Taille ajustable.', 'C1.png'),
(2, 'Harnais confortable', 'accessoires', 19.99, 'Meilleure répartition des tensions qu’un collier, idéal pour jeunes, adultes et chiens âgés.', 'C2.png'),
(3, 'Laisse extensible ou classique', 'accessoires', 9.99, 'Pour les balades, avec contrôle et liberté.', 'C3.png'),
(4, 'Tapis rafraîchissant ou chauffant', 'accessoires', 16.5, 'Aide à réguler la température selon la saison.', 'C4.png'),
(5, 'Gamelles antidérapantes', 'accessoires', 4.99, 'Stables pour éviter de renverser, adaptées à tous les âges.', 'C5.png'),
(6, 'Brosse douce ou gant de toilette', 'accessoires', 25, 'Pour entretenir le pelage et créer un moment de lien.', 'C6.png'),
(7, 'Kong à remplir', 'jouets', 6.99, 'Idéal pour occuper mentalement, fonctionne avec croquettes, pâtée ou purées.', 'J1.png'),
(8, 'Balle souple ou texturée', 'jouets', 9.99, 'Facile à attraper pour les jeunes comme les vieux chiens.', 'J2.png'),
(9, 'Jouet en corde (tug)', 'jouets', 15.99, 'Pour tirer, mâcher, ou jouer avec l’humain.', 'J3.png'),
(10, 'Peluches renforcées avec pouic', 'jouets', 24.5, 'Douces mais résistantes pour chiots et seniors.', 'J4.png'),
(11, 'Tapis de fouille (snuflle mat)', 'jouets', 24.99, 'Stimulation mentale en cachant des friandises dedans.', 'J5.png'),
(12, 'Jouet distributeur de friandises', 'jouets', 6.99, 'Encourage la réflexion et ralentit l’ingestion.', 'J6.png'),
(13, 'Croquettes premium toutes étapes de vie', 'alimentation', 29.99, 'Formulées pour convenir à tous les âges, avec équilibre nutritionnel.', 'A1.png'),
(14, 'Patée complète (multi-âge)', 'alimentation', 19.99, 'Plus facile à mâcher, souvent très appétente.', 'A2.png'),
(15, 'Friandises naturelles déshydratées', 'alimentation', 29.99, 'Filet de poulet, foie, etc. Sans additifs.', 'A3.png'),
(16, 'Bâtonnets dentaires souples', 'alimentation', 16.5, 'Bon pour les dents tout en restant mâchables pour les plus âgés.', 'A4.png'),
(17, 'Purées ou mousses à lécher', 'alimentation', 4.99, 'Idéales en récompense ou pour hydrater la nourriture.', 'A5.png'),
(18, 'Compléments naturels', 'alimentation', 25, 'Soutien immunitaire, pelage, digestion – pour tous les âges (exemple : huile de saumon, probiotiques).', 'A6.png');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
