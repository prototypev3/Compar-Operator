-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 10 mars 2023 à 09:18
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `comparo_full`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `motdepasse`) VALUES
(1, 'beaugrand', 'yann', '1234'),
(2, 'rios', 'brice', 'azerty224');

-- --------------------------------------------------------

--
-- Structure de la table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `tour_operator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `destination`
--

INSERT INTO `destination` (`id`, `location`, `image`, `description`, `price`, `tour_operator_id`) VALUES
(1, 'Saint Romain Lachalm', '\'images/Saint\\ Romain\\ Lachalm.jpg\'', 'Saint-Romain-Lachalm est une commune française située à l\'est du Velay, dans le département de la Haute-Loire en région Auvergne-Rhône-Alpes. Ses habitants sont appelés les San-Roumis.', 1, 2),
(2, 'Madrid', '\'images/Madrid.jpg\'', 'Située au centre de l\'Espagne, Madrid, sa capitale, est une ville dotée d\'élégants boulevards et de vastes parcs très bien entretenus comme le Retiro.', 600, 2),
(3, 'Berlin', '\'images/Berlin.jpg\'', 'La capitale allemande, Berlin, est née au XIIIe siècle. Le Mémorial de l’Holocauste et les pans restants du mur de Berlin, sur lesquels des graffitis ont été peints, témoignent de son passé tumultueux.', 300, 1),
(4, 'Seoul', '\'images/Seoul.jpg\'', 'Capitale de la Corée du Sud, Séoul est une immense métropole où les gratte-ciel modernes,<br> les métros high-tech et la culture pop côtoient les temples bouddhistes, les palais et les marchés de rue.', 1000, 3),
(5, 'Bangkok', '\'images/Bangkok.jpg\'', 'Bangkok, la capitale de la Thaïlande, est une grande ville connue pour ses sanctuaires richement décorés et ses rues animées.', 200, 2),
(6, 'Bombay', '\'images/Bombay.jpg\'', 'Mumbai (anciennement Bombay) est une ville densément peuplée qui se trouve sur la côte ouest de l\'Inde. Ce centre financier est la plus grande ville du pays.', 250, 1),
(7, 'New York', '\'images/New-York.jpg\'', 'New York est une ville composée de 5 arrondissements à l\'embouchure du fleuve Hudson et de l\'océan Atlantique. En son centre se trouve Manhattan, un arrondissement faisant partie des principaux centres commerciaux, financiers et culturels du monde.', 1000, 2),
(8, 'Tel-Aviv', '\'images/Tel-Aviv.jpg\'', 'Sur la côte méditerranéenne, Tel Aviv est une ville israélienne caractérisée par ses sobres immeubles Bauhaus datant des années 1930, dont des milliers sont regroupés dans l\'ensemble architectural appelé Ville Blanche.', 400, 3),
(9, 'Venise', '\'images/Venise.jpg\'', 'Venise, capitale de la région de la Vénétie au nord de l\'Italie, occupe plus de 100 petites îles dans un lagon de la mer Adriatique. La ville ne comprend aucune route, uniquement des canaux, dont le Grand Canal, bordé de palais gothiques et Renaissance.', 700, 2),
(10, 'Tokyo ', '\'images/Tokyo.jpg\'', 'Capitale animée du Japon, Tokyo associe les styles ultramodernes et traditionnels, dans un mélange de gratte-ciel aux néons lumineux et de temples anciens.', 1300, 1),
(11, 'Brasilia', '\'images/Rio-de-Janeiro.jpg\'', 'Brasília, inaugurée comme capitale du Brésil en 1960, est une ville à l\'urbanisme planifié qui se distingue par son architecture blanche et moderne,principalement réalisée par Oscar Niemeyer.', 1052, 3),
(12, 'Amsterdam', '\'images/Amsterdam.jpg\'', ' Amsterdam, capitale des Pays-Bas, est connue pour son patrimoine artistique,son système élaboré de canaux et ses étroites maisons à pignons,héritage de l\'âge d\'or de la ville, le XVIIe siècle.', 1452, 1);

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `tour_operator_id` int(11) NOT NULL,
  `note` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `review`
--

INSERT INTO `review` (`id`, `message`, `author`, `tour_operator_id`, `note`) VALUES
(1, 'Super voyage, prestation au top !!', 'Michel', 2, 4),
(2, 'Tout est inclus dans le prix, c\'est cool, je recommande', 'Paul', 3, 3),
(3, 'Un peu cher, mais ça vaut le coup', 'Paul', 2, 3),
(4, 'arnaque!!!! a fuire!!!', 'René', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tour_operator`
--

CREATE TABLE `tour_operator` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `grade` float DEFAULT NULL,
  `is_premium` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `tour_operator`
--

INSERT INTO `tour_operator` (`id`, `name`, `link`, `grade`, `is_premium`) VALUES
(1, 'Salaun Holidays', 'https://www.salaun-holidays.com/', 3.33, 0),
(2, 'Fram', 'https://www.fram.fr/', 4.543, 1),
(3, 'Heliades', 'https://www.heliades.fr/', 2.321, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destination_tour_operator` (`tour_operator_id`);

--
-- Index pour la table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_tour_operator` (`tour_operator_id`);

--
-- Index pour la table `tour_operator`
--
ALTER TABLE `tour_operator`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tour_operator`
--
ALTER TABLE `tour_operator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `destination`
--
ALTER TABLE `destination`
  ADD CONSTRAINT `destination_tour_operator` FOREIGN KEY (`tour_operator_id`) REFERENCES `tour_operator` (`id`);

--
-- Contraintes pour la table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_tour_operator` FOREIGN KEY (`tour_operator_id`) REFERENCES `tour_operator` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
