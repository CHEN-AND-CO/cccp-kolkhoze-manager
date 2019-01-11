-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Ven 11 Janvier 2019 à 14:59
-- Version du serveur :  5.7.24-0ubuntu0.16.04.1
-- Version de PHP :  7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `frm1`
--

-- --------------------------------------------------------

--
-- Structure de la table `deplacement`
--

CREATE TABLE `deplacement` (
  `id` int(11) NOT NULL,
  `annee` int(11) DEFAULT NULL,
  `mois` int(11) DEFAULT NULL,
  `date_validation` date DEFAULT NULL,
  `created` datetime ,
  `updated` datetime ,
  `user_id` int(11) NOT NULL,
  `user_id1` int(11) DEFAULT NULL,
  `validation` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `deplacement`
--

INSERT INTO `deplacement` (`id`, `annee`, `mois`, `date_validation`, `created`, `updated`, `user_id`, `user_id1`, `validation`) VALUES
(1, 2018, 1, '2019-01-10', '2018-01-01 00:00:00', '2018-01-01 00:00:00', 2, 1, 1),
(2, 2019, 1, NULL, '2019-01-11 11:07:50', '2019-01-11 11:07:50', 4, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `deplacement_jour`
--

CREATE TABLE `deplacement_jour` (
  `id` int(11) NOT NULL,
  `nb_km` double DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `jour` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created` datetime ,
  `updated` datetime ,
  `type_deplacement_id` int(11) NOT NULL,
  `deplacement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `deplacement_jour`
--

INSERT INTO `deplacement_jour` (`id`, `nb_km`, `montant`, `jour`, `date`, `created`, `updated`, `type_deplacement_id`, `deplacement_id`) VALUES
(1, 15.6, 7, 3, '2018-01-03', '2018-01-03 00:00:00', '2018-01-03 00:00:00', 1, 1),
(2, 15.6, 7, 5, '2018-01-05', '2018-01-05 00:00:00', '2018-01-05 00:00:00', 1, 1),
(3, 15.6, 7, 11, '2019-01-11', '2019-01-11 11:10:32', '2019-01-11 11:10:32', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `service` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`id`, `service`) VALUES
(1, 'Administration'),
(2, 'Informatique');

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

CREATE TABLE `societe` (
  `id` int(11) NOT NULL,
  `societe` varchar(45) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `societe`
--

INSERT INTO `societe` (`id`, `societe`, `adresse`, `ville_id`) VALUES
(1, 'Isen Brest', '20 rue Cuirassé Bretagne', 1),
(2, 'Isen Nantes', '35 Avenue du Champ de Manœuvre', 2),
(3, 'Isen Caen', NULL, 4),
(4, 'Test', 'ici', 6);

-- --------------------------------------------------------

--
-- Structure de la table `type_deplacement`
--

CREATE TABLE `type_deplacement` (
  `id` int(11) NOT NULL,
  `type_deplacement` varchar(45) DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_deplacement`
--

INSERT INTO `type_deplacement` (`id`, `type_deplacement`, `montant`, `created`, `updated`) VALUES
(1, 'velo uniquement', 0.49, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type_user`
--

CREATE TABLE `type_user` (
  `id` int(11) NOT NULL,
  `type_user` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_user`
--

INSERT INTO `type_user` (`id`, `type_user`) VALUES
(1, 'admin'),
(2, 'utilisateur');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `distance_init` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `type_user_id` int(11) NOT NULL,
  `societe_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `ville_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `adresse`, `distance_init`, `created`, `updated`, `type_user_id`, `societe_id`, `service_id`, `ville_id`) VALUES
(1, 'admin', NULL, NULL, NULL, '2018-09-12 00:00:00', '2018-09-12 00:00:00', 1, 1, 1, 1),
(2, 'Rambert', 'Julien', '7 Rue du Milieu', 15.6, '2018-09-12 00:00:00', '2018-09-12 00:00:00', 2, 1, 2, 1),
(4, 'arfzefezf', 'jghjgchg', 'hvgjvhjv', 0, '2019-01-10 21:43:27', '2019-01-10 22:30:38', 2, 3, 2, 6);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `ville` varchar(100) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id`, `ville`, `cp`) VALUES
(1, 'Brest', '29200'),
(2, 'Nantes', '4400'),
(3, 'Rennes', '35000'),
(4, 'Caen', '14000'),
(5, 'Plouzané', '29280'),
(6, 'Carquefou', '44470'),
(7, 'toulon', '83000');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `deplacement`
--
ALTER TABLE `deplacement`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_deplacement_user1_idx` (`user_id`),
  ADD KEY `fk_deplacement_user2_idx` (`user_id1`);

--
-- Index pour la table `deplacement_jour`
--
ALTER TABLE `deplacement_jour`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_deplacement_jour_type_deplacement1_idx` (`type_deplacement_id`),
  ADD KEY `fk_deplacement_jour_deplacement1_idx` (`deplacement_id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `societe`
--
ALTER TABLE `societe`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_societe_ville1_idx` (`ville_id`);

--
-- Index pour la table `type_deplacement`
--
ALTER TABLE `type_deplacement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_user_type_user_idx` (`type_user_id`),
  ADD KEY `fk_user_societe1_idx` (`societe_id`),
  ADD KEY `fk_user_service1_idx` (`service_id`),
  ADD KEY `fk_user_ville1_idx` (`ville_id`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `deplacement`
--
ALTER TABLE `deplacement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `deplacement_jour`
--
ALTER TABLE `deplacement_jour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `societe`
--
ALTER TABLE `societe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `type_deplacement`
--
ALTER TABLE `type_deplacement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `type_user`
--
ALTER TABLE `type_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `deplacement`
--
ALTER TABLE `deplacement`
  ADD CONSTRAINT `fk_deplacement_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_deplacement_user2` FOREIGN KEY (`user_id1`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `deplacement_jour`
--
ALTER TABLE `deplacement_jour`
  ADD CONSTRAINT `fk_deplacement_jour_deplacement1` FOREIGN KEY (`deplacement_id`) REFERENCES `deplacement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_deplacement_jour_type_deplacement1` FOREIGN KEY (`type_deplacement_id`) REFERENCES `type_deplacement` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `societe`
--
ALTER TABLE `societe`
  ADD CONSTRAINT `fk_societe_ville1` FOREIGN KEY (`ville_id`) REFERENCES `ville` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_service1` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_societe1` FOREIGN KEY (`societe_id`) REFERENCES `societe` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_type_user` FOREIGN KEY (`type_user_id`) REFERENCES `type_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_ville1` FOREIGN KEY (`ville_id`) REFERENCES `ville` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;