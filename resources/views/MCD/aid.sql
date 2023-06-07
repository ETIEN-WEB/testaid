-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 07 juin 2023 à 18:32
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `aid`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `role` varchar(225) DEFAULT NULL,
  `espace_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `assurances`
--

CREATE TABLE `assurances` (
  `id` int(11) NOT NULL,
  `libelle` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `assurances`
--

INSERT INTO `assurances` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'SUNU Assurances', '2023-06-06 09:26:56', '2023-06-06 09:26:56'),
(2, 'NSIA Assurances', '2023-06-06 09:28:07', '2023-06-06 09:28:07'),
(3, 'CNPS', '2023-06-06 09:28:07', '2023-06-06 09:28:07');

-- --------------------------------------------------------

--
-- Structure de la table `domaine_interventions`
--

CREATE TABLE `domaine_interventions` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `domaine_interventions`
--

INSERT INTO `domaine_interventions` (`id`, `libelle`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Plomberie', 'Vous pouvez solliciter l’intervention d’un professionnel en\r\ncas de fuite d’eau dans votre cuisine, dans la salle de bains\r\nou toute autre pièce de votre logement.', NULL, NULL),
(2, 'Serrurerie', 'Votre clé reste coincée dans la serrure, vous l’avez perdue\r\nou elle est endommagée au point de ne plus être utilisable.', NULL, NULL),
(3, 'Électricité', 'Votre système électrique présente des dysfonctionnements\r\net vous ne pouvez plus utiliser vos appareils.', '2023-06-06 09:30:21', '2023-06-06 09:30:21');

-- --------------------------------------------------------

--
-- Structure de la table `espaces`
--

CREATE TABLE `espaces` (
  `id` int(11) NOT NULL,
  `nom` int(11) DEFAULT NULL,
  `defaut` int(11) DEFAULT NULL,
  `module_admin` int(11) DEFAULT NULL,
  `module_admin_lst` int(11) DEFAULT NULL,
  `module_admin_edt` int(11) DEFAULT NULL,
  `module_admin_crte` int(11) DEFAULT NULL,
  `module_sinistre_dlt` int(11) DEFAULT NULL,
  `module_sinistre_lst` int(11) DEFAULT NULL,
  `module_sinistre_edt` int(11) DEFAULT NULL,
  `module_sinistre_crte` int(11) DEFAULT NULL,
  `created_by` varchar(225) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `formules`
--

CREATE TABLE `formules` (
  `id` int(11) NOT NULL,
  `plafond_garantie` varchar(255) NOT NULL,
  `metiers` varchar(300) DEFAULT NULL,
  `fréquences` varchar(225) DEFAULT NULL,
  `gestionnaire_client` varchar(225) DEFAULT NULL,
  `facturation` varchar(255) DEFAULT NULL,
  `urgences` varchar(225) DEFAULT NULL,
  `isponibilite_service` varchar(200) DEFAULT NULL,
  `maintenance_preventive` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `garanties`
--

CREATE TABLE `garanties` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `sinistre_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `libelle`, `sinistre_id`, `created_at`, `updated_at`) VALUES
(1, '16860671680_Photo.jpg', 4, '2023-06-06 15:59:28', '2023-06-06 15:59:28'),
(2, '16860671681_Photo.jpg', 4, '2023-06-06 15:59:28', '2023-06-06 15:59:28'),
(3, '16860678710_Photo.jpg', 5, '2023-06-06 16:11:11', '2023-06-06 16:11:11'),
(4, '16860681201_Photo.jpg', 6, '2023-06-06 16:15:20', '2023-06-06 16:15:20'),
(5, '16860685140_Photo.jpg', 7, '2023-06-06 16:21:54', '2023-06-06 16:21:54'),
(6, '16860685151_Photo.jpg', 7, '2023-06-06 16:21:55', '2023-06-06 16:21:55'),
(7, '16860696300_Photo.jpg', 10, '2023-06-06 16:40:30', '2023-06-06 16:40:30'),
(8, '16860708280_Photo.jpg', 12, '2023-06-06 17:00:28', '2023-06-06 17:00:28'),
(9, '16860816780_Photo.jpg', 13, '2023-06-06 20:01:18', '2023-06-06 20:01:18'),
(10, '16860816781_Photo.jpg', 13, '2023-06-06 20:01:18', '2023-06-06 20:01:18'),
(11, '16861287160_Photo.jpg', 14, '2023-06-07 09:05:16', '2023-06-07 09:05:16'),
(12, '16861288050_Photo.jpg', 15, '2023-06-07 09:06:45', '2023-06-07 09:06:45'),
(13, '16861288051_Photo.jpg', 15, '2023-06-07 09:06:45', '2023-06-07 09:06:45'),
(14, '16861290950_Photo.jpg', 16, '2023-06-07 09:11:35', '2023-06-07 09:11:35'),
(15, '16861296300_Photo.jpg', 17, '2023-06-07 09:20:30', '2023-06-07 09:20:30'),
(16, '16861297091_Photo.jpg', 18, '2023-06-07 09:21:49', '2023-06-07 09:21:49'),
(17, '16861297092_Photo.jpg', 18, '2023-06-07 09:21:49', '2023-06-07 09:21:49'),
(18, '16861297093_Photo.jpg', 18, '2023-06-07 09:21:49', '2023-06-07 09:21:49'),
(19, '16861298610_Photo.jpg', 19, '2023-06-07 09:24:21', '2023-06-07 09:24:21'),
(20, '16861298790_Photo.jpg', 20, '2023-06-07 09:24:39', '2023-06-07 09:24:39'),
(21, '16861298791_Photo.jpg', 20, '2023-06-07 09:24:39', '2023-06-07 09:24:39'),
(22, '16861298980_Photo.jpg', 21, '2023-06-07 09:24:58', '2023-06-07 09:24:58'),
(23, '16861298981_Photo.jpg', 21, '2023-06-07 09:24:58', '2023-06-07 09:24:58'),
(24, '16861298982_Photo.jpg', 21, '2023-06-07 09:24:58', '2023-06-07 09:24:58'),
(25, '16861298983_Photo.jpg', 21, '2023-06-07 09:24:58', '2023-06-07 09:24:58'),
(26, '16861300040_Photo.jpg', 22, '2023-06-07 09:26:44', '2023-06-07 09:26:44'),
(27, '16861300041_Photo.jpg', 22, '2023-06-07 09:26:44', '2023-06-07 09:26:44'),
(28, '16861300460_Photo.jpg', 23, '2023-06-07 09:27:26', '2023-06-07 09:27:26'),
(29, '16861300461_Photo.jpg', 23, '2023-06-07 09:27:26', '2023-06-07 09:27:26'),
(30, '16861300462_Photo.jpg', 23, '2023-06-07 09:27:26', '2023-06-07 09:27:26'),
(31, '16861310860_Photo.jpg', 24, '2023-06-07 09:44:46', '2023-06-07 09:44:46'),
(32, '16861310861_Photo.jpg', 24, '2023-06-07 09:44:46', '2023-06-07 09:44:46'),
(33, '16861316860_Photo.jpg', 25, '2023-06-07 09:54:46', '2023-06-07 09:54:46'),
(34, '16861316861_Photo.jpg', 25, '2023-06-07 09:54:46', '2023-06-07 09:54:46'),
(35, '16861322850_Photo.jpg', 26, '2023-06-07 10:04:45', '2023-06-07 10:04:45'),
(36, '16861322851_Photo.jpg', 26, '2023-06-07 10:04:45', '2023-06-07 10:04:45'),
(37, '16861333440_Photo.jpg', 28, '2023-06-07 10:22:24', '2023-06-07 10:22:24'),
(38, '16861333441_Photo.jpg', 28, '2023-06-07 10:22:24', '2023-06-07 10:22:24'),
(39, '16861333510_Photo.jpg', 29, '2023-06-07 10:22:31', '2023-06-07 10:22:31'),
(40, '16861333511_Photo.jpg', 29, '2023-06-07 10:22:31', '2023-06-07 10:22:31'),
(41, '16861333760_Photo.jpg', 30, '2023-06-07 10:22:56', '2023-06-07 10:22:56'),
(42, '16861333761_Photo.jpg', 30, '2023-06-07 10:22:56', '2023-06-07 10:22:56'),
(43, '16861337290_Photo.jpg', 31, '2023-06-07 10:28:49', '2023-06-07 10:28:49'),
(44, '16861337400_Photo.jpg', 32, '2023-06-07 10:29:00', '2023-06-07 10:29:00'),
(45, '16861337401_Photo.jpg', 32, '2023-06-07 10:29:00', '2023-06-07 10:29:00'),
(46, '16861337412_Photo.jpg', 32, '2023-06-07 10:29:01', '2023-06-07 10:29:01'),
(47, '16861337790_Photo.jpg', 33, '2023-06-07 10:29:39', '2023-06-07 10:29:39'),
(48, '16861337791_Photo.jpg', 33, '2023-06-07 10:29:39', '2023-06-07 10:29:39'),
(49, '16861337792_Photo.jpg', 33, '2023-06-07 10:29:39', '2023-06-07 10:29:39'),
(50, '16861347840_Photo.jpg', 34, '2023-06-07 10:46:24', '2023-06-07 10:46:24'),
(51, '16861347841_Photo.jpg', 34, '2023-06-07 10:46:24', '2023-06-07 10:46:24'),
(52, '16861350530_Photo.jpg', 35, '2023-06-07 10:50:53', '2023-06-07 10:50:53'),
(53, '16861350531_Photo.jpg', 35, '2023-06-07 10:50:54', '2023-06-07 10:50:54'),
(54, '16861351320_Photo.jpg', 36, '2023-06-07 10:52:12', '2023-06-07 10:52:12'),
(55, '16861352620_Photo.jpg', 37, '2023-06-07 10:54:22', '2023-06-07 10:54:22'),
(56, '16861352621_Photo.jpg', 37, '2023-06-07 10:54:22', '2023-06-07 10:54:22'),
(57, '16861356710_Photo.jpg', 38, '2023-06-07 11:01:11', '2023-06-07 11:01:11'),
(58, '16861356721_Photo.jpg', 38, '2023-06-07 11:01:12', '2023-06-07 11:01:12'),
(59, '16861365500_Photo.jpg', 39, '2023-06-07 11:15:50', '2023-06-07 11:15:50'),
(60, '16861365501_Photo.jpg', 39, '2023-06-07 11:15:50', '2023-06-07 11:15:50'),
(61, '16861368940_Photo.jpg', 40, '2023-06-07 11:21:34', '2023-06-07 11:21:34'),
(62, '16861368941_Photo.jpg', 40, '2023-06-07 11:21:34', '2023-06-07 11:21:34'),
(63, '16861369050_Photo.jpg', 41, '2023-06-07 11:21:45', '2023-06-07 11:21:45'),
(64, '16861371620_Photo.jpg', 42, '2023-06-07 11:26:02', '2023-06-07 11:26:02'),
(65, '16861371621_Photo.jpg', 42, '2023-06-07 11:26:02', '2023-06-07 11:26:02'),
(66, '16861401380_Photo.jpg', 45, '2023-06-07 12:15:38', '2023-06-07 12:15:38'),
(67, '16861401381_Photo.jpg', 45, '2023-06-07 12:15:38', '2023-06-07 12:15:38');

-- --------------------------------------------------------

--
-- Structure de la table `obligations_assures`
--

CREATE TABLE `obligations_assures` (
  `id` int(11) NOT NULL,
  `libelle` varchar(225) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `sinistres`
--

CREATE TABLE `sinistres` (
  `id` int(11) NOT NULL,
  `numero_police` varchar(255) DEFAULT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `contact1` varchar(20) DEFAULT NULL,
  `contact2` varchar(20) DEFAULT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `date_sinistre` datetime DEFAULT NULL,
  `details` text DEFAULT NULL,
  `assurance_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `domaine_intervention_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sinistres`
--

INSERT INTO `sinistres` (`id`, `numero_police`, `name`, `email`, `contact1`, `contact2`, `lieu`, `date_sinistre`, `details`, `assurance_id`, `user_id`, `domaine_intervention_id`, `created_at`, `updated_at`) VALUES
(4, 'dfhhdfdf', 'Etien', '', '5646546', '', 'gffrgff', '2023-06-07 14:25:00', 'fhrbfdfbfb', 1, 1, 3, '2023-06-06 15:59:28', '2023-06-06 15:59:28'),
(5, 'dfhhdfdf', 'Etien', '', '5646546', '', 'gffrgff', '2023-06-07 14:25:00', 'fhrbfdfbfb', 1, 1, 3, '2023-06-06 16:11:11', '2023-06-06 16:11:11'),
(6, 'cvcbb', 'Etien', '', '5646546', '', 'gffrgff', '2023-06-06 14:20:00', 'kjjjkjk', 2, 1, 2, '2023-06-06 16:15:20', '2023-06-06 16:15:20'),
(7, 'dfhhdfdf', 'dqsvsfdfqdsq', '', '5646546', '', 'gffrgff', '2023-06-06 14:20:00', 'felkl5d fdfd', 1, 1, 1, '2023-06-06 16:21:54', '2023-06-06 16:21:54'),
(8, 'dfhhdfdf', 'Etien', '', '5646546', '', 'gffrgff', '2023-06-06 15:00:00', 'afevdsddvssd', 1, 1, 1, '2023-06-06 16:22:58', '2023-06-06 16:22:58'),
(9, 'cvcbb', 'regregrer', '', '5646546', '', 'gffrgff', '2023-06-06 14:50:00', 'dsvvdsddxvsdxds', 3, 1, 1, '2023-06-06 16:24:14', '2023-06-06 16:24:14'),
(10, 'dfhhdfdf', 'Etien', '', '5646546', '', 'gffrgff', '2023-06-06 10:14:00', 'deefgzezgg', 2, 1, 2, '2023-06-06 16:40:30', '2023-06-06 16:40:30'),
(11, 'dfhhdfdf', 'feffsf', '', '5646546', '', 'gffrgff', '2023-06-07 14:20:00', 'fdhbfdfbdbv', 1, 1, 1, '2023-06-06 16:43:46', '2023-06-06 16:43:46'),
(12, 'dfhhdfdf', 'dddd', '', '5646546', '', 'gffrgff', '2023-06-06 12:00:00', 'aefvdvd', 1, 1, 3, '2023-06-06 17:00:28', '2023-06-06 17:00:28'),
(13, 'cvcbb', 'ddddd', '', '5646546', '', 'gffrgff', '2023-06-06 20:15:00', 'zregrzvdlkk', 3, 1, 1, '2023-06-06 20:01:18', '2023-06-06 20:01:18'),
(14, 'cvcbb', 'ddddd', '', '5646546', '', 'gffrgff', '2023-06-06 20:15:00', 'zregrzvdlkk', 2, 1, 1, '2023-06-07 09:05:15', '2023-06-07 09:05:15'),
(15, 'dfhhdfdf', 'Etien', '', '5646546', '', 'gffrgff', '2023-06-07 12:00:00', 'kjblm25k;', 1, 1, 2, '2023-06-07 09:06:45', '2023-06-07 09:06:45'),
(16, 'cvcbb', 'eryhtrhgh', '', '5646546', '', 'gffrgff', '2023-06-08 14:00:00', 'kiuuilill,ml', 2, 1, 1, '2023-06-07 09:11:35', '2023-06-07 09:11:35'),
(40, 'dfhhdfdf', 'Etien', '', '5646546', '', 'gffrgff', '2023-06-07 12:20:00', 'gfezvfmlkmlk365de', 3, 1, 2, '2023-06-07 11:21:34', '2023-06-07 11:21:34'),
(41, 'dfhhdfdf', 'Etien', '', '5646546', '', 'gffrgff', '2023-06-07 12:20:00', 'gfezvfmlkmlk365de', 3, 1, 2, '2023-06-07 11:21:45', '2023-06-07 11:21:45'),
(42, 'dfhhdfdf', 'ffff', '', '5646546', '', 'gffrgff', '2023-06-07 14:20:00', 'sdfgsvsgdf', 1, 1, 1, '2023-06-07 11:26:02', '2023-06-07 11:26:02'),
(43, 'dfhhdfdf', 'ffff', '', '5646546', '', 'gffrgff', '2023-06-07 14:20:00', 'sdfgsvsgdf', 1, 1, 1, '2023-06-07 12:14:44', '2023-06-07 12:14:44'),
(44, 'dfhhdfdf', 'ffff', '', '5646546', '', 'gffrgff', '2023-06-07 14:20:00', 'sdfgsvsgdf', 1, 1, 1, '2023-06-07 12:15:04', '2023-06-07 12:15:04'),
(45, 'dfhhdfdf', 'ffff', '', '5646546', '', 'gffrgff', '2023-06-07 14:20:00', 'sdfgsvsgdf', 1, 1, 1, '2023-06-07 12:15:38', '2023-06-07 12:15:38');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact1` varchar(20) DEFAULT NULL,
  `contact2` varchar(20) DEFAULT NULL,
  `commune_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `assurances`
--
ALTER TABLE `assurances`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `domaine_interventions`
--
ALTER TABLE `domaine_interventions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `espaces`
--
ALTER TABLE `espaces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formules`
--
ALTER TABLE `formules`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `garanties`
--
ALTER TABLE `garanties`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `obligations_assures`
--
ALTER TABLE `obligations_assures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sinistres`
--
ALTER TABLE `sinistres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `assurances`
--
ALTER TABLE `assurances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `domaine_interventions`
--
ALTER TABLE `domaine_interventions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `espaces`
--
ALTER TABLE `espaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formules`
--
ALTER TABLE `formules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `garanties`
--
ALTER TABLE `garanties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT pour la table `obligations_assures`
--
ALTER TABLE `obligations_assures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sinistres`
--
ALTER TABLE `sinistres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
