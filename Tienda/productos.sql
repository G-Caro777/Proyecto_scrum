-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2022 a las 17:26:55
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`) VALUES
(4, 'Kit de construcción Harry Potter', 799),
(5, 'Kit de construcción-Ajedrez Mágico', 1199),
(6, 'Home Alone Kit de construccion', 5820),
(7, 'Rainbow High Rainbow Vision Sabrina St. Cloud', 950),
(8, 'Rainbow High Shadow Vision Neon Shadow', 1406),
(9, 'Rainbow High Rainbow Vision Meline Luxe', 899),
(10, 'Emperor Palpatine ', 400),
(11, 'Juguete OBI-WAN Kenobi', 404),
(12, 'Heavy Assault Stormtrooper', 369),
(13, 'Hasbro Gaming Juego Clue', 299),
(14, 'Juego Pac-Man\r\n', 239),
(15, 'Disney Manía', 603),
(16, 'Funko Pop! Marvel: Black Panther', 499),
(17, 'Funko Pop! Marvel: Scarlet Witch\r\n', 399),
(18, 'Funko Pop! Marvel: Spider-Man', 345),
(19, 'Hot Wheels Super Ultimate Garage', 869),
(20, 'Hot Wheels Track Builder', 639),
(21, 'Hot Wheels City Ultimate Garage', 3545);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
