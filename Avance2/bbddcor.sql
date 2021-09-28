-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2021 a las 22:00:23
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bbddcor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cooperadora`
--

CREATE TABLE `cooperadora` (
  `ID` int(11) NOT NULL,
  `NOMBRECOOP` varchar(200) NOT NULL,
  `FECHAALTA` timestamp NOT NULL DEFAULT current_timestamp(),
  `LOGO` varchar(250) NOT NULL,
  `DOMICILIO` varchar(200) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TELEFONO` varchar(100) NOT NULL,
  `PAGOSPERFIL` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `ID` int(11) NOT NULL,
  `TITULO` varchar(100) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT current_timestamp(),
  `TEXTO` text NOT NULL,
  `IMAGEN` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`ID`, `TITULO`, `FECHA`, `TEXTO`, `IMAGEN`) VALUES
(43, 'Pablo y Melani Aprueban PP2 y se reciben!', '2021-07-26 21:11:51', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem natus dolor exercitationem inventore impedit nemo nobis quas aliquam odio iusto sint, voluptatem recusandae porro distinctio officia ab maxime. Aperiam, quos.', 'https://images.unsplash.com/photo-1533228876829-65c94e7b5025?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=750&q=80'),
(44, 'Cooperadora Incrementa su recaudación en un 400% por novedoso software', '2021-07-26 21:13:28', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem natus dolor exercitationem inventore impedit nemo nobis quas aliquam odio iusto sint, voluptatem recusandae porro distinctio officia ab maxime. Aperiam, quos.', 'https://images.unsplash.com/photo-1495727034151-8fdc73e332a8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=745&q=80'),
(45, 'Terciario Urquiza Modelo de Recaudación Cooperadora', '2021-07-26 21:15:54', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem natus dolor exercitationem inventore impedit nemo nobis quas aliquam odio iusto sint, voluptatem recusandae porro distinctio officia ab maxime. Aperiam, quos.', 'https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `ID` int(11) NOT NULL,
  `TITULO` varchar(100) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `TEXTO` text NOT NULL,
  `IMAGEN` varchar(250) NOT NULL,
  `ESTADO` varchar(15) NOT NULL,
  `PUBLICADO` varchar(100) NOT NULL,
  `ARCHIVOS` varchar(250) NOT NULL,
  `LINKAPORTE` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`ID`, `TITULO`, `FECHA`, `TEXTO`, `IMAGEN`, `ESTADO`, `PUBLICADO`, `ARCHIVOS`, `LINKAPORTE`) VALUES
(17, 'Compra de Servidor para el Laboratorio', '2021-08-03 22:38:19', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem natus dolor exercitationem inventore impedit nemo nobis quas aliquam odio iusto sint, voluptatem recusandae porro distinctio officia ab maxime. Aperiam, quos.', 'https://images.unsplash.com/photo-1606908487894-c7e94a213233?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=281&q=80', 'Concretado', 'Publicado', 'https://drive.google.com/drive/folders/1NTZfIlEELKvgAI4LkiP_ddFMXcKNgwdV?usp=sharing', 'https://mpago.la/18ke7Y3'),
(18, 'Instalación Conexión Wifi Institución', '2021-07-26 21:04:31', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem natus dolor exercitationem inventore impedit nemo nobis quas aliquam odio iusto sint, voluptatem recusandae porro distinctio officia ab maxime. Aperiam, quos.', 'https://images.unsplash.com/photo-1603726811255-1ae496aeaab9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=375&q=80', 'Pendiente', 'Publicado', 'https://drive.google.com/drive/folders/1NTZfIlEELKvgAI4LkiP_ddFMXcKNgwdV?usp=sharing', 'https://mpago.la/18ke7Y3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `USUARIO` varchar(40) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `USUARIO`, `PASSWORD`) VALUES
(1, 'USERADM', '12345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cooperadora`
--
ALTER TABLE `cooperadora`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cooperadora`
--
ALTER TABLE `cooperadora`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
