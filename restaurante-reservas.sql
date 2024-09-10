-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2024 a las 02:53:45
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante-reservas`
--
CREATE DATABASE IF NOT EXISTS `restaurante-reservas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `restaurante-reservas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bares`
--

CREATE TABLE `bares` (
  `idBares` int(11) NOT NULL,
  `nombre_bartender` varchar(145) NOT NULL,
  `Espacios_idEspacios` int(11) NOT NULL,
  `Salones_idSalones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bares`
--

INSERT INTO `bares` (`idBares`, `nombre_bartender`, `Espacios_idEspacios`, `Salones_idSalones`) VALUES
(1, 'Carlos Pérez', 1, 1),
(2, 'Marta López', 2, 2),
(3, 'Luis Pérez', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargosempleados`
--

CREATE TABLE `cargosempleados` (
  `idCargosEmpleados` int(11) NOT NULL,
  `cargo` varchar(145) NOT NULL,
  `descripcion` varchar(745) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cargosempleados`
--

INSERT INTO `cargosempleados` (`idCargosEmpleados`, `cargo`, `descripcion`) VALUES
(1, 'Maitre', 'Responsable de dirigir y coordinar el servicio en el restaurante'),
(2, 'Camarero', 'Encargado de atender a los clientes en el restaurante'),
(3, 'Chef', 'Encargado de la cocina y preparación de alimentos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idClientes` int(11) NOT NULL,
  `direccion` varchar(1045) DEFAULT NULL,
  `Personas_idPersonas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idClientes`, `direccion`, `Personas_idPersonas`) VALUES
(1, 'Calle 123, Ciudad', 1),
(2, 'Avenida Siempre Viva 742, Ciudad', 2),
(3, 'Mansión', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idEmpleados` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_egreso` date DEFAULT NULL,
  `Personas_idPersonas` int(11) NOT NULL,
  `CargosEmpleados_idCargosEmpleados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleados`, `fecha_ingreso`, `fecha_egreso`, `Personas_idPersonas`, `CargosEmpleados_idCargosEmpleados`) VALUES
(1, '2022-01-15', NULL, 3, 1),
(2, '2021-06-20', NULL, 2, 2),
(3, '2021-06-20', NULL, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacios`
--

CREATE TABLE `espacios` (
  `idEspacios` int(11) NOT NULL,
  `nombre` varchar(145) NOT NULL,
  `capacidad_personas` int(11) NOT NULL,
  `ubicacion_restaurante` varchar(545) NOT NULL,
  `disponibilidad` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `espacios`
--

INSERT INTO `espacios` (`idEspacios`, `nombre`, `capacidad_personas`, `ubicacion_restaurante`, `disponibilidad`) VALUES
(1, 'Rosado', 50, 'Zona exterior', 1),
(2, 'Dorado', 50, 'Zona exterior', 1),
(3, 'Azul', 20, 'Primer piso', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espacios_has_empleados`
--

CREATE TABLE `espacios_has_empleados` (
  `idEspacios_has_Empleados` int(11) NOT NULL,
  `Espacios_idEspacios` int(11) NOT NULL,
  `Empleados_idEmpleados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `espacios_has_empleados`
--

INSERT INTO `espacios_has_empleados` (`idEspacios_has_Empleados`, `Espacios_idEspacios`, `Empleados_idEmpleados`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `idMesas` int(11) NOT NULL,
  `numero_mesa` int(11) NOT NULL,
  `capacidad_personas` int(11) NOT NULL,
  `disponibilidad` tinyint(1) NOT NULL,
  `Salones_idSalones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`idMesas`, `numero_mesa`, `capacidad_personas`, `disponibilidad`, `Salones_idSalones`) VALUES
(1, 5, 4, 1, 1),
(2, 10, 6, 0, 2),
(3, 4, 50, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `idPersonas` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre` varchar(145) NOT NULL,
  `apellido` varchar(145) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo` varchar(245) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`idPersonas`, `cedula`, `nombre`, `apellido`, `fecha_nacimiento`, `correo`, `telefono`) VALUES
(1, 12345678, 'Juan', 'Gómez', '1985-04-12', 'juan.gomez@mail.com', 5551234),
(2, 87654321, 'Ana', 'Martínez', '1990-07-25', 'ana.martinez@mail.com', 5555678),
(3, 78654321, 'Luisa', 'Gómez', '1990-07-25', 'luisa.gomezz@mail.com', 5855678),
(4, 9345678, 'Lisa', 'Manoban', '1997-03-27', 'lisa@gmail.com', 42417485);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `idReservaciones` int(11) NOT NULL,
  `fecha_actual` date NOT NULL,
  `fecha_reservacion` date NOT NULL,
  `hora_reservacion` time(2) NOT NULL,
  `num_personas` int(11) NOT NULL,
  `informacion` varchar(1045) DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL,
  `motivo` varchar(845) DEFAULT NULL,
  `Clientes_idClientes` int(11) NOT NULL,
  `Empleados_idEmpleados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`idReservaciones`, `fecha_actual`, `fecha_reservacion`, `hora_reservacion`, `num_personas`, `informacion`, `estatus`, `motivo`, `Clientes_idClientes`, `Empleados_idEmpleados`) VALUES
(1, '2024-09-01', '2024-10-04', '00:06:00.00', 4, 'Cena familiar', 1, NULL, 1, 1),
(2, '2024-09-02', '2024-09-16', '20:00:00.00', 2, 'Cena romántica', 1, NULL, 2, 1),
(3, '2024-09-09', '2024-10-03', '01:02:00.00', 5, 'Reunión', 1, NULL, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones_has_espacios`
--

CREATE TABLE `reservaciones_has_espacios` (
  `idReservaciones_has_Espacios` int(11) NOT NULL,
  `cantidad_mesas` int(11) NOT NULL,
  `Reservaciones_idReservaciones` int(11) NOT NULL,
  `Espacios_idEspacios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservaciones_has_espacios`
--

INSERT INTO `reservaciones_has_espacios` (`idReservaciones_has_Espacios`, `cantidad_mesas`, `Reservaciones_idReservaciones`, `Espacios_idEspacios`) VALUES
(1, 4, 1, 2),
(2, 4, 2, 2),
(3, 8, 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salones`
--

CREATE TABLE `salones` (
  `idSalones` int(11) NOT NULL,
  `Estado` varchar(145) NOT NULL,
  `Espacios_idEspacios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `salones`
--

INSERT INTO `salones` (`idSalones`, `Estado`, `Espacios_idEspacios`) VALUES
(1, 'Abierto', 1),
(2, 'Abierto', 2),
(3, 'Abierto', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bares`
--
ALTER TABLE `bares`
  ADD PRIMARY KEY (`idBares`),
  ADD KEY `bares_ibfk_1` (`Espacios_idEspacios`),
  ADD KEY `bares_ibfk_2` (`Salones_idSalones`);

--
-- Indices de la tabla `cargosempleados`
--
ALTER TABLE `cargosempleados`
  ADD PRIMARY KEY (`idCargosEmpleados`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClientes`),
  ADD KEY `clientes_ibfk_1` (`Personas_idPersonas`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idEmpleados`),
  ADD KEY `empleados_ibfk_1` (`Personas_idPersonas`),
  ADD KEY `empleados_ibfk_2` (`CargosEmpleados_idCargosEmpleados`);

--
-- Indices de la tabla `espacios`
--
ALTER TABLE `espacios`
  ADD PRIMARY KEY (`idEspacios`);

--
-- Indices de la tabla `espacios_has_empleados`
--
ALTER TABLE `espacios_has_empleados`
  ADD PRIMARY KEY (`idEspacios_has_Empleados`),
  ADD KEY `espacios_has_empleados_ibfk_1` (`Espacios_idEspacios`),
  ADD KEY `espacios_has_empleados_ibfk_2` (`Empleados_idEmpleados`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`idMesas`),
  ADD KEY `mesas_ibfk_1` (`Salones_idSalones`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`idPersonas`);

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`idReservaciones`),
  ADD KEY `reservaciones_ibfk_1` (`Clientes_idClientes`),
  ADD KEY `reservaciones_ibfk_2` (`Empleados_idEmpleados`);

--
-- Indices de la tabla `reservaciones_has_espacios`
--
ALTER TABLE `reservaciones_has_espacios`
  ADD PRIMARY KEY (`idReservaciones_has_Espacios`),
  ADD KEY `reservaciones_has_espacios_ibfk_1` (`Reservaciones_idReservaciones`),
  ADD KEY `reservaciones_has_espacios_ibfk_2` (`Espacios_idEspacios`);

--
-- Indices de la tabla `salones`
--
ALTER TABLE `salones`
  ADD PRIMARY KEY (`idSalones`),
  ADD KEY `salones_ibfk_1` (`Espacios_idEspacios`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bares`
--
ALTER TABLE `bares`
  MODIFY `idBares` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cargosempleados`
--
ALTER TABLE `cargosempleados`
  MODIFY `idCargosEmpleados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idClientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idEmpleados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `espacios`
--
ALTER TABLE `espacios`
  MODIFY `idEspacios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `espacios_has_empleados`
--
ALTER TABLE `espacios_has_empleados`
  MODIFY `idEspacios_has_Empleados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `idMesas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `idPersonas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `idReservaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reservaciones_has_espacios`
--
ALTER TABLE `reservaciones_has_espacios`
  MODIFY `idReservaciones_has_Espacios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `salones`
--
ALTER TABLE `salones`
  MODIFY `idSalones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bares`
--
ALTER TABLE `bares`
  ADD CONSTRAINT `bares_ibfk_1` FOREIGN KEY (`Espacios_idEspacios`) REFERENCES `espacios` (`idEspacios`),
  ADD CONSTRAINT `bares_ibfk_2` FOREIGN KEY (`Salones_idSalones`) REFERENCES `salones` (`idSalones`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`Personas_idPersonas`) REFERENCES `personas` (`idPersonas`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`Personas_idPersonas`) REFERENCES `personas` (`idPersonas`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`CargosEmpleados_idCargosEmpleados`) REFERENCES `cargosempleados` (`idCargosEmpleados`);

--
-- Filtros para la tabla `espacios_has_empleados`
--
ALTER TABLE `espacios_has_empleados`
  ADD CONSTRAINT `espacios_has_empleados_ibfk_1` FOREIGN KEY (`Espacios_idEspacios`) REFERENCES `espacios` (`idEspacios`),
  ADD CONSTRAINT `espacios_has_empleados_ibfk_2` FOREIGN KEY (`Empleados_idEmpleados`) REFERENCES `empleados` (`idEmpleados`);

--
-- Filtros para la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD CONSTRAINT `mesas_ibfk_1` FOREIGN KEY (`Salones_idSalones`) REFERENCES `salones` (`idSalones`);

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD CONSTRAINT `reservaciones_ibfk_1` FOREIGN KEY (`Clientes_idClientes`) REFERENCES `clientes` (`idClientes`),
  ADD CONSTRAINT `reservaciones_ibfk_2` FOREIGN KEY (`Empleados_idEmpleados`) REFERENCES `empleados` (`idEmpleados`);

--
-- Filtros para la tabla `reservaciones_has_espacios`
--
ALTER TABLE `reservaciones_has_espacios`
  ADD CONSTRAINT `reservaciones_has_espacios_ibfk_1` FOREIGN KEY (`Reservaciones_idReservaciones`) REFERENCES `reservaciones` (`idReservaciones`),
  ADD CONSTRAINT `reservaciones_has_espacios_ibfk_2` FOREIGN KEY (`Espacios_idEspacios`) REFERENCES `espacios` (`idEspacios`);

--
-- Filtros para la tabla `salones`
--
ALTER TABLE `salones`
  ADD CONSTRAINT `salones_ibfk_1` FOREIGN KEY (`Espacios_idEspacios`) REFERENCES `espacios` (`idEspacios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
