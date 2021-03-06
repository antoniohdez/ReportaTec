-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-12-2013 a las 04:20:00
-- Versión del servidor: 5.1.44
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `reportaTec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `nomina` varchar(9) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidoP` varchar(20) NOT NULL,
  `apellidoM` varchar(20) NOT NULL,
  `departamento` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`nomina`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `Admin`
--

INSERT INTO `Admin` (`nomina`, `nombre`, `apellidoP`, `apellidoM`, `departamento`, `password`) VALUES
('L01224787', 'Antonio', 'Hernández', 'Campos', 'Informática', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reporte`
--

CREATE TABLE IF NOT EXISTS `Reporte` (
  `matriculaFK` varchar(9) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) NOT NULL,
  `descripcion` varchar(140) NOT NULL,
  `estadoReporte` varchar(15) NOT NULL,
  `departamento` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `Reporte`
--

INSERT INTO `Reporte` (`matriculaFK`, `id`, `titulo`, `descripcion`, `estadoReporte`, `departamento`) VALUES
('A01224787', 1, 'Impresora sin papel', 'La impresora entre el edificio 1 y 2 no tiene papel', 'En revisión', 'Informática'),
('A01224787', 3, 'Silla rota', 'Silla rota en el salon 1234', 'Confirmado', 'Planta física'),
('A01224787', 4, 'Fuga de agua', 'Fuga de agua en baños de biblioteca.', 'Resuelto', ''),
('A01224787', 5, 'Ventana rota', 'Hay una ventana rota en el edificio de ingeniería civil', 'En revisión', ''),
('A01234567', 6, 'Bici sin cadena', 'Cerca de arquitectura hay un bicicleta sin cadena', 'Resuelto', ''),
('A01224787', 7, 'Sistema de reportes', 'Prueba de sistema de reportes', 'Resuelto', 'Informática'),
('A01224787', 9, 'Prueba 2', 'Prueba de reporte 2', 'Confirmado', 'No asignado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `matricula` varchar(9) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidoP` varchar(20) NOT NULL,
  `apellidoM` varchar(20) NOT NULL,
  `karma` float NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`matricula`, `nombre`, `apellidoP`, `apellidoM`, `karma`, `password`) VALUES
('A01224787', 'Antonio', 'Hernández', 'Campos', 4.5, 'e10adc3949ba59abbe56e057f20f883e'),
('A01234567', 'Juan', 'Perez', '', 3, 'e10adc3949ba59abbe56e057f20f883e');
