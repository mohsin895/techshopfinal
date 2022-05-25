-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2022 at 11:01 AM
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
(5, 2, 3, 'zdsfgdhytfcvbv', '0', '2022-04-10 00:11:23', '2022-04-13 23:37:35');

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
(2, 0, 'eewrt', 'Own Development', 1, 'eewrt', NULL, '1', '2022-03-26 03:40:43', '2022-05-24 05:48:21'),
(3, 0, 'dfe', 'lates', 2, 'dfe', NULL, '1', '2022-03-26 03:41:37', '2022-03-26 03:41:37'),
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
(1, 2, 2, 4, 'qwertyuio', 'qwertyuio', '<p>adfdghjhktef</p>', '7052.png', 'published', '2022-03-26 08:45:25', '2022-05-23 01:33:46'),
(2, 2, 2, 4, 'wqewrt', 'wqewrt', '<p>wertyuiop</p>', '82654.jpg', 'published', '2022-04-02 08:38:05', '2022-05-23 01:32:59'),
(3, 32, 2, 4, 'awe', 'awe', '<p>awedwrf</p>', '1723.jpg', 'published', '2022-04-02 19:49:38', '2022-05-23 01:32:30'),
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
(96, 5, 'IRFZ44N MOSFET', 'C&C-00008', '2000', '1800', 1, NULL, 'mohsinsikder895@gmail.com', 'wa1wFNRFAnqxd1qkIf0A3s7rMzZX1nCJl42r9sL2', '2022-05-09 14:56:48', '2022-05-09 14:56:48'),
(97, 7, 'styles shirt', 'SWD-00005', '2000', '1200', 1, NULL, 'mohsinsikder895@gmail.com', 'pUt9VpupAe9LnQ7GzyRde9oHZ2qQv1gD8ZPQpnJv', '2022-05-09 16:20:34', '2022-05-09 16:20:34'),
(98, 3, 'SparkFun USB Host Shield', 'ARD-00005', '2156', '2000', 1, NULL, 'mohsinsikder895@gmail.com', 'Y7F1vHCzqTkrnnEoGlJMn1DPSMVQDWbTL6fBOBZv', '2022-05-11 03:57:18', '2022-05-11 03:57:18'),
(99, 1, 'Zif socket (40 pin)', 'C&C-00035', '1000', '10000', 1, NULL, '', 'rfg7HuFoVVHGtSJyaatU79Uvrr7btouZkaabuAFk', '2022-05-12 06:22:05', '2022-05-12 06:22:05'),
(100, 7, 'styles shirt', 'SWD-00005', '2000', '1200', 1, NULL, '', 'NqqR4wERHAr8X47cSWVVRRAKNQZN2tSRMTYYiY3S', '2022-05-12 07:39:35', '2022-05-12 07:39:35'),
(101, 12, 'styles shirt', 'SWD-00005', '2000', '1200', 1, NULL, 'mohsinsikder895@gmail.com', 'gHKTl2MznpcHhqRFO5DpkrbiX6xBik0a3IAKelmv', '2022-05-15 03:54:56', '2022-05-15 03:54:56'),
(102, 13, 'pc computer', 'C&C&b-00035', '1500', '1200', 1, NULL, 'mohsinsikder895@gmail.com', 'b09HWaiHvBaDbnqglibgH45UL1AjAxeyPClX0sLW', '2022-05-16 07:29:59', '2022-05-16 07:29:59');

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
  `t_c` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `login_image`, `site_logo`, `blog_logo`, `dashboard_logo`, `favicon`, `blog_favicon`, `website_name`, `site_title`, `currency`, `commission`, `vat`, `quantity`, `email1`, `email2`, `address`, `mobile1`, `mobile2`, `bkash`, `rocket`, `nogod`, `flash_slider`, `meta_description`, `meta_keyword`, `meta_viewport`, `created_at`, `updated_at`, `facebook_page`, `facebook_group`, `twiter`, `instagram`, `youtube`, `linkdi`, `blog_about_us`, `privecy_policy`, `about_us`, `w_r`, `t_c`) VALUES
(1, '25401.png', '72468.png', '79294.png', '84409.png', '485.png', '36240.png', 'Roboticsabc Shop', 'Roboticsabc shop', 'TK', '10', '7', 2, 'mohsinsikder895@gmail.com', 'mohsinsikder895@gmail.com', 'plashbari bazar', '01715486265', '01706125400', '01715486265', '01715486265', '01715486265', 2, 'erfegter', '\"fdsgfrgdtfhgf\"', 'rtgrgy', NULL, '2022-05-24 03:59:55', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 'https://www.linkedin.com/in/mohsin-sikder/', '<p><strong>Bangladesh</strong>, is a country in&nbsp;<a href=\"https://en.wikipedia.org/wiki/South_Asia\">South Asia</a>. It is the&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_countries_and_dependencies_by_population\">eighth-most populous country</a>&nbsp;in the world, with a population exceeding 163 million people in an area of either 148,460 square kilometres (57,320&nbsp;sq&nbsp;mi) or 147,570 square kilometres (56,980&nbsp;sq&nbsp;mi),<a href=\"https://en.wikipedia.org/wiki/Bangladesh#cite_note-bdarea-7\">[7]</a><a href=\"https://en.wikipedia.org/wiki/Bangladesh#cite_note-bbs-15\">[15]</a>&nbsp;making it one of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_countries_and_dependencies_by_population_density\">most densely populated countries</a>&nbsp;in the world. Bangladesh shares land borders with&nbsp;<a href=\"https://en.wikipedia.org/wiki/India\">India</a>&nbsp;to the west, north, and east, and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Myanmar\">Myanmar</a>&nbsp;to the southeast; to the south it has a coastline along the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bay_of_Bengal\">Bay of Bengal</a>. It is narrowly separated from&nbsp;<a href=\"https://en.wikipedia.org/wiki/Nepal\">Nepal</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bhutan\">Bhutan</a>&nbsp;by the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Siliguri_Corridor\">Siliguri Corridor</a>; and from&nbsp;<a href=\"https://en.wikipedia.org/wiki/China\">China</a>&nbsp;by 100&nbsp;km of the Indian state of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Sikkim\">Sikkim</a>&nbsp;in the north.<a href=\"https://en.wikipedia.org/wiki/Bangladesh#cite_note-16\">[16]</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Dhaka\">Dhaka</a>, the capital and&nbsp;<a href=\"https://en.wikipedia.org/wiki/List_of_cities_and_towns_in_Bangladesh\">largest city</a>, is the nation&#39;s economic, political, and cultural hub.&nbsp;<a href=\"https://en.wikipedia.org/wiki/Chittagong\">Chittagong</a>, the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Port_of_Chittagong\">largest seaport</a>, is the second-largest city. The official language is&nbsp;<a href=\"https://en.wikipedia.org/wiki/Bengali_language\">Bengali</a>, one of the most eastern branches of the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Indo-European_language_family\">Indo-European language family</a>.</p>', NULL, NULL, NULL, NULL);

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
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gift_cards`
--

INSERT INTO `gift_cards` (`id`, `name`, `duration`, `purchase_price`, `giftcard_value`, `image`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'QSWQE', '30', '390', '500', '13182.png', 'jqury', '1', '2022-04-09 19:45:35', '2022-04-09 23:55:08'),
(3, 'dfghjrtyuj', '30', '390', '500', '10914.jpg', 'dfghjrtyuj', '1', '2022-04-11 20:00:12', '2022-04-11 20:00:25'),
(4, 'Mohsin', '32', '1235', '123', '75578.jpg', 'mohsin', '1', '2022-05-22 01:58:49', '2022-05-22 01:58:59'),
(5, 'Mohsin', '123', '1232', '500', '58674.png', 'mohsin', '1', '2022-05-22 02:06:06', '2022-05-22 02:06:15');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gift_card_orders`
--

INSERT INTO `gift_card_orders` (`id`, `user_id`, `name`, `phone`, `email`, `giftcard_id`, `account_type`, `transcation_id`, `transcation_number`, `giftcard_value`, `purchase_price`, `duration`, `expired_date`, `status`, `created_at`, `updated_at`) VALUES
(6, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Nagad', 'sdsegr', '1256576', '500', '390', '30', '2022-04-12', 'Completed', '2022-04-12 21:34:06', '2022-04-19 07:59:44'),
(7, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Rocket', 'sdsegr', '1256576', '500', '390', '30', '2022-05-13', 'New', '2022-04-12 21:57:08', '2022-04-12 21:57:08'),
(9, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Bkash', NULL, NULL, '500', '390', '30', '2022-05-19', 'New', '2022-04-19 07:39:15', '2022-04-19 07:39:15'),
(10, 32, 'QSWQE', '01715486265', 'mohsinsikder895@gmail.com', 2, 'Bkash', 'sdsegr', '1256576', '500', '390', '30', '2022-05-19', 'New', '2022-04-19 07:44:24', '2022-04-19 07:44:24'),
(11, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Bkash', 'sdsegr', '1256576', '500', '390', '30', '2022-05-19', 'Completed', '2022-04-19 07:52:03', '2022-04-19 08:03:09'),
(12, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Bkash', 'sdsegr', '1256576', '500', '390', '30', '2022-05-19', 'Completed', '2022-04-19 07:52:30', '2022-04-19 08:01:47'),
(13, 32, 'QSWQE', '01715486265', 'mohsinsikder895@gmail.com', 2, 'Nagad', 'sdsegr', '1256576', '500', '390', '30', '2022-05-19', 'New', '2022-04-19 07:54:36', '2022-04-19 07:54:36'),
(14, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Bkash', 'sdsegr', '1256576', '500', '390', '30', '2022-05-27', 'Completed', '2022-04-27 00:29:08', '2022-04-27 00:29:41'),
(15, 32, 'dfghjrtyuj', '01715486265', 'mohsinsikder895@gmail.com', 3, 'Bkash', 'sdsegr', '1256576', '500', '390', '30', '2022-05-27', 'Completed', '2022-04-27 00:37:05', '2022-04-27 00:37:28'),
(16, 32, 'QSWQE', '01715486265', 'mohsinsikder895@gmail.com', 2, 'Bkash', 'sdsegr', '1256576', '500', '390', '30', '2022-05-27', 'Completed', '2022-04-27 00:44:35', '2022-04-27 00:44:54');

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
(40, '2022_04_27_074450_create_qties_table', 22);

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
(61, 53, NULL, NULL, NULL, 0, '2022-05-15 03:15:30', '2022-05-15 03:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` int(11) DEFAULT NULL,
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
  `giftcard_amount` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `referral_id` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_id`, `user_email`, `name`, `address1`, `address2`, `city`, `postcode`, `country`, `phone`, `delivery`, `grand_total`, `shipping`, `subtotal`, `total_buying_price`, `vat`, `payable`, `order_status`, `delivery_date`, `giftcard_amount`, `status`, `payment_method`, `created_at`, `updated_at`, `referral_id`) VALUES
(1, '32', 17127, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2200', 200, 2000, 1800, NULL, NULL, 'new', '2022-04-26 18:00:00', '0', 'Cancelled', '2', '2022-04-18 21:46:55', '2022-04-28 01:02:28', NULL),
(2, '44', 13641, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '1200', 200, 1000, 800, NULL, NULL, 'new', '2022-04-18 17:24:49', '0', 'New', '2', '2022-04-18 22:01:31', '2022-04-18 22:01:31', NULL),
(3, '44', 17881, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2200', 200, 2000, 1800, NULL, NULL, 'new', '2022-04-19 18:00:00', '0', 'Pending', '2', '2022-04-18 22:03:07', '2022-04-19 02:28:03', NULL),
(4, '32', 18405, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '1200', 200, 1000, 800, NULL, NULL, 'new', '2022-04-28 18:00:00', '0', 'Completed', '2', '2022-04-19 09:19:01', '2022-04-28 01:02:05', NULL),
(5, '32', 17696, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2340', 200, 2000, 1800, 140, NULL, 'new', '2022-04-19 18:00:00', '0', 'Delivered', '2', '2022-04-19 17:51:25', '2022-04-28 01:07:06', NULL),
(6, '32', 17894, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2506.92', 200, 2156, 2000, 150.92, NULL, 'new', '2022-04-26 18:00:00', '0', 'Shipping', '2', '2022-04-23 17:53:01', '2022-04-28 01:01:16', NULL),
(7, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-04 17:23:08', NULL, NULL, NULL, '2021-04-15 13:20:01', '2021-04-14 13:20:01', NULL),
(8, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-18 17:23:12', NULL, NULL, NULL, '2021-05-15 13:20:01', '2021-05-14 13:20:01', NULL),
(9, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-11 17:23:15', NULL, NULL, NULL, '2021-06-15 13:20:01', '2021-06-14 13:20:01', NULL),
(10, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-04 17:23:18', NULL, NULL, NULL, '2021-07-15 13:20:01', '2021-07-14 13:20:01', NULL),
(11, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-12 17:23:25', NULL, NULL, NULL, '2021-08-15 13:20:01', '2021-08-14 13:20:01', NULL),
(12, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-05 17:23:28', NULL, NULL, NULL, '2021-09-15 13:20:01', '2021-09-14 13:20:01', NULL),
(13, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-04 17:23:30', NULL, 'Completed', NULL, '2021-10-15 13:20:01', '2021-10-14 13:20:01', NULL),
(14, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-19 17:23:36', NULL, NULL, NULL, '2021-11-15 13:20:01', '2021-11-14 13:20:01', NULL),
(15, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-11 17:24:23', NULL, NULL, NULL, '2021-12-15 13:20:01', '2021-12-14 13:20:01', NULL),
(16, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-17 17:24:19', NULL, 'Completed', NULL, '2022-01-15 13:20:01', '2022-01-14 13:20:01', NULL),
(17, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-11 17:24:15', NULL, NULL, NULL, '2022-02-15 13:20:01', '2022-02-14 13:20:01', NULL),
(18, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-18 17:24:12', NULL, NULL, NULL, '2022-03-15 13:20:01', '2022-03-14 13:20:01', NULL),
(19, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-04 17:24:10', NULL, NULL, NULL, '2022-04-15 13:20:01', '2022-04-14 13:20:01', NULL),
(20, '11', 1789, 'rahim@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '09876543211', 'flat', '2000', 200, 1800, 1750, 50, NULL, NULL, '2022-04-25 17:24:06', NULL, NULL, NULL, '2021-03-15 13:20:01', '2021-03-14 13:20:01', NULL),
(21, '12', 1123, 'rahem@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '01234567890', 'flat', '2000', 200, 1800, 1750, 150, NULL, NULL, '2022-04-11 17:23:39', NULL, NULL, NULL, '2022-01-05 13:55:20', '2022-01-05 13:55:20', NULL),
(22, '12', 1123, 'rahem@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '01234567890', 'flat', '2000', 200, 1800, 1750, 150, NULL, NULL, '2022-04-04 17:23:42', NULL, NULL, NULL, '2022-01-05 13:55:20', '2022-01-05 13:55:20', NULL),
(23, '12', 1123, 'rahem@gmail.com', 'rahem', 'dhaka', NULL, NULL, '1214', 'bangladesh', '01234567890', 'flat', '2000', 200, 1800, 1750, 150, NULL, NULL, '2022-04-04 17:23:45', NULL, NULL, NULL, '2021-12-05 13:55:20', '2021-12-05 13:55:20', NULL),
(24, '48', 11055, 'rahem@gmail.com', 'rahim', 'dhaka', NULL, 'dhaka', '1214', 'Bangladesh', '01836999981', 'flat', '248.15', 200, 45, 500, 3.15, NULL, 'new', '2022-04-26 18:00:00', '0', 'Processing', '2', '2022-04-26 12:44:06', '2022-04-28 01:54:18', NULL),
(25, '48', 17651, 'rahem@gmail.com', 'rahim', 'dhaka', NULL, 'dhaka', '1214', 'Bangladesh', '01836999981', 'flat', '2340', 200, 2000, 1600, 140, NULL, 'new', '2022-04-28 18:00:00', '0', 'Packaging', '2', '2022-04-26 12:46:45', '2022-04-28 01:00:36', NULL),
(26, '32', 12309, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2340', 200, 2000, 1800, 140, NULL, 'new', '2022-04-28 18:00:00', '0', 'Delivered', '2', '2022-04-27 19:44:12', '2022-04-28 01:38:32', NULL),
(27, '32', 17514, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2340', 200, 2000, 1800, 140, NULL, 'new', '2022-04-26 18:00:00', '0', 'New', '2', '2022-04-27 19:47:39', '2022-04-28 01:39:59', NULL),
(28, '32', 11176, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2340', 200, 2000, 1800, 140, NULL, 'new', '2022-04-28 08:21:45', '0', 'Cancelled', '2', '2022-04-28 02:21:45', '2022-04-28 03:27:38', NULL),
(29, '32', 10425, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '209.63', 200, 9, 2, 0.63, NULL, 'new', '2022-04-28 08:25:15', '0', 'Cancelled', '2', '2022-04-28 02:25:15', '2022-04-28 03:26:39', NULL),
(30, '32', 12170, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '2340', 200, 2000, 1800, 140, NULL, 'new', '2022-04-28 08:49:53', '0', 'Cancelled', '2', '2022-04-28 02:49:53', '2022-05-21 21:20:47', NULL),
(31, '32', 17962, 'mohsinsikder895@gmail.com', 'Mohsin Sikder', 'plashbari bazar', 'plashbari bazar', 'saver ashulia', '02128736', 'Bangladesh', '01715486265', 'flat', '4489.63', 200, 4009, 1200, 280.63, NULL, 'New', '2022-05-09 10:58:29', '0', 'New', NULL, '2022-05-09 04:58:29', '2022-05-09 04:58:29', NULL);

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
(43, 31, 17962, 32, 11, 'SWD-00005', 'styles shirt', 1200, 2000.00, 149, NULL, NULL, '2022-05-09 04:58:30', '2022-05-09 04:58:30');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `order_id`, `status`, `order_date`, `delivery_date`, `comment`, `created_at`, `updated_at`) VALUES
(1, 3, 'Completed', '2022-04-19', NULL, NULL, '2022-04-19 02:01:49', '2022-04-19 02:01:49'),
(2, 3, 'Pending', '2022-04-19', '2022-04-20', 'sdsarfe', '2022-04-19 02:28:03', '2022-04-19 02:28:03'),
(3, 8, NULL, '2022-04-26', '2022-04-13', NULL, '2022-04-26 18:15:35', '2022-04-26 18:15:35'),
(4, 8, 'Cancelled', '2022-04-26', NULL, NULL, '2022-04-26 18:31:27', '2022-04-26 18:31:27'),
(5, 7, 'Completed', '2022-04-26', '2022-04-28', NULL, '2022-04-26 19:08:04', '2022-04-26 19:08:04'),
(6, 16, NULL, '2022-04-27', '2022-04-29', 'sdsarfe', '2022-04-26 23:51:29', '2022-04-26 23:51:29'),
(7, 16, 'Cancelled', '2022-04-27', '2022-04-28', NULL, '2022-04-26 23:56:05', '2022-04-26 23:56:05'),
(8, 27, 'Waiting For Delivery', '2022-04-28', NULL, NULL, '2022-04-28 00:16:49', '2022-04-28 00:16:49'),
(9, 27, 'Shipping', '2022-04-28', '2022-04-29', NULL, '2022-04-28 00:37:54', '2022-04-28 00:37:54'),
(10, 26, 'Waiting For Delivery', '2022-04-28', '2022-04-27', NULL, '2022-04-28 00:38:17', '2022-04-28 00:38:17'),
(11, 27, 'New', '2022-04-28', NULL, NULL, '2022-04-28 00:58:07', '2022-04-28 00:58:07'),
(12, 26, 'Processing', '2022-04-28', '2022-04-29', NULL, '2022-04-28 01:00:03', '2022-04-28 01:00:03'),
(13, 25, 'Packaging', '2022-04-26', '2022-04-29', NULL, '2022-04-28 01:00:36', '2022-04-28 01:00:36'),
(14, 24, 'Waiting For Delivery', '2022-04-26', '2022-04-20', NULL, '2022-04-28 01:00:57', '2022-04-28 01:00:57'),
(15, 6, 'Shipping', '2022-04-23', '2022-04-27', NULL, '2022-04-28 01:01:16', '2022-04-28 01:01:16'),
(16, 5, 'Delivered', '2022-04-19', '2022-04-26', NULL, '2022-04-28 01:01:44', '2022-04-28 01:01:44'),
(17, 4, 'Completed', '2022-04-19', '2022-04-29', NULL, '2022-04-28 01:02:05', '2022-04-28 01:02:05'),
(18, 1, 'Cancelled', '2022-04-19', '2022-04-27', NULL, '2022-04-28 01:02:28', '2022-04-28 01:02:28'),
(19, 5, 'Delivered', '2022-04-19', '2022-04-20', NULL, '2022-04-28 01:07:06', '2022-04-28 01:07:06'),
(20, 27, 'Delivered', '2022-04-28', '2022-04-29', NULL, '2022-04-28 01:36:27', '2022-04-28 01:36:27'),
(21, 27, 'Delivered', '2022-04-28', '2022-04-29', NULL, '2022-04-28 01:37:23', '2022-04-28 01:37:23'),
(22, 26, 'Delivered', '2022-04-28', '2022-04-29', NULL, '2022-04-28 01:38:32', '2022-04-28 01:38:32'),
(23, 27, 'New', '2022-04-28', '2022-04-27', NULL, '2022-04-28 01:39:59', '2022-04-28 01:39:59'),
(24, 24, 'Processing', '2022-04-26', '2022-04-27', NULL, '2022-04-28 01:54:18', '2022-04-28 01:54:18');

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
  `develop_owner` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `parent_id`, `subcat_id`, `product_name`, `buying_price`, `price`, `flash_sale_price`, `quantity`, `model_no`, `image`, `flash_sale`, `flash_sale_start_date`, `flash_sale_end_date`, `slug`, `description`, `summery`, `document`, `supplier`, `specification`, `status`, `created_at`, `updated_at`, `home_automotion`, `feature_products`, `develop_owner`) VALUES
(1, 3, 12, 'Zif socket (40 pin)', '10000', 1000, NULL, 1000, 'C&C-00035', '30447.jpg', '0', NULL, NULL, 'zif-socket-40-pin', NULL, 'asdersftreg', '78i87i', NULL, NULL, '1', '2022-03-30 08:48:52', '2022-04-19 01:45:48', 1, 1, NULL),
(2, 1, NULL, 'USB Connector B type', '100', 2000, NULL, 20, 'C&C-00008', '55663.jpg', '0', NULL, NULL, 'usb-connector-b-type', NULL, NULL, NULL, NULL, NULL, '1', '2022-03-30 08:50:30', '2022-04-28 02:09:48', 1, 1, NULL),
(3, 3, NULL, 'SparkFun USB Host Shield', '2000', 2156, NULL, 100, 'ARD-00005', '41010.jpg', '0', NULL, NULL, 'sparkfun-usb-host-shield', NULL, NULL, NULL, 'SparkFun, USA', NULL, '1', '2022-03-30 08:53:11', '2022-04-27 02:18:38', 1, 1, NULL),
(4, 2, NULL, 'IRFZ44N MOSFET12', '1500', 2000, NULL, 100, 'SWD-00005', '70591.jpg', '0', NULL, NULL, 'irfz44n-mosfet12', NULL, 'werwet', 'etrtyry', NULL, NULL, '1', '2022-03-30 09:09:27', '2022-04-27 02:18:21', 1, 1, NULL),
(5, 2, 9, 'IRFZ44N MOSFET', '1800', 2000, NULL, 100, 'C&C-00008', '41210.jpg', '0', NULL, NULL, 'irfz44n-mosfet', NULL, NULL, 'werfet', 'SparkFun, USA', NULL, '1', '2022-04-06 10:21:30', '2022-04-27 02:18:03', 1, 1, NULL),
(6, 2, NULL, 'food', '2', 9, NULL, 100, 'C&C-00008', '30997.jpg', '0', NULL, NULL, 'food', NULL, NULL, NULL, 'SparkFun, USA', NULL, '1', '2022-04-06 10:28:37', '2022-04-27 02:17:32', 1, 1, NULL),
(7, 2, NULL, 'styles shirt', '1200', 2000, NULL, 100, 'SWD-00005', '79247.jpg', '0', NULL, NULL, 'styles-shirt', NULL, '<p>aSDWEFR</p>', '<p>QWERGT</p>', 'SparkFun, USA', NULL, '1', '2022-04-27 01:57:24', '2022-04-27 02:17:13', NULL, NULL, NULL),
(8, 2, NULL, 'styles shirt', '1200', 2000, NULL, 200, 'SWD-00005', '17824.jpg', '0', NULL, NULL, 'styles-shirt', NULL, '<p>aSDWEFR</p>', '<p>QWERGT</p>', 'SparkFun, USA', NULL, '1', '2022-04-27 01:58:20', '2022-04-27 02:16:55', NULL, NULL, NULL),
(9, 2, NULL, 'styles shirt', '1200', 2000, NULL, 100, 'SWD-00005', '83208.jpg', '0', NULL, NULL, 'styles-shirt', NULL, '<p>aSDWEFR</p>', '<p>QWERGT</p>', 'SparkFun, USA', NULL, '1', '2022-04-27 01:58:49', '2022-04-27 02:16:34', NULL, NULL, NULL),
(10, 2, NULL, 'styles shirt', '1200', 2000, NULL, 500, 'SWD-00005', '98209.jpg', '0', NULL, NULL, 'styles-shirt', NULL, '<p>aSDWEFR</p>', '<p>QWERGT</p>', 'SparkFun, USA', NULL, '1', '2022-04-27 01:59:18', '2022-04-27 02:16:16', NULL, NULL, NULL),
(11, 3, 12, 'styles shirt', '1200', 2000, NULL, 50, 'SWD-00005', '11579.jpg', '0', NULL, NULL, 'styles-shirt', NULL, '<p>aSDWEFR</p>', '<p>QWERGT</p>', 'SparkFun, USA', NULL, '1', '2022-04-27 02:02:33', '2022-04-27 02:13:49', NULL, NULL, NULL),
(12, 2, 9, 'styles shirt', '1200', 2000, NULL, 92, 'SWD-00005', '19468.jpg', '0', NULL, NULL, 'styles-shirt', NULL, '<p>aSDWEFR</p>', '<p>QWERGT</p>', 'SparkFun, USA', NULL, '1', '2022-04-27 02:03:20', '2022-05-11 04:05:15', NULL, NULL, NULL),
(13, 2, 9, 'pc computer', '1200', 1500, '1300', 12, 'C&C&b-00035', '62541.jpg', '1', '2022-05-10', '2022-05-21', 'pc-computer', NULL, '<p>wedrwegteg</p>', '<p>rtyuu</p>', 'SparkFun, USA', NULL, '1', '2022-05-11 03:24:20', '2022-05-11 03:24:20', NULL, NULL, NULL),
(16, 2, 9, 'food sdfrg', '1100', 2000, '1800', 24, 'C&C-00008', '40885.jpg', '1', '2022-05-09', '2022-05-31', 'food-sdfrg', NULL, '<p>qwsqsw</p>', '<p>wedwqd</p>', 'Rahat', NULL, '1', '2022-05-11 03:51:56', '2022-05-11 04:03:15', NULL, NULL, NULL);

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
(1, 12, 12, '2022-04-27 02:03:20', '2022-04-27 02:03:20'),
(2, 11, 100, '2022-04-27 02:13:16', '2022-04-27 02:13:16'),
(3, 11, 50, '2022-04-27 02:13:49', '2022-04-27 02:13:49'),
(4, 10, 500, '2022-04-27 02:16:16', '2022-04-27 02:16:16'),
(5, 9, 100, '2022-04-27 02:16:34', '2022-04-27 02:16:34'),
(6, 8, 200, '2022-04-27 02:16:55', '2022-04-27 02:16:55'),
(7, 7, 100, '2022-04-27 02:17:13', '2022-04-27 02:17:13'),
(8, 6, 100, '2022-04-27 02:17:33', '2022-04-27 02:17:33'),
(9, 5, 100, '2022-04-27 02:18:03', '2022-04-27 02:18:03'),
(10, 4, 100, '2022-04-27 02:18:21', '2022-04-27 02:18:21'),
(11, 3, 100, '2022-04-27 02:18:38', '2022-04-27 02:18:38'),
(12, 12, 20, '2022-04-27 02:19:32', '2022-04-27 02:19:32'),
(13, 12, 10, '2022-04-27 02:20:06', '2022-04-27 02:20:06'),
(14, 12, 50, '2022-04-27 02:23:15', '2022-04-27 02:23:15'),
(15, 2, 20, '2022-04-28 02:09:48', '2022-04-28 02:09:48'),
(16, 13, 12, '2022-05-11 03:24:20', '2022-05-11 03:24:20'),
(17, 14, 3, '2022-05-11 03:29:01', '2022-05-11 03:29:01'),
(18, 15, NULL, '2022-05-11 03:42:34', '2022-05-11 03:42:34'),
(19, 16, 12, '2022-05-11 03:51:56', '2022-05-11 03:51:56'),
(20, 16, 12, '2022-05-11 04:00:49', '2022-05-11 04:00:49'),
(21, 16, 24, '2022-05-11 04:03:15', '2022-05-11 04:03:15'),
(22, 12, 92, '2022-05-11 04:05:15', '2022-05-11 04:05:15');

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
(3, 32, 4, 'szfdsf', '1', '2022-04-01 00:10:12', '2022-04-10 00:09:49');

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
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
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
(6, 32, 4, 1, 'dfesfrgr', '1', '2022-04-01 00:30:27', '2022-04-01 00:30:27'),
(7, 32, 4, 1, 'sfdsgfrg', '1', '2022-04-01 00:30:51', '2022-04-01 00:30:51'),
(8, 32, 2, 3, '0', '1', '2022-04-06 22:14:01', '2022-04-06 22:14:01'),
(9, 32, 2, 5, '0', '1', '2022-04-06 22:14:29', '2022-04-06 22:14:29'),
(10, 32, 13, 1, '0', '1', '2022-05-16 01:42:28', '2022-05-16 01:42:28');

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
('GZ0k09HA7PwwhRScNoX1T5ENckJYRBuo2KpBEtci', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 'YTo1OntzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHVTZ3lKMXpXLmgzZG5WSm1oZzN4b3VLSWhrS25EbkxQQ2s4M3RZdFdyTE45TnFrUnpvUU9tIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovL2xvY2FsaG9zdC90ZWNoc2hvcGZpbmFsIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6ImhHd3hvaFNUTHVacmRQTEhMSFh0RU85NmpEZ3NsdWxBTU1KWk1MVVUiO3M6ODoicmVmZXJhbGwiO3M6MDoiIjt9', 1653469071);

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
  `range_amount` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `slug`, `date_of_birth`, `gender`, `referral_id`, `referred_by`, `referral`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `image`, `is_admin`, `is_banned`, `status`, `created_at`, `updated_at`, `city`, `country`, `postcode`, `address1`, `address2`, `commision`, `range_amount`) VALUES
(2, 'admin', 'admin@gmail.com', '1715786', NULL, '$2y$10$YWg9UI2/3Y4NlYDuU.Vtce6uHMo0IatHDWImNVWkKKXSgl3AwYl5y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, '358.jpg', 'admin', '0', '0', '2022-03-20 09:25:49', '2022-04-12 08:14:38', NULL, NULL, NULL, NULL, NULL, NULL, '100'),
(11, 'Rahat', 'rahat89512@gmail.com', '01715486265', NULL, '$2y$10$d70SICXdCrHQ/grYy9YohOe725PK0ssED.YOMqMYGHI79O/Wj9s3m', '62Mohsin Sikder', '2022-05-05', 'male', 'Mohsin Sikder2994', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '2022-04-19 08:14:49', '2022-04-19 08:14:49', NULL, NULL, NULL, NULL, NULL, 10, '100'),
(32, 'Yeamin', 'mohsinsikder895@gmail.com', '01715486265', NULL, '$2y$10$uSgyJ1zW.h3dnVJmhg3xouKIhkKnDnLPCk83tYtWrLN9NqkRzoQOm', '99Mohsin', '2022-05-05', 'male', 'sikder99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2022-03-28 20:48:27', '2022-05-09 04:58:29', 'saver ashulia', 'Bangladesh', '02128736', 'plashbari bazar', 'plashbari bazar', 10, '100'),
(47, 'Rahat', 'mohsinsikder999@gmail.com', '0171548696', NULL, '$2y$10$nAAE3gtnCD13PCmdt9BxP.l4bhcmKMjz6djrrazzDC.wdDqmZ7qfy', '82Mohsin Sikder', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2022-04-24 02:30:04', '2022-04-24 02:56:50', NULL, NULL, NULL, NULL, NULL, NULL, '100'),
(48, 'Mohsin Sikder', 'm@gmail.com', '01715486265', NULL, '$2y$10$Ir4viEulxO66GmHDJRFtJOdk4PrHET4WinPPZkeIJeM8dCMzUP2ly', '49Mohsin Sikder', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '2022-04-26 06:13:34', '2022-04-26 06:13:34', NULL, NULL, NULL, NULL, NULL, NULL, '100'),
(52, 'Sikder', 'mohsinsikder.cse@gmail.com', '01706125400', NULL, '$2y$10$Wr6zMzk4rgVOGmjSqW09fepiKpdteCr3xNkCEUHNmQw1OLuAzWOTW', '56Sikder', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '1', '2022-04-26 19:22:34', '2022-05-15 03:27:14', NULL, NULL, NULL, NULL, NULL, 10, '100'),
(53, 'Mohsin', 'mohsinsikder895123@gmail.com', '01715486265', NULL, '$2y$10$BsQEPZfFaWPubWiWGAJnzOhUt0etDwu12Wjwx/9.2GIFi7O7oSmzm', '12Mohsin', '2022-05-26', 'male', 'Mohsin7788', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', '2022-05-15 03:15:30', '2022-05-15 03:15:30', NULL, NULL, NULL, NULL, NULL, 10, '100');

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
(8, NULL, 11, 'mohsinsikder895@gmail.com', 'ntiFaEnHNn8wgT2G56S6lDhjixqONV8ODiC4dona', '2022-05-19 13:04:58', '2022-05-19 13:04:58');

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `qties`
--
ALTER TABLE `qties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `referalls`
--
ALTER TABLE `referalls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviw_ratings`
--
ALTER TABLE `reviw_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
