-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 24 mai 2026 à 18:16
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `abonnes`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnes`
--

CREATE TABLE `abonnes` (
  `Prenom` text DEFAULT NULL,
  `Nom` text DEFAULT NULL,
  `Annee_naissance` date DEFAULT NULL,
  `Adresse` varchar(50) DEFAULT NULL,
  `Numero_telephone` varchar(13) DEFAULT NULL,
  `Adresse_mail` varchar(50) DEFAULT NULL,
  `Numero_telephone_fixe` varchar(13) DEFAULT NULL,
  `Profession` text DEFAULT NULL,
  `identifiant` varchar(10) NOT NULL,
  `Mot_de_passe` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `abonnes`
--

INSERT INTO `abonnes` (`Prenom`, `Nom`, `Annee_naissance`, `Adresse`, `Numero_telephone`, `Adresse_mail`, `Numero_telephone_fixe`, `Profession`, `identifiant`, `Mot_de_passe`) VALUES
('Emma', 'Garcia', '1984-01-09', '888 Oak Avenue', '0678901234', 'emma.g@email.com', '192837465', 'Avocate', 'emmag', 'motdepasse11'),
('Janeeeeeee', 'Smith', '1985-08-20', '456 Elm Street', '0214748366', 'jane@example.com', '647483647', 'Designer', 'janesmith', 'secret456'),
('John', 'Doe', '1990-05-15', '123 Main Street', '0234567890', 'john@example.com', '02147483647', 'Développeur', 'johndoe', 'motdepasse123'),
('Liam', 'King', '1996-11-05', '1111 Pine Drive', '0612345678', 'liam.k@email.com', '0178563412', 'Ingénieur civil', 'liamk', 'motdepasse14'),
('Mia', 'Lopez', '1989-03-28', '1010 Cedar Road', '0609876543', 'mia.l@email.com', '0147258369', 'Pharmacienne', 'mial', 'motdepasse13'),
('Michael', 'Wilson', '1982-06-03', '555 Maple Lane', '0647201839', 'michael.w@email.com', '0123456789', 'Médecin', 'michaelw', 'motdepasse8'),
('Olivia', 'Martinez', '1991-12-17', '666 Cedar Drive', '0609876543', 'olivia.m@email.com', '0147258369', 'Infirmière', 'oliviam', 'motdepasse9'),
('Robert', 'Brown', '1980-11-20', '1010 Rue des Étoiles', '0647201839', 'robert.brown@email.com', '0123456789', 'Professeur', 'rbrown', 'motdepasse4'),
('Sophie', 'Anderson', '1993-09-30', '444 Elm Road', '0678901234', 'sophie.a@email.com', '0192837465', 'Enseignante', 'sophiea', 'motdepasse7'),
('William', 'Harris', '1994-10-12', '999 Elm Lane', '0647201839', 'william.h@email.com', '0123456789', 'Ingénieur en électricité', 'williamh', 'motdepasse12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnes`
--
ALTER TABLE `abonnes`
  ADD PRIMARY KEY (`identifiant`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
