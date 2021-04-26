-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 05:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopilyv`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `b_category` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `b_name`, `slug`, `shop_id`, `image_path`, `b_category`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'dfcvesdv', 0, 'n.jpg', 'phones and tablets', '2021-04-21 08:55:40', '2021-04-21 08:55:40'),
(2, 'Gas cooker', 'dvcedvre', 0, 'g.jpg', 'electronic', '2021-04-21 08:55:40', '2021-04-21 08:55:40'),
(3, 'Women clothes', 'vervr', 0, 'n.jpg', 'Fashion', '2021-04-21 08:55:40', '2021-04-21 08:55:40'),
(4, 'Lenovo', 'vcrev', 0, 'e.png', 'Computing', '2021-04-21 08:55:40', '2021-04-21 08:55:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_description` varchar(200) NOT NULL,
  `image_path` varchar(200) NOT NULL,
  `price` float(6,2) NOT NULL,
  `oprice` float(6,2) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `cat_status` varchar(10) NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_description`, `image_path`, `price`, `oprice`, `slug`, `cat_status`, `created_at`, `updated_at`) VALUES
(1, 'phones and tablets', 'Introduced with Laravel 8, it is a light-weight command-line interface for interacting with Laravel’s default Docker development environment that will streamline our development environment and databa', 'n.jpg', 234.00, 324.00, 'qwfrettyuit', 'inactive', '2021-04-15 09:02:49', '2021-04-15 09:02:49'),
(2, 'supermarket', 'Introduced with Laravel 8, it is a light-weight command-line interface for interacting with Laravel’s default Docker development environment that will streamline our development environment and databa', 'n.jpg', 245.00, 321.00, 'rgrewgvwrtb', 'inactive', '2021-04-15 09:03:17', '2021-04-15 09:03:17'),
(3, 'electronics', 'Introduced with Laravel 8, it is a light-weight command-line interface for interacting with Laravel’s default Docker development environment that will streamline our development environment and databa', 'm.jpg', 123.00, 45.00, 'ervqbv', 'inactive', '2021-04-15 09:05:24', '2021-04-15 09:05:24'),
(4, 'Fashions', 'Introduced with Laravel 8, it is a light-weight command-line interface for interacting with Laravel’s default Docker development environment that will streamline our development environment and databa', 'n.jpg', 345.00, 87.00, 'ewrb4rbtrnb', 'inactive', '2021-04-15 09:05:24', '2021-04-15 09:05:24'),
(5, 'computing', 'Introduced with Laravel 8, it is a light-weight command-line interface for interacting with Laravel’s default Docker development environment that will streamline our development environment and databa', 'o.jpg', 134.00, 65.00, 'ewrbtrn', 'inactive', '2021-04-15 09:05:24', '2021-04-15 09:05:24'),
(6, 'Farming', 'Introduced with Laravel 8, it is a light-weight command-line interface for interacting with Laravel’s default Docker development environment that will streamline our development environment and databa', 'o.jpg', 134.00, 65.00, 'ewrbtrncde', 'inactive', '2021-04-15 09:05:24', '2021-04-15 09:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `dropdown` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `path`, `dropdown`, `created_at`, `updated_at`) VALUES
(1, 'Lebron162.jpg', '/storage/uploads/Lebron162.jpg', '', '2021-04-15 06:58:42', '2021-04-15 06:58:42'),
(2, 'macbook-pro.png', '/storage/images/macbook-pro.png', '', '2021-04-15 06:59:24', '2021-04-15 06:59:24'),
(3, 'Lebron162.jpg', '/storage/images/Lebron162.jpg', '', '2021-04-15 07:02:46', '2021-04-15 07:02:46'),
(4, 'Lebron162.jpg', '/storage/images/Lebron162.jpg', 'elctroni', '2021-04-15 07:25:57', '2021-04-15 07:25:57'),
(5, 'macbook-pro.png', '/storage/images/macbook-pro.png', '...slecect category', '2021-04-15 07:35:47', '2021-04-15 07:35:47'),
(6, 'inifinixhot5.jpg', '/storage/images/inifinixhot5.jpg', '...slecect category', '2021-04-15 07:38:40', '2021-04-15 07:38:40'),
(7, 'fashiondress.jpg', '/public/images/fashiondress.jpg', 'elctroni', '2021-04-15 07:39:50', '2021-04-15 07:39:50'),
(8, 'fashiondress.jpg', '/public/images/fashiondress.jpg', 'elctroni', '2021-04-15 07:41:56', '2021-04-15 07:41:56'),
(9, 'fashiondress.jpg', '/public/images/fashiondress.jpg', 'elctroni', '2021-04-15 08:35:19', '2021-04-15 08:35:19'),
(10, 'fashiondress.jpg', '/public/images/fashiondress.jpg', '...slecect category', '2021-04-15 09:27:10', '2021-04-15 09:27:10'),
(11, 'fashiondress.jpg', '/public/images/fashiondress.jpg', '1', '2021-04-15 09:30:20', '2021-04-15 09:30:20'),
(12, '1', '/public/images/fashiondress.jpg', '1', '2021-04-15 09:39:07', '2021-04-15 09:39:07'),
(13, '12', '/public/images/fashiondress.jpg', '5', '2021-04-15 09:39:43', '2021-04-15 09:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_09_194934_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `status` enum('pending','processing','completed','decline') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grant_total` double(8,2) NOT NULL,
  `item_count` int(11) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `payment_methods` enum('cash_on_delivery','mpesa','paypal','card') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cash_on_delivery',
  `shippping_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippping_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shippping_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shippping_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shippping_zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shippping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_zipcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `shop_id`, `status`, `grant_total`, `item_count`, `is_paid`, `payment_methods`, `shippping_fullname`, `shippping_address`, `shippping_city`, `shippping_state`, `shippping_zipcode`, `shippping_phone`, `notes`, `billing_fullname`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_phone`, `created_at`, `updated_at`) VALUES
(1, 'OrderNumber-6073f36844631', 1, 0, 'pending', 2499.99, 1, 0, 'cash_on_delivery', 'fred', 'fqerqv', 'wb', 'rbvwsr', '55', '92837', NULL, 'fred', 'fqerqv', 'wb', 'rbvwsr', '55', '92837', '2021-04-12 04:14:48', '2021-04-12 04:14:48'),
(2, 'OrderNumber-6073f46b1f4cd', 1, 0, 'pending', 7499.97, 1, 0, 'cash_on_delivery', 'fred', '89gm', 'wb', 'rbvwsr', '123', '92837', NULL, 'fred', '89gm', 'wb', 'rbvwsr', '123', '92837', '2021-04-12 04:19:07', '2021-04-12 04:19:07'),
(3, 'OrderNumber-6073f4c35a52a', 1, 0, 'pending', 6573.98, 3, 0, 'cash_on_delivery', 'fred', 'fqerqv', 'wb', 'rbvwsr', '123', '3546', NULL, 'fred', 'fqerqv', 'wb', 'rbvwsr', '123', '3546', '2021-04-12 04:20:35', '2021-04-12 04:20:35'),
(4, 'OrderNumber-6073f7639dd11', 1, 0, 'pending', 36161.95, 6, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '123', '3546', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '123', '3546', '2021-04-12 04:31:47', '2021-04-12 04:31:47'),
(5, 'OrderNumber-6073fd18e2d1c', 1, 0, 'pending', 124649.95, 3, 0, 'cash_on_delivery', 'bw', '35', 'wb', 'rbvwsr', '6', '3546', NULL, 'bw', '35', 'wb', 'rbvwsr', '6', '3546', '2021-04-12 04:56:08', '2021-04-12 04:56:08'),
(6, 'OrderNumber-6074092beaaf9', 1, 0, 'pending', 25819.99, 2, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '2342', '92837', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '2342', '92837', '2021-04-12 05:47:39', '2021-04-12 05:47:39'),
(7, 'OrderNumber-6074095cb5f7c', 1, 0, 'pending', 2499.99, 1, 0, 'cash_on_delivery', 'kiprop', 'fqerqv', 'wb', 'rbvwsr', '23', '5', NULL, 'kiprop', 'fqerqv', 'wb', 'rbvwsr', '23', '5', '2021-04-12 05:48:28', '2021-04-12 05:48:28'),
(8, 'OrderNumber-60741d1512fb6', 1, 0, 'pending', 25819.99, 2, 0, 'cash_on_delivery', 'fred', '38-kabiyet', 'wb', 'kenya', '1234', '92837', NULL, 'fred', '38-kabiyet', 'wb', 'kenya', '1234', '92837', '2021-04-12 07:12:37', '2021-04-12 07:12:37'),
(9, 'OrderNumber-6074382ad4592', 1, 0, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1234', '92837', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '1234', '92837', '2021-04-12 09:08:10', '2021-04-12 09:08:10'),
(10, 'OrderNumber-6074388185d34', 1, 0, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'bw', '35', 'wb', 'rbvwsr', '45', '3546', NULL, 'bw', '35', 'wb', 'rbvwsr', '45', '3546', '2021-04-12 09:09:37', '2021-04-12 09:09:37'),
(11, 'OrderNumber-607438e41f201', 1, 0, 'pending', 4999.98, 1, 0, 'cash_on_delivery', 'fred', '38-kabiyet', 'wb', 'kenya', '12', '3546', NULL, 'fred', '38-kabiyet', 'wb', 'kenya', '12', '3546', '2021-04-12 09:11:16', '2021-04-12 09:11:16'),
(12, 'OrderNumber-60745a6c589ab', 1, 0, 'pending', 25819.99, 2, 0, 'cash_on_delivery', 'bw', '35', 'wb', 'kenya', '2345', 'ergv', NULL, 'bw', '35', 'wb', 'kenya', '2345', 'ergv', '2021-04-12 11:34:20', '2021-04-12 11:34:20'),
(13, 'OrderNumber-6074615752502', 1, 0, 'pending', 7121.98, 3, 0, 'cash_on_delivery', 'bw', '38-kabiyet', 'wb', 'rbvwsr', '23', '3546', NULL, 'bw', '38-kabiyet', 'wb', 'rbvwsr', '23', '3546', '2021-04-12 12:03:51', '2021-04-12 12:03:51'),
(14, 'OrderNumber-607461ee341db', 1, 0, 'pending', 3389.99, 2, 0, 'cash_on_delivery', 'bw', '35', 'wb', 'kenya', '23', '3546', NULL, 'bw', '35', 'wb', 'kenya', '23', '3546', '2021-04-12 12:06:22', '2021-04-12 12:06:22'),
(15, 'OrderNumber-6074621cd77e8', 1, 0, 'pending', 299159.88, 1, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '12354', '3546', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '12354', '3546', '2021-04-12 12:07:08', '2021-04-12 12:07:08'),
(16, 'OrderNumber-6074624cd2a03', 1, 0, 'pending', 149579.94, 1, 0, 'cash_on_delivery', 'bw', '89gm', 'wb', 'rbvwsr', '123', '3546', NULL, 'bw', '89gm', 'wb', 'rbvwsr', '123', '3546', '2021-04-12 12:07:56', '2021-04-12 12:07:56'),
(17, 'OrderNumber-6075385f41b38', 1, 0, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'fred', 'fqerqv', 'nairobi', 'rbvwsr', '34', '3546', NULL, 'fred', 'fqerqv', 'nairobi', 'rbvwsr', '34', '3546', '2021-04-13 03:21:19', '2021-04-13 03:21:19'),
(18, 'OrderNumber-607538ae739b5', 1, 0, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'fred', '89gm', 'nairobi', 'kenya', '45', '3546', NULL, 'fred', '89gm', 'nairobi', 'kenya', '45', '3546', '2021-04-13 03:22:38', '2021-04-13 03:22:38'),
(19, 'OrderNumber-60753998d3035', 1, 0, 'pending', 2499.99, 1, 0, 'cash_on_delivery', 'bw', '38-kabiyet', 'wb', 'rbvwsr', '343', '3546', NULL, 'bw', '38-kabiyet', 'wb', 'rbvwsr', '343', '3546', '2021-04-13 03:26:32', '2021-04-13 03:26:32'),
(20, 'OrderNumber-60753b05d9b60', 1, 0, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'fred', '35', 'wb', 'kenya', '12', 'ergv', NULL, 'fred', '35', 'wb', 'kenya', '12', 'ergv', '2021-04-13 03:32:37', '2021-04-13 03:32:37'),
(21, 'OrderNumber-60753b38f1ce6', 1, 0, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'bw', '38-kabiyet', 'wb', 'rbvwsr', '23', '5', NULL, 'bw', '38-kabiyet', 'wb', 'rbvwsr', '23', '5', '2021-04-13 03:33:28', '2021-04-13 03:33:28'),
(22, 'OrderNumber-60753c734d274', 1, 0, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'fred', '89gm', 'wb', 'rbvwsr', '324', '5', NULL, 'fred', '89gm', 'wb', 'rbvwsr', '324', '5', '2021-04-13 03:38:43', '2021-04-13 03:38:43'),
(23, 'OrderNumber-60754150854c8', 1, 0, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'fredee', 'fqerqv', 'wb', 'rbvwsr', '09', '3546', NULL, 'fredee', 'fqerqv', 'wb', 'rbvwsr', '09', '3546', '2021-04-13 03:59:28', '2021-04-13 03:59:28'),
(24, 'OrderNumber-607541cc97121', 1, 0, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '89', 'ergv', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '89', 'ergv', '2021-04-13 04:01:32', '2021-04-13 04:01:32'),
(25, 'OrderNumber-607543842d86d', 1, 0, 'pending', 4999.98, 2, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '674', '5', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '674', '5', '2021-04-13 04:08:52', '2021-04-13 04:08:52'),
(26, 'OrderNumber-607543da1c2fe', 1, 0, 'pending', 7841.97, 4, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '23', '3546', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '23', '3546', '2021-04-13 04:10:18', '2021-04-13 04:10:18'),
(27, 'OrderNumber-6075492ed697e', 1, 0, 'pending', 27429.98, 2, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '34', '3546', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '34', '3546', '2021-04-13 04:33:02', '2021-04-13 04:33:02'),
(28, 'OrderNumber-607556978d93a', 2, 0, 'pending', 4999.98, 2, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '79', '3546', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '79', '3546', '2021-04-13 05:30:15', '2021-04-13 05:30:15'),
(29, 'OrderNumber-6075764c35124', 3, 0, 'pending', 14999.94, 2, 0, 'cash_on_delivery', 'bw', '35', 'wb', 'rbvwsr', '123', '92837', NULL, 'bw', '35', 'wb', 'rbvwsr', '123', '92837', '2021-04-13 07:45:32', '2021-04-13 07:45:32'),
(30, 'OrderNumber-6075aadc81f34', 3, 0, 'pending', 1232.00, 2, 0, 'cash_on_delivery', 'bw', '38-kabiyet', 'wb', 'rbvwsr', '654', 'ergv', NULL, 'bw', '38-kabiyet', 'wb', 'rbvwsr', '654', 'ergv', '2021-04-13 11:29:48', '2021-04-13 11:29:48'),
(31, 'OrderNumber-6076af9a4a9ef', 4, 0, 'pending', 5340.00, 1, 0, 'cash_on_delivery', 'fred', '38-kabiyet', 'wb', 'rbvwsr', '5454', '5', NULL, 'fred', '38-kabiyet', 'wb', 'rbvwsr', '5454', '5', '2021-04-14 06:02:18', '2021-04-14 06:02:18'),
(32, 'OrderNumber-6076b81aec0f5', 4, 0, 'pending', 9449.98, 2, 0, 'cash_on_delivery', 'bw', '35', 'nairobi', 'rbvwsr', '13', 'ergv', NULL, 'bw', '35', 'nairobi', 'rbvwsr', '13', 'ergv', '2021-04-14 06:38:34', '2021-04-14 06:38:34'),
(33, 'OrderNumber-6076c6e9c9c0d', 1, 0, 'pending', 0.00, 0, 0, 'cash_on_delivery', '8f', 'cn', 'ncn', 'fb', '56', '656', NULL, '8f', 'cn', 'ncn', 'fb', '56', '656', '2021-04-14 07:41:45', '2021-04-14 07:41:45'),
(34, 'OrderNumber-6076ec79572a8', 4, 0, 'pending', 4999.98, 2, 0, 'cash_on_delivery', 'bw', '38-kabiyet', 'wb', 'rbvwsr', '12', 'ergv', NULL, 'bw', '38-kabiyet', 'wb', 'rbvwsr', '12', 'ergv', '2021-04-14 10:22:01', '2021-04-14 10:22:01'),
(35, 'OrderNumber-6076f353a652f', 4, 0, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'bw', '38-kabiyet', 'wb', 'rbvwsr', '1232', '3546', NULL, 'bw', '38-kabiyet', 'wb', 'rbvwsr', '1232', '3546', '2021-04-14 10:51:15', '2021-04-14 10:51:15'),
(36, 'OrderNumber-6076f3b3ef8fc', 4, 0, 'pending', 2499.99, 1, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', '3546', 'to be delivered', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', '3546', '2021-04-14 10:52:51', '2021-04-14 10:52:51'),
(37, 'OrderNumber-6076fc10a76a8', 4, 0, 'pending', 66873.77, 5, 0, 'cash_on_delivery', 'bw', '38-kabiyet', 'wb', 'rbvwsr', '1232', '92837', 'to be delivered', 'bw', '38-kabiyet', 'wb', 'rbvwsr', '1232', '92837', '2021-04-14 11:28:32', '2021-04-14 11:28:32'),
(38, 'OrderNumber-6076fce598744', 4, 0, 'pending', 2499.99, 1, 0, 'cash_on_delivery', 'fred', 'fqerqv', 'wb', 'rbvwsr', '1232', '5', 'to be delivered', 'fred', 'fqerqv', 'wb', 'rbvwsr', '1232', '5', '2021-04-14 11:32:05', '2021-04-14 11:32:05'),
(39, 'OrderNumber-6076fcfeef41e', 4, 0, 'pending', 2499.99, 1, 0, 'cash_on_delivery', 'fred', 'fqerqv', 'wb', 'rbvwsr', '1232', '5', 'to be delivered', 'fred', 'fqerqv', 'wb', 'rbvwsr', '1232', '5', '2021-04-14 11:32:30', '2021-04-14 11:32:30'),
(40, 'OrderNumber-6077dba611e43', 1, 0, 'pending', 2499.99, 1, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', 'ergv', 'to be delivered', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', 'ergv', '2021-04-15 03:22:30', '2021-04-15 03:22:30'),
(41, 'OrderNumber-6077ea24bd23e', 1, 0, NULL, 4999.98, 1, 0, 'cash_on_delivery', 'fred', 'fqerqv', 'wb', 'rbvwsr', '1232', '5', 'to be delivered', 'fred', 'fqerqv', 'wb', 'rbvwsr', '1232', '5', '2021-04-15 04:24:20', '2021-04-15 04:24:20'),
(42, 'OrderNumber-6077ea96bd786', 1, 0, NULL, 0.00, 0, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', 'ergv', 'to be delivered', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', 'ergv', '2021-04-15 04:26:14', '2021-04-15 04:26:14'),
(43, 'OrderNumber-6077ead641749', 1, 0, NULL, 14999.94, 2, 0, 'cash_on_delivery', 'fred', 'fqerqv', 'wb', 'kenya', '1232', '92837', 'to be delivered', 'fred', 'fqerqv', 'wb', 'kenya', '1232', '92837', '2021-04-15 04:27:18', '2021-04-15 04:27:18'),
(44, 'OrderNumber-6077ebf462dca', 1, 0, NULL, 14999.94, 2, 0, 'cash_on_delivery', 'fred', 'fqerqv', 'wb', 'rbvwsr', '1232', '5', 'to be delivered', 'fred', 'fqerqv', 'wb', 'rbvwsr', '1232', '5', '2021-04-15 04:32:04', '2021-04-15 04:32:04'),
(45, 'OrderNumber-60801aed37653', 1, 1, NULL, 2499.99, 1, 0, 'cash_on_delivery', 'dsvdsv', 'ere', '56', '5', '55', '557', 'to be delivered', 'dsvdsv', 'ere', '56', '5', '55', '557', '2021-04-21 09:30:37', '2021-04-21 09:30:37'),
(46, 'OrderNumber-60801b63cfef5', 1, 1, NULL, 24929.99, 1, 0, 'cash_on_delivery', 'sdfer', 'erfr', '345', '5', '445', '3453456', 'to be delivered', 'sdfer', 'erfr', '345', '5', '445', '3453456', '2021-04-21 09:32:35', '2021-04-21 09:32:35'),
(47, 'OrderNumber-60801bb99da03', 1, 1, NULL, 2499.99, 1, 0, 'cash_on_delivery', 'fred', 'e43', '56', '5', '35', '3453456', 'to be delivered', 'fred', 'e43', '56', '5', '35', '3453456', '2021-04-21 09:34:01', '2021-04-21 09:34:01'),
(48, 'OrderNumber-60801c0b29deb', 1, 1, NULL, 2499.99, 1, 0, 'cash_on_delivery', '8fertymjh', '38-kabiyet', '56', 'fgbg', '12', '557', 'to be delivered', '8fertymjh', '38-kabiyet', '56', 'fgbg', '12', '557', '2021-04-21 09:35:23', '2021-04-21 09:35:23'),
(49, 'OrderNumber-60810ffea15a7', 1, 1, NULL, 474998.10, 1, 0, 'cash_on_delivery', '8fertymjh', 'e43', '56', 'fgbg', '89', '3453456', 'to be delivered', '8fertymjh', 'e43', '56', 'fgbg', '89', '3453456', '2021-04-22 02:56:14', '2021-04-22 02:56:14'),
(50, 'OrderNumber-608113a55c302', 1, 1, NULL, 7499.97, 1, 0, 'cash_on_delivery', 'qa', '38-kabiyet', '56', '5', '23', '3453456', 'to be delivered', 'qa', '38-kabiyet', '56', '5', '23', '3453456', '2021-04-22 03:11:49', '2021-04-22 03:11:49'),
(51, 'OrderNumber-608113ee1fff8', 1, 1, NULL, 124649.95, 1, 0, 'cash_on_delivery', '8fertymjh', '38-kabiyet', '345', '5', '78', '3453456', 'to be delivered', '8fertymjh', '38-kabiyet', '345', '5', '78', '3453456', '2021-04-22 03:13:02', '2021-04-22 03:13:02'),
(52, 'OrderNumber-60811456b3cb8', 1, 1, NULL, 21779.92, 2, 0, 'cash_on_delivery', '8fertymjh', '38-kabiyet', '56', 'fgbg', '676', '3453456', 'to be delivered', '8fertymjh', '38-kabiyet', '56', 'fgbg', '676', '3453456', '2021-04-22 03:14:46', '2021-04-22 03:14:46'),
(53, 'OrderNumber-6083ae2996c3c', 1, 1, NULL, 0.00, 0, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', '92837', 'to be delivered', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', '92837', '2021-04-24 02:35:37', '2021-04-24 02:35:37'),
(54, 'OrderNumber-6083ae4baafe4', 1, 1, NULL, 4999.98, 1, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', '3546', 'to be delivered', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', '3546', '2021-04-24 02:36:11', '2021-04-24 02:36:11'),
(55, 'OrderNumber-6083af1845d45', 1, 1, NULL, 9999.96, 1, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', '3546', 'to be delivered', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', '3546', '2021-04-24 02:39:36', '2021-04-24 02:39:36'),
(56, 'OrderNumber-6083af341b7bf', 1, 1, NULL, 0.00, 0, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', '3546', 'to be delivered', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', '3546', '2021-04-24 02:40:04', '2021-04-24 02:40:04'),
(57, 'OrderNumber-6083b017000e8', 1, 1, NULL, 7499.97, 1, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', '3546', 'to be delivered', 'bw', 'fqerqv', 'wb', 'rbvwsr', '1232', '3546', '2021-04-24 02:43:51', '2021-04-24 02:43:51'),
(58, 'OrderNumber-6083b30ed7abc', 1, 1, NULL, 7499.97, 1, 0, 'cash_on_delivery', 'bw', '38-kabiyet', NULL, NULL, NULL, '3546', 'to be delivered', 'bw', '38-kabiyet', NULL, NULL, NULL, '3546', '2021-04-24 02:56:30', '2021-04-24 02:56:30'),
(59, 'OrderNumber-6083b6e84ae4c', 5, 5, NULL, 7499.97, 1, 0, 'cash_on_delivery', '8fertymjh', '38-kabiyet', NULL, NULL, NULL, '3453456', 'to be delivered', '8fertymjh', '38-kabiyet', NULL, NULL, NULL, '3453456', '2021-04-24 03:12:56', '2021-04-24 03:12:56'),
(60, 'OrderNumber-6083b81213f49', 5, 5, NULL, 2499.99, 1, 0, 'cash_on_delivery', '8fertymjh', '38-kabiyet', NULL, NULL, NULL, '0704987401', 'to be delivered', '8fertymjh', '38-kabiyet', NULL, NULL, NULL, '0704987401', '2021-04-24 03:17:54', '2021-04-24 03:17:54'),
(61, 'OrderNumber-60868fc064e03', 1, 1, NULL, 2499.99, 1, 0, 'cash_on_delivery', 'bw', '38-kabiyet', NULL, NULL, NULL, '3546', 'to be delivered', 'bw', '38-kabiyet', NULL, NULL, NULL, '3546', '2021-04-26 07:02:40', '2021-04-26 07:02:40'),
(62, 'OrderNumber-608694a142993', 1, 1, NULL, 2499.99, 1, 0, 'cash_on_delivery', 'bw', '38-kabiyet', NULL, NULL, NULL, '3546', 'to be delivered', 'bw', '38-kabiyet', NULL, NULL, NULL, '3546', '2021-04-26 07:23:29', '2021-04-26 07:23:29'),
(63, 'OrderNumber-60869fd0c7d6e', 1, 1, NULL, 27499.89, 1, 0, 'mpesa', 'bw', '89gm', NULL, NULL, NULL, '3546', 'to be delivered', 'bw', '89gm', NULL, NULL, NULL, '3546', '2021-04-26 08:11:12', '2021-04-26 08:11:12'),
(64, 'OrderNumber-6086a08795217', 1, 1, NULL, 37499.85, 1, 0, 'mpesa', 'fred', '38-kabiyet', NULL, NULL, NULL, '92837', 'to be delivered', 'fred', '38-kabiyet', NULL, NULL, NULL, '92837', '2021-04-26 08:14:15', '2021-04-26 08:14:15'),
(65, 'OrderNumber-6086a19872090', 1, 1, NULL, 0.00, 0, 0, 'mpesa', 'fred', 'fqerqv', NULL, NULL, NULL, '5', 'to be delivered', 'fred', 'fqerqv', NULL, NULL, NULL, '5', '2021-04-26 08:18:48', '2021-04-26 08:18:48'),
(66, 'OrderNumber-6086a3130415d', 1, 1, NULL, 9999.96, 1, 0, 'mpesa', 'fred', 'fqerqv', NULL, NULL, NULL, '3546', 'to be delivered', 'fred', 'fqerqv', NULL, NULL, NULL, '3546', '2021-04-26 08:25:07', '2021-04-26 08:25:07'),
(67, 'OrderNumber-6086a3cdbdc09', 1, 1, NULL, 2499.99, 1, 0, 'mpesa', 'fred', 'fqerqv', NULL, NULL, NULL, '3546', 'to be delivered', 'fred', 'fqerqv', NULL, NULL, NULL, '3546', '2021-04-26 08:28:13', '2021-04-26 08:28:13'),
(68, 'OrderNumber-6086a586ee201', 1, 1, NULL, 2499.99, 1, 0, 'mpesa', 'fred', 'fqerqv', NULL, NULL, NULL, '3546', 'to be delivered', 'fred', 'fqerqv', NULL, NULL, NULL, '3546', '2021-04-26 08:35:34', '2021-04-26 08:35:34'),
(69, 'm8DDe1RKr', 1, 1, NULL, 2499.99, 1, 0, 'mpesa', 'fred', 'fqerqv', NULL, NULL, NULL, '92837', 'to be delivered', 'fred', 'fqerqv', NULL, NULL, NULL, '92837', '2021-04-26 08:40:39', '2021-04-26 08:40:39'),
(70, '2LCGNDDLV', 1, 1, NULL, 22841.91, 2, 0, 'mpesa', 'fredee', 'fqerqv', NULL, NULL, NULL, '3546', 'to be delivered', 'fredee', 'fqerqv', NULL, NULL, NULL, '3546', '2021-04-26 09:27:36', '2021-04-26 09:27:36'),
(71, 'K2DN46I4N', 1, 1, NULL, 2499.99, 1, 0, 'mpesa', 'bw', 'fqerqv', NULL, NULL, NULL, '3546', 'to be delivered', 'bw', 'fqerqv', NULL, NULL, NULL, '3546', '2021-04-26 10:34:02', '2021-04-26 10:34:02'),
(72, 'OrderNumber-6086caf95a87f', 1, 1, NULL, 234.00, 1, 0, 'mpesa', 'fred', 'fqerqv', NULL, NULL, NULL, '3546', 'to be delivered', 'fred', 'fqerqv', NULL, NULL, NULL, '3546', '2021-04-26 11:15:21', '2021-04-26 11:15:21'),
(73, 'OrderNumber-6086cc1b97225', 1, 1, NULL, 5236.98, 3, 0, 'mpesa', 'fred', 'fqerqv', NULL, NULL, NULL, '3546', 'to be delivered', 'fred', 'fqerqv', NULL, NULL, NULL, '3546', '2021-04-26 11:20:11', '2021-04-26 11:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `order__items`
--

CREATE TABLE `order__items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantityy` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order__items`
--

INSERT INTO `order__items` (`id`, `order_id`, `product_id`, `price`, `quantityy`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(2, 2, 1, 2499.99, 3, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(3, 3, 17, 890.00, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(4, 3, 18, 342.00, 2, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(5, 3, 1, 2499.99, 2, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(6, 4, 5, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(7, 4, 16, 24929.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(8, 4, 18, 342.00, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(9, 4, 6, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(10, 4, 1, 2499.99, 2, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(11, 4, 17, 890.00, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(12, 5, 7, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(13, 5, 16, 24929.99, 5, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(14, 5, 5, 2499.99, -1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(15, 6, 17, 890.00, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(16, 6, 16, 24929.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(17, 7, 1, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(18, 8, 17, 890.00, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(19, 8, 16, 24929.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(20, 11, 1, 2499.99, 2, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(21, 12, 16, 24929.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(22, 12, 17, 890.00, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(23, 13, 1, 2499.99, 2, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(24, 13, 17, 890.00, 2, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(25, 13, 18, 342.00, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(26, 14, 1, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(27, 14, 17, 890.00, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(28, 15, 16, 24929.99, 12, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(29, 16, 16, 24929.99, 6, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(30, 19, 1, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(31, 25, 1, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(32, 25, 6, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(33, 26, 1, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(34, 26, 5, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(35, 26, 18, 342.00, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(36, 26, 6, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(37, 27, 1, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(38, 27, 16, 24929.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(39, 28, 1, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(40, 28, 5, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(41, 29, 1, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(42, 29, 5, 2499.99, 5, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(43, 30, 18, 342.00, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(44, 30, 17, 890.00, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(45, 31, 17, 890.00, 6, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(46, 32, 5, 2499.99, 2, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(47, 32, 17, 890.00, 5, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(48, 34, 5, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(49, 34, 6, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(50, 36, 1, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(51, 37, 1, 2499.99, 13, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(52, 37, 18, 342.00, 17, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(53, 37, 6, 2499.99, 5, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(54, 37, 5, 2499.99, 5, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(55, 37, 17, 890.00, 4, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(56, 38, 5, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(57, 39, 5, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(58, 40, 5, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(59, 41, 5, 2499.99, 2, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(60, 43, 1, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(61, 43, 5, 2499.99, 5, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(62, 44, 1, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(63, 44, 5, 2499.99, 5, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(64, 45, 5, 2499.99, 1, '2021-04-21 12:33:36', '2021-04-21 12:33:36'),
(65, 46, 16, 24929.99, 1, '2021-04-21 12:32:35', '2021-04-21 12:32:35'),
(66, 47, 5, 2499.99, 1, '2021-04-21 12:34:01', '2021-04-21 12:34:01'),
(67, 48, 1, 2499.99, 1, '2021-04-21 12:35:23', '2021-04-21 12:35:23'),
(68, 49, 7, 2499.99, 190, '2021-04-22 05:56:15', '2021-04-22 05:56:15'),
(69, 50, 1, 2499.99, 3, '2021-04-22 06:11:49', '2021-04-22 06:11:49'),
(70, 51, 16, 24929.99, 5, '2021-04-22 06:13:02', '2021-04-22 06:13:02'),
(71, 52, 17, 890.00, 2, '2021-04-22 06:14:46', '2021-04-22 06:14:46'),
(72, 52, 5, 2499.99, 8, '2021-04-22 06:14:46', '2021-04-22 06:14:46'),
(73, 54, 6, 2499.99, 2, '2021-04-24 05:36:11', '2021-04-24 05:36:11'),
(74, 55, 5, 2499.99, 4, '2021-04-24 05:39:36', '2021-04-24 05:39:36'),
(75, 57, 1, 2499.99, 3, '2021-04-24 05:43:51', '2021-04-24 05:43:51'),
(76, 58, 6, 2499.99, 3, '2021-04-24 05:56:30', '2021-04-24 05:56:30'),
(77, 59, 1, 2499.99, 3, '2021-04-24 06:12:56', '2021-04-24 06:12:56'),
(78, 60, 1, 2499.99, 1, '2021-04-24 06:17:54', '2021-04-24 06:17:54'),
(79, 61, 6, 2499.99, 1, '2021-04-26 10:02:40', '2021-04-26 10:02:40'),
(80, 62, 6, 2499.99, 1, '2021-04-26 10:23:29', '2021-04-26 10:23:29'),
(81, 63, 6, 2499.99, 11, '2021-04-26 11:11:12', '2021-04-26 11:11:12'),
(82, 64, 5, 2499.99, 15, '2021-04-26 11:14:15', '2021-04-26 11:14:15'),
(83, 66, 5, 2499.99, 4, '2021-04-26 11:25:07', '2021-04-26 11:25:07'),
(84, 67, 6, 2499.99, 1, '2021-04-26 11:28:13', '2021-04-26 11:28:13'),
(85, 68, 6, 2499.99, 1, '2021-04-26 11:35:35', '2021-04-26 11:35:35'),
(86, 69, 6, 2499.99, 1, '2021-04-26 11:40:39', '2021-04-26 11:40:39'),
(87, 70, 5, 2499.99, 9, '2021-04-26 12:27:36', '2021-04-26 12:27:36'),
(88, 70, 18, 342.00, 1, '2021-04-26 12:27:36', '2021-04-26 12:27:36'),
(89, 71, 5, 2499.99, 1, '2021-04-26 13:34:02', '2021-04-26 13:34:02'),
(90, 72, 27, 234.00, 1, '2021-04-26 14:15:21', '2021-04-26 14:15:21'),
(91, 73, 27, 234.00, 1, '2021-04-26 14:20:11', '2021-04-26 14:20:11'),
(92, 73, 46, 3.00, 1, '2021-04-26 14:20:11', '2021-04-26 14:20:11'),
(93, 73, 5, 2499.99, 2, '2021-04-26 14:20:11', '2021-04-26 14:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `phone`, `created_at`, `updated_at`) VALUES
(1, 1, '6457', '2021-04-26 09:12:30', '2021-04-26 09:12:30'),
(2, 1, '6457', '2021-04-26 09:17:59', '2021-04-26 09:17:59'),
(3, 1, '6457', '2021-04-26 09:24:57', '2021-04-26 09:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_id` bigint(20) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `oprice` float DEFAULT NULL,
  `shipping_cost` double DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `shop_id`, `slug`, `details`, `price`, `oprice`, `shipping_cost`, `description`, `category_id`, `brand_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'MacBook Pro', 1, 'MacBook Pro', '15 inch, 1TB HDD, 32GB RAM', 2499.99, 900, 29.99, 'MackBook Pro', 1, 1, 'e.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(5, 'MacBefwook Pro', 1, 'MacewfrwBook Pro', '15 ineqwrch, 1TB HDD, 32GB RAM', 2499.99, 900, 29.99, 'MackqqqrqBook Pro', 2, 2, 'd.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(6, 'MacBwFDEWook Pro', 1, 'eeMacBook Pro', '15 inch,dew 1TB HDD, 32GB RAM', 2499.99, 900, 29.99, 'MackBDEook Pro', 3, 3, 'd.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(7, 'MacBefwswook Pro', 1, 'MacewfrDWwBook Pro', '15 ineqwdwrch, 1TB HDD, 32GB RAM', 2499.99, 900, 29.99, 'MackqqQS2qrqBook Pro', 4, 4, 'd.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(16, 'MacBadwqwook Pro', 1, 'MacqdBook Pro', '15 inch, 1TB HDD, 32GB RAM', 24929.99, 900, 29.99, 'MackBDook Pro', 4, 19, 'e.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(17, 'MaWDWQcBefwook Pro', 1, 'MacewfrQDwBook Pro', '15 ineDWWqwrch, 1TB HDD, 32GB RAM', 890, 900, 56, 'MackqqqWQDFrqBook Pro', 4, 15, 'e.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(18, 'QQDPro', NULL, 'eeMaFcBook Pro', '15 iFWnch,dew 1TB HDD, 32GB RAM', 342, 900, 543, 'MaQWDckBDEook Pro', 3, 16, 'e.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(19, 'MacsqBefwswook Pro', 1, 'MacewfderDWwBook Pro', '15 iqsneqwdwrch, 1TB HDD, 32GB RAM', 2499.99, 900, 29.99, 'MackqqwQS2qrqBook Pro', 3, 18, 'e.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(20, 'Queens colletion', 1, 'WhMph3CES7Hz8pXVfQfwJcCOdfmVjivt41npxAf7', NULL, 234, 345, 234, 'Now for the big stuff, we need the store controller to handle the submission of the form from the create view. Not only this, we need it to handle files, be able to store the file locally, and in addition store the file path in the database along with the product name', 1, 1, 'e.png', '2021-04-15 10:13:56', '2021-04-15 10:13:56'),
(21, 'fred', NULL, 'u15klRj7W8B20DFKVDHkDcNT4aFw1gxghxwUL36T', NULL, 234, 345, 8779, 'Now for the big stuff, we need the store controller to handle the submission of the form from the create view. Not only this, we need it to handle files, be able to store the file locally, and in addition store the file path in the database along with the product name', 5, 2, 'e.png', '2021-04-15 10:15:29', '2021-04-15 10:15:29'),
(25, 'fredr', NULL, '0nhlINrrr3UAuLaeomihqnPx14gM5owRiXphW4AB', NULL, 234, 345, 2343, 'Now for the big stuff, we need the store controller to handle the submission of the form from the create view. Not only this, we need it to handle files, be able to store the file locally, and in addition store the file path in the database along with the product name', 5, 2, 'e.png', '2021-04-15 10:33:12', '2021-04-15 10:33:12'),
(27, 'fred', 1, 'Xk25m9PARAf4vsGllj5tJF0p7wOhnU9Dwzdo8TFV', NULL, 234, 345, 69, 'Now for the big stuff, we need the store controller to handle the submission of the form from the create view. Not only this, we need it to handle files, be able to store the file locally, and in addition store the file path in the database along with the product name', 2, 1, 'e.png', '2021-04-15 10:35:48', '2021-04-15 10:35:48'),
(28, 'fred', NULL, '9dJC2mYNjl6yIdrspXus3OdIXezr8fLf8A2K7axd', NULL, 234, 345, 78, 'Now for the big stuff, we need the store controller to handle the submission of the form from the create view. Not only this, we need it to handle files, be able to store the file locally, and in addition store the file path in the database along with the product name', 12, 5, 'e.png', '2021-04-15 10:45:18', '2021-04-15 10:45:18'),
(41, 'shoe', 1, 'CZdlwC1ZYVnh', NULL, 521, 800, 100, 'fredtfs', 1, 4, 'e.png', '2021-04-16 06:03:24', '2021-04-16 06:03:24'),
(42, 'clotes', NULL, 'qW5bNJOXesbn', NULL, 520, 600, 800, 's cds', 4, 15, 'e.png', '2021-04-16 06:06:11', '2021-04-16 06:06:11'),
(43, 'wq', 1, 'mkOkqe6DoMhW', NULL, 43, 4, 5, '2', 1, 2, 'e.png', '2021-04-16 06:10:12', '2021-04-16 06:10:12'),
(44, 'ce', NULL, '0rZBCNIvvDje', NULL, 6, 7, 7, 'rb', 1, 2, 'e.png', '2021-04-16 06:11:20', '2021-04-16 06:11:20'),
(45, 'dfvs', NULL, 'lx0DzoqXy9bE', NULL, 435, 5, 54, 'fvs', 1, 2, 'e.png', '2021-04-16 09:36:53', '2021-04-16 09:36:53'),
(46, 'cewvc', 1, 'xYM8mSVHY6vo', NULL, 3, 4, 3, 'rytytn', 2, 7, 'e.png', '2021-04-16 09:40:57', '2021-04-16 09:40:57'),
(47, 'd cds', NULL, 'Kc8o40tRybR3', NULL, 9, 4, 54, 'hgnd', 4, 14, 'e.png', '2021-04-16 09:42:37', '2021-04-16 09:42:37'),
(48, '3', NULL, 'myylfbDU5QDW', NULL, 45, 5, 5, 'da', 1, 2, 'e.png', '2021-04-16 09:44:06', '2021-04-16 09:44:06'),
(49, 'dcd', NULL, 'roTq2FBksKKe', NULL, 445, 54, 34, 'dsv', 5, 12, 'e.png', '2021-04-16 09:47:55', '2021-04-16 09:47:55'),
(50, 'aqzq', NULL, 'o1YEoAuiNKPN', NULL, 45, 5, 5, 'scev', 1, 2, 'e.png', '2021-04-16 09:50:03', '2021-04-16 09:50:03'),
(51, 'dvfd', NULL, 'LpxsKIBGIPaT', NULL, 4, 4, 5, 'zv zdv', 4, 13, 'e.png', '2021-04-16 09:51:37', '2021-04-16 09:51:37'),
(52, 'dsd', NULL, '6F0UE16XfMsD', NULL, 3, 3, 3, 'sc', 3, 10, 'e.png', '2021-04-16 09:54:43', '2021-04-16 09:54:43'),
(53, 'dcd', NULL, 'qwEefSxM5A7u', NULL, 4, 4, 5, 'dsa', 1, 1, 'e.png', '2021-04-16 09:57:18', '2021-04-16 09:57:18'),
(54, 'fred', NULL, 'DLTJpXUMyoiQ', NULL, 24, 34, 34, 'ds d errcercrecr', 1, 1, 'posweb.PNG', '2021-04-17 06:29:24', '2021-04-17 06:29:24'),
(55, '3', NULL, '0bHQcBTxzEN8', NULL, 4, 4, 5, 'tstrh', 1, 1, 'posweb.PNG', '2021-04-17 06:35:47', '2021-04-17 06:35:47'),
(56, 'cewvc', NULL, 'I3P0NvvLFf94', NULL, 45, 3, 5, 'rt', 1, 2, 'posweb.PNG', '2021-04-17 06:36:44', '2021-04-17 06:36:44'),
(57, 'ntrs', NULL, 'wy6ydBAAQjN1', NULL, 520, 544, 454, 'dfb', 1, 2, 'computer2.jpg', '2021-04-19 09:58:49', '2021-04-19 09:58:49'),
(58, 'cewvc', NULL, 'BpeFKnWOqlXf', NULL, 3, 5, 3, 'axa', 1, 1, 'earphone2.jpg', '2021-04-21 05:28:56', '2021-04-21 05:28:56'),
(59, 'regr', NULL, 'nLB7jFkH2i96', NULL, 45, 3, 54, 'ergreg', 2, 5, 'computer2.jpg', '2021-04-21 09:54:37', '2021-04-21 09:54:37'),
(60, 'fred', NULL, 'hDWfF2WBQHxg', NULL, 234, 345, 24, 'eewqe', 4, 13, 'fashiondress.jpg', '2021-04-23 05:55:54', '2021-04-23 05:55:54'),
(61, 'dcd', NULL, '6xm2crzZL2F1', NULL, 3, 4, 3, 'wqsd', 5, 11, 'computer2.jpg', '2021-04-24 04:27:50', '2021-04-24 04:27:50'),
(62, 'dcd', NULL, 'wHkpBYaNjIUR', NULL, 3, 4, 54, 'zsqazqa', 4, 13, 'computer1.jpg', '2021-04-24 04:29:20', '2021-04-24 04:29:20'),
(63, 'test', NULL, '9X1z9oGbzqnd', NULL, 520, 54, 54, 'ererererererererererererererer', 1, 1, 'computer1.jpg', '2021-04-24 06:51:23', '2021-04-24 06:51:23'),
(64, 'test', NULL, 'uhBLyT5hP8uq', NULL, 520, 345, 34, 'uuuuuuuuuuuuuuuuuuuuuu', 1, 1, '/storage/images/computer1.jpg', '2021-04-24 06:55:35', '2021-04-24 06:55:35'),
(65, 'test', NULL, 'oCIwAHAh4735', NULL, 520, 3, 5, 'rgrtg', 5, 11, '/storage/upload/computer2.jpg', '2021-04-24 06:58:47', '2021-04-24 06:58:47'),
(66, 'dcd', NULL, 'Zqz7tlJtlcB9', NULL, 520, 3, 3, 'trdjhtyjy', 5, 11, '/storage/upload/earphone2.jpg', '2021-04-24 07:02:31', '2021-04-24 07:02:31'),
(67, 'dcd', NULL, 'K691MvdyRMqf', NULL, 4, 5, 5, 'dbdfbnhdtt', 5, 11, '/storage/upload/computer2.jpg', '2021-04-24 07:06:48', '2021-04-24 07:06:48'),
(68, 'dcd', NULL, 'LDY6uzVh9mqY', NULL, 520, 3, 54, 'ewfdae', 5, 11, '/storage/upload/computer1.jpg', '2021-04-24 07:08:44', '2021-04-24 07:08:44');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `logo_image` varchar(200) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `rating` float(6,2) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `user_id`, `is_active`, `logo_image`, `email`, `password`, `description`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'fred', 2, 0, '', '', '', 'sdwde', 5.00, '2021-04-13 06:27:54.000000', '2021-04-13 06:27:54.000000'),
(2, 'Queens colletion', 2, 0, '', '', '', 'clothes', 5.00, '2021-04-13 06:28:45.000000', '2021-04-13 06:28:45.000000'),
(3, 'Queens colletion', 2, 0, '', '', '', 'clothes', 5.00, '2021-04-13 06:31:04.000000', '2021-04-13 06:31:04.000000'),
(4, 'Taztech', 2, 0, '', '', '', '32q45', 5.00, '2021-04-13 06:31:13.000000', '2021-04-13 06:31:13.000000'),
(5, 'Queens colletion', 2, 0, '', '', '', 'queen', 5.00, '2021-04-13 07:01:10.000000', '2021-04-13 07:01:10.000000'),
(6, 'fred', 2, 0, '', '', '', 'dfbrfdanbt', 5.00, '2021-04-13 07:11:12.000000', '2021-04-13 07:11:12.000000'),
(7, 'fred', 2, 0, '', '', '', 'dsgbaerhb', 5.00, '2021-04-13 07:11:57.000000', '2021-04-13 07:11:57.000000'),
(8, 'fred', 3, 0, '', '', '', '7fgbk/ok', 5.00, '2021-04-13 07:21:06.000000', '2021-04-13 07:21:06.000000'),
(9, 'Queens colletion', 3, 0, '', '', '', '121e3', 5.00, '2021-04-13 08:37:17.000000', '2021-04-13 08:37:17.000000'),
(10, 'fred', 1, 0, '', '', '', 'efer', 5.00, '2021-04-15 04:48:06.000000', '2021-04-15 04:48:06.000000'),
(11, 'fred', 1, 0, NULL, '', '', '43ryhej', 5.00, '2021-04-15 05:01:54.000000', '2021-04-15 05:01:54.000000'),
(12, 'fred', 1, 0, NULL, '', '', 'rhwt6j', 5.00, '2021-04-15 05:04:23.000000', '2021-04-15 05:04:23.000000'),
(13, 'dscsdw', NULL, 0, NULL, 'kip@gmail.com', '123654789', NULL, NULL, '2021-04-24 04:09:07.000000', '2021-04-24 04:09:07.000000'),
(14, 'dscsdw', NULL, 0, NULL, 'kip@gmail.com', '123654789', NULL, NULL, '2021-04-24 04:18:15.000000', '2021-04-24 04:18:15.000000'),
(15, 'kip@gmail.com', NULL, 0, NULL, 'kip@gmail.com', '123654789', NULL, NULL, '2021-04-24 04:23:45.000000', '2021-04-24 04:23:45.000000'),
(16, 'kip@gmail.com', NULL, 0, NULL, 'kip@gmail.com', '123654789', NULL, NULL, '2021-04-24 05:51:51.000000', '2021-04-24 05:51:51.000000');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) NOT NULL,
  `subcat_name` varchar(20) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `subcat_name`, `slug`, `image_path`, `subcat_id`, `created_at`, `updated_at`) VALUES
(1, 'mobile phones', 'trhtrh', 'e.png', 1, '2021-04-15 09:08:10.000000', '2021-04-15 09:08:10.000000'),
(2, 'kabambe phones', 'hrtrthr', 'e.png', 2, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000'),
(3, 'feature phones', 'erah', 'e.png', 1, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000'),
(4, 'smart phones', 'dshbr', 'e.png', 4, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000'),
(5, 'food', 'sahberah', 'e.png', 2, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000'),
(6, 'drinks', 'dhrh', 'e.png', 2, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000'),
(7, 'households supplies', 'eger', 'e.png', 2, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000'),
(8, 'televisions', 'erhres', 'e.png', 3, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000'),
(9, 'cameras', 'egrg', 'e.png', 3, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000'),
(10, 'home audio', 'edsgre', '', 3, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000'),
(11, 'laptops', '', '', 5, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000'),
(12, 'desktop', 'sehger', '', 5, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000'),
(13, 'men\'s fashion', 'egsgr', '', 4, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000'),
(14, 'women\'s fashion', 'aegrae', '', 4, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000'),
(15, 'kid\'s fashion', '', '', 4, '2021-04-15 09:09:10.000000', '2021-04-15 09:09:10.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` enum('user','admin','seller','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `is_admin`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fred', '0704987401', 'user', 'eu@gmail.com', NULL, '$2y$10$/Kk7/Mg4WUKs.D0aJAjiyeTR3ExDPf8tPppyRp9uIy/qxFhtmR57m', '2ghEsaemmNrlSTvYZ6XIn2fz1ka36rPlF5Elvn15TDOPgxMJX8nph9MwviP1', '2021-04-12 04:11:20', '2021-04-12 04:11:20'),
(2, 'Taztech', '', 'user', 'Taztech@gmail.com', NULL, '$2y$10$9BfNzojS0qSrSAZJGNGFY.n0U8tZe7/Y1Ap/cra3uBoTpySqF.qm2', NULL, '2021-04-13 05:05:02', '2021-04-13 05:05:02'),
(3, 'Queens colletion', '', 'user', 'Taztecht@gmail.com', NULL, '$2y$10$xJcKz9iJtH2T0yP9D5ai5u1BLODsz2C/K9zuGDFdF15xaDeIoM.OW', NULL, '2021-04-13 07:16:22', '2021-04-13 07:16:22'),
(4, 'Queens colletion', '', 'user', 'eusyjero@gmail.com', NULL, '$2y$10$5vh.Xiey.qGYHisfgYbSPeweMcylIr6b4UygOW5V2MtAVIks0LCx.', NULL, '2021-04-14 05:46:13', '2021-04-14 05:46:13'),
(5, 'fred', '0704987401', 'user', 'kip@gmail.com', NULL, '$2y$10$CQsR8V.wV8ZT9jBA5tL8XeUVRdUfR7ztjrp42wAVgc3FzaLitGfku', NULL, '2021-04-24 03:09:17', '2021-04-24 03:09:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order__items`
--
ALTER TABLE `order__items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `order__items`
--
ALTER TABLE `order__items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
