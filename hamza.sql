-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 30 mai 2023 à 17:03
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hamza`
--

-- --------------------------------------------------------

--
-- Structure de la table `espace_demandeur`
--

CREATE TABLE `espace_demandeur` (
  `id_d` int(11) NOT NULL,
  `matricule` int(11) NOT NULL,
  `service` varchar(70) NOT NULL,
  `desk` int(11) NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(255) CHARACTER SET utf8 NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `espace_demandeur`
--

INSERT INTO `espace_demandeur` (`id_d`, `matricule`, `service`, `desk`, `date`, `heure`, `id_user`) VALUES
(3, 222222, 'equip', 3333333, '2023-04-29', '02:02 AM', 7),
(5, 456789, 'BMW', 3, '2015-08-02', '07:18 PM', 11),
(10, 555555, 'OEM', 4, '1990-11-02', '03:03 AM', 15),
(11, 555555, 'BMW', 2, '2014-10-29', '08:50 AM', 15);

-- --------------------------------------------------------

--
-- Structure de la table `espace_technicien`
--

CREATE TABLE `espace_technicien` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `matricule` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `piece1` varchar(255) NOT NULL,
  `qtt1` int(11) NOT NULL,
  `piece2` varchar(255) NOT NULL,
  `qtt2` int(11) NOT NULL,
  `piece3` varchar(255) NOT NULL,
  `qtt3` int(11) NOT NULL,
  `piece4` varchar(255) NOT NULL,
  `qtt4` int(11) NOT NULL,
  `piece5` varchar(255) NOT NULL,
  `qtt5` int(11) NOT NULL,
  `piece6` varchar(255) NOT NULL,
  `qtt6` int(11) NOT NULL,
  `piece7` varchar(255) NOT NULL,
  `qtt7` int(11) NOT NULL,
  `what` varchar(255) NOT NULL,
  `why` varchar(255) NOT NULL,
  `where` varchar(255) NOT NULL,
  `tech` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `espace_technicien`
--

INSERT INTO `espace_technicien` (`id`, `first_name`, `matricule`, `time`, `description`, `piece1`, `qtt1`, `piece2`, `qtt2`, `piece3`, `qtt3`, `piece4`, `qtt4`, `piece5`, `qtt5`, `piece6`, `qtt6`, `piece7`, `qtt7`, `what`, `why`, `where`, `tech`, `id_user`) VALUES
(2, 'bassemkasem', 222222, '02:01 AM', '', 'pi2', 14, 'pi21', 2, 'p4', 41, 'asdsx', 45, '', 0, '', 0, '', 0, '3 logiciel', '2 Usure', 'PT05 divmac', 'MCP,MNP,', 7),
(3, 'salihabdou', 554567, '02:58 AM', 'abdou salih al kasem alcmohtariiaez', 'piece1', 21, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '1 mécanique', '8 Mauvaise Utilisation', 'c04 station joint ', 'AUT,', 9);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `name`) VALUES
(1, 'admin'),
(2, 'demandeur'),
(3, 'technicien'),
(5, 'chef_d\'equipe');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `num_dep` int(11) DEFAULT NULL,
  `name_dep` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `num_dep`, `name_dep`) VALUES
(1, 2, 'BMW'),
(2, 3, 'GOLF'),
(3, 1, 'VW'),
(4, 4, 'OEM');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_u` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `motdepasse` varchar(80) NOT NULL,
  `id_role` int(11) DEFAULT NULL,
  `matricule` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_u`, `nom`, `prenom`, `email`, `motdepasse`, `id_role`, `matricule`) VALUES
(5, 'hamza', 'kalifa', 'hamalov4@gmail.com', '123456', 1, 0),
(7, 'bassem', 'kasem', 'ghanmirania0505@gmail.com', '0000', 3, 222222),
(8, 'sabrine', 'rdw', NULL, '1111', 2, 666666),
(9, 'salih', 'abdou', 'bhkhamza8@gmail.com', 'salihe', 3, 554567),
(11, 'malek', 'lika', NULL, 'malek', 2, 456789),
(14, 'riadh', 'salah', 'omarboukadida86@gmail.com', 'riadhmahrez', 5, 258963),
(15, 'ribah', 'boufaied', ' ribah.boufaied@gmail.com', 'ribah', 2, 555555);

-- --------------------------------------------------------

--
-- Structure de la table `user_service`
--

CREATE TABLE `user_service` (
  `id` int(11) NOT NULL,
  `id_s` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `date_service` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user_service`
--

INSERT INTO `user_service` (`id`, `id_s`, `id_u`, `date_service`) VALUES
(1, 1, 7, NULL),
(6, 2, 7, '2023-05-02 14:08:00'),
(7, 2, 9, '2024-11-02 09:54:00'),
(8, 4, 9, '2022-11-27 00:58:00'),
(9, 4, 9, '2021-10-29 11:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `espace_demandeur`
--
ALTER TABLE `espace_demandeur`
  ADD PRIMARY KEY (`id_d`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `espace_technicien`
--
ALTER TABLE `espace_technicien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_u`),
  ADD KEY `users_ibfk_1` (`id_role`);

--
-- Index pour la table `user_service`
--
ALTER TABLE `user_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_s` (`id_s`),
  ADD KEY `id_u` (`id_u`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `espace_demandeur`
--
ALTER TABLE `espace_demandeur`
  MODIFY `id_d` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `espace_technicien`
--
ALTER TABLE `espace_technicien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `user_service`
--
ALTER TABLE `user_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `espace_demandeur`
--
ALTER TABLE `espace_demandeur`
  ADD CONSTRAINT `espace_demandeur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_u`);

--
-- Contraintes pour la table `espace_technicien`
--
ALTER TABLE `espace_technicien`
  ADD CONSTRAINT `espace_technicien_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_u`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);

--
-- Contraintes pour la table `user_service`
--
ALTER TABLE `user_service`
  ADD CONSTRAINT `user_service_ibfk_1` FOREIGN KEY (`id_s`) REFERENCES `service` (`id`),
  ADD CONSTRAINT `user_service_ibfk_2` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
