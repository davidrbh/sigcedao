-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2023 a las 14:17:02
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sigcedao`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--

CREATE TABLE `aula` (
  `id_aula` bigint(20) NOT NULL,
  `nombre_aula` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `aula`
--

INSERT INTO `aula` (`id_aula`, `nombre_aula`, `status`) VALUES
(1, 'Primero', 1),
(2, 'Segundo', 1),
(3, 'Tercero', 1),
(4, 'Cuarto', 1),
(5, 'Quinto', 1),
(6, 'Sexto', 1),
(7, 'CRA', 1),
(8, 'CBIT', 1),
(9, 'Inicial', 1),
(10, 'Aula integrada', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desc_seccion`
--

CREATE TABLE `desc_seccion` (
  `id_desc_seccion` bigint(20) NOT NULL,
  `nombre_seccion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `aula_id` bigint(20) DEFAULT NULL,
  `turno_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `desc_seccion`
--

INSERT INTO `desc_seccion` (`id_desc_seccion`, `nombre_seccion`, `aula_id`, `turno_id`) VALUES
(1, 'Seleccione:', NULL, 1),
(2, 'Seleccione:', NULL, 2),
(3, 'Primero A', 1, 1),
(4, 'Primero B', 1, 2),
(5, 'Segundo A', 2, 1),
(6, 'Segundo B', 2, 2),
(7, 'Tercero A', 3, 1),
(8, 'Tercero B', 3, 2),
(9, 'Cuarto A', 4, 1),
(10, 'Cuarto B', 4, 2),
(11, 'Quinto A', 5, 1),
(12, 'Quinto B', 5, 2),
(13, 'Sexto A', 6, 1),
(14, 'Sexto B', 6, 2),
(15, 'Inicial A', 9, 1),
(16, 'Inicial B', 9, 2),
(17, 'CRA A', 7, 1),
(18, 'CRA B', 7, 2),
(19, 'CBIT A', 8, 1),
(20, 'CBIT B', 8, 2),
(21, 'Aula integrada A', 10, 1),
(22, 'Aula integrada B', 10, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_docentes` bigint(20) NOT NULL,
  `especialidad_id` bigint(20) NOT NULL,
  `nombre_docente` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido_docente` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nacionalidad_docente` varchar(5) COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT 'V-',
  `cedula_docente` int(11) NOT NULL,
  `celular_docente` bigint(20) NOT NULL,
  `correo_docente` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docentes`, `especialidad_id`, `nombre_docente`, `apellido_docente`, `nacionalidad_docente`, `cedula_docente`, `celular_docente`, `correo_docente`, `status`) VALUES
(1, 1, 'Ana', 'Deyan', '', 4416939, 4125403027, 'anamer2210@gmail.com', 1),
(2, 1, 'Analix', 'Hernandez', 'V-', 14909718, 4241697285, 'analix.1979@gmail.com', 1),
(3, 1, 'Jose', 'Duarte', 'V-', 10421528, 2125741416, 'jose_duarte@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id_especialidad` bigint(20) NOT NULL,
  `nombre_especialidad` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id_especialidad`, `nombre_especialidad`, `descripcion`, `status`) VALUES
(1, 'Docente De Aula', 'Maestro De Aula', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` bigint(20) NOT NULL,
  `desc_estado` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `desc_estado`) VALUES
(1, 'Distrito Capital'),
(3, 'Amazonas'),
(4, 'Anzoátegui'),
(5, 'Apure'),
(6, 'Aragua'),
(7, 'Barinas'),
(8, 'Bolívar'),
(9, 'Carabobo'),
(10, 'Cojedes'),
(11, 'Delta Amacuro'),
(12, 'Falcón'),
(13, 'Guárico'),
(14, 'Lara'),
(15, 'Mérida'),
(16, 'Miranda'),
(17, 'Monagas'),
(18, 'Nueva Esparta'),
(19, 'Portuguesa'),
(20, 'Sucre'),
(21, 'Táchira'),
(22, 'Trujillo'),
(23, 'La Guaira'),
(24, 'Yaracuy'),
(25, 'Zulia'),
(26, 'Dependencias Federales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiante` bigint(20) NOT NULL,
  `representante_id` bigint(20) NOT NULL,
  `nombres` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellidos` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `genero` int(11) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `grado_cursado` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `aula` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `periodo_escolar` year(4) NOT NULL,
  `cedula_escolar` varchar(30) COLLATE utf8mb4_swedish_ci NOT NULL,
  `turno_cursado` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id_modulo` bigint(20) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `desc_modulo` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id_modulo`, `titulo`, `desc_modulo`, `status`) VALUES
(1, 'Dashboard', 'dashboard', 1),
(2, 'Roles', 'roles', 1),
(3, 'Usuarios', 'usuarios', 1),
(4, 'Personal Administrativo', 'Personal administrativo', 1),
(5, 'Secciones', 'Aulas de clase', 1),
(6, 'Docentes', 'Docentes de aulas', 1),
(7, 'Especialidad', 'Especialidad de docentes', 1),
(8, 'Estudiantes Basica', 'Estudiantes de basica', 1),
(9, 'Estudiantes Inicial', 'Estudiantes de inicial', 1),
(10, 'Planillas', 'Documentos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permisos` bigint(20) NOT NULL,
  `rol_id` bigint(20) NOT NULL,
  `modulo_id` bigint(20) NOT NULL,
  `r` int(11) NOT NULL,
  `w` int(11) NOT NULL,
  `u` int(11) NOT NULL,
  `d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permisos`, `rol_id`, `modulo_id`, `r`, `w`, `u`, `d`) VALUES
(37, 2, 1, 0, 0, 0, 0),
(38, 2, 2, 0, 0, 0, 0),
(39, 2, 3, 0, 0, 0, 0),
(40, 1, 1, 1, 1, 1, 1),
(41, 1, 2, 1, 1, 1, 1),
(42, 1, 3, 1, 1, 1, 1),
(43, 1, 4, 1, 1, 1, 1),
(44, 1, 5, 1, 1, 1, 1),
(45, 1, 6, 1, 1, 1, 1),
(46, 1, 7, 1, 1, 1, 1),
(47, 1, 8, 1, 1, 1, 1),
(48, 1, 9, 1, 1, 1, 1),
(49, 1, 10, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_adminitrativo`
--

CREATE TABLE `personal_adminitrativo` (
  `personal_id` bigint(20) NOT NULL,
  `nombre_personal` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido_personal` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nacionalidad_personal` varchar(10) COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT 'V-',
  `cedula_personal` int(11) NOT NULL,
  `telefono_personal` bigint(20) NOT NULL,
  `correo_personal` varchar(256) COLLATE utf8mb4_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `personal_adminitrativo`
--

INSERT INTO `personal_adminitrativo` (`personal_id`, `nombre_personal`, `apellido_personal`, `nacionalidad_personal`, `cedula_personal`, `telefono_personal`, `correo_personal`) VALUES
(1, 'Jose', 'Gutierrez', 'V-', 14925414, 2124215678, 'jose@example.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` bigint(20) NOT NULL,
  `nombre_rol` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`, `descripcion`, `status`) VALUES
(1, 'Administrador', 'Administrador', 1),
(2, 'Directora', 'Directora', 1),
(3, 'Docente', 'Docente de aula', 1),
(4, 'Personal administrativo', 'Personal administrativo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id_seccion` bigint(20) NOT NULL,
  `desc_seccion_id` bigint(20) DEFAULT NULL,
  `docente_id` bigint(20) DEFAULT NULL,
  `periodo_escolar` varchar(226) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id_seccion`, `desc_seccion_id`, `docente_id`, `periodo_escolar`, `status`) VALUES
(1, 3, 1, '2023-2024', 1),
(2, 4, 2, '2023-2024', 1),
(3, 5, 3, '2023-2024', 1),
(5, 1, NULL, '1', 1),
(6, 2, NULL, '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id_turno` bigint(20) NOT NULL,
  `nombre_turno` text COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id_turno`, `nombre_turno`) VALUES
(1, 'Diurno'),
(2, 'Vespertino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` bigint(20) NOT NULL,
  `cedula` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  `nombres` varchar(80) COLLATE utf8_swedish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `email_user` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(75) COLLATE utf8_swedish_ci NOT NULL,
  `token` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `rol_id` bigint(20) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `cedula`, `nombres`, `apellidos`, `telefono`, `email_user`, `password`, `token`, `rol_id`, `datecreated`, `status`) VALUES
(1, 'V-24723325', 'Josue Sebastian', 'Hernandez Barrera', '0424-2029800', '7396davidrbh@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', 1, '2022-07-23 19:51:47', 1),
(2, 'V-14909718', 'Analix Dubraska', 'Hernandez Deyan', '0424-1697285', 'analix@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'b82c33bd7a7f6812facf-4419b02e4616b610625a-d4990f15b14a7dfe1fff-5ad55286698f85cdd', 2, '2022-07-24 21:14:03', 1),
(9, 'V-3250811', 'Jildry', 'Marquez', '0212-8993222', 'mjildry23@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', 1, '2022-07-28 00:21:58', 1),
(10, 'V-13528981', 'Richard', 'Parra', '0424-2939291', 'richard66np@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', 1, '2022-08-04 20:21:49', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id_aula`);

--
-- Indices de la tabla `desc_seccion`
--
ALTER TABLE `desc_seccion`
  ADD PRIMARY KEY (`id_desc_seccion`),
  ADD KEY `aula_id` (`aula_id`),
  ADD KEY `turno_id` (`turno_id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_docentes`),
  ADD KEY `especialidad_id` (`especialidad_id`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD KEY `representante_id` (`representante_id`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id_modulo`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permisos`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `modulo_id` (`modulo_id`);

--
-- Indices de la tabla `personal_adminitrativo`
--
ALTER TABLE `personal_adminitrativo`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id_seccion`),
  ADD KEY `desc_seccion_id` (`desc_seccion_id`),
  ADD KEY `docente_id` (`docente_id`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aula`
--
ALTER TABLE `aula`
  MODIFY `id_aula` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `desc_seccion`
--
ALTER TABLE `desc_seccion`
  MODIFY `id_desc_seccion` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docentes` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id_especialidad` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiante` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id_modulo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permisos` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `personal_adminitrativo`
--
ALTER TABLE `personal_adminitrativo`
  MODIFY `personal_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id_seccion` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `desc_seccion`
--
ALTER TABLE `desc_seccion`
  ADD CONSTRAINT `desc_seccion_ibfk_1` FOREIGN KEY (`turno_id`) REFERENCES `turno` (`id_turno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `desc_seccion_ibfk_2` FOREIGN KEY (`aula_id`) REFERENCES `aula` (`id_aula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidad` (`id_especialidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id_modulo`),
  ADD CONSTRAINT `permisos_ibfk_3` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD CONSTRAINT `seccion_ibfk_1` FOREIGN KEY (`docente_id`) REFERENCES `docentes` (`id_docentes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seccion_ibfk_2` FOREIGN KEY (`desc_seccion_id`) REFERENCES `desc_seccion` (`id_desc_seccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;