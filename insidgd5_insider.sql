-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 08:49 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insidgd5_insider`
--

-- --------------------------------------------------------

--
-- Table structure for table `alerts_subscription`
--

CREATE TABLE `alerts_subscription` (
  `id` mediumint(9) NOT NULL,
  `user_id` varchar(30) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `frequancy` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `destination_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alerts_subscription`
--

INSERT INTO `alerts_subscription` (`id`, `user_id`, `destination`, `frequancy`, `created_at`, `updated_at`, `destination_date`) VALUES
(2, '107', 'Norway', '2week', '2018-08-15 04:55:08', '2018-08-15 06:03:08', '2018-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` mediumint(9) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `like_count` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `like_count`, `created_at`, `updated_at`, `author`, `status`) VALUES
(1, 'Guest-friendly home improvements for your space', '1', '2018-8-17 3:00:00', '2018-08-17 05:11:59', 'Yassine', '1'),
(2, 'Building a 21st century company', '31', '2018-8-17 3:10:00', '2018-08-17 05:08:40', 'Yassine', '1'),
(3, '8 experience host tips and tricks you didn\'t know existed', '2', '2018-8-17 3:10:00', '2018-08-17 05:14:54', 'Yassine', '1'),
(4, 'update: an inside look at experience search rankings', '0', '2018-8-17 3:10:00', '2018-8-17 3:10:00', 'Yassine', '1'),
(5, 'coming soon: guest photos on your experience pages', '0', '2018-8-17 3:10:00', '2018-8-17 3:10:00', 'Yassine', '1'),
(6, 'Inside insidersuite experiences: your top six questions answered', '1', '2018-8-17 3:10:00', '2018-08-17 05:17:43', 'Yassine', '1');

-- --------------------------------------------------------

--
-- Table structure for table `blog_user`
--

CREATE TABLE `blog_user` (
  `id` mediumint(9) NOT NULL,
  `blog_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_user`
--

INSERT INTO `blog_user` (`id`, `blog_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '2', '108', '2018-08-17 05:08:40', '2018-08-17 05:08:40'),
(2, '1', '108', '2018-08-17 05:11:59', '2018-08-17 05:11:59'),
(3, '3', '108', '2018-08-17 05:14:54', '2018-08-17 05:14:54'),
(4, '6', '108', '2018-08-17 05:17:43', '2018-08-17 05:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(10) UNSIGNED NOT NULL,
  `hotel_idFk` int(10) UNSIGNED NOT NULL,
  `user_idFk` int(10) UNSIGNED NOT NULL,
  `booking_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` mediumint(9) NOT NULL,
  `department` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `position_count` int(11) DEFAULT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `department`, `position_name`, `office`, `description`, `position_count`, `created_at`, `updated_at`) VALUES
(1, 'Finance & Accounting', 'Analyst, Platform', 'San Francisco, United States', 'We find solutions to all problems. We take our responsibilities very seriously, but we take on new challenges with a creative and innovative spirit. We provide reports, pay bills and teams, ensure our liquidity and respect compliance requirements as closely as possible. We are also developing solutions that fuel Airbnb\'s rapid growth and support its success. We have gradually built the international financial infrastructure of the company. We create effective solutions while keeping our smile, our energy and our passion. Above all, we have the team spirit. Are you like us?', 1, '2018-08-16 14:06:16', '2018-08-16 14:06:16'),
(2, 'Engineering', 'Application Security Engineer', 'Vladivostok, Russia', 'Insider suite is the largest housing-sharing platform in the world, and we grow every day more. With more than 300 million visits over the last ten years, we are constantly facing challenges in search algorithms, payments, fraud prevention and growth. All while maintaining an exceptional user experience. We want to develop solutions to these problems that are scalable, efficient and elegant, and we are looking for talent to help us.', 10, '2018-08-16 15:06:16', '2018-08-16 15:06:16'),
(3, 'Trust and security', 'Crisis Management Investigator', 'Portland, United States', 'The cornerstone of Insider suite is trust. Our team intends to promote this feeling and facilitate travel and accommodation for our users. We are at the forefront of the Insider suite community and we are constantly imagining new ways to keep our friends and neighbors safe while sharing our living environment. On a daily basis, we put in place a unique blend of alertness, ingenuity, adaptability and empathy. We like to think that we are a unique species. If the resolution of extraordinary and ever-changing problems or the idea of ​​making the world a safer place makes you dream, we want to hear from you.', 13, '2018-08-16 15:06:19', '2018-08-16 15:06:19'),
(4, 'Marketing and communication', 'Brand Marketing Manager', 'London, United Kingdom', 'We are the ones who tell the Insidersuite story. Our mission ? Share the values ​​of Insidersuite around the world, create content that will make us laugh and cry our guests and travelers. Responsible for social networks, distribution and partnerships, we spread the word of Insidersuite, online and offline. We bring a spirit of authenticity and sharing to our users and, in return, their passion, their comments and their dreams help us shape our product. We are the type to be struck by creative ideas in the middle of the night, without waiting for the next day to share them.', 13, '2018-08-16 15:09:19', '2018-08-16 15:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `id` mediumint(9) NOT NULL,
  `user_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attached_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`id`, `user_id`, `email`, `name`, `content`, `_status`, `attached_file`, `created_at`, `updated_at`, `subject`) VALUES
(1, '108', 'yuiiwanov523@gmail.com', 'sasin', 'hollaasd', 'unread', NULL, '2018-08-16 14:06:16', '2018-08-16 14:06:16', 'assensin');

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `favourite_id` int(10) UNSIGNED NOT NULL,
  `user_idFk` int(10) UNSIGNED NOT NULL,
  `hotel_idFk` int(10) UNSIGNED NOT NULL,
  `favorite_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`favourite_id`, `user_idFk`, `hotel_idFk`, `favorite_status`, `created_at`, `updated_at`) VALUES
(1, 68, 2, '0', '2018-07-11 17:50:53', '2018-07-19 16:18:03'),
(2, 91, 1, '1', '2018-07-11 17:52:26', '2018-08-06 15:19:53'),
(3, 108, 4, '0', '2018-08-06 15:20:14', '2018-08-16 00:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` mediumint(9) NOT NULL,
  `user_id` varchar(30) DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `rate`, `created_at`, `updated_at`) VALUES
(1, '107', '5', '2018-08-15 07:05:22', '2018-08-15 07:05:22'),
(2, '108', '5', '2018-08-16 15:20:33', '2018-08-16 15:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotel_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `list_quote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_remaining` date NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `hotel_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotel_id`, `name`, `country`, `city`, `banner_image`, `list_quote`, `time_remaining`, `discount`, `hotel_status`, `created_at`, `updated_at`) VALUES
(1, 'Hotel 1', 'Australia', 'Sydney', 'imgs/InsiderSuite_Our_Story.jpg', 'Hotel Slang', '2018-07-11', -20, '1', NULL, NULL),
(2, 'Hotel 1', 'Australia', 'Sydney', 'imgs/InsiderSuite_Our_Story.jpg', 'Hotel Slang', '2018-07-11', -20, '1', NULL, NULL),
(3, 'Hotel 1', 'Australia', 'Sydney', 'imgs/InsiderSuite_Our_Story.jpg', 'Hotel Slang', '2018-07-11', -20, '1', NULL, NULL),
(4, 'Hotel 1', 'Australia', 'Sydney', 'imgs/InsiderSuite_Our_Story.jpg', 'Hotel Slang', '2018-07-11', -20, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `issuedgiftcard`
--

CREATE TABLE `issuedgiftcard` (
  `id` mediumint(9) NOT NULL,
  `user_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `design_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sender_name` int(11) DEFAULT NULL,
  `beneficiary_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `beneficiary_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `little_word` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_stamp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `voucher_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_05_18_203515_create_user_roles_table', 1),
(2, '2018_05_18_203636_create_users_table', 1),
(3, '2018_06_27_140748_create_hotels_table', 1),
(4, '2018_06_27_143641_create_bookings_table', 1),
(5, '2018_07_01_150339_create_favourites_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` mediumint(9) NOT NULL,
  `offer_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_place` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `expiration_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `like_count` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_duration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `offer_name`, `location_country`, `location_place`, `expiration_date`, `discount`, `like_count`, `created_at`, `updated_at`, `img_path`, `time_duration`) VALUES
(1, 'Grand Hotel Hyatt', 'Indonesia', 'Bali', '2018-8-20 8:30:00', '70', '0', '2018-8-15 12:00:00', '2018-8-15 12:00:00', '../imgs/background3.jpg', '11'),
(2, 'Corinthia Hotel Budapest', 'Hungary', 'Budapest', '2018-8-20 9:30:00', '50', '0', '2018-8-15 12:00:00', '2018-8-15 12:00:00', '../images/temp/5b5ae0b5167d7o.jpg', '12'),
(3, 'JA Palm Tree Court', 'United Arab Emirates', 'Dubai', '2018-8-20 9:30:00', '70', '0', '2018-8-15 15:00:00', '2018-8-15 15:00:00', '../images/temp/5b56e2fd5914do.jpg', '15');

-- --------------------------------------------------------

--
-- Table structure for table `offer_detail`
--

CREATE TABLE `offer_detail` (
  `id` mediumint(9) NOT NULL,
  `offer_id` varchar(30) NOT NULL,
  `pre_price_discount` varchar(255) NOT NULL,
  `after_price_discount` varchar(255) NOT NULL,
  `hotel_description` text NOT NULL,
  `tripAdvisor_score` varchar(255) NOT NULL,
  `destination_description` text NOT NULL,
  `room_type1` varchar(255) NOT NULL,
  `room_type2` varchar(255) NOT NULL,
  `room1_description` text,
  `room2_description` text,
  `room1_price` varchar(255) DEFAULT NULL,
  `room2_price` varchar(255) DEFAULT NULL,
  `extra_description` text,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` mediumint(9) NOT NULL,
  `partner_name` varchar(30) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `last_audit` varchar(255) DEFAULT NULL,
  `date_` varchar(255) DEFAULT NULL,
  `booking_count` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `partner_name`, `contact_person`, `email`, `phone`, `last_audit`, `date_`, `booking_count`, `created_at`, `updated_at`) VALUES
(1, 'Juventus FC.', 'Cristiano Ronaldo', 'cr7@gmail.com', '345678', '08/23/2018', '08/25/2018', '332', '2018-08-21 15:13:36', '2018-08-21 15:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `travel_companion`
--

CREATE TABLE `travel_companion` (
  `id` mediumint(9) NOT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_companion`
--

INSERT INTO `travel_companion` (`id`, `user_id`, `surname`, `firstname`, `dob`, `created_at`, `updated_at`, `title`) VALUES
(1, '107', 'Alexay', 'Eugine', '25 April 1995', '2018-08-15 02:33:22', '2018-08-15 02:33:22', 'Mr');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` int(10) UNSIGNED DEFAULT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` int(10) UNSIGNED DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(10) UNSIGNED DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` int(10) UNSIGNED DEFAULT NULL,
  `mobile_number` int(10) UNSIGNED DEFAULT NULL,
  `passport_number` int(10) UNSIGNED DEFAULT NULL,
  `passport_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_day` int(10) UNSIGNED DEFAULT NULL,
  `passport_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_year` int(10) UNSIGNED DEFAULT NULL,
  `user_role_idFk` int(10) UNSIGNED NOT NULL,
  `forgot_password_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referal_count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `first_login_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `title`, `first_name`, `last_name`, `day`, `month`, `year`, `nationality`, `address`, `postcode`, `city`, `country`, `phone_number`, `mobile_number`, `passport_number`, `passport_country`, `passport_day`, `passport_month`, `passport_year`, `user_role_idFk`, `forgot_password_token`, `referal_code`, `referal_count`, `first_login_status`, `remember_token`, `created_at`, `updated_at`, `profile_img`, `role`) VALUES
(68, 'Yassine Ess', 'essabar.yassine@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'P1165ZnuekMAIrjGXGtWsPPmC4YNH4Jn06nWlEL76J1cg1oQeU', 'YassineEssH0blh6', 0, '1', 'EHnDHKO9Qj7lSKBN88QiC9Py2OlMfoFLAIm1K3Whi9Ur4T4HXy2qHBAYXgHx', '2018-06-22 13:50:52', '2018-08-17 15:55:08', 'https://graph.facebook.com/v3.0/10156638486373258/picture?type=normal', 1),
(1, 'Zohaib Mateen', 'zohaibmtn0@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'ZohaibMateenNwdRDY', 0, '1', 'JUKduT9GC1t0zMspg7hWEM23sahHBo4lHpvXSf6aMBc9A9jkXXyojpXDV8If', '2018-06-08 16:27:36', '2018-06-08 16:28:16', NULL, 1),
(29, 'jdjhd', 'dshjsdbj@aol.com', '$2y$10$5cJVB4dvMhWkIgkbotflFu2Q1Xuv3snjyk6/tp3Rrl0Om9NSe54Ya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'jdjhddiIUZU', 0, '1', NULL, '2018-06-12 06:23:06', '2018-06-12 06:23:30', NULL, 1),
(6, 'Black Micmac', 'black-micmac25@hotmail.fr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'BlackMicmaco5G8t0', 0, '1', 'n49daV0CdkgcAuKAafZYJ8GrivnptFZh7fPGbphO2edQuwPUrrEDaiD44CsM', '2018-06-09 06:18:27', '2018-08-17 15:50:30', 'https://graph.facebook.com/v3.0/1917177674983367/picture?type=normal', 1),
(7, 'Zohaib Mateen Qureshi', 'zohaibmtn@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'ZohaibMateenQureshiPKvuFV', 0, '1', 'zecFw0fbTVjCq03cnYa8hVDf0g8AhK1kOgzZMSB4DXteqxnvQXNhdWv2zBAC', '2018-06-09 09:59:44', '2018-06-09 10:00:09', NULL, 1),
(30, '1', 'essabar.yaqwqwssine@gmail.com', '$2y$10$F4Aug3nsDMObdGD2ZpkfPez06RMYvfQyxjUZ9UsdGHHr0b9jGkc4u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '19RqLlK', 0, '1', 'fpr58kzLiU7i1YApczRxmMSZpDPijmrQIWuVFKhkmDzb2Mm0003Diw5NvyNF', '2018-06-12 09:03:08', '2018-06-12 09:03:49', NULL, 1),
(28, '21', 'essabar.yassine21@gmail.com', '$2y$10$vtRzHWE6XVi42a4Y06vZTugl3WJVqTazjLegiVBYfjqs0jlW1O3fG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '21bf9N0x', 0, '1', 'kZouwABlEia31pBwnpDCzcug4q0qj1GpzrbFOqbloxUjRJ0MSEazRp6Vo8JV', '2018-06-12 06:18:25', '2018-06-12 06:19:50', NULL, 1),
(9, 'gghhg', 'regis.bamballi@gmail.com', '$2y$10$ybfQDj7hfV4m4sEScynV.uD/rFv8V6Cn6X010Er.abKP2Q8088avu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'gghhgVAa5p6', 0, '1', 'wvb2zZWzQE22qywWrzI0nzBkb3czObFAEiAyjuAJm95i8NBeAAFmfmoNZd9K', '2018-06-10 03:28:31', '2018-06-10 03:28:40', NULL, 1),
(27, 'neheh', 'dshsdb@aol.com', '$2y$10$7zbRc8jEVyY6zUN/RG2fN.ocB07QezqAacEPraljk77Vk/AkdOdCW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'neheh3UqFng', 0, '1', 'wYbPksSutNFh5I4nFuE83Ve0IBAhqQHjhMOkcSZdAEIaLexqmqJ7YYXQT3Ky', '2018-06-12 04:14:09', '2018-06-12 04:15:34', NULL, 1),
(26, 'Yessbaree', 'essabar.yassin233e@gmail.com', '$2y$10$2iWuxGR7P7S.AtxWug0yJO5aG98ezymUE24SFEFS4c7yvtzVNnFa.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'YessbareetIwKjC', 0, '1', NULL, '2018-06-12 00:56:46', '2018-06-12 00:56:58', NULL, 1),
(24, 'jkshdkjds', 'bhedhjs@aol.com', '$2y$10$h5CKf2s3bCyUVStHoBINpO5.FyuQ6QL438ATmotQ85CvRRFnKQ9Ou', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'jkshdkjdsKg1RGa', 0, '1', NULL, '2018-06-11 14:57:56', '2018-06-11 15:00:09', NULL, 1),
(81, 'Fadi Khan', 'fahadnajeeb76@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'FadiKhanChHuPE', 0, '1', NULL, '2018-06-28 00:36:14', '2018-06-28 00:36:22', NULL, 1),
(82, '3323323232', 'essabar.ya2323ssine@gmail.com', '$2y$10$zaZlNDDHdjy95lj78nG/tOBXhmrl5O2xVbTtqkSK2JT8Q/CVScREq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '3323323232Qvx1oR', 0, '0', NULL, '2018-06-28 10:58:46', '2018-06-28 10:58:46', NULL, 1),
(23, 'mpoo', 'ajhsdh@aol.com', '$2y$10$eav0O7TCdzOS2hrYR0cVTehNvzbwc5tmuvoSlhkbx8Pu54eHL.1De', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'mpoo1QW2fB', 0, '1', 'gaYLc2BPZNms3pY4aY4hvx2ax6yaD6PnQO7cXgRbxAWkP7fKOUB2ZKvQfTYu', '2018-06-11 14:14:54', '2018-06-11 14:29:02', NULL, 1),
(22, 'jksdkj', 'kjzadj@aol.com', '$2y$10$Su.cZFCxUA44QIY3a8ig5ufVT3Z2dKcxhquXNYW29nfPyK2SJ5z0u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'jksdkjJjI5wj', 0, '1', 'PVYPNcWw9CDtBLFTRxUKYNSjyNKOB8N6eLASxOnoWHpmRL39GHG64xG4ILqC', '2018-06-11 13:58:11', '2018-06-11 13:58:31', NULL, 1),
(21, 'Fadi Rkein', 'rkeinfadi@outlook.fr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'FadiRkeinkAqBaB', 0, '1', 'z9iQ0QrWOkLrQ7LbdtvQS3qFCUAkJ2BSLoVIFVO6i1C4qKQHuRdXuImBtAns', '2018-06-11 05:24:24', '2018-06-11 05:25:33', NULL, 1),
(17, 'Fay dama', 'faydamaf@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'Faydamam6ETEd', 0, '0', NULL, '2018-06-10 08:08:50', '2018-06-10 08:08:50', NULL, 1),
(18, 'yessabar21', 'yessabar@deloitte.com.au', '$2y$10$sq54JfKKVVXGx1p2LneuReryzDBOGyNdcpM32d89n09BNJY5GL68S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'yessabar21f0pIME', 0, '1', 'a5ps7uYwfsubpcEe0Kt1FFbq3fgwhFlsNNw18qmsNaImV9eweceoXbmSOfF3', '2018-06-11 03:17:47', '2018-06-11 03:17:56', NULL, 1),
(19, 'Mahamat Chemi Kogrimi', 'mchemi911e@yahoo.fr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'MahamatChemiKogrimiCjLI8J', 0, '1', NULL, '2018-06-11 03:49:35', '2018-06-11 03:49:50', NULL, 1),
(20, 'fatima raha', 'raha.fatima@outlook.fr', '$2y$10$OnPJ5S45snwhJaz0oAiLzeXPF.3m5f.cJsp6GI0px3JKDjDRVVpFy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'fatimarahaLfeJHg', 0, '1', 'RGeg2D8Km5m0tS5Vv4XEDUU843wQOuoNZcmGuNUGekePVMSfNzlJaQENjR6Y', '2018-06-11 04:03:46', '2018-06-11 04:04:02', NULL, 1),
(31, '2121', 'essabar.yas212sine@gmail.com', '$2y$10$jsxQlis65WeUxSREzrcMvuur.C.grreamI0aSyRamEnRsfaASLdkK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2121UdbkAx', 0, '1', 'fROP0Tixnf2JhmjeXg9SOIcAtoBwSTqqGC3eXVx7hDlD39d46Vvz25HhPzna', '2018-06-12 09:05:21', '2018-06-12 09:06:11', NULL, 1),
(32, '212222222222222', 'essaba22222r.yassine@gmail.com', '$2y$10$9fDSGLwzZGewpKj934S4Ze00/TNUqb1t/kqbGcvQet/8xADOCaP3e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '212222222222222JMXIjo', 0, '1', 'JZvJS1yf9Ozi0TgnCyiUyOQvzUr3PknR6eq41ejN5keRq9kzv2q4D4UBDAeG', '2018-06-12 09:06:36', '2018-06-12 09:08:28', NULL, 1),
(33, '2222', 'essabar.ya222ssine@gmail.com', '$2y$10$zweyXzwnaQiKqFnUAH.j9uE7T4mN0e1gOvUMAd0K8.ZLtDNZiTf0S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2222Jx8upr', 0, '1', 'NA5rfdRGc3cVl2iX4lRjerUbY1a4d8sZbgaFHZtwHglsCOfjArG9WMoarxLV', '2018-06-12 09:09:11', '2018-06-12 09:10:37', NULL, 1),
(34, 'Deboua Cynthia', 'cdeboua.cd@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'DebouaCynthiafhkgWN', 0, '0', NULL, '2018-06-12 16:51:57', '2018-06-12 16:51:57', NULL, 1),
(35, 'hjdshjdz', 'jhbhj@aol.com', '$2y$10$INDjAwDCmpwGGu6evplrUeSNMZolPQIsq3mFOqgl4TW1.6Xu3EUlu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'hjdshjdzVDFOqX', 0, '1', 'ttQllC4B6UqAdm2SY5mXtvDeLJDnbBo7oaq1JejNkLuLBUszCJOIcTxwaK6I', '2018-06-13 02:04:31', '2018-06-13 02:05:22', NULL, 1),
(36, 'nina', 'nina.onze@yahoo.fr', '$2y$10$aEWtL4Ct8KjDkUcjT0KkBOYeQNcI.QeOfgrfQNHzQ0do/LotM6Kg6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'ninaJbSKoL', 0, '1', 'MwvhpUmhGmLdjczW8qlPKdzHlaN0sLrUIdXhVStlqPyrNgubcoKESumhdVMB', '2018-06-13 08:35:41', '2018-06-13 08:36:02', NULL, 1),
(37, 'Zoahib', 'zohaibmtn@outlook.com', '$2y$10$lwiShDk7wZ50/.uWhGHMd.tgjUPUxjyfFvsR5zOIrrEyqU8.rGMla', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'ZoahibdqfNwE', 0, '1', 'T7LjYDSwUdG1pWEEcbVLT5cBKY1azyNr0Nl7rcfSx4tASqbwx49lAQv34m4Y', '2018-06-13 09:31:41', '2018-06-13 10:42:43', NULL, 1),
(38, 'jbsdbh', 'aysdub@aol.com', '$2y$10$VsztqKfWbfyqAaBU/.r1f.R0Z8HzO2fvIR8DVKMVW7BazuCEak0dC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'jbsdbhOO1UPE', 0, '1', NULL, '2018-06-13 10:42:48', '2018-06-13 10:44:05', NULL, 1),
(39, 'Baig', 'baig@getnada.com', '$2y$10$qSl3ntPh/ciBOF2oq3/RBu6OqvkaN5BaxD6YNTV.4fkJdRJB4n/6q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'Baig3PJd1v', 0, '1', 'js8XHZqAyGHbhhCidV6VBguZQsCa9hQqmegCyU9CqhIQAkRW3iag0ySZODA0', '2018-06-13 10:43:52', '2018-06-27 07:10:30', NULL, 1),
(40, 'jnd', 'ajzjkaz@aol.com', '$2y$10$I/MdAnvw/iryWmAgNUiRSeEXzDe6LfrTvBaV7tEQ4Rs/lxtiFckmW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'jndoNGYQ6', 0, '1', NULL, '2018-06-13 13:32:31', '2018-06-13 13:33:02', NULL, 1),
(41, 'djdnnf', 'essabar.yassi3222ne@gmail.com', '$2y$10$nJWk4zG33d3WzwYXIJtCOeJoMkX5S9dSKxEhr3E0U.szUMntM31bu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'djdnnfiH8M2g', 0, '1', 'qfhVtJXDK5T3TIWMhqxmblntZJbFDdnlkCWYztZlecoPvvFC0hEU7nR2EcDH', '2018-06-13 20:00:25', '2018-06-13 20:01:17', NULL, 1),
(42, 'ewww', 'essabar.yas322sine@gmail.com', '$2y$10$sStQcklpIJEmV/VTdbPfMO6IaTUD1M5a3Dhr9WbXCiycjLaDvK.em', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'ewwwYRxq6q', 0, '1', 'HUl9CH8MvN0Q8Zd9P00liRf9cmAVLZfUaM7L7f0bq1xEJzPzkAGKIhzrVlc6', '2018-06-13 20:07:42', '2018-06-13 20:08:01', NULL, 1),
(43, 'hddodn', 'essabar.yahdhssine@gmail.com', '$2y$10$IjZ5OsB./1SYKU8lsKmdPu27/2erxGSn6SCDP7opb6GG2/j5zHSsi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'hddodn8EaY3h', 0, '1', 'WxDXwdc9bpfIAGx0rLVFMDKcLa5zVQwba423A9wy8dbsuU1nVQwhBLXXaPeA', '2018-06-13 20:09:24', '2018-06-13 20:09:37', NULL, 1),
(44, 'uigigi', 'essabar.ygygyassine@gmail.com', '$2y$10$r1bO9Qz8JzV0HIwEHhXCh.ZWRftr0.jFXGyCE7COPjhorzYRmnqcC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'uigigiEIiPyO', 0, '1', 'oTNA5JuJr0r2HCjzdXoV4sxv7FEanGkYHNX8jwtvlYSJlPGBcNvcQ7Rv9NjS', '2018-06-13 20:14:32', '2018-06-13 20:14:47', NULL, 1),
(45, 'ffd', 'ffddsf@aol.com', '$2y$10$XjJOkGagf1wGmgJWJ/.eluwzKqD01Nf6d7oDXsiNCv7QSv5bCnl4K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'ffdAa85Ys', 0, '1', 'FiEsCd4gxNRyLvWDWnwpIHyUg9206r80AaTxxqvOpyZ6UD26hmtkHTdDHN3P', '2018-06-13 23:26:17', '2018-06-13 23:26:55', NULL, 1),
(46, 'et', 'essabar.yassine2333@gmail.com', '$2y$10$hj4av0Ds4dMIR3821cqPvubpfkR3bMPv0UD5AE6ddZLFBJhSxHdpW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'etS63qwB', 0, '1', 'p05vIf1uCe5WTioPHQg1FiXPI92FciydgCSFuxLItkFLoOzVAwfMZiF1dUMm', '2018-06-14 04:09:56', '2018-06-14 04:10:27', NULL, 1),
(47, '3434', 'yessa454bar@deloitte.com.au', '$2y$10$S5FvjFBaE6OFOSTggfC15eVeBsOYRVv9x1Rjoc3iyy2U6MUtXNxUi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '3434sADsVo', 0, '1', '17Ahd50HSUHBTlF2WWDaMHHVPttFjb6Q3NF80Mi7E6THgIY4s7wiUwN8uTos', '2018-06-14 04:19:31', '2018-06-14 04:22:31', NULL, 1),
(48, '211', 'essabar.yassi2211ne@gmail.com', '$2y$10$uJObx41r0xhM3rfF5LEWeu4EKeQCFpcOMmwZkyKf2o922elQuIejO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '211xPmFdU', 0, '1', 'HVyixHmrH81BLChTm76BO1L4KihkCIcgcBaSzBsxM41TnqVBOyxUjgxyMYcb', '2018-06-14 04:22:53', '2018-06-14 04:28:36', NULL, 1),
(49, 'gfgfd', 'dffd@aol.com', '$2y$10$XWUHf6II7.fDSHmU26nn3eF9rcuMBeGj1/JWMDkQI01z22cAUg/e6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'gfgfdBckIib', 0, '1', 'E5bzcQb6dxicbfubsIrQN40yjoQIrb16Og4S4YF2lGUF6eRCgHhsGBlnb8mc', '2018-06-14 10:39:49', '2018-06-14 10:40:01', NULL, 1),
(50, 'Drogba11', 'didierassi@gmail.com', '$2y$10$wSUBNruCK8bJLigCHS/c4O0/X7SiXiPKFRzaww5855PjRGq6/XJSG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'Drogba11M8wiXP', 0, '1', NULL, '2018-06-14 10:42:59', '2018-06-14 10:43:40', NULL, 1),
(51, '321', 'essabar.yassin3333e@gmail.com', '$2y$10$QeHgT7THY2CeAHgOSuzmJ.15Dh6e8T5hPxDgtcpzDfETPcGYNoKQ2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '3218E3dZz', 0, '1', 'FD3gSiaMPEj6xsUz88FzpRA17ulwfvWngsbc6qc1eYEk0pwWg4Pn6IXP2BHF', '2018-06-15 04:49:12', '2018-06-15 05:02:31', NULL, 1),
(52, 'Nabila20', 'nabila.chakib16@gmail.com', '$2y$10$uNaCeluCM5eax2A7hnzVOuNdrvvryBnddZz.2Bjyl/hzPiFpb1O8y', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'Nabila20isNxdt', 0, '1', 'mYqB9yXyVJrcIYEYbvePbyhBouR1D1IyBpGcXU4SnUdAQTVK2ZEWgGWYYn3I', '2018-06-15 07:25:23', '2018-06-15 07:25:42', NULL, 1),
(53, 'jndbd', 'jhdshjdgs@aol.com', '$2y$10$hCPkpDE7FiK1xDt/X0het.NraDwXPMPTIcaaABYGJ4vWVEzRXJSiG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'jndbdok9vWh', 0, '1', NULL, '2018-06-15 12:02:26', '2018-06-15 12:02:39', NULL, 1),
(54, 'claraassous', 'clara.assous@gmail.com', '$2y$10$U4gNJYD0Zq9BunjHGFwX3OVx74eWP0rQiBo4zHdP5a7.b7vEnb1yW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'claraassouseL7uo7', 0, '1', 'ezFjqWsrTWUTHcEnQOyUKjJFSNOPh2QCY28Kt3vvSMtxmuSpSwWeLwOne3p9', '2018-06-16 03:01:40', '2018-06-16 03:03:55', NULL, 1),
(55, 'claraa5', 'clara.assous@gmail.commm', '$2y$10$H6wkjBrgVHwzacyoKvEw8uIwjb2z3oqHwj6AxHrQfXYHMWM6NhojG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'claraa5ELS3dM', 0, '1', NULL, '2018-06-16 03:09:51', '2018-06-16 03:10:25', NULL, 1),
(56, 'dgbggf', 'gfg@aol.com', '$2y$10$n.6nGWL11/m4/0OGEfAWL.N1UgmA7TePejSarMRDLmAnrau6fgBki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'dgbggfN379un', 0, '1', NULL, '2018-06-16 03:52:53', '2018-06-16 03:53:20', NULL, 1),
(57, '35', 'essabar.yassine@gmai34l.com', '$2y$10$bcnU2Weo2liSoMfKNZsLDOioYlfuyfLx7jFgzMXOVN/jtX1V21p.K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '35bwmLFi', 0, '1', 'enFACtladVt1Roel0T9s8yp4GoK1l3nENwPV5AODRaZrz0yiiVZC1TcyVHfp', '2018-06-16 03:54:53', '2018-06-16 03:55:01', NULL, 1),
(58, '121', 'essabar.y22ass21ine@gmail.com', '$2y$10$pmNZQVjkaQJfx8cNsEFeq.0RQGQXFhm8JGmYNzCFR17zG/txY/xnu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '1219gYQoE', 0, '0', NULL, '2018-06-16 13:40:03', '2018-06-16 13:40:03', NULL, 1),
(59, '212', '32088932@gmqil.com', '$2y$10$bgG5oceEVEBt05JQ3SPKTu4q.F92duQim9tHwKcPqoHp4tbPitb06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '212wbgc6H', 0, '1', 'cSKDBLtv299kMGdxxDCxxC2s5vcIZjo6XLmkCVY3lEVdJeFmmpy0yU8KMZJk', '2018-06-16 13:58:07', '2018-06-16 13:58:20', NULL, 1),
(60, '2123', 'essabar.y123456assine@gmail.com', '$2y$10$ylAeBUDOBq8xWnAvg3PwIugEA53bVXieMKM.RSTjQzihlQeuGZTme', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2123PFTrIG', 0, '1', 'qIm7ZtVghpZvUfTANQRu3jD24bIkbcwKVOqxEcpuLFFxVkAgnbLBOmAfgIEu', '2018-06-16 14:00:12', '2018-06-16 14:40:54', NULL, 1),
(61, '213', 'essabar.y222as3312121sine@gmail.com', '$2y$10$Q1gb/bYRjFZEg7UjVvuZDupw1iopAVkVDocXswsy8/eYqvSmA7s26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '213iZkuhl', 0, '1', 'uheJj1L2xQn5Kj1el8HwVxUkF8jWRI6CYXWsw6M4vnH5MBkqQelFeC0V1j7K', '2018-06-16 14:54:25', '2018-06-16 14:54:37', NULL, 1),
(62, '344444444444444', 'e22222222ssab22ar.yassine@gmail.com', '$2y$10$mM7RY.gF8AUp5CPZcYu92O/Gnj/nk7IpeQauUdZ0wEcoWpZx1rb36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '344444444444444Wol8LA', 0, '1', NULL, '2018-06-17 02:09:31', '2018-06-17 02:13:33', NULL, 1),
(63, '2121432', 'essabar.yass12256374638ine@gmail.com', '$2y$10$7uoO7DClZDpu2in34aSaZu8C9Bh7e9B8rRn0krOcfshELtpKQQZNu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2121432QRwjtx', 0, '0', NULL, '2018-06-17 02:14:26', '2018-06-17 02:14:26', NULL, 1),
(64, 'reine', 'rbamballi@gmail.com', '$2y$10$qtJhLRwrnEEwCb1Nh3epOuwFin5XtYsYjqTs8rqXaEuLNdXXBpjpm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'reinexXvMR5', 0, '1', NULL, '2018-06-17 02:34:09', '2018-06-17 02:34:42', NULL, 1),
(65, 'Maylis Faucher Gross', 'm-trash@hotmail.fr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'MaylisFaucherGrossULUWR4', 0, '0', NULL, '2018-06-19 15:56:28', '2018-06-19 15:56:28', NULL, 1),
(66, 'cvfdsvd', 'regis.bambali@gmail.com', '$2y$10$pZz0mQ3Cpt6QCQ/fVAo9a.LPkGeOTnjoRralGbEBaUEz4k3LAoojm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'cvfdsvdYZb4Az', 0, '1', 'Wg5Tx6Qrr4L0UQ2A8Dgd6mXUISCNd2lTWpWRe8UJTE2RyymS8oUMSjW9LXDb', '2018-06-20 01:04:30', '2018-06-20 01:05:07', NULL, 1),
(67, 'Fadi', 'fadi.khan76@yahoo.com', '$2y$10$.uGI5..d.vrD5PRv1aaaPuu60.804NdPEFbM36L3MJ6M9dRNCJKzO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'Fadi5FY69t', 0, '1', 'SObJcVE3g7xSAmUwFa0Jy0zGbu6IGOKfrMytW1dTvk8VKaH6x57uGvj9mOWv', '2018-06-21 22:45:23', '2018-06-21 22:46:12', NULL, 1),
(69, 'kefjbfe', 'jdjd@aol.com', '$2y$10$sjNMLfd2pOn8Be5LYYD4d.018S8PY.ungL1IhQlVEvMioCzTIZr1i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'kefjbfe8yWvnQ', 0, '1', 'TsqRDvWwWee2Lc3xJq2fvS7lHzUvPidz83gGx6VJJpvkHtrbuSU67AGZIOis', '2018-06-23 02:01:16', '2018-06-23 02:04:05', NULL, 1),
(70, 'alfred', 'alfredbam@aol.com', '$2y$10$gYAxEKEUTDZQjndvbzYGeOYDtuHNSly4AkNLalG/sgODzFmLQObIe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'alfredNq0ptI', 0, '1', NULL, '2018-06-23 03:36:21', '2018-06-23 03:37:26', NULL, 1),
(71, 'azerty', 'rebeccabam15@gmail.com', '$2y$10$4nRtw8yymCVg9W1z4JVEzuXxosdllaue4xHedt4Ff4CC67PnsXGuy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'azertyEO8qIN', 0, '1', NULL, '2018-06-23 11:03:03', '2018-06-23 11:03:32', NULL, 1),
(72, '32233', 'essabar.yass32332ine@gmail.com', '$2y$10$sOKjXbqAHLZAr2csvrRxpOLNe1dE6daqZU0QTUmQl0A9.Oe0jEjKi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '32233ghP3Ta', 0, '1', 'Q6ABXdW6WdRAmv24M1la4hUwrrEcvoaP68MPmtNOR89qJ8vEqG11RaadgE9f', '2018-06-24 12:15:05', '2018-06-24 12:19:00', NULL, 1),
(73, 'abdul manan', 'mannaqureshi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'abdulmananF7xUip', 0, '1', NULL, '2018-06-25 03:47:44', '2018-06-25 03:47:55', NULL, 1),
(74, 'sd', 'samisd@icloud.com', '$2y$10$Th8AZwQfMElKO9N6E26h/eudRHmD/GaH/97AghaHCLvlNCT9sXvb2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'sdK9zx7V', 0, '1', 'B9iOtWLEy1R5H6zXC4pvzJkE4GIjZZnk7ynBsAunwMOFF0OdIwBMFe0NJOAa', '2018-06-26 06:11:47', '2018-06-26 06:12:19', NULL, 1),
(75, '323', 'yessabar@ede.com.au', '$2y$10$hcoY08f7mF3pCm3SXBbvP.IeYxbrmjBiVZZ21RheO3Xua5i7aPgmC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '323VFOGj2', 0, '1', NULL, '2018-06-26 14:28:06', '2018-06-26 14:28:25', NULL, 1),
(76, 'Jason', 'Jason.fong@luxuryescapes.com', '$2y$10$0NPyzIFA78R3S3qAR99sVu.ngRaTEQfP7H7v8VFYNTcM3RddQlHDq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'Jasonh82n9k', 0, '1', NULL, '2018-06-26 22:29:25', '2018-06-26 22:30:09', NULL, 1),
(77, 'Haider Qureshi', 'haidermateen@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'HaiderQureshiT3boRU', 0, '1', NULL, '2018-06-27 11:29:29', '2018-06-27 11:29:40', NULL, 1),
(78, 'Mathis', 'mathisraha@hotmail.fr', '$2y$10$UX9Gb8xkHiXKJb63.shqz.ltVN2zmiUAK/uOAZqasgTRNqf3dF1O6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'MathiswjgR5b', 0, '1', 'InHTQNVqseQ367qsUx0OctkkNLhKQjESiSP66GcC2YDp2bjJiC3b2Njyc5hT', '2018-06-27 09:06:05', '2018-06-27 09:06:54', NULL, 1),
(79, 'Amelie Barthod', 'barthodamelie@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'AmelieBarthodKSeZ8Y', 0, '1', NULL, '2018-06-27 19:49:32', '2018-06-27 20:05:48', NULL, 1),
(80, 'Za', 'esss@gmail.com', '$2y$10$GMuCAkJgvUeC8.BpUOlCiupmwD7tOsrw2ApsE9w5dLsEE0ZgXJxNe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'ZaeAKvPA', 0, '1', NULL, '2018-06-27 22:56:57', '2018-06-27 22:57:30', NULL, 1),
(83, 'Arn Ansr', 'yanis.ancer@laposte.net', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'ArnAnsrzRSkmG', 0, '1', NULL, '2018-06-29 04:24:12', '2018-06-29 04:24:27', NULL, 1),
(84, '212112', 'essabar.yassin2121e@gmail.com', '$2y$10$NUXPD3zmrdbsPmBLELMv5OIYFNYNzNfwzniu8uqsocsShXsJGeIIK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2121128UVTHy', 0, '1', 'QpBOLW7e0ioaCrcagWsRpYc7itofFxBDAbiw3SBApXSeLcVvutqM5a25ugBZ', '2018-06-30 23:47:31', '2018-06-30 23:49:01', NULL, 1),
(85, 'Reine Bakanguissa', 'diamant_dafrik@hotmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'ReineBakanguissaFfNn7M', 0, '1', NULL, '2018-07-01 18:34:02', '2018-07-01 18:36:10', NULL, 1),
(86, '212121deewfe', 'essabar.yas1212sine@gmail.com', '$2y$10$cSG0DVgRZywueD/GRrprCOUvTCH89EN4X7h9ookB192R0dqEpA7Vq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '212121deewfe2LNBwY', 0, '1', NULL, '2018-07-03 00:26:12', '2018-07-03 00:27:01', NULL, 1),
(87, 'jejzhunjk', 'lkds@aol.com', '$2y$10$opvMOzCqHhGc2qouIwMGi.QOckXCdSoTe6NCCedXsRmHmxOghp4La', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'jejzhunjkTGZh33', 0, '0', NULL, '2018-07-03 00:30:52', '2018-07-03 00:30:52', NULL, 1),
(88, 'djdndd', 'cvc@aol.com', '$2y$10$nBVSBn5BH7NaVbhpcfcmcu.Bn6MXLV1aW5nHGmqhn7linmhMucCWu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'djdndd5piKlP', 0, '1', 'XDptqs0sqeYVghGdVk1ImUQgosLGeLEcMkTN6wk52MuNdHyxDl1lzRhQqy7a', '2018-07-03 13:03:11', '2018-07-03 13:03:18', NULL, 1),
(91, 'FadiKhan', 'fadikhan@getnada.com', '$2y$10$LmEWiMeRnOlkdaJ/9ENFku.2L.gwyEz2OkWEnQdGDH5w9pdMxdODq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'FadiKhanE97EbX', 0, '1', 'RxoLjdyY7vT8d8pFsoBBjt3GLQ0Vskpe85eCnwC7qLFKsyx4A3vG4891rxIX', '2018-07-03 13:27:22', '2018-07-03 13:29:55', NULL, 1),
(92, 'Dane Diallo', 'diallodane@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'DaneDiallo3fl8JE', 0, '1', NULL, '2018-07-04 10:22:56', '2018-07-04 10:26:43', NULL, 1),
(93, 'Khadidja Ab', 'khadouch94@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'KhadidjaAbfOHIgi', 0, '1', NULL, '2018-07-04 20:09:25', '2018-07-04 20:09:38', NULL, 1),
(94, '2112344de', 'essabar.y2121`25assine@gmail.com', '$2y$10$BKZpWdzBLBFo9agebMz.Z.Mf11Hbyno/tGYm6/uuOB0RV4Np4WkCu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2112344dew8icGf', 0, '1', NULL, '2018-07-07 15:38:12', '2018-07-07 16:16:11', NULL, 1),
(95, '45455', 'essabar.yassin545e@gmail.com', '$2y$10$v8789wF3FwlWFdAhvkQvxOfJw7T9N6b6oG1D7yzchUPMn0Q.HVdEm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '454553Hi54L', 0, '1', NULL, '2018-07-11 18:03:08', '2018-07-11 18:03:41', NULL, 1),
(96, 'Sunil', 'essabar.yassin212121e@gmail.com', '$2y$10$0Wxf4dCVwvSg2WDPpliT9.wdhYpqcrVgB/00MIZp15lOEf.r6IKZK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'SunilcMGmX9', 0, '1', NULL, '2018-07-17 14:44:21', '2018-07-17 14:44:36', NULL, 1),
(97, 'kacash', 'kacashvila@outlook.com', '$2y$10$MVXLKaH2PqgQWqJ.o0sjpeQiaM.SnIZ5Sk5DX5I1TakDuyhwXFvEy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'kacashbVmX8S', 0, '1', NULL, '2018-07-19 14:49:19', '2018-07-19 14:49:28', NULL, 1),
(98, 'Dharamveer Rana', 'drana@contriverz.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'DharamveerRanaywO5Ie', 0, '1', NULL, '2018-07-20 14:09:11', '2018-07-20 14:09:55', NULL, 1),
(99, 'Am bition', 'ambition.t109@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'AmbitionEbUDin', 0, '1', '6VVZ7EKJTiODgrXQHpfWMWec3oQKbLKMcLos8Uy4tc8htly6oTuBf0k3Z6Kn', '2018-07-20 18:41:31', '2018-07-20 18:41:40', NULL, 1),
(100, 'mauricia', 'mauricia.guenengaye@live.fr', '$2y$10$yCVWfbjWxGT8KH2QfMQR5eRHAE72lRjGUiE0G3zrQSEdrWHf8V8Si', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'mauriciaI1NGjd', 0, '1', NULL, '2018-07-21 03:02:49', '2018-07-21 03:03:19', NULL, 1),
(121, 'Yuri Ivanov', 'yuiiwanov523@gmail.com', '$2y$10$537DdqBLYZVH7K4elQVF3eJgUDPn/Vjg2aao2QRmOJjSQBlnOenrq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Cax1oHgqrwZqYFLFUqv6LfwQun8fk3DQ4T6hy1EBtG0Q8aKzM6', 'YuriIvanovTaEWsw', 0, '0', 'UlF21cdkJclVksVF2FLDwPSS5JMnUqZlTIP0DIMIfarhi1vnVPU02aZFSG4q', '2018-08-15 20:55:34', '2018-08-15 20:57:14', NULL, 1),
(109, 'yesss123456778', 'essabar3213448.yassine@gmail.com', '$2y$10$426Ileu1IVRACJAU0NMilede5o8YC6D55Chhy0DZgPdTZeyDnwQ62', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'yesss123456778b4viUo', 0, '0', NULL, '2018-07-28 19:10:07', '2018-07-28 19:10:07', NULL, 1),
(108, 'sasin', 'admin@mail.com', '$2y$10$FasRcVK.JPwJVV0rdevWoe2SdmWXR2TfdGulP7oEiTYkzoAlCz7TG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'sasin1kNrS3', 0, '1', 'avnVzQmsmVjL82xvRGLWiN4AHNDoJE3LWbDkTeiOlc5x7pRSimtnIEqzXPHe', '2018-07-23 11:04:26', '2018-08-15 19:58:28', '/assets/uploads/profile_logo/s222vhASMkUPvuQieAVYfnafsyyZ1fQc4eQVZqXS.jpeg', 1),
(107, 'test', 'test@mail.com', '$2y$10$FasRcVK.JPwJVV0rdevWoe2SdmWXR2TfdGulP7oEiTYkzoAlCz7TG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'Sasin_creatorAUGIup', 0, '0', 'qdsGbGfE1C5UwpPFhYJmDLcCYCC7JMLl3eVNEThnukPzoYqg79SC49e3K5jR', '2018-07-22 07:43:49', '2018-07-22 07:43:49', NULL, 0),
(110, '3243r9hfeih', '213313432@gmail.com', '$2y$10$tJvbBxrkVbqYEHMCWFCBnegx8VYtBhE.xz1i7DQgMrbLliqqM5Ufa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '3243r9hfeih7VTJev', 0, '1', NULL, '2018-07-29 11:34:56', '2018-07-29 12:00:19', NULL, 1),
(111, 'Regis Bamballi', 'regispa@msn.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 'RegisBamballi4mpNmW', 0, '0', 'dqCyfDy9iijH3WaANyAZVli1K2bjdbbTYa7owvZyvFO0nJdotikbGPObHvtT', '2018-07-30 18:48:01', '2018-07-30 18:48:01', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `role_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `role_title`, `role_status`) VALUES
(1, 'Member', '1'),
(2, 'Partner', '1'),
(3, 'Premium Member', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_user`
--
ALTER TABLE `blog_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `bookings_user_idfk_foreign` (`user_idFk`),
  ADD KEY `bookings_hotel_idfk_foreign` (`hotel_idFk`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`favourite_id`),
  ADD KEY `favourites_user_idfk_foreign` (`user_idFk`),
  ADD KEY `favourites_hotel_idfk_foreign` (`hotel_idFk`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `issuedgiftcard`
--
ALTER TABLE `issuedgiftcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_detail`
--
ALTER TABLE `offer_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_companion`
--
ALTER TABLE `travel_companion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `users_user_role_idfk_foreign` (`user_role_idFk`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_user`
--
ALTER TABLE `blog_user`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `favourite_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotel_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `issuedgiftcard`
--
ALTER TABLE `issuedgiftcard`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offer_detail`
--
ALTER TABLE `offer_detail`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `travel_companion`
--
ALTER TABLE `travel_companion`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
