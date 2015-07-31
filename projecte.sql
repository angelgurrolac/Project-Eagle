-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-07-2015 a las 18:21:28
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `projecte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadrante`
--

CREATE TABLE IF NOT EXISTS `cuadrante` (
  `cuadrante_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(10000) NOT NULL,
  `latitud` varchar(50) NOT NULL,
  `longitud` varchar(50) NOT NULL,
  `no_trabajadores` int(11) NOT NULL,
  PRIMARY KEY (`cuadrante_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cuadrante`
--

INSERT INTO `cuadrante` (`cuadrante_id`, `descripcion`, `latitud`, `longitud`, `no_trabajadores`) VALUES
(1, 'DESCRIPCIÓN DEL CUADRANTE ', ' 35° 43'' 9"', ' 32° 42'' 3"', 4),
(2, 'Descripcion del cuadrante del dron', '78° 43'' 9" ', '46° 42'' 3"', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnosticos`
--

CREATE TABLE IF NOT EXISTS `diagnosticos` (
  `id_diagnostico` int(11) NOT NULL AUTO_INCREMENT,
  `id_reporte` int(11) NOT NULL,
  `sintomas` varchar(500) NOT NULL,
  `observaciones` varchar(600) NOT NULL,
  `oxigeno_sangre` varchar(100) NOT NULL,
  `pulsaciones` varchar(50) NOT NULL,
  `respiracion` varchar(50) NOT NULL,
  PRIMARY KEY (`id_diagnostico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `diagnosticos`
--

INSERT INTO `diagnosticos` (`id_diagnostico`, `id_reporte`, `sintomas`, `observaciones`, `oxigeno_sangre`, `pulsaciones`, `respiracion`) VALUES
(1, 2, 'insolacion ', 'El paciente sufre de insolacion ', '34', '245', 'Acelerada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dron`
--

CREATE TABLE IF NOT EXISTS `dron` (
  `id_dron` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(100) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_dron`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `dron`
--

INSERT INTO `dron` (`id_dron`, `modelo`, `marca`, `estatus`) VALUES
(1, 'Beebop Drone', 'pierrot', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE IF NOT EXISTS `reporte` (
  `id_reporte` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `titular_minero` varchar(200) DEFAULT NULL,
  `concesion` varchar(100) DEFAULT NULL,
  `no_victimas` int(11) DEFAULT NULL,
  `victima_nombre` varchar(200) DEFAULT NULL,
  `empresa` varchar(300) DEFAULT NULL,
  `tipo_empresa` varchar(100) DEFAULT NULL,
  `tipo_id` int(11) NOT NULL,
  PRIMARY KEY (`id_reporte`),
  UNIQUE KEY `victima_nombre` (`victima_nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`id_reporte`, `fecha`, `titular_minero`, `concesion`, `no_victimas`, `victima_nombre`, `empresa`, `tipo_empresa`, `tipo_id`) VALUES
(1, '2015-01-01', 'COMPA', 'AMERICANA', 1, 'ATAMARI MAMANI, FROILAN', 'MINERA RIO CAUDALOSO Y SERVICIOS COMPLEMENTARIOS', 'Contratista Minero', 2),
(2, '2015-01-15', 'EMPRESA ADMINISTRADORA CHUNGAR S.A.C.', 'ANIMON', 1, 'GILIAN SILVA, NELZON', 'EMPRESA MINERA CONSTRUCTORA ASUNTOS AMBIENTALES Y TRANSPORTE HUAYLLAY SOCIEDAD AN', 'Empresas Conexas', 1),
(3, '2015-01-21', 'COMPA', 'BREAPAMPA', 1, 'PALOMINO  CAJAHUAMAN, LUIS', 'D.C.R. MINERIA Y CONSTRUCCION S.A.C.', 'Contratista Minero', 3),
(4, '2015-01-27', 'MINERA CHINALCO PER', 'TOROMOCHO', 1, 'LOPEZ SEGUIL, JOHNNY', 'TRANSPORTES CRUZ DEL SUR S.A.C.', 'Empresas Conexas', 4),
(5, '2015-01-31', 'SOCIEDAD MINERA CERRO VERDE S.A.A.', 'CERRO VERDE 1,2,3', 1, 'TOERRES RUIZ, ROLAN ALVARO', 'GYM S.A.', 'Empresas Conexas', 3),
(6, '2015-02-04', 'CONSORCIO MINERO HORIZONTE S.A.', 'ACUMULACION PARCOY N', 1, 'CASO LOPEZ, HECTOR', 'SERVICIOS MINEROS GLORIA S.A.C.', 'Contratista Minero', 2),
(7, '2015-02-06', 'CATALINA HUANCA SOCIEDAD MINERA S.A.C.', 'CATALINA HUANCA', 1, 'SANCHEZ  JULCANI, ROGELIO', 'CORPORACION VILLAR INGENIEROS S.A.C.', 'Contratista Minero', 1),
(8, '2015-03-12', 'SOCIEDAD MINERA CORONA S.A.', 'ACUMULACION YAURICOCHA', 1, 'INDERIQUE HUAYNALAYA, ASCENCION', 'OPERACIONES MINERAS Y CIVILES JUNIOR EIRL', 'Contratista Minero', 1),
(9, '2015-03-13', 'COMPA', 'SAN VICENTE', 1, 'TELLO HURTADO, RAUL CARLOS', 'COMPA', 'Titular Minero', 1),
(10, '2015-03-15', 'COMPA', 'LA PODEROSA DE TRUJILLO', 1, 'RODR', 'COMPA', 'Titular Minero', 2),
(11, '2015-03-17', 'SOCIEDAD MINERA BAYA S.A.C.', 'EL RINCON PROHIBIDO', 1, 'BARRIOS MERCEDES, OSCAR', 'SOCIEDAD MINERA BAYA S.A.C.', 'Titular Minero', 3),
(12, '2015-03-24', 'DOE RUN PERU S.R.L. EN LIQUIDACION EN MARCHA', 'COBRIZA 1126', 1, 'CANO RIVERO, ABRAHAM NEHEMIAS', 'DOE RUN PERU S.R.L. EN LIQUIDACION EN MARCHA', 'Titular Minero', 4),
(13, '2015-04-26', 'SOCIEDAD MINERA CORONA S.A.', 'ACUMULACION YAURICOCHA', 1, 'HUARINGA PONCE, JHOEL CARLOS', 'ALFA INGENIERIA SUBTERRANEA S.R.L.', 'Contratista Minero', 4),
(14, '2015-04-27', 'OBRAS CIVILES Y MINERAS S.A.C.', 'DIVISION OYON 1', 1, 'QUINCHO QUISPE, JULIO CESAR', 'OBRAS CIVILES Y MINERAS S.A.C.', 'Titular Minero', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_dron`
--

CREATE TABLE IF NOT EXISTS `reporte_dron` (
  `id_dron` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `Modelo` varchar(300) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `cuadrante_id` int(11) NOT NULL,
  `tiempo_vuelo` int(11) NOT NULL,
  `distancia_recorrida` int(11) NOT NULL,
  `nivel_bateria` int(11) NOT NULL,
  PRIMARY KEY (`id_dron`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `reporte_dron`
--

INSERT INTO `reporte_dron` (`id_dron`, `fecha`, `Modelo`, `tipo_id`, `cuadrante_id`, `tiempo_vuelo`, `distancia_recorrida`, `nivel_bateria`) VALUES
(1, '2015-07-15', '', 1, 2, 30, 1800, 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos`
--

CREATE TABLE IF NOT EXISTS `tipos` (
  `tipo_id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`tipo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipos`
--

INSERT INTO `tipos` (`tipo_id`, `descripcion`) VALUES
(1, 'TRÁNSITO'),
(2, 'CAÍDAS DE PERSONAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuarios` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `tipo_usuario` varchar(14) NOT NULL,
  PRIMARY KEY (`id_usuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `usuario`, `contrasena`, `tipo_usuario`) VALUES
(1, 'zayra@h.com', '12345678', 'admin'),
(4, 'd@h.com', '123', ''),
(5, 'zayra@h.com', '123', 'paramedico'),
(6, 'edith@hotmail.com', '123456', 'paramedico'),
(7, 'edith@hotmail.com', '123456', 'paramedico'),
(8, 'edith@hotmail.com', '123456', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
