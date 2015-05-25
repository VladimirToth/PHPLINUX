-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2015 at 07:05 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dentist`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
`AppID` int(11) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `ServiceID` int(11) NOT NULL,
  `DoctorID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Price` double NOT NULL,
  `PaymentMethod` varchar(50) NOT NULL,
  `PaymentDate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`AppID`, `UserEmail`, `ServiceID`, `DoctorID`, `Date`, `Time`, `Price`, `PaymentMethod`, `PaymentDate`) VALUES
(3, 'user1atgmail.com', 2, 1, '2015-05-20', '10:30:00', 70, 'credit card', '2015-05-10'),
(4, 'userzweiatgmail.com', 4, 2, '2015-05-25', '11:45:00', 200, 'credit card', '2015-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `ea_appointments`
--

CREATE TABLE IF NOT EXISTS `ea_appointments` (
`id` bigint(20) unsigned NOT NULL,
  `book_datetime` datetime DEFAULT NULL,
  `start_datetime` datetime DEFAULT NULL,
  `end_datetime` datetime DEFAULT NULL,
  `notes` text,
  `hash` text,
  `is_unavailable` tinyint(4) DEFAULT '0',
  `id_users_provider` bigint(20) unsigned DEFAULT NULL,
  `id_users_customer` bigint(20) unsigned DEFAULT NULL,
  `id_services` bigint(20) unsigned DEFAULT NULL,
  `id_google_calendar` text
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_appointments`
--

INSERT INTO `ea_appointments` (`id`, `book_datetime`, `start_datetime`, `end_datetime`, `notes`, `hash`, `is_unavailable`, `id_users_provider`, `id_users_customer`, `id_services`, `id_google_calendar`) VALUES
(63, '2015-05-21 18:55:10', '2015-05-22 15:30:00', '2015-05-22 16:10:00', '', '2cc5ef6a906c924897bb4ce5456cc19a', 0, 85, 86, 13, NULL),
(64, '2015-05-21 20:05:59', '2015-05-22 09:45:00', '2015-05-22 10:25:00', 'hello', '01f18fb583043a2c4a693d2e17360e2e', 0, 85, 87, 13, NULL),
(65, '2015-05-21 20:06:16', '2015-05-22 09:45:00', '2015-05-22 10:25:00', 'hello', '84135369824da9a48d1eb129fc3a02b7', 0, 85, 87, 13, NULL),
(66, '2015-05-21 20:06:41', '2015-05-22 09:45:00', '2015-05-22 10:25:00', 'hello', '16e17db540721f2c84bfb43e59146479', 0, 85, 87, 13, NULL),
(67, '2015-05-21 20:10:05', '2015-05-23 15:30:00', '2015-05-23 16:10:00', '', 'a52b68ddea57ee5ca02488fc9c9c07d2', 0, 85, 88, 13, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ea_roles`
--

CREATE TABLE IF NOT EXISTS `ea_roles` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `slug` varchar(256) DEFAULT NULL,
  `is_admin` tinyint(4) DEFAULT NULL COMMENT '0',
  `appointments` int(4) DEFAULT NULL COMMENT '0',
  `customers` int(4) DEFAULT NULL COMMENT '0',
  `services` int(4) DEFAULT NULL COMMENT '0',
  `users` int(4) DEFAULT NULL COMMENT '0',
  `system_settings` int(4) DEFAULT NULL COMMENT '0',
  `user_settings` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_roles`
--

INSERT INTO `ea_roles` (`id`, `name`, `slug`, `is_admin`, `appointments`, `customers`, `services`, `users`, `system_settings`, `user_settings`) VALUES
(1, 'Administrator', 'admin', 1, 15, 15, 15, 15, 15, 15),
(2, 'Doctor', 'provider', 0, 15, 15, 0, 0, 0, 15),
(3, 'Customer', 'customer', 0, 0, 0, 0, 0, 0, 0),
(4, 'Secretary', 'secretary', 0, 15, 15, 0, 0, 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `ea_secretaries_providers`
--

CREATE TABLE IF NOT EXISTS `ea_secretaries_providers` (
  `id_users_secretary` bigint(20) unsigned NOT NULL,
  `id_users_provider` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ea_services`
--

CREATE TABLE IF NOT EXISTS `ea_services` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `currency` varchar(32) DEFAULT NULL,
  `description` text,
  `id_service_categories` bigint(20) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_services`
--

INSERT INTO `ea_services` (`id`, `name`, `duration`, `price`, `currency`, `description`, `id_service_categories`) VALUES
(13, 'Filling', 40, '30.00', 'â‚¬', 'Placing an amalgam filling (mercury, silver and other base metals) is a typical procedure for fixing cavities.', 24),
(14, 'Inlays and Onlays', 60, '100.00', 'â‚¬', 'Inlays and onlays are restorations used to repair teeth with mild to moderate decay or damage. ', 24),
(15, 'Dental Bridge', 70, '400.00', 'â‚¬', 'A dental bridge from our clinic may be suitable for you if you''re missing one or more teeth.', 24),
(16, 'Dental Crown', 30, '150.00', 'â‚¬', 'A dental crown (commonly known as a cap) is a dental restoration that replaces the outer surface of your tooth with ceramic material and/or gold. It is commonly used to restore a tooth when it is too damaged to support a filling, inlay or onlay.', 24),
(17, 'Root Canal Therapy', 25, '230.00', 'â‚¬', 'The term ''root canal'' commonly describes the dental treatment of removing a tooth''s pulp, disinfecting the inside of the tooth, and then filling the tooth with restorative material. However, a root canal is actually a chamber inside your tooth where the pulp tissue resides.', 24),
(18, 'Teeth Whitening', 30, '400.00', 'â‚¬', 'The Zoom Teeth Whitening System is a safe and effective treatment is applied right in our  clinic that whitens teeth in one appointment.\n\nThe Zoom Teeth Whitening System is more effective than take-home products, is fast acting, produces noticeable results, and it lasts. While you relax at our clinic, we will whiten your teeth an average of 8 shades brighter. ', 25);

-- --------------------------------------------------------

--
-- Table structure for table `ea_services_providers`
--

CREATE TABLE IF NOT EXISTS `ea_services_providers` (
  `id_users` bigint(20) unsigned NOT NULL,
  `id_services` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_services_providers`
--

INSERT INTO `ea_services_providers` (`id_users`, `id_services`) VALUES
(85, 13),
(89, 14),
(85, 15),
(89, 16),
(85, 17),
(89, 17),
(91, 18),
(92, 18);

-- --------------------------------------------------------

--
-- Table structure for table `ea_service_categories`
--

CREATE TABLE IF NOT EXISTS `ea_service_categories` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_service_categories`
--

INSERT INTO `ea_service_categories` (`id`, `name`, `description`) VALUES
(24, 'General Dentistry', ''),
(25, 'Cosmetic Dental Procedures', '');

-- --------------------------------------------------------

--
-- Table structure for table `ea_settings`
--

CREATE TABLE IF NOT EXISTS `ea_settings` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(512) DEFAULT NULL,
  `value` longtext
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_settings`
--

INSERT INTO `ea_settings` (`id`, `name`, `value`) VALUES
(16, 'company_working_plan', '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]}}'),
(17, 'book_advance_timeout', '30'),
(18, 'company_name', 'Dentists from another Universe'),
(19, 'company_email', 'dentist@dentist.sk'),
(20, 'company_link', 'www.dentist.com');

-- --------------------------------------------------------

--
-- Table structure for table `ea_users`
--

CREATE TABLE IF NOT EXISTS `ea_users` (
`id` bigint(20) unsigned NOT NULL,
  `first_name` varchar(256) DEFAULT NULL,
  `last_name` varchar(512) DEFAULT NULL,
  `email` varchar(512) DEFAULT NULL,
  `mobile_number` varchar(128) DEFAULT NULL,
  `phone_number` varchar(128) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `city` varchar(256) DEFAULT NULL,
  `state` varchar(128) DEFAULT NULL,
  `zip_code` varchar(64) DEFAULT NULL,
  `notes` text,
  `id_roles` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_users`
--

INSERT INTO `ea_users` (`id`, `first_name`, `last_name`, `email`, `mobile_number`, `phone_number`, `address`, `city`, `state`, `zip_code`, `notes`, `id_roles`) VALUES
(84, 'Marian', 'Minarciny', 'm.minarciny@gmail.com', '', '+421905555555', '', '', '', '', '', 1),
(85, 'Dr. Andrej', 'Kolesik', 'kolesik@dentist.sk', '', '0902123456', '', '', '', '', 'He completed his undergraduate studies at the University of Bratislava. He then graduated from Bratislava University School of Dental Medicine, before being accepted into the post-graduate training program in General Dentistry at UCLA.', 2),
(86, 'George', 'Gottlieb', 'gottlieb@gmail.com', NULL, '++421905363656', '', '', NULL, '', NULL, 3),
(87, 'zfgsfg', 'sfsfg', 'dfafds@dsfsf.com', NULL, '+421904335665', '', '', NULL, '', NULL, 3),
(88, 'majo', 'majo', 'm.minarciny@gmail.com', NULL, '+421908605998', '', '', NULL, '', NULL, 3),
(89, 'Dr. Jana', 'Tomanova', 'tomanova@dentist.sk', '', '0942157326', '', '', '', '', 'Dr. Tomanova is a general dentist in Bratislava who has been practicing general dentistry and offering cosmetic dental treatment for over 25 years.\n\nShe completed her undergraduate studies at the University of Prague. She then graduated from Bratislava University School of Dental Medicine,', 2),
(90, 'Aneta', 'Jakubcova', 'jakubcova@dentist.sk', '', '0905668997', '', '', '', '', 'Office Coordinator', 2),
(91, 'Monika', 'Benova', 'benova@dentist.sk', '', '0903525363', '', '', '', '', 'Hygienist', 2),
(92, 'Alena', 'Radicova', 'radicova@dentist.sk', '', '0914001002', '', '', '', '', 'Hygienist', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ea_user_settings`
--

CREATE TABLE IF NOT EXISTS `ea_user_settings` (
  `id_users` bigint(20) unsigned NOT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(512) DEFAULT NULL,
  `salt` varchar(512) DEFAULT NULL,
  `working_plan` text,
  `notifications` tinyint(4) DEFAULT '0',
  `google_sync` tinyint(4) DEFAULT '0',
  `google_token` text,
  `google_calendar` varchar(128) DEFAULT NULL,
  `sync_past_days` int(11) DEFAULT '5',
  `sync_future_days` int(11) DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ea_user_settings`
--

INSERT INTO `ea_user_settings` (`id_users`, `username`, `password`, `salt`, `working_plan`, `notifications`, `google_sync`, `google_token`, `google_calendar`, `sync_past_days`, `sync_future_days`) VALUES
(84, 'admin', '814a1ec414edf567e68510d13ff620d33c32afe45f8e88d6863995ce376f8389', '1b41223348309a99237f7ba427e27815385dfb14f53b4f30ddd1b14cc889e1f9', NULL, 0, 0, NULL, NULL, 5, 5),
(85, 'andrej', 'c7fcb5cebb2f60e69dd061d0efdccf7096478b027edcb0c11145191cf994689a', '0212bb5e6d47662d5de2986053b42491df8ba0bff1b75e2828b8f4852569bdbc', '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]}}', 0, 0, NULL, NULL, 5, 5),
(89, 'jana', '73df2c2468ae829e288063d9752f9eba1eab865ee19fc5b7e88195ab2e82d091', '4867fb392482e39f872d3b0f0e055bd7048ef3645a9f021831e1463e456c6950', '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]}}', 0, 0, NULL, NULL, 5, 5),
(90, 'aneta', '7f709c8233c3858147b6445534ee51c840116df459fccb0668c94f6c2ac32e40', '0fe3d83f0f710ebc9e526302fcdd2cc8ce293bd6e77f4886fc87908799a4c48c', '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]}}', 0, 0, NULL, NULL, 5, 5),
(91, 'monika', '5b90386a71d4563e8c2a3a97012772c054cc5b3f9bb5b3b78f7e45aec8ff46eb', 'c59d70781cf76d11f7b06a95309ea69f872edb2b4fb574ff14707cf020d31553', '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]}}', 0, 0, NULL, NULL, 5, 5),
(92, 'alena', '4a2015f49d44379a05edde05b6e9d96b97a71815a13fe8f68f2385d82d6feae1', '63f4b514416e8032dde29bff6aa423915d518ac6b3bb6a5e427239bba272f533', '{"monday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"tuesday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"wednesday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"thursday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"friday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"saturday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]},"sunday":{"start":"09:00","end":"18:00","breaks":[{"start":"11:20","end":"11:30"},{"start":"14:30","end":"15:00"}]}}', 0, 0, NULL, NULL, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`ServiceID` int(11) NOT NULL,
  `ServiceName` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `ServicePrice` double NOT NULL,
  `Discount` float NOT NULL,
  `DiscountStartDate` date NOT NULL,
  `DiscountEndDate` date NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ServiceID`, `ServiceName`, `Description`, `ServicePrice`, `Discount`, `DiscountStartDate`, `DiscountEndDate`, `Image`) VALUES
(1, 'Filling', 'Placing an amalgam filling (mercury, silver and other base metals) is a typical procedure for fixing cavities.', 30, 2, '2015-08-02', '2015-05-31', 'images/services/filling.jpg'),
(2, 'Inlays and onlays', 'Inlays and onlays are restorations used to repair teeth with mild to moderate decay or damage. ', 100, 10, '2015-08-03', '2015-08-31', 'images/services/inlay_onlay.jpg'),
(3, 'Dental bridge', 'A dental bridge from our clinic may be suitable for you if you''re missing one or more teeth. ', 400, 40, '2015-08-03', '2015-08-31', 'images/services/bridge.jpg'),
(4, 'Dental crown', 'A dental crown (commonly known as a cap) is a dental restoration that replaces the outer surface of your tooth with ceramic material and/or gold. It is commonly used to restore a tooth when it is too damaged to support a filling, inlay or onlay. ', 150, 5, '2015-05-26', '2015-05-31', 'images/services/crown.jpg'),
(5, 'Rooot canal therapy', 'The term ''root canal'' commonly describes the dental treatment of removing a tooth''s pulp, disinfecting the inside of the tooth, and then filling the tooth with restorative material. However, a root canal is actually a chamber inside your tooth where the pulp tissue resides.', 230, 10, '2015-08-04', '2015-08-18', 'images/services/canal.jpg'),
(6, 'Teeth Whitening', ' The Zoom Teeth Whitening System is a safe and effective treatment is applied right in our  clinic that whitens teeth in one appointment.\r\n\r\nThe Zoom Teeth Whitening System is more effective than take-home products, is fast acting, produces noticeable results, and it lasts. While you relax at our clinic, we will whiten your teeth an average of 8 shades brighter. ', 400, 40, '2015-07-14', '2015-08-28', 'images/services/whitening.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
`ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Public` varchar(500) NOT NULL,
  `Qualifications` varchar(500) NOT NULL,
  `WorkingDaysandTimes` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`ID`, `Name`, `JobTitle`, `Image`, `Public`, `Qualifications`, `WorkingDaysandTimes`, `Email`) VALUES
(1, 'Dr. Andrej Kolesik', 'Dentist', 'images/staffs/kolesik.jpg', '0902123456', 'He completed his undergraduate studies at the University of Bratislava. He then graduated from Bratislava University School of Dental Medicine, before being accepted into the post-graduate training program in General Dentistry at UCLA.', 'Monday - Friday\r\n08.00 - 12.00', 'kolesik@dentist.sk'),
(2, 'Dr. Jana Tomanova', 'Dentist', 'images/staffs/tomanova.jpg', '0942157326', 'Dr. Tomanova is a general dentist in Bratislava who has been practicing general dentistry and offering cosmetic dental treatment for over 25 years.\r\n\r\nShe completed her undergraduate studies at the University of Prague. She then graduated from Bratislava University School of Dental Medicine,', 'Monday - Friday\r\n13.00 - 18.00', 'tomanova@dentist.sk'),
(3, 'Aneta Jakubcova', 'Office coordinator', 'images/staffs/jakubcova.jpg', '', '', '', 'jakubcova@dentist.sk'),
(4, 'Monika Benova', 'Hygienist', 'images/staffs/benova.jpg', '', '', 'Monday-Friday\r\n08.00 - 12.00', 'benova@dentist.sk'),
(5, 'Alena Radicova', 'Hygienist', 'images/staffs/radicova.jpg', '', '', 'Monday-Friday\r\n13.00 - 18.00', 'radicova@dentist.sk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
 ADD PRIMARY KEY (`AppID`), ADD KEY `doctor_id_fk` (`DoctorID`), ADD KEY `service_id_fk` (`ServiceID`);

--
-- Indexes for table `ea_appointments`
--
ALTER TABLE `ea_appointments`
 ADD PRIMARY KEY (`id`), ADD KEY `id_users_customer` (`id_users_customer`), ADD KEY `id_services` (`id_services`), ADD KEY `id_users_provider` (`id_users_provider`);

--
-- Indexes for table `ea_roles`
--
ALTER TABLE `ea_roles`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ea_secretaries_providers`
--
ALTER TABLE `ea_secretaries_providers`
 ADD PRIMARY KEY (`id_users_secretary`,`id_users_provider`), ADD KEY `fk_ea_secretaries_providers_1` (`id_users_secretary`), ADD KEY `fk_ea_secretaries_providers_2` (`id_users_provider`);

--
-- Indexes for table `ea_services`
--
ALTER TABLE `ea_services`
 ADD PRIMARY KEY (`id`), ADD KEY `id_service_categories` (`id_service_categories`);

--
-- Indexes for table `ea_services_providers`
--
ALTER TABLE `ea_services_providers`
 ADD PRIMARY KEY (`id_users`,`id_services`), ADD KEY `id_services` (`id_services`);

--
-- Indexes for table `ea_service_categories`
--
ALTER TABLE `ea_service_categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ea_settings`
--
ALTER TABLE `ea_settings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ea_users`
--
ALTER TABLE `ea_users`
 ADD PRIMARY KEY (`id`), ADD KEY `id_roles` (`id_roles`);

--
-- Indexes for table `ea_user_settings`
--
ALTER TABLE `ea_user_settings`
 ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`ServiceID`), ADD UNIQUE KEY `Service ID` (`ServiceID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
MODIFY `AppID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ea_appointments`
--
ALTER TABLE `ea_appointments`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `ea_roles`
--
ALTER TABLE `ea_roles`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ea_services`
--
ALTER TABLE `ea_services`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `ea_service_categories`
--
ALTER TABLE `ea_service_categories`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `ea_settings`
--
ALTER TABLE `ea_settings`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `ea_users`
--
ALTER TABLE `ea_users`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
ADD CONSTRAINT `doctor_id_fk` FOREIGN KEY (`DoctorID`) REFERENCES `staff` (`ID`),
ADD CONSTRAINT `service_id_fk` FOREIGN KEY (`ServiceID`) REFERENCES `services` (`ServiceID`);

--
-- Constraints for table `ea_appointments`
--
ALTER TABLE `ea_appointments`
ADD CONSTRAINT `ea_appointments_ibfk_2` FOREIGN KEY (`id_users_customer`) REFERENCES `ea_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ea_appointments_ibfk_3` FOREIGN KEY (`id_services`) REFERENCES `ea_services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ea_appointments_ibfk_4` FOREIGN KEY (`id_users_provider`) REFERENCES `ea_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ea_secretaries_providers`
--
ALTER TABLE `ea_secretaries_providers`
ADD CONSTRAINT `fk_ea_secretaries_providers_1` FOREIGN KEY (`id_users_secretary`) REFERENCES `ea_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fk_ea_secretaries_providers_2` FOREIGN KEY (`id_users_provider`) REFERENCES `ea_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ea_services`
--
ALTER TABLE `ea_services`
ADD CONSTRAINT `ea_services_ibfk_1` FOREIGN KEY (`id_service_categories`) REFERENCES `ea_service_categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `ea_services_providers`
--
ALTER TABLE `ea_services_providers`
ADD CONSTRAINT `ea_services_providers_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `ea_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `ea_services_providers_ibfk_2` FOREIGN KEY (`id_services`) REFERENCES `ea_services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ea_users`
--
ALTER TABLE `ea_users`
ADD CONSTRAINT `ea_users_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `ea_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ea_user_settings`
--
ALTER TABLE `ea_user_settings`
ADD CONSTRAINT `ea_user_settings_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `ea_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
