-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2018 a las 10:21:41
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
(10, 'Documento PDF de prueba', '             Documento PDF de pruebaDocumento PDF de pruebaDocumento PDF de pruebaDocumento PDF de pruebaDocumento PDF de prueba     ', 124523, 'application/pdf', 'EFECTY_2016-12-01_152237.pdf');

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
(9, 'Animalitos', 'img_categoria/Caballitos de mar.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_disenos`
--

CREATE TABLE `data_disenos` (
  `id_data` int(11) NOT NULL,
  `cliente` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `diseno` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `modelo` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `design_for` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `asesor` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `width` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `height` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `data_disenos`
--

INSERT INTO `data_disenos` (`id_data`, `cliente`, `nombre`, `diseno`, `modelo`, `design_for`, `asesor`, `width`, `height`, `hora`) VALUES
(1, '', '', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/CO-0001-2-large.png', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/POLO.png', '', 'Gabriel', '', '', '2018-06-06 08:02:22'),
(2, '', '', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/CO-0001-3-large.png', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/POLO.png', '', 'Juan Gabriel', '494.7px', '582.42px', '2018-06-06 08:02:22'),
(3, '', '', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/CO-0001-2-large.png', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/TOP.png', '', 'Juan Gabriel', '389.06px', '476.28px', '2018-06-06 08:02:22'),
(4, '', ' CO-0001-2-thumb', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/CO-0001-2-large.png', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/VESTIDO%20-FEMENINO.png', '', 'Juan Gabrielsdad', '628.32px', '738.48px', '2018-06-06 08:02:22'),
(5, '', ' CO-0001-2-large', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/CO-0001-2-large.png', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/FALDA%20FEMENINO.png', '', 'Juan Gabrielsdad', '', '', '2018-06-06 08:02:22'),
(6, '', ' CO-0001-3-large', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/CO-0001-3-large.png', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/POLO.png', '', 'Juan Gabriel', '', '', '2018-06-06 08:02:22'),
(7, '', ' CO-0001-3-large', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/CO-0001-3-large.png', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/VESTIDO%20DE%20BA%C3%91O-FEMENINO.png', '', 'Juan Gabriel', '', '', '2018-06-06 08:02:22'),
(8, '', ' CO-0001-1-thumb', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/CO-0001-1-large.png', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/LEGINS.png', '', 'Camilo', '', '', '2018-06-06 08:02:22'),
(9, 'Pepito Perez', ' CO-0001-1-large', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/CO-0001-1-large.png', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/VESTIDO.png', '', 'Juan Gabriel', '', '', '2018-06-06 08:02:22'),
(10, 'Natalia Paris', ' CO-0001-2-large', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/CO-0001-2-large.png', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/VESTIDO%20DE%20BA%C3%91O-FEMENINO.png', '', 'Juan Gabriel', '', '', '2018-06-06 08:02:22'),
(11, 'jesus duarte', ' CO-0001-1', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/CO-0001-1-large.jpg', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/VESTIDO.png', '', 'Juan Gabriel', '', '', '2018-06-06 08:02:22'),
(12, 'Jose Claros MartÃ­nez', ' CO-0001-3', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/CO-0001-3-large.jpg', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/VESTIDO%20DE%20BA%C3%91O-FEMENINO.png', '', 'Juan Gabriel', '616.08px', '724.2px', '2018-06-06 08:02:22'),
(13, 'Clara Hoyos', ' CO-0001-1', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/CO-0001-1-large.jpg', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/VESTIDO%20-FEMENINO.png', '', 'Juan Gabriel', '282.24px', '344.96px', '2018-06-06 08:03:15'),
(14, 'sofia leon', ' 0047-2', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img_disenos/FL%200047-2-large.jpg', 'http://localhost/web_design/PROYECTOS/Digital%20Global%20Textiles/sis.info/img/clothes_png/VESTIDO%20DE%20BA%C3%91O-FEMENINO.png', '', 'Juan Gabriel', '', '', '2018-06-06 08:19:49');

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
(37, 9, 0, 'CO-0001-1', 'Rocio', 'Caballitos de mar', 'mar', 'design', 'img_disenos/CO-0001-1-thumb.jpg', 'img_disenos/CO-0001-1-large.jpg'),
(38, 0, 37, '', '', '', '', 'variant', 'img_disenos/-thumb.jpg', 'img_disenos/-large.jpg'),
(39, 0, 37, 'CO-0001-2', 'Rocio Florez', 'caballito verde', 'CO-0001-2 caballito verde', 'design', 'img_disenos/CO-0001-2-thumb.jpg', 'img_disenos/CO-0001-2-large.jpg'),
(40, 9, 37, 'CO-0001-3', 'Neyer Azucena', 'caballos de mar morados', 'CO-0001-3 mar morados', 'design', 'img_disenos/CO-0001-3-thumb.jpg', 'img_disenos/CO-0001-3-large.jpg'),
(41, 9, 0, 'FL 0047-2', 'yo', 'y yo', 'mas yo', 'design', 'img_disenos/FL 0047-2-thumb.jpg', 'img_disenos/FL 0047-2-large.jpg');

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
(2, 'Victor Alfonsoasassa', 'Prada Perez', 'Masculino', '1994-03-16', 'Administrador', 'Viper', '12345', '2018-05-30', '04:37:40'),
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
-- Indices de la tabla `data_disenos`
--
ALTER TABLE `data_disenos`
  ADD PRIMARY KEY (`id_data`);

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
  MODIFY `id_documento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_imagen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `data_disenos`
--
ALTER TABLE `data_disenos`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `disenos`
--
ALTER TABLE `disenos`
  MODIFY `id_diseno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
