-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-06-2021 a las 03:00:38
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numeros`
--

DROP TABLE IF EXISTS `numeros`;
CREATE TABLE IF NOT EXISTS `numeros` (
  `Numero` int(11) NOT NULL,
  `Nombre` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `numeros`
--

INSERT INTO `numeros` (`Numero`, `Nombre`) VALUES
(1, '1'),
(2, '2'),
(3, 'Fizz'),
(4, '4'),
(5, 'Buzz'),
(6, '2'),
(7, '2'),
(8, '2'),
(9, '2'),
(10, '2'),
(11, '2'),
(12, '2'),
(13, '2'),
(15, '2'),
(15, '2'),
(16, '2'),
(17, '2'),
(18, '2'),
(19, '2'),
(20, '2'),
(21, '2'),
(22, '2'),
(23, '2'),
(24, '2'),
(25, '2'),
(26, '2'),
(27, '2'),
(28, '2'),
(29, '2'),
(30, '2'),
(31, '2'),
(32, '2'),
(33, '2'),
(34, '2'),
(35, '2'),
(36, '2'),
(37, '2'),
(38, '2'),
(39, '2'),
(40, '2'),
(41, '2'),
(42, '2'),
(43, '2'),
(44, '2'),
(45, '2'),
(46, '2'),
(47, '2'),
(48, '2'),
(49, '2'),
(50, '2'),
(51, '2'),
(52, '2'),
(53, '2'),
(54, '2'),
(55, '2'),
(56, '2'),
(57, '2'),
(58, '2'),
(59, '2'),
(60, '2'),
(61, '2'),
(62, '2'),
(63, '2'),
(64, '2'),
(65, '2'),
(66, '2'),
(67, '2'),
(68, '2'),
(69, '2'),
(70, '2'),
(71, '2'),
(72, '2'),
(73, '2'),
(74, '2'),
(75, '2'),
(76, '2'),
(77, '2'),
(78, '2'),
(79, '2'),
(80, '2'),
(81, '2'),
(82, '2'),
(83, '2'),
(84, '2'),
(85, '2'),
(86, '2'),
(87, '2'),
(88, '2'),
(89, '2'),
(90, '2'),
(91, '2'),
(92, '2'),
(93, '2'),
(94, '2'),
(95, '2'),
(96, '2'),
(97, '2'),
(98, '2'),
(99, '2'),
(100, '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
