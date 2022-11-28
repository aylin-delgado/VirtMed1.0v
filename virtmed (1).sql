-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2022 a las 06:33:24
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `virtmed`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `medico` varchar(50) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(20) COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(10) COLLATE utf8_bin NOT NULL,
  `sintomas` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`medico`, `tipo`, `fecha`, `hora`, `sintomas`) VALUES
('Dra. Lucrecia Montesinos', 'Virtual', '2022-11-29', '', 'dolor de cabeza'),
('Dr.Filomeno Pastrana', 'Virtual', '2022-11-24', '12:00pm', 'fiebre, dolor de cabeza y garganta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(30) DEFAULT NULL,
  `contraseña` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `contraseña`) VALUES
('', ''),
('ccenmivc', 'amcleo'),
('', ''),
('nahomy', 'novoa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicos`
--

CREATE TABLE `medicos` (
  `paterno` varchar(30) COLLATE utf8_bin NOT NULL,
  `materno` varchar(30) COLLATE utf8_bin NOT NULL,
  `nombres` varchar(50) COLLATE utf8_bin NOT NULL,
  `NE` varchar(10) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(30) COLLATE utf8_bin NOT NULL,
  `contraseña` varchar(400) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `medicos`
--

INSERT INTO `medicos` (`paterno`, `materno`, `nombres`, `NE`, `usuario`, `contraseña`) VALUES
('', '', '', '123456', 'Dr.Filomeno', '$2y$10$e70IOrOYR64fJ7Ia3sF1Ueqisy4SgXHzmq3jDTOkvgJAf3.0TwSD6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `Paterno` varchar(50) DEFAULT NULL,
  `Materno` varchar(50) DEFAULT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `NA` int(20) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `contraseña` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`Paterno`, `Materno`, `Nombres`, `NA`, `usuario`, `contraseña`) VALUES
('Garcia', 'Salazar', 'romeo', 122344, 'romeo', '$2y$10$hHIzLMvx0ECyvS0oxv/jIeOVFu8PftAa9GKv1rK7Ha4/iQYwYjhFC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
