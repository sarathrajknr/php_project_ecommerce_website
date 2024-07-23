-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2024 at 08:07 PM
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
-- Database: `php_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_cost` decimal(6,2) NOT NULL,
  `order_status` varchar(100) NOT NULL DEFAULT 'on_hold',
  `user_id` int(11) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_image4` varchar(255) NOT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_special_offer` tinyint(1) NOT NULL,
  `product_color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_category`, `product_description`, `product_image`, `product_image2`, `product_image3`, `product_image4`, `product_price`, `product_special_offer`, `product_color`) VALUES
(1, 'Pink shoe', 'shoes', 'Amazing pink shoe', 'featured1.jpg', 'featured1.jpg', 'featured1.jpg', 'featured1.jpg', 199.80, 0, 'pink'),
(2, 'Puma purple bag', 'bags', 'Cool Purple bags', 'featured2.jpg', 'featured2.jpg', 'featured2.jpg', 'featured2.jpg', 182.00, 0, 'purple'),
(3, 'Puma travel bagpack', 'bags', 'yellow and blue mix', 'featured3.png', 'featured3.png', 'featured3.png', 'featured3.png', 170.21, 0, 'yellow'),
(4, 'Philips Trimmer', 'trimmer', 'Best trimmers for men with powerful blades', 'featured4.jpg', 'featured4.jpg', 'featured4.jpg', 'featured4.jpg', 200.00, 0, 'black'),
(5, 'Puma Lime Color T-Shirt', 't-shirt', 'Beautiful Puma T-shirt', 'clothes1.jpg', 'clothes1.jpg', 'clothes1.jpg', 'clothes1.jpg', 201.02, 0, 'lime'),
(6, 'Addidas white T-shirt', 't-shirt', 'Addidas white color body fit ', 'clothes2.jpg', 'clothes2.jpg', 'clothes2.jpg', 'clothes2.jpg', 210.01, 0, 'White'),
(7, 'Levis Blue color Jean', 'clothes', 'skin fit levis Blue color Jean', 'clothes3.jpg', 'clothes3.jpg', 'clothes3.jpg', 'clothes3.jpg', 195.99, 0, 'blue'),
(8, 'Redtape jackets', 'clothes', 'Red color amazing rain jackets', 'clothes4.jpg', 'clothes4.jpg', 'clothes4.jpg', 'clothes4.jpg', 142.21, 0, 'red'),
(9, 'Firebolt Smartwatch', 'watches', 'amazing watch', 'watches1.jpg', 'watches1.jpg', 'watches1.jpg', 'watches1.jpg', 255.21, 0, 'beige'),
(10, 'Noisefit Smartwatch', 'watches', 'amazing watch', 'watches2.jpg', 'watches2.jpg', 'watches2.jpg', 'watches2.jpg', 246.50, 0, 'black'),
(11, 'Amazefit smartwatch', 'watches', 'amazing watch', 'watches3.jpg', 'watches3.jpg', 'watches3.jpg', 'watches3.jpg', 282.45, 0, 'blue'),
(12, 'Bolt Smartwatch', 'watches', 'amazing watch', 'watches4.jpg', 'watches4.jpg', 'watches4.jpg', 'watches4.jpg', 217.21, 0, 'grey'),
(13, 'Addidas Sports shoes', 'Sports shoes', 'Running shoes', 'shoes1.jpg', 'shoes1.jpg', 'shoes1.jpg', 'shoes1.jpg', 75.01, 0, 'blue'),
(14, 'Puma Jogging shoes', 'Sports shoes', 'joggine shoes', 'shoes2.jpg', 'shoes2.jpg', 'shoes2.jpg', 'shoes2.jpg', 85.02, 0, 'grey'),
(15, 'Puma Jumping shoes', 'Sports shoes', 'jumping shoes', 'shoes3.jpg', 'shoes3.jpg', 'shoes3.jpg', 'shoes3.jpg', 95.00, 0, 'black'),
(16, 'Cosco Shoes', 'Sports shoes', 'amazing fit', 'shoes4.jpg', 'shoes4.jpg', 'shoes4.jpg', 'shoes4.jpg', 101.25, 0, 'dark gray');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `UX_Constraint` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
