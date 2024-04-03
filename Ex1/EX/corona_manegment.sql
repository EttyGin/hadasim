-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: אפריל 04, 2024 בזמן 01:46 AM
-- גרסת שרת: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corona_manegment`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `members_details`
--

CREATE TABLE `members_details` (
  `id` int(9) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `phone` varchar(9) NOT NULL,
  `cell_phone` varchar(10) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- הוצאת מידע עבור טבלה `members_details`
--

INSERT INTO `members_details` (`id`, `last_name`, `first_name`, `address`, `birth_date`, `phone`, `cell_phone`, `start_date`, `end_date`) VALUES
(325746147, 'Ginz', 'Etty Chaya', 'Rabbi Akiva', '2004-01-06', '089744605', '0533153236', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `vacc_records`
--

CREATE TABLE `vacc_records` (
  `no` int(1) NOT NULL,
  `id` int(9) NOT NULL,
  `vdate` date NOT NULL,
  `manufacturer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- הוצאת מידע עבור טבלה `vacc_records`
--

INSERT INTO `vacc_records` (`no`, `id`, `vdate`, `manufacturer`) VALUES
(1, 325746147, '2022-02-01', 'fiser'),
(2, 325746147, '2022-02-02', 'fiser');

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `members_details`
--
ALTER TABLE `members_details`
  ADD PRIMARY KEY (`id`);

--
-- אינדקסים לטבלה `vacc_records`
--
ALTER TABLE `vacc_records`
  ADD PRIMARY KEY (`no`,`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members_details`
--
ALTER TABLE `members_details`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1355746967;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
