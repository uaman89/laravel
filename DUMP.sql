-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 20, 2016 at 04:14 AM
-- Server version: 5.5.41-log
-- PHP Version: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poo_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_17_210642_add_language_field_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `language`) VALUES
(4, 'Українець', 'uaman89@gmail.com', '$2y$10$kHunVudDpt8VFNu2PRLqQ.khmLgi6ubM9s.6rJ3lYYQ6z4nhuVhUW', 'hdDwKCbUc8zfgswbp73dw7wmzenLEVjIg8wAoSHcAlEq8FKfwt9atWaBKiiC', '2016-03-18 02:57:20', '2016-03-19 23:07:33', 'uk'),
(5, 'Englishman', 'en@mail.com', '$2y$10$kHunVudDpt8VFNu2PRLqQ.khmLgi6ubM9s.6rJ3lYYQ6z4nhuVhUW', 'M3YilRNle7mEng6UZppaWzIVVeo4HcOA8QbzBTIhZjHpqmB3ye0zqLnIKov2', '2016-03-18 02:57:51', '2016-03-19 10:57:13', 'en'),
(7, 'Deutcher', 'de@mail.com', '$2y$10$kHunVudDpt8VFNu2PRLqQ.khmLgi6ubM9s.6rJ3lYYQ6z4nhuVhUW', '65u9PybYbk7UdfyTcDLuqyNymvlERQxDOWr0XCBuPl7FaPksQxIop8Fx3rp9', '2016-03-19 10:59:32', '2016-03-19 13:50:09', 'de'),
(8, 'newGuy', 'new@mail.com', '$2y$10$OsW39qygSPJJguCryFCcReUoc849O9tTEc1g3UlNHfXrs/Ooxak1W', 'u1CpTW9v51wCd8Hu1MqigpjNjZ4iZw8VIerQvJ13lhlnB2Ysz4kM9FMOi5eV', '2016-03-19 15:35:09', '2016-03-19 23:12:24', 'en'),
(9, 'de', 'de2@mail.com', '$2y$10$XTgAgwhalnH969jzdEm0POIISjtVRilAHmhIiheNMVxHmpTBAmnhK', 'Hi1keyV9YVQjm1LL3EQN3bm01xIkEm4BYHQPotCr27sngY9h4vBkHcdtrBz8', '2016-03-19 23:08:56', '2016-03-19 23:09:05', 'uk'),
(10, 'uk', 'ua@mail.com', '$2y$10$mSrUIdTT..nY9/A76XKxIemly3Y3lr8WD3iiweYoFvkIXyFArDv3K', NULL, '2016-03-19 23:09:41', '2016-03-19 23:09:41', 'de'),
(11, 'der', 'de3@mail.com', '$2y$10$WMUqnpQgWTCEkSK12RGoR.gGlJMNP/IDozsla8jIiM.ssHGyajBIu', NULL, '2016-03-19 23:13:08', '2016-03-19 23:13:08', 'de');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
