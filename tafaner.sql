CREATE DATABASE `tafaner` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `tafaner`;

CREATE TABLE `afiliats` (
  `id` int(11) NOT NULL,
  `num` int(11) DEFAULT NULL,
  `sexe` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_naixement` date DEFAULT NULL,
  `codi_postal` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poblacio` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comarca` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provincia` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pais` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_afiliacio` date DEFAULT NULL,
  `centre_treball` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `federacio` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sectorial` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activitat` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situacio_personal` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relacio` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grup` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `situacio` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delegat` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `empresa` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_professional` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `territorial` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocupacio` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipus_treballador` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cos_docent` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccio_sindical` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
