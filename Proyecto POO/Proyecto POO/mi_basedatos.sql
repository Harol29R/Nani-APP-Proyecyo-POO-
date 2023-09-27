-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2023 a las 11:50:28
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mi_basedatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padre`
--

CREATE TABLE `padre` (
  `ID` int(64) NOT NULL,
  `nombre` text NOT NULL,
  `apellidos` text NOT NULL,
  `nacionalidad` text NOT NULL,
  `edad` int(10) NOT NULL,
  `ubicacion` text NOT NULL,
  `contacto` varchar(64) NOT NULL,
  `identificacion` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `padre`
--

INSERT INTO `padre` (`ID`, `nombre`, `apellidos`, `nacionalidad`, `edad`, `ubicacion`, `contacto`, `identificacion`) VALUES
(1, 'harol', 'Rincón', 'Colombiano', 18, 'Bogotá', '3107159240', 1241410240);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `ID` int(250) NOT NULL,
  `numero_tarjeta` int(250) NOT NULL,
  `nombre_titular` varchar(64) NOT NULL,
  `fecha_vencimiento` varchar(11) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`ID`, `numero_tarjeta`, `nombre_titular`, `fecha_vencimiento`, `cvv`) VALUES
(1, 2147483647, '0', '9', 214),
(2, 2147483647, '0', '9', 214),
(3, 2147483647, 'Stiven Gonz', '08/22', 421),
(4, 2147483647, 'Stiven Gonz', '08/22', 421),
(5, 2147483647, 'Stiven Gonzales', '08/22', 421),
(6, 2147483647, 'harol', '09/06', 421),
(7, 2147483647, 'Felipe', '06/09', 241);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID` int(32) NOT NULL,
  `Nombre` text NOT NULL,
  `Correo` varchar(64) NOT NULL,
  `Contraseña` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ID`, `Nombre`, `Correo`, `Contraseña`) VALUES
(1, 'Harol', 'hd@gmail.com', '$2y$10$3w4YjLgG31uaLUfu7Tc/zuWGlO9p/QBGURHSDN712ev161fVd68zi'),
(2, 'harol', 'hdrinconr@gmail.com', '$2y$10$u3HK/HS0n2RksZHxyvCERuqJVSGK/gl0lN5RrH4SaTQf8zMfk3O92'),
(3, 'stiven', 'st@gmail.com', '$2y$10$pCQFAMm3YDiPCZ4VOupRcOpA2rNCw1TyceDN/zoCysdXEKcEUkmB.'),
(4, 'juan', 'j@gmail.com', '$2y$10$Fhm4qPReSmy2kcsh0/N4eubgcL.4gYXmhvpz.KxeOiVr.pa3ZqAKK');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `padre`
--
ALTER TABLE `padre`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `padre`
--
ALTER TABLE `padre`
  MODIFY `ID` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `ID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
