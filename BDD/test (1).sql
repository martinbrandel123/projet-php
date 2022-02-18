-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 18 fév. 2022 à 16:39
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `type_of_product` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `type_of_product`) VALUES
(1, 'cat 1', '', ''),
(2, 'cat 2', '', ''),
(3, 'cat 3', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postcode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `address`, `postcode`) VALUES
(1, 'Chuck', 'Norris', '38 place notre dame Grenoble', '38000'),
(2, 'Charlize', 'Theron', '51 chemin de la Carronnerie Meylan', '38240'),
(3, 'Ryan', 'Gosling', '21 boulevard Maréchal Lyautey Grenoble', '38000');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_11_24_145812_init_playground', 1);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `number` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `number`, `date`, `customer_id`) VALUES
(1, 'maojh782d2', '2022-02-11 13:29:17', 1),
(2, 'dz53cf23e1', '2022-02-08 13:32:28', 1),
(3, 'mpo013saz5', '2022-02-04 13:37:47', 2),
(4, 'wsc273c0i1', '2022-02-09 13:44:40', 2),
(5, 'nba142d51d', '2022-02-11 13:50:02', 2);

-- --------------------------------------------------------

--
-- Structure de la table `order_product`
--

CREATE TABLE `order_product` (
  `quantity` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `order_product`
--

INSERT INTO `order_product` (`quantity`, `product_id`, `order_id`) VALUES
(1, 1, 1),
(2, 3, 1),
(1, 13, 2),
(1, 9, 2),
(1, 10, 2),
(1, 2, 3),
(1, 10, 3),
(2, 3, 4),
(1, 12, 4),
(1, 1, 5),
(1, 12, 5);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `discount` int(2) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `quantity`, `weight`, `available`, `discount`, `category_id`) VALUES
(1, 'adidas W astir', 'adidas W Astir Cloud White', 30000, 'https://www.sneakers.fr/wp-content/uploads/2022/02/adidas-astir-square-4.jpg', 10, 1000, 1, 15, 1),
(2, 'Nike Air Trainer 1 SP Coriander', 'Nike Air Trainer 1 SP Coriander', 25000, 'https://www.sneakers.fr/wp-content/uploads/2021/12/nike-air-trainer-1-qs-coriander-square-485x485.jpg', 10, 1000, 1, 25, 1),
(3, 'Air Jordan 5 Racer Blue', 'Air Jordan 5 Racer Blue', 50000, 'https://www.sneakers.fr/wp-content/uploads/2022/01/jordan-5-racer-blue-av-380x380.jpg', 1, 500, 1, 10, 1),
(4, 'Acronym x Nike Blazer', 'Acronym x Nike Blazer Low Night Maroon', 20000, 'https://www.sneakers.fr/wp-content/uploads/2021/12/acronym-nike-blazer-low-2022-cover-380x380.jpg', 1, 500, 1, 5, 1),
(5, 'Nike Dunk Low', 'Cactus Plant Flea Market x Nike Dunk Low', 150000, 'https://www.sneakers.fr/wp-content/uploads/2022/01/nike-dunk-low-cpfm-av-380x380.png', 1, 500, 0, 10, 1),
(6, 'Air Jordan 4 Zen Master', 'Air Jordan 4 Zen Master', 17500, 'https://www.sneakers.fr/wp-content/uploads/2022/01/Air-Jordan-4-Zen-Master-Cover-380x380.jpg', 1, 500, 0, 20, 1),
(7, 'Nike Air Max 1 OG Red Big Bubble', 'Nike Air Max 1 OG Red Big Bubble', 30500, 'https://www.sneakers.fr/wp-content/uploads/2022/01/Nike-Air-Max-1-OG-Red-Big-Bubble-cover-380x380.jpg', 0, 500, 1, 50, 2),
(8, 'Union LA x Nike Dunk Low', 'Union LA x Nike Dunk Low', 13000, 'https://www.sneakers.fr/wp-content/uploads/2022/01/Union-Nike-Dunk-Low-2022-1-380x380.jpeg', 0, 500, 1, 30, 2),
(9, 'Jordan Delta 2 Primary Prism', 'Jordan Delta 2 Primary Prism', 38000, 'https://www.sneakers.fr/wp-content/uploads/2022/02/jordan-delta-2-primary-prism-av-380x380.jpg', 2, 1200, 1, 25, 2),
(10, 'Nike Air Force 1 UNO', 'Nike Air Force 1 UNO', 12000, 'https://www.sneakers.fr/wp-content/uploads/2022/01/nike-af1-uno-av-380x380.jpg', 2, 1200, 1, 30, 2),
(11, 'Air Jordan 1 W High Denim ', 'Air Jordan 1 High OG W Denim', 22000, 'https://www.sneakers.fr/wp-content/uploads/2021/11/preview-air-jordan-1-high-og-wmns-denim-cover-380x380.jpeg', 5, 1200, 1, 60, 3),
(12, 'Air Jordan 1 High OG Rebellionaire', 'Air Jordan 1 High OG Rebellionaire', 19000, 'https://www.sneakers.fr/wp-content/uploads/2021/11/air-jordan-1-retro-high-og-rebellionaire-cover-380x380.jpeg', 5, 1200, 1, 35, 3),
(13, 'Nike Air Trainer 1 Chlorophyll', 'Travis Scott x Nike Air Trainer 1 Chlorophyll', 23000, 'https://www.sneakers.fr/wp-content/uploads/2021/11/258627172_4852997164730488_4568257055241918528_n-1-380x380.jpg', 5, 1200, 1, 10, 3);

-- --------------------------------------------------------

--
-- Structure de la table `sql_playground_test`
--

CREATE TABLE `sql_playground_test` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sql_playground_test`
--

INSERT INTO `sql_playground_test` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Campus Numérique In The Alps', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tabletest`
--

CREATE TABLE `tabletest` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tabletest`
--

INSERT INTO `tabletest` (`id`, `quantity`) VALUES
(1, 4),
(2, 2),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 2),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 8),
(15, 0),
(16, 0),
(17, 0),
(18, 5),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(27, 0),
(28, 0),
(29, 2),
(30, 6),
(31, 0),
(32, 0),
(33, 0),
(34, 0),
(35, 0),
(36, 0),
(37, 0),
(38, 0),
(39, 0),
(40, 0),
(41, 4),
(42, 0),
(43, 0),
(44, 0),
(45, 0),
(46, 0),
(47, 0),
(48, 0),
(49, 0),
(50, 0),
(51, 0),
(52, 0),
(53, 3),
(54, 0),
(55, 0),
(56, 0),
(57, 0),
(58, 0),
(59, 0),
(60, 0),
(61, 0),
(62, 0),
(63, 0),
(64, 0),
(65, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_order` (`customer_id`);

--
-- Index pour la table `order_product`
--
ALTER TABLE `order_product`
  ADD KEY `table_product` (`product_id`),
  ADD KEY `table_order` (`order_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_product` (`category_id`);

--
-- Index pour la table `sql_playground_test`
--
ALTER TABLE `sql_playground_test`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tabletest`
--
ALTER TABLE `tabletest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `sql_playground_test`
--
ALTER TABLE `sql_playground_test`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tabletest`
--
ALTER TABLE `tabletest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `customers_order` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Contraintes pour la table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `table_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `table_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `categorie_product` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
