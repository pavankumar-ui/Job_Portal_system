-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 10:52 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `roles` text NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `application_close_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `feature_image` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `title`, `description`, `roles`, `job_type`, `address`, `salary`, `application_close_date`, `created_at`, `updated_at`, `feature_image`, `slug`) VALUES
(8, 3, 'Delivery Boys', '<ul><li><font face=\"Arial\">Driving licence is must to deliver the foods</font></li><li><font face=\"Arial\">No Such Drug activities performed while delivering the food, if found will terminate from the job at the same day</font></li><li><font face=\"Arial\">Having own vehicle is a must to delivery boys</font></li></ul>', '<ul><li><span style=\"font-family: Arial;\">Should be young and energetic to deliver</span>&nbsp;the foods</li><li>Able to deliver the food properly and update with our customer care</li></ul>', 'parttime', 'bangalore', '20000', '2024-01-31', '2024-01-25 06:12:53', '2024-01-27 09:55:22', 'images/KzFMxXoNRZOJdXDfTvweeL4jMcSwblcXjG1YBLLV.jpg', 'delivery-boys.e4095371-fe80-4aac-8b90-8011cd64cf33'),
(9, 1, 'General Manager', '<ul><li><b>We want Manager to look up the stock organization wisely</b></li><li><b>Sales knowledge is must</b></li><li><b>Must have experience in&nbsp; Tele Sales Associate&nbsp; &nbsp;for 4 years</b></li></ul>', '<p><b>need to look up the stock prices day by day&nbsp; and give updates regularly</b></p><p><br></p>', 'parttime', 'Whitefield', '45000', '2024-02-02', '2024-01-25 08:06:12', '2024-01-31 02:07:11', 'images/IRrSwMG8nHLkG8CGa66fTNzkrnwNor3JUAbnnfsR.jpg', 'general-manager.dd4f8ef7-f931-4e73-a2a7-18f64227f998'),
(10, 3, 'Product Manager', '<p>Excel,Power Bi Skills is a must</p><p>Azure Cloud is an added advantage</p>', '<p>Should maintain week,monthly stock in time</p><p>Should manage&nbsp; delivery boys productivity of work&nbsp;</p>', 'contract', 'Bengaluru', '100000', '2024-02-09', '2024-01-27 09:51:35', '2024-02-01 02:48:44', 'images/bLtQaKY50xhfjohMYxNn87WuafGlOKNLgAgAVDr2.jpg', 'product-manager.b847dca9-32d2-409e-aafa-79cd78c2598d'),
(11, 7, 'Laravel  Developer', '<div class=\"WaaZC Zh8Myb\" style=\"color: rgb(0, 29, 53); font-family: &quot;Google Sans&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 18px;\"><div class=\"rPeykc uP58nb eUu65e PZPZlf\" data-attrid=\"SGEParagraphFeedback\" data-hveid=\"CAcQDA\" data-ved=\"2ahUKEwj-84PAo_-DAxULxTgGHa98DBwQo_EKegQIBxAM\" style=\"margin: 20px 0px; font-size: 16px; font-weight: bold; letter-spacing: 0.2px; line-height: 22px;\"><span aria-level=\"2\" role=\"heading\">Laravel developers should have strong knowledge of:</span></div></div><div class=\"WaaZC Zh8Myb\" style=\"color: rgb(0, 29, 53); font-family: &quot;Google Sans&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 18px;\"><ul jscontroller=\"M2ABbc\" jsaction=\"jZtoLb:SaHfyb\" data-hveid=\"CAcQDQ\" data-ved=\"2ahUKEwj-84PAo_-DAxULxTgGHa98DBwQm_YKegQIBxAN\" style=\"margin: 20px 0px; padding: 0px 0px 0px 24px; font-size: 16px; line-height: 22px;\"><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">PHP</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Laravel Framework</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">MySQL</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Front-end technologies</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">RESTful APIs</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Git</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px; padding: 0px 0px 0px 4px;\">Agile development methodologies</li></ul></div>', '<ul jscontroller=\"M2ABbc\" jsaction=\"jZtoLb:SaHfyb\" data-hveid=\"CAcQCw\" data-ved=\"2ahUKEwj-84PAo_-DAxULxTgGHa98DBwQm_YKegQIBxAL\" style=\"margin: 20px 0px; padding: 0px 0px 0px 24px; line-height: 22px; color: rgb(0, 29, 53); font-family: &quot;Google Sans&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Developing and managing databases</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Performing backend and UI testing on apps</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Writing code</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Fixing bugs</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Adding new features to applications</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Working with databases and performing tasks such as data migrations</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px; padding: 0px 0px 0px 4px;\"><span class=\"oXzekf\">Developing custom Laravel packages</span></li></ul>', 'fulltime', 'Mumbai', '45000', '2024-02-15', '2024-01-27 23:30:47', '2024-01-27 23:30:47', 'images/HmBHZ1HN2SV7ni0J2X1EQleev4OmC8izSEkjeARb.jpg', 'laravel-developer.078ad642-dfc0-4fef-9bbd-1d7739df8599'),
(12, 8, 'Associate Software Engineer', '<ul><li>Should have knowledge in Java</li><li>Should be strong in OOPS concept</li><li>Spring Boot framework is an added advantage</li><li>Should have 2-3 years of proven experience</li></ul>', '<ul jscontroller=\"M2ABbc\" jsaction=\"jZtoLb:SaHfyb\" data-hveid=\"CAYQCw\" data-ved=\"2ahUKEwiKi-jCqf-DAxVK-TgGHXLqAZMQm_YKegQIBhAL\" style=\"margin: 20px 0px; padding: 0px 0px 0px 24px; line-height: 22px; color: rgb(0, 29, 53); font-family: \"Google Sans\", Roboto, \"Helvetica Neue\", Arial, sans-serif;\"><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Developing code</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Debugging and maintaining software</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Creating user interfaces, databases, and other software components</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Analyzing, designing, and maintaining software applications</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Writing and testing code</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Troubleshooting issues and finding bugs in software</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Collaborating with team members to understand a project\'s requirements and specifications</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Partnering with product, infrastructure, DevOps, architecture, and engineering to guide an initiative\'s technical direction</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Coordinating with all cross functional teams to analyze issues</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Diagnosing root causes to recommend required actions</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Assisting to define and classify all issues and projects to avoid reoccurrence of issues</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Preparing automation responses if required</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px; padding: 0px 0px 0px 4px;\">Maintaining record of all status reports for issues resolution</li></ul>', 'fulltime', 'Bengaluru', '35000', '2024-02-10', '2024-01-27 23:53:11', '2024-02-05 05:31:17', 'images/lxrg3kXU4ndSDrh9Fp8mOp1h1j17BXoSAnCsmJPC.jpg', 'associate-software-engineer.7717705a-c4bc-4632-8eb4-ae4db3e0c5d9'),
(13, 8, 'Laravel PHP Developer', '<p><div class=\"WaaZC Zh8Myb\" style=\"color: rgb(0, 29, 53); font-family: &quot;Google Sans&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"></div></p><div class=\"WaaZC Zh8Myb\" style=\"color: rgb(0, 29, 53); font-family: &quot;Google Sans&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; white-space: normal; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><ul jscontroller=\"M2ABbc\" jsaction=\"jZtoLb:SaHfyb\" data-hveid=\"CAkQCw\" data-ved=\"2ahUKEwi-vrD89YaEAxXB3DgGHVRcBTkQm_YKegQICRAL\" style=\"margin: 20px 0px; padding: 0px 0px 0px 24px; font-size: 16px; line-height: 22px;\"><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Strong knowledge of PHP</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Knowledge of Laravel Framework</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Knowledge of MySQL</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Knowledge of front-end technologies</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Knowledge of RESTful APIs</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Knowledge of Git</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Knowledge of Agile development methodologies</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Knowledge of programming languages</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Knowledge of MVC and OOP</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Skilled in DBMS</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Experience with project management frameworks</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Knowledge of the latest updates</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px; padding: 0px 0px 0px 4px;\">Knowledge of cloud computing and APIs</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px; padding: 0px 0px 0px 4px;\">Should have atleast 2-5 years of experience working as a PHP developer</li></ul><ul jscontroller=\"M2ABbc\" jsaction=\"jZtoLb:SaHfyb\" data-hveid=\"CAkQCw\" data-ved=\"2ahUKEwi-vrD89YaEAxXB3DgGHVRcBTkQm_YKegQICRAL\" style=\"margin: 20px 0px; padding: 0px 0px 0px 24px; font-size: 16px; line-height: 22px;\"><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px; padding: 0px 0px 0px 4px;\"><span><span class=\"UV3uM\" style=\"white-space: nowrap;\"><div data-cid=\"_QN65Zb6eIMG54-EP1LiVyAM_21\" data-bt=\"1\" class=\"NPrrbc\" style=\"margin-right: 6px; display: inline-flex; vertical-align: middle;\"><div jsname=\"HtgYJd\" class=\"BMebGe k0Jjg fCrZyc LwdV0e FR7ZSc OJeuxf PrjL8c\" jsaction=\"click:trigger.km1vMe;\" aria-label=\"Expand\" role=\"button\" tabindex=\"0\" data-hveid=\"CAYQAA\" data-ved=\"2ahUKEwi-vrD89YaEAxXB3DgGHVRcBTkQ3fYKegQIBhAA\" style=\"outline: 0px; display: inline-block; vertical-align: middle;\"><div class=\"niO4u iCQO5d\" style=\"text-align: center; text-transform: none; -webkit-box-align: center; align-items: center; box-sizing: border-box; cursor: pointer; display: inline-block; -webkit-box-pack: center; justify-content: center; margin-left: auto; margin-right: auto; position: relative; width: 28px; border-radius: 9999px; background-color: transparent; border: 1px solid rgb(210, 210, 210); color: var(--rrJJUc); height: 20px; min-height: 20px;\"><div class=\"kHtcsd DopHqc\" style=\"border: none; border-radius: inherit; display: flex; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; width: 26.4px; height: 18.4px;\"><span class=\"d3o3Ad Hkv2Pe\" style=\"display: flex; -webkit-box-align: center; align-items: center; color: rgb(11, 87, 208); background: unset !important; height: 18px;\"><span class=\"z1asCe bjaP2b\" style=\"display: inline-block; fill: currentcolor; height: 18px; line-height: 18px; position: relative; width: 18px;\"><svg focusable=\"false\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z\"></path></svg></span></span></div></div></div></div></span></span></li></ul></div>', '<ul jscontroller=\"M2ABbc\" jsaction=\"jZtoLb:SaHfyb\" data-hveid=\"CAkQDQ\" data-ved=\"2ahUKEwi-vrD89YaEAxXB3DgGHVRcBTkQm_YKegQICRAN\" style=\"margin: 20px 0px; padding: 0px 0px 0px 24px; line-height: 22px; color: rgb(0, 29, 53); font-family: &quot;Google Sans&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif;\"><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Writing code</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Fixing bugs</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Adding new features to applications</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Working with databases</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Performing various tasks such as data migrations</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Developing custom Laravel packages</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Developing and managing databases</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px 0px 8px; padding: 0px 0px 0px 4px;\">Performing backend and UI testing on apps</li><li class=\"PZPZlf\" data-attrid=\"SGEListItem\" style=\"margin: 0px; padding: 0px 0px 0px 4px;\">Interacting and working with other developers inside the firm to meet data collecting needs</li></ul>', 'fulltime', 'Noida', '65000', '2024-02-09', '2024-01-31 00:20:13', '2024-01-31 00:20:13', 'images/c5sWJ8LX5tfqHyBsqkafyK1hhnfJX4Um7FSoV54B.jpg', 'laravel-php-developer.32cf39e0-b265-4922-97e1-8d1f7d728c5e'),
(15, 1, 'Sales Associate', '<ul style=\"margin: 32px 0px; padding-left: 21px; color: rgb(44, 50, 65); font-family: &quot;Work Sans&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 22px;\"><li style=\"letter-spacing: -0.2px; margin-bottom: 5px;\">An Associate’s degree or high school diploma.</li><li style=\"letter-spacing: -0.2px; margin-bottom: 5px;\">Retail sales experience.</li><li style=\"letter-spacing: -0.2px; margin-bottom: 5px;\">A professional appearance.</li><li style=\"letter-spacing: -0.2px; margin-bottom: 5px;\">Maintain a positive attitude and focus on customer satisfaction in a fast-paced environment.</li><li style=\"letter-spacing: -0.2px; margin-bottom: 5px;\">The ability to read, write, and perform basic math.</li><li style=\"letter-spacing: -0.2px;\">The ability to stand and walk for extended periods of time.</li></ul>', '<ul style=\"margin: 32px 0px; padding-left: 21px; color: rgb(44, 50, 65); font-family: &quot;Work Sans&quot;, &quot;Helvetica Neue Light&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 22px;\"><li style=\"letter-spacing: -0.2px; margin-bottom: 5px;\">Greeting customers, responding to questions, improving engagement with merchandise and providing outstanding customer service.</li><li style=\"letter-spacing: -0.2px; margin-bottom: 5px;\">Operating cash registers, managing financial transactions, and balancing drawers.</li><li style=\"letter-spacing: -0.2px; margin-bottom: 5px;\">Achieving established goals.</li><li style=\"letter-spacing: -0.2px; margin-bottom: 5px;\">Directing customers to merchandise within the store.</li><li style=\"letter-spacing: -0.2px; margin-bottom: 5px;\">Increasing in store sales.</li><li style=\"letter-spacing: -0.2px; margin-bottom: 5px;\">Superior product knowledge.</li><li style=\"letter-spacing: -0.2px; margin-bottom: 5px;\">Maintaining an orderly appearance throughout the sales floor.</li><li style=\"letter-spacing: -0.2px; margin-bottom: 5px;\">Introducing promotions and opportunities to customers.</li><li style=\"letter-spacing: -0.2px;\">Cross-selling products to increase purchase amounts.</li></ul>', 'contract', 'Hebbal', '35000', '2024-02-16', '2024-02-05 21:50:22', '2024-02-05 21:50:22', 'images/RN0Cs9yp3v4ttgtdrplAbOLmNOV89BWrC65DnmqV.jpg', 'sales-associate.c33bb918-940d-43a4-a839-0bfa46d56bd1');

-- --------------------------------------------------------

--
-- Table structure for table `listing_user`
--

CREATE TABLE `listing_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `listing_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `shortlisted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listing_user`
--

INSERT INTO `listing_user` (`id`, `listing_id`, `user_id`, `shortlisted`, `created_at`, `updated_at`) VALUES
(4, 9, 6, 0, '2024-01-31 07:29:46', '2024-01-31 07:29:46'),
(5, 10, 6, 1, '2024-01-31 07:34:54', '2024-02-06 03:31:35'),
(7, 13, 4, 1, '2024-02-01 01:54:22', '2024-02-05 05:31:39'),
(8, 11, 4, 0, '2024-02-01 01:55:34', '2024-02-01 01:55:34'),
(9, 15, 2, 0, '2024-02-06 02:51:25', '2024-02-06 02:51:25'),
(10, 10, 2, 0, '2024-02-06 03:29:15', '2024-02-06 03:29:15'),
(11, 9, 2, 0, '2024-02-06 03:30:06', '2024-02-06 03:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_21_055640_create_jobs_table', 1),
(6, '2024_01_23_063259_create_listings_table', 2),
(7, '2024_01_23_105434_add_feature_image_to_listings', 3),
(8, '2024_01_23_141356_add_slug_to_listings', 4),
(10, '2024_01_28_054518_create_listings_user_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `about` text DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `user_trial` date DEFAULT NULL,
  `billing_ends` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `about`, `profile_pic`, `user_type`, `resume`, `user_trial`, `billing_ends`, `status`, `plan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Traders Pvt ltd', 'john.traders@gmail.com', '2024-01-23 00:26:24', '$2y$10$FFCxpazj9sU0mbi65xCpduuyHdv321FlhWxImbs7uKbwtrDXggfwe', NULL, 'profile_pic/HjxMsf0stvmnBzUK0ZoJLzXIFlT8CIG11naVFltM.jpg', 'employer', NULL, '2024-01-30', '2024-02-23', 'paid', 'monthly', NULL, '2024-01-23 00:25:57', '2024-01-27 04:03:48'),
(2, 'Nagaraju Gowda', 'nagu.gowda@gmail.com', '2024-01-23 00:28:10', '$2y$10$0NQ6SR9E6wuUFDfDs8I.zuwf4FWbo8hw6r6oKn4fQCvqePmmpJ/t.', NULL, 'profile_pic/yFSZv1yW38OqVpgZWPPMN4rFzDOhNXjeXYT094BB.jpg', 'seeker', 'seeker/30zzvuUS7DjsCigBShbrBiTlnJy26U3NP2x9Vqot.pdf', NULL, NULL, NULL, NULL, NULL, '2024-01-23 00:27:53', '2024-01-27 05:29:02'),
(3, 'Rajesh Delivery Pvt ltd', 'rajesh.delivery@gmail.com', '2024-01-23 00:30:32', '$2y$10$.z9FxfjJ/WzaYW8pzIgWOO6y.huQNh2qfgcXpZoxhIlGV4E9XPUUa', '<p style=\"border: 0px; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; font-family: Lora, serif; font-size: 18px;\">The first recorded instance of a meal delivery comes from Italy in 1889. King Umberto and his Queen Margherita and called Raffaele Esposito, the creator of the Pizza Margherita, to deliver a pizza to their palace in Naples.</p><p style=\"border: 0px; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; font-family: Lora, serif; font-size: 18px;\">The rise of the modern-day food delivery system was caused by economic necessity. During the 1950’s, the growing American middle class was stuck to their homes, watching TV all day. This almost caused a collapse in the American restaurant industry and as a result had them adapt by creating the modern-day delivery services we all know. Reports from that time indicate that this adaptation boosted restaurant sales by over 50 percent in a short period of time.</p><p style=\"border: 0px; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; padding: 0px; font-family: Lora, serif; font-size: 18px;\">Today,&nbsp;<a href=\"https://www.statista.com/outlook/374/100/online-food-delivery/worldwide\" rel=\"nofollow noopener\" target=\"_blank\" style=\"border: 0px; margin: 0px; padding: 0px; transition: color 0.1s ease-in-out 0s, background-color 0.1s ease-in-out 0s; text-decoration: none; color: rgb(30, 115, 190);\">the market for food delivery is valued at $122 billion.</a>&nbsp;This is equal to 1 percent of the global food market or 4 percent of the food sold through restaurants. While many markets have already matured and identified companies to take on market leadership, the overall demand for food delivery is still increasing at a yearly rate of 3.5 percent. &nbsp;</p><div id=\"AdThrive_Content_3_desktop\" class=\"adthrive-ad adthrive-content adthrive-content-3 adthrive-ad-cls\" data-google-query-id=\"CK3qre-tloQDFeuSrAId0FoEpg\" style=\"border: 0px; margin: 10px 0px; padding: 0px; text-align: center; overflow-x: visible; clear: both; line-height: 0; align-items: center; display: flex; flex-wrap: wrap; justify-content: center; font-family: Lora, serif; font-size: 18px; min-height: 250px;\"></div>', 'profile_pic/EWRp4w2m91Q1BvybagJ35XGINeFPsXGurzbOP8rT.jpg', 'employer', NULL, '2024-01-30', '2024-02-23', 'paid', 'monthly', NULL, '2024-01-23 00:30:10', '2024-02-06 03:34:53'),
(4, 'Abrar Ul Haq', 'abrar@gmail.com', '2024-01-27 21:56:13', '$2y$10$csQy7aIhsHpQ/WUmq4Cx/ODdKBLUidseJ4Q6hOSy6AncNVWa3fq/W', NULL, 'profile_pic/gXGC9guZIxGxl2KmNdeUBTHf9xZfb5byIWbpEyLS.jpg', 'seeker', 'resume/VLy1l9VMzgyEoFGTDk4217Kz6XdhIgmG5MGQ7odF.pdf', NULL, NULL, NULL, NULL, NULL, '2024-01-27 21:55:26', '2024-02-01 01:54:18'),
(5, 'Javed Haziz', 'javed@gmail.com', '2024-01-27 22:07:05', '$2y$10$olCjVn0BReKynAypknwc8OSeW9fsQlF5xplTQejEgP2AsqpV9zPb6', NULL, 'profile_pic/IqWOuk5PiWqPLCnukYZPQPkDFvA4wFQgtaoVJcVs.jpg', 'seeker', 'seeker/RyImc0zffYYku47zGRYi66I6GZvP43sBg99p1RWJ.pdf', NULL, NULL, NULL, NULL, NULL, '2024-01-27 22:06:45', '2024-01-27 22:16:17'),
(6, 'Raghavendra Rao Bahaddur', 'raghu.567@gmail.com', '2024-01-27 22:23:43', '$2y$10$ppou4DM4wxC7T./JytT1CO2hZQgVsXxeqpQIHSUPoS4BHXNVt5PCC', NULL, 'profile_pic/Vb68LEsZheLoJhSjHfmRmauQgPMlepyhiL7YatuR.jpg', 'seeker', 'seeker/CiqmZjbVHIpG6zpFQXRAF4j3mOBmcj2Il6plUpkT.pdf', NULL, NULL, NULL, NULL, NULL, '2024-01-27 22:20:03', '2024-01-28 00:51:17'),
(7, 'Webosolutions pvt ltd', 'web.solutions@mail.com', '2024-01-27 22:55:26', '$2y$10$4Y2enW7XC0S.P6z9ePUQAem0bE22ElFGC6fzcpIpFNttOpLW8TVoK', NULL, 'profile_pic/tiYHmf858rU9FWUBBNmJYe7Nl0gGksUPGybSA4U5.jpg', 'employer', NULL, '2024-02-04', NULL, NULL, NULL, NULL, '2024-01-27 22:55:11', '2024-01-27 22:59:48'),
(8, 'Jain ERP Pvt ltd', 'jains.erp@work.com', '2024-01-27 23:41:09', '$2y$10$zGZ5Sl3OtMV0exn00F.16.jHvor6/HVwZHB/uv6RLg4Tm2F4chJn2', '<p class=\"margin-vertical-0 padding-vertical-1 text-responsive-16px \" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; line-height: 1.5rem; color: rgb(25, 25, 25); font-family: &quot;Segoe UI&quot;, SegoeUI, &quot;Segoe WP&quot;, Tahoma, Arial, sans-serif; margin-bottom: 0px !important; padding-top: 0.75rem !important; padding-bottom: 0.75rem !important;\">Enterprise resource planning (ERP) is a type of software system that helps organizations automate and manage core business processes for optimal performance. ERP software coordinates the flow of data between a company’s business processes, providing a single source of truth and streamlining operations across the enterprise. It’s capable of linking a company’s financials, supply chain, operations, commerce, reporting, manufacturing, and human resources activities on one&nbsp;platform.</p><p class=\"margin-vertical-0 padding-vertical-1 text-responsive-16px \" style=\"box-sizing: inherit; margin-right: 0px; margin-left: 0px; line-height: 1.5rem; color: rgb(25, 25, 25); font-family: &quot;Segoe UI&quot;, SegoeUI, &quot;Segoe WP&quot;, Tahoma, Arial, sans-serif; margin-bottom: 0px !important; padding-top: 0.75rem !important; padding-bottom: 0.75rem !important;\">Most companies have a finance and operational system in place, but siloed systems can’t go beyond everyday business processes or help with future business growth. As companies expand and their needs change, their systems should keep up with them. In this article, you’ll learn what ERP is and why having software in place that keeps up with your needs can help run a more agile and efficient&nbsp;business.</p>', 'profile_pic/eJlXgEnB72Qzs0HuzE8P9rI7cnbZP8EDXrbXELtK.jpg', 'employer', NULL, '2024-02-04', '2024-03-05', 'paid', 'monthly', NULL, '2024-01-27 23:40:48', '2024-02-06 02:24:58');

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
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listing_user`
--
ALTER TABLE `listing_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listing_user_listing_id_foreign` (`listing_id`),
  ADD KEY `listing_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `listing_user`
--
ALTER TABLE `listing_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `listing_user`
--
ALTER TABLE `listing_user`
  ADD CONSTRAINT `listing_user_listing_id_foreign` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `listing_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
