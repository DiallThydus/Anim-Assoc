-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 06 nov. 2022 à 20:38
-- Version du serveur : 8.0.27
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `anim-assoc`
--

-- --------------------------------------------------------

--
-- Structure de la table `animals`
--

DROP TABLE IF EXISTS `animals`;
CREATE TABLE IF NOT EXISTS `animals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `age` int NOT NULL,
  `colors` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `sexe` tinyint(1) NOT NULL,
  `race` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `category_id` int NOT NULL,
  `date_creation` datetime DEFAULT NULL,
  `date_updated` timestamp NULL DEFAULT NULL,
  `is_adopted` tinyint(1) DEFAULT '0',
  `pictures` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `animals`
--

INSERT INTO `animals` (`id`, `name`, `age`, `colors`, `sexe`, `race`, `category_id`, `date_creation`, `date_updated`, `is_adopted`, `pictures`) VALUES
(1, 'Nala', 4, 'noir', 0, 'Berger Allemand', 1, '2022-11-06 15:04:37', '2022-11-06 14:04:37', 0, 'Nala.jpg'),
(2, 'Simba', 7, 'blanc', 1, 'Golden Retriever', 1, '2022-11-06 15:04:37', '2022-11-06 14:04:37', 0, 'Simba.jpg'),
(3, 'Rex', 2, 'marron et blanc', 1, 'Beagle', 1, '2022-11-06 15:04:37', '2022-11-06 14:04:37', 0, 'Rex.jpg'),
(4, 'Rosie', 1, 'noir et marron', 0, 'Yorshire Terrier', 1, '2022-11-06 15:04:37', '2022-11-06 14:04:37', 0, 'Rosie.jpg'),
(5, 'Tucker', 5, 'blanc', 1, 'Husky Sibérien', 1, '2022-11-06 15:04:37', '2022-11-06 14:04:37', 0, 'Tucker.jpg'),
(6, 'Jack', 3, 'orange', 1, 'Shiba Inu', 1, '2022-11-06 15:04:37', '2022-11-06 14:04:37', 0, 'Jack.jpg'),
(7, 'Piper', 6, 'noir', 0, 'Chihuahua', 1, '2022-11-06 15:04:37', '2022-11-06 14:04:37', 0, 'Piper.jpeg'),
(8, 'Gus', 1, 'noir', 1, 'Cane Corso', 1, '2022-11-06 15:04:37', '2022-11-06 14:04:37', 0, 'Gus.jpg'),
(9, 'Hatchi', 4, 'orange', 1, 'Akita Inu', 1, '2022-11-06 15:04:37', '2022-11-06 14:04:37', 0, 'Hatchi.jpg'),
(10, 'Poppy', 4, 'marron et blanc', 0, 'Pitbull', 1, '2022-11-06 15:04:37', '2022-11-06 14:04:37', 0, 'Poppy.jpg'),
(11, 'Oliver', 10, 'marron, blanc et orange', 1, 'Main Coon', 2, '2022-11-06 15:14:23', '2022-11-06 14:14:23', 0, 'Oliver.jpg'),
(12, 'Lucky', 3, 'blanc et gris', 0, 'Sacré de Birmanie', 2, '2022-11-06 15:14:23', '2022-11-06 14:14:23', 0, 'Lucky.jpg'),
(13, 'Leo', 4, 'marron et noir', 1, 'Bengal', 2, '2022-11-06 15:14:23', '2022-11-06 14:14:23', 0, 'Leo.jpg'),
(14, 'Kitty', 9, 'noir', 0, 'Persan', 2, '2022-11-06 15:14:23', '2022-11-06 14:14:23', 0, 'Kitty.jpg'),
(15, 'Ollie', 2, 'blanc et gris', 1, 'Ragdoll', 2, '2022-11-06 15:14:23', '2022-11-06 14:14:23', 0, 'Ollie.jpg'),
(16, 'Stella', 12, 'gris', 0, 'British Shorthair', 2, '2022-11-06 15:14:23', '2022-11-06 14:14:23', 0, 'Stella.jpg'),
(17, 'Willow', 1, 'gris', 0, 'Chartreux', 2, '2022-11-06 15:14:23', '2022-11-06 14:14:23', 0, 'Willow.jpg'),
(18, 'Tiger', 6, 'blanc et orange', 0, 'Norvégien', 2, '2022-11-06 15:14:23', '2022-11-06 14:14:23', 0, 'Tiger.jpg'),
(19, 'Salem', 4, 'noir', 0, 'Sibérien', 2, '2022-11-06 15:14:23', '2022-11-06 14:14:23', 0, 'Salem.jpg'),
(20, 'Felix', 2, 'gris et blanc', 1, 'Exotic Shorthair', 2, '2022-11-06 15:14:23', '2022-11-06 14:14:23', 0, 'Felix.jpg'),
(21, 'Biscotte', 1, 'orange et blanc', 0, 'Hamster', 3, '2022-11-06 15:53:53', '2022-11-06 14:53:53', 0, 'Biscotte.jpg'),
(22, 'Speedy', 3, 'gris', 1, 'Souris', 3, '2022-11-06 15:53:53', '2022-11-06 14:53:53', 0, 'Speedy.jpg'),
(23, 'Tchoupi', 1, 'blanc', 0, 'Cochon d\'Inde', 3, '2022-11-06 15:53:53', '2022-11-06 14:53:53', 0, 'Tchoupi.jpg'),
(24, 'Vanille', 2, 'blanc', 0, 'Hamster', 3, '2022-11-06 15:53:53', '2022-11-06 14:53:53', 0, 'Vanille.jpg'),
(25, 'Oggy', 1, 'gris', 1, 'Souris', 3, '2022-11-06 15:53:53', '2022-11-06 14:53:53', 0, 'Oggy.jpg'),
(26, 'Myrtille', 2, 'noir', 0, 'Cochon d\'Inde', 3, '2022-11-06 15:53:53', '2022-11-06 14:53:53', 0, 'Myrtille.jpg'),
(27, 'Kiwi', 1, 'marron', 0, 'Rat', 3, '2022-11-06 15:53:53', '2022-11-06 14:53:53', 0, 'Kiwi.jpg'),
(28, 'Gribouille', 1, 'gris', 0, 'Cochon d\'Inde', 3, '2022-11-06 15:53:53', '2022-11-06 14:53:53', 0, 'Gribouille.jpeg'),
(29, 'Eclair', 2, 'blanc', 1, 'Souris', 3, '2022-11-06 15:53:53', '2022-11-06 14:53:53', 0, 'Eclair.jpg'),
(30, 'Panpan', 4, 'blanc et gris', 1, 'Hamster', 3, '2022-11-06 15:53:53', '2022-11-06 14:53:53', 0, 'Panpan.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Dog'),
(2, 'Cat'),
(3, 'Rodent'),
(4, 'Toy'),
(5, 'Food'),
(6, 'Objects');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `info` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price` float NOT NULL,
  `quantity` int DEFAULT NULL,
  `category_id` int NOT NULL,
  `date_creation` datetime DEFAULT NULL,
  `date_updated` timestamp NULL DEFAULT NULL,
  `pictures` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_ibfk_1` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `info`, `price`, `quantity`, `category_id`, `date_creation`, `date_updated`, `pictures`) VALUES
(1, 'Laisse pour chien', 'Laisse pour chien avec poignée rembourrée, très réfléchissant, 1.5m de couleur de noir', 16.99, 47, 6, '2022-11-06 18:38:47', '2022-11-06 17:38:47', 'laisse.jpg'),
(2, 'Collier pour chien', 'Collier pour chien en nylon réfléchissant, réglable et rembourré pour toute taille de chien', 9.99, 86, 6, '2022-11-06 18:38:47', '2022-11-06 17:38:47', 'collierChien.jpg'),
(3, 'Harnais pour chien', 'Harnais pour chien anti traction, réfléchissant, poignée rembourrée, réglable ', 25.99, 39, 6, '2022-11-06 18:38:47', '2022-11-06 17:38:47', 'harnais.jpg'),
(4, 'Gamelle pour chien et chat', 'Gamelle pour chien et chat en acier inoxydable avec tapis en silicone anti débordement', 19.99, 29, 6, '2022-11-06 18:57:15', '2022-11-06 17:57:15', 'gamelle.jpg'),
(5, 'Croquettes pour chien', 'Croquettes pour chien de moins de 10kg. Sac de 2kg', 7.99, 142, 5, '2022-11-06 18:57:15', '2022-11-06 17:57:15', 'croquette10.jpg'),
(6, 'Croquettes pour chien', 'Croquettes pour grands chiens. Sac de 14kg', 32.85, 97, 5, '2022-11-06 18:57:15', '2022-11-06 17:57:15', 'croquetteG.jpg'),
(7, 'Repas pour chat', '84 sachet de 100g. Pâtée pour chat en gelée.  Poulet / Saumon / Boeuf / Thon - Nourriture complète & équilibrée avec des ingrédients naturels, adapté chat stérilisé', 64.99, 19, 5, '2022-11-06 18:57:15', '2022-11-06 17:57:15', 'patee.jpg'),
(8, 'Cage pour rongeurs', 'Cage pour rongeurs, deux étages avec accessoires, en Verre et Métal', 175.44, 6, 6, '2022-11-06 18:57:15', '2022-11-06 17:57:15', 'cage.jpg'),
(9, 'Cage de transport', 'Cage de transport pour chats et petits chiens. 40 X 30 X 30 cm. ', 16.49, 71, 6, '2022-11-06 18:57:15', '2022-11-06 17:57:15', 'cageTransport.jpg'),
(10, 'Litière pour chat', 'Litière pour chat. 4L', 19.76, 36, 6, '2022-11-06 18:57:15', '2022-11-06 17:57:15', 'litiere.jpg'),
(11, 'Bac a litière', 'Bac a litière autonettoyant, élimination des odeurs, app control pour plusieurs chats', 679, 6, 6, '2022-11-06 18:57:15', '2022-11-06 17:57:15', 'bac.jpg'),
(12, 'Litière pour rongeur', 'Litière pour rongeur de 14L en copeaux', 7.87, 84, 6, '2022-11-06 19:28:34', '2022-11-06 18:28:34', 'litiereR.jpg'),
(13, 'Biberon rongeur', 'Biberon avec fixation pour rongeur. 500ml', 7.49, 33, 6, '2022-11-06 19:28:34', '2022-11-06 18:28:34', 'biberon.jpg'),
(14, 'Nourriture rongeur', 'Nourriture pour tous rongeur. Repas mélange varié et riches 4kg.', 34.08, 25, 5, '2022-11-06 19:28:34', '2022-11-06 18:28:34', 'nourriture.jpg'),
(15, 'Jouets pour chat', 'Jouets interactif pour chat. 9 jouets avec ressorts, 2 tiges pour chat interactives.', 18.99, 19, 4, '2022-11-06 19:28:34', '2022-11-06 18:28:34', 'jouetChat.jpg'),
(16, 'Jouets pour chien', 'Jouets pour chien. 17 jouets et balles pour chien. Cordes en coton naturel et non toxique', 19.99, 23, 4, '2022-11-06 19:28:34', '2022-11-06 18:28:34', 'jouetChien.jpg'),
(17, 'Jouets pour rongeurs', 'Jouets pour rongeurs. 12 pièces et jouets en bois naturel', 19.99, 7, 4, '2022-11-06 19:28:34', '2022-11-06 18:28:34', 'jouetRongeur.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email_verified` tinyint(1) DEFAULT '0',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `adress` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `zip_code` varchar(6) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `phone_number` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `role` int DEFAULT '0',
  `donation` float DEFAULT NULL,
  `date_creation` datetime DEFAULT NULL,
  `date_updated` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_bin;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
