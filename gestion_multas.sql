-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2023 a las 02:17:14
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestion multas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `multas`
--

CREATE TABLE `multas` (
  `Multa_ID` varchar(99) NOT NULL,
  `Patente_ID` varchar(7) NOT NULL,
  `Monto` int(99) NOT NULL,
  `Estado` varchar(99) NOT NULL,
  `Registro` varchar(99) NOT NULL,
  `Razon` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `multas`
--

INSERT INTO `multas` (`Multa_ID`, `Patente_ID`, `Monto`, `Estado`, `Registro`, `Razon`) VALUES
('001', 'AB123CD', 100, 'Pagado', 'Main Street', 'Exceso de Velocidad'),
('002', 'CD345EF', 50, 'No', 'Oak Boulevard', 'Estacionamiento'),
('004', 'JK012LM', 100, 'Pagado', 'Pine Street', 'Exceso de Velocidad'),
('005', 'BC234DE', 100, 'No', 'Elm Avenue', 'Exceso de Velocidad'),
('006', 'CD345EF', 50, 'No', 'Oak Boulevard', 'Estacionamiento'),
('007', 'DE456FG', 150, 'No', 'Pine Street', 'Semáforo en Rojo'),
('009', 'GH789IJ', 50, 'No', 'Walnut Street', 'Estacionamiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patentes`
--

CREATE TABLE `patentes` (
  `Patente_ID` varchar(7) NOT NULL,
  `nombre` varchar(99) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `dirección` varchar(99) NOT NULL,
  `modelo` varchar(99) NOT NULL,
  `marca` varchar(99) NOT NULL,
  `año` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `patentes`
--

INSERT INTO `patentes` (`Patente_ID`, `nombre`, `dni`, `dirección`, `modelo`, `marca`, `año`) VALUES
('AB123CD', 'John', '12345678', '123 Main Street', 'Focus', 'Ford', 2023),
('BC234DE', 'Lisa', '23456789', '456 Elm Avenue', 'Civic', 'Honda', 2023),
('CD345EF', 'Mark', '34567890', '789 Oak Boulevard', 'Corolla', 'Toyota', 2023),
('DE456FG', 'Anna', '45678901', '456 Pine Street', 'X5', 'BMW', 2023),
('EF567GH', 'Alex', '56789012', '987 Maple Avenue', 'Mustang', 'Ford', 2023),
('FG678HI', 'Emma', '67890123', '654 Cedar Lane', 'Accord', 'Honda', 2023),
('GH789IJ', 'Jack', '78901234', '321 Walnut Street', 'Camry', 'Toyota', 2023),
('HI890JK', 'Mia', '89012345', '789 Elm Avenue', '320i', 'BMW', 2023),
('IJ901KL', 'Luke', '90123456', '987 Oak Boulevard', 'Escape', 'Ford', 2023),
('JK012LM', 'Sara', '01234567', '654 Pine Street', 'CR-V', 'Honda', 2023);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `multas`
--
ALTER TABLE `multas`
  ADD PRIMARY KEY (`Multa_ID`),
  ADD KEY `Patente_ID` (`Patente_ID`);

--
-- Indices de la tabla `patentes`
--
ALTER TABLE `patentes`
  ADD PRIMARY KEY (`Patente_ID`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `multas`
--
ALTER TABLE `multas`
  ADD CONSTRAINT `multas_ibfk_1` FOREIGN KEY (`Patente_ID`) REFERENCES `patentes` (`Patente_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
