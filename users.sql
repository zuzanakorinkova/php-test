-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 28, 2021 at 02:14 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `new_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `created`) VALUES
(1, 'Heefeefe', '$2y$10$MD4t.oNQDbscCJi2nux1VeRIkTmk8VHOt5870yOtPMAG.SNwkX6F6', '2021-03-28 14:51:12'),
(2, 'Heefeefe', '$2y$10$bLnj/eG6yqSz7yQDSTJL4u8u8Uh/7BnACmpfkpfrsugYfUaVDSxLm', '2021-03-28 14:53:23'),
(3, 'Heefeefe', '$2y$10$OHzD3/m9SZ3oBAD/1juUiuT0G5bZQPEWo0OZAmn0j4P392HFb0Q8y', '2021-03-28 14:58:22'),
(4, 'Heefeefe', '$2y$10$QHdC7Z/Vk8clLyrNQJha1O85AELzJJo5NanPPZnA04v2hCMSFt1Ni', '2021-03-28 15:00:50'),
(5, 'John', '$2y$10$7X1B5iI39YVIiwuRf/APvePj6Qh0FJ9lS1AXfz.92Fm6HmoW1D/Cu', '2021-03-28 15:01:13'),
(6, 'Johny', '$2y$10$gXsG6/QWeFKoRFO3EagxN.ay4CWHbV6Z1gGkhQnDxoR0wzS27bbP2', '2021-03-28 15:02:14'),
(7, 'AA', '$2y$10$lCUFOPnIYl0aP5CHaA0.Z.ttIVoVcb.YDXoXT60pDk55YYY/PBMna', '2021-03-28 15:05:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
