-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 05 fév. 2021 à 08:42
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rodar`
--

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remise` int(11) NOT NULL,
  `valid` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `code`, `category`, `remise`, `valid`, `created_at`, `updated_at`) VALUES
(1, 'HELLO', 'A1', 15, 1, '2021-02-03 08:51:50', '2021-02-03 08:51:50');

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

DROP TABLE IF EXISTS `trajet`;
CREATE TABLE IF NOT EXISTS `trajet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username_id` int(11) NOT NULL,
  `debut_trajet` datetime NOT NULL,
  `fin_trajet` datetime NOT NULL,
  `temps_trajet` int(11) NOT NULL,
  `cout` double NOT NULL,
  `evaluation` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2B5BA98CED766068` (`username_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `trajet`
--

INSERT INTO `trajet` (`id`, `username_id`, `debut_trajet`, `fin_trajet`, `temps_trajet`, `cout`, `evaluation`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-02-04 09:36:38', '2021-02-04 09:36:38', 0, 0, 0, '2021-02-04 09:36:38', '2021-02-04 09:36:38'),
(2, 2, '2021-02-04 09:40:54', '2021-02-04 09:50:54', 0, 0, 0, '2021-02-04 09:37:54', '2021-02-04 09:37:54'),
(3, 1, '2021-02-04 10:00:54', '2021-02-04 10:50:54', 0, 0, 0, '2021-02-04 09:37:54', '2021-02-04 09:37:54'),
(4, 2, '2021-02-04 10:30:54', '2021-02-04 10:50:54', 0, 0, 0, '2021-02-04 09:37:54', '2021-02-04 09:37:54'),
(5, 2, '2021-02-04 10:30:54', '2021-02-04 10:45:54', 0, 0, 0, '2021-02-04 09:37:54', '2021-02-04 09:37:54');

-- --------------------------------------------------------

--
-- Structure de la table `trotinette`
--

DROP TABLE IF EXISTS `trotinette`;
CREATE TABLE IF NOT EXISTS `trotinette` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `trotinette`
--

INSERT INTO `trotinette` (`id`, `matricule`, `prix`, `created_at`, `updated_at`) VALUES
(1, 'A-1', 1, '2021-02-02 16:49:18', '2021-02-02 16:49:18'),
(2, 'A-3', 1, '2021-02-03 08:40:30', '2021-02-03 08:40:30');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `lastname`, `firstname`, `birthday`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'david@mayer.com', '[\"admin\"]', 'latortuedu94', 'Mayer', 'David', '2021-02-02', '0767303612', '2021-02-02 16:38:36', '2021-02-02 16:38:36'),
(2, 'test@test.com', '[\"admin\"]', 'latortuedu94', 'test', 'test', '2021-02-03', '0102030405', '2021-02-03 08:40:09', '2021-02-03 08:40:09');

-- --------------------------------------------------------

--
-- Structure de la table `user_promotion`
--

DROP TABLE IF EXISTS `user_promotion`;
CREATE TABLE IF NOT EXISTS `user_promotion` (
  `user_id` int(11) NOT NULL,
  `promotion_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`promotion_id`),
  KEY `IDX_C1FDF035A76ED395` (`user_id`),
  KEY `IDX_C1FDF035139DF194` (`promotion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_promotion`
--

INSERT INTO `user_promotion` (`user_id`, `promotion_id`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `user_trotinette`
--

DROP TABLE IF EXISTS `user_trotinette`;
CREATE TABLE IF NOT EXISTS `user_trotinette` (
  `user_id` int(11) NOT NULL,
  `trotinette_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`trotinette_id`),
  KEY `IDX_54845F22A76ED395` (`user_id`),
  KEY `IDX_54845F2264F0FC18` (`trotinette_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_trotinette`
--

INSERT INTO `user_trotinette` (`user_id`, `trotinette_id`) VALUES
(1, 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `FK_2B5BA98CED766068` FOREIGN KEY (`username_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `user_promotion`
--
ALTER TABLE `user_promotion`
  ADD CONSTRAINT `FK_C1FDF035139DF194` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C1FDF035A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_trotinette`
--
ALTER TABLE `user_trotinette`
  ADD CONSTRAINT `FK_54845F2264F0FC18` FOREIGN KEY (`trotinette_id`) REFERENCES `trotinette` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_54845F22A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
