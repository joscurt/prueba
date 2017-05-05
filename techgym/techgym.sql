-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2017 a las 01:45:49
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `techgym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alumno_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id`, `Fecha`, `Descripcion`, `alumno_id`) VALUES
(17, '2016-11-14 22:46:00', 'Prueba 5', 63),
(18, '2016-12-01 22:55:00', 'Prueba 6', 64),
(19, '2016-11-15 19:31:00', 'Prueba 7', 74),
(20, '2016-11-15 19:56:00', 'Prueba 8', 57),
(21, '2016-11-15 20:21:00', 'Prueba 9', 73),
(22, '2016-11-25 00:00:00', NULL, 57),
(23, '2016-11-25 00:00:00', NULL, 62),
(24, '2016-11-15 20:23:00', 'Prueba 10', 57),
(25, '2016-11-15 20:29:00', NULL, 71),
(26, '2016-11-19 20:31:00', 'Prueba 11', 57),
(27, '2016-11-16 01:26:00', 'prueba 12', 66),
(28, '2016-11-22 03:28:00', 'Prueba12', 57),
(29, '2016-11-17 18:10:00', 'Probando', 62),
(30, '2016-11-17 15:48:00', 'Tempranitooo', 58),
(31, '2016-11-16 14:38:00', NULL, 63),
(32, '2016-11-16 12:45:00', NULL, 67),
(33, '2016-11-16 20:43:00', NULL, 63),
(34, '2016-11-17 22:13:00', 'Gym', 64),
(35, '2016-11-17 20:21:00', 'GYM', 64),
(36, '2016-11-18 09:40:00', 'Esta es la Descripción de la Agendación', 69),
(37, '2016-11-17 19:53:00', NULL, 63),
(38, '2016-11-17 18:53:00', NULL, 71),
(39, '2016-11-17 20:40:00', NULL, 73),
(40, '2016-11-18 07:07:00', 'Horario de Gym', 78),
(41, '2016-11-24 13:32:00', NULL, 63),
(42, '2016-11-28 04:07:00', 'Asdasdsad', 67),
(43, '2016-11-28 09:16:00', 'asdasdasdasd', 57),
(44, '2016-11-28 23:04:00', NULL, 57),
(45, '2016-11-29 20:05:00', NULL, 67),
(46, '2016-11-28 21:26:00', NULL, 69),
(47, '2016-11-28 20:49:00', NULL, 58),
(48, '2016-11-28 23:07:00', NULL, 74),
(49, '2016-11-28 20:31:00', NULL, 76),
(50, '2016-11-29 00:00:00', NULL, 57),
(51, '2016-11-28 20:35:00', NULL, 66),
(52, '2016-11-28 20:48:00', NULL, 75),
(53, '2016-11-28 23:38:00', NULL, 69),
(54, '2016-11-29 21:18:00', NULL, 67),
(55, '2016-12-02 18:01:00', NULL, 57),
(56, '2016-12-02 22:02:00', NULL, 58),
(57, '2016-12-02 16:24:00', NULL, 60),
(58, '2016-12-02 17:22:00', NULL, 62),
(59, '2016-12-03 00:00:00', NULL, 63),
(60, '2016-12-03 13:03:00', NULL, 57),
(61, '2016-12-08 13:03:00', NULL, 75),
(62, '2016-12-06 13:04:00', NULL, 57),
(63, '2016-12-15 00:00:00', NULL, 72),
(64, '2016-12-17 00:00:00', NULL, 73),
(65, '2016-12-20 09:00:00', NULL, 76),
(66, '2016-12-02 18:32:00', NULL, 74),
(67, '2016-12-02 20:10:00', NULL, 76),
(68, '2016-12-02 20:28:00', NULL, 71),
(69, '2017-02-16 03:00:00', NULL, 64),
(70, '2017-04-25 20:14:00', 'qweasdf', 57),
(71, '2017-04-25 21:16:00', 'qweasdf', 66),
(72, '2017-05-05 16:04:00', 'Hola mundo', 68),
(73, '2017-05-06 15:05:00', 'Pruebaas', 63),
(74, '2017-05-05 17:15:00', 'Prueba 3', 58),
(75, '2017-05-05 16:20:00', 'Prueba 4', 62),
(76, '2017-05-09 00:00:00', 'prueba 5', 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `tokenRegistro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagenalumno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `gimnasio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id`, `usuario_id`, `nombre`, `apellidos`, `salt`, `username`, `password`, `email`, `isActive`, `tokenRegistro`, `imagenalumno`, `fecha_creacion`, `fecha_modificacion`, `sexo`, `fecha_nacimiento`, `gimnasio`, `celular`) VALUES
(27, 4, 'Alumno 1', 'Alumno 1 apellidos', '28cd1fd1f8', 'alumn1', 'laQYniYiZqJ1VHDA/QelYQ==', 'alumno1@alumno1.cl', 0, '80357dbedea3b369ed93e5a116b76bc5', '', '0000-00-00 00:00:00', '2016-08-25 08:27:07', '', '0000-00-00 00:00:00', '', '0'),
(31, 4, 'Hola3', 'Alumno 3', '1d5f92c481', 'Alumn3', 'vvSLPGZMhromz3bnlS97MA==', 'email@email.com', 0, '06f18639cbc664538f726980601d90ad', '', '0000-00-00 00:00:00', '2016-08-25 08:21:59', '', '0000-00-00 00:00:00', '', '0'),
(32, 4, 'Hola457', 'morande', '6db9444d7a', 'alumno5', 'Eog8GT/TKseeZgtNaIKJqg==', 'email@email.com', 0, 'd622f2f60b815b1b9cb1e5d6c8cc48b6', '', '0000-00-00 00:00:00', '2016-08-25 09:29:09', '', '0000-00-00 00:00:00', '', '0'),
(33, 19, 'Alumno 12', 'Alumno 12 apellidos', 'd18db34ec0', 'alumn12', 'h6xRxMZlKqeJKZoJ0jpiFw==', 'alumno1@alumno1.cl', 0, 'd3c0249c19f307581ff4e5535b719b8c', '', '0000-00-00 00:00:00', '2016-08-25 08:20:14', '', '0000-00-00 00:00:00', '', '0'),
(34, 19, 'Hola33', 'Alumno 33', '0ef20435be', 'Alumn33', 'uC+8bHPAqpiMnCG69UMl7w==', 'email@email.com', 0, 'fe37dfb1ebf5fa668bcb2a2ea4440f3b', '', '0000-00-00 00:00:00', '2016-08-25 08:08:05', '', '0000-00-00 00:00:00', '', '0'),
(35, 19, 'Hola35', 'Alumno 35', '930bb99db0', 'Alumn35', 'UpRolTJpreLf7W276MBENg==', 'email@email.com', 0, 'd7f67bcd8ef6899bdc5039e2f5f80432', '', '0000-00-00 00:00:00', '2016-08-25 07:51:58', '', '0000-00-00 00:00:00', '', '0'),
(36, 19, 'alumno 5', 'alumno 5', '7c2ab67d86', 'alumno55', '6UVYljoE75NDP7K3FZNjxA==', 'email@email.com', 0, 'd993fcb723c3d85fc929d52a1e056331', 'f772f00dedb48ea94725de95e6dd99cc.jpeg', '2016-08-22 22:57:29', '2016-08-22 22:57:30', '', '0000-00-00 00:00:00', '', '0'),
(37, 19, 'alumno 5', 'alumno 5', '9ce4a17ce0', 'alumno55', 'LOQEL1ruxxvHXFW9aKHixw==', 'email@email.com', 0, '5e3ad0ea52977a619eec3974632ca9ee', '631a2a3a205d8bca10c83e5ebe0e3585.jpeg', '2016-08-23 08:59:57', '2016-08-27 17:56:15', '', '0000-00-00 00:00:00', '', '0'),
(38, 19, 'alumno 5', 'alumno 5', '6c9111b4f2', 'alumno55', 'TS5O2xG6nA/3C4CCdaC3/w==', 'email@email.com', 0, '624832bc27a0e803682d0c8029e1317b', 'b934b10b15bf707696604d86425d9e8b.jpeg', '2016-08-24 00:55:35', '2016-08-27 17:55:35', '', '0000-00-00 00:00:00', '', '0'),
(39, 19, 'alumno 5', 'alumno 5', 'bed5c4ec18', 'alumno556', 'P4/CQzjHmlXBn5nrTu41yQ==', 'email@email.com', 0, '14990af6796de7c388b2398947553f0d', '8ff0885448a418322833c56c9f788983.jpeg', '2016-08-24 00:56:38', '2016-08-27 17:55:10', '', '0000-00-00 00:00:00', '', '0'),
(40, 19, 'alumno 58', 'alumno 5', '8b0d0e897c', 'alumno556', 'WDh9MbkKlE1ruYRq5QCKUw==', 'email@email.com', 0, '6a3b0bab994102d602a3ec5225774b69', '93e26fc8522edcfae5be04de4e6c8604.jpeg', '2016-08-24 22:47:07', '2016-08-27 17:54:44', '', '0000-00-00 00:00:00', '', '0'),
(41, 19, 'alumno 53', 'alumno 53', 'a0fa3a4016', 'alumno5563', '5K8gDkp1E9eMWr7cTqcZUA==', 'email@email.com', 1, 'aca89db36e03a1b37a963b559160927f', 'f622888cfeb31a79d6635448b0a55f32.jpeg', '2016-08-24 22:51:58', '2016-10-05 09:01:08', '', '0000-00-00 00:00:00', '', '0'),
(42, 30, 'alumno 53345', 'alumno 53ww', 'e6831d85e3', 'alumno5563', 'L6xYuBHiG0K3dFGjGhznEg==', 'email@email.com', 0, 'b151f0740d9c180b9fee2f030a249d9f', '251c1bc2dbeb809d0baa87f3b19c49ab.jpeg', '2016-08-24 22:53:23', '2016-09-22 04:44:03', '', '0000-00-00 00:00:00', '', '0'),
(57, 30, 'Marina', 'Ribeiro Martins', '452dbd95ae', 'Barros', 'mrE7CGmhny51BfrhBKcFFw==', 'MarinaRibeiroMartins@superrito.com', 1, '326069a53a9a6f3fd702a69e11cacac3', '3d0273bd81008c223c7ee6645134c1e9.jpeg', '2016-08-30 10:24:40', '2016-11-05 06:48:28', 'Femenino', '0000-00-00 00:00:00', '', '0'),
(58, 30, 'Leonor', 'Alves Azevedo', 'ee5d5ce9cf', 'Correia', '2Vc/O1u1qhbvUF5sFbRPMA==', 'LeonorAlvesAzevedo@gustr.com', 1, '21744573844cb25326bc8e6c600c54a4', 'f89f712b2a7d8262a07b3908ec0e4cd0.jpeg', '2016-09-01 10:47:52', '2016-11-05 06:47:42', '', '0000-00-00 00:00:00', '', '0'),
(60, 30, 'Mariana', 'Correia Costa', 'c3252bd491', 'Rocha', 'hRXKuxJBIUYllFhxQsp2gg==', 'MarianaCorreiaCosta@gustr.com', 1, 'bf693b87d2e63d79bc0194644e0393ee', 'e4dc1f53bb66ee7c01bff620677a0c41.jpeg', '2016-09-03 09:56:28', '2016-11-05 06:47:10', '', '0000-00-00 00:00:00', '', '0'),
(62, 30, 'André', 'Souza Goncalves', '82d97ae82e', 'Costa', 'WamoDbF7dhnrOG+ZmUz8Ug==', 'AndreSouzaGoncalves@gustr.com', 1, 'fb749bbb5fbce19b2f6658ad43822588', '27e49b893e3f08181a4fbf20526984dc.jpeg', '2015-07-28 20:49:33', '2016-11-05 06:46:36', '', '0000-00-00 00:00:00', '', '0'),
(63, 30, 'José Luis', 'Morandé Capdevila', '586a0c7d8e', 'jlmorande', '90ae0IZZb5NSkOYw32UsQg==', 'joscurt@gmail.com', 1, 'e5d5cd6c8dc351e0aa89440398a87657', '4e17e8a435d6f094a9b3ff0871b0f522.jpeg', '2016-07-01 08:51:50', '2016-11-24 17:34:09', 'Masculino', '1985-10-30 00:00:00', 'Pacific Fitness', '99468017'),
(64, 30, 'Eduardo', 'Alves Oliveira', 'e79927a623', 'Cardoso', 'wW4Du89ukXS0JQW7olaeDw==', 'EduardoAlvesOliveira@superrito.com', 1, '2dc29dfacb02f35a6aee6283db5b2e1d', 'bf7b521a16f770e471f0f3466a43674a.png', '2016-07-18 10:11:03', '2016-11-05 06:44:46', 'Masculino', '0000-00-00 00:00:00', '', '0'),
(66, 30, 'Igor', 'Almeida Araujo', 'af42d31eb0', 'Gomes', 'OZkW6LNqawH9+rgYEe2pvw==', 'IgorAlmeidaAraujo@superrito.com', 1, '8afb92994fcd8b7ce65bfcb48e87942b', '5560cf5ee0722db6d78f85d127c09b17.jpeg', '2016-07-13 07:21:52', '2016-11-18 08:39:57', 'Masculino', '1952-11-30 00:00:00', 'Pacific Fitness', '790 440 059'),
(67, 30, 'Letícia', 'Santos Costa', 'e216b50fc6', 'Lima', 'xpVcN3nWN6B3QPmrzJQYVg==', 'LeticiaSantosCosta@gustr.com', 1, '8105c60886c5ac4c4ce45ce54a1a9506', '6a7cb56d8362f0480e806eb5935b52ac.jpeg', '2016-06-15 06:57:55', '2016-11-18 08:39:29', 'Femenino', '1957-11-30 00:00:00', 'Sportlife', '796 571 315'),
(68, 30, 'Emilly', 'Rodrigues Pereira', 'cfbb68bdfc', 'Ferreira', '+wh3nUJKv5PgR1Oq7gSNcA==', 'EmillyRodriguesPereira@superrito.com', 1, '8d1d8f1fb665c265fb260a1a3a754650', '6a66e3687fed63605444e647679b1044.jpeg', '2016-05-10 06:58:35', '2016-11-18 08:38:47', 'Femenino', '1944-11-30 00:00:00', 'Energy Gym', '733 640 114'),
(69, 30, 'Carla', 'Pinto Barros', '66f5058e24', 'Pinto', 'RKDEStdII194BKcu9KOoXg==', 'CarlaPintoBarros@superrito.com', 1, '587925ebb3773e0194567d5571d2f916', '225b466bd9811bdc2cdc65ddefd5fc16.jpeg', '2016-05-26 06:59:03', '2016-11-18 08:38:27', 'Femenino', '1986-11-30 00:00:00', 'Pacific Fitness', '733 985 805'),
(70, 30, 'Matilde', 'Pereira Rodrigues', '7c3d18bf91', 'Barros', '869O39XLxthK4EDrqsvNqw==', 'MatildePereiraRodrigues@superrito.com', 1, '6f632fa746653035b02fa958e75a7e81', 'e026113c96438bb8e2781a01106ee5f5.jpeg', '2016-04-07 06:59:35', '2016-11-18 08:38:04', 'Femenino', '1983-11-30 00:00:00', 'Energy Gym', '661 322 180'),
(71, 30, 'Carlos', 'Cavalcanti Dias', '2f59bd7a96', 'Rodrigues', 'jMKEziC0TC/CxBjcoA/C8w==', 'CarlosCavalcantiDias@superrito.com', 1, '4d82304b450bc4b5aaca2bc3fb0f5e49', '35ba24b7e79e378c986e9c42d19ebf85.jpeg', '2016-03-28 07:00:50', '2016-11-18 08:37:30', 'Masculino', '1960-11-30 00:00:00', 'Sportlife', '763 719 619'),
(72, 30, 'Tomás', 'Cavalcanti Rocha', '2e3a763174', 'Barbosa', 'ww1DvywhMsMb+TJ7gihsoQ==', 'TomasCavalcantiRocha@gustr.com', 1, '3cdf45f99716f522b9c289a959405479', 'b6a5662dde7dc0a9d8eb25ffac4f299e.jpeg', '2016-03-21 07:01:33', '2016-11-18 08:36:23', 'Masculino', '1988-11-30 00:00:00', 'Pacific Fitness', '673 560 983'),
(73, 30, 'Vitória', 'Pereira Souza', '3747faaddb', 'Silva', 'SCvGZx/01dsMb8Jv2xyNFg==', 'VitoriaPereiraSouza@gustr.com', 1, '5d9fadd2be0e14a8c9c9b75d0af4c9ed', 'f27dcfb0997d65922c3a73247cbe1d78.jpeg', '2016-03-16 07:02:01', '2016-11-18 08:35:54', 'Femenino', '1999-11-30 00:00:00', 'Sportlife', '618 090 831'),
(74, 30, 'Estevan', 'Sousa Goncalves', 'fef4aa770e', 'Carvalho', 'vGSvAMvGM+EQIP+CBjgP9w==', 'EstevanSousaGoncalves@gustr.com', 1, '226c28d2693cce35db326fae31af4471', '961732d82a5b528b13fd2bfe07c88fa7.jpeg', '2016-02-09 07:02:58', '2016-11-18 08:35:04', 'Masculino', '1984-11-30 00:00:00', 'Energy Gym', '670 982 154'),
(75, 30, 'Isabela', 'Melo Fernandes', 'a2c86c4456', 'Gomes', 'DOS4B/kAr2CsRVM5HnlZAA==', 'IsabelaMeloFernandes@superrito.com', 1, '8b187093ab98b6f13b1eb9c0331f89a1', 'adcc55494c0f625978fd3664fae735cf.jpeg', '2016-01-11 07:03:28', '2016-11-18 08:34:26', 'Femenino', '1976-11-30 00:00:00', 'Pacific Fitness', '716 421 035'),
(76, 30, 'Rafael', 'Martins Castro', '9ec3415df5', 'Silva', 'Ef0qtPVdwhrrn7ARvX3d2g==', 'RafaelMartinsCastro@gustr.com', 1, '3410327f9b09d33fcf3b32e9a127ba21', 'd01040f0553f338ee74bdedb3c574bb6.png', '2016-01-13 07:04:03', '2016-11-29 03:51:50', 'Masculino', '1990-09-29 00:00:00', 'Pacific Fitness', '735 271 010'),
(77, 30, 'Aquiles', 'González Saavedra', '820e2c4246', 'agonzalez', 'sVkBVocTOwL4II3YrZoXSw==', 'joscurt@gmail.com', 1, '6363ed160b2b8a8c03b6629fff013b47', '2d85cf52fd7730e68fe569dc17642a73.jpeg', '2016-11-08 07:52:37', '2016-11-18 07:58:19', 'Femenino', '1959-06-23 00:00:00', 'Pacific Fitness', '56 99470152'),
(78, 30, 'Rafael', 'Rocha Castro', '6c499d8b47', 'Rocha', 'AYbN9KiRABRSYT19mPpnWg==', 'RafaelRochaCastro@superrito.com', 1, '73a950f799deb007b31a707395d47a30', '021c1c7cdf5bd94131addbc145601236.jpeg', '2016-11-18 08:06:32', '2016-11-18 08:06:32', 'Masculino', '1991-10-23 00:00:00', 'Sportlife', '622 013 665'),
(79, 30, 'Claudio', 'Espinoza Capdevila', 'e03e0873f9', 'cespinoza', 'a8P0I9+N+bY6j4SQAkxPSA==', 'cespinoza@cdec.cl', 1, '52226ecd5f9ea67ea10dd66dca4f2f16', 'c9ca5c5adf29921a60dfbd7591e6e7d2.jpeg', '2016-12-02 17:13:07', '2016-12-02 17:13:07', 'Masculino', '1960-04-13 00:00:00', 'Energy Gym', '99784512'),
(80, 30, 'Hola3', 'morande', 'c127a8da19', 'erwrwer', 'zPi+bdsRJ7hpMx7GgT6Y/Q==', 'email@email.com', 1, 'e5fa2af81c72312a9ac25a0fabaa09b8', 'user.jpg', '2017-02-27 01:32:52', '2017-02-27 01:32:52', 'Femenino', '1918-03-15 00:00:00', 'admin', '08797687687'),
(81, 30, 'dssdfsdf', 'sdfsdfsdf', '5b12f85aac', 'sdfsdfsdf', 'bYDYlN+matsKNmevRPg23A==', 'sdfsdf@dfgdfg.cl', 1, '96ad21146047a51879beb9c29c93d3ac', 'user.jpg', '2017-04-11 04:49:15', '2017-04-11 04:49:15', 'Masculino', '1906-04-06 00:00:00', 'miooooo', '789456123'),
(82, 30, 'Hola3', 'morande', 'abdfce163c', 'erwrwer', 'ngwW1FniL455+qXNak+6Ag==', 'email@email.com', 1, '2333e655dcf8a9e2d1a6e52474a45261', 'user.jpg', '2017-04-26 00:43:22', '2017-04-26 00:43:22', 'Masculino', '1904-08-03 00:00:00', 'admin', '08797687687'),
(83, 30, 'jose', 'morande', 'c994ac2e73', 'erwrwer', 'obCpOVHZraGXallNQngCaA==', 'joscurt@gmail.com', 1, '1a55d7faa536819e2e7e496fc65a4d2a', 'user.jpg', '2017-05-05 19:14:27', '2017-05-05 19:14:27', 'Masculino', '1918-01-15 00:00:00', 'joscurt22', '08797687687');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_grupo`
--

CREATE TABLE `alumno_grupo` (
  `alumno_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `alumno_grupo`
--

INSERT INTO `alumno_grupo` (`alumno_id`, `grupo_id`) VALUES
(27, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(57, 2),
(58, 2),
(60, 2),
(62, 2),
(63, 2),
(64, 2),
(66, 2),
(67, 2),
(68, 2),
(69, 2),
(70, 2),
(71, 2),
(72, 2),
(73, 2),
(74, 2),
(75, 2),
(76, 2),
(77, 2),
(78, 2),
(79, 2),
(80, 2),
(81, 2),
(82, 2),
(83, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_rutina`
--

CREATE TABLE `alumno_rutina` (
  `alumno_id` int(11) NOT NULL,
  `rutina_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `alumno_rutina`
--

INSERT INTO `alumno_rutina` (`alumno_id`, `rutina_id`) VALUES
(41, 2),
(60, 1),
(62, 2),
(63, 27),
(66, 6),
(76, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `series` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `repeticiones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `instructivos` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ejercicio`
--

INSERT INTO `ejercicio` (`id`, `nombre`, `series`, `repeticiones`, `instructivos`) VALUES
(1, 'Máquina Press de Pecho', '2-3', '8-12', 'Este Ejercicio se Hace Así'),
(2, 'Polea al Pecho', '2-3', '10-15', 'Llevar la barra hasta el pecho'),
(3, 'Press Banca', '2-3', '10-15', ''),
(4, 'Peck Deck', '2-3', '10-15', ''),
(5, 'Curl mancuernas', '3-4', '10-15', ''),
(6, 'Barra Bicep', '3-4', '10-15', ''),
(7, 'bicep banco', '2-3', '10-15', ''),
(8, 'Press Francés', '2-3', '10-15', ''),
(9, 'Polea Tricep', '3-4', '10-15', ''),
(10, 'Sentadillas', '3-4', '10-15', ''),
(11, 'Extension de Piernas', '2-3', '10-15', ''),
(12, 'Estocadas Caminando', '3-4', '10-15', ''),
(13, 'Prensa Piernas', '2-3', '10-15', ''),
(14, 'Peso Muerto Isqueo', '3-4', '10-15', ''),
(15, 'Peso muerto ', '3-4', '10-15', ''),
(16, 'Dominadas', '3-4', '4-6', ''),
(17, 'pull Over', '2-3', '10-15', ''),
(18, 'Abdominal en Banco Declinado', '4', '30-40', ''),
(19, 'Abdminal levantamiento piernas', '4', '10-15', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio_rutina`
--

CREATE TABLE `ejercicio_rutina` (
  `ejercicio_id` int(11) NOT NULL,
  `rutina_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ejercicio_rutina`
--

INSERT INTO `ejercicio_rutina` (`ejercicio_id`, `rutina_id`) VALUES
(1, 42),
(2, 2),
(2, 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion`
--

CREATE TABLE `evaluacion` (
  `id` int(11) NOT NULL,
  `edad` double NOT NULL,
  `estatura` double NOT NULL,
  `peso` double NOT NULL,
  `p_grasa` double DEFAULT NULL,
  `pliegue_triceps` double NOT NULL,
  `pliegue_subescapular` double NOT NULL,
  `pliegue_suprailiaco` double NOT NULL,
  `pliegue_biceps` double NOT NULL,
  `peso_grasa` double DEFAULT NULL,
  `peso_magro` double DEFAULT NULL,
  `imc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alumno_id` int(11) DEFAULT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `densidad_corporal` double NOT NULL,
  `ptusuario_id` int(11) DEFAULT NULL,
  `imageneva` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `evaluacion`
--

INSERT INTO `evaluacion` (`id`, `edad`, `estatura`, `peso`, `p_grasa`, `pliegue_triceps`, `pliegue_subescapular`, `pliegue_suprailiaco`, `pliegue_biceps`, `peso_grasa`, `peso_magro`, `imc`, `alumno_id`, `fecha_creacion`, `fecha_modificacion`, `densidad_corporal`, `ptusuario_id`, `imageneva`) VALUES
(24, 30, 171, 75, 14.457186808239, 8, 3, 4, 2, 11.565749446591, 68.434250553409, '27.358845456722', 42, '2016-08-26 11:19:28', '2016-08-26 11:19:28', 1.06612, 30, NULL),
(25, 30, 171, 80, 14.457186808239, 8, 3, 4, 7, 11.565749446591, 68.434250553409, '27.358845456722', 42, '2016-08-27 00:26:35', '2016-08-27 00:26:35', 1.06612, 30, NULL),
(26, 30, 171, 85, 11.994650650949, 1, 1, 4, 2, 10.195453053307, 74.804546946693, '29.068773297767', 42, '2016-08-27 07:08:33', '2016-08-27 07:08:33', 1.07228, 30, NULL),
(33, 35, 180, 85, 17.710328989027, 7, 15, 15, 7, 15.053779640673, 69.946220359327, '26.234567901235', 57, '2016-08-31 05:33:17', '2016-08-31 05:33:17', 1.05809, 30, NULL),
(34, 31, 171, 80, 23.93395202577, 25, 20, 14, 7, 19.147161620616, 60.852838379384, '27.358845456722', 63, '2016-08-17 11:10:17', '2016-09-22 11:10:17', 1.04306, 30, NULL),
(35, 32, 172, 82, 20.603291946149, 15, 15, 15, 15, 16.894699395842, 65.105300604158, '27.717685235262', 63, '2016-09-05 11:35:30', '2016-09-14 11:35:30', 1.05105, 30, NULL),
(36, 34, 180, 89, 17.710328989027, 7, 1, 15, 20, 15.762192800234, 73.237807199766, '27.469135802469', 63, '2016-09-07 07:57:11', '2016-09-23 07:57:11', 1.05809, 30, NULL),
(37, 57, 180, 120, 22.577214947912, 25, 6, 10, 20, 27.092657937494, 92.907342062506, '37.037037037037', 63, '2016-09-10 00:10:12', '2016-09-24 00:10:12', 1.0463, 30, '4e17e8a435d6f094a9b3ff0871b0f522.jpeg'),
(38, 47, 178, 90, 23.93395202577, 25, 20, 14, 20, 21.540556823193, 68.459443176807, '28.405504355511', 63, '2016-09-15 00:29:58', '2016-09-24 00:29:58', 1.04306, 30, '4239cc0315041102f8fa5cdd2da20f5f.jpeg'),
(39, 59, 180, 150, 42.480323773359, 40, 80, 50, 25, 63.720485660038, 86.279514339962, '46.296296296296', 63, '2016-09-23 00:58:12', '2016-09-01 00:58:12', 1.0007, 30, '7338daf9c67c2c30ce4b562d704dc008.jpeg'),
(40, 23, 178, 190, 57.206172635749, 70, 56, 56, 68, 108.69172800792, 81.308271992078, '59.967175861634', 63, '2016-09-24 08:39:37', '2016-09-24 08:39:37', 0.96944, 30, '2d4a2c46c5f7d5e0c0057f408e9f3f40.jpeg'),
(41, 31, 175, 85, 24.274454305589, 25, 15, 15, 15, 20.633286159751, 64.366713840249, '27.755102040816', 63, '2016-10-08 17:08:31', '2016-10-08 17:08:31', 1.04225, 30, 'b25ac0dd2e10b6b528c8051a2a1c7393.jpeg'),
(42, 31, 180, 85, 22.285195797517, 15, 25, 20, 11, 18.942416427889, 66.057583572111, '26.234567901235', 63, '2016-11-05 07:28:11', '2016-11-05 07:28:11', 1.047, 30, '8e5e26764e6035b17522eebd746e6471.jpeg'),
(43, 27, 165, 58, 20.603291946149, 15, 15, 15, 15, 11.949909328767, 46.050090671233, '21.303948576676', 75, '2016-11-05 15:33:16', '2016-11-05 15:33:16', 1.05105, 30, 'ad0e665e381ab3955e7f3e823a16819d.jpeg'),
(44, 35, 174, 89, 27.708814001837, 25, 15, 25, 15, 24.660844461635, 64.339155538365, '29.396221429515', 74, '2016-11-05 16:51:08', '2016-11-05 16:51:08', 1.03415, 30, '8cdf5f7889cde2def14042004e0c79b2.jpeg'),
(45, 28, 154, 70, 24.127258776137, 20, 20, 20, 20, 16.889081143296, 53.110918856704, '29.515938606848', 73, '2016-11-05 16:52:02', '2016-11-05 16:52:02', 1.0426, 30, '9f0ff173416e302c19a135c542a124ff.jpeg'),
(46, 29, 173, 70, 26.672870400741, 25, 23, 22, 24, 18.671009280519, 51.328990719481, '23.388686558188', 72, '2016-11-05 16:53:07', '2016-11-05 16:53:07', 1.03658, 30, '49db893a2377a7445c38c37b3ea8c7a6.jpeg'),
(47, 24, 165, 62, 31.045518316446, 20, 35, 40, 30, 19.248221356196, 42.751778643804, '22.77318640955', 70, '2016-11-05 16:53:51', '2016-11-05 16:53:51', 1.0264, 30, 'd25ff39358de8358ebf980a933a6caea.jpeg'),
(48, 27, 165, 57, 21.610875245561, 15, 17, 18, 16, 12.31819888997, 44.68180111003, '20.936639118457', 60, '2016-11-05 16:54:59', '2016-11-05 16:54:59', 1.04862, 30, 'a3f20f1fa503d9f91bf593c0ce615ea6.jpeg'),
(49, 34, 171, 85, 27.708814001837, 25, 35, 25, 25, 23.552491901562, 61.447508098438, '29.068773297767', 77, '2016-11-08 08:05:53', '2016-11-08 08:05:53', 1.03415, 30, 'Hombre.jpg'),
(50, 57, 180, 90, 21.04224040229, 7, 35, 25, 68, 18.938016362061, 71.061983637939, '27.777777777778', 77, '2016-11-08 08:13:13', '2016-11-08 08:13:13', 1.04999, 30, 'Hombre.jpg'),
(51, 31, 180, 90, 23.640116501878, 15, 35, 24, 68, 21.27610485169, 68.72389514831, '27.777777777778', 77, '2016-11-08 08:14:46', '2016-11-08 08:14:46', 1.04376, 30, 'Mujer.jpg'),
(52, 57, 180, 89, 25.836589475711, 20, 20, 25, 25, 22.994564633383, 66.005435366617, '27.469135802469', 77, '2016-11-08 09:29:34', '2016-11-08 09:29:34', 1.03855, 30, 'Mujer.jpg'),
(53, 57, 180, 89, 23.980162040366, 15, 35, 25, 5, 21.342344215926, 67.657655784074, '27.469135802469', 77, '2016-11-08 09:32:25', '2016-11-08 09:32:25', 1.04295, 30, 'Mujer.jpg'),
(54, 56, 180, 89, 22.873805220019, 12, 25, 25, 54, 20.357686645817, 68.642313354183, '27.469135802469', 79, '2016-12-02 17:17:19', '2016-12-02 17:17:19', 1.04559, 30, 'Hombre.jpg'),
(55, 56, 180, 70, 30.89374239104, 15, 35, 45, 25, 21.625619673728, 48.374380326272, '21.604938271605', 79, '2016-12-02 17:18:58', '2016-12-02 17:18:58', 1.02675, 30, 'Hombre.jpg'),
(56, 98, 178, 58, 41.587604970778, 12, 56, 78, 45, 24.120810883051, 33.879189116949, '18.305769473551', 80, '2017-02-27 01:34:45', '2017-02-27 01:34:45', 1.00266, 30, 'Mujer.jpg'),
(57, 98, 178, 58, 29.351517974998, 45, 67, 8, 45, 17.023880425499, 40.976119574501, '18.305769473551', 80, '2017-02-27 02:15:11', '2017-02-27 02:15:11', 1.03032, 30, '5003fdbee8659a68985291b76ed6bab1.jpeg'),
(58, 112, 178, 58, 49.797075904642, 34, 12, 76, 76, 28.882304024692, 29.117695975308, '18.305769473551', 82, '2017-04-26 01:00:45', '2017-04-26 01:00:45', 0.98492, 30, 'eaee4c4ca937386e9b1c06f9b7dd828f.png'),
(59, 112, 178, 80, 54.032907449719, 34, 12, 87, 54, 43.226325959775, 36.773674040225, '25.249337204898', 82, '2017-04-26 01:04:37', '2017-04-26 01:04:37', 0.97601, 30, 'Hombre.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `nombre`, `rol`) VALUES
(1, 'registrado', 'ROLE_PROFESOR'),
(2, 'alumno', 'ROLE_ALUMNO'),
(3, 'administrador', 'ROLE_ADMIN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subcategoria` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Colores` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modelos` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `codigo`, `descripcion`, `imagen`, `categoria`, `subcategoria`, `Colores`, `modelos`) VALUES
(1, 'producto 1', '123123', 'Esto es un producto', 'C:\\xampp\\tmp\\php9AAE.tmp', 'categoria 1', 'categoria 2', 'rojo', 'modelo prueba'),
(2, 'producto 13', '12312333', 'Esto es un producto33', 'C:\\xampp\\tmp\\php1CB7.tmp', 'categoria 1', 'categoria 2|', 'rojo', '321654987'),
(3, 'producto 132', '213124354', 'dec', 'C:\\xampp\\tmp\\php3C20.tmp', 'categoria 1', 'subcategoria2', 'rojo', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pt_usuario`
--

CREATE TABLE `pt_usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `tokenRegistro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_modificacion` datetime NOT NULL,
  `imagenpt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pt_usuario`
--

INSERT INTO `pt_usuario` (`id`, `nombre`, `apellidos`, `salt`, `username`, `password`, `email`, `isActive`, `tokenRegistro`, `fecha_creacion`, `fecha_modificacion`, `imagenpt`, `sexo`) VALUES
(1, 'jose', 'morande', '1357f56433', 'joscurt3', '7vkHbtEVoxcgX/YbaaNx6w==', 'joscurt@sdfgmail.comdsfsdfsd', 0, 'f859714411aca0642f70c9b5ef4ea4ca', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(2, 'jose', 'morande', '219df38be8', 'joscurt', 'i/2S55byAv+SOikNDyw9yw==', 'joscurt@sdfgmail.comdsfsdfsd', 0, 'c16e59535dd695f577c004921180ba95', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(3, 'jose', 'morande', '91b3302040', 'joscurt2', '3OidR7cUWBXrkW4mkVKo0Q==', 'joscurt@sdfgmail.comdsfsdfsd', 1, '3bc9c69cf5ffddd57b93d6a42e095c94', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(4, 'jose', 'morande', '51f7d31a44', 'joscurt5', 'iG1nEvXhBzys4R5ikbNCCw==', 'joscurt@gmail.com', 1, '7f90318b3ec15fbd81c211b4a05f6504', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(5, 'jose', 'morande', '756e5c23dc', 'joscurt6', '2MzqrAHlO3GTwR8+GpYWrA==', 'joscurt@gmail.com', 1, 'd3613522896094cad5b3f579d3946cb0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(6, 'jose 7', 'apellidos 7', 'b4faaf6d13', 'joscurt7', 'rDQxIdTOyFwbBdDSlMVuHQ==', 'joscurt@gmail.com', 1, '1d8d9ad000bec24e547b796a5278cad0', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(7, 'qqweqweq', 'qweqweqwe', 'c2d1d88e0a', 'qweqweqeq', '5kjOmLFPHMfL0UVKini7/w==', 'asdasdasd', 0, '44debe3ec2a853ba7cee8613902109b5', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(8, 'qqweqweq', 'qweqweqwe', '375bb50912', 'qweqweqeq', 'O4IJs4VMJK7QSRSO2Qb9Jg==', 'asdasdasd@sadasd.cl', 1, 'ba3c7c37d631a4574f85eb7fcb078163', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(9, 'Pt 123', 'Pt 123', 'e0b792dc51', 'pt123', 'mBEHZveTMJ8v7XqXh1r+Sg==', 'email@email.com', 1, '51ba70e8707f1227280d329d4314933c', '2016-08-22 23:10:46', '2016-08-22 23:11:57', '', ''),
(10, 'jose', 'morande', '98b6007c13', 'joscurt33', 'QxSbObKSQmJcFcttZcmP5g==', 'joscurt@gmail.com', 1, 'b0a6eaf1eff3abc304d8829ea951e47e', '2016-08-23 03:38:00', '2016-08-23 03:38:22', 'C:\\xampp\\tmp\\phpC959.tmp', ''),
(11, 'jose', 'morande', '45ff5d01f6', 'joscurt22', '17rpFMRNiMOQkJehqI59Pg==', 'joscurt@gmail.com', 0, 'b29b8c64630f1f34ba855acfbbbf3241', '2016-08-23 04:02:22', '2016-08-23 04:02:22', 'C:\\xampp\\tmp\\php1B8C.tmp', ''),
(12, 'Hola123', 'Hola123 Hola123', '25bf198059', 'joscurt32', '0ZJjsBc0NvHECtEh6fktqQ==', 'email@email.com', 0, '7a00784718ba4dfcb6c5634ac29dee51', '2016-08-23 04:24:46', '2016-08-23 04:24:46', 'C:\\xampp\\tmp\\php9F60.tmp', ''),
(13, 'eeqweqw', 'eqweqweq', '19aeb3e187', 'dsfdasdsdf', 'XGFbeGXA9TDWL5ZnRiKUZg==', 'email@email.com', 0, '2c7b0cef7661c5d7437a04955bf587b3', '2016-08-23 04:32:24', '2016-08-23 04:32:24', 'C:\\xampp\\tmp\\php99BA.tmp', ''),
(14, 'Hola', 'morande', 'c7453c358e', 'dfgdfgdfg', '75+p/cPpgtovFGaOwlkRGA==', 'email@email.com', 0, 'db1292590d521c6d01995d429d9cb9d0', '2016-08-23 04:34:28', '2016-08-23 04:34:28', 'C:\\xampp\\tmp\\php8071.tmp', ''),
(15, 'Holasd', 'morandesd', 'b6c34c5aeb', 'dfgdfgdfgsd', 'l8j8urHSUXYxSow6FqGMqQ==', 'email@email.com', 0, '8dd9e56be9b0086466a1ca5d341f5f17', '2016-08-23 04:35:08', '2016-08-23 04:35:08', 'C:\\xampp\\tmp\\php1B4E.tmp', ''),
(16, 'Holasd', 'morandesd', '0b836bb1b9', 'dfgdfgdfgsd', 'HmHjvZWI25QMoHrwUiagrg==', 'email@email.com', 0, '3e4726a224a8bc816b3930eba1fa2741', '2016-08-23 04:42:00', '2016-08-23 04:42:00', '6aad5c561bf09d467d1bd41f3817af64.jpeg', ''),
(17, 'sdfvxvx', 'asda dsfsdf', 'db492f0fc2', 'qweasdqwe', 'D1hrU/tsn5aYywzsbhLh8A==', 'email@email.com', 0, '3bd0d868bd041f3c9e8f186749f6f443', '2016-08-23 04:42:25', '2016-08-23 04:42:25', '3a83149a2da29aa88ed862df77bcf7c2.jpeg', ''),
(18, 'tryryrty', 'ytrytry', '3e7a8d8d75', 'rtyrtyrty', 'DRrl6Kj0OJtk/dwsOvxozQ==', 'email@email.com', 0, '54c8bb8587610979a5df0087cc6838a1', '2016-08-23 04:43:37', '2016-08-23 04:43:37', 'C:\\xampp\\tmp\\phpE1B4.tmp', ''),
(19, 'prueba de imagen', 'prueba de imagen', '68fb92d05e', 'pruebaimagen', 'ai/zzWmkt0k9/KnLhEoEaQ==', 'email@email.com', 1, '816c4cfb6e2e23c850ef223069942bb9', '2016-08-23 04:45:26', '2016-08-23 05:01:47', '8ee3ac3b62e07ff9f29a57edbd2d89ca.jpeg', ''),
(20, 'ewrewr', 'werwerwer', 'e50028bebe', 'asdasd', '2VhjzRtGdtfMMB5axWj1yg==', 'joscurt@gmil.com', 0, 'a38ff24e8618b15429d612d267c23c0c', '2016-08-27 18:17:01', '2016-08-27 18:17:02', '610978918442085500ad82e92c5ee5d9.jpeg', ''),
(21, 'José Luis', 'Morandé Capdevila', '10a40dd941', 'joscurt', 'utRfcmChs1eBdCvFiDchfw==', 'joscurt@gmail.com', 0, 'b3f34770e0efc6b2b612d78756b1f925', '2016-08-29 07:17:05', '2016-08-29 07:17:05', NULL, ''),
(22, 'José Luis', 'Morandé Capdevila', 'b18a8494a7', 'joscurt', '0k88InA1T8NERnFAs4tDdg==', 'joscurt@gmail.com', 0, '95cae295580ccac191b36c47c9ddf23e', '2016-08-29 07:19:42', '2016-08-29 07:19:42', NULL, ''),
(30, 'jose', 'morande', 'd7e50194e3', 'josscurt', 'lN2vaSruGE7J+GGByWPWdQ==', 'joscurst@gmail.com', 1, '4b45478d33e0b00850e50a532d347b23', '2016-08-29 08:28:40', '2016-08-29 08:28:40', '610978918442085500ad82e92c5ee5d9.jpeg', ''),
(31, 'Hola4', 'morande', '395e19078a', 'josccurt', 'XdFREdIUGfs+q/1OaIUIZA==', 'email@email.com', 0, 'b9d4a7f5fca27a0cd262896ebdebe810', '2016-09-01 08:25:54', '2016-09-01 08:25:54', 'user.jpg', 'Femenino'),
(32, 'profesor activo', 'profesor activo', 'd624908d67', 'profactivo', 'xJt+WconSg3U4kpRflNsaw==', 'profactivo@acivo.cl', 0, '0dd8fd3f27a4f62be96582180745d0fe', '2016-09-01 10:50:00', '2016-09-01 10:50:00', 'user.jpg', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pt_usuario_grupo`
--

CREATE TABLE `pt_usuario_grupo` (
  `pt_usuario_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pt_usuario_grupo`
--

INSERT INTO `pt_usuario_grupo` (`pt_usuario_id`, `grupo_id`) VALUES
(1, 1),
(1, 2),
(3, 3),
(4, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(30, 2),
(31, 2),
(32, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina`
--

CREATE TABLE `rutina` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tiempo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `equipuso` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rutina`
--

INSERT INTO `rutina` (`id`, `nombre`, `tipo`, `dias`, `tiempo`, `equipuso`) VALUES
(1, 'Rutina de Ejercicios 1-1', 'Aumento Masa Muscular', 'Dos', 'Mas de 30 min', 'Máquinas'),
(2, 'Rutina de Ejercicios 1-2', 'Aumento Masa Muscular', 'Tres', 'Mas de 30 min', 'Máquinas'),
(3, 'Rutina de Ejercicios 1-3', 'Aumento Masa Muscular', 'Tres', 'Más de 1 Hora', 'Máquinas'),
(4, 'Rutina de Ejercicios 1-4', 'Aumento Masa Muscular', 'Cuatro', 'Mas de 30 min', 'Máquinas'),
(5, 'Rutina de Ejercicios 1-5', 'Aumento Masa Muscular', 'Cuatro', 'Más de 1 Hora', 'Máquinas'),
(6, 'Rutina de Ejercicios 1-6', 'Aumento Masa Muscular', 'Cuatro', 'Mas de 30 min', 'Máquinas'),
(7, 'Rutina de Ejercicios 1-7', 'Aumento Masa Muscular', 'Cuatro', 'Más de 1 Hora', 'Máquinas'),
(8, 'Rutina  de Ejercicios 1-8', 'Aumento Masa Muscular', 'Dos', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(9, 'Rutina de Ejercicios 1-20', 'Aumento Masa Muscular', 'Dos', 'Más de 1 Hora', 'Máquinas'),
(10, 'Rutina de Ejercicios 1-19', 'Aumento Masa Muscular', 'Dos', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(11, 'Rutina de Ejercicios 1-10', 'Aumento Masa Muscular', 'Tres', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(12, 'Rutina de Ejercicios 1-9', 'Aumento Masa Muscular', 'Tres', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(13, 'Rutina de Ejercicios 1-13', 'Aumento Masa Muscular', 'Tres', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(14, 'Rutina de Ejercicios 1-15', 'Aumento Masa Muscular', 'Cuatro', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(15, 'Rutina de Ejercicios 1-12', 'Aumento Masa Muscular', 'Cuatro', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(16, 'Rutina de Ejercicios 1-17', 'Aumento Masa Muscular', 'Cuatro', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(17, 'Rutina de Ejercicios 1-11', 'Aumento Masa Muscular', 'Cuatro', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(18, 'Rutina de Ejercicios 1-14', 'Aumento Masa Muscular', 'Cuatro', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(19, 'Rutina de Ejercicios 1-16', 'Aumento Masa Muscular', 'Cuatro', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(20, 'Rutina de Ejercicios 1-18', 'Aumento Masa Muscular', 'Cuatro', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(21, 'Rutina de Ejercicios 2-20', 'Quemar Grasa', 'Dos', 'Más de 1 Hora', 'Máquinas'),
(22, 'Rutina de Ejercicios 2-19', 'Quemar Grasa', 'Dos', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(23, 'Rutina de Ejercicios 2-1', 'Quemar Grasa', 'Dos', 'Mas de 30 min', 'Máquinas'),
(24, 'Rutina de Ejercicios 2-8', 'Quemar Grasa', 'Dos', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(25, 'Rutina de Ejercicios 2-3', 'Quemar Grasa', 'Tres', 'Más de 1 Hora', 'Máquinas'),
(26, 'Rutina de Ejercicios 2-10', 'Quemar Grasa', 'Tres', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(27, 'Rutina de Ejercicios 2-2', 'Quemar Grasa', 'Tres', 'Mas de 30 min', 'Máquinas'),
(28, 'Rutina de Ejercicios 2-9', 'Quemar Grasa', 'Tres', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(29, 'Rutina de Ejercicios 2-13', 'Quemar Grasa', 'Tres', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(30, 'Rutina de Ejercicios 2-5', 'Quemar Grasa', 'Cuatro', 'Más de 1 Hora', 'Máquinas'),
(31, 'Rutina de Ejercicios 2-7', 'Quemar Grasa', 'Cuatro', 'Más de 1 Hora', 'Máquinas'),
(32, 'Rutina de Ejercicios 2-12', 'Quemar Grasa', 'Cuatro', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(33, 'Rutina de Ejercicios 2-15', 'Quemar Grasa', 'Cuatro', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(34, 'Rutina de Ejercicios 2-17', 'Quemar Grasa', 'Cuatro', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(35, 'Rutina de Ejercicios 2-4', 'Quemar Grasa', 'Cuatro', 'Mas de 30 min', 'Máquinas'),
(36, 'Rutina de Ejercicios 2-6', 'Quemar Grasa', 'Cuatro', 'Mas de 30 min', 'Máquinas'),
(37, 'Rutina de Ejercicios 2-11', 'Quemar Grasa', 'Cuatro', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(38, 'Rutina de Ejercicios 2-14', 'Quemar Grasa', 'Cuatro', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(39, 'Rutina de Ejercicios 2-16', 'Quemar Grasa', 'Cuatro', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(40, 'Rutina de Ejercicios 2-18', 'Quemar Grasa', 'Cuatro', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(41, 'Rutina de Ejercicios 3-20', 'Resistencia Muscular', 'Dos', 'Más de 1 Hora', 'Máquinas'),
(42, 'Rutina de Ejercicios 3-19', 'Resistencia Muscular', 'Dos', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(43, 'Rutina de Ejercicios 3-1', 'Resistencia Muscular', 'Dos', 'Mas de 30 min', 'Máquinas'),
(44, 'Rutina de Ejercicios 3-8', 'Resistencia Muscular', 'Dos', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(45, 'Rutina de Ejercicios 4-1', 'Resistencia Muscular', 'Dos', 'Mas de 30 min', 'Peso Libre'),
(46, 'Rutina de Ejercicios 4-4', 'Resistencia Muscular', 'Dos', 'Mas de 30 min', 'Peso Libre'),
(47, 'Rutina de Ejercicios 3-3', 'Resistencia Muscular', 'Tres', 'Más de 1 Hora', 'Máquinas'),
(48, 'Rutina de Ejercicios 3-10', 'Resistencia Muscular', 'Tres', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(49, 'Rutina de Ejercicios 3-2', 'Resistencia Muscular', 'Tres', 'Mas de 30 min', 'Máquinas'),
(50, 'Rutina de Ejercicios 3-9', 'Resistencia Muscular', 'Tres', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(51, 'Rutina de Ejercicios 3-13', 'Resistencia Muscular', 'Tres', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(52, 'Rutina de Ejercicios 4-2', 'Resistencia Muscular', 'Tres', 'Mas de 30 min', 'Peso Libre'),
(53, 'Rutina de Ejercicios 4-3', 'Resistencia Muscular', 'Tres', 'Mas de 30 min', 'Peso Libre'),
(54, 'Rutina de Ejercicios 4-5', 'Resistencia Muscular', 'Tres', 'Mas de 30 min', 'Peso Libre'),
(55, 'Rutina de Ejercicios 3-5', 'Resistencia Muscular', 'Cuatro', 'Más de 1 Hora', 'Máquinas'),
(56, 'Rutina de Ejercicios 3-7', 'Resistencia Muscular', 'Cuatro', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(57, 'Rutina de Ejercicios 3-12', 'Resistencia Muscular', 'Cuatro', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(58, 'Rutina de Ejercicios 3-15', 'Resistencia Muscular', 'Cuatro', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(59, 'Rutina de Ejercicios 3-17', 'Resistencia Muscular', 'Cuatro', 'Más de 1 Hora', 'Maquinas y Peso Libre'),
(60, 'Rutina de Ejercicios 3-4', 'Resistencia Muscular', 'Cuatro', 'Mas de 30 min', 'Máquinas'),
(61, 'Rutina de Ejercicios 3-6', 'Resistencia Muscular', 'Cuatro', 'Mas de 30 min', 'Máquinas'),
(62, 'Rutina de Ejercicios 3-11', 'Resistencia Muscular', 'Cuatro', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(63, 'Rutina de Ejercicios 3-14', 'Resistencia Muscular', 'Cuatro', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(64, 'Rutina de Ejercicios 3-16', 'Resistencia Muscular', 'Cuatro', 'Mas de 30 min', 'Maquinas y Peso Libre'),
(65, 'Rutina de Ejercicios 3-18', 'Resistencia Muscular', 'Cuatro', 'Mas de 30 min', 'Maquinas y Peso Libre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina11`
--

CREATE TABLE `rutina11` (
  `id` int(11) NOT NULL,
  `ejercicio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `series` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `repeticiones` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rutina11`
--

INSERT INTO `rutina11` (`id`, `ejercicio`, `series`, `repeticiones`, `peso`) VALUES
(1, 'Machine Chest Press', '2-3', '8-10', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutina_ejercicio`
--

CREATE TABLE `rutina_ejercicio` (
  `rutina_id` int(11) NOT NULL,
  `ejercicio_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rutina_ejercicio`
--

INSERT INTO `rutina_ejercicio` (`rutina_id`, `ejercicio_id`) VALUES
(39, 1),
(40, 1),
(40, 2),
(40, 3),
(40, 4),
(40, 5),
(40, 6),
(40, 7),
(40, 8),
(40, 9),
(40, 10),
(40, 11),
(40, 12),
(40, 13),
(40, 14),
(40, 15),
(40, 16),
(40, 17),
(40, 18),
(40, 19);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2CEDC877FC28E5EE` (`alumno_id`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1435D52DDB38439E` (`usuario_id`);

--
-- Indices de la tabla `alumno_grupo`
--
ALTER TABLE `alumno_grupo`
  ADD PRIMARY KEY (`alumno_id`,`grupo_id`),
  ADD KEY `IDX_20CB92B1FC28E5EE` (`alumno_id`),
  ADD KEY `IDX_20CB92B19C833003` (`grupo_id`);

--
-- Indices de la tabla `alumno_rutina`
--
ALTER TABLE `alumno_rutina`
  ADD PRIMARY KEY (`alumno_id`,`rutina_id`),
  ADD KEY `IDX_79A7728FC28E5EE` (`alumno_id`),
  ADD KEY `IDX_79A7728D7A88FCB` (`rutina_id`);

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ejercicio_rutina`
--
ALTER TABLE `ejercicio_rutina`
  ADD PRIMARY KEY (`ejercicio_id`,`rutina_id`),
  ADD KEY `IDX_2F1FADCC30890A7D` (`ejercicio_id`),
  ADD KEY `IDX_2F1FADCCD7A88FCB` (`rutina_id`);

--
-- Indices de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DEEDCA53FC28E5EE` (`alumno_id`),
  ADD KEY `IDX_DEEDCA5329D64D02` (`ptusuario_id`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_A7BB06153A909126` (`nombre`),
  ADD UNIQUE KEY `UNIQ_A7BB061520332D99` (`codigo`);

--
-- Indices de la tabla `pt_usuario`
--
ALTER TABLE `pt_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pt_usuario_grupo`
--
ALTER TABLE `pt_usuario_grupo`
  ADD PRIMARY KEY (`pt_usuario_id`,`grupo_id`),
  ADD KEY `IDX_50C68FA741388287` (`pt_usuario_id`),
  ADD KEY `IDX_50C68FA79C833003` (`grupo_id`);

--
-- Indices de la tabla `rutina`
--
ALTER TABLE `rutina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutina11`
--
ALTER TABLE `rutina11`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutina_ejercicio`
--
ALTER TABLE `rutina_ejercicio`
  ADD PRIMARY KEY (`rutina_id`,`ejercicio_id`),
  ADD KEY `IDX_9081A591D7A88FCB` (`rutina_id`),
  ADD KEY `IDX_9081A59130890A7D` (`ejercicio_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `pt_usuario`
--
ALTER TABLE `pt_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `rutina`
--
ALTER TABLE `rutina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT de la tabla `rutina11`
--
ALTER TABLE `rutina11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `FK_2CEDC877FC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `FK_1435D52DDB38439E` FOREIGN KEY (`usuario_id`) REFERENCES `pt_usuario` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `alumno_grupo`
--
ALTER TABLE `alumno_grupo`
  ADD CONSTRAINT `FK_20CB92B19C833003` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_20CB92B1FC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `alumno_rutina`
--
ALTER TABLE `alumno_rutina`
  ADD CONSTRAINT `FK_79A7728D7A88FCB` FOREIGN KEY (`rutina_id`) REFERENCES `rutina` (`id`),
  ADD CONSTRAINT `FK_79A7728FC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`);

--
-- Filtros para la tabla `ejercicio_rutina`
--
ALTER TABLE `ejercicio_rutina`
  ADD CONSTRAINT `FK_2F1FADCC30890A7D` FOREIGN KEY (`ejercicio_id`) REFERENCES `ejercicio` (`id`),
  ADD CONSTRAINT `FK_2F1FADCCD7A88FCB` FOREIGN KEY (`rutina_id`) REFERENCES `rutina` (`id`);

--
-- Filtros para la tabla `evaluacion`
--
ALTER TABLE `evaluacion`
  ADD CONSTRAINT `FK_DEEDCA5329D64D02` FOREIGN KEY (`ptusuario_id`) REFERENCES `pt_usuario` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_DEEDCA53FC28E5EE` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pt_usuario_grupo`
--
ALTER TABLE `pt_usuario_grupo`
  ADD CONSTRAINT `FK_50C68FA741388287` FOREIGN KEY (`pt_usuario_id`) REFERENCES `pt_usuario` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_50C68FA79C833003` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `rutina_ejercicio`
--
ALTER TABLE `rutina_ejercicio`
  ADD CONSTRAINT `FK_9081A59130890A7D` FOREIGN KEY (`ejercicio_id`) REFERENCES `ejercicio` (`id`),
  ADD CONSTRAINT `FK_9081A591D7A88FCB` FOREIGN KEY (`rutina_id`) REFERENCES `rutina` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
