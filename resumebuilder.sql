-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2025 at 08:28 AM
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
-- Database: `resumebuilder`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `subject`, `email`, `phone`, `msg`, `created_at`) VALUES
(1, 'ladva khushal', '932817578', 'ladvakhushal14@gmail.com', '9328171578', 'hi.......!', '2025-08-11 14:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `cv_data`
--

CREATE TABLE `cv_data` (
  `id` int(11) NOT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `user_img` varchar(255) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `user_summary` text DEFAULT NULL,
  `empJob_title` varchar(100) DEFAULT NULL,
  `employer` varchar(100) DEFAULT NULL,
  `emp_start_Date` date DEFAULT NULL,
  `emp_end_Date` date DEFAULT NULL,
  `emp_city` varchar(100) DEFAULT NULL,
  `emp_description` text DEFAULT NULL,
  `school_name` varchar(100) DEFAULT NULL,
  `deg_name` varchar(100) DEFAULT NULL,
  `edu_start_date` date DEFAULT NULL,
  `edu_end_date` date DEFAULT NULL,
  `edu_city` varchar(100) DEFAULT NULL,
  `edu_summary` text DEFAULT NULL,
  `skill_job_title` varchar(100) DEFAULT NULL,
  `skill_emp` varchar(100) DEFAULT NULL,
  `urdu` varchar(50) DEFAULT NULL,
  `urdu_level` varchar(50) DEFAULT NULL,
  `english` varchar(50) DEFAULT NULL,
  `english_level` varchar(50) DEFAULT NULL,
  `ref_name` varchar(100) DEFAULT NULL,
  `ref_comp_name` varchar(100) DEFAULT NULL,
  `ref_phone` varchar(50) DEFAULT NULL,
  `ref_email` varchar(100) DEFAULT NULL,
  `other_name` varchar(100) DEFAULT NULL,
  `other_city` varchar(100) DEFAULT NULL,
  `other_strt_date` date DEFAULT NULL,
  `other_end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cv_data`
--

INSERT INTO `cv_data` (`id`, `job_title`, `user_img`, `username`, `email`, `phone`, `address`, `user_summary`, `empJob_title`, `employer`, `emp_start_Date`, `emp_end_Date`, `emp_city`, `emp_description`, `school_name`, `deg_name`, `edu_start_date`, `edu_end_date`, `edu_city`, `edu_summary`, `skill_job_title`, `skill_emp`, `urdu`, `urdu_level`, `english`, `english_level`, `ref_name`, `ref_comp_name`, `ref_phone`, `ref_email`, `other_name`, `other_city`, `other_strt_date`, `other_end_date`) VALUES
(1, 'web devloper', 'pic1.jpg', 'khushal', 'khushal123@gmail.com', '9328171578', 'rajkot', '', 'manager ', 'flipkart', '2025-08-01', '2025-08-31', 'rajkot', '', 'santiniketan collage ', 'BCA', '2024-06-04', '2026-06-17', 'rajkot', '', 'critcal thinking', 'Skillful', 'Urdu', 'Professional', 'English', 'Professional', 'khushal', 'khushal', '9328171578', 'ladvakhushal14@gmail.com', 'khushal', 'rajkot', '2025-08-12', '2025-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `contact`, `address`, `email`, `password`, `user_img`) VALUES
(2, 'khushal', '9328171578', 'rajkot', 'khushal123@gmail.com', '123456@L', 'pic1.jpg'),
(3, 'admin ', '6854651348', 'rdsbddfb', 'dffrhgdfv@fsdgvd', '1234@Lk', 'pic10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv_data`
--
ALTER TABLE `cv_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cv_data`
--
ALTER TABLE `cv_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
