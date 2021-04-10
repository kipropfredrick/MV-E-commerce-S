-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 02:22 PM
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
-- Database: `test`
--

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
(4, '2021_04_08_100149_create_products_table', 1),
(5, '2021_04_10_063419_create_orders_table', 2),
(6, '2021_04_10_061655_create_products_table', 3),
(7, '2021_04_10_070801_create_order__items_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `custome_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ststus` enum('pending','processing','completed','decline') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `grant_total` double(8,2) NOT NULL,
  `item_count` int(11) NOT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `payment_methods` enum('cash_on_delivery','paypal','card','mpesa') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cash_on_delivery',
  `shipping_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `custome_name`, `order_number`, `user_id`, `ststus`, `grant_total`, `item_count`, `is_paid`, `payment_methods`, `shipping_fullname`, `shipping_address`, `shipping_city`, `shipping_state`, `shipping_zipcode`, `shipping_phone`, `notes`, `billing_fullname`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_phone`, `created_at`, `updated_at`) VALUES
(1, '', 'OrderNumber-607161b8e9740', 2, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '34', 'ergv', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '34', 'ergv', '2021-04-10 05:28:40', '2021-04-10 05:28:40'),
(2, '', 'OrderNumber-6071620fae80a', 2, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'fredee', '89gm', 'mufy', 'gnf', '654', '3546', NULL, 'fredee', '89gm', 'mufy', 'gnf', '654', '3546', '2021-04-10 05:30:07', '2021-04-10 05:30:07'),
(3, '', 'OrderNumber-6071638493943', 2, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'fredee', 'fqerqv', 'wb', 'rbvwsr', '45', '3546', NULL, 'fredee', 'fqerqv', 'wb', 'rbvwsr', '45', '3546', '2021-04-10 05:36:20', '2021-04-10 05:36:20'),
(4, '', 'OrderNumber-607164bc5c824', 2, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '345', '5', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '345', '5', '2021-04-10 05:41:32', '2021-04-10 05:41:32'),
(5, '', 'OrderNumber-60716520033e9', 2, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '009', '3546', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '009', '3546', '2021-04-10 05:43:12', '2021-04-10 05:43:12'),
(6, '', 'OrderNumber-60716671ce53d', 2, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '54', 'ergv', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '54', 'ergv', '2021-04-10 05:48:49', '2021-04-10 05:48:49'),
(7, 'fred', 'OrderNumber-60716ea1d8ba2', 2, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'bw', '35', 'wb', 'rbvwsr', '334', '5', NULL, 'bw', '35', 'wb', 'rbvwsr', '334', '5', '2021-04-10 06:23:45', '2021-04-10 06:23:45'),
(8, 'fred', 'OrderNumber-607176de864f5', 2, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '32', '3546', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '32', '3546', '2021-04-10 06:58:54', '2021-04-10 06:58:54'),
(9, 'fred', 'OrderNumber-6071770cbbe94', 2, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'bw', 'fqerqv', 'wb', 'rbvwsr', '6', '3546', NULL, 'bw', 'fqerqv', 'wb', 'rbvwsr', '6', '3546', '2021-04-10 06:59:40', '2021-04-10 06:59:40'),
(10, 'fred', '6071773d3a354', 2, 'pending', 0.00, 0, 0, 'cash_on_delivery', 'fredee', 'fqerqv', 'wb', 'rbvwsr', '99', '5', NULL, 'fredee', 'fqerqv', 'wb', 'rbvwsr', '99', '5', '2021-04-10 07:00:29', '2021-04-10 07:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `order__items`
--

CREATE TABLE `order__items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `oprice` float NOT NULL,
  `shipping_cost` double NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `details`, `price`, `oprice`, `shipping_cost`, `description`, `category_id`, `brand_id`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'MacBook Pro', 'MacBook Pro', '15 inch, 1TB HDD, 32GB RAM', 2499.99, 900, 29.99, 'MackBook Pro', 1, 1, 'macbook-pro.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(5, 'MacBefwook Pro', 'MacewfrwBook Pro', '15 ineqwrch, 1TB HDD, 32GB RAM', 2499.99, 900, 29.99, 'MackqqqrqBook Pro', 2, 2, 'macbook-pro.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(6, 'MacBwFDEWook Pro', 'eeMacBook Pro', '15 inch,dew 1TB HDD, 32GB RAM', 2499.99, 900, 29.99, 'MackBDEook Pro', 3, 3, 'macbook-pro.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(7, 'MacBefwswook Pro', 'MacewfrDWwBook Pro', '15 ineqwdwrch, 1TB HDD, 32GB RAM', 2499.99, 900, 29.99, 'MackqqQS2qrqBook Pro', 4, 4, 'macbook-pro.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(16, 'MacBadwqwook Pro', 'MacqdBook Pro', '15 inch, 1TB HDD, 32GB RAM', 24929.99, 900, 29.99, 'MackBDook Pro', 19, 19, 'macbook-pro.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(17, 'MaWDWQcBefwook Pro', 'MacewfrQDwBook Pro', '15 ineDWWqwrch, 1TB HDD, 32GB RAM', 890, 900, 56, 'MackqqqWQDFrqBook Pro', 15, 15, 'macbook-pro.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(18, 'QQDPro', 'eeMaFcBook Pro', '15 iFWnch,dew 1TB HDD, 32GB RAM', 342, 900, 543, 'MaQWDckBDEook Pro', 16, 16, 'macbook-pro.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27'),
(19, 'MacsqBefwswook Pro', 'MacewfderDWwBook Pro', '15 iqsneqwdwrch, 1TB HDD, 32GB RAM', 2499.99, 900, 29.99, 'MackqqwQS2qrqBook Pro', 18, 18, 'macbook-pro.png', '2021-04-08 08:29:27', '2021-04-08 08:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fred', 'eu@gmail.com', NULL, '$2y$10$sgBYdmaz8/tndEbtrZB0I.WIaSQnTYVKCCBJFmBKmMNNENnd4kYyy', NULL, '2021-04-08 11:01:13', '2021-04-08 11:01:13'),
(2, 'fred', 'eud@gmail.com', NULL, '$2y$10$jwz2L52wI28jPG9c7/jxHu8Rfx39ve7WsgpFCuibR.cmB81sX0KRW', NULL, '2021-04-10 05:06:08', '2021-04-10 05:06:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `order__items_product_id_foreign` (`product_id`),
  ADD KEY `order__items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order__items`
--
ALTER TABLE `order__items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order__items`
--
ALTER TABLE `order__items`
  ADD CONSTRAINT `order__items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order__items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
