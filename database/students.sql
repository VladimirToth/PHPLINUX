-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2015 at 07:23 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE IF NOT EXISTS `attributes` (
  `id_attribute` int(10) unsigned NOT NULL,
  `id_product` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id_attribute`, `id_product`) VALUES
(0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `attributes_lang`
--

CREATE TABLE IF NOT EXISTS `attributes_lang` (
  `attr_value` text,
  `id_attribute` int(10) unsigned DEFAULT NULL,
  `id_lang` int(10) unsigned DEFAULT NULL,
  `name` varchar(50) DEFAULT 'noname'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attributes_lang`
--

INSERT INTO `attributes_lang` (`attr_value`, `id_attribute`, `id_lang`, `name`) VALUES
('1kg', 0, 1, 'Vaha');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id_category` int(10) unsigned NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `id_parent` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `category_name`, `position`, `id_parent`) VALUES
(1, 'Camera', 2, NULL),
(2, 'Smartphone', 1, NULL),
(3, 'TV', 3, NULL),
(4, 'Hi-Fi', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_products`
--

CREATE TABLE IF NOT EXISTS `category_products` (
  `id_cat` int(10) unsigned DEFAULT NULL,
  `id_prod` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_products`
--

INSERT INTO `category_products` (`id_cat`, `id_prod`) VALUES
(1, 2),
(2, 2),
(4, 1),
(3, 2),
(1, 3),
(1, 4),
(1, 6),
(1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `eshop`
--

CREATE TABLE IF NOT EXISTS `eshop` (
`id_product` int(10) unsigned NOT NULL,
  `price` float DEFAULT NULL,
  `id_man` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eshop`
--

INSERT INTO `eshop` (`id_product`, `price`, `id_man`) VALUES
(1, 30, 1),
(2, 40.5, 2),
(3, 3.43, 2),
(4, 5.6, 2),
(5, 4.23, 2),
(6, 5.5, 1),
(7, 3.6, 1),
(8, 42.5, 1),
(9, 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `eshop_lang`
--

CREATE TABLE IF NOT EXISTS `eshop_lang` (
  `id_product` int(10) unsigned DEFAULT NULL,
  `id_lang` int(10) unsigned DEFAULT NULL,
  `description` text CHARACTER SET latin2 COLLATE latin2_czech_cs,
  `name` varchar(50) CHARACTER SET latin2 COLLATE latin2_czech_cs DEFAULT 'noname'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eshop_lang`
--

INSERT INTO `eshop_lang` (`id_product`, `id_lang`, `description`, `name`) VALUES
(1, 1, 'Fotak 50x50. 4m dlhy', 'Raw'),
(2, 1, 'Fotak 100mm. 5m dlhy', 'Raw2'),
(3, 1, 'Fotak 120mm. 5m dlhy', 'Raw3'),
(4, 1, 'Fotak 140mm. 5m dlhy', 'Raw4'),
(5, 1, 'Fotak 150mm. 5m dlhy', 'Raw5'),
(6, 1, 'Fotak 200mm. 5m dlhy', 'Raw6'),
(7, 1, 'Fotak 300mm. 5m dlhy', 'Raw7'),
(8, 1, 'Fotak 500mm. 5m dlhy', 'Raw8'),
(9, 1, 'Fotak 1000mm. 5m dlhy', 'Raw9');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
`id_lang` int(10) unsigned NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id_lang`, `name`) VALUES
(1, 'Slovak'),
(2, 'English'),
(3, 'German'),
(4, 'Spanish');

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE IF NOT EXISTS `manufacture` (
`id_man` int(10) unsigned NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dateadd` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`id_man`, `name`, `dateadd`) VALUES
(1, 'NIKON', '2015-02-25 19:16:41'),
(2, 'APPLE', '2015-02-25 19:16:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
 ADD PRIMARY KEY (`id_attribute`), ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `attributes_lang`
--
ALTER TABLE `attributes_lang`
 ADD KEY `id_attribute` (`id_attribute`), ADD KEY `id_lang` (`id_lang`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id_category`), ADD UNIQUE KEY `position` (`position`);

--
-- Indexes for table `category_products`
--
ALTER TABLE `category_products`
 ADD KEY `id_cat` (`id_cat`), ADD KEY `id_prod` (`id_prod`);

--
-- Indexes for table `eshop`
--
ALTER TABLE `eshop`
 ADD PRIMARY KEY (`id_product`), ADD KEY `id_man` (`id_man`);

--
-- Indexes for table `eshop_lang`
--
ALTER TABLE `eshop_lang`
 ADD KEY `id_product` (`id_product`), ADD KEY `id_lang` (`id_lang`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
 ADD PRIMARY KEY (`id_lang`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
 ADD PRIMARY KEY (`id_man`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id_category` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `eshop`
--
ALTER TABLE `eshop`
MODIFY `id_product` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
MODIFY `id_lang` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
MODIFY `id_man` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attributes`
--
ALTER TABLE `attributes`
ADD CONSTRAINT `attributes_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `eshop` (`id_product`);

--
-- Constraints for table `attributes_lang`
--
ALTER TABLE `attributes_lang`
ADD CONSTRAINT `attributes_lang_ibfk_1` FOREIGN KEY (`id_attribute`) REFERENCES `attributes` (`id_attribute`),
ADD CONSTRAINT `attributes_lang_ibfk_2` FOREIGN KEY (`id_lang`) REFERENCES `languages` (`id_lang`);

--
-- Constraints for table `category_products`
--
ALTER TABLE `category_products`
ADD CONSTRAINT `category_products_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id_category`),
ADD CONSTRAINT `category_products_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `eshop` (`id_product`);

--
-- Constraints for table `eshop`
--
ALTER TABLE `eshop`
ADD CONSTRAINT `eshop_ibfk_1` FOREIGN KEY (`id_man`) REFERENCES `manufacture` (`id_man`);

--
-- Constraints for table `eshop_lang`
--
ALTER TABLE `eshop_lang`
ADD CONSTRAINT `eshop_lang_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `eshop` (`id_product`),
ADD CONSTRAINT `eshop_lang_ibfk_2` FOREIGN KEY (`id_lang`) REFERENCES `languages` (`id_lang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

