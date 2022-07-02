-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 10:25 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `order_product_quantity` int(11) DEFAULT NULL,
  `order_product_id` int(11) DEFAULT NULL,
  `buying_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `user_id`, `question_id`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 32, 1, 'szdsrfdgf', '0', '2022-03-31 23:31:17', '2022-04-10 00:28:23'),
(2, 32, 2, 'sdsafef', '1', '2022-03-31 23:38:17', '2022-03-31 23:38:17'),
(3, 2, 3, 'sdsfdsg', '0', '2022-04-06 09:21:01', '2022-04-06 09:32:40'),
(4, 2, 2, 'werwfre', '1', '2022-04-07 00:35:43', '2022-04-10 00:28:39'),
(5, 2, 3, 'zdsfgdhytfcvbv', '0', '2022-04-10 00:11:23', '2022-04-13 23:37:35'),
(6, 32, 4, 'dfsgfrgd', '0', '2022-06-19 06:39:29', '2022-06-19 06:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `link`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'awsed', 'http://efox.co.za/', NULL, '78651.jpg', '1', '2022-03-26 23:19:32', '2022-03-26 23:19:32'),
(4, 'aDFRGH', 'http://efox.co.za/', NULL, '44695.jpg', '1', '2022-03-26 23:19:50', '2022-03-26 23:19:50');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homa_page_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_number` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `parent_id`, `cat_name`, `homa_page_name`, `serial_number`, `slug`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 0, 'eewrt', 'Own Development', 1, 'eewrt', NULL, '1', '2022-03-26 03:40:43', '2022-06-06 21:05:07'),
(3, 0, 'dfe', 'lates', 2, 'dfe', NULL, '0', '2022-03-26 03:41:37', '2022-06-16 05:01:27'),
(4, 2, 'wewrew', NULL, 3, 'wewrew', NULL, '1', '2022-03-26 03:57:14', '2022-03-26 04:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `post_id`, `name`, `email`, `website`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Mohsin', 'mohsinsikder895@gmail.com', 'http://www.online.comawed', 'awersdtfgyuhjikok', '0', '2022-04-02 20:52:01', '2022-04-02 20:52:01'),
(2, 4, 'Mohsin Sikder', 'mohsinsikder895@gmail.com', 'http://www.online.com', 'sadfgyhujkol', '0', '2022-04-26 06:53:44', '2022-04-26 06:53:44'),
(3, 4, 'Mohsin Sikder', 'mohsinsikder895@gmail.com', 'ewrfewfe', 'SZAdwefw', '0', '2022-04-26 06:54:51', '2022-04-26 06:54:51'),
(4, 3, 'asrdefr', 'erfetf', 'erfet', 'ert', 'published', '2022-04-26 07:31:31', '2022-04-26 07:31:31'),
(5, 4, 'Mohsin Sikder', 'mohser8@gmail.com', 'www:http//online.com', 'asdaf', 'published', '2022-04-26 09:24:45', '2022-04-26 09:24:45'),
(6, 11, 'Mohsin', 'mohsinsikder895@gmail.com', 'http://www.online.com', 'der', 'published', '2022-04-26 10:23:47', '2022-04-26 10:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `user_id`, `cat_id`, `subcat_id`, `title`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 4, 'qwertyuio', 'qwertyuio', '<p>adfdghjhktef</p>', '7052.png', 'published', '2022-03-26 08:45:25', '2022-06-15 09:59:39'),
(2, 2, 2, 4, 'wqewrt', 'wqewrt', '<p>wertyuiop</p>', '82654.jpg', 'published', '2022-04-02 08:38:05', '2022-05-23 01:32:59'),
(3, 32, 2, 4, 'awe', 'awe', '<p><strong>awedwrf</strong></p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 391px; top: 37.6667px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>', '1723.jpg', 'published', '2022-04-02 19:49:38', '2022-06-16 04:56:05'),
(4, 32, 2, 4, 'mohsin sikder', 'mohsin-sikder', '<p>vhjkl;&#39; dfghyj5s63a</p>', '75808.jpg', 'published', '2022-04-24 02:10:54', '2022-05-23 01:59:49'),
(5, 32, 2, 4, 'rahat', 'rahat', '<p>vhjkl;&#39; fsdetreyubncxzw2</p>', '83083.jpg', 'published', '2022-04-24 02:10:54', '2022-05-23 02:00:33'),
(6, 2, 2, 4, 'adfrgthyjuk', 'adfrgthyjuk', '<p>wedrftgyhujikolp</p>', '3431.png', 'published', '2022-04-24 23:02:49', '2022-04-24 23:02:49'),
(7, 32, 2, 4, 'asdfdghjkh', 'asdfdghjkh', 'asdfg<strong>awsedfghjgfh</strong> fghyj<del datetime=\"2022-04-25T05:23:24+00:00\">fgfh</del>\r\n\r\n<blockquote>', '78459.png', 'New', '2022-04-24 23:24:12', '2022-04-24 23:24:12'),
(11, 2, 2, 4, 'Zasdfgrty', 'zasdfgrty', '<p>qewrtyui</p>', '73365.PNG', 'published', '2022-04-26 09:13:22', '2022-04-26 09:13:22'),
(12, 32, 2, 4, 'qweretyasdfgrthyujiop\'[]fghjklokpertyuiop', 'qweretyasdfgrthyujiopfghjklokpertyuiop', '<p>werdtertgghyjukilo;p&#39;[gy</p>', '5953.png', 'published', '2022-05-18 06:01:12', '2022-05-23 01:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post_comment_replies`
--

CREATE TABLE `blog_post_comment_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_post_comment_replies`
--

INSERT INTO `blog_post_comment_replies` (`id`, `comment_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 4, '<p>wseryu</p>', '2022-04-26 08:52:18', '2022-04-26 08:52:18'),
(2, 3, '<p>weer3</p>', '2022-04-26 08:57:18', '2022-04-26 08:57:18'),
(3, 4, NULL, '2022-04-26 09:21:49', '2022-04-26 09:21:49'),
(4, 5, '<p>AEWRT</p>', '2022-04-26 09:25:24', '2022-04-26 09:25:24'),
(5, 6, '<p>asertyuio</p>', '2022-04-26 10:25:35', '2022-04-26 10:25:35');

-- --------------------------------------------------------

--
-- Table structure for table `blog_sliders`
--

CREATE TABLE `blog_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_sliders`
--

INSERT INTO `blog_sliders` (`id`, `title`, `description`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(4, 'techshop', NULL, '39678.jpg', NULL, '1', '2022-04-01 09:55:25', '2022-04-01 09:55:25'),
(5, 'erfew', NULL, '89951.jpg', NULL, '1', '2022-04-01 09:55:46', '2022-04-01 09:55:46'),
(6, 'retfegt', NULL, '54624.jpg', NULL, '1', '2022-04-01 09:56:01', '2022-04-01 09:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `browse_histories`
--

CREATE TABLE `browse_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buying_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `referral_id` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `product_name`, `model_no`, `price`, `buying_price`, `quantity`, `referral_id`, `user_email`, `session_id`, `created_at`, `updated_at`) VALUES
(24, 3, 'SparkFun USB Host Shield', 'ARD-00005', '2156', NULL, 1, 'sikder99', '', 'v1fYo6qBxOQ7Hr8BoUtkyUdcIW389ITL5wfaPPN9', '2022-04-05 16:11:59', '2022-04-05 16:11:59'),
(25, 4, 'IRFZ44N MOSFET', 'SWD-00005', '2000', NULL, 1, NULL, '', 'v1fYo6qBxOQ7Hr8BoUtkyUdcIW389ITL5wfaPPN9', '2022-04-05 16:12:36', '2022-04-05 16:12:36'),
(99, 1, 'Zif socket (40 pin)', 'C&C-00035', '1000', '10000', 1, NULL, '', 'rfg7HuFoVVHGtSJyaatU79Uvrr7btouZkaabuAFk', '2022-05-12 06:22:05', '2022-05-12 06:22:05'),
(100, 7, 'styles shirt', 'SWD-00005', '2000', '1200', 1, NULL, '', 'NqqR4wERHAr8X47cSWVVRRAKNQZN2tSRMTYYiY3S', '2022-05-12 07:39:35', '2022-05-12 07:39:35'),
(132, 9, 'styles shirt', 'SWD-00005', '2000', '1200', 1, NULL, 'mohsinsikder895@gmail.com', '2LKXF83qIvlwbgpKWGOlNHCvlI2BknCbmA6KxPcW', '2022-06-26 11:04:13', '2022-06-26 11:04:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homa_page_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_number` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `cat_name`, `homa_page_name`, `serial_number`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Accessories', NULL, 2, 'accessories', NULL, NULL, '0', '2022-03-30 08:37:17', '2022-05-24 00:18:41'),
(2, 0, 'Basic Component', 'Daily Uses Component', 1, 'basic-component', NULL, NULL, '1', '2022-03-30 08:37:40', '2022-05-24 01:28:06'),
(3, 0, 'Development Board', 'Own Development', 13, 'development-board', NULL, NULL, '1', '2022-03-30 08:38:04', '2022-05-24 01:57:59'),
(4, 0, 'Display', NULL, 15, 'display', NULL, NULL, '1', '2022-03-30 08:38:27', '2022-03-30 08:38:27'),
(5, 0, 'General IC', NULL, 17, 'general-ic', NULL, NULL, '1', '2022-03-30 08:38:48', '2022-03-30 08:38:48'),
(6, 1, 'Connector', NULL, NULL, 'connector', NULL, NULL, '1', '2022-03-30 08:39:51', '2022-03-30 08:39:51'),
(7, 1, 'Cable', NULL, NULL, 'cable', NULL, NULL, '1', '2022-03-30 08:40:17', '2022-03-30 08:40:17'),
(8, 1, 'Computer Peripherals', NULL, NULL, 'computer-peripherals', NULL, NULL, '1', '2022-03-30 08:40:36', '2022-03-30 08:40:36'),
(9, 2, 'Optocoupler', NULL, NULL, 'optocoupler', NULL, NULL, '1', '2022-03-30 08:41:05', '2022-03-30 08:41:05'),
(11, 3, 'Arduino & Accessories', NULL, NULL, 'arduino-accessories', NULL, NULL, '1', '2022-03-30 08:42:00', '2022-03-30 08:42:00'),
(12, 3, 'Raspberry Pi & Accessories', NULL, NULL, 'raspberry-pi-accessories', NULL, NULL, '1', '2022-03-30 08:43:17', '2022-03-30 08:43:17');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_codes`
--

CREATE TABLE `coupon_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `use_time` int(11) DEFAULT NULL,
  `unlimited` int(11) DEFAULT NULL,
  `amount_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_number` int(11) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `purpose` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupon_codes`
--

INSERT INTO `coupon_codes` (`id`, `coupon_code`, `amount`, `use_time`, `unlimited`, `amount_type`, `order_number`, `expiry_date`, `purpose`, `status`, `created_at`, `updated_at`) VALUES
(2, 'sd12', 10, NULL, NULL, 'percentage', NULL, '2022-06-09', NULL, '1', '2022-05-30 05:09:44', '2022-05-31 00:18:08'),
(4, 'sd125', 1200, NULL, NULL, 'fixed', 1, '2022-06-29', 'sdfsefgredg', '1', '2022-05-30 05:34:58', '2022-06-26 10:28:53'),
(5, 'sd123h', 20, NULL, NULL, 'fixed', 2, '2022-07-28', 'sdfsefgredg', '1', '2022-05-31 01:01:39', '2022-06-26 10:26:21'),
(6, 'sd1256m', 10, NULL, 1, 'fixed', NULL, '2022-06-30', 'dsawerfdew', '1', '2022-06-26 10:50:20', '2022-06-26 10:50:20'),
(7, 'sd12590l', 10, 2, NULL, 'fixed', 1, '2022-07-08', 'adewsfregt', '1', '2022-06-26 10:51:53', '2022-06-26 10:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_purpose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_cost` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_start_date` datetime DEFAULT NULL,
  `order_number` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_purpose`, `event_cost`, `event_date`, `event_start_date`, `order_number`, `created_at`, `updated_at`) VALUES
(2, 'zasdawfsesf', 'mohsin', '123567', '2022-06-12', NULL, 5, '2022-06-09 00:01:10', '2022-06-26 10:28:53'),
(4, 'qwertyuilo', 'wdsfgth', '123567', '2022-06-01', NULL, 1, '2022-06-13 09:43:00', '2022-06-14 08:47:05');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `galery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `product_id`, `galery`, `created_at`, `updated_at`) VALUES
(1, 1, '946211648054883.jpg', '2022-03-23 11:01:23', '2022-03-23 11:01:23'),
(2, 1, '997041648054883.jpg', '2022-03-23 11:01:23', '2022-03-23 11:01:23'),
(3, 6, '594181648457566.jpg', '2022-03-28 02:52:46', '2022-03-28 02:52:46'),
(4, 6, '111251648457566.jpg', '2022-03-28 02:52:46', '2022-03-28 02:52:46'),
(5, 6, '132621648457566.jpg', '2022-03-28 02:52:46', '2022-03-28 02:52:46'),
(6, 5, '460361649262090.png', '2022-04-06 10:21:30', '2022-04-06 10:21:30');

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_logo` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dashboard_logo` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_favicon` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `email1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bkash` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rocket` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nogod` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flash_slider` int(11) NOT NULL DEFAULT 1,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_viewport` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `facebook_page` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twiter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_about_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privecy_policy` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `w_r` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t_c` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_pixel` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `less_selling_product` int(11) DEFAULT NULL,
  `best_selling_product` int(11) DEFAULT NULL,
  `database_show` int(11) NOT NULL DEFAULT 1,
  `expired_date` int(11) DEFAULT 1,
  `upcoming_expired_date` int(11) DEFAULT NULL,
  `discord` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `login_image`, `site_logo`, `blog_logo`, `dashboard_logo`, `favicon`, `blog_favicon`, `website_name`, `site_title`, `currency`, `commission`, `vat`, `quantity`, `email1`, `email2`, `address`, `mobile1`, `mobile2`, `bkash`, `rocket`, `nogod`, `flash_slider`, `meta_description`, `meta_keyword`, `meta_viewport`, `created_at`, `updated_at`, `facebook_page`, `facebook_group`, `twiter`, `instagram`, `youtube`, `linkdi`, `blog_about_us`, `privecy_policy`, `about_us`, `w_r`, `t_c`, `facebook_pixel`, `less_selling_product`, `best_selling_product`, `database_show`, `expired_date`, `upcoming_expired_date`, `discord`) VALUES
(1, '25401.png', '80694.png', '95131.png', '46484.png', '27788.png', '8955.png', 'Roboticsabc Shop', 'Roboticsabc shop', 'TK', '10', '7', 2, 'mohsinsikder895@gmail.com', 'mohsinsikder895@gmail.com', 'plashbari bazar', '01715486265', '01706125400', '01715486265', '01715486265', '01715486265', 2, 'erfegter', '\"fdsgfrgdtfhgf\"', 'rtgrgy', NULL, '2022-06-19 08:53:13', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 'https://www.linkedin.com/in/mohsin-sikder/', '<p><strong>Bangladesh</strong>, is a country in&nbsp;<a href=\"https://en.wikipedia.org/wiki/South_Asia\">South Asia</a>. It is the&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_countries_and_dependencies_by_population\">eighth-most populous country</a>&nbsp;in the world, with a population exceeding 163 million people in an area of either 148,460 square kilometres (57,320&nbsp;sq&nbsp;mi) or 147,570 square kilometres (56,980&nbsp;sq&nbsp;mi),<a href=\"https://en.wikipedia.org/wiki/Bangladesh#cite_note-bdarea-7\">[7]</a><a href=\"https://en.wikipedia.org/wiki/Bangladesh#cite_note-bbs-15\">[15]</a>&nbsp;making it one of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_countries_and_dependencies_by_population_density\">most densely populated countries</a>&nbsp;in the world. Bangladesh shares land borders with&nbsp;<a href=\"https://en.wikipedia.org/wiki/India\">India</a>&nbsp;to the west, north, and east, and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Myanmar\">Myanmar</a>&nbsp;to the southeast; to the south it has a coastline along the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bay_of_Bengal\">Bay of Bengal</a>. It is narrowly separated from&nbsp;<a href=\"https://en.wikipedia.org/wiki/Nepal\">Nepal</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bhutan\">Bhutan</a>&nbsp;by the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Siliguri_Corridor\">Siliguri Corridor</a>; and from&nbsp;<a href=\"https://en.wikipedia.org/wiki/China\">China</a>&nbsp;by 100&nbsp;km of the Indian state of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Sikkim\">Sikkim</a>&nbsp;in the north.<a href=\"https://en.wikipedia.org/wiki/Bangladesh#cite_note-16\">[16]</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dhaka\">Dhaka</a>, the capital and&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_cities_and_towns_in_Bangladesh\">largest city</a>, is the nation&#39;s economic, political, and cultural hub.&nbsp;<a href=\"https://en.wikipedia.org/wiki/Chittagong\">Chittagong</a>, the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Port_of_Chittagong\">largest seaport</a>, is the second-largest city. The official language is&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bengali_language\">Bengali</a>, one of the most eastern branches of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Indo-European_language_family\">Indo-European language family</a>.</p>', NULL, NULL, NULL, NULL, NULL, 20, 10, 1, 1, 11, 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `gift_cards`
--

CREATE TABLE `gift_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giftcard_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_number` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gift_cards`
--

INSERT INTO `gift_cards` (`id`, `name`, `duration`, `purchase_price`, `giftcard_value`, `order_number`, `image`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'QSWQE', '30', '390', '500', 1, '13182.png', 'jqury', '1', '2022-04-09 19:45:35', '2022-06-26 12:07:46'),
(3, 'dfghjrtyuj', '30', '390', '500', NULL, '10914.jpg', 'dfghjrtyuj', '1', '2022-04-11 20:00:12', '2022-04-11 20:00:25'),
(4, 'Mohsin', '32', '1235', '123', NULL, '75578.jpg', 'mohsin', '1', '2022-05-22 01:58:49', '2022-05-22 01:58:59'),
(5, 'Mohsin', '123', '1232', '500', NULL, '58674.png', 'mohsin', '1', '2022-05-22 02:06:06', '2022-05-22 02:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `gift_card_orders`
--

CREATE TABLE `gift_card_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giftcard_id` int(11) DEFAULT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transcation_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transcation_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giftcard_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_price` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expired_date` date DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'New',
  `admin_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gift_card_orders`
--

INSERT INTO `gift_card_orders` (`id`, `user_id`, `name`, `phone`, `email`, `giftcard_id`, `account_type`, `transcation_id`, `transcation_number`, `giftcard_value`, `purchase_price`, `duration`, `expired_date`, `status`, `admin_comment`, `user_comment`, `created_at`, `updated_at`) VALUES
(6, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Nagad', 'sdsegr', '1256576', '500', '390', '30', '2022-04-12', 'Completed', NULL, NULL, '2022-04-12 21:34:06', '2022-04-19 07:59:44'),
(7, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Rocket', 'sdsegr', '1256576', '500', '390', '30', '2022-05-13', 'New', NULL, NULL, '2022-04-12 21:57:08', '2022-04-12 21:57:08'),
(9, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Bkash', NULL, NULL, '500', '390', '30', '2022-05-19', 'New', NULL, NULL, '2022-04-19 07:39:15', '2022-04-19 07:39:15'),
(10, 32, 'QSWQE', '01715486265', 'mohsinsikder895@gmail.com', 2, 'Bkash', 'sdsegr', '1256576', '500', '390', '30', '2022-05-19', 'New', NULL, NULL, '2022-04-19 07:44:24', '2022-04-19 07:44:24'),
(11, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Bkash', 'sdsegr', '1256576', '500', '390', '30', '2022-05-19', 'Completed', NULL, NULL, '2022-04-19 07:52:03', '2022-04-19 08:03:09'),
(12, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Bkash', 'sdsegr', '1256576', '500', '390', '30', '2022-05-19', 'Completed', NULL, NULL, '2022-04-19 07:52:30', '2022-04-19 08:01:47'),
(13, 32, 'QSWQE', '01715486265', 'mohsinsikder895@gmail.com', 2, 'Nagad', 'sdsegr', '1256576', '500', '390', '30', '2022-05-19', 'New', NULL, NULL, '2022-04-19 07:54:36', '2022-04-19 07:54:36'),
(14, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Bkash', 'sdsegr', '1256576', '500', '390', '30', '2022-05-27', 'Completed', NULL, NULL, '2022-04-27 00:29:08', '2022-04-27 00:29:41'),
(15, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Bkash', 'sdsegr', '1256576', '500', '390', '30', '2022-05-27', 'Completed', NULL, NULL, '2022-04-27 00:37:05', '2022-04-27 00:37:28'),
(16, 32, 'QSWQE', '01715486265', 'mohsinsikder895@gmail.com', 2, 'Bkash', 'sdsegr', '1256576', '500', '390', '30', '2022-05-27', 'Completed', 'asasdad', 'isaduswaiudfesf', '2022-04-27 00:44:35', '2022-06-26 09:51:53'),
(17, 32, 'QSWQE', '01715486265', 'mohsinsikder895@gmail.com', 2, NULL, 'sdsegr', '1256576', '500', '390', '30', '2022-07-26', 'New', NULL, NULL, '2022-06-26 12:05:11', '2022-06-26 12:05:11'),
(18, 32, 'QSWQE', '01715486265', 'mohsinsikder895@gmail.com', 2, NULL, 'sdsegr', '1256576', '500', '390', '30', '2022-07-26', 'New', NULL, NULL, '2022-06-26 12:05:36', '2022-06-26 12:05:36'),
(19, 32, 'QSWQE', '01715486265', 'mohsinsikder895@gmail.com', 2, NULL, 'sdsegr', '1256576', '500', '390', '30', '2022-07-26', 'New', NULL, NULL, '2022-06-26 12:06:37', '2022-06-26 12:06:37'),
(20, 32, 'QSWQE', '01715486265', 'mohsinsikder895@gmail.com', 2, NULL, 'sdsegr', '1256576', '500', '390', '30', '2022-07-26', 'New', NULL, NULL, '2022-06-26 12:07:08', '2022-06-26 12:07:08'),
(21, 32, 'QSWQE', '01715486265', 'mohsinsikder895@gmail.com', 2, NULL, 'sdsegr', '1256576', '500', '390', '30', '2022-07-26', 'New', NULL, NULL, '2022-06-26 12:07:46', '2022-06-26 12:07:46');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2022_03_19_133359_create_sessions_table', 1),
(10, '2022_03_20_104640_create_categories_table', 2),
(11, '2022_03_20_133744_create_sub_categories_table', 2),
(12, '2022_03_20_133814_create_sliders_table', 2),
(13, '2022_03_20_133837_create_general_settings_table', 2),
(14, '2022_03_20_133854_create_products_table', 2),
(15, '2022_03_22_051222_create_banners_table', 3),
(16, '2022_03_23_001851_create_blog_categories_table', 4),
(17, '2022_03_23_002105_create_blog_sliders_table', 4),
(18, '2022_03_23_002126_create_blog_posts_table', 5),
(19, '2022_03_23_142644_create_galleries_table', 6),
(20, '2022_03_29_032507_create_carts_table', 7),
(21, '2022_03_29_135704_create_orders_table', 8),
(22, '2022_03_29_153113_create_order_products_table', 8),
(23, '2022_03_31_052454_create_order_statuses_table', 9),
(24, '2022_04_01_020053_create_questions_table', 10),
(25, '2022_04_01_020114_create_answers_table', 10),
(26, '2022_04_01_020144_create_reviw_ratings_table', 10),
(27, '2022_04_03_015130_create_blog_comments_table', 11),
(28, '2022_04_03_100248_create_shipping_charges_table', 12),
(29, '2022_04_04_045117_create_referalls_table', 13),
(30, '2022_04_07_052527_create_user_messages_table', 14),
(32, '2022_04_10_004547_create_gift_cards_table', 15),
(33, '2022_04_11_014309_create_withdraws_table', 16),
(34, '2022_04_11_072239_create_notifications_table', 17),
(35, '2022_04_12_172827_create_gift_card_orders_table', 18),
(36, '2022_04_14_055631_create_white_lists_table', 19),
(37, '2022_04_14_055744_create_wish_lists_table', 19),
(38, '2022_04_23_004210_create_accounts_table', 20),
(39, '2022_04_26_140907_create_blog_post_comment_replies_table', 21),
(40, '2022_04_27_074450_create_qties_table', 22),
(41, '2022_05_30_103108_create_coupon_codes_table', 23),
(42, '2022_06_02_105824_create_permission_tables', 24),
(43, '2022_06_09_050316_create_events_table', 25),
(44, '2022_06_15_102820_create_browse_histories_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(191) DEFAULT NULL,
  `order_id` int(191) DEFAULT NULL,
  `withdraw_id` int(191) DEFAULT NULL,
  `giftcard_id` int(11) DEFAULT NULL,
  `is_read` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `order_id`, `withdraw_id`, `giftcard_id`, `is_read`, `created_at`, `updated_at`) VALUES
(15, NULL, 10302, NULL, NULL, 1, '2022-04-25 20:06:58', '2022-04-27 11:52:48'),
(16, 49, NULL, NULL, NULL, 1, '2022-04-26 10:21:50', '2022-05-08 21:24:25'),
(17, NULL, 15273, NULL, NULL, 1, '2022-04-26 17:11:16', '2022-04-27 11:52:48'),
(18, 50, NULL, NULL, NULL, 1, '2022-04-26 19:19:30', '2022-05-08 21:24:25'),
(19, 51, NULL, NULL, NULL, 1, '2022-04-26 19:21:10', '2022-05-08 21:24:25'),
(20, 52, NULL, NULL, NULL, 1, '2022-04-26 19:22:34', '2022-05-08 21:24:25'),
(21, NULL, 13177, NULL, NULL, 1, '2022-04-26 19:31:05', '2022-04-27 11:52:48'),
(22, NULL, 13685, NULL, NULL, 1, '2022-04-26 19:31:35', '2022-04-27 11:52:48'),
(23, NULL, 15190, NULL, NULL, 1, '2022-04-26 19:32:54', '2022-04-27 11:52:48'),
(24, NULL, 15867, NULL, NULL, 1, '2022-04-26 19:37:14', '2022-04-27 11:52:48'),
(25, NULL, 14494, NULL, NULL, 1, '2022-04-26 19:44:57', '2022-04-27 11:52:48'),
(26, NULL, 12996, NULL, NULL, 1, '2022-04-26 19:56:38', '2022-04-27 11:52:48'),
(27, NULL, 16263, NULL, NULL, 1, '2022-04-26 20:01:12', '2022-04-27 11:52:48'),
(28, NULL, 12170, NULL, NULL, 1, '2022-04-26 20:07:14', '2022-04-27 11:52:48'),
(29, NULL, NULL, NULL, 14, 1, '2022-04-27 00:29:08', '2022-05-08 21:24:36'),
(30, NULL, 15869, NULL, NULL, 1, '2022-04-27 00:31:20', '2022-04-27 11:52:48'),
(31, NULL, NULL, NULL, 15, 1, '2022-04-27 00:37:05', '2022-05-08 21:24:36'),
(32, NULL, 13933, NULL, NULL, 1, '2022-04-27 00:38:05', '2022-04-27 11:52:48'),
(33, NULL, 12454, NULL, NULL, 1, '2022-04-27 00:41:37', '2022-04-27 11:52:48'),
(34, NULL, NULL, NULL, 16, 1, '2022-04-27 00:44:35', '2022-05-08 21:24:36'),
(35, NULL, 11621, NULL, NULL, 1, '2022-04-27 02:35:02', '2022-04-27 11:52:48'),
(36, NULL, 14525, NULL, NULL, 1, '2022-04-27 02:36:53', '2022-04-27 11:52:48'),
(37, NULL, 11704, NULL, NULL, 1, '2022-04-27 02:41:47', '2022-04-27 11:52:48'),
(38, NULL, 12126, NULL, NULL, 1, '2022-04-27 02:43:29', '2022-04-27 11:52:48'),
(39, NULL, 19036, NULL, NULL, 1, '2022-04-27 02:46:51', '2022-04-27 11:52:48'),
(40, NULL, 17545, NULL, NULL, 1, '2022-04-27 02:49:52', '2022-04-27 11:52:48'),
(41, NULL, 12234, NULL, NULL, 1, '2022-04-27 02:55:14', '2022-04-27 11:52:49'),
(42, NULL, 12031, NULL, NULL, 1, '2022-04-27 02:56:59', '2022-04-27 11:52:49'),
(43, NULL, 14613, NULL, NULL, 1, '2022-04-27 03:09:36', '2022-04-27 11:52:49'),
(44, NULL, 18517, NULL, NULL, 1, '2022-04-27 03:13:28', '2022-04-27 11:52:49'),
(45, NULL, 15114, NULL, NULL, 1, '2022-04-27 03:20:18', '2022-04-27 11:52:49'),
(46, NULL, 16118, NULL, NULL, 1, '2022-04-27 03:26:27', '2022-04-27 11:52:49'),
(47, NULL, 15346, NULL, NULL, 1, '2022-04-27 03:28:41', '2022-04-27 11:52:49'),
(48, NULL, 12043, NULL, NULL, 1, '2022-04-27 03:31:13', '2022-04-27 11:52:49'),
(49, NULL, 14948, NULL, NULL, 1, '2022-04-27 03:39:09', '2022-04-27 11:52:49'),
(50, NULL, 11945, NULL, NULL, 1, '2022-04-27 03:45:01', '2022-04-27 11:52:49'),
(51, NULL, 12340, NULL, NULL, 1, '2022-04-27 03:48:12', '2022-04-27 11:52:49'),
(52, NULL, 16669, NULL, NULL, 1, '2022-04-27 03:52:34', '2022-04-27 11:52:49'),
(53, NULL, 15417, NULL, NULL, 1, '2022-04-27 03:55:15', '2022-04-27 11:52:49'),
(54, NULL, 10257, NULL, NULL, 1, '2022-04-27 04:10:26', '2022-04-27 11:52:49'),
(55, NULL, 12309, NULL, NULL, 1, '2022-04-27 19:44:13', '2022-05-08 21:24:30'),
(56, NULL, 17514, NULL, NULL, 1, '2022-04-27 19:47:39', '2022-05-08 21:24:30'),
(57, NULL, 11176, NULL, NULL, 1, '2022-04-28 02:21:45', '2022-05-08 21:24:30'),
(58, NULL, 10425, NULL, NULL, 1, '2022-04-28 02:25:15', '2022-05-08 21:24:30'),
(59, NULL, 12170, NULL, NULL, 1, '2022-04-28 02:49:54', '2022-05-08 21:24:30'),
(60, NULL, 17962, NULL, NULL, 1, '2022-05-09 04:58:30', '2022-05-10 20:55:17'),
(61, 53, NULL, NULL, NULL, 1, '2022-05-15 03:15:30', '2022-05-26 04:12:48'),
(62, NULL, 14335, NULL, NULL, 0, '2022-05-30 03:00:06', '2022-05-30 03:00:06'),
(63, NULL, 18806, NULL, NULL, 0, '2022-05-31 01:12:24', '2022-05-31 01:12:24'),
(64, NULL, 15359, NULL, NULL, 0, '2022-05-31 02:06:39', '2022-05-31 02:06:39'),
(65, NULL, 11018, NULL, NULL, 0, '2022-05-31 02:10:32', '2022-05-31 02:10:32'),
(66, NULL, 18522, NULL, NULL, 0, '2022-05-31 23:02:06', '2022-05-31 23:02:06'),
(67, NULL, 16988, NULL, NULL, 0, '2022-05-31 23:02:55', '2022-05-31 23:02:55'),
(68, NULL, 13298, NULL, NULL, 0, '2022-05-31 23:07:41', '2022-05-31 23:07:41'),
(69, NULL, 11964, NULL, NULL, 0, '2022-05-31 23:13:14', '2022-05-31 23:13:14'),
(70, NULL, 15421, NULL, NULL, 0, '2022-05-31 23:14:32', '2022-05-31 23:14:32'),
(71, NULL, 12880, NULL, NULL, 0, '2022-05-31 23:18:32', '2022-05-31 23:18:32'),
(72, NULL, 12244, NULL, NULL, 0, '2022-05-31 23:20:48', '2022-05-31 23:20:48'),
(73, NULL, 17595, NULL, NULL, 0, '2022-05-31 23:23:08', '2022-05-31 23:23:08'),
(74, NULL, 16228, NULL, NULL, 0, '2022-05-31 23:24:55', '2022-05-31 23:24:55'),
(75, NULL, 13140, NULL, NULL, 0, '2022-05-31 23:26:57', '2022-05-31 23:26:57'),
(76, NULL, 12540, NULL, NULL, 0, '2022-05-31 23:29:09', '2022-05-31 23:29:09'),
(77, NULL, 13949, NULL, NULL, 0, '2022-05-31 23:32:46', '2022-05-31 23:32:46'),
(78, NULL, 12231, NULL, NULL, 0, '2022-06-08 00:57:38', '2022-06-08 00:57:38'),
(79, NULL, 18217, NULL, NULL, 0, '2022-06-08 00:57:38', '2022-06-08 00:57:38'),
(80, NULL, 10402, NULL, NULL, 0, '2022-06-08 01:00:32', '2022-06-08 01:00:32'),
(81, NULL, 15280, NULL, NULL, 0, '2022-06-08 01:00:32', '2022-06-08 01:00:32'),
(82, NULL, 18966, NULL, NULL, 0, '2022-06-08 01:10:05', '2022-06-08 01:10:05'),
(83, NULL, 13446, NULL, NULL, 0, '2022-06-08 01:10:28', '2022-06-08 01:10:28'),
(84, NULL, 15137, NULL, NULL, 0, '2022-06-08 01:29:10', '2022-06-08 01:29:10'),
(85, NULL, 17703, NULL, NULL, 0, '2022-06-08 01:32:31', '2022-06-08 01:32:31'),
(86, NULL, 11124, NULL, NULL, 0, '2022-06-08 01:36:06', '2022-06-08 01:36:06'),
(87, NULL, 10850, NULL, NULL, 0, '2022-06-13 10:00:21', '2022-06-13 10:00:21'),
(88, NULL, 11129, NULL, NULL, 0, '2022-06-14 04:27:49', '2022-06-14 04:27:49'),
(89, NULL, 17832, NULL, NULL, 0, '2022-06-14 08:31:33', '2022-06-14 08:31:33'),
(90, NULL, 12699, NULL, NULL, 0, '2022-06-14 08:39:10', '2022-06-14 08:39:10'),
(91, NULL, 18562, NULL, NULL, 0, '2022-06-14 08:40:44', '2022-06-14 08:40:44'),
(92, NULL, 14518, NULL, NULL, 0, '2022-06-14 08:41:22', '2022-06-14 08:41:22'),
(93, NULL, 19315, NULL, NULL, 0, '2022-06-14 08:42:03', '2022-06-14 08:42:03'),
(94, NULL, 16744, NULL, NULL, 0, '2022-06-14 08:42:25', '2022-06-14 08:42:25'),
(95, NULL, 15810, NULL, NULL, 0, '2022-06-14 08:44:26', '2022-06-14 08:44:26'),
(96, NULL, 19746, NULL, NULL, 0, '2022-06-14 08:45:42', '2022-06-14 08:45:42'),
(97, NULL, 19942, NULL, NULL, 0, '2022-06-14 08:46:13', '2022-06-14 08:46:13'),
(98, NULL, 10557, NULL, NULL, 0, '2022-06-14 08:47:04', '2022-06-14 08:47:04'),
(99, NULL, 11709, NULL, NULL, 0, '2022-06-14 08:47:28', '2022-06-14 08:47:28'),
(100, NULL, 10350, NULL, NULL, 0, '2022-06-14 09:13:33', '2022-06-14 09:13:33'),
(101, NULL, 13249, NULL, NULL, 0, '2022-06-14 09:19:10', '2022-06-14 09:19:10'),
(102, NULL, 11527, NULL, NULL, 0, '2022-06-14 09:20:53', '2022-06-14 09:20:53'),
(103, NULL, 12078, NULL, NULL, 0, '2022-06-14 09:22:13', '2022-06-14 09:22:13'),
(104, NULL, 13671, NULL, NULL, 0, '2022-06-14 09:24:02', '2022-06-14 09:24:02'),
(105, NULL, 16472, NULL, NULL, 0, '2022-06-14 09:24:55', '2022-06-14 09:24:55'),
(106, NULL, 16241, NULL, NULL, 0, '2022-06-26 10:05:55', '2022-06-26 10:05:55'),
(107, NULL, 16571, NULL, NULL, 0, '2022-06-26 10:26:21', '2022-06-26 10:26:21'),
(108, NULL, 16602, NULL, NULL, 0, '2022-06-26 10:28:53', '2022-06-26 10:28:53'),
(109, NULL, NULL, NULL, 17, 0, '2022-06-26 12:05:11', '2022-06-26 12:05:11'),
(110, NULL, NULL, NULL, 18, 0, '2022-06-26 12:05:36', '2022-06-26 12:05:36'),
(111, NULL, NULL, NULL, 19, 0, '2022-06-26 12:06:37', '2022-06-26 12:06:37'),
(112, NULL, NULL, NULL, 20, 0, '2022-06-26 12:07:08', '2022-06-26 12:07:08'),
(113, NULL, NULL, NULL, 21, 0, '2022-06-26 12:07:46', '2022-06-26 12:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `grand_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` int(11) DEFAULT NULL,
  `subtotal` double DEFAULT NULL,
  `total_buying_price` double DEFAULT NULL,
  `vat` double DEFAULT NULL,
  `payable` int(11) DEFAULT NULL,
  `order_status` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_date` timestamp NULL DEFAULT current_timestamp(),
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `giftcard_amount` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `referral_id` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_update_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_id`, `event_id`, `user_email`, `name`, `address1`, `address2`, `city`, `postcode`, `country`, `phone`, `delivery`, `grand_total`, `shipping`, `subtotal`, `total_buying_price`, `vat`, `payable`, `order_status`, `delivery_date`, `order_date`, `giftcard_amount`, `status`, `payment_method`, `created_at`, `updated_at`, `referral_id`, `amount`, `amount_type`, `coupon_code`, `admin_comment`, `user_comment`, `last_update_date`) VALUES
(1, '32', 17127, NULL, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2200', 200, 2000, 1800, NULL, NULL, 'new', '2022-04-26 18:00:00', '2022-06-10', '0', 'Cancelled', '2', '2021-12-18 21:46:55', '2022-04-28 01:02:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '44', 13641, NULL, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '1200', 200, 1000, 800, NULL, NULL, 'new', '2022-04-18 17:24:49', '2022-06-11', '0', 'New', '2', '2022-05-10 22:01:31', '2022-04-18 22:01:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '44', 17881, NULL, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2200', 200, 2000, 1800, NULL, NULL, 'new', '2022-04-19 18:00:00', '2022-06-11', '0', 'Pending', '2', '2021-10-18 22:03:07', '2022-04-19 02:28:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '32', 18405, NULL, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '1200', 200, 1000, 800, NULL, NULL, 'new', '2022-04-28 18:00:00', '2022-06-11', '0', 'Completed', '2', '2021-09-19 09:19:01', '2022-04-28 01:02:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '32', 17696, NULL, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2340', 200, 2000, 1800, 140, NULL, 'new', '2022-04-19 18:00:00', '2022-05-28', '0', 'Delivered', '2', '2021-08-19 17:51:25', '2022-04-28 01:07:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '32', 17894, NULL, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2506.92', 200, 2156, 2000, 150.92, NULL, 'new', '2022-04-26 18:00:00', '2022-05-29', '0', 'Shipping', '2', '2021-08-19 08:09:11', '2022-04-28 01:01:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-04 17:23:08', '2022-06-07', NULL, NULL, NULL, '2022-04-15 13:20:01', '2021-04-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-18 17:23:12', '2022-06-02', NULL, NULL, NULL, '2022-05-15 13:20:01', '2021-05-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-11 17:23:15', '2022-06-02', NULL, NULL, NULL, '2021-06-18 13:20:01', '2021-06-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-04 17:23:18', '2022-06-07', NULL, NULL, NULL, '2022-06-15 13:20:01', '2021-07-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-12 17:23:25', '2022-06-02', NULL, NULL, NULL, '2022-06-15 13:20:01', '2021-08-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-05 17:23:28', '2022-05-30', NULL, NULL, NULL, '2022-06-15 13:20:01', '2021-09-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-04 17:23:30', '2022-05-26', NULL, 'Completed', NULL, '2022-06-15 13:20:01', '2021-10-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-19 17:23:36', '2022-06-06', NULL, NULL, NULL, '2022-06-15 13:20:01', '2021-11-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-11 17:24:23', '2022-05-31', NULL, NULL, NULL, '2022-06-15 13:20:01', '2021-12-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-17 17:24:19', '2022-06-08', NULL, 'Completed', NULL, '2022-01-15 13:20:01', '2022-01-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-02 17:24:15', '2022-06-13', NULL, NULL, NULL, '2022-02-15 13:20:01', '2022-02-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-18 17:24:12', '2022-06-07', NULL, NULL, NULL, '2022-03-15 13:20:01', '2022-03-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-04 17:24:10', '2022-06-07', NULL, NULL, NULL, '2022-04-15 13:20:01', '2022-04-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '11', 1789, NULL, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-25 17:24:06', '2022-06-08', NULL, NULL, NULL, '2022-03-15 13:20:01', '2021-03-14 13:20:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, '12', 1123, NULL, 'rahem@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '01234567890', 'flat', '2000', 200, 1800, 1750, 150, NULL, NULL, '2022-04-11 17:23:39', '2022-06-09', NULL, NULL, NULL, '2022-01-05 13:55:20', '2022-01-05 13:55:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '12', 1123, NULL, 'rahem@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '01234567890', 'flat', '2000', 200, 1800, 1750, 150, NULL, NULL, '2022-04-04 17:23:42', '2022-06-10', NULL, NULL, NULL, '2022-01-05 13:55:20', '2022-06-12 13:55:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, '12', 1123, NULL, 'rahem@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '01234567890', 'flat', '2000', 200, 1800, 1750, 150, NULL, NULL, '2022-04-04 17:23:45', '2022-06-10', NULL, NULL, NULL, '2022-06-05 13:55:20', '2021-12-05 13:55:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '48', 11055, NULL, 'rahem@gmail.com', 'rahim', 'dhaka', NULL, 'dhaka', '1214', 'Bangladesh', '01836999981', 'flat', '248.15', 200, 45, 500, 3.15, NULL, 'new', '2022-04-26 18:00:00', '2022-06-07', '0', 'Processing', '2', '2022-04-26 12:44:06', '2022-06-26 06:32:37', NULL, NULL, NULL, NULL, 'aSWADERT', NULL, '2022-06-26 12:32:37'),
(25, '48', 17651, NULL, 'rahem@gmail.com', 'rahim', 'dhaka', NULL, 'dhaka', '1214', 'Bangladesh', '01836999981', 'flat', '2340', 200, 2000, 1600, 140, NULL, 'new', '2022-04-28 18:00:00', '2022-06-07', '0', 'Packaging', '2', '2022-04-26 12:46:45', '2022-04-28 01:00:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '32', 12309, NULL, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2340', 200, 2000, 1800, 140, NULL, 'new', '2022-04-28 18:00:00', '2022-06-05', '0', 'Delivered', '2', '2022-04-27 19:44:12', '2022-04-28 01:38:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '32', 17514, NULL, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2340', 200, 2000, 1800, 140, NULL, 'new', '2022-04-26 18:00:00', '2022-06-05', '0', 'New', '2', '2022-04-27 19:47:39', '2022-04-28 01:39:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, '32', 11176, NULL, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2340', 200, 2000, 1800, 140, NULL, 'new', '2022-04-28 08:21:45', '2022-06-05', '0', 'Cancelled', '2', '2022-04-28 02:21:45', '2022-04-28 03:27:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, '32', 10425, NULL, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '209.63', 200, 9, 2, 0.63, NULL, 'new', '2022-04-28 08:25:15', '2022-06-05', '0', 'Cancelled', '2', '2022-04-28 02:25:15', '2022-04-28 03:26:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '32', 12170, NULL, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2340', 200, 2000, 1800, 140, NULL, 'new', '2022-04-28 08:49:53', '2022-06-03', '0', 'Cancelled', '2', '2022-04-28 02:49:53', '2022-05-21 21:20:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, '32', 17962, NULL, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '4489.63', 200, 4009, 1200, 280.63, NULL, 'New', '2022-05-09 10:58:29', '2022-06-02', '0', 'New', NULL, '2022-05-09 04:58:29', '2022-05-09 04:58:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, '32', 14335, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '12671.92', 300, 11656, 1200, 815.92, NULL, 'New', '2022-05-30 09:00:06', '2022-06-01', '0', 'New', NULL, '2022-05-30 03:00:06', '2022-05-30 03:00:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, '32', 18806, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2376.228', 300, 1940.4, 2000, 135.828, NULL, 'New', '2022-05-31 07:12:24', '2022-06-02', '0', 'New', NULL, '2022-05-31 01:12:24', '2022-05-31 01:12:24', NULL, '10', 'percentage', 'sd12', NULL, NULL, NULL),
(34, '32', 15359, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2226', 300, 1800, 1200, 126, NULL, 'New', '2022-05-31 08:06:39', '2022-06-03', '0', 'New', NULL, '2022-05-31 02:06:39', '2022-05-31 02:06:39', NULL, '10', 'percentage', 'sd12', NULL, NULL, NULL),
(35, '32', 11018, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '1322.92', 300, 956, 2000, 66.92, NULL, 'New', '2022-05-31 08:10:32', '2022-06-04', '0', 'New', NULL, '2022-05-31 02:10:32', '2022-05-31 02:10:32', NULL, '1200', 'fixed', 'sd125', NULL, NULL, NULL),
(36, '32', 18522, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2449.63', 300, 2009, 1200, 140.63, NULL, 'New', '2022-06-01 05:02:06', '2022-06-05', '0', 'New', NULL, '2022-05-31 23:02:06', '2022-05-31 23:02:06', NULL, '0', '0', '0', NULL, NULL, NULL),
(37, '32', 16988, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2449.63', 300, 2009, 1200, 140.63, NULL, 'New', '2022-06-01 05:02:55', '2022-06-02', '0', 'New', NULL, '2022-05-31 23:02:55', '2022-05-31 23:02:55', NULL, '0', '0', '0', NULL, NULL, NULL),
(38, '32', 13298, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2449.63', 300, 2009, 1200, 140.63, NULL, 'New', '2022-06-01 05:07:41', '2022-06-03', '0', 'New', NULL, '2022-05-31 23:07:41', '2022-05-31 23:07:41', NULL, '0', '0', '0', NULL, NULL, NULL),
(39, '32', 11964, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2449.63', 300, 2009, 1200, 140.63, NULL, 'New', '2022-06-01 05:13:14', '2022-06-03', '0', 'New', NULL, '2022-05-31 23:13:14', '2022-05-31 23:13:14', NULL, '0', '0', '0', NULL, NULL, NULL),
(40, '32', 15421, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2449.63', 300, 2009, 1200, 140.63, NULL, 'New', '2022-06-01 05:14:32', '2022-06-03', '0', 'New', NULL, '2022-05-31 23:14:32', '2022-05-31 23:14:32', NULL, '0', '0', '0', NULL, NULL, NULL),
(41, '32', 12880, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2449.63', 300, 2009, 1200, 140.63, NULL, 'New', '2022-06-01 05:18:32', '2022-05-25', '0', 'New', NULL, '2022-05-31 23:18:32', '2022-05-31 23:18:32', NULL, '0', '0', '0', NULL, NULL, NULL),
(42, '32', 12244, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2449.63', 300, 2009, 1200, 140.63, NULL, 'New', '2022-06-01 05:20:48', '2022-06-12', '0', 'New', NULL, '2022-05-31 23:20:48', '2022-05-31 23:20:48', NULL, '0', '0', '0', NULL, NULL, NULL),
(43, '32', 17595, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2449.63', 300, 2009, 1200, 140.63, NULL, 'New', '2022-06-01 05:23:08', '2022-05-31', '0', 'New', NULL, '2022-05-31 23:23:08', '2022-05-31 23:23:08', NULL, '0', '0', '0', NULL, NULL, NULL),
(44, '32', 16228, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2449.63', 300, 2009, 1200, 140.63, NULL, 'New', '2022-06-01 05:24:55', '2022-05-22', '0', 'New', NULL, '2022-05-31 23:24:55', '2022-05-31 23:24:55', NULL, '0', '0', '0', NULL, NULL, NULL),
(45, '32', 13140, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2449.63', 300, 2009, 1200, 140.63, NULL, 'New', '2022-06-01 05:26:57', '2022-05-23', '0', 'New', NULL, '2022-05-31 23:26:57', '2022-05-31 23:26:57', NULL, '0', '0', '0', NULL, NULL, NULL),
(46, '32', 12540, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '4580', 300, 4000, 2400, 280, NULL, 'New', '2022-06-01 05:29:09', '2022-06-07', '0', 'New', NULL, '2022-05-31 23:29:09', '2022-05-31 23:29:09', NULL, '0', '0', '0', NULL, NULL, NULL),
(47, '32', 13949, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '4580', 300, 4000, 2400, 280, NULL, 'New', '2022-06-01 05:32:46', '2022-06-09', '0', 'Cancelled', NULL, '2022-05-31 23:32:46', '2022-06-05 00:27:52', NULL, '0', '0', '0', NULL, NULL, NULL),
(48, '32', 12231, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2449.63', 300, 2009, 2, 140.63, NULL, 'New', '2022-06-08 06:57:38', '2022-05-24', '0', 'New', NULL, '2022-06-08 00:57:38', '2022-06-08 00:57:38', NULL, '0', '0', '0', NULL, NULL, NULL),
(49, '32', 18217, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2449.63', 300, 2009, 2, 140.63, NULL, 'New', '2022-06-08 06:57:38', '2022-05-25', '0', 'New', NULL, '2022-06-08 00:57:38', '2022-06-08 00:57:38', NULL, '0', '0', '0', NULL, NULL, NULL),
(50, '32', 10402, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '309.63', 300, 9, 2, 0.63, NULL, 'New', '2022-06-08 07:00:32', '2022-05-31', '0', 'New', NULL, '2022-06-08 01:00:32', '2022-06-08 01:00:32', NULL, '0', '0', '0', NULL, NULL, NULL),
(51, '32', 15280, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '309.63', 300, 9, 2, 0.63, NULL, 'New', '2022-06-08 07:00:32', '2022-06-08', '0', 'New', NULL, '2022-06-08 01:00:32', '2022-06-08 01:00:32', NULL, '0', '0', '0', NULL, NULL, NULL),
(52, '32', 18966, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2606.92', 300, 2156, 2000, 150.92, NULL, 'New', '2022-06-08 07:10:04', '2022-05-26', '0', 'New', NULL, '2022-06-08 01:10:04', '2022-06-08 01:10:04', NULL, '0', '0', '0', NULL, NULL, NULL),
(53, '32', 13446, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2606.92', 300, 2156, 2000, 150.92, NULL, 'New', '2022-06-08 07:10:28', '2022-05-26', '0', 'New', NULL, '2022-06-08 01:10:28', '2022-06-08 01:10:28', NULL, '0', '0', '0', NULL, NULL, NULL),
(54, '32', 15137, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2440', 300, 2000, 1200, 140, NULL, 'New', '2022-06-08 07:29:10', '2022-06-07', '0', 'New', NULL, '2022-06-08 01:29:10', '2022-06-08 01:29:10', NULL, '0', '0', '0', NULL, NULL, NULL),
(55, '32', 17703, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '309.63', 300, 9, 2, 0.63, NULL, 'New', '2022-06-08 07:32:31', '2022-05-24', '0', 'New', NULL, '2022-06-08 01:32:31', '2022-06-08 01:32:31', NULL, '0', '0', '0', NULL, NULL, NULL),
(56, '32', 11124, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '309.63', 300, 9, 2, 0.63, NULL, 'New', '2022-06-08 07:36:06', '2022-05-27', '0', 'New', NULL, '2021-06-29 01:36:06', '2022-06-08 01:36:06', NULL, '0', '0', '0', NULL, NULL, NULL),
(57, '32', 10850, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2440', 300, 2000, 1200, 140, NULL, 'New', '2022-06-13 10:00:21', '2022-06-11', '0', 'New', NULL, '2022-06-13 10:00:21', '2022-06-13 10:00:21', NULL, '0', '0', '0', NULL, NULL, NULL),
(58, '32', 11129, NULL, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2440', 300, 2000, 1800, 140, NULL, 'New', '2022-06-14 04:27:49', '2022-06-14', '0', 'New', NULL, '2022-06-14 04:27:49', '2022-06-14 04:27:49', NULL, '0', '0', '0', NULL, NULL, NULL),
(59, '32', 17832, 4, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '309.63', 300, 9, 2, 0.63, NULL, 'New', '2022-06-14 08:31:33', '2022-06-14', '0', 'New', NULL, '2022-06-14 08:31:33', '2022-06-14 08:31:33', NULL, '0', '0', '0', NULL, NULL, NULL),
(60, '32', 12699, 4, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2606.92', 300, 2156, 2000, 150.92, NULL, 'New', '2022-06-14 08:39:10', '2022-06-14', '0', 'New', NULL, '2022-06-14 08:39:10', '2022-06-14 08:39:10', NULL, '0', '0', '0', NULL, NULL, NULL),
(61, '32', 18562, 4, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2606.92', 300, 2156, 2000, 150.92, NULL, 'New', '2022-06-14 08:40:44', '2022-06-14', '0', 'New', NULL, '2022-06-14 08:40:44', '2022-06-14 08:40:44', NULL, '0', '0', '0', NULL, NULL, NULL),
(62, '32', 14518, 4, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2606.92', 300, 2156, 2000, 150.92, NULL, 'New', '2022-06-14 08:41:22', '2022-06-14', '0', 'New', NULL, '2022-06-14 08:41:22', '2022-06-14 08:41:22', NULL, '0', '0', '0', NULL, NULL, NULL),
(63, '32', 19315, 4, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2606.92', 300, 2156, 2000, 150.92, NULL, 'New', '2022-06-14 08:42:03', '2022-06-14', '0', 'New', NULL, '2022-06-14 08:42:03', '2022-06-14 08:42:03', NULL, '0', '0', '0', NULL, NULL, NULL),
(64, '32', 16744, 4, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2606.92', 300, 2156, 2000, 150.92, NULL, 'New', '2022-06-14 08:42:25', '2022-06-14', '0', 'New', NULL, '2022-06-14 08:42:25', '2022-06-14 08:42:25', NULL, '0', '0', '0', NULL, NULL, NULL),
(65, '32', 15810, 4, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2606.92', 300, 2156, 2000, 150.92, NULL, 'New', '2022-06-14 08:44:26', '2022-06-14', '0', 'New', NULL, '2022-06-14 08:44:26', '2022-06-14 08:44:26', NULL, '0', '0', '0', NULL, NULL, NULL),
(66, '32', 19746, 4, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2606.92', 300, 2156, 2000, 150.92, NULL, 'New', '2022-06-14 08:45:42', '2022-06-14', '0', 'New', NULL, '2022-06-14 08:45:42', '2022-06-14 08:45:42', NULL, '0', '0', '0', NULL, NULL, NULL),
(67, '32', 19942, 4, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2606.92', 300, 2156, 2000, 150.92, NULL, 'New', '2022-06-14 08:46:13', '2022-06-14', '0', 'New', NULL, '2022-06-14 08:46:13', '2022-06-14 08:46:13', NULL, '0', '0', '0', NULL, NULL, NULL),
(68, '32', 10557, 4, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2606.92', 300, 2156, 2000, 150.92, NULL, 'New', '2022-06-14 08:47:04', '2022-06-14', '0', 'New', NULL, '2022-06-14 08:47:04', '2022-06-14 08:47:04', NULL, '0', '0', '0', NULL, NULL, NULL),
(69, '32', 11709, 4, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2606.92', 300, 2156, 2000, 150.92, NULL, 'New', '2022-06-14 08:47:28', '2022-06-14', '0', 'New', NULL, '2022-06-14 08:47:28', '2022-06-14 08:47:28', NULL, '0', '0', '0', NULL, NULL, NULL),
(70, '32', 10350, 4, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2440', 300, 2000, 1200, 140, NULL, 'New', '2022-06-14 09:13:33', '2022-06-14', '0', 'New', NULL, '2022-06-14 09:13:33', '2022-06-14 09:13:33', NULL, '0', '0', '0', NULL, NULL, NULL),
(71, '32', 13249, 4, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2440', 300, 2000, 1200, 140, NULL, 'New', '2022-06-14 09:19:10', '2022-06-14', '0', 'New', NULL, '2022-06-14 09:19:10', '2022-06-14 09:19:10', NULL, '0', '0', '0', NULL, NULL, NULL),
(72, '32', 11527, 2, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '309.63', 300, 9, 2, 0.63, NULL, 'New', '2022-06-14 09:20:53', '2022-06-14', '0', 'New', NULL, '2022-06-14 09:20:53', '2022-06-14 09:20:53', NULL, '0', '0', '0', NULL, NULL, NULL),
(73, '32', 12078, 2, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '309.63', 300, 9, 2, 0.63, NULL, 'New', '2022-06-14 09:22:13', '2022-06-14', '0', 'New', NULL, '2022-06-14 09:22:13', '2022-06-14 09:22:13', NULL, '0', '0', '0', NULL, NULL, NULL),
(74, '32', 13671, 2, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2440', 300, 2000, 1200, 140, NULL, 'New', '2022-06-29 18:00:00', '2022-06-14', '0', 'New', NULL, '2022-06-14 09:24:02', '2022-06-26 06:04:23', NULL, '0', '0', '0', 'wqique3u', 'iqweqw3eii3qw', '2022-06-26 12:04:23'),
(75, '32', 16472, 2, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '309.63', 300, 9, 2, 0.63, NULL, 'New', '2022-06-28 18:00:00', '2022-06-14', '0', 'Packaging', NULL, '2022-06-14 09:24:55', '2022-06-26 06:36:27', NULL, '0', '0', '0', 'emergrncy', 'asjakjdkspadpd', '2022-06-26 12:36:27'),
(76, '32', 18818, 2, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2418.6', 300, 1980, 1200, 138.6, NULL, 'New', '2022-06-26 10:04:53', '2022-06-26', '0', 'New', NULL, '2022-06-26 10:04:53', '2022-06-26 10:04:53', NULL, '20', 'fixed', 'sd123h', NULL, NULL, NULL),
(77, '32', 16241, 2, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2418.6', 300, 1980, 1200, 138.6, NULL, 'New', '2022-06-26 10:05:55', '2022-06-26', '0', 'New', NULL, '2022-06-26 10:05:55', '2022-06-26 10:05:55', NULL, '20', 'fixed', 'sd123h', NULL, NULL, NULL),
(78, '32', 16571, 2, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2418.6', 300, 1980, 1200, 138.6, NULL, 'New', '2022-06-26 10:26:21', '2022-06-26', '0', 'New', NULL, '2022-06-26 10:26:21', '2022-06-26 10:26:21', NULL, '20', 'fixed', 'sd123h', NULL, NULL, NULL),
(79, '32', 16602, 2, 'mohsinsikder895@gmail.com', 'Yeamin', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'express', '2868', 300, 2400, 1800, 168, NULL, 'New', '2022-06-26 10:28:53', '2022-06-26', '0', 'New', NULL, '2022-06-26 10:28:53', '2022-06-26 10:28:53', NULL, '1200', 'fixed', 'sd125', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `randomOrder_id` int(191) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `model_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buying_price` double DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) DEFAULT NULL,
  `referral_id` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `randomOrder_id`, `user_id`, `product_id`, `model_no`, `product_name`, `buying_price`, `price`, `quantity`, `total_price`, `referral_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 32, 4, 'SWD-00005', 'IRFZ44N MOSFET12', NULL, 2000.00, 1, NULL, NULL, '2022-04-18 21:46:55', '2022-04-18 21:46:55'),
(2, 2, NULL, 44, 6, 'C&C-00008', 'food', NULL, 1000.00, 3, NULL, 'sikder99', '2022-04-18 22:01:31', '2022-04-18 22:01:31'),
(3, 3, NULL, 44, 4, 'SWD-00005', 'IRFZ44N MOSFET12', NULL, 2000.00, 2, NULL, 'sikder99', '2022-04-18 22:03:07', '2022-04-18 22:03:07'),
(4, 4, NULL, 32, 6, 'C&C-00008', 'food', NULL, 1000.00, 1, NULL, '0', '2022-04-19 09:19:01', '2022-04-19 09:19:01'),
(5, 5, NULL, 32, 4, 'SWD-00005', 'IRFZ44N MOSFET12', NULL, 2000.00, 1, NULL, '0', '2022-04-19 17:51:25', '2022-04-19 17:51:25'),
(6, 6, NULL, 32, 3, 'ARD-00005', 'SparkFun USB Host Shield', 2000, 2156.00, 1, NULL, NULL, '2022-04-23 17:53:02', '2022-04-23 17:53:02'),
(7, 7, NULL, 32, 6, 'C&C-00008', 'food', 800, 1000.00, 1, NULL, NULL, '2022-04-25 20:06:58', '2022-04-25 20:06:58'),
(8, 8, NULL, 32, 6, 'C&C-00008', 'food', 800, 1000.00, 1, NULL, NULL, '2022-04-26 17:11:16', '2022-04-26 17:11:16'),
(9, 9, NULL, 32, 6, 'C&C-00008', 'IRFZ44N MOSFET', 1800, 900.00, 1, NULL, NULL, '2022-04-26 19:31:05', '2022-04-26 19:31:05'),
(10, 12, NULL, 32, 3, 'ARD-00005', 'SparkFun USB Host Shield', 2000, 2156.00, 1, NULL, NULL, '2022-04-26 19:37:14', '2022-04-26 19:37:14'),
(11, 13, NULL, 32, 6, 'C&C-00008', 'food', 800, 1000.00, 1, NULL, NULL, '2022-04-26 19:44:57', '2022-04-26 19:44:57'),
(12, 14, NULL, 32, 6, 'C&C-00008', 'food', 800, 1000.00, 1, NULL, NULL, '2022-04-26 19:56:38', '2022-04-26 19:56:38'),
(13, 15, NULL, 32, 3, 'ARD-00005', 'SparkFun USB Host Shield', 2000, 2156.00, 1, NULL, NULL, '2022-04-26 20:01:12', '2022-04-26 20:01:12'),
(14, 16, NULL, 32, 5, 'C&C-00008', 'IRFZ44N MOSFET', 1800, 2000.00, 12, NULL, NULL, '2022-04-26 20:07:14', '2022-04-26 20:07:14'),
(15, 17, NULL, 32, 3, 'ARD-00005', 'SparkFun USB Host Shield', 2000, 2156.00, 1, NULL, NULL, '2022-04-27 00:31:20', '2022-04-27 00:31:20'),
(16, 18, NULL, 32, 12, 'ARD-00005', 'SparkFun USB Host Shield', 2000, 2156.00, 30, NULL, NULL, '2022-04-27 00:38:05', '2022-04-27 00:38:05'),
(17, 19, NULL, 32, 12, 'C&C-00008', 'food', 20000, 1000.00, 12, NULL, NULL, '2022-04-27 00:41:37', '2022-04-27 00:41:37'),
(18, 20, NULL, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, NULL, NULL, '2022-04-27 02:35:02', '2022-04-27 02:35:02'),
(19, 21, NULL, 32, 4, 'SWD-00005', 'IRFZ44N MOSFET12', 1500, 2000.00, 1, NULL, NULL, '2022-04-27 02:36:53', '2022-04-27 02:36:53'),
(20, 22, NULL, 32, 5, 'C&C-00008', 'IRFZ44N MOSFET', 1800, 2000.00, 1, NULL, NULL, '2022-04-27 02:41:47', '2022-04-27 02:41:47'),
(21, 23, NULL, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, NULL, NULL, '2022-04-27 02:43:29', '2022-04-27 02:43:29'),
(22, 24, NULL, 32, 5, 'C&C-00008', 'IRFZ44N MOSFET', 1800, 2000.00, 1, NULL, NULL, '2022-04-27 02:46:52', '2022-04-27 02:46:52'),
(23, 25, NULL, 32, 5, 'C&C-00008', 'IRFZ44N MOSFET', 1800, 2000.00, 1, NULL, NULL, '2022-04-27 02:49:53', '2022-04-27 02:49:53'),
(24, 26, NULL, 32, 5, 'C&C-00008', 'IRFZ44N MOSFET', 1800, 2000.00, 1, NULL, NULL, '2022-04-27 02:55:14', '2022-04-27 02:55:14'),
(25, 28, NULL, 32, 5, 'C&C-00008', 'IRFZ44N MOSFET', 1800, 2000.00, 1, NULL, NULL, '2022-04-27 03:09:36', '2022-04-27 03:09:36'),
(26, 29, NULL, 32, 5, 'C&C-00008', 'IRFZ44N MOSFET', 1800, 2000.00, 1, NULL, NULL, '2022-04-27 03:13:28', '2022-04-27 03:13:28'),
(27, 30, NULL, 32, 4, 'SWD-00005', 'IRFZ44N MOSFET12', 1500, 2000.00, 95, NULL, NULL, '2022-04-27 03:20:18', '2022-04-27 03:20:18'),
(41, 31, 17962, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, NULL, NULL, '2022-05-09 04:58:30', '2022-05-09 04:58:30'),
(42, 31, 17962, 32, 5, 'C&C-00008', 'IRFZ44N MOSFET', 1800, 2000.00, 1, NULL, NULL, '2022-05-09 04:58:30', '2022-05-09 04:58:30'),
(43, 31, 17962, 32, 16, 'SWD-00005', 'styles shirt', 1200, 2000.00, 149, 298000, NULL, '2022-05-09 04:58:30', '2022-05-09 04:58:30'),
(44, 32, 14335, 32, 5, 'C&C-00008', 'IRFZ44N MOSFET', 1800, 2000.00, 1, 2000, NULL, '2022-05-30 03:00:06', '2022-05-30 03:00:06'),
(45, 32, 14335, 32, 7, 'SWD-00005', 'styles shirt', 1200, 2000.00, 2, 4000, NULL, '2022-05-30 03:00:06', '2022-05-30 03:00:06'),
(46, 32, 14335, 32, 3, 'ARD-00005', 'SparkFun USB Host Shield', 2000, 2156.00, 1, 2156, NULL, '2022-05-30 03:00:06', '2022-05-30 03:00:06'),
(47, 32, 14335, 32, 12, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-05-30 03:00:06', '2022-05-30 03:00:06'),
(48, 32, 14335, 32, 13, 'C&C&b-00035', 'pc computer', 1200, 1500.00, 1, 1500, NULL, '2022-05-30 03:00:06', '2022-05-30 03:00:06'),
(49, 33, 18806, 32, 3, 'ARD-00005', 'SparkFun USB Host Shield', 2000, 2156.00, 1, 2156, NULL, '2022-05-31 01:12:24', '2022-05-31 01:12:24'),
(50, 34, 15359, 32, 8, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-05-31 02:06:39', '2022-05-31 02:06:39'),
(51, 35, 11018, 32, 3, 'ARD-00005', 'SparkFun USB Host Shield', 2000, 2156.00, 1, 2156, NULL, '2022-05-31 02:10:32', '2022-05-31 02:10:32'),
(52, 36, 18522, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-05-31 23:02:06', '2022-05-31 23:02:06'),
(53, 36, 18522, 32, 8, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-05-31 23:02:06', '2022-05-31 23:02:06'),
(54, 37, 16988, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-05-31 23:02:55', '2022-05-31 23:02:55'),
(55, 37, 16988, 32, 8, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-05-31 23:02:55', '2022-05-31 23:02:55'),
(56, 38, 13298, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-05-31 23:07:41', '2022-05-31 23:07:41'),
(57, 38, 13298, 32, 8, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-05-31 23:07:41', '2022-05-31 23:07:41'),
(58, 39, 11964, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-05-31 23:13:14', '2022-05-31 23:13:14'),
(59, 39, 11964, 32, 8, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-05-31 23:13:14', '2022-05-31 23:13:14'),
(60, 40, 15421, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-05-31 23:14:32', '2022-05-31 23:14:32'),
(61, 40, 15421, 32, 8, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-05-31 23:14:32', '2022-05-31 23:14:32'),
(62, 41, 12880, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-05-31 23:18:32', '2022-05-31 23:18:32'),
(63, 41, 12880, 32, 8, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-05-31 23:18:32', '2022-05-31 23:18:32'),
(64, 42, 12244, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-05-31 23:20:48', '2022-05-31 23:20:48'),
(65, 42, 12244, 32, 8, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-05-31 23:20:48', '2022-05-31 23:20:48'),
(66, 43, 17595, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-05-31 23:23:09', '2022-05-31 23:23:09'),
(67, 43, 17595, 32, 8, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-05-31 23:23:09', '2022-05-31 23:23:09'),
(68, 44, 16228, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-05-31 23:24:55', '2022-05-31 23:24:55'),
(69, 44, 16228, 32, 8, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-05-31 23:24:55', '2022-05-31 23:24:55'),
(70, 45, 13140, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-05-31 23:26:57', '2022-05-31 23:26:57'),
(71, 45, 13140, 32, 8, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-05-31 23:26:57', '2022-05-31 23:26:57'),
(72, 46, 12540, 32, 8, 'SWD-00005', 'styles shirt m', 1200, 2000.00, 2, 4000, NULL, '2022-05-31 23:29:09', '2022-05-31 23:29:09'),
(73, 47, 13949, 32, 11, 'SWD-00005', 'styles shirt', 1200, 2000.00, 2, 4000, NULL, '2022-05-31 23:32:46', '2022-05-31 23:32:46'),
(74, 48, 12231, 32, 7, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-06-08 00:57:38', '2022-06-08 00:57:38'),
(75, 49, 18217, 32, 7, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-06-08 00:57:38', '2022-06-08 00:57:38'),
(76, 48, 12231, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-06-08 00:57:38', '2022-06-08 00:57:38'),
(77, 49, 18217, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-06-08 00:57:38', '2022-06-08 00:57:38'),
(78, 50, 10402, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-06-08 01:00:32', '2022-06-08 01:00:32'),
(79, 51, 15280, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-06-08 01:00:33', '2022-06-08 01:00:33'),
(80, 52, 18966, 32, 3, 'ARD-00005', 'SparkFun USB Host Shield', 2000, 2156.00, 1, 2156, NULL, '2022-06-08 01:10:05', '2022-06-08 01:10:05'),
(81, 54, 15137, 32, 18, 'C&C-00035', 'styles', 1200, 2000.00, 1, 2000, NULL, '2022-06-08 01:29:10', '2022-06-08 01:29:10'),
(82, 55, 17703, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-06-08 01:32:31', '2022-06-08 01:32:31'),
(83, 56, 11124, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-06-08 01:36:06', '2022-06-08 01:36:06'),
(84, 57, 10850, 32, 11, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-06-13 10:00:21', '2022-06-13 10:00:21'),
(85, 58, 11129, 32, 5, 'C&C-00008', 'IRFZ44N MOSFET', 1800, 2000.00, 1, 2000, NULL, '2022-06-14 04:27:49', '2022-06-14 04:27:49'),
(86, 59, 17832, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-06-14 08:31:33', '2022-06-14 08:31:33'),
(87, 69, 11709, 32, 3, 'ARD-00005', 'SparkFun USB Host Shield', 2000, 2156.00, 1, 2156, NULL, '2022-06-14 08:47:28', '2022-06-14 08:47:28'),
(88, 70, 10350, 32, 7, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-06-14 09:13:33', '2022-06-14 09:13:33'),
(89, 71, 13249, 32, 7, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-06-14 09:19:10', '2022-06-14 09:19:10'),
(90, 72, 11527, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-06-14 09:20:53', '2022-06-14 09:20:53'),
(91, 73, 12078, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-06-14 09:22:13', '2022-06-14 09:22:13'),
(92, 74, 13671, 32, 7, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-06-14 09:24:02', '2022-06-14 09:24:02'),
(93, 75, 16472, 32, 6, 'C&C-00008', 'food', 2, 9.00, 1, 9, NULL, '2022-06-14 09:24:55', '2022-06-14 09:24:55'),
(94, 78, 16571, 32, 8, 'SWD-00005', 'styles shirt m', 1200, 2000.00, 1, 2000, NULL, '2022-06-26 10:26:21', '2022-06-26 10:26:21'),
(95, 79, 16602, 32, 11, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-06-26 10:28:53', '2022-06-26 10:28:53'),
(96, 79, 16602, 32, 11, 'SWD-00005', 'styles shirt', 1200, 2000.00, 1, 2000, NULL, '2022-06-26 10:28:53', '2022-06-26 10:28:53'),
(97, 79, 16602, 32, 5, 'C&C-00008', 'IRFZ44N MOSFET', 1800, 2000.00, 1, 2000, NULL, '2022-06-26 10:28:53', '2022-06-26 10:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `order_id`, `status`, `order_date`, `delivery_date`, `comment`, `user_comment`, `created_at`, `updated_at`) VALUES
(1, 3, 'Completed', '2022-04-19', NULL, NULL, NULL, '2022-04-19 02:01:49', '2022-04-19 02:01:49'),
(2, 3, 'Pending', '2022-04-19', '2022-04-20', 'sdsarfe', NULL, '2022-04-19 02:28:03', '2022-04-19 02:28:03'),
(3, 8, NULL, '2022-04-26', '2022-04-13', NULL, NULL, '2022-04-26 18:15:35', '2022-04-26 18:15:35'),
(4, 8, 'Cancelled', '2022-04-26', NULL, NULL, NULL, '2022-04-26 18:31:27', '2022-04-26 18:31:27'),
(5, 7, 'Completed', '2022-04-26', '2022-04-28', NULL, NULL, '2022-04-26 19:08:04', '2022-04-26 19:08:04'),
(6, 16, NULL, '2022-04-27', '2022-04-29', 'sdsarfe', NULL, '2022-04-26 23:51:29', '2022-04-26 23:51:29'),
(7, 16, 'Cancelled', '2022-04-27', '2022-04-28', NULL, NULL, '2022-04-26 23:56:05', '2022-04-26 23:56:05'),
(8, 27, 'Waiting For Delivery', '2022-04-28', NULL, NULL, NULL, '2022-04-28 00:16:49', '2022-04-28 00:16:49'),
(9, 27, 'Shipping', '2022-04-28', '2022-04-29', NULL, NULL, '2022-04-28 00:37:54', '2022-04-28 00:37:54'),
(10, 26, 'Waiting For Delivery', '2022-04-28', '2022-04-27', NULL, NULL, '2022-04-28 00:38:17', '2022-04-28 00:38:17'),
(11, 27, 'New', '2022-04-28', NULL, NULL, NULL, '2022-04-28 00:58:07', '2022-04-28 00:58:07'),
(12, 26, 'Processing', '2022-04-28', '2022-04-29', NULL, NULL, '2022-04-28 01:00:03', '2022-04-28 01:00:03'),
(13, 25, 'Packaging', '2022-04-26', '2022-04-29', NULL, NULL, '2022-04-28 01:00:36', '2022-04-28 01:00:36'),
(14, 24, 'Waiting For Delivery', '2022-04-26', '2022-04-20', NULL, NULL, '2022-04-28 01:00:57', '2022-04-28 01:00:57'),
(15, 6, 'Shipping', '2022-04-23', '2022-04-27', NULL, NULL, '2022-04-28 01:01:16', '2022-04-28 01:01:16'),
(16, 5, 'Delivered', '2022-04-19', '2022-04-26', NULL, NULL, '2022-04-28 01:01:44', '2022-04-28 01:01:44'),
(17, 4, 'Completed', '2022-04-19', '2022-04-29', NULL, NULL, '2022-04-28 01:02:05', '2022-04-28 01:02:05'),
(18, 1, 'Cancelled', '2022-04-19', '2022-04-27', NULL, NULL, '2022-04-28 01:02:28', '2022-04-28 01:02:28'),
(19, 5, 'Delivered', '2022-04-19', '2022-04-20', NULL, NULL, '2022-04-28 01:07:06', '2022-04-28 01:07:06'),
(20, 27, 'Delivered', '2022-04-28', '2022-04-29', NULL, NULL, '2022-04-28 01:36:27', '2022-04-28 01:36:27'),
(21, 27, 'Delivered', '2022-04-28', '2022-04-29', NULL, NULL, '2022-04-28 01:37:23', '2022-04-28 01:37:23'),
(22, 26, 'Delivered', '2022-04-28', '2022-04-29', NULL, NULL, '2022-04-28 01:38:32', '2022-04-28 01:38:32'),
(23, 27, 'New', '2022-04-28', '2022-04-27', NULL, NULL, '2022-04-28 01:39:59', '2022-04-28 01:39:59'),
(24, 24, 'Processing', '2022-04-26', '2022-04-27', NULL, NULL, '2022-04-28 01:54:18', '2022-04-28 01:54:18'),
(25, 75, 'New', '2022-06-14', '2022-06-14', 'erter5tg5yt', 'sadwdewrfr frtgryg', '2022-06-26 05:07:26', '2022-06-26 05:07:26'),
(26, 75, 'New', '2022-06-14', '2022-06-14', 'erter5tg5yt', 'sadwdewrfr frtgryg', '2022-06-26 05:09:18', '2022-06-26 05:09:18'),
(27, 75, 'New', '2022-06-14', '2022-06-14', 'erter5tg5yt', 'sadwdewrfr frtgryg', '2022-06-26 05:10:16', '2022-06-26 05:10:16'),
(28, 75, 'New', '2022-06-14', '2022-06-14', 'erter5tg5yt', 'sadwdewrfr frtgryg', '2022-06-26 05:11:16', '2022-06-26 05:11:16'),
(29, 75, 'New', '2022-06-14', '2022-06-14', 'erter5tg5yt', 'sadwdewrfr frtgryg', '2022-06-26 05:14:32', '2022-06-26 05:14:32'),
(30, 75, 'New', '2022-06-14', '2022-06-14', 'erter5tg5yt', 'sadwdewrfr frtgryg', '2022-06-26 05:17:18', '2022-06-26 05:17:18'),
(31, 75, 'New', '2022-06-14', '2022-06-14', 'erter5tg5yt', 'sadwdewrfr frtgryg', '2022-06-26 05:17:53', '2022-06-26 05:17:53'),
(32, 75, 'New', '2022-06-14', '2022-06-14', 'erter5tg5yt', 'sadwdewrfr frtgryg', '2022-06-26 05:20:49', '2022-06-26 05:20:49'),
(33, 75, 'New', '2022-06-14', '2022-06-14', 'erter5tg5yt', 'sadwdewrfr frtgryg', '2022-06-26 05:22:02', '2022-06-26 05:22:02'),
(34, 75, 'New', '2022-06-14', '2022-06-14', 'erter5tg5yt', 'sadwdewrfr frtgryg', '2022-06-26 05:23:33', '2022-06-26 05:23:33'),
(35, 75, 'New', '2022-06-14', '2022-06-14', 'erter5tg5yt', 'sadwdewrfr frtgryg', '2022-06-26 05:24:11', '2022-06-26 05:24:11'),
(36, 75, 'New', '2022-06-14', '2022-06-14', 'erter5tg5yt', 'sadwdewrfr frtgryg', '2022-06-26 05:24:43', '2022-06-26 05:24:43'),
(37, 75, 'New', '2022-06-14', '2022-06-14', NULL, NULL, '2022-06-26 05:27:42', '2022-06-26 05:27:42'),
(38, 75, 'Processing', '2022-06-14', '2022-06-14', 'mohsin', 'Rahat', '2022-06-26 05:52:31', '2022-06-26 05:52:31'),
(39, 75, 'Processing', '2022-06-14', '2022-06-14', 'mohsin', 'Rahat', '2022-06-26 05:52:35', '2022-06-26 05:52:35'),
(40, 75, 'Processing', '2022-06-14', '2022-06-14', 'mohsin', 'Rahat', '2022-06-26 05:56:46', '2022-06-26 05:56:46'),
(41, 75, 'Processing', '2022-06-14', '2022-06-29', 'emergrncy', 'This products is not available now', '2022-06-26 06:00:28', '2022-06-26 06:00:28'),
(42, 75, 'Packaging', '2022-06-14', '2022-06-29', 'emergrncy', 'This products is not available now', '2022-06-26 06:03:04', '2022-06-26 06:03:04'),
(43, 75, 'Packaging', '2022-06-14', '2022-06-29', 'emergrncy', 'This products is not available now', '2022-06-26 06:03:05', '2022-06-26 06:03:05'),
(44, 74, 'New', '2022-06-14', '2022-06-30', 'wqique3u', 'iqweqw3eii3qw', '2022-06-26 06:04:24', '2022-06-26 06:04:24'),
(45, 75, 'Packaging', '2022-06-14', '2022-06-29', 'emergrncy', NULL, '2022-06-26 06:28:45', '2022-06-26 06:28:45'),
(46, 24, 'Processing', '2022-04-26', '2022-04-27', 'aSWADERT', NULL, '2022-06-26 06:32:37', '2022-06-26 06:32:37'),
(47, 75, 'Packaging', '2022-06-14', '2022-06-29', 'emergrncy', NULL, '2022-06-26 06:34:12', '2022-06-26 06:34:12'),
(48, 75, 'Packaging', '2022-06-14', '2022-06-29', 'emergrncy', 'kmsdjskahfiesuuydriused', '2022-06-26 06:34:42', '2022-06-26 06:34:42'),
(49, 75, 'Packaging', '2022-06-14', '2022-06-29', 'emergrncy', NULL, '2022-06-26 06:35:49', '2022-06-26 06:35:49'),
(50, 75, 'Packaging', '2022-06-14', '2022-06-29', 'emergrncy', 'asjakjdkspadpd', '2022-06-26 06:36:27', '2022-06-26 06:36:27');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'web',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'order_index', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(2, 'order_details', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(3, 'order_invoice', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(4, 'order_status', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(5, 'new_order_index', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(6, 'new_order_details', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(7, 'new_order_invoice', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(8, 'new_order_status', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(9, 'processing_order_index', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(10, 'processing_order_details', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(11, 'processing_order_invoice', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(12, 'processing_order_status', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(13, 'packaging_order_index', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(14, 'packaging_order_details', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(15, 'packaging_order_invoice', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(16, 'packaging_order_status', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(17, 'waiting_order_index', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(18, 'waiting_order_details', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(19, 'waiting_order_invoice', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(20, 'waiting_order_status', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(21, 'shipping_order_index', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(22, 'shipping_order_details', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(23, 'shipping_order_invoice', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(24, 'shipping_order_status', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(25, 'deliverd_order_index', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(26, 'deliverd_order_details', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(27, 'deliverd_order_invoice', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(28, 'deliverd_order_status', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(29, 'complete_order_index', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(30, 'complete_order_details', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(31, 'complete_order_invoice', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(32, 'complete_order_status', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(33, 'canceled_order_index', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(34, 'canceled_order_details', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(35, 'canceled_order_invoice', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(36, 'canceled_order_status', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(37, 'product_index', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(38, 'product_create', 'web', '2022-06-05 15:34:35', '2022-06-05 15:34:35'),
(39, 'product_edit', 'web', '2022-06-05 15:36:14', '2022-06-05 15:36:14'),
(40, 'product_delete', 'web', '2022-06-05 15:36:14', '2022-06-05 15:36:14'),
(41, 'product_status', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(42, 'category_index', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(43, 'category_create', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(44, 'category_edit', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(45, 'category_delete', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(46, 'category_status', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(47, 'subcategory_index', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(48, 'subcategory_create', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(49, 'subcategory_edit', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(50, 'subcategory_delete', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(51, 'subcategory_status', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(52, 'admin_staff_index', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(53, 'admin_staff_create', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(54, 'admin_staff_edit', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(55, 'admin_staff_delete', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(56, 'admin_staff_status', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(57, 'role_permission_index', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(58, 'role_permission_create', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(59, 'role_permission_edit', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(60, 'role_permission_delete', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(61, 'role_permission_status', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(62, 'flash_sale_product_index', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(63, 'flash_sale_products_create', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(64, 'flash_sale_products_edit', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(65, 'flash_sale_products_delete', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(66, 'flash_sale_products_status', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(67, 'stock_low_products', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(68, 'stock_out_products', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(69, 'giftcard_index', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(70, 'giftcard_create', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(71, 'giftcard_edit', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(72, 'giftcard_delete', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(73, 'giftcard_status', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(74, 'giftcard_order_view', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(75, 'giftcard_order_status', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(76, 'users_index', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(77, 'users_edit', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(78, 'users_delete', 'web', '2022-06-05 16:38:45', '2022-06-05 16:38:45'),
(155, 'users_send_mail', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(156, 'users_view_details', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(157, 'today_birthday_users', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(158, 'this_month_birthday_user', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(159, 'users_message', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(160, 'send_email_all_users', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(161, 'view_users_withdraw', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(162, 'view_users_withdraw_details', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(163, 'view_withdraw', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(164, 'view_wihtdraw_status', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(165, 'view_referral_details', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(166, 'view_referral_users_details', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(167, 'blog_post_index', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(168, 'blog_post_create', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(169, 'bloog_post_edit', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(170, 'blog_post_delete', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(171, 'blog_post_status', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(172, 'blog_category_index', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(173, 'blog_category_create', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(174, 'blog_category_edit', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(175, 'blog_category_delete', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(176, 'blog_category_status', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(177, 'blog_subcategory_index', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(178, 'blog_subcategory_create', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(179, 'blog_subcategory_edit', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(180, 'blog_subcategory_delete', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(181, 'blog_subcategory_status', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(182, 'blog_slider_index', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(183, 'blog_slider_create', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(184, 'blog_slider_edit', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(185, 'blog_slider_delete', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(186, 'blog_slider_status', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(187, 'blog_user_post_index', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(188, 'blog_user_post_edit', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(189, 'blog_user_post_delete', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(190, 'blog_user_post_coment', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(191, 'blog_coment_reply', 'web', '2022-06-05 16:55:05', '2022-06-05 16:55:05'),
(281, 'view_product_question', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(282, 'reply_product_question', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(283, 'product_question_status', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(284, 'view_products_answer', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(285, 'view_products_answer_status', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(286, 'coupon_code_index', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(287, 'coupon_code_create', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(288, 'coupon_code_edit', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(289, 'coupon_code_delete', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(290, 'coupon_code_status', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(291, 'general_setting_frontend_slider_index', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(292, 'general_setting_frontend_slider_create', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(293, 'general_setting_frontend_slider_edit', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(294, 'general_setting_frontend_slider_delete', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(295, 'general_setting_frontend_slider_status', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(296, 'general_setting_frontend_banner_index', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(297, 'general_setting_frontend_banner_create', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(298, 'general_setting_frontend_banner_edit', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(299, 'general_setting_frontend_banner_delete', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(300, 'general_setting_frontend_banner_status', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(301, 'shipping_charge_index', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(302, 'shipping_charge_edit', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(303, 'site_setup_view', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(304, 'site_setup_edit', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(305, 'email_setting_index', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(306, 'email_setting_edit', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(307, 'empty_database_view', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(308, 'cache_clear_view', 'web', '2022-06-05 17:39:51', '2022-06-05 17:39:51'),
(309, 'dashboard_view', 'web', '2022-06-05 17:41:47', '2022-06-05 17:41:47'),
(310, 'analytice_view', 'web', '2022-06-05 17:41:47', '2022-06-05 17:41:47'),
(311, 'products_reporst_view', 'web', '2022-06-05 17:41:47', '2022-06-05 17:41:47'),
(312, 'expired_date_products', 'web', '2022-06-06 10:48:11', '2022-06-06 10:48:11'),
(313, 'upcomming_expired_date_products', 'web', '2022-06-08 05:00:55', '2022-06-08 05:00:55'),
(314, 'event_index', 'web', '2022-06-13 05:08:42', '2022-06-13 05:08:42'),
(315, 'event_add', 'web', '2022-06-13 05:08:42', '2022-06-13 05:08:42'),
(316, 'event_edit', 'web', '2022-06-13 05:08:42', '2022-06-13 05:08:42'),
(317, 'event_delete', 'web', '2022-06-13 05:08:42', '2022-06-13 05:08:42'),
(318, 'anaylites_view', 'web', '2022-06-13 05:08:42', '2022-06-13 05:08:42'),
(319, 'show_review_rating', 'web', '2022-06-19 08:26:44', '2022-06-19 08:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buying_price` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `flash_sale_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `model_no` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flash_sale` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `flash_sale_start_date` date DEFAULT NULL,
  `flash_sale_end_date` date DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `home_automotion` int(11) DEFAULT NULL,
  `feature_products` int(11) DEFAULT NULL,
  `develop_owner` int(11) DEFAULT NULL,
  `order_qty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expired_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `parent_id`, `subcat_id`, `product_name`, `buying_price`, `price`, `flash_sale_price`, `quantity`, `model_no`, `image`, `flash_sale`, `flash_sale_start_date`, `flash_sale_end_date`, `slug`, `description`, `summery`, `document`, `supplier`, `specification`, `status`, `created_at`, `updated_at`, `home_automotion`, `feature_products`, `develop_owner`, `order_qty`, `order_price`, `expired_date`) VALUES
(1, 3, 12, 'Zif socket (40 pin)', '10000', 1000, NULL, 1000, 'C&C-00035', '30447.jpg', '0', NULL, NULL, 'zif-socket-40-pin', NULL, 'asdersftreg', '78i87i', NULL, NULL, '1', '2022-03-30 08:48:52', '2022-04-19 01:45:48', 1, 1, NULL, NULL, NULL, '2022-06-27'),
(2, 1, NULL, 'USB Connector B type', '100', 2000, NULL, 20, 'C&C-00008', '55663.jpg', '0', NULL, NULL, 'usb-connector-b-type', NULL, NULL, NULL, NULL, NULL, '1', '2022-03-30 08:50:30', '2022-04-28 02:09:48', 1, 1, NULL, NULL, NULL, NULL),
(3, 3, NULL, 'SparkFun USB Host Shield', '2000', 2156, NULL, 100, 'ARD-00005', '41010.jpg', '0', NULL, NULL, 'sparkfun-usb-host-shield', NULL, NULL, NULL, 'SparkFun, USA', NULL, '1', '2022-03-30 08:53:11', '2022-06-14 08:47:28', 1, 1, NULL, '2', '4312', NULL),
(4, 2, NULL, 'IRFZ44N MOSFET12', '1500', 2000, NULL, 100, 'SWD-00005', '70591.jpg', '0', NULL, NULL, 'irfz44n-mosfet12', NULL, 'werwet', 'etrtyry', NULL, NULL, '1', '2022-03-30 09:09:27', '2022-04-27 02:18:21', 1, 1, NULL, NULL, NULL, NULL),
(5, 2, 9, 'IRFZ44N MOSFET', '1800', 2000, NULL, 100, 'C&C-00008', '41210.jpg', '0', NULL, NULL, 'irfz44n-mosfet', NULL, NULL, 'werfet', 'SparkFun, USA', NULL, '1', '2022-04-06 10:21:30', '2022-06-26 10:28:54', 1, 1, NULL, '2', '4000', NULL),
(6, 2, NULL, 'food', '2', 9, NULL, 100, 'C&C-00008', '30997.jpg', '0', NULL, NULL, 'food', NULL, NULL, NULL, 'SparkFun, USA', NULL, '1', '2022-04-06 10:28:37', '2022-06-14 09:24:55', 1, 1, NULL, '11', '90', NULL),
(7, 2, NULL, 'styles shirt', '1200', 2000, NULL, 100, 'SWD-00005', '79247.jpg', '0', NULL, NULL, 'styles-shirt', NULL, '<p>aSDWEFR</p>', '<p>QWERGT</p>', 'SparkFun, USA', NULL, '1', '2022-04-27 01:57:24', '2022-06-14 09:24:02', NULL, NULL, NULL, '5', '10000', NULL),
(8, 2, NULL, 'styles shirt m', '1200', 2000, NULL, 200, 'SWD-00005', '17824.jpg', '0', NULL, NULL, 'styles-shirt', NULL, '<p>aSDWEFR</p>', '<p>QWERGT</p>', 'SparkFun, USA', NULL, '1', '2022-04-27 01:58:20', '2022-06-26 10:26:21', NULL, NULL, NULL, '4', '2000', NULL),
(9, 2, NULL, 'styles shirt', '1200', 2000, NULL, 100, 'SWD-00005', '83208.jpg', '0', NULL, NULL, 'styles-shirt', NULL, '<p>aSDWEFR</p>', '<p>QWERGT</p>', 'SparkFun, USA', NULL, '1', '2022-04-27 01:58:49', '2022-04-27 02:16:34', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 2, NULL, 'styles shirt', '1200', 2000, NULL, 500, 'SWD-00005', '98209.jpg', '0', NULL, NULL, 'styles-shirt', NULL, '<p>aSDWEFR</p>', '<p>QWERGT</p>', 'SparkFun, USA', NULL, '1', '2022-04-27 01:59:18', '2022-04-27 02:16:16', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 3, 12, 'styles shirt', '1200', 2000, NULL, 50, 'SWD-00005', '11579.jpg', '0', NULL, NULL, 'styles-shirt', NULL, '<p>aSDWEFR</p>', '<p>QWERGT</p>', 'SparkFun, USA', NULL, '1', '2022-04-27 02:02:33', '2022-06-26 10:28:53', NULL, NULL, NULL, '5', '10000', NULL),
(12, 2, 9, 'styles shirt', '1200', 2000, NULL, 92, 'SWD-00005', '19468.jpg', '0', NULL, NULL, 'styles-shirt', NULL, '<p>aSDWEFR</p>', '<p>QWERGT</p>', 'SparkFun, USA', NULL, '1', '2022-04-27 02:03:20', '2022-05-11 04:05:15', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 2, 9, 'pc computer', '1200', 1500, '1300', 12, 'C&C&b-00035', '62541.jpg', '1', '2022-05-10', '2022-05-21', 'pc-computer', NULL, '<p>wedrwegteg</p>', '<p>rtyuu</p>', 'SparkFun, USA', NULL, '1', '2022-05-11 03:24:20', '2022-05-11 03:24:20', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 2, 9, 'food sdfrg', '1100', 2000, '1800', 24, 'C&C-00008', '40885.jpg', '1', '2022-05-09', '2022-05-31', 'food-sdfrg', NULL, '<p>qwsqsw</p>', '<p>wedwqd</p>', 'Rahat', NULL, '1', '2022-05-11 03:51:56', '2022-05-11 04:03:15', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 2, 9, 'styles', '1200', 2000, NULL, 12, 'C&C-00035', '65959.jpg', '0', NULL, NULL, 'styles', NULL, '<p>adwer</p>', '<p>qwe3wrt</p>', 'SparkFun, USA', NULL, '1', '2022-06-05 00:52:54', '2022-06-05 00:52:54', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 2, NULL, 'styles', '1200', 2000, NULL, 80, 'C&C-00035', '4761.jpg', '0', NULL, NULL, 'styles', NULL, '<p>adwer</p>', '<p>qwe3wrt</p>', 'SparkFun, USA', NULL, '1', '2022-06-05 00:52:54', '2022-06-18 14:44:28', NULL, NULL, NULL, '1', '2000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qties`
--

CREATE TABLE `qties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qties`
--

INSERT INTO `qties` (`id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 12, 90, '2022-04-27 02:03:20', '2022-06-15 09:30:10'),
(2, 11, 100, '2022-04-27 02:13:16', '2022-04-27 02:13:16'),
(3, 11, 50, '2022-04-27 02:13:49', '2022-04-27 02:13:49'),
(4, 10, 500, '2022-04-27 02:16:16', '2022-04-27 02:16:16'),
(5, 9, 500, '2022-04-27 02:16:34', '2022-06-15 09:36:59'),
(6, 8, 200, '2022-04-27 02:16:55', '2022-04-27 02:16:55'),
(7, 7, 100, '2022-04-27 02:17:13', '2022-04-27 02:17:13'),
(8, 6, 100, '2022-04-27 02:17:33', '2022-04-27 02:17:33'),
(9, 5, 100, '2022-04-27 02:18:03', '2022-04-27 02:18:03'),
(10, 4, 100, '2022-04-27 02:18:21', '2022-04-27 02:18:21'),
(11, 3, 100, '2022-04-27 02:18:38', '2022-04-27 02:18:38'),
(12, 12, 81, '2022-04-27 02:19:32', '2022-06-15 09:34:54'),
(13, 12, 72, '2022-04-27 02:20:06', '2022-06-15 09:34:38'),
(14, 12, 100, '2022-04-27 02:23:15', '2022-06-15 09:28:47'),
(15, 2, 20, '2022-04-28 02:09:48', '2022-04-28 02:09:48'),
(16, 13, 12, '2022-05-11 03:24:20', '2022-05-11 03:24:20'),
(17, 14, 3, '2022-05-11 03:29:01', '2022-05-11 03:29:01'),
(18, 15, NULL, '2022-05-11 03:42:34', '2022-05-11 03:42:34'),
(19, 1, 2, '2022-05-11 03:51:56', '2022-06-15 09:21:45'),
(20, 6, 4, '2022-05-11 04:00:49', '2022-06-15 09:21:46'),
(21, 16, 200, '2022-05-11 04:03:15', '2022-06-15 09:23:25'),
(22, 12, 82, '2022-05-11 04:05:15', '2022-06-15 09:32:08'),
(23, 17, 120, '2022-06-05 00:52:54', '2022-06-15 09:27:58'),
(24, 18, 12, '2022-06-05 00:52:54', '2022-06-05 00:52:54'),
(25, 18, 70, '2022-06-18 14:44:28', '2022-06-18 14:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `product_id`, `question`, `status`, `created_at`, `updated_at`) VALUES
(1, 32, 4, 'wedwrf', '1', '2022-03-31 22:07:08', '2022-03-31 22:07:08'),
(2, 32, 4, 'saadesrfe', '0', '2022-03-31 22:07:29', '2022-04-10 00:10:02'),
(3, 32, 4, 'szfdsf', '1', '2022-04-01 00:10:12', '2022-04-10 00:09:49'),
(4, 32, 3, 'ZaDsfddsgdhbf', '0', '2022-06-19 06:37:46', '2022-06-19 06:37:46'),
(5, 32, 3, 'adsefdgrthyuiogf', '0', '2022-06-19 06:39:59', '2022-06-19 06:39:59'),
(6, 32, 3, 'desfrgtr', '1', '2022-06-19 06:51:18', '2022-06-19 06:51:39'),
(7, 32, 13, 'sddfszgrg', '1', '2022-06-19 09:03:40', '2022-06-19 09:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `referalls`
--

CREATE TABLE `referalls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `referall_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviw_ratings`
--

CREATE TABLE `reviw_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating_star` int(11) NOT NULL,
  `review_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviw_ratings`
--

INSERT INTO `reviw_ratings` (`id`, `user_id`, `product_id`, `rating_star`, `review_details`, `status`, `created_at`, `updated_at`) VALUES
(1, 32, 4, 5, 'sdsfd', '1', '2022-04-01 00:16:20', '2022-04-01 00:16:20'),
(2, 32, 3, 4, '0', '1', '2022-04-01 00:25:32', '2022-04-01 00:25:32'),
(3, 32, 3, 5, '1dfsdgr', '1', '2022-04-01 00:28:04', '2022-04-01 00:28:04'),
(4, 32, 4, 5, '0', '1', '2022-04-01 00:29:06', '2022-04-01 00:29:06'),
(5, 32, 4, 1, '0', '1', '2022-04-01 00:29:48', '2022-04-01 00:29:48'),
(6, 32, 4, 1, 'dfesfrgr', '0', '2022-04-01 00:30:27', '2022-06-19 08:21:00'),
(7, 32, 4, 1, 'sfdsgfrg', '0', '2022-04-01 00:30:51', '2022-06-19 08:20:58'),
(8, 32, 2, 3, '0', '0', '2022-04-06 22:14:01', '2022-06-19 08:20:55'),
(9, 32, 2, 5, '0', '0', '2022-04-06 22:14:29', '2022-06-19 08:20:52'),
(10, 32, 13, 1, '0', '1', '2022-05-16 01:42:28', '2022-06-19 08:21:15'),
(11, 32, 13, 5, 'asawedw', '1', '2022-06-19 08:58:16', '2022-06-19 08:58:16'),
(12, 32, 13, 5, 'aSAWRDESRFET', '1', '2022-06-19 09:01:36', '2022-06-19 09:02:24'),
(13, 32, 13, 5, 'AQWERTYU', '1', '2022-06-19 09:02:04', '2022-06-19 09:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'web',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'web', '2022-06-05 01:51:34', '2022-06-05 01:56:17'),
(3, 'Employee', 'web', '2022-06-05 01:57:48', '2022-06-05 01:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(3, 1),
(4, 1),
(4, 3),
(5, 1),
(5, 3),
(9, 1),
(9, 3),
(13, 1),
(13, 3),
(17, 1),
(17, 3),
(21, 1),
(25, 1),
(29, 1),
(33, 1),
(33, 3),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(155, 1),
(156, 1),
(157, 1),
(158, 1),
(159, 1),
(160, 1),
(161, 1),
(162, 1),
(163, 1),
(164, 1),
(165, 1),
(166, 1),
(167, 1),
(168, 1),
(169, 1),
(170, 1),
(171, 1),
(172, 1),
(173, 1),
(174, 1),
(175, 1),
(176, 1),
(177, 1),
(178, 1),
(179, 1),
(180, 1),
(181, 1),
(182, 1),
(183, 1),
(184, 1),
(185, 1),
(186, 1),
(187, 1),
(188, 1),
(189, 1),
(190, 1),
(191, 1),
(281, 1),
(282, 1),
(283, 1),
(284, 1),
(285, 1),
(286, 1),
(287, 1),
(288, 1),
(289, 1),
(290, 1),
(291, 1),
(292, 1),
(293, 1),
(294, 1),
(295, 1),
(296, 1),
(297, 1),
(298, 1),
(299, 1),
(300, 1),
(301, 1),
(302, 1),
(303, 1),
(304, 1),
(305, 1),
(306, 1),
(307, 1),
(308, 1),
(309, 1),
(310, 1),
(311, 1),
(312, 1),
(313, 1),
(314, 1),
(315, 1),
(316, 1),
(317, 1),
(318, 1),
(319, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ZkEDhFFq7wF8zXT1be0tfzJVrXmEDfuS3txjhleB', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiQmRDeE05eHNuT3B6dW1kZkZyZWFTRUNKV0dvZEVOSk1mdVpReXh3RSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1656317760),
('gvxhkSQZqZwqFwQ7tideJJgs0feOrpDsrxVzNCHt', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNzNvemJWdHo4emRaeTBrRllEdHdUU0VWRTVUYndQRjhGcHpkZlZ5RSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1656317753),
('Xn8pqNGO6sEtE6Y5GyBT8VVnyvy5MYJ34mQkUBYj', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNnVvMng3SHliV0tnOWZQY0dIVThDNWtKSml5Zk15YTNvelI4M0pkbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1656317753),
('wBy9LMU3LS4pqBcjwLcLlTkMHxKLcbTaE7Vzz4L1', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTzYwcUE3MWFZRTlHUTh4R3BHaFpjVzRtS0YwM3hTS1pXTURrRjNEUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1656317760),
('DFxevr0H61c8v8v1PQE76cB8vkeYNgkzWaveUzUW', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoicVlFdjBXUDY0RnlMSUxRelBybXpYZVhXMzlwWXUyVGFPMTFiamc0NSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1656318319),
('r5iOITNaYuZqMimobkrkkTCkXgdBDjVH3OSm0IXJ', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiMU9VcUpGdm9TT3JaRnE2NE4wallzN0IxeTNzU011S1VOYU1TWlNFaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1656317753);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charges`
--

CREATE TABLE `shipping_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flat_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `express_delivery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_charges`
--

INSERT INTO `shipping_charges` (`id`, `flat_rate`, `express_delivery`, `created_at`, `updated_at`) VALUES
(1, '200', '300', '2022-04-13 10:04:06', '2022-04-05 17:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(4, 'edw', NULL, '77767.jpg', NULL, '1', '2022-03-26 23:07:56', '2022-03-26 23:07:56'),
(5, 'wedwr', NULL, '44229.jpg', NULL, '1', '2022-03-26 23:08:40', '2022-03-26 23:08:40'),
(6, 'wedqwed', NULL, '40790.jpg', NULL, '1', '2022-03-26 23:08:58', '2022-03-26 23:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `subcat_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mohsin\'s Team', 1, '2022-03-19 07:46:23', '2022-03-19 07:46:23'),
(2, 2, 'admin\'s Team', 1, '2022-03-20 09:25:50', '2022-03-20 09:25:50'),
(3, 3, 'Mohsin\'s Team', 1, '2022-03-28 03:51:18', '2022-03-28 03:51:18'),
(4, 16, 'Mohsin\'s Team', 1, '2022-03-28 11:58:13', '2022-03-28 11:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral_id` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referred_by` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referral` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_banned` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commision` int(11) DEFAULT NULL,
  `range_amount` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT '100',
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `slug`, `date_of_birth`, `gender`, `referral_id`, `referred_by`, `referral`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `image`, `is_admin`, `last_login`, `role_id`, `is_banned`, `status`, `created_at`, `updated_at`, `city`, `country`, `postcode`, `address1`, `address2`, `commision`, `range_amount`, `ip`) VALUES
(2, 'admin', 'admin@gmail.com', '1715786', NULL, '$2y$10$uSgyJ1zW.h3dnVJmhg3xouKIhkKnDnLPCk83tYtWrLN9NqkRzoQOm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '358.jpg', 'admin', '2022-06-26 10:22:57', 1, '0', '1', '2022-03-20 09:25:49', '2022-06-26 04:22:57', NULL, NULL, NULL, NULL, NULL, NULL, '100', '::1'),
(11, 'Rahat', 'rahat89512@gmail.com', '01715486265', NULL, '$2y$10$d70SICXdCrHQ/grYy9YohOe725PK0ssED.YOMqMYGHI79O/Wj9s3m', '62Mohsin Sikder', '2022-05-05', 'male', 'Mohsin Sikder2994', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '2022-04-19 08:14:49', '2022-04-19 08:14:49', NULL, NULL, NULL, NULL, NULL, 10, '100', NULL),
(32, 'Yeamin', 'mohsinsikder895@gmail.com', '01715486265', NULL, '$2y$10$uSgyJ1zW.h3dnVJmhg3xouKIhkKnDnLPCk83tYtWrLN9NqkRzoQOm', '99Mohsin', '2022-05-05', 'male', 'sikder99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 10:32:47', NULL, '0', '1', '2022-03-28 20:48:27', '2022-06-27 04:32:47', 'saver ashulia', 'Bangladesh', '02128736', 'plashbari bazar', 'plashbari bazar', 10, '100', '::1'),
(47, 'Rahat', 'mohsinsikder999@gmail.com', '0171548696', NULL, '$2y$10$nAAE3gtnCD13PCmdt9BxP.l4bhcmKMjz6djrrazzDC.wdDqmZ7qfy', '82Mohsin Sikder', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2022-04-24 02:30:04', '2022-04-24 02:56:50', NULL, NULL, NULL, NULL, NULL, NULL, '100', NULL),
(48, 'Mohsin Sikder', 'm@gmail.com', '01715486265', NULL, '$2y$10$Ir4viEulxO66GmHDJRFtJOdk4PrHET4WinPPZkeIJeM8dCMzUP2ly', '49Mohsin Sikder', '2022-05-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '2022-04-26 06:13:34', '2022-04-26 06:13:34', NULL, NULL, NULL, NULL, NULL, NULL, '100', NULL),
(52, 'Sikder', 'mohsinsikder.cse@gmail.com', '01706125400', NULL, '$2y$10$gGnqDJvdOCDsEQkTqA22u.I0/qALPb7zwNvKpVWnApFlEephyPKWa', '56Sikder', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2022-04-26 19:22:34', '2022-05-25 04:31:19', NULL, NULL, NULL, NULL, NULL, 10, '100', NULL),
(53, 'Mohsin', 'mohsinsikder895123@gmail.com', '01715486265', NULL, '$2y$10$BsQEPZfFaWPubWiWGAJnzOhUt0etDwu12Wjwx/9.2GIFi7O7oSmzm', '12Mohsin', '2022-05-26', 'male', 'Mohsin7788', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '2022-05-15 03:15:30', '2022-05-15 03:15:30', NULL, NULL, NULL, NULL, NULL, 10, '100', NULL),
(55, 'Mohsin Sikder', 'mohsinsikder89512@gmail.com', NULL, NULL, '$2y$10$EJxb9pcjgLpDDLbTzCFSM.2gx.a/VsQvb4CEzvl3v3GyJZ6OGHouu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '2022-02-01 15:28:31', 3, '0', '1', '2022-06-05 02:03:17', '2022-06-06 21:19:31', NULL, NULL, NULL, NULL, NULL, NULL, '100', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `name`, `phone`, `email`, `subject`, `body`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mohsin Sikder', NULL, 'mohsinsikder895@gmail.com', 'fgbf', 'eferf', '1', '2022-04-06 23:34:57', '2022-04-07 01:23:23'),
(2, 'Mohsin Sikder', NULL, 'mohsinsikder895@gmail.com', 'fgbf', 'eferf', '1', '2022-04-06 23:35:12', '2022-04-07 01:00:38'),
(3, 'Mohsin Sikder', NULL, 'mohsinsikder895@gmail.com', 'wedwrtfr', 'wedwr', '0', '2022-04-26 02:34:55', '2022-04-26 02:34:55'),
(4, 'Sikder', '01706125400', 'b@gmail.com', NULL, NULL, '0', '2022-04-28 13:00:52', '2022-04-28 13:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_email` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_lists`
--

INSERT INTO `wish_lists` (`id`, `user_id`, `product_id`, `user_email`, `session_id`, `created_at`, `updated_at`) VALUES
(10, NULL, 16, 'mohsinsikder895@gmail.com', 'ifYf155Zoe8IxhsE9fYmCmYsW3PNPXQbjpM3CqN5', '2022-06-02 08:04:06', '2022-06-02 08:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraws`
--

INSERT INTO `withdraws` (`id`, `user_id`, `amount`, `account_type`, `account_number`, `phone`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 32, '10', 'Bkash', '1256576', '01715486265', 'aswadewdf', 0, '2022-04-18 01:45:21', '2022-04-18 01:45:21'),
(2, 32, '11', 'Bkash', '1256576', '01715486265', 'rftgyhuji', 0, '2022-04-19 10:51:29', '2022-04-19 10:51:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `serial_number` (`serial_number`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post_comment_replies`
--
ALTER TABLE `blog_post_comment_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_sliders`
--
ALTER TABLE `blog_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `browse_histories`
--
ALTER TABLE `browse_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`),
  ADD UNIQUE KEY `serial_number` (`serial_number`);

--
-- Indexes for table `coupon_codes`
--
ALTER TABLE `coupon_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift_cards`
--
ALTER TABLE `gift_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift_card_orders`
--
ALTER TABLE `gift_card_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qties`
--
ALTER TABLE `qties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referalls`
--
ALTER TABLE `referalls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviw_ratings`
--
ALTER TABLE `reviw_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog_post_comment_replies`
--
ALTER TABLE `blog_post_comment_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_sliders`
--
ALTER TABLE `blog_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `browse_histories`
--
ALTER TABLE `browse_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coupon_codes`
--
ALTER TABLE `coupon_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gift_cards`
--
ALTER TABLE `gift_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gift_card_orders`
--
ALTER TABLE `gift_card_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `qties`
--
ALTER TABLE `qties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `referalls`
--
ALTER TABLE `referalls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviw_ratings`
--
ALTER TABLE `reviw_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  MODIFY `permission_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

--
-- AUTO_INCREMENT for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
