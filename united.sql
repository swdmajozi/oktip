-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 02:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `united`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyers`
--

CREATE TABLE `buyers` (
  `buyer_id` int(11) NOT NULL,
  `receiver` int(11) DEFAULT NULL,
  `senderid` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `period` int(11) DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  `ref` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `amountdue` int(50) DEFAULT NULL,
  `withdrawal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buyers`
--

INSERT INTO `buyers` (`buyer_id`, `receiver`, `senderid`, `amount`, `created_date`, `period`, `due_date`, `ref`, `status`, `amountdue`, `withdrawal`) VALUES
(89, 34, 1, 500, '2021-01-29 14:30:25', 4, NULL, '31174', 'Pending', NULL, NULL),
(90, 34, 34, 1000, '2021-01-29 14:31:42', 4, '2021-02-02 14:34:07', '14093', 'Paid', 2000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

CREATE TABLE `coins` (
  `id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerId` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Bank` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(25) DEFAULT NULL,
  `CreatedBy` int(11) NOT NULL,
  `CreatedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PaymentSatus` varchar(50) NOT NULL,
  `Product` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `code` int(11) DEFAULT NULL,
  `productAmount` double DEFAULT NULL,
  `billing_date` date DEFAULT NULL,
  `subscription_type` int(11) DEFAULT NULL,
  `cycles` int(11) DEFAULT NULL,
  `frequency` int(11) DEFAULT NULL,
  `paymentId` int(11) NOT NULL,
  `signed_by` varchar(50) DEFAULT NULL,
  `IdNumber` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerId`, `FirstName`, `LastName`, `Bank`, `Email`, `Phone`, `CreatedBy`, `CreatedDate`, `PaymentSatus`, `Product`, `address`, `city`, `code`, `productAmount`, `billing_date`, `subscription_type`, `cycles`, `frequency`, `paymentId`, `signed_by`, `IdNumber`) VALUES
(110, 'CHRISTABEL', 'MOJOLA', 'CAPITEC', 's.kamajola@gmail.com', '0762452766', 15, '2020-02-14 07:39:17', 'Pending', ' Credit Repair', 'bbstreet imbali pietermarizburg', NULL, 9013, 250, '2020-03-15', 1, 0, 3, 767534, NULL, NULL),
(111, 'xoli', 'dolwane', 'FNB', '12345', '073 73 14663', 10, '2020-02-14 07:45:34', 'Pending', ' Credit Repair', 'mpopho molife B25', NULL, 5021, 250, '2020-02-25', 1, 0, 3, 229699, NULL, NULL),
(112, 'MINKI', 'MATHE', 'FNB', 'NA', '27780096242', 19, '2020-02-14 09:34:14', 'Pending', 'Credit Report Plan', '4856 UPARK', NULL, 9670, 62.5, '2020-02-28', 1, 0, 3, 884646, NULL, NULL),
(113, 'shaida', 'olifant', 'FNB', 'aliciaolifant33@gmail.com', '27780881230', 20, '2020-02-14 09:36:55', 'Pending', ' Credit Repair', '95 wilhelm street', NULL, 83, 250, '2020-02-28', 1, 0, 3, 730676, NULL, NULL),
(114, 'KLEINBOY', 'MOENG', 'ABSA', '-none@', '27739197709', 20, '2020-02-14 09:57:15', 'Pending', ' Credit Repair', '243 thabatlou ', NULL, 1270, 250, '2020-02-25', 1, 0, 3, 535595, NULL, NULL),
(115, 'SOLOMON', 'NGWENYA', 'ABSA', 'solomon152@gmail.com', '27763171805', 20, '2020-02-14 10:07:50', 'Pending', ' Credit Repair', '2640 ext13 leandra', NULL, 2265, 250, '2020-02-25', 1, 0, 3, 300577, NULL, NULL),
(116, 'SOLOMON', 'NGWENYA', 'ABSA', 'solomon152@gmail.com', '27763171805', 20, '2020-02-14 10:07:53', 'Pending', ' Credit Repair', '2640 ext13 leandra', NULL, 2265, 250, '2020-02-25', 1, 0, 3, 209934, NULL, NULL),
(117, ' SHADRACK MKHACANI', ' HLENGAANI', 'CAPITEC', '19@NONE.COM', '0784485842', 12, '2020-02-14 12:29:13', 'Pending', ' Credit Repair', '9611 DIYANI STREET', NULL, 866, 250, '2020-02-22', 1, 0, 3, 215370, NULL, NULL),
(118, 'PAULOS', 'modise', 'ABSA', 'paulosmodise@gmail.com', '27762381027', 20, '2020-02-15 06:07:50', 'Pending', ' Credit Repair', '2640 ext13 leandra', NULL, 0, 250, '2020-02-25', 1, 0, 3, 665620, NULL, NULL),
(119, 'CLIVE ', 'BALOYI', 'FNB', 'baloyiclive@gmail.com', '0832707672', 12, '2020-02-15 07:08:03', 'Pending', ' Credit Repair', 'po box 561 saunapark', NULL, 787, 250, '2020-02-22', 1, 0, 3, 336181, NULL, NULL),
(120, 'LUYANDA ATTUWELL', 'MVELI', 'CAPITEC', 'luyandamv72@gmail.com', '0732212572', 12, '2020-02-15 08:41:02', 'Pending', ' Credit Clean UP', '3 MLISANE STREET', NULL, 6201, 125, '2020-02-25', 1, 0, 3, 891808, NULL, NULL),
(121, 'JENNA', 'NEL', 'CAPITEC', 'neljenna@gmail.com', '0781899847', 15, '2020-02-15 08:43:47', 'Pending', ' Credit Repair', '15 castleman road', NULL, 7975, 250, '2020-02-25', 1, 0, 3, 820279, NULL, NULL),
(122, 'NANZIWE', 'macebeni', 'STANDARDBA', '8657', '0765921891', 10, '2020-02-15 09:43:54', 'Pending', ' Credit Clean UP', '1149 langa', NULL, 7455, 125, '2020-02-25', 1, 0, 3, 858376, NULL, NULL),
(123, 'BONGANI', 'NTSELE', 'ABSA', 'bonganinstele@gmail.com', '27742039189', 10, '2020-02-17 06:36:34', 'Pending', 'Credit Report Plan', '741 sello str', NULL, 1, 62.5, '2020-02-28', 1, 0, 3, 471164, NULL, NULL),
(124, 'BONGANI', 'NTSELE', 'ABSA', 'bonganinstele@gmail.com', '27742039189', 10, '2020-02-17 06:36:36', 'Pending', 'Credit Report Plan', '741 sello str', NULL, 1, 62.5, '2020-02-28', 1, 0, 3, 123893, NULL, NULL),
(125, 'BONGANI', 'NTSELE', 'ABSA', 'bonganinstele@gmail.com', '27742039189', 10, '2020-02-17 06:36:36', 'Pending', 'Credit Report Plan', '741 sello str', NULL, 1, 62.5, '2020-02-28', 1, 0, 3, 787065, NULL, NULL),
(126, 'SAMUKELO', 'SOKHELA', 'CAPITEC', 'sokhela933@gmail.com', '27731568925', 10, '2020-02-17 07:54:06', 'Pending', ' Credit Clean UP', 'umzimkhulu', NULL, 440, 125, '2020-02-28', 1, 0, 3, 629319, NULL, NULL),
(127, 'SAMUKELO', 'SOKHELA', 'CAPITEC', 'sokhela933@gmail.com', '27731568925', 10, '2020-02-17 07:54:16', 'Pending', ' Credit Clean UP', 'umzimkhulu', NULL, 440, 125, '2020-02-28', 1, 0, 3, 819403, NULL, NULL),
(128, 'SAMUKELO', 'SOKHELA', 'CAPITEC', 'sokhela933@gmail.com', '27731568925', 10, '2020-02-17 07:54:22', 'Pending', ' Credit Clean UP', 'umzimkhulu', NULL, 440, 125, '2020-02-28', 1, 0, 3, 696993, NULL, NULL),
(129, 'SAMUKELO', 'SOKHELA', 'CAPITEC', 'sokhela933@gmail.com', '27731568925', 10, '2020-02-17 07:54:27', 'Pending', ' Credit Clean UP', 'umzimkhulu', NULL, 440, 125, '2020-02-28', 1, 0, 3, 463579, NULL, NULL),
(130, 'SAMUKELO', 'SOKHELA', 'CAPITEC', 'sokhela933@gmail.com', '27731568925', 10, '2020-02-17 07:54:33', 'Pending', ' Credit Clean UP', 'umzimkhulu', NULL, 440, 125, '2020-02-28', 1, 0, 3, 316223, NULL, NULL),
(131, 'SAMUKELO', 'SOKHELA', 'CAPITEC', 'sokhela933@gmail.com', '27731568925', 10, '2020-02-17 07:54:38', 'Pending', ' Credit Clean UP', 'umzimkhulu', NULL, 440, 125, '2020-02-28', 1, 0, 3, 891891, NULL, NULL),
(132, 'SAMUKELO', 'SOKHELA', 'CAPITEC', 'sokhela933@gmail.com', '27731568925', 10, '2020-02-17 07:54:44', 'Pending', ' Credit Clean UP', 'umzimkhulu', NULL, 440, 125, '2020-02-28', 1, 0, 3, 271445, NULL, NULL),
(133, 'SAMUKELO', 'SOKHELA', 'CAPITEC', 'sokhela933@gmail.com', '27731568925', 10, '2020-02-17 07:54:50', 'Pending', ' Credit Clean UP', 'umzimkhulu', NULL, 440, 125, '2020-02-28', 1, 0, 3, 458916, NULL, NULL),
(134, 'SAMUKELO', 'SOKHELA', 'CAPITEC', 'sokhela933@gmail.com', '27731568925', 10, '2020-02-17 07:54:55', 'Pending', ' Credit Clean UP', 'umzimkhulu', NULL, 440, 125, '2020-02-28', 1, 0, 3, 418819, NULL, NULL),
(135, 'SAMUKELO', 'SOKHELA', 'CAPITEC', 'sokhela933@gmail.com', '27731568925', 10, '2020-02-17 07:55:01', 'Pending', ' Credit Clean UP', 'umzimkhulu', NULL, 440, 125, '2020-02-28', 1, 0, 3, 39366, NULL, NULL),
(136, 'MOTEBANG SOLOMON', 'MOKOENA', 'CAPITEC', 'N/A', '0762023203', 12, '2020-02-17 07:57:27', 'Pending', ' Credit Repair', '14 ESTERPARK KEMPTONPARK', NULL, 1652, 250, '2020-02-27', 1, 0, 3, 550835, NULL, NULL),
(137, 'mapaseng', 'motapanyane', 'CAPITEC', 'dimpanepalesa.@gmail.com', '0734142226', 21, '2020-02-17 08:14:11', 'Pending', ' Credit Clean UP', '2147 section e bothapelo', NULL, 9781, 125, '2020-03-01', 1, 0, 3, 590024, NULL, NULL),
(138, 'sipho', 'mnguni', 'ABSA', 'mngunisipho4@gmail.com', '0791375593', 9, '2020-02-17 08:41:52', 'Pending', ' Credit Repair', '15157 embalenhle ext 15', NULL, 2285, 250, '2020-02-29', 1, 0, 3, 110701, NULL, NULL),
(139, 'MPHO', 'MOSIME', 'ABSA', '5894@none.com', '0760692792', 10, '2020-02-17 09:36:44', 'Pending', ' Credit Clean UP', '492 malakeni ', NULL, 815, 125, '2020-02-25', 1, 0, 3, 729245, NULL, NULL),
(140, 'MABONGANDILE ', 'NGQEZA', 'NEDBANK', 'ssilolndoloze247@gmail.com', '0739098028', 12, '2020-02-17 09:52:59', 'Pending', ' Credit Repair', '21 MENGI AVENUE', NULL, 7455, 250, '2020-03-15', 1, 0, 3, 892498, NULL, NULL),
(141, 'SBONGILE P', 'LENGANE', 'NEDBANK', 'lenganesbongile@gmail.com', '27762928982', 19, '2020-02-17 10:10:14', 'Pending', ' Credit Clean UP', '7523 PRATEA LAM EXTENSION 11', NULL, 1819, 125, '2020-03-15', 1, 0, 3, 782318, NULL, NULL),
(142, 'THOMAS ', 'KGANYAGO', 'NEDBANK', '22@none.com', '0766177845', 12, '2020-02-17 10:57:48', 'Pending', ' Credit Clean UP', '2521 LOCK MABUTHANI', NULL, 190, 125, '2020-02-28', 1, 0, 3, 829191, NULL, NULL),
(143, 'MASOKA', 'mncedi', 'ABSA', 'masokamncedi79@gmail,com', '0769750346', 10, '2020-02-17 11:02:04', 'Pending', ' Credit Repair', 'zicobeni,ext 1', NULL, 1024, 250, '2020-02-28', 1, 0, 3, 828942, NULL, NULL),
(144, 'MASOKA', 'mncedi', 'ABSA', 'masokamncedi79@gmail,com', '0769750346', 10, '2020-02-17 11:02:05', 'Pending', ' Credit Repair', 'zicobeni,ext 1', NULL, 1024, 250, '2020-02-28', 1, 0, 3, 572412, NULL, NULL),
(145, 'MASOKA', 'mncedi', 'ABSA', 'masokamncedi79@gmail,com', '0769750346', 10, '2020-02-17 11:02:06', 'Pending', ' Credit Repair', 'zicobeni,ext 1', NULL, 1024, 250, '2020-02-28', 1, 0, 3, 613312, NULL, NULL),
(146, 'MOKHETHI', 'MOKHETHI', 'CAPITEC', 'mokhethi09@gmail.com', '0783373380', 10, '2020-02-17 11:15:58', 'Pending', ' Credit Repair', '10274 ext 1', NULL, 501, 250, '2020-02-28', 1, 0, 3, 191846, NULL, NULL),
(147, 'AYANDI', 'JONJA', '', '12@gmail.com', '0836559743', 1, '2020-02-19 15:19:46', 'Pending', ' Credit Clean UP', '48LOHABESTREET ', NULL, 6201, 125, '2020-02-29', 1, 0, 3, 604763, NULL, NULL),
(148, 'MOKHETHI', 'MOKHETHI', 'CAPITEC', 'mokhethi09@gmail.com', '0783373380', 10, '2020-02-17 11:16:18', 'Pending', ' Credit Repair', '10274 ext 1', NULL, 501, 250, '2020-02-28', 1, 0, 3, 381816, NULL, NULL),
(149, 'MOKHETHI', 'MOKHETHI', 'CAPITEC', 'mokhethi09@gmail.com', '0783373380', 10, '2020-02-17 11:16:33', 'Pending', ' Credit Repair', '10274 ext 1', NULL, 501, 250, '2020-02-28', 1, 0, 3, 363596, NULL, NULL),
(150, 'MOKHETHI', 'MOKHETHI', 'CAPITEC', 'mokhethi09@gmail.com', '0783373380', 10, '2020-02-17 11:16:41', 'Pending', ' Credit Repair', '10274 ext 1', NULL, 501, 250, '2020-02-28', 1, 0, 3, 560301, NULL, NULL),
(151, 'MOKHETHI', 'MOKHETHI', 'CAPITEC', 'mokhethi09@gmail.com', '0783373380', 10, '2020-02-17 11:16:50', 'Pending', ' Credit Repair', '10274 ext 1', NULL, 501, 250, '2020-02-28', 1, 0, 3, 194591, NULL, NULL),
(152, 'MOKHETHI', 'MOKHETHI', 'CAPITEC', 'mokhethi09@gmail.com', '0783373380', 10, '2020-02-17 11:16:57', 'Pending', ' Credit Repair', '10274 ext 1', NULL, 501, 250, '2020-02-28', 1, 0, 3, 489134, NULL, NULL),
(153, 'MOKHETHI', 'MOKHETHI', 'CAPITEC', 'mokhethi09@gmail.com', '0783373380', 10, '2020-02-17 11:17:03', 'Pending', ' Credit Repair', '10274 ext 1', NULL, 501, 250, '2020-02-28', 1, 0, 3, 199948, NULL, NULL),
(154, 'MOKHETHI', 'MOKHETHI', 'CAPITEC', 'mokhethi09@gmail.com', '0783373380', 10, '2020-02-17 11:17:09', 'Pending', ' Credit Repair', '10274 ext 1', NULL, 501, 250, '2020-02-28', 1, 0, 3, 937361, NULL, NULL),
(155, 'WILLIAM MAKGONYA', 'CHAUKE', 'CAPITEC', '@gmail.com', '0727360121', 12, '2020-02-17 11:30:45', 'Pending', 'Credit Report Plan', '1505 ZONE 7 GARANKUWA', NULL, 208, 62.5, '2020-02-28', 1, 0, 3, 840829, NULL, NULL),
(156, 'MKETHO', 'WANDILE', 'CAPITEC', 'mkhethowandile@gmail.com', '0731566359', 10, '2020-02-17 12:15:48', 'Pending', ' Credit Repair', '1872 babhatha str, clovernburg,musin, pe,', NULL, 54001, 250, '2020-02-26', 1, 0, 3, 960931, NULL, NULL),
(157, 'MKETHO', 'WANDILE', 'CAPITEC', 'mkhethowandile@gmail.com', '0731566359', 10, '2020-02-17 12:16:01', 'Pending', ' Credit Repair', '1872 babhatha str, clovernburg,musin, pe,', NULL, 54001, 250, '2020-02-26', 1, 0, 3, 336255, NULL, NULL),
(158, 'MKETHO', 'WANDILE', 'CAPITEC', 'mkhethowandile@gmail.com', '0731566359', 10, '2020-02-17 12:16:09', 'Pending', ' Credit Repair', '1872 babhatha str, clovernburg,musin, pe,', NULL, 54001, 250, '2020-02-26', 1, 0, 3, 69044, NULL, NULL),
(159, 'MKETHO', 'WANDILE', 'CAPITEC', 'mkhethowandile@gmail.com', '0731566359', 10, '2020-02-17 12:16:17', 'Pending', ' Credit Repair', '1872 babhatha str, clovernburg,musin, pe,', NULL, 54001, 250, '2020-02-26', 1, 0, 3, 765983, NULL, NULL),
(160, 'MKETHO', 'WANDILE', 'CAPITEC', 'mkhethowandile@gmail.com', '0731566359', 10, '2020-02-17 12:16:25', 'Pending', ' Credit Repair', '1872 babhatha str, clovernburg,musin, pe,', NULL, 54001, 250, '2020-02-26', 1, 0, 3, 965429, NULL, NULL),
(161, 'MKETHO', 'WANDILE', 'CAPITEC', 'mkhethowandile@gmail.com', '0731566359', 10, '2020-02-17 12:16:33', 'Pending', ' Credit Repair', '1872 babhatha str, clovernburg,musin, pe,', NULL, 54001, 250, '2020-02-26', 1, 0, 3, 305675, NULL, NULL),
(162, 'MKETHO', 'WANDILE', 'CAPITEC', 'mkhethowandile@gmail.com', '0731566359', 10, '2020-02-17 12:16:42', 'Pending', ' Credit Repair', '1872 babhatha str, clovernburg,musin, pe,', NULL, 54001, 250, '2020-02-26', 1, 0, 3, 771916, NULL, NULL),
(163, 'MKETHO', 'WANDILE', 'CAPITEC', 'mkhethowandile@gmail.com', '0731566359', 10, '2020-02-17 12:16:53', 'Pending', ' Credit Repair', '1872 babhatha str, clovernburg,musin, pe,', NULL, 54001, 250, '2020-02-26', 1, 0, 3, 573195, NULL, NULL),
(164, 'MKETHO', 'WANDILE', 'CAPITEC', 'mkhethowandile@gmail.com', '0731566359', 10, '2020-02-17 12:17:04', 'Pending', ' Credit Repair', '1872 babhatha str, clovernburg,musin, pe,', NULL, 54001, 250, '2020-02-26', 1, 0, 3, 645393, NULL, NULL),
(165, 'MKETHO', 'WANDILE', 'CAPITEC', 'mkhethowandile@gmail.com', '0731566359', 10, '2020-02-17 12:17:16', 'Pending', ' Credit Repair', '1872 babhatha str, clovernburg,musin, pe,', NULL, 54001, 250, '2020-02-26', 1, 0, 3, 609792, NULL, NULL),
(166, 'theothillus ', 'hlabede', 'FNB', 'n1@none', '0725334829', 11, '2020-02-17 13:16:06', 'Pending', ' Credit Repair', '23 thabong estate mabato ', NULL, 2745, 250, '2020-02-28', 1, 0, 3, 347080, NULL, NULL),
(167, 'sbusifo samuel', 'khumalo', 'STANDARDBA', 'vandal.sbu@gmail.com', '0769978104', 15, '2020-02-17 14:15:28', 'Pending', 'Credit Report Plan', '3174 ext10 darberton street', NULL, 13, 62.5, '2020-02-25', 1, 0, 3, 310319, NULL, NULL),
(168, 'BEN', 'MOTLANA', 'FNB', 'benmotlana70@gmail.com', '27735027372', 6, '2020-02-18 06:24:55', 'Pending', ' Credit Clean UP', '3273 BLOCK B UMASKRAAL', NULL, 400, 125, '2020-02-28', 1, 0, 3, 903154, NULL, NULL),
(169, 'MAKHABEZANA-PETRUS', 'DLAMINI', 'STANDARDBA', 'makholi834@gmail.com', '27786134392', 20, '2020-02-18 06:34:12', 'Pending', ' Credit Repair', '1061 KGOTSOMG LOCATION', NULL, 9660, 250, '2020-03-04', 1, 0, 3, 644855, NULL, NULL),
(170, 'jusice', 'makgoba', 'FNB', '0@GMAIL.COM', '27763581804', 20, '2020-02-18 06:58:04', 'Pending', ' Credit Clean UP', '252 zani', NULL, 850, 125, '2020-02-29', 1, 0, 3, 310005, NULL, NULL),
(171, 'xolani ', 'dube', 'CAPITEC', 'xolanicdube@gmail,com', '277)442-5236', 21, '2020-02-18 07:28:35', 'Pending', ' Credit Repair', '21 1st avenue,diwali', NULL, 2094, 250, '2020-03-05', 1, 0, 3, 252010, NULL, NULL),
(172, 'xolani ', 'dube', 'CAPITEC', 'xolanicdube@gmail,com', '277)442-5236', 21, '2020-02-18 07:28:44', 'Pending', ' Credit Repair', '21 1st avenue,diwali', NULL, 2094, 250, '2020-03-05', 1, 0, 3, 976870, NULL, NULL),
(173, 'xolani ', 'dube', 'CAPITEC', 'xolanicdube@gmail,com', '277)442-5236', 21, '2020-02-18 07:29:05', 'Pending', ' Credit Repair', '21 1st avenue,diwali', NULL, 2094, 250, '2020-03-05', 1, 0, 3, 853013, NULL, NULL),
(174, 'NEIL ', 'MCDONALD', 'ABSA', 'niel@unigraphicsafrica.co.za', '27798743438', 12, '2020-02-18 07:48:50', 'Pending', ' Credit Repair', '25 sonneblom road', NULL, 7945, 250, '2020-02-25', 1, 0, 3, 258215, NULL, NULL),
(175, 'SEBOLELA', 'KOPPIE', 'ABSA', 'sebo@gmail.com', '27838590680', 20, '2020-02-18 09:58:15', 'Pending', ' Credit Clean UP', '1736 ADSAKA', NULL, 9410, 125, '2020-02-29', 1, 0, 3, 91214, NULL, NULL),
(176, 'SEBOLELA', 'KOPPIE', 'ABSA', 'sebo@gmail.com', '27838590680', 20, '2020-02-18 09:58:18', 'Pending', ' Credit Clean UP', '1736 ADSAKA', NULL, 9410, 125, '2020-02-29', 1, 0, 3, 377366, NULL, NULL),
(177, 'SEBOLELA', 'KOPPIE', 'ABSA', 'sebo@gmail.com', '27838590680', 20, '2020-02-18 09:58:19', 'Pending', ' Credit Clean UP', '1736 ADSAKA', NULL, 9410, 125, '2020-02-29', 1, 0, 3, 305614, NULL, NULL),
(178, 'SEBOLELA', 'KOPPIE', 'ABSA', 'sebo@gmail.com', '27838590680', 20, '2020-02-18 09:58:20', 'Pending', ' Credit Clean UP', '1736 ADSAKA', NULL, 9410, 125, '2020-02-29', 1, 0, 3, 774804, NULL, NULL),
(179, 'SEBOLELA', 'KOPPIE', 'ABSA', 'sebo@gmail.com', '27838590680', 20, '2020-02-18 09:58:22', 'Pending', ' Credit Clean UP', '1736 ADSAKA', NULL, 9410, 125, '2020-02-29', 1, 0, 3, 931213, NULL, NULL),
(180, 'SEBOLELA', 'KOPPIE', 'ABSA', 'sebo@gmail.com', '27838590680', 20, '2020-02-18 09:58:22', 'Pending', ' Credit Clean UP', '1736 ADSAKA', NULL, 9410, 125, '2020-02-29', 1, 0, 3, 673674, NULL, NULL),
(181, 'LEBONENG MOSHE', 'PATJI', 'FNB', 'mosheleboneng@gmail.com', '0603378731/0113542227', 12, '2020-02-18 12:29:14', 'Pending', ' Credit Repair', 'unit 13 village on the ridge brietta', NULL, 2091, 250, '2020-02-28', 1, 0, 3, 762539, NULL, NULL),
(182, 'LEBONENG MOSHE', 'PATJI', 'FNB', 'mosheleboneng@gmail.com', '0603378731/0113542227', 12, '2020-02-18 12:29:15', 'Pending', ' Credit Repair', 'unit 13 village on the ridge brietta', NULL, 2091, 250, '2020-02-28', 1, 0, 3, 156745, NULL, NULL),
(183, 'BONGANI ', 'ZAYI', 'CAPITEC', 'nomsazayi88@gmail.com', '0739340178', 12, '2020-02-18 12:51:00', 'Pending', ' Credit Clean UP', '6071 zwelisha street ', NULL, 1868, 125, '2020-03-15', 1, 0, 3, 985407, NULL, NULL),
(184, 'JOHN FRANK', 'SKHOSANA', 'CAPITEC', 'jacobskhosana@gmail.com', '0766342773', 12, '2020-02-18 12:58:09', 'Pending', ' Credit Repair', '1087 MOLOTSO STREET ', NULL, 1087, 250, '2020-02-28', 1, 0, 3, 117337, NULL, NULL),
(185, 'PHILEKA P ', 'GRAZOZO', 'NEDBANK', 'pilekagrazozo@gmail.com', '27731596615', 20, '2020-02-18 13:09:04', 'Pending', ' Credit Repair', '26 north street matatiele', NULL, 4738, 250, '2020-02-15', 1, 0, 3, 723670, NULL, NULL),
(186, 'CESTA CZ SIBEKO', 'SIBEKO', 'FNB', '44@gmail.com', '27837401244', 20, '2020-02-18 14:26:37', 'Pending', ' Credit Repair', '585 NKOMO RATONDA', NULL, 1441, 250, '2020-02-29', 1, 0, 3, 846849, NULL, NULL),
(187, 'CESTA CZ SIBEKO', 'SIBEKO', 'FNB', '44@gmail.com', '27837401244', 20, '2020-02-18 14:26:39', 'Pending', ' Credit Repair', '585 NKOMO RATONDA', NULL, 1441, 250, '2020-02-29', 1, 0, 3, 669609, NULL, NULL),
(188, 'CESTA CZ SIBEKO', 'SIBEKO', 'FNB', '44@gmail.com', '27837401244', 20, '2020-02-18 14:26:46', 'Pending', ' Credit Repair', '585 NKOMO RATONDA', NULL, 1441, 250, '2020-02-29', 1, 0, 3, 651379, NULL, NULL),
(189, 'PATRICK PG', 'sbiya', 'CAPITEC', 'pratricsbiya2@gmail.com', '0739837258', 10, '2020-02-19 06:44:05', 'Pending', ' Credit Clean UP', '2780 umsterdam', NULL, 1520, 125, '2020-02-28', 1, 0, 3, 368995, NULL, NULL),
(190, 'PATRICK PG', 'sbiya', 'CAPITEC', 'pratricsbiya2@gmail.com', '0739837258', 10, '2020-02-19 06:44:17', 'Pending', ' Credit Clean UP', '2780 umsterdam', NULL, 1520, 125, '2020-02-28', 1, 0, 3, 160524, NULL, NULL),
(191, 'PATRICK PG', 'sbiya', 'CAPITEC', 'pratricsbiya2@gmail.com', '0739837258', 10, '2020-02-19 06:44:24', 'Pending', ' Credit Clean UP', '2780 umsterdam', NULL, 1520, 125, '2020-02-28', 1, 0, 3, 629258, NULL, NULL),
(192, 'PATRICK PG', 'sbiya', 'CAPITEC', 'pratricsbiya2@gmail.com', '0739837258', 10, '2020-02-19 06:44:29', 'Pending', ' Credit Clean UP', '2780 umsterdam', NULL, 1520, 125, '2020-02-28', 1, 0, 3, 576859, NULL, NULL),
(193, 'PATRICK PG', 'sbiya', 'CAPITEC', 'pratricsbiya2@gmail.com', '0739837258', 10, '2020-02-19 06:44:35', 'Pending', ' Credit Clean UP', '2780 umsterdam', NULL, 1520, 125, '2020-02-28', 1, 0, 3, 167534, NULL, NULL),
(194, 'PATRICK PG', 'sbiya', 'CAPITEC', 'pratricsbiya2@gmail.com', '0739837258', 10, '2020-02-19 06:44:41', 'Pending', ' Credit Clean UP', '2780 umsterdam', NULL, 1520, 125, '2020-02-28', 1, 0, 3, 761950, NULL, NULL),
(195, 'PATRICK PG', 'sbiya', 'CAPITEC', 'pratricsbiya2@gmail.com', '0739837258', 10, '2020-02-19 06:44:46', 'Pending', ' Credit Clean UP', '2780 umsterdam', NULL, 1520, 125, '2020-02-28', 1, 0, 3, 678648, NULL, NULL),
(196, 'PATRICK PG', 'sbiya', 'CAPITEC', 'pratricsbiya2@gmail.com', '0739837258', 10, '2020-02-19 06:44:53', 'Pending', ' Credit Clean UP', '2780 umsterdam', NULL, 1520, 125, '2020-02-28', 1, 0, 3, 159202, NULL, NULL),
(197, 'PATRICK PG', 'sbiya', 'CAPITEC', 'pratricsbiya2@gmail.com', '0739837258', 10, '2020-02-19 06:44:59', 'Pending', ' Credit Clean UP', '2780 umsterdam', NULL, 1520, 125, '2020-02-28', 1, 0, 3, 468919, NULL, NULL),
(198, 'PATRICK PG', 'sbiya', 'CAPITEC', 'pratricsbiya2@gmail.com', '0739837258', 10, '2020-02-19 06:45:07', 'Pending', ' Credit Clean UP', '2780 umsterdam', NULL, 1520, 125, '2020-02-28', 1, 0, 3, 255823, NULL, NULL),
(199, 'PATRICK PG', 'sbiya', 'CAPITEC', 'pratricsbiya2@gmail.com', '0739837258', 10, '2020-02-19 06:45:13', 'Pending', ' Credit Clean UP', '2780 umsterdam', NULL, 1520, 125, '2020-02-28', 1, 0, 3, 188468, NULL, NULL),
(200, 'MASENI MOTHIA', 'MODIPHA', 'ABSA', '12none@none.com', '0789793693', 12, '2020-02-20 07:35:31', 'Pending', ' Credit Clean UP', '508 thikiso street', NULL, 9430, 125, '2020-02-25', 1, 0, 3, 2375, NULL, NULL),
(201, 'orapeleng', 'monnapula', 'ABSA', 'omonnapula@nwpg.govz.za', '27731803347', 14, '2020-02-20 08:22:31', 'Pending', ' Credit Repair', 'mosaine view noko street 60036 ', NULL, 6908, 250, '2020-03-15', 1, 0, 3, 733111, NULL, NULL),
(202, 'MATSHIDISO  johanna', 'MOHLAMONYANE', 'FNB', '12@gmail', '27769401851', 8, '2020-02-20 10:41:40', 'Pending', ' Credit Clean UP', '1321 hector road withbank emalahleni', NULL, 1039, 125, '2020-02-29', 1, 0, 3, 772286, NULL, NULL),
(203, 'JAQUIN', 'TRANSMAN', 'FNB', '2@gmail.com', '27638204655', 20, '2020-02-21 06:48:40', 'Pending', ' Credit Clean UP', '34 BENJAMIN STREET', NULL, 7655, 125, '2020-02-25', 1, 0, 3, 603480, NULL, NULL),
(204, 'JAQUIN', 'TRANSMAN', 'FNB', '2@gmail.com', '27638204655', 20, '2020-02-21 06:48:46', 'Pending', ' Credit Clean UP', '34 BENJAMIN STREET', NULL, 7655, 125, '2020-02-25', 1, 0, 3, 146626, NULL, NULL),
(205, 'RAMPOLAI PETRUS', 'NKUKU', 'FNB', '15@gmail.com', '0784375409', 12, '2020-02-21 06:52:13', 'Pending', ' Credit Repair', '2376 MABATPHA STREET', NULL, 1982, 250, '2020-03-25', 1, 0, 3, 586933, NULL, NULL),
(206, 'patrick', 'tshamu', 'ABSA', '12@none.com', '0786018833', 9, '2020-02-21 06:53:26', 'Pending', 'Credit Report Plan', '2661 ext4 qalabosha', NULL, 9840, 62.5, '2020-02-29', 1, 0, 3, 867849, NULL, NULL),
(207, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:16', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 106281, NULL, NULL),
(208, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:17', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 959133, NULL, NULL),
(209, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:18', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 936747, NULL, NULL),
(210, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:18', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 861825, NULL, NULL),
(211, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:19', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 225653, NULL, NULL),
(212, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:21', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 94491, NULL, NULL),
(213, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:22', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 253629, NULL, NULL),
(214, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:23', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 519596, NULL, NULL),
(215, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:24', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 388910, NULL, NULL),
(216, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:24', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 531346, NULL, NULL),
(217, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:25', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 177208, NULL, NULL),
(218, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:26', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 212778, NULL, NULL),
(219, 'michael', 'nkoana', 'FNB', 'echomike2015@gmail.com', '27825864815', 8, '2020-02-21 06:54:26', 'Pending', ' Credit Clean UP', '3350 freedom drive ivory extetion', NULL, 1685, 125, '2020-02-29', 1, 0, 3, 87174, NULL, NULL),
(220, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:26', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 878655, NULL, NULL),
(221, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:27', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 336017, NULL, NULL),
(222, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:28', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 531122, NULL, NULL),
(223, 'mzukuvukile', 'qotshana', 'FNB', '5894@none.com', '0604869104', 10, '2020-02-21 06:54:29', 'Pending', ' Credit Clean UP', 'k299, tasnash,mandela str', NULL, 7625, 125, '2020-02-15', 1, 0, 3, 143537, NULL, NULL),
(224, 'MFUNDO', 'NDONGENI', 'ABSA', '5894@none.com', '0783124640', 10, '2020-02-21 06:58:04', 'Pending', ' Credit Clean UP', '5993 zone 9', NULL, 6580, 125, '2020-02-28', 1, 0, 3, 971198, NULL, NULL),
(225, 'MFUNDO', 'NDONGENI', 'ABSA', '5894@none.com', '0783124640', 10, '2020-02-21 06:58:05', 'Pending', ' Credit Clean UP', '5993 zone 9', NULL, 6580, 125, '2020-02-28', 1, 0, 3, 745668, NULL, NULL),
(226, 'david ', 'sihlame', 'NEDBANK', 'buthane.md@gmail.com', '27613076208', 11, '2020-02-21 07:04:52', 'Pending', ' Credit Clean UP', '2970 hlakwane street phumlong', NULL, 1632, 125, '2020-03-27', 1, 0, 3, 706017, NULL, NULL),
(227, 'NONHLANHLA', 'NKOSI', 'STANDARDBA', 'nonhlanlan915@gmail.com', '0786784950', 21, '2020-02-21 07:06:41', 'Pending', 'Credit Report Plan', '248 sinawani mfolozi st', NULL, 1818, 62.5, '2020-02-29', 1, 0, 3, 177925, NULL, NULL),
(228, 'joseph', 'mofokeng', 'CAPITEC', 'mofokengj57@gmail.com', '27789607576', 20, '2020-02-21 07:08:25', 'Pending', ' Credit Clean UP', '6383 everton', NULL, 1981, 125, '2020-02-29', 1, 0, 3, 260049, NULL, NULL),
(229, 'joseph', 'mofokeng', 'CAPITEC', 'mofokengj57@gmail.com', '27789607576', 20, '2020-02-21 07:08:36', 'Pending', ' Credit Clean UP', '6383 everton', NULL, 1981, 125, '2020-02-29', 1, 0, 3, 779648, NULL, NULL),
(230, 'joseph', 'mofokeng', 'CAPITEC', 'mofokengj57@gmail.com', '27789607576', 20, '2020-02-21 07:08:42', 'Pending', ' Credit Clean UP', '6383 everton', NULL, 1981, 125, '2020-02-29', 1, 0, 3, 68592, NULL, NULL),
(231, 'joseph', 'mofokeng', 'CAPITEC', 'mofokengj57@gmail.com', '27789607576', 20, '2020-02-21 07:08:48', 'Pending', ' Credit Clean UP', '6383 everton', NULL, 1981, 125, '2020-02-29', 1, 0, 3, 560000, NULL, NULL),
(232, 'joseph', 'mofokeng', 'CAPITEC', 'mofokengj57@gmail.com', '27789607576', 20, '2020-02-21 07:08:53', 'Pending', ' Credit Clean UP', '6383 everton', NULL, 1981, 125, '2020-02-29', 1, 0, 3, 803131, NULL, NULL),
(233, 'joseph', 'mofokeng', 'CAPITEC', 'mofokengj57@gmail.com', '27789607576', 20, '2020-02-21 07:08:59', 'Pending', ' Credit Clean UP', '6383 everton', NULL, 1981, 125, '2020-02-29', 1, 0, 3, 205011, NULL, NULL),
(234, 'joseph', 'mofokeng', 'CAPITEC', 'mofokengj57@gmail.com', '27789607576', 20, '2020-02-21 07:09:05', 'Pending', ' Credit Clean UP', '6383 everton', NULL, 1981, 125, '2020-02-29', 1, 0, 3, 166019, NULL, NULL),
(235, 'joseph', 'mofokeng', 'CAPITEC', 'mofokengj57@gmail.com', '27789607576', 20, '2020-02-21 07:09:12', 'Pending', ' Credit Clean UP', '6383 everton', NULL, 1981, 125, '2020-02-29', 1, 0, 3, 131029, NULL, NULL),
(236, 'joseph', 'mofokeng', 'CAPITEC', 'mofokengj57@gmail.com', '27789607576', 20, '2020-02-21 07:09:18', 'Pending', ' Credit Clean UP', '6383 everton', NULL, 1981, 125, '2020-02-29', 1, 0, 3, 757106, NULL, NULL),
(237, 'joseph', 'mofokeng', 'CAPITEC', 'mofokengj57@gmail.com', '27789607576', 20, '2020-02-21 07:09:25', 'Pending', ' Credit Clean UP', '6383 everton', NULL, 1981, 125, '2020-02-29', 1, 0, 3, 966869, NULL, NULL),
(238, 'BRANDON', 'PETERSON', 'STANDARDBA', '14none@gmai.com', '0743719824', 21, '2020-02-21 09:24:43', 'Pending', ' Credit Clean UP', '625VEAPOL STREET', NULL, 1811, 125, '2020-02-28', 1, 0, 3, 697615, NULL, NULL),
(239, 'lethola ', 'masilo', 'ABSA', 'letholajayson0@gmail.com', '27768188166', 11, '2020-02-21 12:38:59', 'Pending', ' Credit Clean UP', '3187 pitsa street duduza', NULL, 1496, 125, '2020-02-28', 1, 0, 3, 664568, NULL, NULL),
(240, 'DANIEL ', 'CHAUKE', 'STANDARDBA', '07@07.com', '27716463858', 6, '2020-02-21 13:03:56', 'Pending', ' Credit Repair', 'P O BOX 675 MOEKWENA', NULL, 560, 250, '2020-02-29', 1, 0, 3, 169965, NULL, NULL),
(241, 'phumulani ', 'madonsela', 'CAPITEC', 'slwane1995@gmail.com', '27711184634', 11, '2020-02-21 13:20:26', 'Pending', 'Credit Report Plan', '474 machadobal ', NULL, 1170, 62.5, '2020-03-05', 1, 0, 3, 282553, NULL, NULL),
(242, 'NOMABHASO', 'LIZO', 'FNB', 'lizoathayanda@gmail.com', '27820483337', 20, '2020-02-21 13:54:20', 'Pending', 'Credit Report Plan', 'eerstiririvier', NULL, 7100, 62.5, '2020-02-29', 1, 0, 3, 556764, NULL, NULL),
(243, 'NOMABHASO', 'LIZO', 'FNB', 'lizoathayanda@gmail.com', '27820483337', 20, '2020-02-21 13:54:20', 'Pending', 'Credit Report Plan', 'eerstiririvier', NULL, 7100, 62.5, '2020-02-29', 1, 0, 3, 710466, NULL, NULL),
(244, 'PRISCILLA', 'VAN WYK', 'ABSA', 'a@gmail.com', '27742766680', 12, '2020-02-24 06:08:18', 'Pending', 'Credit Report Plan', '597 CLARKSON SMARTI TOWN ', NULL, 6302, 62.5, '2020-03-15', 1, 0, 3, 79284, NULL, NULL),
(245, 'RACHEL TASSA DAWN', 'SMITH', 'ABSA', 'tassasmith024@gmail.com', '0710423263', 12, '2020-02-24 06:32:45', 'Pending', 'Credit Report Plan', '41 AKWAMARYN STREET', NULL, 1811, 62.5, '2020-02-26', 1, 0, 3, 910620, NULL, NULL),
(246, 'BAFANA GEELEOOI', 'NDALA', 'CAPITEC', 'bafanageeleooindala@gmail.com', '0733969681', 6, '2020-02-24 07:27:52', 'Pending', ' Credit Clean UP', '18566 kwamhlanga', NULL, 1022, 125, '2020-03-25', 1, 0, 3, 891359, NULL, NULL),
(247, 'sindiwe', 'chiki', 'CAPITEC', 'sindisiwechiki14@gmail.com', '0782302797', 10, '2020-02-24 07:52:19', 'Pending', 'Credit Report Plan', 'p.o box dokodweni', NULL, 4230, 62.5, '2020-02-28', 1, 0, 3, 503888, NULL, NULL),
(248, 'sindiwe', 'chiki', 'CAPITEC', 'sindisiwechiki14@gmail.com', '0782302797', 10, '2020-02-24 07:52:26', 'Pending', 'Credit Report Plan', 'p.o box dokodweni', NULL, 4230, 62.5, '2020-02-28', 1, 0, 3, 186460, NULL, NULL),
(249, 'sindiwe', 'chiki', 'CAPITEC', 'sindisiwechiki14@gmail.com', '0782302797', 10, '2020-02-24 07:52:31', 'Pending', 'Credit Report Plan', 'p.o box dokodweni', NULL, 4230, 62.5, '2020-02-28', 1, 0, 3, 661569, NULL, NULL),
(250, 'sindiwe', 'chiki', 'CAPITEC', 'sindisiwechiki14@gmail.com', '0782302797', 10, '2020-02-24 07:52:35', 'Pending', 'Credit Report Plan', 'p.o box dokodweni', NULL, 4230, 62.5, '2020-02-28', 1, 0, 3, 738946, NULL, NULL),
(251, 'sindiwe', 'chiki', 'CAPITEC', 'sindisiwechiki14@gmail.com', '0782302797', 10, '2020-02-24 07:52:40', 'Pending', 'Credit Report Plan', 'p.o box dokodweni', NULL, 4230, 62.5, '2020-02-28', 1, 0, 3, 954832, NULL, NULL),
(252, 'sindiwe', 'chiki', 'CAPITEC', 'sindisiwechiki14@gmail.com', '0782302797', 10, '2020-02-24 07:52:45', 'Pending', 'Credit Report Plan', 'p.o box dokodweni', NULL, 4230, 62.5, '2020-02-28', 1, 0, 3, 584695, NULL, NULL),
(253, 'sindiwe', 'chiki', 'CAPITEC', 'sindisiwechiki14@gmail.com', '0782302797', 10, '2020-02-24 07:52:49', 'Pending', 'Credit Report Plan', 'p.o box dokodweni', NULL, 4230, 62.5, '2020-02-28', 1, 0, 3, 324166, NULL, NULL),
(254, 'sindiwe', 'chiki', 'CAPITEC', 'sindisiwechiki14@gmail.com', '0782302797', 10, '2020-02-24 07:52:54', 'Pending', 'Credit Report Plan', 'p.o box dokodweni', NULL, 4230, 62.5, '2020-02-28', 1, 0, 3, 854652, NULL, NULL),
(255, 'sindiwe', 'chiki', 'CAPITEC', 'sindisiwechiki14@gmail.com', '0782302797', 10, '2020-02-24 07:53:00', 'Pending', 'Credit Report Plan', 'p.o box dokodweni', NULL, 4230, 62.5, '2020-02-28', 1, 0, 3, 913368, NULL, NULL),
(256, 'sebastian', 'roman', 'CAPITEC', 'sebastian.roman@chep.com', ' (277)648-2287 ', 21, '2020-02-24 08:04:39', 'Pending', ' Credit Repair', '42harper street unit 5', NULL, 6230, 250, '2020-02-28', 1, 0, 3, 988215, NULL, NULL),
(257, 'sebastian', 'roman', 'CAPITEC', 'sebastian.roman@chep.com', ' (277)648-2287 ', 21, '2020-02-24 08:04:46', 'Pending', ' Credit Repair', '42harper street unit 5', NULL, 6230, 250, '2020-02-28', 1, 0, 3, 370187, NULL, NULL),
(258, 'sebastian', 'roman', 'CAPITEC', 'sebastian.roman@chep.com', ' (277)648-2287 ', 21, '2020-02-24 08:04:52', 'Pending', ' Credit Repair', '42harper street unit 5', NULL, 6230, 250, '2020-02-28', 1, 0, 3, 783635, NULL, NULL),
(259, 'sebastian', 'roman', 'CAPITEC', 'sebastian.roman@chep.com', ' (277)648-2287 ', 21, '2020-02-24 08:04:57', 'Pending', ' Credit Repair', '42harper street unit 5', NULL, 6230, 250, '2020-02-28', 1, 0, 3, 497878, NULL, NULL),
(260, 'VICTOR-lebogang', 'DIPHOKO', 'NEDBANK', 'wwvictornxolisi773@gmail.com', '27734649696', 20, '2020-02-24 08:55:21', 'Pending', ' Credit Clean UP', '2017 tokaya street', NULL, 9364, 125, '2020-02-28', 1, 0, 3, 135994, NULL, NULL),
(261, 'BONGIWE', 'NGWENYA', 'NEDBANK', 'bongiwen270@gmail.com', '0763116695', 15, '2020-02-24 10:15:14', 'Pending', ' Credit Repair', 'BONGAWEN AREA', NULL, 3935, 250, '2020-03-15', 1, 0, 3, 569653, NULL, NULL),
(262, 'zechania', 'madonsela', 'CAPITEC', 'kmadonsela@yahoo.com', '0820523855', 16, '2020-02-24 10:55:05', 'Pending', ' Credit Clean UP', '11025 horse tail street', NULL, 1818, 125, '2020-03-25', 1, 0, 3, 831630, NULL, NULL),
(263, 'zechania', 'madonsela', 'CAPITEC', 'kmadonsela@yahoo.com', '0820523855', 16, '2020-02-24 10:55:13', 'Pending', ' Credit Clean UP', '11025 horse tail street', NULL, 1818, 125, '2020-03-25', 1, 0, 3, 58288, NULL, NULL),
(264, 'zechania', 'madonsela', 'CAPITEC', 'kmadonsela@yahoo.com', '0820523855', 16, '2020-02-24 10:55:19', 'Pending', ' Credit Clean UP', '11025 horse tail street', NULL, 1818, 125, '2020-03-25', 1, 0, 3, 482300, NULL, NULL),
(265, 'zechania', 'madonsela', 'CAPITEC', 'kmadonsela@yahoo.com', '0820523855', 16, '2020-02-24 10:55:25', 'Pending', ' Credit Clean UP', '11025 horse tail street', NULL, 1818, 125, '2020-03-25', 1, 0, 3, 872811, NULL, NULL),
(266, 'zechania', 'madonsela', 'CAPITEC', 'kmadonsela@yahoo.com', '0820523855', 16, '2020-02-24 10:55:32', 'PAID', ' Credit Clean UP', '11025 horse tail street', NULL, 1818, 125, '2020-03-25', 1, 0, 3, 707695, NULL, NULL),
(267, 'zechania', 'madonsela', 'CAPITEC', 'kmadonsela@yahoo.com', '0820523855', 16, '2020-02-24 10:55:38', 'Pending', ' Credit Clean UP', '11025 horse tail street', NULL, 1818, 125, '2020-03-25', 1, 0, 3, 2405, NULL, NULL),
(268, 'ntemana', 'leeuw', 'CAPITEC', 'ntemanaleeuw@gmail.com', '0634608777', 15, '2020-02-24 11:12:50', 'Pending', ' Credit Repair', '308 blockd aliwalnort moshoeshoe ', NULL, 9750, 250, '2020-03-15', 1, 0, 3, 457373, NULL, NULL),
(269, 'KGOMOTSO', 'vinte', 'CAPITEC', 'mnotsod@gmail.com', '0739604566', 10, '2020-02-24 11:52:20', 'Pending', ' Credit Clean UP', '845 block f', NULL, 152, 125, '2020-02-28', 1, 0, 3, 724823, NULL, NULL),
(270, 'KGOMOTSO', 'vinte', 'CAPITEC', 'mnotsod@gmail.com', '0739604566', 10, '2020-02-24 11:52:26', 'Pending', ' Credit Clean UP', '845 block f', NULL, 152, 125, '2020-02-28', 1, 0, 3, 513525, NULL, NULL),
(271, 'KGOMOTSO', 'vinte', 'CAPITEC', 'mnotsod@gmail.com', '0739604566', 10, '2020-02-24 11:52:32', 'Pending', ' Credit Clean UP', '845 block f', NULL, 152, 125, '2020-02-28', 1, 0, 3, 224008, NULL, NULL),
(272, 'KGOMOTSO', 'vinte', 'CAPITEC', 'mnotsod@gmail.com', '0739604566', 10, '2020-02-24 11:52:37', 'Pending', ' Credit Clean UP', '845 block f', NULL, 152, 125, '2020-02-28', 1, 0, 3, 800888, NULL, NULL),
(273, 'manganyi', 'basani', 'CAPITEC', 'mulalovusani@gmail.com', '27609583462', 6, '2020-02-24 11:55:44', 'Pending', ' Credit Clean UP', '29 goodman terrace', NULL, 2921, 125, '2020-03-01', 1, 0, 3, 708839, NULL, NULL),
(274, 'SYLVIA ', 'PHILLIPS', 'STANDARDBA', '1@gmail.com', '0761406321', 12, '2020-02-24 13:07:29', 'Pending', ' Credit Repair', '57670 BABY MASORA', NULL, 9923, 250, '2020-03-15', 1, 0, 3, 138464, NULL, NULL),
(275, 'XOLI', 'MATSHEBELA', 'FNB', '02@02.com', '27765406597', 6, '2020-02-24 14:28:59', 'Pending', ' Credit Repair', 'thalaborwa 12', NULL, 1390, 250, '2020-03-25', 1, 0, 3, 390599, NULL, NULL),
(276, 'ANNA', 'mchunu', 'FNB', '123@com', '0736158404', 10, '2020-02-25 06:13:16', 'Pending', 'Credit Report Plan', 'private bag x9333', NULL, 4001, 62.5, '2020-02-28', 1, 0, 3, 124186, NULL, NULL),
(277, 'ANNA', 'mchunu', 'FNB', '123@com', '0736158404', 10, '2020-02-25 06:13:17', 'Pending', 'Credit Report Plan', 'private bag x9333', NULL, 4001, 62.5, '2020-02-28', 1, 0, 3, 856274, NULL, NULL),
(278, 'stephen', 'ramahoshi', 'FNB', 'n@none', '27799363673', 20, '2020-02-25 06:16:44', 'Pending', ' Credit Repair', '1318 medowlanes', NULL, 1852, 250, '2020-02-29', 1, 0, 3, 898762, NULL, NULL),
(279, 'REGINAH', 'REGINAH', 'CAPITEC', '345@none', '0746130375', 10, '2020-02-25 06:23:48', 'Pending', ' Credit Repair', 'ven vial', NULL, 5692, 250, '2020-02-15', 1, 0, 3, 745617, NULL, NULL),
(280, 'REGINAH', 'REGINAH', 'CAPITEC', '345@none', '0746130375', 10, '2020-02-25 06:23:57', 'Pending', ' Credit Repair', 'ven vial', NULL, 5692, 250, '2020-02-15', 1, 0, 3, 546396, NULL, NULL),
(281, 'REGINAH', 'REGINAH', 'CAPITEC', '345@none', '0746130375', 10, '2020-02-25 06:24:03', 'Pending', ' Credit Repair', 'ven vial', NULL, 5692, 250, '2020-02-15', 1, 0, 3, 936994, NULL, NULL),
(282, 'REGINAH', 'REGINAH', 'CAPITEC', '345@none', '0746130375', 10, '2020-02-25 06:24:08', 'Pending', ' Credit Repair', 'ven vial', NULL, 5692, 250, '2020-02-15', 1, 0, 3, 192160, NULL, NULL),
(283, 'REGINAH', 'REGINAH', 'CAPITEC', '345@none', '0746130375', 10, '2020-02-25 06:24:13', 'Pending', ' Credit Repair', 'ven vial', NULL, 5692, 250, '2020-02-15', 1, 0, 3, 838587, NULL, NULL),
(284, 'REGINAH', 'REGINAH', 'CAPITEC', '345@none', '0746130375', 10, '2020-02-25 06:24:18', 'Pending', ' Credit Repair', 'ven vial', NULL, 5692, 250, '2020-02-15', 1, 0, 3, 402522, NULL, NULL),
(285, 'REGINAH', 'REGINAH', 'CAPITEC', '345@none', '0746130375', 10, '2020-02-25 06:24:23', 'Pending', ' Credit Repair', 'ven vial', NULL, 5692, 250, '2020-02-15', 1, 0, 3, 540591, NULL, NULL),
(286, 'REGINAH', 'REGINAH', 'CAPITEC', '345@none', '0746130375', 10, '2020-02-25 06:24:29', 'Pending', ' Credit Repair', 'ven vial', NULL, 5692, 250, '2020-02-15', 1, 0, 3, 235604, NULL, NULL),
(287, 'REGINAH', 'REGINAH', 'CAPITEC', '345@none', '0746130375', 10, '2020-02-25 06:24:35', 'Pending', ' Credit Repair', 'ven vial', NULL, 5692, 250, '2020-02-15', 1, 0, 3, 911590, NULL, NULL),
(288, 'REGINAH', 'REGINAH', 'CAPITEC', '345@none', '0746130375', 10, '2020-02-25 06:24:41', 'Pending', ' Credit Repair', 'ven vial', NULL, 5692, 250, '2020-02-15', 1, 0, 3, 618027, NULL, NULL),
(289, 'REGINAH', 'REGINAH', 'CAPITEC', '345@none', '0746130375', 10, '2020-02-25 06:24:46', 'Pending', ' Credit Repair', 'ven vial', NULL, 5692, 250, '2020-02-15', 1, 0, 3, 622681, NULL, NULL),
(290, 'sobuza ellliot ', 'veli', 'STANDARDBA', 'sobuzaveli.mala@gmail.com', '27787223350', 6, '2020-02-25 06:29:20', 'Pending', ' Credit Repair', '58 shanda street ', NULL, 1475, 250, '2020-02-29', 1, 0, 3, 850761, NULL, NULL),
(291, 'SIMPHIWE', 'NGCOBO', 'FNB', 'www.simphiwesn@gmail.com', '0742146354', 15, '2020-02-25 06:56:34', 'Pending', ' Credit Repair', 'inanda  block 1849', NULL, 4309, 250, '2020-03-25', 1, 0, 3, 154488, NULL, NULL),
(292, 'nokuthula gloria', 'Ndlebe', 'FNB', 'patricia@sbm.gov.za', '077 378-0343', 21, '2020-02-25 07:19:31', 'Pending', ' Credit Repair', '36EKUPHUMULENI STREET', NULL, 7395, 250, '2020-03-25', 1, 0, 3, 80304, NULL, NULL),
(293, 'nokuthula gloria', 'Ndlebe', 'FNB', 'patricia@sbm.gov.za', '077 378-0343', 21, '2020-02-25 07:19:32', 'Pending', ' Credit Repair', '36EKUPHUMULENI STREET', NULL, 7395, 250, '2020-03-25', 1, 0, 3, 47526, NULL, NULL),
(294, 'ZODWA', 'MSIBI', 'CAPITEC', '569@co', '0608386580', 10, '2020-02-25 07:31:38', 'Pending', 'Credit Report Plan', '3705 zone 2', NULL, 1431, 62.5, '2020-02-28', 1, 0, 3, 804199, NULL, NULL),
(295, 'ZODWA', 'MSIBI', 'CAPITEC', '569@co', '0608386580', 10, '2020-02-25 07:31:46', 'Pending', 'Credit Report Plan', '3705 zone 2', NULL, 1431, 62.5, '2020-02-28', 1, 0, 3, 694205, NULL, NULL),
(296, 'ZODWA', 'MSIBI', 'CAPITEC', '569@co', '0608386580', 10, '2020-02-25 07:31:53', 'Pending', 'Credit Report Plan', '3705 zone 2', NULL, 1431, 62.5, '2020-02-28', 1, 0, 3, 927295, NULL, NULL),
(297, 'ZODWA', 'MSIBI', 'CAPITEC', '569@co', '0608386580', 10, '2020-02-25 07:31:59', 'Pending', 'Credit Report Plan', '3705 zone 2', NULL, 1431, 62.5, '2020-02-28', 1, 0, 3, 523198, NULL, NULL),
(298, 'ZODWA', 'MSIBI', 'CAPITEC', '569@co', '0608386580', 10, '2020-02-25 07:32:06', 'Pending', 'Credit Report Plan', '3705 zone 2', NULL, 1431, 62.5, '2020-02-28', 1, 0, 3, 967150, NULL, NULL),
(299, 'ZODWA', 'MSIBI', 'CAPITEC', '569@co', '0608386580', 10, '2020-02-25 07:32:14', 'Pending', 'Credit Report Plan', '3705 zone 2', NULL, 1431, 62.5, '2020-02-28', 1, 0, 3, 355738, NULL, NULL),
(300, 'ZODWA', 'MSIBI', 'CAPITEC', '569@co', '0608386580', 10, '2020-02-25 07:32:22', 'Pending', 'Credit Report Plan', '3705 zone 2', NULL, 1431, 62.5, '2020-02-28', 1, 0, 3, 931723, NULL, NULL),
(301, 'LINDIWE', 'GOQO', 'FNB', '789@com', '0762527813', 10, '2020-02-25 07:48:58', 'Pending', 'Credit Report Plan', '1124 melmont', NULL, 3835, 62.5, '2020-02-28', 1, 0, 3, 788482, NULL, NULL),
(302, 'LINDIWE', 'GOQO', 'FNB', '789@com', '0762527813', 10, '2020-02-25 07:49:00', 'Pending', 'Credit Report Plan', '1124 melmont', NULL, 3835, 62.5, '2020-02-28', 1, 0, 3, 743029, NULL, NULL),
(303, 'LINDIWE', 'GOQO', 'FNB', '789@com', '0762527813', 10, '2020-02-25 07:49:00', 'Pending', 'Credit Report Plan', '1124 melmont', NULL, 3835, 62.5, '2020-02-28', 1, 0, 3, 340145, NULL, NULL),
(304, 'LINDIWE', 'GOQO', 'FNB', '789@com', '0762527813', 10, '2020-02-25 07:49:01', 'Pending', 'Credit Report Plan', '1124 melmont', NULL, 3835, 62.5, '2020-02-28', 1, 0, 3, 540844, NULL, NULL),
(305, 'obakeng shimane', 'moalusi', 'CAPITEC', 'obakengmoalusi764@gmail.com', '0782709405', 9, '2020-02-25 08:06:40', 'Pending', ' Credit Repair', '8 navoonplek park ext 4 rusternburg', NULL, 300, 250, '2020-02-25', 1, 0, 3, 760040, NULL, NULL),
(306, 'obakeng shimane', 'moalusi', 'CAPITEC', 'obakengmoalusi764@gmail.com', '0782709405', 9, '2020-02-25 08:06:48', 'Pending', ' Credit Repair', '8 navoonplek park ext 4 rusternburg', NULL, 300, 250, '2020-02-25', 1, 0, 3, 177151, NULL, NULL),
(307, 'obakeng shimane', 'moalusi', 'CAPITEC', 'obakengmoalusi764@gmail.com', '0782709405', 9, '2020-02-25 08:06:55', 'Pending', ' Credit Repair', '8 navoonplek park ext 4 rusternburg', NULL, 300, 250, '2020-02-25', 1, 0, 3, 514324, NULL, NULL),
(308, 'obakeng shimane', 'moalusi', 'CAPITEC', 'obakengmoalusi764@gmail.com', '0782709405', 9, '2020-02-25 08:07:04', 'Pending', ' Credit Repair', '8 navoonplek park ext 4 rusternburg', NULL, 300, 250, '2020-02-25', 1, 0, 3, 986264, NULL, NULL),
(309, 'TSHOKOLO jermieh', 'MASAPO', 'FNB', 'masapo.inbusiness@yahoo.co.za', '0710066941', 10, '2020-02-25 08:13:32', 'Pending', ' Credit Clean UP', '324 latabane', NULL, 7983, 125, '2020-02-28', 1, 0, 3, 122949, NULL, NULL),
(310, 'SERANE MESHACK', 'TSHUKUDU', 'ABSA', '25@none.com', '0768852053', 12, '2020-02-25 08:13:35', 'Pending', ' Credit Repair', 'P O BOX 921', NULL, 348, 250, '2020-03-15', 1, 0, 3, 622715, NULL, NULL),
(311, 'TSHOKOLO jermieh', 'MASAPO', 'FNB', 'masapo.inbusiness@yahoo.co.za', '0710066941', 10, '2020-02-25 08:13:36', 'Pending', ' Credit Clean UP', '324 latabane', NULL, 7983, 125, '2020-02-28', 1, 0, 3, 220157, NULL, NULL),
(312, 'TSHOKOLO jermieh', 'MASAPO', 'FNB', 'masapo.inbusiness@yahoo.co.za', '0710066941', 10, '2020-02-25 08:13:37', 'Pending', ' Credit Clean UP', '324 latabane', NULL, 7983, 125, '2020-02-28', 1, 0, 3, 97322, NULL, NULL),
(313, 'TSHOKOLO jermieh', 'MASAPO', 'FNB', 'masapo.inbusiness@yahoo.co.za', '0710066941', 10, '2020-02-25 08:13:38', 'Pending', ' Credit Clean UP', '324 latabane', NULL, 7983, 125, '2020-02-28', 1, 0, 3, 560927, NULL, NULL),
(314, 'TSHOKOLO jermieh', 'MASAPO', 'FNB', 'masapo.inbusiness@yahoo.co.za', '0710066941', 10, '2020-02-25 08:13:39', 'Pending', ' Credit Clean UP', '324 latabane', NULL, 7983, 125, '2020-02-28', 1, 0, 3, 207610, NULL, NULL),
(315, 'TSHOKOLO jermieh', 'MASAPO', 'FNB', 'masapo.inbusiness@yahoo.co.za', '0710066941', 10, '2020-02-25 08:13:40', 'Pending', ' Credit Clean UP', '324 latabane', NULL, 7983, 125, '2020-02-28', 1, 0, 3, 229219, NULL, NULL),
(316, 'TSHOKOLO jermieh', 'MASAPO', 'FNB', 'masapo.inbusiness@yahoo.co.za', '0710066941', 10, '2020-02-25 08:13:41', 'Pending', ' Credit Clean UP', '324 latabane', NULL, 7983, 125, '2020-02-28', 1, 0, 3, 37715, NULL, NULL),
(317, 'TSHOKOLO jermieh', 'MASAPO', 'FNB', 'masapo.inbusiness@yahoo.co.za', '0710066941', 10, '2020-02-25 08:13:42', 'Pending', ' Credit Clean UP', '324 latabane', NULL, 7983, 125, '2020-02-28', 1, 0, 3, 540299, NULL, NULL),
(318, 'abraham', 'masimini', 'CAPITEC', 'kmasimini95@gmail.com', '0726386386', 9, '2020-02-25 09:06:07', 'Pending', ' Credit Clean UP', '832 soshanguve ext1 ', NULL, 152, 125, '2020-02-25', 1, 0, 3, 711904, NULL, NULL),
(319, 'abraham', 'masimini', 'CAPITEC', 'kmasimini95@gmail.com', '0726386386', 9, '2020-02-25 09:06:16', 'Pending', ' Credit Clean UP', '832 soshanguve ext1 ', NULL, 152, 125, '2020-02-25', 1, 0, 3, 258574, NULL, NULL),
(320, 'mosotho-victor', 'leseke', 'ABSA', 'victorlesekemosotho@gmail.com', '27769944482', 20, '2020-02-25 10:28:43', 'Pending', ' Credit Repair', '21 diesel road', NULL, 1620, 250, '2020-03-25', 1, 0, 3, 40619, NULL, NULL),
(321, 'NOMPUMELELO', 'MGIJIMA', 'CAPITEC', 'mpumizoo.mm@gmail.com', '0725777633', 15, '2020-02-25 11:23:33', 'Pending', ' Credit Clean UP', 'no10anglire street mngis', NULL, 1441, 125, '2020-03-15', 1, 0, 3, 535037, NULL, NULL),
(322, 'MANELISI', 'sakwe', '', 'sakwemanelisi@gmail.com', '27729642615', 1, '2020-03-02 07:14:38', 'Pending', ' Credit Repair', '19 matobes cresent ncambezane ec', NULL, 5099, 250, '2020-03-31', 1, 0, 3, 137026, NULL, NULL),
(323, 'LUNGELO', 'NTEEHAKALA', 'CAPITEC', 'lungelonteehakala@gmail.com', '27761934949', 6, '2020-02-26 06:25:45', 'Pending', ' Credit Clean UP', 'lolanyane 12524', NULL, 2725, 125, '2020-03-25', 1, 0, 3, 115660, NULL, NULL),
(324, 'MOSES', 'WANDA', 'STANDARDBA', '456@456.com', '27766074976', 6, '2020-02-26 06:36:06', 'Pending', ' Credit Repair', '579 RICHARD S BAY ', NULL, 3900, 250, '2020-03-25', 1, 0, 3, 394172, NULL, NULL),
(325, 'VUSI JEFFREY', 'NKOSI', 'FNB', '13@gmail.com', '27632181065', 12, '2020-02-26 07:10:17', 'Pending', ' Credit Repair', '6768 OLIVER TAMBO DRIVE', NULL, 1441, 250, '2020-02-28', 1, 0, 3, 697015, NULL, NULL),
(326, 'LOYISO ', 'PHEKULA', 'CAPITEC', 'loyisolloyd94@gmail.com', '27605274319', 12, '2020-02-26 07:29:38', 'Pending', ' Credit Clean UP', ' 988 SONNEBLOM STREET', NULL, 8165, 125, '2020-03-25', 1, 0, 3, 384548, NULL, NULL),
(327, 'Joel', 'Gangaram', 'FNB', 'Siphesihle@ics.co.za', '0825249074', 12, '2020-02-26 09:23:10', 'Pending', ' Credit Repair', '6 Lance grove', NULL, 4068, 250, '2020-03-31', 1, 0, 3, 489464, NULL, NULL),
(328, ' TSHEPO ERICK  ', 'LETLOLE', 'STANDARDBA', '182@none', '27839222819', 12, '2020-02-26 11:03:52', 'Pending', ' Credit Clean UP', '4916 MATSADYEL ', NULL, 1804, 125, '2020-03-31', 1, 0, 3, 878807, NULL, NULL),
(329, 'JETAIME J GOLIATH', 'GOLIATH', 'CAPITEC', 'jetainej1217@gmail.com', '27748435115', 20, '2020-02-26 11:29:52', 'Pending', ' Credit Repair', '3328 hannah ', NULL, 2093, 250, '2020-02-25', 1, 0, 3, 712977, NULL, NULL),
(330, 'JETAIME J GOLIATH', 'GOLIATH', 'CAPITEC', 'jetainej1217@gmail.com', '27748435115', 20, '2020-02-26 11:29:59', 'Pending', ' Credit Repair', '3328 hannah ', NULL, 2093, 250, '2020-02-25', 1, 0, 3, 351628, NULL, NULL),
(331, 'JETAIME J GOLIATH', 'GOLIATH', 'CAPITEC', 'jetainej1217@gmail.com', '27748435115', 20, '2020-02-26 11:30:07', 'Pending', ' Credit Repair', '3328 hannah ', NULL, 2093, 250, '2020-02-25', 1, 0, 3, 218396, NULL, NULL),
(332, 'JETAIME J GOLIATH', 'GOLIATH', 'CAPITEC', 'jetainej1217@gmail.com', '27748435115', 20, '2020-02-26 11:30:13', 'Pending', ' Credit Repair', '3328 hannah ', NULL, 2093, 250, '2020-02-25', 1, 0, 3, 834373, NULL, NULL),
(333, 'JETAIME J GOLIATH', 'GOLIATH', 'CAPITEC', 'jetainej1217@gmail.com', '27748435115', 20, '2020-02-26 11:30:19', 'Pending', ' Credit Repair', '3328 hannah ', NULL, 2093, 250, '2020-02-25', 1, 0, 3, 310737, NULL, NULL),
(334, 'JETAIME J GOLIATH', 'GOLIATH', 'CAPITEC', 'jetainej1217@gmail.com', '27748435115', 20, '2020-02-26 11:30:25', 'Pending', ' Credit Repair', '3328 hannah ', NULL, 2093, 250, '2020-02-25', 1, 0, 3, 917235, NULL, NULL),
(335, 'Neroshana', 'Gunpath', 'FNB', '02102', '0746094080', 22, '2020-02-26 11:43:05', 'Pending', ' Credit Repair', '65 Marshal Drive', NULL, 4068, 250, '2020-02-29', 1, 0, 3, 491012, NULL, NULL),
(336, 'Siphesihle', 'Khumalo', 'ABSA', 'Info@icscredit.co.za', '0746094080', 22, '2020-02-26 11:48:11', 'Pending', ' Credit Repair', '65 Marshal Drive', NULL, 4068, 250, '2020-02-29', 1, 0, 3, 849996, NULL, NULL),
(337, 'Joel', 'Gangaram', 'FNB', 'sherwin@icscredit.co.za', '0746094080', 22, '2020-02-26 11:55:01', 'Pending', 'Credit Report Plan', '65 Marshal Drive', NULL, 4068, 62.5, '2020-02-29', 1, 0, 3, 123681, NULL, NULL),
(338, 'Joel', 'Gangaram', 'FNB', 'gangaram@icscredit.co.za', '0746094080', 22, '2020-02-26 12:05:11', 'Pending', ' Credit Repair', '65 Marshal Drive', NULL, 4068, 250, '2020-02-29', 1, 0, 3, 364550, NULL, NULL),
(339, 'VUMILE', 'NCUBE', 'ABSA', 'vumile@icscredit.co.za', '0649336677', 15, '2020-02-26 12:55:30', 'Pending', ' Credit Repair', 'intazamag1045 gontaonsa road ', NULL, 31, 250, '2020-03-25', 1, 0, 3, 204583, NULL, NULL),
(340, 'NORIA', 'ndzende', 'NEDBANK', 'noria@icscredit.co.za', '0737791625', 16, '2020-02-26 13:25:46', 'Pending', 'Credit Report Plan', '6826 ngalaweni street', NULL, 7785, 62.5, '2020-03-15', 1, 0, 3, 982898, NULL, NULL);
INSERT INTO `customers` (`CustomerId`, `FirstName`, `LastName`, `Bank`, `Email`, `Phone`, `CreatedBy`, `CreatedDate`, `PaymentSatus`, `Product`, `address`, `city`, `code`, `productAmount`, `billing_date`, `subscription_type`, `cycles`, `frequency`, `paymentId`, `signed_by`, `IdNumber`) VALUES
(341, 'ANNACLETAR', 'zondi', 'FNB', 'annacletar@icscredit.co.za', '27780319813', 6, '2020-02-26 13:56:20', 'Pending', ' Credit Repair', ' 128 pinestreet ', NULL, 3201, 250, '2020-03-24', 1, 0, 3, 889997, NULL, NULL),
(342, 'CHOUNA', 'IYELA', 'FNB', 'chounaiyela@gmail.com', '27652066821', 6, '2020-02-27 06:30:31', 'Pending', ' Credit Clean UP', '90 boom street ', NULL, 3208, 125, '2020-03-31', 1, 0, 3, 463109, NULL, NULL),
(343, 'desiree', 'adams', 'ABSA', 'bezi1@outlook.com', '27761428020', 20, '2020-02-27 07:45:59', 'Pending', ' Credit Repair', 'po box 216 keimoes', NULL, 8860, 250, '2020-02-25', 1, 0, 3, 486266, NULL, NULL),
(344, 'EMANENG -PETER', 'MGOPE', 'ABSA', 'emangpeter@gmail.com', '27843866133', 20, '2020-02-27 09:07:36', 'Pending', ' Credit Repair', '127 SEORA CENTRAL ', NULL, 183, 250, '2020-02-25', 1, 0, 3, 262930, NULL, NULL),
(345, 'EMANG PETER', 'NGOEPE', 'CAPITEC', 'peter@icscredit.co.za', '0843866133', 20, '2020-02-27 09:20:55', 'Pending', ' Credit Repair', '127 Seora Central', NULL, 183, 250, '2020-03-25', 1, 0, 3, 784343, NULL, NULL),
(346, 'EMANG PETER', 'NGOEPE', 'CAPITEC', 'peter@icscredit.co.za', '0843866133', 20, '2020-02-27 09:21:05', 'Pending', ' Credit Repair', '127 Seora Central', NULL, 183, 250, '2020-03-25', 1, 0, 3, 436597, NULL, NULL),
(347, 'TUTENDO', 'MUTAVHATSINDI', 'CAPITEC', 'tholigirl@yahoo.co.uk', '27739044346', 12, '2020-02-27 09:25:47', 'Pending', ' Credit Repair', '74 KANURI STREET', NULL, 1632, 250, '2020-03-27', 1, 0, 3, 94058, NULL, NULL),
(348, 'Luthando', 'Mabula', 'CAPITEC', 'lebmabula10@gmail.com', '27631139877', 20, '2020-02-27 09:39:36', 'Pending', ' Credit Repair', '124 MATANZIMA ', NULL, 6011, 250, '2020-02-29', 1, 0, 3, 494033, NULL, NULL),
(349, 'Luthando', 'Mabula', 'CAPITEC', 'lebmabula10@gmail.com', '27631139877', 20, '2020-02-27 09:39:43', 'Pending', ' Credit Repair', '124 MATANZIMA ', NULL, 6011, 250, '2020-02-29', 1, 0, 3, 235725, NULL, NULL),
(350, 'Luthando', 'Mabula', 'CAPITEC', 'lebmabula10@gmail.com', '27631139877', 20, '2020-02-27 09:39:49', 'Pending', ' Credit Repair', '124 MATANZIMA ', NULL, 6011, 250, '2020-02-29', 1, 0, 3, 366247, NULL, NULL),
(351, 'Luthando', 'Mabula', 'CAPITEC', 'lebmabula10@gmail.com', '27631139877', 20, '2020-02-27 09:39:54', 'Pending', ' Credit Repair', '124 MATANZIMA ', NULL, 6011, 250, '2020-02-29', 1, 0, 3, 884939, NULL, NULL),
(352, 'Luthando', 'Mabula', 'CAPITEC', 'lebmabula10@gmail.com', '27631139877', 20, '2020-02-27 09:39:59', 'Pending', ' Credit Repair', '124 MATANZIMA ', NULL, 6011, 250, '2020-02-29', 1, 0, 3, 408128, NULL, NULL),
(353, 'Luthando', 'Mabula', 'CAPITEC', 'lebmabula10@gmail.com', '27631139877', 20, '2020-02-27 09:40:08', 'Pending', ' Credit Repair', '124 MATANZIMA ', NULL, 6011, 250, '2020-02-29', 1, 0, 3, 675112, NULL, NULL),
(354, 'Luthando', 'Mabula', 'CAPITEC', 'lebmabula10@gmail.com', '27631139877', 20, '2020-02-27 09:40:14', 'Pending', ' Credit Repair', '124 MATANZIMA ', NULL, 6011, 250, '2020-02-29', 1, 0, 3, 30961, NULL, NULL),
(355, 'AUBREY', 'CROPZ', 'ABSA', 'aubrey.gmailcom', '0617232923', 10, '2020-02-27 10:43:34', 'Pending', ' Credit Repair', '330 babra street', NULL, 7640, 250, '2020-02-28', 1, 0, 3, 261268, NULL, NULL),
(356, 'AUBREY', 'CROPZ', 'ABSA', 'aubrey.gmailcom', '0617232923', 10, '2020-02-27 10:43:36', 'Pending', ' Credit Repair', '330 babra street', NULL, 7640, 250, '2020-02-28', 1, 0, 3, 560729, NULL, NULL),
(357, 'AUBREY', 'CROPZ', 'ABSA', 'aubrey.gmailcom', '0617232923', 10, '2020-02-27 10:43:37', 'Pending', ' Credit Repair', '330 babra street', NULL, 7640, 250, '2020-02-28', 1, 0, 3, 445657, NULL, NULL),
(358, 'AUBREY', 'CROPZ', 'ABSA', 'aubrey.gmailcom', '0617232923', 10, '2020-02-27 10:43:37', 'Pending', ' Credit Repair', '330 babra street', NULL, 7640, 250, '2020-02-28', 1, 0, 3, 272932, NULL, NULL),
(359, 'NOMSA', 'JACK', 'CAPITEC', 'nomsajack22@gmail.com', '27781833853', 6, '2020-02-27 10:57:27', 'Pending', 'Credit Report Plan', '5912 rockland street', NULL, 9300, 62.5, '2020-03-29', 1, 0, 3, 605431, NULL, NULL),
(360, 'melanie', 'pillay', 'CAPITEC', 'pillaymelanie306@gmail.com', '0680557861', 15, '2020-02-27 11:15:41', 'Pending', ' Credit Clean UP', '375 crimbu avenue westcliff', NULL, 4092, 125, '2020-02-28', 1, 0, 3, 341798, NULL, NULL),
(361, 'JOHANNES TEDELE', 'LETSOALO', 'NEDBANK', 'johannes@icscredit.co .za', '27725104447', 12, '2020-02-27 12:33:58', 'Pending', ' Credit Repair', 'P O BOX 236 MADIBA PARK', NULL, 632, 250, '2020-03-15', 1, 0, 3, 978636, NULL, NULL),
(362, 'Jennin', 'Govender', 'CAPITEC', 'Govender@icscredit.co.za', '0746659158', 22, '2020-02-28 14:08:45', 'Pending', ' Credit Repair', '65 Marshal Drive', NULL, 4068, 250, '2020-02-29', 1, 0, 3, 210405, NULL, NULL),
(363, 'Jennin', 'Govender', 'CAPITEC', 'Govender@icscredit.co.za', '0746659158', 22, '2020-02-28 14:08:52', 'Pending', ' Credit Repair', '65 Marshal Drive', NULL, 4068, 250, '2020-02-29', 1, 0, 3, 144256, NULL, NULL),
(364, 'Jennin Test', 'Govender', 'CAPITEC', 'jeningovender1@gmail.com', '0746659158', 1, '2020-03-02 11:14:11', 'Pending', ' Credit Repair', '65 Marshall Drive', NULL, 4302, 250, '2020-03-31', 1, 0, 3, 737087, NULL, NULL),
(365, 'Jennin Test 1', 'Govender', 'NEDBANK', 'jennin12@gmail.com', '0746659158', 1, '2020-03-02 11:17:06', 'Pending', ' Credit Repair', '65 Marshall Drive', NULL, 4302, 250, '2020-03-31', 1, 0, 3, 531834, NULL, NULL),
(366, 'Jennin', 'Govender', 'NEDBANK', 'Jennin12345@gmail.com', '0746659158', 22, '2020-03-02 11:20:49', 'Pending', ' Credit Repair', '65 Marshal Drive', NULL, 4068, 250, '2020-03-31', 1, 0, 3, 584410, NULL, NULL),
(367, 'Test', 'User', 'ABSA', 'data@icscredit.co.za', '0844750643', 1, '2020-03-03 07:49:18', 'Pending', 'CreditRepair', '121 Redfern Crescent', NULL, 4068, 250, '2020-03-31', 1, 0, 3, 931877, NULL, NULL),
(368, 'Siyanda', 'Majozi', 'ABSA', 'grootmensclub@gmail.com', '0780704148', 1, '2020-03-03 13:43:08', 'Pending', 'Credit Report Plan', '5 Woodburn Road , Howick', NULL, 0, 62.5, '2020-03-11', 1, 0, 3, 660919, NULL, NULL),
(369, 'Siyanda', 'Majozi', 'ABSA', 'support@greatinvestments.co.za', '0780704148', 1, '2020-03-04 03:56:19', 'Pending', 'Credit Report Plan', '5 Woodburn Road , Howick', NULL, 0, 62.5, '2020-03-28', 1, 0, 3, 630512, NULL, NULL),
(370, 'Test', 'User', 'ABSA', 'zeynsheikgalaxys6@gmail.com', '0844750643', 1, '2020-03-04 06:15:51', 'Pending', 'CreditRepair', '121 Redfern Crescent', NULL, 4068, 250, '2020-03-31', 1, 0, 3, 91212, NULL, NULL),
(371, 'Customer', 'Client', 'ABSA', 'zeynsheikgalaxys6@gmail.com', '0844750643', 23, '2020-03-04 07:00:37', 'Pending', ' Credit Clean UP', '121 Redfern Crescent', NULL, 4068, 125, '2020-03-31', 1, 0, 3, 687846, 'affiliates', NULL),
(372, 'Siyanda', 'Majozi', 'STANDARDBA', 'info@fffa.co.za', '0780704148', 1, '2020-03-04 07:22:16', 'Pending', ' Credit Clean UP', '5 Woodburn Road , Howick', NULL, 0, 125, '2020-03-16', 1, 0, 3, 734538, 'affiliates', NULL),
(373, 'Money', 'Wisherz', 'ABSA', 'info@dollardivers.co.za', '0780704148', 1, '2020-03-04 07:23:02', 'Pending', ' Credit Repair', '56, FOURTH STREET', NULL, 0, 250, '2020-03-18', 1, 0, 3, 132460, 'affiliates', NULL),
(374, 'Client', 'Customer', 'ABSA', 'zeyn@icscredit.co.za', '0844750643', 2, '2020-03-04 07:23:46', 'Pending', ' Credit Repair', '12 sesethu road', NULL, 2010, 250, '2020-03-31', 1, 0, 3, 121596, NULL, NULL),
(375, 'Siyanda', 'Majozi', 'ABSA', 'swdmajozi@gmail.com', '0780704148', 1, '2020-03-04 07:26:10', 'Pending', ' Credit Repair', '24 Waterfront Drive', NULL, 0, 250, '2020-03-24', 1, 0, 3, 866930, 'affiliates', '34245344'),
(376, 'Development', 'Testing', 'ABSA', 'zeyn@icscredit.co.za', '0615374151', 2, '2020-03-04 07:35:18', 'Pending', 'Credit Report Plan', '121 Redfern Crescent', NULL, 4068, 62.5, '2020-03-31', 1, 0, 3, 158094, NULL, '9304025113082'),
(377, 'melvin', 'Kistna', 'ABSA', 'zeynsheik@hotmail.com', '0615374151', 1, '2020-03-04 13:17:23', 'Pending', ' Credit Repair', '121 Redfern Crescent', NULL, 12, 250, '2020-03-31', 1, 0, 3, 96402, 'affiliates', '9304025796302'),
(378, 'Siyanda', 'Majozi', 'STANDARDBA', 'grootmensclub@gmail.com', '0780704148', 1, '2020-03-06 09:07:37', 'Pending', ' Credit Clean UP', '5 Woodburn Road , Howick', NULL, 0, 125, '2020-03-17', 1, 0, 3, 31933, 'affiliates', '34245344'),
(379, 'Money', 'Wisherz', 'ABSA', 'support@greatinvestments.co.za', '0780704148', 1, '2020-03-06 09:09:09', 'Pending', ' Credit Clean UP', '56, FOURTH STREET', NULL, 3333, 125, '2020-03-25', 1, 0, 3, 543556, 'affiliates', '34245344'),
(380, 'Siyanda', 'Majozi', 'CAPITEC', 'grootmensclub@gmail.com', '0780704148', 1, '2020-03-06 09:11:51', 'Pending', 'Credit Report Plan', '5 Woodburn Road , Howick', NULL, 0, 62.5, '2020-03-25', 1, 0, 3, 63235, 'affiliates', '34245344'),
(381, 'Siyanda', 'Majozi', 'ABSA', 'grootmensclub@gmail.com', '0780704148', 1, '2020-03-06 09:17:59', 'Pending', 'Credit Report Plan', '5 Woodburn Road , Howick', NULL, 0, 62.5, '2020-03-25', 1, 0, 3, 183433, 'affiliates', '34245344'),
(382, 'Siyanda', 'Majozi', 'ABSA', 'grootmensclub@gmail.com', '0780704148', 1, '2020-03-06 10:03:47', 'Pending', 'Credit Report Plan', '5 Woodburn Road , Howick', NULL, 0, 62.5, '2020-03-23', 1, 0, 3, 311399, 'affiliates', '34245344'),
(383, 'Siyanda', 'Majozi', 'STANDARDBA', 'grootmensclub@gmail.com', '0780704148', 1, '2020-03-06 10:07:01', 'Pending', ' Credit Clean UP', '5 Woodburn Road , Howick', NULL, 0, 125, '2020-03-24', 1, 0, 3, 472981, 'affiliates', '34245344'),
(384, 'Siyanda', 'Majozi', 'ABSA', 'swdmajozi@gmail.com', '0780704148', 1, '2020-03-06 10:12:34', 'Pending', ' Credit Repair', '24 Waterfront Drive', NULL, 0, 250, '2020-03-31', 1, 0, 3, 704874, 'affiliates', '2147483647'),
(385, 'Test', 'User', 'FNB', 'zeyn@icscredit.co.za', '0615374151', 1, '2020-03-06 11:02:52', 'Pending', ' Credit Repair', '121 Redfern Crescent', NULL, 4068, 250, '2020-03-31', 1, 0, 3, 702282, 'affiliates', '9304025113022'),
(386, 'Zeyn', 'Sheik', 'CAPITEC', 'zeynsheikgalaxys6@gmail.com', '0615374151', 2, '2020-03-09 07:20:03', 'Pending', ' Credit Repair', 'Marshall Drive', NULL, 4302, 250, '2020-03-31', 1, 0, 3, 60984, 'affiliates', '9302510824121'),
(387, 'Jennin', 'Govender', 'CAPITEC', 'jennin@icscredit.co.za', '0746669158', 2, '2020-03-09 07:29:12', 'Pending', ' Credit Repair', 'Marshall Drive', NULL, 4302, 250, '2020-03-31', 1, 0, 3, 468479, 'affiliates', '94041212011299'),
(388, 'Sphamdandla', 'Hussain', 'ABSA', 'zeyn@icscredit.co.za', '0615374151', 1, '2020-03-10 06:18:18', 'Pending', ' Credit Repair', '65 Marshall Drive', NULL, 4302, 250, '2020-03-31', 1, 0, 3, 701545, 'affiliates', '9301230824568'),
(389, 'Siyanda', 'Majozi', 'ABSA', 'grootmensclub@gmail.com', '0780704148', 0, '2020-04-01 08:06:55', 'Pending', ' Credit Clean UP', '5 Woodburn Road , Howick', NULL, 3333, 125, '2020-04-14', 1, 0, 3, 802894, 'ivr', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `customer_links`
--

CREATE TABLE `customer_links` (
  `id` int(11) NOT NULL,
  `url` varchar(250) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_links`
--

INSERT INTO `customer_links` (`id`, `url`, `userid`) VALUES
(1, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/369', 369),
(2, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/371', 371),
(3, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/372', 372),
(4, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/373', 373),
(5, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/374', 374),
(6, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/375', 375),
(7, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/376', 376),
(8, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/377', 377),
(9, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/378', 378),
(10, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/379', 379),
(11, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/380', 380),
(12, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/381', 381),
(13, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/382', 382),
(14, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/383', 383),
(15, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/384', 384),
(16, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/385', 385),
(17, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/386', 386),
(18, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/387', 387),
(19, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/388', 388),
(20, 'http://dev.icswebserver.co.za/accounts/icssubscriptioncheckout/cusid/389', 389);

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `user_to` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `user_from` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `from_name` varchar(50) DEFAULT NULL,
  `from_address` varchar(50) DEFAULT NULL,
  `from_phone` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `amount_donated` int(11) DEFAULT NULL,
  `userfromid` int(11) DEFAULT NULL,
  `ref_no` varchar(20) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `scheduled_paymentdate` datetime DEFAULT NULL,
  `remaining` datetime DEFAULT NULL,
  `period` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`user_to`, `id`, `user_from`, `user_name`, `from_name`, `from_address`, `from_phone`, `date`, `amount_donated`, `userfromid`, `ref_no`, `status`, `scheduled_paymentdate`, `remaining`, `period`) VALUES
(0, 58, 'Nothando', 'Nothando14', 'Shabangu', 'nothandos406@gmail.com', '0635262854', '2020-01-31 14:48:14', 500, 571, '15173', 'Reserved', NULL, '2020-02-01 14:48:14', 5);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'Agent'),
(3, 'Customers', 'All  my  cutomers'),
(4, 'Brokers', 'Jsut  brokers'),
(5, 'affiliates', ''),
(6, 'superadmin', 'This  is  for  system  owner  ');

-- --------------------------------------------------------

--
-- Table structure for table `help_table`
--

CREATE TABLE `help_table` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount_needed` varchar(50) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `amount_recieved` int(11) DEFAULT NULL,
  `amount_outstanding` int(50) DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `date_assigned` datetime DEFAULT NULL,
  `user_donated` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '127.0.0.1', 'admins', 1626437966);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(30) NOT NULL,
  `date` datetime(6) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `user` int(20) DEFAULT NULL,
  `time` int(20) DEFAULT NULL,
  `anything` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='table for  latest  updates  ';

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments_payfast`
--

CREATE TABLE `payments_payfast` (
  `paymentId` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `item_description` varchar(50) DEFAULT NULL,
  `subscription_type` varchar(50) DEFAULT NULL,
  `billing_date` datetime DEFAULT NULL,
  `recurring_amount` int(11) DEFAULT NULL,
  `frequency` int(11) DEFAULT NULL,
  `customerId` int(11) DEFAULT NULL,
  `paymentStatus` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recommit`
--

CREATE TABLE `recommit` (
  `reid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `amount` int(50) NOT NULL,
  `ref_no` varchar(250) NOT NULL,
  `restatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referers`
--

CREATE TABLE `referers` (
  `id` int(12) NOT NULL,
  `email` int(50) NOT NULL,
  `bonuses` int(250) NOT NULL,
  `userfrom` int(50) NOT NULL,
  `ref` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `seller_id` int(11) NOT NULL,
  `receiver` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `ref` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `dueamount` int(11) DEFAULT NULL,
  `duedate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`seller_id`, `receiver`, `amount`, `ref`, `status`, `dueamount`, `duedate`) VALUES
(69, 34, 1000, 95194, 'Pending', -500, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `idnumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `first_name`, `last_name`, `phone`, `email`, `idnumber`) VALUES
(16, 'Christopher', 'Thompson', '919-902-9049', '', '0'),
(17, 'Lynn', 'Madrid', '989-685-6300', '', '0'),
(18, 'Donald', 'Wheeler', '252-315-7813', '', '0'),
(19, 'Margaret', 'Washington', '936-854-0533', '', '0'),
(20, 'William', 'Olivarez', '856-855-0612', '', '0'),
(21, 'Larry', 'Henson', '515-314-7896', '', '0'),
(22, 'Ladonna', 'Hughes', '601-637-7771', '', '0'),
(23, 'Joshua', 'Tinker', '757-413-7159', '', '0'),
(24, 'Damian', 'Salley', '330-302-5687', '', '0'),
(25, 'Joyce', 'Hollins', '412-374-0949', '', '0'),
(26, 'Jan', 'Schuman', '775-243-7818', '', '0'),
(27, 'Millie', 'Richards', '802-694-4273', '', '0'),
(28, 'Mary', 'Navarrete', '601-986-1079', '', '0'),
(29, 'Maggie', 'Noble', '432-332-0287', '', '0'),
(30, 'Doris', 'Evans', '803-744-0440', '', '0'),
(31, 'Christopher', 'Thompson', '919-902-9049', '', ''),
(32, 'Lynn', 'Madrid', '989-685-6300', '', ''),
(33, 'Donald', 'Wheeler', '252-315-7813', '', ''),
(34, 'Margaret', 'Washington', '936-854-0533', '', ''),
(35, 'William', 'Olivarez', '856-855-0612', '', ''),
(36, 'Larry', 'Henson', '515-314-7896', '', ''),
(37, 'Ladonna', 'Hughes', '601-637-7771', '', ''),
(38, 'Joshua', 'Tinker', '757-413-7159', '', ''),
(39, 'Damian', 'Salley', '330-302-5687', '', ''),
(40, 'Joyce', 'Hollins', '412-374-0949', '', ''),
(41, 'Jan', 'Schuman', '775-243-7818', '', ''),
(42, 'Millie', 'Richards', '802-694-4273', '', ''),
(43, 'Mary', 'Navarrete', '601-986-1079', '', ''),
(44, 'Maggie', 'Noble', '432-332-0287', '', ''),
(45, 'Doris', 'Evans', '803-744-0440', '', ''),
(46, 'Christopher', 'Thompson', '919-902-9049', '', ''),
(47, 'Lynn', 'Madrid', '989-685-6300', '', ''),
(48, 'Donald', 'Wheeler', '252-315-7813', '', ''),
(49, 'Margaret', 'Washington', '936-854-0533', '', ''),
(50, 'William', 'Olivarez', '856-855-0612', '', ''),
(51, 'Larry', 'Henson', '515-314-7896', '', ''),
(52, 'Ladonna', 'Hughes', '601-637-7771', '', ''),
(53, 'Joshua', 'Tinker', '757-413-7159', '', ''),
(54, 'Damian', 'Salley', '330-302-5687', '', ''),
(55, 'Joyce', 'Hollins', '412-374-0949', '', ''),
(56, 'Jan', 'Schuman', '775-243-7818', '', ''),
(57, 'Millie', 'Richards', '802-694-4273', '', ''),
(58, 'Mary', 'Navarrete', '601-986-1079', '', ''),
(59, 'Maggie', 'Noble', '432-332-0287', '', ''),
(60, 'Doris', 'Evans', '803-744-0440', '', ''),
(61, 'Christopher', 'Thompson', '919-902-9049', '', ''),
(62, 'Lynn', 'Madrid', '989-685-6300', '', ''),
(63, 'Donald', 'Wheeler', '252-315-7813', '', ''),
(64, 'Margaret', 'Washington', '936-854-0533', '', ''),
(65, 'William', 'Olivarez', '856-855-0612', '', ''),
(66, 'Larry', 'Henson', '515-314-7896', '', ''),
(67, 'Ladonna', 'Hughes', '601-637-7771', '', ''),
(68, 'Joshua', 'Tinker', '757-413-7159', '', ''),
(69, 'Damian', 'Salley', '330-302-5687', '', ''),
(70, 'Joyce', 'Hollins', '412-374-0949', '', ''),
(71, 'Jan', 'Schuman', '775-243-7818', '', ''),
(72, 'Millie', 'Richards', '802-694-4273', '', ''),
(73, 'Mary', 'Navarrete', '601-986-1079', '', ''),
(74, 'Maggie', 'Noble', '432-332-0287', '', ''),
(75, 'Doris', 'Evans', '803-744-0440', '', ''),
(76, 'Christopher', 'Thompson', '919-902-9049', '', ''),
(77, 'Lynn', 'Madrid', '989-685-6300', '', ''),
(78, 'Donald', 'Wheeler', '252-315-7813', '', ''),
(79, 'Margaret', 'Washington', '936-854-0533', '', ''),
(80, 'William', 'Olivarez', '856-855-0612', '', ''),
(81, 'Larry', 'Henson', '515-314-7896', '', ''),
(82, 'Ladonna', 'Hughes', '601-637-7771', '', ''),
(83, 'Joshua', 'Tinker', '757-413-7159', '', ''),
(84, 'Damian', 'Salley', '330-302-5687', '', ''),
(85, 'Joyce', 'Hollins', '412-374-0949', '', ''),
(86, 'Jan', 'Schuman', '775-243-7818', '', ''),
(87, 'Millie', 'Richards', '802-694-4273', '', ''),
(88, 'Mary', 'Navarrete', '601-986-1079', '', ''),
(89, 'Maggie', 'Noble', '432-332-0287', '', ''),
(90, 'Doris', 'Evans', '803-744-0440', '', ''),
(91, 'Christopher', 'Thompson', '919-902-9049', '', ''),
(92, 'Lynn', 'Madrid', '989-685-6300', '', ''),
(93, 'Donald', 'Wheeler', '252-315-7813', '', ''),
(94, 'Margaret', 'Washington', '936-854-0533', '', ''),
(95, 'William', 'Olivarez', '856-855-0612', '', ''),
(96, 'Larry', 'Henson', '515-314-7896', '', ''),
(97, 'Ladonna', 'Hughes', '601-637-7771', '', ''),
(98, 'Joshua', 'Tinker', '757-413-7159', '', ''),
(99, 'Damian', 'Salley', '330-302-5687', '', ''),
(100, 'Joyce', 'Hollins', '412-374-0949', '', ''),
(101, 'Jan', 'Schuman', '775-243-7818', '', ''),
(102, 'Millie', 'Richards', '802-694-4273', '', ''),
(103, 'Mary', 'Navarrete', '601-986-1079', '', ''),
(104, 'Maggie', 'Noble', '432-332-0287', '', ''),
(105, 'Doris', 'Evans', '803-744-0440', '', ''),
(106, 'Christopher', 'Thompson', '919-902-9049', '', ''),
(107, 'Lynn', 'Madrid', '989-685-6300', '', ''),
(108, 'Donald', 'Wheeler', '252-315-7813', '', ''),
(109, 'Margaret', 'Washington', '936-854-0533', '', ''),
(110, 'William', 'Olivarez', '856-855-0612', '', ''),
(111, 'Larry', 'Henson', '515-314-7896', '', ''),
(112, 'Ladonna', 'Hughes', '601-637-7771', '', ''),
(113, 'Joshua', 'Tinker', '757-413-7159', '', ''),
(114, 'Damian', 'Salley', '330-302-5687', '', ''),
(115, 'Joyce', 'Hollins', '412-374-0949', '', ''),
(116, 'Jan', 'Schuman', '775-243-7818', '', ''),
(117, 'Millie', 'Richards', '802-694-4273', '', ''),
(118, 'Mary', 'Navarrete', '601-986-1079', '', ''),
(119, 'Maggie', 'Noble', '432-332-0287', '', ''),
(120, 'Doris', 'Evans', '803-744-0440', '', ''),
(121, 'Christopher', 'Thompson', '919-902-9049', 'christoperthompson@gmail.com', '919919000000'),
(122, 'Lynn', 'Madrid', '989-685-6300', 'lymmmadrid@gmail.com', '919919000000'),
(123, 'Donald', 'Wheeler', '252-315-7813', 'donaldwheeler@gmail.com', '22222'),
(124, 'Margaret', 'Washington', '936-854-0533', 'margaretwashington@gmail.com', '22222'),
(125, 'William', 'Olivarez', '856-855-0612', 'williamolivaraz@gmail.com', '11133'),
(126, 'Larry', 'Henson', '515-314-7896', 'larryhenson@gmail.com', '24423'),
(127, 'Ladonna', 'Hughes', '601-637-7771', 'ladonnahugjes@gmail.com', '2424'),
(128, 'Joshua', 'Tinker', '757-413-7159', 'joshuatinker@gmail.com', '35343466'),
(129, 'Damian', 'Salley', '330-302-5687', 'damiansalley@gmail.com', '324'),
(130, 'Joyce', 'Hollins', '412-374-0949', 'joycehollins@gmail.com', '3236888'),
(131, 'Jan', 'Schuman', '775-243-7818', 'janschuman@gmail.com', '6467438843'),
(132, 'Millie', 'Richards', '802-694-4273', 'millierichards@gmail.com', '55577'),
(133, 'Mary', 'Navarrete', '601-986-1079', 'marynavarrete@gmail.com', '8888'),
(134, 'Maggie', 'Noble', '432-332-0287', 'maggienoble@gmail.com', '777774'),
(135, 'Doris', 'Evans', '803-744-0440', 'dorisevans@gmail.com', '330909884'),
(136, 'Christopher', 'Thompson', '919-902-9049', 'christoperthompson@gmail.com', '919919000000'),
(137, 'Lynn', 'Madrid', '989-685-6300', 'lymmmadrid@gmail.com', '919919000000'),
(138, 'Donald', 'Wheeler', '252-315-7813', 'donaldwheeler@gmail.com', '22222'),
(139, 'Margaret', 'Washington', '936-854-0533', 'margaretwashington@gmail.com', '22222'),
(140, 'William', 'Olivarez', '856-855-0612', 'williamolivaraz@gmail.com', '11133'),
(141, 'Larry', 'Henson', '515-314-7896', 'larryhenson@gmail.com', '24423'),
(142, 'Ladonna', 'Hughes', '601-637-7771', 'ladonnahugjes@gmail.com', '2424'),
(143, 'Joshua', 'Tinker', '757-413-7159', 'joshuatinker@gmail.com', '35343466'),
(144, 'Damian', 'Salley', '330-302-5687', 'damiansalley@gmail.com', '324'),
(145, 'Joyce', 'Hollins', '412-374-0949', 'joycehollins@gmail.com', '3236888'),
(146, 'Jan', 'Schuman', '775-243-7818', 'janschuman@gmail.com', '6467438843'),
(147, 'Millie', 'Richards', '802-694-4273', 'millierichards@gmail.com', '55577'),
(148, 'Mary', 'Navarrete', '601-986-1079', 'marynavarrete@gmail.com', '8888'),
(149, 'Maggie', 'Noble', '432-332-0287', 'maggienoble@gmail.com', '777774'),
(150, 'Doris', 'Evans', '803-744-0440', 'dorisevans@gmail.com', '330909884'),
(151, 'Christopher', 'Thompson', '919-902-9049', 'christoperthompson@gmail.com', '919919000000'),
(152, 'Lynn', 'Madrid', '989-685-6300', 'lymmmadrid@gmail.com', '919919000000'),
(153, 'Donald', 'Wheeler', '252-315-7813', 'donaldwheeler@gmail.com', '22222'),
(154, 'Margaret', 'Washington', '936-854-0533', 'margaretwashington@gmail.com', '22222'),
(155, 'William', 'Olivarez', '856-855-0612', 'williamolivaraz@gmail.com', '11133'),
(156, 'Larry', 'Henson', '515-314-7896', 'larryhenson@gmail.com', '24423'),
(157, 'Ladonna', 'Hughes', '601-637-7771', 'ladonnahugjes@gmail.com', '2424'),
(158, 'Joshua', 'Tinker', '757-413-7159', 'joshuatinker@gmail.com', '35343466'),
(159, 'Damian', 'Salley', '330-302-5687', 'damiansalley@gmail.com', '324'),
(160, 'Joyce', 'Hollins', '412-374-0949', 'joycehollins@gmail.com', '3236888'),
(161, 'Jan', 'Schuman', '775-243-7818', 'janschuman@gmail.com', '6467438843'),
(162, 'Millie', 'Richards', '802-694-4273', 'millierichards@gmail.com', '55577'),
(163, 'Mary', 'Navarrete', '601-986-1079', 'marynavarrete@gmail.com', '8888'),
(164, 'Maggie', 'Noble', '432-332-0287', 'maggienoble@gmail.com', '777774'),
(165, 'Doris', 'Evans', '803-744-0440', 'dorisevans@gmail.com', '330909884'),
(166, 'Christopher', 'Thompson', '919-902-9049', 'christoperthompson@gmail.com', '919919000000'),
(167, 'Lynn', 'Madrid', '27780704148', 'lymmmadrid@gmail.com', '919919000000'),
(168, 'Donald', 'Wheeler', '27780704148', 'donaldwheeler@gmail.com', '22222'),
(169, 'Margaret', 'Washington', '936-854-0533', 'margaretwashington@gmail.com', '22222'),
(170, 'William', 'Olivarez', '856-855-0612', 'williamolivaraz@gmail.com', '11133'),
(171, 'Larry', 'Henson', '515-314-7896', 'larryhenson@gmail.com', '24423'),
(172, 'Ladonna', 'Hughes', '601-637-7771', 'ladonnahugjes@gmail.com', '2424'),
(173, 'Joshua', 'Tinker', '757-413-7159', 'joshuatinker@gmail.com', '35343466'),
(174, 'Damian', 'Salley', '330-302-5687', 'damiansalley@gmail.com', '324'),
(175, 'Joyce', 'Hollins', '412-374-0949', 'joycehollins@gmail.com', '3236888'),
(176, 'Jan', 'Schuman', '775-243-7818', 'janschuman@gmail.com', '6467438843'),
(177, 'Millie', 'Richards', '802-694-4273', 'millierichards@gmail.com', '55577'),
(178, 'Mary', 'Navarrete', '601-986-1079', 'marynavarrete@gmail.com', '8888'),
(179, 'Maggie', 'Noble', '432-332-0287', 'maggienoble@gmail.com', '777774'),
(180, 'Doris', 'Evans', '803-744-0440', 'dorisevans@gmail.com', '330909884'),
(181, 'Christopher', 'Thompson', '919-902-9049', 'swdmajozi@gmail.com', '919919000000'),
(182, 'Lynn', 'Madrid', '27780704148', 'lymmmadrid@gmail.com', '919919000000'),
(183, 'Donald', 'Wheeler', '27780704148', 'donaldwheeler@gmail.com', '22222'),
(184, 'Margaret', 'Washington', '936-854-0533', 'margaretwashington@gmail.com', '22222'),
(185, 'William', 'Olivarez', '856-855-0612', 'williamolivaraz@gmail.com', '11133'),
(186, 'Larry', 'Henson', '515-314-7896', 'larryhenson@gmail.com', '24423'),
(187, 'Ladonna', 'Hughes', '601-637-7771', 'ladonnahugjes@gmail.com', '2424'),
(188, 'Joshua', 'Tinker', '757-413-7159', 'joshuatinker@gmail.com', '35343466'),
(189, 'Damian', 'Salley', '330-302-5687', 'damiansalley@gmail.com', '324'),
(190, 'Joyce', 'Hollins', '412-374-0949', 'joycehollins@gmail.com', '3236888'),
(191, 'Jan', 'Schuman', '775-243-7818', 'janschuman@gmail.com', '6467438843'),
(192, 'Millie', 'Richards', '802-694-4273', 'millierichards@gmail.com', '55577'),
(193, 'Mary', 'Navarrete', '601-986-1079', 'marynavarrete@gmail.com', '8888'),
(194, 'Maggie', 'Noble', '432-332-0287', 'maggienoble@gmail.com', '777774'),
(195, 'Doris', 'Evans', '803-744-0440', 'dorisevans@gmail.com', '330909884'),
(196, 'Christopher', 'Thompson', '919-902-9049', 'swdmajozi@gmail.com', '919919000000'),
(197, 'Lynn', 'Madrid', '27780704148', 'lymmmadrid@gmail.com', '919919000000'),
(198, 'Donald', 'Wheeler', '27780704148', 'donaldwheeler@gmail.com', '22222'),
(199, 'Margaret', 'Washington', '936-854-0533', 'margaretwashington@gmail.com', '22222'),
(200, 'William', 'Olivarez', '856-855-0612', 'williamolivaraz@gmail.com', '11133'),
(201, 'Larry', 'Henson', '515-314-7896', 'larryhenson@gmail.com', '24423'),
(202, 'Ladonna', 'Hughes', '601-637-7771', 'ladonnahugjes@gmail.com', '2424'),
(203, 'Joshua', 'Tinker', '757-413-7159', 'joshuatinker@gmail.com', '35343466'),
(204, 'Damian', 'Salley', '330-302-5687', 'damiansalley@gmail.com', '324'),
(205, 'Joyce', 'Hollins', '412-374-0949', 'joycehollins@gmail.com', '3236888'),
(206, 'Jan', 'Schuman', '775-243-7818', 'janschuman@gmail.com', '6467438843'),
(207, 'Millie', 'Richards', '802-694-4273', 'millierichards@gmail.com', '55577'),
(208, 'Mary', 'Navarrete', '601-986-1079', 'marynavarrete@gmail.com', '8888'),
(209, 'Maggie', 'Noble', '432-332-0287', 'maggienoble@gmail.com', '777774'),
(210, 'Doris', 'Evans', '803-744-0440', 'dorisevans@gmail.com', '330909884'),
(211, '', '', '', '', ''),
(212, '', '', '', '', ''),
(213, '', '', '', '', ''),
(214, '', '', '', '', ''),
(215, '', '', '', '', ''),
(216, '', '', '', '', ''),
(217, '', '', '', '', ''),
(218, '', '', '', '', ''),
(219, '', '', '', '', ''),
(220, '', '', '', '', ''),
(221, '', '', '', '', ''),
(222, '', '', '', '', ''),
(223, '', '', '', '', ''),
(224, '', '', '', '', ''),
(225, '', '', '', '', ''),
(226, '', '', '', '', ''),
(227, '', '', '', '', ''),
(228, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `scheduled_paymentdate` datetime DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `reserved_amount` int(250) NOT NULL,
  `ref_no` int(20) DEFAULT NULL,
  `period` int(50) DEFAULT NULL,
  `remaining` datetime DEFAULT NULL,
  `statuslist` int(25) DEFAULT '0',
  `paymentmethod` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `statuswithdrawal` int(50) DEFAULT NULL,
  `level` int(25) DEFAULT NULL,
  `allocation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `userid`, `email`, `amount`, `datetime`, `scheduled_paymentdate`, `comments`, `status`, `reserved_amount`, `ref_no`, `period`, `remaining`, `statuslist`, `paymentmethod`, `statuswithdrawal`, `level`, `allocation_date`) VALUES
(2, 571, 'nothandos406@gmail.com', 500, '2020-01-27 10:55:44', NULL, NULL, 'Reserved', 0, 15173, 5, NULL, 0, NULL, NULL, 1, '2020-02-01 10:55:44'),
(3, 576, 'phumziles406@gmail.com', 500, '2020-01-31 14:46:28', NULL, NULL, 'Waiting', 0, 12758, 5, NULL, 0, NULL, NULL, 1, '2020-02-05 14:46:28'),
(4, 577, 'kwenzahmgobhozi@gmail.com', 500, '2020-01-31 15:15:57', NULL, NULL, 'Waiting', 0, 15098, 5, NULL, 0, NULL, NULL, 1, '2020-02-05 15:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `transactions1`
--

CREATE TABLE `transactions1` (
  `ids` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `scheduled_paymentdate` datetime DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `reserved_amount` int(250) NOT NULL,
  `ref_no` int(20) DEFAULT NULL,
  `period` int(50) DEFAULT NULL,
  `remaining` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions1`
--

INSERT INTO `transactions1` (`ids`, `userid`, `email`, `amount`, `datetime`, `scheduled_paymentdate`, `comments`, `status`, `reserved_amount`, `ref_no`, `period`, `remaining`) VALUES
(1, 571, NULL, 50000, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL),
(2, 571, NULL, 50000, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `salt` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT '1',
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `bankname` varchar(255) DEFAULT NULL,
  `bankcode` varchar(50) DEFAULT NULL,
  `bankaccount` varchar(244) DEFAULT NULL,
  `accounttype` varchar(50) DEFAULT NULL,
  `referer` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `salt`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `bankname`, `bankcode`, `bankaccount`, `accounttype`, `referer`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa', 'admin@admin.com', '', NULL, '', NULL, NULL, NULL, NULL, '.z6syFqeyqrmLFymdVMGH.', 1268889823, 1626438486, 1, 'Money', 'Wisherz', 'ADMIN', '0611440732', 'Capitec', '47001', '1658191534', 'Savings', 'swdmajozi@gmail.com'),
(34, '::1', 'sss', '$2y$08$YUBNFlj2KNLk9hFDaTTS6OcaOkKuoacgIrBzbOm1Q5xeFqqpX4Npa', 'swdmajozi@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1602251775, 1612009753, 1, 'Swtech Solutions', 'Swtech Solutions', 'Swtech Solutions', '+27780704148', 'FNB', '777', '666666', 'dddddd', 'tttt'),
(90, '127.0.0.1', 'swdmajozi@gmail.comd', '$2y$08$LGGACeroMUkkTofvpSJg/OJ/yRB/4l5ZeEBL.RQBBRdRIrka0I8w.', 'swdmajozi@gmail.comd', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1626437544, 1626437970, 1, 'Swtech Solutions', 'Swtech Solutions', 'Swtech Solutions', '+27780704148', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(88, 1, 1),
(89, 1, 2),
(90, 1, 3),
(91, 1, 4),
(92, 1, 5),
(93, 1, 6),
(157, 34, 2),
(187, 90, 1),
(188, 90, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyers`
--
ALTER TABLE `buyers`
  ADD PRIMARY KEY (`buyer_id`);

--
-- Indexes for table `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `customer_links`
--
ALTER TABLE `customer_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help_table`
--
ALTER TABLE `help_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments_payfast`
--
ALTER TABLE `payments_payfast`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `recommit`
--
ALTER TABLE `recommit`
  ADD PRIMARY KEY (`reid`);

--
-- Indexes for table `referers`
--
ALTER TABLE `referers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions1`
--
ALTER TABLE `transactions1`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyers`
--
ALTER TABLE `buyers`
  MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `coins`
--
ALTER TABLE `coins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;

--
-- AUTO_INCREMENT for table `customer_links`
--
ALTER TABLE `customer_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `help_table`
--
ALTER TABLE `help_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments_payfast`
--
ALTER TABLE `payments_payfast`
  MODIFY `paymentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recommit`
--
ALTER TABLE `recommit`
  MODIFY `reid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referers`
--
ALTER TABLE `referers`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions1`
--
ALTER TABLE `transactions1`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
