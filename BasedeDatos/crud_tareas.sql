-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2020 a las 06:19:54
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_tareas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `idtareas` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_registro` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`idtareas`, `titulo`, `descripcion`, `fecha_registro`) VALUES
(3, 'Clase Ingenieria de Software', '', '2020-10-30 06:00:00'),
(4, 'Realizar compras', '', '2020-10-15 06:00:00'),
(6, 'Avance proyecto', '', '2020-11-02 06:00:00'),
(7, 'Ensayo', '', '2020-10-30 06:00:00'),
(8, 'Revision Vehiculo', '', '2020-11-17 06:00:00'),
(9, 'Compra Gas', '', '2020-11-24 06:00:00'),
(11, 'Compras', '', '2020-10-31 06:00:00'),
(13, 'CumpleaÃ±os', 'Preparar fiesta de cumpleaÃ±os', '2020-11-18 06:00:00'),
(14, 'Proyecto', 'Entregar proyecto final', '2020-11-27 06:00:00'),
(15, 'Evento', 'Asistencia evento', '2020-11-07 06:00:00'),
(16, 'Cita ortodoncista', 'Cita mensual', '2020-10-31 06:00:00'),
(17, 'Control veterinario', 'Control de vacunaciÃ³n de mascota', '2020-11-26 06:00:00'),
(18, 'GraduaciÃ³n', 'Fecha de graduaciÃ³n tentativa', '2020-11-21 06:00:00'),
(19, 'Limpieza', 'Limpiar toda la casa', '2020-10-14 06:00:00'),
(20, 'Parcial POO', 'Entregar tercer parcial de POO', '2020-10-31 06:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`idtareas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `idtareas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
