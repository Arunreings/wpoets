-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2026 at 05:22 AM
-- Server version: 8.4.7
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpoet`
--

-- --------------------------------------------------------

--
-- Table structure for table `wpoet_tb`
--

DROP TABLE IF EXISTS `wpoet_tb`;
CREATE TABLE IF NOT EXISTS `wpoet_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_content` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wpoet_tb`
--

INSERT INTO `wpoet_tb` (`id`, `title`, `subtitle`, `task_content`) VALUES
(1, 'Learning', 'Digital Learning Infrastrucure ^ Brand Identity ^ Interactive Experience', 'Usability enhancement and Transaction Portal for customers ^ Build strong visual branding with engaging user experiences. ^ Improve customer engagement using modern animations and layouts.'),
(2, 'Technology', 'Web Development ^ API Integration ^ Performance Optimization', 'Responsive websites using latest frontend and backend technologies. ^ Connect third-party platforms and automate workflows efficiently. ^ Improve website speed and scalability for better performance.'),
(3, 'Communication', 'Digital Marketing ^ Social Media Growth ^ Lead Generation', 'Reach more audience through targeted marketing strategies. ^ Build strong online visibility and improve brand awareness. ^ Generate quality leads using data-driven campaigns and funnels.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
