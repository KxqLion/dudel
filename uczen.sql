-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 02:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uczen`
--

-- --------------------------------------------------------

--
-- Table structure for table `uczen`
--

CREATE TABLE `uczen` (
  `id` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `imie` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `kod` varchar(6) NOT NULL,
  `miejscowosc` varchar(50) NOT NULL,
  `plec` varchar(10) NOT NULL,
  `login` varchar(15) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `data_rejestracji` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uczen`
--

INSERT INTO `uczen` (`id`, `email`, `password`, `imie`, `nazwisko`, `kod`, `miejscowosc`, `plec`, `login`, `data_rejestracji`) VALUES
(1, '', '', '', '0', '0', '0', '0', '', '2022-12-02 12:44:13'),
(2, '', '', '', '0', '0', '0', '0', '', '2022-12-02 12:44:13'),
(3, 'a@a', 'a', 'a', '0', '0', '0', '0', 'a', '2022-12-02 12:44:13'),
(4, 'a@a', 'a', 'a', '0', '0', '0', '0', 'a', '2022-12-02 12:44:13'),
(5, 'a@a', 'a', 'a', '0', '0', '0', '0', 'a', '2022-12-02 12:44:13'),
(6, 'a@gmai.com', 'a', 'a', '0', '34-600', '0', '0', 'a', '2022-12-02 12:44:22'),
(7, 'a@gmai.com', 'a', 'a', '0', '34-600', '0', '0', 'aa', '2022-12-02 12:44:57'),
(8, 'a@gmai.com', 'a', 'a', '0', '34-600', '0', '0', 'a', '2022-12-02 12:47:04'),
(9, 'aab@gmail.com', '123', 'a', 'aaaaa', '34-400', 'aa', 'a', 'a', '2022-12-02 12:52:51'),
(10, 'a@gmai.com', 'a', 'a', 'a', '34-600', '34-400', 'm', 'a', '2022-12-02 12:55:09'),
(11, 'bb@gmail.com', 'b', 'b', 'a', '34-600', 'a', 'm', 'b', '2022-12-02 12:56:43'),
(12, 'bb@gmail.com', 'b', 'b', 'b', '34-800', 'bbb', 'n', 'b', '2022-12-02 12:57:17'),
(13, 'ccc@gmai.com', 'c', 'c', 'c', '34-900', 'c', 'n', 'c', '2022-12-02 12:58:29'),
(14, 'ccc@gmai.com', 'a', 'a', 'a', '34-100', 'a', 'k', 'aaaaaaaaaaaa', '2022-12-02 13:00:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uczen`
--
ALTER TABLE `uczen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uczen`
--
ALTER TABLE `uczen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
