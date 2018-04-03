-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2018 a las 18:59:43
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `testing_laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `job_title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vantonio', 'vale.residencia+123@gmail.com', 'vale', '$2y$10$4a1yQlKsesWzlfAkTJ2FdebabnFqsqi9qhEnAYi7wGevz1WWnkSoC', NULL, '2018-02-08 02:16:52', '2018-02-08 02:16:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `benefits` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `address`, `time`, `abilities`, `benefits`, `salary`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Administrador de redes sociales', 'Multimedios Televisión', 'completo', 'Entender cómo el contenido funciona en los medios sociales.\r\nGestionar las comunidades en redes sociales\r\nTener conocimiento sobre técnicas y saber cómo y ejecutarlas\r\nAnalizar las estadísticas y actuar acorde a ello', 'Además del salario, cuando las personas buscan trabajo, también están interesadas en conocer las prestaciones que ofrece una empresa. Las 8 prestaciones laborales más valoradas. Existen prestaciones que por ley deben ser otorgadas a los trabajadores al se', '12000', 'Administrador-de-redes-sociales', 'Activo', '2018-02-08 02:20:18', '2018-02-08 02:20:18'),
(2, 'Ejecutivo de ventas', 'Multimedios Televisión', 'Disponibilidad de horario', 'Experiencia en ventas de espacios publicitarios.\r\nsexo:indistinto\r\ntener automóvil propio', 'sueldo base + comisiones\r\nprestaciones de ley\r\noportunidad de crecimiento\r\nexcelente ambiente laboral', 'Indefinido', 'Ejecutivo-de-ventas', 'Activo', '2018-02-13 22:49:10', '2018-02-13 22:49:10'),
(3, 'Chofer Ejecutivo', 'Multimedios Televisión', 'Disponibilidad de horario', 'Licencia de chófer vigente-\r\nsexo indistinto-\r\nEstado civil :Casado(preferentemente)-\r\nFacilidad de palabra-responsable-buena presentacion', 'Atractivo sueldo-\r\nBonos de despensa/IMSS\r\nAguinaldo\r\nVacaciones/Prima vacacional', 'Atractivo sueldo', 'Chofer-Ejecutivo', 'Activo', '2018-02-13 22:53:37', '2018-02-13 22:53:37'),
(4, 'Auxiliar administrativo Monterrey', 'Tepic ,Nayarit-MX', 'Disponibilidad de horario', 'Escolaridad:LAE,CP ó carrera a fin\r\nEdad :25 a 40 años-.\r\nSexo Indistinto-\r\nManejo personal-\r\nManejo de paquetería office -\r\nExperiencia en áreas administrativas', 'Prestaciones de Ley\r\nSnack & Coffee, 1 hora de comida\r\nLunes a Viernes de 9:00 a 6:00pm\r\nBuen ambiente laboral, oportunidad de crecimiento, seguridad laboral,', 'sueldo base', 'Auxiliar-administrativo', 'Activo', '2018-02-13 23:13:19', '2018-02-13 23:13:19'),
(5, 'Ing.Soporte a Sistemas', 'Multimedios Televisión', 'Lunes a viernes (guardias rotativas en sábado)', 'Escolaridad: ISC-, IAS,- Lic .en Informatica(recien egresado-\r\ntrabajo en equipo-proactivos\r\nReparación y mantenimiento de computadoras \r\nExperiencia mínima 6 mese de soporte técnico', 'sueldo base + comisiones\r\nprestaciones de ley\r\noportunidad de crecimiento\r\nexcelente ambiente laboral', 'sueldo base', 'Ing.Soporte-a-Sistemas', 'Activo', '2018-02-13 23:17:49', '2018-02-13 23:17:49'),
(6, 'Analista de reclutamiento', 'Multimedios Televisión', 'Lunes a viernes de 9am-5pm', 'Reclutamiento de puesto y operativos y administrativos-\r\nEntrevista presenciales y telefónicas-\r\nConocimiento de diversas fuentes de reclutamiento-\r\nExamen psicométrico-\r\nManejo de paquetera office-\r\nIntegración de expediente-', 'sueldo base + comisiones\r\nprestaciones de ley\r\noportunidad de crecimiento\r\nexcelente ambiente laboral', 'sueldo base', 'Analista-de-reclutamiento', 'Activo', '2018-02-13 23:28:06', '2018-02-13 23:28:06'),
(7, 'Desarrollador web', 'Monterrey Nuevo Leon', 'completo', 'Lenguaje de programación orientado a objetos, framework de desarrollo web, bases de datos, herramientas de versionamiento, linux, HTML5, CSS3 y Javascript, fireworkHabilidades deseablesPython, Django, pgSQL, MySQL, Git, Angular2 diseño MVC', 'Prestaciones de Ley\r\nSnack & Coffee, 1 hora de comida\r\nLunes a Viernes de 9:00 a 6:00pm\r\nBuen ambiente laboral, oportunidad de crecimiento, seguridad laboral,', '12000', 'Desarrollador-web', 'Activo', '2018-02-28 06:10:23', '2018-02-28 06:10:23'),
(8, 'Asistente De Dirección', 'Multimedios Radio', 'Completo', 'Organizacion y seguimiento de agenda del director, coordinacion y compra de vuelos, coordinacion de citas ,toma de llamadas a contactos del director, logistica de eventos internos, atencion y captacion a clientes del area de estrategia. Desarrollar logist', 'Prestaciones de Ley\r\nSnack & Coffee, 1 hora de comida\r\nLunes a Viernes de 9:00 a 6:00pm\r\nBuen ambiente laboral, oportunidad de crecimiento, seguridad laboral,', '13,000.00 /mes', 'Asistente-De-Dirección', 'Activo', '2018-03-06 21:20:45', '2018-03-06 21:20:45'),
(9, 'Especialista en Factura y Cobranza', 'Multimedios León', 'Completo', 'Dominio de conceptos: Factura electrónica, Orden de Compra, Pedido, Remisión, Proveedor, Presupuesto, Compra, Venta, Cobranza.\r\n\r\nRequerimiento tecnológico: Facilidad en el uso de la computadora, Conocimiento de Paquetería Office, Uso de correo electrónic', 'Prestaciones de Ley\r\nSnack & Coffee, 1 hora de comida\r\nLunes a Viernes de 9:00 a 6:00pm\r\nBuen ambiente laboral, oportunidad de crecimiento, seguridad laboral,', '$8,000.00 a $10,000.00 /mes', 'Especialista-en-Factura-y-Cobranza', 'Activo', '2018-03-06 21:22:17', '2018-03-06 21:22:17'),
(10, 'Auxiliar Administrativo', 'Multimedios Televisión', 'Completo', 'EXPERIENCIA EN VENTA\r\nATENCIÓN A CLIENTES\r\nDOMINIO DE REDES SOCIALES\r\nEXCELENTE ACTITUD\r\nORGANIZADA\r\nPUNTUAL', 'OFRECEMOS:\r\nSUELDO BASE\r\nPRESTACIONES SUPERIORES A LA LEY\r\nUNIFORMES\r\nCAPACITACIÓN CONTANTE', '5000', 'Auxiliar-Administrativo', 'Inactivo', '2018-03-06 21:27:17', '2018-03-06 21:27:17'),
(11, 'Capturista de datos', 'Monterrey Nuevo Leon', 'completo', 'capturaManejo de paquetería office Manejo de Excel intermedio (Cruces, formulas, gráficas)Dinámico(a) ACTIVIDADES: Captura de datosElaboración de reportesManejo de base de datos', 'OFRECEMOS: Sueldo base $3,500 mensualesBono por productividad $1,500Prestaciones de ley desde el primer día (Alta ante el IMSS, vacaciones, prima vacacional, reparto de utilidades, cotización a Infonavit)Excelente ambiente de trabajoOportunidad de crecimi', '4500 mensuales', 'Capturista-de-datos', 'Activo', '2018-03-06 21:29:40', '2018-03-06 21:29:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_12_204046_create_admins_table', 1),
(4, '2017_11_21_173816_create_jobs_table', 1),
(5, '2017_12_06_151818_create_postulates_table', 1),
(6, '2018_02_07_163101_create_social_accounts_table', 1),
(11, '2014_10_12_000000_create_notifications_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notifiable_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_id`, `notifiable_type`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('189201ca-f62f-448e-a2f2-00ff09ddc3df', 'App\\Notifications\\AddPost', '4', 'App\\User', '{\"data\":\"We have new postsssssssAdded By test+123\"}', '2018-03-06 12:08:51', '2018-03-06 11:45:08', '2018-03-06 12:08:51'),
('19ab79c6-94e0-41ab-8bea-9f8f0b5c6efa', 'App\\Notifications\\AddPost', '6', 'App\\User', '{\"data\":\"We have new postdssdAdded By test+123\"}', NULL, '2018-03-06 11:43:11', '2018-03-06 11:43:11'),
('1d6d2dd3-232b-42b2-a5dc-b9329b75125a', 'App\\Notifications\\AddPost', '8', 'App\\User', '{\"data\":\"We have new postcodeAdded By test+123\"}', NULL, '2018-03-06 11:45:26', '2018-03-06 11:45:26'),
('3382719e-c36e-45b3-9d4d-847f4237f6e2', 'App\\Notifications\\AddPost', '8', 'App\\User', '{\"data\":\"We have new postpdcAdded By Valentin\"}', NULL, '2018-03-08 05:33:51', '2018-03-08 05:33:51'),
('3bb5dc48-cfb4-450d-9c87-8f095d33b7cf', 'App\\Notifications\\AddPost', '12', 'App\\User', '{\"data\":\"We have new postpdcAdded By Valentin\"}', NULL, '2018-03-08 05:33:51', '2018-03-08 05:33:51'),
('3e95adcb-66c3-4de0-8cec-e0c64dae9599', 'App\\Notifications\\AddPost', '9', 'App\\User', '{\"data\":\"We have new postpdcAdded By Valentin\"}', NULL, '2018-03-08 05:33:51', '2018-03-08 05:33:51'),
('408bd16f-2140-4e8e-ac4c-a2638de538b2', 'App\\Notifications\\AddPost', '5', 'App\\User', '{\"data\":\"We have new postpdcAdded By Valentin\"}', '2018-03-16 02:18:49', '2018-03-08 05:33:51', '2018-03-16 02:18:49'),
('5350a950-15f0-4075-95db-b53f66456e96', 'App\\Notifications\\AddPost', '10', 'App\\User', '{\"data\":\"We have new postcarltaAdded By Valentin\"}', NULL, '2018-03-09 01:02:10', '2018-03-09 01:02:10'),
('54ca6f57-5f5c-4100-957c-6b758ce94e80', 'App\\Notifications\\AddPost', '8', 'App\\User', '{\"data\":\"We have new postAAAAdded By Valentin\"}', NULL, '2018-03-06 11:36:04', '2018-03-06 11:36:04'),
('5697dd72-f17e-4281-9ec2-34d4aac72cfb', 'App\\Notifications\\AddPost', '10', 'App\\User', '{\"data\":\"We have new postpdcAdded By Valentin\"}', NULL, '2018-03-08 05:33:51', '2018-03-08 05:33:51'),
('57a13d53-5668-4679-8cc7-e48c13982ea8', 'App\\Notifications\\AddPost', '5', 'App\\User', '{\"data\":\"We have new postdssdAdded By test+123\"}', '2018-03-16 02:18:49', '2018-03-06 11:43:11', '2018-03-16 02:18:49'),
('5ec5bf12-9d15-4092-85e9-8f4dcc7ebc2c', 'App\\Notifications\\AddPost', '4', 'App\\User', '{\"data\":\"We have new postdssdAdded By test+123\"}', '2018-03-06 12:08:51', '2018-03-06 11:43:11', '2018-03-06 12:08:51'),
('61e96166-222c-40d2-b5c5-b0d060c404f9', 'App\\Notifications\\AddPost', '6', 'App\\User', '{\"data\":\"We have new postcarltaAdded By Valentin\"}', NULL, '2018-03-09 01:02:10', '2018-03-09 01:02:10'),
('661bfd72-246a-4a7e-a668-f8edf78d8d51', 'App\\Notifications\\AddPost', '9', 'App\\User', '{\"data\":\"We have new postdssdAdded By test+123\"}', '2018-03-06 11:43:11', '2018-03-06 11:43:11', '2018-03-06 11:43:11'),
('6f37efa4-1924-4de6-af40-91ff94d5a74b', 'App\\Notifications\\AddPost', '6', 'App\\User', '{\"data\":\"We have new postsssssssAdded By test+123\"}', NULL, '2018-03-06 11:45:09', '2018-03-06 11:45:09'),
('75880858-88f3-46e4-9f47-515a18cfa34a', 'App\\Notifications\\AddPost', '7', 'App\\User', '{\"data\":\"We have new postsssssssAdded By test+123\"}', NULL, '2018-03-06 11:45:09', '2018-03-06 11:45:09'),
('78b03653-6465-42a4-bd00-bf73be0a8068', 'App\\Notifications\\AddPost', '7', 'App\\User', '{\"data\":\"We have new postpdcAdded By Valentin\"}', NULL, '2018-03-08 05:33:51', '2018-03-08 05:33:51'),
('7ae69993-c75a-4703-adc1-cb4963304fb7', 'App\\Notifications\\AddPost', '5', 'App\\User', '{\"data\":\"We have new postsssssssAdded By test+123\"}', '2018-03-16 02:18:49', '2018-03-06 11:45:08', '2018-03-16 02:18:49'),
('7b6d9043-1c9b-4967-96c9-8942c6609184', 'App\\Notifications\\AddPost', '7', 'App\\User', '{\"data\":\"We have new postcodeAdded By test+123\"}', NULL, '2018-03-06 11:45:26', '2018-03-06 11:45:26'),
('7c3dac47-729b-4216-92b0-4053e60505e5', 'App\\Notifications\\AddPost', '4', 'App\\User', '{\"data\":\"We have new postAAAAdded By Valentin\"}', '2018-03-06 11:36:04', '2018-03-06 11:36:04', '2018-03-06 11:36:04'),
('7cd7faa6-d749-478f-95d7-cfadae4bced1', 'App\\Notifications\\AddPost', '11', 'App\\User', '{\"data\":\"We have new postpdcAdded By Valentin\"}', '2018-03-09 06:26:10', '2018-03-08 05:33:51', '2018-03-09 06:26:10'),
('8142d27a-a6fd-4065-8aec-12840c4db9a6', 'App\\Notifications\\AddPost', '9', 'App\\User', '{\"data\":\"We have new postsssssssAdded By test+123\"}', '2018-03-06 11:45:09', '2018-03-06 11:45:09', '2018-03-06 11:45:09'),
('86ceda59-4bf2-49fd-9e53-cd012110e36b', 'App\\Notifications\\AddPost', '13', 'App\\User', '{\"data\":\"We have new postcarltaAdded By Valentin\"}', NULL, '2018-03-09 01:02:10', '2018-03-09 01:02:10'),
('88512fdc-38b1-4650-aff1-0fa6a01214ec', 'App\\Notifications\\AddPost', '9', 'App\\User', '{\"data\":\"We have new postcodeAdded By test+123\"}', '2018-03-06 11:45:26', '2018-03-06 11:45:26', '2018-03-06 11:45:26'),
('9377abf0-308d-4cfe-8d04-098505b29be6', 'App\\Notifications\\AddPost', '5', 'App\\User', '{\"data\":\"We have new postcodeAdded By test+123\"}', '2018-03-16 02:18:49', '2018-03-06 11:45:26', '2018-03-16 02:18:49'),
('a3a8aa9e-134b-45ef-837a-46ed3ac27dc3', 'App\\Notifications\\AddPost', '8', 'App\\User', '{\"data\":\"We have new postcarltaAdded By Valentin\"}', NULL, '2018-03-09 01:02:10', '2018-03-09 01:02:10'),
('a40712c7-0f02-452a-b62b-9ba1b7760683', 'App\\Notifications\\AddPost', '8', 'App\\User', '{\"data\":\"We have new postdssdAdded By test+123\"}', NULL, '2018-03-06 11:43:11', '2018-03-06 11:43:11'),
('a6c05be3-4499-41c1-a048-07185cb24c08', 'App\\Notifications\\AddPost', '12', 'App\\User', '{\"data\":\"We have new postcarltaAdded By Valentin\"}', NULL, '2018-03-09 01:02:10', '2018-03-09 01:02:10'),
('a7ab6cd0-99b3-420c-a34f-3e1cef8b17a1', 'App\\Notifications\\AddPost', '9', 'App\\User', '{\"data\":\"We have new postcarltaAdded By Valentin\"}', NULL, '2018-03-09 01:02:10', '2018-03-09 01:02:10'),
('a875adfc-225b-41cf-94bd-740e2d4cc522', 'App\\Notifications\\AddPost', '4', 'App\\User', '{\"data\":\"We have new postcarltaAdded By Valentin\"}', '2018-03-09 01:02:11', '2018-03-09 01:02:10', '2018-03-09 01:02:11'),
('ac27bfd5-3e67-412d-b650-dfaa814ce130', 'App\\Notifications\\AddPost', '14', 'App\\User', '{\"data\":\"We have new postpdcAdded By Valentin\"}', NULL, '2018-03-08 05:33:51', '2018-03-08 05:33:51'),
('b5173d1d-045a-486f-a5b9-3390014e484b', 'App\\Notifications\\AddPost', '9', 'App\\User', '{\"data\":\"We have new postAAAAdded By Valentin\"}', '2018-03-06 11:38:36', '2018-03-06 11:36:04', '2018-03-06 11:38:36'),
('ba241d17-f764-4514-9502-618c61af2296', 'App\\Notifications\\AddPost', '4', 'App\\User', '{\"data\":\"We have new postpdcAdded By Valentin\"}', '2018-03-08 05:33:52', '2018-03-08 05:33:51', '2018-03-08 05:33:52'),
('bbba87c2-7417-461a-a5bb-c2bab49ad0c1', 'App\\Notifications\\AddPost', '7', 'App\\User', '{\"data\":\"We have new postcarltaAdded By Valentin\"}', NULL, '2018-03-09 01:02:10', '2018-03-09 01:02:10'),
('bfe7500e-5120-4862-a490-36cde2a68acc', 'App\\Notifications\\AddPost', '6', 'App\\User', '{\"data\":\"We have new postpdcAdded By Valentin\"}', NULL, '2018-03-08 05:33:51', '2018-03-08 05:33:51'),
('cf4b0cfc-a6d6-4846-8837-93aca5968b0c', 'App\\Notifications\\AddPost', '6', 'App\\User', '{\"data\":\"We have new postcodeAdded By test+123\"}', NULL, '2018-03-06 11:45:26', '2018-03-06 11:45:26'),
('d030b81f-3ba8-4967-81c0-02fce1fe1675', 'App\\Notifications\\AddPost', '7', 'App\\User', '{\"data\":\"We have new postdssdAdded By test+123\"}', NULL, '2018-03-06 11:43:11', '2018-03-06 11:43:11'),
('d6183236-9067-41f6-82ca-08601f3443a0', 'App\\Notifications\\AddPost', '11', 'App\\User', '{\"data\":\"We have new postcarltaAdded By Valentin\"}', '2018-03-09 06:26:10', '2018-03-09 01:02:10', '2018-03-09 06:26:10'),
('dfdf5f66-35a9-4275-8e7e-1e520e916056', 'App\\Notifications\\AddPost', '4', 'App\\User', '{\"data\":\"We have new postcodeAdded By test+123\"}', '2018-03-06 12:08:51', '2018-03-06 11:45:25', '2018-03-06 12:08:51'),
('e3d58216-cbdd-4f3b-9ac0-78051ea95c06', 'App\\Notifications\\AddPost', '6', 'App\\User', '{\"data\":\"We have new postAAAAdded By Valentin\"}', NULL, '2018-03-06 11:36:04', '2018-03-06 11:36:04'),
('e87a77e9-2635-4998-bbe1-2b6455ab1ec4', 'App\\Notifications\\AddPost', '13', 'App\\User', '{\"data\":\"We have new postpdcAdded By Valentin\"}', NULL, '2018-03-08 05:33:51', '2018-03-08 05:33:51'),
('ecf50c4d-38f4-4e55-bde1-8b98add16c12', 'App\\Notifications\\AddPost', '8', 'App\\User', '{\"data\":\"We have new postsssssssAdded By test+123\"}', NULL, '2018-03-06 11:45:09', '2018-03-06 11:45:09'),
('f0babf69-4066-4440-a3d5-c9d7d151ac72', 'App\\Notifications\\AddPost', '14', 'App\\User', '{\"data\":\"We have new postcarltaAdded By Valentin\"}', NULL, '2018-03-09 01:02:10', '2018-03-09 01:02:10'),
('fa9d59aa-c2ef-4148-a610-cc330b94aa1b', 'App\\Notifications\\AddPost', '5', 'App\\User', '{\"data\":\"We have new postAAAAdded By Valentin\"}', '2018-03-16 02:18:49', '2018-03-06 11:36:04', '2018-03-16 02:18:49'),
('fba3f607-654b-485c-b863-c48a5cde4dc9', 'App\\Notifications\\AddPost', '7', 'App\\User', '{\"data\":\"We have new postAAAAdded By Valentin\"}', NULL, '2018-03-06 11:36:04', '2018-03-06 11:36:04'),
('ff259778-6a1b-4240-b33a-0a570ab1ae45', 'App\\Notifications\\AddPost', '5', 'App\\User', '{\"data\":\"We have new postcarltaAdded By Valentin\"}', '2018-03-16 02:18:49', '2018-03-09 01:02:10', '2018-03-16 02:18:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vantonio.link@gmail.com', '$2y$10$k9bfhJc8mQuS.JwlEVql3.AI.negLA4QcwGGWdKUU1G6yK2SMGdHO', '2018-02-17 05:18:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `body` varchar(200) NOT NULL,
  `view` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `view`, `created_at`, `updated_at`) VALUES
(1, 'pdc', 'pdc', 0, '2018-03-06 11:22:23', '2018-03-06 11:22:23'),
(2, 'testing', 'testing', 0, '2018-03-06 11:23:41', '2018-03-06 11:23:41'),
(3, 'pdc', 'ASADASD', 0, '2018-03-06 11:35:16', '2018-03-06 11:35:16'),
(4, 'AAA', 'AAA', 0, '2018-03-06 11:36:04', '2018-03-06 11:36:04'),
(5, 'dssd', 'dssdds', 0, '2018-03-06 11:43:10', '2018-03-06 11:43:10'),
(6, 'sssssss', 'ssss', 0, '2018-03-06 11:45:08', '2018-03-06 11:45:08'),
(7, 'code', 'code', 0, '2018-03-06 11:45:25', '2018-03-06 11:45:25'),
(8, 'asas', 'assaas', 0, '2018-03-08 05:33:18', '2018-03-08 05:33:18'),
(9, 'pdc', 'PDC', 0, '2018-03-08 05:33:51', '2018-03-08 05:33:51'),
(10, 'juevezx', 'juevezx', 0, '2018-03-09 01:01:41', '2018-03-09 01:01:41'),
(11, 'carlta', 'carlota', 0, '2018-03-09 01:02:10', '2018-03-09 01:02:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulates`
--

CREATE TABLE `postulates` (
  `id` int(10) UNSIGNED NOT NULL,
  `userId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `workId` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `postulates`
--

INSERT INTO `postulates` (`id`, `userId`, `workId`, `created_at`, `updated_at`) VALUES
(8, '9', '5', '2018-03-06 11:46:01', '2018-03-06 11:46:01'),
(9, '9', '1', '2018-03-06 11:48:50', '2018-03-06 11:48:50'),
(13, '10', '11', '2018-03-07 10:39:01', '2018-03-07 10:39:01'),
(14, '11', '11', '2018-03-07 11:06:11', '2018-03-07 11:06:11'),
(15, '11', '7', '2018-03-07 11:07:13', '2018-03-07 11:07:13'),
(16, '11', '8', '2018-03-07 11:10:41', '2018-03-07 11:10:41'),
(17, '11', '9', '2018-03-07 11:11:38', '2018-03-07 11:11:38'),
(18, '13', '9', '2018-03-07 20:35:56', '2018-03-07 20:35:56'),
(19, '13', '8', '2018-03-07 20:38:25', '2018-03-07 20:38:25'),
(20, '13', '11', '2018-03-07 20:38:54', '2018-03-07 20:38:54'),
(21, '13', '5', '2018-03-07 20:40:23', '2018-03-07 20:40:23'),
(22, '13', '1', '2018-03-07 20:41:24', '2018-03-07 20:41:24'),
(23, '13', '4', '2018-03-07 20:42:28', '2018-03-07 20:42:28'),
(24, '14', '4', '2018-03-07 21:45:43', '2018-03-07 21:45:43'),
(25, '4', '4', '2018-03-09 05:26:40', '2018-03-09 05:26:40'),
(26, '4', '11', '2018-03-09 05:57:49', '2018-03-09 05:57:49'),
(27, '4', '1', '2018-03-09 06:22:21', '2018-03-09 06:22:21'),
(28, '4', '3', '2018-03-14 01:00:34', '2018-03-14 01:00:34'),
(29, '4', '8', '2018-03-21 11:42:04', '2018-03-21 11:42:04'),
(30, '4', '9', '2018-04-02 18:24:23', '2018-04-02 18:24:23'),
(31, '4', '7', '2018-04-02 18:40:34', '2018-04-02 18:40:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social_accounts`
--

CREATE TABLE `social_accounts` (
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `social_accounts`
--

INSERT INTO `social_accounts` (`user_id`, `provider_user_id`, `provider`, `created_at`, `updated_at`) VALUES
(4, '4498951633', 'TwitterProvider', '2018-02-08 06:56:41', '2018-02-08 06:56:41'),
(5, '949119102471241728', 'TwitterProvider', '2018-02-08 06:57:39', '2018-02-08 06:57:39'),
(4, '2078753989022881', 'FacebookProvider', '2018-02-08 06:57:51', '2018-02-08 06:57:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ingles` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `cv` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'vacio.pdf',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `ingles`, `phone`, `email`, `avatar`, `cv`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Valentin', 'Antonio Bautista', '', '12345', 'vale.residencia@gmail.com', '1520553442.png', 'nov-20.pdf', '', '0biYB1Luh6pbQbh7p1zZdIIaJ0xCApVJySosgMOgJDrKxP1O31XANcPQbmpl', '2018-02-08 06:56:41', '2018-02-08 06:56:41'),
(5, 'carlota', 'aguilar', '', '', 'vantonio.link@gmail.com', 'default.jpg', 'vacio.pdf', '', 'Q9FYosM5ol9QfA3GySizjMaWvn719sFsVRVdcGLMlAr4X3jaOJgIcTi9G8Ai', '2018-02-08 06:57:38', '2018-02-08 06:57:38'),
(6, 'samuel', '', '', '', 'samuel@gmail.com', 'default.jpg', 'vacio.pdf', '$2y$10$SLN.XoB/wHWP.jIm11GW/uUVKLGh9cjOzSaD5O.HG6/SDLYvlbNkS', 'WaHRGkFnGvaFbwQBW2hktKnGz1e6L8lavcc1zqmhhsuQv0Wn3AFphSUra1LE', '2018-02-08 07:04:30', '2018-02-08 07:04:30'),
(7, 'vale', '', '', '', 'vantonio.mx@gmail.com', 'default.jpg', 'vacio.pdf', '$2y$10$AGop2ByRmhYxhS6/kcAY5uUE5dvSifOm2e8SQCcBS.AFMifWn.9jy', 'mFUhVuvIW1xcfcEUhbIdhPLvFgQtVJZguSgqigryjk5TuXq8xio7Ub0ckZMB', '2018-02-20 05:43:02', '2018-02-20 05:43:02'),
(8, 'test name', '', '', '', 'test@gmial.com', 'default.jpg', 'vacio.pdf', '$2y$10$SGqVPilBpXXmLQdRtFyopeXWI.HxMVt14FSF/lTNmGK/wYi3hLKgq', 'AUaMUxvW0fOXoygOJYsMEvQBrcSpTbI6C0vyV682P6fv6d8t54UbxsnGoMJe', '2018-02-23 01:42:12', '2018-02-23 01:42:12'),
(9, 'Valentin', 'AB', '', '621632662', 'test+123@gmial.com', 'default.jpg', 'reporte_elusionMTY.pdf', '$2y$10$A/hJyosa.Wb4Qq4P5TjnsuRlCYfyjKAfkObTHhrEHUeVRDrual70O', 'a8g7vT9Crbq4eyC8rACXBEuWCAkL0wegnCmUbSg7F4SMzhr8flvLNDyCbLRZ', '2018-02-23 10:56:07', '2018-02-23 10:56:07'),
(10, 'pepe', 'SABSNB', '', '34434343', 'pepe@gmail.com', '1520397524.jpg', 'reporte_elusionMTY.pdf', '$2y$10$wVfnY/ksRYOKuZi98Fvzt.ucozHl14NBduuAbnrUjWGSiN7SJWd8O', 'mrtBJxOeLkr8GLK8D7nyNX6CuUK2mFxj5oec7Cfmq6RH9liIUnl4CDcQ9zgT', '2018-03-07 10:19:48', '2018-03-07 10:19:48'),
(11, 'maria', 'aguilar', '', '', 'maria@gmail.com', '1520399126.png', '21-31_agosto.pdf', '$2y$10$MCgIxqvk/LrdnmuhFLActO8uHl8NKz.UQfR6Bl9fKNEVR71dFP1N.', 'IlmqVLyNWOjlxFG9cIBasV46xq8pQ8eZJxjdcJZ6pbI0XGUdIeCEKfP77c3a', '2018-03-07 11:04:57', '2018-03-07 11:04:57'),
(12, 'brenda', '', '', '', 'brenda@gmail.com', '1520402459.png', 'vacio.pdf', '$2y$10$HpBnEoSPoIkqYiMtD.FYpuTk6hmG3x02yLpyZuFKAqkWNe9ZIJ4e.', 'xp1me51273m3NKMcIEUyi5J7uwDBu8YTCwiyOuz6ybvcwzOs24RqPklHQIBu', '2018-03-07 11:59:57', '2018-03-07 11:59:57'),
(13, 'new', 'new_test', '', '5427192112', 'new@gmail.com', '1520433278.png', 'player fijo.rtf', '$2y$10$REB9lRQhVJ8FMv1q9QJ26OzHwIaZ0lYY4r4vHyEPL9bwzD3ranCsW', 'SPtDMszH7ZrrydNhZUmwrtSCXiAqk8eP2oAVKcL2V3cm383nsmfCy3yEtDcs', '2018-03-07 20:33:39', '2018-03-07 20:33:39'),
(14, 'jose perez', 'antonio', '', '12345', 'jose@gmail.com', '1520437578.jpg', 'reporte_elusionMTY.pdf', '$2y$10$ZyjW7aZNW1DpLtH99dpkGe.AwJ9FIAKPnq0hQ7UW8d4.aCwMf6o.W', 'OBbcM3CXuHGUXBl0On20Bh90c0Dg2vhV3VbJSEU4TY4q3jdhyZuegOSEc6Tk', '2018-03-07 21:45:03', '2018-03-07 21:45:03'),
(15, 'maria carlota', '', '', '', 'mariacarlota@gmail.com', 'default.jpg', 'vacio.pdf', '$2y$10$ioyS0xc1lGd107aCPyjxmewlfzpoP1exWZuNDN6itynhpnoIbgt1O', '9J0pNAgPhriCmdf2BUG6rEmzRPmENIPL7XAuh8UGmwXMo3PG6mz4mwzAQb58', '2018-03-09 01:03:47', '2018-03-09 01:03:47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `postulates`
--
ALTER TABLE `postulates`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `postulates`
--
ALTER TABLE `postulates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
