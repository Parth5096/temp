-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2024 at 01:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigfair`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 't-shirt', 't-shirt', 'public/category/1MSJL1ovBcY1SCDO6IR1PsbI44KotXWVrzC9taRo.jpg', 0, '2024-02-01 23:28:58', '2024-02-01 23:29:03'),
(2, 'shoes', 'shoes', 'public/category/ZJZqKAxLRX9tVib3TC42IMiTFaQuqe3ppySuJg5D.jpg', NULL, '2024-02-02 04:55:47', '2024-02-02 04:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `cname` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `phone`, `type`, `address`, `mobile`, `cname`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Narendra', 'Singh', 'naren@gmail.com', '9876543211', 1, 'jaipur', '9876543211', NULL, 'Hello Narendra', 'Hello Narendra', 1, '2024-02-02 05:43:34', '2024-02-02 05:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` enum('percentage','amount') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'percentage',
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon`, `discount`, `quantity`, `amount`, `value`, `status`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(2, 'coupon-99', 'percentage', '999', '10000', '1000', 0, '2024-02-02', '2024-02-09', '2024-02-01 23:55:39', '2024-02-01 23:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `multipleimages`
--

CREATE TABLE `multipleimages` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multipleimages`
--

INSERT INTO `multipleimages` (`id`, `product_id`, `images`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'public/products/hzNekJ5pSfSggIZhLkveCYmqvLPLWMcyjceX31IK.jpg', 0, '2024-02-01 23:44:53', '2024-02-01 23:44:53'),
(2, 1, 'public/products/aANPT4gxXUQryuEqrHIvjHxUi8qLxgDUax11PNhg.jpg', 0, '2024-02-01 23:44:53', '2024-02-01 23:44:53'),
(3, 1, 'public/products/yS7zqBcVWO2vIcwJqT6ZdQvkLgGqt9juEbU20MHE.jpg', 0, '2024-02-01 23:44:53', '2024-02-01 23:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` double DEFAULT NULL,
  `category_id` double DEFAULT NULL,
  `subcategory_id` double DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `selling_price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `slug`, `description`, `price`, `selling_price`, `image`, `qty`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'T shirt', 't-shirt', 'boys black tshirt', '700', '800', 'public/product/6UaObybPyQVD6BUonWUmTaI4A6v27R3itjctXLXD.jpg', '70', 0, '2024-02-01 23:44:53', '2024-02-01 23:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `post`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Narendra', 'web developer', 'web developer', 'public/testimonial/tK0P3xLTsCADiLSjrJEIubY9m8WKEy3BRnDcYmhm.jpg', 0, '2024-02-01 23:56:22', '2024-02-01 23:56:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT 0,
  `status` int(11) DEFAULT 0,
  `logo` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `password`, `description`, `type`, `status`, `logo`, `about`, `company`, `country`, `address`, `twitter`, `facebook`, `instagram`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '8619496826', '$2y$10$MIEz3mYgPN4j7rcODBfgLenO.5dWuClIRbT4OWLawn8EiBCpvYUQ2', 'hello', 1, 0, 'public/logo/U8FwZ7tg6YW50CWpJ4zV94bdl9PpC8Wj5BlHT8Gz.jpg', 'Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.', 'linkedin', 'india', 'jaipur', 'https://twitter.com/#', 'https://facebook.com/', 'https://instagram.com/', 'https://linkedin.com/', '2024-02-02 04:51:35', '2024-02-02 04:04:10'),
(2, 'narendra', 'naren128.k@gmail.com', NULL, '9876543211', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-04 06:01:49', '2024-02-04 06:01:49'),
(3, 'narendra', 'naren12812.k@gmail.com', NULL, '1234567890', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-04 06:02:51', '2024-02-04 06:02:51'),
(4, 'narendra', 'admin123@gmail.com', NULL, '9876543211', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-06 02:13:58', '2024-02-06 02:13:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multipleimages`
--
ALTER TABLE `multipleimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `multipleimages`
--
ALTER TABLE `multipleimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
