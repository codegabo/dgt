-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2018 a las 16:02:12
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` mediumtext,
  `tamanio` int(10) UNSIGNED DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivos_pdf`
--

INSERT INTO `archivos_pdf` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(1, 'VictorPrada', '                  este es un pdf de ejemplo\r\n', 171758, 'application/pdf', 'EJEMPLO.pdf'),
(2, 'php', 'hphpphphph\r\n                  ', 100152, 'application/pdf', 'php.pdf'),
(3, 'Recibo', 'Este es un recibo de prueba                  ', 16128, 'application/pdf', 'recibo.pdf'),
(4, 'Prueba', '              nlkvnbjdsojbvdjvdb    ', 16128, 'application/pdf', 'recibo.pdf'),
(5, 'Colibri', '                  vjnvdsdvsvd', 100152, 'application/pdf', 'php.pdf');

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
(1, 'Colibri', 'img_categoria/Colibri.png'),
(2, 'Flores', 'img_categoria/Flores.png'),
(3, 'flores verdes', 'img_categoria/flores azules.png'),
(4, 'Caballos de mar', 'img_categoria/Caballos de mar.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disenos`
--

CREATE TABLE `disenos` (
  `id_diseno` int(11) NOT NULL,
  `nombre_dis` varchar(100) NOT NULL,
  `disenador` varchar(100) NOT NULL,
  `caracteristicas` varchar(100) NOT NULL,
  `etiquetas` varchar(100) NOT NULL,
  `radio` varchar(100) NOT NULL,
  `disenos` varchar(100) NOT NULL,
  `nombre_variante` varchar(100) NOT NULL,
  `ruta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `disenos`
--

INSERT INTO `disenos` (`id_diseno`, `nombre_dis`, `disenador`, `caracteristicas`, `etiquetas`, `radio`, `disenos`, `nombre_variante`, `ruta`) VALUES
(1, 'andrea', 'dsnvd', 'lsmmssss', 'genial bonito chevere', 'SI', '', 'diseÃ±o', 'img_disenos/andrea.png'),
(2, 'Victor Alfonso', 'Juan Gabriel', 'Caballos de mar y estrellas', 'genial bonito chevere', 'NO', '', 'diseÃ±o de mar', 'img_disenos/Victor Alfonso.png');

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
  MODIFY `id_documento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_imagen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `disenos`
--
ALTER TABLE `disenos`
  MODIFY `id_diseno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
