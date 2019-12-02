-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-12-02 10:32:02
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `guestbook`
--

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `author` varchar(10) NOT NULL DEFAULT '',
  `subject` tinytext NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`id`, `author`, `subject`, `content`, `date`) VALUES
(1, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(2, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(3, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(4, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(5, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(6, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(7, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(8, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(9, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(10, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(11, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(12, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(13, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(14, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(15, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(16, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(17, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(18, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(19, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(20, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(21, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(22, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(23, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(24, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(25, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(26, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(27, 'test1', 'test1', '123', '2019-12-01 15:28:36'),
(28, 'test1', 'test2', '123', '2019-12-02 10:15:06'),
(29, 'test2', 'test1', '456', '2019-12-02 10:15:18'),
(30, 'test2', 'test1', '45343324553453.45354.4564534364', '2019-12-02 10:15:36'),
(31, '>', '>', '>', '2019-12-02 10:31:01');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
