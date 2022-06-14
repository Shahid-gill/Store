-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 06:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Canon Camera', 'HD Camera', '/product/canon-90d-dslr-camera-with-18-55mm-lens/', 1, '2022-06-10 11:47:31', '2022-06-10 11:47:31'),
(2, 'Sony Camera', 'HD Camera', '/product/canon-90d-dslr-camera-with-18-55mm-lens/', 0, '2022-06-10 11:47:31', '2022-06-10 11:47:31'),
(3, 'Iphone Mobile', 'Iphone 12 Pro Max', '/product/canon-90d-dslr-camera-with-18-55mm-lens/', 1, '2022-06-10 11:47:31', '2022-06-10 11:47:31'),
(4, 'Samsung Mobile', 'Samsung Galaxy', '/product/canon-90d-dslr-camera-with-18-55mm-lens/', 1, '2022-06-10 11:47:31', '2022-06-10 11:47:31'),
(5, 'Rolex Watch', 'Rolex Watch', '/product/canon-90d-dslr-camera-with-18-55mm-lens/', 1, '2022-06-10 11:47:31', '2022-06-10 11:47:31'),
(6, 'Smart Watch', 'Smart Watch', '/product/canon-90d-dslr-camera-with-18-55mm-lens/', 1, '2022-06-10 11:47:31', '2022-06-10 11:47:31'),
(7, 'Sony LED', 'Sony LED', '/product/canon-90d-dslr-camera-with-18-55mm-lens/', 1, '2022-06-10 11:47:31', '2022-06-10 11:47:31'),
(8, 'HP Laptop', 'HP Laptop 11th Series', '/product/canon-90d-dslr-camera-with-18-55mm-lens/', 1, '2022-06-10 11:47:31', '2022-06-10 11:47:31'),
(9, 'Dell Laptop', 'Dell Laptop 10th Series', '/product/canon-90d-dslr-camera-with-18-55mm-lens/', 1, '2022-06-10 11:47:31', '2022-06-10 11:47:31'),
(10, 'Haier Fridge', 'Haier Fridge', '/product/canon-90d-dslr-camera-with-18-55mm-lens/', 1, '2022-06-10 11:47:31', '2022-06-10 11:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `products_order`
--

CREATE TABLE `products_order` (
  `entry_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `item_price` float NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products_order`
--

INSERT INTO `products_order` (`entry_id`, `qty`, `item_price`, `total_price`) VALUES
(1, 10, 100, 1000),
(2, 5, 20, 100),
(3, 10, 50, 500),
(4, 10, 80, 800),
(5, 7, 30, 210),
(6, 1, 70, 70),
(7, 3, 100, 300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verified_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_active`, `created_at`, `updated_at`, `verified_at`) VALUES
(1, 'Timothy August', 'tim@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a', 1, '2022-06-10 11:55:30', '2022-06-10 11:55:30', '2022-06-10 11:51:13'),
(2, 'John Smith', 'john@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a', 1, '2022-06-10 11:55:30', '2022-06-10 11:55:30', '2022-06-10 11:51:13'),
(3, 'Tom Brown', 'tom@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a', 1, '2022-06-10 11:55:30', '2022-06-10 11:55:30', '2022-06-10 11:51:13'),
(4, 'Brandon Jones', 'brandon@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a', 0, '2022-06-10 11:55:30', '2022-06-10 11:55:30', '2022-06-10 11:51:13'),
(5, 'Angela', 'angela@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a', 0, '2022-06-10 11:55:30', '2022-06-10 11:55:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_products`
--

CREATE TABLE `user_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_products`
--

INSERT INTO `user_products` (`id`, `user_id`, `product_id`) VALUES
(1, 1, 1),
(2, 2, 4),
(3, 1, 3),
(4, 1, 1),
(5, 2, 7),
(6, 1, 7),
(7, 2, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_products`
--
ALTER TABLE `user_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_products`
--
ALTER TABLE `user_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
