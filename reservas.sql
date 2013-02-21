-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-02-2013 a las 21:26:34
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `reservas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia`
--

CREATE TABLE IF NOT EXISTS `dia` (
  `dia_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `dia_nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`dia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `dia`
--

INSERT INTO `dia` (`dia_id`, `dia_nombre`) VALUES
(1, 'Lunes'),
(2, 'Martes'),
(3, 'Miercoles'),
(4, 'Jueves'),
(5, 'Viernes'),
(6, 'Sabado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia_intervalo_profesional`
--

CREATE TABLE IF NOT EXISTS `dia_intervalo_profesional` (
  `dia_intervalo_profesional_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `intervalo_id` int(11) DEFAULT NULL,
  `dia_id` tinyint(4) DEFAULT NULL,
  `profesional_id` bigint(20) DEFAULT NULL,
  `sucursal_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`dia_intervalo_profesional_id`),
  KEY `fk_dia_intervalo_profesional_intervalo_intervalo_id` (`intervalo_id`),
  KEY `fk_dia_intervalo_profesional_dia_dia_id` (`dia_id`),
  KEY `fk_dia_intervalo_profesional_profesional_profesional_id` (`profesional_id`),
  KEY `fk_dia_int_pro_sucursal_sucursal_id` (`sucursal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `dia_intervalo_profesional`
--

INSERT INTO `dia_intervalo_profesional` (`dia_intervalo_profesional_id`, `intervalo_id`, `dia_id`, `profesional_id`, `sucursal_id`) VALUES
(11, 1, 1, 1, 1),
(12, 1, 2, 1, 1),
(13, 2, 1, 1, 1),
(14, 3, 1, 1, 1),
(15, 4, 1, 1, 1),
(16, 5, 1, 1, 1),
(17, 6, 1, 1, 1),
(18, 7, 1, 1, 1),
(19, 8, 1, 1, 1),
(20, 1, 1, 2, 1),
(22, 1, 5, 1, 2),
(23, 18, 4, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE IF NOT EXISTS `especialidad` (
  `especialidad_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `especialidad_nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `especialidad_descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`especialidad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`especialidad_id`, `especialidad_nombre`, `especialidad_descripcion`) VALUES
(1, 'Especialidad 1', ''),
(2, 'Especialidad 2', ''),
(3, ' Especialidad 3', ''),
(4, 'Especialidad 4', ''),
(5, 'Especialidad 5', ''),
(6, 'Especialidad 6', ''),
(7, 'Especialidad 10', ''),
(8, 'Especialidad 11', ''),
(9, 'Especialidad 9', ''),
(10, 'Especialidad 7', ''),
(11, 'Especialidad 8', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `intervalo`
--

CREATE TABLE IF NOT EXISTS `intervalo` (
  `intervalo_id` int(11) NOT NULL AUTO_INCREMENT,
  `intervalo_inicio` time DEFAULT NULL,
  `intervalo_termino` time DEFAULT NULL,
  PRIMARY KEY (`intervalo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `intervalo`
--

INSERT INTO `intervalo` (`intervalo_id`, `intervalo_inicio`, `intervalo_termino`) VALUES
(1, '09:00:00', '09:30:00'),
(2, '09:30:00', '10:00:00'),
(3, '10:00:00', '10:30:00'),
(4, '10:30:00', '11:00:00'),
(5, '11:00:00', '11:30:00'),
(6, '11:30:00', '12:00:00'),
(7, '12:00:00', '12:30:00'),
(8, '12:30:00', '13:00:00'),
(9, '14:00:00', '14:30:00'),
(10, '14:30:00', '15:00:00'),
(11, '15:00:00', '15:30:00'),
(12, '15:30:00', '16:00:00'),
(13, '16:30:00', '17:00:00'),
(14, '17:00:00', '17:30:00'),
(15, '17:30:00', '18:00:00'),
(16, '18:00:00', '18:30:00'),
(17, '18:30:00', '19:00:00'),
(18, '19:00:00', '19:30:00'),
(19, '19:30:00', '20:00:00'),
(20, '20:00:00', '20:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesional`
--

CREATE TABLE IF NOT EXISTS `profesional` (
  `profesional_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `profesional_rut` int(11) DEFAULT NULL,
  `profesional_dv` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `profesional_nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `profesional_apellido_paterno` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `profesional_apellido_materno` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `profesional_email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `profesional_password` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`profesional_id`),
  UNIQUE KEY `uq_profesional_rut` (`profesional_rut`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `profesional`
--

INSERT INTO `profesional` (`profesional_id`, `profesional_rut`, `profesional_dv`, `profesional_nombre`, `profesional_apellido_paterno`, `profesional_apellido_materno`, `profesional_email`, `profesional_password`) VALUES
(1, 16210826, '3', 'Oscar', 'Cárdenas', 'Albornoz', 'cardenas1108@gmail.com', 'martincr8263'),
(2, 1111111111, '1', 'Luis', 'Candia', 'Muñoz', 'cardenas1108@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesional_especialidad`
--

CREATE TABLE IF NOT EXISTS `profesional_especialidad` (
  `profesional_especialidad_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `profesional_id` bigint(20) DEFAULT NULL,
  `especialidad_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`profesional_especialidad_id`),
  KEY `fk_profesional_especialidad_profesional_id` (`profesional_id`),
  KEY `fk_profesional_especialidad_especialidad_id` (`especialidad_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `profesional_especialidad`
--

INSERT INTO `profesional_especialidad` (`profesional_especialidad_id`, `profesional_id`, `especialidad_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `reserva_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `reserva_fecha` date DEFAULT NULL,
  `dia_intervalo_profesional_id` bigint(20) DEFAULT NULL,
  `usuario_id` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`reserva_id`),
  KEY `fk_reserva_di_int_pro_di_int_pro_id` (`dia_intervalo_profesional_id`),
  KEY `fk_reserva_usuario_usuario_id` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE IF NOT EXISTS `sucursal` (
  `sucursal_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `sucursal_nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`sucursal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`sucursal_id`, `sucursal_nombre`) VALUES
(1, 'Sucursal 1'),
(2, 'Sucursal 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `usuario_rut` int(11) DEFAULT NULL,
  `usuario_dv` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_ape_paterno` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_ape_materno` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_password` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`usuario_id`),
  UNIQUE KEY `uq_usuario_rut` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario_rut`, `usuario_dv`, `usuario_nombre`, `usuario_ape_paterno`, `usuario_ape_materno`, `usuario_email`, `usuario_password`) VALUES
(1, 16210826, '3', 'Oscar', 'Cárdenas', 'Albornoz', 'cardenas1108@gmail.com', 'martincr8263');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dia_intervalo_profesional`
--
ALTER TABLE `dia_intervalo_profesional`
  ADD CONSTRAINT `fk_dia_intervalo_profesional_dia_dia_id` FOREIGN KEY (`dia_id`) REFERENCES `dia` (`dia_id`),
  ADD CONSTRAINT `fk_dia_intervalo_profesional_intervalo_intervalo_id` FOREIGN KEY (`intervalo_id`) REFERENCES `intervalo` (`intervalo_id`),
  ADD CONSTRAINT `fk_dia_intervalo_profesional_profesional_profesional_id` FOREIGN KEY (`profesional_id`) REFERENCES `profesional` (`profesional_id`),
  ADD CONSTRAINT `fk_dia_int_pro_sucursal_sucursal_id` FOREIGN KEY (`sucursal_id`) REFERENCES `sucursal` (`sucursal_id`);

--
-- Filtros para la tabla `profesional_especialidad`
--
ALTER TABLE `profesional_especialidad`
  ADD CONSTRAINT `fk_profesional_especialidad_especialidad_id` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidad` (`especialidad_id`),
  ADD CONSTRAINT `fk_profesional_especialidad_profesional_id` FOREIGN KEY (`profesional_id`) REFERENCES `profesional` (`profesional_id`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `fk_reserva_di_int_pro_di_int_pro_id` FOREIGN KEY (`dia_intervalo_profesional_id`) REFERENCES `dia_intervalo_profesional` (`dia_intervalo_profesional_id`),
  ADD CONSTRAINT `fk_reserva_usuario_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
