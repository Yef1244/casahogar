-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2021 a las 16:09:25
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casahogar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animales`
--

CREATE TABLE `animales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `edad` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `tipoAnimal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `animales`
--

INSERT INTO `animales` (`id`, `nombre`, `foto`, `edad`, `descripcion`, `tipoAnimal`) VALUES
(2, 'Rocket', 'https://firebasestorage.googleapis.com/v0/b/casahogaryeferson.appspot.com/o/racket.jpg?alt=media&token=7f1de30d-07af-4300-93cf-f1f47343d42d', 2, 'Bulldog', 1),
(3, 'asas', '', 122, 'asdsad', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `foto`, `precio`, `descripcion`, `tipo`) VALUES
(2, 'Cuido Extragrande', 'https://firebasestorage.googleapis.com/v0/b/casahogaryeferson.appspot.com/o/cuido1.jpg?alt=media&token=523652fe-cc4f-4827-a4a6-363588c1fbee', 9000, 'Cuido para perro de 2 años', 1),
(3, 'Cuido minimo', 'https://firebasestorage.googleapis.com/v0/b/casahogaryeferson.appspot.com/o/cuido2.jpg?alt=media&token=180a9421-5aca-4779-b262-59b1d705b1d1', 3000, 'Cuido para gato de 2 meses', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animales`
--
ALTER TABLE `animales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
