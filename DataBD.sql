-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2021 a las 00:47:20
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fisioterapeutas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Coordinacion ', NULL, NULL),
(2, 'Movilidad', NULL, NULL),
(3, 'Precision', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio`
--

CREATE TABLE `ejercicio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ejercicio`
--

INSERT INTO `ejercicio` (`id`, `nombre`, `descripcion`, `categoria_id`, `created_at`, `updated_at`) VALUES
(1, 'Ejercicio 1', 'Cerrar lentamente la mano, todo lo que sea posible «hasta lograr hacer puño». Nos podemos ayudar de una pelota blanda o una esponja y apretarla.', 2, '2021-04-21 20:29:33', '2021-04-21 20:29:33'),
(2, 'Ejercicio2', 'Colocar una pequeña pelota de goma o esponja entre cada dedo y presionar durante unos segundos.', 2, '2021-04-21 20:31:41', '2021-04-21 20:31:41'),
(3, 'Ejercicio 3', 'Con el puño cerrado abrir los dedos lentamente,  una vez abiertos al máximo posible mantenemos la extensión unos segundos.', 2, '2021-04-21 20:33:53', '2021-04-21 20:33:53'),
(4, 'Sentadillas', 'Son muy buenas para fortalecer la musculatura glútea y de las piernas, lo que nos dará mayor estabilidad.   Nos colocaremos de pie con los pies en paralelo y abiertos a la anchura de las caderas. Nuestros brazos se colocarán a lo largo del cuerpo. Cogeremos aire y al soplar bajaremos con las rodillas paralelas sin sobrepasar las puntas de los dedos y elevaremos los brazos hasta colocarlos a la altura de los ojos.  Aguantaremos cinco segundos abajo y volveremos a subir. Realizaremos entre 8 y 10 repeticiones.', 1, '2021-04-21 20:37:55', '2021-04-21 20:37:55'),
(5, 'Ejercicio de Equilibrio', 'Nos colocaremos de pie con los brazos a lo largo del cuerpo. Cogeremos aire y al soplar separaremos y elevaremos una pierna y apoyaremos el peso del cuerpo sobre la que se queda apoyada en el suelo mientras colocamos los brazos en cruz.  Volveremos a la posición de inicio de nuevo al inspirar. Realizaremos el ejercicio diez veces hacia cada lado y cuando hayamos dominado la técnica podremos aumentar la dificultad aguantando en el aire cinco segundos antes de volver a la posición de inicio.', 1, '2021-04-21 20:51:34', '2021-04-21 20:51:34'),
(6, 'Al compás', 'Para realizar esta actividad son necesarias varias personas. Uno realiza una secuencia de sonidos dando golpes sobre la mesa o con otro objeto y los demás deben repetir la misma secuencia con el mismo ritmo. Este juego potencia la agudeza auditiva y la atención a través del reconocimiento de estímulos. También contribuye a mejorar la memoria.', 3, '2021-04-21 20:59:36', '2021-04-21 20:59:36'),
(7, 'Practicar puntería', 'Esta actividad para personas mayores es de las más sencillas de preparar y a la vez, de las más entretenidas. Se necesitan pocos materiales ya que solo necesitamos un objeto para lanzar y otros para ser apuntados o derribados .   Se puede realizar de pie, ejercitando el equilibrio y la fuerza o puede ser un tipo de gimnasia para mayores sentados, centrándonos en la coordinación de movimientos y la puntería.      ¿Qué hacer? Primero hay que escoger si vamos a derribar el objeto o a encestar. En el primer caso, recomendamos objetos que no se puedan romper ni ocasionar daño al resto de personas. En el segundo caso, podemos usar cestas, botellas y latas recicladas, tubos de papel higiénico, vasos de plástico, etc., y una pelota o bola de papel de plata para lanzar. También es muy divertido poner puntuaciones en los distintos objetos para hacer que el que tenga más puntos, gane.', 3, '2021-04-21 21:03:51', '2021-04-21 21:03:51'),
(8, 'Prueba', 'Prueba', 3, '2021-04-22 15:42:06', '2021-04-22 15:42:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio_imagen`
--

CREATE TABLE `ejercicio_imagen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ejercicio_id` bigint(20) UNSIGNED NOT NULL,
  `imagen_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `ejercicio_imagen`
--

INSERT INTO `ejercicio_imagen` (`id`, `ejercicio_id`, `imagen_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 3, 7, NULL, NULL),
(8, 3, 8, NULL, NULL),
(9, 3, 9, NULL, NULL),
(10, 4, 10, NULL, NULL),
(11, 5, 11, NULL, NULL),
(12, 5, 12, NULL, NULL),
(13, 6, 13, NULL, NULL),
(14, 7, 14, NULL, NULL),
(15, 8, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejer_usu`
--

CREATE TABLE `ejer_usu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ejercicio_id` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `especialidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id`, `especialidad`, `created_at`, `updated_at`) VALUES
(1, '    Fisioterapia ortopédica o traumatológica', NULL, NULL),
(2, '\r\n    Fisioterapia geriátrica', NULL, NULL),
(3, '\r\n    Fisioterapia reumatológica', NULL, NULL),
(4, '\r\n    Fisioterapia pediátrica', NULL, NULL),
(5, '\r\n    Fisioterapia neurológica', NULL, NULL),
(6, '\r\n    Fisioterapia del deporte', NULL, NULL),
(7, '\r\n    Fisioterapia respiratoria', NULL, NULL),
(8, '\r\n    Fisioterapia obstétrica', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad_fisioterapeuta`
--

CREATE TABLE `especialidad_fisioterapeuta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fisioterapeuta_id` bigint(20) UNSIGNED NOT NULL,
  `especialidad_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `especialidad_fisioterapeuta`
--

INSERT INTO `especialidad_fisioterapeuta` (`id`, `fisioterapeuta_id`, `especialidad_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisioterapeuta`
--

CREATE TABLE `fisioterapeuta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fisioterapeuta`
--

INSERT INTO `fisioterapeuta` (`id`, `nombre`, `ap1`, `ap2`, `cedula`, `edad`, `telefono`, `foto`, `nickname`, `password`, `correo`, `created_at`, `updated_at`) VALUES
(1, 'Andrea', 'Rojas', 'Gonzales', '1543276', 29, '2224326577', '/storage/uploads/xdoaiX9Vuc5QAMMMiaPDnxZU6zmMix5Xkwjz9vzc.png', 'Andrea', '15a6a6d0fad7bf560c8d11358012afa7', 'andrea@gmail.com', '2021-04-21 20:25:56', '2021-04-21 20:25:56'),
(2, 'Maria', 'Cabrera', 'Muñoz', '5234976', 27, '2223425766', '/storage/uploads/qf5MilnXm1Y5w41c7h2C1oKD7jG2jZkOc0LVUqA9.png', 'Mary', '77a394d517eb1407b08614b354ed3ceb', 'maria@gmail.com', '2021-04-21 20:27:15', '2021-04-21 20:27:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, '/storage/uploads/a22xnrJY5KRVZoRfAs9CdYvWIdB3jE1IGiqWGwQI.jpg', '2021-04-21 20:29:47', '2021-04-21 20:29:47'),
(2, '/storage/uploads/y6XuRRh9YWhjnj1ODNer6QNBGhDDbZjVtB4KkdLj.jpg', '2021-04-21 20:29:57', '2021-04-21 20:29:57'),
(3, '/storage/uploads/Pw64oyQOHwcxG5nIHDzxLcsgCek3uKSSOrT1zNBD.jpg', '2021-04-21 20:30:07', '2021-04-21 20:30:07'),
(4, '/storage/uploads/4ZkwOFiK51o4KChsu0AYFj3zsNpSe6jBMXOYRS7j.jpg', '2021-04-21 20:32:42', '2021-04-21 20:32:42'),
(5, '/storage/uploads/1QigOFuDWZMFEW57WopyD0GdTdVLgHo9J72oBgwh.jpg', '2021-04-21 20:32:52', '2021-04-21 20:32:52'),
(6, '/storage/uploads/wohU3as7qsCMIwCObS6VUeddWEn8uuoXaGpb27Gb.jpg', '2021-04-21 20:33:03', '2021-04-21 20:33:03'),
(7, '/storage/uploads/6qrdFdEolsyXl4ZEWnEh4PCAPFtZc37Xj2ihM5DX.jpg', '2021-04-21 20:34:46', '2021-04-21 20:34:46'),
(8, '/storage/uploads/US8nGO5DVX0jhUpsKcSNHqOP73ztnYqJZtKo3YAW.jpg', '2021-04-21 20:34:56', '2021-04-21 20:34:56'),
(9, '/storage/uploads/lAVkJI1ESNBVE6RMSwnRFesWtFRNcBbZgGXgAHV6.jpg', '2021-04-21 20:35:03', '2021-04-21 20:35:03'),
(10, '/storage/uploads/L1U4LxLrxQAATRfCGJDPdCS2Tuo45nd7biNeMYw6.jpg', '2021-04-21 20:38:37', '2021-04-21 20:38:37'),
(11, '/storage/uploads/ObcgVw2JPpxXYF4U3PjlD3CANIDucvPLaW1WFj4f.png', '2021-04-21 20:51:51', '2021-04-21 20:51:51'),
(12, '/storage/uploads/J7fjB9eJgyWFZ5RLYhG6T2XmzyoxBSkWLit3DZBc.png', '2021-04-21 20:52:00', '2021-04-21 20:52:00'),
(13, '/storage/uploads/DLqhtrSlqjlMJWk4nTyYwe78eejml6xpr6h0QTz4.png', '2021-04-21 21:00:33', '2021-04-21 21:00:33'),
(14, '/storage/uploads/bjndKmxZvVKP42ZLWt97h0UkzFizbvVzsZaBM2Kl.jpg', '2021-04-21 21:03:58', '2021-04-21 21:03:58'),
(15, '/storage/uploads/SviZP7VJaMNIc4kkEAszBasqO4A8oDi9k2F3RKKt.png', '2021-04-22 15:42:19', '2021-04-22 15:42:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `monto` double(4,2) NOT NULL,
  `fechainicial` date NOT NULL,
  `fechafinal` date NOT NULL,
  `usu_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2019_08_19_000000_create_failed_jobs_table', 1),
(32, '2021_04_10_000147_categoria', 1),
(33, '2021_04_10_000534_especialidad', 1),
(34, '2021_04_10_000535_fisioterapeuta', 1),
(35, '2021_04_10_000647_ejercicio', 1),
(36, '2021_04_10_001711_tipousuario', 1),
(37, '2021_04_10_001712_usuario', 1),
(38, '2021_04_10_001713_ingreso', 1),
(39, '2021_04_13_231051_ejer_usu', 1),
(40, '2021_04_13_232553_fisio_espe', 1),
(41, '2021_04_17_204115_imagen', 1),
(42, '2021_04_17_204335_ejercicio_imagen', 1);

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
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipousuario`
--

INSERT INTO `tipousuario` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', NULL, NULL),
(2, 'Usuario', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ap2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` enum('Masculino','Femenino') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipousuario_id` bigint(20) UNSIGNED NOT NULL,
  `fisio_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `ap1`, `ap2`, `edad`, `foto`, `nickname`, `correo`, `contra`, `genero`, `tipousuario_id`, `fisio_id`, `created_at`, `updated_at`) VALUES
(1, 'Alberto', 'Tepale', 'Diagas', 21, '/storage/uploads/WsZ5CPU0Qbcv0QkStZNUfuyT3ifde5AhAWOSEnbG.jpg', 'alberto1234', 'alberto1234@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Masculino', 2, NULL, '2021-08-29 03:06:09', '2021-08-29 03:06:09');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ejercicio_categoria_id_foreign` (`categoria_id`);

--
-- Indices de la tabla `ejercicio_imagen`
--
ALTER TABLE `ejercicio_imagen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ejercicio_imagen_ejercicio_id_foreign` (`ejercicio_id`),
  ADD KEY `ejercicio_imagen_imagen_id_foreign` (`imagen_id`);

--
-- Indices de la tabla `ejer_usu`
--
ALTER TABLE `ejer_usu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ejer_usu_ejercicio_id_foreign` (`ejercicio_id`),
  ADD KEY `ejer_usu_usuario_id_foreign` (`usuario_id`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especialidad_fisioterapeuta`
--
ALTER TABLE `especialidad_fisioterapeuta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `especialidad_fisioterapeuta_fisioterapeuta_id_foreign` (`fisioterapeuta_id`),
  ADD KEY `especialidad_fisioterapeuta_especialidad_id_foreign` (`especialidad_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `fisioterapeuta`
--
ALTER TABLE `fisioterapeuta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingreso_usu_id_foreign` (`usu_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_tipousuario_id_foreign` (`tipousuario_id`),
  ADD KEY `usuario_fisio_id_foreign` (`fisio_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ejercicio_imagen`
--
ALTER TABLE `ejercicio_imagen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `ejer_usu`
--
ALTER TABLE `ejer_usu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `especialidad_fisioterapeuta`
--
ALTER TABLE `especialidad_fisioterapeuta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fisioterapeuta`
--
ALTER TABLE `fisioterapeuta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ejercicio`
--
ALTER TABLE `ejercicio`
  ADD CONSTRAINT `ejercicio_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `ejercicio_imagen`
--
ALTER TABLE `ejercicio_imagen`
  ADD CONSTRAINT `ejercicio_imagen_ejercicio_id_foreign` FOREIGN KEY (`ejercicio_id`) REFERENCES `ejercicio` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ejercicio_imagen_imagen_id_foreign` FOREIGN KEY (`imagen_id`) REFERENCES `imagen` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ejer_usu`
--
ALTER TABLE `ejer_usu`
  ADD CONSTRAINT `ejer_usu_ejercicio_id_foreign` FOREIGN KEY (`ejercicio_id`) REFERENCES `ejercicio` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ejer_usu_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `especialidad_fisioterapeuta`
--
ALTER TABLE `especialidad_fisioterapeuta`
  ADD CONSTRAINT `especialidad_fisioterapeuta_especialidad_id_foreign` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidad` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `especialidad_fisioterapeuta_fisioterapeuta_id_foreign` FOREIGN KEY (`fisioterapeuta_id`) REFERENCES `fisioterapeuta` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD CONSTRAINT `ingreso_usu_id_foreign` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_fisio_id_foreign` FOREIGN KEY (`fisio_id`) REFERENCES `fisioterapeuta` (`id`),
  ADD CONSTRAINT `usuario_tipousuario_id_foreign` FOREIGN KEY (`tipousuario_id`) REFERENCES `tipousuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
