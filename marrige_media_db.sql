-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 01:50 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marrige_media_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(4, '2020_07_07_070557_create_roles_table', 1),
(5, '2020_07_15_111544_create_personal_infos_table', 1),
(6, '2020_07_21_105215_create_user_profile_images_table', 1),
(7, '2020_12_24_055454_create_private_messages_table', 1),
(8, '2020_12_28_031816_create_success_stories_table', 1),
(9, '2020_12_28_095537_create_package_prices_table', 1),
(10, '2020_12_30_045812_create_contacts_table', 1),
(13, '2021_01_04_093759_create_preferences_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `package_prices`
--

CREATE TABLE `package_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `proposal` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_prices`
--

INSERT INTO `package_prices` (`id`, `title`, `price`, `discount`, `duration`, `proposal`, `contact`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Free', 0, 0, 30, 30, 30, 'Free18-5ff3e66760354.png', 1, '2021-01-04 22:09:11', '2021-01-04 22:09:11'),
(2, 'Basic', 500, 0, 60, 60, 60, 'Basic49-5ff3e68caf598.png', 1, '2021-01-04 22:09:48', '2021-01-04 22:09:48'),
(3, 'Silver', 1000, 0, 90, 90, 90, 'Silver80-5ff3f5b5d94ba.png', 1, '2021-01-04 23:14:29', '2021-01-04 23:14:29'),
(4, 'Platinum', 1500, 0, 120, 120, 120, 'Platinum30-5ff3f5f5c9860.png', 1, '2021-01-04 23:15:33', '2021-01-04 23:15:33');

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
-- Table structure for table `personal_infos`
--

CREATE TABLE `personal_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_me_family` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major_subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `my_profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `income` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_of_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_of_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_brother` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_brother_married` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_sister` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_many_sister_married` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hair_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eye_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skin_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smoke_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alcohol_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disabilities_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `do_u_have_children` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hear_about_us` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diat_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_tongue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `can_speak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_infos`
--

INSERT INTO `personal_infos` (`id`, `user_id`, `about_me_family`, `education_level`, `major_subject`, `my_profession`, `job_title`, `job_company_name`, `income`, `district`, `thana`, `zip_code`, `country_of_residence`, `state_of_residence`, `citizenship`, `father_name`, `father_occupation`, `mother_name`, `mother_occupation`, `number_of_brother`, `how_many_brother_married`, `number_of_sister`, `how_many_sister_married`, `height`, `weight`, `blood_group`, `hair_color`, `eye_color`, `skin_color`, `smoke_status`, `alcohol_status`, `disabilities_status`, `do_u_have_children`, `hear_about_us`, `diat_status`, `mother_tongue`, `can_speak`, `status`, `created_at`, `updated_at`) VALUES
(1, '5', 'I am Simple like to Simplicity', 'BSc', 'Computer_Science_Engineer', 'Software_Engineer', 'Software Engineer', 'DSC', '30k_to_50K', 'Dhaka', 'mirzapur', '1940', 'Bangladesh', 'dHAKA', 'Bangali', 'MR', 'Business', 'SR', 'Business', '1', '1', '1', '1', '5.9', '65', 'B+', 'Black', 'Black', 'Fair', 'No', 'No', 'No', 'No', 'Google', 'Not_to_say', 'Bangla', '[\"Bangla\",\"English\",\"Hindi\"]', 1, '2021-01-04 22:58:42', '2021-01-04 23:01:39'),
(2, '6', 'I am Student', 'MBBS', 'Health_Technology_(Laboratory)', 'Student', 'Student', 'DMC', 'No_Income', 'Dhaka', 'Dhaka', '1212', 'Bangladesh', 'Dhaka', 'Bangali', 'Rg', 'Business', 'Rf', 'Business', '1', '1', '1', '1', '5.9', '65', 'B+', 'Black', 'Black', 'Fair', 'No', 'No', 'No', 'No', 'Google', 'Not_to_say', 'Bangla', '[\"Bangla\",\"English\"]', 1, '2021-01-04 23:09:09', '2021-01-04 23:12:11'),
(3, '7', 'Sed consequat Dolor', 'Msc', 'Computer_Science_Engineer', 'Retired_Person', 'Ut eiusmod debitis a', 'Duran Guzman Plc', '0_to_20K', 'Jhenaidah', 'Commodi sint natus', '47194', 'Austria', 'Soluta incidunt max', 'Japan', 'Ivor Luna', 'Business', 'Theodore Gill', 'Housewife', '8', '9', '1', '5', '4.8', '38', 'A-', 'Others', 'Black', 'Brown', 'Sometimes', 'Sometimes', 'No', 'Yes', 'Facebook', 'Vag', 'Others', '[\"Bangla\",\"English\",\"Hindi\",\"Dutch\",\"Persian\",\"Malay based\",\"Chinese\",\"French\"]', 1, '2021-01-04 23:18:50', '2021-01-05 01:00:12'),
(4, '8', 'Nothing to say', 'M_A', 'IT', 'Engineer', 'Student', 'no', 'No_Income', 'Dhaka', 'Dhaka', '1212', 'Bangladesh', 'dhaka', 'Bangali', 'kk', 'Business', 'kk', 'Business', '1', '1', '1', '1', '5.9', '55', 'B+', 'Black', 'Black', 'Fair', 'No', 'No', 'No', 'No', 'Google', 'Not_to_say', 'Bangla', '[\"Bangla\",\"English\"]', 1, '2021-01-05 02:33:36', '2021-01-05 02:35:33'),
(5, '9', 'Simple Girl', 'M_A', 'IT', 'Engineer', 'Student', 'IT', '30k_to_50K', 'Dhaka', 'Dhaka', '1212', 'Bangladesh', 'dhaka', 'Bangali', 'aa', 'Business', 'bb', 'Business', '1', '1', '1', '1', '5.3', '55', 'B+', 'Black', 'Black', 'Fair', 'No', 'No', 'No', 'No', 'Google', 'Not_to_say', 'Bangla', '[\"Bangla\",\"English\"]', 1, '2021-01-05 05:31:40', '2021-01-05 05:36:50'),
(6, '10', 'I am single and Student', 'MBBS', 'Nursing/Health_Science', 'Doctor', 'Doctor', 'ibn sina medical college', '30k_to_50K', 'Dhaka', 'Dhaka', '1213', 'Bangladesh', 'dhaka', 'Bangali', 'kk', 'Doctor', 'kk', 'Housewife', '1', '1', '1', '1', '5.4', '66', 'B+', 'Black', 'Black', 'Fair', 'No', 'No', 'No', 'No', 'Google', 'Not_to_say', 'Bangla', '[\"Bangla\",\"English\"]', 1, '2021-01-05 05:36:04', '2021-01-05 05:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minAge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxAge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `have_children` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minHeight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxHeight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minWeight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maxWeight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hair_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eye_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skin_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disabilities_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizenship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smoke_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diat_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_you_prefer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`id`, `user_id`, `minAge`, `maxAge`, `religion`, `family_status`, `marital_status`, `have_children`, `minHeight`, `maxHeight`, `minWeight`, `maxWeight`, `blood_group`, `hair_color`, `eye_color`, `skin_color`, `disabilities_status`, `education_level`, `subject`, `profession`, `country`, `district`, `citizenship`, `smoke_status`, `alcohol_status`, `diat_status`, `language`, `details_you_prefer`, `status`, `created_at`, `updated_at`) VALUES
(2, '6', '22', '44', 'Hindu', '[\"Middle_class\",\"Upper_middle_class\"]', '[\"Never_Married\",\"Divorced\",\"Widowed\"]', 'no', '4.0', '6.0', '88', '84', 'B+', 'White', 'Brown', '[\"Very_Fair\",\"Fair\"]', 'Yes', '[\"Any\",\"M_A\"]', '[\"IT\",\"English\",\"Physics\"]', '[\"Banker\",\"Doctor\"]', 'Bangladesh', 'Naogaon', 'Ireland', 'Yes', 'No', 'Not_to_say', '[\"Afrikaans\",\"Arabic\",\"English\"]', 'Dolores qui sunt dol', 0, '2021-06-01 04:15:19', '2021-06-30 02:54:08'),
(3, '2', '33', '35', 'Islam', 'Middle_class', '[\"Never_Married\",\"Widowed\"]', 'no', '4.0', '4.0', NULL, NULL, 'B+', 'Black', 'Black', 'Fair', 'No', 'M_A', 'IT', 'Engineer', 'Bangladesh', 'Dhaka', 'Bangali', 'No', 'No', 'Not_to_say', 'Bangla', NULL, 0, '2021-06-27 23:27:06', '2021-06-28 05:48:57'),
(5, '5', '22', '44', 'Hindu', '[\"Middle_class\",\"Upper_middle_class\"]', '[\"Never_Married\",\"Divorced\",\"Widowed\"]', 'no', '4.0', '6.0', '88', '84', 'B+', 'White', 'Brown', '[\"Very_Fair\",\"Fair\"]', 'Yes', '[\"Any\",\"M_A\"]', '[\"IT\",\"English\",\"Physics\"]', '[\"Banker\",\"Doctor\"]', 'Bangladesh', 'Naogaon', 'Ireland', 'Yes', 'No', 'Not_to_say', '[\"Afrikaans\",\"Arabic\",\"English\"]', 'Dolores qui sunt dol', 0, '2021-06-01 04:15:19', '2021-06-30 02:54:08'),
(6, '7', '22', '44', 'Hindu', '[\"Middle_class\",\"Upper_middle_class\"]', '[\"Never_Married\",\"Divorced\",\"Widowed\"]', 'no', '4.0', '6.0', '88', '84', 'B+', 'White', 'Brown', '[\"Very_Fair\",\"Fair\"]', 'Yes', '[\"Any\",\"M_A\"]', '[\"IT\",\"English\",\"Physics\"]', '[\"Banker\",\"Doctor\"]', 'Bangladesh', 'Naogaon', 'Ireland', 'Yes', 'No', 'Not_to_say', '[\"Afrikaans\",\"Arabic\",\"English\"]', 'Dolores qui sunt dol', 0, '2021-06-01 04:15:19', '2021-06-30 02:54:08'),
(7, '8', '22', '44', 'Hindu', '[\"Middle_class\",\"Upper_middle_class\"]', '[\"Never_Married\",\"Divorced\",\"Widowed\"]', 'no', '4.0', '6.0', '88', '84', 'B+', 'White', 'Brown', '[\"Very_Fair\",\"Fair\"]', 'Yes', '[\"Any\",\"M_A\"]', '[\"IT\",\"English\",\"Physics\"]', '[\"Banker\",\"Doctor\"]', 'Bangladesh', 'Naogaon', 'Ireland', 'Yes', 'No', 'Not_to_say', '[\"Afrikaans\",\"Arabic\",\"English\"]', 'Dolores qui sunt dol', 0, '2021-06-01 04:15:19', '2021-06-30 02:54:08'),
(8, '9', '22', '44', 'Hindu', '[\"Middle_class\",\"Upper_middle_class\"]', '[\"Never_Married\",\"Divorced\",\"Widowed\"]', 'no', '4.0', '6.0', '88', '84', 'B+', 'White', 'Brown', '[\"Very_Fair\",\"Fair\"]', 'Yes', '[\"Any\",\"M_A\"]', '[\"IT\",\"English\",\"Physics\"]', '[\"Banker\",\"Doctor\"]', 'Bangladesh', 'Naogaon', 'Ireland', 'Yes', 'No', 'Not_to_say', '[\"Afrikaans\",\"Arabic\",\"English\"]', 'Dolores qui sunt dol', 0, '2021-06-01 04:15:19', '2021-06-30 02:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `private_messages`
--

CREATE TABLE `private_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `to_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT 0,
  `recipientDelete` tinyint(1) NOT NULL DEFAULT 0,
  `senderDelete` tinyint(1) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `private_messages`
--

INSERT INTO `private_messages` (`id`, `to_id`, `from_id`, `subject`, `message`, `opened`, `recipientDelete`, `senderDelete`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 'Hello', 'i am ismail mobile 01737308999', 1, 0, 0, 0, '2021-05-02 02:15:47', '2021-05-02 02:30:57'),
(2, 5, 6, 'Hello', 'Hello bangla 2222222', 1, 0, 0, 0, '2021-05-02 04:02:14', '2021-05-02 04:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Author', 'author', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bride_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `groom_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marriage_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success_stories`
--

INSERT INTO `success_stories` (`id`, `bride_name`, `groom_name`, `location`, `marriage_date`, `image`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dr. P.J Roy', 'Dr. Mathor Sing', 'India', '12-12-2019', 'Dr. P.J Roy&Dr. Mathor Sing-65-5ff3e2e761eb1.jpg', 'no', 1, '2021-01-04 21:54:15', '2021-01-04 21:54:15'),
(2, 'Mashfica Najnin', 'Shafiqur Rahman', 'Dhaka', '10-12-2019', 'Mashfica Najnin&Shafiqur Rahman-91-5ff3e3588a248.png', 'no', 1, '2021-01-04 21:56:08', '2021-01-04 21:56:08'),
(3, 'Sadia Rafi', 'Shakil Ahmed', 'Dhaka', '20-12-2020', 'Sadia Rafi&Shakil Ahmed-59-5ff3e3a141f19.jpg', 'no', 1, '2021-01-04 21:57:21', '2021-01-04 21:57:21'),
(4, 'Alea Afsana', 'Rashid Khan', 'Pakistan', '10-12-2020', 'Alea Afsana&Rashid Khan-29-5ff3e61ad6cc8.jpg', 'no', 1, '2021-01-04 22:07:54', '2021-01-04 22:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `u_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `package_price_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guardian_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdby` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `looking_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifyToken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agreement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `u_id`, `role_id`, `package_price_id`, `first_name`, `last_name`, `mobile`, `email`, `gender`, `marital_status`, `profession`, `country`, `district`, `birthday`, `guardian_mobile`, `createdby`, `religion`, `social_order`, `looking_for`, `address`, `email_verified_at`, `password`, `verifyToken`, `agreement`, `activation`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1111201, 1, 1, 'First Admin', 'Last Admin', '01717111111', 'admin@email.com', 'Male', 'Male', 'Teacher', 'Bangladesh', 'Dhaka', '10-12-2020', '01717111111', 'Self', 'Islam', 'null', 'female', 'Dhaka', NULL, '$2y$10$5oILu8rRNy7YWnVtg6uD6OZFQmvGwLlHKlJUTVJ4dXfo8jc5TkvLu', NULL, '1', 0, 1, NULL, NULL, NULL),
(2, 1111202, 2, 1, 'First author', 'Last author', '01717222222', 'author@email.com', 'Male', 'Male', 'Teacher', 'Bangladesh', 'Dhaka', '10-12-2020', '01717111111', 'Self', 'Islam', 'null', 'female', 'Dhaka', NULL, '$2y$10$432gfJgG.Szg.8Jbgzyh2ObQufQpMojxbD/j1t9wM6GMQIW3K.xfm', NULL, '1', 0, 1, NULL, NULL, NULL),
(5, 21013, 2, 1, 'Ahmed', 'Imtiaj', '01919123212', 'ismail32cse@gmail.com', 'Male', 'Never_Married', 'Acting professional', 'Bangladesh', 'Dhaka', '1994-12-01', NULL, 'Self', 'Islam', 'Just_Muslim', 'Bride', NULL, '2021-01-04 22:55:19', '$2y$12$FFz.Yrx/I7foPSe6r91xYeF6iVCT7YwpALJS/eOtnWxH3KUbP9poa', NULL, 'on', 1, 1, NULL, '2021-01-04 22:55:08', '2021-01-04 23:01:39'),
(6, 21026, 2, 1, 'Sadia', 'Afrin', '01922121314', 'ihossain1199@gmail.com', 'Female', 'Never_Married', 'Acting professional', 'Bangladesh', 'Dhaka', '1997-01-31', NULL, 'Self', 'Islam', 'Just_Muslim', 'Groom', NULL, '2021-01-04 23:04:52', '$2y$10$M0YE0JiFt2KXG79vnEmEv.VbqZXiKyONz3WYWI7QxFxijXdjICOQK', NULL, 'on', 1, 1, NULL, '2021-01-04 23:04:17', '2021-01-04 23:12:11'),
(7, 21017, 2, 1, 'Zachery', 'Casey', '01710472020', 'mizanurrahman615@gmail.com', 'Male', 'Never_Married', 'Acting_professional', 'Other', 'Ulipur', '1997-12-28', NULL, 'Parent', 'Islam', 'Just_Muslim', 'Bride', NULL, '2021-01-04 23:18:23', '$2y$10$DuBI0vJACJdQVk.b40kg1eg0M1jtIqt6m5dNIz0744fNVhprPgmSy', NULL, 'on', 1, 1, NULL, '2021-01-04 23:17:55', '2021-01-05 01:02:15'),
(8, 21018, 2, 1, 'Rafiq', 'Adnan', '2222222', 'kosib72765@liaphoto.com', 'Male', 'Never_Married', 'Biologist\\Botanist', 'Bangladesh', 'Dhaka', '1991-12-31', NULL, 'Self', 'Islam', 'Just_Muslim', 'Bride', NULL, '2021-01-05 02:28:23', '$2y$10$iY310xyx4eF8ifsP09Lg1.3Y5M2YaPIliUlOxd25vLqlbFqgEXXNS', NULL, 'on', 1, 1, NULL, '2021-01-05 02:28:10', '2021-01-05 02:35:33'),
(9, 21019, 2, 1, 'Mithila', 'Tabassum', '018282123', 'raciyab516@nonicamy.com', 'Male', 'Never_Married', 'Banker', 'Bangladesh', 'Dhaka', '2000-12-31', NULL, 'Self', 'Islam', 'Just_Muslim', 'Groom', NULL, '2021-01-05 05:29:49', '$2y$10$cbQfUz4DiyR5RjPgUXPxOuaB1FoTXW.7B2MR7pjb0f3wdwoIpBZnK', NULL, 'on', 1, 1, NULL, '2021-01-05 05:29:25', '2021-01-05 05:36:50'),
(10, 210110, 2, 1, 'Sinthia', 'Mim', '01892342454', 'jekilo4869@cocyo.com', 'Male', 'Never_Married', 'Accountant', 'Bangladesh', 'Dhaka', '2001-12-31', NULL, 'Self', 'Islam', 'Just_Muslim', 'Groom', NULL, '2021-01-05 05:34:05', '$2y$10$W.tjwDLh913g2hEMr/TVLOyDsMqt/4BklOZD30rs9f/NdvMzYrQNu', NULL, 'on', 1, 1, NULL, '2021-01-05 05:33:50', '2021-01-05 05:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_images`
--

CREATE TABLE `user_profile_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_request_ids` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_approved_ids` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profile_images`
--

INSERT INTO `user_profile_images` (`id`, `user_id`, `profile_image`, `image`, `image_slug`, `show_request_ids`, `show_approved_ids`, `status`, `created_at`, `updated_at`) VALUES
(1, '5', 0, 'Ahmed-Imtiaj-5-96-5ff421a5c1535.jpg', 'Ahmed-Imtiaj-5-96', NULL, NULL, 0, '2021-01-04 23:00:55', '2021-05-04 01:20:34'),
(2, '6', 0, 'Sadia-Afrin-6-97-5ff42299c6c39.jpeg', 'Sadia-Afrin-6-97', NULL, NULL, 1, '2021-01-04 23:11:09', '2021-01-05 02:26:01'),
(3, '6', 0, 'Sadia-Afrin-6-35-5ff3f4f82ba88.jpg', 'Sadia-Afrin-6-35', NULL, NULL, 1, '2021-01-04 23:11:20', '2021-01-04 23:11:20'),
(4, '7', 0, 'Zachery-Casey-7-74-5ff3f6d3db7ee.jpg', 'Zachery-Casey-7-74', NULL, NULL, 1, '2021-01-04 23:19:15', '2021-01-04 23:19:15'),
(5, '8', 0, 'Rafiq-Adnan-8-31-5ff424b3ce515.jpg', 'Rafiq-Adnan-8-31', NULL, NULL, 1, '2021-01-05 02:34:59', '2021-01-05 02:34:59'),
(6, '9', 0, 'Mithila-Tabassum-9-46-5ff44e2d4cac4.png', 'Mithila-Tabassum-9-46', NULL, NULL, 1, '2021-01-05 05:31:57', '2021-01-05 05:31:57'),
(7, '10', 0, 'Sinthia-Mim-10-29-5ff44f37b9d49.jpg', 'Sinthia-Mim-10-29', NULL, NULL, 1, '2021-01-05 05:36:23', '2021-01-05 05:36:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_prices`
--
ALTER TABLE `package_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_infos`
--
ALTER TABLE `personal_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private_messages`
--
ALTER TABLE `private_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profile_images`
--
ALTER TABLE `user_profile_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `package_prices`
--
ALTER TABLE `package_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_infos`
--
ALTER TABLE `personal_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `preferences`
--
ALTER TABLE `preferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `private_messages`
--
ALTER TABLE `private_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `success_stories`
--
ALTER TABLE `success_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_profile_images`
--
ALTER TABLE `user_profile_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
