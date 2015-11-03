-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2015 a las 00:57:12
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `existencia`
--

CREATE TABLE IF NOT EXISTS `existencia` (
  `id_existencia` int(11) NOT NULL,
  `id_lib` int(11) NOT NULL,
  `id_libros` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `existencia`
--

INSERT INTO `existencia` (`id_existencia`, `id_lib`, `id_libros`) VALUES
(1, 1, 3),
(2, 1, 5),
(3, 1, 10),
(4, 2, 7),
(5, 2, 3),
(6, 3, 10),
(7, 3, 9),
(8, 3, 2),
(9, 4, 1),
(10, 4, 6),
(11, 5, 8),
(12, 5, 5),
(13, 6, 9),
(14, 6, 3),
(15, 7, 8),
(16, 7, 10),
(17, 8, 7),
(18, 8, 4),
(19, 9, 3),
(20, 9, 7),
(21, 10, 9),
(22, 10, 5),
(23, 11, 7),
(24, 11, 3),
(25, 12, 7),
(26, 12, 9),
(27, 14, 7),
(28, 14, 10),
(29, 14, 3),
(30, 14, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libreria`
--

CREATE TABLE IF NOT EXISTS `libreria` (
  `id_lib` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `lat` float NOT NULL,
  `lon` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libreria`
--

INSERT INTO `libreria` (`id_lib`, `nombre`, `direccion`, `lat`, `lon`) VALUES
(1, 'Bookids', 'La Guarde, Privada Calzada Zavaleta 5124', 19.0515, -98.2471),
(2, 'Ghandi', 'Acceso a la Zona Angelópolis', 19.0328, -98.2365),
(3, 'Libreria Mac', 'De La 29 Poniente 1111\r\nLos Volcanes, Heroica Puebla de Zaragoza, Pue.', 19.0375, -98.2135),
(4, 'Credi libros Gil', 'Calle 5-A Sur 5736', 19.0185, -98.2183),
(5, 'El sótano Puebla', 'Calle 43 Oriente 13\r\nHuexotitla, Heroica Puebla de Zaragoza, Pue.', 19.0272, -98.2076),
(6, 'Libreria Leon', 'Av 3 Poniente 320\r\nCentro, Heroica Puebla de Zaragoza, Pue.', 19.0452, -98.2019),
(7, 'Libreria Paulinas', 'Av 2 Sur 306\r\nCentro, Heroica Puebla de Zaragoza, Pue.', 19.0429, -98.1976),
(8, 'Libreiras Cristal ', 'Comunicaciones Pey, Portales 7\r\nCentro, 73300 Chignahuapan, Pue.', 19.0435, -98.1968),
(9, 'Librerias Don Bosco', 'Calle 4 Norte 9\r\nCentro, Heroica Puebla de Zaragoza, Pue.', 19.0435, -98.1953),
(10, 'Angelibro', 'CASA DE LA CULTURA, Av 5 Oriente 5\r\nCentro, 72000 Heroica Puebla', 19.0424, -98.1987),
(11, 'Libreria Pegaso', 'Calle 5 Sur 503\r\nCentro, Heroica Puebla', 19.0443, -98.2027),
(12, 'Musica y Libros', 'Av 3 Poniente 711\r\nCentro, Heroica Puebla', 19.0464, -98.2046),
(14, 'Distribuidora de libros', 'De La Av. 3 Poniente 308\r\nCentro, Heroica Puebla', 19.0467, -98.2063);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE IF NOT EXISTS `libros` (
  `id_libros` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `autor` varchar(25) NOT NULL,
  `editorial` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libros`, `nombre`, `autor`, `editorial`) VALUES
(1, 'ARISTOTELES Y DANTE DESCUBREN LOS SECRETOS DEL UNIVERSO', 'BENJAMIN ALIRE SAEN', 'PLANETA'),
(2, 'JUEGO DE TRONOS', 'GEORGE R. R. MARTIN', 'DEBOLSILLO'),
(3, 'EL MARCIANO', 'ANDY WEIR', 'EDICIONES B'),
(4, 'VIRTUAL HERO', 'EL RUBIUS (RUBEN DOBLAS)', 'TEMAS DE HOY'),
(5, 'LA TEORIA DEL TODO: EL ORIGEN Y EL DESTINO DE UNIVERSO', 'STEPHEN W. HAWKING', 'DEBOLSILLO'),
(6, 'AURA', 'CARLOS FUENTES', 'ERA'),
(7, 'EL PSICOANALISTA', 'JOHN KATZENBACH', 'B DE BOLSILLO'),
(8, 'EL SEÑOR DE LOS ANILLOS I: LA COMUNIDAD DEL ANILLO', 'J.R.R. TOLKIEN', 'BOOKET'),
(9, 'LA MECANICA DEL CORAZON', 'MATHIAS MALZIEU', 'DEBOLSILLO'),
(10, 'ORGULLO Y PREJUICIO', 'JANE AUSTEN', 'DEBOLSILLO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `password`) VALUES
(7, 'erick', 'perickpor@hotmail.com', '1234567890'),
(10, 'packo', 'holamundo@gmail.com', '9876543210'),
(19, 'juan pablo', 'juan_magodeoz_93@hotmail.', '123456'),
(27, '', '', ''),
(28, '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `existencia`
--
ALTER TABLE `existencia`
  ADD PRIMARY KEY (`id_existencia`);

--
-- Indices de la tabla `libreria`
--
ALTER TABLE `libreria`
  ADD PRIMARY KEY (`id_lib`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libros`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `existencia`
--
ALTER TABLE `existencia`
  MODIFY `id_existencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `libreria`
--
ALTER TABLE `libreria`
  MODIFY `id_lib` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libros` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
