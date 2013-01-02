-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-11-2012 a las 23:55:11
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `zarkin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `garantias`
--

CREATE TABLE IF NOT EXISTS `garantias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave` int(7) NOT NULL,
  `modelo_mueble` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `composicion` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tienda` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `pais_t` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `estado_t` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad_t` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_compra` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `forma_entrega` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_cliente` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `a_paterno` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `a_materno` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `pais_c` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `estado_c` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad_c` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `cp` int(5) NOT NULL,
  `tel` int(10) NOT NULL,
  `correo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `estado_civil` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `estudios` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `profesion` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `personas` int(2) NOT NULL,
  `ninos` int(2) NOT NULL,
  `ingresos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `destino` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `factor_compra` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `factor_tienda` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `conocio_producto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `forma_pago` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `gama` int(1) NOT NULL,
  `informacion` int(1) NOT NULL,
  `trato` int(1) NOT NULL,
  `entrega` int(1) NOT NULL,
  `profesionalidad` int(1) NOT NULL,
  `calidad` int(1) NOT NULL,
  `calidad_precio` int(1) NOT NULL,
  `sugerencia` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=84 ;

--
-- Volcado de datos para la tabla `garantias`
--

INSERT INTO `garantias` (`id`, `clave`, `modelo_mueble`, `composicion`, `color`, `tienda`, `pais_t`, `estado_t`, `ciudad_t`, `fecha_compra`, `fecha_entrega`, `forma_entrega`, `nombre_cliente`, `a_paterno`, `a_materno`, `fecha_nacimiento`, `sexo`, `direccion`, `pais_c`, `estado_c`, `ciudad_c`, `cp`, `tel`, `correo`, `estado_civil`, `estudios`, `profesion`, `personas`, `ninos`, `ingresos`, `destino`, `factor_compra`, `factor_tienda`, `conocio_producto`, `forma_pago`, `gama`, `informacion`, `trato`, `entrega`, `profesionalidad`, `calidad`, `calidad_precio`, `sugerencia`, `fecha_registro`) VALUES
(1, 0, '', '', '[value-5]', '[value-6]', '[value-7]', '[value-8]', '[value-9]', '0000-00-00', '0000-00-00', '[value-12]', '[value-13]', '[value-14]', '[value-15]', '0000-00-00', '', '[value-17]', '[value-18]', '[value-19]', '[value-20]', 0, 0, '[value-23]', '[value-24]', '[value-25]', '[value-26]', 0, 0, '', '[value-29]', '[value-30]', '[value-31]', '[value-32]', '[value-33]', 0, 0, 0, 0, 0, 0, 0, '[value-41]', '2012-11-13 06:00:00'),
(2, 12451243, 'qe', 'dksjdhfhd', 'sdfdfg', 'dfgfdg', 'dfgsdf', 'sfdgfg', 'dfgsdfg', '2012-11-13', '2012-11-20', 'La entrega y el', 'dfgsdfg', 'sdfgsdfg', 'dfgsdfg', '2012-11-13', '', 'sfgsfdg', 'sdfgfg', 'sdfgfsdg', 'sdfgsfg', 45000, 0, 'jlpr51@gmail.com', 'Soltero/a', '', 'sdfg', 1, 1, '', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(3, 12451243, 'qe', 'dksjdhfhd', 'sdfdfg', 'dfgfdg', 'dfgsdf', 'sfdgfg', 'dfgsdfg', '2012-11-13', '2012-11-20', 'La entrega y el', 'dfgsdfg', 'sdfgsdfg', 'dfgsdfg', '2012-11-13', '', 'sfgsfdg', 'sdfgfg', 'sdfgfsdg', 'sdfgsfg', 45000, 0, 'jlpr51@gmail.com', 'Soltero/a', '', 'sdfg', 1, 1, '', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(4, 1234567890, 'pionini', 'loquesea', 'chocolate', 'tutto pelle', 'México', 'Jalisco', 'Guadalajara', '2012-11-14', '2012-11-14', 'Lo he recogido ', 'Jorge', 'Rojas', 'Perez', '2012-11-21', '1', 'Blvd. Beethoven #5035', 'MÃ©xico', 'Jalisco', 'Zapopan', 45000, 2147483647, 'ejemplo@domino.com', 'Soltero/a', '', 'programador web', 2, 0, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 1, 2, 1, 2, 3, 1, 2, '3', '0000-00-00 00:00:00'),
(5, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(6, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(7, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(8, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(9, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(10, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(11, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(12, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(13, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(14, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(15, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(16, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(17, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(18, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(19, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(20, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(21, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(22, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(23, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(24, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(25, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(26, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(27, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(28, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(29, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(30, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(31, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(32, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(33, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(34, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(35, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(36, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(37, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(38, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(39, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(40, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(41, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(42, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(43, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(44, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(45, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(46, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(47, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(48, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(49, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(50, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(51, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(52, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(53, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(54, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(55, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(56, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(57, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(58, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(59, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(60, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(61, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(62, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(63, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(64, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(65, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(66, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(67, 0, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '0000-00-00', '', '', '', '', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00'),
(68, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(69, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(70, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(71, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(72, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(73, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(74, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(75, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(76, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(77, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(78, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(79, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(80, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(81, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(82, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00'),
(83, 1234567890, 'MÃ©xico', 'Sinaloa', 'MazatlÃ¡n', 'Jorge Luis PÃ©r', 'MÃ©xico', 'Jalisco', 'Zapopan', '2012-11-15', '2012-11-15', 'La entrega y el', 'jorge', 'rojas', '', '2012-11-22', 'Masculino', 'Blvd. Beethoven #5035', 'mexico', 'jalisco', 'gua', 45000, 12, 'jolhe51@hotmail.com', 'Soltero/a', '', 'web', 1, 1, '<$25,000', 'Publicidad', '', '', 'Publicidad', 'Efectivo', 2, 2, 2, 2, 2, 2, 2, '2', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
