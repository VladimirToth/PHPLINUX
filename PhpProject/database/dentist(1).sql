-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Ne 10.Máj 2015, 21:07
-- Verzia serveru: 5.6.21
-- Verzia PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáza: `dentist`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `appointments`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `services`
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
-- Sťahujem dáta pre tabuľku `services`
--

INSERT INTO `services` (`ServiceID`, `ServiceName`, `Description`, `ServicePrice`, `Discount`, `DiscountStartDate`, `DiscountEndDate`, `Image`) VALUES
(1, 'Filling', 'Placing an amalgam filling (mercury, silver and other base metals) is a typical procedure for fixing cavities.', 30, 2, '2015-08-02', '2015-05-31', 'images/services/filling.jpg'),
(2, 'Inlays and onlays', 'Inlays and onlays are restorations used to repair teeth with mild to moderate decay or damage.  ', 100, 10, '2015-08-03', '2015-08-31', 'images/services/inlay_onlay.jpg'),
(3, 'Dental bridge', 'A dental bridge from our clinic may be suitable for you if you''re missing one or more teeth. ', 400, 40, '2015-08-03', '2015-08-31', 'images/services/bridge.jpg'),
(4, 'Dental crown', 'A dental crown (commonly known as a cap) is a dental restoration that replaces the outer surface of your tooth with ceramic material and/or gold. It is commonly used to restore a tooth when it is too damaged to support a filling, inlay or onlay. ', 150, 5, '2015-05-26', '2015-05-31', 'images/services/crown.jpg'),
(5, 'Rooot canal therapy', 'The term ''root canal'' commonly describes the dental treatment of removing a tooth''s pulp, disinfecting the inside of the tooth, and then filling the tooth with restorative material. However, a root canal is actually a chamber inside your tooth where the pulp tissue resides.', 230, 10, '2015-08-04', '2015-08-18', 'images/services/canal.jpg'),
(6, 'Teeth Whitening', ' The Zoom Teeth Whitening System is a safe and effective treatment is applied right in our  clinic that whitens teeth in one appointment.\r\n\r\nThe Zoom Teeth Whitening System is more effective than take-home products, is fast acting, produces noticeable results, and it lasts. While you relax at our clinic, we will whiten your teeth an average of 8 shades brighter. ', 400, 40, '2015-07-14', '2015-08-28', 'images/services/whitening.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `staff`
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
-- Sťahujem dáta pre tabuľku `staff`
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
MODIFY `AppID` int(11) NOT NULL AUTO_INCREMENT;
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
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `appointments`
--
ALTER TABLE `appointments`
ADD CONSTRAINT `doctor_id_fk` FOREIGN KEY (`DoctorID`) REFERENCES `staff` (`ID`),
ADD CONSTRAINT `service_id_fk` FOREIGN KEY (`ServiceID`) REFERENCES `services` (`ServiceID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
