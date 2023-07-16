-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2023 at 09:01 PM
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
-- Database: `bookticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_infos`
--

CREATE TABLE `booked_infos` (
  `Booked_id` bigint(20) UNSIGNED NOT NULL,
  `U_id` bigint(20) UNSIGNED NOT NULL,
  `Ticket_id` bigint(20) UNSIGNED NOT NULL,
  `Ticket_Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booked_infos`
--

INSERT INTO `booked_infos` (`Booked_id`, `U_id`, `Ticket_id`, `Ticket_Number`, `Price`, `created_at`, `updated_at`) VALUES
(63, 1, 6, 'A1', 1250, '2023-05-31 11:07:42', '2023-05-31 11:07:42'),
(64, 1, 6, 'B1', 1250, '2023-05-31 11:07:42', '2023-05-31 11:07:42'),
(65, 1, 6, 'A2', 1250, '2023-05-31 11:07:42', '2023-05-31 11:07:42'),
(66, 1, 6, 'B2', 1250, '2023-05-31 11:07:42', '2023-05-31 11:07:42'),
(67, 1, 6, 'A3', 1250, '2023-05-31 11:07:42', '2023-05-31 11:07:42'),
(68, 1, 6, 'B3', 1250, '2023-05-31 11:07:42', '2023-05-31 11:07:42'),
(69, 4, 6, 'A4', 1500, '2023-05-31 11:32:42', '2023-05-31 11:32:42'),
(70, 4, 6, 'B4', 1500, '2023-05-31 11:32:42', '2023-05-31 11:32:42'),
(71, 4, 6, 'A5', 1500, '2023-05-31 11:32:42', '2023-05-31 11:32:42'),
(72, 4, 6, 'B5', 1500, '2023-05-31 11:32:42', '2023-05-31 11:32:42'),
(73, 3, 6, 'A6', 1500, '2023-05-31 11:33:44', '2023-05-31 11:33:44'),
(74, 3, 6, 'B6', 1500, '2023-05-31 11:33:44', '2023-05-31 11:33:44'),
(75, 3, 6, 'A7', 1500, '2023-05-31 11:33:45', '2023-05-31 11:33:45'),
(76, 3, 6, 'B7', 1500, '2023-05-31 11:33:45', '2023-05-31 11:33:45'),
(77, 3, 6, 'A8', 1500, '2023-05-31 11:33:45', '2023-05-31 11:33:45'),
(78, 3, 6, 'B8', 1500, '2023-05-31 11:33:45', '2023-05-31 11:33:45'),
(79, 5, 6, 'A9', 1500, '2023-05-31 11:34:10', '2023-05-31 11:34:10'),
(80, 5, 6, 'B9', 1500, '2023-05-31 11:34:10', '2023-05-31 11:34:10'),
(81, 6, 6, 'C1', 1500, '2023-05-31 11:34:35', '2023-05-31 11:34:35'),
(82, 6, 6, 'D1', 1500, '2023-05-31 11:34:35', '2023-05-31 11:34:35'),
(83, 6, 6, 'A10', 1500, '2023-05-31 11:34:35', '2023-05-31 11:34:35'),
(84, 6, 6, 'B10', 1500, '2023-05-31 11:34:35', '2023-05-31 11:34:35'),
(85, 7, 6, 'C2', 1500, '2023-05-31 11:35:49', '2023-05-31 11:35:49'),
(86, 7, 6, 'D2', 1500, '2023-05-31 11:35:49', '2023-05-31 11:35:49'),
(87, 7, 6, 'C3', 1500, '2023-05-31 11:35:49', '2023-05-31 11:35:49'),
(88, 7, 6, 'D3', 1500, '2023-05-31 11:35:49', '2023-05-31 11:35:49'),
(89, 8, 6, 'C4', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(90, 8, 6, 'D4', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(91, 8, 6, 'C5', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(92, 8, 6, 'D5', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(93, 8, 6, 'C6', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(94, 8, 6, 'D6', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(95, 8, 6, 'C7', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(96, 8, 6, 'D7', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(97, 8, 6, 'C8', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(98, 8, 6, 'D8', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(99, 8, 6, 'C9', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(100, 8, 6, 'D9', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(101, 8, 6, 'C10', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(102, 8, 6, 'D10', 1500, '2023-05-31 11:36:13', '2023-05-31 11:36:13'),
(103, 8, 7, 'A1', 2000, '2023-05-31 12:10:48', '2023-05-31 12:10:48'),
(104, 8, 7, 'B1', 2000, '2023-05-31 12:10:48', '2023-05-31 12:10:48'),
(105, 9, 10, 'C9', 10000, '2023-06-06 13:24:36', '2023-06-06 13:24:36'),
(106, 9, 10, 'D9', 10000, '2023-06-06 13:24:36', '2023-06-06 13:24:36'),
(107, 9, 10, 'C10', 10000, '2023-06-06 13:24:37', '2023-06-06 13:24:37'),
(108, 9, 10, 'D10', 10000, '2023-06-06 13:24:37', '2023-06-06 13:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `book_train_infos`
--

CREATE TABLE `book_train_infos` (
  `BookedTrain_id` bigint(20) UNSIGNED NOT NULL,
  `U_id` bigint(20) UNSIGNED NOT NULL,
  `Train_id` bigint(20) UNSIGNED NOT NULL,
  `Ticket_Number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_train_infos`
--

INSERT INTO `book_train_infos` (`BookedTrain_id`, `U_id`, `Train_id`, `Ticket_Number`, `Price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'C1A1BC C1A2BC C1B1BC C1B2BC C4A1T2 C4A2T2 C4B1T2 C4B2T2', 16000, '2023-06-15 08:17:47', '2023-06-15 08:17:47'),
(2, 3, 1, 'C1C1BC C1C2BC C1D1BC C1D2BC', 12000, '2023-06-16 04:54:46', '2023-06-16 04:54:46'),
(3, 8, 3, 'C1A1BC C1A2BC C1A3BC C1A4BC C1A5BC C1B1BC C1B2BC C1B3BC C1B4BC C1B5BC C1C1BC C1C2BC C1C3BC C1C4BC C1C5BC C1D1BC C1D2BC C1D3BC C1D4BC C1D5BC C4A6T3 C4A7T3 C4A8T3 C4A9T3 C4A10T3 C4B6T3 C4B7T3 C4B8T3 C4B9T3 C4B10T3 C4C6T3 C4C7T3 C4C8T3 C4C9T3 C4C10T3 C4D6T3 C4D7T3 C4D8T3 C4D9T3 C4D10T3', 135000, '2023-06-16 12:42:15', '2023-06-16 12:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `city_infos`
--

CREATE TABLE `city_infos` (
  `City_id` bigint(20) UNSIGNED NOT NULL,
  `City_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city_infos`
--

INSERT INTO `city_infos` (`City_id`, `City_Name`, `created_at`, `updated_at`) VALUES
(1, 'Ahmedabad', '2023-05-25 10:03:39', '2023-05-25 10:03:30'),
(2, 'Surendranagar', '2023-05-25 04:40:37', '2023-05-25 04:40:37'),
(3, 'Surat', '2023-05-25 04:45:20', '2023-05-25 04:45:20'),
(4, 'Vadodara', '2023-05-25 04:45:28', '2023-05-25 04:45:28'),
(5, 'Rajkot', '2023-05-25 04:45:34', '2023-05-25 04:45:34'),
(6, 'Gandhinagar', '2023-05-25 04:45:40', '2023-05-25 04:45:40'),
(7, 'Porbandar', '2023-05-25 04:45:45', '2023-05-25 04:45:45'),
(8, 'Bhavnagar', '2023-05-25 04:45:51', '2023-05-25 04:45:51'),
(9, 'Junagadh', '2023-05-25 04:45:57', '2023-05-25 04:45:57'),
(10, 'Jamnagar', '2023-05-25 04:46:05', '2023-05-25 04:46:05');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_24_104819_create_ticket_infos_table', 1),
(6, '2023_05_25_100213_create_city_infos_table', 2),
(7, '2023_05_26_103353_create_user_infos_table', 3),
(8, '2023_05_26_114554_create_booked_infos_table', 4),
(9, '2023_06_13_101758_create_trainticket_infos_table', 5),
(10, '2023_06_15_133632_create_book_train_infos_table', 6);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_infos`
--

CREATE TABLE `ticket_infos` (
  `Ticket_id` bigint(20) UNSIGNED NOT NULL,
  `Bus_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `From` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` datetime NOT NULL,
  `Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `A10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_infos`
--

INSERT INTO `ticket_infos` (`Ticket_id`, `Bus_Name`, `From`, `Destination`, `Time`, `Price`, `A1`, `A2`, `A3`, `A4`, `A5`, `A6`, `A7`, `A8`, `A9`, `A10`, `B1`, `B2`, `B3`, `B4`, `B5`, `B6`, `B7`, `B8`, `B9`, `B10`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `C8`, `C9`, `C10`, `D1`, `D2`, `D3`, `D4`, `D5`, `D6`, `D7`, `D8`, `D9`, `D10`, `created_at`, `updated_at`) VALUES
(5, '4D', 'Jamnagar', 'Vadodara', '2023-08-31 14:00:00', '500-1000', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '2023-05-31 03:08:51', '2023-05-31 03:08:51'),
(6, '11D', 'Ahmedabad', 'Surendranagar', '2023-06-28 14:00:00', '1000-1500', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', '2023-05-31 03:57:26', '2023-05-31 11:36:13'),
(7, '9D', 'Ahmedabad', 'Jamnagar', '2023-06-02 20:00:00', '1500-2000', 'B', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'B', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '2023-05-31 09:29:05', '2023-05-31 12:10:48'),
(8, '4D', 'Ahmedabad', 'Gandhinagar', '2023-10-03 20:00:00', '500-1000', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '2023-05-31 12:13:42', '2023-05-31 12:13:42'),
(9, '4D', 'Ahmedabad', 'Gandhinagar', '2023-06-03 01:00:00', '500-1000', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', '2023-05-31 12:14:36', '2023-05-31 12:14:36'),
(10, '7D', 'Surendranagar', 'Ahmedabad', '2023-06-18 05:00:00', '5000-10000', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'B', 'B', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P', 'B', 'B', '2023-06-06 13:23:06', '2023-06-06 13:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `trainticket_infos`
--

CREATE TABLE `trainticket_infos` (
  `Train_id` bigint(20) UNSIGNED NOT NULL,
  `Train_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Business_Class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BC_Container` int(11) DEFAULT NULL,
  `BC_Range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tier3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `T3_Container` int(11) DEFAULT NULL,
  `T3_Range` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tier2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `T2_Container` int(11) DEFAULT NULL,
  `T2_Range` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `From` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainticket_infos`
--

INSERT INTO `trainticket_infos` (`Train_id`, `Train_Name`, `Business_Class`, `BC_Container`, `BC_Range`, `Tier3`, `T3_Container`, `T3_Range`, `Tier2`, `T2_Container`, `T2_Range`, `From`, `Destination`, `Time`, `created_at`, `updated_at`) VALUES
(1, '15D', 'Y', 3, '1500-3000', 'N', NULL, NULL, 'Y', 6, '500-1000', 'Ahmedabad', 'Junagadh', '2023-06-18 16:00:00', '2023-06-13 05:01:57', '2023-06-13 05:01:57'),
(2, 'Jodhpur Express', 'Y', 2, '1500-3000', 'Y', 4, '1000-1500', 'Y', 4, '500-1000', 'Jamnagar', 'Gandhinagar', '2023-08-15 15:00:00', '2023-06-15 04:58:16', '2023-06-15 04:58:16'),
(3, 'Vande Bharat 69D', 'Y', 3, '3000-6000', 'Y', 5, '1500-3000', 'Y', 5, '1000-1500', 'Ahmedabad', 'Surendranagar', '2023-08-09 01:00:00', '2023-06-16 12:32:52', '2023-06-16 12:32:52');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `U_id` bigint(20) UNSIGNED NOT NULL,
  `U_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `U_Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`U_id`, `U_Name`, `U_Password`, `created_at`, `updated_at`) VALUES
(1, 'Kirtan', '756', '2023-05-26 05:18:52', '2023-05-26 05:18:52'),
(3, 'Dipen', '123', '2023-05-28 03:16:12', '2023-05-28 03:16:12'),
(4, 'Mihir', '123', '2023-05-30 13:48:39', '2023-05-30 13:48:39'),
(5, 'Vilash', '123', '2023-05-30 13:49:16', '2023-05-30 13:49:16'),
(6, 'Hardik', '123', '2023-05-30 13:49:47', '2023-05-30 13:49:47'),
(7, 'Shreya', '123', '2023-05-30 13:50:45', '2023-05-30 13:50:45'),
(8, 'Drashti', '123', '2023-05-30 13:53:47', '2023-05-30 13:53:47'),
(9, 'Harsh', '123', '2023-06-06 13:21:53', '2023-06-06 13:21:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_infos`
--
ALTER TABLE `booked_infos`
  ADD PRIMARY KEY (`Booked_id`),
  ADD KEY `user_info` (`U_id`),
  ADD KEY `ticket_info` (`Ticket_id`);

--
-- Indexes for table `book_train_infos`
--
ALTER TABLE `book_train_infos`
  ADD PRIMARY KEY (`BookedTrain_id`),
  ADD KEY `user_id` (`U_id`),
  ADD KEY `train_id` (`Train_id`);

--
-- Indexes for table `city_infos`
--
ALTER TABLE `city_infos`
  ADD PRIMARY KEY (`City_id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ticket_infos`
--
ALTER TABLE `ticket_infos`
  ADD PRIMARY KEY (`Ticket_id`);

--
-- Indexes for table `trainticket_infos`
--
ALTER TABLE `trainticket_infos`
  ADD PRIMARY KEY (`Train_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_infos`
--
ALTER TABLE `booked_infos`
  MODIFY `Booked_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `book_train_infos`
--
ALTER TABLE `book_train_infos`
  MODIFY `BookedTrain_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `city_infos`
--
ALTER TABLE `city_infos`
  MODIFY `City_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_infos`
--
ALTER TABLE `ticket_infos`
  MODIFY `Ticket_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trainticket_infos`
--
ALTER TABLE `trainticket_infos`
  MODIFY `Train_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `U_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booked_infos`
--
ALTER TABLE `booked_infos`
  ADD CONSTRAINT `ticket_info` FOREIGN KEY (`Ticket_id`) REFERENCES `ticket_infos` (`Ticket_id`),
  ADD CONSTRAINT `user_info` FOREIGN KEY (`U_id`) REFERENCES `user_infos` (`U_id`);

--
-- Constraints for table `book_train_infos`
--
ALTER TABLE `book_train_infos`
  ADD CONSTRAINT `train_id` FOREIGN KEY (`Train_id`) REFERENCES `trainticket_infos` (`Train_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`U_id`) REFERENCES `user_infos` (`U_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
