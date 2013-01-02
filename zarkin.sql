-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2012 at 03:52 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zarkin`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`) VALUES
(1, 'casual'),
(2, 'contemporaneo'),
(3, 'transicional'),
(4, 'hi-tek'),
(5, 'american-style'),
(6, 'clasico'),
(7, 'complementos'),
(8, 'recamaras'),
(9, 'relax'),
(10, 'mesas'),
(11, 'masaje'),
(12, 'expo');

-- --------------------------------------------------------

--
-- Table structure for table `imagenes`
--

CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruta` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `modelo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=93 ;

--
-- Dumping data for table `imagenes`
--

INSERT INTO `imagenes` (`id`, `ruta`, `modelo_id`) VALUES
(1, 'parte1/bianca.jpg', 1),
(2, 'parte1/petrozzian.jpg', 2),
(3, 'parte1/pionini.jpg', 3),
(4, 'parte1/yoanizz.jpg', 4),
(5, 'parte1/praga.jpg', 5),
(6, 'parte1/praga2.jpg', 5),
(7, 'parte1/fratelli.jpg', 6),
(8, 'parte1/fratelli2.jpg', 6),
(9, 'parte1/fratelli3.jpg', 6),
(10, 'parte1/fratelli4.jpg', 6),
(11, 'parte1/kazzparov.jpg', 7),
(12, 'parte1/kazzparov2.jpg', 7),
(13, 'parte1/sensazzione.jpg', 8),
(14, 'parte1/zampa.jpg', 9),
(15, 'parte1/zampa2.jpg', 9),
(16, 'parte1/zitron.jpg', 10),
(17, 'parte1/zitron2.jpg', 10),
(18, 'parte1/capellini.jpg', 11),
(19, 'parte1/kuzkuz.jpg', 12),
(20, 'parte1/kuzkuz2.jpg', 12),
(21, 'parte1/ottay.jpg', 13),
(22, 'parte1/pionini.jpg', 14),
(23, 'parte1/pionini2.jpg', 14),
(24, 'parte1/pionini3.jpg', 14),
(25, 'parte1/yoann.jpg', 15),
(26, 'parte1/efezze.jpg', 16),
(27, 'parte1/pentax.jpg', 17),
(28, 'parte1/pizzutti.jpg', 18),
(29, 'parte1/pizzutti2.jpg', 18),
(30, 'parte1/luzzi.jpg', 19),
(31, 'parte1/zhell.jpg', 20),
(32, 'parte1/picture38.jpg', 21),
(33, 'parte1/zk004.jpg', 22),
(34, '2008_01.jpg', 23),
(35, '2008_02.jpg', 23),
(36, '2008_03.jpg', 23),
(37, '2008_04.jpg', 23),
(38, '2008_05.jpg', 23),
(40, '2009_01.jpg', 24),
(41, '2009_02.jpg', 24),
(42, '2009_03.jpg', 24),
(43, '2009_04.jpg', 24),
(45, '2010_01.jpg', 25),
(46, '2010_02.jpg', 25),
(47, '2010_03.jpg', 25),
(48, '2010_04.jpg', 25),
(49, '2010_05.jpg', 25),
(50, '2010_06.jpg', 25),
(51, '2010_07.jpg', 25),
(52, '2010_08.jpg', 25),
(53, '2010_09.jpg', 25),
(54, '2010_06.jpg', 25),
(55, '2010_07.jpg', 25),
(56, '2010_08.jpg', 25),
(57, '2010_09.jpg', 25),
(58, '2011_01.jpg', 26),
(59, '2011_02.jpg', 26),
(60, '2011_03.jpg', 26),
(61, '2011_04.jpg', 26),
(62, '2012_01.jpg', 27),
(63, '2012_02.jpg', 27),
(64, '2012_03.jpg', 27),
(65, '2012_04.jpg', 27),
(66, '2012_05.jpg', 27),
(67, '2012_06.jpg', 27),
(68, '2012_07.jpg', 27),
(69, '2012_08.jpg', 27),
(70, '2012_09.jpg', 27),
(71, '2011_05.jpg', 26),
(72, 'parte1/luzziano.jpg', 28),
(73, 'parte1/turazz.jpg', 29),
(74, 'parte1/turazz2.jpg', 29),
(75, 'parte1/diamantti.jpg', 30),
(76, 'parte1/piero.jpg', 31),
(77, 'parte1/piero2.jpg', 31),
(78, 'parte1/brava.jpg', 32),
(79, 'parte1/emozzione.jpg', 33),
(80, 'parte1/ezztel.jpg', 34),
(81, 'parte1/columb.jpg', 39),
(82, 'parte1/vacanzza.jpg', 35),
(83, 'parte1/davichon.jpg', 36),
(84, 'parte1/klutt.jpg', 37),
(85, 'parte1/luka.jpg', 38),
(86, 'parte1/luka2.jpg', 38),
(87, 'parte1/ego.jpg', 40),
(88, 'parte1/orzza.jpg', 41),
(89, 'parte1/orzza2.jpg', 41),
(90, 'parte1/moretti.jpg', 42),
(91, 'parte1/plush.jpg', 43),
(92, 'parte1/kafka.jpg', 44);

-- --------------------------------------------------------

--
-- Table structure for table `modelos`
--

CREATE TABLE IF NOT EXISTS `modelos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `categoria_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `modelos`
--

INSERT INTO `modelos` (`id`, `nombre`, `categoria_id`) VALUES
(1, 'bianca', 1),
(2, 'petrozzian', 1),
(3, 'pionini', 1),
(4, 'yoanizz', 1),
(5, 'praga', 2),
(6, 'fratelli', 4),
(7, 'kazzparov', 4),
(8, 'sensazzione', 4),
(9, 'zampa', 4),
(10, 'zitron', 4),
(11, 'capellini', 6),
(12, 'kuzkuz', 7),
(13, 'ottay', 7),
(14, 'pionini_complemento', 7),
(15, 'yoann', 7),
(16, 'efezze', 9),
(17, 'pentax', 9),
(18, 'pizzutti', 9),
(19, 'luzzi', 10),
(20, 'zhell', 10),
(21, 'picture38', 11),
(22, 'zk004', 11),
(23, 'expo-2008', 12),
(24, 'expo-2009', 12),
(25, 'expo-2010', 12),
(26, 'expo-2011', 12),
(27, 'expo-2012', 12),
(28, 'luzziano', 1),
(29, 'turazz', 1),
(30, 'diamantti', 2),
(31, 'piero', 2),
(32, 'brava', 4),
(33, 'emozzione', 4),
(34, 'ezztel', 4),
(35, 'vacanzza', 5),
(36, 'davichon', 7),
(37, 'klutt', 7),
(38, 'luka', 7),
(39, 'columb', 5),
(40, 'ego', 8),
(41, 'orzza', 8),
(42, 'moretti', 9),
(43, 'plush', 9),
(44, 'kafka', 3);
