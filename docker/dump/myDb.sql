-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2019 a las 04:24:06
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `speakeasy`
--
CREATE DATABASE IF NOT EXISTS speakeasy; USE speakeasy;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pick`
--

CREATE TABLE IF NOT EXISTS `pick` (
  `fecha` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `n_pedido` varchar(50) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  `operario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pick`
--

INSERT INTO `pick` (`fecha`, `ubicacion`, `n_pedido`, `producto`, `cantidad`, `operario`) VALUES
('2018-12-11 01:33:09', 'a0803', '562', '1826LZX0WVP9', '14', '001'),
('2018-12-11 01:34:23', 'a0803', '562', '1826LZX0WVP9', '14', '001'),
('2018-12-11 04:36:42', 'a0803', '562', '1826LZX0WVP9', '14', '001'),
('2018-12-11 04:37:17', 'a0803', '562', '1826LZX0WVP9', '14', '001'),
('2018-12-12 06:27:51', 'a0803', '562', '1826LZX0WVP9', '14', '001'),
('2018-12-12 07:13:28', 'a0803', '562', '1826LZX0WVP9', '14', '001'),
('2018-12-12 07:16:18', 'a0803', '562', '1826LZX0WVP9', '14', '001'),
('2019-02-15 01:49:44', 'a0803', '562', '1826LZX0WVP9', '', '001'),
('2019-02-15 01:55:44', 'a0803', '562', '1826LZX0WVP9', '', '001'),
('2019-02-15 02:07:08', 'a0803', '562', '1826LZX0WVP9', '14', '001');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE IF NOT EXISTS `ubicaciones` (
  `ubicacion` varchar(30) NOT NULL,
  `pedido` varchar(12) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `cantidad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubicaciones`
--

INSERT INTO `ubicaciones` (`ubicacion`, `pedido`, `producto`, `cantidad`) VALUES
('a0803', '562', '1826LZX0WVP9', '14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
