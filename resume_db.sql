-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2025 at 02:55 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int NOT NULL,
  `degree` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `year_start` year NOT NULL,
  `year_end` year NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `degree`, `school`, `year_start`, `year_end`) VALUES
(1, 'Bachelor of Science in Information Technology', 'GCT', 2021, 2025),
(2, 'Senior High School - STEM', 'GCT', 2017, 2019),
(3, 'High School', 'Buruanga Vocational School', 2013, 2017);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `organization` varchar(255) NOT NULL,
  `year` year NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `title`, `description`, `organization`, `year`) VALUES
(1, 'Capstone Research Project', 'Web System', 'Nutrimeal', 2024),
(2, 'Chat System', 'SH capstone project', 'N/A', 2025);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `proficiency` int NOT NULL
) ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `proficiency`) VALUES
(1, 'HTML5', 95),
(2, 'CSS3 & SCSS', 90),
(3, 'JavaScript', 60),
(4, 'jQuery', 50),
(5, 'JSON', 40),
(6, 'PHP', 55),
(7, 'MySQL', 40);

-- --------------------------------------------------------

--
-- Table structure for table `software_skills`
--

CREATE TABLE `software_skills` (
  `id` int NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `proficiency` int NOT NULL
) ;

--
-- Dumping data for table `software_skills`
--

INSERT INTO `software_skills` (`id`, `skill_name`, `proficiency`) VALUES
(1, 'Web Development', 90),
(2, 'Database', 75),
(3, 'Programming', 85),
(4, 'Development Tools', 65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software_skills`
--
ALTER TABLE `software_skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `software_skills`
--
ALTER TABLE `software_skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
