-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 01 sep. 2022 à 13:50
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `login`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenoms` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenoms`, `email`, `motdepasse`, `created_at`, `updated_at`) VALUES
(4, 'RAKOTONDRABE', 'Andriniaina', 'andriniainarakotobe@gmail.com', '$2y$10$2xEteYaM1XSJAKzg6T4mNeMExZIXpf0haOU77yOh/Rtd.SjY.1yXa', '2022-08-31 17:31:59', '2022-08-31 17:31:59'),
(5, 'RAFIRINGA', 'Andriamananampy', 'rafiringa.a@gmail.com', '$2y$10$riwdg9WsK0oaRc0VSn.kZ.5ivdIOZI3Df/9WSTupMwNQLwQrLPW26', '2022-08-31 23:18:24', '2022-08-31 23:18:24'),
(6, 'RABESOA', 'Fanantenana', 'rabesoafanantenana@gmail.com', '$2y$10$MURboCAA9qKR4QF1r.4FjOJYv10lRxk3cb0Q4ivkM83cVRH2Bdeya', '2022-09-01 11:45:30', '2022-09-01 11:45:30'),
(7, 'RABEKOTO', 'Jean Michel', 'rabekotomichel@gmail.com', '$2y$10$jZUtpG1kmhZfWZSXpcikCuUbFGxvMSu0NkKxYa9snyeyVVDNb1Tky', '2022-09-01 13:46:01', '2022-09-01 13:46:01');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
