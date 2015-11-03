-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2015 a las 17:21:02
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
  `estado` tinyint(11) NOT NULL,
  PRIMARY KEY (`cuadrante_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cuadrante`
--

INSERT INTO `cuadrante` (`cuadrante_id`, `descripcion`, `latitud`, `longitud`, `no_trabajadores`, `estado`) VALUES
(1, 'DESCRIPCIÓN DEL CUADRANTE ', ' 35° 43'' 9"', ' 32° 42'' 3"', 4, 1),
(2, 'Descripcion del cuadrante del dron', '78° 43'' 9" ', '46° 42'' 3"', 9, 1),
(3, '989', '873498', '8989', 989, 1),
(4, '982', '092', '0902', 982, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnosticos`
--

CREATE TABLE IF NOT EXISTS `diagnosticos` (
  `id_diagnostico` int(11) NOT NULL AUTO_INCREMENT,
  `sintomas` varchar(500) NOT NULL,
  `observaciones` varchar(600) NOT NULL,
  `oxigeno_sangre` varchar(100) NOT NULL,
  `pulsaciones` varchar(50) NOT NULL,
  `respiracion` varchar(50) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `video` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `nombre_victima` varchar(100) NOT NULL,
  `ap_paterno_victima` varchar(50) NOT NULL,
  `ap_materno_victima` varchar(50) NOT NULL,
  `id_reporte` int(11) NOT NULL,
  `tipo_accidente_id` int(11) NOT NULL,
  `fallecio` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_diagnostico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `diagnosticos`
--

INSERT INTO `diagnosticos` (`id_diagnostico`, `sintomas`, `observaciones`, `oxigeno_sangre`, `pulsaciones`, `respiracion`, `imagen`, `video`, `fecha`, `nombre_victima`, `ap_paterno_victima`, `ap_materno_victima`, `id_reporte`, `tipo_accidente_id`, `fallecio`) VALUES
(1, '2', 'insolacion ', 'El paciente sufre de insolacion ', '34', '245', 'Acelerada', '', '2015-04-27', 'x', 'e', 'a', 0, 0, 0),
(2, '', '', '', '2', '', '', '', '2015-11-12', '', '', '', 0, 0, 0),
(3, '', '', '', '2', '', '', '', '2015-04-27', 'e', 'a', 'x', 0, 0, 0),
(4, '', '', '', '75', '', '', '', '0000-00-00', '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dron`
--

CREATE TABLE IF NOT EXISTS `dron` (
  `id_dron` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(100) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `calibracion` varchar(100) NOT NULL,
  `observaciones` varchar(1000) NOT NULL,
  `fecha_instalacion` date NOT NULL,
  PRIMARY KEY (`id_dron`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `dron`
--

INSERT INTO `dron` (`id_dron`, `modelo`, `estatus`, `calibracion`, `observaciones`, `fecha_instalacion`) VALUES
(1, 'modelo', 1, 'calibracion', 'observaciones', '0000-00-00'),
(2, 'jkljk3', 0, 'lkjlk3', 'kljlk3', '2015-11-13');

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
  `no_decesos` int(11) NOT NULL,
  `obervaciones` varchar(1000) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_reporte`),
  UNIQUE KEY `victima_nombre` (`victima_nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `reporte`
--

INSERT INTO `reporte` (`id_reporte`, `fecha`, `titular_minero`, `concesion`, `no_victimas`, `victima_nombre`, `empresa`, `tipo_empresa`, `no_decesos`, `obervaciones`, `estado`) VALUES
(1, '2015-01-01', 'COMPA', 'AMERICANA', 1, 'ATAMARI MAMANI, FROILAN', 'MINERA RIO CAUDALOSO Y SERVICIOS COMPLEMENTARIOS', 'Contratista Minero', 0, '', 1),
(2, '2015-01-15', 'EMPRESA ADMINISTRADORA CHUNGAR S.A.C.', 'ANIMON', 1, 'GILIAN SILVA, NELZON', 'EMPRESA MINERA CONSTRUCTORA ASUNTOS AMBIENTALES Y TRANSPORTE HUAYLLAY SOCIEDAD AN', 'Empresas Conexas', 0, '', 1),
(3, '2015-01-21', 'COMPA', 'BREAPAMPA', 1, 'PALOMINO  CAJAHUAMAN, LUIS', 'D.C.R. MINERIA Y CONSTRUCCION S.A.C.', 'Contratista Minero', 0, '', 1),
(4, '2015-01-27', 'MINERA CHINALCO PER', 'TOROMOCHO', 1, 'LOPEZ SEGUIL, JOHNNY', 'TRANSPORTES CRUZ DEL SUR S.A.C.', 'Empresas Conexas', 0, '', 1),
(5, '2015-01-31', 'SOCIEDAD MINERA CERRO VERDE S.A.A.', 'CERRO VERDE 1,2,3', 1, 'TOERRES RUIZ, ROLAN ALVARO', 'GYM S.A.', 'Empresas Conexas', 0, '', 1),
(6, '2015-02-04', 'CONSORCIO MINERO HORIZONTE S.A.', 'ACUMULACION PARCOY N', 1, 'CASO LOPEZ, HECTOR', 'SERVICIOS MINEROS GLORIA S.A.C.', 'Contratista Minero', 0, '', 1),
(7, '2015-02-06', 'CATALINA HUANCA SOCIEDAD MINERA S.A.C.', 'CATALINA HUANCA', 1, 'SANCHEZ  JULCANI, ROGELIO', 'CORPORACION VILLAR INGENIEROS S.A.C.', 'Contratista Minero', 0, '', 1),
(8, '2015-03-12', 'SOCIEDAD MINERA CORONA S.A.', 'ACUMULACION YAURICOCHA', 1, 'INDERIQUE HUAYNALAYA, ASCENCION', 'OPERACIONES MINERAS Y CIVILES JUNIOR EIRL', 'Contratista Minero', 0, '', 1),
(9, '2015-03-13', 'COMPA', 'SAN VICENTE', 1, 'TELLO HURTADO, RAUL CARLOS', 'COMPA', 'Titular Minero', 0, '', 1),
(10, '2015-03-15', 'COMPA', 'LA PODEROSA DE TRUJILLO', 1, 'RODR', 'COMPA', 'Titular Minero', 0, '', 1),
(11, '2015-03-17', 'SOCIEDAD MINERA BAYA S.A.C.', 'EL RINCON PROHIBIDO', 1, 'BARRIOS MERCEDES, OSCAR', 'SOCIEDAD MINERA BAYA S.A.C.', 'Titular Minero', 0, '', 1),
(12, '2015-03-24', 'DOE RUN PERU S.R.L. EN LIQUIDACION EN MARCHA', 'COBRIZA 1126', 1, 'CANO RIVERO, ABRAHAM NEHEMIAS', 'DOE RUN PERU S.R.L. EN LIQUIDACION EN MARCHA', 'Titular Minero', 0, '', 0),
(13, '2015-04-26', 'SOCIEDAD MINERA CORONA S.A.', 'ACUMULACION YAURICOCHA', 1, 'HUARINGA PONCE, JHOEL CARLOS', 'ALFA INGENIERIA SUBTERRANEA S.R.L.', 'Contratista Minero', 0, '', 0),
(14, '2015-04-27', 'OBRAS CIVILES Y MINERAS S.A.C.', 'DIVISION OYON 1', 1, 'QUINCHO QUISPE, JULIO CESAR', 'OBRAS CIVILES Y MINERAS S.A.C.', 'Titular Minero', 0, '', 0),
(15, '2015-04-27', 'lkjlk', 'lkjl', 0, NULL, 'jlkj', 'jklkj', 0, 'lklk', 1),
(16, '2015-04-27', '9', '9', 0, NULL, '1', '9', 9, '9', 1),
(17, '2015-04-27', 'o', 'o', 2, NULL, 'o', 'o', 0, 'o', 1);

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
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id_dron`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `reporte_dron`
--

INSERT INTO `reporte_dron` (`id_dron`, `fecha`, `Modelo`, `tipo_id`, `cuadrante_id`, `tiempo_vuelo`, `distancia_recorrida`, `nivel_bateria`, `estado`) VALUES
(1, '2015-10-28', 'ok2', 1, 1, 1, 1, 1, 1),
(2, '2015-10-15', 'ok', 0, 0, 0, 1231, 23423, 1),
(3, '2015-10-17', '', 0, 0, 0, 0, 0, 1),
(4, '2015-10-15', 'ok', 0, 0, 123, 12, 12, 1),
(5, '2015-10-16', '2', 0, 2, 2, 2, 2, 1),
(6, '2015-11-02', 'ok2', 0, 2, 9802, 22, 79872, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuarios`
--

CREATE TABLE IF NOT EXISTS `tipos_usuarios` (
  `id_tipo_user` int(11) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_accidente`
--

CREATE TABLE IF NOT EXISTS `tipo_accidente` (
  `id_tipo_accidente` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_tipo_accidente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tipo_accidente`
--

INSERT INTO `tipo_accidente` (`id_tipo_accidente`, `descripcion`) VALUES
(1, 'TRÁNSITO'),
(2, 'CAÍDAS DE PERSONAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_user` varchar(200) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `ap_paterno` varchar(50) NOT NULL,
  `ap_materno` varchar(50) NOT NULL,
  `password_encriptado` varchar(100) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `contador_visitas` int(11) NOT NULL,
  `sesion_actual` varchar(18) NOT NULL,
  `ultima_sesion` date NOT NULL,
  `fecha_actualizacion` date NOT NULL,
  `id_tipo_user` int(11) NOT NULL,
  `alta` tinyint(1) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nombre_user`, `nombre`, `ap_paterno`, `ap_materno`, `password_encriptado`, `fecha_creacion`, `contador_visitas`, `sesion_actual`, `ultima_sesion`, `fecha_actualizacion`, `id_tipo_user`, `alta`, `imagen`, `estado`) VALUES
(1, 'zayra@h.com', '12345678', 'admin', '', '', '0000-00-00', 0, '', '0000-00-00', '0000-00-00', 0, 0, '', 0),
(9, 'x', 'x', 'x', 'x', '11f6ad8ec52a2984abaafd7c3b516503785c2072', '2015-10-27', 0, '', '0000-00-00', '0000-00-00', 1, 0, 'foto-perfil/9Capturaanimales.JPG', 1),
(10, 'a', 'a', 'a', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', '2015-10-27', 0, '', '0000-00-00', '0000-00-00', 0, 0, '', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
