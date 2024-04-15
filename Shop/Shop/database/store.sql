-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2024 年 03 月 22 日 20:03
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `store`
--

-- --------------------------------------------------------

--
-- 資料表結構 `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 傾印資料表的資料 `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Japan Ruffle Top', 139),
(2, 'Hielf  Crochet Off Shoulder Top', 159),
(3, 'Rowen Pleat midi skirt', 209),
(4, 'Zeta Rubber Waist Skirt', 229),
(5, 'FLARE BUTTON CARGO SKIRT', 249),
(6, 'BRIELLA BODYCON SPILT DRESS II', 279),
(7, 'BRIELLA BODYCON SPILT BLUE DRESS II', 279),
(8, 'Stonewashed Cotton and Linen-Blend Chambray Shirt', 239),
(9, 'Raglan Full-Grain Leather Holdall', 358),
(10, 'Marbot Aviator-Style Silver-Tone and Acetate Sunglasses', 1050),
(11, 'Tranquility Cashmere Sweater', 258),
(12, 'Bootcut Jeans', 508);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Sajal', 'abbichiu@gmail.com', '12345678', '8899889988', 'Indore', '100 palace colony, Indore'),
(2, 'Ram', 'ram1234@xyz.com', '57f231b1ec41dc6641270cb09a56f897', '8899889989', 'Pune', '100 palace colony, Pune'),
(3, 'Shyam', 'shyam@xyz.com', '57f231b1ec41dc6641270cb09a56f897', '8899889990', 'Bangalore', '100 palace colony, Bangalore'),
(4, ' Chan Tai Man', 'taiman@gmail.com', '550e1bafe077ff0b0b67f4e32f29d751', '8899889989', 'Pune', '100 palace colony, Pune'),
(5, 'Tai Man', 'yyyy@gmail.com', '550e1bafe077ff0b0b67f4e32f29d751', '12345678', 'Hong Kong', 'Kowloon ');

-- --------------------------------------------------------

--
-- 資料表結構 `user_items`
--

CREATE TABLE `user_items` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_price` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `items_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `user_items`
--

INSERT INTO `user_items` (`id`, `item_id`, `user_id`, `item_price`, `status`, `items_name`) VALUES
(5, 3, 3, 50000.00, 'Added', 'Rowen Pleat midi skirt'),
(7, 7, 7, 8000.00, 'Added', 'BRIELLA BODYCON SPILT BLUE DRESS II'),
(23, 3, 1, 50000.00, 'Added', 'Rowen Pleat midi skirt'),
(25, 12, 1, 1200.00, 'Added', 'Bootcut Jeans<');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user_items`
--
ALTER TABLE `user_items`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user_items`
--
ALTER TABLE `user_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
