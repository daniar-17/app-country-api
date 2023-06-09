-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 05:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app-country-api`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `ccn3` varchar(5) NOT NULL,
  `star` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `ccn3`, `star`) VALUES
(1, '360', 2),
(2, '086', 3),
(3, '724', 1),
(4, '004', 4),
(5, '729', 5),
(6, '100', 2),
(7, '276', 3),
(8, '440', 1),
(9, '175', 2),
(10, '584', 1),
(11, '616', 3),
(12, '772', 5),
(13, '834', 1),
(14, '446', 4),
(15, '626', 4),
(16, '768', 4),
(17, '203', 1),
(18, '492', 3),
(19, '800', 5),
(20, '780', 2),
(21, '012', 5),
(22, '804', 4),
(23, '233', 4),
(24, '300', 2),
(25, '478', 4),
(26, '268', 1),
(27, '534', 2),
(28, '516', 5),
(29, '807', 2),
(30, '480', 2),
(31, '296', 4),
(32, '178', 1),
(33, '226', 4),
(35, '570', 1),
(36, '', 1),
(37, '585', 2),
(38, '634', 1),
(39, '840', 5),
(40, '136', 1),
(41, '072', 5),
(42, '275', 1),
(43, '710', 1),
(44, '704', 1),
(45, '832', 2),
(46, '328', 1),
(47, '798', 3),
(48, '400', 3),
(49, '598', 4),
(50, '044', 4),
(51, '132', 2),
(52, '512', 4),
(53, '862', 2),
(54, '068', 3),
(55, '818', 4),
(56, '124', 2),
(57, '578', 4),
(58, '417', 2),
(59, '051', 1),
(60, '180', 1),
(61, '630', 2),
(62, '438', 4),
(63, '748', 4),
(64, '234', 3),
(65, '566', 2),
(66, '663', 2),
(67, '316', 4),
(68, '454', 1),
(69, '248', 3),
(70, '678', 1),
(71, '238', 4),
(72, '320', 1),
(73, '052', 3),
(74, '288', 1),
(75, '558', 1),
(76, '833', 1),
(77, '620', 3),
(78, '024', 3),
(79, '214', 3),
(80, '008', 4),
(81, '624', 5),
(82, '434', 1),
(83, '414', 5),
(84, '048', 4),
(85, '795', 2),
(86, '430', 1),
(87, '854', 2),
(88, '428', 5),
(89, '643', 3),
(90, '608', 4),
(91, '554', 2),
(92, '120', 4),
(93, '218', 4),
(94, '660', 5),
(95, '642', 3),
(96, '356', 2),
(97, '266', 1),
(98, '104', 4),
(99, '638', 5),
(100, '016', 4),
(101, '499', 2),
(102, '084', 3),
(103, '496', 2),
(104, '040', 5),
(105, '500', 1),
(106, '682', 1),
(107, '348', 3),
(108, '520', 3),
(109, '032', 2),
(110, '612', 1),
(111, '876', 2),
(112, '887', 2),
(113, '703', 2),
(114, '796', 3),
(115, '752', 2),
(116, '654', 3),
(117, '380', 3),
(118, '076', 2),
(119, '728', 2),
(120, '196', 4),
(121, '764', 4),
(122, '792', 3),
(123, '060', 4),
(124, '036', 3),
(125, '050', 3),
(126, '308', 4),
(127, '702', 2),
(128, '498', 1),
(129, '466', 5),
(130, '404', 4),
(131, '858', 2),
(132, '756', 2),
(133, '222', 3),
(134, '148', 1),
(135, '304', 2),
(136, '112', 1),
(137, '384', 4),
(138, '422', 3),
(139, '528', 1),
(140, '674', 3),
(141, '064', 2),
(142, '458', 3),
(143, '398', 4),
(144, '246', 3),
(145, '788', 1),
(146, '270', 5),
(147, '760', 1),
(148, '260', 1),
(149, '574', 1),
(150, '324', 5),
(151, '535', 4),
(152, '508', 2),
(153, '882', 1),
(154, '158', 5),
(155, '239', 1),
(156, '408', 2),
(157, '262', 5),
(158, '740', 3),
(159, '250', 1),
(160, '646', 4),
(161, '410', 3),
(162, '010', 3),
(163, '531', 1),
(164, '388', 1),
(165, '462', 1),
(166, '705', 2),
(167, '162', 1),
(168, '850', 5),
(169, '600', 4),
(171, '450', 1),
(172, '368', 4),
(173, '340', 4),
(174, '504', 1),
(175, '344', 4),
(176, '028', 4),
(177, '144', 5),
(178, '332', 5),
(179, '192', 3),
(180, '762', 4),
(181, '184', 3),
(182, '170', 1),
(183, '583', 5),
(184, '580', 5),
(185, '659', 3),
(186, '860', 2),
(187, '292', 1),
(188, '372', 3),
(189, '604', 1),
(190, '586', 2),
(191, '152', 2),
(192, '894', 3),
(193, '662', 1),
(194, '690', 5),
(195, '204', 4),
(196, '826', 2),
(197, '074', 1),
(198, '188', 4),
(199, '174', 5),
(200, '352', 4),
(201, '392', 2),
(202, '336', 1),
(203, '092', 4),
(204, '540', 2),
(205, '242', 3),
(206, '070', 4),
(207, '166', 3),
(208, '732', 1),
(209, '484', 3),
(210, '116', 5),
(211, '670', 3),
(212, '364', 1),
(213, '470', 4),
(214, '688', 5),
(215, '784', 5),
(216, '031', 5),
(217, '334', 3),
(218, '258', 3),
(219, '548', 5),
(220, '562', 5),
(221, '232', 5),
(222, '140', 2),
(223, '376', 2),
(224, '524', 3),
(225, '591', 3),
(226, '831', 4),
(227, '090', 4),
(228, '716', 3),
(229, '533', 1),
(230, '096', 4),
(231, '208', 1),
(232, '056', 2),
(233, '254', 2),
(234, '418', 2),
(235, '776', 5),
(236, '020', 1),
(237, '312', 2),
(238, '474', 5),
(239, '426', 5),
(240, '212', 1),
(241, '706', 4),
(242, '191', 2),
(243, '694', 1),
(244, '652', 2),
(245, '744', 4),
(246, '666', 2),
(247, '581', 4),
(248, '108', 5),
(249, '686', 5),
(250, '231', 1),
(251, '442', 2),
(252, '156', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
