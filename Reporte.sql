-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-12-2013 a las 00:51:23
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
('A01224787', 7, 'Sistema de reportes', 'Prueba de sistema de reportes', 'En revisión', 'Informática'),
('A01224787', 9, 'Prueba 2', 'Prueba de reporte 2', 'En revisión', 'No asignado');
