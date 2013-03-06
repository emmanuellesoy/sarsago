-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-03-2013 a las 16:45:08
-- Versión del servidor: 5.5.20
-- Versión de PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sarsago_amij`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistentes`
--

CREATE TABLE IF NOT EXISTS `asistentes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `apellidos` varchar(90) COLLATE latin1_spanish_ci NOT NULL,
  `presente` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Por definición se dice que no hay asistentes prsentes.\\n\\n0 para falta\\n\\n1 para presente',
  `resgistrado_dia` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Por definición se dice que un usuario fue preregistrado\\n\\n0 para los preregistrados\\n\\n1 para los registrados el dia del evento',
  `sexo` tinyint(1) DEFAULT NULL COMMENT '0 para hombre, 1 para mujer',
  `estado` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'Estado de residencia',
  `ciudad` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'Ciudad de residencia',
  `email` varchar(60) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `celular` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL,
  `oij` char(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `adscripcion` varchar(60) COLLATE latin1_spanish_ci DEFAULT NULL,
  `cargo` varchar(60) COLLATE latin1_spanish_ci DEFAULT NULL,
  `nacimiento` year(4) DEFAULT NULL,
  `identificacion` varchar(60) COLLATE latin1_spanish_ci DEFAULT NULL,
  `vip` int(2) NOT NULL COMMENT 'Usuario VIP =1 normal = 0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `asistentes_id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Esta es la unica tabla que se penso para la base de datos del SARSAGO en su versión NIRVANA' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
