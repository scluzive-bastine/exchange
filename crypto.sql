-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 27, 2020 at 02:20 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crypto`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Buy-Sell Exchange', 'About Buy-Sell community', 1, '2020-06-25 00:36:30', '2020-07-23 23:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Testing header 1', 'description body update', 1, '2020-06-24 11:43:21', '2020-06-25 01:32:42'),
(2, 'Testing header 2', 'testing description 2', 0, '2020-06-24 12:33:03', '2020-06-24 12:33:03'),
(3, 'Testing header 3', 'testing description 3', 1, '2020-06-24 12:35:19', '2020-06-24 12:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_22_073630_create_faqs_table', 2),
(5, '2020_06_25_012039_create_about_us_table', 3),
(6, '2020_07_24_001731_create_news_table', 4),
(7, '2020_07_24_002415_create_tags_table', 4),
(8, '2020_07_24_032055_create_tags_table', 5),
(9, '2020_08_21_122543_create_transactions_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `tag_id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(3, 2, 'Lisk (LSK) Price Prediction', '<p>In this article, we will run through the basic information and fundamentals of LSK as a project, give you information on the LSK token, and offer a prediction for the price of LSK in 2020-2025. Let&rsquo;s start the price prediction with a brief introduction to the Lisk project.</p>\r\n\r\n<h3><strong>What is LSK?</strong></h3>\r\n\r\n<p>LSK is the token that powers the Lisk decentralized network. It is a competitor blockchain of the Ethereum and NEO networks. The Lisk network is a decentralized application platform that utilizes side chains and smart contracts. Technical analysis of this blockchain shows that it is an attractive option for developers because it uses JavaScript to develop its dApps, which means developers can easily integrate their skills into the blockchain without having to learn new skills.</p>\r\n\r\n<p>Lisk is a relatively new project. It was developed in 2016 by Max Kordek and Oliver Beddows. It is rumored that at the outset of the project key members of the original Ethereum team were working on the Lisk network in collaboration with the Lisk team. In 2018 the project made huge strides in developing the network by improving the platform&rsquo;s ease of use, thereby enhancing its accessibility for the general public.</p>\r\n\r\n<h3><strong>What Does the Lisk (LSK) Price Depend On?</strong></h3>\r\n\r\n<p>Like any other cryptocurrency, the Lisk price depends primarily on two fundamental components: (1) The use case of the token, and (2) the price of Bitcoin. LSK is a utility token, meaning that its utility lies in financing the platform. It is also used to gain access to other useful features of the network. The Lisk price will rise in the future if the platform increases in popularity among both developers and a wider audience. In other words, as demand for the token increases, the Lisk price will rise accordingly.</p>\r\n\r\n<p>Additionally, nearly all cryptocurrencies are linked to Bitcoin. This means that their prices fluctuate in consonance with the Bitcoin price; when Bitcoin pumps, altcoins pump, and when BTC dumps, altcoins dump. In the upcoming bull run of Bitcoin, more attention will be brought to blockchain technology. This provides an opportunity for the LSK price to be pumped as new investors entering the cryptocurrency space get their first exposure to Lisk. The new investors will do their research on Lisk and see how powerful the token is, which will lead to a price pump as more investors will buy-in.</p>\r\n\r\n<p><img alt=\"\" src=\"https://changenow.io/blog/changenow-content/uploads/2020/07/image3-9-768x425.png\" style=\"height:425px; width:768px\" /></p>', '1596038176.jpeg', '2020-07-29 14:56:16', '2020-07-29 14:56:16'),
(2, 3, 'Learn Crypto with the Newly Released NOWAcademy', '<p>How to understand crypto from scratch if you don&rsquo;t even know where to start? How not to be afraid you&rsquo;ll miss something important on your way?</p>\r\n\r\n<p>ChangeNOW has created&nbsp;<a href=\"https://nowacademy.io/\" target=\"_blank\"><strong>NOWAcademy&nbsp;</strong></a>to show the path to all who want to learn crypto. The lessons on the platform are organized<strong>&nbsp;from the simple to the complex, and from the general to the specific</strong>. This means that you have a consistent learning plan &ndash;&nbsp;everything important is brought together and laid out in an easily understandable form.</p>\r\n\r\n<p><strong>Academy is in beta now</strong>&nbsp;&ndash; this means the starter Beginner level lessons are available, and much more content and features are soon to come. Try&nbsp;<a href=\"https://nowacademy.io/\" target=\"_blank\"><strong>NOW</strong></a>&nbsp;or run through a quick guide below &ndash; it will help you get the most from your experience. Please share your feedback at&nbsp;<strong><a href=\"mailto:alexey.f@changenow.io\">alexey.f@changenow.io</a></strong>!</p>', '1595598551.png', '2020-07-24 12:49:11', '2020-07-26 00:37:49'),
(4, 3, 'Where to Buy IOTA Coin?', '<h3><strong>What Is IOTA?</strong></h3>\r\n\r\n<p>In 2017, IOTA came into the market as a cryptocurrency with the primary goal of introducing its blockchain capabilities to the internet of things. In other words, IOTA was designed from the very start to maximize the power latent in the internet of things. It enables secure sales and data stream exchanges that do not have transaction fees or require miners to maintain operations. Every day the world marches towards a fully functional machine-to-machine interactive ecosystem. IOTA has sidestepped the highest hurdles to this world, such as mining expenses, scalability problems, and slow transaction speeds. These are the reasons why IOTA is going up today.</p>\r\n\r\n<h3><strong>How to Buy IOTA on ChangeNOW</strong></h3>\r\n\r\n<p>On today&rsquo;s cryptocurrency market, there are many exchanges where you can purchase IOTA as the coin is quite popular. Binance, Bittrex, and other exchanges are available to buy or sell IOTA. However, we recommend you using ChangeNOW cryptocurrency exchange as we offer a very simple, secure, and user-friendly service.</p>\r\n\r\n<p>As a non-custodial service, we do not store any of your funds -so you have full control over your assets. Also, ChangeNOW does not require any form of account creation, which is crucial to ensure your security and anonymity. Since there is no personal information stored on the platform, data leaks of this kind are simply impossible.</p>\r\n\r\n<p>A major advantage of ChangeNOW is that an average exchange takes you no more than 5 minutes. Special algorithms pick the best rate available on the market at the time of the exchange for the trading pairs of your choice, so you don&rsquo;t have to worry you have missed an opportunity to exchange IOTA with better rates.</p>\r\n\r\n<p><img alt=\"\" src=\"https://changenow.io/blog/changenow-content/uploads/2020/07/image2-5-768x299.png\" style=\"height:299px; width:768px\" /></p>', '1596038765.jpeg', '2020-07-29 15:06:05', '2020-07-29 15:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(1, 'Wallets', '2020-07-24 02:22:13', '2020-07-24 02:44:22'),
(2, 'price predictions', '2020-07-24 02:29:46', '2020-07-24 02:29:46'),
(3, 'News', '2020-07-24 02:31:40', '2020-07-24 02:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coin_send_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coin_recieve_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `send_coin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `send_coin_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rec_coin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rec_coin_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `send_amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recieve_amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `transaction_id`, `coin_send_address`, `coin_recieve_address`, `send_coin`, `send_coin_image`, `rec_coin`, `rec_coin_image`, `send_amount`, `recieve_amount`, `created_at`, `updated_at`) VALUES
(1, '98ee527029c2f5', '3FFmnDTeu9TQZG64NLaeMdaN6sf8nhfvew', '0x957D906AEB375833E20cF1cf92Fa07AD37eEDe94', 'btc', 'https://changenow.io/images/coins/btc.svg', 'eth', 'https://changenow.io/images/coins/eth.svg', '1', '29.4272222', '2020-08-22 19:53:42', '2020-08-22 19:53:42'),
(3, 'd739552e575266', '36PYcwftGgt3Sza9KZfdXVVugGZDBsWER4', '0x957D906AEB375833E20cF1cf92Fa07AD37eEDe94', 'btc', 'https://changenow.io/images/coins/btc.svg', 'eth', 'https://changenow.io/images/coins/eth.svg', '0.2', '5.8739097', '2020-08-22 21:55:19', '2020-08-22 21:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sabastine', 'toshfuture@gmail.com', 1, NULL, '$2y$10$u988kNV.0zoBn5k9JBVTA.6lgNcGVkA1GEfsMyIY/sFoxHKsnWZ6q', NULL, '2020-06-10 18:04:15', '2020-06-10 18:04:15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
