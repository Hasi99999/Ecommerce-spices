-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 02:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bolt`
--

-- --------------------------------------------------------

--
-- Table structure for table `catogory`
--

CREATE TABLE `catogory` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `catogory`
--

INSERT INTO `catogory` (`id`, `name`) VALUES
(1, 'Cardamom'),
(2, 'Cinnamon Sticks'),
(3, 'Cumin'),
(4, 'Garlic'),
(5, 'Tumeric Powder'),
(6, 'White Pepper'),
(7, 'Black Pepper'),
(8, 'Mustard Seeds'),
(9, 'Unroasted Curry powder'),
(10, 'chilly'),
(11, 'Cloves');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL,
  `Iname` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `distric` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`, `Iname`, `address`, `contact`, `status`, `distric`) VALUES
(26, 'A1', 'Cardamom(300g)', 'Cardamom is used for digestion problems including heartburn, intestinal spasms, irritable bowel syndrome (IBS), intestinal gas, constipation, liver and gallbladder complaints, and loss of appetite. It is also used for common cold, cough, bronchitis, sore ', 100, 1, 100, '2024-02-15 14:42:06', 'hasintha99@gmail.com', '', '', '', 'Delivered', ''),
(27, 'A1', 'Cardamom(300g)', 'Cardamom is used for digestion problems including heartburn, intestinal spasms, irritable bowel syndrome (IBS), intestinal gas, constipation, liver and gallbladder complaints, and loss of appetite. It is also used for common cold, cough, bronchitis, sore ', 100, 3, 300, '2024-02-15 14:46:15', 'hasintha99@gmail.com', '', '', '', '', ''),
(21, 'A3', 'Caradamom(1Kg)', 'Cardamom is used for digestion problems including heartburn, intestinal spasms, irritable bowel syndrome (IBS), intestinal gas, constipation, liver and gallbladder complaints, and loss of appetite. It is also used for common cold, cough, bronchitis, sore ', 600, 2, 1200, '2024-01-23 05:59:01', 'hasintha6@gmail.com', '', '', '', 'Cancelled', ''),
(25, 'A2', 'Caradamom(500g)', 'Cardamom is used for digestion problems including heartburn, intestinal spasms, irritable bowel syndrome (IBS), intestinal gas, constipation, liver and gallbladder complaints, and loss of appetite. It is also used for common cold, cough, bronchitis, sore ', 300, 1, 300, '2024-02-15 04:19:53', 'hasintha9@gmail.com', '', '', '', 'Ordered', ''),
(29, 'A2', 'Caradamom(500g)', 'Cardamom is used for digestion problems including heartburn, intestinal spasms, irritable bowel syndrome (IBS), intestinal gas, constipation, liver and gallbladder complaints, and loss of appetite. It is also used for common cold, cough, bronchitis, sore ', 300, 1, 300, '2024-02-17 10:49:28', 'hasintha6@gmail.com', '', 'hasintha6@gmail.com', '', '', ''),
(30, 'B1', 'Cinnamon Sticks(50g)', 'Ceylon Cinnamon was highly prized for centuries mainly due to its deliciously delicate flavour. Discerning cuisines of the modern world still seek Ceylon Cinnamon despite it being more expensive than the more common varieties of Cinnamon freely available ', 300, 1, 300, '2024-02-17 11:29:55', 'hasintha6@gmail.com', '', 'asdf,asdgf', '', 'Ordered', ''),
(34, '3', 'Cumin(300g)', 'Using cumin as a spice increases antioxidant intake, promotes digestion, provides iron, may improve blood sugar control and may reduce food-borne illnesses. Taking higher doses in supplement form has been linked to weight loss and improved blood cholester', 1800, 1, 1800, '2024-02-18 12:35:49', 'kavindraprathibhani99@gmail.com', 'Kavindra Prathibhani', '99/3,P.S.Perera Mawatha,Mampe,Piliyandala', '', '', ''),
(35, '1', 'Cardamom(300g)', 'Cardamom is used for digestion problems including heartburn, intestinal spasms, irritable bowel syndrome (IBS), intestinal gas, constipation, liver and gallbladder complaints, and loss of appetite. It is also used for common cold, cough, bronchitis, sore ', 100, 1, 100, '2024-02-18 12:35:49', 'kavindraprathibhani99@gmail.com', 'Kavindra Prathibhani', '99/3,P.S.Perera Mawatha,Mampe,Piliyandala', '', '', ''),
(33, '0', 'Caradamom(500g)', 'Cardamom is used for digestion problems including heartburn, intestinal spasms, irritable bowel syndrome (IBS), intestinal gas, constipation, liver and gallbladder complaints, and loss of appetite. It is also used for common cold, cough, bronchitis, sore ', 300, 1, 300, '2024-02-17 13:33:20', 'hasintha6@gmail.com', 'hasichami chami', 'asdf,asdgf', '', 'Delivered', ''),
(36, '6', 'White Pepper(50g)', 'Pepper is also known as “King of the Spices.” It accounts for a quarter of the world’s spice trade. Next to water and salt, it is the third most added ingredient. A mixture of black and white pepper corns is called a mignonette. Pepper was highly valued i', 150, 3, 450, '2024-02-18 12:35:49', 'kavindraprathibhani99@gmail.com', 'Kavindra Prathibhani', '99/3,P.S.Perera Mawatha,Mampe,Piliyandala', '', '', ''),
(37, '11', 'Cloves(150g)', 'Cloves are aromatic flower buds of the clove tree, native to Indonesia. They are widely used as a spice in cuisines around the world, adding a warm, sweet, and slightly peppery flavor to dishes. Cloves are often used whole or ground in both savory and swe', 700, 1, 700, '2024-02-18 12:35:49', 'kavindraprathibhani99@gmail.com', 'Kavindra Prathibhani', '99/3,P.S.Perera Mawatha,Mampe,Piliyandala', '', 'Delivered', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` int(100) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` longtext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(23, 1, 'Cardamom(300g)', 'Cardamom is used for digestion problems including heartburn, intestinal spasms, irritable bowel syndrome (IBS), intestinal gas, constipation, liver and gallbladder complaints, and loss of appetite. It is also used for common cold, cough, bronchitis, sore mouth and throat, and tendency toward infection.', 'Food-Name-537.jpg', 7, 100.00),
(25, 1, 'Caradamom(1Kg)', 'Cardamom is used for digestion problems including heartburn, intestinal spasms, irritable bowel syndrome (IBS), intestinal gas, constipation, liver and gallbladder complaints, and loss of appetite. It is also used for common cold, cough, bronchitis, sore mouth and throat, and tendency toward infection.', 'Food-Name-9941.jpg', 6, 600.00),
(26, 2, 'Cinnamon Sticks(50g)', 'Ceylon Cinnamon was highly prized for centuries mainly due to its deliciously delicate flavour. Discerning cuisines of the modern world still seek Ceylon Cinnamon despite it being more expensive than the more common varieties of Cinnamon freely available in the international market.', 'Food-Name-941.jpg', 3, 300.00),
(27, 2, 'Cinnamon Sticks(300g)', 'Ceylon Cinnamon was highly prized for centuries mainly due to its deliciously delicate flavour. Discerning cuisines of the modern world still seek Ceylon Cinnamon despite it being more expensive than the more common varieties of Cinnamon freely available in the international market.', 'Food-Name-5924.webp', 20, 2100.00),
(28, 3, 'Cumin(50g)', 'Using cumin as a spice increases antioxidant intake, promotes digestion, provides iron, may improve blood sugar control and may reduce food-borne illnesses. Taking higher doses in supplement form has been linked to weight loss and improved blood cholesterol, though more research is needed.', 'Food-Name-8827.webp', 0, 300.00),
(29, 3, 'Cumin(300g)', 'Using cumin as a spice increases antioxidant intake, promotes digestion, provides iron, may improve blood sugar control and may reduce food-borne illnesses. Taking higher doses in supplement form has been linked to weight loss and improved blood cholesterol, though more research is needed.', 'Food-Name-8061.jpg', 11, 1800.00),
(30, 4, 'Garlic(500g)', 'Part of the lily, or alium, family, of which onions are also a member, garlic is one of the most indispensable ingredients around, and plays a central role in Mediterranean and Asian cookery. A bulb composed of many individual cloves enclosed in a thin white, mauve or purple skin, it\'s quite fiery, pungent and crunchy when raw. As it cooks it becomes more mellow and creamy.', 'Food-Name-7195.jpeg', 0, 400.00),
(31, 4, 'Garlic(1Kg)', 'Part of the lily, or alium, family, of which onions are also a member, garlic is one of the most indispensable ingredients around, and plays a central role in Mediterranean and Asian cookery. A bulb composed of many individual cloves enclosed in a thin white, mauve or purple skin, it\'s quite fiery, pungent and crunchy when raw. As it cooks it becomes more mellow and creamy.', 'Food-Name-7890.webp', 10, 800.00),
(32, 5, 'Tumeric Powder(50g)', 'A vibrant and flavorful spice sourced from Sri Lanka, known for its earthy taste and health benefits. Its versatility makes it a popular choice in many dishes, from curries to smoothies.', 'Food-Name-4208.jpg', 0, 300.00),
(33, 5, 'Tumeric Powder(500g)', 'Mustard seeds are used for causing vomiting, relieving water retention (edema) by increasing urine production, and increasing appetite.', 'Food-Name-8438.jpg', 6, 3000.00),
(34, 6, 'White Pepper(50g)', 'Pepper is also known as “King of the Spices.” It accounts for a quarter of the world’s spice trade. Next to water and salt, it is the third most added ingredient. A mixture of black and white pepper corns is called a mignonette. Pepper was highly valued in Europe during the Middle Ages and the Renaissance to the extent that it was used in gift-giving, paying rent, dowries, bribes, and taxes.', 'Food-Name-5878.jpg', 7, 150.00),
(35, 6, 'White Pepper(300g)', 'Pepper is also known as “King of the Spices.” It accounts for a quarter of the world’s spice trade. Next to water and salt, it is the third most added ingredient. A mixture of black and white pepper corns is called a mignonette. Pepper was highly valued in Europe during the Middle Ages and the Renaissance to the extent that it was used in gift-giving, paying rent, dowries, bribes, and taxes.', 'Food-Name-9856.jpg', 0, 900.00),
(36, 7, 'Black Pepper(100g)', 'Exotic and fragrant Ceylon pepper, prized for its sweet and mild heat taste. Buy premium quality from our online store to enhance your cooking.', 'Food-Name-9325.webp', 0, 200.00),
(37, 7, 'Black Pepper(500g)', 'Exotic and fragrant Ceylon pepper, prized for its sweet and mild heat taste. Buy premium quality from our online store to enhance your cooking', 'Food-Name-3498.jpg', 14, 1000.00),
(38, 8, 'Mustard Seeds(100g)', 'Mustard seeds are used for causing vomiting, relieving water retention (edema) by increasing urine production, and increasing appetite.', 'Food-Name-8839.jpg', 5, 100.00),
(39, 8, 'Mustard Seeds(500g)', 'Mustard seeds are used for causing vomiting, relieving water retention (edema) by increasing urine production, and increasing appetite.', 'Food-Name-6278.jpg', 9, 500.00),
(40, 9, 'Unroasted Curry powder(100g)', 'A mixture of Coriander, Cumin, Fennel, Fenugreek, Turmericand Curry Leaves spice blend is enrich in anti-inflammatory compounds and consuming it may help reduce oxidative stress,boost heart health, and improve blood sugar levels, among other potentialbenefits. The best part is that curry powder makes an excellent addition to awide array of recipes.', 'Food-Name-5426.webp', 24, 200.00),
(47, 10, 'Chilli powder (100g)', 'Chilli spices are vibrant, pungent seasonings derived from dried chili peppers, adding heat, depth, and flavor to dishes. Ranging in intensity from mild to fiery, they\'re used worldwide to elevate cuisines with their characteristic kick, whether sprinkled sparingly or infused generously for a fiery flavor burst.', 'Food-Name-1610.jpg', 12, 250.00),
(48, 10, 'Chilly Pieces (100g)', 'Chilly Pieces Spices offers a wide range of high-quality spices perfect for adding flavor and heat to your dishes. From traditional favorites like chili powder and paprika to unique blends and exotic spices, Chilly Pieces has something to enhance any culinary creation. With their dedication to quality and freshness, you can trust Chilly Pieces Spices to elevate your cooking to the next level.', 'Food-Name-8356.jpg', 12, 300.00),
(49, 11, 'Cloves(50g)', 'Cloves are aromatic flower buds of the clove tree, native to Indonesia. They are widely used as a spice in cuisines around the world, adding a warm, sweet, and slightly peppery flavor to dishes. Cloves are often used whole or ground in both savory and sweet recipes, such as curries, stews, baked goods, and mulled beverages. They also have medicinal properties and are believed to have antioxidant and anti-inflammatory effects.', 'Food-Name-7370.jpg', 7, 300.00),
(50, 11, 'Cloves(150g)', 'Cloves are aromatic flower buds of the clove tree, native to Indonesia. They are widely used as a spice in cuisines around the world, adding a warm, sweet, and slightly peppery flavor to dishes. Cloves are often used whole or ground in both savory and sweet recipes, such as curries, stews, baked goods, and mulled beverages. They also have medicinal properties and are believed to have antioxidant and anti-inflammatory effects.', 'Food-Name-5881.avif', 10, 700.00),
(51, 10, 'Chilli powder (300g)', 'Chilli spices are vibrant, pungent seasonings derived from dried chili peppers, adding heat, depth, and flavor to dishes. Ranging in intensity from mild to fiery, they\'re used worldwide to elevate cuisines with their characteristic kick, whether sprinkled sparingly or infused generously for a fiery flavor burst.', 'Food-Name-5593.webp', 25, 700.00),
(52, 10, 'Chilly Pieces (500g)', 'Chilly Pieces Spices offers a wide range of high-quality spices perfect for adding flavor and heat to your dishes. From traditional favorites like chili powder and paprika to unique blends and exotic spices, Chilly Pieces has something to enhance any culinary creation. With their dedication to quality and freshness, you can trust Chilly Pieces Spices to elevate your cooking to the next level.', 'Food-Name-9769.jpg', 30, 1300.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(250) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`, `city`, `type`) VALUES
(7, 'admin', 'admin', '1234', 'mawanella', 'admin'),
(8, 'store', 'store', 'store', 'kegalla', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(20, 'hasinthaf', 'chamika', 'asdfgv', 'hhjnk', 45, 'hasintha99@gmail.com', 'hasi', 'user'),
(21, 'hasintha chamika', 'chami', 'asdf,asdgf', 'kegalla', 443, 'hasintha9@gmail.com', '1234', 'user'),
(23, 'Kavindra', 'Prathibhani', '99/3,P.S.Perera Mawatha,Mampe,Piliyandala', 'Piliyandala', 10300, 'kavindraprathibhani99@gmail.com', 'Kavi202019', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catogory`
--
ALTER TABLE `catogory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catogory`
--
ALTER TABLE `catogory`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_code`) REFERENCES `catogory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
