-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2020 a las 08:24:38
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `school`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos`
--

CREATE TABLE `administrativos` (
  `idAdminitrativo` int(10) UNSIGNED NOT NULL,
  `NombreAd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoPAd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoMAd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelefonoAd` int(11) NOT NULL,
  `Puesto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CorreoAd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `administrativos`
--

INSERT INTO `administrativos` (`idAdminitrativo`, `NombreAd`, `ApellidoPAd`, `ApellidoMAd`, `TelefonoAd`, `Puesto`, `CorreoAd`, `created_at`, `updated_at`) VALUES
(1, 'alonso', 'Muñoz', 'Vazquez', 22222345, 'lic', 'alonso@gmail.com', '2020-11-16 04:34:05', '2020-11-23 11:51:09'),
(3, 'benito', 'vargas', 'gracia', 2222, 'ptc', 'benito@gmail.com', '2020-11-23 10:38:11', '2020-11-23 11:39:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idMatricula` int(10) UNSIGNED NOT NULL,
  `NombreA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoPA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoMA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CorreoA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DireccionA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SexoA` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TipoSangre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelefonoT` int(11) NOT NULL,
  `Estatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idMatricula`, `NombreA`, `ApellidoPA`, `ApellidoMA`, `CorreoA`, `DireccionA`, `SexoA`, `TipoSangre`, `TelefonoT`, `Estatus`, `created_at`, `updated_at`) VALUES
(1, 'lizbeth', 'lopez', 'lopez', 'jmfjfj', 'dkdk', 'lldl', 'lll', 23, 2, '2020-11-16 05:04:29', '2020-11-23 12:42:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificicacion`
--

CREATE TABLE `calificicacion` (
  `idCalificacion` int(10) UNSIGNED NOT NULL,
  `Calificacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idMatricula` int(10) UNSIGNED NOT NULL,
  `idMateria` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `idCarrera` int(255) UNSIGNED NOT NULL,
  `Carrera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`idCarrera`, `Carrera`, `created_at`, `updated_at`) VALUES
(1, 'Ingenieria en software', '2020-11-17 04:12:24', '2020-11-17 04:12:24'),
(14, 'musica', '2020-11-22 15:27:16', '2020-11-23 11:17:44'),
(16, 'iws', '2020-11-22 16:09:08', '2020-11-22 16:09:08'),
(17, 'electronica', '2020-11-22 16:09:26', '2020-11-22 16:09:26'),
(20, 'Biotecnología', '2020-11-23 08:43:34', '2020-11-23 08:43:34'),
(21, 'informatica', '2020-11-23 08:54:56', '2020-11-23 08:54:56'),
(22, 'poo', '2020-11-23 10:38:28', '2020-11-23 10:38:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `idCedula` int(10) UNSIGNED NOT NULL,
  `NombreD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoPD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CorreoD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cedula` int(11) NOT NULL,
  `Estatus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`idCedula`, `NombreD`, `ApellidoPD`, `ApellidoM`, `CorreoD`, `Telefono`, `Cedula`, `Estatus`, `created_at`, `updated_at`) VALUES
(1, 'francisco', 'perez', 'cerro', 'kkk@gmail.com', '2345', 2345, 2, '2020-11-16 11:02:00', '2020-11-16 11:02:00'),
(7, 'veronica', 'perez', 'sanchez', 'vero@upam.edu.mx', '2345', 2222, 1, '2020-11-23 13:16:51', '2020-11-23 13:16:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentemateria`
--

CREATE TABLE `docentemateria` (
  `idDocenteMateria` int(10) UNSIGNED NOT NULL,
  `idCedula` int(10) UNSIGNED NOT NULL,
  `idMateria` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `graduados`
--

CREATE TABLE `graduados` (
  `idGraduado` int(10) UNSIGNED NOT NULL,
  `promedioGeneral` int(255) NOT NULL,
  `idGrupo` int(10) UNSIGNED NOT NULL,
  `idMatricula` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `graduados`
--

INSERT INTO `graduados` (`idGraduado`, `promedioGeneral`, `idGrupo`, `idMatricula`, `created_at`, `updated_at`) VALUES
(1, 9, 3, 1, '2020-11-18 11:08:59', '2020-11-18 11:08:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `idGrupo` int(10) UNSIGNED NOT NULL,
  `Grupo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FechaI` date NOT NULL,
  `FechaF` date NOT NULL,
  `idCarrera` int(10) UNSIGNED NOT NULL,
  `idSemestre` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`idGrupo`, `Grupo`, `FechaI`, `FechaF`, `idCarrera`, `idSemestre`, `created_at`, `updated_at`) VALUES
(3, 'G1', '2020-11-13', '2020-11-18', 1, 3, '2020-11-17 10:03:17', '2020-11-17 10:03:17'),
(4, 'g2', '2020-11-17', '2020-11-20', 1, 3, '2020-11-17 10:05:30', '2020-11-17 10:05:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `idMateria` int(10) UNSIGNED NOT NULL,
  `NombreM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Horas` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`idMateria`, `NombreM`, `Horas`, `created_at`, `updated_at`) VALUES
(1, 'Matematicas', '16:34:00', '2020-11-17 02:35:48', '2020-11-17 02:35:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiasemestre`
--

CREATE TABLE `materiasemestre` (
  `idMateriaSemestre` int(10) UNSIGNED NOT NULL,
  `idSemestre` int(10) UNSIGNED NOT NULL,
  `idMateria` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `materiasemestre`
--

INSERT INTO `materiasemestre` (`idMateriaSemestre`, `idSemestre`, `idMateria`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL),
(2, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_15_072522_create_administrativos_table', 1),
(5, '2020_11_15_185901_create__alumno_table', 1),
(6, '2020_11_15_191636_create__personal_table', 1),
(7, '2020_11_15_192252_create__docente_table', 1),
(8, '2020_11_15_192829_create__materia_table', 1),
(9, '2020_11_15_193310_create__semestre_table', 1),
(10, '2020_11_15_194321_create__materia_semestre_table', 1),
(11, '2020_11_15_195240_create__carrera_table', 1),
(12, '2020_11_15_195526_create__calificacion_table', 1),
(13, '2020_11_15_201318_create__docente_materia_table', 1),
(14, '2020_11_15_201814_create__grupo_table', 1),
(15, '2020_11_15_202434_create__graduados_table', 1),
(16, '2020_11_15_203714_create__profesor_materia_table', 1),
(17, '2020_11_15_205631_create__reportes_table', 2),
(18, '2020_11_15_205926_create__pago_table', 3),
(19, '2020_11_15_210949_create__reinscripcion_table', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `idPagos` int(10) UNSIGNED NOT NULL,
  `TipoP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NombreB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Precio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Referencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idMatricula` int(10) UNSIGNED NOT NULL,
  `estatus` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `idPersonal` int(10) UNSIGNED NOT NULL,
  `NombreP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoPP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ApellidoMP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CorreoP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DireccionP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EdadP` int(11) NOT NULL,
  `TelefonoP` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`idPersonal`, `NombreP`, `ApellidoPP`, `ApellidoMP`, `CorreoP`, `DireccionP`, `EdadP`, `TelefonoP`, `created_at`, `updated_at`) VALUES
(1, 'jorge', 'Pedrerol', 'Hernandez', 'stk@hotmail.com', 'jdjd', 12, 2344, '2020-11-16 11:50:48', '2020-11-16 11:50:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesormateria`
--

CREATE TABLE `profesormateria` (
  `idProfesorMateria` int(10) UNSIGNED NOT NULL,
  `idCedula` int(10) UNSIGNED NOT NULL,
  `idMateria` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reinscripcion`
--

CREATE TABLE `reinscripcion` (
  `idReinscripcion` int(10) UNSIGNED NOT NULL,
  `estatus` int(255) NOT NULL,
  `idPagos` int(10) UNSIGNED NOT NULL,
  `idAdminitrativo` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `idReportes` int(10) UNSIGNED NOT NULL,
  `NombreR` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Castigo` int(255) NOT NULL,
  `idMatricula` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`idReportes`, `NombreR`, `Castigo`, `idMatricula`, `created_at`, `updated_at`) VALUES
(1, 'ayudar en la administracion', 7, 1, '2020-11-18 11:24:33', '2020-11-18 11:24:33'),
(2, 'cortar el jardin', 3, 1, '2020-11-18 11:49:05', '2020-11-18 11:49:05'),
(3, 'ser', 2, 1, '2020-11-18 12:12:12', '2020-11-18 12:12:12'),
(4, 's', 4, 1, '2020-11-18 12:12:23', '2020-11-18 12:12:23'),
(5, 'serw', 4, 1, '2020-11-18 12:12:34', '2020-11-18 12:12:34'),
(6, 'popfpf', 1, 1, '2020-11-18 12:12:47', '2020-11-18 12:12:47'),
(7, 'lkkf', 4, 1, '2020-11-18 12:13:02', '2020-11-18 12:13:02'),
(8, 'qwe', 9, 1, '2020-11-18 12:17:01', '2020-11-18 12:17:01'),
(9, 'registrar entradas', 20, 1, '2020-11-18 12:18:37', '2020-11-18 12:18:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `idSemestre` int(10) UNSIGNED NOT NULL,
  `Semestre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CicloI` date NOT NULL,
  `CicloF` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`idSemestre`, `Semestre`, `CicloI`, `CicloF`, `created_at`, `updated_at`) VALUES
(3, '4', '2020-11-10', '2020-11-23', '2020-11-17 03:57:03', '2020-11-17 03:57:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD PRIMARY KEY (`idAdminitrativo`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idMatricula`);

--
-- Indices de la tabla `calificicacion`
--
ALTER TABLE `calificicacion`
  ADD PRIMARY KEY (`idCalificacion`),
  ADD KEY `calificicacion_idmatricula_foreign` (`idMatricula`),
  ADD KEY `calificicacion_idmateria_foreign` (`idMateria`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idCarrera`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`idCedula`);

--
-- Indices de la tabla `docentemateria`
--
ALTER TABLE `docentemateria`
  ADD PRIMARY KEY (`idDocenteMateria`),
  ADD KEY `docentemateria_idcedula_foreign` (`idCedula`),
  ADD KEY `docentemateria_idmateria_foreign` (`idMateria`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `graduados`
--
ALTER TABLE `graduados`
  ADD PRIMARY KEY (`idGraduado`),
  ADD KEY `graduados_idgrupo_foreign` (`idGrupo`),
  ADD KEY `graduados_idmatricula_foreign` (`idMatricula`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`idGrupo`),
  ADD KEY `grupo_idcarrera_foreign` (`idCarrera`),
  ADD KEY `grupo_idsemestre_foreign` (`idSemestre`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`idMateria`);

--
-- Indices de la tabla `materiasemestre`
--
ALTER TABLE `materiasemestre`
  ADD PRIMARY KEY (`idMateriaSemestre`),
  ADD KEY `materiasemestre_idsemestre_foreign` (`idSemestre`),
  ADD KEY `materiasemestre_idmateria_foreign` (`idMateria`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`idPagos`),
  ADD KEY `pago_idmatricula_foreign` (`idMatricula`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`idPersonal`);

--
-- Indices de la tabla `profesormateria`
--
ALTER TABLE `profesormateria`
  ADD PRIMARY KEY (`idProfesorMateria`),
  ADD KEY `profesormateria_idcedula_foreign` (`idCedula`),
  ADD KEY `profesormateria_idmateria_foreign` (`idMateria`);

--
-- Indices de la tabla `reinscripcion`
--
ALTER TABLE `reinscripcion`
  ADD PRIMARY KEY (`idReinscripcion`),
  ADD KEY `reinscripcion_idpagos_foreign` (`idPagos`),
  ADD KEY `reinscripcion_idadminitrativo_foreign` (`idAdminitrativo`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`idReportes`),
  ADD KEY `reportes_idmatricula_foreign` (`idMatricula`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`idSemestre`);

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
-- AUTO_INCREMENT de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  MODIFY `idAdminitrativo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idMatricula` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `calificicacion`
--
ALTER TABLE `calificicacion`
  MODIFY `idCalificacion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `idCarrera` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `idCedula` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `docentemateria`
--
ALTER TABLE `docentemateria`
  MODIFY `idDocenteMateria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `graduados`
--
ALTER TABLE `graduados`
  MODIFY `idGraduado` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `idGrupo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `idMateria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `materiasemestre`
--
ALTER TABLE `materiasemestre`
  MODIFY `idMateriaSemestre` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `idPagos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `idPersonal` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `profesormateria`
--
ALTER TABLE `profesormateria`
  MODIFY `idProfesorMateria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reinscripcion`
--
ALTER TABLE `reinscripcion`
  MODIFY `idReinscripcion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `idReportes` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
  MODIFY `idSemestre` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificicacion`
--
ALTER TABLE `calificicacion`
  ADD CONSTRAINT `calificicacion_idmateria_foreign` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`),
  ADD CONSTRAINT `calificicacion_idmatricula_foreign` FOREIGN KEY (`idMatricula`) REFERENCES `alumno` (`idMatricula`);

--
-- Filtros para la tabla `docentemateria`
--
ALTER TABLE `docentemateria`
  ADD CONSTRAINT `docentemateria_idcedula_foreign` FOREIGN KEY (`idCedula`) REFERENCES `docente` (`idCedula`),
  ADD CONSTRAINT `docentemateria_idmateria_foreign` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`);

--
-- Filtros para la tabla `graduados`
--
ALTER TABLE `graduados`
  ADD CONSTRAINT `graduados_idgrupo_foreign` FOREIGN KEY (`idGrupo`) REFERENCES `grupo` (`idGrupo`),
  ADD CONSTRAINT `graduados_idmatricula_foreign` FOREIGN KEY (`idMatricula`) REFERENCES `alumno` (`idMatricula`);

--
-- Filtros para la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD CONSTRAINT `grupo_idcarrera_foreign` FOREIGN KEY (`idCarrera`) REFERENCES `carrera` (`idCarrera`),
  ADD CONSTRAINT `grupo_idsemestre_foreign` FOREIGN KEY (`idSemestre`) REFERENCES `semestre` (`idSemestre`);

--
-- Filtros para la tabla `materiasemestre`
--
ALTER TABLE `materiasemestre`
  ADD CONSTRAINT `materiasemestre_idmateria_foreign` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`),
  ADD CONSTRAINT `materiasemestre_idsemestre_foreign` FOREIGN KEY (`idSemestre`) REFERENCES `semestre` (`idSemestre`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_idmatricula_foreign` FOREIGN KEY (`idMatricula`) REFERENCES `alumno` (`idMatricula`);

--
-- Filtros para la tabla `profesormateria`
--
ALTER TABLE `profesormateria`
  ADD CONSTRAINT `profesormateria_idcedula_foreign` FOREIGN KEY (`idCedula`) REFERENCES `docente` (`idCedula`),
  ADD CONSTRAINT `profesormateria_idmateria_foreign` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`);

--
-- Filtros para la tabla `reinscripcion`
--
ALTER TABLE `reinscripcion`
  ADD CONSTRAINT `reinscripcion_idadminitrativo_foreign` FOREIGN KEY (`idAdminitrativo`) REFERENCES `administrativos` (`idAdminitrativo`),
  ADD CONSTRAINT `reinscripcion_idpagos_foreign` FOREIGN KEY (`idPagos`) REFERENCES `pago` (`idPagos`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_idmatricula_foreign` FOREIGN KEY (`idMatricula`) REFERENCES `alumno` (`idMatricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
