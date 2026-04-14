-- Adminer 5.4.1 MySQL 8.0.45-0ubuntu0.24.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `avis`;
DROP TABLE IF EXISTS `prescription`;
DROP TABLE IF EXISTS `sejour`;
DROP TABLE IF EXISTS `patient`;
DROP TABLE IF EXISTS `medecin`;
DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS `doctrine_migration_versions`;
DROP TABLE IF EXISTS `messenger_messages`;

CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `medecin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialite` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `patient` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse_postale` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1ADAD7EBA76ED395` (`user_id`),
  CONSTRAINT `FK_1ADAD7EBA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sejour` (
  `id` int NOT NULL AUTO_INCREMENT,
  `patient_id` int NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date DEFAULT NULL,
  `motif_sejour` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialite` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medecin_souhaite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_96F520286B899279` (`patient_id`),
  CONSTRAINT `FK_96F520286B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `avis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `medecin_id` int NOT NULL,
  `patient_id` int NOT NULL,
  `date` date NOT NULL COMMENT '(DC2Type:date_immutable)',
  `libelle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8F91ABF04F31A84` (`medecin_id`),
  KEY `IDX_8F91ABF06B899279` (`patient_id`),
  CONSTRAINT `FK_8F91ABF04F31A84` FOREIGN KEY (`medecin_id`) REFERENCES `medecin` (`id`),
  CONSTRAINT `FK_8F91ABF06B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `prescription` (
  `id` int NOT NULL AUTO_INCREMENT,
  `medecin_id` int NOT NULL,
  `patient_id` int NOT NULL,
  `nom_medicament` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posologie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_debut` date NOT NULL COMMENT '(DC2Type:date_immutable)',
  `date_de_fin` date NOT NULL COMMENT '(DC2Type:date_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_1FBFB8D94F31A84` (`medecin_id`),
  KEY `IDX_1FBFB8D96B899279` (`patient_id`),
  CONSTRAINT `FK_1FBFB8D94F31A84` FOREIGN KEY (`medecin_id`) REFERENCES `medecin` (`id`),
  CONSTRAINT `FK_1FBFB8D96B899279` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

CREATE TABLE `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'alice.durand@example.com', '[\"ROLE_USER\"]', '$2y$13$Dqw2TEN/D4R2BOettMKw0.0ZAQVQaoRHhvpLojjr7zrZzh1Xvbege'),
(2, 'ahmed.alfarsi@example.com', '[\"ROLE_USER\"]', '$2y$13$kmNTJMAxKZ/wqGfntBKJh.NuV8eDXEvDYFSmdIGotIKHjJ7PsTrtO'),
(3, 'kofi.adjoa@example.com', '[\"ROLE_USER\"]', '$2y$13$zoGYUcOa4eJ/a/ODanj4.eWuMag6xdEJFUjQVP49GYgiaNVdUF2dq'),
(4, 'emilie.martin@example.com', '[\"ROLE_USER\"]', '$2y$13$dhxyAYVjrfp7.dLURsBxouvX3V9FKNaG7bdr18YoCEZeHkPp80JkW'),
(5, 'francois.girard@example.com', '[\"ROLE_USER\"]', '$2y$13$NX35N5IkZTWMlD/7okFWxOI4gGhCLtnGuOAfOQxL12njgw6mQ60gm'),
(6, 'charlotte.martin@example.com', '[\"ROLE_USER\"]', '$2y$13$1DzJiJMgjKiCilul6427L.A5FgO7eyry3E7GOrNdKgiLV7yYVEzXe'),
(7, 'gerard.lerest@orange.fr', '[\"ROLE_ADMIN\"]', '$2y$13$Zo39L.w9lLvEXfefL2nv9upJTS0TSwjCFSXFgRs/h1CVjhdpUrd3.'),
(8, 'louis.lerest@orange.fr', '[\"ROLE_USER\"]', '$2y$13$mjTHvWzi2IfxPwCgH8iZ4.p7yc2e.YsSR/IOfaoq2dLiWK0tBCHf2'),
(9, 'daniel.messager@orange.fr', '[\"ROLE_USER\"]', '$2y$13$02f2O6DyXkyWGJ.V3Xis8.9D6u0eobSWwNkiyqfcV5pdYUwaSY6Be'),
(10, 'albert.einstein@orange.fr', '[\"ROLE_USER\"]', '$2y$13$8u7bKpZCAqJzt4ezGegHq.jHX42p1Unoa1JU2XB1n5PocqZO9R.am'),
(11, 'samuel.celia@orange.fr', '[\"ROLE_USER\"]', '$2y$13$zuarzj69rBgqgW7WQaDy9OX.NVRge4/h01Vbw6SdUpRn.kCRWRPwK'),
(12, 'sameul.celia@orange.fr', '[\"ROLE_USER\"]', '$2y$13$aDa/n2Ne7XeQqXpaksR/euIAxh4.RraSqCFIWiB8cXXOKYqSMA9Wm'),
(13, 'nicolas.paul@free.fr', '[\"ROLE_USER\"]', '$2y$13$zFEChdrqyWYcGdnaquheVulG4V/k8h6IG7gCNYTlOX.UtLV3lXJma');

SET foreign_key_checks = 1;