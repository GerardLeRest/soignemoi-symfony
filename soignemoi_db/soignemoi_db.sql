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
DROP TABLE IF EXISTS `messenger_messages`;
DROP TABLE IF EXISTS `doctrine_migration_versions`;

DROP PROCEDURE IF EXISTS `changerDates`;

CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(1, 'alice.durand@example.com', '[\"ROLE_USER\"]', '$2y$13$1mZ318NsbNP6/IE.4kLgquchL0QSbOYwHGzpSXazLoL.GDJymP6.2'),
(2, 'ahmed.alfarsi@example.com', '[\"ROLE_USER\"]', '$2y$13$kmNTJMAxKZ/wqGfntBKJh.NuV8eDXEvDYFSmdIGotIKHjJ7PsTrtO'),
(3, 'kofi.adjoa@example.com', '[\"ROLE_USER\"]', '$2y$13$zoGYUcOa4eJ/a/ODanj4.eWuMag6xdEJFUjQVP49GYgiaNVdUF2dq'),
(4, 'emilie.martin@example.com', '[\"ROLE_USER\"]', '$2y$13$dhxyAYVjrfp7.dLURsBxouvX3V9FKNaG7bdr18YoCEZeHkPp80JkW'),
(5, 'francois.girard@example.com', '[\"ROLE_USER\"]', '$2y$13$NX35N5IkZTWMlD/7okFWxOI4gGhCLtnGuOAfOQxL12njgw6mQ60gm'),
(6, 'charlotte.martin@example.com', '[\"ROLE_USER\"]', '$2y$13$1DzJiJMgjKiCilul6427L.A5FgO7eyry3E7GOrNdKgiLV7yYVEzXe'),
(7, 'gerard.lerest@orange.fr', '[\"ROLE_ADMIN\"]', '$2y$13$Zo39L.w9lLvEXfefL2nv9upJTS0TSwjCFSXFgRs/h1CVjhdpUrd3.'),
(8, 'louis.lerest@orange.fr', '[\"ROLE_USER\"]', '$2y$13$mjTHvWzi2IfxPwCgH8iZ4.p7yc2e.YsSR/IOfaoq2dLiWK0tBCHf2'),
(9, 'daniel.messager@orange.fr', '[\"ROLE_USER\"]', '$2y$13$02f2O6DyXkyWGJ.V3Xis8.9D6u0eobSWwNkiyqfcV5pdYUwaSY6Be'),
(10, 'albert.einstein@orange.fr', '[\"ROLE_USER\"]', '$2y$13$8u7bKpZCAqJzt4ezGegHq.jHX42p1Unoa1JU2XB1n5PocqZO9R.am'),
(11, 'samuel.celia@orange.fr', '[\"ROLE_USER\"]', '$2y$13$5efcbz0WHK23nfjHf9B78OrksNrI8eIwwRW/bFvHTr9PjHThKrfmS'),
(12, 'sameul.celia@orange.fr', '[\"ROLE_USER\"]', '$2y$13$D8S12ywrTuaFlVurFuAfI.0aswhCEvSIr4AXN/P1rHMYcmhrr/2aa'),
(13, 'nicolas.paul@free.fr', '[\"ROLE_USER\"]', '$2y$13$2hTENj1DiopkUXpn7/0FXO5LIqSrZDPFR8kkGYiIJJX4FDJ3KYuEi');

CREATE TABLE `medecin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialite` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `medecin` (`id`, `prenom`, `nom`, `matricule`, `specialite`) VALUES
(1, 'Jean', 'Dupont', 'M011', 'Pneumologue'),
(2, 'Marie', 'Curie', 'M092', 'Cardiologue'),
(3, 'Ahmed', 'Alami', 'M089', 'Chirurgien cardiaque'),
(4, 'Sarah', 'Bernard', 'M002', 'Neurologue'),
(5, 'Lei', 'Wang', 'M017', 'Chirurgien orthopédique'),
(6, 'Amina', 'Diallo', 'M026', 'Pneumologue'),
(7, 'Claire', 'Fontaine', 'M031', 'Gastro-entérologue'),
(8, 'Jeandfgwdfgbfdxfxw', 'Davaud', 'M5664', 'Spéci'),
(9, 'Paul', 'Cubois', 'K545J45', 'specialite-douleur'),
(10, 'qdzqs', 'qsdqs', 'M3235', 'qsqqDsq'),
(11, 'André', 'Aureuil', 'M14578', 'Pnomologie');

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

INSERT INTO `patient` (`id`, `user_id`, `prenom`, `nom`, `adresse_postale`) VALUES
(1, '1', 'Alice', 'Durand', '10 Rue de Vitre, Chantepie'),
(2, '2', 'Ahmed', 'Al-Farsi', '25 Avenue de Bretagne, Cesson-Sévigné'),
(3, '3', 'Kofi', 'Adjoa', '8 Rue du Bocage, Vezin-le-Coquet'),
(4, '4', 'Émilie', 'Martin', '32 Rue de Rennes, Saint-Grégoire'),
(5, '5', 'François', 'Girard', '47 Rue de Lorient, Montgermont'),
(6, '6', 'Charlotte', 'Martin', '15 Chemin des Ducs, Betton'),
(7, '7', 'Gérard', 'LE REST', '12 ALLEE DU BOIS JACOB'),
(8, '8', 'Louis Le Rest', 'LE REST', 'quinquis 29670 Taulé'),
(9, '9', 'Daniel', 'Messager', '10 rue des marais'),
(10, '10', 'Albert', 'Einstein', '12 rue du bois, Paris'),
(11, '11', 'samuel', 'celia', '1 rue des forges'),
(12, '12', 'Samuel', 'Celia', '12 allée du bois Jacob 35380 PAIMPONT'),
(13, '13', 'Nicolas', 'Paul', 'suiwoist ÙMDFMÙ qmf');

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

INSERT INTO `avis` (`id`, `medecin_id`, `patient_id`, `date`, `libelle`, `description`) VALUES
(1, 3, 1, '2024-03-25', 'Suivi opération cœur', 'Le patient montre des signes de récupération satisfaisants après l\'opération. Les fonctions cardiaques sont stables et la cicatrisation se déroule comme prévu.'),
(2, 2, 2, '2024-06-05', 'Contrôle maladie cardiaque', 'Les résultats des derniers examens montrent une amélioration notable. Le traitement en cours semble efficace, et nous recommandons de le poursuivre selon le plan établi.'),
(3, 6, 3, '2024-07-10', 'Pneumonie sévère', 'Le patient répond bien au traitement antibiotique, mais doit rester hospitalisé pour une surveillance continue. Les séances de physiothérapie respiratoire sont également bénéfiques.'),
(4, 4, 5, '2024-08-20', 'Consultation arthrose', 'Après évaluation, une intervention chirurgicale semble être la meilleure option pour améliorer la mobilité et réduire la douleur. Une préparation pré-opératoire sera nécessaire.'),
(5, 6, 5, '2024-09-15', 'Suivi bronchite chronique', 'Malgré le traitement, des symptômes persistent. Il est conseillé d\'ajuster les médicaments et d\'envisager des séances de réhabilitation respiratoire.'),
(6, 5, 6, '2024-10-20', 'Rééducation après AVC', 'Le programme de rééducation est ajusté pour se concentrer davantage sur la récupération de la motricité fine. Des progrès sont observés, mais des efforts supplémentaires sont nécessaires.'),
(7, 5, 1, '2023-03-02', 'Réévaluation post-opératoire', 'La patiente montre des signes de récupération satisfaisante après son opération du genou. La mobilité s\'améliore progressivement, et la douleur est bien gérée avec le traitement prescrit. Des séances supplémentaires de physiothérapie sont recommandées pour accélérer la réhabilitation.'),
(8, 7, 2, '2024-06-25', 'Bilan de fin de traitement', 'Le patient a terminé son cycle de traitement pour la maladie infectieuse. Les tests confirment l\'éradication de l\'infection. Aucun signe de résistance aux médicaments n\'a été observé. Un suivi dans un mois est prévu pour s\'assurer de la stabilité de l\'état de santé.');

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

INSERT INTO `prescription` (`id`, `medecin_id`, `patient_id`, `nom_medicament`, `posologie`, `date_de_debut`, `date_de_fin`) VALUES
(1, 6, 5, 'Amoxicilline', '500 mg toutes les 8 heures pendant 7 jours', '2024-09-05', '2024-09-12'),
(2, 6, 5, 'Ibuprofène', '400 mg toutes les 8 heures au besoin pour la douleur et la fièvre', '2024-09-05', '2024-09-12'),
(3, 6, 5, 'Salbutamol inhalateur', '2 inhalations toutes les 4 heures au besoin pour le soulagement des symptômes', '2024-09-05', '2024-09-19'),
(4, 6, 5, 'Prednisolone', '30 mg une fois par jour pendant 5 jours', '2024-09-05', '2024-09-10'),
(5, 6, 5, 'Acétylcystéine', '600 mg une fois par jour pour fluidifier les mucosités', '2024-09-05', '2024-09-19'),
(6, 5, 4, 'Paracétamol ', '500 mg, à prendre toutes les 6 heures selon les besoins', '2024-08-12', '2024-09-02'),
(7, 5, 4, ' Injections de corticostéroïdes:', 'Triamcinolone', '2024-08-12', '2024-09-02'),
(8, 5, 4, 'Ibuprofène', '400 mg, toutes les 8 heures pour réduire l\'inflammation', '2024-08-12', '2024-09-02'),
(9, 5, 4, 'Injections d\'acide hyaluronique', 'dose conventionnelle', '2024-08-12', '2024-08-21');

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

INSERT INTO `sejour` (`id`, `patient_id`, `date_debut`, `date_fin`, `motif_sejour`, `specialite`, `medecin_souhaite`) VALUES
(1, 1, '2026-01-04', '2024-05-01', 'Opération du genou suite à un accident sportif. Reconstruction des ligaments avec réhabilitation post-opératoire intensive.', 'Chirurgien orthopédique', 'Lei Wang'),
(2, 1, '2024-03-15', '2024-04-05', 'Opération du cœur nécessitant une intervention chirurgicale complexe par un spécialiste en chirurgie cardiaque', 'Chirurgien cardiaque', NULL),
(3, 2, '2026-01-04', '2024-07-09', 'Suivi de maladie cardiaque impliquant un examen complet et la gestion des risques cardiaques', 'Cardiologue', 'Marie Curie'),
(4, 2, '2024-06-10', '2026-01-04', 'Traitement spécialisé d\'une infection bactérienne résistante aux antibiotiques. Administration d\'antibiotiques à spectre étendu et surveillance médicale constante.', 'Médecine générale', 'Jean Dupont'),
(5, 3, '2024-07-09', '2026-01-04', 'Traitement d\'une pneumonie sévère nécessitant une hospitalisation pour surveillance et administration de traitements intraveineux', 'Pneumologue', 'Jean Dupont'),
(6, 4, '2024-08-12', NULL, 'Gestion et réhabilitation d\'arthrose avancée nécessitant une approche multidisciplinaire, incluant la chirurgie orthopédique', 'Chirurgien orthopédique', 'Lei Wang'),
(7, 5, '2026-01-04', '2024-05-01', 'Prise en charge d\'une bronchite chronique exacerbée, nécessitant un suivi spécialisé et des soins pneumologiques avancés', 'Pneumologue', 'Amina Diallo'),
(8, 6, '2024-07-09', NULL, 'Programme intensif de rééducation après AVC, visant à restaurer autant que possible les fonctions motrices et cognitives', 'Neurologue', NULL),
(9, 7, '2025-03-22', NULL, 'Mal de dos', 'Rhumatologue', NULL),
(10, 7, '2025-04-13', NULL, 'mal à la voute plantaire.', 'spécialiste1', 'Dc Pouteau'),
(11, 7, '2025-04-14', NULL, 'test', 'spécialité1', 'Dc Davaud'),
(12, 7, '2025-04-14', '2025-04-25', 'test12', 'specialite2-specialite1', 'Dc Moulin'),
(13, 7, '2025-06-07', '2025-06-08', 'interrogation', 'docteur', 'Lee'),
(14, 7, '2025-06-07', '2025-06-21', 'sfsefrzeq', 'zerzerzer', 'zrzerzerez'),
(15, 11, '2025-06-08', '2025-06-24', 'mal aux pieds', 'fpzepr', 'fqfmqfq'),
(16, 8, '2026-04-15', '2026-04-29', 'bras cassé.', 'Traumatologie', 'Dc Wang');

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

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20250321190344', '2025-03-21 19:03:56', 1101);

DELIMITER ;;

CREATE PROCEDURE `changerDates` ()
BEGIN
    UPDATE sejour
    SET date_debut = CURRENT_DATE
    WHERE id = 1;

    UPDATE sejour
    SET date_debut = CURRENT_DATE
    WHERE id = 3;

    UPDATE sejour
    SET date_debut = CURRENT_DATE
    WHERE id = 7;
    
    UPDATE sejour
    SET date_fin = CURRENT_DATE
    WHERE id = 4;
    
    UPDATE sejour
    SET date_fin = CURRENT_DATE
    WHERE id = 5;
END;;

DELIMITER ;

SET foreign_key_checks = 1;

-- 2026-04-15 11:46:51 UTC