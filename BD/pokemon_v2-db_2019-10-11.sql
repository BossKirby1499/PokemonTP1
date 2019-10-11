-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1:3306
-- Généré le :  Ven 11 Octobre 2019 à 18:21
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pokemon_v2`
--

-- --------------------------------------------------------

--
-- Structure de la table `attacks`
--

CREATE TABLE `attacks` (
  `id` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pokemon_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `attacks`
--

INSERT INTO `attacks` (`id`, `title`, `description`, `pokemon_id`, `created`, `modified`) VALUES
(1, 'Quick attack', 'Fast attack that allows the pitcher to hit his opponent. 100% chance of success', 1, '2019-09-13', '2019-10-04'),
(2, 'Flamethrower', 'powerfull attack of fire', 1, '2019-09-13', '2019-10-04'),
(3, 'waterfalls', 'Attack that allows the user to repel the opponent. Also allows to go up cascades', 7, '2019-09-13', '2019-10-04'),
(4, 'Hydro Pump', 'Extremely powerful attack that launches a jet of water capable of destroying everything in its way', 4, '2019-09-16', '2019-10-04'),
(5, 'Sleep Powder', 'The thrower creates a powder that he throws at his opponent. This powder makes it possible to lull the person who ingests it.', 10, '2019-09-16', '2019-10-04');

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 =  active 0 = desactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `created`, `modified`, `status`) VALUES
(1, 'Charizard.png', 'Files/', '2019-09-16 13:57:25', '2019-09-16 14:23:11', 1),
(2, 'carapuce.png', 'Files/', '2019-09-16 14:25:13', '2019-09-16 14:25:13', 1),
(3, 'poussifeu.png', 'Files/', '2019-09-16 15:24:24', '2019-09-16 15:24:24', 1),
(4, 'Lucario.png', 'Files/', '2019-09-16 19:18:28', '2019-09-16 19:18:28', 1);

-- --------------------------------------------------------

--
-- Structure de la table `i18n`
--

CREATE TABLE `i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `i18n`
--

INSERT INTO `i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(2, 'fr_CA', 'Types', 1, 'name', 'Feu'),
(3, 'fr_CA', 'Types', 2, 'name', 'Plante'),
(4, 'fr_CA', 'Types', 3, 'name', 'Eau'),
(5, 'fr_CA', 'Types', 4, 'name', 'Electrique'),
(6, 'fr_CA', 'Types', 5, 'name', 'Psychique'),
(7, 'fr_CA', 'Types', 7, 'name', 'Roche'),
(8, 'fr_CA', 'Types', 8, 'name', 'Vol'),
(9, 'fr_CA', 'Types', 9, 'name', 'Combat'),
(10, 'fr_CA', 'Types', 10, 'name', 'Métal'),
(11, 'it_IT', 'Types', 1, 'name', 'Fuoco'),
(12, 'it_IT', 'Types', 2, 'name', 'Pianta'),
(13, 'it_IT', 'Types', 3, 'name', 'Acqua'),
(14, 'it_IT', 'Types', 4, 'name', 'Elettrica'),
(15, 'it_IT', 'Types', 5, 'name', 'Psichica'),
(16, 'it_IT', 'Types', 7, 'name', 'Roccia'),
(17, 'it_IT', 'Types', 8, 'name', 'Volare'),
(18, 'it_IT', 'Types', 9, 'name', 'Lotta'),
(19, 'it_IT', 'Types', 10, 'name', 'Ferro'),
(20, 'fr_CA', 'Attacks', 1, 'title', 'Vive-attaque'),
(21, 'fr_CA', 'Attacks', 1, 'description', 'Attaque rapide qui permet au lanceur de frapper son adversaire. 100% de chances de réussite'),
(22, 'fr_CA', 'Attacks', 2, 'title', 'lance-flamme'),
(23, 'fr_CA', 'Attacks', 2, 'description', 'Attaque puissante de feu'),
(24, 'fr_CA', 'Attacks', 3, 'title', 'Cascade'),
(25, 'fr_CA', 'Attacks', 3, 'description', 'Attaque qui permet à son utilisateur de repousser l\'adversaire. Permet aussi de remonter des cascades'),
(26, 'fr_CA', 'Attacks', 4, 'title', 'Hydrocanon'),
(27, 'fr_CA', 'Attacks', 4, 'description', 'Attaque extrêment puissante qui lance un jet d\'eau capable de détruire tout ce qui se trouve sur son passage'),
(28, 'fr_CA', 'Attacks', 5, 'title', 'Poudre dodo'),
(29, 'fr_CA', 'Attacks', 5, 'description', 'Le lanceur créer une poudre qu\'il lance à son adversaire. Cette poudre permet d\'endormir la personne qui en ingère.'),
(30, 'it_IT', 'Attacks', 1, 'title', 'Attacco Rapido'),
(31, 'it_IT', 'Attacks', 1, 'description', 'Attacco rapido che consente al lanciatore di colpire il suo avversario. 100% di probabilità di successo'),
(32, 'it_IT', 'Attacks', 2, 'title', 'Lanciafiamme'),
(33, 'it_IT', 'Attacks', 2, 'description', 'potente attacco di fuoco'),
(34, 'it_IT', 'Attacks', 3, 'title', 'cascate'),
(35, 'it_IT', 'Attacks', 3, 'description', 'Attacco che consente all\'utente di respingere l\'avversario. Permette anche di risalire le cascate'),
(36, 'it_IT', 'Attacks', 4, 'title', 'Idropompa'),
(37, 'it_IT', 'Attacks', 4, 'description', 'Attacco estremamente potente che lancia un getto d\'acqua in grado di distruggere tutto sulla sua strada'),
(38, 'it_IT', 'Attacks', 5, 'title', 'Sonnifero'),
(39, 'it_IT', 'Attacks', 5, 'description', 'Il lanciatore crea una polvere che lancia al suo avversario. Questa polvere consente di cullare la persona che la ingerisce.');

-- --------------------------------------------------------

--
-- Structure de la table `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20191011151416, 'Initial', '2019-10-11 19:14:19', '2019-10-11 19:14:19', 0);

-- --------------------------------------------------------

--
-- Structure de la table `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pokemon`
--

INSERT INTO `pokemon` (`id`, `user_id`, `name`, `slug`, `body`, `published`, `created`, `modified`) VALUES
(1, 4, 'Dracaufeu', 'Dracaufeu', 'Pokemon dragon qui crache du feu! Il est dangereux.', 1, '2019-09-05', '2019-09-16'),
(4, 4, 'Carapuce', 'Carapuce', 'Pokemon tortue qui lance de l\'eau de sa bouche', 1, '2019-09-06', '2019-09-06'),
(7, 4, 'gyrados', 'gyrados', 'Pokemon eau qui est une sorte de léviathan', 1, '2019-09-09', '2019-09-09'),
(10, 5, 'Mystherbe', 'mystherbe', 'Pokemon plante très spécial que l\'on retrouve souvent dans les hautes herbes.', 1, '2019-09-16', '2019-09-16'),
(12, 4, 'Poussifeu', 'Poussifeu', 'Ceci est un pokemon', 1, '2019-09-16', '2019-09-16'),
(13, 5, 'Lucario', 'Lucario', 'Pokémon très puissant ayant de mystérieux liens avec une pierre', 1, '2019-09-16', '2019-09-16');

-- --------------------------------------------------------

--
-- Structure de la table `pokemon_files`
--

CREATE TABLE `pokemon_files` (
  `id` int(11) NOT NULL,
  `pokemon_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pokemon_files`
--

INSERT INTO `pokemon_files` (`id`, `pokemon_id`, `file_id`) VALUES
(1, 1, 1),
(2, 4, 2),
(3, 12, 3),
(4, 13, 4);

-- --------------------------------------------------------

--
-- Structure de la table `pokemon_types`
--

CREATE TABLE `pokemon_types` (
  `pokemon_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pokemon_types`
--

INSERT INTO `pokemon_types` (`pokemon_id`, `type_id`) VALUES
(1, 1),
(12, 1),
(10, 2),
(4, 3),
(7, 3),
(13, 5),
(13, 9);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `types`
--

INSERT INTO `types` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Fire', '2019-09-06', '2019-10-04'),
(2, 'Plant', '2019-09-06', '2019-10-04'),
(3, 'Water', '2019-09-06', '2019-10-04'),
(4, 'Electric', '2019-09-13', '2019-10-04'),
(5, 'Psychic', '2019-09-16', '2019-10-04'),
(7, 'Rock', '2019-09-16', '2019-10-04'),
(8, 'Fly', '2019-09-16', '2019-10-04'),
(9, 'Fight', '2019-09-16', '2019-10-04'),
(10, 'Iron', '2019-09-16', '2019-10-04');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created`, `modified`, `uuid`, `actif`) VALUES
(1, 'davidlavigueur@live.ca', 'Diablo13', '2019-09-05', '2019-09-05', '', 1),
(3, 'philHetu@live.ca', '$2y$10$WrER8Vs809eeY3CdQlO4ve7FDfxdHsKEjAELbbAiuFMxAKRdjIU.e', '2019-09-05', '2019-09-05', '', 1),
(4, 'joel@live.ca', '$2y$10$qqp9qX3G.F3NA5hnR5masuvBcubzFs91ExnYmIiR8oF7MEcfL.5AC', '2019-09-05', '2019-09-05', '', 1),
(5, 'valiquette@live.ca', '$2y$10$gcLvqtA0CHgtkkdXJF8W8ODgwODfz8k9lJ8MMSVSlJnnjFidTppyq', '2019-09-13', '2019-09-13', '', 1),
(6, 'admin@hotmail.com', '$2y$10$FQD8DmTXGxOVWrmGJF1DxOTZso9emc.1u3EcdXLNGKryBCtaxSoW2', '2019-09-16', '2019-09-16', '', 1),
(9, 'pascal@hotmail.com', '$2y$10$0YM9432GqSbuBvozQ/RAX.K0EYjAxkcZJ//5xYEt.B8AUWTtKhcyW', '2019-09-23', '2019-09-23', '', 1),
(13, 'rookyleek@gmail.com', '$2y$10$SvCzTK0cbmkAbHxD6iYz2u5pnmmTnpKSNktsDjYeGCzwiExR/jLAW', '2019-10-07', '2019-10-07', '', 1),
(27, '1737805@cmontmorency.qc.ca', '$2y$10$lATCGIAbjohoVPqZQO.7iOCrjxH/1ySB6H3Lq6ex74g5AVcLbN5Hu', '2019-10-07', '2019-10-07', '174d0779-b884-4aff-9b1c-939d56dd6f1b', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `attacks`
--
ALTER TABLE `attacks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `pokemon_id` (`pokemon_id`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `I18N_FIELD` (`model`,`foreign_key`,`field`);

--
-- Index pour la table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `pokemon_files`
--
ALTER TABLE `pokemon_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pokemon_id` (`pokemon_id`),
  ADD KEY `file_id` (`file_id`);

--
-- Index pour la table `pokemon_types`
--
ALTER TABLE `pokemon_types`
  ADD PRIMARY KEY (`pokemon_id`,`type_id`),
  ADD KEY `pokemon_types_ibfk_1` (`type_id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `attacks`
--
ALTER TABLE `attacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `pokemon_files`
--
ALTER TABLE `pokemon_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `attacks`
--
ALTER TABLE `attacks`
  ADD CONSTRAINT `attacks_ibfk_1` FOREIGN KEY (`pokemon_id`) REFERENCES `pokemon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `pokemon`
--
ALTER TABLE `pokemon`
  ADD CONSTRAINT `pokemon_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `pokemon_files`
--
ALTER TABLE `pokemon_files`
  ADD CONSTRAINT `pokemon_files_ibfk_1` FOREIGN KEY (`pokemon_id`) REFERENCES `pokemon` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pokemon_files_ibfk_2` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `pokemon_types`
--
ALTER TABLE `pokemon_types`
  ADD CONSTRAINT `pokemon_types_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`),
  ADD CONSTRAINT `pokemon_types_ibfk_2` FOREIGN KEY (`pokemon_id`) REFERENCES `pokemon` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
