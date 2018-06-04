-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2018 a las 08:45:28
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `textiles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos_pdf`
--

CREATE TABLE `archivos_pdf` (
  `id_documento` int(10) NOT NULL,
  `titulo` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` mediumtext CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `tamanio` int(10) UNSIGNED DEFAULT NULL,
  `tipo` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nombre_archivo` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivos_pdf`
--

INSERT INTO `archivos_pdf` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(1, 'VictorPrada', '                  este es un pdf de ejemplo\r\n', 171758, 'application/pdf', 'EJEMPLO.pdf'),
(2, 'php', 'hphpphphph\r\n                  ', 100152, 'application/pdf', 'php.pdf'),
(3, 'Recibo', 'Este es un recibo de prueba                  ', 16128, 'application/pdf', 'recibo.pdf'),
(4, 'Prueba', '              nlkvnbjdsojbvdjvdb    ', 16128, 'application/pdf', 'recibo.pdf'),
(5, 'Colibri', '                  vjnvdsdvsvd', 100152, 'application/pdf', 'php.pdf'),
(6, 'aa', '                  aaa', 1290221, 'application/pdf', 'Acuerdo de desarrollo PAgina WEB.pdf'),
(7, 'ddd', '                  dddd', 694622, 'application/pdf', 'CSTS-Catalogo-de-servicios.pdf'),
(8, 'cata', '                 cata ', 694622, 'application/pdf', 'CSTS-Catalogo-de-servicios.pdf'),
(9, 'aaaaaa', '   aaaa               aaaaaaaa', 207361, 'application/pdf', 'mafars092.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_imagen` int(10) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `ruta` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_imagen`, `titulo`, `ruta`) VALUES
(1, 'Colibris', 'img_categoria/Colibri.png'),
(2, 'Flores', 'img_categoria/Flores.png'),
(3, 'flores verdes', 'img_categoria/flores azules.png'),
(4, 'Caballos de mar', 'img_categoria/Caballos de mar.png'),
(5, 'la primera prueba', 'img_categoria/top.png'),
(6, 'pruebita bonitass', 'img_categoria/pruebita bonita.png'),
(7, 'Hola Mundo', 'img_categoria/sadsad.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disenos`
--

CREATE TABLE `disenos` (
  `id_diseno` int(11) NOT NULL,
  `id_categoria` int(100) NOT NULL,
  `id_diseno_padre` int(100) DEFAULT NULL,
  `nombre_dis` varchar(100) NOT NULL,
  `disenador` varchar(100) NOT NULL,
  `caracteristicas` varchar(100) NOT NULL,
  `etiquetas` varchar(100) NOT NULL,
  `tipo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `ruta2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `disenos`
--

INSERT INTO `disenos` (`id_diseno`, `id_categoria`, `id_diseno_padre`, `nombre_dis`, `disenador`, `caracteristicas`, `etiquetas`, `tipo`, `ruta`, `ruta2`) VALUES
(1, 4, 0, 'andrea', 'dsnvd', 'lsmmssss', 'genial bonito chevere', '', 'img_disenos/andrea.png', ''),
(2, 4, 0, 'Victor Alfonso', 'Juan Gabriel', 'Caballos de mar y estrellas', 'genial bonito cheveregenial bonito cheveregenial bonito chevere genial bonito chevere ', '', 'img_disenos/Victor Alfonso.png', ''),
(3, 5, 0, 's', 's', 's', 's', '', 'img_disenos', ''),
(4, 6, 0, 'xxxxx', 'xxx', 'xxx', 'xxx', '', 'img_disenos', ''),
(5, 6, 0, 'vvv', 'vvv', 'vvv', 'vvv', '', 'img_disenos', ''),
(6, 7, 0, 'ccc', 'cc', 'ccc', 'ccc', '', 'img_disenos/ccc-large.png', ''),
(7, 7, 0, '33bd6d791c295ea3b20f70af1d5efac6f165986e', 'qqq', 'qq', 'qq', '', 'img_disenos/33bd6d791c295ea3b20f70af1d5efac6f165986e-large.png', ''),
(8, 2, 0, '33bd6d791c295ea3b20f70af1d5efac6f165986e-large', 'ff', 'ff', 'ff', '', 'img_disenos/33bd6d791c295ea3b20f70af1d5efac6f165986e-large-large.png', ''),
(9, 3, 0, '33bd6d791c295ea3b20f70af1d5efac6f165986e', 'zz', 'zz', 'zz', '', 'img_disenos/33bd6d791c295ea3b20f70af1d5efac6f165986e.png', ''),
(10, 2, 0, 'tt', 'tt', 'tt', 'tt', '', 'img_disenos/tt-large.png', ''),
(11, 2, 0, 'ORDER BY id_diseno', 's', 's', 's', '', 'img_disenos/ORDER BY id_diseno-large.png', ''),
(12, 3, 0, 'golang', 'ffff', 'fff', 'fff', '', 'img_disenos/golang-large.png', ''),
(13, 4, 0, 'golang', 'jj', 'jj', 'jj', '', 'img_disenos/golang.png', ''),
(14, 5, 0, 'golang-large', 'fdfs', 'sdfsd', 'sdf', '', 'img_disenos/golang-large.png', ''),
(15, 6, 0, 'golang', '777', '777', '777', '', 'img_disenos/golang-large.png', ''),
(16, 7, 0, 'qwe', 'qwe', 'qwe', 'qwe', '', 'img_disenos/qwe-large.png', ''),
(17, 7, 0, 'logo', 'logo', 'logo', 'logo', '', 'img_disenos/logo-large.png', ''),
(18, 2, 0, 'logo', 'logo', 'logo', 'logo', '', 'img_disenos/logo.png', ''),
(19, 5, 0, 'CO-0001-1-large', 'CO-0001-1-large', 'CO-0001-1-large', 'CO-0001-1-large', '', 'img_disenos/CO-0001-1-large.png', ''),
(20, 3, 0, 'golang', 'golang', 'golang', 'golang', '', 'img_disenos/golang.png', ''),
(21, 1, 0, 'golang', 'yo', 'lenguaje', 'google', '', 'img_disenos/golang.png', ''),
(22, 1, 0, 'CO-0001-1-large', 'CO-0001-1-large', 'CO-0001-1-large', 'CO-0001-1-large', '', 'img_disenos/CO-0001-1-large.png', ''),
(23, 1, 0, 'CO-0001-2-thumb', 'CO-0001-2-thumb', 'CO-0001-2-thumb', 'CO-0001-2-thumb', 'design', 'img_disenos/CO-0001-2-thumb.png', ''),
(24, 2, 0, 'CO-0001-3-thumb', 'CO-0001-3-thumb', 'CO-0001-3-thumb', 'CO-0001-3-thumb', 'design', 'img_disenos/CO-0001-3-thumb.png', ''),
(25, 1, 0, 'CO-0001-2-thumb', 'Juan Gabriel', 'caballitos de mar morados', 'jijiji', 'design', 'img_disenos/CO-0001-2-thumb.png', ''),
(26, 1, 0, 'CO-0001-1-thumb', 'CO-0001-1-thumb', 'CO-0001-1-thumb', 'CO-0001-1-thumb', 'design', 'img_disenos/CO-0001-1-thumb.png', ''),
(27, 0, 26, 'CO-0001-2-large', 'CO-0001-2-large', 'CO-0001-2-large', 'CO-0001-2-large', 'variant', 'img_disenos/CO-0001-2-large.png', ''),
(28, 0, 26, 'CO-0001-3-large', 'CO-0001-3-large', 'CO-0001-3-large', 'CO-0001-3-large', 'variant', 'img_disenos/CO-0001-3-large.png', ''),
(29, 0, 26, 'golang', 'Yo', 'Lenguaje de programaciÃ³n hecho por google', 'google golang cool', 'variant', 'img_disenos/golang.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `codigo` int(11) NOT NULL,
  `nombre_use` varchar(100) NOT NULL,
  `apellido_use` varchar(100) NOT NULL,
  `genero_use` varchar(100) NOT NULL,
  `fechanaci` date NOT NULL,
  `cargo_use` varchar(15) NOT NULL,
  `usuario_use` varchar(100) NOT NULL,
  `contra_use` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora_use` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`codigo`, `nombre_use`, `apellido_use`, `genero_use`, `fechanaci`, `cargo_use`, `usuario_use`, `contra_use`, `fecha`, `hora_use`) VALUES
(2, 'Victor Alfonso', 'Prada Perez', 'Masculino', '1994-03-16', 'Administrador', 'Viper', '12345', '2018-05-30', '04:37:40'),
(9, 'Juan Gabriel', 'Mogollon', 'Masculino', '1998-07-12', 'Administrador', 'gaboo', '12345', '2018-05-30', '07:58:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos_pdf`
--
ALTER TABLE `archivos_pdf`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `disenos`
--
ALTER TABLE `disenos`
  ADD PRIMARY KEY (`id_diseno`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos_pdf`
--
ALTER TABLE `archivos_pdf`
  MODIFY `id_documento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_imagen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `disenos`
--
ALTER TABLE `disenos`
  MODIFY `id_diseno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
