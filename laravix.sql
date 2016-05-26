-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravix`
--

-- --------------------------------------------------------

--
-- Структура на таблица `lv_pages`
--

CREATE TABLE IF NOT EXISTS `lv_pages` (
`id` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  `alias` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `author` varchar(500) NOT NULL,
  `robots` varchar(500) NOT NULL,
  `tags` varchar(500) NOT NULL,
  `meta_description` varchar(500) NOT NULL,
  `meta_keywords` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `ts_created` int(11) NOT NULL,
  `ts_modified` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `featured` tinyint(4) NOT NULL,
  `published` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `lv_pages`
--

INSERT INTO `lv_pages` (`id`, `parentid`, `alias`, `title`, `author`, `robots`, `tags`, `meta_description`, `meta_keywords`, `content`, `ts_created`, `ts_modified`, `priority`, `featured`, `published`) VALUES
(1, 0, 'about', 'About', 'Laravix', 'index, follow', '', '', '', 'Laravix is simple quick start Laravel 5 skeleton application', 1464257236, 1464257236, 1, 0, 1);

-- --------------------------------------------------------

--
-- Структура на таблица `lv_settings`
--

CREATE TABLE IF NOT EXISTS `lv_settings` (
`id` int(11) NOT NULL,
  `param` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `lv_settings`
--

INSERT INTO `lv_settings` (`id`, `param`, `value`) VALUES
(1, 'sitename', 'Laravix Skeleton'),
(2, 'credits', 'Laravix'),
(3, 'email', 'office@appflow.eu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lv_pages`
--
ALTER TABLE `lv_pages`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `lv_settings`
--
ALTER TABLE `lv_settings`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lv_pages`
--
ALTER TABLE `lv_pages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lv_settings`
--
ALTER TABLE `lv_settings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
