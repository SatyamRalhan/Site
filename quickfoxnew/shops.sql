-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 26, 2018 at 05:05 AM
-- Server version: 5.7.22-0ubuntu18.04.1
-- PHP Version: 7.2.5-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shopName` varchar(20) NOT NULL,
  `item` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lon` float(10,6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `shopName`, `item`, `price`, `lat`, `lon`) VALUES
(1, 'A ', 'Pencil', 5, 26.511932, 80.237190),
(2, 'A ', 'Eraser', 3, 26.511932, 80.237190),
(3, 'A ', 'Sharpner', 4, 26.511932, 80.237190),
(4, 'A ', 'Geometry box', 200, 26.511932, 80.237190),
(5, 'A ', 'Ball pen', 8, 26.511932, 80.237190),
(6, 'A ', 'Gel pen', 20, 26.511932, 80.237190),
(7, 'A ', 'Scale', 15, 26.511932, 80.237190),
(8, 'A ', 'Ruler', 38, 26.511932, 80.237190),
(9, 'A ', 'Glue', 20, 26.511932, 80.237190),
(10, 'A ', 'Crayons', 85, 26.511932, 80.237190),
(11, 'A ', 'Sparkle pens', 115, 26.511932, 80.237190),
(12, 'A ', 'Notebook (200 page)', 20, 26.511932, 80.237190),
(13, 'A ', 'Notebook (400 page)', 35, 26.511932, 80.237190),
(14, 'A ', 'Drawing book', 80, 26.511932, 80.237190),
(15, 'A ', 'Tape', 25, 26.511932, 80.237190),
(16, 'A ', 'Sketch pen', 115, 26.511932, 80.237190),
(17, 'A ', 'Nestle KitKat', 8, 26.511932, 80.237190),
(18, 'A ', 'Cadbury 5 Star', 9, 26.511932, 80.237190),
(19, 'A ', 'Cadbury Perk', 4, 26.511932, 80.237190),
(20, 'A ', 'Nestle Milky Bar', 19, 26.511932, 80.237190),
(21, 'A ', 'Cadbury Munch', 9, 26.511932, 80.237190),
(22, 'B', 'Tomato(1kg)', 28, 26.511595, 80.236443),
(23, 'B', 'Potato(1kg)', 26, 26.511595, 80.236443),
(24, 'B', 'Onions(1 kg)', 26, 26.511595, 80.236443),
(25, 'B', 'Cauliflower(500 gm)', 35, 26.511595, 80.236443),
(26, 'B', 'Watermelon(1 kg)', 25, 26.511595, 80.236443),
(27, 'B', 'Carrot(1 kg)', 45, 26.511595, 80.236443),
(28, 'B', 'Capsicum(500 gm)', 45, 26.511595, 80.236443),
(29, 'B', 'Pumpkin(1kg)', 18, 26.511595, 80.236443),
(30, 'B', 'Sprouts(500 gm)', 52, 26.511595, 80.236443),
(31, 'B', 'Frozen Peas', 125, 26.511595, 80.236443),
(32, 'B', 'Spinach(1 kg)', 65, 26.511595, 80.236443),
(33, 'B', 'Cucumber(1 kg)', 35, 26.511595, 80.236443),
(34, 'B', 'Lemon(100gm)', 15, 26.511595, 80.236443),
(35, 'B', 'Beetroot', 40, 26.511595, 80.236443),
(36, 'B', 'Garlic(250gm)', 26, 26.511595, 80.236443),
(37, 'B', 'Mushroom(500gm)', 47, 26.511595, 80.236443),
(38, 'B', 'Rice(1 kg)', 190, 26.511595, 80.236443),
(39, 'B', 'Wheat Flour(5 kg)', 160, 26.511595, 80.236443),
(40, 'B', 'Butter(500 gm)', 240, 26.511595, 80.236443),
(41, 'B', 'Brown bread(200 gm)', 40, 26.511595, 80.236443),
(42, 'B', 'Fruit Juice(1 lt)', 110, 26.511595, 80.236443),
(43, 'B', 'Oats(200 gm)', 250, 26.511595, 80.236443),
(44, 'B', 'Eggs', 90, 26.511595, 80.236443),
(45, 'C', 'Chips', 35, 26.510633, 80.236221),
(46, 'C', 'Khakhra(1kg)', 265, 26.510633, 80.236221),
(47, 'C', 'Chakli(1kg)', 410, 26.510633, 80.236221),
(48, 'C', 'Khatta Meetha(700gm)', 63, 26.510633, 80.236221),
(49, 'C', 'aloo bhujia(1 kg)', 192, 26.510633, 80.236221),
(50, 'C', 'Panchratan Mixture', 145, 26.510633, 80.236221),
(51, 'C', 'All In One', 155, 26.510633, 80.236221),
(52, 'C', 'punjabi tadka(150 gm)', 31, 26.510633, 80.236221),
(53, 'C', 'nimbu masala(150 gm)', 30, 26.510633, 80.236221),
(54, 'C', 'moong dal(1 kg)', 220, 26.510633, 80.236221),
(55, 'C', 'Oreo', 30, 26.510633, 80.236221),
(56, 'C', 'Dark Fantasy', 45, 26.510633, 80.236221),
(57, 'C', 'Banana Chips(100 gm)', 20, 26.510633, 80.236221),
(58, 'C', 'Cashew(250 gm)', 415, 26.510633, 80.236221),
(59, 'C', 'Almonds(250 gm)', 220, 26.510633, 80.236221),
(60, 'C', 'pistachios(100 gm)', 185, 26.510633, 80.236221),
(61, 'C', 'Rasin(100 gm)', 125, 26.510633, 80.236221),
(62, 'C', 'Dates(1 kg)', 550, 26.510633, 80.236221),
(63, 'C', 'Rice(1 kg)', 190, 26.510633, 80.236221),
(64, 'C', 'Wheat Flour(5 kg)', 160, 26.510633, 80.236221),
(65, 'C', 'Butter(500 gm)', 250, 26.510633, 80.236221),
(66, 'C', 'Brown bread(200 gm)', 38, 26.510633, 80.236221),
(67, 'C', 'Fruit Juice(1 lt)', 90, 26.510633, 80.236221),
(68, 'C', 'Oats(200 gm)', 230, 26.510633, 80.236221),
(69, 'C', 'Eggs', 60, 26.510633, 80.236221),
(70, 'D', 'Toothbrush', 45, 26.511408, 80.236839),
(71, 'D', 'Toothpaste', 56, 26.511408, 80.236839),
(72, 'D', 'Tongue cleaner', 10, 26.511408, 80.236839),
(73, 'D', 'Earbuds', 35, 26.511408, 80.236839),
(74, 'D', 'Nailcutter', 40, 26.511408, 80.236839),
(75, 'D', 'Comb', 80, 26.511408, 80.236839),
(76, 'D', 'Loofah', 30, 26.511408, 80.236839),
(77, 'D', 'Toothpick', 20, 26.511408, 80.236839),
(78, 'D', 'Shampoo', 180, 26.511408, 80.236839),
(79, 'D', 'Soap', 30, 26.511408, 80.236839),
(80, 'D', 'Face Wash', 95, 26.511408, 80.236839),
(81, 'D', 'Body Wash', 128, 26.511408, 80.236839),
(82, 'D', 'Surf Excel Liquid', 115, 26.511408, 80.236839),
(83, 'D', 'Surf Excel Soap', 25, 26.511408, 80.236839),
(84, 'D', 'Dishwash', 95, 26.511408, 80.236839),
(85, 'D', 'Tissues', 25, 26.511408, 80.236839),
(86, 'D', 'Wet Wipes', 65, 26.511408, 80.236839),
(87, 'D', 'Toilet Paper', 26, 26.511408, 80.236839),
(88, 'D', 'Powder', 100, 26.511408, 80.236839),
(89, 'D', 'Deodrant', 250, 26.511408, 80.236839),
(90, 'D', 'Hair oil', 135, 26.511408, 80.236839),
(91, 'D', 'Shaving Cream', 265, 26.511408, 80.236839),
(92, 'D', 'Razor', 105, 26.511408, 80.236839),
(93, 'D', 'After Shave', 305, 26.511408, 80.236839),
(94, 'D', 'Mosturizer', 155, 26.511408, 80.236839),
(95, 'D', 'Bucket', 150, 26.511408, 80.236839),
(96, 'D', 'Mug', 40, 26.511408, 80.236839),
(97, 'D', 'Plastic Bottle', 250, 26.511408, 80.236839),
(98, 'D', 'Metal Bottle', 550, 26.511408, 80.236839),
(99, 'D', 'Lunchbox', 275, 26.511408, 80.236839),
(100, 'D', 'Pencilbox', 50, 26.511408, 80.236839),
(101, 'D', 'Cosco ball', 35, 26.511408, 80.236839),
(102, 'D', 'Laptop Bag', 1000, 26.511408, 80.236839),
(103, 'D', 'Coffee Mug', 150, 26.511408, 80.236839),
(104, 'D', 'Volini', 40, 26.511408, 80.236839),
(105, 'D', 'Moov', 35, 26.511408, 80.236839),
(106, 'D', 'Itchguard', 18, 26.511408, 80.236839),
(107, 'E', 'Rice(1 kg)', 190, 26.511969, 80.236481),
(108, 'E', 'Wheat Flour(5 kg)', 150, 26.511969, 80.236481),
(109, 'E', 'Butter(500 gm)', 230, 26.511969, 80.236481),
(110, 'E', 'Brown bread(200 gm)', 32, 26.511969, 80.236481),
(111, 'E', 'Fruit Juice(1 lt)', 95, 26.511969, 80.236481),
(112, 'E', 'Oats(200 gm)', 250, 26.511969, 80.236481),
(113, 'E', 'Eggs', 80, 26.511969, 80.236481),
(114, 'E', 'Horlicks', 115, 26.511969, 80.236481),
(115, 'E', 'Ghee', 435, 26.511969, 80.236481),
(116, 'E', 'Cooking Oil', 230, 26.511969, 80.236481),
(117, 'E', 'Cooking powder', 50, 26.511969, 80.236481),
(118, 'E', 'Chocos', 325, 26.511969, 80.236481),
(119, 'E', 'Jam(1kg)', 245, 26.511969, 80.236481),
(120, 'E', 'Sauce(1 kg)', 125, 26.511969, 80.236481),
(121, 'E', 'Tang', 50, 26.511969, 80.236481),
(122, 'E', 'Icetea', 35, 26.511969, 80.236481),
(123, 'E', 'Glucose', 110, 26.511969, 80.236481),
(124, 'E', 'Honey', 99, 26.511969, 80.236481),
(125, 'E', 'Chakli(1kg)', 400, 26.511969, 80.236481),
(126, 'E', 'Khatta Meetha(700gm)', 70, 26.511969, 80.236481),
(127, 'E', 'aloo bhujia(1 kg)', 180, 26.511969, 80.236481),
(128, 'E', 'Panchratan Mixture', 135, 26.511969, 80.236481),
(129, 'E', 'All In One', 155, 26.511969, 80.236481),
(130, 'E', 'punjabi tadka(150 gm)', 30, 26.511969, 80.236481),
(131, 'E', 'nimbu masala(150 gm)', 35, 26.511969, 80.236481),
(132, 'E', 'moong dal(1 kg)', 225, 26.511969, 80.236481),
(133, 'E', 'Oreo', 27, 26.511969, 80.236481),
(134, 'E', 'Dark Fantasy', 29, 26.511969, 80.236481),
(135, 'F', 'Chakli(1kg)', 410, 26.504478, 80.230904),
(136, 'F', 'Khatta Meetha(700gm)', 70, 26.504478, 80.230904),
(137, 'F', 'aloo bhujia(1 kg)', 195, 26.504478, 80.230904),
(138, 'F', 'Panchratan Mixture', 150, 26.504478, 80.230904),
(139, 'F', 'All In One', 160, 26.504478, 80.230904),
(140, 'F', 'punjabi tadka(150 gm)', 35, 26.504478, 80.230904),
(141, 'F', 'nimbu masala(150 gm)', 26, 26.504478, 80.230904),
(142, 'F', 'moong dal(1 kg)', 200, 26.504478, 80.230904),
(143, 'F', 'Chidwa', 30, 26.504478, 80.230904),
(144, 'F', 'Bhel', 39, 26.504478, 80.230904),
(145, 'F', 'Banana Chips(100 gm)', 25, 26.504478, 80.230904),
(146, 'F', 'Parle-G', 5, 26.504478, 80.230904),
(147, 'F', 'HideNSeek', 30, 26.504478, 80.230904),
(148, 'F', 'Milano', 30, 26.504478, 80.230904),
(149, 'F', 'Nice', 18, 26.504478, 80.230904),
(150, 'F', 'Good Day', 13, 26.504478, 80.230904),
(151, 'F', 'Happy Happy', 8, 26.504478, 80.230904),
(152, 'F', 'Jim Jam', 25, 26.504478, 80.230904),
(153, 'F', 'Cake', 35, 26.504478, 80.230904),
(154, 'F', 'Swiss Roll', 38, 26.504478, 80.230904),
(155, 'F', 'Unibic', 20, 26.504478, 80.230904),
(156, 'F', 'Oreo', 35, 26.504478, 80.230904),
(157, 'F', 'Dark Fantasy', 27, 26.504478, 80.230904),
(158, 'G', 'Rice(1 kg)', 190, 26.504515, 80.231773),
(159, 'G', 'Wheat Flour(5 kg)', 140, 26.504515, 80.231773),
(160, 'G', 'Butter(500 gm)', 235, 26.504515, 80.231773),
(161, 'G', 'Brown bread(200 gm)', 35, 26.504515, 80.231773),
(162, 'G', 'Fruit Juice(1 lt)', 100, 26.504515, 80.231773),
(163, 'G', 'Oats(200 gm)', 235, 26.504515, 80.231773),
(164, 'G', 'Eggs', 70, 26.504515, 80.231773),
(165, 'G', 'Horlicks', 100, 26.504515, 80.231773),
(166, 'G', 'Ghee', 445, 26.504515, 80.231773),
(167, 'G', 'Cooking Oil', 220, 26.504515, 80.231773),
(168, 'G', 'Cooking powder', 60, 26.504515, 80.231773),
(169, 'G', 'Chocos', 360, 26.504515, 80.231773),
(170, 'G', 'Jam(1kg)', 240, 26.504515, 80.231773),
(171, 'G', 'Sauce(1 kg)', 115, 26.504515, 80.231773),
(172, 'G', 'Tang', 60, 26.504515, 80.231773),
(173, 'G', 'Icetea', 35, 26.504515, 80.231773),
(174, 'G', 'Glucose', 110, 26.504515, 80.231773),
(175, 'G', 'Honey', 95, 26.504515, 80.231773),
(176, 'G', 'Ball pen', 15, 26.504515, 80.231773),
(177, 'G', 'Gel pen', 15, 26.504515, 80.231773),
(178, 'H', 'Pencil', 6, 26.509485, 80.230858),
(179, 'H', 'Eraser', 4, 26.509485, 80.230858),
(180, 'H', 'Sharpner', 5, 26.509485, 80.230858),
(181, 'H', 'Geometry box', 230, 26.509485, 80.230858),
(182, 'H', 'Ball pen', 9, 26.509485, 80.230858),
(183, 'H', 'Gel pen', 10, 26.509485, 80.230858),
(184, 'H', 'Scale', 18, 26.509485, 80.230858),
(185, 'H', 'Ruler', 28, 26.509485, 80.230858),
(186, 'H', 'Cashew(250 gm)', 380, 26.509485, 80.230858),
(187, 'H', 'Almonds(250 gm)', 200, 26.509485, 80.230858),
(188, 'H', 'pistachios(100 gm)', 160, 26.509485, 80.230858),
(189, 'H', 'Rasin(100 gm)', 120, 26.509485, 80.230858),
(190, 'H', 'Dates(1 kg)', 650, 26.509485, 80.230858),
(191, 'H', 'Tang', 60, 26.509485, 80.230858),
(192, 'H', 'Icetea', 40, 26.509485, 80.230858),
(193, 'H', 'Glucose', 95, 26.509485, 80.230858),
(194, 'H', 'Honey', 99, 26.509485, 80.230858),
(195, 'H', 'Maggi(70 gm)', 10, 26.509485, 80.230858),
(196, 'I', 'Tomato(1kg)', 35, 26.510555, 80.230667),
(197, 'I', 'Potato(1kg)', 30, 26.510555, 80.230667),
(198, 'I', 'Onions(1 kg)', 24, 26.510555, 80.230667),
(199, 'I', 'Cauliflower(500 gm)', 28, 26.510555, 80.230667),
(200, 'I', 'Watermelon(1 kg)', 23, 26.510555, 80.230667),
(201, 'I', 'Carrot(1 kg)', 42, 26.510555, 80.230667),
(202, 'I', 'Capsicum(500 gm)', 38, 26.510555, 80.230667),
(203, 'I', 'Pumpkin(1kg)', 14, 26.510555, 80.230667),
(204, 'I', 'Sprouts(500 gm)', 55, 26.510555, 80.230667),
(205, 'I', 'Frozen Peas', 135, 26.510555, 80.230667),
(206, 'I', 'Spinach(1 kg)', 54, 26.510555, 80.230667),
(207, 'I', 'Cucumber(1 kg)', 36, 26.510555, 80.230667),
(208, 'I', 'Lemon(100gm)', 12, 26.510555, 80.230667),
(209, 'I', 'Beetroot', 37, 26.510555, 80.230667),
(210, 'I', 'Garlic(250gm)', 23, 26.510555, 80.230667),
(211, 'I', 'Mushroom(500gm)', 46, 26.510555, 80.230667),
(212, 'I', 'Nestle KitKat', 10, 26.510555, 80.230667),
(213, 'I', 'Cadbury 5 Star', 10, 26.510555, 80.230667),
(214, 'I', 'Cadbury Dairymilk', 20, 26.510555, 80.230667),
(215, 'I', 'Cadbury Dairymilk Silk', 60, 26.510555, 80.230667),
(216, 'I', 'Ferrero Rocher', 135, 26.510555, 80.230667),
(217, 'I', 'Mars', 35, 26.510555, 80.230667),
(218, 'I', 'Nestle Milky Bar', 20, 26.510555, 80.230667),
(219, 'I', 'Cadbury Munch', 10, 26.510555, 80.230667),
(220, 'I', 'Cadbury Perk', 5, 26.510555, 80.230667),
(221, 'I', 'Bournville', 40, 26.510555, 80.230667),
(222, 'I', 'Cadbury Temptations', 68, 26.510555, 80.230667),
(223, 'I', 'Tobelerone (150 gm)', 370, 26.510555, 80.230667),
(224, 'I', 'Milk', 25, 26.510555, 80.230667),
(225, 'I', 'Cheese', 87, 26.510555, 80.230667),
(226, 'J', 'Chocos', 320, 26.508331, 80.230286),
(227, 'J', 'Jam(1kg)', 229, 26.508331, 80.230286),
(228, 'J', 'Sauce(1 kg)', 109, 26.508331, 80.230286),
(229, 'J', 'Tang', 45, 26.508331, 80.230286),
(230, 'J', 'Icetea', 30, 26.508331, 80.230286),
(231, 'J', 'Glucose', 97, 26.508331, 80.230286),
(232, 'J', 'Honey', 100, 26.508331, 80.230286),
(233, 'J', 'Maggi(70 gm)', 10, 26.508331, 80.230286),
(234, 'J', 'Parle-G', 12, 26.508331, 80.230286),
(235, 'J', 'HideNSeek', 35, 26.508331, 80.230286),
(236, 'J', 'Milano', 40, 26.508331, 80.230286),
(237, 'J', 'Nice', 25, 26.508331, 80.230286),
(238, 'J', 'Good Day', 12, 26.508331, 80.230286),
(239, 'J', 'Happy Happy', 12, 26.508331, 80.230286),
(240, 'J', 'Jim Jam', 24, 26.508331, 80.230286),
(241, 'J', 'Cake', 28, 26.508331, 80.230286),
(242, 'J', 'Swiss Roll', 33, 26.508331, 80.230286),
(243, 'J', 'Unibic', 23, 26.508331, 80.230286),
(244, 'J', 'Oreo', 32, 26.508331, 80.230286),
(245, 'J', 'Dark Fantasy', 32, 26.508331, 80.230286),
(246, 'J', 'Fruit Juice(1 lt)', 110, 26.508331, 80.230286),
(247, 'J', 'Oats(200 gm)', 240, 26.508331, 80.230286),
(248, 'K', 'Soap', 30, 26.507080, 80.231232),
(249, 'K', 'Face Wash', 100, 26.507080, 80.231232),
(250, 'K', 'Body Wash', 140, 26.507080, 80.231232),
(251, 'K', 'Surf Excel Liquid', 130, 26.507080, 80.231232),
(252, 'K', 'Surf Excel Soap', 23, 26.507080, 80.231232),
(253, 'K', 'Powder', 120, 26.507080, 80.231232),
(254, 'K', 'Deodrant', 223, 26.507080, 80.231232),
(255, 'K', 'Hair oil', 160, 26.507080, 80.231232),
(256, 'K', 'Shaving Cream', 250, 26.507080, 80.231232),
(257, 'K', 'Razor', 110, 26.507080, 80.231232),
(258, 'K', 'After Shave', 290, 26.507080, 80.231232),
(259, 'K', 'Mosturizer', 150, 26.507080, 80.231232),
(260, 'K', 'Toothbrush', 60, 26.507080, 80.231232),
(261, 'K', 'Toothpaste', 45, 26.507080, 80.231232),
(262, 'K', 'Tongue cleaner', 12, 26.507080, 80.231232),
(263, 'K', 'Nailcutter', 45, 26.507080, 80.231232),
(264, 'K', 'Loofah', 40, 26.507080, 80.231232),
(265, 'K', 'Handwash', 200, 26.507080, 80.231232),
(266, 'K', 'Hair Dye', 250, 26.507080, 80.231232),
(267, 'K', 'Serum', 150, 26.507080, 80.231232),
(268, 'K', 'Face Cream', 220, 26.507080, 80.231232),
(269, 'L', 'Bucket', 125, 26.509670, 80.228935),
(270, 'L', 'Mug', 30, 26.509670, 80.228935),
(271, 'L', 'Plastic Bottle', 150, 26.509670, 80.228935),
(272, 'L', 'Metal Bottle', 650, 26.509670, 80.228935),
(273, 'L', 'Lunchbox', 350, 26.509670, 80.228935),
(274, 'L', 'Pencilbox', 80, 26.509670, 80.228935),
(275, 'L', 'Cosco ball', 40, 26.509670, 80.228935),
(276, 'L', 'Laptop Bag', 1100, 26.509670, 80.228935),
(277, 'L', 'Coffee Mug', 200, 26.509670, 80.228935),
(278, 'L', 'Volini', 45, 26.509670, 80.228935),
(279, 'L', 'Moov', 37, 26.509670, 80.228935),
(280, 'L', 'Itchguard', 24, 26.509670, 80.228935),
(281, 'L', 'Loofah', 55, 26.509670, 80.228935),
(282, 'L', 'Toothpick', 25, 26.509670, 80.228935),
(283, 'L', 'Dishwash', 110, 26.509670, 80.228935),
(284, 'L', 'Tissues', 25, 26.509670, 80.228935),
(285, 'L', 'Wet Wipes', 45, 26.509670, 80.228935),
(286, 'M', 'Toilet Paper', 35, 26.509670, 80.228935),
(287, 'M', 'Cashew(250 gm)', 420, 26.507360, 80.233467),
(288, 'M', 'Almonds(250 gm)', 220, 26.507360, 80.233467),
(289, 'M', 'pistachios(100 gm)', 190, 26.507360, 80.233467),
(290, 'M', 'Rasin(100 gm)', 140, 26.507360, 80.233467),
(291, 'M', 'Dates(1 kg)', 750, 26.507360, 80.233467),
(292, 'M', 'Nestle KitKat', 15, 26.507360, 80.233467),
(293, 'M', 'Cadbury 5 Star', 15, 26.507360, 80.233467),
(294, 'M', 'Cadbury Dairymilk', 25, 26.507360, 80.233467),
(295, 'M', 'Cadbury Dairymilk Silk', 65, 26.507360, 80.233467),
(296, 'M', 'Ferrero Rocher', 145, 26.507360, 80.233467),
(297, 'M', 'Mars', 45, 26.507360, 80.233467),
(298, 'M', 'Nestle Milky Bar', 25, 26.507360, 80.233467),
(299, 'M', 'Cadbury Munch', 15, 26.507360, 80.233467),
(300, 'M', 'Cadbury Perk', 6, 26.507360, 80.233467),
(301, 'M', 'Bournville', 45, 26.507360, 80.233467),
(302, 'M', 'Cadbury Temptations', 75, 26.507360, 80.233467),
(303, 'M', 'Tobelerone (150 gm)', 360, 26.507360, 80.233467),
(304, 'M', 'Chidwa', 30, 26.507360, 80.233467),
(305, 'M', 'Bhel', 42, 26.507360, 80.233467),
(306, 'N', 'Toothbrush', 25, 26.504744, 80.234612),
(307, 'N', 'Toothpaste', 30, 26.504744, 80.234612),
(308, 'N', 'Tongue cleaner', 15, 26.504744, 80.234612),
(309, 'N', 'Earbuds', 40, 26.504744, 80.234612),
(310, 'N', 'Nailcutter', 50, 26.504744, 80.234612),
(311, 'N', 'Comb', 100, 26.504744, 80.234612),
(312, 'N', 'Loofah', 50, 26.504744, 80.234612),
(313, 'N', 'Toothpick', 20, 26.504744, 80.234612),
(314, 'N', 'Comb', 170, 26.504744, 80.234612),
(315, 'N', 'Soap', 25, 26.504744, 80.234612),
(316, 'N', 'Face Wash', 105, 26.504744, 80.234612),
(317, 'N', 'Body Wash', 135, 26.504744, 80.234612),
(318, 'N', 'Surf Excel Liquid', 125, 26.504744, 80.234612),
(319, 'N', 'Surf Excel Soap', 25, 26.504744, 80.234612),
(320, 'N', 'Dishwash', 100, 26.504744, 80.234612),
(321, 'N', 'Tissues', 20, 26.504744, 80.234612),
(322, 'N', 'Wet Wipes', 50, 26.504744, 80.234612),
(323, 'N', 'Toilet Paper', 30, 26.504744, 80.234612),
(324, 'N', 'Powder', 125, 26.504744, 80.234612),
(325, 'N', 'Deodrant', 225, 26.504744, 80.234612),
(326, 'N', 'Hair oil', 155, 26.504744, 80.234612),
(327, 'N', 'Shaving Cream', 260, 26.504744, 80.234612),
(328, 'N', 'Razor', 105, 26.504744, 80.234612),
(329, 'N', 'After Shave', 300, 26.504744, 80.234612),
(330, 'N', 'Mosturizer', 165, 26.504744, 80.234612),
(331, 'N', 'Handwash', 220, 26.504744, 80.234612),
(332, 'N', 'Hair Dye', 300, 26.504744, 80.234612),
(333, 'N', 'Serum', 180, 26.504744, 80.234612),
(334, 'N', 'Face Cream', 250, 26.504744, 80.234612),
(335, 'O', 'Pencil', 4, 26.506485, 80.228645),
(336, 'O', 'Eraser', 2, 26.506485, 80.228645),
(337, 'O', 'Sharpner', 3, 26.506485, 80.228645),
(338, 'O', 'Geometry box', 225, 26.506485, 80.228645),
(339, 'O', 'Ball pen', 10, 26.506485, 80.228645),
(340, 'O', 'Gel pen', 15, 26.506485, 80.228645),
(341, 'O', 'Scale', 20, 26.506485, 80.228645),
(342, 'O', 'Ruler', 35, 26.506485, 80.228645),
(343, 'O', 'Glue', 25, 26.506485, 80.228645),
(344, 'O', 'Crayons', 70, 26.506485, 80.228645),
(345, 'O', 'Sparkle pens', 100, 26.506485, 80.228645),
(346, 'O', 'Notebook (200 page)', 25, 26.506485, 80.228645),
(347, 'O', 'Notebook (400 page)', 40, 26.506485, 80.228645),
(348, 'O', 'Drawing book', 85, 26.506485, 80.228645),
(349, 'O', 'Tape', 28, 26.506485, 80.228645),
(350, 'O', 'Sketch pen', 120, 26.506485, 80.228645),
(351, 'O', 'Rice(1 kg)', 185, 26.506485, 80.228645),
(352, 'O', 'Wheat Flour(5 kg)', 155, 26.506485, 80.228645),
(353, 'O', 'Butter(500 gm)', 232, 26.506485, 80.228645),
(354, 'O', 'Brown bread(200 gm)', 34, 26.506485, 80.228645),
(355, 'O', 'Fruit Juice(1 lt)', 100, 26.506485, 80.228645),
(356, 'O', 'Oats(200 gm)', 240, 26.506485, 80.228645),
(357, 'O', 'Eggs', 85, 26.506485, 80.228645),
(358, 'O', 'Milk', 29, 26.506485, 80.228645),
(359, 'O', 'Cheese', 85, 26.506485, 80.228645),
(360, 'P', 'Chips', 40, 26.504932, 80.228729),
(361, 'P', 'Khakhra(1kg)', 260, 26.504932, 80.228729),
(362, 'P', 'Chakli(1kg)', 410, 26.504932, 80.228729),
(363, 'P', 'Khatta Meetha(700gm)', 65, 26.504932, 80.228729),
(364, 'P', 'aloo bhujia(1 kg)', 190, 26.504932, 80.228729),
(365, 'P', 'Panchratan Mixture', 145, 26.504932, 80.228729),
(366, 'P', 'All In One', 155, 26.504932, 80.228729),
(367, 'P', 'punjabi tadka(150 gm)', 29, 26.504932, 80.228729),
(368, 'P', 'nimbu masala(150 gm)', 30, 26.504932, 80.228729),
(369, 'P', 'moong dal(1 kg)', 220, 26.504932, 80.228729),
(370, 'P', 'Chidwa', 25, 26.504932, 80.228729),
(371, 'P', 'Bhel', 40, 26.504932, 80.228729),
(372, 'P', 'Banana Chips(100 gm)', 20, 26.504932, 80.228729),
(373, 'P', 'Cashew(250 gm)', 430, 26.504932, 80.228729),
(374, 'P', 'Almonds(250 gm)', 219, 26.504932, 80.228729),
(375, 'P', 'pistachios(100 gm)', 185, 26.504932, 80.228729),
(376, 'P', 'Rasin(100 gm)', 130, 26.504932, 80.228729),
(377, 'P', 'Dates(1 kg)', 700, 26.504932, 80.228729),
(378, 'P', 'Nestle KitKat', 10, 26.504932, 80.228729),
(379, 'P', 'Cadbury 5 Star', 10, 26.504932, 80.228729),
(380, 'P', 'Cadbury Dairymilk', 20, 26.504932, 80.228729),
(381, 'P', 'Cadbury Dairymilk Silk', 60, 26.504932, 80.228729),
(382, 'P', 'Ferrero Rocher', 140, 26.504932, 80.228729),
(383, 'P', 'Mars', 40, 26.504932, 80.228729),
(384, 'P', 'Nestle Milky Bar', 20, 26.504932, 80.228729),
(385, 'P', 'Cadbury Munch', 10, 26.504932, 80.228729),
(386, 'P', 'Cadbury Perk', 5, 26.504932, 80.228729),
(387, 'P', 'Bournville', 40, 26.504932, 80.228729),
(388, 'P', 'Cadbury Temptations', 70, 26.504932, 80.228729),
(389, 'P', 'Tobelerone (150 gm)', 375, 26.504932, 80.228729);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
