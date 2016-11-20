-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2016 a las 00:21:32
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclo_vacacionals`
--

CREATE TABLE IF NOT EXISTS `ciclo_vacacionals` (
  `id` int(10) unsigned NOT NULL,
  `periodo` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companias`
--

CREATE TABLE IF NOT EXISTS `companias` (
  `id` int(10) unsigned NOT NULL,
  `compania` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `companias`
--

INSERT INTO `companias` (`id`, `compania`, `created_at`, `updated_at`) VALUES
(1, 'Pemex', NULL, NULL),
(2, 'Outsourcing', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(10) unsigned NOT NULL,
  `claveDepartamento` int(11) NOT NULL,
  `departamento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estructuragerencia_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `claveDepartamento`, `departamento`, `estructuragerencia_id`, `created_at`, `updated_at`) VALUES
(1, 280, 'EA', 1, NULL, NULL),
(2, 290, 'CCO', 1, NULL, NULL),
(3, 300, 'CSO', 1, NULL, NULL),
(4, 310, 'COPI', 1, NULL, NULL),
(5, 320, 'CRIOP', 1, NULL, NULL),
(6, 480, 'CC', 2, NULL, NULL),
(7, 580, 'CCO', 3, NULL, NULL),
(8, 1000, 'AAA', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorios`
--

CREATE TABLE IF NOT EXISTS `directorios` (
  `id` int(10) unsigned NOT NULL,
  `Ficha` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apeidoPaterno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apeidoMaterno` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailTrabajo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emailPersonal` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cumpleaños` date DEFAULT NULL,
  `nivel` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numExt` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numCelular` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numCasa` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `departamento_id` int(10) unsigned NOT NULL,
  `puesto_id` int(10) unsigned NOT NULL,
  `compania_id` int(10) unsigned NOT NULL,
  `privado` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `directorios`
--

INSERT INTO `directorios` (`id`, `Ficha`, `nombre`, `apeidoPaterno`, `apeidoMaterno`, `emailTrabajo`, `emailPersonal`, `cumpleaños`, `nivel`, `numExt`, `numCelular`, `numCasa`, `departamento_id`, `puesto_id`, `compania_id`, `privado`, `created_at`, `updated_at`) VALUES
(1, 235758, 'Adan', 'Sandoval', 'Huertero', 'adan.benjamin.sandoval@pemex.com', '', '0000-00-00', '37', '25808', '9933999340', '993-3559654', 3, 1, 1, '0', NULL, '2016-11-11 04:47:26'),
(2, 190769, 'Alfredo', 'Rayon', 'Casiano', 'alfredo.rayon@pemex.com', '', '0000-00-00', '37', '24724', '9932423520', '', 5, 1, 1, '0', NULL, '2016-11-11 04:46:27'),
(3, 504614, 'Alva', 'Cabrera', 'Alamilla', 'alva.leticia.cabrera@pemex.com', '', '0000-00-00', '', '24736', '9931046947', '', 5, 1, 1, '0', NULL, '2016-11-11 05:06:00'),
(4, 183134, 'Antonio', 'Urbieta', 'Lopéz', 'antonio.urbieta@pemex.com', '', '0000-00-00', '41', '24728', '9931436231', '', 5, 1, 1, '0', NULL, '2016-11-11 04:46:01'),
(5, 537816, 'Cesar', 'Beristain', 'Buendia', 'cesar.david.beristain@pemex.com', '', '0000-00-00', '', '24315', '', '', 5, 1, 1, '0', NULL, '2016-11-11 05:05:48'),
(6, 317789, 'Cesar', 'Nicolas', 'Quiroz', 'cesar.nicolas@pemex.com', '', '0000-00-00', '39', '25817', '9931645627', '3513366', 2, 1, 1, '0', NULL, '2016-11-11 04:48:25'),
(7, 172301, 'Constancio', 'Cruz', 'Villanueva', 'constancio.cruz@pemex.com', '', '0000-00-00', '41', '25257', '9931763262', '', 2, 1, 1, '0', NULL, '2016-11-11 05:00:09'),
(8, 391468, 'Danellia', 'Roldan', 'Lule', 'danellia.roldan@pemex.com', '', '0000-00-00', '37', '24019/25468', '9931 175317', '', 3, 1, 1, '0', NULL, '2016-11-11 05:14:50'),
(11, 194403, 'Elizabeth', 'Rodriguez', 'Jimenez', 'maria.elizabeth.rodriguezj@pemex.com', '', '0000-00-00', '37', '24143', '9932257919', '993-3161287', 2, 1, 1, '0', NULL, '2016-11-11 05:12:15'),
(12, 363362, 'Estuardo', 'Mar', 'Larrocea', 'estuardo.jesus.mar@pemex.com', '', '0000-00-00', '37', '24016', '9931204289', '', 3, 1, 1, '0', NULL, '2016-11-11 05:10:02'),
(13, 156386, 'Fernando', 'Reyes', 'Delgado', 'fernando.reyes@pemex.com', '', '0000-00-00', '39', '25805', '9932 780018', '3515807', 4, 1, 1, '0', NULL, '2016-11-11 04:46:48'),
(14, 306922, 'Gerardo', 'Mejía', 'López', 'gerardo.guadalupe.mejia@pemex.com', '', '0000-00-00', '37', '25815/25816', '9331079932', '9333342898', 4, 1, 1, '0', NULL, '2016-11-11 04:47:09'),
(15, 203276, 'Gonzálo', 'Hernández', 'Orozco', 'gonzalo.hernandez@pemex.com', '', '0000-00-00', '39', '24147', '9931487517', '9933165699', 4, 1, 1, '0', NULL, '2016-11-11 05:09:00'),
(16, 178039, 'Gregorio', 'Santiago', 'Pérez', 'gregorio.santiago@pemex.com', '', '0000-00-00', '37', '24759', '9931907443', '', 5, 1, 1, '0', NULL, '2016-11-11 05:15:55'),
(18, 435577, 'Gustavo', 'Silva', 'Moreno', 'gustavo.alexander.silva@pemex.com', '', '0000-00-00', '35', '24743', '9932153277', '', 5, 1, 1, '0', NULL, '2016-11-11 05:19:24'),
(19, 0, 'Gustavo', 'Silva', 'Ruz', 'gustavo.adolfo.silva@pemex.com', '', '0000-00-00', '35', '24759', '9932357377', '', 1, 1, 1, '0', NULL, '2016-11-11 05:16:33'),
(20, 158882, 'Hector', 'Marttelo', 'Araiza', 'hector.arturo.marttelo@pemex.com', '', '0000-00-00', '41', '24552', '9932774178', '27311', 4, 1, 1, '0', NULL, '2016-11-11 05:10:14'),
(21, 144236, 'Ismael', 'Mendez', 'Garcia', 'ismael.roberto.mendez@pemex.com', '', '0000-00-00', '35', '25468', '9933422723', '1860777', 4, 1, 1, '0', NULL, '2016-11-11 05:10:28'),
(23, 384888, 'Ivan', 'Santamaria', 'Vite', 'ivan.santamaria@pemex.com', '', '0000-00-00', '39', '25291', '9932062590', '9933161287', 2, 1, 1, '0', NULL, '2016-11-11 05:17:58'),
(24, 324824, 'Jesús', 'Chavero', 'Solis', 'jesus.gilberto.chavero@pemex.com', '', '0000-00-00', '', '25258', '9931568930', '993-1390011', 1, 1, 1, '0', NULL, NULL),
(25, 185856, 'Jesús', 'Díaz', 'Gómez', 'jesus.guadalupe.diaz@pemex.com', '', '0000-00-00', '35', '24753', '9931431478', '', 5, 1, 1, '0', NULL, '2016-11-11 05:07:15'),
(29, 354915, 'Juan', 'Alfaro', 'Moscoso', 'juan.carlos.alfaro@pemex.com', '', '0000-00-00', '37', '24512', '9933767093', '', 2, 1, 1, '0', NULL, '2016-11-11 04:48:43'),
(30, 340693, 'Juan', 'Estrada', 'Martínez', 'juan.carlos.estrada@pemex.com', '', '0000-00-00', '39', '25807', '9931295430', '993-3165699', 4, 1, 1, '0', NULL, '2016-11-11 05:07:46'),
(31, 360701, 'Juan', 'Vazquez', 'Bautista', 'juan.gabriel.vazquez@pemex.com', '', '0000-00-00', '37', '24753', '9931992610', '', 5, 1, 1, '0', NULL, '2016-11-11 05:17:05'),
(32, 363474, 'Julian', 'Santiago', 'Leon', 'julian.javier.santiago@pemex.com', '', '0000-00-00', '37', '24018', '9935930441', '', 3, 1, 1, '0', NULL, '2016-11-11 05:15:33'),
(33, 493047, 'Luis', 'Barajas', 'Capetillo', 'luis.fernando.barajas@pemex.com', '', '0000-00-00', '35', '25815', '9933965599', '9933155107', 2, 1, 1, '0', NULL, '2016-11-11 05:05:15'),
(34, 222135, 'Manuel de Jesús', 'Coronado', 'Zárate', 'manuel.jesus.coronado@pemex.com', '', '0000-00-00', '41', '24552', '9932256466', '', 1, 1, 1, '0', NULL, '2016-11-10 06:05:30'),
(36, 328608, 'Mario', 'Pérez', 'Ramírez', 'mario.alberto.perezr@pemex.com', '', '0000-00-00', '37', '25806/25815/25816', '9363840919', '9931406982', 1, 1, 1, '0', NULL, '2016-11-11 05:11:00'),
(37, 515896, 'Mario', 'Caudillo', 'Arteaga', 'mario.alejandro.caudillo@pemex.com', '', '0000-00-00', '', '25816', '9932775176', '', 2, 1, 1, '0', NULL, '2016-11-11 05:06:19'),
(39, 152474, 'Maximino', 'Ricárdez', 'López', 'maximino.ricardez@pemex.com', '', '0000-00-00', '41', '20655', '9932076772', '', 3, 1, 1, '0', NULL, '2016-11-11 05:00:43'),
(40, 313025, 'Miguel', 'Gasca', 'Castilla', 'miguel.jesus.gasca@pemex.com', '', '0000-00-00', '39', '24031', '9931600710', '9333346525', 3, 1, 1, '0', NULL, '2016-11-11 05:08:09'),
(41, 674876, 'Oscar', 'de la cruz', 'Alonso', 'oscar.arnulfo.delacruz@pemex.com', '', '0000-00-00', '37', '25815/25816', '9932293602', '9933071202', 2, 1, 1, '0', NULL, '2016-11-11 05:06:53'),
(42, 225424, 'Reginaldo', 'Rodríguez', 'Rosas', 'reginaldo.rodriguez@pemex.com', '', '0000-00-00', '39', '24328', '9932073864', '', 5, 1, 1, '0', NULL, '2016-11-11 05:14:39'),
(43, 419945, 'Silvia', 'Gines', 'Ocaña', 'silvia.gines@pemex.com', '', '0000-00-00', '35', '24709', '9371217225', '9373721728', 5, 1, 1, '0', NULL, '2016-11-11 05:08:24'),
(44, 533120, 'Stalin', 'Valencia', 'Anell', 'stalin.dolores.valencia@pemex.com', '', '0000-00-00', '35', '25384', '9931903064', '3156508', 4, 1, 1, '0', NULL, '2016-11-11 05:16:53'),
(45, 428968, 'Tania', 'Castellanos', 'Aguilar', 'tania.araceli.castellanos@pemex.com', '', '0000-00-00', '', '24718', '9932428549', '', 5, 1, 1, '0', NULL, '2016-11-11 05:06:09'),
(46, 153564, 'Víctor', 'Santana', 'Anaya', 'victor.manuel.santana@pemex.com', '', '0000-00-00', '39', '24710', '9931901393', ' ', 5, 1, 1, '0', NULL, '2016-11-11 05:18:12'),
(47, 377423, 'Virginia', 'Luna', 'Santiago', 'virginia.luna@pemex.com', '', '0000-00-00', '37', '25468', '9931217493', '', 2, 1, 1, '0', NULL, '2016-11-11 05:09:36'),
(48, 339721, 'Yanel', 'Becerra', 'Perez', 'yanel.becerra@pemex.com', '', '0000-00-00', '37', '20654', '9932167349', '9933509319', 4, 1, 1, '0', NULL, '2016-11-11 05:17:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estacionamientos`
--

CREATE TABLE IF NOT EXISTS `estacionamientos` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estructuragerencias`
--

CREATE TABLE IF NOT EXISTS `estructuragerencias` (
  `id` int(10) unsigned NOT NULL,
  `claveCentroTrabajo` int(11) NOT NULL,
  `abreviatura` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gerencia` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estructuragerencias`
--

INSERT INTO `estructuragerencias` (`id`, `claveCentroTrabajo`, `abreviatura`, `gerencia`, `created_at`, `updated_at`) VALUES
(1, 10800, 'GCSPM', 'GCSPM', NULL, NULL),
(2, 10820, 'GPEO', 'GPEO', NULL, NULL),
(3, 10830, 'SL', 'Samaria-Luna', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guardia_programas`
--

CREATE TABLE IF NOT EXISTS `guardia_programas` (
  `id` int(10) unsigned NOT NULL,
  `programaGuardia` date NOT NULL,
  `Comentario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `directorio_id` int(10) unsigned NOT NULL,
  `rolguardia_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_08_15_171804_create_companias_table', 1),
('2016_08_15_171940_create_estructuragerencias_table', 1),
('2016_08_15_172003_create_departamentos_table', 1),
('2016_08_15_172026_create_puestos_table', 1),
('2016_08_15_172146_create_directorios_table', 1),
('2016_08_15_172240_create_rol_guardias_table', 1),
('2016_08_15_172337_create_estacionamientos_table', 1),
('2016_08_15_172414_create_pase_vehiculars_table', 1),
('2016_08_15_172621_create_ciclo_vacacionals_table', 1),
('2016_08_15_172825_create_vacasions_table', 1),
('2016_08_15_172846_create_reprogramacion_vacaciones_table', 1),
('2016_08_15_172904_create_guardia_programas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pase_vehiculars`
--

CREATE TABLE IF NOT EXISTS `pase_vehiculars` (
  `id` int(10) unsigned NOT NULL,
  `numPase` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `directorio_id` int(10) unsigned NOT NULL,
  `estacionamiento_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE IF NOT EXISTS `puestos` (
  `id` int(10) unsigned NOT NULL,
  `puesto` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`id`, `puesto`, `created_at`, `updated_at`) VALUES
(1, 'Especialista', NULL, NULL),
(2, 'Outsourcing', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reprogramacion_vacaciones`
--

CREATE TABLE IF NOT EXISTS `reprogramacion_vacaciones` (
  `id` int(10) unsigned NOT NULL,
  `fechaReprogramadaInicio` date DEFAULT NULL,
  `fechaReprogramadaFin` date DEFAULT NULL,
  `vacasion_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolguardias`
--

CREATE TABLE IF NOT EXISTS `rolguardias` (
  `id` int(10) unsigned NOT NULL,
  `rolGuardia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `ficha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ficha`, `full_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '328608', 'Mario Alberto Perez Ramirez', 'mario.alberto.perezr@pemex.com', '$2y$10$mlq/bYBSK1whcmiy36kXPO0xcU3sJISXci/Rfyz.n.zKUWTk01/Ey', '7nIm3sip1Zos8uPI2ukUeWqsce6AIom9ZCJefricqRt2sCQxXQ6YMUFyQfuU', '2016-11-10 05:59:35', '2016-11-10 22:47:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacasions`
--

CREATE TABLE IF NOT EXISTS `vacasions` (
  `id` int(10) unsigned NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `cicloVacacional_id` int(10) unsigned NOT NULL,
  `directorio_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciclo_vacacionals`
--
ALTER TABLE `ciclo_vacacionals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `companias`
--
ALTER TABLE `companias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`), ADD KEY `departamentos_estructuragerencia_id_foreign` (`estructuragerencia_id`);

--
-- Indices de la tabla `directorios`
--
ALTER TABLE `directorios`
  ADD PRIMARY KEY (`id`), ADD KEY `directorios_departamento_id_foreign` (`departamento_id`), ADD KEY `directorios_puesto_id_foreign` (`puesto_id`), ADD KEY `directorios_compania_id_foreign` (`compania_id`);

--
-- Indices de la tabla `estacionamientos`
--
ALTER TABLE `estacionamientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estructuragerencias`
--
ALTER TABLE `estructuragerencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `guardia_programas`
--
ALTER TABLE `guardia_programas`
  ADD PRIMARY KEY (`id`), ADD KEY `guardia_programas_directorio_id_foreign` (`directorio_id`), ADD KEY `guardia_programas_rolguardia_id_foreign` (`rolguardia_id`);

--
-- Indices de la tabla `pase_vehiculars`
--
ALTER TABLE `pase_vehiculars`
  ADD PRIMARY KEY (`id`), ADD KEY `pase_vehiculars_directorio_id_foreign` (`directorio_id`), ADD KEY `pase_vehiculars_estacionamiento_id_foreign` (`estacionamiento_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reprogramacion_vacaciones`
--
ALTER TABLE `reprogramacion_vacaciones`
  ADD PRIMARY KEY (`id`), ADD KEY `reprogramacion_vacaciones_vacasion_id_foreign` (`vacasion_id`);

--
-- Indices de la tabla `rolguardias`
--
ALTER TABLE `rolguardias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vacasions`
--
ALTER TABLE `vacasions`
  ADD PRIMARY KEY (`id`), ADD KEY `vacasions_ciclovacacional_id_foreign` (`cicloVacacional_id`), ADD KEY `vacasions_directorio_id_foreign` (`directorio_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciclo_vacacionals`
--
ALTER TABLE `ciclo_vacacionals`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `companias`
--
ALTER TABLE `companias`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `directorios`
--
ALTER TABLE `directorios`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `estacionamientos`
--
ALTER TABLE `estacionamientos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estructuragerencias`
--
ALTER TABLE `estructuragerencias`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `guardia_programas`
--
ALTER TABLE `guardia_programas`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pase_vehiculars`
--
ALTER TABLE `pase_vehiculars`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `reprogramacion_vacaciones`
--
ALTER TABLE `reprogramacion_vacaciones`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rolguardias`
--
ALTER TABLE `rolguardias`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `vacasions`
--
ALTER TABLE `vacasions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
ADD CONSTRAINT `departamentos_estructuragerencia_id_foreign` FOREIGN KEY (`estructuragerencia_id`) REFERENCES `estructuragerencias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `directorios`
--
ALTER TABLE `directorios`
ADD CONSTRAINT `directorios_compania_id_foreign` FOREIGN KEY (`compania_id`) REFERENCES `companias` (`id`),
ADD CONSTRAINT `directorios_departamento_id_foreign` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`),
ADD CONSTRAINT `directorios_puesto_id_foreign` FOREIGN KEY (`puesto_id`) REFERENCES `puestos` (`id`);

--
-- Filtros para la tabla `guardia_programas`
--
ALTER TABLE `guardia_programas`
ADD CONSTRAINT `guardia_programas_directorio_id_foreign` FOREIGN KEY (`directorio_id`) REFERENCES `directorios` (`id`),
ADD CONSTRAINT `guardia_programas_rolguardia_id_foreign` FOREIGN KEY (`rolguardia_id`) REFERENCES `rolguardias` (`id`);

--
-- Filtros para la tabla `pase_vehiculars`
--
ALTER TABLE `pase_vehiculars`
ADD CONSTRAINT `pase_vehiculars_directorio_id_foreign` FOREIGN KEY (`directorio_id`) REFERENCES `directorios` (`id`),
ADD CONSTRAINT `pase_vehiculars_estacionamiento_id_foreign` FOREIGN KEY (`estacionamiento_id`) REFERENCES `estacionamientos` (`id`);

--
-- Filtros para la tabla `reprogramacion_vacaciones`
--
ALTER TABLE `reprogramacion_vacaciones`
ADD CONSTRAINT `reprogramacion_vacaciones_vacasion_id_foreign` FOREIGN KEY (`vacasion_id`) REFERENCES `vacasions` (`id`);

--
-- Filtros para la tabla `vacasions`
--
ALTER TABLE `vacasions`
ADD CONSTRAINT `vacasions_ciclovacacional_id_foreign` FOREIGN KEY (`cicloVacacional_id`) REFERENCES `ciclo_vacacionals` (`id`),
ADD CONSTRAINT `vacasions_directorio_id_foreign` FOREIGN KEY (`directorio_id`) REFERENCES `directorios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
